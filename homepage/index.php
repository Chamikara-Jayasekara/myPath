<?php
    include 'header.php';
?>
<div class="row justify-content-center mt-4 mb-2 row_2">
    <div class="col-lg-8">
        <div class="main_title">
            <h2 class="mb-2 text-info" style="font-size: 36px;line-height: 30px;font-weight: bold;">Search What or Where, You Want To Study?</h2>
        </div>
    </div>
</div>
<div class="row justify-content-center row_3" id="row2">
    <div class="col-md-10">
        <div class="ui placeholder segment morpheus-den-gradient" style="border: 2px solid #0d71bb">
            <div class="ui four column very relaxed stackable grid ">
                <div class="column">

                    <form action="search.php" method="POST">
                        <div class="ui category search">
                            <div class="ui icon input">
                                <input class="prompt form-control form-control-lg border-info" type="text" name="search"  placeholder="Search course...">
                            </div>
                        </div>
                        <button class="ui teal basic button mt-4" type="submit" name="submit-search">Search Courses</button>
                    </form>

                </div>
                <div class="column">
                    <div class="ui green message">Compare Courses</div>
                    <a class="ui inverted red button mt-4" href="compare/search.php" type="" name="">compare Courses</a>
                </div>
                <div class="column">
                    <div class="ui violet message">Filter Courses</div>
                    <a class="ui inverted yellow button mt-4" href="filtercompare/index.php" type="" name="">Filter Courses</a>
                </div>
                <div class="middle aligned column">
                    <form action="search.php" method="POST">
                        <div class="ui category search">
                            <div class="ui icon input">
                                <input class="prompt form-control form-control-lg border-info" type="text" name="search"  placeholder="Search course...">
                            </div>
                        </div>
                        <button class="ui teal basic button mt-4" type="submit" name="submit-search">Search Institute</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    jssor_1_slider_init = function() {

        var jssor_1_SlideoTransitions = [
            [{b:-1,d:1,o:-0.7}],
            [{b:900,d:2000,x:-379,e:{x:7}}],
            [{b:900,d:2000,x:-379,e:{x:7}}],
            [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
        ];

        var jssor_1_options = {
            $AutoPlay: 1,
            $SlideDuration: 800,
            $SlideEasing: $Jease$.$OutQuint,
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 3000;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
<style>
    /*jssor slider loading skin spin css*/
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    /*jssor slider bullet skin 032 css*/
    .jssorb032 {position:absolute;}
    .jssorb032 .i {position:absolute;cursor:pointer;}
    .jssorb032 .i .b {fill:#fff;fill-opacity:0.7;stroke:#000;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:0.25;}
    .jssorb032 .i:hover .b {fill:#000;fill-opacity:.6;stroke:#fff;stroke-opacity:.35;}
    .jssorb032 .iav .b {fill:#000;fill-opacity:1;stroke:#fff;stroke-opacity:.35;}
    .jssorb032 .i.idn {opacity:.3;}

    /*jssor slider arrow skin 051 css*/
    .jssora051 {display:block;position:absolute;cursor:pointer;}
    .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
    .jssora051:hover {opacity:.8;}
    .jssora051.jssora051dn {opacity:.5;}
    .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
</style>
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:400px;overflow:hidden;visibility:hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:400px;overflow:hidden;">
        <div>
            <img data-u="image" src="../img/slide1.jpg" />
        </div>
        <div>
            <img data-u="image" src="../css/img/slide4.jpg" />
        </div>
        <div>
            <img data-u="image" src="../img/slide3.jpg" />

        </div>
    </div>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:16px;height:16px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
</div>


<section class="feature_area section_gap_top mb-4 mt-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="title">
                    <h2 class="mb-3 text-info" style="font-size: 36px;line-height: 30px;font-weight: bold;">Awesome Feature</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon">
                            <i class="fas fa-certificate fa-2x"></i>
                        </div>

                        <div class="desc">
                            <h4 class="mt-3 mb-2" style="font-size: 20px;font-weight: 500;">Courses</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher fa-2x"></i>
                        </div>

                        <div class="desc">
                            <h4 class="mt-3 mb-2" style="font-size: 20px;font-weight: 500;">Carrier Guiding</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-6">
                    <div class="single_feature">
                        <div class="icon">
                            <i class="fas fa-graduation-cap fa-2x"></i>
                        </div>

                        <div class="desc">
                            <h4 class="mt-3 mb-2" style="font-size: 20px;font-weight: 500;">Scholarships</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="welcometomypath section-padding-0-100">
    <div class="row">
        <div class="col-md-6">
            <div class="about-content text-center border-info">
                <h2>Welcome to <br><span>MyPath</span></h2>
                <div class="row">
                    <div class="col-md-2"></div>
                <div class="col-md-8 mb-3">
                    <p>The website is totally for educational purposes.From this website we are trying to give an idea about the pathways to the students
                    for a better future. You can get information's about the relevant course abd you can apply those courses through this website.
                    We wish to give scholarships for the local courses, make a best guide for the students and enrich your life with online income sources
                    .Beside we help to find your carrier as your wish.Your goal is our responsibility.Come join with us plan your future</p>
                </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" id="welcomeimage">
        </div>
    </div>
</section>


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
<script src="../js/dropdown.js"></script>
<script type="text/javascript">jssor_1_slider_init();</script>
</body>
</html>
