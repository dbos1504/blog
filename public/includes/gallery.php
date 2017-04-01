<h1>GALLERY | <span>look all images</span></h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
<div class="row gallery">
<?php
$gal = Database::$connection->query("SELECT * FROM blogs");
while ($rw = $gal->fetch_object()) {
    ?>
    <div style="height: 350px;" class="col-lg-4 gallery_image">
        <img src="<?php echo $rw->blog_image; ?>" alt="Image"></a>
        <p><b><?php echo $rw->blog_name; ?></b></p>
    </div>
    <?php
}
?>
</div>
