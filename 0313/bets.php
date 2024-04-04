<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 3, 4, 6',
		'inter(fav 2, fav 3)' => '1, 3, 5',
		'inter(fav 2, fav 4)' => '1, 2, 5',
		'inter(fav 2, fav 6)' => '1, 9',
		'inter(fav 3, fav 4)' => '1, 4, 5',
		'inter(fav 3, fav 6)' => '1, 6, 7',
		'inter(fav 4, fav 6)' => '1',
		'sums' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'union' => '1, 2, 3, 4, 5, 6, 7, 9',
		'win/qqpl/trio' => '2, 3, 4, 6',
		'wp(hedge)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4',
		'inter(fav 3, fav 4)' => '4, 7',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 4, 6, 7, 11, 12',
		'inter(fav 2, fav 4)' => '2, 8',
		'inter(fav 2, fav 6)' => '1, 12',
		'inter(fav 2, fav 7)' => '12',
		'inter(fav 2, fav 12)' => '2, 12',
		'inter(fav 4, fav 6)' => '4',
		'inter(fav 4, fav 7)' => '3, 6, 11',
		'inter(fav 4, fav 11)' => '11',
		'inter(fav 4, fav 12)' => '2',
		'inter(fav 6, fav 7)' => '12',
		'inter(fav 6, fav 12)' => '12',
		'inter(fav 7, fav 11)' => '11',
		'inter(fav 7, fav 12)' => '12',
		'sums' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11',
		'union' => '1, 2, 3, 4, 6, 8, 11, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 3',
		'inter(fav 1, fav 2)' => '2, 10',
		'inter(fav 1, fav 3)' => '3, 5, 6, 11',
		'sums' => '1, 2, 3, 4, 5',
		'union' => '2, 3, 5, 6, 10, 11',
		'win/qqpl/trio' => '1, 2, 3',
		'wp(hedge)' => '1, 2, 3, 4, 5',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 8, 10',
		'inter(fav 5, fav 8)' => '1, 5, 12',
		'inter(fav 8, fav 10)' => '2',
		'sums' => '2, 3, 5',
		'union' => '1, 2, 5, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 3',
		'inter(fav 1, fav 3)' => '1, 3, 9',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 4',
		'inter(fav 3, fav 4)' => '1, 3, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 7, 10',
		'inter(fav 4, fav 7)' => '1, 4',
		'inter(fav 4, fav 10)' => '4, 7, 9',
		'inter(fav 7, fav 10)' => '3, 4',
		'sums' => '3, 6, 11',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 4, 5, 6',
		'inter(fav 2, fav 4)' => '4, 6',
		'inter(fav 2, fav 5)' => '4, 11',
		'inter(fav 2, fav 6)' => '2, 4, 6',
		'inter(fav 4, fav 5)' => '4',
		'inter(fav 4, fav 6)' => '4, 6, 7',
		'inter(fav 5, fav 6)' => '3, 4',
		'sums' => '1, 2, 3, 4, 6, 7, 8, 9, 10, 11',
		'union' => '2, 3, 4, 6, 7, 11',
		'win/qqpl/trio' => '2, 4, 5, 6',
		'wp(hedge)' => '1, 2, 3, 4, 6, 7, 8, 9, 10, 11',
	],
];
