<?php
if (isset($_GET['Rollno_txtbx '])) {
    $primary_key = $_GET['Rollno_txtbx '];

    // Assuming you have a database connection in connection.php
    require 'conection.php';

    // Assuming your table name is "your_table" and the primary key column is "id"
    $sql = "SELECT * FROM basicdata WHERE rollno = ? LIMIT 1";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("s", $primary_key);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Redirect to page3.php with the fetched data as URL parameters
      
        header("Location: page3.php?id=" . $row['rollno'] . "&name=" . urlencode($row['name']) . "&collegename=" . urlencode($row['collegename'])."&studentname=" . urlencode($row['studentname'])."&yoa=" . urlencode($row['yoa'])."&coursetype=" . urlencode($row['coursetype'])."&course=" . urlencode($row['course'])."&branch	=" . urlencode($row['branch	'])."&category	=" . urlencode($row['category'])."&admno=" . urlencode($row['admno'])."&doa=" . urlencode($row['doa']));
       
        exit();
    } else {
        // Handle data not found
        echo "Data not found.";
    }
    // Close the database connection
    $stmt->close();
    echo "Data not found.";
    $connection->close();
}
?>
