<?php
session_start();
require "../../classes/config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add post</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php echo "<b>" . $_SESSION['username'] . "</b>"; ?>
<h3>Here you can add post</h3>
<form style="margin: 50px auto;" action="#" method="post" enctype="multipart/form-data">
    <input type="text" name="add_title" onblur="validate(this)"  placeholder="Enter post title"><br>
    <label>Choose image for your post</label><br>
    <input style="display: inline-block;" type="file" name="image"><br>
    <textarea rows="4" cols="58" style="height: 180px;font-family: 'Raleway', sans-serif !important;" name="add_text" onblur="validate(this)" placeholder="Enter post text"></textarea><br><br>
    <label for="selCat">Select categorie to add post:</label><br>
    <select name="selCat" style="padding: 8px;">
        <option value="-1">Select Cagetorie to add post</option>
        <?php
        $resCat = Database::$connection->query("SELECT * FROM categories");
        while ($rw = $resCat->fetch_object()) {
            echo "<option value='{$rw->id}'>{$rw->id}. {$rw->cat_name}</option>";
        }
        ?>
    </select><br><br>
    <input style="font-family: 'Playfair Display', serif;" type="submit" name="add_post" value="ADD POST"><br>
    <?php
    if (isset($_POST['add_post'])) {
        if (!empty($_POST['add_title']) && !empty($_POST['add_text']) && !empty($_POST['selCat'])) {
            $public_add_post->public_add_post();
        } else
            echo "<p style='color: red;'>Please fill empty fields, and select category to add post</p>";
    }
    ?>
</form>
<a href="../../index.php">Back to home</a>
</body>
</html>
<script type="text/javascript">
    function validate(f) {
        if (f.value == "") {
            f.style.borderColor = 'red';
        } else
            f.style.borderColor = '';
    }
</script>