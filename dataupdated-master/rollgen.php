<?php
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
$sql = "INSERT INTO  basicdata(rollno,name,collegename,yoa,toc,course	,branch,category,admno,doa) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare and bind the statement
$stmt = $connection->prepare($sql);
$stmt->bind_param("ssssssssis",$rollno, $name, $college, $yoa, $toc,$course,$branch, $category ,$admision,$doa);

// Execute the statement
if ($stmt->execute()) {
    echo "New record inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

header("location: rollnumber.php");
// Close the statement and connection
$stmt->close();
$connection->close();
?>