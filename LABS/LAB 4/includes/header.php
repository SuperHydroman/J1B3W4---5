<div id="header">
    <ul>
        <?php
        $dbData=retrieveMenuData();
        foreach ($dbData as $data) {
            printf("<li><a href='index.php?id=%u'>%s</a></li>", $data["id"], $data["name"]);
        }
        ?>
    </ul>
</div>