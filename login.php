<?php
session_start();
require_once "db.php";
$logName = $_POST["username"];
$logPass = $_POST["password"];

$sql ="SELECT username,password from user where username="."'$logName'".";";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($row["username"] != 0) {
           if(password_verify($logPass,$row["password"])){
                $_SESSION["user"] = $user;
                header("Location:index.php?logged=1");
           }else{
            header("Location:index.php?err=1");
           }
        }
    }
} else {
    header("Location:login.php?err=1");
}
?>