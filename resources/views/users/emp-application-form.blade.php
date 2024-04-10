@extends('layouts.user')
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
                            <li class="breadcrumb-item active" aria-current="page">Leave-Application</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                <div class="row">
                    <div id="flStackForm" class="col-lg-12 layout-spacing layout-top-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Leave-Application</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area m-1 p-2">

                                @if (session()->has('success'))
                                {{-- <p>
                                {{ session()->get('success') }}
                            </p> --}}
                                <div class="alert alert-light-success alert-dismissible fade show border-0 mb-4"
                                    role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-x close" data-bs-dismiss="alert">
                                            <line x1="18" y1="6" x2="6" y2="18">
                                            </line>
                                            <line x1="6" y1="6" x2="18" y2="18">
                                            </line>
                                        </svg></button><strong>{{ session()->get('success') }}</strong>
                                </div>
                            @elseif (session()->has('error'))
                                {{-- <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul> --}}
                                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4"
                                    role="alert"> <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-x close" data-bs-dismiss="alert">
                                            <line x1="18" y1="6" x2="6" y2="18">
                                            </line>
                                            <line x1="6" y1="6" x2="18" y2="18">
                                            </line>
                                        </svg></button><strong>{{ session()->get('error') }}</strong>
                                </div>
                            @endif
                                <form action="{{ route('request') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $empdata = Session::get('emp_data') }}">
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="firstName">Employee-Id:</label>
                                            <input type="text" id="emp_id" value="{{ $empdata->id }}"
                                                class="form-control" name="emp_id" readonly>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-check-label" for="firstName">First Name:</label>
                                            <input type="text" id="emp_id" value="{{ $empdata->first_name }}"
                                                class="form-control" name="nice" readonly>
                                        </div>


                                        <div class="col-md-4">
                                            <label class="form-check-label" for="LastName">Last Name:</label>
                                            <input type="text" id="nice" value="{{ $empdata->last_name }}"
                                                class="form-control" name="nice" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-check-label " for="MobileNo">Mobile No:</label>
                                            <input type="text" id="nice" value="{{ $empdata->mobile_no }}"
                                                class="form-control" name="nice" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="designation">Designation:</label>
                                            <input type="text" id="nice" value="{{ $empdata->dst_name }}"
                                                class="form-control" name="nice" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="department">Department:</label>
                                            <input type="text" id="nice" value="{{ $empdata->dpt_name }}"
                                                class="form-control" name="nice" readonly>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-check-label" for="">Gender:</label>
                                            <input type="text" id="nice"
                                                value="@if ($empdata->gender == 1)Male
                                            @elseif($empdata->gender == 2)Female
                                            @elseif($empdata->gender == 3)Other
                                            @else Undefined @endif "
                                                class="form-control" name="nice" readonly>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-check-label" for="">Email:</label>
                                            <input type="text" id="nice" value="{{ $empdata->email }}"
                                                class="form-control" name="nice" readonly>
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
                                            <label class="form-check-label" for="start-date"> From:</label>
                                            <input type="date" id="start-date" class="form-control" name="start_date">
                                        </div>
                                            <div class="col-md-4">
                                            <label class="form-check-label" for="email">How long</label>
                                            <input type="number" id="end-date" class="form-control" name="end_date">
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label class="form-check-label" for="email">Reason:</label>
                                            <textarea id="leave-reason" class="form-control" name="reason" rows="4" cols="50"></textarea>
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
