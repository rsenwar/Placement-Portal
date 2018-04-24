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
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
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
  </script><script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
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

                <li class="bold"><a href="add_job.php" class="collapsible-header  waves-effect waves-teal active">ADD JOB</a>
                </li>
			<li class="bold"><a href="applications.php" class="collapsible-header  waves-effect waves-teal">APPLICATIONS</a>
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


  </ul>
</li>

</header>

<main>
  <form class="col s12" method="post" action='../includes/rec_job.php' >
    <div class="row">
     <h3 class="header" style="color:blue;font-weight: 300;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">Add Job</h3><br>
     <div class="input-field col s6">
    
      <input  id="position" name = "position" type="text" class="validate" value="" required>
      <label for="position">Job Position</label>
    </div>
     <div class="input-field col s6">
      
      <select name = "dept" required>
        <option value="" disabled="disabled" selected="selected">Choose your Dept.</option>
                <option value="CSE">CSE</option>
       <option value="ECE" >ECE</option>
		<option value="BOTH" >BOTH</option>
              </select>
      <label>Department</label>
   </div>
  </div>
  <div class="row">
    <div class="input-field col s6">
      
      <input id="package" name = "package" type="text" value="" class="validate" data-length="7" required>
      <label for="package">Package Offered</label>
      <span class="helper-text" data-error="wrong" data-success="right"></span>
    </div>

         <div class="input-field col s6">
            <input type="text" id="datepicker" name = "datepicker">
            <label for="idate">Deadline</label>
          </div>
  </div>
	
  <div class="row">
    <div class="input-field col s6">
      
      <input id="cpi" name = "cpi" type="text" value="" class="validate" required>
      <label for="cpi">CPI Requirement</label>
    </div>

  <div class="input-field col s6">
    
    <input id="work_location" name = "work_location" type="text" value="" class="validate" required>
    <label for="work_location">Work Location</label>
  </div>
  </div>
       
<div class='row'>  <div class="input-field col s6">
    
    <input id="j_id" name = "j_id" type="text" value="" class="validate" required>
    <label for="work_location">Job Id</label>
  </div>
<div class="input-field col s6">
  <button type='submit' name='add_job' class='col s12 btn btn-large waves-effect blue darken-4'>CREATE</button></div>
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

