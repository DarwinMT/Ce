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


	<!--Angular Js-->
	<script type="text/javascript" src="<?php  echo base_url();?>/app/angular/angular.min.js"></script>
	<script type="text/javascript" src="<?php  echo base_url();?>/app/angular/angular-route.min.js"></script>


	<!--Aplicacion angular-->
	<script type="text/javascript" src="<?php  echo base_url();?>/app/app/app.js"></script>	

</head>
<body ng-app="Ce" ng-cloak>

		<div ng-view></div>
</body>
</html>