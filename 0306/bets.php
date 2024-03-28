<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 7, 8, 10',
		'inter(fav 3, fav 7, R3)' => '3, 7, 12',
		'inter(fav 3, fav 8, R4)' => '3, 8, 11',
		'inter(fav 3, fav 8, R5)' => '1, 7, 12',
		'inter(fav 3, fav 10, R1)' => '1, 4, 5',
		'inter(fav 7, fav 8, R3)' => '3, 11, 12',
		'union' => '1, 3, 4, 5, 7, 8, 11, 12',//count: 8
		'place' => '3, 7, 8',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4',
		'inter(fav 3, fav 4, R1)' => '1, 4, 5',
		'inter(fav 3, fav 4, R2)' => '4, 7, 12',
		'inter(fav 3, fav 4, R4)' => '3, 4, 11',
		'inter(fav 3, fav 4, R7)' => '1, 3, 10',
		'inter(fav 3, fav 4, R8)' => '6, 7, 12',
		'inter(fav 3, fav 4, R10)' => '3, 4, 11',
		'union' => '1, 3, 4, 5, 6, 7, 10, 11, 12',//count: 9
		'place' => '3, 4',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 3, 4, 5, 10',
		'inter(fav 1, fav 3, R1)' => '1, 5, 7',
		'inter(fav 1, fav 3, R2)' => '2, 6, 7',
		'inter(fav 1, fav 3, R6)' => '1, 3, 9',
		'inter(fav 1, fav 3, R7)' => '1, 2, 9',
		'inter(fav 1, fav 3, R8)' => '5, 6, 7',
		'inter(fav 1, fav 4, R6)' => '3, 7, 12',
		'inter(fav 1, fav 4, R8)' => '1, 6, 7',
		'inter(fav 1, fav 5, R1)' => '1, 7, 8',
		'inter(fav 1, fav 5, R3)' => '5, 8, 10',
		'inter(fav 1, fav 5, R5)' => '1, 3, 12',
		'inter(fav 1, fav 5, R8)' => '5, 7, 11',
		'inter(fav 1, fav 5, R9)' => '5, 8, 12',
		'inter(fav 1, fav 10, R9)' => '1, 6, 10',
		'inter(fav 3, fav 4, R1)' => '1, 4, 5',
		'inter(fav 3, fav 4, R2)' => '4, 7, 12',
		'inter(fav 3, fav 4, R4)' => '3, 4, 11',
		'inter(fav 3, fav 4, R7)' => '1, 3, 10',
		'inter(fav 3, fav 4, R8)' => '6, 7, 12',
		'inter(fav 3, fav 4, R10)' => '3, 4, 11',
		'inter(fav 3, fav 5, R5)' => '1, 3, 12',
		'inter(fav 3, fav 5, R9)' => '3, 8, 11',
		'inter(fav 3, fav 10, R1)' => '1, 4, 5',
		'inter(fav 4, fav 10, R7)' => '3, 8, 10',
		'inter(fav 4, fav 10, R8)' => '4, 7, 9',
		'inter(fav 5, fav 10, R1)' => '1, 8, 9',
		'union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count: 12
		'place' => '1, 3, 4, 5, 10',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 5, 6',
		'inter(fav 2, fav 5, R1)' => '1, 8, 9',
		'inter(fav 2, fav 6, R9)' => '2, 4, 6',
		'inter(fav 5, fav 6, R1)' => '1, 7, 9',
		'union' => '1, 2, 4, 6, 7, 8, 9',//count: 7
		'place' => '2, 6',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 3, 7',
		'inter(fav 1, fav 3, R1)' => '1, 5, 7',
		'inter(fav 1, fav 3, R2)' => '2, 6, 7',
		'inter(fav 1, fav 3, R4)' => '3, 5, 6',
		'inter(fav 1, fav 3, R6)' => '1, 3, 9',
		'inter(fav 1, fav 3, R7)' => '1, 2, 9',
		'inter(fav 1, fav 3, R8)' => '5, 6, 7',
		'inter(fav 1, fav 7, R5)' => '1, 4, 7',
		'inter(fav 1, fav 7, R6)' => '1, 3, 9',
		'inter(fav 3, fav 7, R5)' => '1, 4, 7',
		'union' => '1, 2, 3, 4, 5, 6, 7, 9',//count: 8
		'place' => '1, 3, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 5, 9',
		'inter(fav 1, fav 5, R1)' => '1, 7, 8',
		'inter(fav 1, fav 5, R3)' => '5, 8, 10',
		'inter(fav 1, fav 5, R5)' => '1, 3, 12',
		'inter(fav 1, fav 5, R8)' => '5, 7, 11',
		'inter(fav 1, fav 5, R9)' => '5, 8, 12',
		'union' => '1, 3, 5, 7, 8, 10, 11, 12',//count: 8
		'place' => '1, 5',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4, 9',
		'union' => '',//count: 0
		'place' => '',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '3, 8',
		'inter(fav 3, fav 8, R4)' => '3, 8, 11',
		'inter(fav 3, fav 8, R5)' => '1, 7, 12',
		'union' => '1, 3, 7, 8, 11, 12',//count: 6
		'place' => '3, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 7, 11',
		'inter(fav 3, fav 7, R3)' => '3, 7, 12',
		'union' => '3, 7, 12',//count: 3
		'place' => '3, 7',
	],
];
