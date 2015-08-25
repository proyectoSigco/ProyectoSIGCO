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
    <script type="text/javascript" src="../../plugins/formvalidation/language/es_ES.js"></script>



    <link rel="stylesheet" href="../../date/jquery-ui.css">
  <script src="../../date/jquery-ui.js"></script>
  <script src="../../date/jquery-ui.theme.css"></script>
<!--  <link rel="stylesheet" href="/resources/demos/style.css">-->

    <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
    <!-- FORMVALIDATION -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <span class="logo-mini"><b></b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SI</b>GCO</span>
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
                  <span class="hidden-xs">Map-234556</span>
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
                      Formulario de modificación
                      <small>Productos</small>
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
                          <?php $idviejo=$_GET['id'];?>
                    <form id="defaultForm" action="../controllers/ControladorProducto.php?idv=<?php echo $idviejo ?>" method="post" enctype="multipart/form-data">

                      <div class="box box-default">
                                  <div class="box-header with-border">
                                      <h3 class="box-title">Nuevo producto</h3>
                                  </div>
                                  <!-- /.box-header -->
                                  <div class="box-body">
                                      
                                          <div class="form-group">
                                              <p>
                                                  Por favor diligencie el siguiente formulario para registrar un nuevo
                                                  prodcto.<br><br>
                                                  Recuerde que este formulario contiene campos obligatorios(*).
                                              </p>
                                          </div>
                                  </div>
                              </div>

                          <!-- general form elements disabled -->
                           <?php
                                    require '../facades/FacadeProducto.php';
                                    require '../utilities/Conexion.php';
                                    require_once '../models/ProductoDao.php';
                                    $productos=new Facade();
                                    $p=$productos->obtenerProducto($idviejo);

                           ?>

                          <div class="box box-default">
                              <div class="box-header with-border">
                                  <h3 class="box-title">Modificar Producto</h3>
                              </div>

                           <div class="box-body">
                                 
                                      <div class="form-group">
                                          <label for="cc">Codigo producto*</label>
                                          <input class="form-control" name="codigoProducto" value="<?php echo $p['IdProducto'] ?>" id="cc" type="text" placeholder="10311433222" required>
                                      </div>      
                                      <div class="form-group">
                                          <label for="names">Nombre de producto*</label>
                                          <input class="form-control" name="nombreProducto" value="<?php echo $p['Nombre'] ?>" id="names" type="text" placeholder="Map-234556" required>
                                      </div>
                                      <div class="form-group">
                                          <label for="apellido">Descripción*</label>
                                       <textarea class="form-control" name="descriptionProducto" id="descriptionProducto" type="text" maxlength="100" placeholder="" rows="5"><?php echo $p['Descripcion'] ?></textarea>

                                      </div>

                                      <div class="form-group">
                                          <label for="cargo">Unidad de medida*</label>
                                          <select class="form-control" name="unidadProducto" id="cargo">

                                                 <option value="cm3" <?php if($p['UnidadMedida']=="cm3"){echo 'selected';} ?>>cm3</option>
                                                 <option value="mm3" <?php if($p['UnidadMedida']=="mm3"){echo 'selected';} ?> >mm3</option>
                                                 <option value="dm3" <?php if($p['UnidadMedida']=="dm3"){echo 'selected';} ?>>dm3</option>
                                          </select>
                                      </div>
                                       <div class="form-group">
                                           <label for="cargo">IVA*</label>
                                           <select class="form-control" name="ivaProducto" id="cargo">

                                               <?php

                                               $producto = new Facade();
                                               $Productos = $producto->obtenerImpuestosProducto();
                                               foreach($Productos as $iterator) {?>
                                                     <option value="<?php echo $iterator['IdIva']; if($p['IdIva']==$iterator['IdIva']) { echo 'selected';}?>"><?php echo $iterator['Porcentaje'];?></option>
                                                <?php }?>
                                           </select>
                                       </div>

                                       <div class="form-group">
                                          <label for="pass1">Valor*</label>

                                           <input class="form-control" name="valorProducto" value="<?php echo $p['ValorBase'] ?>" id="pass1" type="number" maxlength="20" required title="Este campo es requerido">
                                           
                                      </div>
                                    <div class="form-group">
                                        <img src="<?php echo $p['rutaImagen']?>" class="img-responsive" alt="Responsive image">
                                    </div>
                                    <div class="form-group">
                                          <label for="imagen">Imágen</label>

                                            <input  name="ImagenProducto" id="imagen" type="file" multiple=true class="file"  title="Este campo es requerido">

                                    </div>
                                       <div class="form-group">
                                           <label for="presentacionProducto">Presentación producto*</label>
                                           <select class="form-control" name="presentacionProducto" id="cargo">
                                               <?php

                                               $producto = new Facade();
                                               $Productos = $producto->obtenerPresentacionProducto();
                                               foreach($Productos as $iterator) { ?>
                                                   <option value="<?php echo $iterator['IdPresentacion']; if($iterator['IdPresentacion']==$p['IdPresentacion']){ echo 'selected';} ?>"><?php echo $iterator['Nombre']; ?></option>
                                               <?php
                                               }?>
                                           </select>
                                       </div>
                                       <div class="form-group">
                                           <label for="categoriaProducto">Categoria producto*</label>
                                           <select class="form-control" name="categoriaProducto" id="cargo">
                                               <?php
                                               $producto = new Facade();
                                               $Productos = $producto->obtenerCategoriaProducto();
                                               foreach($Productos as $iterator) { ?>
                                               <option value="<?php echo $iterator['IdCategoria'];if($iterator['IdCategoria']==$p['IdCategoria']){ echo 'selected';} ?>"><?php echo $iterator['Nombre']; ?></option>
                                               <?php
                                               }?>
                                           </select>
                                       </div>
                                    <div class="box-footer">
                                          <input type="button" class="btn btn-warning" tabindex="15"
                                                 onclick="location.href='clientes.php'" value="Cancelar"/>
                                          <button type="submit" class="btn btn-success pull-right" tabindex="14"
                                                  value="guardar" name="modificar" id="guardar">Guardar cliente
                                          </button>
                                      </div>

                                                                   </div>

                                  </div>
                                                            </form>

                          </div>

                          <!-- /.box -->
                      </div>
                                            </div>

                      <!--/.col (right) -->
                  </div>
                  <!-- /.row -->
              </section>
              <!-- /.content -->
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

    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    function generateCaptcha() {
        $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
    }

    generateCaptcha(); 
    $('#defaultForm').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
         
                locale: 'es_ES',

        fields: {
            documento: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                     integer: {
                        message: 'Solo se permite el ingreso de números'
                    }
                }
            },
            nombres: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                     regexp: {
                        regexp: /^[a-z\sñÑ]+$/i,
                        message: 'Solo se permiten letras'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'Este campo debe tener mínimo 3 caracteres y máximo 30'
                    }
                }
            },
            apellidos: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                     regexp: {
                        regexp: /^[a-z\sñÑ]+$/i,
                        message: 'Solo se permiten letras'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'Este campo debe tener mínimo 3 caracteres y máximo 30'
                    }
                }
            },
          
            cargo:{
              validators:{
                 notEmpty:{
                    message: 'Este campo es requerido'
                  }

              }


            },
            
        
            email: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                    emailAddress: {
                        message: 'Ingrese un correo electrónico válido'
                    }
                }
            },
            pass1:{
              validators:{
                    notEmpty: {
                        message: 'Este campo es requerido'
                    }
                    
              }

            },

            pass2:{
              validators:{
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                     identical: {
                        field: 'pass1',
                        message: 'La contraseña debe ser identica a la anterior'
                    }
                    
              }

            },

            captcha: {
                    validators: {
                      notEmpty: {
                        message: 'Este campo es requerido'
                    },
                      integer:{
                      message: 'Solo se permiten números'
                    },
                        callback: {
                            message: 'Respuesta inválida',
                            callback: function(value, validator, $field) {
                                var items = $('#captchaOperation').html().split(' '),
                                    sum   = parseInt(items[0]) + parseInt(items[2]);
                                return value == sum;
                            }
                        }
                    }
                }
        }
    });
});
</script>
</html>
