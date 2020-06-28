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
  
    <?php
    session_start();

    require ('./utils/Utils.php');
    require ('./utils/Stats.php');

    $user_data = array();

    $user_data = new Visitor;
    $user_data->visitCounter();
    $user_data->setUserCookies();

    $test_user = new User;
    $test_user->setUser('kamil');

    dumb($_SESSION);
    dumb($_COOKIE);
    ?>

  </body>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript"></script>
</html>
