<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 3, 4, 6',
		'inter(fav 2, fav 3)' => '1, 3, 5',
		'union' => '1, 3, 5',
		'win' => '2, 3, 4, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 4, 6, 7, 11, 12',
		'inter(fav 4, fav 7)' => '3, 6, 11',
		'union' => '3, 6, 11',
		'win' => '2, 4, 6, 7, 11, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 3',
		'inter(fav 1, fav 3)' => '3, 5, 6, 11',
		'union' => '3, 5, 6, 11',
		'win' => '1, 2, 3',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 8, 10',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 3',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 4',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 7, 10',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 4, 5, 6',
	],
];
