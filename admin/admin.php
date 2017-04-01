<?php
    session_start();
    session_regenerate_id(true);
    if (@$_SESSION['username'] != "MarkoBoskovic" || $_SESSION['userAgent'] != $_SERVER['HTTP_USER_AGENT']) {
        die("<h4>LOGIN AS ADMINISTRATOR</h4>");
    }
    require "../classes/config.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin page</title>
    <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../public/css/font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../public/css/style.css">
</head>
<body>
    <div class="admin row">
        <?php echo "<h4 style='background: #333;color: #fff; margin: 0;padding: 20px;'>HELLO | " . $_SESSION['username'] . "</h4>"; ?>
        <div style="background: #333;color: #fff; padding: 20px" class="col-lg-3 admin_sidebar">
            <?php
                echo date('D | d-m-Y');
            ?>
            <h3><a href="../index.php">HOME PAGE</a></h3>
            <a href="../admin/admin.php">Back to admin</a><br>
            <a href='../classes/logout.php'> Logout</a>
            <h3>Choose section</h3>

            <div style="text-align: left;padding: 30px;">
                <section>
                    <h5>Add | Edit | delete post</h5>
                    <a href="?admin=admin_add_blog">Add blog</a>
                </section><br>
                <section>
                    <h5>Add | Edit categorie</h5>
                    <a href="?admin=add_categorie">Add categorie</a>
                </section><br>
                <section>
                    <h5>Add | comments</h5>
                    <a href="?admin=admin_add_comments">Add comment</a>
                </section><br>
                <section>
                    <h5>Remove comments</h5>
                    <a href="?admin=remove_comments">Remove comment</a>
                </section><br>

            </div>
            <img src="../public/images/logo.png" alt="logo"><br>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
        </div>

        <div style="padding: 20px" class="col-lg-9">

            <h1>Administrator area</h1>

            <?php

                if (isset($_GET['admin'])){
                    $admstr = array('admin_add_blog', 'add_categorie', 'admin_add_comments', 'remove_comments');
                    $page = $_GET['admin'];
                    $file = $page . ".php";
                    if(in_array($_GET['admin'],$admstr)) {
                        require $file;
                    } else
                        echo "No page";
                } else
                    require "admin_main.php";

            ?>




        </div>
    </div>

</body>
</html>
