<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 1, 10',
		'inter(fav 1, fav 3, R1)' => '1, 5, 7',
		'inter(fav 1, fav 3, R2)' => '2, 6, 7',
		'inter(fav 1, fav 3, R6)' => '1, 3, 9',
		'inter(fav 1, fav 3, R7)' => '1, 2, 9',
		'inter(fav 1, fav 3, R8)' => '5, 6, 7',
		'inter(fav 1, fav 10, R9)' => '1, 6, 10',
		'inter(fav 3, fav 10, R1)' => '1, 4, 5',
		'union' => '1, 2, 3, 4, 5, 6, 7, 9, 10',//count: 9
		'place' => '1, 3, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '9, 4',
		'union' => '',//count: 0
		'place' => '',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 1',
		'inter(fav 1, fav 3, R1)' => '1, 5, 7',
		'inter(fav 1, fav 3, R2)' => '2, 6, 7',
		'inter(fav 1, fav 3, R6)' => '1, 3, 9',
		'inter(fav 1, fav 3, R7)' => '1, 2, 9',
		'inter(fav 1, fav 3, R8)' => '5, 6, 7',
		'union' => '1, 2, 3, 5, 6, 7, 9',//count: 7
		'place' => '1, 3',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '11, 1, 6',
		'additional favorites' => '8',
		'inter(fav 1, fav 6, R4)' => '6, 10, 11',
		'inter(fav 1, fav 6, R5)' => '3, 4, 7',
		'inter(fav 1, fav 11, R1)' => '7, 8, 11',
		'union' => '3, 4, 6, 7, 8, 10, 11',//count: 7
		'place' => '6, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '10, 4',
		'inter(fav 4, fav 10, R7)' => '3, 8, 10',
		'inter(fav 4, fav 10, R8)' => '4, 7, 9',
		'union' => '3, 4, 7, 8, 9, 10',//count: 6
		'place' => '4, 10',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '12, 2, 6',
		'inter(fav 2, fav 6, R8)' => '4, 6, 11',
		'inter(fav 2, fav 6, R9)' => '2, 4, 6',
		'inter(fav 2, fav 12, R3)' => '2, 10, 12',
		'inter(fav 6, fav 12, R6)' => '1, 11, 12',
		'union' => '1, 2, 4, 6, 10, 11, 12',//count: 7
		'place' => '2, 6, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '6, 4, 7',
		'inter(fav 4, fav 6, R8)' => '4, 6, 12',
		'inter(fav 4, fav 6, R9)' => '4, 6, 7',
		'inter(fav 4, fav 7, R3)' => '3, 6, 11',
		'inter(fav 4, fav 7, R5)' => '1, 4, 7',
		'inter(fav 4, fav 7, R7)' => '4, 7, 8',
		'inter(fav 6, fav 7, R6)' => '1, 6, 11',
		'union' => '1, 3, 4, 6, 7, 8, 11, 12',//count: 8
		'place' => '4, 6, 7',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '7, 1, 5',
		'inter(fav 1, fav 5, R1)' => '1, 7, 8',
		'inter(fav 1, fav 5, R3)' => '5, 8, 10',
		'inter(fav 1, fav 5, R5)' => '1, 3, 12',
		'inter(fav 1, fav 5, R8)' => '5, 7, 11',
		'inter(fav 1, fav 5, R9)' => '5, 8, 12',
		'inter(fav 5, fav 7, R5)' => '1, 5, 12',
		'inter(fav 5, fav 7, R8)' => '3, 4, 5',
		'union' => '1, 3, 4, 5, 7, 8, 10, 11, 12',//count: 9
		'place' => '1, 5, 7',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '5, 10',
		'inter(fav 5, fav 10, R1)' => '1, 8, 9',
		'union' => '1, 8, 9',//count: 3
		'place' => '',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '9, 7, 14',
		'inter(fav 7, fav 9, R3)' => '3, 7, 12',
		'inter(fav 7, fav 9, R5)' => '1, 4, 8',
		'inter(fav 7, fav 9, R8)' => '3, 4, 5',
		'union' => '1, 3, 4, 5, 7, 8, 12',//count: 7
		'place' => '7',
	],
];
