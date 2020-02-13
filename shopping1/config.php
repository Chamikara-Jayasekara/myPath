<?php
    $conn = new mysqli("localhost","root","","mypath");
    if($conn->connect_error){
        die("Connection Failed!".$conn->connect_error);
    }
?>
