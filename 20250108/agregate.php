<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 4, 12',
		'unions($10)' => '4, 5, 7, 12',
		'union + favorites' => '4, 5, 7, 12',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 4, 6, 9',
		'unions($10)' => '3, 4, 6, 7, 9',
		'union + favorites' => '3, 4, 6, 7, 9',
		'win(union 1006)' => '4, 6, 7, 9',
		'win(union 1023)' => '3, 4, 6, 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 1, 7, 12',
		'unions($10)' => '1, 3, 6, 11, 12',
		'union + favorites' => '1, 3, 6, 7, 11, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 2, 5, 8',
		'unions($10)' => '1, 2, 4, 5, 8',
		'union + favorites' => '1, 2, 4, 5, 8',
		'win(union 1000)' => '2, 4, 5, 8',
		'win(union 1043)' => '1, 2, 5, 8',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 1, 3, 5, 10',
		'unions($10)' => '1, 3, 5, 6, 10',
		'union + favorites' => '1, 3, 5, 6, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 1, 3, 6, 10, 11',
		'places($10)' => '6',
		'sures($10)' => '6',
		'super sures($10)' => '6',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 3, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 1, 6, 9, 10',
		'places($10)' => '10',
		'sures($10)' => '10',
	],
];
