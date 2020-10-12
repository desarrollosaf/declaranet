<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormasPagos extends Model
{
    protected $table = "forma_pagos";
    protected $guarded = ["id","created_at","updated_at","deleted_at"];
}
