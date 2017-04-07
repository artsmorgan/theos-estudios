<!DOCTYPE html>  
<html lang="en">

<?php session_start(); 
    if(!isset($_SESSION['userid'])){
        header('Location: index.php');
    }
    //echo $_SESSION['userid'] . '///';
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Estudios de Biblia Theos</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
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
                    <h4 class="page-title">Estudios de biblia</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="white-box">
                        <div class="row row-in">
                            <div class="col-lg-3 col-sm-6 row-in-br">
                                <div class="col-in row">
                                    <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                                        <h5 class="text-muted vb">Estudios Activos</h5> </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h3 class="counter text-right m-t-15 text-danger">23</h3> </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                                <div class="col-in row">
                                    <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                        <h5 class="text-muted vb">Registro pendientes</h5> </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h3 class="counter text-right m-t-15 text-megna">169</h3> </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 row-in-br">
                                <div class="col-in row">
                                    <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                        <h5 class="text-muted vb">Estudios por finalizar</h5> </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h3 class="counter text-right m-t-15 text-primary">157</h3> </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6  b-0">
                                <div class="col-in row">
                                    <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe016;"></i>
                                        <h5 class="text-muted vb">Estudios Realizados</h5> </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <h3 class="counter text-right m-t-15 text-success">431</h3> </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--row -->
            <!-- /.row -->
            <div class="row">
                <div class="col-md-7 col-lg-9 col-sm-12 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">Estudios anuales</h3>
                        <ul class="list-inline text-right">
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>Servidores</h5> </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #fb9678;"></i>Niveles</h5> </li>
                            <li>
                                <h5><i class="fa fa-circle m-r-5" style="color: #9675ce;"></i>Especiales</h5> </li>
                        </ul>
                        <div id="morris-area-chart" style="height: 340px;"></div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-3 col-sm-6 col-xs-12">
                    <div class="bg-theme-dark m-b-15">
                        <div class="row weather p-20">
                            <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6 m-t-40">
                                <h3>&nbsp;</h3>
                                <h1>23<sup>°C</sup></h1>
                                <p class="text-white">San Jose, Costa Rica</p>
                            </div>
                            <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6 text-right"> <i class="wi wi-day-cloudy-high"></i>
                                <br/>
                                <br/> <b class="text-white">Dia soleado</b>
                                <p class="w-title-sub">Marzo 31</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-3 col-sm-6 col-xs-12">
                    <div class="bg-theme m-b-15">
                        <div id="myCarouse2" class="carousel vcarousel slide p-20">
                            <!-- Carousel items -->
                            <div class="carousel-inner ">
                                <div class="active item">
                                    <h3 class="text-white">Todo lo que hagan, háganlo de buena gana, como si estuvieran sirviendo al Señor y no a los hombres.</h3>
                                    <div class="twi-user">
                                        <h4 class="text-white m-b-0">COLOSENSES</h4>
                                        <p class="text-white">3:23</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <h3 class="text-white">My Acting blown <span class="font-bold">Your Mind</span> and you also laugh at the moment</h3>
                                    <div class="twi-user"><img src="../plugins/images/users/genu.jpg" alt="user" class="img-circle img-responsive pull-left">
                                        <h4 class="text-white m-b-0">Govinda</h4>
                                        <p class="text-white">Actor</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <h3 class="text-white">My Acting blown <span class="font-bold">Your Mind</span> and you also laugh at the moment</h3>
                                    <div class="twi-user"><img src="../plugins/images/users/ritesh.jpg" alt="user" class="img-circle img-responsive pull-left">
                                        <h4 class="text-white m-b-0">Govinda</h4>
                                        <p class="text-white">Actor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
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
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!--Morris JavaScript -->
    <script src="../plugins/bower_components/raphael/raphael-min.js"></script>
    <script src="../plugins/bower_components/morrisjs/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="../plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $.toast({
                heading: 'Bienvenidos a Theos Place'
                , text: 'Herramienta Administrativa para creacion de estudios de biblia'
                , position: 'top-right'
                , loaderBg: '#ff6849'
                , icon: 'info'
                , hideAfter: 3500
                , stack: 6
            })
        });
    </script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>