<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5, 6, 9',
		'inter(fav 5, fav 6)' => '1, 7, 9',
		'inter(fav 5, fav 9)' => '1, 8',
		'inter(fav 6, fav 9)' => '1, 6',
		'union' => '1, 6, 7, 8, 9',
		'win' => '5, 6, 9',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '4, 5, 7',
		'inter(fav 4, fav 5)' => '5',
		'inter(fav 4, fav 7)' => '7',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 7, 11',
		'inter(fav 2, fav 7)' => '12',
		'inter(fav 7, fav 11)' => '11',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 8, 11',
		'inter(fav 1, fav 8)' => '1, 3, 11',
		'inter(fav 1, fav 11)' => '6, 11',
		'inter(fav 8, fav 11)' => '11',
		'union' => '1, 3, 6, 11',
		'win' => '1, 8, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 7, 12',
		'inter(fav 1, fav 7)' => '1, 4, 7, 12',
		'inter(fav 1, fav 12)' => '12',
		'inter(fav 7, fav 12)' => '5, 12',
		'union' => '1, 4, 5, 7, 12',
		'win' => '1, 7, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '6, 10, 12',
		'inter(fav 6, fav 10)' => '10, 12',
		'inter(fav 6, fav 12)' => '1, 11, 12',
		'inter(fav 10, fav 12)' => '12',
		'union' => '1, 10, 11, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '5, 7, 10',
		'inter(fav 5, fav 7)' => '2',
		'inter(fav 5, fav 10)' => '10',
		'inter(fav 7, fav 10)' => '8',
		'union' => '2, 8, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '7, 9, 11',
		'inter(fav 7, fav 9)' => '3, 4, 5',
		'inter(fav 7, fav 11)' => '3, 4',
		'inter(fav 9, fav 11)' => '3, 4',
		'union' => '3, 4, 5',
		'win' => '7, 9, 11',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 4, 7',
		'inter(fav 3, fav 4)' => '9',
		'inter(fav 4, fav 7)' => '6',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '2, 3, 12',
		'inter(fav 2, fav 3)' => '3',
		'inter(fav 2, fav 12)' => '3',
		'inter(fav 3, fav 12)' => '3',
	],
];
