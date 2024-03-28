<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 11',
		'inter(fav 1, fav 11, R1)' => '7, 8, 11',
		'place' => '11',
		'win' => '7, 8, 11',//count: 3
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 4, 5',
		'inter(fav 2, fav 4, R2)' => '5, 7, 12',
		'place' => '5',
		'win' => '5, 7, 12',//count: 3
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 3',
		'inter(fav 2, fav 3, R3)' => '1, 8, 12',
		'place' => '',
		'win' => '1, 8, 12',//count: 3
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '5',
		'place' => '',
		'win' => '',//count: 0
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1',
		'place' => '',
		'win' => '',//count: 0
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 7',
		'place' => '',
		'win' => '',//count: 0
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3',
		'inter(fav 1, fav 3, R7)' => '1, 2, 9',
		'place' => '1',
		'win' => '1, 2, 9',//count: 3
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 6, 8',
		'inter(fav 4, fav 6, R8)' => '4, 6, 12',
		'inter(fav 4, fav 8, R8)' => '1, 2, 12',
		'place' => '4, 6',
		'win' => '1, 2, 4, 6, 12',//count: 5
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 3, 5, 10, 11',
		'inter(fav 3, fav 5, R9)' => '3, 8, 11',
		'place' => '3, 11',
		'win' => '3, 8, 11',//count: 3
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '3, 5, 11',
		'place' => '',
		'win' => '',//count: 0
	],
];
