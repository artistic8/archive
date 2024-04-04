<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 9, 10, 12',
		'inter(fav 1, fav 9)' => '1, 8',
		'inter(fav 1, fav 10)' => '1, 5, 8, 11',
		'inter(fav 1, fav 12)' => '8',
		'inter(fav 9, fav 10)' => '1, 8',
		'inter(fav 9, fav 12)' => '8',
		'inter(fav 10, fav 12)' => '8, 10',
		'sums' => '10, 11',
		'X' => '10',
		'Y' => '10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 4',
		'inter(fav 2, fav 4)' => '5, 7',
		'sums' => '6',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 4, 8',
		'inter(fav 3, fav 4)' => '3, 8',
		'inter(fav 3, fav 8)' => '1, 3, 8, 12',
		'inter(fav 4, fav 8)' => '2, 3, 8, 11',
		'union' => '1, 2, 3, 8, 11, 12',
		'win/qqpl/trio' => '3, 4, 8',
		'sums' => '7, 11, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '3',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 10',
		'inter(fav 4, fav 10)' => '4',
		'sums' => '',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 7',
		'inter(fav 2, fav 7)' => '3, 5',
		'sums' => '9',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 12',
		'inter(fav 1, fav 12)' => '5',
		'sums' => '',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 3',
		'inter(fav 1, fav 3)' => '5, 6, 7',
		'union' => '5, 6, 7',
		'sums' => '4',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '5',
	],
];
