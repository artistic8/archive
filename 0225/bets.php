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
		'win hist(fav 10)' => '1, 4, 5, 9, 8, 10, 11',
		'place' => '1',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 6',
		'inter(fav 3, fav 6)' => '2, 4, 6',
		'union' => '2, 4, 6',
		'win hist(fav 6)' => '1, 2, 4, 5, 6',
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
		'union' => '1, 2, 8, 10, 12',
		'win/qqpl/trio' => '2, 8, 12, 13',
		'win hist(fav 13)' => '2',
		'place' => '2',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '6, 10',
		'inter(fav 6, fav 10)' => '4, 10',
		'win hist(fav 10)' => '4, 10',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 6',
		'inter(fav 4, fav 6)' => '3, 4, 6, 7',
		'union' => '3, 4, 6, 7',
		'win hist(fav 6)' => '3, 4, 6, 7, 9',
		'place' => '4',
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
		'union' => '1, 2, 9',
		'win hist(fav 3)' => '1, 2, 3, 9, 10',
		'place' => '1',
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
		'union' => '1, 2, 3, 4, 6, 12, 13',
		'win/qqpl/trio' => '4, 8, 9, 12',
		'win hist(fav 12)' => '2, 6',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 14',
		'inter(fav 3, fav 14)' => '3',
		'win hist(fav 14)' => '3',
		'place' => '3',
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
		'union' => '3, 4, 11',
		'win/qqpl/trio' => '1, 3, 4, 5',
		'win hist(fav 5)' => '3, 4, 5, 8',
	],
];
