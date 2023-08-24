<?php  
require 'conection.php';
?>
<!DOCTYPE html>
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
     <form method="post" action="rollgen.php"  id="rollnumberform"  enctype="multipart/form-data">
      <div class="container" style="margin-left:15%"></div>
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
                <input Required name="roll_txtbx" type="text" maxlength="10" id="roll_txtbx" name="hno"   class="form-control input-md ac_village"/>
            </div><br>
            <button class="btn-primary">check</button>
                <span id="RequiredFieldValidator1" style="color:Red;visibility:hidden;">Please enter Roll Number</span>
            </div>
              <div class="col-md-6">
		         <span id="Label2" style="color:Red;font-weight:bold;"></span>
                 </div>
          </div>
            <div class="row form-group">
            <label class="col-md-2 control-label" for="name_txtbx">Name</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
                <input Required name="name_txtbx" type="text" id="name_txtbx" class="form-control input-md ac_village" style="text-transform:uppercase;" />
             </div>
                <span id="RequiredFieldValidator2" style="color:Red;visibility:hidden;"> Name</span>
            </div>
            <label class="col-md-2 control-label" for="yoa_txtbx">year of admision</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
      <input Required name="yoa_txtbx" type="date" id="yoa_txtbx" class="form-control input-md" /> 
            </div></div>
            <label class="col-md-2 control-label" for="toc_drpdwn">type of course</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
      <select  Required name="toc_drpdwn" id="toc_drpdwn" class="form-control input-md ac_district">
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
    <select Required name="branch_drpdwn" id="branch_drpdwn" class="form-control input-md ac_district">
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
                <select  Required name="category_drpdwn" id="category_drpdwn" class="form-control input-md ac_district">
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
                <input Required name="Admissiono_txtbx" type="text" id="Admissiono_txtbx" class="form-control input-md" placeholder="" />
            </div>
              <label class="col-md-2 control-label" for="doa_txtbx">Admission Date</label>  
            <div class="col-md-2">
			<div class="input-group">
                <span class="input-group-addon">
                      <span class="glyphicon-calendar glyphicon"></span>
                  </span>
		    <input Required name="doa_txtbx" type="date" id="doa_txtbx" class="form-control input-md" /> 
               </div>
		     </div>
          </div>   
          <div class="row form-group">
            
            <label class="col-md-2 control-label" for="College_txtbx">college name</label>  
            <div class="col-md-2">
                <input Required name="College_txtbx" type="text" id="College_txtbx" class="form-control input-md" placeholder="" />
            </div>    
            <div class="row form-group">
              <label class="col-md-2 control-label" for="course_drpdwn">course</label>  
                <div class="col-md-2">
                   <select Required name="course_drpdwn" id="course_drpdwn" class="form-control input-md ac_district">
     <option value="--select-- ">--select-- </option>
     <option value="Counselling">DIPLOMA</option>
     <option value="Spot">B-TECH</option>
     <option value="Management">MBA</option>
   </select>
                </div>
               </div>
             <div class="form-group row">
            <div class="col-md-8 text-center">
                   <input type="submit" name="Button1" value="Save"  id="Button1" class="btn btn-large btn-success" />
                   <input type="submit" name="Button2" value="Clear"  id="Button2" class="btn btn-large btn-danger" />  
            </div>
          </div>
        </div>
       </div> 
</form>
</body>
</html>







<!--
<html>
     <style>
.error{
    color:red;
    font-weight:bold;
}

    </style>
    </html> -->
<!-- <?php
// Include another PHP file
require 'conection.php';

$rollno=$_POST['roll_txtbx'];
$name = $_POST["name_txtbx"];
$yoa = $_POST["yoa_txtbx"];
$toc = $_POST["toc_drpdwn"];
$branch = $_POST['branch_drpdwn'];
$category = $_POST['category_drpdwn'];
$admision = $_POST['Admissiono_txtbx'];
$doa = $_POST['doa_txtbx'];
$college = $_POST['College_txtbx'];
$course = $_POST['course_drpdwn'];
// Prepare the SQL statement
$sql1 = "SELECT * FROM basicdata WHERE rollno = '$rollno'";
$result = mysqli_query($connection, $sql1);
$row = mysqli_fetch_assoc($result);



$sql = "INSERT INTO  basicdata(rollno,studentname,collegename,yoa,coursetype,course	,branch,category,admno,doa) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare and bind the statement
$stmt = $connection->prepare($sql);
$stmt->bind_param("ssssssssis",$rollno, $name, $college, $yoa, $toc,$course,$branch, $category ,$admision,$doa);

// Execute the statement
if ($stmt->execute()) {
    echo "New record inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
// Close the statement and connection
$stmt->close();
$connection->close();
//header("location: rollnumber.php");

//header("location: rollnumber.php");
?>


<?php
             $rollno="#roll_txtbx";

            $sql1 = "SELECT * FROM basicdata WHERE rollno = '$rollno'";
            $result = mysqli_query($connection, $sql1);
            $row = mysqli_fetch_assoc($result);
          
            if($rollno==$row['rollno']){
            echo "Error: Roll number already exists in the database.";
          } 

          $connection->close();

            ?>










-->
