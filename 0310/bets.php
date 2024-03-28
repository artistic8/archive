<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 11',
		'inter(fav 1, fav 6, R4)' => '6, 10, 11',
		'inter(fav 1, fav 6, R5)' => '3, 4, 7',
		'inter(fav 1, fav 11, R1)' => '7, 8, 11',
		'union' => '3, 4, 6, 7, 8, 10, 11',//count: 7
		'place' => '6, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 4, 5',
		'inter(fav 2, fav 4, R1)' => '1, 2, 5',
		'inter(fav 2, fav 4, R2)' => '5, 7, 12',
		'inter(fav 2, fav 4, R5)' => '1, 2, 7',
		'inter(fav 2, fav 4, R8)' => '2, 4, 6',
		'inter(fav 2, fav 5, R1)' => '1, 8, 9',
		'inter(fav 2, fav 5, R8)' => '4, 5, 11',
		'union' => '1, 2, 4, 5, 6, 7, 8, 9, 11, 12',//count: 10
		'place' => '2, 4, 5',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 3',
		'inter(fav 2, fav 3, R1)' => '1, 3, 5',
		'inter(fav 2, fav 3, R3)' => '1, 8, 12',
		'inter(fav 2, fav 3, R7)' => '2, 3, 9',
		'union' => '1, 2, 3, 5, 8, 9, 12',//count: 7
		'place' => '2, 3',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '5',
		'union' => '',//count: 0
		'place' => '',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1',
		'union' => '',//count: 0
		'place' => '',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 7',
		'inter(fav 3, fav 7, R5)' => '1, 4, 7',
		'union' => '1, 4, 7',//count: 3
		'place' => '7',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3',
		'inter(fav 1, fav 3, R1)' => '1, 5, 7',
		'inter(fav 1, fav 3, R2)' => '2, 6, 7',
		'inter(fav 1, fav 3, R4)' => '3, 5, 6',
		'inter(fav 1, fav 3, R6)' => '1, 3, 9',
		'inter(fav 1, fav 3, R7)' => '1, 2, 9',
		'inter(fav 1, fav 3, R8)' => '5, 6, 7',
		'union' => '1, 2, 3, 5, 6, 7, 9',//count: 7
		'place' => '1, 3',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 6, 8',
		'inter(fav 4, fav 6, R8)' => '4, 6, 12',
		'inter(fav 4, fav 6, R9)' => '4, 6, 7',
		'inter(fav 4, fav 8, R1)' => '1, 2, 10',
		'inter(fav 4, fav 8, R5)' => '1, 2, 7',
		'inter(fav 4, fav 8, R6)' => '3, 8, 12',
		'inter(fav 4, fav 8, R8)' => '1, 2, 12',
		'union' => '1, 2, 3, 4, 6, 7, 8, 10, 12',//count: 9
		'place' => '4, 6, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 3, 5, 10, 11',
		'inter(fav 2, fav 3, R1)' => '1, 3, 5',
		'inter(fav 2, fav 3, R3)' => '1, 8, 12',
		'inter(fav 2, fav 3, R7)' => '2, 3, 9',
		'inter(fav 2, fav 5, R1)' => '1, 8, 9',
		'inter(fav 2, fav 5, R8)' => '4, 5, 11',
		'inter(fav 3, fav 5, R5)' => '1, 3, 12',
		'inter(fav 3, fav 5, R9)' => '3, 8, 11',
		'inter(fav 3, fav 10, R1)' => '1, 4, 5',
		'inter(fav 5, fav 10, R1)' => '1, 8, 9',
		'inter(fav 10, fav 11, R1)' => '4, 8, 11',
		'inter(fav 10, fav 11, R8)' => '3, 4, 9',
		'union' => '1, 2, 3, 4, 5, 8, 9, 11, 12',//count: 9
		'place' => '2, 3, 5, 11',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '3, 5, 11',
		'inter(fav 3, fav 5, R5)' => '1, 3, 12',
		'inter(fav 3, fav 5, R9)' => '3, 8, 11',
		'union' => '1, 3, 8, 11, 12',//count: 5
		'place' => '3, 11',
	],
];
