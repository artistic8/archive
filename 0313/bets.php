<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 3, 4, 6',
		'inter(fav 2, fav 3, R1)' => '1, 3, 5',
		'inter(fav 2, fav 3, R3)' => '1, 8, 12',
		'inter(fav 2, fav 3, R7)' => '2, 3, 9',
		'inter(fav 2, fav 4, R1)' => '1, 2, 5',
		'inter(fav 2, fav 4, R2)' => '5, 7, 12',
		'inter(fav 2, fav 4, R5)' => '1, 2, 7',
		'inter(fav 2, fav 4, R8)' => '2, 4, 6',
		'inter(fav 2, fav 6, R8)' => '4, 6, 11',
		'inter(fav 2, fav 6, R9)' => '2, 4, 6',
		'inter(fav 3, fav 4, R1)' => '1, 4, 5',
		'inter(fav 3, fav 4, R2)' => '4, 7, 12',
		'inter(fav 3, fav 4, R4)' => '3, 4, 11',
		'inter(fav 3, fav 4, R7)' => '1, 3, 10',
		'inter(fav 3, fav 4, R8)' => '6, 7, 12',
		'inter(fav 3, fav 4, R10)' => '3, 4, 11',
		'inter(fav 3, fav 6, R1)' => '1, 6, 7',
		'inter(fav 3, fav 6, R2)' => '2, 4, 6',
		'inter(fav 3, fav 6, R4)' => '4, 6, 11',
		'inter(fav 3, fav 6, R5)' => '3, 4, 7',
		'inter(fav 4, fav 6, R8)' => '4, 6, 12',
		'inter(fav 4, fav 6, R9)' => '4, 6, 7',
		'union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count: 12
		'place' => '2, 3, 4, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4',
		'inter(fav 3, fav 4, R1)' => '1, 4, 5',
		'union' => '1, 4, 5',//count: 3
		'place' => '4',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 4, 6, 7, 11, 12',
		'inter(fav 2, fav 4, R1)' => '1, 2, 5',
		'inter(fav 2, fav 4, R2)' => '5, 7, 12',
		'inter(fav 2, fav 4, R5)' => '1, 2, 7',
		'inter(fav 2, fav 4, R8)' => '2, 4, 6',
		'inter(fav 2, fav 6, R8)' => '4, 6, 11',
		'inter(fav 2, fav 6, R9)' => '2, 4, 6',
		'inter(fav 2, fav 7, R5)' => '1, 7, 8',
		'inter(fav 2, fav 7, R7)' => '2, 4, 7',
		'inter(fav 4, fav 6, R8)' => '4, 6, 12',
		'inter(fav 4, fav 6, R9)' => '4, 6, 7',
		'inter(fav 4, fav 7, R3)' => '3, 6, 11',
		'inter(fav 4, fav 7, R5)' => '1, 4, 7',
		'inter(fav 4, fav 7, R7)' => '4, 7, 8',
		'inter(fav 6, fav 7, R6)' => '1, 6, 11',
		'inter(fav 6, fav 12, R6)' => '1, 11, 12',
		'union' => '1, 2, 3, 4, 5, 6, 7, 8, 11, 12',//count: 10
		'place' => '2, 4, 6, 7, 11, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 3',
		'inter(fav 1, fav 2, R8)' => '5, 6, 11',
		'inter(fav 1, fav 3, R1)' => '1, 5, 7',
		'inter(fav 1, fav 3, R2)' => '2, 6, 7',
		'inter(fav 1, fav 3, R6)' => '1, 3, 9',
		'inter(fav 1, fav 3, R7)' => '1, 2, 9',
		'inter(fav 1, fav 3, R8)' => '5, 6, 7',
		'inter(fav 2, fav 3, R1)' => '1, 3, 5',
		'inter(fav 2, fav 3, R3)' => '1, 8, 12',
		'inter(fav 2, fav 3, R7)' => '2, 3, 9',
		'union' => '1, 2, 3, 5, 6, 7, 8, 9, 11, 12',//count: 10
		'place' => '1, 2, 3',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 8, 10',
		'inter(fav 5, fav 8, R5)' => '1, 5, 12',
		'inter(fav 5, fav 10, R1)' => '1, 8, 9',
		'union' => '1, 5, 8, 9, 12',//count: 5
		'place' => '5, 8',
	],
	'6' => [
		/**
		Race 6
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
	'7' => [
		/**
		Race 7
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
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 7, 10',
		'inter(fav 4, fav 7, R3)' => '3, 6, 11',
		'inter(fav 4, fav 7, R5)' => '1, 4, 7',
		'inter(fav 4, fav 7, R7)' => '4, 7, 8',
		'inter(fav 4, fav 10, R7)' => '3, 8, 10',
		'inter(fav 4, fav 10, R8)' => '4, 7, 9',
		'union' => '1, 3, 4, 6, 7, 8, 9, 10, 11',//count: 9
		'place' => '4, 7, 10',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 4, 5, 6',
		'inter(fav 2, fav 4, R1)' => '1, 2, 5',
		'inter(fav 2, fav 4, R5)' => '1, 2, 7',
		'inter(fav 2, fav 4, R8)' => '2, 4, 6',
		'inter(fav 2, fav 5, R1)' => '1, 8, 9',
		'inter(fav 2, fav 5, R4)' => '2, 7, 10',
		'inter(fav 2, fav 5, R8)' => '4, 5, 11',
		'inter(fav 2, fav 6, R8)' => '4, 6, 11',
		'inter(fav 2, fav 6, R9)' => '2, 4, 6',
		'inter(fav 4, fav 6, R9)' => '4, 6, 7',
		'inter(fav 5, fav 6, R1)' => '1, 7, 9',
		'union' => '1, 2, 4, 5, 6, 7, 8, 9, 10, 11',//count: 10
		'place' => '2, 4, 5, 6',
	],
];
