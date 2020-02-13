<?php
    require 'config.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="300">
    <title>Filter System</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/semantic.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../assests/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<header>
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark rounded">
                        <a class="navbar-brand" href="#"><img src="../../img/Untitled-2.png" alt="" width="100PX" height="50PX"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbars " aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="../index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Institutes</a>
                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>

<body>
<section class="bg-gray-7">
    <div class="breadcrumbs-custom box-transform-wrap context-dark">
        <div class="container">
            <h3 class="breadcrumbs-custom-title" id="certh3">Course Filter Compare</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url(../img/md-duran-1VqHRwxcCCw-unsplash.jpg);"></div>
    </div>
    <div class="container mb-2" id="bread">
        <ul class="breadcrumbs-custom-path">
            <li><a href="../index.php">Home</a></li>
            <i class="fa fa-arrow-right"></i>
            <li><a href="#">Courses Filter Compare</a></li>
        </ul>
    </div>
</section>
<p class="text-center text-li4 p-2" style="font-size: 18px">You can filter all the courses in Sri Lanka according to Course Category and Course Name</p>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 ">
                <div class="row">
                    <div class="col-md-12 ">
                        <hr>
                        <h6 class="text-info">Select by Course Category</h6>
                        <hr>
                        <ul class="list-group">
                            <?php
                            $sql="SELECT DISTINCT catogary FROM crud ORDER BY catogary";
                            $result=$conn->query($sql);
                            while($row=$result->fetch_assoc()){
                                ?>
                                <li class="list-group-item">
                                    <div class="form-check">
                                        <label class="form-check-label" style="font-size: 12px">
                                            <input type="checkbox" class="form-check-input product_check"
                                                   value="<?= $row['catogary']; ?>" id="catogary"><?= $row['catogary'];
                                            ?>
                                        </label>
                                        <?php } ?>

                                    </div>
                                </li>

                        </ul>
                    </div>
<!--                <div class="col-md-6">-->
<!--                    <hr>-->
<!--                    <h6 class="text-info">Select by Course Name</h6>-->
<!--                    <hr>-->
<!--                    <ul class="list-group">-->
<!--                        --><?php
//                        $sql="SELECT DISTINCT cname FROM crud ORDER BY cname";
//                        $result=$conn->query($sql);
//                        while($row=$result->fetch_assoc()){
//                            ?>
<!--                            <li class="list-group-item">-->
<!--                                <div class="form-check">-->
<!--                                    <label class="form-check-label" style="font-size: 12px">-->
<!--                                        <input type="checkbox" class="form-check-input product_check"-->
<!--                                               value="--><?//= $row['cname']; ?><!--" id="cname">--><?//= $row['cname'];
//                                        ?>
<!--                                    </label>-->
<!--                                </div>-->
<!--                            </li>-->
<!--                        --><?php //} ?>
<!--                    </ul></div>-->

                </div>
            </div>
            <div class="col-lg-9">
                        <h5 class="text-center" id="textChange">All products</h5>
                        <hr>
                        <div class="text-center">
                            <img src="images/loader.gif" alt="" id="loader" width="200" style="display:none;">
                        </div>
                        <div class="row" id="result">
                            <?php
                            $sql="SELECT * FROM crud";
                            $result=$conn->query($sql);
                            while($row=$result->fetch_assoc()){
                                ?>
                                <div class="col-md-3 mb-2">
                                    <div class="card" >
                                        <div class="card border-secondary">
                                            <img src="<?= $row['photo']; ?>" alt="" class="card-img-top ml-3 mt-2" style="height: 50px;width: 100px ">
                                            <div class="card-img-overlay">
                                            </div>

                                            <div class="card-body">
                                                <h6 class="text-light bg-info text-center rounded p-1"><?= $row['name_ins'];?></h6>
                                                <p>
                                                <hr>   Institute Name:<br>
                                                 <?= $row['name']; ?>
                                                <hr>  Category: <br> <?= $row['catogary']; ?>
                                                <hr>  Course Level: <br> <?= $row['type']; ?>
                                                <hr>   Duration: <br> <?= $row['duration']; ?>
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

    <script type="text/javascript">   
        $(document).ready(function(){
              
              $(".product_check").click(function(){
                $("#loader").show();

                var action = 'data';
                var cname = get_filter_text('cname');
                var name = get_filter_text('name');
                var type = get_filter_text('type');
                var catogary = get_filter_text('catogary');
                var duration = get_filter_text('duration');

                $.ajax({
                    url:'action.php',
                    method:'POST',
                    data:{action:action,cname:cname,name:name,type:type,catogary:catogary,duration:duration},
                    success:function(response){
                        $("#result").html(response);
                        $("#loader").hide();
                        $("#textChange").text("Filtered Products");
                    }
                });
              });
             
              function get_filter_text(text_id){
                  var filterData = [];
                  $('#'+text_id+':checked').each(function(){
                    filterData.push($(this).val());

                  });
                 return filterData;
                  onChange=doReload(this.value);
              }
        });
    </script>

<script src="../../js/bootstrap/bootstrap.min.js"></script>
<script src="../../js/semantic.min.js"></script>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/jquery-ui.min.js"></script>
<script src="../../js/dropdown.js"></script>
</body>
</html>
