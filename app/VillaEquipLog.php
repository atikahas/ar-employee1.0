<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillaEquipLog extends Model
{
    protected $table = 'v_equiplog';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
