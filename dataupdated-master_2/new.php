<!DOCTYPE html>
<?php
require "conection.php";
if(isset($_GET['roll_number'])) {
    $rollNumber = $_GET['roll_number'];
    
    // Prepare and execute a SELECT query
    $stmt = $connection->prepare("SELECT * FROM basicdata WHERE rollno = ?");
    $stmt->bind_param("s", $rollNumber);
    $stmt->execute();
    $stmt->bind_result($name, $age, $email);
    
    // Fetch the result
    $stmt->fetch();
    
    // Close the statement
    $stmt->close();
}
$connection->close();
?>




<?php
//require 'basicdata.php';
?>
<html>
<head><link rel="shortcut icon" href="#" /><title>
	Student-Reg-Form
</title><link href="bootstrap.min.css" rel="stylesheet" /><link href="css/loginstyle.css" rel="stylesheet" /><link href="css/srfstyle.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="Scripts/jquery.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <link href="css/bootstrap-datepicker.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
<body>
    <form method="POST" action="Registrationform.php" onsubmit="javascript:return WebForm_OnSubmit();" id="form1" enctype="multipart/form-data">
        <div class="container" style="margin-left:15%" >
            <img src="#" class="img-responsive"/></div> 
       <br />
     <div class="container">
  <div class="row">
      <div class="col-md-6"><h4>Student Registration form</h4></div>
      <div class="col-md-6"><span class="pull-right">
        <span >
          
           <a href="index.html" ><i class="fa-solid fa-house"></i>HOME</a>
          
          
           
        </span></div>
        <div class="col-md-3"><span class="pull-right"><input  type="submit" name="Edit_btn" value="Edit" id="Edit_btn" class="btn btn-large btn-warning" /> </span></div>
  </div>
</div>


        <div class="container" style="margin-top:20px;  display: flex; border:3px solid #070707; border-radius: 10px;">
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="col-md-6 panel panel-heading">Enter Roll Number</div>
            
              
            </div>
        </div>
        <div class="row form-group">
            <label class="col-md-2">Roll No</label>
            <div class="col-md-6">
               <div class="input-group">
			      <span class="input-group-addon"> </span>
                  <input name="Rollno_txtbx" type="text" maxlength="10" id="Rollno_txtbx" class="form-control input-md ac_mobile" />
               </div>
                <span id="RequiredFieldValidator1" ValidationExpression=".{5}.*" style="color:Red;visibility:hidden;">Please enter Roll Number</span>
            </div>
            <div class="col-md-2">
                    <a href="registrationform1.php"> <div class="input-group">
	               <input type="button"   name="srh_btn" value="Search" id="srh_btn" class="btn btn-large btn-success" />
                  </div></a>
            </div>
         </div>
        <div class="row form-group">
            <div class="col-md-12">
                <span id="rollsrh" style="color:Red;"></span>
                <span id="Label1"></span>
            </div>
        </div>
        <div class="row"><div class="col-md-12">
         <span id="applbl"></span></div>
</div>
    
        <div class="row">
                <div class="col-md-6" value="<?php echo $name; ?>"><h5>Year of Admission ::<b><span id="yrlbl"></span></b></h5></div>
                <div class="col-md-6"><h5>Date of Admission ::<?php echo htmlspecialchars($row["doa"]);?><b><span id="adm_dat_lbl"></span></b></h5></div>
            </div>
            <div class="row">
                <div class="col-md-6"><h5>college Name::<?php echo htmlspecialchars($row["collegename"]);?><b><span id="clglbl"></span></b></h5></div>
                <div class="col-md-6"><h5>Admission_# ::<?php echo htmlspecialchars($row["admno"]);?><b><span id="adm_no_lbl"></span></h5></b></div>
            </div>
            <div class="row">
               <div class="col-md-6"><h5>Type of Course ::<?php echo htmlspecialchars($row["coursetype"]);?><b><span id="tpecrselbl"></span></b></h5></div>
               <div class="col-md-6"><h5>Category ::<?php echo htmlspecialchars($row["category"]);?><b><span id="catry_lbl"></span></b></h5></div>
            </div>
            <div class="row">
                <div class="col-md-4"><h5>Course ::<?php echo htmlspecialchars($row["course"]);?><b><span id="crselbl"></span></h5></b></div>
            </div>
            <div class="row">
                <div class="col-md-6"><h5>Branch ::<?php echo htmlspecialchars($row["branch"]);?><b><span id="brlbl"></span></b></h5></div>
            </div>

    </div>
<div class="container">
        <div class="row">
            
        </div>
    </div>

</div>


         <!--Start Basic Information section -->
       
      <div class="container" style="margin-top:20px;   border:3px solid #0a0a0a; border-radius: 10px;">
            <div class="row">
            <div class="col-md-2 panel panel-heading">Basic Information
                </div>
            </div>
          
          <div class="row form-group">
            <label class="col-md-1 control-label" for="first_name" >Name of the student</label>  
            <div class="col-md-2">
			<div class="input-group">
			<!--span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span-->
                <input name="name" type="text" value="<?php echo htmlspecialchars($row["studentname"]);?>" id="name" class="form-control input-md disabled" />

            </div></div>

            <label class="col-md-1 control-label" for="middle_name" >Gender</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
                <select name="Gender" id="Gender" class="form-control input-md">
	<option value=""></option>
	<option value="Male" name="Gender">Male</option>
	<option value="Female" name="Gender">Female</option>

</select>
               </div>
		</div>
              
            <label class="col-md-1 control-label" for="last_name">Date of Birth</label> 
              <div class="col-md-2">
              <div class="input-group">
			<span class="input-group-addon">
                <i class="glyphicon glyphicon-user"></i>
			</span>
		    <input name="dob" type="date" id="dob" class="form-control input-md" />
			  
               </div>
            </div>   
	      </div>
           
   
  <div class="row form-group">
            <label class="col-md-1 control-label" for="first_name" >Blood Group</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
                <select name="BloodGroup" id="BloodGroup" class="form-control input-md">
	<option value="---Select---">---Select---</option>
	<option value="A+">A+</option>
	<option value="A-">A-</option>
	<option value="B+">B+</option>
	<option value="B-">B-</option>
	<option value="AB+">AB+</option>
	<option value="AB-">AB-</option>
	<option value="O+">O+</option>
	<option value="O-">O-</option>
	<option value="Other">Other</option>

</select>
            </div></div>

            <label class="col-md-1 control-label" for="middle_name">Place of Birth</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
                  <input name="pob" type="text" id="pob" class="form-control input-md" />
             
            </div>
		</div>
            <label class="col-md-1 control-label" for="last_name" >MotherTongue</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
                <select name="MotherTongue" id="MotherTongue" class="form-control input-md">
	<option value="---Select---">---Select---</option>
	<option value="Telugu">Telugu</option>
	<option value="Urdu">Urdu</option>
	<option value="Tamil">Tamil</option>
	<option value="Kanada">Kanada</option>
	<option value="Marati">Marati</option>
	<option value="Other">Other</option>

</select>
            </div>
	      </div>
         
    </div>
      <div class="row form-group">
            <label class="col-md-1 control-label" for="first_name" >Caste</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
              <select name="caste" id="caste" class="form-control input-md">
	<option value="---Select---">---Select---</option>
	<option value="OC">OC</option>
	<option value="EBC">EBC</option>
	<option value="BC-A">BC-A</option>
	<option value="BC-B">BC-B</option>
	<option value="BC-C">BC-C</option>
	<option value="BC-D">BC-D</option>
	<option value="BC-E">BC-E</option>
	<option value="BC-F">BC-F</option>
	<option value="SC">SC</option>
	<option value="ST">ST</option>
	<option value="Other caste">Other caste</option>

</select>
            </div></div>

            <label class="col-md-1 control-label" for="middle_name" >Religion</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
              <select name="Religion" id="Religion" class="form-control input-md">
	<option value="---Select---">---Select---</option>
	<option value="Hindu">Hindu</option>
	<option value="Muslim">Muslim</option>
	<option value="Christian">Christian</option>
	<option value="Other Religion">Other Religion</option>

</select>
            </div>
		</div>
            <label class="col-md-1 control-label" for="last_name">Nationality</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
            

                <select name="Nationality" id="Nationality" class="form-control input-md">
	<option value="---Select---">---Select---</option>
	<option value="INDIAN">INDIAN</option>
	<option value="Others">Others</option>

</select>
         </div>
	      </div>
                
    </div>   

           <div class="row form-group">
            <label class="col-md-1 control-label" for="first_name">Aadhar #</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
             
                
                 <input name="Aadhar" type="text" id="Aadhar" class="form-control input-md" />
               
            </div></div>

            <label class="col-md-1 control-label" for="middle_name">Contact #</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
             
                 <input name="cnt_txtbx" type="text" id="cnt_txtbx" class="form-control input-md" />
            </div>
		</div>
            <label class="col-md-1 control-label" for="last_name">Moles</label>  
            <div class="col-md-2">
			<div class="input-group">
			
                <textarea name="mole_txtbx" rows="2" cols="20" id="mole_txtbx" class="form-control input-md">
</textarea>
              
            </div>
	      </div>
            
             
    </div>  


           <div class="row form-group">
            <label class="col-md-1 control-label" for="first_name">Emailid</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
             
                 <input name="emailid_txtbx" type="text" id="emailid_txtbx" class="form-control input-md" />
               
            </div></div>


                <label class="col-md-1 control-label" for="first_name">Upload Image</label>  
            <div class="col-md-2">
			
			
              <input type="file" name="imageupload" id="imageupload" />
                <span id="RegularExpressionValidator1" style="color:Red;visibility:hidden;">Only Images are allowed</span>
               
            </div>

    </div>  
          

      </div>

        <!--end Basic Information section -->
       
        <!--Start Education Details -->
        <div class="container" style="margin-top:20px; border:3px solid #050000; border-radius: 10px;">
            <div class="row">
            <div class="col-md-2 panel panel-heading">Education Details</div>
        </div>
          
          <div class="row form-group">

            <label class="col-md-1 control-label" for="first_name">SSC HallTic #</label>  
             <div class="col-md-2">
			    <div class="input-group">
			      <input name="sscno_txtbx" type="text" id="sscno_txtbx" class="form-control input-md" />
                </div>
             </div>
            <label class="col-md-1 control-label" for="last_name">SSC Board</label>  
             <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
              <select name="sscbrddrpdwn" id="sscbrddrpdwn" class="form-control input-md">
	<option value="---Select---">---Select---</option>
	<option value="Borad of SSC">Borad of SSC</option>
	<option value="ICSE">ICSE</option>
	<option value="CBSE">CBSE</option>

</select>
            </div>
		</div>
              <label class="col-md-1 control-label" for="last_name">SSC %(GPA)</label>  
              <div class="col-md-1">
			<div class="input-group">
			 <input name="sscper_txtbx" type="text" id="sscper_txtbx" class="form-control input-md" />
            </div>
	      </div>
              <label class="col-md-1 control-label" for="last_name">Year of Passing</label>
              <div class="col-md-2">
             <select name="sscyeardrpdwn" id="sscyeardrpdwn" class="form-control input-md">
	<option value="2024">2024</option>
	<option value="2023">2023</option>
	<option value="2022">2022</option>
	<option value="2021">2021</option>
	<option value="2020">2020</option>
	<option value="2019">2019</option>
	<option value="2018">2018</option>
	<option value="2017">2017</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
	<option value="2014">2014</option>
	<option value="2013">2013</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>
	<option value="2000">2000</option>
	<option value="1999">1999</option>
	<option value="1998">1998</option>
	<option value="1997">1997</option>
	<option value="1996">1996</option>
	<option value="1995">1995</option>
	<option value="1994">1994</option>
	<option value="1993">1993</option>
	<option value="1992">1992</option>
	<option value="1991">1991</option>
	<option value="1990">1990</option>
	<option value="1989">1989</option>
	<option value="1988">1988</option>
	<option value="1987">1987</option>
	<option value="1986">1986</option>
	<option value="1985">1985</option>
	<option value="1984">1984</option>
	<option value="1983">1983</option>

</select>
            </div>
          </div>

              <div class="row form-group">

              
                 <label class="col-md-1 control-label" for="last_name">SSC School name</label>  
              <div class="col-md-2">
			<div class="input-group">
			
              <input name="schoolname_txtbx" type="text" id="schoolname_txtbx" class="form-control input-md" />
            </div>
	      </div>
              <label class="col-md-1 control-label" for="last_name">Pass Type</label>  
             <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
              <select name="sscpassdrpdwn" id="sscpassdrpdwn" class="form-control input-md">
	<option value="---Select---">---Select---</option>
	<option value="Regular">Regular</option>
	<option value="Supplementary">Supplementary</option>
	<option value="Open School">Open School</option>

</select>
            </div>
		</div>
          </div>    
      </div>

         <!--end Education Details -->

         <!--Start parent Details -->
        <div class="container" style="margin-top:20px; border:3px solid #0e0d0d; border-radius: 10px;">
            <div class="row">
            <div class="col-md-2 panel panel-heading">Parent Details</div>
          </div>
          <div class="row form-group">
            <div class="col-md-8" id="mobile_numbers"></div>
          </div>

          <div class="row form-group">
            <label class="col-md-1 control-label" for="first_name">Father Name</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
              <input name="fnme_txtbx" type="text" id="fnme_txtbx" class="form-control input-md" />
            </div></div>

            <label class="col-md-1 control-label" for="middle_name">Father Aadhar #</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			
			</span>
             <input name="faadr_txtbx" type="text" maxlength="12" id="faadr_txtbx" class="form-control input-md" />
            </div>
		</div>
            <label class="col-md-1 control-label" for="last_name">Mobile #</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			
			</span>
               <input name="fnph_txtbx" type="text" id="fnph_txtbx" class="form-control input-md" />
            </div>
	      </div>
              <label class="col-md-1 control-label" for="last_name">Occupation</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			
			</span>
               <input name="focc_txtbx" type="text" id="focc_txtbx" class="form-control input-md" />
            </div>
	      </div>
          </div>

              <div class="row form-group">
            <label class="col-md-1 control-label" for="first_name">Mother Name</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
               <input name="mtrnme_txtbx" type="text" id="mtrnme_txtbx" class="form-control input-md" />
            </div></div>

            <label class="col-md-1 control-label" for="middle_name">Mother Aadhar #</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			
			</span>
               <input name="mtraadr_txtbx" type="text" maxlength="12" id="mtraadr_txtbx"  class="form-control input-md" />
            </div>
		</div>
            <label class="col-md-1 control-label" for="last_name">Mobile #</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicons-phone"></i>
			</span>
               <input name="mtrph_txtbx" type="text" id="mtrph_txtbx" class="form-control input-md" />
            </div>
	      </div>
                  <label class="col-md-1 control-label" for="last_name">Occupation</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			
			</span>
               <input name="mtrocc_txtbx" type="text" id="mtrocc_txtbx" class="form-control input-md" />
            </div>
	      </div>
          </div>

      
          <div class="row form-group">
            <label class="col-md-1 control-label" for="first_name">Guardian Name</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
               <input name="gnnme_txtbx" type="text" id="gnnme_txtbx" class="form-control input-md" />
            </div></div>

            <label class="col-md-1 control-label" for="middle_name">Guardian Aadhar #</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			
			</span>
               <input name="gnaadr_txtbx" type="text" maxlength="12" id="gnaadr_txtbx"   class="form-control input-md" />
            </div>
		</div>
            <label class="col-md-1 control-label" for="last_name">Mobile #</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			
			</span>
               <input name="gnph_txtbx" type="text" id="gnph_txtbx" class="form-control input-md" />
            </div>
	      </div>
              <label class="col-md-1 control-label" for="last_name">Occupation</label>  
            <div class="col-md-2">
			<div class="input-group">
			<span class="input-group-addon">
			
			</span>
               <input name="gocc_txtbx" type="text" id="gocc_txtbx" class="form-control input-md" />
            </div>
	      </div>
          </div>

            
         
      </div>

         <!--end parent Details -->

         <!--Start bank Details -->
        <div class="container" style="margin-top:20px; border:3px solid #070707; border-radius: 10px;">
            <div class="row">
            <div class="col-md-2 panel panel-heading">Bank Details</div>
           
          </div>
         

          <div class="row form-group">
            <label class="col-md-1 control-label" for="first_name">Bank Name</label>  
            <div class="col-md-4">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
               <input name="bnkname_txtbx" type="text" id="bnkname_txtbx" class="form-control input-md" />
            </div></div>

            <label class="col-md-1 control-label" for="middle_name">Branch Name</label>  
            <div class="col-md-4">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
              <input name="bnkbr_txtbx" type="text" id="bnkbr_txtbx" class="form-control input-md" />
            </div>
		</div>
           
            
          </div>
                <div class="row form-group">
            <label class="col-md-1 control-label" for="acnumber">Account number</label>  
            <div class="col-md-4">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
    <input name="acnumber_txtbx" type="text" id="acnumber_txtbx" class="form-control input-md" />

              
            </div></div>

            <label class="col-md-1 control-label" for="ifsc">IFSC Code</label>  
            <div class="col-md-4">
			<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-user"></i>
			</span>
                 <input name="ifsc_txtbx" type="text" id="ifsc_txtbx" class="form-control input-md" />
             
            </div>
		</div>
            
          </div>

      </div>

         <!--end bank Details -->

          <!--Start communication Details -->
        <div class="container" style="margin-top:20px; border:3px solid #0c0c0c; border-radius: 10px;">
          <div class="row">
            <div class="col-md-2 panel panel-heading">Address Information</div>
            <div class="col-md-4 panel panel-heading" style="display:none; color:red" id="address_error"></div>
          </div>
          <div class="row form-group">
            <label class="col-md-2 control-label" for="H.no">House/Flat No</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-home"></i>
			</span>
                <input name="hso_txtbx" type="text" id="hso_txtbx" name="hno" class="form-control input-md ac_village" />
              </div>

            </div>

            <label class="col-md-1 control-label" for="street">Street</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
                       <input name="street_txtbx" type="text" id="street_txtbx" class="form-control input-md ac_street" />
             
            </div></div>

            <label class="col-md-1 control-label" for="Village">Village</label>
            <div class="col-md-2">
		<div class="input-group">
			<span class="input-group-addon">
			<i class="glyphicon glyphicon-list"></i>
			</span>
                 <input name="village_txtbx" type="text" id="village_txtbx" class="form-control input-md ac_village" />
             
            </div>
		</div>
          </div>

          <div class="row form-group">
            <label class="col-md-2 control-label" for="mandal">Mandal</label>  
            <div class="col-md-2">
                            <input name="mandal_txtbx" type="text" id="mandal_txtbx" class="form-control input-md ac_mandal" />
              
            </div>

            <label class="col-md-1 control-label" for="District">District</label>  
            <div class="col-md-2">
                <select name="district_drpdwn" id="district_drpdwn" class="form-control input-md ac_district">
	<option value="--select--">--select--</option>
	<option value="Anantapur">Anantapur</option>
	<option value="Chittoor">Chittoor</option>
	<option value="East Godavari">East Godavari</option>
	<option value="Guntur">Guntur</option>
	<option value="Krishna">Krishna</option>
	<option value="Kurnool">Kurnool</option>
	<option value="Nellore">Nellore</option>
	<option value="Prakasam">Prakasam</option>
	<option value="Srikakulam">Srikakulam</option>
	<option value="Visakhapatnam">Visakhapatnam</option>
	<option value="Vizianagaram">Vizianagaram</option>
	<option value="West Godavari">West Godavari</option>
	<option value="YSR Kadapa">YSR Kadapa</option>

</select>
             </div>
                

            <label class="col-md-1 control-label" for="state">State</label>  
            <div class="col-md-2">
            
              <select name="state_drpdn" id="state_drpdn" class="form-control input-md ac_state">
	<option value="--select--">--select--</option>
	<option value="Andhra Pradesh">Andhra Pradesh</option>

</select>
            </div>
          </div>

          <div class="row form-group">
            <label class="col-md-2 control-label" for="pin_code">Pin Code</label>  
            <div class="col-md-2">
                <input name="pin_txtbx" type="text" id="pin_txtbx" class="form-control input-md" placeholder="" />
             
            </div>

          </div>

               <div class="form-group row">
            <div class="col-md-6 text-center">
                        <input type="submit"  value="submit"   controltovalidate="FileUpload1" class="btn btn-large btn-success" />
                        <input type="submit" name="address_btnclr" value="Clear"  id="address_btnclr" class="btn btn-large btn-danger" />
                </div>
                   <div class="col-md-6 text-center">    
                
            </div>
          </div>
         
      </div>

         <!--end communication Details -->
</form>
</body>
</html>
