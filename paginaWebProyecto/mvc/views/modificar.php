
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
  <body class="skin-blue sidebar-mini">
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
            Registrar Producto
<!--            <small>Optional description</small>-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Registrar Producto</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                   <p><h2 class="box-title">En este formulario podra realizar el registro de un nuevo producto </h2></p>
                    <h1 class="box-title">Los campos con * son obligatorios</h1>
                </div><!-- /.box-header -->
                <!-- form start -->

                <form class="form-horizontal" id="defaultForm" action="../../php/Controladores/ControladorProducto.php" method="post">
                  <div class="box-body">
                      <?php
                      require '../../php/fachada/FacadeProducto.php';
                      require '../../php/Utilidades/Conexion.php';
                      require_once  '../../php/Productos/productos.dao/ProductoDao.php';
                      $modificar= new Facade();
                      $T=$modificar->obtenerProducto($_GET['id']);
                      foreach($T as $iterator) {

                      ?>

                    <div class="form-group">

                              <label class="col-sm-2 col-sm-2 control-label" for="codigoProducto">Código Producto* </label>

                              <div class="col-sm-6">

                                  <input class="form-control" name="codigoProducto2" id="codigoProducto" type="text" placeholder="23443" required value="<?php echo $iterator['IdProducto'];?>" readonly>

                              </div>
                          </div>
                          <div class="form-group">

                              <label class="col-sm-2 col-sm-2 control-label" for="nombreProducto">Nombre* </label>

                              <div class="col-sm-6">

                                  <input class="form-control" name="nombreProducto" id="nombreProducto" type="text" maxlength="10" value="<?php echo $iterator['Nombre'];?>" required>

                              </div>
                          </div>

                          <div class="form-group">
                          <!-- InicioLabel poner class="col-sm-2 col-sm-2 control-label" -->
                          <label class="col-sm-2 col-sm-2 control-label" for="descriptionProducto">Descripcion*</label>
                          <!--FinLabel-->
                          <div class="col-sm-6">
                            <!-- InicioInput poner class="form-control"-->
                                <textarea class="form-control" name="descriptionProducto" id="descriptionProducto" type="text" maxlength="100" placeholder="<?php echo $iterator['Descripcion'];?>" rows="5"></textarea>
                            <!-- FinInput -->
                          </div>
                          </div>

                          <div class="form-group">
                          <!-- InicioLabel poner class="col-sm-2 col-sm-2 control-label" -->
                          <label class="col-sm-2 col-sm-2 control-label" for="unidadProducto">Unidad de Medida*</label>
                          <!--FinLabel-->
                          <div class="col-sm-6">
                            <!-- InicioInput poner class="form-control"-->
                            <select class="form-control" name="unidadProducto" id="unidadProducto" type="text" placeholder="3278600">
                              <option name="unidadMedida" value="value="<?php echo $iterator['UnidadMedida'];?>"">Gr</option>
                              <option name="unidadMedida" value="cm3">cm3</option>
                              <option name="unidadMedida" value="Lt">Lt</option>
                              <option name="unidadMedida" value=""></option>
                            </select>
                            <!-- FinInput -->
                          </div>
                          </div>

                             <div class="form-group">
                          <!-- InicioLabel poner class="col-sm-2 col-sm-2 control-label" -->
                          <label class="col-sm-2 col-sm-2 control-label" for="ivaProducto">IVA*</label>
                          <!--FinLabel-->
                          <div class="col-sm-6">
                            <!-- InicioInput poner class="form-control"-->
                            <input class="form-control" name="ivaProducto" id="ivaProducto" type="text" maxlength="20" value="<?php echo $iterator['Iva'];?>">

                            <!-- FinInput -->
                          </div>
                          </div>


                          <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label" for="valorProducto">Valor*</label>
                          <div class="col-sm-6">
                           <input class="form-control" id="valorProducto" name="valorProducto" type="text" value="<?php echo $iterator['Valor'];?>" required>

                          </div>
                          </div>



                          <div class="form-group">
                          <!-- InicioLabel poner class="col-sm-2 col-sm-2 control-label" -->
                          <label class="col-sm-2 col-sm-2 control-label" for="presentacionProducto">Presentación</label>
                          <!--FinLabel-->
                          <div class="col-sm-6">
                            <!-- InicioInput poner class="form-control"-->
                              <select class="form-control" name="presentacionProducto" id="presentacionProducto" type="text" required title="Este campo es requerido" >

                                  <?php

                                  $producto = new Facade();
                                  $Productos = $producto->obtenerPresentacionProducto();
                                  $especifico= $producto->presentacionId($iterator['Presentacion_IdPresentacion']);
                                  foreach($especifico as $name){?>
                                      <option value="<?php echo $name['IdPresentacion']; ?>"><?php echo $name['Nombre']; ?></option>
                                  <?php
                                  }?>

                                  <?php
                                 foreach($Productos as $iterator) { ?>
                                     <option value="<?php echo $iterator['IdPresentacion']; ?>"><?php echo $iterator['Nombre']; ?></option>

                                 <?php
                                 }?>
                              </select>

                            <!-- FinInput -->
                          </div>
                          </div>

                          <div class="form-group">
                          <!-- InicioLabel poner class="col-sm-2 col-sm-2 control-label" -->
                          <label class="col-sm-2 col-sm-2 control-label" for="categoriaProducto">Categoria*</label>
                          <!--FinLabel-->
                          <div class="col-sm-6">
                            <!-- InicioInput poner class="form-control"-->
                              <select class="form-control" name="categoriaProducto"  id="categoriaProducto" type="text" required title="Este campo es requerido">
                                <option value="2221">any</option>
                              </select>


                            <!-- FinInput -->
                          </div>
                          </div>

                  <div class="box-footer">
                    <button name="registro" id="registro" value="Registrarse" type="submit" class="btn btn-info pull-left">Registrar</button>
                  </div><!-- /.box-footer -->

                </form>
<?php } ?>
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
  <script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
         /*err: {
            // You can set it to popover
            // The message then will be shown in Bootstrap popover
            container: 'tooltip'
        },*/
                locale: 'es_ES',

        fields: {
            codigoProducto: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            },
            nombreProducto: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }

                }
            },
            descriptionProducto: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }


                },
                stringLength: {
                    min: 3,
                    max: 30,
                    message: 'Este campo debe tener mínimo 3 caracteres y máximo 30'
                }

            },
            unidadProducto: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }

                }

            },

            ivaProducto: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                    integer:{
                        message: 'Solo se permiten números'
                    }
                }
            },
            valorProducto: {
                validators: {
                    integer: {

                        message: 'Solo se permiten números'
                    },
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }

                }
            },
            ImagenProducto: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }

                }
            },
            presentacionProducto: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }

            },

            categoriaProducto: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                }
            }

        }
    });
});




</script>

</html>
<script>

    var myvar = <?php if (isset($_GET['mensaje']))
                {
                echo json_encode($_GET['mensaje']);
                } ?>;
    alert(myvar);
    $("#registro").click(function() {
        if (myvar) {
            var n = noty({
                text:myvar ,
                theme: 'relax',
                layout: 'centerRight',
                closeWith: ['click', 'hover'],
                type: 'success',
                animation: {
                    open: 'animated bounceInRight', // Animate.css class names
                    close: 'animated bounceOutRight', // Animate.css class names
                }

            });
        }
    });



</script>