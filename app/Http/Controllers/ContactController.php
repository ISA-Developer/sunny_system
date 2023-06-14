<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    // ----------------------------------------------------------------//
    private function create_contact(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($request->all(), [
            'full-name' =>'required|max:255',
        ]);

        if ($validator->fails()) {
            Alert::error('error', 'Full name is not empty');
            return redirect()->back();
        }

        $contact = new Customer();
        $contact->id_customer = uuid_create();
        $contact->nama_customer = $data["full-name"]; 
        $contact->email = $data["email"]; 
        $contact->phone_number = $data["mobile-phone"]; 
        // $contact->customer_number = $data["customer-number"];

        return $contact->save();
    }

    private function view_contact($id_contact)
    {
        $contact = Customer::where("id_customer", "=", $id_contact)->first();
        if (empty($contact)) {
            return abort(404);
        }

        return $contact;
    }
    // ----------------------------------------------------------------//



    public function index()
    {
        $contacts = Customer::all();
        $all_column = collect(Schema::getColumnListing("customer_managements"));
        $all_column_formatted = HelperController::columnNameToTextFormatted($all_column);
        $model_name = Customer::class;
        return view("Contact/contact", compact(["contacts", 'all_column', 'all_column_formatted', 'model_name']));
    }

    public function create(Request $request)
    {
        if($this->create_contact($request)){
            Alert::success('success', "Contact saved successfully");
            return redirect()->back();
        }
        Alert::error('error', "Contact creation failed");
        return back()->withErrors($this->create_contact($request));
    }

    public function view($id_contact)
    {
        $contact = $this->view_contact($id_contact);
        $companies = Company::all();
        return view("Contact/view", compact("contact", "companies"));
    }
}
