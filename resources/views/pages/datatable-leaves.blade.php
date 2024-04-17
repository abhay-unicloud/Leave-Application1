@extends('layouts.default')

@section('content')
    <div id="content" class="main-content">
        <div class="container">
            <div class="container">

                <!-- BREADCRUMB -->
                <div class="page-meta">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('tables') }}">Table</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Leaves Table</li>
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
                                        <h4>Leaves Table</h4>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-xl-12 col-md-3 col-sm-6">
                                <a href="javascript:void(0);" class="btn btn-secondary btn-print  action-print">Print</a>
                                <button
                                    class="dt-button buttons-excel buttons-html5 btn _effect--ripple waves-effect waves-light"
                                    tabindex="0" aria-controls="html5-extension"><span>Excel</span></button>
                            </div> --}}

                            <div class="row layout-spacing">
                                <div class="col-lg-12">
                                    <div class="statbox widget box box-shadow">
                                        <div id="printarea" class="widget-content widget-content-area m-1 p-2">
                                            <table id="html5-extension" class="table dt-table-hover" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th class="checkbox-column text-center"> Sr No. </th>
                                                        <!-- <th class="text-center">Image</th> -->
                                                        <th>Leave Id</th>
                                                        <th>Employee Id</th>
                                                        <th>Leave Type</th>
                                                        <th>Start Date</th>
                                                        <th>End Date</th>
                                                        <th>Reason</th>
                                                        <th>Location</th>
                                                        @if (Session::has('pcp_admin') || Session::has('super_admin'))
                                                            <th>Approval As Principal</th>
                                                        @elseif (Session::has('hod_admin') || Session::has('super_admin'))
                                                            <th>Approval As HOD</th>
                                                        @elseif (Session::has('vc_admin') || Session::has('super_admin'))
                                                            <th>Approval As Vice President</th>
                                                        @endif
                                                        <th>Comment</th>
                                                        {{-- <th class="text-center">Status</th>  --}}
                                                        <th class="text-center dt-no-sorting">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                    @foreach ($leaves as $row)
                                                        <td class="checkbox-column text-center"> {{ ++$i}} </td>
                                                        <!-- <td class="text-center">
                                                                                <span><img src="../src/assets/img/profile-17.jpeg" class="profile-img" alt="avatar"></span>
                                                                            </td> -->

                                                        <td> {{ $row->leave_id }} </td>
                                                        <td> {{ $row->first_name }} {{ $row->last_name }} </td>
                                                        <td> {{ $row->lt_name }} </td>
                                                        <td> {{ $row->start_date }} </td>
                                                        <td> {{ $row->end_date }} </td>
                                                        <td> {{ $row->reason }} </td>
                                                        <td> {{ $row->location }} </td>
                                                        @if (Session::has('pcp_admin') || Session::has('super_admin'))
                                                            <td class="text-center"><span id="approval"
                                                                    class="shadow-none badge  @if ($row->approval_pcp == 0) badge-light-primary
                                                        @elseif($row->approval_pcp == 1)
                                                        badge-light-success
                                                        @elseif($row->final_approval == 1)
                                                    badge-light-secondary 
                                                        @else
                                                        badge-light-danger @endif">
                                                                    @if ($row->approval_pcp == 0)
                                                                        Pending
                                                                    @elseif($row->approval_pcp == 1)
                                                                        Approved
                                                                    @elseif($row->final_approval == 1)
                                                                        SPL.Approved
                                                                    @else
                                                                        Decline
                                                                    @endif

                                                                </span></td>
                                                        @elseif (Session::has('hod_admin') || Session::has('super_admin'))
                                                            <td class="text-center"><span id="approval"
                                                                    class="shadow-none badge  @if ($row->approval_hod == 0) badge-light-primary
                                                        @elseif($row->approval_hod == 1)
                                                        badge-light-success
                                                        @elseif($row->final_approval == 1)
                                                    badge-light-secondary 
                                                        @else
                                                        badge-light-danger @endif">
                                                                    @if ($row->approval_hod == 0)
                                                                        Pending
                                                                    @elseif($row->approval_hod == 1)
                                                                        Approved
                                                                    @elseif($row->final_approval == 1)
                                                                        SPL.Approved
                                                                    @else
                                                                        Decline
                                                                    @endif

                                                                </span></td>
                                                        @elseif (Session::has('vc_admin') || Session::has('super_admin'))
                                                            <td class="text-center"><span id="approval"
                                                                    class="shadow-none badge  @if ($row->approval_vc == 0) badge-light-primary
                                                    @elseif($row->approval_vc == 1)
                                                    badge-light-success
                                                    @elseif($row->final_approval == 1)
                                                    badge-light-secondary 
                                                    @else
                                                    badge-light-danger @endif">
                                                                    @if ($row->approval_vc == 0)
                                                                        Pending
                                                                    @elseif($row->approval_vc == 1)
                                                                        Approved
                                                                    @elseif($row->final_approval == 1)
                                                                        SPL.Approved
                                                                    @else
                                                                        Decline
                                                                    @endif

                                                                </span></td>
                                                        @endif

                                                        <td> {{ $row->comment }} </td>
                                                        {{-- <td id="approvalStatus" class="text-center"><span
                                                                class="shadow-none badge   @if ($row->leave_status == 0) badge-light-primary
                                                            @elseif($row->leave_status == 1)
                                                            badge-light-success
                                                            @else
                                                            badge-light-danger @endif">
                                                                @if ($row->leave_status == 0)
                                                                    Pending
                                                                @elseif($row->leave_status == 1)
                                                                    Approved
                                                                @else
                                                                    Decline
                                                                @endif
                                                            </span></td>  --}}
                                                        <td class="text-center">
                                                            <ul class="table-controls">
                                                                @if (Session::has('pcp_admin') || Session::has('super_admin'))
                                                                    @if ($row->approval_pcp == 0 || $row->final_approval == 0)
                                                                        <li><a href="{{ route('updating-leaves-form-edit', [$row->leave_id]) }}"
                                                                                class="bs-tooltip" data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title="Edit"
                                                                                data-original-title="Edit"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                                    <path
                                                                                        d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                    </path>
                                                                                </svg></a></li>
                                                                    @endif
                                                                @elseif (Session::has('hod_admin') || Session::has('super_admin'))
                                                                    @if ($row->approval_hod == 0 || $row->final_approval == 0)
                                                                        <li><a href="{{ route('updating-leaves-form-edit', [$row->leave_id]) }}"
                                                                                class="bs-tooltip" data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title="Edit"
                                                                                data-original-title="Edit"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                                    <path
                                                                                        d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                    </path>
                                                                                </svg></a></li>
                                                                    @endif
                                                                @elseif (Session::has('vc_admin') || Session::has('super_admin'))
                                                                    @if ($row->approval_vc == 0 || $row->final_approval == 0)
                                                                        <li><a href="{{ route('updating-leaves-form-edit', [$row->leave_id]) }}"
                                                                                class="bs-tooltip" data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title="Edit"
                                                                                data-original-title="Edit"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                                    <path
                                                                                        d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                    </path>
                                                                                </svg></a></li>
                                                                    @endif
                                                                @endif


                                                                <li><a onclick="return confirm('Are you sure you want to delete this item?');"
                                                                        href="{{ route('updating-employee-form-delete', [$row->leave_id]) }}"
                                                                        class="bs-tooltip" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Delete"
                                                                        data-original-title="Delete"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="feather feather-trash p-1 br-8 mb-1">
                                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                                            <path
                                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                            </path>
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

                            {{-- <div class="row layout-spacing">
                                <div class="col-lg-12">
                                    <div class="statbox widget box box-shadow">
                                        <div id="printarea" class="widget-content widget-content-area m-1 p-2">
                                            <table id="style-3" class="table style-3 dt-table-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="checkbox-column text-center"> Leave Id </th>
                                                        <!-- <th class="text-center">Image</th> -->
                                                        <th>Employee Id</th>
                                                        <th>Leave Type</th>
                                                        <th>Start Date</th>
                                                        <th>How long</th>
                                                        <th>Reason</th>
                                                        <th>Location</th>
                                                        @if (Session::has('pcp_admin'))
                                                            <th>Approval As Principal</th>
                                                        @elseif (Session::has('hod_admin'))
                                                            <th>Approval As HOD</th>
                                                        @elseif (Session::has('vc_admin'))
                                                            <th>Approval As Vice President</th>
                                                        @endif
                                                        <th>Comment</th>
                                                        {{-- <th class="text-center">Status</th> 
                                                        <th class="text-center dt-no-sorting">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($leaves as $row)
                                                        <td class="checkbox-column text-center"> {{ $row->leave_id }} </td>
                                                        <!-- <td class="text-center">
                                                                            <span><img src="../src/assets/img/profile-17.jpeg" class="profile-img" alt="avatar"></span>
                                                                        </td> -->

                                                        <td> {{ $row->emp_id }} </td>
                                                        <td> {{ $row->lt_name }} </td>
                                                        <td> {{ $row->start_date }} </td>
                                                        <td> {{ $row->end_date }} </td>
                                                        <td> {{ $row->reason }} </td>
                                                        <td> {{ $row->location }} </td>
                                                        @if (Session::has('pcp_admin'))
                                                            <td class="text-center"><span id="approval"
                                                                    class="shadow-none badge  @if ($row->approval_pcp == 0) badge-light-primary
                                                        @elseif($row->approval_pcp == 1)
                                                        badge-light-success
                                                        @else
                                                        badge-light-danger @endif">
                                                                    @if ($row->approval_pcp == 0)
                                                                        Pending
                                                                    @elseif($row->approval_pcp == 1)
                                                                        Approved
                                                                    @else
                                                                        Decline
                                                                    @endif

                                                                </span></td>
                                                        @elseif (Session::has('hod_admin'))
                                                            <td class="text-center"><span id="approval"
                                                                    class="shadow-none badge  @if ($row->approval_hod == 0) badge-light-primary
                                                        @elseif($row->approval_hod == 1)
                                                        badge-light-success
                                                        @else
                                                        badge-light-danger @endif">
                                                                    @if ($row->approval_hod == 0)
                                                                        Pending
                                                                    @elseif($row->approval_hod == 1)
                                                                        Approved
                                                                    @else
                                                                        Decline
                                                                    @endif

                                                                </span></td>
                                                        @elseif (Session::has('vc_admin'))
                                                            <td class="text-center"><span id="approval"
                                                                    class="shadow-none badge  @if ($row->approval_vc == 0) badge-light-primary
                                                    @elseif($row->approval_vc == 1)
                                                    badge-light-success
                                                    @else
                                                    badge-light-danger @endif">
                                                                    @if ($row->approval_vc == 0)
                                                                        Pending
                                                                    @elseif($row->approval_vc == 1)
                                                                        Approved
                                                                    @else
                                                                        Decline
                                                                    @endif

                                                                </span></td>
                                                        @endif

                                                        <td> {{ $row->comment }} </td>
                                                        {{-- <td id="approvalStatus" class="text-center"><span
                                                                class="shadow-none badge   @if ($row->leave_status == 0) badge-light-primary
                                                            @elseif($row->leave_status == 1)
                                                            badge-light-success
                                                            @else
                                                            badge-light-danger @endif">
                                                                @if ($row->leave_status == 0)
                                                                    Pending
                                                                @elseif($row->leave_status == 1)
                                                                    Approved
                                                                @else
                                                                    Decline
                                                                @endif
                                                            </span></td> 
                                                        <td class="text-center">
                                                            <ul class="table-controls">
                                                                @if (Session::has('pcp_admin'))
                                                                    @if ($row->approval_pcp == 0)
                                                                        <li><a href="{{ route('updating-leaves-form-edit', [$row->leave_id]) }}"
                                                                                class="bs-tooltip"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title="Edit"
                                                                                data-original-title="Edit"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                                    <path
                                                                                        d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                    </path>
                                                                                </svg></a></li>
                                                                    @endif
                                                                @elseif (Session::has('hod_admin'))
                                                                    @if ($row->approval_hod == 0)
                                                                        <li><a href="{{ route('updating-leaves-form-edit', [$row->leave_id]) }}"
                                                                                class="bs-tooltip"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title="Edit"
                                                                                data-original-title="Edit"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                                    <path
                                                                                        d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                    </path>
                                                                                </svg></a></li>
                                                                    @endif
                                                                @elseif (Session::has('vc_admin'))
                                                                    @if ($row->approval_vc == 0)
                                                                        <li><a href="{{ route('updating-leaves-form-edit', [$row->leave_id]) }}"
                                                                                class="bs-tooltip"
                                                                                data-bs-toggle="tooltip"
                                                                                data-bs-placement="top" title="Edit"
                                                                                data-original-title="Edit"><svg
                                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor" stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-edit-2 p-1 br-8 mb-1">
                                                                                    <path
                                                                                        d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                                    </path>
                                                                                </svg></a></li>
                                                                    @endif
                                                                @endif


                                                                <li><a onclick="return confirm('Are you sure you want to delete this item?');"
                                                                        href="{{ route('updating-employee-form-delete', [$row->leave_id]) }}"
                                                                        class="bs-tooltip" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Delete"
                                                                        data-original-title="Delete"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round"
                                                                            class="feather feather-trash p-1 br-8 mb-1">
                                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                                            <path
                                                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                            </path>
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
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- </div> --}}
    @endsection
    @push('script')
        <script>
            $(document).ready(function() {
                function changeClass(approvalStatus) {
                    var approvalSpan = $('#approvalStatus');
                    if (approvalStatus == 0) {
                        approvalSpan.removeClass('badge-primary').addClass(
                            'badge-warning'); // Example class to change to for Pending status
                    } else if (approvalStatus == 1) {
                        approvalSpan.removeClass('badge-primary').addClass(
                            'badge-success'); // Example class to change to for Approved status
                    } else {
                        approvalSpan.removeClass('badge-primary').addClass(
                            'badge-danger'); // Example class to change to for Declined status
                    }
                }
                var newApprovalValue = 1; // Example value, replace this with your dynamic value
                changeClass(newApprovalValue);
            });
        </script>
    @endpush
