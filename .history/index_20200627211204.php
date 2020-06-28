<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Home</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <style></style>
  </head>
  <body>
  
<div class="container">
    <?php
    session_start();

    require ('./utils/Utils.php');
    require ('./utils/Stats.php');

    // Visitor - Visit Counter and Cookies
    $user_data = new Visitor;

    // User
    $test_user = new FormElements;
    // $test_user->setUserName('kamil');
    $test_user->setUserPassword('password');
    echo $test_user->showUserData();

    // dumb($_SESSION);
    // dumb($_COOKIE);
    ?>
</div>

<div class="alert alert-primary" role="alert">
  <?php
   echo 'Last visit: '.$user_data->setUserCookies();;
  ?>
</div>

<div class="alert alert-primary" role="alert">
  <?php
   echo 'Visit counter: '.$user_data->visitCounter();
  ?>
</div>

  </body>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript"></script>
</html>
