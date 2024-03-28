<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5, 7, 8',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 3',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6, 9',
		'union' => '1, 4, 6, 9',//count: 4
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '4, 11',
		'union' => '4, 5, 11, 12',//count: 4
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '6',
		'union' => '',//count: 0
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '6, 7, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1',
		'union' => '',//count: 0
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 5',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 6',
		'union' => '2, 4, 6, 11',//count: 4
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '6, 11',
		'union' => '4, 6, 11, 12',//count: 4
	],
];
