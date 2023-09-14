<?php
// Include another PHP file
require 'conection.php';
if(isset($_POST['Rollno_txtbx'])){

// Assuming you have a table named "register" with columns: id, sname, gender, dob, bloodgroup, placeofbirth, mothertongue, caste, religion, nationality, aadhar
$id=$_POST['Rollno_txtbx'];
$name = $_POST["name"];
$gender = $_POST["Gender"];
$dob = $_POST["dob"];
$bloodgroup = $_POST['BloodGroup'];
$pob = $_POST['pob'];
$mothertongue = $_POST['MotherTongue'];
$caste = $_POST['caste'];
$religion = $_POST['Religion'];
$nationality = $_POST['Nationality'];
$aadhar = $_POST['Aadhar'];
$contact=$_POST['cnt_txtbx'];
$mole=$_POST['mole_txtbx'];
$email=$_POST['emailid_txtbx'];
$scchall=$_POST['sscno_txtbx'];
$sscboard=$_POST['sscbrddrpdwn'];
$sscgpa=$_POST['sscper_txtbx'];
$yearofpassing=$_POST['sscyeardrpdwn'];
$sscschoolname=$_POST['schoolname_txtbx'];
$passtype=$_POST['sscpassdrpdwn'];
// Prepare the SQL statement
$sql = "INSERT INTO register (rollno,name,gender,dateofbirth,bloodgroup,placeofbirth,mothertongue,caste,religion,nationality,aadhar,contact,moles,emailid,sschallticket,sscboard,sscgpa,yearofpassing,sscschool,passtype) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare and bind the statement
$stmt = $connection->prepare($sql);
$stmt->bind_param("ssssssssssiissssssss",$id,$name, $gender, $dob, $bloodgroup, $pob, $mothertongue, $caste, $religion, $nationality, $aadhar,$contact,$mole,$email,$scchall,$sscboard,$sscgpa,$yearofpassing,$sscschoolname,$passtype);

// Execute the statement
if ($stmt->execute()) {
    echo "New record inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
header("location: registrationform1.php");

}
// Close the statement and connection
$stmt->close();
$connection->close();

?>
