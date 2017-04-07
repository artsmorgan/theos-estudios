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
                    <h4 class="page-title">Crear Ubicacion</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> 
                    <?php echo breadcrumbs(); ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <!-- .row -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">Crear Locacion</h3>
                        
                        <form class="form-horizontal">
                            <fieldset>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="textinput">Nombre</label>  
                              <div class="col-md-4">
                              <input id="textinput" name="textinput" type="text" placeholder="Nombre" class="form-control input-md">
                                
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="capacidad">Capacidad</label>  
                              <div class="col-md-4">
                              <input id="capacidad" name="capacidad" type="text" placeholder="" class="form-control input-md">
                                
                              </div>
                            </div>

                            <!-- Appended Input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="y-axis">Google Maps</label>
                              <div class="col-md-4">
                                <div class="input-group">
                                  <input id="y-axis" name="y-axis" class="form-control" placeholder="" type="text">
                                  <span class="input-group-addon">y</span>
                                </div>
                                
                              </div>
                            </div>
                            <!-- Appended Input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="location-x">Google maps</label>
                              <div class="col-md-4">
                                <div class="input-group">
                                  <input id="location-x" name="location-x" class="form-control" placeholder="" type="text">
                                  <span class="input-group-addon">x</span>
                                </div>
                                
                              </div>
                            </div>
                            <!-- Textarea -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="Ubicacion">Ubicacion Exacta</label>
                              <div class="col-md-4">                     
                                <textarea class="form-control" id="Ubicacion" name="Ubicacion"></textarea>
                              </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="waze">Waze</label>  
                              <div class="col-md-4">
                              <input id="waze" name="waze" type="text" placeholder="" class="form-control input-md">
                              <span class="help-block">waze link</span>  
                              </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="save"></label>
                              <div class="col-md-4">
                                <button id="save" name="save" class="btn btn-primary">Guardar</button>
                              </div>
                            </div>

                            </fieldset>
                            </form>
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
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- jQuery peity -->
    <script src="../plugins/bower_components/peity/jquery.peity.min.js"></script>
    <script src="../plugins/bower_components/peity/jquery.peity.init.js"></script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
    <!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>