<?php
    session_start();
    include 'config.php';
        $update=false;
        $id="";
        $name="";
        $photo="";
        $cname="";
        $catogary="";
        $type="";
        $description="";
        $payment="";
        $qualification="";
        $content="";
        $duration="";
        $cost="";
        $phone="";
        $name_ins="";

    if (isset($_POST['adding'])){
        $name=$_POST['name'];
        $cname=$_POST['cname'];
        $catogary=$_POST['catogary'];
        $type=$_POST['type'];
        $description=$_POST['description'];
        $payment=$_POST['payment'];
        $qualification=$_POST['qualification'];
        $content=$_POST['content'];
        $duration=$_POST['duration'];
        $cost=$_POST['cost'];
        $phone=$_POST['phone'];
        $name_ins=$_POST['name_ins'];
        $photo=$_FILES['image']['name'];
        $upload="../uploads".$photo;

        $query="INSERT INTO crud(name,cname,catogary,type,description,payment,qualification,content,duration,cost,phone,name_ins,photo)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("sssssssssssss",$name,$cname,$catogary,$type,$description,$payment,$qualification,$content,$duration,$cost,$phone,$name_ins,$upload);
        $stmt->execute();
        move_uploaded_file($_FILES['image']['tmp_name'],$upload);

        header('location:index.html');
        $_SESSION['response']="Successfully Inserted";
        $_SESSION['res_type']="success";
    }

    if (isset($_GET['delete'])){
        $id=$_GET['delete'];

        $sql="SELECT photo FROM crud WHERE id=?";
        $stmt2=$conn->prepare($sql);
        $stmt2->bind_param("i",$id);
        $stmt2->execute();
        $result2=$stmt2->get_result();
        $row=$result2->fetch_assoc();

        $imagepath=$row['photo'];
        unlink($imagepath);

        $query="DELETE FROM crud WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();

        header('location:index.html');
        $_SESSION['response']="Successfully Deleted";
        $_SESSION['res_type']="danger";
    }
    if (isset($_GET['edit'])){
        $id=$_GET['edit'];

        $query="SELECT * FROM crud WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();

        $id=$row['id'];
        $name=$row['name'];
        $photo=$row['photo'];
        $cname=$row['cname'];
        $catogary=$row['catogary'];
        $type=$row['type'];
        $description=$row['description'];
        $payment=$row['payment'];
        $qualification=$row['qualification'];
        $content=$row['content'];
        $duration=$row['duration'];
        $cost=$row['cost'];
        $phone=$row['phone'];
        $name_ins=$row['name_ins'];
        $update=true;
    }

    if (isset($_POST['update'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $cname=$_POST['cname'];
        $catogary=$_POST['catogary'];
        $type=$_POST['type'];
        $description=$_POST['description'];
        $payment=$_POST['payment'];
        $qualification=$_POST['qualification'];
        $content=$_POST['content'];
        $duration=$_POST['duration'];
        $cost=$_POST['cost'];
        $phone=$_POST['phone'];
        $name_ins=$_POST['name_ins'];
        $oldimage=$_POST['oldimage'];


    if (isset($_FILES['image']['name'])&&($_FILES['image']['name']!=="")){
        $newimage="uploads/".$_FILES['image']['name'];
        unlink($oldimage);
        move_uploaded_file($_FILES['image']['temp_name'], $newimage);
    }
    else{
        $newimage=$oldimage;
    }
        $query="UPDATE crud SET name=?,cname=?,catogary=?,type=?,description=?,payment=?,qualification=?,content=?,duration=?,cost=?,phone=?,name_ins=?,photo=? WHERE id=? ";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("sssssssssssssi",$name,$cname,$catogary,$type,$description,$payment,$qualification,$content,$duration,$cost,$phone,$name_ins,$newimage,$id);
        $stmt->execute();

        $_SESSION['response']="Updated Succesfully";
        $_SESSION['res_type']="primary";
        header('location:index.html');
    }

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
