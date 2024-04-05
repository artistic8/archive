<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '8, 14',
		'win hist(fav 14)' => '14',//count: 1
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 6, 1',
		'inter(fav 1, fav 2)' => '2, 6, 7, 9',
		'inter(fav 1, fav 6)' => '2, 6',
		'inter(fav 2, fav 6)' => '2, 5, 6, 8',
		'union' => '2, 5, 6, 7, 8, 9',
		'win/qqpl/trio' => '1, 2, 6',
		'win hist(fav 6)' => '1, 2, 4, 5, 6, 8, 14',//count: 7
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
		'win hist(fav 14)' => '1',//count: 1
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 2',
		'inter(fav 2, fav 3)' => '1, 7',
		'win hist(fav 3)' => '1, 3, 4, 7, 10, 12',//count: 6
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
		'win hist(fav 14)' => '',//count: 0
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '13, 8, 10',
		'inter(fav 8, fav 10)' => '1',
		'win hist(fav 13)' => '',//count: 0
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '8, 7, 1',
		'inter(fav 7, fav 8)' => '7, 8',
		'win hist(fav 8)' => '7, 8',//count: 2
	],
];
