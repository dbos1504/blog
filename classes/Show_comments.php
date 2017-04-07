<?php

class Show_comments
{
    public static function render_comments() {
        $id = $_GET['id'];
        $comment = Database::$connection->query("SELECT * FROM comments WHERE blog_id = '$id'");
        while ($rw_com = $comment->fetch_object()) {
            ?>
            <p id="test" style="text-align: left; margin-left: 40px;margin-bottom:5px;padding: 10px; border: 1px solid #cfcfcf;">
                <?php
                    echo "<b>" .$rw_com->comment_name ."</b>" . " commented | " .  $rw_com->comment . " - <b style='color: #cfcfcf; font-size: 10px;'>" . $rw_com->datum . "</b> ";
                    require "user.php";
                    if ($user) {
                        if ($_SESSION['user_id'] == $rw_com->login_id) {
                            echo " <a style='color: red;margin-left: 5px;' href='./classes/remove.php?id={$rw_com->id}'><i class='fa fa-times-circle'></i> Remove</a>";
                        }
                    }
                ?>
            </p>
            <script>
                function ucitaj(strana){
                    var xhr = new XMLHttpRequest();
                    xhr.send(null);
                    var dobijeniSadrzaj = xhr.responseText;
                    document.getElementById("test").innerHTML = dobijeniSadrzaj;
                }
            </script>
            <?php
        }
    }
}