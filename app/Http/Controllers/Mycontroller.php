<?php

namespace App\Http\Controllers;
// use Session;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\signup;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Database\Query\Builder;
use App\Http\Controllers\Item;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Staff;

class Mycontroller extends Controller
{
        public function insert(Request $request)
    {
        $employee = new Employee();
        // $employee->emp_id = $request->input('emp_id');
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->gender = $request->input('gender');
        $employee->dpt_id = $request->input('department');
        $employee->dst_id = $request->input('designation');
        $employee->mobile_no = $request->input('mobile_no');
        $employee->addresses = $request->input('address');
        $employee->delete1 = 0;
        $employee->password = bcrypt($request->input('password'));
        $employee->save();

        $staff = new Staff();
        $staff->emp_id = $employee->id;
        $staff->first_name = $request->input('first_name');
        $staff->last_name = $request->input('last_name');
        $staff->gender = $request->input('gender');
        $staff->dpt_id = $request->input('department');
        $staff->dst_id = $request->input('designation');
        $staff->mobile_no = $request->input('mobile_no');
        $staff->delete1 = 0;
        
        $staff->save();

        return redirect()->back()->with('success', 'data stored successfully');
    }
    public function login3(Request $request)
    {
        $username = signup::where('user', $request->input('user'))->first();
      //  dd($username->user);

        if ($username) {
            $hashedPassword = $username->password;

            if (Hash::check($request->input('password'), $hashedPassword)) {
                Session::put('logged',true);
                Session::put('username',$username->user);

                return redirect()->route('dashboard2');
              
            } else {
                
                return redirect()->back()->with('error', 'Incorrect username or password');
            }
        } else {
          
            return redirect()->back()->with('error', 'User does not exist');
        }
    }
    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->intended('loading');
    }
    public function view($id) {
         $employee = Employee::find($id);
    
    if ($employee) {
        return response()->json($employee);
    } else {
        return response()->json(['error' => 'Employee not found'], 404);
    }
    }
    public function tables() {
        $employee= DB::select('SHOW TABLES');
        return view("pages.tables" ,compact('employee'));
        // return redirect()->intended('update')->compact('signup');
    }
    public function registration_employee() {
        $department= Department::all();
        $designation= Designation::all();
        return view("pages.registration-employee-form" ,compact('designation'),compact('department'));
        // return redirect()->intended('update')->compact('signup');
    }
    public function updating_employee() {
        $department= Department::all();
        $designation= Designation::all();
        return view("pages.updating-employee-form" ,compact('designation'),compact('department'));
        // return redirect()->intended('update')->compact('signup');
    }
    public function datatable_department() {
        $department= Department::all();
        return view("pages.datatable-department"  ,compact('department'));
        // return redirect()->intended('update')->compact('signup');
    }
    public function datatable_designation() {
        $designation= Designation::all();
        return view("pages.datatable-designation" ,compact('designation'));
        // return redirect()->intended('update')->compact('signup');
    }
    public function datatable_employee() {
        $employee= Employee::all()->where('delete1','=','0');
        return view("pages.datatable-employee" ,compact('employee'));
        // return redirect()->intended('update')->compact('signup');
    }
    public function edit($id) {
        $department= Department::all();
        $designation= Designation::all();
        $employee= Employee::find($id);
        return view("pages.updating-employee-form" ,compact('designation','department','employee'));
        // return view("pages.updating-employee-form" ,compact('employee'));
        // return redirect()->intended('update')->compact('signup');
    }
    public function show($id) {
        $signup= signup::find($id);
        return view("pages.show" ,compact('signup'));
        // return redirect()->intended('update')->compact('signup');
    }
    public function delete($id) {
        $staff= Staff::find($id);
        $staff->delete1 = 1;
        $staff->save();
        $employee= Employee::find($id);
        $employee->delete1 = 1;
        $employee->save();
        
        return redirect()->back()->with('success', 'updated successfully');
        // return redirect()->intended('update')->compact('signup');
    }
    public function update(Request $request)
    {
        $employee = Employee::find($request->input('id'));
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->gender = $request->input('gender');
        $employee->dpt_id = $request->input('department');
        $employee->dst_id = $request->input('designation');
        $employee->mobile_no = $request->input('mobile_no');
        $employee->addresses = $request->input('address');
        $employee->save();
        //     echo "<pre>";
        // print_r($signup->toArray());
        // echo "</pre>";
        // die;
        
        return redirect()->route('datatable-employees')->with('success', 'updated successfully');
        // return redirect()->back()->with('success', 'updated successfully');
    }
}
