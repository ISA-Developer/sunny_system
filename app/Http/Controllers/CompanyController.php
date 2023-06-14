<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyAddress;
use App\Models\CompanyDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Schema;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyController extends Controller
{
    // ----------------------------------------------------------------//
    private function company_create(Request $request)
    {
        $data = $request->all();
        $company = new Company();
        $company->id_companies = uuid_create();
        $company->company_name = $data['company-name'];
        $company->company_email = $data['email'];
        $company->primary_phone = $data['phone-number'];
        $company->website = $data['website'];
        $company->fax = $data['fax'] ?? null;
        // $company->category = $data['category'];
        // $company->industry = $data['industry'];
        $company->check_customer = $request->has("check-customer");
        $company->check_partner = $request->has("check-partner");
        $company->check_our_company = $request->has("check-our-company");

        return $company->save();
    }

    private function company_update(Request $request)
    {
        $data = $request->all();
        $file = $request->file('avatar');
        // dd($data, $file->getClientOriginalName());
  
        $path = 'avatar/';
        if(!File::exists(public_path($path))){
            File::makeDirectory(public_path($path), 0777, true);
        }

        $company = Company::where("id_companies", "=", $data['id_companies'])->first();

        if(!empty($company->avatar) && !empty($file)){
            unlink(public_path($path).$company->avatar);
            $name_file = date('Ymd')."_".uniqid().".".$file->getClientOriginalExtension();
            $upload = $file->move(public_path($path), $name_file);
            if(!$upload){
                return false;
            }
            $company->avatar = $name_file;
        }else if(!empty($file)){
    
            $name_file = date('Ymd')."_".uniqid().".".$file->getClientOriginalExtension();
            // dd($name_file);
            $upload = $file->move(public_path($path), $name_file);
    
            if(!$upload){
                return false;
            }
            $company->avatar = $name_file;
        }

        $company->company_name = $data['name-company'];
        $company->company_email = $data['email'];
        $company->primary_phone = $data['phone-number'];
        $company->website = $data['website'];

        return $company->save();
    }

    private function company_view($id_companies)
    {
        $company = Company::where('id_companies', $id_companies)->first();
        $citys = CompanyAddress::where("company_id", $company->id_companies)->get();
        // dd($company);
        if($citys->isNotEmpty()){
           $city = $citys->first();
        }else{
            $city = null;
        }
        // dd($city);
        return ["company" => $company, "city" => $city];
    }

    private function company_detail_update(Request $request)
    {
        $data = $request->all();
        $file = $request->file('doc-attachment');
        // dd($request);

        $is_company = Company::where('id_companies', "=", $data['company-id'])->first();
        $is_detail_exist = CompanyDetail::where('company_id', "=", $data['company-id'])->first();

        $is_company->fax = $data['fax'];
        $is_company->alternative_name = $data['alternative-name'];
        $is_company->code = $data['code'];
        $is_company->owner_id = $data['owner'];

        if (empty($is_detail_exist)) {
            $company = new CompanyDetail();
            $company->company_id = $data["company-id"];
            $company->total_employees = $data["total-employees"];
            $company->business_entity = $data["business-entity"];
            $company->annual_revenue = $data["annual-revenue"];
            return $company->save() && $is_company->save();
        } else {
            $details = $is_detail_exist;
            $details->total_employees = $data["total-employees"];
            $details->business_entity = $data["business-entity"];
            $details->annual_revenue = $data["annual-revenue"];
            return $details->save() && $is_company->save();
        }

    }
    // ----------------------------------------------------------------//


    public function index()
    {
        $all_column = collect(Schema::getColumnListing("companies"));
        $all_column_formatted = HelperController::columnNameToTextFormatted($all_column);
        $model_name = Company::class;
        // dd($model_name);
        return view("Company/company", compact(['all_column', 'all_column_formatted', 'model_name']));
    }

    public function view()
    {
        return view("Company/view");
    }

    public function create(Request $request){
        try {
            if ($this->company_create($request)) {
                Alert::success("success", "Company created successfully");
                return redirect()->back();
            }else{
                Alert::error("error", "Company create failed");
                return redirect()->back();
            }
        } catch (\Throwable $e) {
            // dd($e->errorInfo[2]);
            Alert::error("error", "Company create failed");
            return redirect()->back();
        }
        
    }

    public function edit(Request $request)
    {
        if ($this->company_update($request)) {
            Alert::success("success", "Company updated successfully");
            return redirect()->back();
        }else{
            Alert::error("error", "Company update failed");
            return redirect()->back();
        }
    }
}
