<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 5, 9',
		'inter(fav 3, fav 5)' => '1, 7',
		'inter(fav 3, fav 9)' => '1, 3, 6',
		'inter(fav 5, fav 9)' => '1, 8',
		'union' => '1, 3, 6, 7, 8',
		'win' => '3, 5, 9',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '6, 7, 9',
		'inter(fav 6, fav 7)' => '2',
		'inter(fav 6, fav 9)' => '6',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6, 8, 12',
		'inter(fav 6, fav 8)' => '1, 12',
		'inter(fav 6, fav 12)' => '12',
		'inter(fav 8, fav 12)' => '2, 10, 12',
		'union' => '1, 2, 10, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '3, 5, 7',
		'inter(fav 3, fav 5)' => '4',
		'inter(fav 5, fav 7)' => '7, 10',
		'union' => '4, 7, 10',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 3, 5',
		'inter(fav 1, fav 3)' => '1, 3, 4, 7',
		'inter(fav 1, fav 5)' => '1, 3',
		'inter(fav 3, fav 5)' => '1, 3',
		'union' => '1, 3, 4, 7',
		'win' => '1, 3, 5',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 2, 9',
		'inter(fav 1, fav 2)' => '3',
		'inter(fav 1, fav 9)' => '7',
		'inter(fav 2, fav 9)' => '2, 5',
		'union' => '2, 3, 5, 7',
		'win' => '1, 2, 9',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3, 4',
		'inter(fav 1, fav 3)' => '1, 2, 9',
		'inter(fav 1, fav 4)' => '1, 4, 5, 7, 8',
		'inter(fav 3, fav 4)' => '1, 3, 10',
		'union' => '1, 2, 3, 4, 5, 7, 8, 9, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 7, 8',
		'inter(fav 2, fav 7)' => '4, 5',
		'inter(fav 2, fav 8)' => '2',
		'inter(fav 7, fav 8)' => '1, 3',
		'union' => '1, 2, 3, 4, 5',
		'win' => '2, 7, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 3, 5',
		'inter(fav 1, fav 3)' => '8, 10',
		'inter(fav 1, fav 5)' => '5, 8, 12',
		'inter(fav 3, fav 5)' => '3, 8, 11',
		'union' => '3, 5, 8, 10, 11, 12',
	],
];
