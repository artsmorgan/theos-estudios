<!-- Left navbar-header -->
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div><img src="../plugins/images/image-placeholder.jpg" alt="user-img" class="img-circle"></div> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['fullname']?> <span class="caret"></span></a>
                <ul class="dropdown-menu animated flipInY">
                    <li><a href="#"><i class="ti-user"></i> Mi perfil</a></li>
                    <li><a href="#"><i class="ti-wallet"></i> Estudios</a></li>
                    <li><a href="#"><i class="ti-email"></i> Mensajes</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="ti-settings"></i> Configuracion</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="login.php"><i class="fa fa-power-off"></i> Salir</a></li>
                </ul>
            </div>
        </div>
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                <!-- /input-group -->
            </li>
            <li class="nav-small-cap m-t-10"> &nbsp;&nbsp;&nbsp;&nbsp;Menu Principal</li>
            <li> <a href="dashboard.php" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span></a>
            </li>
            <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu "> Estudios <span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="estudios-listado.php">Listado Activos</a> </li>
                    <li> <a href="estudios-crear.php">Crear</a> </li>
                    <li> <a href="#">Historial</a> </li>
                    
                </ul>
            </li>
            <li> <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Materias<span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="#">Listado</a> </li>
                    <li> <a href="materias-crear.php">Crear</a> </li>
                </ul>
            </li>
            <li> <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Ubicaciones<span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="#">Listado</a> </li>
                    <li> <a href="ubicacion-crear.php">Crear</a> </li>
                </ul>
            </li>
            <li> <a href="#" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Estudiantes<span class="fa arrow"></span> </span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="#">Listado</a> </li>
                    <li> <a href="#">Crear</a> </li>
                </ul>
            </li>
           
           <li> <a href="/reportes.php" class="waves-effect"><i data-icon="/" class="linea-icon linea-basic fa-fw"></i> <span class="hide-menu">Reportes<span class="fa arrow"></span> </span></a>
            </li>

        </ul>
    </div>
</div>
<!-- Left navbar-header end -->