<?php 
session_start(); 

if (!isset($_SESSION['admin_username'])) {
 $_SESSION['msg'] = "You must log in first";
 header('location: login.php');
}
if (isset($_GET['logout'])) {
 session_destroy();
 unset($_SESSION['admin_username']);
 header("location: login.php");
}
?>
<?php 
include_once("../includes/connection.php");
$s_id = $_SESSION['admin_username'];
$sql = "SELECT * FROM student_info where s_id = '$s_id'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
$s_id = mysqli_real_escape_string($db, $s_id);
$f_name = mysqli_real_escape_string($db, $row['f_name']);
$l_name = mysqli_real_escape_string($db, $row['l_name']);
$roll_no = mysqli_real_escape_string($db, $row['roll_no']);
$dept = mysqli_real_escape_string($db, $row['dept']);
$email = mysqli_real_escape_string($db, $row['email']);
$cpi = mysqli_real_escape_string($db, $row['cpi']);
$perm_add = $row['perm_add'];
$prog = mysqli_real_escape_string($db, $row['prog']);
$gender = mysqli_real_escape_string($db, $row['gender']);
$cont_no = mysqli_real_escape_string($db, $row['contact_no']);

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

     <a href="./pdfjs/web/viewer.html?file=placement_2017.pdf" class="btn right customblue tooltipped" style="position:fixed;padding:0;padding-right:5px;padding-left:5px;z-index:100;margin-right:12px;margin-top:12px;font-size:12px;right:0;" data-position="bottom" data-delay="50" data-tooltip="Placement Cell Brochure">Brochure<i class="right material-icons">library_books</i></a>   

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

    <li class="bold"><a href="company.php" class="collapsible-header  waves-effect waves-teal">COMPANIES</a>
    </li>

    <li class="bold"><a href="upd_profile.php" class="collapsible-header  waves-effect waves-teal active">UPDATE PROFILE</a>
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
  <form class="col s12" method="post" action='../includes/admin_update.php' >
    <div class="row">
     <h3 class="header" style="color:blue;font-weight: 300;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">Update Profile</h3><br>
     <div class="input-field col s6">
      <i class="material-icons prefix">account_circle</i>
      <input  id="f_name" name = "f_name" type="text" class="validate" value="<?php echo $f_name;?>" required>
      <label for="f_name">First Name</label>
    </div>
    <div class="input-field col s6">
      <input id="l_name" name = "l_name" type="text" value="<?php echo $l_name;?>" class="validate" required>
      <label for="l_name">Last Name</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s6">
      <i class="material-icons prefix">keyboard_arrow_right</i>
      <input id="roll_no" name = "roll_no" type="text" value="<?php echo $roll_no;?>" class="validate" data-length="7" required>
      <label for="roll_no">Roll No.</label>
      <span class="helper-text" data-error="wrong" data-success="right"></span>
    </div>
    <div class="input-field col s6">
      <i class="material-icons prefix">business</i>
      <select name = "dept" required>
        <option value="" disabled="disabled" selected="selected">Choose your Dept.</option>
        <?php if($dept=="ECE") { ?>
        <option value="CSE">CSE</option>
        <option value="ECE" selected>ECE</option>
        <?php } else { ?>
        <option value="CSE" selected>CSE</option>
        <option value="ECE" >ECE</option>
        <?php } ?>
      </select>
      <label>Department</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s6">
      <i class="material-icons prefix">email</i>
      <input id="email" name = "email" type="email" value="<?php echo $email;?>" class="validate" required>
      <label for="email">Email</label>
    </div>
    <div class="input-field col s6">
      <i class="material-icons prefix">grade</i>
      <input id="cpi" name = "cpi" type="text" value="<?php echo $cpi;?>" class="validate" required>
      <label for="cpi">CPI</label>
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
      <i class="material-icons prefix">keyboard_arrow_up</i>
      <select name = "prog" required >
        <?php if($prog=="B.Tech") {
         ?>
         <option value="" disabled="disabled" >Programme</option>
         <option value="B.Tech" selected>B.Tech</option>
         <option value="M.Tech">M.Tech</option>
         <option value="Phd">Phd</option>
         <?php } else if($prog=="M.Tech") {?>
         <option value="" disabled="disabled" >Programme</option>
         <option value="B.Tech" >B.Tech</option>
         <option value="M.Tech" selected>M.Tech</option>
         <option value="Phd">Phd</option>
         <?php } else { ?>
         <option value="" disabled="disabled" >Programme</option>
         <option value="B.Tech" >B.Tech</option>
         <option value="M.Tech">M.Tech</option>
         <option value="Phd" selected>Phd</option>
         <?php } ?>
       </select>
       <label>Programme</label>
     </div>
      <div class="input-field col s6">
        <i class="material-icons prefix">wc</i>
        <select name = "gender" required>
          <option value="" disabled="disabled" value="<?php echo $gender;?>" selected="selected">Gender</option>
          <?php if($gender=="Male") { ?>
          <option value="Male" selected>Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
          <?php } else if($gender=="Female") { ?>
          <option value="Male" >Male</option>
          <option value="Female" selected>Female</option>
          <option value="Other">Other</option>
          <?php } else { ?>
          <option value="Male" >Male</option>
          <option value="Female" >Female</option>
          <option value="Other" selected>Other</option>
          <?php } ?>
        </select>
        <label>Gender</label>
      </div>
    </div>
    <div class="row">
      <div class="col s6">
  <div class="input-field col s6">
    <i class="material-icons prefix">local_phone</i>
    <input id="cont_no" name = "cont_no" type="text" value="<?php echo $cont_no;?>" class="validate" required>
    <label for="cont_no">Contact No.</label>
  </div>
</div>
</div>
<div class='row'><div class="input-field col s6">
  <button type='submit' name='admin_update1' class='col s12 btn btn-large waves-effect blue darken-4'>UPDATE</button></div>
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

