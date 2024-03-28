<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5, 7, 8',
		'inter(fav 5, fav 7, R8)' => '3, 4, 5',
		'union' => '3, 4, 5',//count: 3
		'place' => '5',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 3',
		'inter(fav 2, fav 3, R1)' => '1, 3, 5',
		'inter(fav 2, fav 3, R3)' => '1, 8, 12',
		'inter(fav 2, fav 3, R7)' => '2, 3, 9',
		'union' => '1, 2, 3, 5, 8, 9, 12',//count: 7
		'place' => '2, 3',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6, 9',
		'union' => '',//count: 0
		'place' => '',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '4, 11',
		'union' => '',//count: 0
		'place' => '',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '6',
		'union' => '',//count: 0
		'place' => '',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '6, 7, 10',
		'inter(fav 6, fav 7, R6)' => '1, 6, 11',
		'union' => '1, 6, 11',//count: 3
		'place' => '6',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1',
		'union' => '',//count: 0
		'place' => '',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 5',
		'union' => '',//count: 0
		'place' => '',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 6',
		'inter(fav 2, fav 6, R8)' => '4, 6, 11',
		'inter(fav 2, fav 6, R9)' => '2, 4, 6',
		'union' => '2, 4, 6, 11',//count: 4
		'place' => '2, 6',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '6, 11',
		'union' => '',//count: 0
		'place' => '',
	],
];
