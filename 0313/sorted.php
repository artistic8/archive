<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 2, 3, 4',
		'inter(fav 1, fav 2)' => '1, 5, 8, 11',
		'inter(fav 1, fav 3)' => '1, 5, 7',
		'inter(fav 1, fav 4)' => '1, 5',
		'inter(fav 2, fav 3)' => '1, 3, 5',
		'inter(fav 2, fav 4)' => '1, 2, 5',
		'inter(fav 3, fav 4)' => '1, 4, 5',
		'union' => '1, 2, 3, 4, 5, 7, 8, 11',
		'win' => '1, 2, 3, 4',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 2, 3, 4',
		'inter(fav 1, fav 2)' => '2, 6, 7',
		'inter(fav 1, fav 3)' => '2, 6, 7',
		'inter(fav 1, fav 4)' => '7',
		'inter(fav 2, fav 3)' => '2, 6, 7',
		'inter(fav 2, fav 4)' => '5, 7',
		'inter(fav 3, fav 4)' => '4, 7',
		'union' => '2, 4, 5, 6, 7',
		'win' => '1, 2, 3, 4',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 5, 6, 7',
		'inter(fav 2, fav 5)' => '8',
		'inter(fav 2, fav 6)' => '1, 12',
		'inter(fav 2, fav 7)' => '12',
		'inter(fav 5, fav 7)' => '5, 7',
		'inter(fav 6, fav 7)' => '12',
		'union' => '1, 5, 7, 8, 12',
		'win' => '2, 5, 6, 7',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 3, 8',
		'inter(fav 1, fav 2)' => '2, 10',
		'inter(fav 1, fav 3)' => '3, 5, 6, 11',
		'inter(fav 1, fav 8)' => '1, 3, 11',
		'inter(fav 3, fav 8)' => '3, 8, 11',
		'union' => '1, 2, 3, 5, 6, 8, 10, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 5, 8, 10',
		'inter(fav 2, fav 5)' => '1',
		'inter(fav 2, fav 8)' => '1, 2, 7, 8, 9',
		'inter(fav 2, fav 10)' => '2',
		'inter(fav 5, fav 8)' => '1, 5, 12',
		'inter(fav 8, fav 10)' => '2',
		'union' => '1, 2, 5, 7, 8, 9, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 2, 3, 7',
		'inter(fav 1, fav 2)' => '3',
		'inter(fav 1, fav 3)' => '1, 3, 9',
		'inter(fav 1, fav 7)' => '1, 3, 9',
		'inter(fav 2, fav 3)' => '3, 5',
		'inter(fav 2, fav 7)' => '3, 5',
		'inter(fav 3, fav 7)' => '1, 3, 5, 9',
		'union' => '1, 3, 5, 9',
		'win' => '1, 2, 3, 7',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4, 5, 6, 7',
		'inter(fav 4, fav 5)' => '5, 10',
		'inter(fav 4, fav 6)' => '10',
		'inter(fav 4, fav 7)' => '4, 7, 8',
		'inter(fav 5, fav 6)' => '10',
		'inter(fav 5, fav 7)' => '2',
		'union' => '2, 4, 5, 7, 8, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 4, 7, 10',
		'inter(fav 1, fav 4)' => '1, 6, 7',
		'inter(fav 1, fav 7)' => '1, 5',
		'inter(fav 1, fav 10)' => '7',
		'inter(fav 4, fav 7)' => '1, 4',
		'inter(fav 4, fav 10)' => '4, 7, 9',
		'inter(fav 7, fav 10)' => '3, 4',
		'union' => '1, 3, 4, 5, 6, 7, 9',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '4, 5, 7, 8',
		'inter(fav 4, fav 5)' => '4',
		'inter(fav 4, fav 7)' => '6',
		'inter(fav 5, fav 8)' => '5, 8',
		'union' => '4, 5, 6, 8',
		'win' => '4, 5, 7, 8',
	],
];
