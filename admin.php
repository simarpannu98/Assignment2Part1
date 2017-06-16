<?php
$pageTitle = 'INFORMATION';
require_once('header.php')
?>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">




<main class="container">
    <h1>INFORMATION</h1>
    <?php

    //Step 1 - connect to the DB
    require_once('db.php');

    //Step 2 - create a SQL command
    $sql = "SELECT * FROM data";

    //Step 3 - prepare and execute the SQL command
    $cmd = $conn->prepare($sql);
    $cmd->execute();

    //Step 4 - store the results in a variable
    $data = $cmd->fetchAll();

    //Step 5 - close the DB connection
    $conn=null;

    //Step 6 - display the results in a table
    echo '<table class="table table-striped table-hover"><tr>
                        <th>name</th>
                        <th>email</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                        ';

    if (!empty($_SESSION['email'])){
        echo '<th>Edit</th>
                        <th>Delete</th>';
    }


    echo'</tr>';

    //loop over the $albums array to display each album as a new row
    foreach($data as $datas)
    {
        echo '<tr><td>'.$datas['name'].'</td>
                      <td>'.$datas['email'].'</td>
                      
                      ';


            echo '<td><a href="loginpage.php?email='.$datas['email'].'"class="btn btn-primary"</a>Edit</td>
                      <td><a href="deletepage.php='.$datas['email'].'" class="btn btn-danger confirmation">Delete</td>';


        echo '</tr>';
    }
    echo '</table></main>';

    ?>

</main>
<?php require_once('footer.php') ?>
