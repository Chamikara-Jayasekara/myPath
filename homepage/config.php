<?php
$conn = new mysqli("localhost","root","","mypath");

if ($conn->connect_error){
    die("Could not connect to database!".$conn->connect_error);
}

?>
