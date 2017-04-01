<h3>Add | edit | delete categorie</h3>
<div class="admin_add_categorie">
    <?php
        $cat_id = -1;
        $cat_name = '';
        $cat_desc = '';
        if (isset($_GET['categorie'])) {
            $idC = $_GET['categorie'];
            $selCat = Database::$connection->query("SELECT * FROM categories WHERE id = {$idC}");
            $rwCat = $selCat->fetch_object();
            if ($rwCat) {
                $cat_id = $rwCat->id;
                $cat_name = $rwCat->cat_name;
                $cat_desc = $rwCat->cat_desc;
            }
        }
    ?>
    <form style="margin: 50px auto;" action="#" method="post">
        <label for="selCat">Add new or Select categorie to edit:</label><br>
        <select name="selCat" style="padding: 8px;" onchange="window.location='admin.php?admin=add_categorie&categorie='+this.value">
            <option value="-1">Select Cagetorie to edit</option>
            <?php
            $resCat = Database::$connection->query("SELECT * FROM categories");
            while ($rw = $resCat->fetch_object()) {
                echo "<option " . ($cat_id == $rw->id ? "selected" : "") . " value='{$rw->id}'>{$rw->id}. {$rw->cat_name}</option>";
            }
            ?>
        </select><br><br>
        <input type="text" name="admin_add_cat" onblur="validate(this)" value="<?php echo $cat_name; ?>" placeholder="Enter categorie name"><br>
        <input type="text" name="admin_add_desc" onblur="validate(this)" value="<?php echo $cat_desc; ?>" placeholder="Enter categorie description"><br><br>
        <input style="font-family: 'Playfair Display', serif;" type="submit" name="admin_add_categorie" value="ADD CATEGORIE">
        <input style="font-family: 'Playfair Display', serif;" type="submit" name="admin_edit_categorie" value="EDIT CATEGORIE">
        <?php
        if (isset($_POST['admin_add_categorie'])) {
            if (!empty($_POST['admin_add_cat']) && !empty($_POST['admin_add_desc'])) {
                $admin_add_cat = $_POST['admin_add_cat'];
                $admin_add_desc = $_POST['admin_add_desc'];
                $resCateg = Database::$connection->query("INSERT INTO categories VALUES (null, '{$admin_add_cat}', '{$admin_add_desc}')");
                if ($resCateg) {
                    echo "<p style='color: green;'>Categorie added</p>";
                } else
                    echo "<p style='color: red;'>Something is wrong</p>";
            } else
                echo "<p style='color: red;'>Please fill empty fields</p>";
        } // add categorie

        if (isset($_POST['admin_edit_categorie'])) {
            $admin_add_cat = $_POST['admin_add_cat'];
            $admin_add_desc = $_POST['admin_add_desc'];
            $admin_sel_cat = $_POST['selCat'];

            $updateCat = Database::$connection->query("UPDATE categories SET cat_name = '{$admin_add_cat}', cat_desc = '{$admin_add_desc}' WHERE id = {$admin_sel_cat}");
            if ($updateCat) {
                echo "<p style='color: green;'>Categorie edited.</p>";
            } else
                echo "<p style='color: red;'>Something is wrong</p>";
        } // edit categorie
        ?>
    </form>
    <a href="admin.php">Back to admin page</a>
</div>