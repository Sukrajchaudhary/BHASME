<?php
include('connect.php');
if(isset($_POST['LOGIN'])){
$email=$_POST['email'];
$pass=$_POST['password'];
$query="SELECT  `email`, `password` FROM `admin` WHERE  email = '$email' AND  password='$pass'";
$result=mysqli_query($conn,$query);
$row=mysqli_num_rows($result);
if($row==1){
    $data = mysqli_fetch_assoc($result);
    echo"login successfully";
    header('location:../admin/home.php');
}
else{
    echo"login failed";
}
}



?>