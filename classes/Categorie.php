<?php

class Categorie
{
    public function categories() {
        $cat_result = Database::$connection->query("SELECT * FROM categories");
        while ($rw_cat = $cat_result->fetch_object()) {
            ?>
            <li><a href="?categorie=<?php echo $rw_cat->id; ?>"><b><?php echo $rw_cat->cat_name; ?></b> -</a><span><?php echo $rw_cat->cat_desc; ?></span> </li>
            <?php
        }
    }
}