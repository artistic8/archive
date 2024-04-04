<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5, 7, 8',
		'inter(fav 5, fav 7)' => '7',
		'inter(fav 5, fav 8)' => '1',
		'inter(fav 7, fav 8)' => '3',
		'union' => '1, 3, 7',
		'win/qqpl/trio' => '5, 7, 8',
		'place' => '8',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 3',
		'inter(fav 2, fav 3)' => '2, 6, 7, 12, 13',
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
		'inter(fav 4, fav 11)' => '11',
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
		'inter(fav 6, fav 7)' => '1, 6, 11',
		'inter(fav 6, fav 10)' => '10, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 5',
		'inter(fav 4, fav 5)' => '4, 7',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 6',
		'inter(fav 2, fav 6)' => '2, 4, 6',
		'union' => '2, 4, 6',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '6, 11',
	],
];
