<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5, 6, 7',
		'official win' => '2, 4, 3',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3',
		'official win' => '5, 6, 10',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 3, 5, 8',
		'official win' => '3, 8, 2',
		'inter' => '2',
		'trio inter' => '2, 3, 5',//count: 3
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8',//count: 8
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1',
		'official win' => '1, 12, 7',
		'inter' => '1',
		'trio inter' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count: 12
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count: 12
		//Fav win or qin
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 11',
		'official win' => '1, 9, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 6, 9',
		'official win' => '9, 11, 1',
		'inter' => '2',
		'trio inter' => '1, 2, 3, 6, 7, 8, 11, 12',//count: 8
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count: 12
		//Fav win or qin
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '2, 10',
		'official win' => '2, 9, 4',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 3, 4, 7',
		'official win' => '8, 3, 12',
		'inter' => '3, 4',
		'trio inter' => '1, 2, 3, 4, 6, 8, 9',//count: 7
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count: 12
		//Fav win or qin
		'win($20)' => '2, 3, 4, 7',
		'win($20)' => '3, 4',
		'qin/trio($10)' => '2, 3, 4, 7',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 9',
		'official win' => '8, 2, 9',
		'inter' => '2',
		'trio inter' => '2, 3, 4, 7, 8, 9, 10',//count: 7
		'trio union' => '2, 3, 4, 5, 7, 8, 9, 10, 11, 12',//count: 10
	],
];
