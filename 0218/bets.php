<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5, 6, 9',
		'inter(fav 5, fav 6)' => '1, 7, 9',
		'inter(fav 5, fav 9)' => '1, 8',
		'inter(fav 6, fav 9)' => '1, 6',
		'sums' => '11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '4',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '7',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 8',
		'inter(fav 1, fav 8)' => '1, 3, 11',
		'sums' => '9',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 7',
		'inter(fav 3, fav 7)' => '1, 4, 7, 12',
		'sums' => '10',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '6, 7, 12',
		'inter(fav 6, fav 7)' => '1, 6, 11',
		'inter(fav 6, fav 12)' => '1, 11, 12',
		'inter(fav 7, fav 12)' => '1, 11',
		'sums' => '',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '7, 10',
		'inter(fav 7, fav 10)' => '8',
		'sums' => '',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '9, 11',
		'inter(fav 9, fav 11)' => '3, 4',
		'sums' => '',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '4, 7',
		'inter(fav 4, fav 7)' => '6',
		'sums' => '11',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '2, 4, 12',
		'inter(fav 2, fav 4)' => '3',
		'inter(fav 2, fav 12)' => '3',
		'inter(fav 4, fav 12)' => '3',
		'sums' => '6',
	],
];
