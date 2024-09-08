<?php include('../common/config.php'); ?>
<?php include('header.php'); ?>

<style>
.your-element {
    display: none; /* Hide the element by default */
}

/* Show the element for viewports with a max-width of 1299px */
@media (max-width: 1300px) {
    .your-element {
        display: block;
    }
}
</style>


<!-- Preloader -->
  <div class="preloader">
    <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/logos/logo-icon.svg" alt="loader" class="lds-ripple img-fluid" />
  </div>
  <div id="main-wrapper" style="min-height:0vh;">
    <!-- Sidebar Start -->
   <?php include('sidebar.php'); ?>
    <!--  Sidebar End -->
    <div class="page-wrapper">
      <!--  Header Start -->
      <header class="topbar rounded-0 border-0 bg-primary">
        <div class="with-vertical"><!-- ---------------------------------- -->
          <!-- Start Vertical Layout Header -->
          <!-- ---------------------------------- -->
          <nav class="navbar navbar-expand-lg px-lg-0 px-3 py-0">
            <div class="d-none d-lg-block">
              <div class="brand-logo d-flex align-items-center justify-content-between">
             
                  <b class="logo-icon">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="./images/logo_with_name_white_foreground.png" alt="homepage" class="dark-logo" width="200px" height="50px;"/>
                    <!-- Light Logo icon -->
                    <img src="/images/logo_with_name_white_foreground.png" alt="homepage" class="light-logo" />
                  </b>
                  <!--End Logo icon -->
                  <!-- Logo text -->
                  <span class="logo-text">
                    
                   
                  </span>
                </a>
              </div>


            </div>

            <ul class="navbar-nav gap-2">

              <li class="nav-item nav-icon-hover-bg rounded-circle your-element">
                <a class="nav-link nav-icon-hover sidebartoggler navbar-toggler-icon" id="headerCollapse" href="javascript:void(0)">
                  <iconify-icon icon="solar:list-bold"></iconify-icon>
                </a>
              </li>
              <!-- ------------------------------- -->
              <!-- start notification Dropdown -->
              <!-- ------------------------------- -->
              <li class="nav-item d-none d-lg-block search-box nav-icon-hover-bg rounded-circle">
                <a class="nav-link nav-icon-hover d-none d-md-flex waves-effect waves-dark" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <iconify-icon icon="solar:magnifer-linear"></iconify-icon>
                </a>
              </li>


              <li class="nav-item d-none d-lg-block dropdown nav-icon-hover-bg rounded-circle">
                <a class="nav-link nav-icon-hover" id="drop2" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
                  <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                </a>
              
              </li>


            </ul>

            <div class="d-block d-lg-none">
              <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/index.html" class="text-nowrap logo-img d-flex align-items-center gap-2">
                  <b class="logo-icon">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/logos/logo-light-icon.svg" alt="homepage" class="dark-logo" />
                    <!-- Light Logo icon -->
                    <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/logos/logo-light-icon.svg" alt="homepage" class="light-logo" />
                  </b>
                  <!--End Logo icon -->
                  <!-- Logo text -->
                  <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/logos/logo-light-text.svg" alt="homepage" class="dark-logo ps-2" />
                    <!-- Light Logo text -->
                    <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/logos/logo-light-text.svg" class="light-logo ps-2" alt="homepage" />
                  </span>
                </a>
              </div>


            </div>
            <ul class="navbar-nav flex-row  gap-2 align-items-center justify-content-center d-flex d-lg-none">
              <li class="nav-item dropdown nav-icon-hover-bg rounded-circle">
                <a class="navbar-toggler nav-link text-white nav-icon-hover border-0" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="">
                    <i class="ti ti-dots fs-7"></i>
                  </span>
                </a>
              </li>
            </ul>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between py-2 py-lg-0">
                <ul class="navbar-nav flex-row  align-items-center justify-content-center d-flex d-lg-none">
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar" aria-controls="offcanvasWithBothOptions">
                      <iconify-icon icon="solar:menu-dots-circle-linear"></iconify-icon>
                    </a>
                  </li>
                  <li class="nav-item hover-dd dropdown nav-icon-hover-bg rounded-circle">
                    <a class="nav-link nav-icon-hover waves-effect waves-dark" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <iconify-icon icon="solar:bell-bing-line-duotone"></iconify-icon>
                      <div class="notify">
                        <span class="heartbit"></span>
                        <span class="point"></span>
                      </div>
                    </a>
                  
                  </li>
                  <li class="nav-item hover-dd dropdown nav-icon-hover-bg rounded-circle">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <iconify-icon icon="solar:inbox-line-line-duotone"></iconify-icon>
                      <div class="notify">
                        <span class="heartbit"></span>
                        <span class="point"></span>
                      </div>
                    </a>
                    <div class="dropdown-menu py-0 content-dd dropdown-menu-animate-up overflow-hidden" aria-labelledby="drop2">

                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/profile/user-2.jpg" alt="user" class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Mathew Anderson</h6>
                              <span class="fs-2 d-block text-muted">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/profile/user-3.jpg" alt="user" class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Bianca Anderson</h6>
                              <span class="fs-2 d-block text-muted">9:10 AM</span>
                            </div>

                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/profile/user-4.jpg" alt="user" class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Andrew Johnson</h6>
                              <span class="fs-2 d-block text-muted">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you want</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/profile/user-5.jpg" alt="user" class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Miyra Strokes</h6>
                              <span class="fs-2 d-block text-muted">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/profile/user-6.jpg" alt="user" class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Mark, Stoinus & Rishvi..</h6>
                              <span class="fs-2 d-block text-muted">9:10 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/profile/user-7.jpg" alt="user" class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Eliga Rush</h6>
                              <span class="fs-2 d-block text-muted">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you want</span>
                          </div>
                        </a>
                      </div>
                      <div class="p-3">
                       
                      </div>

                    </div>
                  </li>
                </ul>
                <ul class="navbar-nav gap-2 flex-row ms-auto align-items-center justify-content-center">
                  <!-- ------------------------------- -->
                  <!-- start language Dropdown -->
                  <!-- ------------------------------- -->


                  <!-- ------------------------------- -->
                  <!-- end language Dropdown -->
                  <!-- ------------------------------- -->

                  <li class="nav-item nav-icon-hover-bg rounded-circle">
                    <a class="nav-link nav-icon-hover moon dark-layout" href="javascript:void(0)">
                      <iconify-icon icon="solar:moon-line-duotone" class="moon"></iconify-icon>
                    </a>
                    <a class="nav-link nav-icon-hover sun light-layout" href="javascript:void(0)">
                      <iconify-icon icon="solar:sun-2-line-duotone" class="sun"></iconify-icon>
                    </a>
                  </li>

                 
                  <li class="nav-item hover-dd dropdown  nav-icon-hover-bg rounded-circle d-none d-lg-block">
                   
                    
                  </li>

                  <!-- ------------------------------- -->
                  <!-- end notification Dropdown -->
                  <!-- ------------------------------- -->

                  <!-- ------------------------------- -->
                  <!-- start profile Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item hover-dd dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/profile/user-1.jpg" alt="user" class="profile-pic rounded-circle round-30" />
                    </a>
                    <div class="dropdown-menu pt-0 content-dd overflow-hidden pt-0 dropdown-menu-end user-dd" aria-labelledby="drop2">
                      <div class="profile-dropdown position-relative" data-simplebar>
                        <div class=" py-3 border-bottom">
                          <div class="d-flex align-items-center px-3">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/profile/user-1.jpg" class="rounded-circle round-50" alt="" />
                            <div class="ms-3">
                              <h5 class="mb-1 fs-4">Admin</h5>
                              <p class="mb-0 fs-2 d-flex align-items-center text-muted">
                                  <?php echo  $_SESSION['email']; ?>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="message-body pb-3">
                         
                        
                          <div class="px-3">
                           
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              
                            </div>
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              <a href="login.php" class=" d-flex  align-items-center ">
                                Sign Out
                              </a>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </li>


                  <!-- ------------------------------- -->
                  <!-- end profile Dropdown -->
                  <!-- ------------------------------- -->
                </ul>
              </div>
            </div>
          </nav>
          <!-- ---------------------------------- -->
          <!-- End Vertical Layout Header -->
          <!-- ---------------------------------- -->

          <!-- ------------------------------- -->
          <!-- apps Dropdown in Small screen -->
          <!-- ------------------------------- -->
          <!--  Mobilenavbar -->
          <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="mobilenavbar" aria-labelledby="offcanvasWithBothOptionsLabel">
            <nav class="sidebar-nav scroll-sidebar">
              <div class="offcanvas-header justify-content-between">
                <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/index.html" class="text-nowrap logo-img d-block">
                  <b class="logo-icon">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/logos/logo-icon.svg" alt="homepage">
                  </b>
                  <!--End Logo icon -->
                  <!-- Logo text -->
                  <span class="logo-text">
                    <!-- dark Logo text -->
                    <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/logos/logo-text.svg" alt="homepage" class="dark-logo ps-2">
                    <!-- Light Logo text -->
                    <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/logos/logo-light-text.svg" class="light-logo ps-2" alt="homepage">
                  </span>
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body h-n80" data-simplebar>
                <ul id="sidebarnav">
                  <li class="sidebar-item">
                    <a class="sidebar-link has-arrow px-1" href="javascript:void(0)" aria-expanded="false">
                      <span class="d-flex">
                        <iconify-icon icon="solar:shield-plus-outline" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Apps</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level my-3">
                      <li class="sidebar-item py-2">
                        <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-chat.html" class="d-flex align-items-center position-relative ">
                          <div class="bg-primary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:chat-line-linear" class="text-primary fs-5"></iconify-icon>
                          </div>
                          <div class="d-inline-block ">
                            <h6 class="mb-0 ">Chat Application</h6>
                            <span class="fs-3 d-block text-muted">New messages arrived</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-invoice.html" class="d-flex align-items-center position-relative">
                          <div class="bg-secondary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:bill-list-linear" class="text-secondary fs-5"></iconify-icon>
                          </div>
                          <div class="d-inline-block">
                            <h6 class="mb-0">Invoice App</h6>
                            <span class="fs-3 d-block text-muted">Get latest invoice</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-contact2.html" class="d-flex align-items-center position-relative">
                          <div class="bg-success-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:bedside-table-2-linear" class="text-success fs-5"></iconify-icon>
                          </div>
                          <div class="d-inline-block">
                            <h6 class="mb-0">Contact Application</h6>
                            <span class="fs-3 d-block text-muted">2 Unsaved Contacts</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-email.html" class="d-flex align-items-center position-relative">
                          <div class="bg-warning-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:letter-unread-linear" class="text-warning fs-5"></iconify-icon>
                          </div>
                          <div class="d-inline-block">
                            <h6 class="mb-0">Email App</h6>
                            <span class="fs-3 d-block text-muted">Get new emails</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/page-user-profile.html" class="d-flex align-items-center position-relative">
                          <div class="bg-danger-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:cart-large-2-linear" class="text-danger fs-5"></iconify-icon>
                          </div>
                          <div class="d-inline-block">
                            <h6 class="mb-0">User Profile</h6>
                            <span class="fs-3 d-block text-muted">learn more information</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-calendar.html" class="d-flex align-items-center position-relative">
                          <div class="bg-primary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:calendar-linear" class="text-primary fs-5"></iconify-icon>
                          </div>
                          <div class="d-inline-block">
                            <h6 class="mb-0">Calendar App</h6>
                            <span class="fs-3 d-block text-muted">Get dates</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-contact.html" class="d-flex align-items-center position-relative">
                          <div class="bg-secondary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:bedside-table-linear" class="text-secondary fs-5"></iconify-icon>
                          </div>
                          <div class="d-inline-block">
                            <h6 class="mb-0">Contact List Table</h6>
                            <span class="fs-3 d-block text-muted">Add new contact</span>
                          </div>
                        </a>
                      </li>
                      <li class="sidebar-item py-2">
                        <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-notes.html" class="d-flex align-items-center position-relative">
                          <div class="bg-success-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                            <iconify-icon icon="solar:palette-linear" class="text-success fs-5"></iconify-icon>
                          </div>
                          <div class="d-inline-block">
                            <h6 class="mb-0">Notes Application</h6>
                            <span class="fs-3 d-block text-muted">To-do and Daily tasks</span>
                          </div>
                        </a>
                      </li>
                      <ul class="px-8 mt-7 mb-4">
                        <li class="sidebar-item mb-3">
                          <h5 class="fs-5 fw-semibold">Quick Links</h5>
                        </li>
                        <li class="sidebar-item py-2">
                          <a class="fs-3" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/page-pricing.html">Pricing
                            Page</a>
                        </li>
                        <li class="sidebar-item py-2">
                          <a class="fs-3" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/authentication-login.html">Authentication Design</a>
                        </li>
                        <li class="sidebar-item py-2">
                          <a class="fs-3" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/authentication-register.html">Register Now</a>
                        </li>
                        <li class="sidebar-item py-2">
                          <a class="fs-3" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/authentication-error.html">404
                            Error Page</a>
                        </li>
                        <li class="sidebar-item py-2">
                          <a class="fs-3" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-notes.html">Notes App</a>
                        </li>
                        <li class="sidebar-item py-2">
                          <a class="fs-3" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/page-user-profile.html">User
                            Application</a>
                        </li>
                        <li class="sidebar-item py-2">
                          <a class="fs-3" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/page-account-settings.html">Account Settings</a>
                        </li>
                      </ul>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link px-1" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-chat.html" aria-expanded="false">
                      <span class="d-flex">
                        <iconify-icon icon="solar:chat-unread-outline" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Chat</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link px-1" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-calendar.html" aria-expanded="false">
                      <span class="d-flex">
                        <iconify-icon icon="solar:calendar-minimalistic-outline" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Calendar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link px-1" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-email.html" aria-expanded="false">
                      <span class="d-flex">
                        <iconify-icon icon="solar:inbox-unread-outline" class="fs-6"></iconify-icon>
                      </span>
                      <span class="hide-menu">Email</span>
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
        <div class="app-header with-horizontal">
          <nav class="navbar navbar-expand-xl container-fluid">
            <ul class="navbar-nav gap-2 align-items-center">
              <li class="nav-item d-block d-xl-none">
                <a class="nav-link sidebartoggler ms-n3" id="sidebarCollapse" href="javascript:void(0)">
                  <iconify-icon icon="solar:hamburger-menu-line-duotone"></iconify-icon>
                </a>
              </li>
              <li class="nav-item d-none d-xl-block">
                <div class="brand-logo d-flex align-items-center justify-content-between">
                  <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/index.html" class="text-nowrap logo-img d-flex align-items-center gap-2">
                    <b class="logo-icon">
                      <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                      <!-- Dark Logo icon -->
                      <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/logos/logo-light-icon.svg" alt="homepage" class="dark-logo" />
                      <!-- Light Logo icon -->
                      <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/logos/logo-light-icon.svg" alt="homepage" class="light-logo" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="logo-text">
                      <!-- dark Logo text -->
                      <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/logos/logo-light-text.svg" alt="homepage" class="dark-logo ps-2" />
                      <!-- Light Logo text -->
                      <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/logos/logo-light-text.svg" class="light-logo ps-2" alt="homepage" />
                    </span>
                  </a>
                </div>



              </li>

              <li class="nav-item d-none d-lg-block search-box">
                <a class="nav-link nav-icon-hover d-none d-md-flex waves-effect waves-dark" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <iconify-icon icon="solar:magnifer-linear"></iconify-icon>
                </a>
              </li>

              <li class="nav-item hover-dd d-none d-lg-block dropdown">
                <a class="nav-link nav-icon-hover" id="drop2" href="javascript:void(0)" aria-haspopup="true" aria-expanded="false">
                  <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                </a>
                <div class="dropdown-menu dropdown-menu-nav  dropdown-menu-animate-up py-0" aria-labelledby="drop2">
                  <div class="row align-items-center">
                    <div class="col-8">
                      <div class="ps-3 pt-3">
                        <div class="border-bottom">
                          <div class="row">
                            <div class="col-6">
                              <div class="position-relative">
                                <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-chat.html" class="d-flex align-items-center pb-9 position-relative ">
                                  <div class="bg-primary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:chat-line-linear" class="text-primary fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block ">
                                    <h6 class="mb-0 bg-hover-primary">Chat Application</h6>
                                    <span class="fs-3 d-block text-muted">New messages arrived</span>
                                  </div>
                                </a>
                                <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-invoice.html" class="d-flex align-items-center pb-9 position-relative">
                                  <div class="bg-secondary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:bill-list-linear" class="text-secondary fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0 bg-hover-primary">Invoice App</h6>
                                    <span class="fs-3 d-block text-muted">Get latest invoice</span>
                                  </div>
                                </a>
                                <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-contact2.html" class="d-flex align-items-center pb-9 position-relative">
                                  <div class="bg-success-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:bedside-table-2-linear" class="text-success fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0 bg-hover-primary">Contact Application</h6>
                                    <span class="fs-3 d-block text-muted">2 Unsaved Contacts</span>
                                  </div>
                                </a>
                                <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-email.html" class="d-flex align-items-center pb-9 position-relative">
                                  <div class="bg-warning-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:letter-unread-linear" class="text-warning fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0 bg-hover-primary">Email App</h6>
                                    <span class="fs-3 d-block text-muted">Get new emails</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="position-relative">
                                <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/page-user-profile.html" class="d-flex align-items-center pb-9 position-relative">
                                  <div class="bg-danger-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:cart-large-2-linear" class="text-danger fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0 bg-hover-primary">User Profile</h6>
                                    <span class="fs-3 d-block text-muted">learn more information</span>
                                  </div>
                                </a>
                                <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-calendar.html" class="d-flex align-items-center pb-9 position-relative">
                                  <div class="bg-primary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:calendar-linear" class="text-primary fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0 bg-hover-primary">Calendar App</h6>
                                    <span class="fs-3 d-block text-muted">Get dates</span>
                                  </div>
                                </a>
                                <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-contact.html" class="d-flex align-items-center pb-9 position-relative">
                                  <div class="bg-secondary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:bedside-table-linear" class="text-secondary fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0 bg-hover-primary">Contact List Table</h6>
                                    <span class="fs-3 d-block text-muted">Add new contact</span>
                                  </div>
                                </a>
                                <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-notes.html" class="d-flex align-items-center pb-9 position-relative">
                                  <div class="bg-success-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:palette-linear" class="text-success fs-5"></iconify-icon>
                                  </div>
                                  <div class="d-inline-block">
                                    <h6 class="mb-0 bg-hover-primary">Notes Application</h6>
                                    <span class="fs-3 d-block text-muted">To-do and Daily tasks</span>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row align-items-center py-3 pb-1">
                          <div class="col-8">
                            <a class="text-dark d-flex align-items-center lh-1 fs-3 bg-hover-primary" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/page-faq.html">
                              <i class="ti ti-help fs-6 me-2"></i>Frequently Asked Questions
                            </a>
                          </div>
                          <div class="col-4">
                            <div class="d-flex justify-content-end pe-4">
                              <button class="btn btn-primary rounded-pill fs-3">Check</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-4 ms-n7">
                      <div class="position-relative p-3 border-start h-100">
                        <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                        <ul>
                          <li class="mb-3">
                            <a class="text-dark bg-hover-primary" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/page-pricing.html">Pricing Page</a>
                          </li>
                          <li class="mb-3">
                            <a class="text-dark bg-hover-primary" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/authentication-login.html">Authentication Design</a>
                          </li>
                          <li class="mb-3">
                            <a class="text-dark bg-hover-primary" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/authentication-register.html">Register Now</a>
                          </li>
                          <li class="mb-3">
                            <a class="text-dark bg-hover-primary" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/authentication-error.html">404 Error Page</a>
                          </li>
                          <li class="mb-3">
                            <a class="text-dark bg-hover-primary" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-notes.html">Notes App</a>
                          </li>
                          <li class="mb-3">
                            <a class="text-dark bg-hover-primary" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/page-user-profile.html">User Application</a>
                          </li>
                          <li class="mb-3">
                            <a class="text-dark bg-hover-primary" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/page-account-settings.html">Account Settings</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>


            <a class="navbar-toggler nav-icon-hover p-0 border-0 text-white" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="p-2">
                <i class="ti ti-dots fs-7"></i>
              </span>
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <div class="d-flex align-items-center justify-content-between">
                <ul class="navbar-nav gap-2 flex-row ms-auto align-items-center justify-content-center">
                  <!-- ------------------------------- -->
                  <!-- start language Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item hover-dd dropdown nav-icon-hover-bg rounded-circle">
                    <a class="nav-link" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/svgs/icon-flag-en.svg" alt="" width="20px" height="20px" class="round-20" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="message-body">
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/svgs/icon-flag-en.svg" alt="" width="20px" height="20px" class="round-20" />
                          </div>
                          <p class="mb-0 fs-3">English</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/svgs/icon-flag-cn.svg" alt="" width="20px" height="20px" class="round-20" />
                          </div>
                          <p class="mb-0 fs-3">Chinese</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/svgs/icon-flag-fr.svg" alt="" width="20px" height="20px" class="round-20" />
                          </div>
                          <p class="mb-0 fs-3">French</p>
                        </a>
                        <a href="javascript:void(0)" class="d-flex align-items-center gap-2 py-2 px-4 dropdown-item">
                          <div class="position-relative">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/svgs/icon-flag-sa.svg" alt="" width="20px" height="20px" class="round-20" />
                          </div>
                          <p class="mb-0 fs-3">Arabic</p>
                        </a>
                      </div>
                    </div>
                  </li>
                  <!-- ------------------------------- -->
                  <!-- end language Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item nav-icon-hover-bg rounded-circle">
                    <a class="nav-link nav-icon-hover moon dark-layout" href="javascript:void(0)">
                      <iconify-icon icon="solar:moon-line-duotone" class="moon"></iconify-icon>
                    </a>
                    <a class="nav-link nav-icon-hover sun light-layout" href="javascript:void(0)">
                      <iconify-icon icon="solar:sun-2-line-duotone" class="sun"></iconify-icon>
                    </a>
                  </li>



                  <li class="nav-item hover-dd dropdown nav-icon-hover-bg rounded-circle  d-none d-lg-block">
                    <a class="nav-link nav-icon-hover waves-effect waves-dark" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <iconify-icon icon="solar:bell-bing-line-duotone"></iconify-icon>
                      <div class="notify">
                        <span class="heartbit"></span>
                        <span class="point"></span>
                      </div>
                    </a>
                    <div class="dropdown-menu py-0 content-dd  dropdown-menu-animate-up dropdown-menu-end overflow-hidden" aria-labelledby="drop2">

                      <div class="py-3 px-4 bg-primary">
                        <div class="mb-0 fs-6 fw-medium text-white">Notifications</div>
                        <div class="mb-0 fs-2 fw-medium text-white">You have 4 Notifications</div>
                      </div>
                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center  dropdown-item gap-3   border-bottom">
                          <span class="flex-shrink-0 bg-primary-subtle rounded-circle round-40 d-flex align-items-center justify-content-center fs-6 text-primary">
                            <iconify-icon icon="solar:widget-3-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Launch Admin</h6>
                              <span class="fs-2 d-block text-muted ">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span class="flex-shrink-0 bg-secondary-subtle rounded-circle round-40 d-flex align-items-center justify-content-center fs-6 text-secondary">
                            <iconify-icon icon="solar:calendar-mark-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Event today</h6>
                              <span class="fs-2 d-block text-muted ">9:10 AM</span>
                            </div>

                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span class="flex-shrink-0 bg-danger-subtle rounded-circle round-40 d-flex align-items-center justify-content-center fs-6 text-danger">
                            <iconify-icon icon="solar:settings-minimalistic-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Settings</h6>
                              <span class="fs-2 d-block text-muted ">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you want</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span class="flex-shrink-0 bg-warning-subtle rounded-circle round-40 d-flex align-items-center justify-content-center fs-6 text-warning">
                            <iconify-icon icon="solar:link-circle-line-duotone"></iconify-icon>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Luanch Admin</h6>
                              <span class="fs-2 d-block text-muted ">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span class="flex-shrink-0 bg-success-subtle rounded-circle round-40 d-flex align-items-center justify-content-center">
                            <i data-feather="calendar" class="feather-sm fill-white text-success"></i>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Event today</h6>
                              <span class="fs-2 d-block text-muted ">9:10 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3  border-bottom">
                          <span class="flex-shrink-0 bg-info-subtle rounded-circle round-40 d-flex align-items-center justify-content-center">
                            <i data-feather="settings" class="feather-sm fill-white text-info"></i>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Settings</h6>
                              <span class="fs-2 d-block text-muted ">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you want</span>
                          </div>
                        </a>
                      </div>
                      <div class="p-3">
                        <a class="d-flex btn btn-primary  align-items-center justify-content-center gap-2" href="javascript:void(0);">
                          <span>Check all Notifications</span>
                          <iconify-icon icon="solar:alt-arrow-right-outline" class="iconify-sm"></iconify-icon>
                        </a>
                      </div>





                    </div>
                  </li>

                  <li class="nav-item hover-dd dropdown nav-icon-hover-bg rounded-circle d-none d-lg-block">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <iconify-icon icon="solar:inbox-line-line-duotone"></iconify-icon>
                      <div class="notify">
                        <span class="heartbit"></span>
                        <span class="point"></span>
                      </div>
                    </a>
                    <div class="dropdown-menu py-0 content-dd dropdown-menu-animate-up  dropdown-menu-end overflow-hidden" aria-labelledby="drop2">

                      <div class="py-3 px-4 bg-secondary">
                        <div class="mb-0 fs-6 fw-medium text-white">Messages</div>
                        <div class="mb-0 fs-2 fw-medium text-white">You have 5 new messages</div>
                      </div>
                      <div class="message-body" data-simplebar>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/profile/user-2.jpg" alt="user" class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Mathew Anderson</h6>
                              <span class="fs-2 d-block text-muted">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/profile/user-3.jpg" alt="user" class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Bianca Anderson</h6>
                              <span class="fs-2 d-block text-muted">9:10 AM</span>
                            </div>

                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/profile/user-4.jpg" alt="user" class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Andrew Johnson</h6>
                              <span class="fs-2 d-block text-muted">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you want</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/profile/user-5.jpg" alt="user" class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Miyra Strokes</h6>
                              <span class="fs-2 d-block text-muted">9:30 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just see the my new admin!</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/profile/user-6.jpg" alt="user" class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Mark, Stoinus & Rishvi..</h6>
                              <span class="fs-2 d-block text-muted">9:10 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">Just a reminder that you have event</span>
                          </div>
                        </a>
                        <a href="javascript:void(0)" class="p-3 d-flex align-items-center dropdown-item gap-3 border-bottom">
                          <span class="user-img position-relative d-inline-block">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/profile/user-7.jpg" alt="user" class="rounded-circle w-100 round-40" />
                            <span class="profile-status bg-success position-absolute rounded-circle"></span>
                          </span>
                          <div class="w-80">
                            <div class="d-flex align-items-center justify-content-between">
                              <h6 class="mb-1">Eliga Rush</h6>
                              <span class="fs-2 d-block text-muted">9:08 AM</span>
                            </div>
                            <span class="fs-2 d-block text-truncate text-muted">You can customize this template as you want</span>
                          </div>
                        </a>
                      </div>
                      <div class="p-3">
                        <a class="d-flex btn btn-secondary  align-items-center justify-content-center gap-2" href="javascript:void(0);">
                          <span>Check all Messages</span>
                          <iconify-icon icon="solar:alt-arrow-right-outline" class="iconify-sm"></iconify-icon>
                        </a>
                      </div>

                    </div>
                  </li>


                  <!-- ------------------------------- -->
                  <!-- start profile Dropdown -->
                  <!-- ------------------------------- -->
                  <li class="nav-item hover-dd dropdown">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/profile/user-1.jpg" alt="user" width="30" class="profile-pic rounded-circle" />
                    </a>
                    <div class="dropdown-menu pt-0 content-dd overflow-hidden pt-0 dropdown-menu-end user-dd" aria-labelledby="drop2">
                      <div class="profile-dropdown position-relative" data-simplebar>
                        <div class=" py-3 border-bottom">
                          <div class="d-flex align-items-center px-3">
                            <img src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/images/profile/user-1.jpg" class="rounded-circle round-50" alt="" />
                            <div class="ms-3">
                              <h5 class="mb-1 fs-4">Markarn Doe</h5>
                              <p class="mb-0 fs-2 d-flex align-items-center text-muted">
                                markrarn@wrappixel.com
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="message-body pb-3">
                          <div class="px-3 pt-3">
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/page-user-profile.html" class=" d-flex  align-items-center ">
                                My Profile
                              </a>
                            </div>
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              <a href="javascript:void(0)" class=" d-flex  align-items-center ">
                                My Projects
                              </a>
                            </div>
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-email.html" class=" d-flex  align-items-center ">
                                Inbox
                              </a>
                            </div>
                          </div>
                          <hr>
                          <div class="px-3">
                            <div class="py-8 px-3 d-flex justify-content-between dropdown-item align-items-center h6 mb-0  rounded-2 link">
                              <a href="javascript:void(0)" class="">
                                Mode
                              </a>
                              <div>
                                <a class="moon dark-layout" href="javascript:void(0)">
                                  <iconify-icon icon="solar:moon-line-duotone" class="moon"></iconify-icon>
                                </a>
                                <a class="sun light-layout" href="javascript:void(0)">
                                  <iconify-icon icon="solar:sun-2-line-duotone" class="sun"></iconify-icon>
                                </a>
                              </div>
                            </div>
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/page-account-settings.html" class=" d-flex  align-items-center  ">
                                Account Settings
                              </a>
                            </div>
                            <div class="h6 mb-0 dropdown-item py-8 px-3 rounded-2 link">
                              <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/authentication-login.html" class=" d-flex  align-items-center ">
                                Sign Out
                              </a>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </li>

                  <!-- ------------------------------- -->
                  <!-- end profile Dropdown -->
                  <!-- ------------------------------- -->
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!--  Header End -->
      <aside class="left-sidebar with-horizontal">
        <!-- Sidebar scroll-->
        <div>
          <!-- Sidebar navigation-->
          <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
            <ul id="sidebarnav">
              <!-- ============================= -->
              <!-- Home -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon"></iconify-icon>
                <span class="hide-menu">Home</span>
              </li>
              <!-- =================== -->
              <!-- Dashboard -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:screencast-2-linear" class="aside-icon"></iconify-icon>
                  <span class="hide-menu">Dashboard</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/index.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Modern Dashboard</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/index2.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Awesome Dashboard</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/index3.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Classy Dashboard</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="index4.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Analytical Dashboard</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/index5.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Minimal Dashboard</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/index6.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">General Dashboard</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Apps -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon"></iconify-icon>
                <span class="hide-menu">Apps</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:archive-linear" class="aside-icon"></iconify-icon>
                  <span class="hide-menu">Apps</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-calendar.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Calendar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-kanban.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Kanban</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-chat.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Chat</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a class="sidebar-link" href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-email.html" aria-expanded="false">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Email</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-contact.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Contact Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-contact2.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Contact List</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-notes.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Notes</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-invoice.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Invoice</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/page-user-profile.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">User Profile</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/blog-posts.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Posts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/blog-detail.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Detail</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/eco-shop.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Shop</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/eco-shop-detail.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Shop Detail</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/eco-product-list.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">List</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/eco-checkout.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Checkout</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/eco-add-product.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Add Product</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/eco-edit-product.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Edit Product</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- PAGES -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon"></iconify-icon>
                <span class="hide-menu">PAGES</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:programming-linear" class="aside-icon"></iconify-icon>
                  <span class="hide-menu">Pages</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/page-faq.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">FAQ</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/page-account-settings.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Account Setting</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/page-pricing.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Pricing</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/widgets-cards.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Card</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/widgets-banners.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Banner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/widgets-charts.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Charts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/landingpage/index.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Landing Page</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- UI -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon"></iconify-icon>
                <span class="hide-menu">UI</span>
              </li>
              <!-- =================== -->
              <!-- UI Elements -->
              <!-- =================== -->
              <li class="sidebar-item mega-dropdown">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:text-underline-cross-linear" class="aside-icon"></iconify-icon>
                  <span class="hide-menu">UI</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-accordian.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Accordian</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-badge.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Badge</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-buttons.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Buttons</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-dropdowns.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Dropdowns</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-modals.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Modals</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-tab.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Tab</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-tooltip-popover.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Tooltip & Popover</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-notification.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Alerts</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-progressbar.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Progressbar</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-pagination.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Pagination</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-typography.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Typography</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-bootstrap-ui.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Bootstrap UI</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-breadcrumb.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Breadcrumb</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-offcanvas.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Offcanvas</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-lists.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Lists</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-grid.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Grid</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-carousel.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Carousel</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-scrollspy.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Scrollspy</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-spinner.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Spinner</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/ui-link.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Link</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Forms -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon"></iconify-icon>
                <span class="hide-menu">Forms</span>
              </li>
              <!-- =================== -->
              <!-- Forms -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:book-2-linear" class="aside-icon"></iconify-icon>
                  <span class="hide-menu">Forms</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <!-- form elements -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/form-inputs.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Forms Input</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/form-input-groups.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Input Groups</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/form-input-grid.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Input Grid</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/form-checkbox-radio.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Checkbox & Radios</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/form-bootstrap-switch.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Bootstrap Switch</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/form-select2.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Select2</span>
                    </a>
                  </li>
                  <!-- form inputs -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/form-basic.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Basic Form</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/form-vertical.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Vertical</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/form-horizontal.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Horizontal</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/form-actions.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Actions</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/form-row-separator.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Row Separator</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/form-bordered.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Bordered</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/form-detail.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Detail</span>
                    </a>
                  </li>
                  <!-- form wizard -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/form-wizard.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Form Wizard</span>
                    </a>
                  </li>
                  <!-- Quill Editor -->
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/form-editor-quill.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Quill Editor</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Tables -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon"></iconify-icon>
                <span class="hide-menu">Tables</span>
              </li>
              <!-- =================== -->
              <!-- Bootstrap Table -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:sidebar-minimalistic-linear" class="aside-icon"></iconify-icon>
                  <span class="hide-menu">Tables</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/table-basic.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Basic Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/table-dark-basic.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Dark Basic Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/table-sizing.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Sizing Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/table-layout-coloured.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Coloured Table</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/table-datatable-basic.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Basic Initialisation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/table-datatable-api.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">API</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/table-datatable-advanced.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Advanced Initialisation</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Charts -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon"></iconify-icon>
                <span class="hide-menu">Charts</span>
              </li>
              <!-- =================== -->
              <!-- Apex Chart -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:pie-chart-3-linear" class="aside-icon"></iconify-icon>
                  <span class="hide-menu">Charts</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/chart-apex-line.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Line Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/chart-apex-area.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Area Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/chart-apex-bar.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Bar Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/chart-apex-pie.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Pie Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/chart-apex-radial.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Radial Chart</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/chart-apex-radar.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Radar Chart</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- ============================= -->
              <!-- Icons -->
              <!-- ============================= -->
              <li class="nav-small-cap">
                <iconify-icon icon="solar:menu-dots-bold" class="nav-small-cap-icon"></iconify-icon>
                <span class="hide-menu">Icons</span>
              </li>
              <!-- =================== -->
              <!-- Tabler Icon -->
              <!-- =================== -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:pie-chart-3-linear" class="aside-icon"></iconify-icon>
                  <span class="hide-menu">Icon</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/icon-tabler.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Tabler Icon</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/icon-solar.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Solar Icon</span>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- multi level -->
              <li class="sidebar-item">
                <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                  <iconify-icon icon="solar:layers-minimalistic-linear" class="aside-icon"></iconify-icon>
                  <span class="hide-menu">Multi DD</span>
                </a>
                <ul aria-expanded="false" class="collapse first-level">
                  <li class="sidebar-item">
                    <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/docs/index.html" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Documentation</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 1</span>
                    </a>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link has-arrow">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 2</span>
                    </a>
                    <ul aria-expanded="false" class="collapse second-level">
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.1</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.2</span>
                        </a>
                      </li>
                      <li class="sidebar-item">
                        <a href="javascript:void(0)" class="sidebar-link">
                          <i class="ti ti-circle"></i>
                          <span class="hide-menu">Page 2.3</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="sidebar-item">
                    <a href="javascript:void(0)" class="sidebar-link">
                      <i class="ti ti-circle"></i>
                      <span class="hide-menu">Page 3</span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>

    </div>
    <!--  Search Bar -->
   

  </div>
      <!--  Header End -->



      <div class="container-fluid" style="margin-top:100px;max-width:90%;">
     <form>
  <input type="text" name="search" placeholder="Search for Programs, Institutions or other keywords" onkeyup="fireAjax()" class="top-search-box ">
</form>
</div>


<div class="container-fluid" style="margin-top:100px;max-width:90%;">
    <div class="row">
        <form method="post" id="framework">
            <div class="col-sm-2">
                <div class="form-group">
                    <select id="location" name="location[]" multiple class="form-control">
                        <?php
                        // Assuming you have established a database connection named $conn
                        
                        $sql = "SELECT * FROM location";
                        $result = mysqli_query($conn, $sql);

                        // Check if there are results
                        if ($result) {
                            // Loop through the results and create an option element for each location
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['id'] . '">' . $row['location'] . '</option>';
                            }
                        } else {
                            echo '<option>No locations found</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <select id="program_level" name="program_level[]" multiple class="form-control">
                        <?php
                        // SQL query to fetch all program levels
                        $sql = "SELECT * FROM program_level";
                        $result = mysqli_query($conn, $sql);

                        // Check if there are results
                        if ($result) {
                            // Loop through the results and create an option element for each program level
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['id'] . '">' . $row['program_level'] . '</option>';
                            }
                        } else {
                            echo '<option>No program levels found</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <select id="discipline" name="discipline[]" multiple class="form-control">
                        <?php
                        // SQL query to fetch all disciplines
                        $sql = "SELECT * FROM discipline";
                        $result = mysqli_query($conn, $sql);

                        // Check if there are results
                        if ($result) {
                            // Loop through the results and create an option element for each discipline
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['id'] . '">' . $row['course_name'] . '</option>';
                            }
                        } else {
                            echo '<option>No disciplines found</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <select id="tuition_fee" name="tuition_fee[]" multiple class="form-control">
                        <?php
                        // SQL query to fetch all tuition fees
                        $sql = "SELECT * FROM tuition_fee";
                        $result = mysqli_query($conn, $sql);

                        // Check if there are results
                        if ($result) {
                            // Loop through the results and create an option element for each tuition fee
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['id'] . '">' . $row['fee'] . '</option>';
                            }
                        } else {
                            echo '<option>No tuition fees found</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <select id="english_score" name="english_score[]" multiple class="form-control">
                        <?php
                        // SQL query to fetch all english scores
                        $sql = "SELECT * FROM english_score";
                        $result = mysqli_query($conn, $sql);

                        // Check if there are results
                        if ($result) {
                            // Loop through the results and create an option element for each english score
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['id'] . '">' . $row['english_score'] . '</option>';
                            }
                        } else {
                            echo '<option>No english scores found</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <select id="intakes" name="intakes[]" multiple class="form-control">
                        <?php
                        // SQL query to fetch all intakes
                        $sql = "SELECT * FROM intakes";
                        $result = mysqli_query($conn, $sql);

                        // Check if there are results
                        if ($result) {
                            // Loop through the results and create an option element for each intake
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<option value="' . $row['id'] . '">' . $row['intakes'] . '</option>';
                            }
                        } else {
                            echo '<option>No intakes found</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
           
        </form>
    </div>
</div>

  
 
  
 <div class="container-fluid border-div" style="max-width:90%; margin-top:50px;">
    <div class="flex-container" id="search">
        <?php
         
       // Get the total number of universities
$total_results = mysqli_query($conn, "SELECT COUNT(*) as count FROM universities");
$total_rows = mysqli_fetch_assoc($total_results)['count'];

// Set the items per page
$items_per_page = isset($_GET['items_per_page']) ? intval($_GET['items_per_page']) : 12;

// Calculate total pages
$total_pages = ceil($total_rows / $items_per_page);

// Get the current page or set a default
$current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($current_page < 1) {
    $current_page = 1;
} elseif ($current_page > $total_pages) {
    $current_page = $total_pages;
}

// Calculate the offset for the query
$offset = ($current_page - 1) * $items_per_page;

// Fetch the universities with pagination
$sql = "SELECT * FROM universities LIMIT $offset, $items_per_page";
     
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
          $fetch_program= mysqli_fetch_assoc(mysqli_query($conn,"select * from programs where university_id='".$row['id']."'"));

                echo '<div class="flex-item">';

                  echo '<div class="flex-item" style="display: flex; align-items: center;">';

if ($row['image'] == "") {
    echo '<img src="images/university.jfif" style="width:50px; height:50px; margin-right:10px; border-radius:50%;">';
} else {
    echo '<img src="images/' . $row['image'] . '" style="width:50px; height:50px; margin-right:10px; border-radius:50%;">';
}

echo '<span>';
echo '<a href="university_details.php?id=' . $row['id'] . '"><div>' . $row['name'] . '</div></a>';
echo '</span>';

echo '</div>';
                echo '<a href="graduate_program_details.php?id=' . $fetch_program['id'] . '"><div class="program-info" style="width:250px; font-weight:bold;"><h5>' . $fetch_program['program'] . '</h5></div></a>';
                echo '<div></div>';
                echo '<hr>';
                echo '<div>Location: ' . $row['location'] . ' </div>'; // Assuming there is a 'location' field in the database
                 echo '<div>Campus City: ' . $row['campus_city'] . '</div>'; // Assuming there is a 'location' field in the database
                 
                echo '<div>Gross tution fee: ' . $fetch_program['tuition_per_year_approx'] . '</div>'; // Assuming there is a 'location' field in the database
                echo '<div>Application fee: ' . $fetch_program['application_fees'] . ' </div>'; // Assuming there is a 'location' field in the database
                echo '<div>Duration: ' . $fetch_program['duration'] . ' </div>'; // Assuming there is a 'location' field in the database
                echo '<hr>';

                echo '<div class="success-prediction-container" style="margin-bottom:50px;">';
                echo 'Success Prediction:';
                echo '<button style="margin-left:20px;" class="btn btn-info success-prediction mb-3" data-toggle="modal" data-target="#universityModal"
                
                 data-university-name="' . $row['name'] . '"
                     data-program-level="' . $fetch_program['program'] . '"
                     data-gross-tution-fee="' . $fetch_program['tuition_per_year_approx'] . '"
                     data-application-fee="' . $fetch_program['application_fees'] . '">
                   
                
                
                Details</button>';
                echo '</div>';

                echo '<div class="create-application-container"  style="margin-top:50px; width:100px;">';
                echo '<button class="btn btn-info create-application" data-toggle="modal" data-target="#createApplicationModal" style="border-radius:10px;"
                
                data-university-name="' . $row['name'] . '"
                     data-program-level="' . $fetch_program['program'] . '"
                     data-gross-tution-fee="' . $fetch_program['tuition_per_year_approx'] . '"
                     data-application-fee="' . $fetch_program['application_fees'] . '">
                
                
                    Create Application
                </button>';
                echo '</div>';


                echo '</div>';
            }
        ?>
    </div>
</div>


<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <form method="GET" action="" class="d-flex align-items-center">
            <label for="items_per_page"  style="min-width:150px;" >Items per page:</label>
            <select id="items_per_page" name="items_per_page" onchange="this.form.submit()" class="form-control " style="margin-left:20px;">
                <option value="12" <?php if (isset($_GET['items_per_page']) && $_GET['items_per_page'] == 12) echo 'selected'; ?>>12</option>
                <option value="24" <?php if (isset($_GET['items_per_page']) && $_GET['items_per_page'] == 24) echo 'selected'; ?>>24</option>
                <option value="36" <?php if (isset($_GET['items_per_page']) && $_GET['items_per_page'] == 36) echo 'selected'; ?>>36</option>
                <option value="48" <?php if (isset($_GET['items_per_page']) && $_GET['items_per_page'] == 20) echo 'selected'; ?>>48</option>
            </select>
        </form>

        <div class="pagination">
            <?php
            if ($current_page > 1) {
                echo '<a href="?page=' . ($current_page - 1) . '&items_per_page=' . $items_per_page . '" class="btn btn-secondary mr-2" style="background-color:#6c757d;">&laquo; Previous</a>';
            }

            if ($current_page < $total_pages) {
                echo '<a href="?page=' . ($current_page + 1) . '&items_per_page=' . $items_per_page . '" class="btn btn-secondary" style="background-color:#6c757d;">Next &raquo;</a>';
            }
            ?>
        </div>
    </div>
</div>

   


<!-- Modal -->
<div class="modal fade" id="universityModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog"  style="max-width:50%; margin-top:120px;">
        <div class="modal-content"  style="border-radius:20px;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Success Prediction</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Success prediction by intake, estimated based on ApplyBoard's historical data. We make no representations, warranties, or guarantees as to the information's accuracy.</p>
  
                <ul class="info-list">
    <li>Conversion is the historical ratio of accepted applications to submitted applications.</li>
    <li>Turn Around Time is the expected time to receive a letter of acceptance after submitting an application.</li>
    <li>Seat Availability is the predicted likelihood of a seat being available for the program intake.</li>
</ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="createApplicationModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog createApplicationModal">
        <div class="modal-content createApp">
            <div class="modal-header">
                <h3>New Application</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="border-radius: 100px; width:200px; height:50px;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body createAppmodalbody">
          


                <!-- <div class="card px-0 pt-4 pb-0 mt-3 mb-3"> -->
                
                    <form id="msform"  method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo  $fetch['id']; ?>"> 
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account">Eligibilty</strong></li>
                            <li id="personal"><strong>Prerequisites</strong></li>
                            <li id="payment"><strong>What to Expect</strong></li>
                            <!-- <li id="confirm"><strong>Finish</strong></li> -->
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br>
                        <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                
              


                <div class="mb-2">           
                <input type="text" class="form-control programlevel" name="programlevel">
              


                <input type="text" class="form-control university-name"  name="universityname">
                 </div>

                            
              <p id="programlevel">Please select a student to check their eligibility for this program.</p>
            

            
              <label class="form-label">Student</label></br>
 					<select id="students " name="student"  class="form-control student-list">
 						 <?php
        // Assuming you have established a database connection named $conn

        // SQL query to fetch all countries
         
        $sql = "SELECT * FROM student";
        $result = mysqli_query($conn, $sql);
        // Check if there are results
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo '<option value="' . $row['id'] . '">[' . $row['id'] . '] ' . $row['first_name'] . ' ' . $row['last_name'] . ' ' . $row['email'] . '</option>';
            }
        } else {
            echo '<option>No Student</option>';
        }
        ?>
 					</select>
           


                               
                                
								
                               

                                   
                                            
<p id="eligibility_status"></p>
                                   


                              





            





                            </div> 
                            <input type="button" name="next" class="next action-button" value="Next" onclick="nextStep()" style="background-color:#6c757d;" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                            <div class="row">
                                   


                                 

                                        <div class="mb-3">
                <input type="text" class="form-control programlevel" name="programlevel">
            
                
              </div>



             
                                        <div class="mb-3">
                <input type="text" class="form-control confirmFirstName" name="student_name" >
            
                
              </div>





                                        




















                                </div> 
                            </div> 
                            <input type="button" name="next" class="next action-button" value="Next" style="background-color:#6c757d;" /> 
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                              




                                <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
       1. Copy of Education Transcripts
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Please provide a copy of the applicant's original transcripts and English translated transcripts:</strong>
        <ul class="info-list">
               <li>acceptable formats: PDF, JPEG or PNG
               </li>
               <li>the photocopy / scan to have no cut-off at the edges and is clear to read
               </li>
               <li>file size limit of the photocopy is 20MB</li>
        </ul>
       </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        2. Copy of Education Certificate
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Please provide a copy of the applicant's original certificate and English translated certificate:</strong>
        acceptable formats: PDF, JPEG or PNG
      the photocopy / scan to have no cut-off at the edges and is clear to read
       file size limit is 20MB

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       3. Emergency Contact
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Please provide the details of the applicant’s emergency contact.</p>



      <p>The emergency contact must be a family member / guardian OR a friend of the applicant. </p>



      <p>The emergency contact can NOT be the applicant themselves, a recruitment partner, or other members of a recruitment agency.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       4. Copy of Passport Workflow
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
     <p> Please attach a copy of the applicant's passport - pages that include the applicant's identity information: * Acceptable formats: PDF, JPEG or PNG * the photocopy/scan to have no cut-off at the edges and is clear to read * File size limit is 20MB</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       5. No Deferral Policy Acknowledgement
    </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Applicant would NOT be able to defer from one intake to the next, if they are unsuccessful in their initial application selection or visa application.</p>



<p>They would forfeit their application fee and would require to pay for a new application fee and submit a new application for a different intake, if they wish to continue to apply to the college.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
       6. English Language Proficiency Test
    </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
     <p> Please provide a copy of the applicant's english test scores: * acceptable formats: PDF, JPEG or PNG * the photocopy / scan to have no cut-off at the edges and is clear to read * file size limit is 20MB. If the student wishes to provide Duolingo test result, it is required to * Upload a Duolingo certificate with a verification link * Upload a Duolingo Certificate in English format</p>
      </div>
    </div>
  </div>



</div>



















                                
                            </div> 
                             <div style="display: flex; justify-content: center; align-items: center;">
                            <button type="submit" class="btn btn-primary btn-lg" style="margin-right: 10px; background-color: rgba(27, 132, 255, 1); color:white;">Submit</button>
                            <!-- <input type="button" name="next" class="next action-button" value="Submit" />  -->
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                   
								<div class="col-sm-12">
									<!-- <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div> -->
									<div class="input-group mb-0" id="message_login">
										<!-- <a class="btn btn-outline-primary btn-lg btn-block" href="register.html">Register To Create Account</a> -->
									</div>
                  <div id="loader"></div>
							
							











            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>


           
        </div>
    </div>
</div>







<style>
  
 
   .flex-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Adjust the gap between items as needed */
        }
        .flex-item {
            flex: 1 1 200px; /* The items will grow and shrink, and have a base width of 200px */
            border: 1px solid #ccc;
            padding: 10px;
            box-sizing: border-box;
            background-color: white;
            border-radius: 10px; /* Add border radius for rounded corners */
        }
        .flex-item div {
            margin-bottom: 5px;
        }
      
       
.flex-item {
  position: relative;
}

.create-application-container {
  position: absolute;
  
  bottom: 5px;
   
}

.create-application{
 
 width:280px;
 height:50px;
}

</style>
    <style>

/* Container Styling */
.border-div {
    display: flex;
    justify-content: space-between;
    margin: 10px;
}

/* Box Styling */
.box {
    flex: 1;
    margin: 5px;
    background-color: lightblue;
    text-align: center;
    padding: 20px;
    border: 1px solid #ccc;
}




</style>

<style>
          .createApplicationModal {
           min-width:70%;
           height:100%;
        
          //  margin: auto;
        }
       .createApp{
          height: 80%; /* Full height of the modal dialog */
      }
     .createAppmodalbody {
           overflow-y: auto; /* Scrollable body content */
       } */ */

       

























    .info-list {
        list-style-type: disc;
        margin-left: 20px;
    }

    .info-list li {
        margin-bottom: 10px;
    }






    body {
    font-family: Arial, sans-serif;
}





          /* Loader CSS */
#loader {
    border: 16px solid #f3f3f3;
    border-radius: 50%;
    border-top: 16px solid #3498db;
    width: 150px;
    height: 150px;
    animation: spin 2s linear infinite;
    display: none;
    position: fixed;
    left: 50%;
    top: 30%;
    transform: translate(-50%, -50%);
    z-index: 9999;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}




    </style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <script>
$(document).ready(function(){

  $('.student-list').on('change', function() {
    
    $("#eligibility_status").text("Student is eligible for the program").show();
              $("#eligibility_status").css({
                    'font-size': '20px',
                    'background-color': 'rgb(180, 230, 200)',
                    'color': 'rgb(10, 120, 90)',
                    'border': '2px solid rgb(10, 120, 90)', // Example of adding a border
                      'border-radius': '10px',
                       'text-align': 'center',
            'display': 'flex',
            'justify-content': 'center',
            'align-items': 'center'
        
                });           

    });

    $("#msform").on("submit", function(event){
       
        
      event.preventDefault();
     $.ajax({
         url: "create_app.php",
         method: "POST",
         data: $(this).serialize(),
         success: function(data){
          
             $("#message_login").html(data);
         }
     });
 });

 $("#framework").on("submit", function(event){
    
    $.ajax({
        url: "php/filter_results.php",
        method: "POST",
        data: $(this).serialize(),
        success: function(data){
          
            $("#search").html(data);
        }
    });
});






 $('#location').multiselect({
  nonSelectedText: 'Location',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'180px'
 });
 
 $('#program_level').multiselect({
  nonSelectedText: 'Program level',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'180px'
 });

 $('#discipline').multiselect({
  nonSelectedText: 'Discipline',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'180px'
 });


 $('#tuition_fee').multiselect({
  nonSelectedText: 'Tuition Fee',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'180px'
 });

 $('#english_score').multiselect({
  nonSelectedText: 'English Score',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'180px'
 });


 $('#intakes').multiselect({
  nonSelectedText: 'Intakes',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'180px'
 });


$('.student-list').multiselect({
  nonSelectedText: 'Intakes',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'1030px'
 });


var current_fs, next_fs, previous_fs; // fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function(){
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                // Check if the current fieldset is valid
                if (isValid(current_fs)) {
                    // Add Class Active
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                    // show the next fieldset
                    next_fs.show();
                    // hide the current fieldset with style
                    current_fs.animate({opacity: 0}, {
                        step: function(now) {
                            // for making fieldset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            next_fs.css({'opacity': opacity});
                        },
                        duration: 500
                    });
                    setProgressBar(++current);
                }
            });

            $(".previous").click(function(){
                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                // Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                // show the previous fieldset
                previous_fs.show();

                // hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function(now) {
                        // for making fieldset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({'opacity': opacity});
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep){
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar").css("width", percent + "%");
            }

            function isValid(fieldset) {
                var isValid = true;
                $(fieldset).find("input[required], textarea[required]").each(function(){
                    if ($(this).val() === "") {
                        isValid = false;
                        $(this).css("border-color", "red");
                    } else {
                        $(this).css("border-color", "");
                    }
                });
                return isValid;
            }

            $(".submit").click(function(){
                return false;
            });
        





















});
</script>

<script>
function nextStep() {
     // Get the text of the selected option in the dropdown
    var studentDropdown = document.querySelector(".student-list");
    var selectedStudentText = studentDropdown.options[studentDropdown.selectedIndex].text;

    // Set the text value to the second text box
    document.querySelector(".confirmFirstName").value = selectedStudentText;

    
}


</script>



<script>
$(document).ready(function() {
    $('#universityModal').on('show.bs.modal', function(event) {
          var button = $(event.relatedTarget);
        var universityName = button.data('university-name');
        var programLevel = button.data('program-level');
        var location = button.data('location');
        var campusCity = button.data('campus-city');
        var grossTutionFee = button.data('gross-tution-fee');
        var applicationFee = button.data('application-fee');
        var duration = button.data('duration');

        var modal = $(this);
        modal.find('#university-name').text('University Name: ' + universityName);
        modal.find('#program-level').text('Program Level: ' + programLevel);
        modal.find('#location').text('Location: ' + location);
        modal.find('#campus-city').text('Campus City: ' + campusCity);
        modal.find('#gross-tution-fee').text('Gross Tuition Fee: ' + grossTutionFee);
        modal.find('#application-fee').text('Application Fee: ' + applicationFee);
        modal.find('#duration').text('Duration: ' + duration);
    });
});
</script>
<script>
$(document).ready(function() {






    $('#createApplicationModal').on('show.bs.modal', function(event) {
          var button = $(event.relatedTarget);
        var universityName = button.data('university-name');
        var programLevel = button.data('program-level');
        var location = button.data('location');
        var campusCity = button.data('campus-city');
        var grossTutionFee = button.data('gross-tution-fee');
        var applicationFee = button.data('application-fee');
        var duration = button.data('duration');

        var modal = $(this);
      /// modal.find('#university-name').text('University Name: ' + universityName);
        modal.find('#program-level').text('Program Level: ' + programLevel);
        modal.find('#location').text('Location: ' + location);
        modal.find('#campus-city').text('Campus City: ' + campusCity);
        modal.find('#gross-tution-fee').text('Gross Tuition Fee: ' + grossTutionFee);
        modal.find('#application-fee').text('Application Fee: ' + applicationFee);
        modal.find('#duration').text('Duration: ' + duration);
        modal.find('.programlevel').val(programLevel);
            modal.find('.university-name').val(universityName);
    });
});
</script>



     

     
<script>
function fireAjax() {
    var query = $('input[name="search"]').val();
         
    // Perform AJAX request
    $.ajax({
        url: 'php/search_box_filter.php', // Replace with your server endpoint
        method: 'GET',
        data: { search: query },
        success: function(response) {
            

          $('#search').html(response);
           
           
           
        },
        error: function(error) {
            console.error(error);
        }
    });
}
</script>














<script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/js/breadcrumb/breadcrumbChart.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/js/theme/app.minisidebar.init.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/js/theme/theme.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/js/theme/app.min.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/js/theme/sidebarmenu.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/js/theme/feather.min.js"></script>



