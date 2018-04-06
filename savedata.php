<?php
if(!empty($_POST['name']))
{
 $name=$_POST['name'];
 echo $name;
}

if(!empty($_POST['gender']))
{
 $gender=$_POST['gender'];
 echo $gender;
}
if(!empty($_POST['email']))
{
 $email=$_POST['email'];

 echo $email;
}

if(!empty($_POST['comment']))
{
 $comment=$_POST['comment'];
 echo $comment;
}
if(!empty($_POST['password']))
{
 $password=$_POST['password'];
 echo $password;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "savedata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO mydata (Name,Email,Password,Comment,Gender) VALUES ('$name','$email','$password','$comment','$gender')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();		
?>