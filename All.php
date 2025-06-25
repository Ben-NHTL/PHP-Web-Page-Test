<!--Student name: Hoang Thien loc Nguyen-->
<!--Student ID: 041165148-->

<?php include("Header.php"); ?>
<?php include("Menu.php"); ?>

<div id="content">
    <?php
    for ($i = 99; $i >= 0; $i--) {
        if ($i > 0) {
            echo "$i bottle" . ($i > 1 ? "s" : "") . " of beer on the wall...<br>";
            echo "You take one down you pass it around...<br>";
            echo ($i - 1) . " bottle" . (($i - 1) === 1 ? "" : "s") . " of beer on the wall.<br><br>";
        } else {
            echo "There are no more bottles of beer.<br>";
        }
    }
    ?>
</div>

<?php include("Footer.php"); ?>