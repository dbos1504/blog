<?php
    session_start();
    $token = md5(uniqid(rand(), true));
    $_SESSION['token'] = $token;
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
    <h3>PLEASE REGISTER</h3>
    <form action="#" method="post">
        <input type="text" name="reg_username" onblur="validate(this)" value="<?php if (isset($_POST['reg_username'])) { echo $_POST['reg_username'];} ?>" placeholder="Enter username"><br>
        <input type="email" name="reg_email" onblur="validate(this)" placeholder="Enter email" value="<?php if (isset($_POST['reg_email'])) { echo $_POST['reg_email'];} ?>"><br>
        <input type="password" name="reg_password" onblur="validate(this)" placeholder="Enter password"><br>
        <input type="password" name="reg_password2" onblur="validate(this)" placeholder="Enter password again"><br>
        <input type="hidden" name="token" value="<?php echo $token; ?>" />
        <input type="submit" name="reg_submit" value="REGISTER">
        <?php
        if (isset($_POST['reg_submit'])) {
            if (!empty($_POST['reg_username']) && !empty($_POST['reg_password']) && !empty($_POST['reg_password2'])) {
                $reg->reg();
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