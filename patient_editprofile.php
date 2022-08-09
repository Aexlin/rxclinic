<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Edit Profile - Rx Clinic</title><!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex"><!-- Simplebar -->
    <link type="text/css" href="assets/vendor/simplebar.min.css" rel="stylesheet"><!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet"><!-- Material Design Icons -->
    <link type="text/css" href="assets/css/vendor-material-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-material-icons.rtl.css" rel="stylesheet">
    <!-- Font Awesome FREE Icons -->
    <link type="text/css" href="assets/css/vendor-fontawesome-free.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-fontawesome-free.rtl.css" rel="stylesheet"><!-- ion Range Slider -->
    <link type="text/css" href="assets/css/vendor-ion-rangeslider.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-ion-rangeslider.rtl.css" rel="stylesheet"><!-- Flatpickr -->
    <link type="text/css" href="assets/css/vendor-flatpickr.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr.rtl.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr-airbnb.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr-airbnb.rtl.css" rel="stylesheet"><!-- Vector Maps -->
    <link type="text/css" href="assets/vendor/jqvmap/jqvmap.min.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-ion-rangeslider.rtl.css" rel="stylesheet"><!-- Flatpickr -->
    <link type="text/css" href="assets/css/vendor-flatpickr.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr.rtl.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr-airbnb.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-flatpickr-airbnb.rtl.css" rel="stylesheet"><!-- DateRangePicker -->
    <link type="text/css" href="assets/vendor/daterangepicker.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-dropzone.css" rel="stylesheet">
    <link type="text/css" href="assets/css/vendor-dropzone.rtl.css" rel="stylesheet">
</head>

<body class="layout-default">
    <div class="preloader"></div>
    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px" data-fullbleed>
        <div class="mdk-drawer-layout__content">
            <!-- Header Layout -->
            <div class="mdk-header-layout js-mdk-header-layout" data-has-scrolling-region>
                <!-- Header -->
                <div id="header" class="mdk-header js-mdk-header m-0" data-fixed data-effects="waterfall"
                    data-retarget-mouse-scroll="false">
                    <div class="mdk-header__content">
                        <div class="navbar navbar-expand-sm navbar-main navbar-light bg-white  pr-0" id="navbar"
                            data-primary>
                            <div class="container-fluid p-0">
                                <!-- Navbar toggler --><button
                                    class="navbar-toggler navbar-toggler-custom d-lg-none d-flex mr-navbar"
                                    type="button" data-toggle="sidebar"><span
                                        class="material-icons">short_text</span></button><!-- Navbar Brand --><a
                                    href="#" class="navbar-brand flex "><span>Edit Profile</span></a>
                                    <div>
                                        <a href="patient_request.php"><button type="button" class="btn btn-primary-dark"
                                                data-toggle="modal" data-target="#modal-login">BOOK NEW CONSULTATION</button></a>
                                    </div>
                                    <ul class="nav navbar-nav d-none d-md-flex">
                                    <li class="nav-item dropdown"><a href="#notifications_menu"
                                            class="nav-link dropdown-toggle" data-toggle="dropdown"
                                            data-caret="false"><i
                                                class="material-icons nav-icon navbar-notifications-indicator">notifications</i></a>
                                        <div id="notifications_menu"
                                            class="dropdown-menu dropdown-menu-right navbar-notifications-menu">
                                            <div class="dropdown-item d-flex align-items-center py-2"><span
                                                    class="flex navbar-notifications-menu__title m-0">Notifications</span><a
                                                    href="javascript:void(0)" class="text-muted"><small>Clear
                                                        all</small></a></div>
                                            <div class="navbar-notifications-menu__content" data-simplebar>
                                                <div class="py-2">
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-sm"
                                                                style="width: 32px; height: 32px;"><img
                                                                    src="assets/images/profilew.png" alt="Avatar"
                                                                    class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex"><a href="patient_consultations.php">Dr. Dentist</a> approved your <a
                                                                href="">consultation appointment.</a><br><small class="text-muted">1
                                                                hr
                                                                ago</small></div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-sm"
                                                                style="width: 32px; height: 32px;"><img
                                                                    src="assets/images/profilew.png" alt="Avatar"
                                                                    class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex"><a href="patient_consultations.php">Dr. Dentist</a> requested to reschedule your <a
                                                                href="">consultation appointment.</a><br><small class="text-muted">1
                                                                hr
                                                                ago</small></div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-sm"
                                                                style="width: 32px; height: 32px;"><img
                                                                    src="assets/images/profilew.png" alt="Avatar"
                                                                    class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex"><a href="patient_consultations.php">Dr. Dentist</a> cancelled your <a
                                                                href="">consultation appointment.</a><br><small class="text-muted">1
                                                                day
                                                                ago</small></div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-sm"
                                                                style="width: 32px; height: 32px;"><img
                                                                    src="assets/images/profilew.png" alt="Avatar"
                                                                    class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex"><a href="patient_consultations.php">Dr. Dentist</a> declined your <a
                                                                href="">consultation appointment.</a><br><small class="text-muted">3
                                                                days
                                                                ago</small></div>
                                                    </div>
                                                </div>
                                            </div><a href="javascript:void(0);"
                                                class="dropdown-item text-center navbar-notifications-menu__footer">View
                                                All</a>
                                        </div>
                                    </li>
                                    <li class="nav-item"><a href="#events-drawer" data-toggle="sidebar"
                                            class="nav-link d-flex align-items-center"><i
                                                class="material-icons nav-icon">event_note</i><span
                                                class="badge badge-warning text-primary-dark rounded-circle badge-notifications">1</span></a>
                                    </li>
                                </ul>
                                <div class="dropdown"><a href="#" data-toggle="dropdown" data-caret="false"
                                        class="dropdown-toggle navbar-toggler navbar-toggler-company border-left d-flex align-items-center ml-navbar"><span
                                            class="mr-3"><img src="assets/images/profilew.png" width="43" height="43"
                                                alt="avatar"></span></span></a>
                                    <div id="company_menu"
                                        class="dropdown-menu dropdown-menu-right navbar-company-menu">
                                        <div
                                            class="dropdown-item d-flex align-items-center py-2 navbar-company-info py-3">
                                            <span class="mr-3"><img src="assets/images/profilew.png" width="43"
                                                    height="43" alt="avatar"></span><span
                                                class="flex d-flex flex-column"><strong style="font-size: 1.125rem;">Ms. User Wan</strong><small
                                                    class="text-muted">@msuserwan</small></span>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item d-flex align-items-center py-2"
                                            href="patient_myprofile.php"><span class="material-icons mr-2">person</span>My
                                            Profile</a>
                                         <a class="dropdown-item d-flex align-items-center py-2"
                                            href="patient_changepassword.php"><span class="material-icons mr-2">lock</span>Change Password</a>
                                        <!-- <a class="dropdown-item d-flex align-items-center py-2"
                                        href="changepasswordadmin.php"><span
                                            class="material-icons mr-2">lock</span>Change Password</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- // END Header -->
                <!-- Header Layout Content -->
                <div
                    class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page">
                    <div class="container-fluid page__container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card card-body">
                                    <form action="#" novalidate>
                                        <div class="row">
                                            <div class="col">
                                                <div
                                                    class="d-flex flex-column justify-content-center align-items-center mt-2 mb-2 navbar-light">
                                                    <a href="#" class="navbar-brand text-center mb-2 mr-0"
                                                        style="min-width: 0"><img class="navbar-brand-icon"
                                                            src="assets/images/profilew.png" width="220"
                                                            alt="Flat"><span></span></a>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group text-center"><a href="patient_myprofile.php"><button type="button" class="btn btn-primary-dark" data-toggle="modal"
                                                    data-target="#modal-success">Save Changes</button></a></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="card card-body">
                                    <div class="page-separator">
                                        <div class="page-separator__text">MY INFORMATION</div>
                                    </div>
                                    <form action="#" novalidate>
                                    <div class="row">
                                            <div class="col-lg-7">
                                                <div class="form-group"><label class="text-label" for="fname">Email Address:</label><input
                                                        id="fname" type="text" class="form-control" placeholder="name@gmail.com" value="anggandaku@gmail.com"></div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group"><label class="text-label" for="fname">Password:</label><input
                                                        id="fname" type="text" class="form-control" placeholder="name@gmail.com" value="mypassword"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group"><label class="text-label" for="fname">First Name:</label><input
                                                        id="fname" type="text" class="form-control" placeholder="First name" value="Angga"></div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group"><label class="text-label" for="lname">Middle Name:</label><input
                                                        id="lname" type="text" class="form-control" placeholder="Middle name" value="N."></div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group"><label class="text-label" for="lname">Last Name:</label><input
                                                        id="lname" type="text" class="form-control" placeholder="Last name" value="Daqku"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group"><label class="text-label"
                                                    for="flatpickrSample01">Birthday:</label><input id="flatpickrSample01"
                                                    type="text" class="form-control" placeholder="Date of Birth"
                                                    data-toggle="" value="Aug 09, 2001"></div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group"><label class="text-label" for="fname">Contact No:</label><input
                                                        id="fname" type="text" class="form-control" placeholder="Contact No." value="0998-765-4321"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group"><label class="text-label" for="fname">Address:</label><input
                                                        id="fname" type="text" class="form-control" placeholder="Address" value="3435 Batumbakal Street, New York, Cubao"></div>
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="text-label">Avatar:</label>
                                            <div class="dz-clickable media align-items-center" data-toggle="dropzone"
                                                data-dropzone-url="http://" data-dropzone-clickable=".dz-clickable"
                                                data-dropzone-files='["assets/images/account-add-photo.svg"]'>
                                                <div class="dz-preview dz-file-preview dz-clickable mr-3">
                                                    <div class="avatar" style="width: 80px; height: 80px;"><img
                                                            src="assets/images/account-add-photo.svg"
                                                            class="avatar-img rounded" alt="..." data-dz-thumbnail></div>
                                                </div>
                                                <div class="media-body"><button
                                                        class="btn btn-sm btn-primary dz-clickable">Choose photo</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- // END header-layout__content -->
            </div><!-- // END header-layout -->
        </div><!-- // END drawer-layout__content -->

        <!--MODALS-->
        <!-- Info Modal -->
        <div id="modal-info" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="px-3">
                            <div class="d-flex justify-content-center mt-2 mb-4 navbar-light"><a href="index.php"
                                    class="navbar-brand" style="min-width: 0"><img class="navbar-brand-icon"
                                        src="assets/img/rxcliniclogowithoutline.png" width="50" alt="Stack"><span>Appointment
                                        Details</span></a></div>
                            <div class="page-separator"></div>
                            <div class="modal-body">
                                <p><strong>Appointment Code: </strong>2022-0001</p>
                                <p><strong>Personnel: </strong>Dr. Den T. Ista</p>
                                <p><strong>Service: </strong>Teeth Extraction</p>
                                <p><strong>Schedule: </strong>9:00 AM Aug 08, 2022</p>
                                <p><strong>Status: </strong>APPROVED</p>
                                <br>
                                <p>Your appointment is now <strong>APPROVED</strong>. Please proceed to the clinic
                                    according to the schedule.</p>
                            </div><!-- // END .modal-body -->
                        </div>
                    </div><!-- // END .modal-body -->
                    <div class="modal-footer"><button type="button" class="btn btn-light"
                            data-dismiss="modal">Close</button></div><!-- // END .modal-footer -->
                </div><!-- // END .modal-content -->
            </div><!-- // END .modal-dialog -->
        </div><!-- // END .modal -->

        <!-- Cancel Alert Modal -->
        <div id="modal-cancel" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content bg-danger">
                    <div class="modal-body text-center p-4"><i
                            class="material-icons icon-40pt text-white mb-2">clear</i>
                        <h4 class="text-white">Cancelled!</h4>
                        <p class="text-white mt-3">You cancelled an appointment.</p><button type="button"
                            class="btn btn-light my-2" data-dismiss="modal">Continue</button>
                    </div><!-- // END .modal-body -->
                </div><!-- // END .modal-content -->
            </div><!-- // END .modal-dialog -->
        </div><!-- // END .modal -->

        <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-dark sidebar-left simplebar" data-simplebar>
                    <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account flex-shrink-0"><a
                            href="index_patient.php" class="flex d-flex align-items-center text-underline-0 text-body"><span
                                class="mr-3"><img src="assets/img/rxcliniclogowithoutline.png" width="43" height="43"
                                    alt="avatar"></span><span class="flex d-flex flex-column"><strong
                                    style="font-size: 25px;">Rx Clinic</strong><small
                                    class="text-muted text-uppercase"
                                    style="color: rgba(255,255,255,.54)"></small></span></a>

                    </div>
                    <!-- <div
                        class="sidebar-stats row no-gutters align-items-center text-center border-bottom flex-shrink-0">
                        <div class="sidebar-stats__col col">
                            <div class="sidebar-stats__title">Total Patients</div>
                            <div class="sidebar-stats__value">542</div>
                        </div>
                        <div class="sidebar-stats__col col border-left">
                            <div class="sidebar-stats__title">Total Appointments</div>
                            <div class="sidebar-stats__value">719</div>
                        </div>
                    </div> -->
                    <!-- <div class="py-4 text-center flex-shrink-0"><a style="min-width: 157px;" href="/signup.php"
                            class="btn btn-primary">Create <i class="material-icons ml-1">add</i></a></div> -->
                    <ul class="nav nav-tabs sidebar-tabs flex-shrink-0" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="sm-menu-tab" href="#sm-menu"
                                data-toggle="tab" role="tab" aria-controls="sm-menu" aria-selected="true">Menu</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="#sm-account" data-toggle="tab">Manage</a></li> -->
                        <!-- <li class="nav-item"><a class="nav-link" href="#sm-settings" data-toggle="tab">Settings</a></li> -->
                    </ul>
                    <div class="tab-content">
                        <div id="sm-menu" class="tab-pane show active" role="tabpanel" aria-labelledby="sm-menu-tab">
                            <ul class="sidebar-menu flex">
                                <li class="sidebar-menu-item"><a class="sidebar-menu-button" href="patient_index.php"><i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">donut_small</i><span
                                            class="sidebar-menu-text">Dashboard</span></a></li>
                                <li class="sidebar-menu-item"><a class="sidebar-menu-button" href="patient_consultations.php"><i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">date_range</i><span
                                            class="sidebar-menu-text">My Consultations</span><span
                                            class="badge badge-warning rounded-circle badge-notifications ml-auto"
                                            style="padding: .1875rem .375rem;">2</span></a></li>
                                <li class="sidebar-menu-item"><a class="sidebar-menu-button" href="patient_mydoctors.php"><i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person</i><span
                                            class="sidebar-menu-text">My Doctors</span></a></li>
                                <li class="sidebar-menu-item"><a class="sidebar-menu-button" href="patient_prescriptions.php"><i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i><span
                                            class="sidebar-menu-text">Reports</span></a></li>
                                <li class="sidebar-menu-item"><a class="sidebar-menu-button" href="patient_payments.php"><i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">payment</i><span
                                            class="sidebar-menu-text">Payment</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-auto sidebar-p-a sidebar-b-t d-flex flex-column flex-shrink-0">
                            <a class="sidebar-link mb-2" href="patient_patientreg.php">Register<i class="sidebar-menu-icon ml-2 material-icons icon-16pt">person</i></a>
                        <a class="sidebar-link" href="landingpagelogin.php"><strong>LOG OUT</strong><i class="sidebar-menu-icon ml-2 material-icons icon-16pt">exit_to_app</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- // END drawer-layout -->
    <div class="mdk-drawer js-mdk-drawer" id="events-drawer" data-align="end">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-light sidebar-left simplebar" data-simplebar>
                <small class="text-dark-gray px-3 py-1"><strong>Sunday, 07 Aug</strong></small>
                <div class="list-group list-group-flush">
                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column"><small>9:00 AM</small><small
                                    class="text-dark-gray">1 hr</small></div>
                            <div class="col">
                                <div class="d-flex flex-column flex"><a href="#" class="text-body"><strong
                                            class="text-15pt">Dental Check-up</strong></a><small
                                        class="text-muted d-flex align-items-center"><i
                                            class="material-icons icon-16pt mr-1">person</i>Dr. Dentist</small>
                                </div>
                                <div class="avatar-group mt-2">
                                    <div class="avatar avatar-xs"><img src="assets/images/profilew.png" alt="Avatar"
                                            class="avatar-img rounded-circle"></div>
                                    <!-- <div class="avatar avatar-xs"><img
                                            src="assets/images/256_jeremy-banks-798787-unsplash.jpg" alt="Avatar"
                                            class="avatar-img rounded-circle"></div>
                                    <div class="avatar avatar-xs"><img
                                            src="assets/images/256_daniel-gaffey-1060698-unsplash.jpg" alt="Avatar"
                                            class="avatar-img rounded-circle"></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings></app-settings>
    </div><!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script><!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script><!-- Simplebar -->
    <script src="assets/vendor/simplebar.min.js"></script><!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script><!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script><!-- Range Slider -->
    <script src="assets/vendor/ion.rangeSlider.min.js"></script>
    <script src="assets/js/ion-rangeslider.js"></script><!-- App -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar-mini.js"></script>
    <script src="assets/js/app.js"></script><!-- App Settings(safe to remove) -->
    <script src="assets/js/app-settings.js"></script><!-- List.js -->
    <script src="assets/vendor/list.min.js"></script>
    <script src="assets/js/list.js"></script><!-- Dragula -->
    <script src="assets/vendor/dragula/dragula.min.js"></script>
    <script src="assets/js/dragula.js"></script>
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/js/flatpickr.js"></script><!-- DateRangePicker -->
    <script src="assets/vendor/moment.min.js"></script>
    <script src="assets/vendor/daterangepicker.js"></script>
    <script src="assets/js/daterangepicker.js"></script>
    <script src="assets/vendor/dropzone.min.js"></script>
    <script src="assets/js/dropzone.js"></script>
</body>

</body>

</html>