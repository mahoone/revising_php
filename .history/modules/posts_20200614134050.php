<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Rid</title>
</head>
<body>

<?php

if(isset($_POST['user_input'])) {
    $user_value = $_POST['user_input'];
    dumb($user_value);
}

?>
    <div class="container">
        <form action="" method="post">
            <label for="user_input">Paste your text here</label>
            <input type="text" id="user_input" name="user_input">
            <input type="submit" name="submit">
        </form>
    </div>
    <div class="container">
        <p></p>
    </div>
</body>
</html>

