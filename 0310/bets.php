<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 11',
		'inter(fav 1, fav 6)' => '1, 7',
		'inter(fav 1, fav 11)' => '7, 8, 11',
		'inter(fav 6, fav 11)' => '7',
		'sums' => '5, 7, 10, 12',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 4, 5',
		'inter(fav 2, fav 4)' => '5, 7, 12',
		'inter(fav 2, fav 5)' => '5',
		'inter(fav 4, fav 5)' => '5',
		'sums' => '1, 2, 3, 6, 7, 9',
		'union' => '5, 7, 12',
		'win/qqpl/trio' => '2, 4, 5',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 3',
		'inter(fav 2, fav 3)' => '1, 8, 12',
		'sums' => '1, 5',
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
		'favorites' => '1',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 7',
		'inter(fav 3, fav 7)' => '1, 3, 5, 9, 11',
		'sums' => '4, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3',
		'inter(fav 1, fav 3)' => '1, 2, 9',
		'sums' => '2, 4',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 6, 8',
		'inter(fav 4, fav 6)' => '4, 6, 12',
		'inter(fav 4, fav 8)' => '1, 2, 12',
		'inter(fav 6, fav 8)' => '12',
		'sums' => '2, 4, 10, 12, 14',
		'union' => '1, 2, 4, 6, 12',
		'win/qqpl/trio' => '4, 6, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 3, 5',
		'inter(fav 2, fav 3)' => '2, 11',
		'inter(fav 2, fav 5)' => '4, 11',
		'inter(fav 3, fav 5)' => '3, 8, 11',
		'sums' => '1, 2, 3, 5, 7, 8',
		'union' => '2, 3, 4, 8, 11',
		'win/qqpl/trio' => '2, 3, 5',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '3, 5, 11',
		'inter(fav 3, fav 5)' => '3, 4',
		'sums' => '2, 6, 8, 14',
	],
];
