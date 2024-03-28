<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 1, 10',
		'inter(fav 1, fav 3, R1)' => '1, 5, 7',
		'inter(fav 3, fav 10, R1)' => '1, 4, 5',
		'place' => '1',
		'win' => '1, 4, 5, 7',//count: 4
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '9, 4',
		'place' => '',
		'win' => '',//count: 0
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 1',
		'place' => '',
		'win' => '',//count: 0
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '11, 1, 6',
		'additional favorites' => '8',
		'inter(fav 1, fav 6, R4)' => '6, 10, 11',
		'place' => '6, 11',
		'win' => '6, 10, 11',//count: 3
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '10, 4',
		'place' => '',
		'win' => '',//count: 0
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '12, 2, 6',
		'inter(fav 6, fav 12, R6)' => '1, 11, 12',
		'place' => '12',
		'win' => '1, 11, 12',//count: 3
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '6, 4, 7',
		'inter(fav 4, fav 7, R7)' => '4, 7, 8',
		'place' => '4, 7',
		'win' => '4, 7, 8',//count: 3
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '7, 1, 5',
		'inter(fav 1, fav 5, R8)' => '5, 7, 11',
		'inter(fav 5, fav 7, R8)' => '3, 4, 5',
		'place' => '5, 7',
		'win' => '3, 4, 5, 7, 11',//count: 5
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '5, 10',
		'place' => '',
		'win' => '',//count: 0
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '9, 7, 14',
		'place' => '',
		'win' => '',//count: 0
	],
];
