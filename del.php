<?php
$server='localhost';
$uname='root';
$password='';
$database='key';

$con=mysqli_connect($server,$uname,$password,$database) or die('database not connected');

$id1=$_GET['id'];
$query="delete from cloud where id=$id1";
 if($res=mysqli_query($con,$query))
 {
    echo"<script> alert('delete successfully')
    window.location.href='fetch.php'</script>";
 }
 else
 {
    echo"<script> alert('delete not successfully')</script>";
 }
 ?>