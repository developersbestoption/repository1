

    <?php
    if (isset($_GET['student_id'])) {
        $student_id = $_GET['student_id'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sdbms";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM basicdata WHERE rollno = $student_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<h3>Student Details:</h3>";
            echo "<p><strong>Name:</strong> " . $row['studentname'] . "</p>";
            echo "<p><strong>Age:</strong> " . $row['yoa'] . "</p>";
            echo "<p><strong>Name:</strong> " . $row['doa'] . "</p>";
            echo "<p><strong>Age:</strong> " . $row['studentname'] . "</p>";
            echo "<p><strong>Name:</strong> " . $row['collegename'] . "</p>";
            echo "<p><strong>Age:</strong> " . $row['admno'] . "</p>";
            echo "<p><strong>Name:</strong> " . $row['course'] . "</p>";
            echo "<p><strong>Age:</strong> " . $row['coursetype'] . "</p>";
            echo "<p><strong>Name:</strong> " . $row['category'] . "</p>";
            echo "<p><strong>Age:</strong> " . $row['branch'] . "</p>";
            
            // Display other data fields as needed
        } else {
            echo "<p>No records found.</p>";
        }

        $conn->close();
    }
    ?>
    <!DOCTYPE html>
<html>
<head>
    <title>Retrieve Student Details</title>
</head>
<body>
    <h2>Retrieve Student Details</h2>
    <form method="get" action="testing.php">
        <label for="student_id">Enter Student ID:</label>
        <input type="text" name="student_id">
        <input type="submit" value="Retrieve">
    </form>
</body>
</html>
