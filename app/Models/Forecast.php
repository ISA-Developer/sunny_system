<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forecast extends Model
{
    use HasFactory;
    protected $table = "forecasts";
    protected $primaryKey = "id_forecast";
    protected $keyType = 'string';

    public static function getAllForecast() {
        return Forecast::all();
    }
}
