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
                                <form action="{{ route('updating-leaves-form-update',[$leaves->leave_id]) }}" method="POST">
                                    @csrf
                                   
                                    <input type="hidden" name="id" value="{{ $leaves->leave_id }}">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="firstName">Employee-Id:</label>
                                            <input type="text" id="emp_id" value="{{ $leaves->emp_id }}" class="form-control" name="emp_id" readonly>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="firstName">First Name:</label>
                                            <input type="text" id="emp_id" value="{{ $leaves->first_name }}" class="form-control" name="emp_id" readonly>  
                                        </div>


                                        <div class="col-md-4">
                                            <label class="form-check-label" for="LastName">Last Name:</label>
                                            <input type="text" id="emp_id" value="{{ $leaves->last_name }}" class="form-control" name="emp_id" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-check-label " for="MobileNo">Mobile No:</label>
                                            <input type="text" id="emp_id" value="{{ $leaves->mobile_no }}" class="form-control" name="emp_id" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="designation">Designation:</label>
                                            <input type="text" id="emp_id" value="{{ $leaves->dst_name }}" class="form-control" name="emp_id" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label" for="department">Department:</label>
                                            <input type="text" id="emp_id" value="{{ $leaves->dpt_name }}" class="form-control" name="emp_id" readonly>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-check-label" for="">Gender:</label>
                                            <input type="text" id="emp_id" value="{{ $leaves->gender }}" class="form-control" name="emp_id" readonly>
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-check-label" for="">Email:</label>
                                            <input type="text" id="emp_id" value="{{ $leaves->email }}" class="form-control" name="emp_id" readonly>
                                        </div>

                                    </div>


                                    <!-- </div> -->
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="email">Leave Type:</label>
                                            <input type="text" id="emp_id" value="{{ $leaves->start_date }}" class="form-control" name="emp_id" readonly>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="start-date"> Duration:</label>
                                            <input type="text" id="emp_id" value="{{ $leaves->emp_id }}" class="form-control" name="emp_id" readonly>
                                        </div>
                                            <div class="col-md-4">
                                            <label class="form-check-label" for="email">TO</label>
                                            <input type="text" id="emp_id" value="{{ $leaves->end_date }}" class="form-control" name="emp_id" readonly>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="email">Reason:</label>
                                            <textarea id="leave-reason" class="form-control" name="reason" rows="4" cols="50" readonly>{{ $leaves->reason }}</textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="email">Location:</label>
                                            <textarea id="leave-reason" class="form-control" name="location" rows="4" cols="50" readonly>{{ $leaves->location }}</textarea>
                                        </div>
                                      
                                        <div class="col-md-4">
                                            <label class="form-check-label">Select your approval:</label>
                                            <div>
                                                <input type="radio" id="pending" name="approval" value="0" {{ $leaves->approval === 0 ? 'checked' : '' }}>
                                                <label for="pending">Pending</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="approved" name="approval" value="1" {{ $leaves->approval === 1 ? 'checked' : '' }}>
                                                <label for="approved">Approved</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="decline" name="approval" value="2" {{ $leaves->approval === 2 ? 'checked' : '' }}>
                                                <label for="decline">Decline</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="email">Comment:</label>
                                            <textarea id="leave-reason" class="form-control" name="comment" rows="4" cols="50">{{ $leaves->comment }}</textarea>
                                        </div>
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


