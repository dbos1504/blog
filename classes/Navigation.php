<?php

class Navigation
{
    public function nav() {
        $result_nav = Database::$connection->query('SELECT * FROM navigation');
        while ($rw_nav = $result_nav->fetch_object()) {
            ?>
            <li class="col-lg-3"><a href="<?php echo $rw_nav->nav_path; ?>"><?php echo $rw_nav->nav_name; ?></a> </li>
            <?php
        }
    }
}