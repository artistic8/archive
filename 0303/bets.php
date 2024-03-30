<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5, 7, 8',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 3',
		'inter(fav 2, fav 3)' => '2, 6, 7, 12, 13',
		'union' => '2, 6, 7, 12, 13',//count: 5
		'win' => '2, 6, 7, 12',
		'win' => '2, 3, 6, 7',
		'diff' => '3, 12',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6, 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '4, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '6',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '6, 7, 10',
		'inter(fav 6, fav 7)' => '1, 6, 11',
		'union' => '1, 6, 11',//count: 3
		'win' => '1, 6, 7, 11',
		'win' => '1, 6, 7, 10',
		'diff' => '10, 11',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 5',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 6',
		'inter(fav 2, fav 6)' => '2, 4, 6',
		'union' => '2, 4, 6',//count: 3
		'win' => '2, 4, 6',
		'win' => '2, 4, 6',
		'diff' => '',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '6, 11',
	],
];
