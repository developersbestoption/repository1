<?php

$rollno = '21438cm001';
if (!empty($_POST['rollno'])) {
  $rollno = $_POST['rollno'];
}

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "sdbms");

// Get the name from the database
$sql = "SELECT Name FROM basicdata WHERE rollno = '$rollno'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // Get the name from the result set
  $row = mysqli_fetch_assoc($result);
  $name = $row['Name'];
} else {
  // The rollno is not in the database
  $name = "";
}

?>

<html>
<head>
<title>Page 1</title>
</head>
<body>

<h1>Page 1</h1>

<form action="page2.php" method="post">
  <input type="text" placeholder="roll" name="rollno" value="<?php echo $rollno; ?>" readonly>
  <input type="text" placeholder="name" name="name" value="<?php echo $name; ?>">
  <input type="text" placeholder="branch" name="branch">
  <input type="text" placeholder="number" name="phone_number">
  <input type="submit" value="Submit">
</form>

</body>
</html>