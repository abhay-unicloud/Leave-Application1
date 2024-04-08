  <!--  BEGIN MAIN CONTAINER  -->
  <div class="main-container" id="container">

      <div class="overlay"></div>
      <div class="search-overlay"></div>

      <!--  BEGIN SIDEBAR  -->
      <div class="sidebar-wrapper sidebar-theme">

          <nav id="sidebar">

              <div class="navbar-nav theme-brand flex-row  text-center">
                  <div class="nav-logo">
                      <div class="nav-item theme-logo">
                          <a href="{{ route('index') }}">
                              <img src="{{ asset('assets\src\assets\img\vbpc logo.png') }}" class="--navbar-logo"
                                  alt="logo">
                          </a>
                      </div>
                      <div class="nav-item theme-text">
                          <a href="{{ route('index') }}" class="nav-link "> VBPC </a>
                      </div>
                  </div>
                  <div class="nav-item sidebar-toggle">
                      <div class="btn-toggle sidebarCollapse">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-chevrons-left">
                              <polyline points="11 17 6 12 11 7"></polyline>
                              <polyline points="18 17 13 12 18 7"></polyline>
                          </svg>
                      </div>
                  </div>
              </div>

              <div class="profile-info">
                  <div class="user-info">
                      <div class="profile-img">
                          <input type="hidden" value="{{$admindata= Session::get('admin_data')}}">
                         <a href="{{route('index')}}"> <img src="{{ asset($admindata->image) }}" alt="avatar"></a>
                      </div>
                      <div class="profile-content">
                        <h6>{{$admindata->first_name}} {{$admindata->last_name}}</h6>
                        <p>{{$admindata->dst_name}}</p>
                      </div>
                  </div>
              </div>

              <div class="shadow-bottom"></div>
              <ul class="list-unstyled menu-categories" id="accordionExample">
                  <li class="menu active">
                      <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-home">
                                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                              </svg>
                              <span>Dashboard</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>
                      <ul class="collapse submenu list-unstyled show" id="dashboard" data-bs-parent="#accordionExample">
                          <li class="active">
                              <a href="{{ route('index') }}"> Analytics </a>
                          </li>
                          <li>
                              <a href="{{ route('index2') }}"> Sales </a>
                          </li>
                      </ul>
                  </li>



                  <li class="menu menu-heading">
                      <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                              viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                              stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                              <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg><span>TABLES AND FORMS</span></div>
                  </li>

                  <li class="menu">
                      <a href="{{ route('tables') }}" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                  fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round" class="feather feather-layout">
                                  <rect x="3" y="3" width="18" height="18" rx="2" ry="2">
                                  </rect>
                                  <line x1="3" y1="9" x2="21" y2="9"></line>
                                  <line x1="9" y1="21" x2="9" y2="9"></line>
                              </svg>
                              <span>Tables</span>
                          </div>
                      </a>
                  </li>

                  <li class="menu">
                      <a href="#datatables" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                  <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                  <polyline points="2 17 12 22 22 17"></polyline>
                                  <polyline points="2 12 12 17 22 12"></polyline>
                              </svg>
                              <span>DataTables</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"
                                  class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>
                      <ul class="collapse submenu list-unstyled" id="datatables" data-bs-parent="#accordionExample">
                          <li>
                              <a href="{{ route('datatable-employees') }}"> Employee Table </a>
                          </li>
                          <li>
                              <a href="{{ route('datatable-departments') }}"> Department Table </a>
                          </li>
                          <li>
                              <a href="{{ route('datatable-designations') }}"> Designation Table </a>
                          </li>
                          <li>
                              <a href="{{ route('datatable-staff') }}"> Staff Table </a>
                          </li>
                          <li>
                              <a href="{{ route('datatable-leave_types') }}"> Leave_types Table </a>
                          </li>
                          <li>
                              <a href="{{ route('datatable-leaves') }}"> Leaves Table </a>
                          </li>
                      </ul>
                  </li>

                  <li class="menu">
                      <a href="#forms" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
                                  <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2">
                                  </path>
                                  <rect x="8" y="2" width="8" height="4" rx="1" ry="1">
                                  </rect>
                              </svg>
                              <span>Forms</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                  viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                  stroke-linecap="round" stroke-linejoin="round"
                                  class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>
                      <ul class="collapse submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
                          <li>
                              <a href="{{ route('Leave_Application') }}"> Leave-Application-From </a>
                          </li>
                          <li>
                              <a href="{{ route('registration-employee-form') }}"> Registration-employee-form </a>
                          </li>
                          <li>
                              <a href="{{ route('add_depart') }}"> Add Departments </a>
                          </li>
                          <li>
                              <a href="{{ route('add_design') }}"> Add Designations </a>
                          </li>

                      </ul>
                  </li>
                  <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>USER AND PAGES</span></div>
                    </li>                    

                    <li class="menu">
                        <a href="#users" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Users</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="users" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./user-profile.html"> Profile </a>
                            </li>
                            <li>
                                <a href="./user-account-settings.html"> Account Settings </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#pages" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span>Pages</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="pages" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./pages-knowledge-base.html"> Knowledge Base </a>
                            </li>
                            <li>
                                <a href="./pages-faq.html"> FAQ </a>
                            </li>
                            <li>
                                <a href="./pages-contact-us.html"> Contact Form </a>
                            </li>
                            <li>
                                <a href="./pages-error404.html" target="_blank"> Error </a>
                            </li>
                            <li>
                                <a href="./pages-maintenence.html" target="_blank"> Maintanence </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#authentication" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                <span>Authentication</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="authentication" data-bs-parent="#accordionExample">
                            <li>
                                <a href="./auth-boxed-signin.html" target="_blank"> Sign In </a>
                            </li>
                            <li>
                                <a href="./auth-boxed-signup.html" target="_blank"> Sign Up </a>
                            </li>
                            <li>
                                <a href="./auth-boxed-lockscreen.html" target="_blank"> Unlock </a>
                            </li>
                            <li>
                                <a href="./auth-boxed-password-reset.html" target="_blank"> Reset </a>
                            </li>
                            <li>
                                <a href="./auth-boxed-2-step-verification.html" target="_blank"> 2 Step </a>
                            </li>
                            <li>
                                <a href="./auth-cover-signin.html" target="_blank"> Sign In Cover </a>
                            </li>
                            <li>
                                <a href="./auth-cover-signup.html" target="_blank"> Sign Up Cover </a>
                            </li>
                            <li>
                                <a href="./auth-cover-lockscreen.html" target="_blank"> Unlock Cover </a>
                            </li>
                            <li>
                                <a href="./auth-cover-password-reset.html" target="_blank"> Reset Cover </a>
                            </li>
                            <li>
                                <a href="./auth-cover-2-step-verification.html" target="_blank"> 2 Step Cover </a>
                            </li>
                        </ul>
                    </li>
              </ul>
          </nav>
      </div>
      <!--  END SIDEBAR  -->
 <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
 <script src="{{ url('assets/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ url('assets/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
 {{-- <script src="{{ url('assets/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
 <script src="{{ url('assets/src/plugins/src/waves/waves.min.js') }}"></script> --}}
 <script src="{{ url('assets/layouts/modern-light-menu/app.js') }}"></script>
 {{-- <script src="{{ url('assets/src/plugins/src/highlight/highlight.pack.js') }}"></script> --}}
 <!-- END GLOBAL MANDATORY SCRIPTS -->
 
 <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
 {{-- <script src="{{ url('assets/src/plugins/src/apex/apexcharts.min.js') }}"></script>
 <script src="{{ url('assets/src/assets/js/dashboard/dash_1.js') }}"></script> --}}
  <!--  END NAVBAR  -->
 