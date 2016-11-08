<!DOCTYPE html>
<html>
<head>
	<title>Login Materialize</title>
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!--Jquery-->
	<script type="text/javascript" src="<?php echo base_url(); ?>/assetsall/jquery-3.1.1.min.js" ></script>


	<!--Materialize-->
	
	<!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script type="text/javascript" src="<?php  echo base_url();?>/assetsm/js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assetsm/css/materialize.min.css">
	
<style type="text/css">
	body { 
	  background: url(<?php echo base_url(); ?>/assetsr/img/f1.jpg) no-repeat center center fixed; 
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
	}
	#login-page{
		max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
	}
</style>	
</head>
<body>


  <div id="login-page" class="row">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" action="<?php echo base_url().'login' ; ?>" method="post">
        <div class="row">
          <div class="input-field col s12 center">
            <!--<img src="images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">-->
            <p class="center login-form-text">Inciar sesión</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">account_circle</i>
            <input id="username" type="email" name="email" placeholder="Email address" required="required">
            
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input id="password" type="password" name="password" placeholder="Password" required="required">
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Recordar contraseña</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <button class="btn waves-effect waves-light col s12"> Entrar</button>
          </div>
        </div>
       <!-- <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="page-register.html">Register Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="page-forgot-password.html">Recordar contraseña</a></p>
          </div>-->          
        </div>

      </form>
    </div>
  </div>

</body>
</html>