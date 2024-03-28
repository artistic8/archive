<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 7, 8, 10',
		'inter(fav 3, fav 10)' => '1, 4, 5',
		'union' => '1, 4, 5',//count: 3
		'all' => '1, 3, 4, 5, 7, 8, 10',//count: 7
		'wp' => '3, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4',
		'inter(fav 3, fav 4)' => '4, 7, 12',
		'union' => '4, 7, 12',//count: 3
		'all' => '3, 4, 7, 12',//count: 4
		'wp' => '3, 4',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 3, 4, 5, 10',
		'inter(fav 1, fav 4)' => '2, 4, 8, 11',
		'inter(fav 1, fav 5)' => '5, 8, 10',
		'union' => '2, 4, 5, 8, 10, 11',//count: 6
		'all' => '1, 2, 3, 4, 5, 8, 10, 11',//count: 8
		'wp' => '1, 4, 5',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 5, 6',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 3, 7',
		'inter(fav 1, fav 3)' => '1, 3, 4, 7',
		'inter(fav 1, fav 7)' => '1, 4, 7',
		'inter(fav 3, fav 7)' => '1, 4, 7',
		'union' => '1, 3, 4, 7',//count: 4
		'all' => '1, 3, 4, 7',//count: 4
		'wp' => '1, 3, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 5, 9',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '3, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 7, 11',
	],
];
