<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home - Rx Clinic</title><!-- Prevent the demo from appearing in search engines -->
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
                                    href="#" class="navbar-brand flex "><span>Rx Clinic</span></a>
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
                            <div class="col-md">
                                <div class="card card-stats">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="card-header__title flex">Approved Consultations</div><a
                                            href="patient_consultations.php">
                                            <h4 class="text-amount"><strong>2</strong></h4>
                                        </a>
                                        <!-- <span class="text-muted">&nbsp;/ $3,200</span> -->
                                    </div>
                                    <div class="position-relative d-flex align-items-start z-0">
                                        <div class="progress flex" style="height: 4px;">
                                            <div class="progress-bar bg-blue" role="progressbar" style="width: 100%;"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!-- <i class="material-icons text-success bg-white position-absolute"
                                            style="right: -4px; top: -10px; z-index: 2;">check_box</i> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card card-stats">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="card-header__title flex">Pending</div><a href="patient_consultations.php">
                                            <h4 class="text-amount"><strong>1</strong></h4>
                                        </a>
                                        <!-- <span class="text-muted">&nbsp;/ $3,200</span> -->
                                    </div>
                                    <div class="position-relative d-flex align-items-start z-0">
                                        <div class="progress flex" style="height: 4px;">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;"
                                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <!-- <i class="material-icons text-success bg-white position-absolute"
                                            style="right: -4px; top: -10px; z-index: 2;">check_box</i> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card card-stats">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="card-header__title flex">Denied</div><a href="patient_consultations.php">
                                            <h4 class="text-amount"><strong>2</strong></h4>
                                        </a>
                                        <!-- <span class="text-muted">&nbsp;/ $8,210</span> -->
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;"
                                            aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md">
                                <div class="card card-stats">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="card-header__title flex">Done</div><a href="patient_consultations.php">
                                            <h4 class="text-amount"><strong>5</strong></h4>
                                        </a>
                                    </div>
                                    <div class="progress" style="height: 4px;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%;"
                                            aria-valuenow="33" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        <!-- <div class="row card-group-row">
                            <div class="col-lg-4 col-md-5 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="card-header card-header-large bg-light d-flex align-items-center">
                                        <div class="flex">
                                            <h4 class="card-header__title">Patient Profile</h4>
                                            <div class="card-subtitle text-muted">Your Data of Consultation progress
                                            </div>
                                        </div>
                                        <div class="dropdown ml-auto"><a href="#" data-toggle="dropdown"
                                                data-caret="false" class="text-dark-gray"><i
                                                    class="material-icons">more_horiz</i></a>
                                            <div class="dropdown-menu dropdown-menu-right"><a href="javascript:void(0)"
                                                    class="dropdown-item">Go to Report</a><a href="javascript:void(0)"
                                                    class="dropdown-item">Previous Data</a>
                                                <a href="javascript:void(0)" class="dropdown-item">Next Data</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex align-items-center justify-content-center"
                                        style="height: 250px;">
                                        <div class="chart z-0"
                                            style="width: calc(250px - 1.25rem * 2); height: calc(250px - 1.25rem * 2);">
                                            <div style="width: calc(250px - 1.25rem * 2); height: calc(250px - 1.25rem * 2); position: absolute; top: 0; left: 0;"
                                                class="d-flex flex-column align-items-center justify-content-center">
                                                <div class="text-muted mb-1">This Month</div>
                                                <div class="card-header__title">Aug 2022</div>
                                            </div>
                                            <canvas class="position-relative" id="billingChart"
                                                style="z-index: 2;"></canvas>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0 text-center">
                                        <div class="text-amount mb-1"><strong>75%</strong></bold>
                                        </div>
                                        <div class="text-muted">Current Total Progress</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-7 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="card-header card-header-large bg-light d-flex align-items-center">
                                        <div class="flex">
                                            <h4 class="card-header__title">Consultation Expenses</h4>
                                            <div class="card-subtitle text-muted">Your Monthly Consultation Expenses
                                                2022
                                            </div>
                                        </div>
                                        <div class="dropdown ml-auto"><a href="#" data-toggle="dropdown"
                                                data-caret="false" class="text-dark-gray"><i
                                                    class="material-icons">more_horiz</i></a>
                                            <div class="dropdown-menu dropdown-menu-right"><a href="javascript:void(0)"
                                                    class="dropdown-item">Go to Report</a><a href="javascript:void(0)"
                                                    class="dropdown-item">Previous Data</a>
                                                <a href="javascript:void(0)" class="dropdown-item">Next Data</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex align-items-center">
                                        <div class="chart w-100" style="height: calc(328px - 1.25rem * 2);"><canvas
                                                id="transactionsChart"></canvas></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row card-group-row">
                            <div class="col-lg-7 card-group-row__col">
                                <div class="card card-group-row__card">
                                    <div class="card-header card-header-large bg-white d-flex align-items-center">
                                        <div class="flex bg-white">
                                            <h4 class="card-header__title">Upcoming Consultations</h4>
                                        </div>
                                        <div class="dropdown ml-auto"><a href="#" data-toggle="dropdown"
                                                data-caret="false" class="text-dark-gray"><i
                                                    class="material-icons">more_horiz</i></a>
                                            <div class="dropdown-menu dropdown-menu-right"><a href="javascript:void(0)"
                                                    class="dropdown-item">Previous</a><a href="javascript:void(0)"
                                                    class="dropdown-item">Next</a></div>
                                        </div>
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item list-group-item-action d-flex align-items-center">
                                            <div class="avatar avatar-sm mr-3"><img src="assets/images/doctor.png"
                                                    alt="Avatar" class="avatar-img rounded-circle"></div>
                                            <div class="d-flex flex-column flex"><strong class="text-15pt">Dr. Number
                                                    Too</strong><small class="text-muted">28 August 2022, 10:00
                                                    AM</small></div><a href="patient_consultations.php">
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </a>
                                        </div>
                                        <div class="list-group-item list-group-item-action d-flex align-items-center">
                                            <div class="avatar avatar-sm mr-3"><img src="assets/images/doctor2.png"
                                                    alt="Avatar" class="avatar-img rounded-circle"></div>
                                            <div class="d-flex flex-column flex"><strong class="text-15pt">Dr. Number
                                                    Wan</strong><small class="text-muted">28 August 2022, 11:00
                                                    AM</small></div><a href="patient_consultations.php">
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </a>
                                        </div>
                                        <div class="list-group-item list-group-item-action d-flex align-items-center">
                                            <div class="avatar avatar-sm mr-3"><img src="assets/images/doctrii.jpg"
                                                    alt="Avatar" class="avatar-img rounded-circle"></div>
                                            <div class="d-flex flex-column flex"><strong class="text-15pt">Dr. Number Seeks
                                                    </strong><small class="text-muted">28 August 2022, 12:00
                                                    PM</small></div><a href="patient_consultations.php">
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </a>
                                        </div>
                                        <!-- <div class="list-group-item list-group-item-action d-flex align-items-center">
                                            <div class="avatar avatar-sm mr-3"><img src="assets/images/doc4.jfif"
                                                    alt="Avatar" class="avatar-img rounded-circle"></div>
                                            <div class="d-flex flex-column flex"><strong class="text-15pt">Dr. Number Ate
                                                    </strong><small class="text-muted">28 August 2022, 01:00
                                                    PM</small></div><a href="index_patient.php">
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </a>
                                        </div>
                                        <div class="list-group-item list-group-item-action d-flex align-items-center">
                                            <div class="avatar avatar-sm mr-3"><img src="assets/images/doc5.png"
                                                    alt="Avatar" class="avatar-img rounded-circle"></div>
                                            <div class="d-flex flex-column flex"><strong class="text-15pt">Dr. Number Seyven
                                                    </strong><small class="text-muted">28 August 2022, 02:00
                                                    PM</small></div><a href="index_patient.php">
                                                <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                            </a>
                                        </div> -->
                                        <div class="card-footer text-center border-0"><a class="text-muted"
                                                href="patient_consultations.php" href="">View All (3)</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg">
                                <div class="card">
                                    <div class="card-header card-header-large bg-white d-flex align-items-center">
                                        <h4 class="card-header__title flex m-0">Recent Activity</h4>
                                        <div data-toggle="flatpickr" data-flatpickr-wrap="true"
                                            data-flatpickr-static="true" data-flatpickr-mode="range"
                                            data-flatpickr-alt-format="d/m/Y" data-flatpickr-date-format="d/m/Y"><a
                                                href="javascript:void(0)" class="link-date" data-toggle>01/08/2022 <span
                                                    class="text-muted mx-1">to</span>31/08/2022</a><input class="d-none"
                                                type="hidden" value="13/03/2018 to 20/03/2018" data-input></div>
                                    </div>
                                    <!-- <div class="card-header card-header-tabs-basic nav" role="tablist"><a
                                            href="#activity_all" class="active" data-toggle="tab" role="tab"
                                            aria-controls="activity_all" aria-selected="true">All</a><a
                                            href="#activity_purchases" data-toggle="tab" role="tab"
                                            aria-controls="activity_purchases" aria-selected="false">Consultations</a><a
                                            href="#activity_emails" data-toggle="tab" role="tab"
                                            aria-controls="activity_emails" aria-selected="false">Prescriptions</a>
                                    </div> -->
                                    <div class="list-group tab-content list-group-flush">

                                        <div class="tab-pane active show fade" id="activity_all">
                                            <div
                                                class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3"><span
                                                        class="avatar-title rounded-circle  bg-success"><i
                                                            class="material-icons">date_range</i></span></div>
                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <!-- <div class="avatar avatar-xxs mr-1"><img
                                                                src="assets/images/profilew.png" alt="Avatar"
                                                                class="avatar-img rounded-circle"></div> -->
                                                        <strong class="text-15pt mr-1">Booked a consultation.</strong>
                                                    </div>
                                                    <div class="avatar avatar-xxs mr-1"><img
                                                            src="assets/images/doctor.png" alt="Avatar"
                                                            class="avatar-img rounded-circle"></div><small>Dr. Number
                                                        Too</small>
                                                </div><small class="text-muted">3 days ago</small>
                                                <a href="patient_consultations.php">
                                                    <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                </a>
                                            </div>
                                            <div
                                                class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3"><span
                                                        class="avatar-title rounded-circle  bg-success"><i
                                                            class="material-icons">date_range</i></span></div>
                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <!-- <div class="avatar avatar-xxs mr-1"><img
                                                            src="assets/images/profilew.png" alt="Avatar"
                                                            class="avatar-img rounded-circle"></div> -->
                                                        <strong class="text-15pt mr-1">Booked a consultation.</strong>
                                                    </div>
                                                    <div class="avatar avatar-xxs mr-1"><img
                                                            src="assets/images/doc5.png" alt="Avatar"
                                                            class="avatar-img rounded-circle"></div><small>Dr. Number
                                                        Seyven</small>
                                                </div><small class="text-muted">3 days ago</small>
                                                <a href="patient_consultations.php">
                                                    <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                </a>
                                            </div>
                                            <div
                                                class="list-group-item list-group-item-action d-flex align-items-center ">
                                                <div class="avatar avatar-xs mr-3"><span
                                                        class="avatar-title rounded-circle  bg-success"><i
                                                            class="material-icons">date_range</i></span></div>
                                                <div class="flex">
                                                    <div class="d-flex align-items-middle">
                                                        <!-- <div class="avatar avatar-xxs mr-1"><img
                                                                src="assets/images/profilew.png" alt="Avatar"
                                                                class="avatar-img rounded-circle"></div> -->
                                                        <strong class="text-15pt mr-1">Booked a consultation.</strong>
                                                    </div>
                                                    <div class="avatar avatar-xxs mr-1"><img
                                                            src="assets/images/doctrii.jpg" alt="Avatar"
                                                            class="avatar-img rounded-circle"></div><small>Dr. Number
                                                        Seeks</small>
                                                </div><small class="text-muted">3 days ago</small>
                                                <a href="patient_consultations.php">
                                                    <i class="material-icons icon-muted ml-3">arrow_forward</i>
                                                </a>
                                            </div>
                                            <div class="card-footer text-center border-0"><a class="text-muted"
                                                    href="patient_consultations.php" href="">View All (3)</a></div>
                                        </div>
                                        <div class="tab-pane" id="activity_quotes"></div>
                                    </div>
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
                            <div class="d-flex justify-content-center mt-0 mb-0 navbar-light"><a href="#"
                                    class="navbar-brand" style="min-width: 0"><img class="navbar-brand-icon"
                                        src="assets/img/rxlogowithname.png" width="250" alt="Stack"></a></div><br><br>
                            <div><span><strong>PRESCRIPTION DETAILS</strong></span></div>
                            <div class="page-separator"></div>
                            <div class="modal-body">
                                <p><strong>Prescription Code: </strong>2022-0001</p>
                                <p><strong>Personnel: </strong>Dr. Number Seyven</p>
                                <p><strong>Date: </strong>Aug 08, 2022</p>
                                <p><strong>Medicine: </strong>ibuprofen (Motrin® or Advil®)</p>
                                <p><strong>Remarks: </strong>Take 400–600 mg every 6–8 hours. Ibuprofen will help with
                                    pain relief and as an anti-inflammatory.</p>
                                <!-- <br>
                                            <div class="alert alert-soft-success d-flex" role="alert"><i class="material-icons mr-3">check_circle</i>
                                                <div class="text-body">Your appointment is now <strong>APPROVED</strong>. Please proceed to the clinic according to the schedule.</div>
                                            </div> -->
                            </div><!-- // END .modal-body -->
                        </div>
                    </div><!-- // END .modal-body -->
                    <div class="modal-footer"><a href="index_patient.php"><button type="button" class="btn btn-light"
                                data-dismiss="modal">Close</button></a><a href="#"><button type="button"
                                class="btn btn-dark" data-dismiss="modal">Print</button></a></div>
                    <!-- // END .modal-footer -->
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
                            href="#" class="flex d-flex align-items-center text-underline-0 text-body"><span
                                class="mr-3"><img src="assets/img/rxcliniclogowithoutline.png" width="43" height="43"
                                    alt="avatar"></span><span class="flex d-flex flex-column"><strong
                                    style="font-size: 25px;">Rx Clinic</strong><small class="text-muted text-uppercase"
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
                                <li class="sidebar-menu-item active"><a class="sidebar-menu-button" href="#"><i
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
                        <!-- <a
                            class="sidebar-link mb-2" href="edit-account.php">Change Password</a><a
                            class="sidebar-link mb-2" href="edit-account.php">Settings</a> -->
                            <a class="sidebar-link" href="landingpagelogin.php"><strong>LOG OUT</strong><i
                                class="sidebar-menu-icon ml-2 material-icons icon-16pt">exit_to_app</i></a>
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
    <script src="assets/js/app-settings.js"></script><!-- Flatpickr -->
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/js/flatpickr.js"></script><!-- Global Settings -->
    <script src="assets/js/settings.js"></script><!-- Chart.js -->
    <script src="assets/vendor/Chart.min.js"></script><!-- App Charts JS -->
    <script src="assets/js/chartjs-rounded-bar.js"></script>
    <script src="assets/js/charts.js"></script><!-- Vector Maps -->
    <script src="assets/vendor/jqvmap/jquery.vmap.min.js"></script>
    <script src="assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="assets/js/vector-maps.js"></script><!-- Chart Samples -->
    <script src="assets/js/page.dashboard.js"></script>
</body>

</body>

</html>