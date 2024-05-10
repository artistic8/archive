<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'first3' => '3, 5, 9',
	],
	'2' => [
		/**
		Race 2
		*/
		'first3' => '6, 7, 9',
	],
	'3' => [
		/**
		Race 3
		*/
		'first3' => '6, 8, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'first3' => '3, 5, 7',
	],
	'5' => [
		/**
		Race 5
		*/
		'first3' => '1, 3, 5',
		'win($20)' => '1, 3, 5',
		'win($20)' => '3, 5',
		'qin/trio($10)' => '1, 3, 5',
	],
	'6' => [
		/**
		Race 6
		*/
		'first3' => '1, 2, 9',
	],
	'7' => [
		/**
		Race 7
		*/
		'first3' => '1, 3, 4',
	],
	'8' => [
		/**
		Race 8
		*/
		'first3' => '2, 7, 8',
		'potential inter(fav 3)' => '3, 8',
		'potential inter(fav 6)' => '6, 8',
		'union' => '3, 8, 6',
		'inter' => '8',
		'history(8)' => '1, 2, 3, 4, 6, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'first3' => '1, 3, 5',
		'potential inter(fav 8)' => '5, 8',
		'potential inter(fav 12)' => '5, 12',
		'union' => '5, 8, 12',
		'inter' => '5',
		'history(5)' => '3, 4, 5, 7, 8, 10, 12',
	],
];
