<?php

use LDAP\Result;
//? Create database connection
$serverName = "ZSYRHILL\SQLEXPRESS";
$connectionInfo = array("Database"=>"rxclinic_db");
$conn = sqlsrv_connect($serverName, $connectionInfo);
    if($conn){
        echo'<script>
        console.log("connected");
        </script>
    ';
    }
?>