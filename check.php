<?php 


session_start();
header('location:main.html');


$con = mysqli_connect('localhost' , 'root' , '');

mysqli_select_db($con , 'students');

$name = $_POST ['mail'];
$pass = $_POST ['pass'];

$s = " select * from mail where name = '$name'";

$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result);

if($num != 0) {
    while ($row = mysql_fetch($s)){
        $dbname = $row['mail'];
        $dbpass = $row['pass'];
    }
    if($name == $dbname && $pass == $dbpass){
        echo "loged in";
    }

}
else {
    die("");
}

?>