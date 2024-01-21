<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}else{
    echo"success";
}
$sql = "DROP DATABASE IF EXISTS c";
(mysqli_query($conn, $sql));
  echo "created successfully(0)";
$sql = "CREATE DATABASE  c ";
if (mysqli_query($conn, $sql)) {
 echo "created successfully(1)";}

  $conn = mysqli_connect($servername, $username, $password, "c");
  $sql = "CREATE TABLE IF NOT EXISTS ex1 (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  NAME VARCHAR(30) NOT NULL,
  MOBILE VARCHAR(10) NOT NULL,
  EMAIL VARCHAR(50) NOT NULL ,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  if(mysqli_query($conn, $sql)){
    echo '<br>debug: done';
  }
  $sql = "INSERT INTO ex1 (NAME, MOBILE, EMAIL)
  VALUES ('do the duong', '0999787979', 'doduong036@gmail.com')";
   
if (mysqli_query($conn, $sql)) {
    echo "<br>debug: done(1)";
}else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO ex1 (name, mobile, email)
VALUES ('dcoco', '02323234234', 'dcoco@gmail.com')";
   
if (mysqli_query($conn, $sql)) {
  echo "<br>debug: done(2)";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO ex1 (name, mobile, email)
VALUES ('Mixi', '0993243546', 'domici@gmail.com')";
   
if (mysqli_query($conn, $sql)) {
    echo "<br>debug: done";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO ex1 (name, mobile, email)
VALUES ('gay', '0954321999', 'laogia@gmail.com')";
   
if (mysqli_query($conn, $sql)) {
  echo "<br>debug: done";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "INSERT INTO ex1 (name, mobile, email)
VALUES ('mr.fabulos', '0124444449', 'mrfunnygmail.com')";
   
if (mysqli_query($conn, $sql)) {
  echo "<br>debug: done";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql = "SELECT id, Name, mobile, email, reg_date FROM ex1";
$result = mysqli_query($conn, $sql);
echo "<br> Student info <br>";
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) { 
    echo "id: " . $row['id']. " - NAME: " . $row['Name']. " - Molbile: " . $row['mobile']." - email: ". $row["email"] . " - Register date: ". $row["reg_date"]. "<br>";
  }
} else {
  echo "0 results";
} 
  ?>
