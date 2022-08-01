<?php
include('conn.php');
include('function.php');
session_start();
$query = "SELECT * FROM users WHERE userid='{$_SESSION['userid']}'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
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
    <a class="nav-link" href="http://localhost/dashboard/index.html">Logout</a>
    <a class="nav-link" href="myapplication.php">Myapplication</a>
    <a class="nav-link" href="http://localhost/dashboard/loginform.php">Jobs</a>
    <a class="nav-link" href="user_profile.php"><?php echo $_SESSION['username']?></a>
    <!-- <a class="navbar-brand text-right"><?php echo $_SESSION['userid']?></a> -->
    </form>
    <form class="navbar-brand text-center" method="Post" action="loginform.php">
      <input style="display:inline-block;width:80%;" class="form-control me-2" id="searchtext" name="searchtext" type="text" placeholder="Search">
      <input type="submit" id="searchbtn" class="btn btn-outline-success" name="searchbtn">
    </form>
  </div>
</nav>
</head>
<center><h3>Details</h3></center>
<br>
<p><strong>Username:</strong> <?php echo $row["username"]; ?></p>
<hr>
<p><strong>Email:</strong> <?php echo $row["email"]; ?></p>
<hr>
<p><strong>Date of Creation:</strong> <?php echo $row["create_datetime"]; ?></p>


