<?php
    include 'config.php';
    $output='';
if(isset($_POST['query'])){
    $search=$_POST['query'];
    $stmt=$conn->prepare("SELECT * FROM crud WHERE cname LIKE CONCAT('%',?,'%') OR name_ins LIKE CONCAT('%',?,'%')");
    $stmt->bind_param("ss",$search,$search);
}
else{
    $stmt=$conn->prepare("Select * FROM crud");
}
$stmt->execute();
$result=$stmt->get_result();

if($result->num_rows>0){
    $output="  
                   ";
    while ($row=$result->fetch_assoc()){
        $output .="
        <div class='row'>
        <div class='col-md-12'>
            <div class='card border-secondary mt-3'>
            <div class='card-header'>
             <h3>".$row['cname']."</h3>
                </div>
                <div class='card-body'>
                <div class='row'>
                <div class='col-md-3'><div style='width: 60px;height: 60px;border-radius: 40px;background-color: #002752;';>
                <i class=\"fa fa-home fa-2x\" style='margin-top:17px;margin-left: 16px;color:white'></i></div></div>
                <div class='col-md-3 border-right border-info'>Institute Name</div>
                <div class='col-md-6'>".$row['name']."</div>
                </div><hr>
                  <div class='row'>
                <div class='col-md-3'><div style='width: 60px;height: 60px;border-radius: 40px;background-color: #002752;';><i class=\"fa fa-list fa-2x\" style='margin-top:17px;margin-left: 16px;color:white'></i></div></div>
                <div class='col-md-3 border-right border-info' >Description</div>
                <div class='col-md-6'>".$row['description']."</div>
                </div><hr>  <div class='row'>
                <div class='col-md-3'><div style='width: 60px;height: 60px;border-radius: 40px;background-color: #002752;';><i class=\"fa fa-graduation-cap fa-2x\" style='margin-top:17px;margin-left: 16px;color:white'></i></div></div>
                <div class='col-md-3 border-right border-info'>Level</div>
                <div class='col-md-6'>".$row['type']."</div>
                </div><hr>
                  <div class='row'>
                <div class='col-md-3'><div style='width: 60px;height: 60px;border-radius: 40px;background-color: #002752;';><i class=\"fa fa-money fa-2x\" style='margin-top:17px;margin-left: 16px;color:white'></i></div></div>
                <div class='col-md-3 border-right border-info'>Cost</div>
                <div class='col-md-6'>".$row['cost']."</div>
                </div><hr>
                  <div class='row'>
                <div class='col-md-3'><div style='width: 60px;height: 60px;border-radius: 40px;background-color: #002752;';><i class=\"fa fa-clock fa-2x\" style='margin-top:18px;margin-left: 18px;color:white'></i></div></div>
                <div class='col-md-3 border-right border-info'>Duration</div>
                <div class='col-md-6'>".$row['duration']."</div>
                </div><hr>
                  <div class='row'>
                <div class='col-md-3'><div style='width: 60px;height: 60px;border-radius: 40px;background-color: #002752;';><i class=\"fa fa-list-ol fa-2x\" style='margin-top:17px;margin-left: 16px;color:white'></i></div></div>
                <div class='col-md-3 border-right border-info'>Content</div>
                <div class='col-md-6'>".$row['content']."</div>
                </div><hr>
                  <div class='row'>
                <div class='col-md-3'><div style='width: 60px;height: 60px;border-radius: 40px;background-color: #002752;';><i class=\"fa fa-credit-card fa-2x\" style='margin-top:17px;margin-left: 16px;color:white'></i></div></div>
                <div class='col-md-3 border-right border-info'>Payment Method</div>
                <div class='col-md-6'>".$row['payment']."</div>
                </div><hr>
                  <div class='row'>
                <div class='col-md-3'><div style='width: 60px;height: 60px;border-radius: 40px;background-color: #002752;';><i class=\"fa fa-phone fa-2x\" style='margin-top:17px;margin-left: 16px;color:white'></i></div></div>
                <div class='col-md-3 border-right border-info'>Contact Numbers</div>
                <div class='col-md-6'>".$row['phone']."</div>
                </div>
                </div>
            </div>
        </div>
        </div>


                  ";
    }
    $output .="";
    echo $output;
}
else{
    echo "<h3>No records found!</h3>";
}
?>
