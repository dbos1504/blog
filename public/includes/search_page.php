<h1>Search results</h1>
<?php
$bl_search = $_GET['bl_search'];
$r = Database::$connection->query("SELECT * FROM blogs WHERE blog_name LIKE '%{$bl_search}%'");
while ($rw = $r->fetch_object()) {
    ?>
    <div class="row blogs">
        <div class="col-lg-6">
            <a href="?id=<?php echo $rw->id; ?>"><img src="<?php echo $rw->blog_image; ?>" alt="Image"></a>
            <p>Posted | <?php echo $rw->blog_post; ?></p>
        </div>
        <div class="col-lg-6">
            <h4>- <a href="?id=<?php echo $rw->id; ?>"><?php echo $rw->blog_name; ?></a> -</h4>
            <p class="blog_text">
                <?php
                echo substr($rw->blog_text, 0, 249) . " [...]";
                ?>
            </p>
            <p><a style="padding: 6px 10px; border: 1px solid #337ab7;display: inline-block;margin-top: 20px;" href="?id=<?php echo $rw->id; ?>">Read more</a></p>
        </div>
    </div>
    <?php
}
?>
<p style="margin-top: 50px;" class="col-lg-12"><a href="./index.php">Back to all blogs</a></p>
