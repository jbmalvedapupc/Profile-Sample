<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        // Lahat ng fields kukunin.
        //dd($request->all());
        
        // Ung field lang na needed.
        //dd($request->only('img_filename'));

        // Hindi kukunin ung field.
        //dd($request->except('img_filename'));

        Employee::create(
            $request->all()
        );

        return redirect()->route('employees.index');
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->update([
            'img_filename' => $request['img_filename']
        ]);

        return redirect()->route('employees.show', $employee);
    }
}
