<?php
if (! empty($_POST["send"])) {
    $user_name= $_POST["user_name"];
    $user_email= $_POST["user_email"];
    $Phoneno = $_POST["Phoneno"];
    $content = $_POST["content"];
    $conn = mysqli_connect("localhost", "root", "", "jobportal") or die("Connection Error: " . mysqli_error($conn));
    $stmt = $conn->prepare("INSERT INTO `tblcontact`(`user_name`, `user_email`, Phoneno, `content`) VALUES ('$user_name','$user_email','$Phoneno','$content')");  
$stmt->execute();
    $message = "Your contact information is saved successfully.";
    $type = "success";
    $stmt->close();
    $conn->close();
}


require_once "index.html";
?>

