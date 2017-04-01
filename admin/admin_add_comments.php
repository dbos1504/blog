<h3>In this section you can add comments to any post</h3>
<div class="admin_add_comment">
    <form style="margin: 50px auto;" action="#" method="post">
        <label for="selPost">Select post:</label><br>
        <select name="selPost" style="padding: 8px;">
            <option value="-1">Select post where to add comment</option>
        <?php
            $res = Database::$connection->query("SELECT * FROM blogs");
            while ($rw = $res->fetch_object()) {
                echo "<option value='{$rw->id}'>{$rw->blog_name}</option>";
            }
        ?>
        </select><br><br>
        <input type="text" name="admin_add_name" onblur="validate(this)" value="<?php if (isset($_POST['add_name'])) { echo $_POST['add_name'];} ?>" placeholder="Enter your name"><br>
        <textarea name="admin_add_comment" onblur="validate(this)" placeholder="Enter comment"></textarea><br>
        <input style="font-family: 'Playfair Display', serif;" type="submit" name="admin_add_submit" value="ADD COMMENT">
        <?php
        if (isset($_POST['admin_add_submit'])) {
            if (!empty($_POST['admin_add_name']) && !empty($_POST['admin_add_comment'])) {
                    $admin_add_name = $_POST['admin_add_name'];
                    $admin_add_comment = $_POST['admin_add_comment'];
                    $blog_id = $_POST['selPost'];
                    $login_id = 3;
                    $res = Database::$connection->query("INSERT INTO comments VALUES (null, '{$admin_add_name}', '{$admin_add_comment}', {$blog_id}, {$login_id})");
                    if ($res) {
                        echo "<p style='color: green;'>Comment added</p>";
                    } else
                        echo "<p style='color: red;'>Something is wrong</p>";
            } else
                echo "<p style='color: red;'>Please fill empty fields</p>";
        }
        ?>
    </form>
    <a href="admin.php">Back to admin page</a>
</div>