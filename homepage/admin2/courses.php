<?php
include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MyPath Admin Panel</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/semantic.min.css">
  <link rel="stylesheet" href="../../assests/style1.css">

</head>

<body id="page-top">

<nav class="navbar navbar-expand static-top" style="background-color: #002752">

  <a class="navbar-brand mr-1" href="../index.php"><img src="../../img/Untitled-3.png" alt="" width="100px" height="50Ppx"></a>

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>
</nav>

<div id="wrapper">

  <!-- Sidebar -->
  <ul class="sidebar navbar-nav" style="background-color: #002752">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt text-white fa-2x"></i>
        <span class="text-white">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="courses.php">
        <i class="fas fa-graduation-cap fa-2x text-white"></i>
        <span class="text-white">Courses</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="institutes.php">
        <i class="fas fa-book-open fa-2x text-white"></i>
        <span class="text-white">Institutes</span></a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-spinner fa-2x text-white"></i>
        <span class="text-white">Settings</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Login Screens:</h6>
        <a class="dropdown-item" href="login.html">Login</a>
        <a class="dropdown-item" href="register.html">Register</a>
        <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
      </div>
    </li>

  </ul>

  <div id="content-wrapper">



        <!-- Modal -->

      <section class="bg-gray-7">
        <div class="container mb-2" id="bread">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <i class="fas fa-arrow-right"></i>
            <li class="active">Courses</li>
              <li>
                  <?php if(isset($_SESSION['response'])){ ?>
                      <div class="ui violet message alert-<?= $_SESSION['res_type']; ?>alert-dismissible text-center" style="width:600px;margin-left: 10%">
                          <button type="button" class="close" data-dismiss="alert"></button>
                          <b class="text-center"><?= $_SESSION['response']; ?></b>
                      </div>
                  <?php } unset($_SESSION['response']); ?>
              </li>
          </ul>
        </div>
      </section>
      <div class="row">
        <div class="col md-2"></div>
        <div class="col-md-10"><h2 style="color: #002752">Add Your Courses From Here</h2></div>
      </div>
      <hr>
      <div class="container-fluid">
          <div class="row">
              <div class="row" >
                  <div class="col-md-1"></div>
                  <div class="col-md-11" style="background-image: linear-gradient(-90deg, #2980b9, #2c3e50);">
                      <form class="ui form" action="action.php" method="post" enctype="multipart/form-data" style="margin-left:10px;margin-top: 5px ">
                          <input type="hidden" name="id" value="<?= $id; ?>">
                          <h4 class="ui dividing header text-white">Fill Your Details Here</h4>
                          <div class="five fields form-group">
                              <div class="field form-group">
                                  <label class="text-white">Institute Name</label>
                                  <div class="field form-group">
                                      <input type="text" name="name" value="<?= $name; ?>" class="form-control" placeholder="enter institute name">
                                  </div>
                              </div>
                              <div class="field form-group">
                                  <label class="text-white">Course Name</label>
                                  <div class="field form-group">
                                      <select class="ui fluid dropdown form-control"  name="catogary" value="<?= $catogary; ?>">
                                          <option value="Accounting and finance">Accounting and finance</option>
                                          <option value="Aeronautical & Manufacturing Engineering">Aeronautical & Manufacturing Engineering</option>
                                          <option value="Agriculture & Forestry">Agriculture & Forestry</option>
                                          <option value="Anatomy & Physiologic">Anatomy & Physiologic</option>
                                          <option value="Anthropology">Anthropology</option>
                                          <option value="Archaeology">Archaeology</option>
                                          <option value="Art & Design">Art & Design</option>
                                          <option value="Architecture">Architecture</option>
                                          <option value="Biological Sciences">Biological Sciences</option>
                                          <option value="Building">Building</option>
                                          <option value="Business & Management Studies">Business & Management Studies</option>
                                          <option value="Celtic Studies">Celtic Studies</option>
                                          <option value="Chemical Engineering">Chemical Engineering</option>
                                          <option value="Chemistry">Chemistry</option>
                                          <option value="Civil Engineering">Civil Engineering</option>
                                          <option value="Classics & Ancient History">Classics & Ancient History</option>
                                          <option value="Computer Science">Computer Science</option>
                                          <option value="Cookery">Cookery</option>
                                          <option value="Creative Writing">Creative Writing</option>
                                          <option value="Criminology">Criminology</option>
                                          <option value="Dentistry">Dentistry</option>
                                          <option value="Drama, Dance & Cinematics">Drama, Dance & Cinematics</option>
                                          <option value="East & South Asian Studies">East & South Asian Studies</option>
                                          <option value="Economics">Economics</option>
                                          <option value="Education">Education</option>
                                          <option value="Electrical & Electronic Engineering">Electrical & Electronic Engineering</option>
                                          <option value="English">English</option>
                                          <option value="Fashion,Clothing">Fashion,Clothing</option>
                                          <option value="Film Making,Media, Photography,Videography">Film Making,Media, Photography,Videography</option>
                                          <option value="Food Science">Food Science</option>
                                          <option value="Forensic Science">Forensic Science</option>
                                          <option value="French,Spanish,German,Hindi,Tamil">French,Spanish,German,Hindi,Tamil</option>
                                          <option value="Geography & Environmental Sciences">Geography & Environmental Sciences</option>
                                          <option value="Geology">Geology</option>
                                          <option value="General Engineering">General Engineering</option>
                                          <option value="Journalism & Media">Journalism & Media</option>
                                          <option value="Hotel Management">Hotel Management</option>
                                          <option value="History,History of Art, Architecture & Design">History,History of Art, Architecture & Design</option>
                                          <option value="Italian Language,Iberian Languages/Hispanic Studies">Italian Language,Iberian Languages/Hispanic Studies</option>
                                          <option value="Land & Property Management">Land & Property Management</option>
                                          <option value="Law">Law</option>
                                          <option value="Librarianship & Information Management">Librarianship & Information Management</option>
                                          <option value="Marketing">Marketing</option>
                                          <option value="Materials Technology">Materials Technology</option>
                                          <option value="Mathematics">Mathematics</option>
                                          <option value="Mechanical Engineering">Mechanical Engineering</option>
                                          <option value="Medical Technology">Medical Technology</option>
                                          <option value="Medicine,Health">Medicine,Health</option>
                                          <option value="Middle Eastern & African Studies">Middle Eastern & African Studies</option>
                                          <option value="Music">Music</option>
                                          <option value="Nursing">Nursing</option>
                                          <option value="Occupational Therapy">Occupational Therapy</option>
                                          <option value="Pharmacology & Pharmacy">Pharmacology & Pharmacy</option>
                                          <option value="Philosophy">Philosophy</option>
                                          <option value="Physics and Astronomy">Physics and Astronomy</option>
                                          <option value="Physical Science">Physical Science</option>
                                          <option value="Physiotherapy">Physiotherapy</option>
                                          <option value="Politics">Politics</option>
                                          <option value="Quantity Surveing">Quantity Surveing</option>
                                          <option value="Robotics">Robotics</option>
                                          <option value="Russian & East European Languages">Russian & East European Languages</option>
                                          <option value="Social Work,Sociology">Social Work,Sociology</option>
                                          <option value="Psychology,Counseling">Psychology,Counseling</option>
                                          <option value="Politics">Politics</option>
                                          <option value="Sports Science">Sports Science</option>
                                          <option value="Theology & Religious Studies">Theology & Religious Studies</option>
                                          <option value="Town & Country Planning and Landscape Design">Town & Country Planning and Landscape Design</option>
                                          <option value="Veterinary Medicine">Veterinary Medicine</option>



                                      </select>
                                  </div>
                              </div>
                              <div class="field form-group">
                                  <label class="text-white">Course name</label>
                                  <div class="field form-group">
                                      <input type="text" name="cname"  value="<?= $cname;?>" class="form-control" placeholder="enter course name">

                                  </div>
                              </div>
                              <div class="field form-group">
                                  <label class="text-white">Course Description</label>
                                  <div class="field form-group">
                                      <div class="form-group">
                                          <input type="text" name="description" value="<?= $description; ?>" class="form-control" placeholder="enter course description">
                                      </div>
                                  </div>
                              </div>
                              <div class="field form-group">
                                  <label class="text-white">Course Type</label>
                                  <div class="field form-group">
                                      <select class="ui fluid dropdown form-control"  name="type" value="<?= $type; ?>">
                                          <option value="Certificate">Certificate</option>
                                          <option value="Advanced Certificate">Advanced Certificate</option>
                                          <option value="Diploma">Diploma</option>
                                          <option value="Higher National Diploma">Higher National Diploma</option>
                                          <option value="Degree">Degree</option>
                                          <option value="Postgraduate Degree">Postgraduate Degree</option>
                                          <option value="Professional Qualified">Professional Qualified</option>
                                          <option value="Training Programmes">Training Programmes</option>
                                      </select>
                                  </div>
                              </div>



                          </div>

                          <div class="five fields form-group">
                              <div class="field form-group">
                                  <label class="text-white">Select Duration</label>
                                  <div class="field form-group">
                                      <select class="ui fluid dropdown form-control"  value="<?= $duration; ?>" name="duration" >
                                          <option value="1 Day">1 Day</option>
                                          <option value="2 Days">2 Days</option>
                                          <option value="3 Days">3 Days</option>
                                          <option value="4 Days">4 Days</option>
                                          <option value="5 Days">5 Days</option>
                                          <option value="6 Days">6 Days</option>
                                          <option value="7 Days">7 Days</option>
                                          <option value="8 Days">8 Days</option>
                                          <option value="9 Days">9 Days</option>
                                          <option value="10 Days">10 Days</option>
                                          <option value="1 Month">1 Month</option>
                                          <option value="2 Month">2 Month</option>
                                          <option value="3 Month">3 Month</option>
                                          <option value="4 Month">4 Month</option>
                                          <option value="5 Month">5 Month</option>
                                          <option value="6 Month">6 Month</option>
                                          <option value="7 Month">7 Month</option>
                                          <option value="8 Month">8 Month</option>
                                          <option value="9 Month">9 Month</option>
                                          <option value="10 Month">10 Month</option>
                                          <option value="11 Month">11 Month</option>
                                          <option value="1 Year">1 Year</option>
                                          <option value="2 Year">2 Year</option>
                                          <option value="3 Year">3 Year</option>
                                          <option value="4 Year">4 Year</option>
                                          <option value="5 Year">5 Year</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="field form-group">
                                  <label class="text-white">Cost</label>
                                  <input type="text" name="cost" value="<?= $cost; ?>" class="form-control" placeholder="cost">
                              </div>
                              <div class="field form-group">
                                  <label class="text-white">Enter Payment Method</label>
                                  <div class="field form-group">
                                      <input type="text" name="payment" value="<?= $payment; ?>" class="form-control" placeholder="enter payment method">
                                  </div>
                              </div>
                              <div class="field form-group">
                                  <label class="text-white">Minimum Qualifications</label>
                                  <div class="field form-group">
                                      <input type="text" name="qualification" value="<?= $qualification; ?>" class="form-control" placeholder="enter Minimum qualification">
                                  </div>
                              </div>
                              <div class="field form-group">
                                  <label class="text-white">Course Content</label>
                                  <div class="field form-group">
                                      <textarea rows="5" cols="50" type="text" name="content" value="<?= $content; ?>" class="form-control" placeholder="enter course details"></textarea>
                                  </div>
                              </div>


                          </div>
                          <div class="three fields form-group">
                              <div class="field form-group">
                                  <label class="text-white">Contact Details</label>
                                  <input type="phone" name="phone" value="<?= $phone; ?>" class="form-control" placeholder="enter contact details">
                              </div>
                              <div class="field form-group">
                                  <label class="text-white">Course and Institute Name</label>
                                  <input type="name_ins" name="name_ins" value="<?= $name_ins; ?>" class="form-control" placeholder="In Here YOu have to mention the course & the institute EX-Cima-Achivers Business School,Ditec-ESoft,ACCa-Wisdom Business School" required>
                              </div>
                              <div class="field form-group">
                                  <label class="text-white">Choose image</label>
                                  <input type="hidden" name="oldimage" value="<?= $photo; ?>">
                                  <input type="file" name="image" value="<?= $image; ?>" class="custom-file" >
                                  <img src="<?= $photo; ?>" alt="" width="120" class="img-thumbnail">
                              </div>

                          </div>

                          <div class="form-group">
                              <?php if($update==true){ ?>
                                  <input type="submit" name="update"  class="btn btn-info btn-block" value="Update Record"> <?php } else{ ?>
                                  <input type="submit" name="adding"  class="btn btn-success btn-block" value="Add Record">
                              <?php } ?>
                          </div>

                      </form>
                      <div class="row">

                      </div>
                  </div>
              </div>
          </div>




          <div class="row">
              <div class="container-fluid">
                  <div class="row justify-content-center">
                      <div class="col-md-10 bg-light mt-2 rounded">

                          <hr>
                          <div class="class form-inline">
                              <label for="search" class="font-weight-bold lead text-dark">Search Record</label>&nbsp;
                              <div class="ui category search">
                                  <div class="ui icon input">

                                      <input class="prompt form-control form-control-lg border-info" type="text" name="search" id="search_text" placeholder="Search course...">
                                  </div>
                              </div>
                          </div><hr>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-12">
                  <?php
                  $query="SELECT * FROM crud";
                  $stmt=$conn->prepare($query);
                  $stmt->execute();
                  $result=$stmt->get_result();

                  ?>
                  <table class="ui celled table table-bordered table-hover" style="font-size: 12px" id="table-data">
                      <thead>
                      <tr>
                          <th>Institute Name</th>
                          <th>Institute image</th>
                          <th>Course Name</th>
                          <th>Course Catogary</th>
                          <th>Course Type</th>
                          <th>Course Description</th>
                          <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php while($row=$result->fetch_assoc()){ ?>
                          <tr>
                              <td><?= $row['name']; ?></td>
                              <td><img src="<?= $row['photo']; ?>" alt="" width="25"></td>
                              <td ><?= $row['cname']; ?></td>
                              <td><?= $row['catogary']; ?></td>
                              <td><?= $row['type']; ?></td>
                              <td ><?= $row['description']; ?></td>
                              <td >
                                  <a href="details.php?details=<?= $row['id']; ?>" class="ui teal tag label ">Details</a>
                                  <a href="action.php?delete=<?= $row['id']; ?>" class="ui red tag label " onclick="return confirm('Do you want delete this record?');">Delete</a>
                                  <a href="courses.php?edit=<?= $row['id']; ?>" class="ui green tag label ">Edit</a>
                              </td>
                          </tr>
                      <?php } ?>
                      </tbody>
                  </table>
              </div>
          </div>







<!--        &lt;!&ndash; Area Chart Example&ndash;&gt;-->
<!--        <div class="card mb-3">-->
<!--          <div class="card-header">-->
<!--            <i class="fas fa-chart-area"></i>-->
<!--            Area Chart Example</div>-->
<!--          <div class="card-body">-->
<!--            <canvas id="myAreaChart" width="100%" height="30"></canvas>-->
<!--          </div>-->
<!--          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
<!--        </div>-->

<!--        <div class="row">-->
<!--          <div class="col-lg-8">-->
<!--            <div class="card mb-3">-->
<!--              <div class="card-header">-->
<!--                <i class="fas fa-chart-bar"></i>-->
<!--                Bar Chart Example</div>-->
<!--              <div class="card-body">-->
<!--                <canvas id="myBarChart" width="100%" height="50"></canvas>-->
<!--              </div>-->
<!--              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
<!--            </div>-->
<!--          </div>-->
<!--          <div class="col-lg-4">-->
<!--            <div class="card mb-3">-->
<!--              <div class="card-header">-->
<!--                <i class="fas fa-chart-pie"></i>-->
<!--                Pie Chart Example</div>-->
<!--              <div class="card-body">-->
<!--                <canvas id="myPieChart" width="100%" height="100"></canvas>-->
<!--              </div>-->
<!--              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->

      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>
<script src="../../js/semantic.min.js"></script>
  <!-- Demo scripts for this page-->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
<script>
    $(document).ready(function(){
        $("#search_text").keyup(function(){
            var search = $(this).val();
            $.ajax({
                url:'actions.php',
                method:'post',
                data:{query:search},
                success:function(response){
                    $("#table-data").html(response);
                }
            });
        });
    });


</script>
</body>

</html>
