<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'companies';
    protected $id = 'id_companies';
    protected $keyType = 'string';

    public function company_detail(){
        return $this->hasOne(CompanyDetail::class, 'company_id', 'id_companies');
    }

}
