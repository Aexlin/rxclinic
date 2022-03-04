<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
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
    </style>
</head>
<body style="font-family: Montserrat;" onload="myFunction()">
<div id="loader"></div>
    <div class="container-fluid" id="myDiv">
        <div class="row flex-nowrap">
        <?php include 'sidebar.php';?>
    <div class="col-8 py-5 container animate-bottom" style="font-family: Inter;">
    <h3>NEW PATIENT</h3><hr>
	<div class="card rounded-3" style="background-color: #e1e5f2; font-family: Montserrat;">
		<form class="card-body py-3 px-4">
            <div class="row mb-2">
                <div class="col-lg">
                    <label class="">First Name</label>
                    <input class="form-control" type="text" name="fname" required>
                </div>
                <div class="col-lg">
                    <label class="">Last Name</label>
                    <input class="form-control" type="text" name="lname" required>
                </div>
                <div class="col-sm-2">
                    <label class="">Age</label>
                    <select class="form-control" name="age" style="font-size: 15px;">
                    <option class="select p-2" selected disabled>Select Age</option>
                        <?php
                            for ($i=1; $i<=100; $i++)
                            {
                                ?>
                                    <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg">
                    <label class="">Email</label>
                    <input class="form-control" type="text" name="email">
                </div>
                <div class="col-lg">
                    <label class="">Contact Number</label>
                    <input class="form-control" type="text" name="contactno">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg">
                    <label class="">Address</label>
                    <input class="form-control" type="text" name="address">
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg">
                    <label class="">Password</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <div class="col-lg">
                    <label class="">Confirm Password</label>
                    <input class="form-control" type="password" name="confpassword">
                </div>
            </div>
            <div class="row">
                <div class="d-grid gap-2 col-6 mx-auto mt-3">
                    <button class="btn btn-primary py-2" type="submit">Add Patient</button>
                </div>
            </div>
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