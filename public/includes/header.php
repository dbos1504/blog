<div class="row">
    <div class="col-lg-4 logo">
        <a href="index.php"><img src="public/images/logo.png" alt="logo"></a>
    </div>
    <div class="col-lg-4 nav">
        <nav>
            <ul class="row">
                <?php $nav->nav(); ?>
            </ul>
        </nav>
    </div>
    <div class="col-lg-4 login">
        <?php
        $id = isset($_SESSION['user_id']);
        $r = Database::$connection->query("SELECT * FROM login WHERE id = '$id'");
            while ($rw = $r->fetch_object()) {
                if ($_SESSION['user_id'] == 3) {
                    echo "<a style='padding:2px 4px;border: 1px solid #337ab7;' href='admin/admin.php'><b>Admin area</b></a> ";
                }
            }
            if ($user) {
                echo "<span style='font-family: Playfair Display;'>Hello | <b style='color: #337ab7;'> " . $_SESSION['username'] . "</b></span> ";
                echo "<a href='public/includes/add.php'>Add blog</a> | ";
                echo "<a href='classes/logout.php'> Logout</a>";
            }
            else if (!$user) {
                echo "Hello | ";
                echo "<a href='public/includes/log_in.php'>Login</a> |";
                echo "<a href='public/includes/register.php'> Register</a>";
            }
        ?>
    </div>
</div>