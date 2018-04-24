<?php 
session_start(); 
include_once("../includes/connection.php");
if (!isset($_SESSION['stu_username'])) {
 $_SESSION['msg'] = "You must log in first";
 header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>IIIT Guwahati Placement Portal</title>

  <!-- CSS  -->

  <link rel="shortcut icon" 
  type="image/x-icon" 
  href="../images/iiitg_logo.ico" >
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style1.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body style="margin:auto;max-width:1000px;">
  <div class='nav-wrapper' style='background-color:;'>
   <div class='special_container white row customshadow' style='margin-bottom:0;'>
     <div id='logo' class='col s12'>
      <a href='#'><img class='reponsive-img' style='display: block;margin: 0 auto;width: 100%;max-width: 600px;height: auto;' src='../images/header.png'></img></a>
    </div>
  </div>
</div></div>
  <div class="row">
    <center>
    <h2> CREATE RESUME </h2></center>
    </div>


 <div class="row">

<!--main>
  <form class="col s12" method="post" action='../includes/generate_cv.php' >
    <div class="row"-->
     <!--h3 class="header" style="color:blue;font-weight: 300;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">Create Resume</h3><br-->
          
  <form class="col s12" method="post" action='resume.php' >
         <div class="row">
	  <h5 class="header" style="color:black;font-weight: 50;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">PERSONAL INFORMATION</h5><br>
      
     <div class="input-field col s6">
      <i class="material-icons prefix">account_circle</i>
      <input  id="f_name" name = "f_name" type="text" class="validate"  required>
      <label for="f_name">First Name</label>
    </div>
    <div class="input-field col s6">
      <input id="l_name" name = "l_name" type="text" required>
      <label for="l_name">Last Name</label>
    </div>
  </div>


   <div class="row">
    <div class="input-field col s6">
      <i class="material-icons prefix">email</i>
      <input id="email" name = "email" type="email"  required>
      <label for="email">Email</label>
    </div>
    
    <div class="row">
      <div class="col s6">
  <div class="input-field col s6">
    <i class="material-icons prefix">local_phone</i>
    <input id="phone" name = "phone" type="text"  required>
    <label for="Phone Number">Contact No.</label>
  </div>
</div>
</div>
  <!--div class="row">
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
 
    <div class="input-field col s6">
      <i class="material-icons prefix">grade</i>
      <input id="cpi" name = "cpi" type="text" value="<?php echo $cpi;?>" class="validate" required>
      <label for="cpi">CPI</label>
    </div>
  </div-->
  <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">explore</i>
      <textarea id="address" name = "address" class="materialize-textarea" required></textarea>
      <label for="address">Permanent Address</label>
    </div>
  </div>
  <!--div class="row">
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
    </div-->
  

 <h5 class="header" style="color:black;font-weight: 50;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">EDUCATION</h5><br>

 <h6 class="header" style="color:black;font-weight: 35;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">UNIVERSITY/INSTITUTE</h6><br>

  <div class="row">
 <div class="input-field col s6">
      <i class="material-icons prefix">business</i>
      <input  id="college_name" name = "college_name" type="text" class="validate"  required>
      <label for="college_name"> Institute Name</label>
    </div>
  
 <div class="row">
<div class="input-field col s6">
      <i class="material-icons prefix">alarm_on</i>
      <input  id="college_period" name = "college_period" type="text" class="validate"  required>
      <label for="college_period"> College Time Period</label>
    </div>
  </div>
	</div>
<div class="row">
<div class="input-field col s6">
      <i class="material-icons prefix">grade</i>
      <input  id="college_cgpa" name = "college_cgpa" type="text" class="validate"  required>
      <label for="college_period">CGPA</label>
    </div>
  </div>
	
<h7 class="header" style="color:black;font-weight: 35;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">SENIOR SECONDARY SCHOOL</h7><br>

  <div class="row">
 <div class="input-field col s6">
      <i class="material-icons prefix">business</i>
      <input  id="seniorschool_name" name = "seniorschool_name" type="text" class="validate"  required>
      <label for="seniorschool_name"> Name</label>
    </div>
  
 <div class="row">
<div class="input-field col s6">
      <i class="material-icons prefix">alarm_on</i>
      <input  id="seniorschool_year" name = "seniorschool_year" type="text" class="validate"  required>
      <label for="seniorschool_year"> Passing Year</label>
    </div>
  </div>
	</div>
<div class="row">
<div class="input-field col s6">
      <i class="material-icons prefix">grade</i>
      <input  id="seniorschool_percentage" name = "seniorschool_percentage" type="text" class="validate"  required>
      <label for="seniorschool_percentage">Percentage</label>
    </div>
  </div>

<h8 class="header" style="color:black;font-weight: 35;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">SECONDARY SCHOOL</h8><br>

  <div class="row">
 <div class="input-field col s6">
      <i class="material-icons prefix">business</i>
      <input  id="school_name" name = "school_name" type="text" class="validate"  required>
      <label for="school_name"> Name</label>
    </div>
  
 <div class="row">
<div class="input-field col s6">
      <i class="material-icons prefix">alarm_on</i>
      <input  id="school_year" name = "school_year" type="text" class="validate"  required>
      <label for="school_year"> Passing Year</label>
    </div>
  </div>
	</div>
<div class="row">
<div class="input-field col s6">
      <i class="material-icons prefix">grade</i>
      <input  id="school_percentage" name = "school_percentage" type="text" class="validate"  required>
      <label for="school_percentage">Percentage</label>
    </div>
  </div>

<h5 class="header" style="color:black;font-weight: 50;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">EXPERIENCE</h5><br>
<h6 class="header" style="color:black;font-weight: 35;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">Experience 1</h6><br>
<div class="row">
 <div class="input-field col s6">
      <i class="material-icons prefix">business</i>
      <input  id="exp1_cmpname" name = "exp1_cmpname" type="text" class="validate"  required>
      <label for="exp1_cmpname">  Institution Name</label>
    </div>
  
 <div class="row">
<div class="input-field col s6">
      <i class="material-icons prefix">alarm_on</i>
      <input  id="exp1_period" name = "exp1_period" type="text" class="validate"  required>
      <label for="exp1_period"> Period</label>
    </div>
  </div>
	</div>
  <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">group_work</i>
      <textarea id="exp1_role" name = "exp1_role" class="materialize-textarea" required></textarea>
      <label for="exp1_role">Role</label>
    </div>
  </div>

 <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">group_work</i>
      <textarea id="exp1_highlights" name = "exp1_highlights" class="materialize-textarea" required></textarea>
      <label for="exp1_highlights">Description</label>
    </div>
  </div>
<h6 class="header" style="color:black;font-weight: 35;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">Experience 2</h6><br>
<div class="row">
 <div class="input-field col s6">
      <i class="material-icons prefix">business</i>
      <input  id="exp2_cmpname" name = "exp2_cmpname" type="text" class="validate"  required>
      <label for="exp2_cmpname">  Institution Name</label>
    </div>
  
 <div class="row">
<div class="input-field col s6">
      <i class="material-icons prefix">alarm_on</i>
      <input  id="exp2_period" name = "exp2_period" type="text" class="validate"  required>
      <label for="exp2_period"> Period</label>
    </div>
  </div>
	</div>
  <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">group_work</i>
      <textarea id="exp2_role" name = "exp2_role" class="materialize-textarea" required></textarea>
      <label for="exp2_role">Role</label>
    </div>
  </div>

 <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">group_work</i>
      <textarea id="exp2_highlights" name = "exp2_highlights" class="materialize-textarea" required></textarea>
      <label for="exp2_highlights">Description</label>
    </div>
  </div>
 <h5 class="header" style="color:black;font-weight: 50;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">PROJECT</h5><br>
<h6 class="header" style="color:black;font-weight: 35;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">Project 1</h6><br>
   <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">toc</i>
      <textarea id="btp1_cmpname" name = "btp1_cmpname" class="materialize-textarea" required></textarea>
      <label for="btp1_cmpname">Title of the Project</label>
    </div>
  </div>
  
 <div class="row">
<div class="input-field col s6">
      <i class="material-icons prefix">person_pin</i>
      <input  id="btp1_role" name = "btp1_role" type="text" class="validate"  required>
      <label for="btp1_role"> Guide Name</label>
    </div>
  
 <div class="row">
<div class="input-field col s6">
      <i class="material-icons prefix">alarm_on</i>
      <input  id="btp1_period" name = "btp1_period" type="text" class="validate"  required>
      <label for="btp1_period"> Period</label>
    </div>
  </div>
	</div>
  
 <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">group_work</i>
      <textarea id="btp1_highlights" name = "btp1_highlights" class="materialize-textarea" required></textarea>
      <label for="btp1_highlights">Description</label>
    </div>
  </div>
<h6 class="header" style="color:black;font-weight: 35;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">Project 2</h6><br>
   <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">toc</i>
      <textarea id="btp2_cmpname" name = "btp2_cmpname" class="materialize-textarea" required></textarea>
      <label for="btp2_cmpname">Title of the Project</label>
    </div>
  </div>
  
 <div class="row">
<div class="input-field col s6">
      <i class="material-icons prefix">person_pin</i>
      <input  id="btp2_role" name = "btp2_role" type="text" class="validate"  required>
      <label for="btp2_role"> Guide Name</label>
    </div>
  
 <div class="row">
<div class="input-field col s6">
      <i class="material-icons prefix">alarm_on</i>
      <input  id="btp2_period" name = "btp2_period" type="text" class="validate"  required>
      <label for="btp2_period"> Period</label>
    </div>
  </div>
	</div>
  
 <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">group_work</i>
      <textarea id="btp2_highlights" name = "btp2_highlights" class="materialize-textarea" required></textarea>
      <label for="btp2_highlights">Description</label>
    </div>
  </div>

    <h5 class="header" style="color:black;font-weight: 50;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">TECHNICAL SKILLS</h5><br>

<!--div class='row'><div class="input-field col s6">
  <button type='Add' name='add_experience' class='col s12 btn btn-large waves-effect blue darken-4'>ADD</button></div>
</form-->
<div class="row">
    <div class="input-field col s6">
     <i class="material-icons prefix">keyboard_arrow_up</i>
      <!--label for="skills">skills</label-->
      <select id="skills" name="skills" multiple="multiple">
      
     
        
         
          <option value="" disabled selected>  skills</option>
      <option value="1">C</option>
      <option value="2">Java</option>
      <option value="3">Python</option>
      <option value="4">C++</option>
      <option value="5">Django</option>
      <option value="6">mysql</option>
      <option value="7">JSP</option>
      <option value="8">php</option>
      <option value="9">Ruby</option>
      <option value="10">Scala</option>
      <option value="11">CSS</option>
      <option value="12">HTML</option>
         <option value="13">mysql</option>
      <option value="14">C#</option>
      <option value="15">NodeJs</option>
      <option value="16">JavaScript</option>
      <option value="17">Pascal</option>
      <option value="18">Perl</option>
      <option value="19">Rexx</option>
      <!--option value="13">Other</option-->
      
       </select>
       <!--label>skills</label-->
     </div>
    </div>
 <h5 class="header" style="color:black;font-weight: 70;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">INTERESTS AND HOBBIES</h5><br>
 <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">forum</i>
      <textarea id="interests" name = "interests" class="materialize-textarea" required></textarea>
      <label for="interests">INTERESTS AND HOBBIES</label>
    </div>
  </div>


<h5 class="header" style="color:black;font-weight: 70;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">ACADEMIC ACHIEVEMENTS AND HONORS</h5><br>
 <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">forum</i>
      <textarea id="honors" name = "honors" class="materialize-textarea" required></textarea>
      <label for="honors">ACHIEVEMENTS</label>
    </div>
  </div>

<h5 class="header" style="color:black;font-weight: 70;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">REFERENCES</h5><br>
 
<h6 class="header" style="color:black;font-weight: 35;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">Reference 1</h6><br>

   <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">account_circle</i>
      <input  id="r1_name" name = "r1_name" type="text" class="validate"  required>
      <label for="r1_name">Name</label>
    </div>
  </div>
  
 <div class="row">
<div class="input-field col s6">
      <i class="material-icons prefix">business</i>
      <input  id="r1_inst" name = "r1_inst" type="text" class="validate"  required>
      <label for="r1_inst"> Institution</label>
    </div>
  
 <div class="row">
<div class="input-field col s6">
      <i class="material-icons prefix">local_phone</i>
      <input  id="r1_cont" name = "r1_cont" type="text" class="validate"  required>
      <label for="r1_cont"> Contact</label>
    </div>
  </div>
	</div>

<h6 class="header" style="color:black;font-weight: 35;    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;">Reference 2</h6><br>

   <div class="row">
    <div class="input-field col s12">
      <i class="material-icons prefix">account_circle</i>
      <input  id="r2_name" name = "r2_name" type="text" class="validate"  required>
      <label for="r2_name">Name</label>
    </div>
  </div>
  
 <div class="row">
<div class="input-field col s6">
      <i class="material-icons prefix">business</i>
      <input  id="r2_inst" name = "r2_inst" type="text" class="validate"  required>
      <label for="r2_inst"> Institution</label>
    </div>
  
 <div class="row">
<div class="input-field col s6">
      <i class="material-icons prefix">local_phone</i>
      <input  id="r2_cont" name = "r2_cont" type="text" class="validate"  required>
      <label for="r2_cont"> Contact</label>
    </div>
  </div>
	</div>


<center>

    
<div class='row'><div class="input-field col s3">
  <button type='submit' name='submit' class='col s12 btn btn-large waves-effect blue darken-4'>GENERATE RESUME</button></div>
</center>






<footer class='page-footer' style='background-color:#cdcdcd;padding-top:0px;'>
  <div class='container grey-text text-darken-3'>
    <p class='left'>@ 2017 IIIT Guwahati</p>
    <p class='right'>IIIT Guwahati,G.N.B Road -781001</p>
  </div>
</footer>


<!--  Scripts-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="../js/materialize.js"></script>
<script src="../js/init.js"></script>
<script src="../js/jquery.materialize-autocomplete.js"></script>
<script src="../js/init.js"></script><script>
  $(document).ready(function() {
    $('select').material_select();
  });</script><script>
$('#per_ad').val('New Text');
  M.textareaAutoResize($('#perm_add'));</script>
</body>
</body>
</html>

