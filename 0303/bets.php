<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5, 7, 8',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 3',
		'win hist(fav 2)' => '2, 5, 6, 7, 8, 9, 12, 13',
		'inter(fav 2, fav 3)' => '2, 6, 7, 12, 13',
		'win hist(fav 3)' => '2, 4, 6, 7, 10, 11, 12, 13',
		'union' => '2, 6, 7, 12, 13',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6, 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '4, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '6',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '6, 7, 10',
		'win hist(fav 6)' => '1, 4, 6, 10, 11, 12',
		'inter(fav 6, fav 7)' => '1, 6, 11',
		'win hist(fav 7)' => '1, 3, 5, 6, 9, 11, 13',
		'union' => '1, 6, 11',
		'win' => '6, 7, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1',
		'win hist(fav 1)' => '1, 2, 4, 5, 7, 8, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 5',
		'win hist(fav 4)' => '1, 2, 4, 6, 7, 9, 12',
		'inter(fav 4, fav 5)' => '4, 7',
		'win hist(fav 5)' => '3, 4, 5, 7, 8, 10, 11',
		'union' => '4, 7',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 6',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '6, 11',
	],
];
