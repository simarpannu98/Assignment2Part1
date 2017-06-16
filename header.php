<!-- for the top page navigation -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle?></title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li><a href="default.php" class="navbar-brand">Registration</a></li>
        <li><a href="admin.php">Albums</a></li>

        <?php
        //only show these links if the user is NOT logged in
        session_start();
        if (empty($_SESSION['email'])){
            echo '<li><a href="registration.php">Register Now</a></li>
                <li><a href="loginpage.php">Login</a></li>';
        }
        else{
            //These are links for logged in users
            echo '<li><a href="admin.php">Add a new album</a></li> 
                  <li><a href="logout.php">Logout</a> </li>';
        }


        ?>
    </ul>
</nav>
