<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 3, 4, 6',
		'official win' => '2, 6, 4',
		'possible win' => '2, 3, 6',
		'possible win' => '2, 4, 6',
		'possible win' => '3, 4, 6',
		'union' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 12',//count: 10
		'inter' => '2, 3, 4, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4',
		'official win' => '8, 4, 3',
		'union' => '3, 4, 5, 6, 7',//count: 5
		'inter' => '3, 4',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 4, 6, 7, 11, 12',
		'official win' => '5, 12, 1',
		'possible win' => '2, 4, 6',
		'possible win' => '2, 4, 7',
		'possible win' => '2, 6, 7',
		'possible win' => '2, 7, 12',
		'possible win' => '4, 6, 7',
		'possible win' => '4, 7, 12',
		'possible win' => '6, 7, 12',
		'union' => '1, 2, 3, 4, 5, 6, 7, 8, 11, 12',//count: 10
		'inter' => '2, 4, 6, 7, 11, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 3',
		'official win' => '3, 8, 9',
		'win($20)' => '1, 2, 3',
		'win($20)' => '2, 3',
		'qin/trio($10)' => '1, 2, 3',
		'union' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12',//count: 11
		'inter' => '1, 2, 3',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 8, 10',
		'official win' => '4, 11, 10',
		'union' => '1, 2, 3, 4, 5, 10, 11',//count: 7
		'inter' => '5, 10',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 3',
		'official win' => '1, 7, 2',
		'union' => '1, 3, 5, 7, 9',//count: 5
		'inter' => '1, 3',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 4',
		'official win' => '3, 12, 5',
		'union' => '1, 2, 3, 5, 7, 10',//count: 6
		'inter' => '3',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 7, 10',
		'official win' => '2, 8, 9',
		'union' => '1, 3, 4, 6, 7, 8, 9, 10, 12',//count: 9
		'inter' => '4, 7, 10',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 4, 5, 6',
		'official win' => '5, 4, 8',
		'win($20)' => '2, 4, 5, 6',
		'win($20)' => '4, 5',
		'qin/trio($10)' => '2, 4, 5, 6',
		'union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',//count: 11
		'inter' => '2, 4, 5, 6',
	],
];
