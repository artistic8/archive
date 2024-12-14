<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 2, 3, 5, 11',
		'unions($10)' => '2, 3, 8, 11, 12',
		'union + favorites' => '2, 3, 5, 8, 11, 12',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 1, 3, 6',
		'place(end-favorites )' => '6',
		'places($10)' => '6',
		'sures($10)' => '6',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 1, 4, 13',
		'unions($10)' => '1, 2, 4, 9, 13',
		'union + favorites' => '1, 2, 4, 9, 13',
		'win(union 1002)' => '1, 2, 4, 13',
		'win(union 1057)' => '1, 4, 9, 13',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 13',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 1',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 8, 11',
		'unions($10)' => '5, 8, 11, 12',
		'union + favorites' => '5, 8, 11, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 2, 6, 8',
		'place(end-favorites )' => '8',
		'places($10)' => '8',
		'sures($10)' => '8',
		'placesWP($30)' => '6',
		'unions($10)' => '2, 6, 7, 8',
		'union + favorites' => '2, 6, 7, 8',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 1, 2',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 3, 5, 6, 12, 13',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '(F) 6, 10, 12',
	],
];
