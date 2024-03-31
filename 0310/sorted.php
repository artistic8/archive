<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 11, 13',
		'inter(fav 1, fav 6)' => '1, 7',
		'inter(fav 1, fav 11)' => '7, 8, 11',
		'inter(fav 6, fav 11)' => '7',
		'union' => '1, 7, 8, 11',
		'win' => '1, 6, 11, 13',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 3, 4, 5',
		'inter(fav 2, fav 3)' => '2, 6, 7, 12, 13',
		'inter(fav 2, fav 4)' => '5, 7, 12',
		'inter(fav 2, fav 5)' => '5',
		'inter(fav 3, fav 4)' => '4, 7, 12',
		'inter(fav 3, fav 5)' => '10',
		'inter(fav 4, fav 5)' => '5',
		'union' => '2, 4, 5, 6, 7, 10, 12, 13',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 3, 10, 12',
		'inter(fav 2, fav 3)' => '1, 8, 12',
		'inter(fav 2, fav 12)' => '2, 10, 12',
		'inter(fav 3, fav 12)' => '12',
		'union' => '1, 2, 8, 10, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 5, 6, 9',
		'inter(fav 1, fav 5)' => '2, 10',
		'inter(fav 1, fav 6)' => '6, 10, 11',
		'inter(fav 1, fav 9)' => '1, 11',
		'inter(fav 5, fav 6)' => '4, 10, 12',
		'inter(fav 5, fav 9)' => '7',
		'inter(fav 6, fav 9)' => '11',
		'union' => '1, 2, 4, 6, 7, 10, 11, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 6, 8, 10',
		'inter(fav 1, fav 6)' => '3, 4, 7',
		'inter(fav 1, fav 8)' => '1, 7, 12',
		'inter(fav 1, fav 10)' => '4',
		'inter(fav 6, fav 8)' => '7, 9',
		'inter(fav 6, fav 10)' => '4',
		'inter(fav 8, fav 10)' => '2',
		'union' => '1, 2, 3, 4, 7, 9, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 3, 4, 7',
		'inter(fav 2, fav 3)' => '3, 5',
		'inter(fav 2, fav 4)' => '3, 8',
		'inter(fav 2, fav 7)' => '3, 5',
		'inter(fav 3, fav 4)' => '3',
		'inter(fav 3, fav 7)' => '1, 3, 5, 9, 11',
		'inter(fav 4, fav 7)' => '3, 6, 13',
		'union' => '1, 3, 5, 6, 8, 9, 11, 13',
		'win' => '2, 3, 4, 7',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3, 7, 10',
		'inter(fav 1, fav 3)' => '1, 2, 9',
		'inter(fav 1, fav 7)' => '2, 4, 7, 8',
		'inter(fav 1, fav 10)' => '8',
		'inter(fav 3, fav 7)' => '2',
		'inter(fav 3, fav 10)' => '3, 10',
		'inter(fav 7, fav 10)' => '8',
		'union' => '1, 2, 3, 4, 7, 8, 9, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 6, 8, 13',
		'inter(fav 4, fav 6)' => '4, 6, 12',
		'inter(fav 4, fav 8)' => '1, 2, 12',
		'inter(fav 6, fav 8)' => '12',
		'union' => '1, 2, 4, 6, 12',
		'win' => '4, 6, 8, 13',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 3, 10, 12',
		'inter(fav 2, fav 3)' => '2, 11',
		'inter(fav 2, fav 10)' => '6, 11',
		'inter(fav 3, fav 10)' => '10, 11',
		'union' => '2, 6, 10, 11',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '3, 4, 11, 13',
		'inter(fav 3, fav 4)' => '3, 4, 11',
		'inter(fav 3, fav 13)' => '3',
		'inter(fav 4, fav 13)' => '3',
		'union' => '3, 4, 11',
		'win' => '3, 4, 11, 13',
	],
];
