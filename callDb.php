<?php

$hostname = "localhost";
$username = "root";
$password = "";
$DBName ="games";

//Create connection
$conn = new mysqli($hostname,$username, $password,$DBName);

//Check connection
if($conn->connect_error){
  die("Connetion failed: " . $conn->connect_error);
}

$sql = "SELECT idUser, email, password FROM user";
$result = $conn->query($sql);

if($result->num_rows>0){
  //output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "id: " . $row["idUser"] . " - email:" . $row["email"] . " - password: " .$row["password"]."<br>";
  }
}else{
  echo "0 results";
}
$conn->close();

?>

