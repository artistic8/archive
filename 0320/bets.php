<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '6, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '5, 2, 7',
		'additional favorites' => '4, 6',
		'inter(fav 2, fav 4)' => '5, 7, 12',
		'inter(fav 2, fav 6)' => '2, 5, 6, 8',
		'union' => '2, 5, 6, 7, 8, 12',//count: 6
		'win' => '2, 4, 5, 6, 7, 8, 12',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 8, 10',
		'inter(fav 3, fav 8)' => '1, 3, 8, 12',
		'union' => '1, 3, 8, 12',//count: 4
		'win' => '1, 3, 8, 10, 12',
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
		'favorites' => '10',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '6, 11',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '5, 6',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '7, 5, 11',
		'additional favorites' => '3, 10',
		'inter(fav 3, fav 5)' => '3, 8, 11',
		'union' => '3, 8, 11',//count: 3
		'win' => '3, 5, 7, 8, 10, 11',
	],
];
