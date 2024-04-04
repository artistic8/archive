<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '8, 14',
		'sums' => '6',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 6, 1',
		'inter(fav 1, fav 2)' => '2, 6, 7, 9',
		'inter(fav 1, fav 6)' => '2, 6',
		'inter(fav 2, fav 6)' => '2, 5, 6, 8',
		'sums' => '1, 3, 4, 5, 7, 8',
		'union' => '2, 5, 6, 7, 8, 9',
		'win/qqpl/trio' => '1, 2, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '4',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '14, 3',
		'sums' => '11',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 2',
		'inter(fav 2, fav 3)' => '1, 7',
		'sums' => '1, 5',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 14, 4',
		'additional favorites' => '10, 13',
		'inter(fav 1, fav 4)' => '1, 6, 7',
		'inter(fav 1, fav 10)' => '7',
		'inter(fav 4, fav 10)' => '4, 7, 9',
		'sums' => '1, 3, 4, 5, 6, 9, 10, 11, 12, 13, 14',
		'union' => '1, 4, 6, 7, 9',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '13, 8, 10',
		'inter(fav 8, fav 10)' => '1',
		'sums' => '2, 3, 5',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '8, 7, 1',
		'inter(fav 7, fav 8)' => '7, 8',
		'sums' => '1, 6, 7, 8, 9',
		'union' => '7, 8',
		'win/qqpl/trio' => '1, 7, 8',
	],
];
