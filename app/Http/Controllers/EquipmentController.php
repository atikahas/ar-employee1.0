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

    public function edit(Equipment $equipment) {
        return view('inventory.edit',['equipment' => $equipment]);
    }

    public function update(Request $request, Equipment $equipment) {
        try {
            $data = $request->all();
            $data['updated_by'] = Auth::user()->id;

            $equipment->update($data);

           return redirect('equipment')->with('success', 'Equipment info updated.');
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }
}
