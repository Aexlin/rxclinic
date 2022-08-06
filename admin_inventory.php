<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inventory - Rx Cinic</title><!-- Prevent the demo from appearing in search engines -->
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
                                    href="index.php" class="navbar-brand flex "><span>Inventory</span></a>
                                <div>
                                    <button type="button" class="btn btn-primary-dark" data-toggle="modal"
                                        data-target="#modal-add">ADD MEDICINE</button>
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
                                                        <div class="flex"><a href="">Judell Mejorada</a> requesting an
                                                            approval of her <a href="">appointment.</a><br><small
                                                                class="text-muted">1 minute
                                                                ago</small></div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3"><a href="#">
                                                                <div class="avatar avatar-xs"
                                                                    style="width: 32px; height: 32px;"><span
                                                                        class="avatar-title bg-purple rounded-circle"><i
                                                                            class="material-icons icon-16pt">person_add</i></span>
                                                                </div>
                                                            </a></div>
                                                        <div class="flex"><a href="#">Gorju C. Te</a>
                                                            requesting an approval of her <a
                                                                href="#">appointment.</a><br>
                                                            <small class="text-muted">1 hour ago</small>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-sm"
                                                                style="width: 32px; height: 32px;"><img
                                                                    src="assets/images/kkk.jpg" alt="Avatar"
                                                                    class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex"><a href="">Kier A. Esteban</a> requesting an
                                                            approval of his <a href="">appointment.</a><br><small
                                                                class="text-muted">2 hours
                                                                ago</small></div>
                                                    </div>
                                                    <div class="dropdown-item d-flex">
                                                        <div class="mr-3">
                                                            <div class="avatar avatar-sm"
                                                                style="width: 32px; height: 32px;"><img
                                                                    src="assets/images/jhong.jpg" alt="Avatar"
                                                                    class="avatar-img rounded-circle">
                                                            </div>
                                                        </div>
                                                        <div class="flex"><a href="">Christine Positar</a> requesting an
                                                            approval of her <a href="">appointment.</a><br><small
                                                                class="text-muted">3 hours
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
                                                        <div class="flex"><a href="">Racquel F. Ulibas</a> requesting an
                                                            approval of her <a href="">appointment.</a><br><small
                                                                class="text-muted">3 hours
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
                                                class="badge badge-warning text-primary-dark rounded-circle badge-notifications">5</span></a>
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
                                                class="flex d-flex flex-column"><strong style="font-size: 1.125rem;">Mr.
                                                    Admin Wan</strong><small
                                                    class="text-muted">@rxc_mradminwan</small></span>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item d-flex align-items-center py-2"
                                            href="admin_myprofile.php"><span class="material-icons mr-2">person</span>My
                                            Profile</a>
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
                        <div class="z-0">
                            <!-- <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                <li class="nav-item"><a href="#tab-queue" class="nav-link active" data-toggle="tab"
                                        role="tab" aria-controls="tab-queue" aria-selected="true"><span
                                            class="nav-link__count">Inventory</span>Total (43) </a></li>
                                <li class="nav-item"><a href="#tab-earlier" class="nav-link" data-toggle="tab"
                                        role="tab" aria-selected="false"><span
                                            class="nav-link__count">History</span>Total (519)
                                    </a></li>
                            </ul> -->
                            <div class="card">
                                <div class="tab-content">
                                    <div class="tab-pane active show fade" id="tab-queue">
                                        <div class="table-responsive border-bottom" data-toggle="lists"
                                            data-lists-values='["js-lists-values-employee-name", "js-lists-values-employee-title", "js-lists-values-employee-service", "js-lists-values-employee-section", "js-lists-values-employee-category"]'>
                                            <div class="search-form search-form--light m-3"><input type="text"
                                                    class="form-control search"
                                                    placeholder="Search Category, Medicine or Type"><button class="btn"
                                                    type="button" role="button"><i
                                                        class="material-icons">search</i></button>
                                            </div>

                                            <table class="table mb-0 thead-border-top-0">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 150px;">
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-employee-title">Medicine</a>
                                                        </th>
                                                        <th style="width: 150px;">
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-employee-category">Category</a>
                                                        </th>
                                                        <th colspan="1" style="width: 150px;">
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-employee-name">Class
                                                            </a>
                                                        </th>
                                                        <th colspan="1" style="width: 100px;">
                                                            <a href="javascript:void(0)" class="sort"
                                                                data-sort="js-lists-values-employee-name">Type
                                                            </a>
                                                        </th>
                                                        <th style="width:50px;">Dosage</th>
                                                        <th style="width: 80px;">Arrival</th>
                                                        <th style="width: 120px;">Expiration</th>
                                                        <th style="width: 80px;">Status</th>
                                                        <th style="width: 100px;">Stocks</th>
                                                        <th style="width: 220px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list" id="staff02">

                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <!-- <div class="avatar avatar-xs mr-2"><img
                                                                        src="assets/images/profilew.png" alt="Avatar"
                                                                        class="avatar-img rounded-circle">
                                                                </div> -->
                                                                <div class="media-body d-flex flex-column"><strong
                                                                        class="js-lists-values-employee-name">Ibuprofen</strong><span
                                                                        class="js-lists-values-employee-section">Advil®</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span
                                                                class="js-lists-values-employee-category">Cardiology</span>
                                                        </td>
                                                        <td><span
                                                                class="js-lists-values-employee-title">Analgesic</span>
                                                        </td>
                                                        <td><span class="js-lists-values-employee-title">Capsule</span>
                                                        </td>
                                                        <td>200 g</td>
                                                        <td><span
                                                                class="js-lists-values-employee-service">08/07/22</span>
                                                        </td>
                                                        <td>08/07/26</td>
                                                        <td><span
                                                                class="badge d-block badge-success"><strong>AVAILABLE</strong></span>
                                                        </td>
                                                        <td>220 pcs</td>
                                                        <td>
                                                            <div class="button-list">
                                                                <button type="button" class="btn btn-primary"><i
                                                                        class="material-icons" data-toggle="modal"
                                                                        data-target="#modal-info">info</i></button>
                                                                <button type="button" class="btn btn-warning"
                                                                    data-toggle="modal" data-target="#modal-edit"><i
                                                                        class="material-icons">edit</i></button>
                                                                <button type="button" class="btn btn-danger"
                                                                    data-toggle="modal" data-target="#modal-delete"><i
                                                                        class="material-icons">delete</i></button>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <!-- <div class="avatar avatar-xs mr-2"><img
                                                                        src="assets/images/profilew.png" alt="Avatar"
                                                                        class="avatar-img rounded-circle">
                                                                </div> -->
                                                                <div class="media-body d-flex flex-column"><strong
                                                                        class="js-lists-values-employee-name">Ibuprofen</strong><span
                                                                        class="js-lists-values-employee-section">Advil®</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="js-lists-values-employee-category">Family
                                                                Medicine</span>
                                                        </td>
                                                        <td><span
                                                                class="js-lists-values-employee-title">Analgesic</span>
                                                        </td>
                                                        <td><span class="js-lists-values-employee-title">Capsule</span>
                                                        </td>
                                                        <td>400 g</td>
                                                        <td><span
                                                                class="js-lists-values-employee-service">08/07/22</span>
                                                        </td>
                                                        <td>08/07/26</td>
                                                        <td><span
                                                                class="badge d-block badge-success"><strong>AVAILABLE</strong></span>
                                                        </td>
                                                        <td>220 pcs</td>
                                                        <td>
                                                            <div class="button-list">
                                                                <button type="button" class="btn btn-primary"><i
                                                                        class="material-icons" data-toggle="modal"
                                                                        data-target="#modal-info">info</i></button>
                                                                <button type="button" class="btn btn-warning"
                                                                    data-toggle="modal" data-target="#modal-edit"><i
                                                                        class="material-icons">edit</i></button>
                                                                <button type="button" class="btn btn-danger"
                                                                    data-toggle="modal" data-target="#modal-delete"><i
                                                                        class="material-icons">delete</i></button>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <!-- <div class="avatar avatar-xs mr-2"><img
                                                                        src="assets/images/profilew.png" alt="Avatar"
                                                                        class="avatar-img rounded-circle">
                                                                </div> -->
                                                                <div class="media-body d-flex flex-column"><strong
                                                                        class="js-lists-values-employee-name">Ibuprofen</strong><span
                                                                        class="js-lists-values-employee-section">Advil®</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span
                                                                class="js-lists-values-employee-category">Nephrology</span>
                                                        </td>
                                                        <td><span
                                                                class="js-lists-values-employee-title">Analgesic</span>
                                                        </td>
                                                        <td><span class="js-lists-values-employee-title">Capsule</span>
                                                        </td>
                                                        <td>600 g</td>
                                                        <td><span
                                                                class="js-lists-values-employee-service">08/07/22</span>
                                                        </td>
                                                        <td>08/07/26</td>
                                                        <td><span
                                                                class="badge d-block badge-success"><strong>AVAILABLE</strong></span>
                                                        </td>
                                                        <td>220 pcs</td>
                                                        <td>
                                                            <div class="button-list">
                                                                <button type="button" class="btn btn-primary"><i
                                                                        class="material-icons" data-toggle="modal"
                                                                        data-target="#modal-info">info</i></button>
                                                                <button type="button" class="btn btn-warning"
                                                                    data-toggle="modal" data-target="#modal-edit"><i
                                                                        class="material-icons">edit</i></button>
                                                                <button type="button" class="btn btn-danger"
                                                                    data-toggle="modal" data-target="#modal-delete"><i
                                                                        class="material-icons">delete</i></button>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <!-- <div class="avatar avatar-xs mr-2"><img
                                                                        src="assets/images/profilew.png" alt="Avatar"
                                                                        class="avatar-img rounded-circle">
                                                                </div> -->
                                                                <div class="media-body d-flex flex-column"><strong
                                                                        class="js-lists-values-employee-name">Penicillin</strong><span
                                                                        class="js-lists-values-employee-section">RiteMED</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span class="js-lists-values-employee-category">General
                                                                Dentistry</span>
                                                        </td>
                                                        <td><span
                                                                class="js-lists-values-employee-title">Antibiotic</span>
                                                        </td>
                                                        <td><span class="js-lists-values-employee-title">Capsule</span>
                                                        </td>
                                                        <td>250 g</td>
                                                        <td><span
                                                                class="js-lists-values-employee-service">08/07/22</span>
                                                        </td>
                                                        <td>08/07/26</td>
                                                        <td><span
                                                                class="badge d-block badge-success"><strong>AVAILABLE</strong></span>
                                                        </td>
                                                        <td>220 pcs</td>
                                                        <td>
                                                            <div class="button-list">
                                                                <button type="button" class="btn btn-primary"><i
                                                                        class="material-icons" data-toggle="modal"
                                                                        data-target="#modal-info">info</i></button>
                                                                <button type="button" class="btn btn-warning"
                                                                    data-toggle="modal" data-target="#modal-edit"><i
                                                                        class="material-icons">edit</i></button>
                                                                <button type="button" class="btn btn-danger"
                                                                    data-toggle="modal" data-target="#modal-delete"><i
                                                                        class="material-icons">delete</i></button>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <!-- <div class="avatar avatar-xs mr-2"><img
                                                                        src="assets/images/profilew.png" alt="Avatar"
                                                                        class="avatar-img rounded-circle">
                                                                </div> -->
                                                                <div class="media-body d-flex flex-column"><strong
                                                                        class="js-lists-values-employee-name">Metronidazole</strong><span
                                                                        class="js-lists-values-employee-section">RiteMED</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><span
                                                                class="js-lists-values-employee-category">Otolaryngology</span>
                                                        </td>
                                                        <td><span class="js-lists-values-employee-title">Antimicrobial
                                                                Drug</span>
                                                        </td>
                                                        <td><span class="js-lists-values-employee-title">Capsule</span>
                                                        </td>
                                                        <td>250 g</td>
                                                        <td><span
                                                                class="js-lists-values-employee-service">08/07/22</span>
                                                        </td>
                                                        <td>08/07/26</td>
                                                        <td><span
                                                                class="badge d-block badge-success"><strong>AVAILABLE</strong></span>
                                                        </td>
                                                        <td>220 pcs</td>
                                                        <td>
                                                            <div class="button-list">
                                                                <button type="button" class="btn btn-primary"><i
                                                                        class="material-icons" data-toggle="modal"
                                                                        data-target="#modal-info">info</i></button>
                                                                <button type="button" class="btn btn-warning"
                                                                    data-toggle="modal" data-target="#modal-edit"><i
                                                                        class="material-icons">edit</i></button>
                                                                <button type="button" class="btn btn-danger"
                                                                    data-toggle="modal" data-target="#modal-delete"><i
                                                                        class="material-icons">delete</i></button>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="card-body text-right">Showing 5 <span class="text-muted">of
                                                43</span><a href="#" class="text-muted-light"><i
                                                    class="material-icons ml-1">arrow_forward</i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- // END header-layout__content -->
            </div><!-- // END header-layout -->
        </div><!-- // END drawer-layout__content -->

        <!--MODALS-->
        <!-- Success Alert Modal -->
        <div id="modal-success" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content bg-success">
                    <div class="modal-body text-center p-4"><i
                            class="material-icons icon-40pt text-white mb-2">check</i>
                        <h4 class="text-white">Edit Success!</h4>
                        <p class="text-white mt-3">You updated the details.</p><button type="button"
                            class="btn btn-light my-2" data-dismiss="modal">Continue</button>
                    </div><!-- // END .modal-body -->
                </div><!-- // END .modal-content -->
            </div><!-- // END .modal-dialog -->
        </div><!-- // END .modal -->

        <!-- Info Modal -->
        <div id="modal-info" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="px-3">
                            <div class="d-flex justify-content-center mt-2 mb-4 navbar-light"><a href="index.php"
                                    class="navbar-brand" style="min-width: 0"><img class="navbar-brand-icon"
                                        src="assets/img/rxcliniclogowithoutline.png" width="50"
                                        alt="Stack"><span>Medicine Details</span></a></div>
                            <!-- <div><span><strong>PRESCRIPTION DETAILS</strong></span></div> -->
                            <div class="page-separator"></div>
                            <div class="modal-body">
                                <p>Category: <strong>Cardiology</strong></p>
                                <p>Generic: <strong>IBUPROFEN</strong></p>
                                <p>Brand: <strong>Advil®</strong></p>
                                <div class="row">
                                    <div class="col">
                                        <p>Dosage: <strong>200 grams</strong></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>Class: <strong>Analgesic</strong></p>
                                    </div>
                                    <div class="col">
                                        <p>Type: <strong>Capsule</strong></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>Arrival: <strong>08/07/22</strong></p>
                                    </div>
                                    <div class="col">
                                        <p>Expiration: <strong>08/07/26</strong></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>Status: <strong>Available</strong></p>
                                    </div>
                                </div>
                                <div class="alert alert-soft-success d-flex" role="alert"><i
                                        class="material-icons mr-3">check_circle</i>
                                    <div class="text-body">In stock: <strong>220 pcs</strong></div>
                                </div>
                            </div><!-- // END .modal-body -->
                        </div>
                    </div><!-- // END .modal-body -->
                    <div class="modal-footer"><a href="index_patient.php"><button type="button" class="btn btn-light"
                                data-dismiss="modal">Close</button></a></div>
                    <!-- // END .modal-footer -->
                </div><!-- // END .modal-content -->
            </div><!-- // END .modal-dialog -->
        </div><!-- // END .modal -->

        <!-- Danger Alert Modal -->
        <div id="modal-danger" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content bg-danger">
                    <div class="modal-body text-center p-4"><i
                            class="material-icons icon-40pt text-white mb-2">clear</i>
                        <h4 class="text-white">Declined!</h4>
                        <p class="text-white mt-3">You declined an appointment.</p><button type="button"
                            class="btn btn-light my-2" data-dismiss="modal">Continue</button>
                    </div><!-- // END .modal-body -->
                </div><!-- // END .modal-content -->
            </div><!-- // END .modal-dialog -->
        </div><!-- // END .modal -->

        <!-- Danger Delete Modal -->
        <div id="modal-delete" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content bg-danger">
                    <div class="modal-body text-center p-4"><i
                            class="material-icons icon-40pt text-white mb-2">delete</i>
                        <h4 class="text-white">Deleted!</h4>
                        <p class="text-white mt-3">You deleted a medicine from the inventory.</p><button type="button"
                            class="btn btn-light my-2" data-dismiss="modal">Continue</button>
                    </div><!-- // END .modal-body -->
                </div><!-- // END .modal-content -->
            </div><!-- // END .modal-dialog -->
        </div><!-- // END .modal -->

        <!-- Edit Modal -->
        <div id="modal-edit" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="px-3">
                            <div class="d-flex justify-content-center mt-2 mb-4 navbar-light"><a href="index.php"
                                    class="navbar-brand" style="min-width: 0"><img class="navbar-brand-icon"
                                        src="assets/img/rxcliniclogowithoutline.png" width="50" alt="Stack"><span>Edit
                                        Medicine Details</span></a></div>
                            <form action="#">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group"><label class="text-label" for="fname">Generic
                                                Name:</label><input id="fname" type="text" required=""
                                                class="form-control" placeholder="" value="Ibuprofen"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group"><label class="text-label" for="fname">Generic
                                                Name:</label><input id="fname" type="text" required=""
                                                class="form-control" placeholder="" value="Ibuprofen"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group"><label class="text-label" for="lname">Brand
                                                Name:</label><input id="lname" type="text" required=""
                                                class="form-control" placeholder="" value="Advil®"></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="text-label" for="fname">Dosage:
                                            </label><input id="fname" type="text" required="" class="form-control"
                                                placeholder="" value="200 g"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group"><label class="text-label" for="select01">Class:</label>
                                            <select id="select01" data-toggle="select" class="form-control">
                                                <option selected="">Analgesic</option>
                                                <option>Ambecide</option>
                                                <option>Antiviral Drug</option>
                                                <option>Antibacterial</option>
                                                <option>Antimicrobial Drug</option>
                                                <option>Antifungal Drug</option>
                                                <option>Anti-inflammatory</option>
                                                <option>Macrolide</option>
                                                <option>Sedative</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"><label class="text-label" for="select01">Type:</label>
                                            <select id="select01" data-toggle="select" class="form-control">
                                                <option selected="">Capsule</option>
                                                <option>Tablet</option>
                                                <option>Caplet</option>
                                                <option>Antiseptic</option>
                                                <option>Oral Rinse</option>
                                                <option>Ointment</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group"><label class="text-label" for="lname">Stocks:
                                            </label><input id="lname" type="number" required="" class="form-control"
                                                placeholder="" value="220"></div>
                                    </div>
                                </div>
                                <div class="modal-footer"><button type="button" class="btn btn-light"
                                        data-dismiss="modal">Cancel</button><button type="button"
                                        class="btn btn-primary" data-toggle="modal" data-dismiss="">Update</button>
                                </div>
                        </div>
                    </div><!-- // END .modal-body -->
                </div><!-- // END .modal-content -->
            </div><!-- // END .modal-dialog -->
        </div><!-- // END .modal -->

        <!-- Add Modal -->
        <div id="modal-add" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="px-3">
                            <div class="d-flex justify-content-center mt-2 mb-4 navbar-light"><a href="index.php"
                                    class="navbar-brand" style="min-width: 0"><img class="navbar-brand-icon"
                                        src="assets/img/rxcliniclogowithoutline.png" width="50" alt="Stack"><span>Add
                                        Medicine</span></a></div>
                            <form action="#">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group"><label class="text-label" for="fname">Generic
                                                Name:</label><input id="fname" type="text" required=""
                                                class="form-control" placeholder="Generic Name" value=""></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group"><label class="text-label" for="lname">Brand
                                                Name:</label><input id="lname" type="text" required=""
                                                class="form-control" placeholder="Brand Name" value=""></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group"><label class="text-label" for="fname">Dosage:
                                            </label><input id="fname" type="text" required="" class="form-control"
                                                placeholder="Dosage" value=""></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group"><label class="text-label" for="select01">Class:</label>
                                            <select id="select01" data-toggle="select" class="form-control">
                                                <option selected="">Analgesic</option>
                                                <option>Ambecide</option>
                                                <option>Antiviral Drug</option>
                                                <option>Antibacterial</option>
                                                <option>Antimicrobial Drug</option>
                                                <option>Antifungal Drug</option>
                                                <option>Anti-inflammatory</option>
                                                <option>Macrolide</option>
                                                <option>Sedative</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group"><label class="text-label" for="select01">Type:</label>
                                            <select id="select01" data-toggle="select" class="form-control">
                                                <option selected="">Capsule</option>
                                                <option>Tablet</option>
                                                <option>Caplet</option>
                                                <option>Antiseptic</option>
                                                <option>Oral Rinse</option>
                                                <option>Ointment</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group"><label class="text-label" for="lname">Stocks:
                                            </label><input id="lname" type="number" required="" class="form-control"
                                                placeholder="Stocks" value=""></div>
                                    </div>
                                </div>
                                <div class="modal-footer"><button type="button" class="btn btn-light"
                                        data-dismiss="modal">Cancel</button><button type="button"
                                        class="btn btn-primary" data-toggle="modal"
                                        data-target="#modal-add">Add</button></div>
                        </div>
                    </div><!-- // END .modal-body -->
                </div><!-- // END .modal-content -->
            </div><!-- // END .modal-dialog -->
        </div><!-- // END .modal -->

        <div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-dark sidebar-left simplebar" data-simplebar>
                    <div class="d-flex align-items-center sidebar-p-a border-bottom sidebar-account flex-shrink-0"><a
                            href="admin_index.php" class="flex d-flex align-items-center text-underline-0 text-body"><span
                                class="mr-3"><img src="assets/img/rxcliniclogowithoutline.png" width="43" height="43"
                                    alt="avatar"></span><span class="flex d-flex flex-column"><strong
                                    style="font-size: 25px;">Rx Clinic</strong><small class="text-muted text-uppercase"
                                    style="color: rgba(255,255,255,.54)"></small></span></a>
                        <div class="dropdown ml-auto"><a href="#" data-toggle="dropdown" data-caret="false"
                                class="text-muted"><i class="material-icons">keyboard_arrow_down</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-item-text dropdown-item-text--lh">
                                    <div><strong>Mr. Admin Wan</strong></div>
                                    <div>Clinic Admin</div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="admin_clinicdetails.php">View Clinic Details</a>
                                <!-- <a class="dropdown-item" href="edit-account.php">Edit Clinic Detials</a> -->
                                <!-- <a class="dropdown-item" href="edit-account.php">Change Password</a> -->
                                <!-- <div class="dropdown-divider"></div><a class="dropdown-item"
                                    href="login.php">Logout</a> -->
                            </div>
                        </div>
                    </div>
                    <div
                        class="sidebar-stats row no-gutters align-items-center text-center border-bottom flex-shrink-0">
                        <div class="sidebar-stats__col col">
                            <div class="sidebar-stats__title">Total Patients</div>
                            <div class="sidebar-stats__value">542</div>
                        </div>
                        <div class="sidebar-stats__col col border-left">
                            <div class="sidebar-stats__title">Total Consultations</div>
                            <div class="sidebar-stats__value">719</div>
                        </div>
                    </div>
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
                                <li class="sidebar-menu-item"><a class="sidebar-menu-button" href="admin_index.php"><i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">donut_small</i><span
                                            class="sidebar-menu-text">Dashboard</span></a></li>
                                <li class="sidebar-menu-item"><a class="sidebar-menu-button" href="admin_consultations.php"><i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">date_range</i><span
                                            class="sidebar-menu-text">Consultations</span><span
                                            class="badge badge-warning rounded-circle badge-notifications ml-auto"
                                            style="padding: .1875rem .375rem;">24</span></a></li>
                                <li class="sidebar-menu-item"><a class="sidebar-menu-button" href="admin_services.php"><i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i><span
                                            class="sidebar-menu-text">Services</span></a></li>
                                <li class="sidebar-menu-item"><a class="sidebar-menu-button" href="admin_doctors.php"><i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person</i><span
                                            class="sidebar-menu-text">Doctors</span></a></li>
                                <li class="sidebar-menu-item"><a class="sidebar-menu-button" href="admin_patients.php"><i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person</i><span
                                            class="sidebar-menu-text">Patients</span></a></li>
                                <li class="sidebar-menu-item"><a class="sidebar-menu-button" href="admin_reports.php"><i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">report</i><span
                                            class="sidebar-menu-text">Reports</span></a></li>
                                <li class="sidebar-menu-item"><a class="sidebar-menu-button" href="admin_prescriptions.php"><i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">description</i><span
                                            class="sidebar-menu-text">Prescription</span></a></li>
                                <!-- <li class="sidebar-menu-item active"><a class="sidebar-menu-button" href="#"><i
                                            class="sidebar-menu-icon sidebar-menu-icon--left material-icons">add</i><span
                                            class="sidebar-menu-text">Inventory</span></a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="mt-auto sidebar-p-a sidebar-b-t d-flex flex-column flex-shrink-0">
                            <a class="sidebar-link mb-2" href="admin_verification.php">Doctor Verification<i
                                class="sidebar-menu-icon ml-2 material-icons icon-16pt">check_circle</i></a>
                            <a class="sidebar-link" href="loginadminpage.php"><strong>LOG OUT</strong><i
                                class="sidebar-menu-icon ml-2 material-icons icon-20pt">exit_to_app</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- // END drawer-layout -->
    <div class="mdk-drawer js-mdk-drawer" id="events-drawer" data-align="end">
        <div class="mdk-drawer__content">
            <div class="sidebar sidebar-light sidebar-left simplebar" data-simplebar>
                <small class="text-dark-gray px-3 py-1"><strong>Sunday, 28 Aug</strong></small>
                <div class="list-group list-group-flush">
                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column"><small>10:00 AM</small><small
                                    class="text-dark-gray">1 hr</small></div>
                            <div class="col">
                                <div class="d-flex flex-column flex"><a href="#" class="text-body"><strong
                                            class="text-15pt">Dental Check-up</strong></a><small
                                        class="text-muted d-flex align-items-center"><i
                                            class="material-icons icon-16pt mr-1">person</i>Judell L. Mejorada</small>
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

                <small class="text-dark-gray px-3 py-1"><strong>Sunday, 28 Aug</strong></small>
                <div class="list-group list-group-flush">
                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column"><small>11:00 AM</small><small
                                    class="text-dark-gray">1 hr</small></div>
                            <div class="col">
                                <div class="d-flex flex-column flex"><a href="#" class="text-body"><strong
                                            class="text-15pt">Dental Check-up</strong></a><small
                                        class="text-muted d-flex align-items-center"><i
                                            class="material-icons icon-16pt mr-1">person</i>Racquel F. Ulibas</small>
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

                <small class="text-dark-gray px-3 py-1"><strong>Sunday, 28 Aug</strong></small>
                <div class="list-group list-group-flush">
                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column"><small>12:00 PM</small><small
                                    class="text-dark-gray">1 hr</small></div>
                            <div class="col">
                                <div class="d-flex flex-column flex"><a href="#" class="text-body"><strong
                                            class="text-15pt">Tooth Extraction</strong></a><small
                                        class="text-muted d-flex align-items-center"><i
                                            class="material-icons icon-16pt mr-1">person</i>Christine C. Positar</small>
                                </div>
                                <div class="avatar-group mt-2">
                                    <div class="avatar avatar-xs"><img src="assets/images/jhong.jpg" alt="Avatar"
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

                <small class="text-dark-gray px-3 py-1"><strong>Sunday, 28 Aug</strong></small>
                <div class="list-group list-group-flush">
                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column"><small>1:00 PM</small><small
                                    class="text-dark-gray">1 hr</small></div>
                            <div class="col">
                                <div class="d-flex flex-column flex"><a href="#" class="text-body"><strong
                                            class="text-15pt">Teeth Cleaning</strong></a><small
                                        class="text-muted d-flex align-items-center"><i
                                            class="material-icons icon-16pt mr-1">person</i>Kier A. Esteban</small>
                                </div>
                                <div class="avatar-group mt-2">
                                    <div class="avatar avatar-xs"><img src="assets/images/kkk.jpg" alt="Avatar"
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

                <small class="text-dark-gray px-3 py-1"><strong>Sunday, 28 Aug</strong></small>
                <div class="list-group list-group-flush">
                    <div class="list-group-item bg-light">
                        <div class="row">
                            <div class="col-auto d-flex flex-column"><small>2:00 PM</small><small
                                    class="text-dark-gray">1 hr</small></div>
                            <div class="col">
                                <div class="d-flex flex-column flex"><a href="#" class="text-body"><strong
                                            class="text-15pt">Dental Check-up</strong></a><small
                                        class="text-muted d-flex align-items-center"><i
                                            class="material-icons icon-16pt mr-1">person</i>Angga N. Daqku</small></div>
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
</body>

</html>