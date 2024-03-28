<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '6, 11, 10',
		'inter(fav 10, fav 11, R1)' => '4, 8, 11',
		'inter(fav 10, fav 11, R8)' => '3, 4, 9',
		'union' => '3, 4, 8, 9, 11',//count: 5
		'place' => '11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '5, 8',
		'inter(fav 5, fav 8, R5)' => '1, 5, 12',
		'union' => '1, 5, 12',//count: 3
		'place' => '5',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '7, 1',
		'inter(fav 1, fav 7, R6)' => '1, 3, 9',
		'union' => '1, 3, 9',//count: 3
		'place' => '1',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '8, 11, 2',
		'inter(fav 2, fav 8, R1)' => '1, 2, 3',
		'union' => '1, 2, 3',//count: 3
		'place' => '2',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 1, 4',
		'inter(fav 1, fav 3, R1)' => '1, 5, 7',
		'inter(fav 1, fav 3, R2)' => '2, 6, 7',
		'inter(fav 1, fav 3, R6)' => '1, 3, 9',
		'inter(fav 1, fav 3, R7)' => '1, 2, 9',
		'inter(fav 1, fav 3, R8)' => '5, 6, 7',
		'inter(fav 1, fav 4, R6)' => '3, 7, 12',
		'inter(fav 1, fav 4, R8)' => '1, 6, 7',
		'inter(fav 3, fav 4, R1)' => '1, 4, 5',
		'inter(fav 3, fav 4, R2)' => '4, 7, 12',
		'inter(fav 3, fav 4, R4)' => '3, 4, 11',
		'inter(fav 3, fav 4, R7)' => '1, 3, 10',
		'inter(fav 3, fav 4, R8)' => '6, 7, 12',
		'inter(fav 3, fav 4, R10)' => '3, 4, 11',
		'union' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12',//count: 11
		'place' => '1, 3, 4',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '5, 3',
		'inter(fav 3, fav 5, R5)' => '1, 3, 12',
		'inter(fav 3, fav 5, R9)' => '3, 8, 11',
		'union' => '1, 3, 8, 11, 12',//count: 5
		'place' => '3',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '6',
		'union' => '',//count: 0
		'place' => '',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 10, 12',
		'additional favorites' => '9',
		'inter(fav 1, fav 10, R1)' => '1, 8, 11',
		'inter(fav 1, fav 10, R9)' => '1, 6, 10',
		'union' => '1, 6, 8, 10, 11',//count: 5
		'place' => '1, 10',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '11, 4',
		'union' => '',//count: 0
		'place' => '',
	],
];
