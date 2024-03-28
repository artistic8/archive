<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '6, 10',
		'inter(fav 6, fav 10, R1)' => '1, 9',
		'inter(fav 6, fav 10, R4)' => '4, 10',
		'inter(fav 6, fav 10, R5)' => '4',
		'inter(fav 6, fav 10, R6)' => '10, 12',
		'inter(fav 6, fav 10, R7)' => '10',
		'inter(fav 6, fav 10, R8)' => '4',
		'inter(fav 6, fav 10, R9)' => '6',
		'union' => '4, 6, 10',//count: 3
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '5, 2, 7',
		'additional favorites' => '4, 6',
		'inter(fav 2, fav 5, R1)' => '1, 8, 9',
		'inter(fav 2, fav 5, R2)' => '5',
		'inter(fav 2, fav 5, R3)' => '8, 10',
		'inter(fav 2, fav 5, R4)' => '2, 7, 10, 12',
		'inter(fav 2, fav 5, R5)' => '1',
		'inter(fav 2, fav 5, R7)' => '2, 5',
		'inter(fav 2, fav 5, R8)' => '4, 5, 11',
		'inter(fav 2, fav 5, R9)' => '4, 11',
		'inter(fav 2, fav 5, R10)' => '3',
		'inter(fav 2, fav 7, R1)' => '3',
		'inter(fav 2, fav 7, R2)' => '2, 7',
		'inter(fav 2, fav 7, R3)' => '12',
		'inter(fav 2, fav 7, R4)' => '7, 10',
		'inter(fav 2, fav 7, R5)' => '1, 7, 8',
		'inter(fav 2, fav 7, R6)' => '3, 5',
		'inter(fav 2, fav 7, R7)' => '2, 4, 7',
		'inter(fav 2, fav 7, R8)' => '4, 5',
		'inter(fav 2, fav 7, R9)' => '6',
		'inter(fav 5, fav 7, R1)' => '7',
		'inter(fav 5, fav 7, R3)' => '5, 7',
		'inter(fav 5, fav 7, R4)' => '7, 10',
		'inter(fav 5, fav 7, R5)' => '1, 5, 12',
		'inter(fav 5, fav 7, R6)' => '6, 11',
		'inter(fav 5, fav 7, R7)' => '2',
		'inter(fav 5, fav 7, R8)' => '3, 4, 5',
		'inter(fav 5, fav 7, R9)' => '12',
		'inter(fav 5, fav 7, R10)' => '8',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 8, 10',
		'inter(fav 3, fav 8, R1)' => '1, 3',
		'inter(fav 3, fav 8, R2)' => '2',
		'inter(fav 3, fav 8, R3)' => '1, 3, 8, 12',
		'inter(fav 3, fav 8, R4)' => '3, 8, 11',
		'inter(fav 3, fav 8, R5)' => '1, 7, 12',
		'inter(fav 3, fav 8, R6)' => '3',
		'inter(fav 3, fav 8, R7)' => '2, 9',
		'inter(fav 3, fav 8, R8)' => '12',
		'inter(fav 3, fav 8, R9)' => '8',
		'inter(fav 3, fav 10, R1)' => '1, 4, 5',
		'inter(fav 3, fav 10, R2)' => '10',
		'inter(fav 3, fav 10, R4)' => '4',
		'inter(fav 3, fav 10, R5)' => '4',
		'inter(fav 3, fav 10, R7)' => '3, 10',
		'inter(fav 3, fav 10, R8)' => '7',
		'inter(fav 3, fav 10, R9)' => '10, 11',
		'inter(fav 8, fav 10, R1)' => '1, 10',
		'inter(fav 8, fav 10, R5)' => '2',
		'inter(fav 8, fav 10, R6)' => '12',
		'inter(fav 8, fav 10, R7)' => '8',
		'inter(fav 8, fav 10, R8)' => '3',
		'inter(fav 8, fav 10, R9)' => '1',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '4, 11',
		'inter(fav 4, fav 11, R1)' => '4',
		'inter(fav 4, fav 11, R3)' => '11',
		'inter(fav 4, fav 11, R4)' => '11',
		'inter(fav 4, fav 11, R6)' => '12',
		'inter(fav 4, fav 11, R7)' => '5',
		'inter(fav 4, fav 11, R8)' => '4, 9',
		'union' => '4, 5, 11, 12',//count: 4
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '10',
		'union' => '',//count: 0
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 12',
		'inter(fav 3, fav 12, R2)' => '6, 10',
		'inter(fav 3, fav 12, R3)' => '12',
		'inter(fav 3, fav 12, R4)' => '3',
		'inter(fav 3, fav 12, R5)' => '12',
		'inter(fav 3, fav 12, R6)' => '1, 11',
		'inter(fav 3, fav 12, R7)' => '10',
		'inter(fav 3, fav 12, R8)' => '6',
		'inter(fav 3, fav 12, R10)' => '3',
		'union' => '3, 6, 10, 12',//count: 4
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '6, 11',
		'inter(fav 6, fav 11, R1)' => '7',
		'inter(fav 6, fav 11, R2)' => '8',
		'inter(fav 6, fav 11, R4)' => '6, 11',
		'inter(fav 6, fav 11, R6)' => '4, 12',
		'inter(fav 6, fav 11, R7)' => '6',
		'inter(fav 6, fav 11, R8)' => '4',
		'union' => '4, 6, 11, 12',//count: 4
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '5, 6',
		'inter(fav 5, fav 6, R1)' => '1, 7, 9',
		'inter(fav 5, fav 6, R2)' => '5',
		'inter(fav 5, fav 6, R4)' => '4, 10, 12',
		'inter(fav 5, fav 6, R5)' => '3',
		'inter(fav 5, fav 6, R6)' => '6, 11',
		'inter(fav 5, fav 6, R7)' => '10',
		'inter(fav 5, fav 6, R8)' => '4, 11',
		'inter(fav 5, fav 6, R9)' => '3, 4',
		'inter(fav 5, fav 6, R10)' => '4',
		'inter(fav 5, fav 6, R11)' => '12',
		'union' => '',//count: 0
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '7, 5, 11',
		'additional favorites' => '3, 10',
		'inter(fav 5, fav 7, R1)' => '7',
		'inter(fav 5, fav 7, R3)' => '5, 7',
		'inter(fav 5, fav 7, R4)' => '7, 10',
		'inter(fav 5, fav 7, R5)' => '1, 5, 12',
		'inter(fav 5, fav 7, R6)' => '6, 11',
		'inter(fav 5, fav 7, R7)' => '2',
		'inter(fav 5, fav 7, R8)' => '3, 4, 5',
		'inter(fav 5, fav 7, R9)' => '12',
		'inter(fav 5, fav 7, R10)' => '8',
		'inter(fav 5, fav 11, R1)' => '7, 8',
		'inter(fav 5, fav 11, R7)' => '5',
		'inter(fav 5, fav 11, R8)' => '3, 4',
		'inter(fav 5, fav 11, R9)' => '12',
		'inter(fav 7, fav 11, R1)' => '7',
		'inter(fav 7, fav 11, R3)' => '11',
		'inter(fav 7, fav 11, R8)' => '3, 4',
		'inter(fav 7, fav 11, R9)' => '12',
	],
];
