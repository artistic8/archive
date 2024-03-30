<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '6, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '5, 8',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '7, 1',
		'win hist(fav 1)' => '1, 2, 4, 8, 10, 11',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '8, 11, 2',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 1, 4',
		'win hist(fav 1)' => '1, 3, 4, 7, 10, 12',
		'inter(fav 1, fav 3)' => '1, 3, 4, 7, 10, 12',
		'inter(fav 1, fav 4)' => '1, 3, 4, 7',
		'win hist(fav 3)' => '1, 3, 4, 7, 10, 12',
		'inter(fav 3, fav 4)' => '1, 3, 4, 7',
		'win hist(fav 4)' => '1, 2, 3, 4, 6, 7',
		'union' => '1, 3, 4, 7, 10, 12',
		'win' => '1, 3, 4',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '5, 3',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '6',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 10, 12',
		'additional favorites' => '9',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '11, 4',
	],
];
