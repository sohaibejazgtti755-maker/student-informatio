<?php
$servername = "localhost";   
$username   = "root";        
$password   = "";            
$dbname     = "studentt_db";

$conn = new mysqli($servername, $username, $password, $dbname);

 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$fullname = $_POST['fullname'];
$email    = $_POST['email'];
$course   = $_POST['course'];
$gender   = $_POST['gender'];
$date      = $_POST['dob'];
$phone    = $_POST['phone'];
$address  = $_POST['address'];


$sql = "INSERT INTO studenttt (fullname, email, course, gender, dob, phone, address)
  VALUES ('$fullname', '$email', '$course', '$gender', '$dob', '$phone', '$address')";

if ($conn->query($sql) === TRUE) {
    echo "<h3> Student record inserted successfully!</h3>";
    echo "<a href='views.php'>View Records</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>