<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 3, 4, 6',
		'inter(fav 2, fav 3)' => '1, 3, 5',
		'inter(fav 2, fav 4)' => '1, 2, 5',
		'inter(fav 3, fav 4)' => '1, 4, 5',
		'inter(fav 3, fav 6)' => '1, 6, 7',
		'union' => '1, 2, 3, 4, 5, 6, 7',//count: 7
		'wp' => '1, 2, 3, 4',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 4, 6, 7, 11, 12',
		'inter(fav 4, fav 7)' => '3, 6, 11',
		'union' => '3, 6, 11',//count: 3
		'wp' => '2, 3, 6',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 3',
		'inter(fav 1, fav 3)' => '3, 5, 6, 11',
		'union' => '3, 5, 6, 11',//count: 4
		'wp' => '3, 5',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 8, 10',
		'inter(fav 5, fav 8)' => '1, 5, 12',
		'union' => '1, 5, 12',//count: 3
		'wp' => '1, 5, 8',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 3',
		'inter(fav 1, fav 3)' => '1, 3, 9',
		'union' => '1, 3, 9',//count: 3
		'wp' => '1, 3, 9',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 4',
		'inter(fav 3, fav 4)' => '1, 3, 10',
		'union' => '1, 3, 10',//count: 3
		'wp' => '1, 3, 4, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 7, 10',
		'inter(fav 4, fav 10)' => '4, 7, 9',
		'union' => '4, 7, 9',//count: 3
		'wp' => '4, 7, 9, 10',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 4, 5, 6',
		'inter(fav 2, fav 6)' => '2, 4, 6',
		'inter(fav 4, fav 6)' => '4, 6, 7',
		'union' => '2, 4, 6, 7',//count: 4
		'wp' => '2, 4, 6',
	],
];
