<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5',
		'union' => '',//count: 0
		'place' => '',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 1, 14',
		'inter(fav 1, fav 2, R8)' => '5, 6, 11',
		'union' => '5, 6, 11',//count: 3
		'place' => '',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6',
		'union' => '',//count: 0
		'place' => '',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '4, 10, 12',
		'inter(fav 4, fav 10, R7)' => '3, 8, 10',
		'inter(fav 4, fav 10, R8)' => '4, 7, 9',
		'union' => '3, 4, 7, 8, 9, 10',//count: 6
		'place' => '4, 10',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 2, 10',
		'inter(fav 1, fav 2, R8)' => '5, 6, 11',
		'inter(fav 1, fav 10, R9)' => '1, 6, 10',
		'union' => '1, 5, 6, 10, 11',//count: 5
		'place' => '1, 10',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 12',
		'union' => '',//count: 0
		'place' => '',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '7, 2, 5',
		'inter(fav 2, fav 5, R1)' => '1, 8, 9',
		'inter(fav 2, fav 5, R8)' => '4, 5, 11',
		'inter(fav 2, fav 7, R5)' => '1, 7, 8',
		'inter(fav 2, fav 7, R7)' => '2, 4, 7',
		'inter(fav 5, fav 7, R5)' => '1, 5, 12',
		'inter(fav 5, fav 7, R8)' => '3, 4, 5',
		'union' => '1, 2, 3, 4, 5, 7, 8, 9, 11, 12',//count: 10
		'place' => '2, 5, 7',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 6',
		'inter(fav 2, fav 6, R8)' => '4, 6, 11',
		'inter(fav 2, fav 6, R9)' => '2, 4, 6',
		'union' => '2, 4, 6, 11',//count: 4
		'place' => '2, 6',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '11, 1, 2',
		'additional favorites' => '4',
		'inter(fav 1, fav 2, R8)' => '5, 6, 11',
		'inter(fav 1, fav 11, R1)' => '7, 8, 11',
		'union' => '5, 6, 7, 8, 11',//count: 5
		'place' => '11',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '2, 8',
		'inter(fav 2, fav 8, R1)' => '1, 2, 3',
		'union' => '1, 2, 3',//count: 3
		'place' => '2',
	],
];
