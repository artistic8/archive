<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 2, 3, 8, 10',
		'official win' => '1, 4, 12',
		'trio inter' => '4, 5, 9',//count: 3
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count: 12
		'ratio' => 4,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 6',
		'official win' => '2, 6, 3',
		'inter' => '6',
		'win inter' => '2, 5, 6',
		'trio inter' => '1, 2, 4, 5, 6',
		'trio inter' => '1, 2, 4, 5, 6',//count: 5
		'trio union' => '1, 2, 3, 4, 5, 6',//count: 6
		'ratio' => 1.2,
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 8, 12, 13',
		'official win' => '2, 13, 11',
		'trio inter' => '',//count: 0
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',//count: 13
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '6, 10',
		'official win' => '10, 4, 6',
		'inter' => '10',
		'win inter' => '5, 10',
		'trio inter' => '1, 2, 3, 4, 5, 7, 10, 11',
		'trio inter' => '1, 2, 3, 4, 5, 7, 10, 11',//count: 8
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11',//count: 10
		'ratio' => 1.25,
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 6',
		'official win' => '7, 6, 10',
		'trio inter' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11',//count: 10
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',//count: 13
		'ratio' => 1.3,
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '10',
		'official win' => '12, 6, 3',
		'inter' => '10',
		'win inter' => '1, 3, 4, 6, 7, 8, 10',
		'trio inter' => '1, 3, 4, 5, 6, 7, 8, 9, 10, 12, 14',
		'trio inter' => '1, 3, 4, 5, 6, 7, 8, 9, 10, 12, 14',//count: 11
		'trio union' => '1, 3, 4, 5, 6, 7, 8, 9, 10, 12, 14',//count: 11
		'ratio' => 1,
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3',
		'official win' => '1, 2, 8',
		'inter' => '1, 3',
		'win inter' => '1, 2, 3, 5, 10',
		'trio inter' => '1, 2, 3, 4, 5, 8, 9, 10, 11',
		'trio inter' => '1, 2, 3, 4, 5, 8, 9, 10, 11',//count: 9
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',//count: 11
		'ratio' => 1.2222222222222,
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 8, 9, 12',
		'official win' => '2, 3, 9',
		'trio inter' => '3, 10',//count: 2
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count: 12
		'ratio' => 6,
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 14',
		'official win' => '3, 12, 14',
		'trio inter' => '',//count: 0
		'trio union' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12',//count: 11
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 3, 4, 5',
		'official win' => '4, 5, 3',
		'trio inter' => '3',//count: 1
		'trio union' => '1, 2, 3, 4, 5, 7, 8, 10, 11, 12, 13, 14',//count: 12
		'ratio' => 12,
	],
];
