<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
