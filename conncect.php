<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', '', 'reg');
if ($conn->connect_error) {
    die('connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into user(name,email,phone,password) value (?,?,?,?)");
    $stmt->bind_param('ssis', $name, $email, $phone, $password);
    $stmt->execute();
    echo "registration successfull";
    $stmt->close();
    $conn->close();
}
?>