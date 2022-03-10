<?php include 'connect.php';?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
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
    $('#patients').DataTable({
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
    animation-duration: 1s;
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
        <div class="row d-flex">
        <?php include 'sidebar.php';?>
    <div class="col-8 py-5 container-fluid animate-bottom" style="font-family: Inter;">
    <div>
        <h3>VIEW PATIENTS</h3><hr>
            <table id="patients" class="table table-striped align-middle">
            <thead style="color: #134557 !important;">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                <th scope="col">Contact No.</th>
                <th scope="col">Delete</th>
                <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "EXEC sproc_pat_details"; //You don't need a ; like you do in SQL
                $result = sqlsrv_query($conn, $query);
                $count = 0;
                // echo "<table>"; // start a table tag in the HTML
                while($row = sqlsrv_fetch_array($result)){   //Creates a loop to loop through results
                    $pat_id = intval(htmlspecialchars($row['patient_id']));
                    $count++;
                    echo "<tr><td>" . htmlspecialchars($count) . "</td>
                        <td>" . htmlspecialchars($row['patient_name']) . "</td>"
                        . "<td>" . htmlspecialchars($row['age']) . "</td>"
                        . "<td>" . htmlspecialchars($row['p_address']) . "</td>
                        <td>" . htmlspecialchars($row['email']) . "</td>"
                        ."<td>" . htmlspecialchars($row['contact_no']) . "</td>"
                        ."<td class='d-flexbox justify-content-center text-center'>"."<a href='?delFunc=".$pat_id."' class='fs-5 bi-trash-fill me-4 link-danger'>"."</a>"."</td>
                        <td class='d-flexbox justify-content-center text-center'>"."<a href='#' class='fs-5 bi-pen-fill me-4'>"."</a></td></tr>";
                        if(isset($_GET['delFunc'])){ 
                            delfunc($_GET['delFunc']);
                            }
                //$row['index'] the index here is a field name
                }

            //* Delete Patient Function (sets patient account status = 0)
                function delfunc($pat_id){
                    include 'connect.php';
                    $query = "exec sproc_deletepat @patient_id = ?"; //You don't need a ; like you do in SQL
                    $params = array(
                        array($pat_id, SQLSRV_PARAM_IN)
                    );
                    $result = sqlsrv_prepare($conn, $query, $params);
                    $exec = sqlsrv_execute($result);
                    if(!$exec)
                        {
                            echo '<script>
                            alert("Query Failed to delete Patient");
                            </script>';
                        }
                        else
                        {
                            echo '<script>
                            window.alert("Query Success, Deleted Patient");
                            window.location.replace("patient_list.php");
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
</div>
</body>

    <script>
        var myVar;

        function myFunction() {
        myVar = setTimeout(showPage, 1200);
        }

        function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("myDiv").style.display = "block";
        }

    </script>
</html>
