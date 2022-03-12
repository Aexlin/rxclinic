<!DOCTYPE html>
<html>
<head>
    <title>Pending Appointments</title>
    <link rel="shortcut icon" href="./images/rxclinic_logo_1.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap-grid.css.map">

    <link rel="stylesheet" href="jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script>
    $(document).ready(function() {
    $('#appointments').DataTable({
        "dom": '<"wrapper col"f><"wrapper col"l>tip',
        pageLength: 5,
        lengthMenu: [5, 10, 15,20]
    });
});
    </script>

    <style>
        /* Center the loader */
    #loader {
    position: absolute; left: 50%; top: 50%; z-index: 1;
    width: 50px; height: 50px; margin: -30px 0px 0px -25px; border: 10px solid #f3f3f3; border-radius: 50%;
    border-top: 10px solid #3498db; -webkit-animation: spin 1.32s linear infinite; animation: spin 1.2s linear infinite;
    }

    @-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
    }

    @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
    }

    /* Add animation to "page content" */
    .animate-bottom {
    position: relative;
    -webkit-animation-name: animatebottom;
    -webkit-animation-duration: 1s;
    animation-name: animatebottom;
    animation-duration: 1s
    }

    @-webkit-keyframes animatebottom {
    from { bottom:-100px; opacity:0 } 
    to { bottom:0px; opacity:1 }
    }

    @keyframes animatebottom { 
    from{ bottom:-100px; opacity:0 } 
    to{ bottom:0; opacity:1 }
    }

    #myDiv {
    display: none;
    /* text-align: center; */
    }
    h3{
        color: #134557; font-size: 16px; letter-spacing: 3px; font-weight: 800 !important;
    }
    </style>
</head>
<body style="font-family: Montserrat;" onload="myFunction()">
<div id="loader"></div>
    <div class="container-fluid" id="myDiv">
        <div class="row flex-nowrap">
        <?php include 'sidebar.php';?>
    <div class="col-8 py-5 container animate-bottom" style="font-family: Inter;">
        <h3>VIEW APPOINTMENTS</h3><hr>
        <ul class="nav nav-pills nav-fill mb-2">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="appointment_view.php">Pending</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="appointment_app.php">Approved</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="appointment_dec.php">Declined</a>
            </li>
        </ul>
        <table id="appointments" class="table table-striped align-middle">
            <thead style="color: #134557 !important;">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
                <th scope="col">Time</th>
                <th scope="col">Date</th>
                <th scope="col">Doctor</th>
                <th scope="col">Status</th>
                <th scope="col">Approve</th>
                <th scope="col">Decline</th>
                <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connect.php';
                $query = "EXEC sproc_appointments_pend";
                $result = sqlsrv_query($conn, $query);
                $count = 0;
                // echo "<table>"; // start a table tag in the HTML
                while($row = sqlsrv_fetch_array($result)){   //Creates a loop to loop through results
                    $count++;
                    $status_ok = 2;
                    $status_no = 3;
                    $app_id = $row['app_id'];
                    $app_time = $row['app_time']->format('H:i');
                    $app_date = $row['app_date']->format('Y-m-d');
                    // $value->format('Y-m-d H:i');
                    // $app_time = date('H:i:s', strtotime(str_replace('-', '/', $row['app_time'])));
                    // $app_date = date('Y-m-d', strtotime(str_replace('-', '/', $row['app_date'])));
                    // $app_time = date($row['app_time']);
                    // $app_date = date($row['app_date']);
                    echo "<tr><td>" . htmlspecialchars($count) . "</td>
                        <td>" . htmlspecialchars($row['patient_name']) . "</td>"
                        . "<td>" . htmlspecialchars($row['reason']) . "</td>"
                        . "<td>" .$app_time. "</td>"
                        . "<td>" .$app_date. "</td>"
                        . "<td>" . htmlspecialchars($row['doc_name']) . "</td>
                        <td>" . htmlspecialchars($row['status_name']) . "</td>"
                        ."<td class='d-flexbox justify-content-center text-center'>"."<a href='?changeStatus=".$status_ok,$app_id."' class='fs-5 bi-check-circle-fill link-info'>"."</a></td>"
                        ."<td class='d-flexbox justify-content-center text-center'>"."<a href='?changeStatus=".$status_no,$app_id."' class='fs-5 bi-x-circle-fill link-danger'>"."</a>"."</td>"
                        ."<td class='d-flexbox justify-content-center text-center'>"."<a href='appointment_edit.php?editInfo=".$app_id."' class='fs-5 bi-pen-fill'>"."</a>"."</td></tr>";
                            if(isset($_GET['changeStatus'])){ 
                                $arr = str_split($_GET['changeStatus']);
                                $status_no = $arr[0];
                                $temparr = array();
                                for ($i = 1; $i < sizeof($arr);$i++){
                                    $val = $arr[$i];
                                    array_push($temparr,$val);
                                }
                                $status_num = $status_no;
                                $app_id = (int)implode("",$temparr);
                                changestatus($status_num, $app_id);
                                }
                            if (isset($_GET['editInfo'])){
                                $app_id =($_GET['editInfo']);
                            }
                }

            //* Update Patient Appointment (sets patient appointment status to either 2 = approved
                //* and 3 = declined)
                function changestatus($status_num,$app_id){
                    include 'connect.php';
                    $query = "exec sproc_update_appstatus @status_id = ?, @app_id = ?"; //You don't need a ; like you do in SQL
                    $params = array(
                        array ($status_num, SQLSRV_PARAM_IN),
                        array ($app_id, SQLSRV_PARAM_IN)
                    );
                    $result = sqlsrv_prepare($conn, $query, $params);
                    $exec = sqlsrv_execute($result);
                    if(!$exec){
                            echo '<script>
                            alert("Query Failed to update Appointment Status");
                            window.location.replace("appointment_view.php");
                            </script>';
                        }
                    if ($status_num == 2){
                            echo '<script>
                            window.alert("Success, Appointment Status Updated!");
                            window.location.replace("appointment_app.php");
                            </script>';
                        } 
                    else if ($status_num == 3){
                            echo '<script>
                            window.alert("Success, Appointment Status Updated!");
                            window.location.replace("appointment_dec.php");
                            </script>';
                        } 
                die();
                }
                ?>
            </tbody>
            </table>
    </div>
    </div>
</div>
</body>
    <script>
        var myVar;

        function myFunction() {
        myVar = setTimeout(showPage, 700);
        }

        function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
        }
    </script>
</html>