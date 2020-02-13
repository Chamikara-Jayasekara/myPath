<?php
    require 'config.php';

    if(isset($_POST['action'])){
        $sql = "SELECT * FROM crud WHERE cname !=''";

        if(isset($_POST['cname'])){
            $cname = implode("','", $_POST['cname']);
            $sql.="AND cname IN('".$cname."')";
        }
        if(isset($_POST['name'])){
            $name = implode("','", $_POST['name']);
            $sql.="AND name IN('".$name."')";
        }
        if(isset($_POST['type'])){
            $type = implode("','", $_POST['type']);
            $sql.="AND type IN('".$type."')";
        }
        if(isset($_POST['catogary'])){
            $catogary = implode("','", $_POST['catogary']);
            $sql.="AND catogary IN('".$catogary."')";
        }
        if(isset($_POST['duration'])){
            $duration = implode("','", $_POST['duration']);
            $sql.="AND duration IN('".$duration."')";
        }


        $result = $conn->query($sql);
        $output='';
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $output .='
      <div class="col-md-6 mb-2">
                <div class="card-deck">
                    <div class="card border-secondary">
                       
                        <div class="card-img-overlay">
                            </div>
        
                         <div class="card-body">
                          <img src=" '.$row['photo'].' " alt="" class="card-img-top ml-3 mt-1 mb-1" style="height: 50px;width: 100px ">
                         <h6 class="text-light bg-info text-center rounded p-1">'.$row['name_ins'].'</h6>
                         
                             <p>     
                            <hr>  Institute: <br> '.$row['name'].'<br>
                             <hr>   Description: <br>  '.$row['description'].'<br>
                             <hr>  Level:  <br>  '.$row['type'].'<br>
                           <hr>  Cost:  <br>  '.$row['cost'].'<br>
                            <hr>    Duration:   '.$row['duration'].'<br>
                            <hr>   Content: <br>  '.$row['content'].'
                            <hr>  Minimum Qualifications:  <br> '.$row['qualification'].'<br>
                            </p>
                            
                         </div>
                    </div>
                </div>
            </div>
                    ';
            }
        }
        else{
            $output ="<h3>Sorry Dear No Products can Found According to your Seletion!</h3>";
        }
        echo $output;

    }

?>