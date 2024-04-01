<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 8, 14',
		'inter(fav 3, fav 8)' => '1, 3',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 6, 11',
		'inter(fav 2, fav 6)' => '2, 5, 6, 8',
		'inter(fav 2, fav 11)' => '8',
		'inter(fav 6, fav 11)' => '8',
		'union' => '2, 5, 6, 8',
		'win' => '2, 6, 11',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '4, 5, 7',
		'inter(fav 4, fav 7)' => '3, 6',
		'inter(fav 5, fav 7)' => '5, 7',
		'union' => '3, 5, 6, 7',
		'win' => '4, 5, 7',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '3, 10, 14',
		'inter(fav 3, fav 10)' => '4',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 4, 10',
		'inter(fav 3, fav 4)' => '1, 3, 4, 7',
		'inter(fav 3, fav 10)' => '4',
		'inter(fav 4, fav 10)' => '2, 4',
		'union' => '1, 2, 3, 4, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 5, 11',
		'inter(fav 3, fav 5)' => '11',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 4, 11',
		'inter(fav 1, fav 4)' => '1, 4, 5, 7, 8',
		'inter(fav 1, fav 11)' => '5',
		'inter(fav 4, fav 11)' => '5',
		'union' => '1, 4, 5, 7, 8',
		'win' => '1, 4, 11',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 4, 14',
		'inter(fav 1, fav 4)' => '1, 6, 7',
		'union' => '1, 6, 7',
		'win' => '1, 4, 14',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '9, 10, 13',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 7, 8',
		'inter(fav 7, fav 8)' => '7, 8',
	],
];
