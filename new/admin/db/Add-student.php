<?php
include('connect.php');
if(isset($_POST['submit'])){
$sname=$_POST['StudentName'];
$semail=$_POST['StudentEmail'];
$paddress=$_POST['StudentPermanentAddress'];
$taddress=$_POST['StudentTemporaryAddress'];
$class=$_POST['StudentClass'];
$scontact=$_POST['StudentContactNumber'];
$DOB=date('y-m-d');
$gender=$_POST['Gender'];
$fname=$_POST['FatherName'];
$mname=$_POST['MotherName'];
$pcontact=$_POST['ContactNumber'];
$paddress=$_POST['PrentsAddress'];
$username=$_POST['UserName'];
$password=$_POST['Password'];

// 
$query="INSERT INTO `tblstudent`( `StudentName`, `StudentEmail`, `StudentPermanentAddress`, `StudentTemporaryAddress`, `StudentClass`, `StudentContactNumber`, `DOB`, `Gender`, `FatherName`, `MotherName`, `ContactNumber`, `PrentsAddress`, `UserName`, `Password`)
 VALUES ('$sname','$semail','$paddress','$taddress','$class','$scontact','$DOB','$gender','$fname','$mname','$pcontact','$paddress','$username','$password')";
// 

if(mysqli_query($conn,$query)){
 $msg="successfully inserted";
}
else{
    $msg="Error occured".mysqli_error($conn);
}
}
header('location:../add-student.php?msg='.$msg);
?>