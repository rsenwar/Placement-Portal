<?php 
session_start(); 

if (!isset($_SESSION['rec_username'])) {
 $_SESSION['msg'] = "You must log in first";
 header('location: login.php');
}
if (isset($_GET['logout'])) {
 session_destroy();
 unset($_SESSION['rec_username']);
 header("location: login.php");
}
?>
<?php 
include_once("../includes/connection.php");
$c_id = $_SESSION['rec_username'];
$sql = "SELECT * FROM company where c_id = '$c_id'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);

$c_id = mysqli_real_escape_string($db, $c_id);
$name = mysqli_real_escape_string($db, $row['name']);
$email = mysqli_real_escape_string($db, $row['email']);
$perm_add = $row['address'];
$phone = mysqli_real_escape_string($db, $row['phone']);
$web = mysqli_real_escape_string($db, $row['website']);
$n_pos = mysqli_real_escape_string($db, $row['no_pos']);

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

<a href="../includes/rec_logout.php" class="btn right customblue" style="position:fixed;padding:0;padding-right:5px;padding-left:5px;z-index:100;margin-right:12px;margin-top:12px;font-size:12px;right:0;" >LOGOUT<i class="right material-icons">lock_open</i></a> 

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
                <li class="bold"><a href="home.php" class="collapsible-header  waves-effect waves-teal">HOME</a>
                </li>

                <li class="bold"><a href="add_job.php" class="collapsible-header  waves-effect waves-teal">ADD JOB</a>
                </li>
			<li class="bold"><a href="applications.php" class="collapsible-header  waves-effect waves-teal">APPLICATIONS</a>
                </li>
            <li class="bold"><a href="upd_profile.php" class="collapsible-header  waves-effect waves-teal active">UPDATE PROFILE</a>
            </li>
            <li class="bold"><a href="print_list.php" class="collapsible-header  waves-effect waves-teal">Print List</a>
            </li>
     	<li class="bold"><a href="faq.php" class="waves-effect waves-teal active">FAQ</a></li>
            <li class="bold"><a href="placement_team.php" class="collapsible-header  waves-effect waves-teal">Placement Team</a>
            </li>
            </ul>
          </li>

  </ul>
</li>

</header>

<main>
  <form class="col s12" method="post" action='../includes/rec_update.php'>	
	<div class="row"> <h3>UPDATE PROFILE</h3></div>
	<div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        <input  id="c_id" name = "c_id" type="text" class="validate" required value="<?php echo $c_id?>">
        <label for="c_id">User Id</label>
      </div>
      <div class="input-field col s6">
        <i class="material-icons prefix">email</i>
        <input id="password" name = "password" type="password" class="validate" data-length="7" required>
        <label for="password">Password</label>
        <span class="helper-text" data-error="wrong" data-success="right"></span>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        <input  id="name" name = "name" type="text" class="validate" required value="<?php echo $name;?>">
        <label for="name">Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">email</i>
        <input id="email" name = "email" type="text" class="validate" data-length="7" required value="<?php echo $email;?>">
        <label for="email">Email</label>
        <span class="helper-text" data-error="wrong" data-success="right"></span>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">local_phone</i>
        <input id="phone" name = "phone" type="text" class="validate" required value="<?php echo $phone;?>">
        <label for="phone">Phone</label>
      </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">explore</i>
          <textarea id="perm_add" name = "perm_add" class="materialize-textarea" required><?php echo $perm_add;?></textarea>
          <label for="perm_add">Permanent Address</label>
        </div>
      </div>
    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">web</i>
        <input id="website" name = "website" type="text" class="validate" required value="<?php echo $web;?>">
        <label for="website">Website</label>
      </div>
	      <div class="input-field col s6">
        <i class="material-icons prefix">people_outline</i>
        <input id="no_pos" name = "no_pos" type="text" class="validate" required value="<?php echo $n_pos;?>">
        <label for="no_pos">No. of Positions</label>
    </div>
    <center>
              <div class='row'><div class="input-field col s6">
                <button type='submit' name='rec_update1' class='col s12 btn btn-large waves-effect blue darken-4'>UPDATE</button></div></form><form method="post" action='../includes/stu_logout.php'>
				</form>





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
<script>
  $(document).ready(function() {
    $('select').material_select();
  });</script><script>
    $('#per_ad').val('New Text');
  M.textareaAutoResize($('#perm_add'));</script>
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

