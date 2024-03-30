<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 4, 5',
		'win hist(fav 2)' => '2, 5, 6, 7, 8, 9, 12, 13',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 3',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '5',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1',
		'win hist(fav 1)' => '1, 3, 4, 7, 10, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 7',
		'win hist(fav 7)' => '1, 3, 5, 6, 9, 11, 13',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3',
		'win hist(fav 1)' => '1, 2, 4, 5, 7, 8, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 6, 8',
		'win hist(fav 4)' => '1, 2, 4, 6, 7, 9, 12',
		'inter(fav 4, fav 8)' => '1, 2, 12',
		'win hist(fav 8)' => '1, 2, 3, 8, 12, 13',
		'union' => '1, 2, 12',
		'win' => '4, 6, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 3, 5',
		'win hist(fav 3)' => '2, 3, 8, 9, 10, 11',
		'inter(fav 3, fav 5)' => '3, 8, 11',
		'win hist(fav 5)' => '3, 4, 5, 8, 11, 12',
		'union' => '3, 8, 11',
		'win' => '2, 3, 5',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '3, 5, 11',
	],
];
