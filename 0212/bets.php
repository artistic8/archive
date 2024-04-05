<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '4, 12',
		'inter(fav 4, fav 12)' => '10',
		'win hist(fav 12)' => '8, 10',//count: 2
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 3, 12, 13',
		'inter(fav 2, fav 3)' => '2, 6, 7, 12, 13',
		'inter(fav 2, fav 12)' => '6, 13',
		'inter(fav 2, fav 13)' => '13',
		'inter(fav 3, fav 12)' => '6, 10, 13',
		'inter(fav 3, fav 13)' => '13',
		'inter(fav 12, fav 13)' => '13',
		'union' => '2, 6, 7, 10, 12, 13',
		'win/qqpl/trio' => '2, 3, 12, 13',
		'win hist(fav 13)' => '13',//count: 1
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 6',
		'inter(fav 3, fav 6)' => '1, 12',
		'win hist(fav 6)' => '1, 4, 12',//count: 3
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 10',
		'inter(fav 1, fav 2)' => '2, 10',
		'inter(fav 1, fav 10)' => '10',
		'inter(fav 2, fav 10)' => '10',
		'win hist(fav 10)' => '4, 10',//count: 2
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 10, 12',
		'inter(fav 4, fav 10)' => '2, 4',
		'inter(fav 4, fav 12)' => '2, 6',
		'inter(fav 10, fav 12)' => '2',
		'win hist(fav 12)' => '2, 5, 6, 12',//count: 4
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 7',
		'inter(fav 3, fav 7)' => '1, 3, 5, 9, 11',
		'union' => '1, 3, 5, 9, 11',
		'win hist(fav 7)' => '1, 3, 5, 6, 9, 11',//count: 6
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
		'favorites' => '6',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 8, 12',
		'inter(fav 1, fav 8)' => '1, 5, 8',
		'inter(fav 1, fav 12)' => '5, 12',
		'inter(fav 8, fav 12)' => '5',
		'union' => '1, 5, 8, 12',
		'win/qqpl/trio' => '1, 8, 12',
		'win hist(fav 12)' => '5, 12',//count: 2
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '5, 13',
		'inter(fav 5, fav 13)' => '3',
		'win hist(fav 13)' => '3',//count: 1
	],
	'11' => [
		/**
		Race 11
		*/
		'favorites' => '4, 5, 6, 13',
		'inter(fav 4, fav 5)' => '12',
		'inter(fav 4, fav 6)' => '12',
		'inter(fav 4, fav 13)' => '12',
		'inter(fav 5, fav 6)' => '12',
		'inter(fav 5, fav 13)' => '12',
		'inter(fav 6, fav 13)' => '12',
		'win hist(fav 13)' => '12',//count: 1
	],
];
