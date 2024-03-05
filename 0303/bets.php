<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Favorite'  =>  '7',
		'favorites' => '5, 7, 8',
		'union' => '1, 2, 3, 7, 8, 9, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'Favorite'  =>  '3',
		'favorites' => '2, 3',
		'union' => '2, 4, 5, 6, 7, 10, 12, 13',
		'union current favorite' => '2, 4, 6, 7, 10, 12, 13',
	],
	'3' => [
		/**
		Race 3
		*/
		'Favorite'  =>  '9',
		'favorites' => '6, 9',
		'union' => '3, 7, 12',
		'union current favorite' => '3, 7, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'Favorite'  =>  '11',
		'favorites' => '4, 11',
		'union' => '3, 4, 11',
	],
	'5' => [
		/**
		Race 5
		*/
		'Favorite'  =>  '6',
		'favorites' => '6',
		'union' => '3, 4, 7',
		'union current favorite' => '3, 4, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'Favorite'  =>  '6',
		'favorites' => '6, 7, 10',
		'f6-f7' => '1, 6, 11',
		'bet' => '1, 6, 7, 11',
		'union' => '1, 3, 6, 11, 12, 13',
		'union current favorite' => '1, 6, 11, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'Favorite'  =>  '1',
		'favorites' => '1',
		'union' => '1, 2, 8, 9',
		'union current favorite' => '1, 2, 8, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'Favorite'  =>  '5',
		'favorites' => '4, 5',
		'union' => '1, 2, 3, 4, 5, 6, 7, 9, 11, 12',
		'union current favorite' => '3, 4, 5, 7, 11',
	],
	'9' => [
		/**
		Race 9
		*/
		'Favorite'  =>  '6',
		'favorites' => '2, 6',
		'f2-f6' => '2, 4, 6',
		'bet' => '2, 4, 6',
		'union' => '2, 4, 6, 7',
		'union current favorite' => '2, 4, 6, 7',
	],
	'10' => [
		/**
		Race 10
		*/
		'Favorite'  =>  '6',
		'favorites' => '6, 11',
	],
];
