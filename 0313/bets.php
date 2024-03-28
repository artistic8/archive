<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 3, 4, 6',
		'inter(fav 2, fav 3, R1)' => '1, 3, 5',
		'inter(fav 2, fav 4, R1)' => '1, 2, 5',
		'inter(fav 3, fav 4, R1)' => '1, 4, 5',
		'inter(fav 3, fav 6, R1)' => '1, 6, 7',
		'place' => '2, 3, 4, 6',
		'win' => '1, 2, 3, 4, 5, 6, 7',//count: 7
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4',
		'place' => '',
		'win' => '',//count: 0
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 4, 6, 7, 11, 12',
		'inter(fav 4, fav 7, R3)' => '3, 6, 11',
		'place' => '6, 11',
		'win' => '3, 6, 11',//count: 3
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 3',
		'place' => '',
		'win' => '',//count: 0
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 8, 10',
		'inter(fav 5, fav 8, R5)' => '1, 5, 12',
		'place' => '5',
		'win' => '1, 5, 12',//count: 3
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 3',
		'inter(fav 1, fav 3, R6)' => '1, 3, 9',
		'place' => '1, 3',
		'win' => '1, 3, 9',//count: 3
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 4',
		'inter(fav 3, fav 4, R7)' => '1, 3, 10',
		'place' => '3',
		'win' => '1, 3, 10',//count: 3
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 7, 10',
		'inter(fav 4, fav 10, R8)' => '4, 7, 9',
		'place' => '4, 7',
		'win' => '4, 7, 9',//count: 3
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 4, 5, 6',
		'inter(fav 2, fav 6, R9)' => '2, 4, 6',
		'inter(fav 4, fav 6, R9)' => '4, 6, 7',
		'place' => '2, 4, 6',
		'win' => '2, 4, 6, 7',//count: 4
	],
];
