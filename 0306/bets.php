<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 7, 8, 10',
		'win hist(fav 3)' => '1, 3, 4, 5, 6, 7',
		'inter(fav 3, fav 10)' => '1, 4, 5',
		'win hist(fav 10)' => '1, 4, 5, 9, 8, 10, 11',
		'union' => '1, 4, 5',
		'win' => '3, 7, 8, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4',
		'win hist(fav 3)' => '2, 4, 6, 7, 10, 11, 12',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 3, 4, 5, 10',
		'win hist(fav 1)' => '1, 2, 4, 5, 8, 10, 11',
		'inter(fav 1, fav 4)' => '2, 4, 8, 11',
		'win hist(fav 4)' => '2, 3, 4, 6, 8, 11',
		'union' => '2, 4, 8, 11',
		'win' => '1, 3, 4, 5, 10',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 5, 6',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 3, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 5, 9',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4, 9',
		'win hist(fav 4)' => '1, 3, 4, 5, 7, 8',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '3, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 7, 11',
		'win hist(fav 3)' => '2, 3, 8, 9, 10, 11',
	],
];
