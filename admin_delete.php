<?php
include('conn.php');
include('function.php');
if(isset($_POST['submit']))
{
  $job_id=$_POST["job_id"];
  $check_id = "SELECT `id` FROM `job` WHERE `id`=$job_id;";
  $result = mysqli_query($con,$check_id);
  $rows=$result->fetch_assoc();
  if($rows){
  $query=mysqli_query($con,"DELETE FROM `job` WHERE `id`=$job_id;");
  echo '<script>alert("Job deleted successfully")</script>'; 
  redirect('admin_delete.php');
  }
  else{
    echo '<script>alert("Job Id does not exist")</script>'; 
    redirect('admin_modify.php');
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
    <a class="nav-link" href="http://localhost/dashboard/admin.php">Add Job</a>
  </li>
</ul>
    <div class="container">
    <form action="admin_delete.php" method="POST">
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
  <button type="submit" class="btn btn-primary" name="submit">Delete</button>
</form>
    </div>
  </body>
</html>