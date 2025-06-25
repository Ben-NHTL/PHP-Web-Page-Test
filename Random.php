<!--Student name: Hoang Thien loc Nguyen-->
<!--Student ID: 041165148-->

<?php include("Header.php"); ?>
<?php include("Menu.php"); ?>

<div id="content">
	<?php

	$ranges = [0, 0, 0, 0, 0];
	$total = 500;

	for ($i = 0; $i < $total; $i++) {
		$rand = rand(1, 50);
		if ($rand <= 10) {
			$ranges[0]++;
		} elseif ($rand <= 20) {
			$ranges[1]++;
		} elseif ($rand <= 30) {
			$ranges[2]++;
		} elseif ($rand <= 40) {
			$ranges[3]++;
		} else {
			$ranges[4]++;
		}
	}

	echo "{$ranges[0]} numbers are randomly generated in the range between 01 - 10<br>";
	echo "{$ranges[1]} numbers are randomly generated in the range between 11 - 20<br>";
	echo "{$ranges[2]} numbers are randomly generated in the range between 21 - 30<br>";
	echo "{$ranges[3]} numbers are randomly generated in the range between 31 - 40<br>";
	echo "{$ranges[4]} numbers are randomly generated in the range between 41 - 50<br>";

	echo "<br>Histogram of stars as a percentage of the number of values are displayed below<br>";

	for ($i = 0; $i < 5; $i++) {
		$percentage = ($ranges[$i] / $total) * 100;

		if ($i == 0) {
			echo "01 - 10:";
		} elseif ($i == 1) {
			echo "11 - 20:";
		} elseif ($i == 2) {
			echo "21 - 30:";
		} elseif ($i == 3) {
			echo "31 - 40:";
		} else {
			echo "41 - 50:";
		}

		for ($j = 0; $j < round($percentage); $j++) {
			echo "*";
		}
		echo "<br>";
	}

	?>
</div>

<?php include("Footer.php"); ?>