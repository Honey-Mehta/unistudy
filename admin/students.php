<?php 

if(isset($_GET['delete_id'])){
	$conn=mysqli_connect("localhost","root","","uni_study");
$sqlDELETE=mysqli_query($conn,"DELETE FROM `student` WHERE `id`='".$_GET['delete_id']."'");

echo "<script>alert('delete student..!!');window.location.href='students.php';</script>";
}

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
                    <img src="./images/logo_with_name.jpeg" alt="homepage" class="dark-logo" width="200px" height="50px;"/>
                    <!-- Light Logo icon -->
                    <img src="/images/logo_with_name.jpeg" alt="homepage" class="light-logo" />
                  </b>
                  <!--End Logo icon -->
                  <!-- Logo text -->
                  
                </a>
              </div>


            </div>

            <ul class="navbar-nav gap-2">

              <li class="nav-item nav-icon-hover-bg rounded-circle">
                <a class="nav-link nav-icon-hover sidebartoggler" id="headerCollapse" href="javascript:void(0)">
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
                <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0 overflow-hidden" aria-labelledby="drop2">
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
                                  
                                </a>
                                <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-invoice.html" class="d-flex align-items-center pb-9 position-relative">
                                  <div class="bg-secondary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:bill-list-linear" class="text-secondary fs-5"></iconify-icon>
                                  </div>
                                  
                                </a>
                                <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-contact2.html" class="d-flex align-items-center pb-9 position-relative">
                                  <div class="bg-success-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:bedside-table-2-linear" class="text-success fs-5"></iconify-icon>
                                  </div>
                                 
                                </a>
                                <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-email.html" class="d-flex align-items-center pb-9 position-relative">
                                  <div class="bg-warning-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:letter-unread-linear" class="text-warning fs-5"></iconify-icon>
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
                                 
                                </a>
                                <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-calendar.html" class="d-flex align-items-center pb-9 position-relative">
                                  <div class="bg-primary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:calendar-linear" class="text-primary fs-5"></iconify-icon>
                                  </div>
                                 
                                </a>
                                <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-contact.html" class="d-flex align-items-center pb-9 position-relative">
                                  <div class="bg-secondary-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:bedside-table-linear" class="text-secondary fs-5"></iconify-icon>
                                  </div>
                                
                                </a>
                                <a href="https://bootstrapdemos.wrappixel.com/materialpro/dist/minisidebar/app-notes.html" class="d-flex align-items-center pb-9 position-relative">
                                  <div class="bg-success-subtle rounded-circle round-40 me-3 p-6 d-flex align-items-center justify-content-center">
                                    <iconify-icon icon="solar:palette-linear" class="text-success fs-5"></iconify-icon>
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
                       
                      </div>
                    </div>
                  </div>
                </div>
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
                              <h5 class="mb-1 fs-4">Admin</h5>
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




      <div class="container-fluid" style="margin-top:100px; ">
	      <div class="row">
		      <div class="col-sm-8">
          <h1>Students</h1>
          </div>
          <div class="col-sm-4" style="margin-top:30px;">
          <div class="toggle-buttons" style="float:left;">
            <button onclick="toggleView('list')" class="btn btn-primary">List View</button>
            <button onclick="toggleView('grid')" class="btn btn-primary">Grid View</button>
          </div>

           
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" style="margin-left:10px;"><i class="fa fa-plus mr-4" ></i> Add new Student </button>
           <div class="modal fade" id="myModal" >
				     <div class="modal-dialog" >
					    <div class="modal-content">
						<!-- Modal Header -->
						     <div class="modal-header">
						     	<h4 class="modal-title">Add New Student</h4>
						     	<button type="button" class="close" data-dismiss="modal" style="margin-left:200px;">&times;</button>
					    	</div>
						<!-- Modal Body -->
						<!-- Modal body -->
					      	<div class="modal-body">
                  <form id="insertForm">
								<div class="form-group">
									<div class="row">
										<div class="col-sm-6">
											<label for="name" style="float:left;">First Name:</label>
											<input type="text" class="form-control" id="name" name="first_name" required>
										</div>
										<div class="col-sm-6">
											<label for="name" style="float:left;">Last Name:</label>
											<input type="text" class="form-control" id="l_name" name="last_name" required>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="name" style="float:left;">Middle Name:</label>
									<input type="text" class="form-control" id="middle_name" name="middle_name" required>
								</div>
								<div class="form-group">
									<label for="birthday" style="float:left;">Date of Birth:</label>
									<input type="date" class="form-control" id="dob" name="dob" required>
								</div>
								<div class="form-group">
									<label for="sel1" class="form-label">Country of citizenship:</label>
									<select class="form-select" id="sel1" name="country" class="form-control">
										<option>---SELECT COUNTRY---</option> <?php
        // Assuming you have established a database connection named $conn

        // SQL query to fetch all countries
		$conn=mysqli_connect("localhost","root","","uni_study");
        $sql = "SELECT * FROM country";
        $result = mysqli_query($conn, $sql);

        // Check if there are results
        if ($result) {
            // Loop through the results and create an option element for each country
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';
            }
        } else {
            echo '<option>No countries found</option>';
        }
        ?>
									</select>
								</div>
								<div class="form-group">
									<label for="name" style="float:left;">Passport Number:</label>
									<input type="text" class="form-control" id="passport_num" name="passport_num" required>
								</div>
								<div class="form-group">
									<label for="name" style="float:left;">Passport expiry date:</label>
									<input type="date" class="form-control" id="passport_expiry_date" name="passport_expiry_date" required>
								</div>
								<div class="form-group">
									  <label class="form-label" style="margin-right: 10px;">Gender:</label>
                  <div style="display: inline-block; margin-right: 20px;">
                      <input type="radio" id="male" name="gender" value="male">
                      <label for="male">Male</label>
                  </div>
                  <div style="display: inline-block;">
                      <input type="radio" id="female" name="gender" value="female">
                      <label for="female">Female</label>
                  </div>
								</div>
								<div class="form-group">
									<label for="name" style="float:left;">Email:</label>
									<input type="email" class="form-control" id="email" name="email" required>
								</div>
								<div class="form-group">
									<label for="name" style="float:left;">Phone Number</label>
									<input type="text" class="form-control" id="phone" name="mobile_number" required>
								</div>
								<div class="form-group">
                <label for="sel1" class="form-label" style="float:left;" >Status:</label>
									<select class="form-select" id="sel1" name="status" class="form-control">
										<option>Please Choose a status</option>
										<?php
        // Assuming you have established a database connection named $conn

        // SQL query to fetch all countries
		$conn=mysqli_connect("localhost","root","","uni_study");
        $sql = "SELECT * FROM status";
        $result = mysqli_query($conn, $sql);

        // Check if there are results
        if ($result) {
            // Loop through the results and create an option element for each country
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="' . $row['status'] . '">' . $row['status'] . '</option>';
            }
        } else {
            echo '<option>No countries found</option>';
        }
        ?>
									</select>
								</div>
								<div class="form-group">
									<label for="sel1" class="form-label" style="float:left;">Referral Source:</label>
									<select class="form-select" id="sel1" name="referall_source" class="form-control">
										<option>Please Choose a Referall Source </option>
										<option>Walk in </option>
										<option>Facebook</option>
										<option>Instagram</option>
										<option>Youtube</option>
										<option>Client</option>
										<option>Another Student</option>
										<option>Friend</option>
										<option>Staff</option>
										<option>In-Personal Event</option>
										<option>Virtual Event</option>
										<option>Immigration agent</option>
										<option>Other</option>
									</select>
								</div>
								<div class="form-group">
									<label>Country of Interest</label>
									<select id="country_of_interest" name="country_of_interest[]" multiple class="form-control">
										 <?php
        // Assuming you have established a database connection named $conn

        // SQL query to fetch all countries
		$conn=mysqli_connect("localhost","root","","uni_study");
        $sql = "SELECT * FROM country_of_interest";
        $result = mysqli_query($conn, $sql);

        // Check if there are results
        if ($result) {
            // Loop through the results and create an option element for each country
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="' . $row['country_of_interest'] . '">' . $row['country_of_interest'] . '</option>';
            }
        } else {
            echo '<option>No countries found</option>';
        }
        ?>
									</select>
								</div>
								<div class="form-group">
									<label>Service of Interest</label>
									<select id="service_of_interest" name="service_of_interest[]" multiple class="form-control">
										 <?php
        // Assuming you have established a database connection named $conn

        // SQL query to fetch all countries
		$conn=mysqli_connect("localhost","root","","uni_study");
        $sql = "SELECT * FROM services_of_interest";
        $result = mysqli_query($conn, $sql);

        // Check if there are results
        if ($result) {
            // Loop through the results and create an option element for each country
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="' . $row['service_of_interest'] . '">' . $row['service_of_interest'] . '</option>';
            }
        } else {
            echo '<option>No countries found</option>';
        }
        ?>
									</select>
								</div>
								<div style="display: flex; justify-content: center; margin-top: 20px;">
                  <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Submit</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
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
              </div>

              <div class="modal-footer">
								<!--   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
						</div>

      </div>
      </div>
      </div>
      </div>









          
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
    left: 35%;
    top: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>






<style>
    .button-container {
        display: flex; /* Use flexbox to align items */
        gap: 5px; /* Space between buttons */
    }

    modal-dialog {
  max-width: 500px; /* Set fixed width */
  width: 100%; /* Ensure it’s responsive */
}

.modal-body {
  max-height: 500px; /* Set fixed height */
  overflow-y: auto; /* Enable vertical scrolling */
}
</style>






<div class="container-fluid"  style="margin-top:50px; max-width:90%;" >
<div class="row">
<div class="col-lg-12">
<div id="list-view" style="overflow-x:auto;">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col" style="min-width:150px;">First Name</th>
                <th scope="col" style="min-width:150px;">Last Name</th>
                <th scope="col" style="min-width:150px;">Middle Name</th>
                <th scope="col" style="min-width:150px;">Date of Birth</th>
                <th scope="col" style="min-width:150px;">Country</th>
                <th scope="col" style="min-width:150px;">Passport Number</th>
                <th scope="col" style="min-width:250px;">Passport Expiry Date</th>
                <th scope="col" style="min-width:150px;">Gender</th>
                <th scope="col" style="min-width:200px;">Student Created Date</th>
                <th scope="col" style="min-width:200px;">Last Edited Date</th>
                <th scope="col">Email</th>
                <th scope="col" style="min-width:150px;">Status</th>
                <th scope="col" style="min-width:150px;">Referall source</th>
                <th scope="col" style="min-width:150px;">Country of Interest</th>
                <th scope="col" style="min-width:150px;">Service of interest</th>
                 <th scope="col" style="min-width:150px;">Passport Status</th>
                  <th scope="col" style="min-width:150px;">Marriage Certificate Status</th>
                   <th scope="col" style="min-width:150px;">College Transcript Status</th>
                    <th scope="col" style="min-width:150px;">College Diploma Status</th>
                       <th scope="col" style="min-width:150px;">High School Transcript Status</th>
                        <th scope="col" style="min-width:150px;">High Diploma Transcript Status</th>
                          <th scope="col" style="min-width:150px;">Medium of Instruction Status</th>
                           <th scope="col" style="min-width:150px;">Resume Status</th>
                <th scope="col" style="min-width:150px;">Edit / Delete / View</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conn=mysqli_connect("localhost","root","","uni_study");

            // Set the number of records per page
            $records_per_page = 5;

            // Calculate the offset
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $offset = ($page - 1) * $records_per_page;

            // Fetch the total number of records
            $total_records_query = "SELECT COUNT(*) FROM `student`";
            $total_records_result = mysqli_query($conn, $total_records_query);
            $total_records_row = mysqli_fetch_array($total_records_result);
            $total_records = $total_records_row[0];

            // Fetch the records for the current page
            $sqllogistic = mysqli_query($conn, "SELECT * FROM `student` ORDER BY id DESC LIMIT $records_per_page OFFSET $offset");

            // Calculate the total number of pages
            $total_pages = ceil($total_records / $records_per_page);

            $id = $offset;
            while($show = mysqli_fetch_assoc($sqllogistic)){
                $id++;
            ?>
            <tr>
                <td scope="row"><?php echo $id;?></td>
                <td><?php echo $show['first_name'];?></td>
                <td><?php echo $show['last_name'];?></td>
                <td><?php echo $show['middle_name'];?></td>
                <td><?php echo $show['dob'];?></td>
                <td><?php echo $show['country'];?></td>
                <td><?php echo $show['passport_num'];?></td>
                <td><?php echo $show['passport_expiry_date'];?></td>
                <td><?php echo $show['gender'];?></td>
                <td><?php echo $show['student_created_date'];?></td>
                    <td><?php echo $show['last_edited_date'];?></td>
                <td><?php echo $show['email'];?></td>
                <td><?php echo $show['status'];?></td>
                <td><?php echo $show['referall_source'];?></td>
                <td><?php echo $show['country_of_interest'];?></td>
                <td><?php echo $show['service_of_interest'];?></td>
                  <td>
  <?php if ($show['passport_status'] == 1) { ?>
    <button class="btn btn-success">Approved</button>
  <?php } else { ?>
    <button class="btn btn-danger">Rejected</button>
  <?php } ?>
</td>
                <td>
  <?php if ($show['marriage_certificate_status'] == 1) { ?>
    <button class="btn btn-success">Approved</button>
  <?php } else { ?>
    <button class="btn btn-danger">Rejected</button>
  <?php } ?>
</td>

                  <td>
  <?php if ($show['college_transcript_status'] == 1) { ?>
    <button class="btn btn-success">Approved</button>
  <?php } else { ?>
    <button class="btn btn-danger">Rejected</button>
  <?php } ?>
</td>
                   <td>
  <?php if ($show['college_diploma_status'] == 1) { ?>
    <button class="btn btn-success">Approved</button>
  <?php } else { ?>
    <button class="btn btn-danger">Rejected</button>
  <?php } ?>
</td>
                      <td>
  <?php if ($show['highschool_transcript_status'] == 1) { ?>
    <button class="btn btn-success">Approved</button>
  <?php } else { ?>
    <button class="btn btn-danger">Rejected</button>
  <?php } ?>
</td>
                       <td>
  <?php if ($show['highschool_diploma_status'] == 1) { ?>
    <button class="btn btn-success">Approved</button>
  <?php } else { ?>
    <button class="btn btn-danger">Rejected</button>
  <?php } ?>
</td>
                        <td>
  <?php if ($show['medium_of_instruction_status'] == 1) { ?>
    <button class="btn btn-success">Approved</button>
  <?php } else { ?>
    <button class="btn btn-danger">Rejected</button>
  <?php } ?>
</td>
                         <td>
  <?php if ($show['resume_status'] == 1) { ?>
    <button class="btn btn-success">Approved</button>
  <?php } else { ?>
    <button class="btn btn-danger">Rejected</button>
  <?php } ?>
</td>
                <td>
                    <div class="button-container">
                        <a href="edit_students.php?edit=<?php echo $show['id']; ?>" class="btn btn-primary Edit">Edit</a>
                        <a onclick="return confirm('Are you sure delete?')" href="?delete_id=<?php echo $show['id']?>" class="btn btn-primary Delete">Delete</a>
                        <a href="view_documents_copy.php?edit=<?php echo $show['id']; ?>" class="btn btn-primary Delete">View Document</a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <!-- Pagination Controls -->
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?php if ($page > 1): ?>
                <li class="page-item"><a class="page-link" href="?page=1">First</a></li>
                <li class="page-item"><a class="page-link" href="?page=<?php echo $page - 1; ?>">Previous</a></li>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>

            <?php if ($page < $total_pages): ?>
                <li class="page-item"><a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a></li>
                <li class="page-item"><a class="page-link" href="?page=<?php echo $total_pages; ?>">Last</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</div>

<style>
   #grid-view {
    display: none;
    overflow-x: auto;
    max-height: 600px; /* Set a maximum height for the div */
    overflow-y: auto; /* Enable vertical scrolling */
}

.table thead th {
    position: sticky;
    top: 0;
    z-index: 10;
    background-color: inherit;
}
</style>

<div id="grid-view"  style="display:none; overflow-x:auto;">
    <table class="table table-bordered" style="min-width: 3000px;">
        <thead>
            <tr>
                <th scope="col" style="background-color:#ffccff; vertical-align:middle; text-align:center;">Rejected</th>
                <th scope="col" style="background-color: #e0ebeb; vertical-align:middle; text-align:center;">Pending</th>
                <th scope="col" style="background-color: #cdb398; vertical-align:middle; text-align:center;">App fee paid</th>
                <th scope="col" style="background-color: #cc6666; vertical-align:middle; text-align:center;">Offer Letter Received</th>
                <th scope="col" style="background-color: #ffbf80; vertical-align:middle; text-align:center;">LOA Received</th>
                <th scope="col" style="background-color: #ffffcc; vertical-align:middle; text-align:center;">Waiting for approval</th>
                <th scope="col" style="background-color: #ffe6ff; vertical-align:middle; text-align:center;">Approved</th>
                <th scope="col" style="background-color: #ffe6cc; vertical-align:middle; text-align:center;">On hold</th>
                <th scope="col" style="background-color: #b3ffcc; vertical-align:middle; text-align:center;">Cancelled Application</th>
                <th scope="col" style="background-color: #f0f5f5; vertical-align:middle; text-align:center;">Abandoned</th>
                 <th scope="col" style="background-color: #f0f5f5; vertical-align:middle; text-align:center;">New Lead</th>
                  <th scope="col" style="background-color: #f0f5f5; vertical-align:middle; text-align:center;">Follow up</th>
                   <th scope="col" style="background-color: #f0f5f5; vertical-align:middle; text-align:center;">Ready to Apply</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $statuses = [
                'Rejected' => '#ffccff',
                'Pending' => '#e0ebeb',
                'App fee paid' => '#cdb398',
                'Offer Letter Received' => '#cc6666',
                'LOA Received' => '#ffbf80',
                'Waiting for approval' => '#ffffcc',
                'Approved' => '#ffe6ff',
                'On hold' => '#ffe6cc',
                'Cancelled Application' => '#b3ffcc',
                'Abandoned' => '#f0f5f5',
                'New Lead' => '',
                'Follow up' => '',
                'Ready to Apply' => ''
            ];

            // Fetch all students and organize by status
            $studentsByStatus = [];
            $sqllogistic = mysqli_query($conn, "SELECT * FROM student");
            while ($show = mysqli_fetch_assoc($sqllogistic)) {
                $studentsByStatus[$show['status']][] = $show;
            }

            // Determine the maximum number of rows needed
            $maxRows = 0;
            foreach ($studentsByStatus as $students) {
                if (count($students) > $maxRows) {
                    $maxRows = count($students);
                }
            }

            // Display rows
            for ($i = 0; $i < $maxRows; $i++) {
                echo "<tr>";
                foreach ($statuses as $status => $color) {
                    if (isset($studentsByStatus[$status][$i])) {
                        $student = $studentsByStatus[$status][$i];
                       echo "<td class='card-container>";
                        echo "<div class='card' >";
                            echo "<div class='card-body'>";
                                echo "<p class='card-text'><strong>First Name: </strong>{$student['first_name']} {$student['last_name']}</p>";
                                echo "<p class='card-text'><strong>Middle Name: </strong>{$student['middle_name']}</p>";
                                echo "<p class='card-text'><strong>DOB: </strong>{$student['dob']}</p>";
                                echo "<p class='card-text'><strong>Country: </strong>{$student['country']}</p>";
                                echo "<p class='card-text'><strong>Passport Number: </strong>{$student['passport_num']}</p>";
                                echo "<p class='card-text'><strong>Passport Expiry Date: </strong>{$student['passport_expiry_date']}</p>";
                                echo "<p class='card-text'><strong>Gender: </strong>{$student['gender']}</p>";
                                echo"<a href='edit_students.php?edit={$student['id']}' class='btn btn-primary Edit'> Edit</a>";
echo "<a onclick='return confirm(\"Are you sure delete?\")' href='?delete_id={$student['id']}' class='btn btn-primary Delete' style='margin-left:10px;'><i class='fa fa-trash'></i></a>";
echo"<a href='view_documents.php?edit={$student['id']}' class='btn btn-primary Delete' style='margin-left:10px;'>View Document</a>";  
echo "</div>";
                        echo "</div>";
                    echo "</td>";
                    } else {
                        echo "<td></td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div> 

</div>
</div>
</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />







  <script>
$(document).ready(function(){

    $("#insertForm").on("submit", function(event){
     
        event.preventDefault();
        $.ajax({
            url: "insert.php",
            method: "POST",
            data: $(this).serialize(),
            success: function(data){
          
                $("#message_login").show().html(data);
            }
        });
    });












 $('#country_of_interest').multiselect({
  nonSelectedText: 'Select Country of Interest',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'465px'
 });
 
 
 $('#service_of_interest').multiselect({
  nonSelectedText: 'Select Service of Interest',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'465px'
 });
 


 
 
});
</script>


<script>
         function toggleView(view) {
            var listView = document.getElementById('list-view');
            var gridView = document.getElementById('grid-view');
            
            if(view === 'list') {
                listView.style.display = 'block';
                gridView.style.display = 'none';
            } else {
                listView.style.display = 'none';
                gridView.style.display = 'block';
            }
        }

    // Set default view
    toggleView('list');
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
