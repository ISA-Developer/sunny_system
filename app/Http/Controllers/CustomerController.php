<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    public function index()
    {
        return view("Customer/customer");
    }
    public function create(Request $request)
    {
        $data = $request->all();

        $message =[
            "required" => "This file is requiered!"
        ];

        $rules = [
            "nama-customer" => "required",
        ];

        $validation = Validator::make($data, $rules, $message);
        if ($validation->fails()) {
            Alert::error("error","Failed create customer, Incorrect input!")->autoClose(3000);
            // dd($request);
            $request->old("name-customer");
            $request->old("email");
            $request->old("phone-number");
            $request->old("website");
            redirect()->back()->with("modal", $data["modal-name"]);
        }

        $validation->validate();

        if(Customer::create_customer($request)){
            Alert::success("Success", "Customer created successfully");
            return redirect()->back();
        }else{
            Alert::error("Error", "Failed ");
            return redirect()->back();
        }
        
    }
}
