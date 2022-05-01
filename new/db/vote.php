<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="sweetalert2.all.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
<?php
include('connect.php');
if(isset($_POST['Name']) && isset($_POST['citzenship_no']) && isset($_POST['voter_id'])){
$name=$_POST['Name'];
$citizenno=$_POST['citzenship_no'];
$voter_id=$_POST['voter_id'];
$query="INSERT INTO `voters`( `Name`, `citzenship_no`, `voter_id`) VALUES ('$name','$citizenno','$voter_id')";
$check="SELECT `citzenship_no`, `voter_id` FROM `voters` WHERE citzenship_no='$citizenno' voter_id='$voter_id' ";
$query=mysqli_query($conn,$query);
$result=mysqli_query($conn,$check);
if($result){
    echo"<script>alert('You Already Voted')</script>)";
}
elseif($query){
    echo"<script>alert('Inserted')</?script>";
    // header('location:../home.php');
}
else{
    echo"Connect failed".mysqli_error($conn);
    // header('location:../home.php');
}
}

?>
</body>

</html>