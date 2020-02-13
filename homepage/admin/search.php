<?php
include 'action.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/5.11.2/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link media="all" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Big+Shoulders+Display|Big+Shoulders+Text|Muli|Oswald|PT+Sans+Narrow|Playfair+Display|Roboto|Source+Sans+Pro|Titillium+Web|Turret+Road|Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/semantic.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/jquery-ui.min.css">
    <link rel="stylesheet" href="../assests/style1.css">
</head>
<body>
<header role="banner">
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark rounded">
                        <a class="navbar-brand" href="#"><img src="../img/Untitled-2.png" alt="" width="100px" height="50px"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbars " aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="../index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Institutes</a>
                                </li>
                                <li class="nav-item dropdown menu-area">
                                    <a class="nav-link dropdown-toggle" href="#" id="mega-one" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Courses
                                    </a>
                                    <div class="dropdown-menu mega-area" aria-labelledby="mega-one">

                                        <div class="row">
                                            <div class="col-sm-6 col-lg-3">

                                                <a href="Accounting%20nad%20Finance.html" class="dropdown-item">Accounting and finance</a>
                                                <a href="#" class="dropdown-item">Aeronautical & <br>Manufacturing Engineering</a>
                                                <a href="#" class="dropdown-item">Agriculture & Forestry</a>
                                                <a href="#" class="dropdown-item">Anatomy & Physiologic</a>
                                                <a href="#" class="dropdown-item">Anthropology</a>
                                                <a href="#" class="dropdown-item">Archaeology</a>
                                                <a href="#" class="dropdown-item">Art & Design</a>
                                                <a href="#" class="dropdown-item">Architecture</a>
                                                <a href="#" class="dropdown-item">Biological Sciences</a>
                                                <a href="#" class="dropdown-item">Building</a>
                                                <a href="#" class="dropdown-item">Business & <br>Management Studies</a>
                                                <a href="#" class="dropdown-item">Celtic Studies</a>
                                                <a href="#" class="dropdown-item">Chemical Engineering</a>
                                                <a href="#" class="dropdown-item">Chemistry</a>
                                                <a href="#" class="dropdown-item">Civil Engineering</a>
                                                <a href="#" class="dropdown-item">Classics & Ancient History</a>
                                                <a href="#" class="dropdown-item">Complementary Medicine</a>
                                                <a href="CoputerScience.html" class="dropdown-item">Computer Science</a>


                                            </div>
                                            <div class="col-sm-6 col-lg-3">

                                                <a href="#" class="dropdown-item">Cookery</a>
                                                <a href="#" class="dropdown-item">Creative Writing</a>
                                                <a href="#" class="dropdown-item">Criminology</a>
                                                <a href="#" class="dropdown-item">Dentistry</a>
                                                <a href="#" class="dropdown-item">Drama, Dance &<br> Cinematics</a>
                                                <a href="#" class="dropdown-item">East & <br>South Asian Studies</a>
                                                <a href="#" class="dropdown-item">Economics</a>
                                                <a href="#" class="dropdown-item">Education</a>
                                                <a href="#" class="dropdown-item">Electrical &<br>Electronic Engineering</a>
                                                <a href="#" class="dropdown-item">English</a>
                                                <a href="#" class="dropdown-item">Fashion,Clothing</a>
                                                <a href="#" class="dropdown-item">Film Making,Media,<br>Photography,Videography</a>
                                                <a href="#" class="dropdown-item">Food Science</a>
                                                <a href="#" class="dropdown-item">Forensic Science</a>
                                                <a href="#" class="dropdown-item">French,Spanish,<br>German,Hindi,Tamil</a>
                                                <a href="#" class="dropdown-item">Geography &<br> Environmental Sciences</a>
                                                <a href="#" class="dropdown-item">Geology</a>
                                                <a href="#" class="dropdown-item">General Engineering</a>

                                            </div>
                                            <div class="col-sm-6 col-lg-3">

                                                <a href="#" class="dropdown-item">Journalism & Media</a>
                                                <a href="#" class="dropdown-item">Hotel Management</a>
                                                <a href="#" class="dropdown-item">History,History of<br> Art, Architecture & Design</a>
                                                <a href="#" class="dropdown-item">Italian Language,<br>Iberian Languages/Hispanic Studies</a>
                                                <a href="#" class="dropdown-item">Land & Property Management</a>
                                                <a href="#" class="dropdown-item">Law</a>
                                                <a href="#" class="dropdown-item">Librarianship & <br>Information Management</a>
                                                <a href="#" class="dropdown-item">Marketing</a>
                                                <a href="#" class="dropdown-item">Materials Technology</a>
                                                <a href="#" class="dropdown-item">Mathematics</a>
                                                <a href="#" class="dropdown-item">Mechanical Engineering</a>
                                                <a href="#" class="dropdown-item">Medical Technology</a>
                                                <a href="#" class="dropdown-item">Medicine,Health</a>
                                                <a href="#" class="dropdown-item">Middle Eastern &<br> African Studies</a>
                                                <a href="#" class="dropdown-item">Music</a>
                                                <a href="#" class="dropdown-item">Nursing</a>
                                                <a href="#" class="dropdown-item">Occupational Therapy</a>
                                                <a href="#" class="dropdown-item">Optometry, Ophthalmology<br> & Orthoptics</a>


                                            </div>
                                            <div class="col-sm-6 col-lg-3">

                                                <a href="#" class="dropdown-item">Pharmacology & Pharmacy</a>
                                                <a href="#" class="dropdown-item">Philosophy</a>
                                                <a href="#" class="dropdown-item">Physics and Astronomy</a>
                                                <a href="#" class="dropdown-item">Physical Science</a>
                                                <a href="#" class="dropdown-item">Physiotherapy</a>
                                                <a href="#" class="dropdown-item">Politics</a>
                                                <a href="#" class="dropdown-item">Quantity Surveing</a>
                                                <a href="#" class="dropdown-item">Robotics</a>
                                                <a href="#" class="dropdown-item">Russian &<br> East European Languages</a>
                                                <a href="#" class="dropdown-item">Social Work,Sociology</a>
                                                <a href="#" class="dropdown-item">Psychology,Counseling</a>
                                                <a href="#" class="dropdown-item">Politics</a>
                                                <a href="#" class="dropdown-item">Sports Science</a>
                                                <a href="#" class="dropdown-item">Theology & <br>Religious Studies</a>
                                                <a href="#" class="dropdown-item">Town & Country Planning <br>and Landscape Design</a>
                                                <a href="#" class="dropdown-item">Veterinary Medicine</a>

                                            </div>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<main>
    <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title" id="certh3">Admin Panel</h3>
                <div class="breadcrumbs-custom-decor"></div>
            </div>
            <div class="box-transform" style="background-image: url(../img/md-duran-1VqHRwxcCCw-unsplash.jpg);"></div>
        </div>
        <div class="container" id="bread">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <i class="fas fa-arrow-right"></i>
                <li class="active">Admin Panel</li>
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
        <div class="col-md-4">
            <img src="../img/36679927_1665761563473646_2521650409869672448_n.jpg" alt="">
        </div>
        <div class="col-md-8" style="background-color:lightgrey">
            <form class="ui form" action="action.php" method="post" enctype="multipart/form-data" style="margin-left:10px;margin-top: 5px ">
                <input type="hidden" name="id" value="<?= $id; ?>">
                <h4 class="ui dividing header">Fill Your Details Here</h4>
                <div class="two fields form-group">
                    <div class="field form-group">
                        <label>Institute Name</label>
                        <div class="field form-group">
                            <input type="text" name="name" value="<?= $name; ?>" class="form-control" placeholder="enter institute name">
                        </div>
                    </div>
                    <div class="field form-group">
                        <label>Course name</label>
                        <div class="field form-group">
                            <input type="text" name="cname" value="<?= $cname; ?>" class="form-control" placeholder="enter course name">
                        </div>
                    </div>
                </div>

                <div class="two fields form-group">
                    <div class="field form-group">
                        <label>Course Name</label>
                        <div class="field form-group">
                            <select class="ui fluid dropdown form-control"  name="catogary" value="<?= $catogary; ?>">
                                <option selected hidden>Select Course Catogary</option>
                                <option value="Accounting and finance">Accounting and finance</option>
                                <option value="Aeronautical & Manufacturing Engineering">Aeronautical & Manufacturing Engineering</option>
                                <option value="Agriculture & Forestry">Agriculture & Forestry</option>
                                <option value="Anatomy & Physiologic">Anatomy & Physiologic</option>
                                <option value="Anthropology">Anthropology</option>
                                <option value="Archaeology">Archaeology</option>
                                <option value="Art & Design">Art & Design</option>
                            </select>
                        </div>
                    </div>
                    <div class="field form-group">
                        <label>Course Type</label>
                        <div class="field form-group">
                            <select class="ui fluid dropdown form-control"  name="type" value="<?= $type; ?>">
                                <option selected hidden>Select Course Type</option>
                                <option value="Certificate">Certificate</option>
                                <option value="Diploma">Diploma</option>
                                <option value="Degree">Degree</option>
                                <option value="Professional Qualified">Professional Qualified</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="two fields form-group">
                    <div class="field form-group">
                        <label>Course Description</label>
                        <div class="field form-group">
                            <div class="form-group">
                                <input type="text" name="description" value="<?= $description; ?>" class="form-control" placeholder="enter course description">
                            </div>
                        </div>
                    </div>
                    <div class="field form-group">

                        <label>Minimum Qualifications</label>
                        <div class="field form-group">
                            <input type="text" name="qualification" value="<?= $qualification; ?>" class="form-control" placeholder="enter Minimum qualification">
                        </div>
                    </div>
                </div>


                <div class="two fields form-group">
                    <div class="field form-group">
                        <label>Enter Payment Method</label>
                        <div class="field form-group">
                            <input type="text" name="payment" value="<?= $payment; ?>" class="form-control" placeholder="enter payment method">

                        </div>
                    </div>
                    <div class="field form-group">
                        <label>Course Content</label>
                        <div class="field form-group">
                            <input type="text" name="content" value="<?= $content; ?>" class="form-control" placeholder="enter course content">
                        </div>
                    </div>
                </div>

                <div class="two fields form-group">
                    <div class="field form-group">
                        <label>Select Duration</label>
                        <div class="field form-group">
                            <select class="ui fluid dropdown form-control"  value="<?= $duration; ?>" name="duration" >
                                <option selected hidden>Select Duration</option>
                                <option value="1 Month">1 Month</option>
                                <option value="3 Month">3 Month</option>
                                <option value="6 Month">6 Month</option>
                                <option value="9 Month">9 Month</option>
                                <option value="1 Year">1 Year</option>
                                <option value="2 Year">2 Year</option>
                                <option value="3 Year">3 Year</option>
                                <option value="4 Year">4 Year</option>
                                <option value="5 Year">5 Year</option>
                            </select>
                        </div>
                    </div>
                    <div class="field form-group">
                        <label>Cost</label>
                        <input type="text" name="cost" value="<?= $cost; ?>" class="form-control" placeholder="cost">
                    </div>
                </div>

                <div class="two fields form-group">

                    <div class="field form-group">
                        <label>Contact Details</label>
                        <input type="phone" name="phone" value="<?= $phone; ?>" class="form-control" placeholder="enter contact details">

                    </div>
                    <div class="field form-group">
                        <label>Choose image</label>
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
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10 bg-light mt-2 rounded">
                <h2>Search your data</h2>
                <hr>
                <div class="class form-inline">
                    <label for="search" class="font-weight-bold lead text-dark">Search Record</label>&nbsp;
                    <div class="ui category search">
                        <div class="ui icon input">
                            &nbsp;<i class="fa fa-search"></i>
                            <input class="prompt form-control form-control-lg border-info" type="text" name="search" id="search_text" placeholder="Search course...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php
            include 'config.php';
            $stmt=$conn->prepare("SELECT * FROM crud");
            $stmt->execute();
            $result=$stmt->get_result();
     ?>
        <table class="ui celled table table-bordered table-hover" style="font-size: 12px" id="table-data">
            <thead>
            <tr><th>#</th>
                <th>Institute Name</th>
                <th>Institute image</th>
                <th>Course Name</th>
                <th>Course Catogary</th>
                <th>Course Type</th>
                <th>Course Description</th>
                <th>payment Method</th>
                <th>Minimum Qualification</th>
                <th>Course Content</th>
                <th>Duration</th>
                <th>Cost</th>
                <th>Contact Details</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php while($row=$result->fetch_assoc()){ ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['name']; ?></td>
                    <td><img src="<?= $row['photo']; ?>" alt="" width="25px"></td>
                    <td ><?= $row['cname']; ?></td>
                    <td><?= $row['catogary']; ?></td>
                    <td><?= $row['type']; ?></td>
                    <td ><?= $row['description']; ?></td>
                    <td><?= $row['payment']; ?></td>
                    <td><?= $row['qualification']; ?></td>
                    <td><?= $row['content']; ?></td>
                    <td><?= $row['duration']; ?></td>
                    <td><?= $row['cost']; ?></td>
                    <td><?= $row['phone']; ?></td>
                    <td>
                        <a href="details.php?details=<?= $row['id']; ?>" class="badge badge-primary p-2">Details</a>
                        <a href="action.php?delete=<?= $row['id']; ?>" class="badge badge-info p-2" onclick="return confirm('Do you want delete this record?');">Delete</a>
                        <a href="index.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2">Edit</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>




    <footer class="footer">
        <div class="container bottom_border">
            <div class="row">
                <div class=" col-sm-4 col-md col-sm-4  col-12 col">
                    <img src="img/Untitled-3.png" alt="" width="100px" height="100px">
                    <!--headin5_amrc-->
                    <p class="mb10">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <p><i class="fa fa-location-arrow"></i> 9878/25 sec 9 rohini 35 </p>
                    <p><i class="fa fa-phone"></i>  +91-9999878398  </p>
                    <p><i class="fa fa fa-envelope"></i> info@example.com  </p>


                </div>


                <div class=" col-sm-4 col-md  col-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc">
                        <li><a href="http://webenlance.com">Image Rectoucing</a></li>
                        <li><a href="http://webenlance.com">Clipping Path</a></li>
                        <li><a href="http://webenlance.com">Hollow Man Montage</a></li>
                        <li><a href="http://webenlance.com">Ebay & Amazon</a></li>
                        <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
                        <li><a href="http://webenlance.com">Image Cropping</a></li>
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>


                <div class=" col-sm-4 col-md  col-6 col">
                    <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
                    <!--headin5_amrc-->
                    <ul class="footer_ul_amrc">
                        <li><a href="http://webenlance.com">Remove Background</a></li>
                        <li><a href="http://webenlance.com">Shadows & Mirror Reflection</a></li>
                        <li><a href="http://webenlance.com">Logo Design</a></li>
                        <li><a href="http://webenlance.com">Vectorization</a></li>
                        <li><a href="http://webenlance.com">Hair Masking/Clipping</a></li>
                        <li><a href="http://webenlance.com">Image Cropping</a></li>
                    </ul>
                    <!--footer_ul_amrc ends here-->
                </div>



            </div>
        </div>


        <div class="container">

            <p class="text-center">Copyright @2019 | Designed by Chamikara Jayasekara <a href="#"></a></p>

            <ul class="social_footer_ul">
                <li class="fb"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="twt"><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li class="ln"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                <li class="insta"><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
            <!--social_footer_ul ends here-->
        </div>

    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/semantic.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="fontawesome-free-5.11.2-web/js/fontawesome.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../js/dropdown.js"></script>
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
</main>
</body>
</html>