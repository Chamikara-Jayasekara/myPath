<?php
session_start();
include 'config.php';

if (isset($_GET['details'])){
    $id=$_GET['details'];
    $query="SELECT * FROM crud WHERE id=?";
    $stmt=$conn->prepare($query);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $result=$stmt->get_result();
    $row=$result->fetch_assoc();

    $vid=$row['id'];
    $vname=$row['name'];
    $vphoto=$row['photo'];
    $vcname=$row['cname'];
    $vcatogary=$row['catogary'];
    $vtype=$row['type'];
    $vdescription=$row['description'];
    $vpayment=$row['payment'];
    $vqualification=$row['qualification'];
    $vcontent=$row['content'];
    $vduration=$row['duration'];
    $vcost=$row['cost'];
    $vphone=$row['phone'];
    $vname_ins=$row['name_ins'];

}

?>