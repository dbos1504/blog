<?php
    session_start();
    require "../../classes/config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="forma">
    <h3>PLEASE LOGIN</h3>
    <form action="#" method="post">
        <input type="text" name="username" onblur="validate(this)" value="<?php if (isset($_POST['username'])) { echo $_POST['username'];} ?>" placeholder="Enter username"><br>
        <input type="password" name="password" onblur="validate(this)" placeholder="Enter password"><br>
        <input type="submit" name="log_submit" value="LOGIN">
        <?php
            if (isset($_POST['log_submit'])) {
               if (!empty($_POST['username']) && !empty($_POST['password'])) {
                   $log_in->login_user();
               } else
                   echo "<p style='color: red;'>Please fill empty fields.</p>";
            }
        ?>
    </form>
    <a href="../../index.php">Back</a>
</div>

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
