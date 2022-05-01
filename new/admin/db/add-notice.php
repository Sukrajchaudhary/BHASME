<?php
include('connect.php');
if(isset($_POST['submit'])){
    $Title=$_POST['Notice_Title'];
    $Notice=$_POST['Notice'];

    $query="INSERT INTO `noticetable`(`Notice_Title`, `Notice`) VALUE(' $Title',' $Notice')";
    if(mysqli_query($conn,$query)){
        echo"successfully inserted";
       }
       else{
           $msg="Error occured".mysqli_error($conn);
       }
       }