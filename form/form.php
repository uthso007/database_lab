<?php
 $name= $_POST['name'];
 $dept= $_POST['dept'];
 $session= $_POST['session'];
 $roll= $_POST['roll'];
 $contact= $_POST['contact'];
 $email= $_POST['email'];

$conn=new mysqli('localhost','root','','Student_form');
if($conn->connect_error)
{
    die("connection failed.." .$conn->connect_error);
}
else 
{
    $stmt = $conn->prepare("insert into Resistation(Name,Department,Session,Roll,Number,Email) values(?,?,?,?,?,?)");
    $stmt->bind_param("sssiis",$name,$dept,$session,$roll,$contact,$email);
    $stmt->execute();
    echo"Registration successfull";
    $stmt->close();
    $conn->close();
}
?>
