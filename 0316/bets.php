<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 1, 10',
		'inter(fav 1, fav 3)' => '1, 5, 7',
		'inter(fav 1, fav 10)' => '1, 5, 8, 11',
		'inter(fav 3, fav 10)' => '1, 4, 5',
		'union' => '1, 4, 5, 7, 8, 11',//count: 6
		'place' => '1',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '9, 4',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 1',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '11, 1, 6',
		'additional favorites' => '8',
		'inter(fav 1, fav 6)' => '6, 10, 11',
		'inter(fav 1, fav 8)' => '1, 3, 11',
		'union' => '1, 3, 6, 10, 11',//count: 5
		'place' => '1, 6',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '10, 4',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '12, 2, 6',
		'inter(fav 6, fav 12)' => '1, 11, 12',
		'union' => '1, 11, 12',//count: 3
		'place' => '12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '6, 4, 7',
		'inter(fav 4, fav 7)' => '4, 7, 8',
		'union' => '4, 7, 8',//count: 3
		'place' => '4, 7',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '7, 1, 5',
		'inter(fav 1, fav 5)' => '5, 7, 11',
		'inter(fav 5, fav 7)' => '3, 4, 5',
		'union' => '3, 4, 5, 7, 11',//count: 5
		'place' => '5',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '5, 10',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '9, 7, 14',
	],
];
