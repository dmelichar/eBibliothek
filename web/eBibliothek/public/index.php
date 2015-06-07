<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="utf-8">
    <title>eBibliothek</title>
    <link rel="stylesheet" href="css/master.css" type="text/css" />
    <link rel="stylesheet" href="css/login-register.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" type="text/css" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" />
    <link rel="stylesheet" href="css/slider.css" type="text/css" />
    <!-- IE support of HTML5 Elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
</head>

<body>
    <header>
        <!-- HEADER 1 -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <!-- Mobile -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle login & register</span>
                        <span class="glyphicon glyphicon-home" aria-hidden="true" style="color:white"></span>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="glyphicon glyphicon-align-justify" aria-hidden="true" style="color:white"></span>
                    </button>
                    <a class="navbar-brand" rel="home" href="#" title="eBibliothek"><img src="./images/logo_2.png"></img></a>
                </div>
                <!-- End Mobile -->
                <!-- Search and Register -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <div class="col-sm-3 col-md-3 pull-right">
                        <div class="input-group">
                            <div class="input-group-btn">
                                <button class="btn btn-link" href="#" id="search"><i class="glyphicon glyphicon-search"></i></button>
                                <button class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Login or Register</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Search and Register -->
            </div>
        </nav>
        <!-- END HEADER 1 -->
        </header/>
        <header>
            <!-- HEADER 2 -->
            <nav class="navbar navbar-default navbar-lower navbar-ex2-collapse" role="navigation">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Products</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <!-- END HEADER 2 -->
        </header>
        <!-- LOGIN MODAL BEGIN -->
        <div class="modal fade login" id="loginModal">
            <div class="modal-dialog login animated">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login with</h4>
                    </div>
                    <div class="modal-body">
                        <!-- LOGIN -->
                        <div class="box">
                            <div class="content">
                                <div class="social">
                                    <a class="circle facebook" href="#">
                                        <i class="fa fa-twitter fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="#">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="#">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                    <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="#" accept-charset="UTF-8">
                                        <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                        <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                        <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- REGISTER -->
                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                                <div class="form">
                                    <form method="post" html="{:multipart=>true}" data-remote="true" action="#" accept-charset="UTF-8">
                                        <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                                        <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                        <input id="password_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                                        <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to
                  <a href="javascript: showRegisterForm();">create an account</a> ?
                </span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                            <span>Already have an account?</span>
                            <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END LOGIN MODAL -->
        <!-- CAROUSEL-->
        <div class="wrapper">
            <div id="ei-slider" class="ei-slider">
                <ul class="ei-slider-large">
                    <li>
                        <img src="http://placehold.it/500x329" alt="image01" />
                        <div class="ei-title">
                            <h2>Creative</h2>
                            <h3>Duet</h3>
                        </div>
                    </li>
                    <li>
                        <img src="http://placehold.it/500x329" alt="image02" />
                        <div class="ei-title">
                            <h2>Friendly</h2>
                            <h3>Devil</h3>
                        </div>
                    </li>
                    <li>
                        <img src="http://placehold.it/500x329" alt="image03" />
                        <div class="ei-title">
                            <h2>Tranquilent</h2>
                            <h3>Compatriot</h3>
                        </div>
                    </li>
                    <li>
                        <img src="http://placehold.it/500x329" alt="image04" />
                        <div class="ei-title">
                            <h2>Insecure</h2>
                            <h3>Hussler</h3>
                        </div>
                    </li>
                    <li>
                        <img src="http://placehold.it/500x329" alt="image05" />
                        <div class="ei-title">
                            <h2>Loving</h2>
                            <h3>Rebel</h3>
                        </div>
                    </li>
                    <li>
                        <img src="http://placehold.it/500x329" alt="image06" />
                        <div class="ei-title">
                            <h2>Passionate</h2>
                            <h3>Seeker</h3>
                        </div>
                    </li>
                    <li>
                        <img src="ihttp://placehold.it/500x329" alt="image07" />
                        <div class="ei-title">
                            <h2>Crazy</h2>
                            <h3>Friend</h3>
                        </div>
                    </li>
                </ul>
                <!-- ei-slider-large -->
                <ul class="ei-slider-thumbs">
                    <li class="ei-slider-element">Current</li>
                    <li><a href="#">Slide 1</a><img src="http://placehold.it/75x49" alt="thumb01" /></li>
                    <li><a href="#">Slide 2</a><img src="http://placehold.it/75x49" alt="thumb02" /></li>
                    <li><a href="#">Slide 3</a><img src="http://placehold.it/75x49" alt="thumb03" /></li>
                    <li><a href="#">Slide 4</a><img src="http://placehold.it/75x49" alt="thumb04" /></li>
                    <li><a href="#">Slide 5</a><img src="http://placehold.it/75x49" alt="thumb05" /></li>
                    <li><a href="#">Slide 6</a><img src="http://placehold.it/75x49" alt="thumb06" /></li>
                    <li><a href="#">Slide 7</a><img src="http://placehold.it/75x49" alt="thumb07" /></li>
                </ul>
                <!-- ei-slider-thumbs -->
            </div>
            <!-- ei-slider -->
        </div>
        <!-- wrapper -->
        <!-- END CARUOSEL-->
        <section id="imageOfThree" class="bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 imageOfThree-item">
                        <a href="#" class="imageOfThree-link" data-toggle="modal">
                            <div class="imageOfThree-hover">
                                <div class="imageOfThree-hover-content">
                                    <p class="text-muted">Some text</p>
                                </div>
                            </div>
                            <img src="http://placehold.it/400x300" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 imageOfThree-item">
                        <a href="#" class="imageOfThree-link" data-toggle="modal">
                            <div class="imageOfThree-hover">
                                <div class="imageOfThree-hover-content">
                                    <p class="text-muted">Some text</p>
                                </div>
                            </div>
                            <img src="http://placehold.it/400x300" class="img-responsive" alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 imageOfThree-item">
                        <a href="#" class="imageOfThree-link" data-toggle="modal">
                            <div class="imageOfThree-hover">
                                <div class="imageOfThree-hover-content">
                                    <p class="text-muted">Some text</p>
                                </div>
                            </div>
                            <img src="http://placehold.it/400x300" class="img-responsive" alt="">
                        </a>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <div class="container">
            <section id="newArrivals">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>New Arrivals</h3>
                    </div>
                    <div class="col-lg-6 text-right">
                        <a href="#" class="btn">Show all</a>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6 hero-feature">
                        <div class="thumbnail">
                            <img src="http://placehold.it/800x500" alt="">
                            <div class="caption">
                                <h3>Feature Label</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>
                                    <a href="#" class="btn download">Download now!</a> <a href="#" class="btn btn-default">More Info</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 hero-feature">
                        <div class="thumbnail">
                            <img src="http://placehold.it/800x500" alt="">
                            <div class="caption">
                                <h3>Feature Label</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>
                                    <a href="#" class="btn download">Download now!</a> <a href="#" class="btn btn-default">More Info</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 hero-feature">
                        <div class="thumbnail">
                            <img src="http://placehold.it/800x500" alt="">
                            <div class="caption">
                                <h3>Feature Label</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>
                                    <a href="#" class="btn download">Download now!</a> <a href="#" class="btn btn-default">More Info</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 hero-feature">
                        <div class="thumbnail">
                            <img src="http://placehold.it/800x500" alt="">
                            <div class="caption">
                                <h3>Feature Label</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p><a href="#" class="btn download">Download now!</a>
                                    <a href="#" class="btn btn-default">More Info</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="topRated">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Top Rated</h3>
                    </div>
                    <div class="col-lg-6 text-right">
                        <a href="#" class="btn">Show all</a>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6 hero-feature">
                        <div class="thumbnail">
                            <img src="http://placehold.it/800x500" alt="">
                            <div class="caption">
                                <h3>Feature Label</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>
                                    <a href="#" class="btn download">Download now!</a> <a href="#" class="btn btn-default">More Info</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 hero-feature">
                        <div class="thumbnail">
                            <img src="http://placehold.it/800x500" alt="">
                            <div class="caption">
                                <h3>Feature Label</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>
                                    <a href="#" class="btn download">Download now!</a> <a href="#" class="btn btn-default">More Info</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 hero-feature">
                        <div class="thumbnail">
                            <img src="http://placehold.it/800x500" alt="">
                            <div class="caption">
                                <h3>Feature Label</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>
                                    <a href="#" class="btn download">Download now!</a> <a href="#" class="btn btn-default">More Info</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 hero-feature">
                        <div class="thumbnail">
                            <img src="http://placehold.it/800x500" alt="">
                            <div class="caption">
                                <h3>Feature Label</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <p>
                                    <a href="#" class="btn download">Download now!</a> <a href="#" class="btn btn-default">More Info</a>
                                </p>
                            </div>
                        </div>
                    </div>
            </section>
            </div>
            <footer id="footer">
                <a href="#0" class="cd-top">Top</a>
                <div class="container">
                    <div class="row" id="footerInfo">
                        <div class="col-lg-12">
                            <div class="col-md-6">
                                <h4>About</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                            <div class="col-md-6">
                                <h4>Team Members</h4>
                                <div class="row" id="team-members">
                                    <div class="col-lg-12">
                                        <div class="col-md-2"><a href="mailto:bschmid@student.tgm.ac.at" class="team-members" id="SMIB">SMIB</a></div>
                                        <div class="col-md-2"><a href="mailto:rsimsek@student.tgm.ac.at" class="team-members" id="SIMR">SIMR</a></div>
                                        <div class="col-md-2"><a href="mailto:asoni@student.tgm.ac.at" class="team-members" id="SONA">SONA</a></div>
                                        <div class="col-md-2"><a href="mailto:jkispedo@student.tgm.ac.at" class="team-members" id="KISJ">KISJ</a></div>
                                        <div class="col-md-2"><a href="mailto:jkreutzer@student.tgm.ac.at" class="team-members" id="KREJ">KREJ</a></div>
                                        <div class="col-md-2"><a href="mailto:lsprung@student.tgm.ac.at" class="team-members" id="SPRL">SPRL</a></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="col-md-2"><a href="mailto@dhammerschmidt@student.tgm.ac.at" class="team-members" id="HAMD">HAMD</a></div>
                                        <div class="col-md-2"><a href="mailto:pwichert@student.tgm.ac.at" class="team-members" id="WICP">WICP</a></div>
                                        <div class="col-md-2"><a href="mailto:dbruendl01@studen.tgm.ac.at" class="team-members" id="BRUD">BRUD</a></div>
                                        <div class="col-md-2"><a href="mailto:dkocsi@student.tgm.ac.at" class="team-members" id="KOCD">KOCD</a></div>
                                        <div class="col-md-2"><a href="mailto:dboeheim@student.tgm.ac.at" class="team-members" id="BOED">BOED</a></div>
                                        <div class="col-md-2"><a href="mailto:ffaiku@student.tgm.ac.at" class="team-members" id="FAIF">FAIF</a></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-10 col-lg-offset-2">Project Manager &amp; Technical Advisor: <a href="mailto:dmelichar@student.tgm.ac.at" class="chef">Daniel Melichar</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <footer id="footerNav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            &copy; All rights reserved | Design insipired by Enzo Li Volti | Assignment by: Ing. Markus Schabel, BSc. (TGM)
                        </div>
                    </div>
                </div>
        </div>
        </footer>
        <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="js/login-register.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.eislideshow.js" type="text/javascript"></script>
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(function() {
            // browser window scroll (in pixels) after which the "back to top" link is shown
            var offset = 300,
                //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
                offset_opacity = 1200,
                //duration of the top scrolling animation (in ms)
                scroll_top_duration = 700,
                //grab the "back to top" link
                $back_to_top = $('.cd-top');

            //hide or show the "back to top" link
            $(window).scroll(function() {
                ($(this).scrollTop() > offset) ? $back_to_top.addClass('cd-is-visible'): $back_to_top.removeClass('cd-is-visible cd-fade-out');
                if ($(this).scrollTop() > offset_opacity) {
                    $back_to_top.addClass('cd-fade-out');
                }
            });

            //smooth scroll to top
            $back_to_top.on('click', function(event) {
                event.preventDefault();
                $('body,html').animate({
                    scrollTop: 0,
                }, scroll_top_duration);
            });


            loadAngular();
        });
        </script>
        <!--
            #####
      ANGULARJS CDN: REMOVE ONCE DEPLOYED
      #####
        -->
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
        <script src="js/ui-bootstrap/ui-bootstrap-custom-1.js" type="text/javascript"></script>
        <script src="js/ui-bootstrap/ui-bootstrap-custom-2.js" type="text/javascript"></script>
        <script src="js/ui-bootstrap/ui-bootstrap-custom-3.js" type="text/javascript"></script>
        <script src="js/ui-bootstrap/ui-bootstrap-custom-4.js" type="text/javascript"></script>
        <script type="text/javascript">
        function loadAngular() {
            $('.carousel').carousel()
        }
        </script>
</body>

</html>
