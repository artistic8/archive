<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 1, 5, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 5',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 3, 9, 13',
		'place(end-favorites )' => '13',
		'places($10)' => '13',
		'sures($10)' => '13',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 2, 4, 6, 10',
		'places($10)' => '10',
		'sures($10)' => '10',
		'unions($10)' => '1, 2, 4, 5, 10',
		'union + favorites' => '1, 2, 4, 5, 6, 10',
		'early 4' => '',
		'early 5' => '1, 2, 4, 5, 10',
		'super sures($10)' => '10',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 4, 6, 7',
		'place(end-favorites )' => '7',
		'super sure bet' => 'super sure place 7',
		'places($10)' => '7',
		'sures($10)' => '7',
		'super sures($10)' => '7',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 3, 4, 5, 6',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 4, 7, 8',
		'all fav history' => '(A) 3, 5, 8',
		'place(end-favorites )' => '8',
		'super sure bet' => 'super sure place 8',
		'places($10)' => '8',
		'sures($10)' => '8',
		'unions($10)' => '2, 4, 7, 8',
		'union + favorites' => '2, 4, 7, 8',
		'early 4' => '2, 4, 7, 8',
		'early 5' => '2, 4, 7, 8',
		'super sures($10)' => '8',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 1, 3, 6, 7',
		'unions($10)' => '1, 4, 6, 7',
		'union + favorites' => '1, 3, 4, 6, 7',
		'early 4' => '1, 4, 6, 7',
		'early 5' => '1, 3, 4, 6, 7',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '(F) 2, 3, 5, 7, 13',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '(F) 3, 4, 8, 11',
		'unions($10)' => '1, 3, 8, 11, 12, 14',
		'union + favorites' => '1, 3, 4, 8, 11, 12, 14',
		'early 4' => '',
		'early 5' => '1, 3, 11, 12, 14',
	],
	'11' => [
		/**
		Race 11
		*/
		'favorites' => '(F) 1, 3, 4, 13',
	],
];
