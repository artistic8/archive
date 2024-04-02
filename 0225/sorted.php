<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 2, 8',
		'inter(fav 1, fav 2)' => '1, 5, 8, 11',
		'inter(fav 1, fav 8)' => '1',
		'inter(fav 2, fav 8)' => '1, 2, 3',
		'union' => '1, 2, 3, 5, 8, 11',
		'win' => '1, 2, 8',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 5, 6',
		'inter(fav 3, fav 6)' => '2, 4, 6',
		'inter(fav 5, fav 6)' => '5',
		'union' => '2, 4, 5, 6',
		'win' => '3, 5, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 4, 12',
		'inter(fav 3, fav 4)' => '3, 8',
		'inter(fav 3, fav 12)' => '12',
		'inter(fav 4, fav 12)' => '2',
		'union' => '2, 3, 8, 12',
		'win' => '3, 4, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '3, 6, 10',
		'inter(fav 3, fav 6)' => '4, 6, 11',
		'inter(fav 3, fav 10)' => '4',
		'inter(fav 6, fav 10)' => '4, 10',
		'union' => '4, 6, 10, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 6, 7',
		'inter(fav 4, fav 6)' => '3, 4, 6, 7',
		'inter(fav 4, fav 7)' => '1, 4, 7',
		'inter(fav 6, fav 7)' => '4, 7',
		'union' => '1, 3, 4, 6, 7',
		'win' => '4, 6, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '4, 10, 12',
		'inter(fav 4, fav 10)' => '12',
		'inter(fav 4, fav 12)' => '12',
		'inter(fav 10, fav 12)' => '12',
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
		'favorites' => '3, 8, 12',
		'inter(fav 3, fav 8)' => '12',
		'inter(fav 3, fav 12)' => '6',
		'inter(fav 8, fav 12)' => '2',
		'union' => '2, 6, 12',
		'win' => '3, 8, 12',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 3, 14',
		'inter(fav 2, fav 3)' => '2, 11',
		'inter(fav 3, fav 14)' => '3',
		'union' => '2, 3, 11',
		'win' => '2, 3, 14',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '3, 4, 5',
		'inter(fav 3, fav 4)' => '3, 4, 11',
		'inter(fav 3, fav 5)' => '3, 4',
		'inter(fav 4, fav 5)' => '3, 4',
		'union' => '3, 4, 11',
		'win' => '3, 4, 5',
	],
];
