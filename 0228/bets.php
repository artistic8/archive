<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '9',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 3, 6, 9, 12',
		'inter(fav 1, fav 3)' => '2, 6, 7',
		'inter(fav 1, fav 6)' => '2, 6',
		'inter(fav 1, fav 9)' => '6, 9',
		'inter(fav 1, fav 12)' => '6',
		'inter(fav 3, fav 6)' => '2, 4, 6',
		'inter(fav 3, fav 9)' => '6',
		'inter(fav 3, fav 12)' => '6, 10',
		'inter(fav 6, fav 9)' => '6',
		'inter(fav 6, fav 12)' => '6',
		'inter(fav 9, fav 12)' => '6',
		'union' => '2, 4, 6, 7, 9, 10',
		'win/qqpl/trio' => '1, 3, 6, 9, 12',
		'sums' => '4, 7, 9, 10, 12',
		'X' => '9',
		'Y' => '9',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 6, 8, 9, 12',
		'inter(fav 3, fav 6)' => '1, 12',
		'inter(fav 3, fav 8)' => '1, 3, 8, 12',
		'inter(fav 3, fav 9)' => '3, 7, 12',
		'inter(fav 3, fav 12)' => '12',
		'inter(fav 6, fav 8)' => '1, 12',
		'inter(fav 6, fav 9)' => '12',
		'inter(fav 6, fav 12)' => '12',
		'inter(fav 8, fav 9)' => '3, 12',
		'inter(fav 8, fav 12)' => '2, 10, 12',
		'inter(fav 9, fav 12)' => '12',
		'union' => '1, 2, 3, 7, 8, 10, 12',
		'win/qqpl/trio' => '3, 6, 8, 9, 12',
		'sums' => '9, 11, 12',
		'X' => '12',
		'Y' => '12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '5',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 9',
		'inter(fav 2, fav 9)' => '2, 5',
		'sums' => '11',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 4',
		'inter(fav 3, fav 4)' => '1, 3, 10',
		'union' => '1, 3, 10',
		'sums' => '7',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 5, 7',
		'inter(fav 2, fav 5)' => '4, 5',
		'inter(fav 2, fav 7)' => '4, 5',
		'inter(fav 5, fav 7)' => '3, 4, 5',
		'union' => '3, 4, 5',
		'win/qqpl/trio' => '2, 5, 7',
		'sums' => '7, 9',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1',
	],
];
