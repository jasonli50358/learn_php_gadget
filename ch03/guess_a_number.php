<?php
$a = mt_rand(0, 100);
while (true) {
	$number = mt_rand(0, 100);
	echo $number . '<br/>';
	if ($number == $a) {
		echo sprintf("变量等于%d 程序终止。", $a);
		break;
	}
}