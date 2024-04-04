<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 1, 10',
		'inter(fav 1, fav 3)' => '1, 5, 7',
		'inter(fav 1, fav 10)' => '1, 5, 8, 11',
		'inter(fav 3, fav 10)' => '1, 4, 5',
		'sums' => '4, 11',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '9, 4',
		'inter(fav 4, fav 9)' => '3',
		'sums' => '',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 1',
		'inter(fav 1, fav 3)' => '1, 8',
		'sums' => '4',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '11, 1, 6',
		'additional favorites' => '8',
		'inter(fav 1, fav 6)' => '6, 10, 11',
		'inter(fav 1, fav 8)' => '1, 3, 11',
		'inter(fav 1, fav 11)' => '6, 11',
		'inter(fav 6, fav 8)' => '11',
		'inter(fav 6, fav 11)' => '6, 11',
		'inter(fav 8, fav 11)' => '11',
		'sums' => '7, 9, 12, 14',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '10, 4',
		'inter(fav 4, fav 10)' => '2, 4',
		'sums' => '',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '12, 2, 6',
		'inter(fav 2, fav 6)' => '4, 10',
		'inter(fav 6, fav 12)' => '1, 11, 12',
		'sums' => '8',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '6, 4, 7',
		'inter(fav 4, fav 6)' => '10',
		'inter(fav 4, fav 7)' => '4, 7, 8',
		'sums' => '10, 11',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '7, 1, 5',
		'inter(fav 1, fav 5)' => '5, 7, 11',
		'inter(fav 1, fav 7)' => '1, 5',
		'inter(fav 5, fav 7)' => '3, 4, 5',
		'sums' => '6, 8, 12',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '5, 10',
		'inter(fav 5, fav 10)' => '11',
		'sums' => '',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '9, 7, 14',
		'inter(fav 7, fav 9)' => '11',
		'sums' => '',
	],
];
