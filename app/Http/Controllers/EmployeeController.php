<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Employee;
use Carbon\Carbon;

class EmployeeController extends Controller
{
    public function index(Request $request) {
        $employee = Employee::where($request->all())->get();
        return view('employee.index', ['employee' => $employee]);
    }

    public function add() {
        return view('employee.add');
    }

    public function store(Request $request, Employee $employee) {
        try {
            $data = $request->all();
            $data['updated_by'] = Auth::user()->id;

            $employee = Employee::create($data);

            return redirect('employee')->with('success', 'New employee has been saved.');
        } 
        catch(\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function view(Employee $employee) {
        return view('employee.view',['employee' => $employee]);
    }

    public function edit(Employee $employee) {
        return view('employee.edit',['employee' => $employee]);
    }

    public function update(Request $request, Employee $employee) {
        try {
            $data = $request->all();
            $data['updated_by'] = Auth::user()->id;

            $employee->update($data);

           return redirect('/employee/view/'.$employee->id)->with('success', 'Employee info updated.');
        } catch(\Exception $e) {
            return back()->with('error', $e->getMessage())->withInput();
        }
    }

    public function destroy(Employee $employee) {
        try {
            $employee->delete();

            return redirect('employee')->with('success', 'Employee info deleted.');
        } catch(\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
