<?php
$server='localhost';
$uname='root';
$password='';
$database='key';

$con=mysqli_connect($server,$uname,$password,$database) or die('database not connected');

$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$date=$_POST['date'];
$gen=$_POST['gen'];

$query="update cloud set fname='$fname',lname='$lname',age=$age,date='$date',gen='$gen' where id=$id";
if($res=mysqli_query($con,$query))
 {
    echo"<script> alert('update successfully');
    window.location.href='fetch.php';
    </script>";
    
 }
 else
 {
    echo"<script> alert('update not successfully')</script>";
 }
 ?>