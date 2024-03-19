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
class Mycontroller extends Controller
{
        public function insert(Request $request)
    {
        $employees = new Employee();
        $employees->emp_id = $request->input('emp_id');
        $employees->FirstName = $request->input('FirstName');
        $employees->LastName = $request->input('LastName');
        $employees->Gender = $request->input('Gender');
        $employees->Designation = $request->input('Designation');
        $employees->MobileNo = $request->input('MobileNo');
        $employees->Addresses = $request->input('Addresses');
        // $employees->password = bcrypt($request->input('password'));
        $employees->save();

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
    public function view() {
        $signup= signup::all()->where('delete1','=','0');
        // echo "<pre>";
        // print_r($data->toArray());
        // echo "</pre>";
        // die;
         return view("pages.view" ,compact('signup'));
    }
    public function edit($id) {
        $signup= signup::find($id);
        return view("pages.update" ,compact('signup'));
        // return redirect()->intended('update')->compact('signup');
    }
    public function show($id) {
        $signup= signup::find($id);
        return view("pages.show" ,compact('signup'));
        // return redirect()->intended('update')->compact('signup');
    }
    public function delete($id) {
        $signup= signup::find($id);
        $signup->delete1 = 1;
        $signup->save();
        
        return redirect()->back()->with('success', 'updated successfully');
        // return redirect()->intended('update')->compact('signup');
    }
    public function update(Request $request)
    {
        $signup = signup::find($request->input('id'));
        $signup->user = $request->input('user');
        $signup->email = $request->input('email');
        $signup->save();
        //     echo "<pre>";
        // print_r($signup->toArray());
        // echo "</pre>";
        // die;
        
        return redirect()->route('view')->with('success', 'updated successfully');
        // return redirect()->back()->with('success', 'updated successfully');
    }
}
