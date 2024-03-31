<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 3, 5, 11',
		'inter(fav 2, fav 3)' => '1, 3, 5',
		'inter(fav 2, fav 5)' => '1, 8, 9',
		'inter(fav 2, fav 11)' => '8, 11',
		'inter(fav 3, fav 5)' => '1, 7',
		'inter(fav 3, fav 11)' => '4, 7',
		'inter(fav 5, fav 11)' => '7, 8',
		'union' => '1, 3, 4, 5, 7, 8, 9, 11',
		'win' => '2, 3, 5, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 2, 4, 14',
		'inter(fav 1, fav 2)' => '2, 6, 7, 9',
		'inter(fav 1, fav 4)' => '7',
		'inter(fav 2, fav 4)' => '5, 7, 12',
		'union' => '2, 5, 6, 7, 9, 12',
		'win' => '1, 2, 4, 14',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 6, 7, 10',
		'inter(fav 1, fav 6)' => '1, 4',
		'inter(fav 1, fav 7)' => '5, 11',
		'inter(fav 6, fav 7)' => '12',
		'union' => '1, 4, 5, 11, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '4, 5, 10, 12',
		'inter(fav 4, fav 5)' => '4',
		'inter(fav 4, fav 10)' => '4',
		'inter(fav 4, fav 12)' => '3',
		'inter(fav 5, fav 10)' => '4, 10',
		'union' => '3, 4, 10',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 5, 6, 10',
		'inter(fav 2, fav 5)' => '1',
		'inter(fav 2, fav 6)' => '7, 9',
		'inter(fav 2, fav 10)' => '2',
		'inter(fav 5, fav 6)' => '3',
		'inter(fav 6, fav 10)' => '4',
		'union' => '1, 2, 3, 4, 7, 9',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 2, 6, 10',
		'inter(fav 1, fav 2)' => '3',
		'inter(fav 1, fav 6)' => '1, 12',
		'inter(fav 1, fav 10)' => '12',
		'inter(fav 2, fav 6)' => '4, 10',
		'inter(fav 2, fav 10)' => '10',
		'inter(fav 6, fav 10)' => '10, 12',
		'union' => '1, 3, 4, 10, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 2, 5, 7',
		'inter(fav 1, fav 2)' => '2, 4, 5, 7, 9',
		'inter(fav 1, fav 5)' => '2, 5',
		'inter(fav 1, fav 7)' => '2, 4, 7, 8',
		'inter(fav 2, fav 5)' => '2, 5',
		'inter(fav 2, fav 7)' => '2, 4, 7',
		'inter(fav 5, fav 7)' => '2',
		'union' => '2, 4, 5, 7, 8, 9',
		'win' => '1, 2, 5, 7',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 7, 8, 9',
		'inter(fav 2, fav 7)' => '4, 5',
		'inter(fav 2, fav 8)' => '2',
		'inter(fav 2, fav 9)' => '2, 4, 5',
		'inter(fav 7, fav 8)' => '1, 3',
		'inter(fav 7, fav 9)' => '3, 4, 5',
		'inter(fav 8, fav 9)' => '2, 3',
		'union' => '1, 2, 3, 4, 5',
		'win' => '2, 7, 8, 9',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 2, 4, 11',
		'inter(fav 1, fav 2)' => '6',
		'inter(fav 1, fav 4)' => '6, 7',
		'inter(fav 1, fav 11)' => '12',
		'inter(fav 2, fav 4)' => '4, 6',
		'union' => '4, 6, 7, 12',
		'win' => '1, 2, 4, 11',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '2, 5, 8, 14',
		'inter(fav 2, fav 5)' => '3',
		'inter(fav 5, fav 8)' => '8',
	],
];
