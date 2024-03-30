<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 1, 10',
		'win hist(fav 3)' => '1, 3, 4, 5, 6, 7',
		'inter(fav 3, fav 10)' => '1, 4, 5',
		'win hist(fav 10)' => '1, 4, 5, 9, 8, 10, 11',
		'union' => '1, 4, 5',
		'win' => '1, 3, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '9, 4',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 1',
		'win hist(fav 1)' => '1, 2, 4, 5, 8, 10, 11',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '11, 1, 6',
		'additional favorites' => '8',
		'win hist(fav 1)' => '1, 2, 3, 5, 6, 10, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '10, 4',
		'win hist(fav 4)' => '1, 2, 3, 4, 6, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '12, 2, 6',
		'win hist(fav 2)' => '2, 3, 4, 5, 8, 10',
		'inter(fav 2, fav 6)' => '4, 10',
		'win hist(fav 6)' => '1, 4, 6, 10, 11, 12',
		'union' => '4, 10',
		'win' => '2, 6, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '6, 4, 7',
		'win hist(fav 4)' => '1, 3, 4, 5, 7, 8, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '7, 1, 5',
		'win hist(fav 5)' => '3, 4, 5, 7, 8, 10, 11',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '5, 10',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '9, 7, 14',
	],
];
