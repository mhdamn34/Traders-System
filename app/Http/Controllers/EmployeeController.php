<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){

        $employees=Employee::all();
        return view('employees.employeesHome', compact('employees'));


    }

    public function create(){
        return view('employees.createEmployee');
    }

    public function store(){

    }
}
