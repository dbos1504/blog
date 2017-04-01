<?php
$id = $_GET['id'];
$blog_page = Database::$connection->query("SELECT * FROM blogs WHERE id = '$id'");
while ($rw = $blog_page->fetch_object()) {
    ?>
    <div class="blog_page">
        <h4 style="margin: 50px auto;"><?php echo $rw->blog_name; ?></h4>
        <img src="<?php echo $rw->blog_image ?>" align="image">
        <p>Posted | <?php echo $rw->blog_post ?></p>
        <p style="width: 70%;margin: 20px auto;"><?php echo $rw->blog_text; ?></p>
        <div class="comments">
            <h5 style="color: #2e6da4;text-align: left;">Your comments:</h5>
            <?php Show_comments::render_comments(); ?>
        </div>
        <?php
            if ($user) {
                ?>
                    <div class='addcomments'>
                        <h5 style="color: #2e6da4;">Add comments:</h5>
                        <?php require "add_comment.php"; ?>
                    </div>
                <?php
            }
        ?>
        <br>
        <p><a href="./index.php">Back to all blogs</a></p>
    </div>
    <?php
}