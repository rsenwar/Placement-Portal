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
include("../includes/connection.php");
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
			<li class="bold"><a href="applications.php" class="collapsible-header  waves-effect waves-teal active">APPLICATIONS</a>
                </li>
            <li class="bold"><a href="upd_profile.php" class="collapsible-header  waves-effect waves-teal">UPDATE PROFILE</a>
            </li>
            <li class="bold"><a href="print_list.php" class="collapsible-header  waves-effect waves-teal">Print List</a>
            </li>
     	<li class="bold"><a href="faq.php" class="waves-effect waves-teal active">FAQ</a></li>
            <li class="bold"><a href="placement_team.php" class="collapsible-header  waves-effect waves-teal">Placement Team</a>
            </li>
            </ul>
          </li>

</header>

<main>
	<div class="container">
    <!--  Outer row  -->
    <div class="row">

      <div class="col s12 m9 l10">

        <div id="home" class="section scrollspy">

          <div class="row">

           <div class = "col s6">

            <?php 
            
            $c_id = $_SESSION['rec_username'];
            $sql = "Select concat(student_info.f_name,' ',student_info.l_name) as name,student_info.s_id as sid,applied.j_id as jid from student_info,jobs,applied where applied.j_id = jobs.j_id and jobs.c_id='$c_id' and student_info.s_id=applied.s_id
";
            $result = mysqli_query($db, $sql);
            ?>
          </div>
          <div style="margin-right:500px;border:0px solid blue;padding:0px;">
            <h5>LIST OF Applications</h5></div>
            
            <table class="striped tt">
              <tbody><?php while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                  <td><a href = "../student/Cvs/<?php echo $row['sid'];?>"><?php echo $row['name']; echo "</td><td>"; echo " ".$row['jid'];?></td>
                </tr>
                <?php } ?>
              </tbody>
            </table> 

          </div>
        </div>

      </div>
    </main>

    

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
