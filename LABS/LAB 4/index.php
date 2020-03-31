<?php
$id = $_GET['id'];

require 'includes/datalayer.php';

if ($id > 4) {
    header("Location: index.php?id=1");
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 4 - Dynamische content</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="container">
        <?php include "includes/header.php"?>
            <?php
                foreach ($data as $dbData) {
                    echo '<h1 id="title">'.$dbData['name'].'<!-- Database title name here --></h1>',
                            '<img src="images/'.$dbData['image'].'" alt="'.$dbData['name'].' banner">',
                            $dbData['description'];
                }
            ?>
        <?php include "includes/footer.php"?>
    </div>
</body>
</html>