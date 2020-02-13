<?php
include 'header.php';
?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../assests/style1.css">
<body>
<section class="bg-gray-7">
    <div class="breadcrumbs-custom box-transform-wrap context-dark">
        <div class="container">
            <h3 class="breadcrumbs-custom-title" id="certh3">Course Details</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url(../img/md-duran-1VqHRwxcCCw-unsplash.jpg);"></div>
    </div>
    <div class="container mb-2" id="bread">
        <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <i class="fas fa-arrow-right"></i>
            <li><a href="search.php">Courses</a></li>
            <i class="fas fa-arrow-right"></i>
            <li class="active">Course Details</li>

        </ul>
    </div>
</section>
<section>
    <?php
    $title =  mysqli_real_escape_string($conn, $_GET['title']);
    $date =  mysqli_real_escape_string($conn, $_GET['date']);
    $adescription = mysqli_real_escape_string($conn,$_GET['adescription']);
    $aqualification = mysqli_real_escape_string($conn,$_GET['aqualification']);
    $acontent = mysqli_real_escape_string($conn,$_GET['acontent']);
    $aduration = mysqli_real_escape_string($conn,$_GET['aduration']);
    $acost = mysqli_real_escape_string($conn,$_GET['acost']);
    $apayment = mysqli_real_escape_string($conn,$_GET['apayment']);
    $aphone = mysqli_real_escape_string($conn,$_GET['aphone']);
    $aphoto = mysqli_real_escape_string($conn,$_GET['aphoto']);

    $sql = "SELECT * FROM crud WHERE name='$title' AND cname='$date'";
    $result = mysqli_query($conn, $sql);
    $queryResults = mysqli_num_rows($result);

    if($queryResults > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo "
      
                    <div class=\"data-bar shadow\">
                        <div class=\"data-bar-content partner-count-1\">
                            <div class=\"container-fluid\">
                                <div class=\"row\">
                                <div class='col-md-2'>
                                    <div class=\"partner-image-wrapper\">
                                        <div class=\"partner\">
                                           <img src='".$row['photo']."' alt='' class='ml-5' width='150px' height='75px'></div>
                                        </div>
                                    </div>
                                    <div class='col-md-10'>
                                    <div class=\"program\">
                                        <div class=\"type\">
                                            <div class=\"title\">
                                        ".$row['cname']."
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"gradient-wrapper program-body\">
                        <div class=\"container details\">
                            <div class=\"container-fluid program-section detail_container\">
                                <div class=\"row row-1\">
                                    <div class=\"col-lg-8\">
                                        <h2 class=\"h2 mb-3 section-title\">
                                            Course Description
                                        </h2>
                                        <ul>
                                            <li>".$row['description']."</li>
                                        </ul>
                                  
                              <hr style='background-color:#002752 '>
                         <div class=\"accordion md-accordion mb-2\" id=\"accordionEx1\" role=\"tablist\" aria-multiselectable=\"true\">
                          <div class=\"card\">
                            <div class=\"card-header\" role=\"tab\" id=\"headingTwo1\">
                              <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseTwo1\"
                                aria-expanded=\"false\" aria-controls=\"collapseTwo1\">
                                <h5 class=\"mb-0\">
                                <div class='row'>
                                <div class='col-md-1'><i class=\"fas fa-plus rotate-icon\"></i></div>
                                <div class='col-md-8'><h3>Course Content</h3> </div>
                                </div>
                                </h5>
                              </a>
                            </div>
                            <div id=\"collapseTwo1\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo1\"
                              data-parent=\"#accordionEx1\">
                              <div class=\"card-body\">
                                    ".$row['content']."
                              </div>
                            </div>
                          </div>
                          <div class=\"card\">
                            <div class=\"card-header\" role=\"tab\" id=\"headingTwo2\">
                              <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx1\" href=\"#collapseTwo21\"
                                aria-expanded=\"false\" aria-controls=\"collapseTwo21\">
                                <h5 class=\"mb-0\">
                                <div class='row'>
                                <div class='col-md-1'>
                                 <i class=\"fas fa-plus rotate-icon\"></i></div>
                                  <div class='col-md-8'><h3>Minimum Payment</h3></div>
                                 </div>
                                </h5>
                              </a>
                            </div>
                        
                            <!-- Card body -->
                            <div id=\"collapseTwo21\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo21\"
                              data-parent=\"#accordionEx1\">
                              <div class=\"card-body\">
                                  ".$row['payment']."
                              </div>
                            </div>
                        
                          </div>
                       
                        </div>
                           
       
                        </div>
           
                <div class=\"col-lg-4\">
                                       <div class='row'>
                                       <div class='col-md-4 '>
                                       <div class='icon' style='width: 60px;height: 60px;border-radius: 40px;background-color: #002752;'>
                                       <i class=\"fas fa-graduation-cap fa-2x\" style=\"margin-left: 12px;color: white;margin-top: 12px;\"></i>
                                        </div>
                                        </div>
                                         <div class='col-md-8'>
                                         <div class='row'><h3>Course Type</h3></div><div class='row'>".$row['type']."</div></div>
                                            
                                        </div><hr>
                                       <div class='row mt-3'>
                                       <div class='col-md-4 '>
                                       <div class='icon' style='width: 60px;height: 60px;border-radius: 40px;background-color: #002752;'>
                                       <i class=\"fas fa-location-arrow fa-2x\" style=\"margin-left: 12px;color: white;margin-top: 12px;\"></i>
                                        </div>
                                        </div>
                                         <div class='col-md-8'>
                                         <div class='row'><h3 class='text-dark'>Institute</h3></div><div class='row'>".$row['name']."</div></div>
                                            
                                        </div><hr>
                                        <div class='row mt-3'>
                                       <div class='col-md-4 '>
                                       <div class='icon' style='width: 60px;height: 60px;border-radius: 40px;background-color: #002752;'>
                                       <i class=\"far fa-clock fa-2x\" style=\"margin-left: 15px;color: white;margin-top: 13px;\"></i>
                                        </div>
                                        </div>
                                         <div class='col-md-8'>
                                         <div class='row'><h3>Duration</h3></div><div class='row'>".$row['duration']."</div></div>
                                            
                                        </div><hr>
                                       <div class='row mt-3 mb-4'>
                                       <div class='col-md-4 '>
                                       <div class='icon' style='width: 60px;height: 60px;border-radius: 40px;background-color: #002752;'>
                                       <i class=\"fas fa-money-check fa-2x\" style=\"margin-left: 11px;color: white;margin-top: 15px;\"></i>
                                        </div>
                                        </div>
                                         <div class='col-md-8'>
                                         <div class='row'><h3>Cost</h3></div><div class='row'>".$row['cost']."</div></div>
                                            
                                        </div><hr>
                                        <div class='row mt-3 mb-4'>
                                       <div class='col-md-4 '>
                                       <div class='icon' style='width: 60px;height: 60px;border-radius: 40px;background-color: #002752;'>
                                       <i class=\"fas fa-phone fa-2x\" style=\"margin-left: 11px;color: white;margin-top: 15px;\"></i>
                                        </div>
                                        </div>
                                         <div class='col-md-8'>
                                         <div class='row'><h3>Contact Details</h3></div><div class='row'>".$row['phone']."</div></div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                     </div>
                    </div>
                  </div>
                </div>
               </div> 
              </div>
             </div>
                   ";
        }
    }
    ?>
</section>

<?php
include 'footer.php';
?>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/semantic.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
