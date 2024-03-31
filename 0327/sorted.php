<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 7, 11',
		'inter(fav 1, fav 6)' => '1, 7',
		'inter(fav 1, fav 7)' => '7',
		'inter(fav 1, fav 11)' => '7, 8, 11',
		'inter(fav 6, fav 7)' => '7',
		'inter(fav 6, fav 11)' => '7',
		'inter(fav 7, fav 11)' => '7',
		'union' => '1, 7, 8, 11',
		'win' => '1, 6, 7, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 2, 5, 8',
		'inter(fav 1, fav 2)' => '2, 6, 7, 9',
		'inter(fav 1, fav 8)' => '2',
		'inter(fav 2, fav 5)' => '5',
		'inter(fav 2, fav 8)' => '2',
		'union' => '2, 5, 6, 7, 9',
		'win' => '1, 2, 5, 8',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 3, 7, 11',
		'inter(fav 1, fav 3)' => '1, 8',
		'inter(fav 1, fav 7)' => '11',
		'inter(fav 1, fav 11)' => '11',
		'inter(fav 3, fav 7)' => '3, 7, 12',
		'inter(fav 7, fav 11)' => '11',
		'union' => '1, 3, 7, 8, 11, 12',
		'win' => '1, 3, 7, 11',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 6, 9, 11',
		'inter(fav 2, fav 6)' => '10, 12',
		'inter(fav 2, fav 9)' => '7, 9',
		'inter(fav 6, fav 9)' => '11',
		'inter(fav 6, fav 11)' => '6, 11',
		'inter(fav 9, fav 11)' => '11',
		'union' => '6, 7, 9, 10, 11, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 3, 4, 8',
		'inter(fav 1, fav 3)' => '1, 3, 4, 7, 10, 12',
		'inter(fav 1, fav 4)' => '1, 3, 4, 7',
		'inter(fav 1, fav 8)' => '1, 7, 12',
		'inter(fav 3, fav 4)' => '1, 3, 4, 7',
		'inter(fav 3, fav 8)' => '1, 7, 12',
		'inter(fav 4, fav 8)' => '1, 2, 7',
		'union' => '1, 2, 3, 4, 7, 10, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 4, 5, 12',
		'inter(fav 3, fav 4)' => '3',
		'inter(fav 3, fav 5)' => '11',
		'inter(fav 3, fav 12)' => '1, 11',
		'inter(fav 4, fav 5)' => '6',
		'inter(fav 4, fav 12)' => '12',
		'inter(fav 5, fav 12)' => '11',
		'union' => '1, 3, 6, 11, 12',
		'win' => '3, 4, 5, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4, 5, 6, 8',
		'inter(fav 4, fav 5)' => '5, 10',
		'inter(fav 4, fav 6)' => '10',
		'inter(fav 4, fav 8)' => '8',
		'inter(fav 5, fav 6)' => '10',
		'inter(fav 5, fav 8)' => '2',
		'union' => '2, 5, 8, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 9, 10, 12',
		'inter(fav 2, fav 9)' => '2, 4',
		'inter(fav 2, fav 10)' => '4',
		'inter(fav 2, fav 12)' => '2, 6',
		'inter(fav 9, fav 10)' => '3, 4, 10',
		'inter(fav 9, fav 12)' => '2',
		'union' => '2, 3, 4, 6, 10',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 4, 7, 11',
		'inter(fav 3, fav 4)' => '9',
		'inter(fav 4, fav 7)' => '6',
		'inter(fav 7, fav 11)' => '12',
		'union' => '6, 9, 12',
		'win' => '3, 4, 7, 11',
	],
];
