<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        $employeeslist = Employee::all();
        return view('employees.index', compact('employeeslist'));
    }
    public function create()
    {
        return view('employees.create');
    }
    public function store(Request $request)
    {
        $employee = new Employee();

        $employee->name = $request->name;
        $employee->address = $request->address;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->pesel = $request->pesel;
        $employee->date = $request->date;

        $employee->save();

        return redirect('/')->with('message', 'Employee data added correctly');
    }
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employees.edit', compact('employee'));
    }
    public function update($id, Request $request)
    {
        $employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->address = $request->address;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->pesel = $request->pesel;
        $employee->date = $request->date;

        $employee->save();

        return redirect('/')->with('message', 'Employee data changed correctly');
    }
    public function delete($id)
    {
        Employee::destroy($id);
        return redirect('/')->with('message','The Employee has been removed');
    }
}
