<?php

namespace App\Http\Controllers;

use App\Models\Leave_types;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\signup;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Database\Query\Builder;
use App\Http\Controllers\Item;
use App\Models\Department;
use App\Models\Designation;
use App\Models\Leave;
use App\Models\Staff;
use App\Mail\SampleMail;
use Illuminate\Support\Str;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\CPU\Helpers;

class Mycontroller extends Controller
{
    public function insert(Request $request)
    {
        // $exist = Employee::where('email', $request->input('email'))->first();
        // if ($exist) {

        $employee = new Employee();
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->gender = $request->input('gender');
        $employee->dpt_id = $request->input('department');
        $employee->dst_id = $request->input('designation');
        $employee->mobile_no = $request->input('mobile_no');
        $employee->addresses = $request->input('address');
        $email = $request->input('email');
        $employee->email = $email;
        $employee->delete1 = 0;
        $employee->status = 0;
        $hashpassword = Str::random(10);
        $employee->password = Hash::Make($hashpassword);
        $employee->save();

        $staff = new Staff();
        $staff->emp_id = $employee->id;
        $staff->first_name = $request->input('first_name');
        $staff->last_name = $request->input('last_name');
        $staff->gender = $request->input('gender');
        $staff->dpt_id = $request->input('department');
        $staff->dst_id = $request->input('designation');
        $staff->mobile_no = $request->input('mobile_no');
        $staff->delete2 = 0;
        $staff->status = 0;
        $staff->duty = 0;

        $staff->save();
        set_time_limit(0);
        $sendmail = Helpers::sendEmail($employee->id, $email, $hashpassword);

        return redirect()->back()->with('success', 'data stored successfully');
        // } else {
        //     return redirect()->back()->with('error', 'already Exists');
        // }
    }public function check_exists(Request $request)
    {
        $dataExists = Employee::where('email', '=', $request->input('email'))->first();
        
        if ($dataExists) {
            return response()->json(['exists' => true]);
        } else {
            return response()->json(['exists' => false]);
        }
    }
    public function request(Request $request)
    {
        if (($request->input('end_date')) > 0) {

            $leave = new Leave();
            $leave->emp_id = $request->input('emp_id');
            $leave->lt_id = $request->input('lt_id');
            $leave->start_date = $request->input('start_date');
            $leave->end_date = $request->input('end_date');
            $leave->reason = $request->input('reason');
            $leave->location = $request->input('location');
            $leave->delete1 = 0;
            $leave->status = 0;
            $leave->approval = 0;
            $leave->save();
            return redirect()->back()->with('success', 'Request Send successfully');
        } else {
            return redirect()->back()->with('error', 'Request Send Unsuccessfull');
        }
    }
    public function add_depart(Request $request)
    {

        $department = new Department();
        $department->dpt_name = $request->input('department');
        $department->status = 0;
        $department->save();
        return redirect()->back()->with('success', 'Department Add successfully');
    }
    public function add_design(Request $request)
    {

        $designation = new Designation();
        $designation->dst_name = $request->input('designation');
        $designation->status = 0;
        $designation->save();
        return redirect()->back()->with('success', 'Designation Add successfully');
    }
    public function add_depart_form()
    {
        return view("pages.department-form");
    }
    public function add_design_form()
    {
        return view("pages.designation-form");
    }
    public function index()
    {
        return view("pages.index");
    }
    public function employee_login()
    {
        return view('pages.employee-login');
    }
    public function login3(Request $request)
    {
        $employee = Employee::where('email', $request->input('email'))->first();


        if ($employee) {
            $hashedPassword = $employee->password;
            $pass = $request->input('password');
            if (Hash::check($pass, $hashedPassword)) {
                // dd($hashedPassword,$pass);
                // print_r('hiee');die();
                Session::put('logged', true);
                Session::put('email', $employee->email);

                return redirect()->route('index');
            } else {

                return redirect()->back()->with('error', 'Incorrect email or password');
            }
        } else {

            return redirect()->back()->with('error', 'User does not exist');
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('employee_login');
    }
    public function view(Request $request, $id)
    {
        $empId =  $request->input('emp_id');
        $employee = Employee::where('id', $empId)->first();

        if ($employee) {
            // If employee data found, return it as JSON response
            Session::put('data_retrived', 1);
            return response()->json([
                'success' => true,
                'employee' => $employee
            ]);
        } else {
            // If no employee data found, return an error response
            return response()->json([
                'success' => false,
                'message' => 'Employee not found'
            ]);
        }
    }
    public function tables()
    {
        $employee = DB::select('SHOW TABLES');
        return view("pages.tables", compact('employee'));
    }
    public function registration_employee()
    {

        $department = Department::all()->where('status', '=', 1);
        $designation = Designation::all()->where('status', '=', 1);
        return view("pages.registration-employee-form", compact('designation'), compact('department'));
    }
    public function Application_form()
    {
        $Leave_types = Leave_types::all();

        return view("pages.Application-form", compact('Leave_types'));
    }
    public function updating_employee()
    {
        $department = Department::all();
        $designation = Designation::all();
        return view("pages.updating-employee-form", compact('designation'), compact('department'));
    }
    public function datatable_department()
    {
        $department = Department::all();
        return view("pages.datatable-department", compact('department'));
    }
    public function datatable_designation()
    {
        $designation = Designation::all();
        return view("pages.datatable-designation", compact('designation'));
    }
    public function datatable_leave_types()
    {
        $leave_types = Leave_types::all();
        return view("pages.datatable-leave_types", compact('leave_types'));
    }
    public function datatable_leaves()
    {
        // $leaves = Leave::all();
        $leaves = DB::table('leaves')
            ->join('leave_types', 'leave_types.id', '=', 'leaves.lt_id')
            ->select('leaves.id as leave_id', 'emp_id', 'lt_name', 'start_date', 'end_date', 'reason', 'location', 'approval', 'comment', 'leaves.status as leave_status')
            ->get();
        return view("pages.datatable-leaves", compact('leaves'));
    }
    public function datatable_employee()
    {
        // $employee = Employee::all()->where('delete1', '=', '0');
        $employee = Employee::select('employees.id as employee_id', 'first_name', 'last_name', 'dpt_name', 'dst_name', 'mobile_no', 'gender', 'addresses', 'email')
            ->join('designations', 'employees.dst_id', '=', 'designations.id')
            ->join('departments', 'employees.dpt_id', '=', 'departments.id')
            ->where('delete1', '=', '0')
            ->get();
        return view("pages.datatable-employee", compact('employee'));
    }
    public function datatable_staff()
    {
        $staff = Staff::all()->where('delete2', '=', '0');
        //       echo "<pre>";
        // print_r($staff->toArray());
        // echo "</pre>";
        // die;

        return view("pages.datatable-staff", compact('staff'));
    }
    public function edit($id)
    {
        $department = Department::all();
        $designation = Designation::all();
        $employee = Employee::find($id);
        return view("pages.updating-employee-form", compact('designation', 'department', 'employee'));
    }
    public function edit_department($id)
    {
        $department = Department::find($id);

        return view("pages.updating-department-form", compact('department'));
    }
    public function edit_designation($id)
    {
        $designation = Designation::find($id);

        return view("pages.updating-designation-form", compact('designation'));
    }
    public function edit_leaves($id)
    {

        $leaves = Leave::select('leaves.id as leave_id', 'leave_types.id as leave_type_id', 'employees.id as emp_id', 'lt_name', 'start_date', 'end_date', 'reason', 'location', 'approval', 'comment', 'first_name', 'last_name', 'dpt_name', 'dst_name', 'mobile_no', 'gender', 'addresses', 'email')
            ->join('leave_types', 'leaves.lt_id', '=', 'leave_types.id')
            ->join('employees', 'leaves.emp_id', '=', 'employees.id')
            ->join('designations', 'employees.dst_id', '=', 'designations.id')
            ->join('departments', 'employees.dpt_id', '=', 'departments.id')
            ->where('leaves.id', $id) // Use the fetched $leaveId here
            ->first();
        return view("pages.updating-leaves-form", compact('leaves'));
    }
    public function show($id)
    {
        $signup = signup::find($id);
        return view("pages.show", compact('signup'));
    }
    public function delete($id)
    {
        try {

            Employee::where('id', $id)->update(['delete1' => 1]);


            Staff::where('emp_id', $id)->update(['delete2' => 1]);

            DB::commit();

            return redirect()->back()->with('success', 'Data updated successfully');
        } catch (\Exception $e) {

            DB::rollback();

            return redirect()->back()->with('error', 'Failed to update data');
        }
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
    }
    public function update_leaves(Request $request)
    {
        $leaves = Leave::find($request->input('id'));
        $leaves->approval = $request->input('approval');
        $leaves->comment = $request->input('comment');
        $leaves->save();
        //     echo "<pre>";
        // print_r($signup->toArray());
        // echo "</pre>";
        // die;

        return redirect()->route('datatable-leaves')->with('success', 'updated successfully');
    }
    public function update_department(Request $request)
    {
        $department = Department::find($request->input('id'));
        $department->dpt_name = $request->input('department');
        $department->status = $request->input('status');
        $department->save();
        //     echo "<pre>";
        // print_r($signup->toArray());
        // echo "</pre>";
        // die;

        return redirect()->route('datatable-departments')->with('success', 'updated successfully');
    }
    public function update_designation(Request $request)
    {
        $designation = Designation::find($request->input('id'));
        $designation->dst_name = $request->input('designation');
        $designation->status = $request->input('status');
        $designation->save();
        //     echo "<pre>";
        // print_r($signup->toArray());
        // echo "</pre>";
        // die;

        return redirect()->route('datatable-designations')->with('success', 'updated successfully');
    }
    public function sendEmail()
    {

        $content = [
            'subject' => 'This is the mail subject',
            'body' => 'This is the email body of how to send email from laravel 10 with mailtrap.'
        ];

        Mail::to('rahul@unicloudtech.com')->send(new SampleMail($content));

        return "Email has been sent.";
    }
}
