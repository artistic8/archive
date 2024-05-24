<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '3, 12',
		'official win' => '12, 4, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '6, 10',
		'official win' => '10, 7, 1',
		'inter' => '10',
		'trio inter' => '1, 2, 5, 8, 10, 12',//count: 6
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',//count: 11
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 11',
		'official win' => '3, 5, 1',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 10, 12',
		'official win' => '1, 2, 7',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 5',
		'official win' => '4, 7, 5',
		'inter' => '4, 5',
		'trio inter' => '1, 3, 4, 5, 6, 7, 9',//count: 7
		'trio union' => '1, 3, 4, 5, 6, 7, 8, 9',//count: 8
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 3',
		'official win' => '5, 2, 6',
		'inter' => '2, 3',
		'trio inter' => '1, 2, 3, 5, 7, 8, 9, 10',//count: 8
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',//count: 10
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '5, 6, 8, 10, 13',
		'official win' => '12, 2, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 5, 6, 7',
		'official win' => '12, 7, 4',
		'inter' => '4, 6',
		'trio inter' => '1, 2, 3, 4, 6, 8',//count: 6
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',//count: 13
		//Fav win or qin
		'win($20)' => '4, 5, 6, 7',
		'win($20)' => '5, 6',
		'qin/trio($10)' => '4, 5, 6, 7',
	],
];
