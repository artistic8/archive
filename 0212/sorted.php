<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '4, 6, 12',
		'inter(fav 4, fav 6)' => '1',
		'inter(fav 4, fav 12)' => '10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 3, 13',
		'inter(fav 2, fav 3)' => '2, 6, 7, 12, 13',
		'inter(fav 2, fav 13)' => '13',
		'inter(fav 3, fav 13)' => '13',
		'union' => '2, 6, 7, 12, 13',
		'win' => '2, 3, 13',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 6, 12',
		'inter(fav 3, fav 6)' => '1, 12',
		'inter(fav 3, fav 12)' => '12',
		'inter(fav 6, fav 12)' => '12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 10',
		'inter(fav 1, fav 2)' => '2, 10',
		'inter(fav 1, fav 10)' => '10',
		'inter(fav 2, fav 10)' => '10',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 4, 13',
		'inter(fav 2, fav 4)' => '1, 2, 7',
		'inter(fav 2, fav 13)' => '8',
		'union' => '1, 2, 7, 8',
		'win' => '2, 4, 13',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 7, 8',
		'inter(fav 3, fav 7)' => '1, 3, 5, 9, 11',
		'inter(fav 3, fav 8)' => '3',
		'inter(fav 7, fav 8)' => '3',
		'union' => '1, 3, 5, 9, 11',
		'win' => '3, 7, 8',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 4, 8',
		'inter(fav 3, fav 4)' => '1, 3, 10',
		'inter(fav 3, fav 8)' => '2, 9',
		'inter(fav 4, fav 8)' => '8',
		'union' => '1, 2, 3, 8, 9, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 4, 6',
		'inter(fav 2, fav 4)' => '2, 4, 6',
		'inter(fav 2, fav 6)' => '4, 6',
		'inter(fav 4, fav 6)' => '4, 6',
		'union' => '2, 4, 6',
		'win' => '2, 4, 6',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 5, 8',
		'inter(fav 1, fav 5)' => '5, 8, 12',
		'inter(fav 1, fav 8)' => '1, 5, 8',
		'inter(fav 5, fav 8)' => '5, 8',
		'union' => '1, 5, 8, 12',
		'win' => '1, 5, 8',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '2, 5, 13',
		'inter(fav 2, fav 5)' => '3',
		'inter(fav 2, fav 13)' => '3',
		'inter(fav 5, fav 13)' => '3',
	],
	'11' => [
		/**
		Race 11
		*/
		'favorites' => '6, 7, 13',
		'inter(fav 6, fav 13)' => '12',
	],
];
