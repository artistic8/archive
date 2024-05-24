<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 11',
		'official win' => '11, 6, 5',
		'trio inter' => '4, 12',//count: 2
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14',//count: 13
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 4, 5',
		'official win' => '5, 10, 14',
		'inter' => '4',
		'win inter' => '4, 7',
		'trio inter' => '1, 2, 3, 4, 5, 6, 7, 10, 14',
		'trio inter' => '1, 2, 3, 4, 5, 6, 7, 10, 14',//count: 9
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14',//count: 13
		//Fav win or qin
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 3',
		'official win' => '10, 3, 4',
		'inter' => '2, 3',
		'win inter' => '2, 3, 7',
		'trio inter' => '1, 2, 3, 4, 5, 7, 8, 11, 12',
		'trio inter' => '1, 2, 3, 4, 5, 7, 8, 11, 12',//count: 9
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count: 12
		//Fav win or qin
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '5',
		'official win' => '5, 3, 6',
		'inter' => '5',
		'win inter' => '1, 2, 4, 5, 6',
		'trio inter' => '1, 2, 4, 5, 6, 7, 9',
		'trio inter' => '1, 2, 4, 5, 6, 7, 9',//count: 7
		'trio union' => '1, 2, 4, 5, 6, 7, 9',//count: 7
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1',
		'official win' => '1, 8, 2',
		'inter' => '1',
		'win inter' => '1, 5, 7',
		'trio inter' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 12',
		'trio inter' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 12',//count: 10
		'trio union' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 12',//count: 10
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 7',
		'official win' => '7, 2, 3',
		'inter' => '3',
		'win inter' => '1, 3, 5, 9',
		'trio inter' => '1, 2, 3, 5, 6, 7, 8, 9, 11',
		'trio inter' => '1, 2, 3, 5, 6, 7, 8, 9, 11',//count: 9
		'trio union' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11',//count: 10
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3',
		'official win' => '2, 10, 9',
		'inter' => '1, 3',
		'win inter' => '1, 3, 5, 10',
		'trio inter' => '1, 2, 3, 4, 5, 8, 9, 10',
		'trio inter' => '1, 2, 3, 4, 5, 8, 9, 10',//count: 8
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',//count: 10
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 6, 8',
		'official win' => '6, 8, 4',
		'inter' => '4, 6, 8',
		'win inter' => '4, 6, 8',
		'trio inter' => '1, 2, 3, 4, 6, 7, 8, 10',
		'trio inter' => '1, 2, 3, 4, 6, 7, 8, 10',//count: 8
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',//count: 13
		//Fav win or qin
		'win($20)' => '4, 6, 8',
		'win($20)' => '6, 8',
		'qin/trio($10)' => '4, 6, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 3, 5',
		'official win' => '3, 5, 2',
		'inter' => '5',
		'win inter' => '4, 5, 8',
		'trio inter' => '3, 4, 5, 7, 8, 9',
		'trio inter' => '3, 4, 5, 7, 8, 9',//count: 6
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',//count: 14
		//Fav win or qin
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '3, 5, 11',
		'official win' => '12, 3, 11',
		'trio inter' => '3',//count: 1
		'trio union' => '1, 2, 3, 4, 5, 8, 10, 11, 14',//count: 9
	],
];
