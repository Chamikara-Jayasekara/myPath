<?php
    include 'dbh.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>myPathLk</title>

    <link rel="stylesheet" href="../css/semantic.min.css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="../css/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" href="../css/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
</head>
<body>
<header role="banner">

    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container">
            <img src="../img/Untitled-2.png" alt="" width="100px" height="50px">
            <button class="navbar-toggler bg-info" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-light" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Uniiversities</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown05">
                            <a class="dropdown-item" href="#">Goverment Universities</a>
                            <a class="dropdown-item" href="#">Private Institutes</a>
                            <a class="dropdown-item" href="#">Proffesional Education Institutes</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="courses.html">Undergraduate</a>
                            <a class="dropdown-item" href="courses.html">Graduate Diplomas</a>
                            <a class="dropdown-item" href="courses.html">Diploma</a>
                            <a class="dropdown-item" href="courses.html">Cetificatest</a>
                        </div>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav absolute-right">
                    <li>
                        <a href="login.html">Login</a> / <a href="register.html">Register</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>
<main>
    <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
            <div class="container">
                <h3 class="breadcrumbs-custom-title" id="certh3">Degree Courses</h3>
                <div class="breadcrumbs-custom-decor"></div>
            </div>
            <div class="box-transform" style="background-image: url(../img/md-duran-1VqHRwxcCCw-unsplash.jpg);"></div>
        </div>
        <div class="container" id="bread">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <i class="fas fa-arrow-right"></i>
                <li class="active">Degree Courses</li>
            </ul>
        </div>
    </section>
    
</main>

<script src="../js/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/semantic.min.js"></script>
<script src="../css/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/isotope.pkgd.min.js"></script>
<script>
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
</script>
<script>

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

</script>
</body>
</html>