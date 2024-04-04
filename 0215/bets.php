<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 9',
		'inter(fav 2, fav 9)' => '1, 3, 8',
		'union' => '1, 3, 8',
		'sums' => '11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 8',
		'inter(fav 3, fav 8)' => '2',
		'sums' => '11',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 7',
		'inter(fav 1, fav 7)' => '11',
		'sums' => '8',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 4, 11',
		'inter(fav 1, fav 4)' => '3, 11',
		'inter(fav 1, fav 11)' => '6, 11',
		'inter(fav 4, fav 11)' => '11',
		'union' => '3, 6, 11',
		'win/qqpl/trio' => '1, 4, 11',
		'sums' => '12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 3, 7, 8',
		'inter(fav 1, fav 3)' => '1, 3, 9',
		'inter(fav 1, fav 7)' => '1, 3, 9',
		'inter(fav 1, fav 8)' => '3, 12',
		'inter(fav 3, fav 7)' => '1, 3, 5, 9, 11',
		'inter(fav 3, fav 8)' => '3',
		'inter(fav 7, fav 8)' => '3',
		'union' => '1, 3, 5, 9, 11, 12',
		'win/qqpl/trio' => '1, 3, 7, 8',
		'sums' => '4, 8, 9, 10, 11',
		'Y' => '1',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 5',
		'inter(fav 3, fav 5)' => '2, 10',
		'sums' => '8',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '5, 8, 10',
		'inter(fav 5, fav 8)' => '3, 8',
		'inter(fav 5, fav 10)' => '3, 4, 7, 10',
		'inter(fav 8, fav 10)' => '3',
		'sums' => '',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 5, 9, 11, 12',
		'inter(fav 1, fav 5)' => '5, 8, 12',
		'inter(fav 1, fav 9)' => '12',
		'inter(fav 1, fav 11)' => '12',
		'inter(fav 1, fav 12)' => '5, 12',
		'inter(fav 5, fav 9)' => '12',
		'inter(fav 5, fav 11)' => '12',
		'inter(fav 5, fav 12)' => '5, 12',
		'inter(fav 9, fav 11)' => '12',
		'inter(fav 9, fav 12)' => '12',
		'inter(fav 11, fav 12)' => '12',
		'union' => '5, 8, 12',
		'win/qqpl/trio' => '1, 5, 9, 11, 12',
		'sums' => '6, 10, 12',
		'X' => '12',
	],
];
