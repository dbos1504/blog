<div class="remove_comments">
    <h3>Here you can remove comments</h3>
    <?php
    $comment = Database::$connection->query("SELECT * FROM comments");
    while ($rw_com = $comment->fetch_object()) {
        ?>
        <p style="text-align: left; margin-left: 40px;margin-bottom:5px;padding: 10px; border: 1px solid #cfcfcf;">
            <?php
                echo "Blog id " . $rw_com->blog_id . ". <b>" .$rw_com->comment_name ."</b>" . " commented | " .  $rw_com->comment;
                echo " <a href='../classes/remove1.php?id={$rw_com->id}'><i class='fa fa-times-circle'></i> Remove</a>";
            ?>
        </p>
        <?php
    }
    ?>
    <br>
    <a href="admin.php">Back to admin page</a>
</div>