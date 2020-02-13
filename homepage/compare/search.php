<?php
include 'header.php';
?>
<main>
    <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title" id="certh3">Compare Courses</h3>
                <div class="breadcrumbs-custom-decor"></div>
            </div>
            <div class="box-transform" style="background-image: url(../img/md-duran-1VqHRwxcCCw-unsplash.jpg);"></div>
        </div>
        <div class="container" id="bread">
            <ul class="breadcrumbs-custom-path">
                <li><a href="../index.php">Home</a></li>
                <i class="fas fa-arrow-right"></i>
                <li class="active">Compare Courses</li>
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
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 bg-light mt-2 rounded">
                        <h4>Compare With</h4>
                        <hr>
                        <div class="class form-inline">
                         <div class="ui category search">
                                <div class="ui icon input">
                                    <input class="prompt form-control form-control-lg border-info" type="text" name="search" id="search_text" onkeyup="filterFunction()" placeholder="Search course...">
                                </div>
                             <i class="fa fa-warning">&nbsp;&nbsp;Please enter course name and institute ex- AAT-JMC</i>  <hr>
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
                <div class="col-md-11">

                <table class="ui celled table table-bordered table-hover" style="font-size: 12px" id="table-data">
<!--                    <tbody>-->
<!--                    --><?php //while($row=$result->fetch_assoc()){ ?>
<!--                    <tbody>-->
<!---->
<!--                    <th>Institute name</th>-->
<!--                    <td>--><?//= $row['name']; ?><!--</td>-->
<!---->
<!--                    </tbody>-->
<!--                    <tbody>-->
<!---->
<!--                    <th>Course Name</th>-->
<!--                    <td >--><?//= $row['cname']; ?><!--</td>-->
<!---->
<!--                    </tbody>-->
<!--                    --><?php //} ?>
<!--                    </tbody>-->
                </table>
            </div>
            </div>
        </div>
        <div class='col-md-2 mt-3'>
           <h6>You have to search the course name and the institute
               <hr>
           Ex-CIMA-WISDOM , AAT-JMC,Bsc.Information technology-SLITT</h6>

        </div>
        <div class="col-md-5" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 bg-light mt-2 rounded">
                        <h4>Compare With</h4>

                        <hr>
                        <div class="class form-inline">
                            <div class="ui category search">
                                <div class="ui icon input">
                                    <input class="prompt form-control form-control-lg border-info" type="text" name="search" id="search_tex" placeholder="Search course...">
                                </div><i class="fa fa-warning">&nbsp;&nbsp;Please enter course name and institute ex- CIMA-ACHIEVERS</i>
                                <hr>
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
                <div class="col-md-11">
                <table class="ui celled table table-bordered table-hover" style="font-size: 12px" id="table-dat">
                    <tbody>
                    <?php while($row=$result->fetch_assoc()){ ?>
<!--                    <tbody>-->
<!---->
<!--                    <th>Institute name</th>-->
<!--                    <td>--><?//= $row['name']; ?><!--</td>-->
<!---->
<!--                    </tbody>-->
<!--                    <tbody>-->
<!---->
<!--                    <th>Course Name</th>-->
<!--                    <td >--><?//= $row['cname']; ?><!--</td>-->
<!---->
<!--                    </tbody>-->

                    <?php } ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div></div>
    </div>



</main>
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

        $(document).ready(function(){
            $("#search_tex").keyup(function(){
                var search = $(this).val();
                $.ajax({
                    url:'actions.php',
                    method:'post',
                    data:{query:search},
                    success:function(response){
                        $("#table-dat").html(response);

                    }
                });
            });
        });

    </script>
</main>
</body>
</html>
