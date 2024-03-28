<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 11',
		'inter(fav 1, fav 11)' => '7, 8, 11',
		'union' => '7, 8, 11',//count: 3
		'all' => '1, 6, 7, 8, 11',//count: 5
		'wp' => '1, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 4, 5',
		'inter(fav 2, fav 4)' => '5, 7, 12',
		'union' => '5, 7, 12',//count: 3
		'all' => '2, 4, 5, 7, 12',//count: 5
		'wp' => '2, 4',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 3',
		'inter(fav 2, fav 3)' => '1, 8, 12',
		'union' => '1, 8, 12',//count: 3
		'all' => '1, 2, 3, 8, 12',//count: 5
		'wp' => '2, 3',
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
		'union' => '1, 3, 5, 9, 11',//count: 5
		'all' => '1, 3, 5, 7, 9, 11',//count: 6
		'wp' => '3, 7',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3',
		'inter(fav 1, fav 3)' => '1, 2, 9',
		'union' => '1, 2, 9',//count: 3
		'all' => '1, 2, 3, 9',//count: 4
		'wp' => '1, 3',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 6, 8',
		'inter(fav 4, fav 6)' => '4, 6, 12',
		'inter(fav 4, fav 8)' => '1, 2, 12',
		'union' => '1, 2, 4, 6, 12',//count: 5
		'all' => '1, 2, 4, 6, 8, 12',//count: 6
		'wp' => '4, 6, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 3, 5, 10, 11',
		'inter(fav 3, fav 5)' => '3, 8, 11',
		'union' => '3, 8, 11',//count: 3
		'all' => '2, 3, 5, 8, 10, 11',//count: 6
		'wp' => '3, 5',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '3, 5, 11',
	],
];
