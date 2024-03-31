<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 3, 10',
		'inter(fav 1, fav 3)' => '1, 5, 7',
		'inter(fav 1, fav 10)' => '1, 5, 8, 11',
		'inter(fav 3, fav 10)' => '1, 4, 5',
		'union' => '1, 4, 5, 7, 8, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '4, 9, 10',
		'inter(fav 4, fav 9)' => '3',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 3, 9',
		'inter(fav 1, fav 3)' => '1, 8',
		'inter(fav 3, fav 9)' => '3, 7, 12',
		'union' => '1, 3, 7, 8, 12',
		'win' => '1, 3, 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 6, 11',
		'inter(fav 1, fav 6)' => '6, 10, 11',
		'inter(fav 1, fav 11)' => '6, 11',
		'inter(fav 6, fav 11)' => '6, 11',
		'union' => '6, 10, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 10, 12',
		'inter(fav 4, fav 10)' => '2, 4',
		'inter(fav 4, fav 12)' => '2, 6',
		'inter(fav 10, fav 12)' => '2',
		'union' => '2, 4, 6',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 6, 12',
		'inter(fav 2, fav 6)' => '4, 10',
		'inter(fav 6, fav 12)' => '1, 11, 12',
		'union' => '1, 4, 10, 11, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4, 6, 7',
		'inter(fav 4, fav 6)' => '10',
		'inter(fav 4, fav 7)' => '4, 7, 8',
		'union' => '4, 7, 8, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 5, 7',
		'inter(fav 1, fav 5)' => '5, 7, 11',
		'inter(fav 1, fav 7)' => '1, 5',
		'inter(fav 5, fav 7)' => '3, 4, 5',
		'union' => '1, 3, 4, 5, 7, 11',
		'win' => '1, 5, 7',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '5, 6, 10',
		'inter(fav 5, fav 6)' => '3, 4',
		'inter(fav 5, fav 10)' => '11',
		'inter(fav 6, fav 10)' => '6',
		'union' => '3, 4, 6, 11',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 9, 14',
	],
];
