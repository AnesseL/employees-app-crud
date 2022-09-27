<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index()
    {
        $name = "Welcome to the main page!";
        return view('employees.index', compact('name'));
    }
}
