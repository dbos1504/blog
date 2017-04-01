<form action="#" method="post">
    <input type="text" name="add_name" onblur="validate(this)" value="<?php if (isset($_POST['add_name'])) { echo $_POST['add_name'];} ?>" placeholder="Enter your name"><br>
    <textarea name="add_comment" onblur="validate(this)" placeholder="Enter comment"></textarea><br>
    <input id="test" type="submit" name="add_submit" value="ADD COMMENT">
    <?php
        if (isset($_POST['add_submit'])) {
            if (!empty($_POST['add_name']) && !empty($_POST['add_comment'])) {
                $add->add_com();
            } else
                echo "<p style='color: red;'>Please fill empty fields</p>";
        }
    ?>
</form>
<script>
    var t = document.getElementById('test');
    function osvezi() {
        window.location.reload();
    }
    t.addEventListener('click',osvezi);
</script>