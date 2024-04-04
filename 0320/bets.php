<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '6, 10',
		'inter(fav 6, fav 10)' => '1, 9',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '5, 2, 7',
		'additional favorites' => '4, 6',
		'inter(fav 2, fav 4)' => '5, 7, 12',
		'inter(fav 2, fav 5)' => '5',
		'inter(fav 2, fav 6)' => '2, 5, 6, 8',
		'inter(fav 2, fav 7)' => '2, 7',
		'inter(fav 4, fav 5)' => '5',
		'inter(fav 4, fav 6)' => '4, 5',
		'inter(fav 4, fav 7)' => '7',
		'inter(fav 5, fav 6)' => '5',
		'inter(fav 6, fav 7)' => '2',
		'union' => '2, 4, 5, 6, 7, 8, 12',
		'win/qqpl/trio' => '2, 4, 5, 6, 7',
		'sums' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'X' => '2, 4, 5, 6, 7',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 8, 10',
		'inter(fav 3, fav 8)' => '1, 3, 8, 12',
		'union' => '1, 3, 8, 12',
		'sums' => '2, 5, 7, 11',
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
		'favorites' => '10',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 12',
		'inter(fav 3, fav 12)' => '1, 11',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '6, 11',
		'inter(fav 6, fav 11)' => '6',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '5, 6',
		'inter(fav 5, fav 6)' => '4, 11',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '7, 5, 11',
		'additional favorites' => '3, 10',
		'inter(fav 3, fav 5)' => '3, 8, 11',
		'inter(fav 3, fav 10)' => '10, 11',
		'inter(fav 5, fav 7)' => '12',
		'inter(fav 5, fav 10)' => '11',
		'inter(fav 5, fav 11)' => '12',
		'inter(fav 7, fav 10)' => '6',
		'inter(fav 7, fav 11)' => '12',
		'union' => '3, 6, 8, 10, 11, 12',
		'sums' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 12',
		'X' => '3, 5, 7, 10',
	],
];
