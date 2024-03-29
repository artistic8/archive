<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 7, 8, 10',
		'inter(fav 3, fav 10)' => '1, 4, 5',
		'win' => '1, 4, 5',//count: 3
		'place' => '4',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4',
		'inter(fav 3, fav 4)' => '4, 7, 12',
		'win' => '4, 7, 12',//count: 3
		'place' => '4, 12',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 3, 4, 5, 10',
		'inter(fav 1, fav 4)' => '2, 4, 8, 11',
		'inter(fav 1, fav 5)' => '5, 8, 10',
		'win' => '2, 4, 5, 8, 10, 11',//count: 6
		'place' => '2, 4, 8, 10',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 5, 6',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 3, 7',
		'inter(fav 1, fav 3)' => '1, 3, 4, 7',
		'inter(fav 1, fav 7)' => '1, 4, 7',
		'inter(fav 3, fav 7)' => '1, 4, 7',
		'win' => '1, 3, 4, 7',//count: 4
		'place' => '4',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 5, 9',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '3, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 7, 11',
	],
];
