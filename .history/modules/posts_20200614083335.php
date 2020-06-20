<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Rid</title>
</head>
<body>
    <div class="container">
        <form action="modify.php" method="post">
            <label for="user_input">Paste your text here</label>
            <input type="text" id="user_input" name="user_input">
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="container">
        <p></p>
    </div>
</body>
</html>

<?php

echo $_POST["user_input"];