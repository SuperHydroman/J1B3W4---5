<?php
require "variables.php";

echo "<br>Uw naam is: ". $firstname." ".$lastname ."!",
     "<h2 style='margin-bottom: 0px;'>Fruitsoorten:</h2>";

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i]."<br>";
}

