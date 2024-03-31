<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5, 7, 9',
		'inter(fav 5, fav 7)' => '7',
		'inter(fav 5, fav 9)' => '1, 8',
		'inter(fav 7, fav 9)' => '3',
		'union' => '1, 3, 7, 8',
		'win' => '5, 7, 9',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 3, 9',
		'inter(fav 2, fav 3)' => '2, 6, 7, 12, 13',
		'inter(fav 2, fav 9)' => '6, 9',
		'inter(fav 3, fav 9)' => '6',
		'union' => '2, 6, 7, 9, 12, 13',
		'win' => '2, 3, 9',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6, 7, 9',
		'inter(fav 7, fav 9)' => '3, 7',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '4, 11, 12',
		'inter(fav 4, fav 11)' => '11',
		'inter(fav 4, fav 12)' => '3',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 6, 8',
		'inter(fav 5, fav 6)' => '3',
		'inter(fav 5, fav 8)' => '1, 5',
		'inter(fav 6, fav 8)' => '7, 9',
		'union' => '1, 3, 5, 7, 9',
		'win' => '5, 6, 8',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '6, 7, 10',
		'inter(fav 6, fav 7)' => '1, 6, 11',
		'inter(fav 6, fav 10)' => '10, 12',
		'union' => '1, 6, 10, 11, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 2, 4',
		'inter(fav 1, fav 2)' => '2, 4, 5, 7, 9',
		'inter(fav 1, fav 4)' => '1, 4, 5, 7, 8',
		'inter(fav 2, fav 4)' => '3, 4, 5, 7',
		'union' => '1, 2, 3, 4, 5, 7, 8, 9',
		'win' => '1, 2, 4',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 4, 5',
		'inter(fav 2, fav 4)' => '2, 4, 6',
		'inter(fav 2, fav 5)' => '4, 5, 11',
		'inter(fav 4, fav 5)' => '4, 7',
		'union' => '2, 4, 5, 6, 7, 11',
		'win' => '2, 4, 5',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 6, 11',
		'inter(fav 2, fav 6)' => '2, 4, 6',
		'union' => '2, 4, 6',
		'win' => '2, 6, 11',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 6, 11',
		'inter(fav 1, fav 6)' => '1, 4',
	],
];
