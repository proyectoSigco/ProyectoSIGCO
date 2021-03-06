<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>| Inicio</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="../../dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />
    <link href="../../dist/css/style.css" rel="stylesheet" type="text/css" />

    <!-- FORMVALIDATION -->
    <script type="text/javascript" src="../../plugins/jQuery/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../../plugins/formvalidation/formValidation.js"></script>
    <script type="text/javascript" src="../../plugins/formvalidation/framework/bootstrap.js"></script>


    
    <!-- FORMVALIDATION -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      <!--noty messajes-->
      <link href="../../plugins/animate/animate.css" rel="stylesheet" type="text/css" />
      <script src="../../plugins/messajes/jquery.noty.packaged.min.js"></script>
      <!-- FORMVALIDATION -->


  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="skin-blue sidebar-mini" >
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index2.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b>LTE</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Julian Castaño</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Julian Castaño
                      <small>Asesor Comercial</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                 
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Perfil</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Cerrar Sesión</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Julian Castaño</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-desktop"></i> <span>Inicio</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-building"></i> <span>Empresas</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Registrar</a></li>
                <li><a href="#">Buscar</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-archive"></i> <span>Productos</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Ver Catalogo</a></li>
                <li><a href="#">Buscar</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#"><i class="fa fa-shopping-cart"></i> <span>Cotizaciones</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Registrar</a></li>
                <li><a href="#">Buscar</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-money"></i> <span>Ordenes de compra</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Registrar</a></li>
                <li><a href="#">Buscar</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-users"></i> <span>Capacitaciones</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Registrar</a></li>
                <li><a href="#">Buscar</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-book"></i> <span>Asesorias</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Registrar</a></li>
                <li><a href="#">Buscar</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-bar-chart"></i> <span>Panel</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Registrar</a></li>
                <li><a href="#">Buscar</a></li>
              </ul>
            </li>
    
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Gestión de visitas
<!--            <small>Optional description</small>-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i>Gestión</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                   <p><h2 class="box-title">Capacitaciónes-Asesorias</h2></p>
                </div><!-- /.box-header -->
                  <div class="content-panel">
                      <table class="table table-striped table-advance table-hover" id="tableClick">
                          <hr>
                          <thead>
                          <tr>
                              <th><button  class="btn btn-primary btn-success"><i class="fa fa-bullhorn"></i>Actividad</button></th>
                              <th><i class="fa fa-bookmark"></i>Tema</th>
                              <th><i class=" fa fa-edit"></i>Lugar</th>
                              <th><i class=" fa fa-actions"></i>Estado</th>
                              <th><i class=" fa fa-actions"></i>Fecha</th>
                              <th>Acciónes</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                          require '../facades/FacadeGestion.php';
                          require '../utilities/Conexion.php';
                          require_once  '../models/GestionDao.php';
                          require_once '../models/ProductoDao.php';
                          require_once '../facades/FacadeProducto.php';
                          $gestion = new FacadeGestion();
                          $productos =new Facade();
                          $gestiones = $gestion->getGestiones();

                          foreach($gestiones as $iterator) { ?>
                          <tr>
                              <td><?php echo $iterator['Tipo']; ?> <a href="#"></a></td>

                              <td><?php
                                     if (is_numeric($iterator['Asunto'])) {
                                         echo $productos->obtenerProducto($iterator['Asunto'])['Nombre'];
                                     }

                                  if(!is_numeric($iterator['Asunto'])){
                                      echo $iterator['Asunto'];
                                  }
                                  ?></td>

                              <td><?php echo $iterator['Lugar']; ?></td>
                              <td  ><span id="<?php echo $iterator['IdEmpresa']; ?>" class="label  label-mini"><?php echo $iterator['Estado']; ?></span></td>
                              <td><?php echo $iterator['FechaProgramada']; ?></td>
                              <td>

                                  <button id="btn<?php echo $iterator['IdGestion'] ?>" value="<?php echo $iterator['IdGestion'] ?>" class="btn btn-primary btn-xs click"><i class="fa fa-eye"></i></button>

                                  <a href="ModificarGestion.php?id=<?php echo $iterator['IdGestion']; ?>"><button  class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                  <a href="../controllers/ControladorGestion.php?idproducto=<?php echo $iterator['IdGestion']; ?>"><button  class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>


                              </td>

                          </tr>
                        <?php

                        }?>
                        </tbody>
                      </table>
                      <div class="modal fade" id="myModal" >
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                      <h4 class="modal-title">Detalle de Gestión</h4>
                                  </div>
                                  <div class="modal-body" class="pull-left col-md-8">
                                      <dl class="dl-horizontal">
                                          <dt>Actividad</dt>
                                          <dd id="actividad">A description list is perfect for defining terms.</dd>
                                          <dt>Tema</dt>
                                          <dd id="tema">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                          <dt >Asistentes</dt>
                                          <dd id="asistentes">Etiam porta sem malesuada magna mollis euismod.</dd>
                                          <dt>Obsevaciones</dt>
                                          <dd id="observaciones">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                                          <dt>Lugar</dt>
                                          <dd id="lugar"></dd>
                                          <dt>Fecha</dt>
                                          <dd id="fecha"></dd>
                                      </dl>
                                      <!--<p><input type="text" class="input-sm" id="txtfname"/></p>
                                      <p><input type="text" class="input-sm" id="txtlname"/></p>-->
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      <button type="button" class="btn btn-primary">Save changes</button>
                                  </div>
                              </div><!-- /.modal-content -->
                          </div><!-- /.modal-dialog -->
                      </div><!-- /.modal -->
            </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->

        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">NOMBRE EMPRESA</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->

      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
  </body>
    <script>
        $("#modificar").click(function() {
                var n = noty({
                    text:'Desea eliminar este Registro' ,
                    theme: 'relax',
                    layout: 'center',
                    closeWith: ['click', 'hover'],
                    buttons: [
                        {addClass: 'btn btn-primary', text: 'Ok', onClick: function($noty) {

                            // this = button element
                            // $noty = $noty element

                            $noty.close();
                            noty({text: 'You clicked "Ok" button', type: 'success'});
                        }
                        },
                        {addClass: 'btn btn-danger', text: 'Cancel', onClick: function($noty) {
                            $noty.close();
                            noty({text: 'You clicked "Cancel" button', type: 'error'});
                        }
                        }
                    ],
                    type: 'confirm',
                    animation: {
                        open: 'animated bounceInRight', // Animate.css class names
                        close: 'animated bounceOutRight', // Animate.css class names
                    }

                });

        });

        $(document).ready(function() {

            $('span:contains("Pendiente")').addClass('label-warning');
            $('span:contains("Realizada")').addClass('label-success');
            $('span:contains("Cancelada")').addClass('label-danger');
        });

        $('.click').click( function () {
            console.log($(this).attr("value"));
            $.post("../controllers/ControladorGestion.php",

                {
                    detail: $(this).attr("value")
                },
                function (data) {
                   var json = $.parseJSON(data);
                    $('#actividad').text(json.Tipo);
                    $('#tema').text(json.Asunto);
                    $('#asistentes').text(json.Asistentes);
                    $('#observaciones').text(json.Observaciones);
                    $('#lugar').text(json.Lugar);
                    $('#fecha').text(json.FechaProgramada);
                    $("#myModal").modal("show");

                });
        });


    </script>
</html>
