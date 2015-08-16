<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.4 -->
      <link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <!-- Font Awesome Icons -->
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
      <!-- Ionicons -->
      <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
      <!-- daterange picker -->
      <link href="../../../plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
      <!-- iCheck for checkboxes and radio inputs -->
      <link href="../../../plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
      <!-- Bootstrap Color Picker -->
      <link href="../../../plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
      <!-- Bootstrap time Picker -->
      <link href="../../../plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
      <!-- Select2 -->
      <link href="../../../plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
      <!-- Theme style -->
      <link href="../../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link href="../../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="../../../index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="../../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../../../dist/img/user3-128x128.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../../../dist/img/user4-128x128.jpg" class="img-circle" alt="User Image" />
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>

                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
                  <span class="hidden-xs">Alexander Pierce</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="../../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Layout Options</span>
                <span class="label label-primary pull-right">4</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                <li><a href="../../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                <li><a href="../../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                <li><a href="../../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
              </ul>
            </li>
            <li>
              <a href="../../widgets.html">
                <i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Charts</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                <li><a href="../../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                <li><a href="../../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                <li><a href="../../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-laptop"></i>
                <span>UI Elements</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                <li><a href="../../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                <li><a href="../../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                <li><a href="../../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                <li><a href="../../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                <li><a href="../../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
              </ul>
            </li>
            <li class="treeview active">
              <a href="#">
                <i class="fa fa-edit"></i> <span>Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
                <li><a href="../../advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
                <li><a href="editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                <li><a href="../../tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
              </ul>
            </li>
            <li>
              <a href="../../calendar.html">
                <i class="fa fa-calendar"></i> <span>Calendar</span>
                <small class="label pull-right bg-red">3</small>
              </a>
            </li>
            <li>
              <a href="../../mailbox/mailbox.html">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Examples</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="../../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                <li><a href="../../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                <li><a href="../../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                <li><a href="../../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                <li><a href="../../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                <li><a href="../../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                <li><a href="../../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                <li>
                  <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                      <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                      <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
              </ul>
            </li>
            <li><a href="../../../documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <?php
      require_once 'clientes.dto/ClientesDto.php';
      require_once 'clientes.dao/ClientesDao.php';
      require_once 'clientes.utilidades/Conexion.php';
      if ($_GET['id']!=NULL) {
          $clienteDao = new ClientesDao();
          $cliente = $clienteDao->obtenerCliente($_GET['id']);
          $idClienteOld = $_GET['id'];
          ?>


          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <section class="content-header">
                  <h1>
                      Formulario de modificación
                      <small>Clientes</small>
                  </h1>
                  <ol class="breadcrumb">
                      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                      <li><a href="#">Clientes</a></li>
                      <li class="active">Modificar cliente</li>
                  </ol>
              </section>

              <!-- Main content -->
              <section class="content">
                  <div class="row">

                      <!-- right column -->
                      <div class="col-md-6">


                          <!-- general form elements disabled -->
                          <div class="box box-default">
                              <div class="box-header with-border">
                                  <h3 class="box-title">Modificar cliente</h3>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">
                                  <form role="form" action="clientes.controladores/controlador.clientes.php?id=<?php echo $idClienteOld;?>&controlar=modificar"
                                        method="post">
                                      <!-- text input -->
                                      <div class="form-group">
                                          <p>
                                              Por favor diligencie el siguiente formulario para modificar los datos
                                              de un cliente.<br><br>
                                              Recuerde que este formulario contiene campos obligatorios(*).
                                          </p>
                                      </div>
                              </div>
                          </div>

                          <div class="box box-default">
                              <div class="box-header with-border">
                                  <h3 class="box-title">Información corporativa registrada</h3>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">


                                  <div class="form-group">
                                      <label>Identificación del cliente (NIT, CC)*</label>
                                      <input type="number" name="IdCliente" class="form-control"
                                              autofocus required tabindex="1"
                                             value="<?php echo $cliente['IdCliente'];?>"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Razón social*</label>
                                      <input type="text" name="Nombre" class="form-control"
                                             value="<?php echo $cliente['Nombre'];?>"
                                             required tabindex="2"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Dirección principal*</label>
                                      <input type="text" name="Direccion" class="form-control"
                                             value="<?php echo $cliente['Direccion'];?>"
                                             required tabindex="3"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Teléfono principal*</label>
                                      <input type="number" name="TelFijo" class="form-control"
                                             value="<?php echo $cliente['TelFijo'];?>"
                                             required tabindex="4"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Email principal*</label>
                                      <input type="text" name="Email" class="form-control"
                                             value="<?php echo $cliente['Email'];?>"
                                             required tabindex="5"/>
                                  </div>


                                  <div class="form-group">
                                      <label>Ciudad*</label>
                                      <select class="form-control select2" name="Ciudad" required tabindex="6">

                                          <option value="1">Bogotá</option>
                                          <option value="2">Medellín</option>
                                          <option value="3">Cali</option>
                                          <option selected="selected" value="4">Barranquilla</option>
                                          <option value="5">Cartagena</option>
                                          <option value="6">Cúcuta</option>
                                      </select>
                                  </div>
                                  <!-- /.form-group -->

                                  <div class="form-group">
                                      <label>Tipo de cliente*</label>
                                      <select class="form-control select2" name="TipoCliente" required tabindex="7">

                                          <option value="1">Unipersonal</option>
                                          <option value="2">Sociedad colectiva</option>
                                          <option value="3">Cooperativa</option>
                                          <option selected="selected" value="4">Comanditaria</option>
                                          <option value="5">Sociedad Anónima</option>
                                      </select>
                                  </div>
                                  <!-- /.form-group -->

                                  <div class="form-group">
                                      <label>Actividad del cliente*</label>
                                      <select class="form-control select2" name="ActividadCliente" required
                                              tabindex="8">

                                          <option value="1">Agricultura</option>
                                          <option value="2">Explotación</option>
                                          <option selected="selected" value="3">Industrias manufactureras</option>
                                          <option value="4">Suministro de electricidad</option>
                                          <option>Distribución de agua</option>
                                      </select>
                                  </div>
                                  <!-- /.form-group -->


                                  <div class="form-group">
                                      <label>Clasificación del cliente (Automática)</label>
                                      <input type="text" class="form-control" value="Nuevo" readonly/>
                                      <input type="hidden" name="Clasificacion" class="form-control" value="1"/>
                                      <!--
                                      <select required tabindex="7">
                                        <option disabled selected>Seleccione un tipo...</option>
                                        <option>Agricultura</option>
                                        <option>Explotación</option>
                                        <option>Industrias manufactureras</option>
                                        <option>Suministro de electricidad</option>
                                        <option>Distribución de agua</option>
                                      </select>
                                      -->

                                  </div>
                              </div>
                          </div>


                          <div class="box box-default">
                              <div class="box-header with-border">
                                  <h3 class="box-title">Información de contacto registrada</h3>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">


                                  <div class="form-group">
                                      <label>Identificación contacto*</label>
                                      <input type="number" name="IdContacto" class="form-control"
                                             value="<?php echo $cliente['IdentificacionContacto'];?>"
                                             required tabindex="9"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Nombre contacto*</label>
                                      <input type="text" name="NombreContacto" class="form-control"
                                             value="<?php echo $cliente['NombreContacto'];?>"
                                             required tabindex="10"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Apellido contacto*</label>
                                      <input type="text" name="ApellidoContacto" class="form-control"
                                             value="<?php echo $cliente['ApellidoContacto'];?>"
                                             required tabindex="11"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Celular contacto*</label>
                                      <input type="number" name="CelularContacto" class="form-control"
                                             value="<?php echo $cliente['CelularContacto'];?>"
                                             required tabindex="12"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Email contacto*</label>
                                      <input type="email" name="EmailContacto" class="form-control"
                                             value="<?php echo $cliente['EmailContacto'];?>"
                                             required tabindex="13"/>
                                  </div>
                                  <div class="box-footer">
                                      <input type="button" class="btn btn-warning" tabindex="15"
                                             onclick="location.href='clientes.php'" value="Cancelar"/>
                                      <button type="submit" class="btn btn-success pull-right" tabindex="14"
                                              value="modificar" name="modificar" id="modificar">Modificar cliente
                                      </button>
                                  </div>
                                  <!-- /.box-footer -->


                                  </form>
                              </div>
                              <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                      </div>
                      <!--/.col (right) -->
                  </div>
                  <!-- /.row -->
              </section>
              <!-- /.content -->
          </div><!-- /.content-wrapper -->

          <?php
      }
      else {

          ?>


          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
              <!-- Content Header (Page header) -->
              <section class="content-header">
                  <h1>
                      Formulario de registro
                      <small>Clientes</small>
                  </h1>
                  <ol class="breadcrumb">
                      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
                      <li><a href="#">Clientes</a></li>
                      <li class="active">Nuevo cliente</li>
                  </ol>
              </section>

              <!-- Main content -->
              <section class="content">
                  <div class="row">

                      <!-- right column -->
                      <div class="col-md-6">


                          <!-- general form elements disabled -->
                          <div class="box box-default">
                              <div class="box-header with-border">
                                  <h3 class="box-title">Nuevo cliente</h3>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">
                                  <form role="form" action="clientes.controladores/controlador.clientes.php?controlar=crear"
                                        method="post">
                                      <!-- text input -->
                                      <div class="form-group">
                                          <p>
                                              Por favor diligencie el siguiente formulario para registrar un nuevo
                                              cliente.<br><br>
                                              Recuerde que este formulario contiene campos obligatorios(*).
                                          </p>
                                      </div>
                              </div>
                          </div>

                          <div class="box box-default">
                              <div class="box-header with-border">
                                  <h3 class="box-title">Información corporativa</h3>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">


                                  <div class="form-group">
                                      <label>Identificación del cliente (NIT, CC)*</label>
                                      <input type="number" name="IdCliente" class="form-control"
                                             placeholder="9024552452" autofocus required tabindex="1"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Razón social*</label>
                                      <input type="text" name="Nombre" class="form-control" placeholder="Mi empresa"
                                             required tabindex="2"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Dirección principal*</label>
                                      <input type="text" name="Direccion" class="form-control"
                                             placeholder="Calle 34 No. 32 - 42" required tabindex="3"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Teléfono principal*</label>
                                      <input type="number" name="TelFijo" class="form-control" placeholder="634342"
                                             required tabindex="4"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Email principal*</label>
                                      <input type="text" name="Email" class="form-control"
                                             placeholder="info@empresa.com" required tabindex="5"/>
                                  </div>


                                  <div class="form-group">
                                      <label>Ciudad*</label>
                                      <select class="form-control select2" name="Ciudad" required tabindex="6">
                                          <option selected="selected" disabled>Seleccione...</option>
                                          <option value="1">Bogotá</option>
                                          <option value="2">Medellín</option>
                                          <option value="3">Cali</option>
                                          <option value="4">Barranquilla</option>
                                          <option value="5">Cartagena</option>
                                          <option value="6">Cúcuta</option>
                                      </select>
                                  </div>
                                  <!-- /.form-group -->

                                  <div class="form-group">
                                      <label>Tipo de cliente*</label>
                                      <select class="form-control select2" name="TipoCliente" required tabindex="7">
                                          <option selected="selected" disabled>Seleccione...</option>
                                          <option value="1">Unipersonal</option>
                                          <option value="2">Sociedad colectiva</option>
                                          <option value="3">Cooperativa</option>
                                          <option value="4">Comanditaria</option>
                                          <option value="5">Sociedad Anónima</option>
                                      </select>
                                  </div>
                                  <!-- /.form-group -->

                                  <div class="form-group">
                                      <label>Actividad del cliente*</label>
                                      <select class="form-control select2" name="ActividadCliente" required
                                              tabindex="8">
                                          <option selected="selected" disabled>Seleccione...</option>
                                          <option value="1">Agricultura</option>
                                          <option value="2">Explotación</option>
                                          <option value="3">Industrias manufactureras</option>
                                          <option value="4">Suministro de electricidad</option>
                                          <option>Distribución de agua</option>
                                      </select>
                                  </div>
                                  <!-- /.form-group -->


                                  <div class="form-group">
                                      <label>Clasificación del cliente (Automática)</label>
                                      <input type="text" class="form-control" value="Nuevo" readonly/>
                                      <input type="hidden" name="Clasificacion" class="form-control" value="1"
                                             placeholder="Nuevo"/>
                                      <!--
                                      <select required tabindex="7">
                                        <option disabled selected>Seleccione un tipo...</option>
                                        <option>Agricultura</option>
                                        <option>Explotación</option>
                                        <option>Industrias manufactureras</option>
                                        <option>Suministro de electricidad</option>
                                        <option>Distribución de agua</option>
                                      </select>
                                      -->

                                  </div>
                              </div>
                          </div>


                          <div class="box box-default">
                              <div class="box-header with-border">
                                  <h3 class="box-title">Información de contacto</h3>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">


                                  <div class="form-group">
                                      <label>Identificación contacto*</label>
                                      <input type="number" name="IdContacto" class="form-control" placeholder="8245234"
                                             required tabindex="9"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Nombre contacto*</label>
                                      <input type="text" name="NombreContacto" class="form-control" placeholder="Pedro"
                                             required tabindex="10"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Apellido contacto*</label>
                                      <input type="text" name="ApellidoContacto" class="form-control"
                                             placeholder="Pérez" required tabindex="11"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Celular contacto*</label>
                                      <input type="number" name="CelularContacto" class="form-control"
                                             placeholder="8032423" required tabindex="12"/>
                                  </div>
                                  <div class="form-group">
                                      <label>Email contacto*</label>
                                      <input type="email" name="EmailContacto" class="form-control"
                                             placeholder="contacto@empresa.com" required tabindex="13"/>
                                  </div>
                                  <div class="box-footer">
                                      <input type="button" class="btn btn-warning" tabindex="15"
                                             onclick="location.href='clientes.php'" value="Cancelar"/>
                                      <button type="submit" class="btn btn-success pull-right" tabindex="14"
                                              value="guardar" name=" guardar" id="guardar">Guardar cliente
                                      </button>
                                  </div>
                                  <!-- /.box-footer -->


                                  </form>
                              </div>
                              <!-- /.box-body -->
                          </div>
                          <!-- /.box -->
                      </div>
                      <!--/.col (right) -->
                  </div>
                  <!-- /.row -->
              </section>
              <!-- /.content -->
          </div><!-- /.content-wrapper -->


          <?php
      }
        ?>












      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-user bg-yellow"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                    <p>New phone +1(800)555-1234</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                    <p>nora@example.com</p>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <i class="menu-icon fa fa-file-code-o bg-green"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                    <p>Execution time 5 seconds</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Update Resume
                    <span class="label label-success pull-right">95%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Laravel Integration
                    <span class="label label-warning pull-right">50%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                  </div>
                </a>
              </li>
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Back End Framework
                    <span class="label label-primary pull-right">68%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked />
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Allow mail redirect
                  <input type="checkbox" class="pull-right" checked />
                </label>
                <p>
                  Other sets of options are available
                </p>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Expose author name in posts
                  <input type="checkbox" class="pull-right" checked />
                </label>
                <p>
                  Allow the user to show his name in blog posts
                </p>
              </div><!-- /.form-group -->

              <h3 class="control-sidebar-heading">Chat Settings</h3>

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Show me as online
                  <input type="checkbox" class="pull-right" checked />
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Turn off notifications
                  <input type="checkbox" class="pull-right" />
                </label>
              </div><!-- /.form-group -->

              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Delete chat history
                  <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                </label>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../../../plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="../../../plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="../../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../../dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
