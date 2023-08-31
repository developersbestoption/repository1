<!DOCTYPE html>
<?php  
//require 'conection.php';
//include 'rollgen.php';

if(isset($_POST['Rollno_txtbx'])){
$rollno = $_POST['Rollno_txtbx']; 

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "sdms");

// Get the name from the database
$sql = "SELECT * FROM basicdata WHERE rollno = '$rollno'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Get the name from the result set
  $row = mysqli_fetch_assoc($result);
  $name = $row['studentname'];
  $yoa = $row['yoa'];
  $toc = $row['coursetype'];
  $branch = $row['branch'];
  $Category	= $row['category'];
  $admno = $row['admno'];
  $doa = $row['doa'];
  $collegename = $row['collegename'];
  $course = $row['course'];
} else {
  echo "please check the number";
}
}
?> 

<html>
<head><title>
	rollnumber
</title>
<link href="bootstrap.min.css" rel="stylesheet" /><link href="css/loginstyle.css" rel="stylesheet" /><link href="css/srfstyle.css" rel="stylesheet" />
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="Scripts/jquery.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<link href="css/bootstrap-datepicker.css" rel="stylesheet" />
<style>
    body{
        background-color:white;
    }
   </style>
    </head>
<body>
<form method="post" action="rollnumber.php" onsubmit="javascript:return WebForm_OnSubmit();" id="form1" enctype="multipart/form-data">      <div class="container" style="margin-left:15%"></div>
    <div class="container">
  <div class="row">
      <div class="col-md-6"><h4>Student Rollnumber Generation form</h4></div>
      <div class="col-md-6"><span class="pull-right">
          <span class="glyphicon glyphicon-home">
             <a href="index.php" >HOME</a>
             
          </span></div>
  </div>
</div>
        <div class="container" style="margin-top:20px; border:3px solid #110808; border-radius: 10px;">
                     
          <div class="row">
            <div class="col-md-4 panel panel-heading" style="display:none; color:red" id="address_error" ></div>
          </div>
            <div class="row form-group">
            <label class="col-md-2 control-label" for="roll_txtbx">New Roll Number</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-th"></i>
			</span>
                <input Required name="roll_txtbx" type="text" maxlength="10" id="roll_txtbx"   value="<?php if(isset($_POST['Rollno_txtbx'])){ echo $rollno; }?>"    class="form-control input-md ac_village"/>
             </div>
             <input type="submit" name="srh_btn" value="check" id="chk_btn" class="btn btn-large btn-warning" />
    
                <span id="RequiredFieldValidator1" style="color:Red;visibility:hidden;">Please enter Roll Number</span>
            
            
            
              </div>
              <?php
if(isset($_POST['Rollno_txtbx'])){
$rollno = $_POST['Rollno_txtbx']; 

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "sdms");

// Get the name from the database
$sql = "SELECT * FROM basicdata WHERE rollno = '$rollno'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Get the name from the result set
  $row = mysqli_fetch_assoc($result);
  $name = $row['studentname'];
  $yoa = $row['yoa'];
  $toc = $row['coursetype'];
  $branch = $row['branch'];
  $Category	= $row['category'];
  $admno = $row['admno'];
  $doa = $row['doa'];
  $collegename = $row['collegename'];
  $course = $row['course'];
} else {
  echo "please check the number";
}
}
?> 
    <div class="col-md-6">
		         <span id="Label2" style="color:Red;font-weight:bold;"></span>
                 </div>
          </div>          
</form>
<form method="post" action="rollgen.php"  id="rollnumberform"  enctype="multipart/form-data">
            <div class="row form-group">
            <label class="col-md-2 control-label" for="name_txtbx">Name</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
                <input Required name="name_txtbx" value="<?php if(isset($_POST['Rollno_txtbx'])){ echo $name; }?>" type="text" id="name_txtbx" class="form-control input-md ac_village" style="text-transform:uppercase;" />
             </div>
                <span id="RequiredFieldValidator2" style="color:Red;visibility:hidden;"> Name</span>
            </div>
            <label class="col-md-2 control-label" for="yoa_txtbx">year of admision</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
      <input Required name="yoa_txtbx" type="date" id="yoa_txtbx" value="<?php if(isset($_POST['Rollno_txtbx'])){ echo   $yoa;} ?> "class="form-control input-md" /> 
            </div></div>
            <label class="col-md-2 control-label" for="toc_drpdwn">type of course</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
      <select  Required name="toc_drpdwn" id="toc_drpdwn" value="<?php if(isset($_POST['Rollno_txtbx'])){ echo $toc; }?>" class="form-control input-md ac_district">
        <option value="--select-- ">--select-- </option>
        <option value="regular">regular</option>
        <option value="open">open</option>
      </select>            </div>
             <span id="RequiredFieldValidator3" style="color:Red;visibility:hidden;">Please enter type of course </span>
		</div>
          </div>
          <label class="col-md-2 control-label" for="branch_drpdwn">branch</label>
          <div class="col-md-2">
  <div class="input-group">
    <span class="input-group-addon">
    <i class="glyphicon glyphicon-user"></i>
    </span>
    <select Required name="branch_drpdwn" id="branch_drpdwn" value="<?php if(isset($_POST['Rollno_txtbx'])){echo $branch;} ?>" class="form-control input-md ac_district">
      <option value="--select-- ">--select-- </option>
      <option value="CSE">CSE</option>
      <option value="ECE">ECE</option>
      <option value="EEE">EEE</option>
      <option value="MEC">MEC</option>
      <option value="CIVIL">CIVIL</option>
    </select></div>
           <span id="RequiredFieldValidator3" style="color:Red;visibility:hidden;">Please enter BRANCH</span>
  </div>
        
          <div class="row form-group">
           <label class="col-md-2 control-label" for="category_drpdwn">Category</label>  
             <div class="col-md-2">
                <select  Required name="category_drpdwn" value="<?php  if(isset($_POST['Rollno_txtbx'])){echo $Category;} ?>"id="category_drpdwn" class="form-control input-md ac_district">
	<option value="--select-- ">--select-- </option>
	<option value="Counselling">Counselling</option>
	<option value="Spot">Spot</option>
	<option value="Management">Management</option>
</select>
             </div>
            </div>
          <div class="row form-group">
            <label class="col-md-2 control-label" for="Admissiono_txtbx">Admission No</label>  
            <div class="col-md-2">
                <input Required name="Admissiono_txtbx" type="text" id="Admissiono_txtbx" class="form-control input-md"  value="<?php if(isset($_POST['Rollno_txtbx'])){ echo $admno; } ?>"placeholder="" />
            </div>
              <label class="col-md-2 control-label" for="doa_txtbx">Admission Date</label>  
            <div class="col-md-2">
			<div class="input-group">
                <span class="input-group-addon">
                      <span class="glyphicon-calendar glyphicon"></span>
                  </span>
		    <input Required name="doa_txtbx" type="date"  value="<?php if(isset($_POST['Rollno_txtbx'])){ echo $doa; }?>"id="doa_txtbx" class="form-control input-md" /> 
               </div>
		     </div>
          </div>   
          <div class="row form-group">
            
            <label class="col-md-2 control-label" for="College_txtbx">college name</label>  
            <div class="col-md-2">
                <input Required name="College_txtbx" type="text" id="College_txtbx"  value="<?php  if(isset($_POST['Rollno_txtbx'])){echo $collegename;} ?>"class="form-control input-md" placeholder="" />
            </div>    
            <div class="row form-group">
              <label class="col-md-2 control-label" for="course_drpdwn">course</label>  
                <div class="col-md-2">
                   <select Required name="course_drpdwn" id="course_drpdwn" value="<?php if(isset($_POST['Rollno_txtbx'])){echo $course;} ?>" class="form-control input-md ac_district">
     <option value="--select-- ">--select-- </option>
     <option value="Counselling">DIPLOMA</option>
     <option value="Spot">B-TECH</option>
     <option value="Management">MBA</option>
   </select>
                </div>
               </div>
             <div class="form-group row">
            <div class="col-md-8 text-center">
            <input  type="submit"  class="btn btn-large btn-success" value="save" />      
            <input type="submit" name="Button2" value="Clear"  id="Button2" class="btn btn-large btn-danger" />  
            </div>
          </div>
        </div>
       </div> 
</form>
<!-- <script>
        function fetchData() {
            $.ajax({
                url: 'rollgen.php', // Path to your PHP script
                type: 'GET',
                success: function(response) {
                    document.getElementById('place').innerHTML =response;
                },
                error: function() {
                    alert('Error fetching data.');
                }
            });
        }
    </script> -->


</body>
</html>






