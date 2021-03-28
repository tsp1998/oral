<?php

function adjYear($year)
{
	switch ($year) {
		case '1':
			$year = 'fe';
			break;
		case '2':
			$year = 'se';
			break;
		case '3':
			$year = 'te';
			break;
		case 'be':

		default:
			$year = '';
			break;
	}
	return $year;
}

function adjDept($dept)
{
	switch ($dept) {
		case '1':
			$dept = 'cse';
			break;
		case '2':
			$dept = 'mech';
			break;
		case '3':
			$dept = 'entc';
			break;
		case '4':
			$dept = 'civil';
			break;
		case '5':
			$dept = 'elect';
			break;
		case '6':
			$dept = 'fe';
			break;

		default:
			$dept = '';
			break;
	}
	return $dept;
}

function adjDiv($div)
{
	switch ($div) {
		case '1':
			$div = 'A';
			break;
		case '2':
			$div = 'B';
			break;
		case '3':
			$div = 'C';
			break;
		case '4':
			$div = 'D';
			break;
		case '5':
			$div = 'E';
			break;
		case '6':
			$div = '-';
			break;
		default:
			$div = '';
			break;
	}
	return $div;
}
