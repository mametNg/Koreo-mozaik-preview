<!DOCTYPE html>
<html>
<head>
	<title>KONSEP 1 KOREO MOZAIK PSPL 2021</title>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="box slide" data="0">
		<div class="box-title">
			<h3 id="box-title">0</h3>
		</div>

		<?php
		$char = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];
		$int = 17;

		for ($y=0; $y < count($char); $y++) { 
			echo '<div class="box-line">'."\n";
			for ($x=1; $x <= $int; $x++) { 
				echo '<div id="'.$char[$y].''.$x.'" class="box-item">'."\n";
				echo $char[$y].''.$x."\n";
				echo '</div>'."\n";
			}
			echo '</div>';
		}
		?>

		<div class="box-btn">
			<button type="button" disabled  id="prev" onclick="prev(this)">PREV</button>
			<button type="button"  id="next" onclick="next(this)">NEXT</button>
		</div>
	</div>

	<script src="script.js"></script>
</body>
</html>