<?php
//print_r($_POST);
include "db.php";
if (isset($_POST['submit']))
{
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "INSERT INTO test (username, password) VALUES ('$username', '$password')";


if($conn->query($sql) == TRUE)
{
echo ("Record Created Successfully");
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
