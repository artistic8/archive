<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 3, 7, 10',
		'inter(fav 1, fav 3)' => '1, 5, 7',
		'inter(fav 1, fav 7)' => '7',
		'inter(fav 1, fav 10)' => '1, 5, 8, 11',
		'inter(fav 3, fav 7)' => '3, 7',
		'inter(fav 3, fav 10)' => '1, 4, 5',
		'union' => '1, 3, 4, 5, 7, 8, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4, 7, 10',
		'inter(fav 3, fav 4)' => '4, 7, 12',
		'inter(fav 3, fav 7)' => '2, 7',
		'inter(fav 3, fav 10)' => '10',
		'inter(fav 4, fav 7)' => '7',
		'union' => '2, 4, 7, 10, 12',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 2, 4, 10',
		'inter(fav 1, fav 2)' => '1, 2, 8, 10',
		'inter(fav 1, fav 4)' => '2, 4, 8, 11',
		'inter(fav 2, fav 4)' => '2, 8',
		'union' => '1, 2, 4, 8, 10, 11',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 3, 5',
		'inter(fav 1, fav 2)' => '2',
		'inter(fav 1, fav 3)' => '3, 5, 6',
		'inter(fav 1, fav 5)' => '2',
		'inter(fav 2, fav 5)' => '2, 7',
		'inter(fav 3, fav 5)' => '4',
		'union' => '2, 3, 4, 5, 6, 7',
		'win' => '1, 2, 3, 5',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 4, 7, 8',
		'inter(fav 3, fav 4)' => '1, 3, 4, 7',
		'inter(fav 3, fav 7)' => '1, 4, 7',
		'inter(fav 3, fav 8)' => '1, 7',
		'inter(fav 4, fav 7)' => '1, 4, 7',
		'inter(fav 4, fav 8)' => '1, 2, 7',
		'inter(fav 7, fav 8)' => '1, 5, 7, 8',
		'union' => '1, 2, 3, 4, 5, 7, 8',
		'win' => '3, 4, 7, 8',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 4, 6, 9',
		'inter(fav 1, fav 4)' => '3, 7, 12',
		'inter(fav 1, fav 6)' => '1, 12',
		'inter(fav 1, fav 9)' => '7',
		'inter(fav 4, fav 6)' => '6, 12',
		'inter(fav 4, fav 9)' => '7',
		'union' => '1, 3, 6, 7, 12',
		'win' => '1, 4, 6, 9',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 2, 4, 9',
		'inter(fav 1, fav 2)' => '2, 4, 5, 7, 9',
		'inter(fav 1, fav 4)' => '1, 4, 5, 7, 8',
		'inter(fav 1, fav 9)' => '9',
		'inter(fav 2, fav 4)' => '3, 4, 5, 7',
		'inter(fav 2, fav 9)' => '9',
		'union' => '1, 2, 3, 4, 5, 7, 8, 9',
		'win' => '1, 2, 4, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '3, 8, 10, 12',
		'inter(fav 3, fav 8)' => '12',
		'inter(fav 3, fav 10)' => '7',
		'inter(fav 3, fav 12)' => '6',
		'inter(fav 8, fav 10)' => '3',
		'inter(fav 8, fav 12)' => '2',
		'union' => '2, 3, 6, 7, 12',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 7, 9, 11',
		'inter(fav 7, fav 9)' => '12',
		'inter(fav 7, fav 11)' => '12',
		'inter(fav 9, fav 11)' => '12',
	],
];
