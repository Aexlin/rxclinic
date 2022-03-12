<!DOCTYPE html>
<html>
<head>
    <title>Add Appointment</title>
    <link rel="shortcut icon" href="./images/rxclinic_logo_1.png">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./bootstrap5/css/bootstrap-grid.css.map">
    
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
    .inputcard{
        font-family: Montserrat;
        box-shadow: 3px 3px 10px rgba(82, 87, 92, 0.37);
    }
    </style>
</head>
<body style="font-family: Montserrat;" onload="myFunction()">
<div id="loader"></div>
    <div class="container-fluid" id="myDiv">
        <div class="row flex-nowrap">
        <?php include 'sidebar.php';?>
    <div class="col-8 py-5 container animate-bottom" style="font-family: Inter;">
    <h3>NEW APPOINTMENT</h3><hr>
	<div class="card mt-4 inputcard" style="background-color: #e1e5f2;">
		<form class="card-body py-3 px-4" method="GET"> <!-- action="patient_list.php" -->
            <div class="row mb-2">
                <div class="col-lg">
                    <label class="">Patient Name</label>
                            <select class="form-control" name="patient" id="patient" required>
                                <option selected disabled>-- Select One--</option>
                            <?php
                            include 'connect.php';
                                $query= "select patient_id, fname +' '+ lname as patient_name from patients where acc_status = 1";
                                $result = sqlsrv_query($conn,$query);
                                $count = 0;
                                while($row=sqlsrv_fetch_array($result)){
                                $count++;
                                    if($row['patient_id'] == $editid['patient_id'])
                                    {
                                    echo "<option value='$row[patient_id]' selected>$count - $row[patient_name]</option>";
                                    }
                                    else
                                    {
                                        echo "<option value='$row[patient_id]'>$count - $row[patient_name]</option>";
                                    }
                                }
                            ?>
                    </select>
                </div>
                <div class="col-lg">
                    <label class="">Doctor Name</label>
                            <select class="form-control" name="doctor" id="doctor" required>
                                <option selected disabled>-- Select One--</option>
                            <?php
                                $query= "select doctor_id, fname +' '+ lname as doctor_name from doctors where acc_status = 1";
                                $result = sqlsrv_query($conn,$query);
                                $count = 0;
                                while($row=sqlsrv_fetch_array($result)){
                                $count++;
                                    if($row['doctor_id'] == $editid['doctor_id'])
                                    {
                                    echo "<option value='$row[doctor_id]' selected>$count - $row[doctor_name]</option>";
                                    }
                                    else
                                    {
                                        echo "<option value='$row[doctor_id]'>$count - $row[doctor_name]</option>";
                                    }
                                }
                            ?>
                    </select>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <label class="">Appointment Date</label>
                    <input class="form-control" type="date" name="app_date" required>
                </div>
                <div class="col">
                    <label class="">Appointment Time</label>
                    <input class="form-control" type="time" name="app_time" required>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg">
                    <label class="">Reason for Check Up</label>
                    <textarea class="form-control" type="text" name="reason" style="height: 75px; width: 100%;" 
                    placeholder="Enter your symptoms. Kindly include details about your health (Comorbidities, congenital diseases, etc.)" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="d-grid gap-2 col-6 mx-auto mt-3">
                    <button class="btn btn-primary py-2" name="addAppointment" type="submit" value="Submit">Add Appointment</button>
                </div>
            </div>
            <?php //* code that takes values from the fields and stores it in DB using SPs
             if (isset($_GET['addAppointment'])){
                $app_date = $_GET['app_date'];
                $app_time = $_GET['app_time'];
                $reason = $_GET['reason'];
                $patient_id = $_GET['patient'];
                $doctor_id = $_GET['doctor'];
                
                $query = "exec sproc_createapp @app_date = ?, @app_time = ?, @reason = ?, @doctor_id = ?, @patient_id = ?";
                $params = array (&$app_date,&$app_time,&$reason,&$doctor_id,&$patient_id);
                $insert = sqlsrv_prepare($conn, $query, $params);
                $exec = sqlsrv_execute($insert);
                    if(!$exec){
                        echo '<script>
                        window.alert("Failed to add appointment. Please try again.");
                        window.location.replace("appointment_new.php");
                        </script>';
                    }
                    else{
                        echo '<script>
                        window.alert("Successfully added new appointment!");
                        window.location.replace("appointment_view.php");
                        </script>';
                    }
                die();
             }
            ?>
 		</form>
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