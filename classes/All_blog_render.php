<?php

class All_blog_render
{
    public function render_blog() {
        $poStrani = 5;
        $ukupno = Database::$connection->query("SELECT COUNT(*) AS cnt FROM blogs")->fetch_object()->cnt;
        $ukupnoStr = ceil($ukupno / $poStrani);
        $strana = isset($_GET['str']) ? $_GET['str'] - 1 : 0;
        $pageIndex = $poStrani * $strana;
        $allB = Database::$connection->query("SELECT * FROM blogs LIMIT {$pageIndex}, {$poStrani}");
        while ($rw_blog = $allB->fetch_object()) {
            ?>
            <div class="row blogs">
                <div class="col-lg-6">
                    <a href="?id=<?php echo $rw_blog->id; ?>"><img width="400" src="<?php echo $rw_blog->blog_image; ?>" alt="Image"></a>
                    <p>Posted | <?php echo $rw_blog->blog_post; ?></p>
                    <?php
                        require "user.php";
                         if (!$user) {
                     ?>
                         <h6 style="text-align: left">If you want to comment | add post, please <a style="color: #2e6da4;" href="./public/includes/log_in.php"><b>login</b></a></h6>
                     <?php
                        }
                    ?>
                </div>
                <div class="col-lg-6">
                    <h4>- <a href="?id=<?php echo $rw_blog->id; ?>"><?php echo $rw_blog->blog_name; ?></a> -</h4>
                    <p class="blog_text">
                        <?php
                            echo substr($rw_blog->blog_text, 0, 249) . " [ ... ]";
                        ?>
                    </p>
                    <p><a style="padding: 6px 10px; border: 1px solid #337ab7;display: inline-block;margin-top: 20px;" href="?id=<?php echo $rw_blog->id; ?>">Read more</a></p>
                </div>
            </div>

            <?php
        }
        for ($i=0; $i < $ukupnoStr; $i++) {
            echo $strana == $i ? (($i + 1) . " ") : " <b><a style='padding:1px 3px;margin: 3px;border: 1px solid #337ab7;' href='?str=".($i + 1)."'> ".($i + 1)." </a></b>";
        }
    }
}