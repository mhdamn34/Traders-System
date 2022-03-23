<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RateLimiter\RequestRateLimiterInterface;

class EmployeeController extends Controller
{
    public function index(){

        $employees=Employee::all();
        return view('employees.employeesHome', compact('employees'));


    }

    public function create(){
        return view('employees.createEmployee');
    } 

    public function store(Request $request){
        
    }

    public function show(Employee $employee){
            return view('employee.show',compact('employee'));
    }

    public function edit(Employee $employee){
        return view('employee.edit', compact('employee'));

    }

    public function update(Request $request, Employee $employee){

        return redirect()->route('employee.show', compact('employee'));
    }

    public function destroy(){

        // $employee->delete();
        return redirect()->route('employee.index');
    }

    
}
