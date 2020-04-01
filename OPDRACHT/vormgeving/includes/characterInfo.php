<?php

$results = retrieveSpecificCharacter($id);

foreach ($results as $item) {
    echo '<header><h1>'.$item['name'].'</h1>',
            '<a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>',
        '<div id="container">',
        '<div class="detail">',
            '<div class="left">',
                '<img class="avatar" src="resources/images/'.$item['avatar'].'">',
                '<div class="stats" style="background-color: '.$item['color'].'">',
                    '<ul class="fa-ul">',
                        '<li><span class="fa-li"><i class="fas fa-heart"></i></span> '.$item['health'].'</li>',
                        '<li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> '.$item['attack'].'</li>',
                        '<li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> '.$item['defense'].'</li>',
                    '</ul>',
                    '<ul class="gear">',
                        '<li><b>Weapon</b>: '.$item['weapon'].'</li>',
                        '<li><b>Armor</b>: '.$item['armor'].'</li>',
                    '</ul>',
                '</div>',
            '</div>',
            '<div class="right">',
                '<p>',
                    $item['bio'],
                '</p>',
            '</div>',
            '<div style="clear: both"></div>',
         '</div>';
}

?>






