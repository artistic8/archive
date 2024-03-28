<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 1, 14',
		'inter(fav 1, fav 2)' => '2, 6, 7, 9',
		'union' => '2, 6, 7, 9',//count: 4
		'place' => '2',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '4, 10, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 2, 10',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '7, 2, 5',
		'inter(fav 2, fav 7)' => '2, 4, 7',
		'union' => '2, 4, 7',//count: 3
		'place' => '2, 7',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 6',
		'inter(fav 2, fav 6)' => '4, 6, 11',
		'union' => '4, 6, 11',//count: 3
		'place' => '6',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '11, 1, 2',
		'additional favorites' => '4',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '2, 8',
	],
];
