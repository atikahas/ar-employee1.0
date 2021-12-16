<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Employee;
use App\VillaEquip;
use App\VillaEquipLog;
use Carbon\Carbon;

class VillaEquipController extends Controller
{
    public function index(Request $request) {
        $v_equip = VillaEquip::where($request->all())->get();
        return view('inventory.v_equip.index', ['v_equip' => $v_equip]);
    }
}
