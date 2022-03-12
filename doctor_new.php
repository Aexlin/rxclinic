<!DOCTYPE html>
<html>
<head>
    <title>Add Doctor</title>
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
    <h3>NEW DOCTOR</h3><hr>
	<div class="card mt-4 inputcard" style="background-color: #e1e5f2;">
		<form class="card-body py-3 px-4" method="get">
            <div class="row mb-2">
                <div class="col-lg">
                    <label class="">First Name</label>
                    <input class="form-control" type="text" name="fname" required>
                </div>
                <div class="col-lg">
                    <label class="">Last Name</label>
                    <input class="form-control" type="text" name="lname" required>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6">
                    <label class="">Email</label>
                    <input class="form-control" type="text" name="email" required>
                </div>
                <div class="col">
                    <label class="">Password</label>
                    <input class="form-control" type="password" name="password" required>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6">
                    <label class="">Department</label>
                    <input class="form-control" type="text" name="department">
                </div>
                <div class="col">
                    <label class="">Confirm Password</label>
                    <input class="form-control" type="password" name="confpassword">
                </div>
            </div>
            <div class="row">
                <div class="d-grid gap-2 col-6 mx-auto mt-3">
                    <button class="btn btn-primary py-2" name="addDoctor" type="submit">Add Doctor</button>
                </div>
            </div>
        <?php //* code to insert values in fields
        include 'connect.php';
        if (isset($_GET['addDoctor'])){
            // var_dump($_GET['addPatient']);
            $fname = $_GET['fname'];
            $lname = $_GET['lname'];
            $email = $_GET['email'];
            $pword = $_GET['password'];
            $d_type = $_GET['department'];
                // $query = "insert into patients(fname,lname,age,email,pword,p_address,contact_no,acc_status)
                //         values ('$fname','$lname','$age','$email','$pword','$address','$contactno','1')"; 
                //* (@fname,@lname,@email,@pword,@d_type,1)
            $query = "exec sproc_createdoc @fname=?, @lname=?, @email=?, @pword=?, @d_type=?";
            $params = array (&$fname,&$lname,&$email,&$pword,&$d_type);
                // $params = array(
                // array ($fname, SQLSRV_PARAM_IN),
                // array ($lname, SQLSRV_PARAM_IN),
                // array ($email, SQLSRV_PARAM_IN),
                // array ($pword,  SQLSRV_PARAM_IN),
                // array ($d_type, SQLSRV_PARAM_IN));
            // echo var_dump($params);
            // var_dump($fname,$lname,$age,$email,$pword,$address,$contactno);
            $insert = sqlsrv_prepare($conn, $query, $params);
            $exec = sqlsrv_execute($insert);
            // var_dump($exec);
                if(!$exec){
                    echo '<script>
                    window.alert("Failed to add new doctor");
                    window.location.replace("doctor_new.php");
                    </script>';
                }
                else{
                    echo '<script>
                    window.alert("Successfully added Doctor!");
                    window.location.replace("doctor_list.php");
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