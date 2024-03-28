<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '6, 10',
		'union' => '',//count: 0
		'place' => '',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '5, 2, 7',
		'additional favorites' => '4, 6',
		'inter(fav 2, fav 5, R1)' => '1, 8, 9',
		'inter(fav 2, fav 5, R8)' => '4, 5, 11',
		'inter(fav 2, fav 7, R5)' => '1, 7, 8',
		'inter(fav 2, fav 7, R7)' => '2, 4, 7',
		'inter(fav 5, fav 7, R5)' => '1, 5, 12',
		'inter(fav 5, fav 7, R8)' => '3, 4, 5',
		'union' => '1, 2, 3, 4, 5, 7, 8, 9, 11, 12',//count: 10
		'place' => '2, 5, 7',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 8, 10',
		'inter(fav 3, fav 8, R4)' => '3, 8, 11',
		'inter(fav 3, fav 8, R5)' => '1, 7, 12',
		'inter(fav 3, fav 10, R1)' => '1, 4, 5',
		'union' => '1, 3, 4, 5, 7, 8, 11, 12',//count: 8
		'place' => '3, 8',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '4, 11',
		'union' => '',//count: 0
		'place' => '',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '10',
		'union' => '',//count: 0
		'place' => '',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 12',
		'union' => '',//count: 0
		'place' => '',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '6, 11',
		'union' => '',//count: 0
		'place' => '',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '5, 6',
		'inter(fav 5, fav 6, R1)' => '1, 7, 9',
		'inter(fav 5, fav 6, R4)' => '4, 10, 12',
		'union' => '1, 4, 7, 9, 10, 12',//count: 6
		'place' => '',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '7, 5, 11',
		'additional favorites' => '3, 10',
		'inter(fav 5, fav 7, R5)' => '1, 5, 12',
		'inter(fav 5, fav 7, R8)' => '3, 4, 5',
		'union' => '1, 3, 4, 5, 12',//count: 5
		'place' => '5',
	],
];
