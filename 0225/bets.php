<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 2, 3, 8, 10',
		'inter(fav 1, fav 2)' => '1, 5, 8, 11',
		'inter(fav 1, fav 3)' => '1, 5, 7',
		'inter(fav 1, fav 8)' => '1',
		'inter(fav 1, fav 10)' => '1, 5, 8, 11',
		'inter(fav 2, fav 3)' => '1, 3, 5',
		'inter(fav 2, fav 8)' => '1, 2, 3',
		'inter(fav 2, fav 10)' => '1, 5, 8, 9, 11',
		'inter(fav 3, fav 8)' => '1, 3',
		'inter(fav 3, fav 10)' => '1, 4, 5',
		'inter(fav 8, fav 10)' => '1, 10',
		'sums' => '1, 2, 5, 6, 7, 8, 9',
		'union' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 6',
		'inter(fav 3, fav 6)' => '2, 4, 6',
		'sums' => '3',
		'union' => '2, 4, 6',
		'win/qqpl/trio' => '3, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 8, 12, 13',
		'inter(fav 2, fav 8)' => '1, 2, 8, 10, 12',
		'inter(fav 2, fav 12)' => '2, 10, 12',
		'inter(fav 2, fav 13)' => '2',
		'inter(fav 8, fav 12)' => '2, 10, 12',
		'inter(fav 8, fav 13)' => '2',
		'inter(fav 12, fav 13)' => '2',
		'sums' => '1, 4, 5, 6, 10, 11',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '6, 10',
		'inter(fav 6, fav 10)' => '4, 10',
		'sums' => '4',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 6',
		'inter(fav 4, fav 6)' => '3, 4, 6, 7',
		'sums' => '2',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3',
		'inter(fav 1, fav 3)' => '1, 2, 9',
		'sums' => '2',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 8, 9, 12',
		'inter(fav 4, fav 8)' => '1, 2, 12',
		'inter(fav 4, fav 9)' => '2, 4',
		'inter(fav 4, fav 12)' => '2, 6',
		'inter(fav 8, fav 9)' => '2, 3, 13',
		'inter(fav 8, fav 12)' => '2',
		'inter(fav 9, fav 12)' => '2',
		'sums' => '1, 3, 4, 5, 8',
		'union' => '1, 2, 3, 4, 6, 12, 13',
		'win/qqpl/trio' => '4, 8, 9, 12',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 14',
		'inter(fav 3, fav 14)' => '3',
		'sums' => '11',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 3, 4, 5',
		'inter(fav 1, fav 3)' => '4',
		'inter(fav 1, fav 4)' => '4',
		'inter(fav 1, fav 5)' => '4',
		'inter(fav 3, fav 4)' => '3, 4, 11',
		'inter(fav 3, fav 5)' => '3, 4',
		'inter(fav 4, fav 5)' => '3, 4',
		'sums' => '1, 2, 3, 4',
		'union' => '3, 4, 11',
		'win/qqpl/trio' => '1, 3, 4, 5',
	],
];
