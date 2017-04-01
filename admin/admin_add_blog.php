<h3>From here you can Add | Edit | Delete post</h3>
<?php
    $bl_id = -1;
    $bl_title = '';
    $bl_text = '';
    if (isset($_GET['id'])) {
        $idB = $_GET['id'];
        $selBl = Database::$connection->query("SELECT * FROM blogs WHERE id = {$idB}");
        $rwBl = $selBl->fetch_object();
        if ($rwBl) {
            $bl_id = $rwBl->id;
            $bl_title = $rwBl->blog_name;
            $bl_text = $rwBl->blog_text;
            $bl_image = $rwBl->blog_image;
        }
    }
?>
<form style="margin: 50px auto;" action="#" method="post" enctype="multipart/form-data">
    <label for="selBlog">Add post or Select post to edit:</label><br>
    <select name="selblog" style="padding: 8px;" onchange="window.location='admin.php?admin=admin_add_blog&id='+this.value">
        <option value="-1">Select post to edit</option>
        <?php
            $resBl = Database::$connection->query("SELECT * FROM blogs");
            while ($rwB = $resBl->fetch_object()) {
                echo "<option " . ($bl_id == $rwB->id ? "selected" : "") . " value='{$rwB->id}'>{$rwB->id}. {$rwB->blog_name}</option>";
            }
        ?>
    </select><br>
    <input type="text" name="admin_add_title" onblur="validate(this)" value="<?php echo $bl_title; ?>" placeholder="Enter post title"><br>
    <label>Choose image for your post</label><br>
    <input style="display: inline-block;" type="file" name="image"><br>
    <?php
        if (isset($bl_image)) {
            echo "<img style='padding: 2px;border: 1px solid #cfcfcf;' width='250' src='../{$bl_image}' alt='image'><br><br>";
        }
    ?>
    <textarea rows="4" cols="58" style="height: 180px;" name="admin_add_text" onblur="validate(this)" placeholder="Enter post text"><?php echo $bl_text; ?></textarea><br><br>
    <label for="selCat">Select categorie to add post:</label><br>
    <select name="selCat" style="padding: 8px;">
        <option value="-1">Select Cagetorie to add post</option>
        <?php
            $resCat = Database::$connection->query("SELECT * FROM categories");
            while ($rw = $resCat->fetch_object()) {
                echo "<option " . ($cat_id == $rw->id ? "selected" : "") . " value='{$rw->id}'>{$rw->id}. {$rw->cat_name}</option>";
            }
        ?>
    </select><br><br>
    <input style="font-family: 'Playfair Display', serif;" type="submit" name="admin_add_post" value="ADD POST"><br>
    <input style="font-family: 'Playfair Display', serif;" type="submit" name="admin_edit_post" value="EDIT POST"><br>
    <input style="font-family: 'Playfair Display', serif;" type="submit" name="admin_delete_post" value="DELETE POST">
    <?php
        if (isset($_POST['admin_add_post'])) {
            if (!empty($_POST['admin_add_title']) && !empty($_POST['admin_add_text'])) {
                $add_post->admin_post();
            } else
                echo "<p style='color: red;'>Please fill empty fields.</p>";
        } // add post

        if (isset($_POST['admin_edit_post'])) {
            if (!empty($_POST['admin_add_title']) && !empty($_POST['admin_add_text'])) {
                $edit_post->admin_edit();
            } else
                echo "<p style='color: red;'>Please fill empty fields.</p>";
        } // edit post

        if (isset($_POST['admin_delete_post'])) {
            if (!empty($_POST['selblog'])) {
                $del_post->delete_post();
            } echo "<p style='color: red;'>Please select post to delete</p>";
        } // delete post
    ?>
</form>
<a href="admin.php">Back to admin page</a>