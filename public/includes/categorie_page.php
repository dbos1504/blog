<div class="row blogs_categorie">
    <?php
        $id1 = isset($_GET['categorie']) ? $_GET['categorie'] : 0;
        $categorie = Database::$connection->query("SELECT * FROM blogs WHERE categories = '$id1'");
        while ($rw_cat = $categorie->fetch_object()) {
            ?>
            <div class="col-lg-6 categor">
                    <a href="?id=<?php echo $rw_cat->id; ?>"><img width="400" src="<?php echo $rw_cat->blog_image; ?>" alt="Image"></a>
                    <p>Posted | <?php echo $rw_cat->blog_post; ?></p>
                    <h4 style="margin: 20px auto;">- <a href="?id=<?php echo $rw_cat->id; ?>"><?php echo $rw_cat->blog_name; ?></a> -</h4>
                    <p class="blog_text">
                        <?php
                            echo substr($rw_cat->blog_text, 0, 249) . " [ ... ]";
                        ?>
                    </p>
                    <p><a style="padding: 6px 10px; border: 1px solid #337ab7;display: inline-block;margin-top: 20px" href="?id=<?php echo $rw_cat->id; ?>">Read more</a></p>
            </div>
            <?php
        }
    ?>
</div>
<p style="margin-top: 50px; font-weight: 700;" class="col-lg-12"><a href="./index.php">Back to all blogs</a></p>
