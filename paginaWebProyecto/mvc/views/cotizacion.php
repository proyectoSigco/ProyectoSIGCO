<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>| Crear Cotización</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, iterator-scalable=no" name="viewport">
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
    <script type="text/javascript" src="../../plugins/js/language/es_ES.js"></script>

    
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
                  <!-- The iterator image in the navbar-->
                  <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Julian Castaño</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The iterator image in the menu -->
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

          <!-- Sidebar iterator panel (optional) -->
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
            Crear Cotización
<!--            <small>Optional description</small>-->
          </h1>
          <ol class="breadcrumb">
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Crear Cotización</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h1 class="box-title">Los campos con * son obligatorios</h1>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" id="defaultForm">
                  <div class="box-body">

                    <div class="form-group">

                              <label class="col-sm-2 col-sm-2 control-label" for="codigo">Código Cliente* </label>
                            
                              <div class="col-sm-6">

                                  <input class="form-control" name="idcliente" id="codigo" type="text" placeholder="12355" required>

                              </div>
                          </div>
                          <div class="form-group">

                              <label class="col-sm-2 col-sm-2 control-label" for="producto">Código Producto* </label>
                            
                              <div class="col-sm-6">

                                  <input class="form-control" name="idproducto" id="producto" type="text" maxlength="10" placeholder="1287350" required>

                              </div>
                          </div>

                          <div class="form-group">
                          <!-- InicioLabel poner class="col-sm-2 col-sm-2 control-label" -->  
                          <label class="col-sm-2 col-sm-2 control-label" for="cliente">Nombre Cliente*</label>
                          <!--FinLabel-->  
                          <div class="col-sm-6">
                            <!-- InicioInput poner class="form-control"-->
                                <input class="form-control" name="nombrecliente" id="cliente" type="text" maxlength="20" placeholder="Ecopetrol">
                            <!-- FinInput -->
                          </div>                        
                          </div>

                          <div class="form-group">
                          <!-- InicioLabel poner class="col-sm-2 col-sm-2 control-label" -->  
                          <label class="col-sm-2 col-sm-2 control-label" for="telefono">Teléfono*</label>
                          <!--FinLabel-->  
                          <div class="col-sm-6">
                            <!-- InicioInput poner class="form-control"-->
                            <input class="form-control" name="telefono" id="telefono" type="text" placeholder="3278600">
                            <!-- FinInput -->
                          </div>                        
                          </div>

                             <div class="form-group">
                          <!-- InicioLabel poner class="col-sm-2 col-sm-2 control-label" -->  
                          <label class="col-sm-2 col-sm-2 control-label" for="direccion">Dirección*</label>
                          <!--FinLabel-->  
                          <div class="col-sm-6">
                            <!-- InicioInput poner class="form-control"-->
                            <input class="form-control" name="direccion" id="direccion" type="text" maxlength="20" placeholder="Cra 79 No 31c-71">

                            <!-- FinInput -->
                          </div>                        
                          </div>


                          <div class="form-group">
                          <label class="col-sm-2 col-sm-2 control-label" for="fecha">Fecha*</label>
                          <div class="col-sm-6">
                           <input class="form-control" name="fecha" type="text" placeholder="12/12/1993" required>

                          </div>
                          </div>

                          <div class="form-group">
                          <!-- InicioLabel poner class="col-sm-2 col-sm-2 control-label" -->  
                          <label class="col-sm-2 col-sm-2 control-label" for="email">E-mail*</label>
                          <!--FinLabel-->  
                          <div class="col-sm-6">
                            <!-- InicioInput poner class="form-control"-->
                              <input class="form-control" name="email" id="email" type="text" maxlength="20" placeholder="email@ecopetro.com">

                            <!-- FinInput -->
                          </div>                        
                          </div>

                          <div class="form-group">
                          <!-- InicioLabel poner class="col-sm-2 col-sm-2 control-label" -->  
                          <label class="col-sm-2 col-sm-2 control-label" for="cantidad">Cantidad</label>
                          <!--FinLabel-->  
                          <div class="col-sm-6">
                            <!-- InicioInput poner class="form-control"-->
                              <input class="form-control" name="cantidad" id="cantidad" type="number" maxlength="20" placeholder="20" required title="Este campo es requerido">

                            <!-- FinInput -->
                          </div>                        
                          </div>

                          <div class="form-group">
                          <!-- InicioLabel poner class="col-sm-2 col-sm-2 control-label" -->  
                          <label class="col-sm-2 col-sm-2 control-label" for="subtotal">Subtotal*</label>
                          <!--FinLabel-->  
                          <div class="col-sm-6">
                            <!-- InicioInput poner class="form-control"-->
                              <input class="form-control" name="subtotal" type="text" maxlength="20" placeholder="$500.000" required title="Este campo es requerido" disabled>

                            <!-- FinInput -->
                          </div>                        
                          </div>

                          <div class="form-group">
                          <!-- InicioLabel poner class="col-sm-2 col-sm-2 control-label" -->  
                          <label class="col-sm-2 col-sm-2 control-label" for="iva">IVA*</label>
                          <!--FinLabel-->  
                          <div class="col-sm-6">
                            <!-- InicioInput poner class="form-control"-->
                              <input class="form-control" name="iva" id="iva" type="number" maxlength="20" placeholder="5%" required title="Este campo es requerido">

                            <!-- FinInput -->
                          </div>                        
                          </div>

                          <div class="form-group">
                          <!-- InicioLabel poner class="col-sm-2 col-sm-2 control-label" -->  
                          <label class="col-sm-2 col-sm-2 control-label" for="total">Total*</label>
                          <!--FinLabel-->  
                          <div class="col-sm-6">
                            <!-- InicioInput poner class="form-control"-->
                              <input class="form-control" name="total" id="total" type="text" maxlength="20" placeholder="$650.000" required title="Este campo es requerido" disabled>

                            <!-- FinInput -->
                          </div>                        
                          </div>
                             
                             <div class="form-group">
                          <!-- InicioLabel poner class="col-sm-2 col-sm-2 control-label" -->  
                          <label class="col-sm-2 col-sm-2 control-label" for="observaciones">Observaciones:</label>
                          <!--FinLabel-->  
                          <div class="col-sm-6">
                            <!-- InicioInput poner class="form-control"-->
                           <input class="form-control" name="observaciones" id="observaciones" type="text" maxlength="100" placeholder="Llamar a primera hora para despachar">

                            <!-- FinInput -->
                          </div>                        
                          </div>
                    

                  <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-left">Registrar</button>
                  </div><!-- /.box-footer -->
                   </div>
                </form>
             
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
          iterator experience. Slimscroll is required when using the
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
            idcliente: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                     integer: {
                        message: 'Solo se permite el ingreso de números'
                    }
                }
            },
            idproducto: {
                validators: {
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                     integer: {
                        message: 'Solo se permite el ingreso de números'
                    }
                }
            },
            nombrecliente: {
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
            telefono:{
              validators:{
                 notEmpty:{
                    message: 'Este campo es requerido'
                  },
                  integer:{
                    message: 'Solo se permite el ingreso de números'
                  },
                 
                  stringLength:{
                    min:7,
                    max:11,
                    message: 'Este campo debe tener mínimo 7 números y máximo 11'
                  }

              }


            },
            
            direccion:{
              validators:{
                notEmpty:{
                    message: 'Este campo es requerido'
                }
              }
            },
            fecha:{
              validators:{
                date: {
                        format: 'DD/MM/YYYY',
                        message: 'Ingrese una fecha válida'
                  },
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
            cantidad:{
              validators:{
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },
                    integer:{
                      message: 'Solo se permiten números'
                    }

              }

            },

            iva:{
                    notEmpty: {
                        message: 'Este campo es requerido'
                    },

                    integer:{
                      message: 'Solo se permiten números'
                    }
            }
        
    
        }
    });
});
</script>
</html>
