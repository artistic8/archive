<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 1, 14',
		'union2' => '1, 2, 7, 10',
		'union3' => '5, 6, 11',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '4, 10, 12',
		'union2' => '2, 4, 5, 6, 10',
		'union3' => '3, 4, 7, 8, 9, 10',
		'candidate' => '4, 10',//count: 2
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 2, 10',
		'union2' => '1, 2, 6, 7, 10, 11',
		'union3' => '1, 5, 6, 10, 11',
		'candidate' => '1, 6, 10, 11',//count: 4
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '7, 2, 5',
		'union2' => '2, 3, 4, 5, 6, 7, 8, 10, 11',
		'union3' => '1, 2, 3, 4, 5, 7, 8, 9, 11, 12',
		'candidate' => '2, 3, 4, 5, 7, 8, 11',//count: 7
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 6',
		'union2' => '1, 4, 7, 9, 10',
		'union3' => '2, 4, 6, 11',
		'candidate' => '4',//count: 1
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '11, 1, 2',
		'additional favorites' => '4',
		'union2' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'union3' => '1, 2, 4, 5, 6, 7, 8, 11, 12',
		'candidate' => '1, 2, 4, 5, 6, 7, 8, 11',//count: 8
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '2, 8',
		'union2' => '2, 3, 8, 9',
		'union3' => '1, 2, 3',
		'candidate' => '2, 3',//count: 2
	],
];
