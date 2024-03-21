@extends('layouts.default')
@push('style')
<style>
   .password-toggle-icon {
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  cursor: pointer;
}

.password-toggle-icon i {
  font-size: 18px;
  line-height: 1;
  color: #333;
  transition: color 0.3s ease-in-out;
  margin-bottom: 20px;
}

.password-toggle-icon i:hover {
  color: #000;
}
</style>
@endpush
@section('content')
<div id="content" class="main-content">
    <div class="container">
        <div class="container">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Form</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Registration-Employee</li>
                    </ol>
                </nav>
            </div>
            <!-- /BREADCRUMB -->

            <!-- <div id="navSection" data-bs-spy="affix" class="nav sidenav" style="right: 0px; display: block;">
                        <div class="sidenav-content">
                            <a href="#flStackForm" class="nav-link">Utilities</a>
                            <a href="#flHorizontalForm" class="nav-link">Horizontal form</a>
                            <a href="#flHorizontalFormlabel" class="nav-link">Horizontal form label</a>
                            <a href="#flLoginForm" class="nav-link active">Gutter</a>
                            <a href="#flFormsGrid" class="nav-link">Form Grid</a>
                            <a href="#flAutoSizing" class="nav-link">Auto-sizing</a>
                            <a href="#flInlineForm" class="nav-link">Inline Forms</a>
                        </div>
                    </div> -->
            <div class="row">
                <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Registration-Employee</h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area m-2 p-3">

                            @if(session()->has('success'))
                            <p>
                                {{ session()->get('success') }}
                            </p>
                            @endif

                            @if ($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            @endif
                            <form action="{{route('insert')}}" method="POST">
                                @csrf
                                <!-- <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label class="form-check-label" for="emp_id">Employee-Id:</label>
                                        <input type="text" class="form-control" name="emp_id">
                                    </div>
                                </div> -->

                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-check-label" for="firstName">First Name:</label>
                                        <input type="text" id="firstName" class="form-control" name="first_name">
                                    </div>

                                    <!-- <div class="row-4"> -->
                                    <div class="col-md-4">
                                        <label class="form-check-label" for="LastName">Last Name:</label>
                                        <input type="text" class="form-control" name="last_name">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-check-label " for="MobileNo">Mobile No:</label>
                                        <input type="text" class="form-control" name="mobile_no">
                                    </div>
                                </div>


                                <!-- </div> -->
                                <div class="row mt-4">

                                    <!-- <div class="col-md-4">
                                            <label class="form-check-label" for="designation">Designation:</label>
                                            <input type="text" class="form-control" name="designation">
                                        </div> -->


                                    <div class="col-md-4">
                                        <label class="form-check-label" for="">Gender:</label>
                                        <select class="form-select" name="gender" id="inlineFormSelectPref">
                                            <option value="0">Select your gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Other</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-check-label" for="department">Department:</label>
                                        <select class="form-select" name="department" id="inlineFormSelectPref">
                                            <option value="0">Select your Department</option>
                                            @foreach($department as $row)
                                            <option value="{{$row->id}}">{{$row->dpt_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-check-label" for="designation">Designation:</label>
                                        <select class="form-select" name="designation" id="inlineFormSelectPref">
                                            <option value="0">Select your Designation</option>
                                            @foreach($designation as $row)
                                            <option value="{{$row->id}}">{{$row->dst_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    
                                    <div class="col-md-4">
                                        <label class="form-check-label" for="password">Password:</label>
                                        <span class="password-toggle-icon"><i class="fas fa-eye"></i></span>
                                        <input type="password" id="password" class="form-control" name="password">
                                    </div>
                               
                                

                                </div>
                                <div class="row mt-4">
                                    <div class="col-8">
                                        <label class="form-check-label" for="">Address:</label>
                                        <textarea name="address" id="" class="form-control" cols="20" rows="5" placeholder="Write Employee Address here (Optional)"></textarea>
                                    </div>
                                    </div>

                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <br>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
  const passwordField = document.getElementById("password");
const togglePassword = document.querySelector(".password-toggle-icon i");

togglePassword.addEventListener("click", function () {
  if (passwordField.type === "password") {
    passwordField.type = "text";
    togglePassword.classList.remove("fa-eye");
    togglePassword.classList.add("fa-eye-slash");
  } else {
    passwordField.type = "password";
    togglePassword.classList.remove("fa-eye-slash");
    togglePassword.classList.add("fa-eye");
  }
});
</script>
@endpush