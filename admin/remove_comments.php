<div class="remove_comments">
    <h3>Here you can remove comments</h3>
    <p class="row"><span class='col-lg-2'><b>Blog id</b></span><span class='col-lg-6'><b>Your comment</b></span><span class='col-lg-4'><b>Remove comment</b></span></p>
    <?php
    $comment = Database::$connection->query("SELECT * FROM comments");
    while ($rw_com = $comment->fetch_object()) {
        ?>
        <p class="row" style="text-align: left; margin-left: 40px;margin-bottom:5px;padding: 10px; border: 1px solid #cfcfcf; background: #f7f7f7;">
            <?php
                echo "<span class='col-lg-2'>Blog id " . $rw_com->blog_id . "</span> <span class='col-lg-6'><b>" .$rw_com->comment_name ."</b>" . " commented | " .  $rw_com->comment ." <b style='color: #cfcfcf;font-size: 10px;'>". $rw_com->datum . "</b></span>";
                echo " <span class='col-lg-4' style='text-align: center;'><a style='color: red;padding: 8px;border: 1px solid red;' href='../classes/remove1.php?id={$rw_com->id}'><i class='fa fa-times-circle'></i> Delete comment</a></span>";
            ?>
        </p>
        <?php
    }
    ?>
    <br>
    <a href="admin.php">Back to admin page</a>
</div>