<?php

$id = $_GET['id'];


if ($id > 0 && $id < 5) {
    $page = "pages/" . $id . ".php";
}
else {
    $page = "pages/1.php";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="container">
	<?php include "includes/header.php" ?>
    <?php include ($page) ?>
    <?php include "includes/footer.php" ?>
</div>
</body>
</html>