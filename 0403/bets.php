<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 12',
		'win hist(fav 12)' => '8, 10',//count: 2
		'all' => '3, 8, 12, 10',//count: 4
		'win' => '3, 8, 10, 12',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '10, 6',
		'win hist(fav 10)' => '10',//count: 1
		'all' => '10, 6',//count: 2
		'win' => '6, 10',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '11, 3',
		'win hist(fav 11)' => '11',//count: 1
		'all' => '11, 3',//count: 2
		'win' => '3, 11',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 10, 1',
		'additional favorites' => '12',
		'win hist(fav 12)' => '3',//count: 1
		'qin/trio' => '2, 10, 1, 12',
		'all' => '2, 10, 1, 12, 3',//count: 5
		'win' => '1, 2, 10, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 4',
		'win hist(fav 5)' => '1, 3, 5',//count: 3
		'all' => '5, 4, 3, 1',//count: 4
		'win' => '1, 3, 4, 5',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 3',
		'win hist(fav 3)' => '1, 3, 5, 9',//count: 4
		'all' => '2, 5, 1, 3, 9',//count: 5
		'win' => '1, 2, 3, 5',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '5, 13, 10',
		'additional favorites' => '6, 8',
		'win hist(fav 13)' => '',//count: 0
		'qin/trio' => '6, 5, 8, 13, 10',
		'all' => '6, 5, 8, 13, 10',//count: 5
		'win' => '5, 6, 8, 13',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '6, 5, 7',
		'additional favorites' => '4',
		'win hist(fav 7)' => '1, 3, 4, 5',//count: 4
		'qin/trio' => '6, 4, 5, 7',
		'all' => '6, 4, 5, 7, 3, 1',//count: 6
		'win' => '4, 5, 6, 7',
	],
];
