<?php

if (!empty($_GET['email']) ) {

    $email = $_GET['email'];
    //Step 1 - connect to the database
    if ($ok) {
        require_once('db.php');


        //Step 2 - create the SQL statement
        $sql = "DELETE FROM data WHERE email = :email";

        //Step 3 - prepare and execute the sql statement
        $cmd = $conn->prepare($sql);
        $cmd->bindParam(':email', $email, PDO::PARAM_STR, 120);
        $cmd->execute();

        //Step 4 - disconnect from the DB
        $conn = null;
    }
}
//step 5 - redirect back to the albums.php page
header('location:admins.php');
?>