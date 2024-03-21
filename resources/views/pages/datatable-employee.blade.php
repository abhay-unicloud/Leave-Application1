@extends('layouts.default')
@section('content')
<div id="content" class="main-content">
    <div class="container">
        <div class="container">

            <!-- BREADCRUMB -->
            <div class="page-meta">
                <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Table</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Employee Table</li>
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
                                    <h4>Employee Table</h4>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="widget-content widget-content-area">
                            <div class="seperator-header">
                                <h4 class="">Style 3</h4>
                            </div> -->

                        <div class="row layout-spacing">
                            <div class="col-lg-12">
                                <div class="statbox widget box box-shadow">
                                    <div class="widget-content widget-content-area">
                                        <table id="style-3" class="table style-3 dt-table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="checkbox-column text-center"> Employee Id </th>
                                                    <!-- <th class="text-center">Image</th> -->
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Department</th>
                                                    <th>Designation</th>
                                                    <th>Mobile No.</th>
                                                    <th>Gender</th>
                                                    <th>Mobile No.</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center dt-no-sorting">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($employee as $row)
                                                <tr>
                                                    <td class="checkbox-column text-center"> {{$row->id}} </td>
                                                    <!-- <td class="text-center">
                                                            <span><img src="../src/assets/img/profile-17.jpeg" class="profile-img" alt="avatar"></span>
                                                        </td> -->

                                                    <td> {{$row->first_name}} </td>
                                                    <td> {{$row->last_name}} </td>
                                                    <td> {{$row->dpt_id}} </td>
                                                    <td> {{$row->dst_id}} </td>
                                                    <td> {{$row->mobile_no}} </td>
                                                    <td>   @if($row->gender==1) 
                                                        Male
                                                        @elseif($row->gender==2) 
                                                        Female
                                                        @elseif($row->gender==3) 
                                                        Other
                                                        @else
                                                        Undefined
                                                        @endif 
                                                    </td>
                                                    <td> {{$row->addresses}} </td>
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
                                                            <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                                    </svg></a></li>
                                                            <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1">
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                    </svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @endforeach
                                                <!-- <tr>
                                                        <td class="checkbox-column text-center"> 2 </td>
                                                        <td class="text-center">
                                                            <span><img src="../src/assets/img/profile-19.jpeg" class="profile-img" alt="avatar"></span>
                                                        </td>
                                                        <td>Andy</td>
                                                        <td>King</td>
                                                        <td>andyking@gmail.com</td>
                                                        <td>555-555-6666</td>
                                                        <td class="text-center"><span class="shadow-none badge badge-warning">Suspended</span></td>
                                                        <td class="text-center">
                                                            <ul class="table-controls">
                                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                                        </svg></a></li>
                                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1">
                                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                        </svg></a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="checkbox-column text-center"> 3 </td>
                                                        <td class="text-center">
                                                            <span><img src="../src/assets/img/profile-20.jpeg" class="profile-img" alt="avatar"></span>
                                                        </td>
                                                        <td>Alma</td>
                                                        <td>Clarke</td>
                                                        <td>Alma@live.com</td>
                                                        <td>777-555-5555</td>
                                                        <td class="text-center"><span class="shadow-none badge badge-danger">Closed</span></td>
                                                        <td class="text-center">
                                                            <ul class="table-controls">
                                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                                        </svg></a></li>
                                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1">
                                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                        </svg></a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="checkbox-column text-center"> 4 </td>
                                                        <td class="text-center">
                                                            <span><img src="../src/assets/img/profile-21.jpeg" class="profile-img" alt="avatar"></span>
                                                        </td>
                                                        <td>Vincent</td>
                                                        <td>Carpenter</td>
                                                        <td>vinnyc@outlook.com</td>
                                                        <td>555-666-5555</td>
                                                        <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                                                        <td class="text-center">
                                                            <ul class="table-controls">
                                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                                        </svg></a></li>
                                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1">
                                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                        </svg></a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="checkbox-column text-center"> 5 </td>
                                                        <td class="text-center">
                                                            <span><img src="../src/assets/img/profile-22.jpeg" class="profile-img" alt="avatar"></span>
                                                        </td>
                                                        <td>Kristen</td>
                                                        <td>Beck</td>
                                                        <td>kristen@adobe.com</td>
                                                        <td>444-444-4444</td>
                                                        <td class="text-center"><span class="shadow-none badge badge-warning">Suspended</span></td>
                                                        <td class="text-center">
                                                            <ul class="table-controls">
                                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                                        </svg></a></li>
                                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1">
                                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                        </svg></a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="checkbox-column text-center"> 6 </td>
                                                        <td class="text-center">
                                                            <span><img src="../src/assets/img/profile-23.jpeg" class="profile-img" alt="avatar"></span>
                                                        </td>
                                                        <td>Oscar</td>
                                                        <td>Garner</td>
                                                        <td>oscar@gmail.com</td>
                                                        <td>111-111-1111</td>
                                                        <td class="text-center"><span class="shadow-none badge badge-danger">Closed</span></td>
                                                        <td class="text-center">
                                                            <ul class="table-controls">
                                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                                        </svg></a></li>
                                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1">
                                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                        </svg></a></li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="checkbox-column text-center"> 7 </td>
                                                        <td class="text-center">
                                                            <span><img src="../src/assets/img/profile-24.jpeg" class="profile-img" alt="avatar"></span>
                                                        </td>
                                                        <td>Nia</td>
                                                        <td>Hillyer</td>
                                                        <td>niaHill@yahoo.com</td>
                                                        <td>111-666-1111</td>
                                                        <td class="text-center"><span class="shadow-none badge badge-primary">Approved</span></td>
                                                        <td class="text-center">
                                                            <ul class="table-controls">
                                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                                        </svg></a></li>
                                                                <li><a href="javascript:void(0);" class="bs-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-8 mb-1">
                                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                        </svg></a></li>
                                                            </ul>
                                                        </td>
                                                    </tr> -->
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