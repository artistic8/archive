<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5',
		'official win' => '5, 7, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1',
		'official win' => '1, 8, 6',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '4, 9, 10',
		'official win' => '4, 1, 6',
		'union' => '2, 3, 4, 7, 8, 9, 10',//count: 7
		'inter' => '4, 9, 10',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 6, 7, 11, 12',
		'official win' => '11, 9, 10',
		'possible win' => '6, 11, 12',
		'union' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12',//count: 11
		'inter' => '2, 6, 7, 11, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 7',
		'official win' => '3, 4, 10',
		'union' => '1, 4, 5, 6, 7, 9',//count: 6
		'inter' => '4, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 2, 3, 10',
		'official win' => '3, 1, 12',
		'win($20)' => '1, 2, 3, 10',
		'win($20)' => '2, 3',
		'qin/trio($10)' => '1, 2, 3, 10',
		'union' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12',//count: 11
		'inter' => '1, 2, 3, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 6, 8',
		'official win' => '2, 6, 10',
		'union' => '1, 2, 3, 5, 6, 9',//count: 6
		'inter' => '3, 6',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '6, 8',
		'official win' => '8, 3, 7',
		'union' => '2, 3, 4, 6, 8, 10, 11, 12',//count: 8
		'inter' => '6, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '4',
		'official win' => '11, 4, 6',
	],
];
