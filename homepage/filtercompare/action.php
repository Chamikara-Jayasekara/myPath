<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
    require 'config.php';

    if(isset($_POST['action'])){
        $sql = "SELECT * FROM crud WHERE catogary !=''";
      if(isset($_POST['catogary'])){
                $catogary = implode("','", $_POST['catogary']);
                $sql.="AND catogary IN('".$catogary."')";
            }
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

        if(isset($_POST['duration'])){
            $duration = implode("','", $_POST['duration']);
            $sql.="AND duration IN('".$duration."')";
        }


        $result = $conn->query($sql);
        $output='';
        if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                $output .='
      <div class="col-md-4 mb-2">
                <div class="card-deck">
                    <div class="card border-secondary">
                       
                        <div class="card-img-overlay">
                            </div>
        
                         <div class="card-body">
                         <div class="row">
                         <div class="col-md-5">  <img src=" '.$row['photo'].' " alt="" class="card-img-top ml-2 mt-1 mb-1" style="height: 50px;width: 100px "></div>
                         <div class="col-md-7"> <h6 class="text-light bg-info text-center rounded p-1">'.$row['name_ins'].'</h6></div>
                         </div>
                      
                          
                          <p style="font-size: 12px">  
                             <div class="row">
                         
                             <div class="col-md-6"> <p>Institute</p></div>
                          <div class="col-md-12"> <p style="font-size: 12px">'.$row['name'].'</div></p>
                            </div>  
                            <hr><p style="font-size: 12px">Description:</p>  <p style="font-size: 12px">'.$row['description'].'<br></p>
                            <hr><div class="row">
                             <div class="col-md-6"><p  style="font-size: 12px"> Level:</p>  </div><div class="col-md-6"><p style="font-size: 12px"> '.$row['type'].'</p></div>
                         </div>
                         <hr><div class="row">
                         <div class="col-md-6"> <p  style="font-size: 12px"> Cost: </p></div><div class="col-md-6"><p style="font-size: 12px">'.$row['cost'].'<br></p></div>
                        </div>
                            
                            <hr><div class="row"><div class="col-md-6"><p  style="font-size: 12px">Duration:</p></div><div class="col-md-6"><p style="font-size: 12px">  '.$row['duration'].'</p></div></div>
                            <hr><p  style="font-size: 12px">Content:</p><p style="font-size: 10px">'.$row['content'].'</p>
                            <hr><p  style="font-size: 12px">Minimum Qualifications:</p><p style="font-size: 12px">'.$row['qualification'].'</p>
                            </p>
                                      </div>
                                  
                                    </div>
                                  </div>
                                </div>
                   
                          </div>
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


