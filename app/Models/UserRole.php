<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UUIDTrait as Uuid;

class UserRole extends Model
{
    use HasFactory, Uuid;

    protected $table = "user_roles";
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
}
