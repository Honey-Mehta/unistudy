<?php
// Get values from URL parameters
$student = isset($_GET['student']) ? htmlspecialchars($_GET['student']) : 'Not provided';
$programlevel = isset($_GET['programlevel']) ? htmlspecialchars($_GET['programlevel']) : 'Not provided';
$universityname = isset($_GET['universityname']) ? htmlspecialchars($_GET['universityname']) : 'Not provided';

?>



<?php 
// include("./common/config.php");

include("../common/config.php");
// Fetch the student record from the database
$fetch = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM student WHERE id='$student'"));



?>

<?php include('header.php'); ?>

<?php include('sidebar.php'); ?>

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
                    <img src="./images/logo_with_name_white_foreground.png" alt="homepage" class="dark-logo" width="200px" height="50px;" />
                    <!-- Light Logo icon -->
                  </b>
                  <!--End Logo icon -->
                  <!-- Logo text -->
                 
                </a>
              </div>


            </div>

          

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
                    <div class="dropdown-menu py-0 content-dd  dropdown-menu-animate-up overflow-hidden" aria-labelledby="drop2">

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
                  <li class="nav-item hover-dd dropdown nav-icon-hover-bg rounded-circle">
                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      <iconify-icon icon="solar:inbox-line-line-duotone"></iconify-icon>
                      <div class="notify">
                        <span class="heartbit"></span>
                        <span class="point"></span>
                      </div>
                    </a>
                    <div class="dropdown-menu py-0 content-dd dropdown-menu-animate-up overflow-hidden" aria-labelledby="drop2">

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
                </ul>
                <ul class="navbar-nav gap-2 flex-row ms-auto align-items-center justify-content-center">
                  <!-- ------------------------------- -->
                  <!-- start language Dropdown -->
                  <!-- ------------------------------- -->

                  <li class="nav-item hover-dd dropdown nav-icon-hover-bg rounded-circle">
                    <a class="nav-link" href="javascript:void(0)" id="drop2" aria-expanded="false">
                      
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="message-body">
                       
                       
                       
                       
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
                          <div class="px-3 pt-3">
                          
                        
                          <div class="px-3">
                           
                               
                              </div>
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
                         
                           
                        
                          </div>
                          <hr>
                          <div class="px-3">
                            
                            
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


<!DOCTYPE html>
<html>
<head>
    <title>Multi-Step Form</title>

          <style>
        /* * {
            margin: 0;
            padding: 0;
        } */
        /* html {
            height: 100%;
        } */
        /* p {
            color: grey;
        } */
        /* #heading {
            text-transform: uppercase;
            color: #673AB7;
            font-weight: normal;
        } */
      
    .form-inline {
        display: flex;
        align-items: center;
    }
    .form-inline label {
        margin-right: 10px;
    }

     
        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px;
        }
        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative;
        }
        .form-card {
            text-align: left;
        }
        #msform fieldset:not(:first-of-type) {
            display: none;
        }
        #msform input,
        #msform textarea,
        #msform select {
            /* padding: 8px 15px 8px 15px; */
            border: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            background-color: #ECEFF1;
            font-size: 16px;
            letter-spacing: 1px;
        }
        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #673AB7;
            outline-width: 0;
        }
        #msform .action-button {
            width: 100px;
            background: #673AB7;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 0px 10px 5px;
            float: right;
        }
        #msform .action-button:hover,
        #msform .action-button:focus {
            background-color: #311B92;
        }
        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px 10px 0px;
            float: right;
        }
        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            background-color: #000000;
        }
        .card {
            z-index: 0;
            border: none;
            position: relative;
        }
        .fs-title {
            font-size: 25px;
            color: #673AB7;
            margin-bottom: 15px;
            font-weight: normal;
            text-align: left;
        }
        .purple-text {
            color: #673AB7;
            font-weight: normal;
        }
        .steps {
            font-size: 25px;
            color: gray;
            margin-bottom: 10px;
            font-weight: normal;
            text-align: right;
        }
        .fieldlabels {
            color: gray;
            text-align: left;
        }
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey;
        }
        #progressbar .active {
            color: #673AB7;
        }
        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 15%;
            float: left;
            position: relative;
            font-weight: 400;
        }
        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f13e";
        }
        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007";
        }
        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f030";
        }
        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c";
        }
        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px;
        }
        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1;
        }
        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #673AB7;
        }
        .progress {
            height: 20px;
        }
        .progress-bar {
            background-color: #673AB7;
        }
        .fit-image {
            width: 100%;
            object-fit: cover;
        }


        
        .form-group {
            margin-bottom: 10px;
        }
        .form-group label {
            margin-right: 30px;
        }
        .iti {
            margin-right: 10px; /* Adjust margin as needed */
        }
        .iti__flag-container {
            margin-right: 5px; /* Adjust margin as needed */
        }

    </style>
</head>
<body>
    <div class="container" style="margin-top:100px;">
        <div class="row">
            <!-- <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2"> -->
                <!-- <div class="card px-0 pt-4 pb-0 mt-3 mb-3"> -->



                <div class="d-flex align-items-center">
    <h6 id="heading" class="me-3">
        <?php echo $fetch['first_name'].' '.$fetch['last_name'].' '.$programlevel.' '.$universityname; ?>
    </h6>
    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#myModal" style="background-color:rgb(230, 239, 254); color:rgb(10, 90, 218);font-weight: 600;">
        Change Intake
    </button>
</div>

<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:100%; max-width: 1000px; height:50%;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Change Intake</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="acadmic_intake" method="post">
                    <label>Academic Intake</label>
                    <input type="hidden" name="student_id" value="<?php echo $fetch['id']; ?>">

                    <div class="row">
                        <?php 
                            include("./common/config.php");
                            $sql = mysqli_query($conn, "SELECT * FROM acadmic_intakes");
                            while ($fetch_array = mysqli_fetch_assoc($sql)) {
                        ?>
                        <div class="col-sm-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="acadmic_intakes" value="<?php echo $fetch_array['year']; ?>" id="acadmic_intake_<?php echo $fetch_array['year']; ?>">
                                <label class="form-check-label" for="acadmic_intake_<?php echo $fetch_array['year']; ?>">
                                    <strong><?php echo $fetch_array['year']; ?></strong>
                                </label>
                            </div>
                            <p><strong>Success Score:</strong> <?php echo $fetch_array['success_score']; ?></p>
                            <p><strong>Intake Status:</strong> <?php echo $fetch_array['intake_status']; ?></p>
                            <p><strong>Submission Deadline:</strong> <?php echo $fetch_array['submission_deadline']; ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
                <button type="button" class="btn btn-primary" id="submit_acadmic_intake">Save changes</button>
            </div>
            <div id="message_login"></div>
            <div id="loader"></div>
        </div>
    </div>
</div>
            


                   
                    <form id="msform"  method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo  $fetch['id']; ?>"> 
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Pay Application Fee</strong></li>
                            <li id="personal"><strong>Prepare Application Fee</strong></li>
                            <li id="payment"><strong>Submission</strong></li>
                            <li id="confirm"><strong>Decision</strong></li>
                            <li id="confirm"><strong>Post Decision Requirement</strong></li>
                            <li id="confirm"><strong>Enrollment Confirmed</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br>
                        <!-- fieldsets -->
                        <fieldset>


<div class="container">
<div class="row">
    <div class="col-sm-5">                 

                                <div class="row">
                                  <div class="col-sm-4">
                                  
                                     <img src="images/university.jfif" style="width:180px; height:200px; margin-right:10px; border-radius:50%;">


                                  </div>
                                  <div class="col-sm-4">
                                   <p style="color:blue; font-weight:bold;"> <?php echo htmlspecialchars($universityname, ENT_QUOTES, 'UTF-8'); ?></p>
                                   <strong>Delivery Method :</strong>
                                   <strong>Level :</strong>
                                   <strong>Required Level :</strong>
                                   <strong>Application ID :</strong>

                                  </div>
                                 </div>
                              
                               
                                 <label class="fieldlabels">Status: *</label>Ready to Submit   <span><input type="checkbox"> </span></br> Submitted to School <span>  <input type="checkbox"> </span></br> Ready for Visa <span> <input type="checkbox"></span> </br> Ready to Enroll   <span><input type="checkbox"></span> </br> Enrollment Confirmed <span> <input type="checkbox"></span></br>
                                 <p style="color:blue;"> <?php echo $fetch['status']; ?> </p></span>

                                 <hr>

<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <label>Student</label><span style="margin-left:10px;"><?php echo $fetch['id']; ?></span><span style="margin-left:10px;"><?php echo $fetch['first_name'].' '.$fetch['last_name']; ?></span>

      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <div class="row">
      <div class="col-lg-6" style="text-align: left;">
   Login Email</br>
   Primary Email</br>
   First Name</br>
   Last Name</br>
   Birthday</br>
   Phone number</br>
   First Language</br>
   Gender</br>
   Marital Status</br>
   Passport number</br>
   Passport Expiry Date</br>
</div>
      <div class="col-lg-6" style="text-align: left;">
      <?php echo $fetch['email']; ?></br>
     <?php echo $fetch['email']; ?></br>
      <?php echo $fetch['first_name']; ?></br>
       <?php echo $fetch['last_name']; ?></br>
       <?php echo $fetch['dob']; ?></br>
     <?php echo $fetch['mobile_number']; ?></br>
      First Language</br>
      <?php echo $fetch['gender']; ?></br>
      <?php echo $fetch['marital_status']; ?></br>
       <?php echo $fetch['passport_num']; ?></br>
      <?php echo $fetch['passport_expiry_date']; ?></br>
      </div>

      </div>



      </div>
    </div>
  </div>
</div>



                               
                                 <hr>


<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <label>Background</label><span style="margin-left:10px;"><?php echo $fetch['country']; ?></span>

      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
          
                        <div class="row">
      <div class="col-lg-6" style="text-align: left;">
      Street</br>
      City/Town</br>
      Country</br>
      Province/State</br>
      Postal / Zip</br>
     
    
      </div>
      <div class="col-lg-6" style="text-align: left;">
      <?php echo $fetch['address']; ?></br>
     <?php echo $fetch['city']; ?></br>
      <?php echo $fetch['country']; ?></br>
       <?php 
       
        $state=mysqli_fetch_assoc(mysqli_query($conn,"select * from states where id='".$fetch['state_id']."'"));
          echo $state['state_name'];
       
        ?></br>
       <?php echo $fetch['postal_code']; ?></br>
     
      </div>

      </div>



      
      </div>
    </div>
  </div>
</div>
















                                      <hr>
                               


                 <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <label class="fieldlabels">Education: *</label> <span style="margin-left:10px;"> <?php 
        
         $fech_highest_level_of_education=mysqli_fetch_assoc(mysqli_query($conn,"select * from program_level where id='".$fetch['highest_level_of_education']."'"));


         echo $fech_highest_level_of_education['program_level'];
        
        ?> </span>

      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
          
                        <div class="row" style="text-align: left;">
            Country of Education</br>
      Grade</br>
      Schools Attended</br>
      <hr>
            <?php $ex=explode(",",$fetch['name_of_institution']);

               foreach($ex as $key => $value)
               {
             ?>
    
      <div class="col-lg-6" style="text-align: left;">
      
      School Name</br>
      Level</br>
      Language</br>
      Attended From </br>
      Attended To </ br>
      Address </br>
      Degree Name </br>
      Graduated </br>
      Certificate Awarded </br>
      Graduation Date </br>
      <hr>
      </div>
      <div class="col-lg-6" style="text-align: left;">
            <?php 
            
         echo $value;
    
             ?></br>

               <?php 
            
      
             
             
             ?></br>
      <?php 
            
                     $primary_langauge=explode(",",$fetch['primary_language_of_instruction']);
               
             echo $primary_langauge[$key];
             
             
             
             ?></br>

       <?php 

           $attended_institution_from=explode(",",$fetch['attended_institution_from']);
               
             echo $attended_institution_from[$key];
             
             
             
             ?></br>

              <?php 
            
                $attended_institution_to=explode(",",$fetch['attended_institution_to']);
               
             echo $attended_institution_to[$key];
             
             
             ?></br>

             <?php 
            
     
                $degree_name=explode(",",$fetch['degree_name']);
               
             echo $degree_name[$key];
             
             ?></br>

             <?php 
            
              $graduated=explode(",",$fetch['graduated']);
               
             echo $graduated[$key];
          
             
             ?></br>

             <?php 
            
                   $certificate_awarded=explode(",",$fetch['certificate_awarded']);
               
             echo $certificate_awarded[$key];
             
             
             ?></br>

             <?php 
            
     
               $graduation_date=explode(",",$fetch['graduation_date']);
               
             echo $graduation_date[$key];
             
             
             ?></br>


             <?php 
            
     
             
             
             ?></br>




      </div>
     <?php } ?> 
      </div>



      
      </div>
    </div>
  </div>
</div>


   </div>

   <div class="col-sm-7">

    <p>Application will not be processed until payment received. Submit payment now</p>


    <div class="pre-submission">




    <div class="row" style="background-color:rgb(246, 246, 246);">
    <div class="col-sm-5">
    <div class="heading" style="text-align: left;">
      <h6> Pre-submission</h6>
     <span> 6 Requirements to be completed</span>
    </div>
    </div>
       <div class="col-sm-7">

   </div>
  
   </div>


   <div class="row">
   <h4>Marriage Certificate</h4>
   <div class="col-sm-3">
   <div id="marriage_certificate" style="width:100%; height:100px;">
   <?php 
    if ($fetch['marriage_certificate_status'] == 1) { 
    ?>
        <i class="fas fa-check-circle text-success"></i> </br><div class="text-success">Approved </div>
    <?php 
    } else if($fetch['marriage_certificate_status'] == 2) { 
    ?>
        <i class="fas fa-times-circle text-danger"></i>  </br><div class="text-danger">Reject...</div>
    <?php 
    } else {
     ?>
       <i class="fas fa-hourglass-half text-warning"></i>  </br><div class="text-warning">Pending...</div>
    <?php 

    } 
    ?>
   </div> 
   </div>
   <div class="col-sm-6">


    <?php if ($fetch['marriage_certificate'] != "") { ?>
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#marraige_certificate_modal">
       View PDF
    </button>
    <?php } else { ?>

 
        <div class="d-flex justify-content-center">
            <img src="./images/pdf.png" width="100px" height="80px" style="margin-top:50px;">
          </div>



     <?php } ?>




   </div>

<div class="col-sm-3">
        <div class="upload-section">
    <label for="marriage_file" class="custom-file-upload">
       <img src="./images/upload_file.png" style="width:50px;height:50px;">
    </label>
    <form id="uploadForm" method="post" enctype="multipart/form-data">
    <input type="hidden" name="student1" value="<?php echo $student; ?>" id="studentone" >
    <input type="file" id="marriage_file" name="marriage_file" accept="application/pdf" class="form-control" style="display:none;">
    <div class="message_login"></div>
</form>
</div>
</div>
 </div>

  <div class="row">
   <h4>Passport</h4>
   <div class="col-sm-3">
   <div id="passport" style="width:100%; height:100px;">
    <?php 
    if ($fetch['passport_status'] == 1) { 
    ?>
        <i class="fas fa-check-circle text-success"></i> </br><div class="text-success">Approved </div>
    <?php 
    } else if($fetch['passport_status'] == 2) { 
    ?>
        <i class="fas fa-times-circle text-danger"></i>  </br><div class="text-danger">Reject...</div>
    <?php 
    } else {
     ?>
       <i class="fas fa-hourglass-half text-warning"></i>  </br><div class="text-warning">Pending...</div>
    <?php 

    } 
    ?>
   </div> 
   </div>
   <div class="col-sm-6">


       <?php if ($fetch['image'] != "") { ?>
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#passport_modal">
       View PDF
    </button>
    <?php } else { ?>

            <div class="d-flex justify-content-center">
            <img src="./images/pdf.png" width="100px" height="80px" style="margin-top:50px;">
          </div>



     <?php } ?>



   </div>

<div class="col-sm-3">
        <div class="upload-section">
    <label for="passport_file" class="custom-file-upload">
       <img src="./images/upload_file.png" style="width:50px;height:50px;">
    </label>
    <form id="uploadForm2" method="post" enctype="multipart/form-data">
    <input type="hidden" name="student2" value="<?php echo $student; ?>" id="studenttwo" >
    <input type="file" id="passport_file" name="passport_file" accept="application/pdf" class="form-control" style="display:none;">
    <div class="message_login2"></div>
</form>
</div>
</div>
</div>


    <div class="row">
     <h4>College Transcript</h4>
    <div class="col-sm-3">
     <div id="college_transcript" style="width:100%; height:100px;">
       <?php 
    if ($fetch['college_transcript_status'] == 1) { 
    ?>
        <i class="fas fa-check-circle text-success"></i> </br><div class="text-success">Approved </div>
    <?php 
    } else if($fetch['college_transcript_status'] == 2) { 
    ?>
        <i class="fas fa-times-circle text-danger"></i>  </br><div class="text-danger">Reject...</div>
    <?php 
    } else {
     ?>
       <i class="fas fa-hourglass-half text-warning"></i>  </br><div class="text-warning">Pending...</div>
    <?php 

    } 
    ?>
   </div> 
   </div>
    
    <div class="col-sm-6">
        
           <?php if ($fetch['college_transcript'] != "") { ?>
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#college_transcript_modal">
       View PDF
    </button>
    <?php } else { ?>

             <div class="d-flex justify-content-center">
            <img src="./images/pdf.png" width="100px" height="80px" style="margin-top:50px;">
          </div>

            <?php } ?>
    </div>

    <div class="col-sm-3">
     <div class="upload-section">
    <label for="college_transcript_file" class="custom-file-upload">
       <img src="./images/upload_file.png" style="width:50px;height:50px;">
    </label>
    <form id="uploadForm3" method="post" enctype="multipart/form-data">
    <input type="hidden" name="student3" value="<?php echo $student; ?>" id="studentthree" >
    <input type="file" id="college_transcript_file" name="college_transcript_file" accept="application/pdf" class="form-control" style="display:none;">
    <div class="message_login3"></div>
</form>
</div>
</div>
</div>





    <div class="row">
      <h4>College Diploma</h4>
    <div class="col-sm-3">
    <div id="college_diploma" style="width:100%; height:100px;">
   <?php 
    if ($fetch['college_diploma_status'] == 1) { 
    ?>
        <i class="fas fa-check-circle text-success"></i> </br><div class="text-success">Approved </div>
    <?php 
    } else if($fetch['college_diploma_status'] == 2) { 
    ?>
        <i class="fas fa-times-circle text-danger"></i>  </br><div class="text-danger">Reject...</div>
    <?php 
    } else {
     ?>
       <i class="fas fa-hourglass-half text-warning"></i>  </br><div class="text-warning">Pending...</div>
    <?php 

    } 
    ?>
   </div> 
    </div>
    <div class="col-sm-6">
     

       <?php if ($fetch['college_diploma'] != "") { ?>
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#college_diploma_modal">
       View PDF
    </button>
    <?php } else { ?>

             <div class="d-flex justify-content-center">
            <img src="./images/pdf.png" width="100px" height="80px" style="margin-top:50px;">
          </div>

            <?php } ?>






    </div>
        <div class="col-sm-3">
     <div class="upload-section">
       <label for="college_diploma_file" class="custom-file-upload">
       <img src="./images/upload_file.png" style="width:50px;height:50px;">
    </label>
     <form id="uploadForm4" method="post" enctype="multipart/form-data">
    <input type="hidden" name="student4" value="<?php echo $student; ?>" id="studentfour" >
    <input type="file" id="college_diploma_file" name="college_diploma_file" accept="application/pdf" class="form-control" style="display:none;">
    <div class="message_login4"></div>
</form>
    
</div>
    </div>
   </div>



     <div class="row">
       <h4> Highschool Transcript</h4>
     <div class="col-sm-3">
    <div id="highschool_transcript" style="width:100%; height:100px;">
      <?php 
    if ($fetch['highschool_transcript_status'] == 1) { 
    ?>
        <i class="fas fa-check-circle text-success"></i> </br><div class="text-success">Approved </div>
    <?php 
    } else if($fetch['highschool_transcript_status'] == 2) { 
    ?>
        <i class="fas fa-times-circle text-danger"></i>  </br><div class="text-danger">Reject...</div>
    <?php 
    } else {
     ?>
       <i class="fas fa-hourglass-half text-warning"></i>  </br><div class="text-warning">Pending...</div>
    <?php 

    } 
    ?>
   </div> 
   </div>
   <div class="col-sm-6">





  
       <?php if ($fetch['highschool_transcript'] != "") { ?>
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#highschool_transcript_modal">
       View PDF
    </button>
    <?php } else { ?>

             <div class="d-flex justify-content-center">
            <img src="./images/pdf.png" width="100px" height="80px" style="margin-top:50px;">
          </div>

            <?php } ?>







   </div>
   
   <div class="col-sm-3">
     <div class="upload-section">
    <label for="highschool_transcript_file" class="custom-file-upload">
       <img src="./images/upload_file.png" style="width:50px;height:50px;">
    </label>
     <form id="uploadForm5" method="post" enctype="multipart/form-data">
    <input type="hidden" name="student5" value="<?php echo $student; ?>" id="studentfive" >
    <input type="file" id="highschool_transcript_file" name="highschool_transcript_file" accept="application/pdf" class="form-control" style="display:none;">
    <div class="message_login5"></div>
</form>
</div>
</div>
</div>

    <div class="row">
           <h4> Highschool Diploma</h4>
    <div class="col-sm-3">
    <div id="highschool_diploma" style="width:100%; height:100px;">
     <?php 
    if ($fetch['highschool_diploma_status'] == 1) { 
    ?>
        <i class="fas fa-check-circle text-success"></i> </br><div class="text-success">Approved </div>
    <?php 
    } else if($fetch['highschool_diploma_status'] == 2) { 
    ?>
        <i class="fas fa-times-circle text-danger"></i>  </br><div class="text-danger">Reject...</div>
    <?php 
    } else {
     ?>
       <i class="fas fa-hourglass-half text-warning"></i>  </br><div class="text-warning">Pending...</div>
    <?php 

    } 
    ?>
   </div> 
   </div>
   <div class="col-sm-6">


  <?php if ($fetch['highschool_diploma'] != "") { ?>
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#highschool_diploma_modal">
       View PDF
    </button>
    <?php } else { ?>

             <div class="d-flex justify-content-center">
            <img src="./images/pdf.png" width="100px" height="80px" style="margin-top:50px;">
          </div>

            <?php } ?>







   </div>
   
   <div class="col-sm-3">
     <div class="upload-section">
    <label for="highschool_diploma_file" class="custom-file-upload">
       <img src="./images/upload_file.png" style="width:50px;height:50px;">
    </label>
     <form id="uploadForm6" method="post" enctype="multipart/form-data">
    <input type="hidden" name="student6" value="<?php echo $student; ?>" id="studentsix" >
    <input type="file" id="highschool_diploma_file" name="highschool_diploma_file" accept="application/pdf" class="form-control" style="display:none;">
    <div class="message_login6"></div>
</form>
</div>
    </div>
   </div>


    <div class="row">
       <h4> Medium of Instruction</h4>
    <div class="col-sm-3">
    <div id="medium_of_instruction" style="width:100%; height:100px;">
    <?php 
    if ($fetch['medium_of_instruction_status'] == 1) { 
    ?>
        <i class="fas fa-check-circle text-success"></i> </br><div class="text-success">Approved </div>
    <?php 
    } else if($fetch['medium_of_instruction_status'] == 2) { 
    ?>
        <i class="fas fa-times-circle text-danger"></i>  </br><div class="text-danger">Reject...</div>
    <?php 
    } else {
     ?>
       <i class="fas fa-hourglass-half text-warning"></i>  </br><div class="text-warning">Pending...</div>
    <?php 

    } 
    ?>
   </div> 
   </div>
   <div class="col-sm-6">

 <?php if ($fetch['medium_of_instruction'] != "") { ?>
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mediumof_instruction_modal">
       View PDF
    </button>
    <?php } else { ?>

             <div class="d-flex justify-content-center">
            <img src="./images/pdf.png" width="100px" height="80px" style="margin-top:50px;">
          </div>

            <?php } ?>


   </div>

   <div class="col-sm-3">
     <div class="upload-section">
    <label for="medium_of_instruction_file" class="custom-file-upload">
       <img src="./images/upload_file.png" style="width:50px;height:50px;">
    </label>
    <form id="uploadForm7" method="post" enctype="multipart/form-data">
    <input type="hidden" name="student7" value="<?php echo $student; ?>" id="studentseven">
    <input type="file" id="medium_of_instruction_file" name="medium_of_instruction_file" accept="application/pdf" class="form-control" style="display:none;">
    <div class="message_login7"></div>
</form>
</div>
    </div>


   </div>
   

     <div class="row">
        <h4>Resume</h4>
    <div class="col-sm-3">
    <div id="resume" style="width:100%; height:100px;">
      <?php 
    if ($fetch['resume'] == 1) { 
    ?>
        <i class="fas fa-check-circle text-success"></i> </br><div class="text-success">Approved </div>
    <?php 
    } else if($fetch['resume'] == 2) { 
    ?>
        <i class="fas fa-times-circle text-danger"></i>  </br><div class="text-danger">Reject...</div>
    <?php 
    } else {
     ?>
       <i class="fas fa-hourglass-half text-warning"></i>  </br><div class="text-warning">Pending...</div>
    <?php 

    } 
    ?>
   </div> 
   </div>
   <div class="col-sm-6">

        <?php if ($fetch['resume'] != "") { ?>
     <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#resume_modal">
       View PDF
    </button>
    <?php } else { ?>

             <div class="d-flex justify-content-center">
            <img src="./images/pdf.png" width="100px" height="80px" style="margin-top:50px;">
          </div>

            <?php } ?>


   </div>
   
   <div class="col-sm-3">
     <div class="upload-section">
    <label for="resume_file" class="custom-file-upload">
       <img src="./images/upload_file.png" style="width:50px;height:50px;">
    </label>
     <form id="uploadForm8" method="post" enctype="multipart/form-data">
    <input type="hidden" name="student8" value="<?php echo $student; ?>" id="studenteight">
    <input type="file" id="resume_file" name="resume_file" accept="application/pdf" class="form-control" style="display:none;">
    <div class="message_login8"></div>
</form>
</div>
    </div>
   </div>
   

 
  



    </div>



















   </div>                                         
                                  
                                   





                               
                        
                              

      
                         

</div>
</div>

                           
                            <input type="button" name="next" class="next action-button" value="Next" style="display:none;" />
                        </fieldset>
                        <fieldset>
                            


                                         








                                    





















                                
                        </fieldset>
                        <fieldset>
                           
                        </fieldset>
                        <fieldset>
                           
                        </fieldset>
                    </form>
                    <div class="row">
								<div class="col-sm-12">
									<!-- <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div> -->
									<div class="input-group mb-0" id="message_login">
										<!-- <a class="btn btn-outline-primary btn-lg btn-block" href="register.html">Register To Create Account</a> -->
									</div>
                  <div id="loader"></div>
								</div>
							</div>
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>



<div class="modal fade" id="marraige_certificate_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:100%; max-width: 1000px; height:50%;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Pdf</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  <embed id="pdfEmbed" src="./images/<?php echo $fetch['marriage_certificate']; ?>" type="application/pdf" width="100%" height="600px" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
                <button type="button" class="btn btn-primary" id="submit_acadmic_intake">Save changes</button>
            </div>
            <div id="message_login"></div>
            <div id="loader"></div>
        </div>
    </div>
</div>

<div class="modal fade" id="passport_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:100%; max-width: 1000px; height:50%;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Pdf</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  <embed id="pdfEmbed" src="./images/<?php echo $fetch['image']; ?>" type="application/pdf" width="100%" height="600px" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
                <button type="button" class="btn btn-primary" id="submit_acadmic_intake">Save changes</button>
            </div>
            <div id="message_login"></div>
            <div id="loader"></div>
        </div>
    </div>
</div>


<div class="modal fade" id="college_transcript_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:100%; max-width: 1000px; height:50%;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Pdf</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  <embed id="pdfEmbed" src="./images/<?php echo $fetch['college_transcript']; ?>" type="application/pdf" width="100%" height="600px" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
                <button type="button" class="btn btn-primary" id="submit_acadmic_intake">Save changes</button>
            </div>
            <div id="message_login"></div>
            <div id="loader"></div>
        </div>
    </div>
</div>



 <div class="modal fade" id="college_diploma_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:100%; max-width: 1000px; height:50%;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Pdf</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  <embed id="pdfEmbed" src="./images/<?php echo $fetch['college_diploma']; ?>" type="application/pdf" width="100%" height="600px" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
                <button type="button" class="btn btn-primary" id="submit_acadmic_intake">Save changes</button>
            </div>
            <div id="message_login"></div>
            <div id="loader"></div>
        </div>
    </div>
</div>



 <div class="modal fade" id="highschool_transcript_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:100%; max-width: 1000px; height:50%;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Pdf</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  <embed id="pdfEmbed" src="./images/<?php echo $fetch['highschool_transcript']; ?>" type="application/pdf" width="100%" height="600px" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
                <button type="button" class="btn btn-primary" id="submit_acadmic_intake">Save changes</button>
            </div>
            <div id="message_login"></div>
            <div id="loader"></div>
        </div>
    </div>
</div>



 <div class="modal fade" id="highschool_diploma_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:100%; max-width: 1000px; height:50%;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Pdf</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  <embed id="pdfEmbed" src="./images/<?php echo $fetch['highschool_diploma']; ?>" type="application/pdf" width="100%" height="600px" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
                <button type="button" class="btn btn-primary" id="submit_acadmic_intake">Save changes</button>
            </div>
            <div id="message_login"></div>
            <div id="loader"></div>
        </div>
    </div>
</div>



 <div class="modal fade" id="mediumof_instruction_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:100%; max-width: 1000px; height:50%;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Pdf</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  <embed id="pdfEmbed" src="./images/<?php echo $fetch['medium_of_instruction']; ?>" type="application/pdf" width="100%" height="600px" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
                <button type="button" class="btn btn-primary" id="submit_acadmic_intake">Save changes</button>
            </div>
            <div id="message_login"></div>
            <div id="loader"></div>
        </div>
    </div>
</div>


 <div class="modal fade" id="resume_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:100%; max-width: 1000px; height:50%;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Pdf</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  <embed id="pdfEmbed" src="./images/<?php echo $fetch['resume']; ?>" type="application/pdf" width="100%" height="600px" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
                <button type="button" class="btn btn-primary" id="submit_acadmic_intake">Save changes</button>
            </div>
            <div id="message_login"></div>
            <div id="loader"></div>
        </div>
    </div>
</div>






    <style>
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
    top: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>



<script>
    const dobInput = document.getElementById('dob');

    dobInput.addEventListener('focus', function () {
        this.showPicker();
    });

    dobInput.addEventListener('click', function () {
        this.showPicker();
    });

    dobInput.addEventListener('blur', function () {
        // Optionally, you can add any additional behavior when the input loses focus
    });
</script>

<script>
    const passport_expiry_date = document.getElementById('passport_expiry_date');

    passport_expiry_date.addEventListener('focus', function () {
        this.showPicker();
    });

    passport_expiry_date.addEventListener('click', function () {
        this.showPicker();
    });

    passport_expiry_date.addEventListener('blur', function () {
        // Optionally, you can add any additional behavior when the input loses focus
    });
</script>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"></script>
    <script> 
        $(document).ready(function(){
       

          var country = $('#country').val();
            
               
            if(country){
                $.ajax({
                    type:'POST',
                    url:'fetch_states.php',
                    data:'country_id='+country,
                    success:function(html){
                        
                        $('#state').html(html);
                    }
                }); 
              }
            

            $('#country').on('change', function(){
            var countryID = $(this).val();
           
            if(countryID){
                $.ajax({
                    type:'POST',
                    url:'fetch_states.php',
                    data:'country_id='+countryID,
                    success:function(html){
                        
                        $('#state').html(html);
                    }
                }); 
            }else{
                $('#state').html('<option value="">Select Country first</option>'); 
            }
        });







   
       







            $("#msform").on("submit", function(event){
        event.preventDefault();
        var formData = new FormData(this);
        
        $.ajax({
            url: "update_profile.php",
            method: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(data){

                $("#message_login").show().html(data);
            }
        });
    });



   
  $("#submit_acadmic_intake").on("click", function(event) {
    event.preventDefault();

    // Collect form data
    var formData = new FormData($("#acadmic_intake")[0]);
    console.log("Form Data: ", ...formData.entries()); // Enhanced debug line to display the form data contents

    $.ajax({
        url: "php/update_acadmic_intake.php", // Make sure this path is correct
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: function() {
            // Show loader before making the request
            $("#loader").show();
        },
        success: function(data) {
            console.log("Response: ", data); // Debug line
            $("#message_login").show().html(data);
        },
        complete: function() {
            // Hide the loader after the request is complete (whether success or error)
            $("#loader").hide();
        },
        error: function(xhr, status, error) {
            console.error("Error: ", error); // Debug line for error handling
            $("#message_login").show().html('<div class="alert alert-danger" role="alert">Failed to submit form. Please try again.</div>');
        }
    });
});


   $("#marriage_file").on("change", function(event) {
  
    event.preventDefault(); // Prevent default form submission

    // Create a FormData object to hold the file data
    var formData = new FormData();

    // Append the selected file and the student ID from the form
    formData.append("marriage_file", this.files[0]); // File input
    formData.append("student1", $("#studentone").val()); // Hidden or text input for student ID

    $.ajax({
        url: "php/upload.php", // The server-side script to handle the upload
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
         
            $(".message_login").html(data); // Display server response
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $(".message_login").html("An error occurred while uploading the file."); // Error message display
        }
    });
});


  




   $("#passport_file").on("change", function(event) {
      
    event.preventDefault(); // Prevent default form submission

    // Create a FormData object to hold the file data
    var formData = new FormData();

    // Append the selected file and the student ID from the form
    formData.append("passport_file", this.files[0]); // File input
    formData.append("student2", $("#studenttwo").val()); // Hidden or text input for student ID

    $.ajax({
        url: "php/upload2.php", // The server-side script to handle the upload
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
           alert(data);
            $(".message_login2").html(data); // Display server response
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $(".message_login2").html("An error occurred while uploading the file."); // Error message display
        }
    });
});




   $("#college_transcript_file").on("change", function(event) {
     
    event.preventDefault(); // Prevent default form submission

    // Create a FormData object to hold the file data
    var formData = new FormData();

    // Append the selected file and the student ID from the form
    formData.append("college_transcript_file", this.files[0]); // File input
    formData.append("student3", $("#studentthree").val()); // Hidden or text input for student ID

    $.ajax({
        url: "php/upload3.php", // The server-side script to handle the upload
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
           alert(data);
            $(".message_login3").html(data); // Display server response
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $(".message_login3").html("An error occurred while uploading the file."); // Error message display
        }
    });
});



 
   $("#college_diploma_file").on("change", function(event) {
     
    event.preventDefault(); // Prevent default form submission

    // Create a FormData object to hold the file data
    var formData = new FormData();

    // Append the selected file and the student ID from the form
    formData.append("college_diploma_file", this.files[0]); // File input
    formData.append("student4", $("#studentfour").val()); // Hidden or text input for student ID

    $.ajax({
        url: "php/upload4.php", // The server-side script to handle the upload
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          
            $(".message_login4").html(data); // Display server response
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $(".message_login4").html("An error occurred while uploading the file."); // Error message display
        }
    });
});


   $("#highschool_transcript_file").on("change", function(event) {
    
    event.preventDefault(); // Prevent default form submission

    // Create a FormData object to hold the file data
    var formData = new FormData();

    // Append the selected file and the student ID from the form
    formData.append("highschool_transcript_file", this.files[0]); // File input
    formData.append("student5", $("#studentfive").val()); // Hidden or text input for student ID

    $.ajax({
        url: "php/upload5.php", // The server-side script to handle the upload
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
      
            $(".message_login5").html(data); // Display server response
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $(".message_login5").html("An error occurred while uploading the file."); // Error message display
        }
    });
});




 $("#highschool_diploma_file").on("change", function(event) {
    
    event.preventDefault(); // Prevent default form submission

    // Create a FormData object to hold the file data
    var formData = new FormData();

    // Append the selected file and the student ID from the form
    formData.append("highschool_diploma_file", this.files[0]); // File input
    formData.append("student6", $("#studentsix").val()); // Hidden or text input for student ID

    $.ajax({
        url: "php/upload6.php", // The server-side script to handle the upload
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
         
            $(".message_login6").html(data); // Display server response
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $(".message_login6").html("An error occurred while uploading the file."); // Error message display
        }
    });
});



     $("#medium_of_instruction_file").on("change", function(event) {
      
    event.preventDefault(); // Prevent default form submission

    // Create a FormData object to hold the file data
    var formData = new FormData();

    // Append the selected file and the student ID from the form
    formData.append("medium_of_instruction_file", this.files[0]); // File input
    formData.append("student7", $("#studentseven").val()); // Hidden or text input for student ID

    $.ajax({
        url: "php/upload7.php", // The server-side script to handle the upload
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
           alert(data);
            $(".message_login7").html(data); // Display server response
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $(".message_login7").html("An error occurred while uploading the file."); // Error message display
        }
    });
});






    $("#resume_file").on("change", function(event) {
    
    event.preventDefault(); // Prevent default form submission

    // Create a FormData object to hold the file data
    var formData = new FormData();

    // Append the selected file and the student ID from the form
    formData.append("resume_file", this.files[0]); // File input
    formData.append("student8", $("#studenteight").val()); // Hidden or text input for student ID

    $.ajax({
        url: "php/upload8.php", // The server-side script to handle the upload
        method: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
       
            $(".message_login8").html(data); // Display server response
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $(".message_login8").html("An error occurred while uploading the file."); // Error message display
        }
    });
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
        // Get today's date
        var today = new Date();
        
        // Calculate the date exactly 15 years ago
        var fifteenYearsAgo = new Date(today.getFullYear() - 15, today.getMonth(), today.getDate());
        var fifteenYearsAgoFormatted = fifteenYearsAgo.toISOString().split('T')[0];
        
        // Set the max attribute for the date input
        var dobInput = document.getElementById('dob');
        dobInput.setAttribute('max', fifteenYearsAgoFormatted);
    </script>
   <script>
        // Get today's date
        var today = new Date();
        
        // Format today's date to YYYY-MM-DD
        var todayFormatted = today.toISOString().split('T')[0];
        
        // Set the min attribute for the date input to today
        var passportExpiryInput = document.getElementById('passport_expiry_date');
        passportExpiryInput.setAttribute('min', todayFormatted);
    </script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

       
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>





    

<div class="dark-transparent sidebartoggler"></div>
  <!-- <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/js/vendor.min.js"></script> -->
  <!-- Import Js Files -->
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/js/breadcrumb/breadcrumbChart.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/js/theme/app.minisidebar.init.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/js/theme/theme.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/js/theme/app.min.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/js/theme/sidebarmenu.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/js/theme/feather.min.js"></script>

  <!-- solar icons -->
  <script src="../../../../cdn.jsdelivr.net/npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/libs/fullcalendar/index.global.min.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/js/apps/calendar-init.js"></script>

  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/js/dashboards/dashboard4.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/libs/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="https://bootstrapdemos.wrappixel.com/materialpro/dist/assets/js/extra-libs/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

  
 
<script>
           document.getElementById('add-more-btn').addEventListener('click', function() {
    // Get the dropdown container
    var container = document.getElementById('dropdown-container');
    
    // Get the hidden dropdown template
    var template = document.getElementById('dropdown-template').innerHTML;
    
    // Create a new div to hold the cloned dropdown
    var newDropdownWrapper = document.createElement('div');
    newDropdownWrapper.className = 'dropdown-wrapper';
    
    // Set the innerHTML of the new div to the template
    newDropdownWrapper.innerHTML = template;
    
    // Append the new div to the container
    container.appendChild(newDropdownWrapper);

    // Add event listener for remove button
    newDropdownWrapper.querySelector('.remove-btn').addEventListener('click', function() {
        container.removeChild(newDropdownWrapper);
    });
});

</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  


</body>
</html>
