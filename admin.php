<?php
include('conn.php');
include('function.php');
if(isset($_POST['submit']))
{
    $job_id=$_POST['job_id'];
    $job_name=$_POST['job_name'];
    $job_cat=$_POST['job_cat'];
    $job_location=$_POST['job_location'];
    $details=$_POST['details'];

    $sql="INSERT INTO `job`(`id`, `title`, `category`, `location`, `details`) VALUES ('$job_id','$job_name','$job_cat','$job_location','$details
    ')";

    $result=mysqli_query($con,$sql);
    if($result){
      echo '<script>alert("Job inserted Succesfully")</script>'; 
      redirect('admin.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" content=">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>job portel</title>
  </head>
  <body>
</div>
<h3>Welcome admin</h3>
<ul class="nav">
<li class="nav-item text-right">
    <a class="nav-link" href="logout.php">Logout</a>
  </li>
  <li class="nav-item text-right ">
    <a class="nav-link active" aria-current="page" href="http://localhost/dashboard/admin_delete.php">Delete Job</a>
  </li>
  <li class="nav-item text-right">
    <a class="nav-link" href="http://localhost/dashboard/admin_modify.php">Edit Job</a>
  </li>
  <li class="nav-item text-right">
    <a class="nav-link" href="#">Add Job</a>
  </li>
</ul>
    <div class="container">
    <form action="admin.php" method="POST">
  <div class="mb-3 my-1">
    <label for="job_id">Job ID</label>
    <input type="job_id" class="form-control text-left" name="job_id" id="job_id" aria-describedby="job_id">
  </div>
  <div class="mb-3">
    <label for="job_name">Job Title</label>
    <input type="job_name" class="form-control text-left" name="job_name" id="job_name">
  </div>
  <div class="mb-3">
  <label for="job_cat">Job Category</label>
    <input type="job_cat" class="form-control text-left" name="job_cat" id="job_cat">   
  </div>
  <div class="mb-3">
  <label for="job_location">Job Location</label>
    <input type="job_location" class="form-control text-left" name="job_location" id="job_location">   
  </div>
  <div class="mb-3">
  <label for="details">Details</label>
  <textarea class="form-control text-left" id="details" name="details" rows="1"></textarea>
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
  </body>
</html>