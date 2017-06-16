<?php
$pageTitle = 'Registration';
require_once('header.php')
?>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



    <main class="container">
        <h1>User Registration</h1>
        <div class="alert alert-info" id="message">Please create a new user</div>

        <form method="post" action="save-registration.php">

            <fieldset class="form-group">
                <label for="name" class="col-sm-2">username: *</label>
                <input name="name" id="name" required type="name"/>
            </fieldset>

            <fieldset class="form-group">
                <label for="email" class="col-sm-2">Email: *</label>
                <input name="email" id="email" required type="email"
                       placeholder="email@email.com">
            </fieldset>
            <fieldset class="form-group">
                <label for="password" class="col-sm-2">Password:</label>
                <input name="password" id="password" required type="password" placeholder="Password"
                       />
            </fieldset>
            <fieldset class="form-group">
                <label for="confirm" class="col-sm-2">Confirm Password:</label>
                <input name="confirm" id="confirm" required type="password" placeholder="Password"
                       />
            </fieldset>
            <button class="col-sm-offset-2 btn btn-success btnRegister">Save</button>
        </form>
    </main>
<?php require_once('footer.php') ?>