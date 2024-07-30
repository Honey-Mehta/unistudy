<?php 
     $id=   $_GET['delete_id'];
if(isset($_GET['delete_id'])){
	$conn=mysqli_connect("localhost","root","","uni_study");
$sqlDELETE=mysqli_query($conn,"DELETE image FROM `student` WHERE `id`='".$_GET['delete_id']."'");

echo "<script>alert('delete student..!!');window.location.href='view_documents_copy.php?edit=$id';</script>";
}

?>

<?php  
   $id = $_GET['edit'];
   $conn=mysqli_connect("localhost","root","","uni_study");   
   $fetch = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM student WHERE id='$id'"));
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
                  <span class="logo-text">
                    <!-- dark Logo text -->
                    
                  </span>
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
                               
                               
                              
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="position-relative">
                               
                               
                              
                                
                              </div>
                            </div>
                          </div>
                        </div>
                       
                      </div>
                    </div>
                  
                  </div>
                </div>
              </li>


            </ul>
            <div class="container justify-content-center">

<h1 class="text-white">Document Verification</h1>

</div>
           


            
          
                <ul class="navbar-nav gap-2 flex-row ms-auto align-items-center justify-content-center">
                  <!-- ------------------------------- -->
                  <!-- start language Dropdown -->
                  <!-- ------------------------------- -->

                  <li class="nav-item hover-dd dropdown nav-icon-hover-bg rounded-circle">
                   
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                      <div class="message-body">
                     
                       
                        
                      </div>
                    </div>
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
                              <h5 class="mb-1 fs-4">    
                                Admin
                              </h5>
                              <p class="mb-0 fs-2 d-flex align-items-center text-muted">
                                markrarn@wrappixel.com
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="message-body pb-3">
                        
                        
                          <div class="px-3">
                            
                            
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












<div class="container-fluid" style="max-width:100%;">
  <form id="insertForm" method="POST">
    <input type="hidden" value="<?php echo $id; ?>" name="id">
    
    <div class="row">
      <!-- Passport -->
      <div class="col-lg-3">
        <h4 class="text-center">Passport</h4>
        <?php if ($fetch['image'] == "") { ?>
          <div class="d-flex justify-content-center">
            <img src="./images/pdf.png" width="150px" height="150px" style="margin-top:50px;">
          </div>
        <?php } else { ?>
          <div class="d-flex justify-content-center ">
            <embed src="./images/<?php echo $fetch['image']; ?>" type="application/pdf" width="250px" height="250px" />
          </div>
            <div class="d-flex justify-content-center mt-2" >
            <a href="#" class="btn btn-primary bt-lg" data-toggle="modal" data-target="#pdfModal-passport" data-pdf-url="./images/<?php echo $fetch['image']; ?>">View</a>
              <a onclick="return confirm('Are you sure delete?')" href="?delete_id=<?php echo $fetch['id']; ?>" class="btn btn-danger bt-lg"  style="text-color:blue; margin-left:20px;">Delete</a>
            </div>
          
        <?php } ?>
        <!-- <div class="text-center mt-2">
        <input id="approve_passport" class="form-check-input" type="radio" name="passport" value="1" required style="border:2px solid black;" <?php if($fetch['passport_status'] == 1) {echo "checked";} ?>>
<label for="approve_passport" class="form-check-label"><h5>Approve</h5></label>
<input id="reject_passport" class="form-check-input" type="radio" name="passport" value="2" required style="border:2px solid black;" <?php if($fetch['passport_status'] == 2) {echo "checked";} ?>>
<label for="reject_passport" class="form-check-label"><h5>Reject</h5></label>
<input id="pending_passport" class="form-check-input" type="radio" name="passport" value="0" required style="border:2px solid black;" <?php if($fetch['passport_status'] == 0) {echo "checked";} ?>>
<label for="pending_passport" class="form-check-label"><h5>Pending</h5></label>
        </div> -->

   
        <div class=" text-center mt-2" data-toggle="buttons">
  <label class="btn btn-primary">
    <input type="radio"  name="passport" value="1" id="option1" <?php if($fetch['passport_status'] == 1) {echo "checked";} ?> autocomplete="off"> Approve
  </label>
  <label class="btn btn-danger">
    <input type="radio"   name="passport" value="2"  <?php if($fetch['passport_status'] == 2) {echo "checked";} ?> autocomplete="off"> Reject
  </label>
  <label class="btn btn-secondary">
    <input type="radio"  name="passport" value="0" <?php if($fetch['passport_status'] == 0) {echo "checked";} ?> autocomplete="off"> Pending
  </label>
</div>




      </div>

      <!-- Marriage Certificate -->
      <div class="col-lg-3">
        <h4 class="text-center">Marriage Certificate</h4>
        <?php if ($fetch['marriage_certificate'] == "") { ?>
          <div class="d-flex justify-content-center">
            <img src="./images/pdf.png"  width="150px" height="150px" style="margin-top:50px;">
          </div>
        <?php } else { ?>
          <div class="d-flex justify-content-center">
            <embed src="./images/<?php echo $fetch['marriage_certificate']; ?>" type="application/pdf" width="250px" height="250px" />
            </div>
            <div class="d-flex justify-content-center mt-2">
            <a href="#" class="btn btn-primary bt-lg" data-toggle="modal" data-target="#pdfModal-marriage-certificate" data-pdf-url="./images/<?php echo $fetch['image']; ?>">View</a>
              <a href="#" class="btn btn-danger bt-lg" style="text-color:blue;margin-left:20px;">Delete</a>
            </div>
         
        <?php } ?>
        <!-- <div class="text-center mt-2">
          <input id="approve_marriage_certificate" class="form-check-input" type="radio" name="marriage_certificate" value="1" required style="border:2px solid black;" <?php if($fetch['marriage_certificate_status'] == 1) {echo "checked";} ?>>
          <label for="approve_marriage_certificate" class="form-check-label"><h5>Approve</h5></label>
          <input id="reject_marriage_certificate" class="form-check-input" type="radio" name="marriage_certificate" value="2" required style="border:2px solid black;" <?php if($fetch['marriage_certificate_status'] == 2) {echo "checked";} ?>>
          <label for="reject_marriage_certificate" class="form-check-label"><h5>Reject</h5></label>
          <input id="pending_marriage_certificate" class="form-check-input" type="radio" name="marriage_certificate" value="0" required style="border:2px solid black;" <?php if($fetch['marriage_certificate_status'] == 0) {echo "checked";} ?>>
          <label for="pending_marriage_certificate" class="form-check-label"><h5>Pending</h5></label>
        </div> -->


      
        <div class=" text-center mt-2" data-toggle="buttons">
  <label class="btn btn-primary">
    <input type="radio" name="marriage_certificate" value="1" id="option1" <?php if($fetch['marriage_certificate_status'] == 1) {echo "checked";} ?> autocomplete="off"> Approve
  </label>
  <label class="btn btn-danger">
    <input type="radio"   name="marriage_certificate" value="2"  <?php if($fetch['marriage_certificate_status'] == 2) {echo "checked";} ?> autocomplete="off"> Reject
  </label>
  <label class="btn btn-secondary">
    <input type="radio"  name="marriage_certificate" value="0" value="0" <?php if($fetch['marriage_certificate_status'] == 0) {echo "checked";} ?> autocomplete="off"> Pending
  </label>
</div>



      </div>

      <!-- College Transcript -->
      <div class="col-lg-3">
        <h4 class="text-center">College Transcript</h4>
        <?php if ($fetch['college_transcript'] == "") { ?>
          <div class="d-flex justify-content-center">
            <img src="./images/pdf.png" width="150px" height="150px" style="margin-top:50px;">
          </div>
        <?php } else { ?>
          <div class="d-flex justify-content-center">
            <embed src="./images/<?php echo $fetch['college_transcript']; ?>" type="application/pdf" width="250px" height="250px" />
            </div>
            <div class="d-flex justify-content-center mt-2">
            <a href="#" class="btn btn-primary bt-lg" data-toggle="modal" data-target="#pdfModal-college-transcript" data-pdf-url="./images/<?php echo $fetch['image']; ?>">View</a>
              <a href="#" class="btn btn-danger bt-lg" style="text-color:blue;margin-left:20px;">Delete</a>
            </div>
          
        <?php } ?>
        <!-- <div class="text-center mt-2">
          <input id="approve_college_transcript" class="form-check-input" type="radio" name="college_transcript" value="1" required style="border:2px solid black;" <?php if($fetch['college_transcript_status'] == 1) {echo "checked";} ?>>
          <label for="approve_college_transcript" class="form-check-label"><h5>Approve</h5></label>
          <input id="reject_college_transcript" class="form-check-input" type="radio" name="college_transcript" value="2" required style="border:2px solid black;" <?php if($fetch['college_transcript_status'] == 2) {echo "checked";} ?>>
          <label for="reject_college_transcript" class="form-check-label"><h5>Reject</h5></label>
          <input id="pending_college_transcript"class="form-check-input" type="radio" name="college_transcript" value="0" required style="border:2px solid black;" <?php if($fetch['college_transcript_status'] == 0) {echo "checked";} ?>>
          <label  for="pending_college_transcript" class="form-check-label"><h5>Pending</h5></label>
        </div> -->




        
        <div class=" text-center mt-2" data-toggle="buttons">
  <label class="btn btn-primary">
    <input type="radio" name="college_transcript" value="1" id="option1" <?php if($fetch['college_transcript_status'] == 1) {echo "checked";} ?> autocomplete="off"> Approve
  </label>
  <label class="btn btn-danger">
    <input type="radio"  name="college_transcript" value="2" <?php if($fetch['college_transcript_status'] == 2) {echo "checked";} ?> autocomplete="off"> Reject
  </label>
  <label class="btn btn-secondary">
    <input type="radio"  name="college_transcript" value="0" <?php if($fetch['college_transcript_status'] == 0) {echo "checked";} ?> autocomplete="off"> Pending
  </label>
</div>









      </div>


      <!-- College Diploma -->
      <div class="col-lg-3">
        <h4 class="text-center">College Diploma</h4>
        <?php if ($fetch['college_diploma'] == "") { ?>
          <div class="d-flex justify-content-center">
            <img src="./images/pdf.png" width="150px" height="150px" style="margin-top:50px;">
          </div>
        <?php } else { ?>
          <div class="d-flex justify-content-center">
            <embed src="./images/<?php echo $fetch['college_diploma']; ?>" type="application/pdf" width="250px" height="250px" />
          </div>
            <div class="d-flex justify-content-center mt-2">
            <a href="#" class="btn btn-primary bt-lg" data-toggle="modal" data-target="#pdfModal-college-diploma" data-pdf-url="./images/<?php echo $fetch['image']; ?>">View</a>
              <a href="#"class="btn btn-danger bt-lg" style="text-color:blue;margin-left:20px;">Delete</a>
            </div>
         
        <?php } ?>
        <!-- <div class="text-center mt-2">
          <input id="approve_college_diploma" class="form-check-input" type="radio" name="college_diploma" value="1" required style="border:2px solid black;" <?php if($fetch['college_diploma_status'] == 1) {echo "checked";} ?>>
          <label for="approve_college_diploma" class="form-check-label"><h5>Approve</h5></label>
          <input id="reject_college_diploma" class="form-check-input" type="radio" name="college_diploma" value="2" required style="border:2px solid black;" <?php if($fetch['college_diploma_status'] == 2) {echo "checked";} ?>>
          <label for="reject_college_diploma" class="form-check-label"><h5>Reject</h5></label>
          <input id="pending_college_diploma" class="form-check-input" type="radio" name="college_diploma" value="0" required style="border:2px solid black;" <?php if($fetch['college_diploma_status'] == 0) {echo "checked";} ?>>
          <label for="pending_college_diploma" class="form-check-label"><h5>Pending</h5></label>
        </div> -->

        <div class=" text-center mt-2" data-toggle="buttons">
  <label class="btn btn-primary">
    <input type="radio"  name="college_diploma" value="1" id="option1" <?php if($fetch['college_diploma_status'] == 1) {echo "checked";} ?> autocomplete="off"> Approve
  </label>
  <label class="btn btn-danger">
    <input type="radio"  name="college_diploma" value="2" <?php if($fetch['college_diploma_status'] == 2) {echo "checked";} ?> autocomplete="off"> Reject
  </label>
  <label class="btn btn-secondary">
    <input type="radio"  name="college_diploma" value="0" <?php if($fetch['college_diploma_status'] == 0) {echo "checked";} ?> autocomplete="off"> Pending
  </label>
</div>


      </div>
    </div>

    <div class="row mt-5">
      

      <!-- High School Transcript -->
      <div class="col-lg-3">
        <h4 class="text-center">High School Transcript</h4>
        <?php if ($fetch['highschool_transcript'] == "") { ?>
          <div class="d-flex justify-content-center">
            <img src="./images/pdf.png" width="150px" height="150px" style="margin-top:50px;">
          </div>
        <?php } else { ?>
          <div class="d-flex justify-content-center">
            <embed src="./images/<?php echo $fetch['highschool_transcript']; ?>" type="application/pdf" width="250px" height="250px" />
            </div>
            <div class="d-flex justify-content-center mt-2">
            <a href="#" class="btn btn-primary bt-lg" data-toggle="modal" data-target="#pdfModal-highschool-transcript" data-pdf-url="./images/<?php echo $fetch['image']; ?>">View</a>
              <a href="#" class="btn btn-danger bt-lg" style="text-color:blue;margin-left:20px;">Delete</a>
            </div>
          
        <?php } ?>
        <!-- <div class="text-center mt-2">
          <input id="approve_highschool_transcript" class="form-check-input" type="radio" name="highschool_transcript" value="1" required style="border:2px solid black;" <?php if($fetch['highschool_transcript_status'] == 1) {echo "checked";} ?>>
          <label for="approve_highschool_transcript" class="form-check-label"><h5>Approve</h5></label>
          <input id="reject_highschool_transcript" class="form-check-input" type="radio" name="highschool_transcript" value="2" required style="border:2px solid black;" <?php if($fetch['highschool_transcript_status'] == 2) {echo "checked";} ?>>
          <label for="reject_highschool_transcript" class="form-check-label"><h5>Reject</h5></label>
          <input id="pending_highschool_transcript" class="form-check-input" type="radio" name="highschool_transcript" value="0" required style="border:2px solid black;" <?php if($fetch['highschool_transcript_status'] == 0) {echo "checked";} ?>>
          <label for="pending_highschool_transcript" class="form-check-label"><h5>Pending</h5></label>
        </div> -->
       
        
        <div class=" text-center mt-2" data-toggle="buttons">
  <label class="btn btn-primary">
    <input type="radio" name="highschool_transcript" value="1" id="option1" <?php if($fetch['highschool_transcript_status'] == 1) {echo "checked";} ?> autocomplete="off"> Approve
  </label>
  <label class="btn btn-danger">
    <input type="radio" name="highschool_transcript" value="2" <?php if($fetch['highschool_transcript_status'] == 2) {echo "checked";} ?> autocomplete="off"> Reject
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="highschool_transcript" value="0" <?php if($fetch['highschool_transcript_status'] == 0) {echo "checked";} ?> autocomplete="off"> Pending
  </label>
</div>
          

      </div>

      <!-- High School Diploma -->
      <div class="col-lg-3">
        <h4 class="text-center">High School Diploma</h4>
        <?php if ($fetch['highschool_diploma'] == "") { ?>
          <div class="d-flex justify-content-center">
            <img src="./images/pdf.png" width="150px" height="150px" style="margin-top:50px;">
          </div>
        <?php } else { ?>
          <div class="d-flex justify-content-center">
            <embed src="./images/<?php echo $fetch['highschool_diploma']; ?>" type="application/pdf" width="250px" height="250px" />
            </div>
            <div class="d-flex justify-content-center mt-2">
            <a href="#" class="btn btn-primary bt-lg" data-toggle="modal" data-target="#pdfModal-highschool-diploma" data-pdf-url="./images/<?php echo $fetch['image']; ?>">View</a>
              <a href="#" class="btn btn-danger bt-lg" style="text-color:blue;margin-left:20px;">Delete</a>
            </div>
          
        <?php } ?>
        <!-- <div class="text-center mt-2">
          <input id="approve_highschool_diploma" class="form-check-input" type="radio" name="highschool_diploma" value="1" required style="border:2px solid black;" <?php if($fetch['highschool_diploma_status'] == 1) {echo "checked";} ?>>
          <label for="approve_highschool_diploma" class="form-check-label"><h5>Approve</h5></label>
          <input id="reject_highschool_diploma" class="form-check-input" type="radio" name="highschool_diploma" value="2" required style="border:2px solid black;" <?php if($fetch['highschool_diploma_status'] == 2) {echo "checked";} ?>>
          <label for="reject_highschool_diploma" class="form-check-label"><h5>Reject</h5></label>
          <input id="pending_highschool_diploma" class="form-check-in""put" type="radio" name="highschool_diploma" value="0" required style="border:2px solid black;" <?php if($fetch['highschool_diploma_status'] == 0) {echo "checked";} ?>>
          <label for="pending_highschool_diploma" class="form-check-label"><h5>Pending</h5></label>
        </div> -->

        <div class=" text-center mt-2" data-toggle="buttons">
  <label class="btn btn-primary">
    <input type="radio" name="highschool_diploma" value="1" id="option1" <?php if($fetch['highschool_diploma_status'] == 1) {echo "checked";} ?> autocomplete="off"> Approve
  </label>
  <label class="btn btn-danger">
    <input type="radio" name="highschool_diploma" value="2" <?php if($fetch['highschool_diploma_status'] == 2) {echo "checked";} ?> autocomplete="off"> Reject
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="highschool_diploma" value="0" <?php if($fetch['highschool_diploma_status'] == 0) {echo "checked";} ?> autocomplete="off"> Pending
  </label>
</div>
          
      </div>

      <!-- Medium of Instruction -->
      <div class="col-lg-3">
        <h4 class="text-center">Medium of Instruction</h4>
        <?php if ($fetch['medium_of_instruction'] == "") { ?>
          <div class="d-flex justify-content-center">
            <img src="./images/pdf.png" width="150px" height="150px" style="margin-top:50px;">
          </div>
        <?php } else { ?>
          <div class="d-flex justify-content-center">
            <embed src="./images/<?php echo $fetch['medium_of_instruction']; ?>" type="application/pdf" width="250px" height="250px" />
            </div>
            <div class="d-flex justify-content-center mt-2">
            <a href="#"  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#pdfModal-mediumof-instruction" data-pdf-url="./images/<?php echo $fetch['image']; ?>">View</a>
             <a href="#" class="btn btn-danger btn-lg" style="text-color:blue;margin-left:20px;">Delete</a>
            </div>
         
        <?php } ?>
        <!-- <div class="text-center mt-2">
          <input id="approve_medium_of_instruction" class="form-check-input" type="radio" name="medium_of_instruction" value="1" required style="border:2px solid black;" <?php if($fetch['medium_of_instruction_status'] == 1) {echo "checked";} ?>>
          <label for="approve_medium_of_instruction" class="form-check-label"><h5>Approve</h5></label>
          <input id="reject_medium_of_instruction" class="form-check-input" type="radio" name="medium_of_instruction" value="2" required style="border:2px solid black;" <?php if($fetch['medium_of_instruction_status'] == 2) {echo "checked";} ?>>
          <label for="reject_medium_of_instruction" class="form-check-label"><h5>Reject</h5></label>
          <input id="pending_medium_of_instruction" class="form-check-input" type="radio" name="medium_of_instruction" value="0" required style="border:2px solid black;" <?php if($fetch['medium_of_instruction_status'] == 0) {echo "checked";} ?>>
          <label for="pending_medium_of_instruction" class="form-check-label"><h5>Pending</h5></label>
        </div> -->

        <div class=" text-center mt-2" data-toggle="buttons">
  <label class="btn btn-primary">
    <input type="radio" name="medium_of_instruction" value="1" id="option1" <?php if($fetch['medium_of_instruction_status'] == 1) {echo "checked";} ?> autocomplete="off"> Approve
  </label>
  <label class="btn btn-danger">
    <input type="radio" name="medium_of_instruction" value="2" <?php if($fetch['medium_of_instruction_status'] == 2) {echo "checked";} ?> autocomplete="off"> Reject
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="medium_of_instruction" value="0" <?php if($fetch['medium_of_instruction_status'] == 0) {echo "checked";} ?> autocomplete="off"> Pending
  </label>
</div>


      </div>

      <!-- Resume -->
      <div class="col-lg-3">
        <h4 class="text-center">Resume</h4>
        <?php if ($fetch['resume'] == "") { ?>
          <div class="d-flex justify-content-center">
            <img src="./images/pdf.png" width="150px" height="150px" style="margin-top:50px;">
          </div>
        <?php } else { ?>
          <div class="d-flex justify-content-center">
            <embed src="./images/<?php echo $fetch['resume']; ?>" type="application/pdf" width="250px" height="250px" />
            </div>
            <div class="d-flex justify-content-center mt-2">
           <a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#pdfModal-resume" data-pdf-url="./images/<?php echo $fetch['image']; ?>" style="margin-left:20px;">View</a>
            <a href="#" class="btn btn-danger btn-lg" style="margin-left:20px;">Delete</a>
            </div>
          
        <?php } ?>
         
        <!-- <div class="text-center mt-2">
          <input id="approve_resume" class="form-check-input" type="radio" name="resume" value="1" required style="border:2px solid black;" <?php if($fetch['resume_status'] == 1) {echo "checked";} ?>>
          <label for="approve_resume" class="btn btn-primary">Approve</label>
          <input id="reject_resume" class="form-check-input" type="radio" name="resume" value="2" required style="border:2px solid black;" <?php if($fetch['resume_status'] == 2) {echo "checked";} ?>>
          <label for="reject_resume" class="form-check-label"><h5>Reject</h5></label>
          <input id="approve_resume" class="form-check-input" type="radio" name="resume" value="0" required style="border:2px solid black;" <?php if($fetch['resume_status'] == 0) {echo "checked";} ?>>
          <label for="approve_resume" class="form-check-label"><h5>Pending</h5></label>
        </div> -->

        <div class=" text-center mt-2" data-toggle="buttons">
  <label class="btn btn-primary">
    <input type="radio" name="resume" value="1" id="option1" <?php if($fetch['resume_status'] == 1) {echo "checked";} ?> autocomplete="off"> Approve
  </label>
  <label class="btn btn-danger">
    <input type="radio" name="resume" value="2" <?php if($fetch['resume_status'] == 2) {echo "checked";} ?> autocomplete="off"> Reject
  </label>
  <label class="btn btn-secondary">
    <input type="radio" name="resume" value="0" <?php if($fetch['resume_status'] == 0) {echo "checked";} ?> autocomplete="off"> Pending
  </label>
</div>
      </div>


    </div>

    <div class="row mt-5" >
      
      <!-- Empty Column to Balance Layout (If necessary) -->
      <div class="col-lg-4"></div>
    </div>

    <div class="row">
      <div class="col text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>

  <div class="row">
    <div class="col-sm-12">
      <div id="message_login"></div>
      <div id="loader"></div>
    </div>
  </div>
</div>


<div class="modal fade" id="pdfModal-passport" tabindex="-1" role="dialog" aria-labelledby="pdfModal-passportLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pdfModal-passportLabel">PDF Viewer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <embed id="pdfEmbed" src="./images/<?php echo $fetch['image']; ?>" type="application/pdf" width="100%" height="600px" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="pdfModal-marriage-certificate" tabindex="-1" role="dialog" aria-labelledby="pdfModal-marriage-certificateLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pdfModal-marriage-certificateLabel">PDF Viewer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <embed id="pdfEmbed" src="./images/<?php echo $fetch['marriage_certificate']; ?>" type="application/pdf" width="100%" height="600px" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pdfModal-college-transcript" tabindex="-1" role="dialog" aria-labelledby="pdfModal-college-transcriptLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pdfModal-college-transcriptLabel">PDF Viewer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <embed id="pdfEmbed" src="./images/<?php echo $fetch['college_transcript']; ?>" type="application/pdf" width="100%" height="600px" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pdfModal-college-diploma" tabindex="-1" role="dialog" aria-labelledby="pdfModal-college-diplomaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pdfModal-college-diplomaLabel">PDF Viewer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <embed id="pdfEmbed" src="./images/<?php echo $fetch['college_diploma']; ?>" type="application/pdf" width="100%" height="600px" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pdfModal-highschool-transcript" tabindex="-1" role="dialog" aria-labelledby="pdfModal-highschool-transcriptLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pdfModal-highschool-transcriptLabel">PDF Viewer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <embed id="pdfEmbed" src="./images/<?php echo $fetch['highschool_transcript']; ?>" type="application/pdf" width="100%" height="600px" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="pdfModal-highschool-diploma" tabindex="-1" role="dialog" aria-labelledby="pdfModal-highschool-diplomaLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pdfModal-highschool-diplomaLabel">PDF Viewer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <embed id="pdfEmbed" src="./images/<?php echo $fetch['highschool_diploma']; ?>" type="application/pdf" width="100%" height="600px" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="pdfModal-mediumof-instruction" tabindex="-1" role="dialog" aria-labelledby="pdfModal-mediumof-instructionLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pdfModal-mediumof-instructionLabel">PDF Viewer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <embed id="pdfEmbed" src="./images/<?php echo $fetch['medium_of_instruction']; ?>" type="application/pdf" width="100%" height="600px" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="pdfModal-resume" tabindex="-1" role="dialog" aria-labelledby="pdfModal-resumeLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pdfModal-resumeLabel">PDF Viewer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <embed id="pdfEmbed" src="./images/<?php echo $fetch['resume']; ?>" type="application/pdf" width="100%" height="600px" />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<script>
  $(document).ready(function() {
    $('#pdfModal-highschool-transcript-college-diploma-college-transcript-marriage-certificate-passport-passport').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Button that triggered the modal
      var pdfUrl = button.data('pdf-url'); // Extract info from data-* attributes
      var modal = $(this);
      modal.find('#pdfEmbed').attr('src', pdfUrl);
    });
  });
</script>





<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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



  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
 
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
    left: 45%;
    top: 40%;
    transform: translate(-50%, -50%);
    z-index: 9999;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>

  

  <script>
$(document).ready(function(){
    $("#insertForm").on("submit", function(event){
       
        event.preventDefault();
        $.ajax({
            url: "php/verify_documents_background_status.php",
            method: "POST",
            data: $(this).serialize(),
            success: function(data){
           
                $("#message_login").show().html(data);
            }
        });
    });
});
</script>
