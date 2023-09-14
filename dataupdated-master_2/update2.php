<?php
// Include another PHP file
require 'conection.php';
if(isset($_POST['Rollno_txtbx'])){

// Assuming you have a table named "register" with columns: id, sname, gender, dob, bloodgroup, placeofbirth, mothertongue, caste, religion, nationality, aadhar
$id=$_POST['Rollno_txtbx'];
$name = $_POST["name_txtbx"];
$gender = $_POST["gdrdrpdwnlist"];
$dob = $_POST["dob"];
$bloodgroup = $_POST['bldgrpdrpdwn'];
$pob = $_POST['plc_txtbx'];
$mothertongue = $_POST['mothertngedrpdwn'];
$caste = $_POST['cstedrpdwn'];
$religion = $_POST['rligndrpdwn'];
$nationality = $_POST['ntndrpdwn'];
$aadhar = $_POST['Aadr_txtbx'];
$contact=$_POST['cnt_txtbx'];
$mole=$_POST['mole_txtbx'];
$email=$_POST['emailid_txtbx'];
$scchall=$_POST['sscno_txtbx'];
$sscboard=$_POST['sscbrddrpdwn'];
$sscgpa=$_POST['sscper_txtbx'];
$yearofpassing=$_POST['sscyeardrpdwn'];
$sscschoolname=$_POST['schoolname_txtbx'];
$passtype=$_POST['sscpassdrpdwn'];


$update_query = "UPDATE register SET  name = '$name' ,gender='$gender',dateofbirth='$dob',bloodgroup='$bloodgroup',placeofbirth='$pob', mothertongue='$mothertongue' ,caste='$caste',religion='$religion',nationality='$nationality',aadhar= '$aadhar',contact='$contact',moles='$mole',emailid='$email',sschallticket='$scchall',sscboard='$sscboard',sscgpa='$sscgpa',yearofpassing='$yearofpassing',sscschool='$sscschoolname',passtype='$passtype'  WHERE rollno = '$id'";



if ($connection->query($update_query) ===TRUE) {
        echo "New record inserted successfully.";
    } else {
         echo "Error: " . $sql . "<br>" . $connection->error;
     }
     header("location: update.php");
    
    }
      //Close the statement and connection
     $update_query->close();
     $connection->close();
?>
