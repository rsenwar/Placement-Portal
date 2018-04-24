<?php include('../includes/admin_server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>IIIT Guwahati Placement Portal</title>
  <link rel="shortcut icon" 
      type="image/x-icon" 
      href="./iiitg_logo.ico" >
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
    body {
	  background-image: url("building.jpg");
      display: flex;
      min-height: 100vh;
      flex-direction: column;
		max-width: 1000px;
    	margin: auto;
	    display: block;
    	margin-left: auto;
    	margin-right: auto;
		background: #F3F3F3;
    }

    main {
      flex: 1 0 auto;
    }

   

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #002C66;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #002C66;
      box-shadow: none;
    }
.container {
  animation: showUp 0.5s cubic-bezier(0.18, 1.3, 1, 1) forwards;
}

@keyframes showUp {
  0% {
    transform: scale(0);
  }
  100% {
    transoform: scale(1);
  }
}
  </style>
</head>

<body>
<div class='nav-wrapper content' style='background-color:#ffffff;'>
       <div class='special_container white row customshadow' style='margin-bottom:0;'>
           <div id='logo' class='col s12'>
            <a href='http://iiitg.ac.in/'><img class='reponsive-img' style='display: block;margin: 0 auto;width: 100%;max-width: 600px;height: auto;' src='../images/header.png'></img></a>
           </div>
       </div>
  <main>
    <center>
      
      <div class="boxx">

      <h5 class="indigo-text">Admin Login</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post" action='login.php'>
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='username'  />
                <label for='emai'>Enter your user id</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
              <label style='float: right;'>
								<a class='blue-text' href='#!'><b>Forgot Password?</b></a>
							</label>
					
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='login_user1' class='col s12 btn btn-large waves-effect blue darken-4'>Login</button>
              </div>
            </center>

		<center>
              <div class='row red-text'>
               <?php if (isset($_SESSION['msg']))
				{
    				echo $_SESSION['msg'];
    			unset($_SESSION['msg']);
				} ?>
              </div>
            </center>

          </form>
        </div>
      </div>
      <a href="register.php">Create account</a>
	</div>
    </center>
  </main>
<footer class='page-footer' style='background-color:#cdcdcd;padding-top:0px;'>
<div class='container grey-text text-darken-3'>
            <p class='left'>@ 2017 IIIT Guwahati</p>
            <p class='right'>IIIT Guwahati,G.N.B Road -781001</p>
            </div>
</footer>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</body>

</html>

