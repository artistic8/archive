<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 3, 4, 6',
		'inter(fav 2, fav 3)' => '1, 3, 5',
		'inter(fav 2, fav 4)' => '1, 2, 5',
		'inter(fav 3, fav 4)' => '1, 4, 5',
		'inter(fav 3, fav 6)' => '1, 6, 7',
		'win' => '1, 2, 3, 4, 5, 6, 7',//count: 7
		'candidates' => '2, 3, 4',
		'place' => '2, 3, 4',
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
		'win' => '3, 6, 11',//count: 3
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 3',
		'inter(fav 1, fav 3)' => '3, 5, 6, 11',
		'win' => '3, 5, 6, 11',//count: 4
		'candidates' => '5, 6, 11',
		'place' => '',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 8, 10',
		'inter(fav 5, fav 8)' => '1, 5, 12',
		'win' => '1, 5, 12',//count: 3
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 3',
		'inter(fav 1, fav 3)' => '1, 3, 9',
		'win' => '1, 3, 9',//count: 3
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 4',
		'inter(fav 3, fav 4)' => '1, 3, 10',
		'win' => '1, 3, 10',//count: 3
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 7, 10',
		'inter(fav 4, fav 10)' => '4, 7, 9',
		'win' => '4, 7, 9',//count: 3
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 4, 5, 6',
		'inter(fav 2, fav 6)' => '2, 4, 6',
		'inter(fav 4, fav 6)' => '4, 6, 7',
		'win' => '2, 4, 6, 7',//count: 4
		'candidates' => '4, 6, 7',
		'place' => '4, 6',
	],
];
