<?php
session_start();
include_once("../includes/connection.php");
if(!isset($_POST['action']))
header("location: company.php");
$name = mysqli_real_escape_string($db, $_POST['action']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="msapplication-tap-highlight" content="no">
  <meta name="description" content="">
  <title> Placement  Cell | IIIT Guwahati</title>
  <!-- Favicons-->
  <!-- <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
  <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32"> -->
  <!--  Android 5 Chrome Color-->
  <meta name="theme-color" content="#EE6E73">
  <!-- CSS-->
  <link href="../css/prism.css" rel="stylesheet">
  <link href="../css/style_m.css" rel="stylesheet">
  <link href="../css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="import" href="./navbar.html">
  <script>
  window.liveSettings = {
    api_key: "a0b49b34b93844c38eaee15690d86413",
    picker: "bottom-right",
    detectlang: true,
    dynamic: true,
    autocollect: true
  };
  </script>
  <script src="../js/live.js"></script>
	<style>
		.tt {
    font-family: "Times New Roman", Times, serif;font-size: 20px;
	}	</style>
</head>
<link rel="shortcut icon" 
      type="image/x-icon" 
      href="../images/iiitg_logo.ico" >

</head>

<body>
<!--   <div id="containerx"></div>
  <script>
    var link = document.querySelector('link[rel="import"]');

    // Clone the <template> in the import.
    var template = link.import.querySelector('template');
    var clone = document.importNode(template.content, true);

    document.querySelector('#containerx').appendChild(clone);
  </script>-->
    
     <header>
      <div class="row" style="z-index:100;position">
 
       <a href="#" data-activates="nav-mobile" class="left col s12 button-collapse top-nav waves-effect waves-light circle hide-on-large-only blue-text" style="width:50%;"><i style="margin:9px;" class="left material-icons">menu</i></a>
          
       <a href="../includes/stu_logout.php" class="btn right customblue" style="position:fixed;padding:0;padding-right:5px;padding-left:5px;z-index:100;margin-right:12px;margin-top:12px;font-size:12px;right:0;" >LOGOUT<i class="right material-icons">lock_open</i></a>   

      </div>

      <ul id="nav-mobile" class="side-nav fixed">

          <!-- Logo GOes Here -->
          <li class="logo" style="margin:0;margin-top:21px;margin-bottom:12px;">
            <a id="logo-container" href="../" class="brand-logo" style="margin:0;">
               <img id="front-page-logo" src="../images/iiitg.png" alt="iitg" style="margin:0;">
            </a>
          </li>
          <li class="logo" style="margin:0;margin-bottom:-15px;">
            <a id="logo-container" href="./about.html" class="brand-logo" style="margin:0;">
               <img src="../images/pcell.png" alt="iiitg-pcell" style="height:55px;margin:0;">
            </a>
          </li>


  <li class="no-padding">
  <ul class="collapsible collapsible-accordion">
    <li class="bold"><a href="home.php" class="collapsible-header  waves-effect waves-teal ">HOME</a>
    </li>

    <li class="bold"><a href="company.php" class="collapsible-header  waves-effect waves-teal active">COMPANIES</a>
    </li>

    <li class="bold"><a href="upd_profile.php" class="collapsible-header  waves-effect waves-teal">UPDATE PROFILE</a>
    </li>

    <li class="bold"><a href="faq.php" class="waves-effect waves-teal">FAQ</a></li>

    <li class="bold"><a href="download.php" class="collapsible-header  waves-effect waves-teal">DOWNLOAD RESUME</a>
    </li>

    <li class="bold"><a href="placement_team.php" class="collapsible-header  waves-effect waves-teal">Placement Team</a>
    </li>

  </ul>
</li>

    </header>
    
       <main>
<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
    <a class="btn tooltipped btn-floating btn-large customblue"  data-position="top" data-delay="50" data-tooltip="IIITG Home"  href="../">
      <i class="large material-icons">home</i>
    </a>
</div>

      </div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['rec_username'])) : ?>
    	
    	<p> </p>
    <?php endif ?>
</div>

<div class="container"  style="margin-left:15px;margin-right:0px;">
  <!--  Outer row  -->
  <div class="row">

    <div class="col s12 m9 l10">

      <div id="home" class="section scrollspy">
        <div class="card-panel grey lighten-5 z-depth-3" style="width:1000px;">
        <div class="row">

         <div class = "col s6">

          <?php
			$sql = "SELECT * FROM company WHERE name='$name'";
			$result = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($result);
			$c_id = $row['c_id'];
		?>
        </div>
          <h5>PROFILE</h5>

          <table class="striped centered  tt">
        <thead>
          <tr>
              <center>  <img class="l3 s3 m3 responsive-img"  src="../images/<?php echo $c_id ?>" style="margin-top:18px;max-height:200px;border-radius: 50%;"></img></center> 
          </tr>            
            </table>  

<ul class="collection flow-text">
    <li class="collection-item avatar">
      <i class="material-icons circle green">perm_identity</i>
      <span class="title">Name: </span>
      <p ><?php 
                  
                  echo $row['name'];
                  ?>
      </p>
    </li>

    <li class="collection-item avatar">
      <i class="material-icons circle">folder</i>
      <span class="title">EMail: </span>
      <p><?php 
                  echo $row['email'];echo " ";
                  ?>
      </p>
    </li>

    <li class="collection-item avatar">
      <i class="material-icons circle green">business</i>
      <span class="title">Phone: </span>
      <p><?php 
                  echo $row['phone'];echo " ";
                  ?>
      </p>
    </li>


    <li class="collection-item avatar">
<i class="material-icons circle red">my_location</i>
      <span class="title">Perm. Address</span>
      <p><?php 
                  echo $row['address'];echo " ";
                  ?>
      </p>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle blue">label</i>
      <span class="title">No. of Positions</span>
      <p><?php 
                  echo $row['no_pos'];echo " ";
                  ?>
      </p>
    </li>
    <li class="collection-item avatar">
      <i class="material-icons circle red">polymer</i>
      <span class="title">Website: </span>
      <p><?php 
                  echo $row['website'];echo " ";
                  ?>
      </p>
    </li>
	<h3>Jobs Available:</h3>
	<?php $sql = "SELECT * FROM jobs WHERE c_id='$c_id'";
			$result = mysqli_query($db, $sql);
    while($row = mysqli_fetch_array($result)) { ?>
	<li class="collection-item avatar">
      <i class="material-icons circle red">polymer</i>
      <span class="title"> </span>
      <p><?php 
                  echo "Position: ".$row['position'];echo "<br><br>";
				  echo "Package: ".$row['package'];echo "<br><br>";
					echo "CPI Required: ".$row['cpi'];echo "<br><br>";
					echo "Department: ".$row['dept'];echo "<br><br>";
					echo "Deadline: ".$row['deadline'];echo "<br><br>";
					echo "Work Location: ".$row['work_location'];echo "<br><br>";
					$j_id = $row['j_id'];
                  ?>	
				<form method="post" action='download_list.php'> <button type="submit" name="action" value="<?php $app = "APPLY"; echo $j_id; ?>" class=' btn  waves-effect blue darken-4'> <?php $sql2 = "SELECT s_id FROM applied where j_id = '$j_id'";
              $result2 = mysqli_query($db, $sql2);
              ?>Download</button></form>
      </p>
    </li>
	<?php } ?>
  </ul>
          </div>
      </div>          
        </div>





    </main>
    
    <footer class="page-footer">

      <!--
      <div class="container">
        <div class="row">
          <div class="col l4 s12">

          </div>
        </div>
      </div>
       -->

      <div class="footer-copyright">
        <div class="container">
          <a class="grey-text text-lighten-4 left" href="./index.html">Placement  Cell, IIIT Guwahati</a>
        </div>
      </div>
    </footer>

    <!--  Scripts-->
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>
    <script src="../js/jquery.timeago.min.js"></script>
    <script src="../js/prism.js"></script>
    <script src="../jade/lunr.min.js"></script>
    <script src="../jade/search.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/init.js"></script>

    <style style="text/css">
      .example1 {
       height: 50px;
       overflow: hidden;
       position: relative;
      }
      .example1 p {
       position: absolute;
       width: 100%;
       height: 100%;
       margin: 0;
       line-height: 50px;
       text-align: center;
       /* Starting position */
       -moz-transform:translateX(100%);
       -webkit-transform:translateX(100%);
       transform:translateX(100%);
       /* Apply animation to this element */
       -moz-animation: example1 15s linear infinite;
       -webkit-animation: example1 15s linear infinite;
       animation: example1 15s linear infinite;
      }
      /* Move it (define the animation) */
      @-moz-keyframes example1 {
       0%   { -moz-transform: translateX(100%); }
       100% { -moz-transform: translateX(-100%); }
      }
      @-webkit-keyframes example1 {
       0%   { -webkit-transform: translateX(100%); }
       100% { -webkit-transform: translateX(-100%); }
      }
      @keyframes example1 {
       0%   {
       -moz-transform: translateX(100%); /* Firefox bug fix */
       -webkit-transform: translateX(100%); /* Firefox bug fix */
       transform: translateX(100%);
       }
       100% {
       -moz-transform: translateX(-100%); /* Firefox bug fix */
       -webkit-transform: translateX(-100%); /* Firefox bug fix */
       transform: translateX(-100%);
       }
      }
    </style>

<script>
function change_text(field,field1){
event.preventDefault();

document.getElementById(field).style.display="none";
document.getElementById(field1).style.display="block";

}
</script>
  </body>
  </html>

