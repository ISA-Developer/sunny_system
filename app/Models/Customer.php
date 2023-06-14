<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customer_managements";
    protected $primary = "id_customer";

    public static function create_customer($data)
    {

        $customer = new Customer();
        $customer->nama_customer = $data["nama-customer"]; 
        $customer->email = $data["email"]; 
        $customer->phone_number = $data["phone-number"]; 
        $customer->website = $data["website"];
        $customer->check_customer = $data->has("check-customer");
        $customer->check_partner = $data->has("check-partner");
        $customer->check_competitor = $data->has("check-competitor");

        return $customer->save();
    }
}
