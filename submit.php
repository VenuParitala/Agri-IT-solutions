<?php
$a=$_POST['namee'];
$b=$_POST['phone'];
$c=$_POST['emailid'];
$d=$_POST['message'];

$servername="localhost";
$username ="root";
$password ="";
$dbname="agriits";

$conn = new mysqli($servername,$username,$password,$dbname);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$mobile= $_SESSION['SESS_RANK'];
$sql = "INSERT INTO replies(name,phone,email,message) VALUES ('$a','$b','$c','$d')";


if ($conn->query($sql) === TRUE) {
  header("Location: index.html");
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>