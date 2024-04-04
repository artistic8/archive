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
		'inter(fav 2, fav 5)' => '5',
		'inter(fav 2, fav 7)' => '2, 7',
		'union' => '2, 5, 7',
		'win/qqpl/trio' => '2, 5, 7',
		'sums' => '7, 9, 12',
		'X' => '7',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 8, 10',
		'inter(fav 3, fav 8)' => '1, 3, 8, 12',
		'union' => '1, 3, 8, 12',
		'sums' => '11',
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
		'inter(fav 5, fav 7)' => '12',
		'inter(fav 5, fav 11)' => '12',
		'inter(fav 7, fav 11)' => '12',
		'sums' => '12',
	],
];
