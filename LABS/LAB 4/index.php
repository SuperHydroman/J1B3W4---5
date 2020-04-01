<?php
require 'includes/datalayer.php';
$data;

$id = $_GET['id'];
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
        <?php include "includes/header.php";?>

        <?php
            $amount = getDatabaseAmount();
            if ($id > 0 && $id < $amount['AMOUNT']+1) {
                $data = retrieveSubjectData($id);
                echo '<h1 id="title">'.$data['name'].'</h1>',
                     '<img src="images/'.$data['image'].'" alt="'.$data['name'].' Banner">',
                     $data['description'];
            }
            else {
                $data = retrieveSubjectData(1);
            }
        ?>

        <?php include "includes/footer.php"?>
    </div>
</body>
</html>