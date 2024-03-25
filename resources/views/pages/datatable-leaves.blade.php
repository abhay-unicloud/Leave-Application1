@extends('layouts.default')
@section('content')
<div id="content" class="main-content">
    <div class="container">
        <div class="container">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('tables')}}">Table</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Employee Table</li>
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
                                    <h4>Employee Table</h4>
                                </div>
                            </div>
                        </div>
                       

                        <div class="row layout-spacing">
                            <div class="col-lg-12">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-content widget-content-area m-1 p-2">
                                        <table id="style-3" class="table style-3 dt-table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="checkbox-column text-center"> Employee Id </th>
                                                    <!-- <th class="text-center">Image</th> -->
                                                    <th>Leave Type</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Reason</th>
                                                    <th>Location</th>
                                                    <th>Approval</th>
                                                    <th>Comment</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center dt-no-sorting">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($leaves as $row)
                                                <tr>
                                                    <td class="checkbox-column text-center"> {{$row->emp_id}} </td>
                                                    <!-- <td class="text-center">
                                                            <span><img src="../src/assets/img/profile-17.jpeg" class="profile-img" alt="avatar"></span>
                                                        </td> -->

                                                    <td> {{$row->lt_name}} </td>
                                                    <td> {{$row->start_date}} </td>
                                                    <td> {{$row->end_date}} </td>
                                                    <td> {{$row->reason}} </td>
                                                    <td> {{$row->location}} </td>
                                                   
                                                    <td class="text-center"><span class="shadow-none badge badge-primary"> 
                                                        {{-- @if($row->approval==0) 
                                                        Pending
                                                        @elseif($row->approval==1) 
                                                        Approved
                                                        @else
                                                        Decline
                                                        @endif --}}
                                                        {{-- <select class="form-select"  id="inlineFormSelectPref">
                                                            <option value="0"{{$row->approval === 0 ? 'selected' : '' }}>Pending</option>
                                                            <option value="1"{{$row->approval === 1 ? 'selected' : '' }}>Approved
                                                            </option>
                                                            <option value="2"{{$row->approval === 2 ? 'selected' : '' }}>decline
                                                            </option>
                                                        </select> --}}
                                                        <div class="btn-group  mb-2 me-4" role="group">
                                                            <button id="btndefault" type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                                                            <div class="dropdown-menu" aria-labelledby="btndefault">
                                                                <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-home-fill-1 mr-1"></i>Action</a>
                                                                <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-gear-fill mr-1"></i>Another action</a>
                                                                <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-bell-fill-2 mr-1"></i>Something else here</a>
                                                                <a href="javascript:void(0);" class="dropdown-item"><i class="flaticon-dots mr-1"></i>Separated link</a>
                                                            </div>
                                                        </div>
                                                    </span></td>
                                                    <td> {{$row->comment}} </td>
                                                    <td class="text-center"><span class="shadow-none badge badge-primary"> 
                                                        @if($row->status==0) 
                                                        Pending
                                                        @elseif($row->status==1) 
                                                        Approved
                                                        @else
                                                        Decline
                                                        @endif
                                                    </span></td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="{{route('updating-employee-form-edit',[$row->id])}}" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                                    </svg></a></li>
                                                            <li><a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('updating-employee-form-delete',[$row->id])}}" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1">
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                    </svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @endforeach
                                              
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection