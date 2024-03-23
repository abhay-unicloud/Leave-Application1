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
                            <li class="breadcrumb-item active" aria-current="page">Updating-Employee</li>
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
                                        <h4>Updating-Employee</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area m-1 p-2">

                                @if (session()->has('success'))
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
                                <form action="{{ route('request') }}" method="POST">
                                    @csrf
                                    <!-- <div class="row mb-4">
                                                                            <div class="col-sm-12">
                                                                                <label class="form-check-label" for="emp_id">Employee-Id:</label>
                                                                                <input type="text" class="form-control" name="emp_id">
                                                                            </div>
                                                                        </div> -->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="firstName">Employee-Id:</label>
                                            <input type="text" id="emp_id" class="form-control" name="emp_id">
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-check-label" for="firstName">First Name:</label>
                                            <strong><p id="first_name"></p></strong>   
                                        </div>


                                        <div class="col-md-4">
                                            <label class="form-check-label" for="LastName">Last Name:</label>
                                            <strong><p id="last_name"></p></strong> 
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-check-label " for="MobileNo">Mobile No:</label>
                                            <strong><p id="mobile_no"></p></strong>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="designation">Designation:</label>
                                           <strong><p id="dst_id"></p></strong> 
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="department">Department:</label>
                                            <strong><p id="dpt_id"></p></strong>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-check-label" for="">Gender:</label>
                                            <strong><p id="gender"></p></strong>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-check-label" for="">Email:</label>
                                            <strong><p id="email"></p></strong>
                                        </div>

                                    </div>


                                    <!-- </div> -->
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="email">Leave Type:</label>
                                            <select class="form-select" name="lt_id" id="inlineFormSelectPref">
                                                <option value="Select a leave type">Select a leave type</option>
                                                @foreach($Leave_types as $row)
                                                <option value="{{$row->id}}">{{$row->lt_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="start-date"> Duration:</label>
                                            <input type="date" id="start-date" class="form-control" name="startDate">
                                        </div>
                                            <div class="col-md-4">
                                            <label class="form-check-label" for="email">TO</label>
                                            <input type="date" id="end-date" class="form-control" name="endDate">
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label class="form-check-label" for="email">Reason:</label>
                                            <textarea id="leave-reason" class="form-control" name="leaveReason" rows="4" cols="50"></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-check-label" for="email">Location:</label>
                                            <textarea id="leave-reason" class="form-control" name="location" rows="4" cols="50"></textarea>
                                        </div>
                                    </div>
                            </div>


                            <div class="row mb-4">
                                <div class="col-sm-12">
                                    <br>
                                    <button class="btn btn-primary" type="submit">Request</button>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#emp_id').on('input', function() {
                var id = $(this).val();
                var route = "{{ route('emp_data', ['+id+']) }}";
                $.ajax({
                    type: 'POST',
                    url: route,
                    data: {
                        emp_id: id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#first_name').text(response.employee.first_name);
                            $('#last_name').text(response.employee.last_name);
                            $('#dpt_id').text(response.employee.dpt_id);
                            $('#dst_id').text(response.employee.dst_id);
                            $('#mobile_no').text(response.employee.mobile_no);
                            $('#gender').text(response.employee.gender);
                            $('#email').text(response.employee.email);
                        } else {
                            $('#first_name').text('');
                            $('#last_name').text('');
                            $('#dpt_id').text('');
                            $('#dst_id').text('');
                            $('#mobile_no').text('');
                            $('#gender').text('');
                            $('#email').text('');
                            alert(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr.responseText);
                        alert('An error occurred while processing your request.');
                    }
                });
            });
        });
    </script>
@endsection
