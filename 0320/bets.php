<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '6, 10',
		'win hist(fav 10)' => '1, 4, 5, 9, 8, 10, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '5, 2, 7',
		'additional favorites' => '4, 6',
		'win hist(fav 2)' => '2, 5, 6, 7, 8, 9, 12',
		'inter(fav 2, fav 6)' => '2, 5, 6, 8',
		'win hist(fav 6)' => '1, 2, 4, 5, 6, 8',
		'union' => '2, 5, 6, 8',
		'win' => '2, 4, 5, 6, 7',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 8, 10',
		'win hist(fav 8)' => '1, 2, 3, 8, 10, 11, 12',
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
		'favorites' => '10',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '6, 11',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '5, 6',
		'win hist(fav 5)' => '3, 4, 5, 7, 8, 10, 11',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '7, 5, 11',
		'additional favorites' => '3, 10',
		'win hist(fav 3)' => '2, 3, 8, 9, 10, 11',
		'inter(fav 3, fav 5)' => '3, 8, 11',
		'win hist(fav 5)' => '3, 4, 5, 8, 11, 12',
		'union' => '3, 8, 11',
		'win' => '3, 5, 7, 10, 11',
	],
];
