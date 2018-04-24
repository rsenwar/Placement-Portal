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
<b>1. How well is Guwahati connected with the rest of the country?</b><br>
Guwahati, which is the gateway for North East India, is well connected by air, rail and road with the rest of the country. There are direct air services from/to Bangalore, Mumbai, New Delhi and Kolkata with connectivity to all major cities in the country and direct train services from/to all the metropolises and other major cities.
<br><b>2. How to reach the institute?</b><br>
The institute is around 22 km from the Guwahati Airport. Pre-paid taxis are available in the airport. Taxis are available for transport within the city and can be booked online (prime cabs, swiss cabs, ola, uber, etc.). Auto-rickshaws are available but there are no meters and fares have to be negotiated beforehand. There is also an extensive network of city buses. 
<br><b>3. When does the placement session begin and for how long does it continue?</b><br>
The Placement Session would begin in the 1st week of December 2016 and continue till May 2017. Companies are encouraged to visit the campus before the placement session begins to give Pre-Placement Talks to our students and introduce them to the job profiles and job culture of their company. This does have a direct bearing on the interest shown by students when the company visits the campus later for placements.
<br><b>4. We are under the impression that we can recruit students only if their discipline is related our Industry. Is this so?</b><br>
No, the institute imposes no restrictions in this regard. Companies can opt to recruit students from any department or discipline.
<br><b>5. What are the Accommodation and Transportation facilities available in Guwahati?</b> 

                </p>
           
            
            <!--  STaRT :: hotels-cabs-->
            <div id="hotels-and-cabs" class="section scrollspy">
                <h5 style="margin-top:0;">Accommodation</h5>
                <p>Guwahati is one of best cities in north-east with good number of hotels with top class facilities.And we have mentioned some of them below for your convenience</p>
                <table class="demo" style="width:100%;margin:auto;padding-bottom: 0px;">
											<thead>
											<tr>
												<th><center>Hotel Name</center></th>
												<th><center>Address</center></th>
												<th><center>Contact No.</center></th>
												<th><center>Website</center></th>
											</tr>
											</thead>
											<tbody>
                                                                                        <tr>
												<td>Taj Vivanta</td>
												<td>Nikita Complex, GS Road Khanapara Guwahati Assam India 781022</td>
												<td> +91 361 7106710</td>
												<td><a href="https://vivanta.tajhotels.com/en-in/guwahati-assam/" target="_blank">vivanta.tajhotels.com</a></td>
											</tr>
											<tr>
												<td>Hotel Dynasty</td>
												<td>SS Road, Lakhtokia, Guwahati, Assam 781001, India</td>
												<td>+91 361 251 6021</td>
												<td><a href="https://www.dynastyhotel.in" target="_blank">www.dynastyhotel.in</a></td>
											</tr>
											<tr>
												<td>Hotel Gateway Grandeur</td>
												<td>G.S.Road, Christian Basti, Guwahati, Assam 781005, India</td>
												<td>+91 361 711 0022</td>
												<td><a href="https://www.gatewaygrandeur.com" target="_blank">www.gatewaygrandeur.com</a></td>
											</tr>
											<tr>
												<td>Hotel Millennium</td>
												<td> Dhanuka Complex - B, Sati Joymati Road, Athgaon, Guwahati, Assam 781001, India</td>
												<td>+91 361 273 9057</td>
												<td><a href="https://www.hotelmillennium.in" target="_blank">www.hotelmillennium.in</a></td>
											</tr>
											<tr>
												<td>Hotel Rajmahal</td>
												<td>A.T Road, Paltan Bazar, Guwahati, Assam 781001, India</td>
												<td>+91 361 254 9141</td>
												<td><a href="https://www.hotelrajmahal.in" target="_blank">www.hotelrajmahal.in</a></td>
											</tr>
											<tr>
												<td>Kiranshree Portico</td>
												<td>Guwahati-Shillong Rd, Paltan Bazaar, Guwahati, Assam 781008, India</td>
												<td>+91 361 273 5300</td>
												<td><a href="https://www.kiranshreeportico.com" target="_blank">www.kiranshreeportico.com</a></td>
											</tr>
											<tr>
												<td>Pragati Manor</td>
												<td>GS Rd, Christian Basti, Guwahati, Assam 781005, India</td>
												<td>+91 361 234 1265</td>
												<td><a href="https://www.hotelpragatimanor.com" target="_blank">www.hotelpragatimanor.com</a></td>
											</tr>
											<tr>
												<td>Radisson Blu Hotel</td>
												<td>Gotanagar, National Highway 37, Guwahati, Assam 781033, India</td>
												<td>+91 361 710 0100</td>
												<td><a href="https://www.radissonblu.com" target="_blank">www.radissonblu.com</a></td>
											</tr>
											<tr>
												<td>The Lily Hotel</td>
												<td>G.S. Road, Six Mile, Khanapara, Assam 781022, India</td>
												<td>+91 361 222 9791</td>
												<td><a href="https://www.thelilyhotel.com/" target="_blank">www.thelilyhotel.com</a></td>
											</tr>
											</tbody>
										</table>

                <h5> Transportation </h5>
                    <b>Uber and Ola</b> services are available at quite good frequencies connecting airport and City centre  (or) Prepaid Taxi is also available from airport and some other cab services are also menetioned below.
                    <table class="demo" style="width:100%;margin-left: 0px;margin:auto;padding-bottom: 0px;">
                            <thead>
                            <tr>
                                <th>Cab Name</th>
                                <th>Contact No.</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Prime Cabz</td>
                                <td>+91 361 222 2233</td>
                            </tr>
                            <tr>
                                <td>Green Cabs</td>
                                <td>+91 361 7151515</td>
                            </tr>
                            <tr>
                                <td>My Taxi</td>
                                <td>+91 361 222 8888 , +91 8011014013</td>
                            </tr>
                            </tbody>
                        </table>

            </div>
            <!--  End :: hotels-cabs  -->  
               
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

