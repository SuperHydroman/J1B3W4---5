<?php
    require "includes/datalayer.php";
    $test = getAmount();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Alle <?= $test['AMOUNT'] ?> characters uit de database</h1>

</header>
<div id="container">
    <?php
        include "includes/characterlist.php";
    ?>
</div>
<footer>&copy; All rights reserved - Gideon van den Herik 2020</footer>
</body>
</html>