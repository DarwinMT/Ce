<!DOCTYPE html>
<html>
<head>
	<title>Home Materialize</title>
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--Jquery-->
	<script type="text/javascript" src="<?php echo base_url(); ?>/assetsall/jquery-3.1.1.min.js" ></script>

	<!--Materialize-->
	
	<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script type="text/javascript" src="<?php  echo base_url();?>/assetsm/js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assetsm/css/materialize.min.css">


	<!--Angular Js-->
	<script type="text/javascript" src="<?php  echo base_url();?>/app/angular/angular.min.js"></script>
	<script type="text/javascript" src="<?php  echo base_url();?>/app/angular/angular-route.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$(".button-collapse").sideNav();
			$('.modal-trigger').leanModal();
			$('.datepicker').pickadate({
			    selectMonths: true, // Creates a dropdown to control month
			    selectYears: 15 // Creates a dropdown of 15 years to control year
			});


		});

	</script>


	<!--Aplicacion angular-->
	<script type="text/javascript" src="<?php  echo base_url();?>/app/app/appm.js"></script>
	<script type="text/javascript" src="<?php  echo base_url();?>/app/app/controlerm.js"></script>
</head>
<body ng-app="Ce" ng-cloak>
<div class="navbar-fixed" >
	 <nav>
    <div class="nav-wrapper  ">
      <a href="#!" class="brand-logo">Logo</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        
      </ul>
      <ul class="side-nav " id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        
      </ul>


    </div>
  </nav>
</div>
<div class="container">
	<div class="row">
		<div class="col s12">
				<div ng-view></div>
		</div>
	</div>
</div>

</body>
</html>