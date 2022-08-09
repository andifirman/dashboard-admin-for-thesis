<?php
// Make a database connection
  $servername = "153.92.13.77";
  $username = "u1657697_new_root";
  $password = "bismillahsukses7012";
  $dbname = "u1657697_fix_db";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error . "<br>");
  }else{
    echo "Koneksi Berhasil" . "<br>";
  }

// Set the datetime for Asia/Jakarta
  // $times = date_default_timezone_set('Asia/Jakarta');
  
  date_default_timezone_set('Asia/Jakarta');
  $times = date('d-m-Y H:i:s');
  // $fixTimes = strtotime($times);
  // $url = "http://127.0.0.1:8000/image/fetch.php?nomor_tag=123123&nama=awokawokawok&hasilbenar=5";
  // echo "Current times: " . $times;

  $nis = $_GET["nomor_tag"];
  $name = $_GET["nama"];
  $stu_score = $_GET["hasilbenar"];

  // TO DO AS SOON AS POSSIBLE
  // $sql = "INSERT INTO students SET nis='".$nomor_tag ."'. name='".$nama ."'. stu_score='".$nomor_tag ."'";
  $sql = "INSERT INTO students (nis,name,stu_score,created_at,updated_at) VALUES('$nis','$name','$stu_score', now(), now())";
  // echo gettype($times);

  echo $nis . "<br>";
  echo $name . "<br>";
  echo $times . "<br>";
  echo $stu_score;


  if(mysqli_query($conn, $sql)){
    echo "<br>Sucess adding data to database</br>";
  }else{
    echo "Error: ". $sql . "<br>" . mysqli_error($conn);
  }

?>