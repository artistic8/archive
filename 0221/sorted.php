<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 9, 12',
		'inter(fav 1, fav 9)' => '1, 8',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 3, 4',
		'inter(fav 2, fav 3)' => '2, 6, 7',
		'inter(fav 2, fav 4)' => '5, 7',
		'inter(fav 3, fav 4)' => '4, 7',
		'union' => '2, 4, 5, 6, 7',
		'win' => '2, 3, 4',
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
		'win' => '3, 4, 8',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '3, 6, 8',
		'inter(fav 3, fav 6)' => '4, 6',
		'inter(fav 3, fav 8)' => '3, 8',
		'union' => '3, 4, 6, 8',
		'win' => '3, 6, 8',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 6, 12',
		'inter(fav 4, fav 6)' => '3, 4, 6, 7',
		'inter(fav 4, fav 12)' => '6',
		'inter(fav 6, fav 12)' => '6',
		'union' => '3, 4, 6, 7',
		'win' => '4, 6, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '5, 7, 10',
		'inter(fav 5, fav 7)' => '6, 11',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 4, 12',
		'inter(fav 1, fav 4)' => '1, 4, 5, 7, 8',
		'inter(fav 1, fav 12)' => '5',
		'inter(fav 4, fav 12)' => '5, 10',
		'union' => '1, 4, 5, 7, 8, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 3, 7',
		'inter(fav 1, fav 3)' => '5, 6, 7',
		'inter(fav 1, fav 7)' => '1, 5',
		'inter(fav 3, fav 7)' => '5',
		'union' => '1, 5, 6, 7',
		'win' => '1, 3, 7',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 5, 9',
		'inter(fav 3, fav 5)' => '3, 8, 11',
		'inter(fav 5, fav 9)' => '12',
		'union' => '3, 8, 11, 12',
		'win' => '3, 5, 9',
	],
];
