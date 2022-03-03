<?php session_start();?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Clinic Login Page</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="./images/rxclinic_logo_1.png">

</head>

<body>
    <div class="page_background">
        <div class="doctorimg"></div>
        <h1>RxClinic</h1>
        <container class="inputcontainer">
            <form method="post">
                <div class="textfieldcont">
                    <div class="dropdown">
                        <button class="dropbtn" id="selection">You are a...</button>
                        <div class="dropdown-content">
                            <a href="#" value="admin" id="admin" name="account_type" onclick="clicked(this.id);">Admin</a>
                            <a href="#" value="doctor" id="doctor" name="account_type" onclick="clicked(this.id);">Doctor</a>
                            <a href="#"" value="patient" id="patient" name="account_type" onclick="clicked(this.id);">Patient</a>
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
                        <input type="text" class="textinput" placeholder="Email" required>
                    </div>
                    <div class="pw">
                        <input type="password" class="textinput " placeholder="Password" required></input>
                    </div>
            </form>
            <div class="loginbtncont">
                <input type="submit" class="loginbtn" value="Log In">
            </div>
            <a href="signup.php" class="signup" title="Sign Up for A New Account">SIGN UP</a>
            <a href="userforgotpass.php" class="forgotpass" title="Forgot Password"><i>Forgot Password?</i></a>
            </div>
            <div class=e166_378>
                <div class="e166_375 "></div><span class="e166_377 "><b>Welcome!</b></span></div>
        </container>
    </div>
    </div>
</body>
</html>