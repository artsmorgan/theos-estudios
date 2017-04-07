<!DOCTYPE html>  
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Estudios de biblia</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-19175540-9', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<?php
    include 'php/header.php';
    include 'php/left-sidebar.php'; include 'php/breadcrumbs.php';
    ?>
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Reportes</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-lg-3 col-sm-3 col-xs-12 text-center"> <small>Visit</small>
                                <h2><i class="ti-arrow-up text-success"></i> 1064</h2>
                                <div id="sparklinedash"></div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-xs-12 text-center"> <small>Total Page Views</small>
                                <h2><i class="ti-arrow-up text-warning"></i> 5064</h2>
                                <div id="sparklinedash2"></div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-xs-12 text-center"> <small>Unique Visitor</small>
                                <h2><i class="ti-arrow-up text-info"></i> 664</h2>
                                <div id="sparklinedash3"></div>
                            </div>
                            <div class="col-lg-3 col-sm-3 col-xs-12 text-center"> <small>Bounce Rate</small>
                                <h2><i class="ti-arrow-down text-danger"></i> 50%</h2>
                                <div id="sparklinedash4"></div>
                            </div>
                        </div>
                        <ul class="list-inline text-center m-t-40">
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #444b4c;"></i>Site A</h5> </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #fdc006;"></i>Site B</h5> </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #808f8f;"></i>Site C</h5> </li>
                        </ul>
                        <div id="morris-area-chart" style="height: 340px;"></div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- .row -->
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="white-box">
                                <h3 class="box-title">Usuarios</h3>
                                <ul class="list-inline two-part">
                                    <li><i class="icon-people text-info"></i></li>
                                    <li class="text-right"><span class="counter">23</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="white-box">
                                <h3 class="box-title">Estudios Biblicos</h3>
                                <ul class="list-inline two-part">
                                    <li><i class="icon-folder text-purple"></i></li>
                                    <li class="text-right"><span class="counter">169</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="white-box">
                                <h3 class="box-title">Asistencia</h3>
                                <ul class="list-inline two-part">
                                    <li><i class="icon-folder-alt text-danger"></i></li>
                                    <li class="text-right"><span class="">311</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <div class="white-box">
                                <h3 class="box-title">Otros</h3>
                                <ul class="list-inline two-part">
                                    <li><i class="ti-wallet text-success"></i></li>
                                    <li class="text-right"><span class="">117</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-xs-12">
                    <div class="news-slide m-b-15">
                        <div class="vcarousel slide">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="active item">
                                    <div class="overlaybg"><img src="../plugins/images/news/slide1.jpg" /></div>
                                    <div class="news-content"><span class="label label-danger label-rounded">1 Pedro 4</span>
                                        <h2> Por tanto, ya que Cristo sufrió en el cuerpo, asuman también ustedes la misma actitud; porque el que ha sufrido en el cuerpo ha roto con el pecado</h2> </div>
                                </div>
                                <div class="item">
                                    <div class="overlaybg"><img src="../plugins/images/news/slide1.jpg" /></div>
                                    <div class="news-content"><span class="label label-primary label-rounded">1 Pedro 4</span>
                                        <h2>Así pues, los que sufren según la voluntad de Dios, entréguense a su fiel Creador y sigan practicando el bie</h2> </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            
            <?php include 'php/right-sidebar.php';?>
        </div>
        <!-- /.container-fluid -->
        <?php include 'php/footer.php';?>
    </div>
    <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Morris JavaScript -->
    <script src="../plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="../plugins/bower_components/morrisjs/morris.js"></script>
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard3.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>