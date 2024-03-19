@extends('layouts.default')
@push('style')
<style>
    .h2 {
        color: green;
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
                        <div class="widget-content widget-content-area">


                            <form action="#" id="leave-form">
                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label class="form-check-label" for="email">Employee-Id:</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label class="form-check-label" for="firstName">First Name:</label>
                                        <input type="text" id="firstName" class="form-control" name="firstName">
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label class="form-check-label" for="email">Last Name:</label>
                                            <input type="text" class="form-control" name="lastName">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label class="form-check-label" for="email">Designation:</label>
                                            <input type="text" class="form-control" name="designation">
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <label class="form-check-label" for="email">Gender:</label>
                                            <select class="form-select" id="inlineFormSelectPref">
                                                <option value="Select a gender">Select your Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label class="form-check-label" for="">Address:</label>
                                            <textarea name="address" id="" class="form-control" cols="20" rows="5">Write Your Address</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-12">
                                            <button class="btn btn-primary" type="submit" value="Request">Request</button>
                                        </div>
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
@stop