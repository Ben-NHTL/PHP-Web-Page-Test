<!--Student name: Hoang Thien loc Nguyen-->
<!--Student ID: 041165148-->

<?php include("Header.php"); ?>
<?php include("Menu.php"); ?>

<div id="content">
	<?php
	for ($i = 99; $i >= 1; $i--) {

		if ($i == 1) {
			echo "$i bottle of beer can serve ONLY ONE guest<br>";
		} else {

			if ($i % 2 == 0) {
				$type = "even";
			} else {
				$type = "odd";
			}

			echo "$i bottle" . ($i > 1 ? "s" : "") . " of beer can serve $type number of guests<br>";
		}
	}
	?>
</div>

<?php include("Footer.php"); ?>