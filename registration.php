<?php 


session_start();
header('location:index.html');

$con = mysqli_connect('localhost' , 'root' , '');

mysqli_select_db($con , 'students');

$name = $_POST ['mail'];
$pass = $_POST ['pass'];

$s = " select * from mail where name = '$name'";

$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result);

if($num != 0) {
    die("allredy exist");
}
else {
    $reg = "insert into students(mail ,pass) values ('$name'  , '$pass' )";
    mysqli_query($con , $reg);
    echo '<div class="alert alert-success" role="alert">
    This is a success alert—check it out!
  </div>';
}

?>