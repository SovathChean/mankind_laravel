<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Sofbox - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{asset('css/typography.css')}}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
            <div class="loader">
               <div class="cube">
                  <div class="sides">
                     <div class="top"></div>
                     <div class="right"></div>
                     <div class="bottom"></div>
                     <div class="left"></div>
                     <div class="front"></div>
                     <div class="back"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
      <!-- Sidebar  -->
      <div class="iq-sidebar">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="index.html">
            <img src="{{asset('images/logo.png')}}" class="img-fluid" alt="">
            <span>Sofbox</span>
            </a>
            <div class="iq-menu-bt align-self-center">
               <div class="wrapper-menu">
                  <div class="line-menu half start"></div>
                  <div class="line-menu"></div>
                  <div class="line-menu half end"></div>
               </div>
            </div>
         </div>
         <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
               <ul class="iq-menu">
                 <li class="iq-menu-title"><i class="ri-separator"></i><span>Users</span></li>
                 <li class="active">
                     <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Users</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul class="iq-submenu">
                       <li><a href="{{route('user.index') }}">Users record</a></li>
                       <li><a href="{{route('user.create') }}">Create User</a></li>
                     </ul>
                </li>
                  <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>
                @role('doctor|Admin')
                 <li>
                     <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Blogs</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul class="iq-submenu">
                        <li><a href="{{route('add_blog.index') }}">Blogs record</a></li>
                        {{-- <li class="active"><a href="dashboard1.html">Dashboard 2</a></li> --}}
                        <li><a href="{{route('add_blog.create')}}">Add blog</a></li>
                        {{-- <li><a href="{{route('add_blog.show')}}">Edit blog</a></li> --}}
                        {{-- <li><a href="tracking.html">Tracking</a></li>
                        <li><a href="web-analytics.html">Web Analytics</a></li>
                        <li><a href="patient-dashboard.html">Patient</a></li>
                        <li><a href="ticket-booking.html">Ticket Booking</a></li> --}}
                     </ul>
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Health topic</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul class="iq-submenu">
                      <li><a href="{{route('health_topic.index') }}">Topic</a></li>
                    </ul>
                  </li>
                  @endrole
                  @role('Admin')
                  <li class="iq-menu-title"><i class="ri-separator"></i><span>Install role</span></li>
                  <li>
                      <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-home-4-line"></i><span>Role</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                      <ul class="iq-submenu">
                            <li><a href="{{route('create_role.index')}}">Create role</a></li>
                      </ul>
                 </li>
                 @endrole
                  {{-- <li>
                     <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-mail-line"></i><span>Email</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul class="iq-submenu">
                        <li><a href="app/index.html">Inbox</a></li>
                        <li><a href="app/email-compose.html">Email Compose</a></li>
                     </ul>
                  </li> --}}
                  <li><a href='{!! url('/admin/calendar'); !!}' class="iq-waves-effect"><i class="ri-calendar-2-line"></i><span>Calendar</span></a></li>
                  {{-- <li><a href="#" class="iq-waves-effect"><i class="ri-message-line"></i><span>Chat</span><small class="badge badge-pill badge-primary float-right font-weight-normal ml-auto">Soon</small></a></li>
                  <li><a href="#" class="iq-waves-effect"><i class="ri-shopping-cart-line"></i><span>eCommerce</span><small class="badge badge-pill badge-primary float-right font-weight-normal ml-auto">Soon</small></a></li> --}}
                  {{-- <li class="iq-menu-title"><i class="ri-separator"></i><span>Components</span></li>
                  <li>
                     <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-pencil-ruler-line"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul class="iq-submenu">
                        <li><a href="ui-colors.html">colors</a></li>
                        <li><a href="ui-typography.html">Typography</a></li>
                        <li><a href="ui-alerts.html">Alerts</a></li>
                        <li><a href="ui-badges.html">Badges</a></li>
                        <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                        <li><a href="ui-embed-video.html">Video</a></li>
                        <li><a href="ui-grid.html">Grid</a></li>
                        <li><a href="ui-images.html">Images</a></li>
                        <li><a href="ui-list-group.html">list Group</a></li>
                        <li><a href="ui-media-object.html">Media</a></li>
                        <li><a href="ui-modal.html">Modal</a></li>
                        <li><a href="ui-notifications.html">Notifications</a></li>
                        <li><a href="ui-pagination.html">Pagination</a></li>
                        <li><a href="ui-popovers.html">Popovers</a></li>
                        <li><a href="ui-progressbars.html">Progressbars</a></li>
                        <li><a href="ui-tabs.html">Tabs</a></li>
                        <li><a href="ui-tooltips.html">Tooltips</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-profile-line"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul class="iq-submenu">
                        <li><a href="form-layout.html">Form Elements</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-switch.html">Form Switch</a></li>
                        <li><a href="form-chechbox.html">Form Checkbox</a></li>
                        <li><a href="form-radio.html">Form Radio</a></li>
                        <li><a href="#">Form Wizard</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-table-line"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul class="iq-submenu">
                        <li><a href="tables-basic.html">Basic Tables</a></li>
                        <li><a href="data-table.html">Data Table</a></li>
                        <li><a href="table-editable.html">Editable Table</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-pie-chart-box-line"></i><span>Charts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul class="iq-submenu">
                        <li><a href="chart-morris.html">Morris Chart</a></li>
                        <li><a href="chart-high.html">High Charts</a></li>
                        <li><a href="chart-am.html">Am Charts</a></li>
                        <li><a href="chart-apex.html">Apex Chart</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-list-check"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul class="iq-submenu">
                        <li><a href="icon-dripicons.html">Dripicons</a></li>
                        <li><a href="icon-fontawesome-5.html">Font Awesome 5</a></li>
                        <li><a href="icon-lineawesome.html">line Awesome</a></li>
                        <li><a href="icon-remixicon.html">Remixicon</a></li>
                        <li><a href="icon-unicons.html">unicons</a></li>
                     </ul>
                  </li>--}}
                  <li class="iq-menu-title"><i class="ri-separator"></i><span>Pages</span></li>
                  <li>
                     <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-pages-line"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul class="iq-submenu">
                        <li><a href="sign-in.html">Login</a></li>
                        <li><a href="sign-up.html">Register</a></li>
                        {{-- <li><a href="pages-recoverpw.html">Recover Password</a></li>
                        <li><a href="pages-confirm-mail.html">Confirm Mail</a></li>
                        <li><a href="pages-lock-screen.html">Lock Screen</a></li> --}}
                     </ul>
                  </li>
                  {{-- <li>
                     <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-map-pin-user-line"></i><span>Maps</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul class="iq-submenu">
                        <li><a href="pages-map.html">Google Map</a></li>
                        <li><a href="#">Vector Map</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="javascript:void(0);" class="iq-waves-effect"><i class="ri-pantone-line"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                     <ul class="iq-submenu">
                        <li><a href="pages-timeline.html">Timeline</a></li>
                        <li><a href="pages-invoice.html">Invoice</a></li>
                        <li><a href="blank-page.html">Blank Page</a></li>
                        <li><a href="pages-error.html">Error 404</a></li>
                        <li><a href="pages-error-500.html">Error 500</a></li>
                        <li><a href="pages-pricing.html">Pricing</a></li>
                        <li><a href="pages-pricing-one.html">Pricing 1</a></li>
                        <li><a href="pages-maintenance.html">Maintenance</a></li>
                        <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                        <li><a href="pages-faq.html">Faq</a></li>
                     </ul>
                  </li> --}}
               </ul>
            </nav>
            <div class="p-3"></div>
         </div>
      </div>
      <!-- TOP Nav Bar -->
      <div class="iq-top-navbar">
         <div class="iq-navbar-custom">
            <div class="iq-sidebar-logo">
               <div class="top-logo">
                  <a href="index.html" class="logo">
                  <img src="{{asset('images/logo.png')}}" class="img-fluid" alt="">
                  <span>Sofbox</span>
                  </a>
               </div>
            </div>
            <div class="navbar-breadcrumb">
               <h5 class="mb-0">Dashboard 2</h5>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Dashboard 2</li>
                  </ol>
               </nav>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="line-menu half start"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu half end"></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item">
                           <a class="search-toggle iq-waves-effect" href="#"><i class="ri-search-line"></i></a>
                           <form action="#" class="search-box">
                              <input type="text" class="text search-input" placeholder="Type here to search..." />
                           </form>
                        </li>
                        <li class="nav-item dropdown">
                           <a href="#" class="search-toggle iq-waves-effect"><i class="ri-mail-line"></i></a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Nik Emma Watson</h6>
                                             <small class="float-left font-size-12">13 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                             <small class="float-left font-size-12">20 Apr</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Why do we use it?</h6>
                                             <small class="float-left font-size-12">30 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Variations Passages</h6>
                                             <small class="float-left font-size-12">12 Sep</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                             <small class="float-left font-size-12">5 Dec</small>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="iq-waves-effect"><i class="ri-shopping-cart-2-line"></i></a>
                        </li>
                        <li class="nav-item">
                           <a href="#" class="search-toggle iq-waves-effect"><i class="ri-notification-2-line"></i></a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-danger p-3">
                                       <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New Order Recieved</h6>
                                             <small class="float-right font-size-12">23 hrs ago</small>
                                             <p class="mb-0">Lorem is simply</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Emma Watson Nik</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">95 MB</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">New customer is join</h6>
                                             <small class="float-right font-size-12">5 days ago</small>
                                             <p class="mb-0">Jond Nik</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40" src="images/small/jpg.svg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Updates Available</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">120 MB</p>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li class="nav-item iq-full-screen"><a href="#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
                     </ul>
                  </div>
                  <ul class="navbar-list">
                     <li>
                        <a href="#" class="search-toggle iq-waves-effect bg-primary text-white"><img src="{{asset('images/user/1.jpg')}}" class="img-fluid rounded" alt="user"></a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello Nik jone</h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                                 <a href="#" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card iq-bg-primary-success-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-success">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Edit Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card iq-bg-primary-danger-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-danger">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Account settings</h6>
                                          <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="#" class="iq-sub-card iq-bg-primary-secondary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-secondary">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Privacy Settings</h6>
                                          <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-inline-block w-100 text-center p-3">

                                         <a class="iq-bg-danger iq-sign-btn" href="{{url('logout')}}" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>


                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>
         </div>
      </div>
      <!-- TOP Nav Bar END -->
      <!-- Page Content  -->
      <!-- Right Sidebar Panel Start-->
      <div class="right-sidebar-mini">
         <div class="right-sidebar-toggle">
            <i class="ri-arrow-left-line side-left-icon"></i>
            <i class="ri-arrow-right-line side-right-icon"></i>
         </div>
         <div class="right-sidebar-panel p-0">

                  <div class="iq-card shadow-none">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h6 class="card-title">Active Users</h6>
                        </div>
                        <div class="iq-card-header-toolbar d-flex align-items-center">
                           <div class="dropdown">
                              <span class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" >
                              <i class="ri-more-2-fill"></i>
                              </span>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                 <a class="dropdown-item" href="#">Action</a>
                                 <a class="dropdown-item" href="#">Another action</a>
                                 <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card-body">
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-60" src="images/user/01.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Anna Sthesia</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-60" src="images/user/02.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Paul Molive</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-60" src="images/user/03.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Anna Mull</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-60" src="images/user/04.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Paige Turner</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-60" src="images/user/01.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Bob Frapples</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-60" src="images/user/02.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Barb Ackue</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-online">
                              <img class="rounded-circle avatar-60" src="images/user/03.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Greta Life</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-away">
                              <img class="rounded-circle avatar-60" src="images/user/04.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Ira Membrit</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center mb-4">
                           <div class="iq-profile-avatar status-away">
                              <img class="rounded-circle avatar-60" src="images/user/01.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Pete Sariya</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                        <div class="media align-items-center">
                           <div class="iq-profile-avatar">
                              <img class="rounded-circle avatar-60" src="images/user/02.jpg" alt="">
                           </div>
                           <div class="media-body ml-3">
                              <h6 class="mb-0"><a href="#">Monty Carlo</a></h6>
                              <p class="mb-0">Admin</p>
                           </div>
                        </div>
                     </div>
                  </div>

         </div>
      </div>
      <!-- Right Sidebar Panel End-->
      <div id="content-page" class="content-page">
         @yield('contents');
      </div>
   </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="bg-white iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright 2020 <a href="#">Sofbox</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <!-- Appear JavaScript -->
      <script src="{{asset('js/jquery.appear.js')}}"></script>
      <!-- Countdown JavaScript -->
      <script src="{{asset('js/countdown.min.js')}}"></script>
      <!-- Counterup JavaScript -->
      <script src="{{asset('js/waypoints.min.js')}}"></script>
      <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
      <!-- Wow JavaScript -->
      <script src="{{asset('js/wow.min.js') }}"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{asset('js/apexcharts.js') }}"></script>
      <!-- Slick JavaScript -->
      <script src="{{asset('js/slick.min.js') }}"></script>
      <!-- Select2 JavaScript -->
      <script src="{{asset('js/select2.min.js') }}"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{asset('js/owl.carousel.min.js') }}"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{asset('js/jquery.magnific-popup.min.js') }}"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{asset('js/smooth-scrollbar.js') }}"></script>
      <!-- lottie JavaScript -->
      <script src="{{asset('js/lottie.js') }}"></script>
      <!-- Chart Custom JavaScript -->da
      <script src="{{asset('js/chart-custom.js') }}"></script>
      <!-- Custom JavaScript -->
      <script src="{{asset('js/custom.js') }}"></script>
   </body>
</html>
