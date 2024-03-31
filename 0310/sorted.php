<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 11',
		'inter(fav 1, fav 6)' => '1, 7',
		'inter(fav 1, fav 11)' => '7, 8, 11',
		'inter(fav 6, fav 11)' => '7',
		'union' => '1, 7, 8, 11',
		'win' => '1, 6, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 3, 5',
		'inter(fav 2, fav 3)' => '2, 6, 7, 12, 13',
		'inter(fav 2, fav 5)' => '5',
		'inter(fav 3, fav 5)' => '10',
		'union' => '2, 5, 6, 7, 10, 12, 13',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 3, 10',
		'inter(fav 2, fav 3)' => '1, 8, 12',
		'union' => '1, 8, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 5, 6',
		'inter(fav 1, fav 5)' => '2, 10',
		'inter(fav 1, fav 6)' => '6, 10, 11',
		'inter(fav 5, fav 6)' => '4, 10, 12',
		'union' => '2, 4, 6, 10, 11, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 8, 10',
		'inter(fav 1, fav 8)' => '1, 7, 12',
		'inter(fav 1, fav 10)' => '4',
		'inter(fav 8, fav 10)' => '2',
		'union' => '1, 2, 4, 7, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 3, 7',
		'inter(fav 2, fav 3)' => '3, 5',
		'inter(fav 2, fav 7)' => '3, 5',
		'inter(fav 3, fav 7)' => '1, 3, 5, 9, 11',
		'union' => '1, 3, 5, 9, 11',
		'win' => '2, 3, 7',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3, 7',
		'inter(fav 1, fav 3)' => '1, 2, 9',
		'inter(fav 1, fav 7)' => '2, 4, 7, 8',
		'inter(fav 3, fav 7)' => '2',
		'union' => '1, 2, 4, 7, 8, 9',
		'win' => '1, 3, 7',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 6, 8',
		'inter(fav 4, fav 6)' => '4, 6, 12',
		'inter(fav 4, fav 8)' => '1, 2, 12',
		'inter(fav 6, fav 8)' => '12',
		'union' => '1, 2, 4, 6, 12',
		'win' => '4, 6, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 10, 12',
		'inter(fav 2, fav 10)' => '6, 11',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '3, 4, 11',
		'inter(fav 3, fav 4)' => '3, 4, 11',
		'union' => '3, 4, 11',
		'win' => '3, 4, 11',
	],
];
