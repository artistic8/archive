<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1, 2, 6, 8, 9, 10',
		'unions($10)' => '2, 6, 8, 9, 10',
		'union + favorites' => '1, 2, 6, 8, 9, 10',
		'count union + favorites' => '6',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 1, 2, 10, 12',
		'unions($10)' => '1, 2, 7, 10',
		'union + favorites' => '1, 2, 7, 10, 12',
		'count union + favorites' => '5',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 1, 3, 5, 6',
		'unions($10)' => '1, 3, 4, 5, 6, 7',
		'union + favorites' => '1, 3, 4, 5, 6, 7',
		'count union + favorites' => '6',
		'qin(union 101)' => '1, 3, 5, 6',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 2, 4, 12',
		'qin(union )' => '2, 4, 11, 12',
		'unions($10)' => '2, 4, 5, 11, 12',
		'union + favorites' => '2, 4, 5, 11, 12',
		'count union + favorites' => '5',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 1, 3, 4, 7, 11',
		'unions($10)' => '1, 3, 4, 5, 7, 8',
		'union + favorites' => '1, 3, 4, 5, 7, 8, 11',
		'count union + favorites' => '7',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 1, 4, 5, 9, 11',
		'unions($10)' => '1, 2, 4, 5, 9, 11',
		'union + favorites' => '1, 2, 4, 5, 9, 11',
		'count union + favorites' => '6',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 3, 4, 8',
		'unions($10)' => '2, 3, 4, 6, 7, 8, 9',
		'union + favorites' => '2, 3, 4, 6, 7, 8, 9',
		'count union + favorites' => '7',
		'qin(union 10)' => '3, 4, 7, 8',
		'qin(union 1007)' => '2, 3, 4, 8',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 3, 7, 8, 10',
		'unions($10)' => '2, 3, 5, 7, 8, 10',
		'union + favorites' => '2, 3, 5, 7, 8, 10',
		'count union + favorites' => '6',
		'sevens($10)' => '2, 3, 4, 5, 7, 8, 12',
		'count sevens' => '7',
		'inter sevens unions' => '2, 3, 5, 7, 8',
		'count inter sevens unions' => '5',
		'qin(union 1045)' => '3, 7, 8, 10',
		'qin(union 1051)' => '3, 5, 8, 10',
		'qin(union 666)' => '2, 3, 8, 10',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 2, 3, 4, 5, 6, 9',
		'unions($10)' => '2, 3, 4, 5, 6, 7',
		'union + favorites' => '2, 3, 4, 5, 6, 7, 9',
		'count union + favorites' => '7',
	],
];
