<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
<link rel="stylesheet" href="css/sty.css">
</head>
<body>
<div class="container">
        <div class="row">
        <?php
      $server='localhost';
      $uname='root';
      $password='';
      $database='key';

      $con=mysqli_connect($server,$uname,$password,$database) or die('database not connected');
             $id1=$_GET['id'];
             $que="select * from cloud where id=$id1";
             $res=mysqli_query($con,$que);

             if($row=mysqli_fetch_array($res))
             {?>
                <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration din" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Update Form</h3>
            <form method="POST" action="ud2.php">

              <div class="row">
              <div class="form-outline">
                    <label>ID number</label>
                    <input type="text" class="form-control" name="id" value="<?php echo $row[0];?>"read only>
                  </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label>first name</label>
                    <input type="text" class="form-control" name="fname" value="<?php echo $row[1];?>">
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <label>last name</label>
                    <input type="text" class="form-control" name="lname" value="<?php echo $row[2];?>">
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">

                  <div class="form-outline datepicker w-100">
                    <input type="date" class="form-control form-control-lg" name="date" value="<?php echo $row[4];?>"/>
                    <label  class="form-label">Birthday</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <h6 class="mb-2 pb-1">Gender: </h6>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gen" id="femaleGender"
                    value="female" <?php if($row[5]=="female"){echo "checked";}?> />
                    <label class="form-check-label" for="femaleGender">Female</label>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gen" id="maleGender"
                    value="male"  <?php if($row[5]=="male"){echo "checked";}?> />
                    <label class="form-check-label" for="maleGender">Male</label>
                  </div>

                

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">

                  <div class="form-outline">
                    <input type="number" id="age" class="form-control form-control-lg" name="age" value="<?php echo $row[3];?>"/>
                    <label class="form-label" for="age">Age</label>
                  </div>

                </div>
                
              </div>
              <div class="mt-4 pt-2">
                <input type="submit" class="btn btn-success">
                    <input type="reset" class="btn btn-danger">
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
           <?php  }
            ?>
            </body>
</html>