<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Favorite'  =>  '6',
		'favorites' => '6, 1, 7',
		'Win values(Fav: 6)' =>  '1, 6, 7, 9',
		'Win values(Fav: 1)' =>  '1, 5, 7, 8, 11',
		'Win values(Fav: 7)' =>  '3, 7',
		'unionW(count: 8)' =>  '6, 7, 1, 9, 11, 8, 3, 5',
		'missing(count: 4)' =>  '4, 2, 12, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'Favorite'  =>  '8',
		'favorites' => '4, 8',
		'Win values(Fav: 4)' =>  '3, 4, 5, 12',
		'Win values(Fav: 8)' =>  '1, 2, 3',
		'unionW(count: 4)' =>  '2, 4, 3, 1',
		'missing(count: 6)' =>  '8, 10, 11, 7, 6, 9',
	],
	'3' => [
		/**
		Race 3
		*/
		'Favorite'  =>  '7',
		'favorites' => '7',
		'Win values(Fav: 7)' =>  '3, 5, 6, 7, 11, 12',
		'unionW(count: 6)' =>  '7, 3, 6, 11, 12, 5',
		'missing(count: 6)' =>  '2, 10, 9, 8, 4, 1',
	],
	'4' => [
		/**
		Race 4
		*/
		'Favorite'  =>  '1',
		'favorites' => '3, 1, 11',
		'Win values(Fav: 3)' =>  '3, 4, 5, 6, 11',
		'Win values(Fav: 1)' =>  '1, 2, 3, 5, 6, 10, 11',
		'Win values(Fav: 11)' =>  '6, 11',
		'unionW(count: 8)' =>  '1, 3, 11, 6, 2, 10, 5, 4',
		'missing(count: 4)' =>  '9, 12, 8, 7',
	],
	'5' => [
		/**
		Race 5
		*/
		'Favorite'  =>  '2',
		'favorites' => '7, 1, 2',
		'Win values(Fav: 7)' =>  '1, 4, 5, 7, 8, 12',
		'Win values(Fav: 1)' =>  '1, 3, 4, 7, 10, 12',
		'Win values(Fav: 2)' =>  '1, 2, 7, 8, 9',
		'unionW(count: 10)' =>  '2, 7, 4, 10, 1, 12, 3, 8, 5, 9',
		'missing(count: 2)' =>  '6, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'Favorite'  =>  '8',
		'favorites' => '11, 8',
		'Win values(Fav: 11)' =>  '4, 12',
		'Win values(Fav: 8)' =>  '3, 8, 12',
		'unionW(count: 4)' =>  '8, 12, 3, 4',
		'missing(count: 8)' =>  '11, 10, 1, 2, 6, 9, 5, 7',
	],
	'7' => [
		/**
		Race 7
		*/
		'Favorite'  =>  '3',
		'favorites' => '2, 3',
		'Win values(Fav: 2)' =>  '2, 3, 4, 5, 6, 7, 9',
		'Win values(Fav: 3)' =>  '1, 2, 3, 9',
		'unionW(count: 8)' =>  '3, 2, 9, 5, 7, 1, 4, 6',
		'missing(count: 4)' =>  '8, 10, 11, 12',
	],
	'8' => [
		/**
		Race 8
		*/
		'Favorite'  =>  '4',
		'favorites' => '11, 4',
		'Win values(Fav: 11)' =>  '3, 4, 9',
		'Win values(Fav: 4)' =>  '1, 4, 6, 7, 9, 12',
		'unionW(count: 7)' =>  '4, 1, 6, 7, 9, 3, 12',
		'missing(count: 5)' =>  '11, 8, 5, 2, 10',
	],
	'9' => [
		/**
		Race 9
		*/
		'Favorite'  =>  '3',
		'favorites' => '5, 1, 3',
		'Win values(Fav: 5)' =>  '3, 5, 8, 11, 12',
		'Win values(Fav: 1)' =>  '1, 5, 6, 7, 8, 10, 12',
		'Win values(Fav: 3)' =>  '2, 3, 8, 9, 10, 11',
		'unionW(count: 11)' =>  '3, 1, 8, 7, 9, 5, 2, 12, 10, 11, 6',
		'missing(count: 1)' =>  '4',
	],
];
