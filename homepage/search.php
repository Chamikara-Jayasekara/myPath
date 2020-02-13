<?php
include 'header.php';
?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="../assests/style1.css">
<link rel="stylesheet" href="../css/jquery-ui.min.css">
<section class="bg-gray-7">
    <div class="breadcrumbs-custom box-transform-wrap context-dark">
        <div class="container">
            <h3 class="breadcrumbs-custom-title" id="certh3">Courses in Sri Lanka</h3>
            <div class="breadcrumbs-custom-decor"></div>
        </div>
        <div class="box-transform" style="background-image: url(../img/md-duran-1VqHRwxcCCw-unsplash.jpg);"></div>
    </div>
    <div class="container" id="bread">
        <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>
            <i class="fas fa-arrow-right"></i>
            <li class="active">Courses in Sri Lanka</li>
        </ul>
    </div>
</section>

<div class="row mt-3">
    <div class="col-md-4">
        <div class="row">
        <div class="col sidebar-offcanvas">
            <div class="ml-1">
                <div class="left_search_tab" style="border: 1px solid #0d71bb;padding: 25px">
                    <div class="ui blue message">Search Courses</div>
                    <form action="search.php" method="POST">
                        <div class="ui category search">
                            <div class="ui icon input">
                                <input class="prompt form-control form-control-lg border-info" type="text" name="search"  placeholder="Search course...">
                                &nbsp;&nbsp;<button type="submit" name="submit-search">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>

    <div class="col-md-7 ">
        <section class="bg-gray-7 ml-0 ">
            <div class="container" id="bread">
                <ul class="breadcrumbs-custom-path">
                    <li><a href="#">Courses</a></li>
                    <i class="fas fa-arrow-right"></i>
                    <li class="active">Keyword</li>
                </ul>
            </div>
        </section>
        <div class="article-container ml-4" >
            <?php
            if (isset($_POST['submit-search'])) {
                $search = mysqli_real_escape_string($conn, $_POST['search']);
                $sql = "SELECT * FROM crud WHERE name LIKE '%$search%' OR cname LIKE '%$search%'
                                OR catogary LIKE '%$search%' OR type LIKE '%$search%' OR name_ins LIKE '%$search%'";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);

                echo "There are ".$queryResult." courses";
                if ($queryResult > 0){
                    while ($row = mysqli_fetch_assoc($result)){
                        echo "<a href='details.php?title=".$row['name']."&date=".$row['cname']."&adescription=".$row['description']."&aqualification=".$row['qualification']."&acontent=".$row['content']."&aduration=".$row['duration']."&acost=".$row['cost']."&apayment=".$row['payment']."&aphone=".$row['phone']."&aphoto=".$row['photo']."'>
                                <div class='article-box mb-2 mt-1 bg-light'>
                                    <div class='row'>
                                        <div class='col-md-2'>
                                        <img src='".$row['photo']."' alt='' width='100px' height='50px'>
                                        </div>
                                        <div class='col-md-10'>
                                            <h2 class='text-info' id='search_heading'>".$row['cname']."</h2>
                                            <div class='row'>
                                               <div class='col-md-1'> <i class=\"fas fa-location-arrow fa-1x ml-4\"></i></div>
                                              <div class='col-md-3'>
                                                <p>".$row['name']."</p>
                                                </div>
                                               <div class='col-md-1'> <i class=\"fas fa-book-reader fa-1x ml-4\"></i></div>
                                               <div class='col-md-3'>
                                                <p>".$row['catogary']."</p>
                                                </div>
                                               <div class='col-md-1'> <i class=\"fas fa-user-graduate fa-1x ml-4\"></i></div>
                                               <div class='col-md-3'>
                                                <p>".$row['type']."</p>
                                                </div>
                                            </div>
                                        </div>
                                   </div>
                                </div></a>";
                    }
                } else{
                    echo "There are no results matching your search!";
                }
            }
            ?>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/semantic.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script>
    $(document).ready(function () {
        $(".product_check").click(function () {
            var action ='data';
            var catogary = get_filter_text('catogary');

            $.ajax({
                url:'actions.php',
                method:'POST',
                data:{action:action,catogary:catogary},
                success:function (response);
                $("#result").html(response);
                $("#textChange").text("Filtered Results");

                }
            });
        });

        function get_filter_text(text_id) {
            var filterData = [];
            $('#'+text_id+':checked').each(function(){
                filterData.push($(this).val());
            });
            return filterData;
        }
    });
</script>
</body>
</html>

