<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
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
  <script src="./js/live.js"></script>
</head>
<link rel="shortcut icon" 
      type="image/x-icon" 
      href="../iiitg_logo.ico" >

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
                <li class="bold"><a href="#" class="collapsible-header  waves-effect waves-teal active">Why Recruit @ IIITG ?</a>
                <div class="collapsible-body">
                  <ul class="section table-of-contents" style="padding-top: 0px;">
                    <li><a class="active" href="#home">Home</a></li>
                    <li><a href="#about-iiitg">About IIITG</a></li>
                    <li><a href="#academics">Academics</a></li>
                    <li><a href="#gradutaing-students">Graduating Students</a></li>
                    <li><a href="#research">Research</a></li>
                  </ul>
                </div>
                </li>
                <li class="bold"><a href="company.html" class="collapsible-header  waves-effect waves-teal">Company</a>
                  <div class="collapsible-body">
                    <ul class="section table-of-contents" style="padding-top: 0px;">
                      <li><a href="company.html#placement-procedure">Placement Procedure</a></li>
                      <li><a href="company.html#past-internships">Past Internships</a></li>
                      <li><a href="./pdfjs/web/viewer.html?file=placement_2017.pdf">Brochure</a></li>
                      <li><a href="./pdfjs/web/viewer.html?file=crf.pdf">Company Registration</a></li>
                      <li><a href="company.html#facilities">Facilites</a></li>
                    </ul>
                  </div>
                </li>
            <li class="bold"><a href="students.html" class="collapsible-header  waves-effect waves-teal">Students</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="students.html#polices-regulations">Polices and Regulations</a></li>
                  <li><a href="students.html#life_at_iiitg">Life @ IIITG</a></li>
                </ul>
              </div>
            </li>
            
            <li class="bold"><a href="faq.html" class="waves-effect waves-teal">FAQ</a></li>

             <li class="bold"><a href="contactus.html" class="collapsible-header  waves-effect waves-teal">Contact Us</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="contactus.html#iiitg-directory">Placement Office</a></li>
                  <li><a href="contactus.html#reaching-iiitg">Reaching IIITG</a></li>
                </ul>
              </div>
            </li>
     
            <li class="bold"><a href="placement_team.html" class="collapsible-header  waves-effect waves-teal">Placement Team</a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="placement_team.html#faculty-incharge">Faculty Incharge</a></li>
                  <li><a href="placement_team.html#student-coordinators">Student Coordinators</a></li>
                </ul>
              </div>
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
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<h2>Student Details</h2>
		
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
      <div class="container">
        <!--  Outer row  -->
        <div class="row">

          <div class="col s12 m9 l10">

<div id="home" class="section scrollspy">

<h5 class="header">From The Chairman's Desk</h5>
            <div class="card row" style="padding:3px;margin:auto;padding-bottom:18px;">
              <img class="col l3 s3 m3 responsive-img" src="images/rsz_chairman.jpg" style="margin-top:18px;"></img>

<p id="chr_msg" class="caption col l9 s9 m9 ">

My greetings to all of you on the occasion of the commencement of the Placement Session (2017-2018) of IIIT Guwahati. Placement Session is a special time in the calendar of any technical Institute. I hope the ensuing Placement Session helps IIIT Guwahati to reach out to their well-wishers successfully. 
<br>
Though very young, IIIT Guwahati is gradually becoming a contender in research and higher education at the national level. In IIIT Guwahati, the undergraduates receive sound technical grounding with other......<a href="#" id="get_more" onclick="change_text('chr_msg','more_chr_msg')">Read more</a>
              </p>

<p id="more_chr_msg" style="display:none;" class="caption col l9 s9 m9 ">

My greetings to all of you on the occasion of the commencement of the Placement Session (2017-2018) of IIIT Guwahati. Placement Session is a special time in the calendar of any technical Institute. I hope the ensuing Placement Session helps IIIT Guwahati to reach out to their well-wishers successfully. <br>
Though very young, IIIT Guwahati is gradually becoming a contender in research and higher education at the national level. In IIIT Guwahati, the undergraduates receive sound technical grounding with other supporting knowledge, including soft skills. IIIT Guwahati places emphasis on research and is a reflection of the well qualified faculty members that groom the students. This emphasis certainly has a positive impact on the quality of teaching. Here, the students are further exposed to other areas through their courses in basic sciences and humanities. The talent IIIT Guwahati nurtures is unique, and I’m sure companies that work with cutting edge technologies will seek these well deserving students.<br>
I would like to take this opportunity to invite all corporates, working at the forefront of Information and Communication Technology, to visit IIIT Guwahati for their recruitment drives. <br>
<br>
<b>S. Ramadorai</b><br>
<b>Chairman</b><br><b>Board of Governors</b><br>


<a href="#" id="get_more" onclick="change_text('more_chr_msg','chr_msg')">less</a>
</p>
            </div>


<h5 class="header">From The Director's Desk</h5>
            <div class="card row" style="padding:3px;margin:auto;padding-bottom:18px;">
              <img class="col l3 s3 m3 responsive-img" src="images/gb.jpg" style="margin-top:18px;"></img>

<p id="dir_msg" class="caption col l9 s9 m9 ">

It is my pleasure to invite all organizations to visit IIIT Guwahati and participate in our second campus placement season. IIIT Guwahati is one of the twenty IIITs set up by the Govt. of India in partnership with State Govt and corporate partners. IIITG has as its partners, the Govts of India and Assam, TCS, Srei Infrastructure Finance, Oil India, and Amtron. In the four years of our existence we have been able to create a teaching and research environment as good as the best in the country.......<a href="#" id="get_more" onclick="change_text('dir_msg','more_dir_msg')">Read more</a>
              </p>

<p id="more_dir_msg" style="display:none;" class="caption col l9 s9 m9 ">

It is my pleasure to invite all organizations to visit IIIT Guwahati and participate in our second campus placement season. IIIT Guwahati is one of the twenty IIITs set up by the Govt. of India in partnership with State Govt and corporate partners. IIITG has as its partners, the Govts of India and Assam, TCS, Srei Infrastructure Finance, Oil India, and Amtron. In the four years of our existence we have been able to create a teaching and research environment as good as the best in the country. Our Syllabi takes the best from the IIIT and IIT systems and from world-wide trends. We have 35 faculty, 31 of whom have PhDs from IITs, other leading Institutions of the country, and from Universities abroad. <br>
<br>IIIT Guwahati  provides  B.Tech programmes in CSE and ECE disciplines. Admissions are through the JEE Mains All India examination. The second batch is completing its course in May 2018. Most of the students from the first batch are well placed in industries. Some of them also got opportunity to higher education in universities abroad like Carnegie Mellon University, Texas A&M University College Station and Arizona State University.  We started a PhD programme in the second year, showing our commitment to a sound research system. Besides building a world class Institution, our mission is also to give a boost to the development of the ICT industry in Guwahati. The upcoming IT Park next to our campus near the airport will be one of the vehicles for this development.  <br>
<br>I am confident that our students will live up to your expectations and they will become assets in your organization in the years to come. I once again invite you to join our on-campus placement programme.<br>


<br><b>Prof. Gautam Barua</b><br><b>Director</b><br><b>IIIT Guwahati</b><br>

<a href="#" id="get_more" onclick="change_text('more_dir_msg','dir_msg')">less</a>
</p>
            </div>

            </div>


            
            <div id="about-iiitg" class="section scrollspy">
              <h5 class="header">About IIIT Guwahati</h5>

              <p class="caption">
                Indian Institute of Information Technology Guwahati (IIITG) is one among the new IIIT's being set up in Public-Private-Partnership (PPP) under MHRD, Govt. of India. It started in academic year 2013-14. It offers B.Tech courses in Electronics and Communication Engineering (ECE) and Computer Science Engineering (CSE), and runs PhD programmes in Computer Science and Electronics and Communication, Humanities and Social Sciences. IIITG started operations in August 2013 with B.Tech programmes in CSE and ECE. PhD programmes were started in 2015.    </p>
 
              <p class="caption">
                  The permanent campus is being constructed on 70 acres of land about 4 km from the Guwahati airport. It is planned to move to the campus in early  2018. The foundation stone was laid on 19 January, 2016 by Hon’ble Prime Minister Shri Narendra Modi in the august presence of Governor of Assam Shri Janaki Ballabh Patnaik, former Hon’ble Chief Minister of Assam Shri Tarun Gogoi and former Hon’ble Minister of Human Resources & Development Smt Smriti Zubin Irani. The institute has been operating at the temporary campus in the city Centre at the Assam Textile institute premises. Currently, there are four batches operating in IIITG with a total of 240 students.   </p>
              <img class="responsive-img" src="pm.jpg"></img>
              <p class="caption">
               <!--  The institute has been operating under the mentorship of Indian Institute of Technology Guwahati (IITG) since its inception at the temporary campus of IIITG located in the city Centre at the Assam Textile institute premises. Currently, there are four batches operating in IIITG with a total of 240 students. 
             --> </p>

            </div>
            <!--  About EnD -->
              
            <!--  Academics STaRT -->
            <div id="academics" class="section scrollspy">
                
                <h5 class="header">Academics</h5>
                <img>
                <h6>Computer Science and Engineering</h6>
                <img class="responsive-img" src="server.jpg">
                <p class="caption">
                    The Department of Computer Science and Engineering at the Indian Institute of Information Technology, was formed in 2013. The Department boasts of its exception research culture and innovation in different spheres of Computer Science. The Department presents a unique symbiosis between the different streams as they are inter-collaborated to collectively present novel ideas to the research world. The Department offers has a meticulous curriculum on topics related to all aspects of Computer Hardware and Software with an emphasis on practical learning. The Research and Innovation background provides an idealistic environment to the students to think beyond the sphere and contribute through rigorous research and publications. The Department has a thriving research environment in the areas of Algorithms, Internet of Things, Computer Vision, Image and Video Processing, Cloud Computing, System and Networking.
                </p>
                <h6>Facilities</h6>
                <p class="caption">
                    We have labs supporting courses like Data Structures and Algorithms, Software Engineering, Digital Logic Design, Basic Electronics, Operating Systems, Data Base Management Systems, Computer Networks, Compilers, Computer Graphics.
                </p>
                <p class="caption">
                    Computational Facilities include a computer lab with a seating capacity of 80 students. Access to Software’s like MATLAB etc. The institute has campus wide intranet supporting networked PC’s and 1 Gbps internet link. The hardware supporting the intranet includes various types of high and branded Routers, switches, Load Balancer with Intel XEON based Servers having good configuration to support IT-Infrastructure on the campus.
                </p>
                <img>
                
                <h6>ELECTRONICS & COMMUNICATION ENGINEERING</h6>
                <img class="responsive-img" src="ece.jpg">
                <p class="caption">
                    The Department of Electronics and Communication Engineering (ECE) established during the inception of the institute in 2013, the department has a rich culture of research and innovation, working on its primary objective of imparting quality education and training whilst leading on the innovation curve. The research interests of the faculty members of the department encompass the wide area of applied and fundamental aspects of ECE. Collaboration in between the research groups of the department and with other departments is also a practice. The department offers a comprehensive array of courses that encompass the undergraduate and doctoral levels. The unique blend of IT and ECE have made our students adroit to face the tough challenges of ECE branch with emphasis on Communications, Digital Signal Processing, Instrumentation and Control, digital signal processing, solid state devices,  VLSI, Image Processing and Computer Vision, Microwave Engineering Robotics coupled with coding and other IT perspectives. . The department is competent and apt enough, aided by great infrastructure and facilities to bring practical knowledge at par with the global standard level.
                </p>
                <h6>Facilities</h6>
                <p class="caption">
                    The ECE department houses a number of laboratories including basic course-based labs for undergraduate students and state-of the- art research laboratories for doctral students. The department has  Facilities for Digital Design, Analog Integrated Circuits, Digital Communication, Microwave Engineering and procured software’s like MATLAB, Cadence EDA Tools, National Instruments LabView, ANSYS HFSS etc to enhance the understanding of the corresponding theory courses. Availability of Dedicated computing facility for all the department staff and students which can be accessed round-the-clock. Some of the  lab components like oscillators are also virtually accessible from the hostel, so that students can work efficiently. 
                </p>

                <img>

              <a class="blue-text text-darken-2" href="../curriculum.html"><h6>COURSE STRUCTURE FOR B-TECH</h6></a>
            </div>
            <!--  Academics EnD -->

            
            <!--  STaRT :: Graduating Student-->
        


           <div id="gradutaing-students" class="section scrollspy">
            <div class="section">
             <h5 class="header">Graduating Students</h5>
            </div>
             <div class="row center" style="margin:auto;">
                  
                    <img  class="responsive-img" src="images/demo1.png">
                    <p> Final Year B-Tech Students</p>

                    <img  class="responsive-img" src="images/demo2.png">
                    <p>   Department Ratio </p> 

                  
                    <img  class="responsive-img" src="images/demo3.png">
                    <p>  Student to Faculty Ratio</p> 
                 </div>
            </div>
            <!--  End :: Graduating Student  --> 


                          
            <!--  STaRT :: Research-->
            <div id="research" class="section scrollspy">
                
                <h5 class="header">Research</h5>
                <p class="caption">
                    The very foundation of IIIT Guwahati is based on research and innovation. The faculty selection procedure places a strong emphasis on candidates' research record and future research potential. Most of the faculty members at the institute have
substantial research experience in institutes of national and international repute. The institute facilitates research program
establishment through provision of competitive seed grants to all faculty members.
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apart from PhD students, who are actively involved in full-time research, undergraduate students are offered an
opportunity participate in ongoing research projects. The culture of research is inculcated in the undergraduate students
from the initial semesters by introducing credit based independent project, where the students execute a project of their
choice in small groups irrespective of their branch. Strong emphasis is given to the thesis component of the doctoral
programs. The institute also encourages collaborations with corporate world to solve various problems and to catch up with
the present technological trends.
                </p>
                <h6>Computer Science & Engineering : </h6>
                <ul class="ulxx">
                    <li class="lixx"><p> Graph Theoretic Approach for Facility Location Problem  </p></li>
                    <li class="lixx"><p> Scheduling in Multi-core Real Time Systems </p></li>
                    <li class="lixx"><p> Machine Learning Approaches for Very High Resolution(VHR) and MODIS Image Analysis </p></li>
                    <li class="lixx"><p> Chip Multiprocessor and Network on Chip </p></li>
                    <li class="lixx"><p> Denegrate Subgraph in Random Graphs </p></li>
                    <li class="lixx"><p>Patter Recognition & Image Processing.</p></li>
                    <li class="lixx"><p> Information Security</p></li>
                    <li class="lixx"><p> Intrusion Detection/Prevention System</p></li>
                    <li class="lixx"><p> Cloud Computing</p></li>
                    <li class="lixx"><p> Wireless Networks</p></li>
                    <li class="lixx"><p> Security in IoT</p></li>
                    </ul>
                <h6>Electronics and Communication Engineering  : </h6>
                <ul class="ulxx">
                    <li class="lixx"><p>Emotion recognition based on EEG signals </p></li>
                    <li class="lixx"><p>Information Theory and Coding </p></li>
                    <li class="lixx"><p>Photonic Multicore Network on Chip </p></li>
                    <li class="lixx"><p>Energy harvesting wireless systems </p></li>
                    <li class="lixx"><p>Microwave Engineering </p></li>
                    <li class="lixx"><p>Optical Imaging & Biomedical Image Processing </p></li>
                </ul>
                <h6>Humanities and Social Sciences : </h6>
                <ul class="ulxx">
                    <li class="lixx"><p>Sociolinguistics and Cognitive Linguistics </p></li>
                    <li class="lixx"><p>Development & Experimental economics </p></li>
                    <li class="lixx"><p>International Trade and Development Economics </p></li>
                    <li class="lixx"><p>Applied Econometrics  </p></li>
                </ul>
              </div>

            <!--  End :: Research --> 
            
         
        </div>

        </div>
      </div> <!-- End Container -->
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
    <script src="./js/jquery-2.1.4.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="bin/jquery-2.1.1.min.js"><\/script>'); }
    </script>
    <script src="./js/jquery.timeago.min.js"></script>
    <script src="../js/prism.js"></script>
    <script src="./jade/lunr.min.js"></script>
    <script src="./jade/search.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="./js/init.js"></script>

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

