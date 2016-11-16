<!DOCTYPE html >
<html>
<head>
	<title>Home Boostrap</title>
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Jquery-->
	<script type="text/javascript" src="<?php echo base_url(); ?>/assetsall/jquery-3.1.1.min.js" ></script>

	<!--Bootstrap-->
	<script type="text/javascript" src="<?php  echo base_url();?>/assetsb/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assetsb/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assetsb/css/bootstrap-theme.min.css">

	<!--Tema-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assetsb/css/tema.css">


	<!--Angular Js-->
	<script type="text/javascript" src="<?php  echo base_url();?>/app/angular/angular.min.js"></script>
	<script type="text/javascript" src="<?php  echo base_url();?>/app/angular/angular-route.min.js"></script>


	<!--Aplicacion angular-->
	<script type="text/javascript" src="<?php  echo base_url();?>/app/app/app.js"></script>
	<script type="text/javascript" src="<?php  echo base_url();?>/app/app/controler.js"></script>

</head>
<body ng-app="Ce" ng-cloak>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Ce</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">Empresa</a></li>
            <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Personas
            <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                  <li><a href="#AddPersona"><i class="glyphicon glyphicon-plus"></i> Agregar Persona</a></li>
                  <li class="divider"></li>
                  <li><a href=""><i class="glyphicon glyphicon-list-alt"></i> Administradores</a></li>

                  <li class="divider"></li>
                  <li><a href=""><i class="glyphicon glyphicon-list-alt"></i> Empleados</a></li>

                  <li class="divider"></li>
                  <li><a href=""><i class="glyphicon glyphicon-list-alt"></i> Proveedores</a></li>

                  <li class="divider"></li>
                  <li><a href="#ListClient"><i class="glyphicon glyphicon-list-alt"></i> Clientes</a></li>
                </ul>

            </li>
            <li><a href="#">Profile</a></li>
            <li class="dropdown"><a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" ><i class="glyphicon glyphicon-user"></i> <?php 
                echo $usuario["Nombre"];
             ?> <span class="caret"></span> </a>
                <ul class="dropdown-menu">
                  <li><a href="saliruser"><i class="glyphicon glyphicon-asterisk"></i> Salir</a></li>
                </ul>
             </li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

   <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#Report">Reports</a></li>
            <li><a href="#333">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>



        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="row placeholders">


            <div ng-view></div>
            
            
          </div>  
        </div>


      </div>
    </div>



		<!--<div ng-view></div>-->
</body>
</html>