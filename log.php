<?php
$server='localhost';
$uname='root';
$password='';
$database='key';

$con=mysqli_connect($server,$uname,$password,$database) or die('database not connected');

$fname=$_POST['fname'];
$pass=$_POST['pass'];



$query="select * from cloud where fname='$fname'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
    $pass=base64_encode($row['pass']);
    //$verify = password_verify($pass, $row['pass']);
    if($pass==$pass)
    { 
        echo "<script>alert('login sucessfully');
        </script>";
        session_start();
        $_SESSION['fname']=$fname;
        header('location:fetch1.php');
    }
    else{
        echo "<script>alert('login un  sucessfully');
        window.location.href='log.html';
        </script>";
    }
}
echo "<script>alert('invalid user data's')</script>";
?>
