<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Equipment;
use Carbon\Carbon;

class EquipmentController extends Controller
{
    public function index(Request $request) {
        $equipment = Equipment::where($request->all())->get();
        return view('inventory.index', ['equipment' => $equipment]);
    }

    public function store(Request $request, Equipment $equipment) {
        try {
            $data = $request->all();
            $data['created_by'] = Auth::user()->id;

            $equipment = Equipment::create($data);

            return redirect('equipment')->with('success', 'New equipment added.');
        } 
        catch(\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
