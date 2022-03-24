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
        
        $request->validate([
            'company' => 'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required',
            'job_title' => 'required',
            'business_phone' => 'required',
            'mobile_phone' =>'required',
            'fax_number' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state'=>'required',
            'postal_code' =>'required',
            'country'=>'required',
            'web_page'=>'required',
            'notes'=>'required'

        ]);

        $Employee = new Employee();
        $Employee->company = $request->company;
        $Employee->first_name = $request->first_name;
        $Employee->last_name = $request->last_name;
        $Employee->email_address = $request->email_address;
        $Employee->business_phone = $request->business_phone;
        $Employee->mobile_phone = $request->mobile_phone;
        $Employee->job_title = $request->job_title;
        $Employee->fax_number = $request->fax_number;
        $Employee->address = $request->address;
        $Employee->city = $request->city;
        $Employee->home_phone = $request->home_phone;
        $Employee->state = $request->state;
        $Employee->postal_code = $request->postal_code;
        $Employee->country = $request->country;
        $Employee->web_page = $request->web_page;
        $Employee->notes = $request->notes ;
        $Employee->save();

        return redirect()->route('employees.employeesHome');
        
    }

    public function show(Employee $employee){
            return view('employee.show',compact('employee'));
    }

    public function edit(Employee $employee){
        return view('employee.edit', compact('employee'));

    }

    public function update(Request $request, Employee $employee){

        $Employee = new Employee();
        $Employee->company = $request->company;
        $Employee->first_name = $request->first_name;
        $Employee->last_name = $request->last_name;
        $Employee->email_address = $request->email_address;
        $Employee->business_phone = $request->business_phone;
        $Employee->mobile_phone = $request->mobile_phone;
        $Employee->fax_number = $request->fax_number;
        $Employee->address = $request->address;
        $Employee->city = $request->city;
        $Employee->state = $request->state;
        $Employee->postal_code = $request->postal_code;
        $Employee->country = $request->country;
        $Employee->web_page = $request->web_page;
        $Employee->notes = $request->notes ;
        $Employee->save();

        return redirect()->route('employee.show', compact('employee'));

    }

    public function destroy(Employee $employee){

         $employee->delete();
        return redirect()->route('employee.index');
    }

    
}
