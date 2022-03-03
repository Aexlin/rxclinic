<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap-grid.css.map">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <style>
        .sidebar{
            background-color: #e1e5f2;
            border-radius: 0px 30px 0px 0px;
            box-shadow: 3.07135px 9.21406px 18.4281px rgba(82, 87, 92, 0.37);
        }
        .navtext{
            color: #52575C;
            font-size: 17px;
            font-weight: 800;
        }
    </style>

    </head>
    <body>
        <div class="col-md-3 col-2 px-sm-3 px-0 pt-3 fixed sidebar">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-3 text-white min-vh-100">
                <a href="http://localhost:3000/rxclinic/dashboard.php" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <img src="./images/rxclinic logo with name.png" alt="RxClinic Logo" class="img-fluid w-75">
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="http://localhost:3000/rxclinic/dashboard.php" class="nav-link align-middle px-0 pt-3">
                            <i class="fs-5 bi-pie-chart-fill me-4"></i><span class="ms-1 d-none d-sm-inline navtext">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle pt-3">
                            <i class="fs-5 bi-person-lines-fill me-4"></i> <span class="ms-1 d-none d-sm-inline-flex navtext">Appointments</span> 
                            <i class="bi-caret-down-fill fs-7 ms-4 ps-4"></i>
                        </a>
                        <ul class="collapse nav flex-column ms-4" id="submenu1" data-bs-parent="#menu">
                            
                            <li class="w-100">
                                <a href="appointment_new.php" class="nav-link px-0"> <span class="d-none d-sm-inline">New</span> Appointment </a>
                            </li>
                            <li>
                                <a href="appointment_pend.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Pending</span> Appointments </a>
                            </li>
                            <li>
                                <a href="appointment_hist.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Appointment</span> History </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle pt-3">
                            <i class="fs-5 bi-person-workspace me-4"></i> <span class="ms-1 me-2 d-none d-sm-inline navtext">Doctors</span>
                            <i class="bi-caret-down-fill fs-7 ms-5 ps-5"></i>
                        </a>
                        <ul class="collapse nav flex-column ms-4" id="submenu2" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">New</span> Doctor</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Doctors</span> List</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Add Doctor</span> Sched</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle pt-3">
                            <i class="fs-5 bi-people-fill me-4"></i> <span class="ms-1 me-1 d-none d-sm-inline navtext">Patients</span> 
                            <i class="bi-caret-down-fill fs-7 ms-5 ps-5"></i>
                        </a>
                            <ul class="collapse nav flex-column ms-4" id="submenu3" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">New</span> Patient</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Patient</span> List</a>
                            </li>
                            </ul>
                    </li>
                    <li>
                        <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle pt-3">
                            <i class="fs-5 bi-heart-pulse-fill me-4"></i> <span class="ms-1 me-2 d-none d-sm-inline navtext">Departments</span> 
                            <i class="bi-caret-down-fill fs-7 ms-4 ps-4"></i>
                        </a>
                            <ul class="collapse nav flex-column ms-4" id="submenu4" data-bs-parent="#menu">
                            <li class="w-100">
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">New</span> Department</a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Department</span> List</a>
                            </li>
                            </ul>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle pt-3" id="about">
                            <i class="fs-5 bi-question-circle-fill me-4"></i> <span class="ms-1 d-none d-sm-inline navtext">About</span> </a>
                    </li>
                    <li>
                        <a href="index.php" class="nav-link px-0 align-middle mt-5 pt-5">
                            <i class="fs-5 bi-arrow-left-circle-fill me-4"></i> <span class="ms-1 d-none d-sm-inline navtext">Log Out</span> </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
    </body>
</html>

<!-- 
    //? View Change Process
    //?     - User clicks on a specific navbar keyword
    //?     - Page
 -->