<?php
include('conn.php');
include('function.php');
if(isset($_POST['submit']))
{
  $job_id=$_POST["job_id"];
  $title=$_POST["job_name"];
  $category=$_POST["job_cat"];
  $location=$_POST["job_location"];
  $details=$_POST["details"];
  $check_id = "SELECT `id` FROM `job` WHERE `id`=$job_id;";
  $result = mysqli_query($con,$check_id);
  $rows=$result->fetch_assoc();
  if($rows){
  $query=mysqli_query($con,"UPDATE `job`set `title`='$title' WHERE `id`=$job_id;");
  $query=mysqli_query($con,"UPDATE `job`set `category`='$category' WHERE `id`=$job_id;");
  $query=mysqli_query($con,"UPDATE `job`set `location`='$location' WHERE `id`=$job_id;");
  $query=mysqli_query($con,"UPDATE `job`set `details`='$details' WHERE `id`=$job_id;");
  echo '<script>alert("Job updated successfully")</script>'; 
  //redirect('admin_modify.php');
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
    <a class="nav-link" href="#">Edit Job</a>
  </li>
  <li class="nav-item text-right">
    <a class="nav-link" href="http://localhost/dashboard/admin.php">Add Job</a>
  </li>
</ul>
    <div class="container">
    <form action="admin_modify.php" method="POST">
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
  <button type="submit" class="btn btn-primary" name="submit">Modify</button>
</form>
    </div>
  </body>
</html>