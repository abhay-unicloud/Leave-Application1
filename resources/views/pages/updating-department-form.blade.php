@extends('layouts.default')
@push('style')
    <style>
        .form-control:disabled:not(.flatpickr-input),
        .form-control[readonly]:not(.flatpickr-input) {
            background-color: #f1f2f3;
            cursor: no-drop;
            color: black !important;
        }

        body.dark .form-control:disabled:not(.flatpickr-input),
        body.dark .form-control[readonly]:not(.flatpickr-input) {
            background-color: #3b3f5c;
            cursor: no-drop;
            color: #d3d3d3 !important;
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
                                <form action="{{ route('updating-department-form-update', [$department->id]) }}"
                                    method="POST">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $department->id }}">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label class="form-check-label" for="firstName">Department-Id:</label>
                                            <input type="text" id="emp_id" value="{{ $department->id }}"
                                                class="form-control" name="id" readonly >
                                        </div>

                                        <div class="col-md-4">
                                            <label class="form-label" for="department">Department:</label>
                                            <input type="text" id="emp_id" value="{{ $department->dpt_name }}"
                                                class="form-control" name="department">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="form-check form-check-primary form-check-inline">
                                                <label class="form-check-label">Select your status:</label>
                                            </div><br>
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input type="radio" id="pending" name="status" value="0"
                                                    {{ $department->status === 0 ? 'checked' : '' }}>
                                                <label for="pending">Pending</label>
                                            </div>
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input type="radio" id="active" name="status" value="1"
                                                    {{ $department->status === 1 ? 'checked' : '' }}>
                                                <label for="approved">Active</label>
                                            </div>
                                            <div class="form-check form-check-primary form-check-inline">
                                                <input type="radio" id="offline" name="status" value="2"
                                                    {{ $department->status === 2 ? 'checked' : '' }}>
                                                <label for="decline">Offline</label>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-sm-12">
                                                <br>
                                                <button class="btn btn-primary" type="submit">update</button>
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
