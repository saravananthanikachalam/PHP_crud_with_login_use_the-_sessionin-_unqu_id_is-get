<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Data Fetch </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
    body{
        background-image: url("../img/watch.jpg");
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-position: center;
        position: relative;
    }
    *{
        color:whitesmoke;
    }
   
</style>
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.html"  style="border:1px solid black; background-color:lightblue; border-radius: 3px;">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="reg.html" style="border:1px solid black; background-color:lightblue; border-radius: 3px;">SING UP</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="view.php">view</a>
        </li>
         -->
          
    </div>
  </div>
  <div class="collapse navbar-collapse justify-content-end" 
             id="navbarSupportedContent"> 
          <ul class="navbar-nav"> 
           
            <li class="nav-item"> 
                <a class="navbar-brand" href="home.php"><img 
                    src= "https://www.hostzop.com/images/logo.png" 
                    alt="" width="130" 
                    height="40"> 
                </a> 
                </li> 
          </ul> 
        </div> 
</nav>
<!-- <div class="container din3" >
    <div class="row"> -->
            <table class="table table-bordered ">
              <thead>
                <th>S.NO</th>
                <th>first name</th>
                <th>last name</th>
                <th>age</th>
                <th>date</th>
                <th>gen</th>
                <th>password</th>
                <th>update data</th>
                <th>delete data</th>
                <th>New</th>
              </thead>
              <tbody>
              <?php
$server='localhost';
$uname='root';
$password='';
$database='key';

$con=mysqli_connect($server,$uname,$password,$database) or die('database not connected');

$query="select * from cloud";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
    $id=$row[0];
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";
    echo "<td>".$row[5]."</td>";
  
    $pass=base64_decode($row['6']);
      echo "<td>".$pass."</td>";
    echo"<td><a href='ud1.php?id=$id'class='btn btn-primary'>update</a></td>";
    echo"<td><a href='del.php?id=$id'class='btn btn-danger'>delete</a></td>";
    echo"<td><a href='reg.html'class='btn btn-success'>New</a></td>";
    echo "</tr>";

}
?>
              </tbody>
        
            </table>


    <!-- </div>
 </div> -->
    
</body>
</html>