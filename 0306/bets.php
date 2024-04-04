<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 7, 8, 10',
		'inter(fav 3, fav 7)' => '3, 7',
		'inter(fav 3, fav 8)' => '1, 3',
		'inter(fav 3, fav 10)' => '1, 4, 5',
		'inter(fav 7, fav 8)' => '3',
		'inter(fav 8, fav 10)' => '1, 10',
		'sums' => '10, 11',
		'X' => '10',
		'Y' => '3, 7',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4',
		'inter(fav 3, fav 4)' => '4, 7, 12',
		'union' => '4, 7, 12',
		'sums' => '7',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 3, 4, 5, 10',
		'inter(fav 1, fav 3)' => '1, 8',
		'inter(fav 1, fav 4)' => '2, 4, 8, 11',
		'inter(fav 1, fav 5)' => '5, 8, 10',
		'inter(fav 3, fav 4)' => '3, 8',
		'inter(fav 3, fav 5)' => '7, 8',
		'inter(fav 4, fav 5)' => '8',
		'sums' => '4, 5, 6, 7, 8, 9, 11',
		'X' => '4, 5',
		'Y' => '1, 3, 4, 5',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 5, 6',
		'inter(fav 2, fav 5)' => '2, 7',
		'inter(fav 5, fav 6)' => '4',
		'union' => '2, 4, 7',
		'win/qqpl/trio' => '2, 5, 6',
		'sums' => '7, 8',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 3, 7',
		'inter(fav 1, fav 3)' => '1, 3, 4, 7',
		'inter(fav 1, fav 7)' => '1, 4, 7',
		'inter(fav 3, fav 7)' => '1, 4, 7',
		'union' => '1, 3, 4, 7',
		'win/qqpl/trio' => '1, 3, 7',
		'sums' => '4, 8',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 5, 9',
		'inter(fav 1, fav 9)' => '7',
		'sums' => '6, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4, 9',
		'sums' => '',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '3, 8',
		'inter(fav 3, fav 8)' => '12',
		'sums' => '11',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 7, 11',
		'inter(fav 7, fav 11)' => '12',
		'sums' => '10',
	],
];
