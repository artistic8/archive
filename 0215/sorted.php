<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 7, 9',
		'inter(fav 2, fav 7)' => '3',
		'inter(fav 2, fav 9)' => '1, 3, 8',
		'inter(fav 7, fav 9)' => '3',
		'union' => '1, 3, 8',
		'win' => '2, 7, 9',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 8, 11',
		'inter(fav 3, fav 8)' => '2',
		'inter(fav 3, fav 11)' => '11',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 7, 11',
		'inter(fav 1, fav 7)' => '11',
		'inter(fav 1, fav 11)' => '11',
		'inter(fav 7, fav 11)' => '11',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 4, 11',
		'inter(fav 1, fav 4)' => '3, 11',
		'inter(fav 1, fav 11)' => '6, 11',
		'inter(fav 4, fav 11)' => '11',
		'union' => '3, 6, 11',
		'win' => '1, 4, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 4, 6',
		'inter(fav 3, fav 4)' => '1, 3, 4, 7',
		'inter(fav 3, fav 6)' => '3, 4, 7',
		'inter(fav 4, fav 6)' => '3, 4, 6, 7',
		'union' => '1, 3, 4, 6, 7',
		'win' => '3, 4, 6',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 3, 7',
		'inter(fav 1, fav 3)' => '1, 3, 9',
		'inter(fav 1, fav 7)' => '1, 3, 9',
		'inter(fav 3, fav 7)' => '1, 3, 5, 9, 11',
		'union' => '1, 3, 5, 9, 11',
		'win' => '1, 3, 7',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 5, 6',
		'inter(fav 3, fav 5)' => '2, 10',
		'inter(fav 3, fav 6)' => '10',
		'inter(fav 5, fav 6)' => '10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 5, 8',
		'inter(fav 4, fav 5)' => '4, 7',
		'inter(fav 4, fav 8)' => '1, 2',
		'inter(fav 5, fav 8)' => '3, 8',
		'union' => '1, 2, 3, 4, 7, 8',
		'win' => '4, 5, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '4, 11, 12',
		'inter(fav 11, fav 12)' => '12',
	],
];
