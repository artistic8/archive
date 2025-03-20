<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1, 2, 7, 9, 11, 12',
		'unions($10)' => '2, 8, 9, 10, 12',
		'union + favorites' => '1, 2, 7, 8, 9, 10, 11, 12',
		'count union + favorites' => '8',
		'official win' => '1, 11, 7, 12',
		'win amount' => 90.5,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 1, 5, 6, 11',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 2, 4, 7, 11',
		'unions($10)' => '2, 5, 7, 11',
		'union + favorites' => '2, 4, 5, 7, 11',
		'count union + favorites' => '5',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 1, 2, 4, 5, 8, 9, 10',
		'qin(seven )' => '1, 2, 4, 5, 8, 9, 10',
		'unions($10)' => '2, 4, 5, 9',
		'union + favorites' => '1, 2, 4, 5, 8, 9, 10',
		'count union + favorites' => '7',
		'sevens($10)' => '1, 2, 4, 5, 8, 9, 10',
		'count sevens' => '7',
		'inter sevens unions' => '2, 4, 5, 9',
		'count inter sevens unions' => '4',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 1, 4, 8',
		'qin(union )' => '1, 4, 5, 8',
		'unions($10)' => '1, 3, 4, 5, 8',
		'union + favorites' => '1, 3, 4, 5, 8',
		'count union + favorites' => '5',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 2, 3, 7, 8, 10, 11',
		'qin(seven )' => '1, 2, 3, 7, 8, 10, 11',
		'unions($10)' => '1, 2, 3, 7, 8, 10',
		'union + favorites' => '1, 2, 3, 7, 8, 10, 11',
		'count union + favorites' => '7',
		'sevens($10)' => '1, 2, 3, 4, 7, 8, 10, 11',
		'count sevens' => '8',
		'inter sevens unions' => '1, 2, 3, 7, 8, 10',
		'count inter sevens unions' => '6',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 2, 6, 7',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 1, 3, 5, 6, 10',
		'unions($10)' => '1, 3, 4, 5, 6, 10',
		'union + favorites' => '1, 3, 4, 5, 6, 10',
		'count union + favorites' => '6',
		'sevens($10)' => '1, 2, 3, 4, 5, 7, 10',
		'count sevens' => '7',
		'inter sevens unions' => '1, 3, 4, 5, 10',
		'count inter sevens unions' => '5',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 3, 4, 8, 10, 11',
		'unions($10)' => '4, 5, 8, 10',
		'union + favorites' => '3, 4, 5, 8, 10, 11',
		'count union + favorites' => '6',
	],
];
