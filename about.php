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
        color: #134557; font-size: 16px; letter-spacing: 4px; font-weight: 800 !important;
    }
    </style>
</head>
<body style="font-family: Montserrat;" onload="myFunction()">
    <div id="loader"></div>
    <div class="container-fluid" id="myDiv">
        <div class="row flex-nowrap">
            <?php include 'sidebar.php';?>
    <div class="col-8 py-5 container animate-bottom" style="font-family: Inter;">
        <h3>ABOUT THE DEVELOPERS</h3><hr>
        <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
            <img src="./images/members/Zsy.jpg" class="card-img-top" alt="Zsyrhill">
            <div class="card-body">
                <h5 class="card-title" style="font-weight: bold;">Zsyrhill Anne C. Soria</h5>
                <p class="card-text" style="font-style: italic;">Project Leader, Full-Stack Developer (ems)</p>
                <p class="card-text">- 20</p>
                <p class="card-text">- Metro Manila, Philippines</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="./images/members/Josiah.jpg" class="card-img-top" alt="Josiah">
            <div class="card-body">
                <h5 class="card-title" style="font-weight: bold;">Josiah Alether G. Fallesgon</h5>
                <p class="card-text" style="font-style: italic;">SQL Server Database Administrator</p>
                <p class="card-text">- 21</p>
                <p class="card-text">- Metro Manila, Philippines</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="./images/members/Allan.jpg" class="card-img-top" alt="Allan">
            <div class="card-body">
                <h5 class="card-title" style="font-weight: bold;">Allan G. Rosemblot</h5>
                <p class="card-text" style="font-style: italic;">Front-End Developer & System Documentation</p>
                <p class="card-text">- 21</p>
                <p class="card-text">- Metro Manila, Philippines</p>
            </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
            <img src="./images/members/Denzel.jpg" class="card-img-top" alt="Denzel">
            <div class="card-body">
                <h5 class="card-title" style="font-weight: bold;">Denzel John B. Delinea</h5>
                <p class="card-text" style="font-style: italic;">Data Populator & System Documentation</p>
                <p class="card-text">- 21</p>
                <p class="card-text">- Metro Manila, Philippines</p>
            </div>
            </div>
        </div>
        </div>
        </ul>
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
