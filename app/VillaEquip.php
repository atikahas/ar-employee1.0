<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillaEquip extends Model
{
    protected $table = 'v_equip';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
