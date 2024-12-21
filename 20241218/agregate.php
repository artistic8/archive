<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '(F) 3, 4',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '(F) 1, 2, 7, 10',
		'placesWP($30)' => '7',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '(F) 1, 2, 7',
		'place(end-favorites )' => '7',
		'places($10)' => '7',
		'sures($10)' => '7',
		'placesWP($30)' => '1, 2',
		'place(wp 1209)' => '1',
		'place(wp 1210)' => '2',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '(F) 1, 4, 10',
		'unions($10)' => '1, 2, 4, 5, 10, 12',
		'union + favorites' => '1, 2, 4, 5, 10, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '(F) 2',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '(F) 2, 4, 7',
		'unions($10)' => '1, 2, 3, 4, 7, 8, 9',
		'union + favorites' => '1, 2, 3, 4, 7, 8, 9',
		'win(union 127)' => '2, 4, 7, 8',
		'win(union 131)' => '1, 2, 4, 7',
		'win(union 1378)' => '2, 4, 7, 9',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '(F) 1, 4, 6, 8, 11',
		'placesWP($30)' => '1',
		'unions($10)' => '1, 6, 8, 10, 11, 12',
		'union + favorites' => '1, 4, 6, 8, 10, 11, 12',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '(F) 3, 4, 6, 7',
		'place(end-favorites )' => '7',
		'super sure bet' => 'super sure place 7',
		'places($10)' => '7',
		'sures($10)' => '7',
		'super sures($10)' => '7',
	],
];
