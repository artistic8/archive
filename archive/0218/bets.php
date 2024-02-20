<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Favorite'  =>  '9',
		'favorites' => '6, 5, 9',
		'Win values(Fav: 6)' =>  '1, 6, 7, 9',
		'Win values(Fav: 5)' =>  '1, 7, 8, 9, 12',
		'Win values(Fav: 9)' =>  '1, 6, 8',
		'unionW(count: 5)' =>  '9, 6, 1, 8, 7',
		'missing(count: 6)' =>  '5, 3, 2, 11, 4, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'Favorite'  =>  '4',
		'favorites' => '4',
		'Win values(Fav: 4)' =>  '3, 4, 5, 12',
		'unionW(count: 4)' =>  '4, 5, 3, 12',
		'missing(count: 8)' =>  '7, 9, 6, 10, 1, 11, 2, 8',
	],
	'3' => [
		/**
		Race 3
		*/
		'Favorite'  =>  '7',
		'favorites' => '7',
		'Win values(Fav: 7)' =>  '3, 5, 6, 7, 11, 12',
		'unionW(count: 6)' =>  '7, 11, 6, 5, 3, 12',
		'missing(count: 8)' =>  '2, 8, 9, 1, 4, 14, 10, 13',
	],
	'4' => [
		/**
		Race 4
		*/
		'Favorite'  =>  '1',
		'favorites' => '1, 8',
		'Win values(Fav: 1)' =>  '1, 2, 3, 5, 6, 10, 11',
		'Win values(Fav: 8)' =>  '1, 3, 8, 11',
		'unionW(count: 8)' =>  '1, 8, 11, 10, 6, 3, 2, 5',
		'missing(count: 4)' =>  '12, 9, 7, 4',
	],
	'5' => [
		/**
		Race 5
		*/
		'Favorite'  =>  '7',
		'favorites' => '3, 7',
		'Win values(Fav: 3)' =>  '1, 3, 4, 7, 10, 12',
		'Win values(Fav: 7)' =>  '1, 4, 5, 7, 8, 12',
		'unionW(count: 8)' =>  '7, 12, 1, 10, 3, 8, 5, 4',
		'missing(count: 6)' =>  '13, 2, 9, 14, 6, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'Favorite'  =>  '6',
		'favorites' => '7, 12, 6',
		'Win values(Fav: 7)' =>  '1, 3, 6, 9, 11, 13',
		'Win values(Fav: 12)' =>  '1, 11, 12',
		'Win values(Fav: 6)' =>  '1, 4, 6, 10, 11, 12',
		'unionW(count: 8)' =>  '6, 12, 10, 9, 1, 3, 11, 4',
		'missing(count: 4)' =>  '7, 2, 5, 8',
	],
	'7' => [
		/**
		Race 7
		*/
		'Favorite'  =>  '7',
		'favorites' => '10, 7',
		'Win values(Fav: 10)' =>  '3, 8, 10',
		'Win values(Fav: 7)' =>  '2, 4, 7, 8',
		'unionW(count: 6)' =>  '7, 10, 3, 4, 8, 2',
		'missing(count: 6)' =>  '5, 11, 12, 1, 6, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'Favorite'  =>  '9',
		'favorites' => '11, 9',
		'Win values(Fav: 11)' =>  '3, 4, 9',
		'Win values(Fav: 9)' =>  '3, 4, 5, 10, 13',
		'unionW(count: 5)' =>  '9, 3, 5, 4, 10',
		'missing(count: 7)' =>  '11, 7, 2, 6, 12, 1, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'Favorite'  =>  '4',
		'favorites' => '4, 7',
		'Win values(Fav: 4)' =>  '4, 6, 7, 9',
		'Win values(Fav: 7)' =>  '6, 12',
		'unionW(count: 4)' =>  '4, 7, 9, 6',
		'missing(count: 7)' =>  '3, 1, 2, 11, 8, 5, 10',
	],
	'10' => [
		/**
		Race 10
		*/
		'Favorite'  =>  '12',
		'favorites' => '2, 4, 12',
		'Win values(Fav: 2)' =>  '2, 3, 13',
		'Win values(Fav: 4)' =>  '3, 4, 11',
		'Win values(Fav: 12)' =>  '3',
		'unionW(count: 5)' =>  '3, 2, 4, 13, 11',
		'missing(count: 7)' =>  '12, 9, 7, 8, 6, 10, 1',
	],
];
