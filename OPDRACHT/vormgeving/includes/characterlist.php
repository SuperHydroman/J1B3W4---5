<?php

$results = retrieveCharacters();

foreach ($results as $item) {
     printf('<a class="item" href="character.php?id=%u">', $item['id']);
     echo '<div class="left">',
            '<img class="avatar" src="resources/images/'.$item['avatar'].'">',
         '</div>',
         '<div class="right">',
            '<h2>'.$item['name'].'</h2>',
         '<div class="stats">',
            '<ul class="fa-ul">',
                '<li><span class="fa-li"><i class="fas fa-heart"></i></span> '.$item['health'].'</li>',
                '<li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> '.$item['attack'].'</li>',
                '<li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> '.$item['defense'].'</li>',
            '</ul>',
         '</div>',
         '</div>',
         '<div class="detailButton"><i class="fas fa-search"></i> bekijk</div>',
         '</a>';
}


?>

<!-- URL Parameters toevoegen voor character pagina -->