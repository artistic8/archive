<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 7',
		'inter(fav 1, fav 6)' => '1, 7',
		'inter(fav 1, fav 7)' => '7',
		'inter(fav 6, fav 7)' => '7',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 4, 8',
		'inter(fav 2, fav 4)' => '7',
		'inter(fav 2, fav 8)' => '2',
		'inter(fav 4, fav 8)' => '3',
		'union' => '2, 3, 7',
		'win' => '2, 4, 8',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 7, 10',
		'inter(fav 2, fav 7)' => '12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 3, 9',
		'inter(fav 1, fav 3)' => '3, 5, 6, 11',
		'inter(fav 1, fav 9)' => '1, 11',
		'inter(fav 3, fav 9)' => '8, 11',
		'union' => '1, 3, 5, 6, 8, 11',
		'win' => '1, 3, 9',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 4, 7',
		'inter(fav 2, fav 4)' => '1, 2, 7',
		'inter(fav 2, fav 7)' => '1, 7, 8',
		'inter(fav 4, fav 7)' => '1, 4, 7',
		'union' => '1, 2, 4, 7, 8',
		'win' => '2, 4, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '8, 11, 12',
		'inter(fav 8, fav 11)' => '12',
		'inter(fav 8, fav 12)' => '12',
		'inter(fav 11, fav 12)' => '12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '2, 3, 9',
		'inter(fav 2, fav 3)' => '2, 3, 9',
		'inter(fav 2, fav 9)' => '9',
		'inter(fav 3, fav 9)' => '9',
		'union' => '2, 3, 9',
		'win' => '2, 3, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 8, 11',
		'inter(fav 4, fav 8)' => '1, 2, 12',
		'inter(fav 4, fav 11)' => '4, 9',
		'inter(fav 8, fav 11)' => '3',
		'union' => '1, 2, 3, 4, 9, 12',
		'win' => '4, 8, 11',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 3, 7',
		'inter(fav 1, fav 3)' => '8, 10',
		'inter(fav 1, fav 7)' => '6, 12',
		'union' => '6, 8, 10, 12',
	],
];
