<?php
include('connect.php');
if(isset($_POST['submit'])){
    $Title=$_POST['Notice_title'];
    $Notice=$_POST['Message'];

    $query="INSERT INTO `tblpublicnotice`(`Notice_title`,`Message`) VALUES ('$Title','$Notice')";
    if(mysqli_query($conn,$query)){
        echo"successfully inserted";
       }
       else{
           $msg="Error occured".mysqli_error($conn);
       }
       }
?>