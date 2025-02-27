<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1, 2, 3',
		'qin(union )' => '1, 2, 3, 5',
		'unions($10)' => '1, 2, 3, 4, 5',
		'union + favorites' => '1, 2, 3, 4, 5',
		'count union + favorites' => '5',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 4, 5, 7, 8, 11, 12',
		'unions($10)' => '4, 5, 8, 12',
		'union + favorites' => '4, 5, 7, 8, 11, 12',
		'count union + favorites' => '6',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 2, 3',
		'qin(union )' => '2, 3, 5, 7',
		'unions($10)' => '2, 3, 5, 7',
		'union + favorites' => '2, 3, 5, 7',
		'count union + favorites' => '4',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 1, 4, 6, 8',
		'unions($10)' => '1, 2, 4, 5, 8, 11',
		'union + favorites' => '1, 2, 4, 5, 6, 8, 11',
		'count union + favorites' => '7',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 2, 4, 6, 9',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 2, 4, 9',
		'unions($10)' => '1, 2, 4, 8, 9, 11',
		'union + favorites' => '1, 2, 4, 8, 9, 11',
		'count union + favorites' => '6',
		'sevens($10)' => '1, 2, 3, 7, 8, 9, 11',
		'count sevens' => '7',
		'qin(union 430)' => '2, 4, 9, 11',
		'qin(union 432)' => '2, 4, 8, 9',
		'qin(union 464)' => '1, 2, 4, 9',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 4, 7, 10',
		'qin(union )' => '2, 4, 7, 10',
		'unions($10)' => '2, 4, 7, 10',
		'union + favorites' => '2, 4, 7, 10',
		'count union + favorites' => '4',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 1, 2, 4, 5, 6',
		'unions($10)' => '1, 4, 5, 6, 8, 9, 10',
		'union + favorites' => '1, 2, 4, 5, 6, 8, 9, 10',
		'count union + favorites' => '8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 2, 3, 4, 7, 12',
		'unions($10)' => '2, 4, 7, 9, 12',
		'union + favorites' => '2, 3, 4, 7, 9, 12',
		'count union + favorites' => '6',
	],
];
