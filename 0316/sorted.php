<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 3, 4, 10',
		'inter(fav 1, fav 3)' => '1, 5, 7',
		'inter(fav 1, fav 4)' => '1, 5',
		'inter(fav 1, fav 10)' => '1, 5, 8, 11',
		'inter(fav 3, fav 4)' => '1, 4, 5',
		'inter(fav 3, fav 10)' => '1, 4, 5',
		'inter(fav 4, fav 10)' => '1, 4, 5, 10',
		'union' => '1, 4, 5, 7, 8, 10, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '4, 5, 9, 10',
		'inter(fav 4, fav 5)' => '5',
		'inter(fav 4, fav 9)' => '3',
		'inter(fav 5, fav 10)' => '10',
		'union' => '3, 5, 10',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 2, 3, 9',
		'inter(fav 1, fav 2)' => '1, 2, 8, 10',
		'inter(fav 1, fav 3)' => '1, 8',
		'inter(fav 2, fav 3)' => '1, 8, 12',
		'inter(fav 2, fav 9)' => '12',
		'inter(fav 3, fav 9)' => '3, 7, 12',
		'union' => '1, 2, 3, 7, 8, 10, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 3, 6, 11',
		'inter(fav 1, fav 3)' => '3, 5, 6, 11',
		'inter(fav 1, fav 6)' => '6, 10, 11',
		'inter(fav 1, fav 11)' => '6, 11',
		'inter(fav 3, fav 6)' => '4, 6, 11',
		'inter(fav 3, fav 11)' => '6, 11',
		'inter(fav 6, fav 11)' => '6, 11',
		'union' => '3, 4, 5, 6, 10, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 4, 10, 12',
		'inter(fav 2, fav 4)' => '1, 2, 7',
		'inter(fav 2, fav 10)' => '2',
		'inter(fav 2, fav 12)' => '2',
		'inter(fav 4, fav 10)' => '2, 4',
		'inter(fav 4, fav 12)' => '2, 6',
		'inter(fav 10, fav 12)' => '2',
		'union' => '1, 2, 4, 6, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 6, 10, 12',
		'inter(fav 2, fav 6)' => '4, 10',
		'inter(fav 2, fav 10)' => '10',
		'inter(fav 6, fav 10)' => '10, 12',
		'inter(fav 6, fav 12)' => '1, 11, 12',
		'inter(fav 10, fav 12)' => '12',
		'union' => '1, 4, 10, 11, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 4, 6, 7',
		'inter(fav 3, fav 4)' => '1, 3, 10',
		'inter(fav 3, fav 6)' => '10',
		'inter(fav 3, fav 7)' => '2',
		'inter(fav 4, fav 6)' => '10',
		'inter(fav 4, fav 7)' => '4, 7, 8',
		'union' => '1, 2, 3, 4, 7, 8, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 5, 7, 12',
		'inter(fav 1, fav 5)' => '5, 7, 11',
		'inter(fav 1, fav 7)' => '1, 5',
		'inter(fav 1, fav 12)' => '6',
		'inter(fav 5, fav 7)' => '3, 4, 5',
		'union' => '1, 3, 4, 5, 6, 7, 11',
		'win' => '1, 5, 7, 12',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '5, 6, 7, 10',
		'inter(fav 5, fav 6)' => '3, 4',
		'inter(fav 5, fav 10)' => '11',
		'inter(fav 6, fav 7)' => '6',
		'inter(fav 6, fav 10)' => '6',
		'inter(fav 7, fav 10)' => '6',
		'union' => '3, 4, 6, 11',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 7, 9, 14',
		'inter(fav 7, fav 9)' => '11',
	],
];
