
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myPathLk</title>
    <link rel="stylesheet" href="db.css">
    <link rel="stylesheet" href="../css/semantic.min.css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="../css/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" href="../css/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>



    <form action="search.php" method="POST">
        <input type="text" name="search" placeholder="Search">
        <button type="submit" name="submit-search">Search</button>
    </form>
    <h1>Article page</h1>
    

    <div class="article-container">
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
                    echo "<div class='article-box'>
                
                
                        <h3>".$row['name']."</h3>
                        <p>".$row['cname']."</p>
                        <p>".$row['catogary']."</p>
                        <p>".$row['type']."</p>
                        <p>".$row['description']."</p>
                        <p>".$row['qualification']."</p>
                        <p>".$row['content']."</p>
                        <p>".$row['duration']."</p>
                        <p>".$row['cost']."</p>
                         <p>".$row['payment']."</p>
                         <p>".$row['phone']."</p>
                         <img src='".$row['photo']."' alt='' width='100px' height='50px'>
                    </div>";
                }
            }
        ?>
    </div>

</main>

<script src="../js/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/semantic.min.js"></script>
<script src="../css/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/isotope.pkgd.min.js"></script>
<!-- <script>
    $('.portfoli-item').isotope({
        itemSelector: '.item',
        layoutMode: 'fitRows'
    });
    $('.portfolio-meny ul li').click(function () {
        $('.portfolio-meny ul li').removeClass('active');
        $(this).addClass('active');

        var selector = $(this).attr('data-filter');
        $('.portfoli-item').isotope({
            filter: selector
        });
        return false;
    });
</script> -->
<!-- <script>

    $('nav .dropdown').hover(function(){
        var $this = $(this);
        $this.addClass('show');
        $this.find('> a').attr('aria-expanded', true);
        $this.find('.dropdown-menu').addClass('show');
    }, function(){
        var $this = $(this);
        $this.removeClass('show');
        $this.find('> a').attr('aria-expanded', false);
        $this.find('.dropdown-menu').removeClass('show');
    });


    $('#dropdown04').on('show.bs.dropdown', function () {
        console.log('show');
    });

</script> -->
</body>
</html>