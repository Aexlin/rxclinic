<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forgot Password</title>
  <link rel="shortcut icon" href="./images/rxclinic_logo_1.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./bootstrap5/css/bootstrap-grid.css">
  <link rel="stylesheet" href="./bootstrap5/css/bootstrap-grid.css.map">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    body{
        background-color:#e1e5f2; font-family:Montserrat;
    }
    .inputcont{
        width: 300px; background-color: #a9c1fd; border: none; border-radius: 25px;
        box-shadow: 3.42px 3.42px 7.7px #00000038;
    }
    .textinput{
        background-color: rgba(255, 255, 255, 1); width: 230px; height: 30px;
        border-radius: 5px; border: none; padding-left: 10px; font-size: 14px;
    }
    .dropd{
        width: 230px; height: 30px; font-size: 14px; margin-bottom: 8px; text-align: left;
    }
    .loginbtn {
        letter-spacing: 1.5px; color: white; box-shadow: 0px 6px 5px #686de0cc;
        background-image: linear-gradient(0deg, #407bff 0%, #263238 100%);
        width: 125px; height: 33px; border: none; border-radius: 43px;
    }
    .loginbtn:active {
        transition-duration: .2s; margin-top: 2.5px; box-shadow: 0px 6px 7px #686de080;
    }
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
    text-align: center;
    }
    .sendcode{
    width: 20%; height: 30px; font-size: 9px; float:right; border: none; border-radius: 5px;
    background-image: linear-gradient(0deg, #407bff 0%, #263238 100%); color: white;
    white-space: normal;
    }
    .sendcode:active{
        background-image: linear-gradient(0deg, #407bff 5%, #263238 90%);
        transition-duration: 2s;
    }
</style>
</head>
<body onload="myFunction()">
    <div id="loader"></div>
    <div class="mt-5" style="display:none;" id="myDiv"><br>
        <div class="container-xxl d-flex justify-content-center animate-bottom">
            <div class="card mt-5 inputcont" style="height: 368px;">
                <div class="card-body d-flex justify-content-center">
                    <a href="index.php" class="mx-auto d-flex justify-content-center my-auto">
                        <img src="./images/rxclinic_logo_1.png" alt="Logo" class="mx-auto" style="max-width: 25%;">
                    </a>
                </div>
                <div class="mx-auto justify-content-center row" style="margin: 0;">
                    <p style="font-size: larger;"><b>Forgot Password</b></p>
                </div>
                <form class="d-flex justify-content-center row">
                  <div class="dropdown d-flex justify-content-center">
                    <button class="btn btn-light dropdown-toggle dropd" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="color:gray;">
                        You are a...
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="width: 71%; font-size: 14px;">
                        <li><a class="dropdown-item" href="#" id="Patient" onclick="clicked(this.id);">Patient</a></li>
                        <li><a class="dropdown-item" href="#" id="Doctor" onclick="clicked(this.id);">Doctor</a></li>
                    </ul>
                    <script>
                            function clicked(id){
                                let account_type = document.getElementById(id).innerHTML;
                                document.getElementById('dropdownMenuButton1').innerHTML = account_type;
                                document.getElementById('dropdownMenuButton1').style.color="black";
                            }
                    </script>
                 </div>
                 <div class="d-flex row justify-content-md-center">
                     <div class="row justify-content-md-center input-group">
                         <input type="email" class="textinput mb-2" placeholder="Enter your email: " style="width:175px;" required>
                         <input type="button" value="Send Code" class="mb-2 col-sm-1 input-group-btn sendcode">
                     </div>
                     <input type="text" class="textinput row mb-4" placeholder="Enter code sent to email: " maxlength="6" required>
                     <input type="submit" class="loginbtn row mb-4 mt-1" value="Confirm" style="font-size: 14px; padding-left:10%;">
                </div>
                </form>
            </div>
        </div>
    </div>

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
</body>
</html>
