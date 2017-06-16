<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Saving User Registration</title>
</head>
<body>
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$ok = true;

if (empty($name)){
echo 'Username cannot be empty <br />';
$ok = false;



if (empty($email)){
    echo 'email cannot be empty <br />';
    $ok = false;
}

if (strlen($password) < 8){
    echo 'password must be greater than or equal to 8 characters';
    $ok = false;
}

if ($password != $confirm){
    echo 'password must match';
    $ok = false;
}

//if it looks like an ok user, save to the DB
if ($ok) {
    require_once('db.php');

    $sql = "INSERT INTO data VALUES (:name, :email, :password)";
}

    //hash the password
    $password = password_hash($password, PASSWORD_DEFAULT);

    $cmd = $conn->prepare($sql);
    $cmd->bindParam(':name', $name, PDO::PARAM_STR, 100);
    $cmd->bindParam(':email', $email, PDO::PARAM_STR, 120);
    $cmd->bindParam(':password', $password, PDO::PARAM_STR, 255);
    $cmd->execute();
    $conn=null;
}
header('location:loginpage.php');
?>
</body>
</html>
