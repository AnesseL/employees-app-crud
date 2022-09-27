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
}
