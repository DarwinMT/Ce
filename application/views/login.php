<!DOCTYPE html>
<html>
<head>
	<title>Login Boostrap 3</title>
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--Jquery-->
	<script type="text/javascript" src="<?php echo base_url(); ?>/assetsall/jquery-3.1.1.min.js" ></script>


	<!--Bootstrap-->
	<script type="text/javascript" src="<?php  echo base_url();?>/assetsb/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assetsb/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assetsb/css/bootstrap-theme.min.css">

<style type="text/css">
	body { 
	  background: url(<?php echo base_url(); ?>/assetsr/img/f2.jpg) no-repeat center center fixed; 
	  -webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
	}
	body {
        padding-top: 40px;
        padding-bottom: 40px;
        
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
     
</style>

</head>
<body>
<div class="container">

    <form class="form-signin" action="<?php echo base_url().'index.php/sesion/init_sesion' ; ?>" method="post">
        <h2 class="form-signin-heading">
        	Iniciar sesión
        </h2>
        <input type="email" class="form-control" name="email" placeholder="Email address" required="required">
        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Recordar contraseña
        </label>

        <div class="text-right">
        	<button class="btn  btn-primary" type="submit">Entrar</button>
        </div>
    </form>

</div>
</body>
</html>