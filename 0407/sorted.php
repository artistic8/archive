<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 7, 13',
		'inter(fav 3, fav 7)' => '3, 7',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '4, 5, 9',
		'inter(fav 4, fav 5)' => '5',
		'inter(fav 4, fav 9)' => '3',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 4, 6',
		'inter(fav 2, fav 4)' => '2, 8',
		'inter(fav 2, fav 6)' => '1',
		'inter(fav 4, fav 6)' => '4',
		'union' => '1, 2, 4, 8',
		'win' => '2, 4, 6',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '3, 4, 8',
		'inter(fav 3, fav 4)' => '3, 4, 11',
		'inter(fav 3, fav 8)' => '3, 8, 11',
		'inter(fav 4, fav 8)' => '3, 11',
		'union' => '3, 4, 8, 11',
		'win' => '3, 4, 8',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 6, 8',
		'inter(fav 3, fav 6)' => '3, 4, 7',
		'inter(fav 3, fav 8)' => '1, 7',
		'inter(fav 6, fav 8)' => '7, 9',
		'union' => '1, 3, 4, 7, 9',
		'win' => '3, 6, 8',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 2, 4',
		'inter(fav 1, fav 2)' => '3',
		'inter(fav 1, fav 4)' => '3, 7, 12, 13',
		'inter(fav 2, fav 4)' => '3, 8',
		'union' => '3, 7, 8, 12, 13',
		'win' => '1, 2, 4',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 2, 3',
		'inter(fav 1, fav 2)' => '2, 4, 5, 7, 9',
		'inter(fav 1, fav 3)' => '1, 2, 9',
		'inter(fav 2, fav 3)' => '2, 3, 9',
		'union' => '1, 2, 3, 4, 5, 7, 9',
		'win' => '1, 2, 3',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 3, 11',
		'inter(fav 2, fav 3)' => '5, 6',
		'inter(fav 2, fav 11)' => '4',
		'union' => '4, 5, 6',
		'win' => '2, 3, 11',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '4, 7, 14',
		'inter(fav 4, fav 7)' => '6',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 3, 9',
		'inter(fav 1, fav 3)' => '4',
		'inter(fav 3, fav 9)' => '11',
	],
];
