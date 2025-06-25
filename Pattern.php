<?php include("Header.php"); ?>
<?php include("Menu.php"); ?>

<div id="content">
	<?php
	$rows = 9;

	for ($i = 1; $i <= $rows; $i++) {
		for ($j = 1; $j <= $i; $j++) {
			echo "* ";
		}
		echo "<br>";
	}

	for ($i = $rows - 1; $i >= 1; $i--) {
		for ($j = 1; $j <= $i; $j++) {
			echo "* ";
		}
		echo "<br>";
	}
	?>
</div>

<?php include("Footer.php"); ?>