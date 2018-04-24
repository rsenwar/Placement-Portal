<?php
if(isset($_SESSION['stu_username'])){
if(!isset($_SESSION['stu_perm']))
header("location: ../student/home.php");
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
    <h2> Update Details </h2></center>
    </div>
<div class="row">
  <form class="col s12" method="post" action='../includes/stu_update.php'>
    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        <input  id="f_name" name = "f_name" type="text" class="validate" value="<?php echo $first_name;?>" required>
        <label for="f_name">First Name</label>
      </div>
      <div class="input-field col s6">
        <input id="l_name" name = "l_name" type="text" class="validate" required>
        <label for="l_name">Last Name</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">keyboard_arrow_right</i>
        <input id="roll_no" name = "roll_no" type="text" class="validate" data-length="7" required>
        <label for="roll_no">Roll No.</label>
        <span class="helper-text" data-error="wrong" data-success="right"></span>
      </div>
      <div class="input-field col s6">
        <i class="material-icons prefix">business</i>
        <select name = "dept" required>
          <option value="" disabled="disabled" selected="selected">Choose your Dept.</option>
          <option value="CSE">CSE</option>
          <option value="ECE">ECE</option>
        </select>
        <label>Department</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">email</i>
        <input id="email" name = "email" type="email" class="validate" required>
        <label for="email">Email</label>
      </div>
      <div class="input-field col s6">
        <i class="material-icons prefix">grade</i>
        <input id="cpi" name = "cpi" type="text" class="validate" required>
        <label for="cpi">CPI</label>
      </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">explore</i>
          <textarea id="perm_add" name = "perm_add" class="materialize-textarea" required></textarea>
          <label for="perm_add">Permanent Address</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">keyboard_arrow_up</i>
        <select name = "prog" required>
          <option value="" disabled="disabled" selected="selected">Programme</option>
          <option value="B.Tech">B.Tech</option>
          <option value="M.Tech">M.Tech</option>
          <option value="Phd">Phd</option>
        </select>
        <label>Programme</label>
      </div>
      <div class="input-field col s6">
        <i class="material-icons prefix">wc</i>
        <select name = "gender" required>
          <option value="" disabled="disabled" selected="selected">Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select>
        <label>Gender</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">local_phone</i>
        <input id="cont_no" name = "cont_no" type="text" class="validate" required>
        <label for="cont_no">Contact No.</label>
      </div>
    </div>
    <center>
              <div class='row'><div class="input-field col s6">
                <button type='submit' name='stu_update' class='col s12 btn btn-large waves-effect blue darken-4'>SUBMIT</button></div></form><form method="post" action='../includes/stu_logout.php'>
				<div class="input-field col s6">
                <button type='submit' name='logout_user' class='col s12 btn btn-large waves-effect blue darken-4'>LOG OUT</button></div>
              </div></form>
            </center>
  
</div>


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

