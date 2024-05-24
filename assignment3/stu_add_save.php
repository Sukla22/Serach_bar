<?php
$s_name = $_POST["name"];
$s_id = $_POST["id"];
$s_dept = $_POST["dept"];
$s_phone = $_POST["phone"];
$s_email = $_POST["email"];

$connection = mysqli_connect("localhost","root","","db_students");

$sql = "INSERT INTO student_info VALUES ('$s_name', '$s_id', '$s_dept', '$s_phone', '$s_email')";
mysqli_query($connection, $sql);

header("Location: student.php");