<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'reg';

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed".mysqli_connect_error());
}

$sql = "SELECT name,email,phone,password FROM user";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border=1><tr><th>name</th><th>email</th> <th>phone</th><th>password</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["password"]."</td></tr>";
  }
  echo "</table>";

} else {
  echo "0 results";
}

mysqli_close($conn);
?>