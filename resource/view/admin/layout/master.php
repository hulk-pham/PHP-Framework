<!DOCTYPE html>
<html lang="en">
<?php include_once("header.php") ?>
<body>
<div class="wrapper">
    <!--Sidebar-->
    <?php include_once("navigation.php") ?>
    <!--End Sidebar-->

    <div class="main-content">
        <div class="main-panel">
            <?php include_once("topbar.php") ?>

            <!--Content -->
            <?php
            echo @$_CONTENT;
            ?>
            <!--End Content -->
        </div>

    </div>
</div>

</body>
<?php include_once("footer.php") ?>
</html>

