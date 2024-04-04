<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 8, 12',
		'inter(fav 3, fav 8)' => '1, 3',
		'inter(fav 8, fav 12)' => '10',
		'union' => '1, 3, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '6, 7, 10',
		'inter(fav 6, fav 7)' => '2',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 11, 12',
		'inter(fav 3, fav 12)' => '12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 4, 10',
		'inter(fav 2, fav 4)' => '9',
		'inter(fav 2, fav 10)' => '10',
		'inter(fav 4, fav 10)' => '4',
		'union' => '4, 9, 10',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 5, 8',
		'inter(fav 4, fav 5)' => '1, 3',
		'inter(fav 4, fav 8)' => '1, 7',
		'inter(fav 5, fav 8)' => '1, 5',
		'union' => '1, 3, 5, 7',
		'win' => '4, 5, 8',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 5, 10',
		'inter(fav 2, fav 10)' => '10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '5, 6, 8',
		'inter(fav 5, fav 6)' => '10',
		'inter(fav 5, fav 8)' => '2',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 6, 8',
		'inter(fav 4, fav 6)' => '4, 6, 12',
		'inter(fav 4, fav 8)' => '1, 2, 12',
		'inter(fav 6, fav 8)' => '12',
		'union' => '1, 2, 4, 6, 12',
		'win' => '4, 6, 8',
	],
];
