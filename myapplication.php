<?php
include('conn.php');
include('function.php');
session_start();
?>

<!doctype html>
<html lang="ar" dir="rtl">
  <head>
  <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  margin-top:20px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
    
    <!-- Required meta tags -->
    <meta charset="utf-8" content=">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <title>job portel</title>
  </head>
  <body>
  <nav class="navbar bg-light">
  <div class="container-fluid text-left">
  
    <form class="d-flex">
    <a class="nav-link" href="http://localhost/dashboard/logout.php">Logout</a>
    
    <a class="nav-link" href="myapplication.php">Myapplication</a>
    <a class="nav-link" href="http://localhost/dashboard/loginform.php">Jobs</a>
    
    </form>
    <form class="navbar-brand text-center" method="Post" action="myapplication.php">
      <input style="display:inline-block;width:80%;" class="form-control me-2" id="searchtext" name="searchtext" type="text" placeholder="Search">
      <input type="submit" id="searchbtn" class="btn btn-outline-success" name="searchbtn">
    </form>
  </div>
</nav>
</head>
<?php

if(isset($_POST["searchbtn"]))
{
  $search=$_POST["searchtext"];
  $query="select * from `job`, `applications` 
          where job.id=applications.jobid 
          and applications.userid='{$_SESSION['userid']}' 
          and `title` like '%$search%'";
  $searchresult = mysqli_query($con, $query);
  while($rows = mysqli_fetch_array($searchresult))  
    {?>
    <div class="column">
      <div class="card">
        <h3><?php echo $rows["title"]; ?></h3>
        <p><strong>Location:</strong> <?php echo $rows["location"]; ?></p>
        <hr>
        <p style="height:100px;"><?php echo $rows["details"]; ?></p>
        <input type="submit" name="apply" style="margin-top:5px;" class="btn btn-success" value="Apply" />
      </div>
    </div>
    <?php  
  }
}
else
{?>
<body>
<div class="row">
<?php  
  $query = "SELECT * FROM job, applications WHERE job.id=applications.jobid and applications.userid='{$_SESSION['userid']}'";
  $result = mysqli_query($con, $query);  
    while($row = mysqli_fetch_array($result))  
    {  
    ?> 
    <?php  
    ?>
    <div class="column">
      <form method="post" action="loginform.php">
      <div class="card">
        <h3><?php echo $row["title"]; ?></h3>
        <p><strong>Location:</strong> <?php echo $row["location"]; ?></p>
        <hr>
        <p style="height:100px;"><?php echo $row["details"]; ?></p>
        <input type="hidden" name="job_id" id="job_id" value=<?php echo $row["id"]; ?>/>
        <!-- <input type="submit" name="apply" style="margin-top:5px;" class="btn btn-success" value="Apply" /> -->
      </div>
      </form>
    </div>
    <?php  
  }?>
  </div>
<?php 
?>
<?php
}?>