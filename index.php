<?php require "public/includes/head.php"; ?>

<body>

    <header>
        <?php require "public/includes/header.php"; ?>
    </header>

    <section class="slider">
        <?php require "public/includes/slider.php"; ?>
    </section>

    <main class="row">

        <section class="col-lg-3 sidebar">

            <div class="search">
                <?php require "public/includes/search.php"; ?>
            </div>

            <div class="categories">
                <?php require "public/includes/categories.php"; ?>
            </div>

        </section>

        <section class="col-lg-9 main">
            <?php require "public/includes/main.php"; ?>
        </section>

    </main>

<?php require "public/includes/footer.php"; ?>