<?php
include 'dbh.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>MyPath</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/semantic.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/others/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../css/others/owl.carousel.min.css">
    <script src="../css/js/jssor.slider-27.5.0.min.js"></script>
    <script src="../css/js/jssor.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Anton|Bahianita|Blinker|Bree+Serif|DM+Sans|Exo+2|Farro|Fjalla+One|Grenze|Lexend+Deca|Lexend+Tera|Libre+Caslon+Text|Lobster|Open+Sans|Open+Sans+Condensed:300|PT+Sans+Narrow|Pacifico|Pathway+Gothic+One|Playfair+Display|Righteous|Roboto+Condensed|Russo+One|Saira+Stencil+One|Sniglet|Teko|Ubuntu+Condensed&display=swap" rel="stylesheet">

<body>
<header>
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light bg-dark rounded">
                        <a class="navbar-brand" href="#"><img src="img/Untitled-2.png" alt="" width="100PX" height="50PX"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbars " aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Home</a>
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

                                                <a href="assests/Accounting%20nad%20Finance.html" class="dropdown-item">Accounting and finance</a>
                                                <a href="#" class="dropdown-item">Aeronautical & <br>Manufacturing Engineering</a>
                                                <a href="#" class="dropdown-item">Agriculture & Forestry</a>
                                                <a href="#" class="dropdown-item">Anatomy & Physiologys</a>
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
                                                <a href="assests/CoputerScience.html" class="dropdown-item">Computer Science</a>


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