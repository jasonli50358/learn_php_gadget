<?php

for ($i = 1; $i <= 9; $i++) {
	for ($j = 1; $j <= $i; $j++) {
		$sum = $i * $j;
		echo $j . 'X' . $i . '=' . $sum . '&nbsp;&nbsp;';
	}
	echo '<br/>';
}
exit;