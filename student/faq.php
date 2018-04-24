<?php 
  session_start(); 

  if (!isset($_SESSION['stu_username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['stu_username']);
  	header("location: login.php");
  }
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
    <li class="bold"><a href="home.php" class="collapsible-header  waves-effect waves-teal">HOME</a>
    </li>

    <li class="bold"><a href="company.php" class="collapsible-header  waves-effect waves-teal">COMPANIES</a>
    </li>

    <li class="bold"><a href="upd_profile.php" class="collapsible-header  waves-effect waves-teal">UPDATE PROFILE</a>
    </li>

    <li class="bold"><a href="faq.php" class="waves-effect waves-teal active">FAQ</a></li>

     <li class="bold"><a href="generate_cv.php" class="collapsible-header  waves-effect waves-teal">Generate RESUME</a>
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

      <div class="container">
        <!--  Outer row  -->
        <div class="row">

          <div class="col s12 m9 l10">

            
            <!--  STaRT :: Research-->
         <div id="faq" class="section scrollspy">
                
                <h5 class="header">FAQ</h5>
                <p class="caption">
The Placement Process aims to match the necessities of the Corporate World with the objectives of the students thereby expediting the achievement of synergy between the two. The placement cell is involved in this process right from the beginning of the year. Right from the preparation of the placement brochure to the pre placement sessions to the final recruitments, the efforts are always directed towards providing the best interface suited to the students and the company.
<br><b></b><br>
Following are the questions designed to ease out the questions that often students have in their minds.
<br><b></b><br>                  
<b>1. What is Campus Placement?</b><br>
Companies which would like to recruit freshers visit the institutes, conduct the process of recruitment and recruit the students when they are in final year of engineering. It will be a day-long process.
<br><b></b><br>
<br><b>2. When do campus placements happen in the Institute?</b><br>
Normally, the campus placement procedure takes place in the middle of the seventh semester. It starts in the month of September and goes on till the end of the academic year and sometimes even beyond that. 
<br><b></b><br>
<br><b>3. What is to be done to participate in the campus placements?</b><br>
Students interested in the campus placements should register themselves with the placement cell when the notice is put up on Vidyalankarlive for the same.
<br><b></b><br>
<br><b>4. What is aptitude test?</b><br>
->Consists of verbal reasoning, logical reasoning and mathematics.
<br><b></b><br>
->Duration of the test varies, depending on the company.
<br><b></b><br>
->Every company has minimum marks section-wise or overall.
<br><b></b><br>
->Some companies have negative marking also.
<br><b></b><br>
->Those who clear the aptitude test will go to the next round of the selection process.
<br><b></b><br>
<br><b>5. What is personal interview (HR)?</b><br>
->HR interviews are conducted to evaluate soft skills and confidence.
<br><b></b><br>
->It ensures that the company is not only hiring a person who is good technically but also someone who fits in to the company and its culture.
<br><b></b><br>
->The attitude of the students is tested in this round of interview.
<br><b></b><br>
->When a student is giving personal interview, how he/she enters and walks in to the room, how he/she sits, how and what he/she answers are all important.
<br><b></b><br>
<br><b>6. What are the documents to be carried by the the students on the day of campus placements?</b><br>
->College identity card.
<br><b></b><br>
->Updated resume in the given format (3 copies)
<br><b></b><br>
->Original and photocopies of mark sheets and other certification if any.
<br><b></b><br>
->2 passport size photographs.
<br><b></b><br>
->Students should be formally dressed and follow code of conduct.

<br><b></b><br>
<br>
            </div>
            <!--  End :: Research -->
        
          
            
        </div>

        </div>
      </div> <!-- End Container -->
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

