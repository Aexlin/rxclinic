<?php session_start();?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RxClinic Login</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="./images/rxclinic_logo_1.png">

    <style>
                /* Center the loader */
        #loader {
        position: absolute; left: 50%; top: 50%; z-index: 1;
        width: 30px; height: 30px; margin: -25px 0px 0px -20px; border: 10px solid #f3f3f3; border-radius: 50%;
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
        
        #myDiv {
        display: none;
        /* text-align: center; */
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

        h1{
            font-weight: 900;
        }
    </style>
</head>

<body onload="myFunction()">
<div id="loader"></div>
    <div class="page_background animate-bottom" id="myDiv">
        <div class="doctorimg"></div>
        <h1>RxClinic</h1>
        <container class="inputcontainer">
            <form method="post">
                <div class="textfieldcont">
                    <div class="dropdown">
                        <button class="dropbtn" id="selection">You are a...</button>
                        <div class="dropdown-content">
                            <a href="#" value="admin" id="admin" name="admin" onclick="clicked(this.id);">Admin</a>
                            <a href="#" value="doctor" id="doctor" name="doctor" onclick="clicked(this.id);">Doctor</a>
                            <a href="#"" value="patient" id="patient" name="patient" onclick="clicked(this.id);">Patient</a>
                        <script>
                            function clicked(id){
                                let account_type = document.getElementById(id).innerHTML;
                                document.getElementById('selection').innerHTML = account_type;
                                document.getElementById('selection').style.color="black";
                            }
                        </script>
                        </div>
                    </div>
                    <div class="email">
                        <input type="text" class="textinput" placeholder="Email" name="email" required>
                    </div>
                    <div class="pw">
                        <input type="password" class="textinput " placeholder="Password" name="password" required></input>
                    </div>
            </form>
            <div class="loginbtncont">
                <input type="submit" class="loginbtn" value="Log In" name="login">
            </div>
            <a href="usersignup.php" class="signup" title="Sign Up for A New Account">SIGN UP</a>
            <a href="userforgotpass.php" class="forgotpass" title="Forgot Password"><i>Forgot Password?</i></a>
            </div>
            <div class=e166_378>
                <div class="e166_375 "></div><span class="e166_377 "><b>Welcome!</b></span></div>
        </container>
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