<?php
session_start();
require_once "db.php";
$user = $_POST["username"];
$email = $_POST["email"];
$image = $_POST['pfp'];
$fullname = $_POST["fullname"];
$aboutme = $_POST["aboutme"];
$price = $_POST["price"];
$imagename = $_FILES['pfp']['name'];
$imagetype = $_FILES['pfp']['type'];
$imagetemp = $_FILES['pfp']['tmp_name'];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT );
$sql ="SELECT id FROM user where username="."'$user'"." and email="."'$email'".";";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
            $_SESSION["user"] = $user;
            $query ="insert into user(username,email,password) values("."'$user'".",'$email'".",'$password'".")";
            $result = $conn->query($query);
            $imagePath = "images/";
            if(is_uploaded_file($imagetemp)) {
                if(move_uploaded_file($imagetemp, $imagePath . $imagename)) {
                    $sql_id = "select id from user where username="."'$user'"."and email="."'$email'".";";
                    $result = $conn->query($sql);
                    $id = null;
                    if ($result->num_rows != 0) {
                        while ($row = $result->fetch_assoc()) {
                        $id = $row["id"];
                        }
                    }
                    $sql_query = "insert into userprofile(user_id,pfp,fullname,price) values("."'$id'".",'$imagename'".",'$fullname',"."$price".")";
                    $result = $conn->query($sql_query);
                    header("Location:index.php?logged=1");
                }
                else {
                    header("Location:signup.php?err=1");
                }
            }
            else {
                header("Location:signup.php?err=1");
            }
} else {
    header("Location:signup.php?err=1");
}
?>