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
    require ('./modules/login.php');
    require ('./utils/Utils.php');
    require ('./utils/Stats.php');

    
    if(!isset($_SESSION['last_visit'])) {
        $_SESSION['last_visit'] == 0;
    }
    $_SESSION['last_visit']++;
    dumb($_SESSION);
    ?>

  </body>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript"></script>
</html>