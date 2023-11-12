<?php
	$nilai="B";
	switch ($nilai) {
		case 'A':
			echo " Predikat Sangat Baik";
			break;
		case 'B':
			echo " Predikat Baik";
			break;
		case 'C':
			echo " Predikat Cukup";
			break;
		default:
			echo " Predikat Buruk";
			break;
	}
?>