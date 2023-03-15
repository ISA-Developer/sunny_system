<?php

namespace App\Traits;
use Illuminate\Support\Str;

trait UuidTrait {

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->{$model->primaryKey} = (string) Str::uuid();
        });
    }

}
