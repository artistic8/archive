<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 5, 6, 9',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 2, 7, 12',
		'unions($10)' => '2, 4, 7, 12',
		'union + favorites' => '2, 4, 7, 12',
		'count union + favorites' => '4',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 1, 2, 3',
		'unions($10)' => '1, 2, 3, 5, 7, 11, 12',
		'union + favorites' => '1, 2, 3, 5, 7, 11, 12',
		'count union + favorites' => '7',
		'qin(union 1004)' => '1, 2, 3, 11',
		'qin(union 1010)' => '1, 2, 3, 7',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 2, 5, 6, 7, 8, 11',
		'unions($10)' => '1, 3, 5, 6, 7, 11',
		'union + favorites' => '1, 2, 3, 5, 6, 7, 8, 11',
		'count union + favorites' => '8',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 2, 5, 6, 12',
		'qin(union )' => '2, 5, 6, 12',
		'unions($10)' => '2, 4, 5, 6, 12',
		'union + favorites' => '2, 4, 5, 6, 12',
		'count union + favorites' => '5',
		'qin(union 1000)' => '4, 5, 6, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 5, 7, 8, 10',
		'qin(seven )' => '1, 2, 3, 5, 7, 8, 10',
		'unions($10)' => '1, 2, 3, 5, 8, 10',
		'union + favorites' => '1, 2, 3, 5, 7, 8, 10',
		'count union + favorites' => '7',
		'sevens($10)' => '1, 2, 3, 5, 7, 8, 10',
		'count sevens' => '7',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 1, 5, 9',
		'unions($10)' => '2, 5, 9',
		'union + favorites' => '1, 2, 5, 9',
		'count union + favorites' => '4',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 3, 4, 5, 7, 9',
		'unions($10)' => '2, 4, 5, 7, 9',
		'union + favorites' => '2, 3, 4, 5, 7, 9',
		'count union + favorites' => '6',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 1, 3, 4, 5, 6, 9, 12',
		'unions($10)' => '1, 3, 4, 9, 12',
		'union + favorites' => '1, 3, 4, 5, 6, 9, 12',
		'count union + favorites' => '7',
	],
];
