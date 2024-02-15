<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Favorite'  =>  '9',
		'favorites' => '2, 9',
		'Trio values(Fav: 2)' =>  '9, 2, 12, 1, 3, 5, 4, 10, 8, 11',
		'Trio values(Fav: 9)' =>  '9, 7, 10, 8, 6',
		'unionF(count: 12)' =>  '9, 2, 7, 12, 1, 3, 5, 4, 10, 8, 11, 6',
		'Place' =>  '12, 1',
		'places' => '3, 1, 5, 12',
	],
	'2' => [
		/**
		Race 2
		*/
		'Favorite'  =>  '8',
		'favorites' => '8, 3',
		'Trio values(Fav: 8)' =>  '8, 3, 4, 1, 10',
		'Trio values(Fav: 3)' =>  '8, 3, 11, 2, 4, 7, 1, 5, 10, 12',
		'unionF(count: 10)' =>  '8, 3, 11, 2, 4, 7, 1, 5, 10, 12',
		'Place' =>  '2, 4',
		'places' => '4, 2',
	],
	'3' => [
		/**
		Race 3
		*/
		'Favorite'  =>  '1',
		'favorites' => '1, 7',
		'Trio values(Fav: 1)' =>  '1, 7, 8, 4, 10, 3, 9, 2',
		'Trio values(Fav: 7)' =>  '1, 11, 7, 8, 4, 6, 12, 3, 9, 2',
		'unionF(count: 11)' =>  '1, 11, 7, 8, 4, 6, 12, 10, 3, 9, 2',
		'Place' =>  '8, 4',
		'places' => '11, 12, 3, 6, 8, 4',
	],
	'4' => [
		/**
		Race 4
		*/
		'Favorite'  =>  '4',
		'favorites' => '11, 4, 1',
		'Trio values(Fav: 11)' =>  '1, 6, 12',
		'Trio values(Fav: 4)' =>  '4, 11, 6, 10, 9, 3, 2',
		'Trio values(Fav: 1)' =>  '4, 1, 8, 6, 10, 9, 3, 2, 12, 7',
		'unionF(count: 11)' =>  '4, 1, 11, 8, 6, 10, 9, 3, 2, 12, 7',
		'Place' =>  '8, 6',
		'places' => '6, 9, 1, 3, 8',
	],
	'5' => [
		/**
		Race 5
		*/
		'Favorite'  =>  '4',
		'favorites' => '4',
		'Trio values(Fav: 4)' =>  '4, 6, 11, 10, 1, 9, 2, 5',
		'unionF(count: 8)' =>  '4, 6, 11, 10, 1, 9, 2, 5',
		'Place' =>  '10, 1',
		'places' => '9, 1, 10',
	],
	'6' => [
		/**
		Race 6
		*/
		'Favorite'  =>  '3',
		'favorites' => '3, 8, 1, 7',
		'Trio values(Fav: 3)' =>  '3, 7, 1, 8, 12, 9, 5, 2, 10, 4, 6, 11',
		'Trio values(Fav: 8)' =>  '8, 12, 2, 11',
		'Trio values(Fav: 1)' =>  '3, 7, 1, 12, 9, 5, 2, 10, 4, 11',
		'Trio values(Fav: 7)' =>  '3, 7, 9, 2, 10, 4, 6, 11',
		'unionF(count: 12)' =>  '3, 7, 1, 8, 12, 9, 5, 2, 10, 4, 6, 11',
		'Place' =>  '8, 12',
		'places' => '8, 12, 1',
	],
	'7' => [
		/**
		Race 7
		*/
		'Favorite'  =>  '5',
		'favorites' => '3, 5',
		'Trio values(Fav: 3)' =>  '5, 3, 9, 2, 11, 10, 4, 1',
		'Trio values(Fav: 5)' =>  '5, 3, 6, 8, 2, 10, 1',
		'unionF(count: 10)' =>  '5, 3, 6, 9, 8, 2, 11, 10, 4, 1',
		'Place' =>  '9, 8',
		'places' => '9, 11, 10, 8, 6',
	],
	'8' => [
		/**
		Race 8
		*/
		'Favorite'  =>  '8',
		'favorites' => '10, 8, 5',
		'Trio values(Fav: 10)' =>  '8, 4, 5, 10, 2, 7, 9',
		'Trio values(Fav: 8)' =>  '8, 4, 1, 9, 3, 6',
		'Trio values(Fav: 5)' =>  '8, 4, 5, 11, 10, 2, 1, 7, 3, 6',
		'unionF(count: 11)' =>  '8, 4, 5, 11, 10, 2, 1, 7, 9, 3, 6',
		'Place' =>  '11, 10',
		'places' => '10, 11, 2',
	],
	'9' => [
		/**
		Race 9
		*/
		'Favorite'  =>  '12',
		'favorites' => '5, 1, 11, 9, 12',
		'Trio values(Fav: 5)' =>  '11, 9, 1, 8, 3, 10, 5',
		'Trio values(Fav: 1)' =>  '12, 4, 9, 1, 8, 6, 3, 10, 2, 5, 7',
		'Trio values(Fav: 11)' =>  '4, 11, 3',
		'Trio values(Fav: 9)' =>  '',
		'Trio values(Fav: 12)' =>  '1, 6, 5',
		'unionF(count: 12)' =>  '12, 11, 4, 9, 1, 8, 6, 3, 10, 2, 5, 7',
		'Place' =>  '9, 1',
		'places' => '11, 4, 1, 10, 9',
	],
];
