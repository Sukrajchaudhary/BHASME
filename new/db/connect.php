<?php
$conn=mysqli_connect('localhost','root','','votes');
if(!$conn){
    echo"<script>alert(connect failed)</script>";
}
else{
    echo"<script>alert(connect Successfullly)</script>";
}
?>