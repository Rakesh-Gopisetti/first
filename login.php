<?php
include "db.php";
if (isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT username, password from test where username='$username' and password='$password'";

$result = $conn->query($query);
$count = mysqli_num_rows($result);

if($count == 1)
{
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];
 header("Location:profile.php");
}
else
{
header("Location:index.php?status=Err&msg=.$msg");
}
}
