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
                          <a href="{{route('index')}}">
                              <img src="{{ asset('assets/src/assets/img/logo.svg') }}" class="navbar-logo" alt="logo">
                          </a>
                      </div>
                      <div class="nav-item theme-text">
                          <a href="{{route('index')}}" class="nav-link"> CORK </a>
                      </div>
                  </div>
                  <div class="nav-item sidebar-toggle">
                      <div class="btn-toggle sidebarCollapse">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left">
                              <polyline points="11 17 6 12 11 7"></polyline>
                              <polyline points="18 17 13 12 18 7"></polyline>
                          </svg>
                      </div>
                  </div>
              </div>

              <div class="profile-info">
                  <div class="user-info">
                      <div class="profile-img">
                          <img src="{{ asset('assets/src/assets/img/profile-30.png') }}" alt="avatar">
                      </div>
                      <div class="profile-content">
                          <h6 class="">Shaun Park</h6>
                          <p class="">Project Leader</p>
                      </div>
                  </div>
              </div>

              <div class="shadow-bottom"></div>
              <ul class="list-unstyled menu-categories" id="accordionExample">
                  <li class="menu active">
                      <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                              </svg>
                              <span>Dashboard</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>
                      <ul class="collapse submenu list-unstyled show" id="dashboard" data-bs-parent="#accordionExample">
                          <li class="active">
                              <a href="{{route('index')}}"> Analytics </a>
                          </li>
                          <li>
                              <a href="{{route('index2')}}"> Sales </a>
                          </li>
                      </ul>
                  </li>

                

                  <li class="menu menu-heading">
                      <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                              <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg><span>TABLES AND FORMS</span></div>
                  </li>

                  <li class="menu">
                      <a href="{{route('tables')}}" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout">
                                  <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
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
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                  <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                  <polyline points="2 17 12 22 22 17"></polyline>
                                  <polyline points="2 12 12 17 22 12"></polyline>
                              </svg>
                              <span>DataTables</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>
                      <ul class="collapse submenu list-unstyled" id="datatables" data-bs-parent="#accordionExample">
                          <li>
                          <a href="{{route('datatable-employees')}}"> Employee Table </a>
                          </li>
                          <li>
                          <a href="{{route('datatable-departments')}}"> Department Table </a>
                          </li>
                          <li>
                              <a href="{{route('datatable-designations')}}"> Designation Table </a>
                          </li>
                          <li>
                              <a href="{{route('datatable-staff')}}"> Staff Table </a>
                          </li>
                          <li>
                              <a href="{{route('datatable-leave_types')}}"> Leave_types Table </a>
                          </li>
                      </ul>
                  </li>

                  <li class="menu">
                      <a href="#forms" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard">
                                  <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                                  <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                              </svg>
                              <span>Forms</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>
                      <ul class="collapse submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
                          <li>
                              <a href="{{route('Leave-Application')}}"> Leave-Application-From </a>
                          </li>
                          <li>
                              <a href="{{route('registration-employee-form')}}"> Registration-employee-form </a>
                          </li>
                          <li>
                              <a href="./form-layouts.html"> Layouts </a>
                          </li>
                          <li>
                              <a href="./form-validation.html"> Validation </a>
                          </li>
                          <li>
                              <a href="./form-input-mask.html"> Input Mask </a>
                          </li>
                          <li>
                              <a href="./form-tom-select.html"> Tom Select </a>
                          </li>
                          <li>
                              <a href="./form-tagify.html"> Tagify </a>
                          </li>
                          <li>
                              <a href="./form-bootstrap-touchspin.html"> TouchSpin </a>
                          </li>
                          <li>
                              <a href="./form-maxlength.html"> Maxlength </a>
                          </li>
                          <li>
                              <a href="./form-checkbox.html"> Checkbox </a>
                          </li>
                          <li>
                              <a href="./form-radio.html"> Radio </a>
                          </li>
                          <li>
                              <a href="./form-switches.html"> Switches </a>
                          </li>
                          <li>
                              <a href="./form-wizard.html"> Wizards </a>
                          </li>
                          <li>
                              <a href="./form-fileupload.html"> File Upload </a>
                          </li>
                          <li>
                              <a href="./form-quill.html"> Quill Editor </a>
                          </li>
                          <li>
                              <a href="./form-markdown.html"> Markdown Editor </a>
                          </li>
                          <li>
                              <a href="./form-date-time-picker.html"> Date Time Picker </a>
                          </li>
                          <li>
                              <a href="./form-slider.html"> Slider </a>
                          </li>
                          <li>
                              <a href="./form-clipboard.html"> Clipboard </a>
                          </li>
                          <li>
                              <a href="./form-autoComplete.html"> Auto Complete </a>
                          </li>
                      </ul>
                  </li>

                  <li class="menu menu-heading">
                      <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                              <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg><span>USER AND PAGES</span></div>
                  </li>

                  <li class="menu">
                      <a href="#users" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                  <circle cx="9" cy="7" r="4"></circle>
                                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                              </svg>
                              <span>Users</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
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
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file">
                                  <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                  <polyline points="13 2 13 9 20 9"></polyline>
                              </svg>
                              <span>Pages</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
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
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                                  <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                  <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                              </svg>
                              <span>Authentication</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
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

                  <li class="menu menu-heading">
                      <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                              <line x1="5" y1="12" x2="19" y2="12"></line>
                          </svg><span>MISCELLANEOUS</span></div>
                  </li>

                  <li class="menu">
                      <a href="#menuLevel1" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                  <line x1="8" y1="6" x2="21" y2="6"></line>
                                  <line x1="8" y1="12" x2="21" y2="12"></line>
                                  <line x1="8" y1="18" x2="21" y2="18"></line>
                                  <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                  <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                  <line x1="3" y1="18" x2="3.01" y2="18"></line>
                              </svg>
                              <span>Item Level</span>
                          </div>
                          <div>
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                  <polyline points="9 18 15 12 9 6"></polyline>
                              </svg>
                          </div>
                      </a>
                      <ul class="collapse submenu list-unstyled" id="menuLevel1" data-bs-parent="#accordionExample">
                          <li>
                              <a href="javascript:void(0);"> Item Level 1a </a>
                          </li>
                          <li>
                              <a href="javascript:void(0);"> Item Level 1b </a>
                          </li>

                          <li>
                              <a href="#level-three" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed"> Item Level 1c <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                      <polyline points="9 18 15 12 9 6"></polyline>
                                  </svg> </a>
                              <ul class="collapse list-unstyled sub-submenu" id="level-three" data-bs-parent="#pages">
                                  <li>
                                      <a href="javascript:void(0);"> Item Level 2a </a>
                                  </li>
                                  <li>
                                      <a href="javascript:void(0);"> Item Level 2b </a>
                                  </li>
                                  <li>
                                      <a href="javascript:void(0);"> Item Level 2c </a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </li>

                  <li class="menu">
                      <a href="javascript:void(0);" aria-expanded="false" class="dropdown-toggle disabled">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                  <line x1="8" y1="6" x2="21" y2="6"></line>
                                  <line x1="8" y1="12" x2="21" y2="12"></line>
                                  <line x1="8" y1="18" x2="21" y2="18"></line>
                                  <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                  <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                  <line x1="3" y1="18" x2="3.01" y2="18"></line>
                              </svg>
                              <span>Item Disabled</span>
                          </div>
                      </a>
                  </li>

                  <li class="menu">
                      <a href="javascript:void(0);" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                  <line x1="8" y1="6" x2="21" y2="6"></line>
                                  <line x1="8" y1="12" x2="21" y2="12"></line>
                                  <line x1="8" y1="18" x2="21" y2="18"></line>
                                  <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                  <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                  <line x1="3" y1="18" x2="3.01" y2="18"></line>
                              </svg>
                              <span>Item Label</span>
                              <span class="badge badge-primary sidebar-label"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle badge-icon">
                                      <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                  </svg> New</span>
                          </div>
                      </a>
                  </li>

                  <li class="menu">
                      <a target="_blank" href="../../documentation/index.html" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                                  <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                  <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                              </svg>
                              <span>Documentation</span>
                          </div>
                      </a>
                  </li>
                  <li class="menu">
                      <a target="_blank" href="../../documentation/changelog.html" aria-expanded="false" class="dropdown-toggle">
                          <div class="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hash">
                                  <line x1="4" y1="9" x2="20" y2="9"></line>
                                  <line x1="4" y1="15" x2="20" y2="15"></line>
                                  <line x1="10" y1="3" x2="8" y2="21"></line>
                                  <line x1="16" y1="3" x2="14" y2="21"></line>
                              </svg>
                              <span>Changelog</span>
                          </div>
                      </a>
                  </li>

              </ul>

          </nav>

      </div>
      <!--  END SIDEBAR  -->