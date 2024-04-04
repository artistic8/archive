<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '6, 11',
		'inter(fav 6, fav 11)' => '7',
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
		'inter(fav 1, fav 7)' => '11',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '8, 11, 2',
		'inter(fav 8, fav 11)' => '11',
		'sums' => '10',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 1, 4',
		'inter(fav 1, fav 3)' => '1, 3, 4, 7, 10, 12',
		'inter(fav 1, fav 4)' => '1, 3, 4, 7',
		'inter(fav 3, fav 4)' => '1, 3, 4, 7',
		'union' => '1, 3, 4, 7, 10, 12',
		'win/qqpl/trio' => '1, 3, 4',
		'sums' => '4, 5, 7',
		'X' => '4',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '5, 3',
		'inter(fav 3, fav 5)' => '11',
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
		'inter(fav 1, fav 10)' => '7',
		'inter(fav 1, fav 12)' => '6',
		'sums' => '11',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '11, 4',
	],
];
