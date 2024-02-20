<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Favorite'  =>  '9',
		'favorites' => '2, 9',
		'Win values(Fav: 2)' =>  '9, 2, 1, 3, 5, 8, 11',
		'Win values(Fav: 9)' =>  '1, 8, 6',
		'unionW(count: 8)' =>  '9, 2, 1, 3, 5, 8, 11, 6',
		'missing(count: 4)' =>  '7, 12, 4, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'Favorite'  =>  '8',
		'favorites' => '8, 3',
		'Win values(Fav: 8)' =>  '3, 2, 1',
		'Win values(Fav: 3)' =>  '11, 2, 4, 7, 10, 12',
		'unionW(count: 8)' =>  '3, 11, 2, 4, 7, 1, 10, 12',
		'missing(count: 4)' =>  '8, 6, 9, 5',
	],
	'3' => [
		/**
		Race 3
		*/
		'Favorite'  =>  '1',
		'favorites' => '1, 7',
		'Win values(Fav: 1)' =>  '1, 11, 8, 4, 10, 2',
		'Win values(Fav: 7)' =>  '11, 7, 6, 12, 3',
		'unionW(count: 10)' =>  '1, 11, 7, 8, 4, 6, 12, 10, 3, 2',
		'missing(count: 1)' =>  '9',
	],
	'4' => [
		/**
		Race 4
		*/
		'Favorite'  =>  '4',
		'favorites' => '11, 4, 1',
		'Win values(Fav: 11)' =>  '11, 6',
		'Win values(Fav: 4)' =>  '4, 11, 9, 3',
		'Win values(Fav: 1)' =>  '1, 11, 6, 10, 3, 2',
		'unionW(count: 8)' =>  '4, 1, 11, 6, 10, 9, 3, 2',
		'missing(count: 3)' =>  '8, 12, 7',
	],
	'5' => [
		/**
		Race 5
		*/
		'Favorite'  =>  '4',
		'favorites' => '4',
		'Win values(Fav: 4)' =>  '4, 6, 3, 1, 2',
		'unionW(count: 5)' =>  '4, 6, 3, 1, 2',
		'missing(count: 6)' =>  '11, 10, 9, 8, 5, 7',
	],
	'6' => [
		/**
		Race 6
		*/
		'Favorite'  =>  '3',
		'favorites' => '3, 8, 1, 7',
		'Win values(Fav: 3)' =>  '3, 1, 9, 5, 11',
		'Win values(Fav: 8)' =>  '3, 8, 12',
		'Win values(Fav: 1)' =>  '3, 7, 1, 12, 9',
		'Win values(Fav: 7)' =>  '3, 1, 9, 6, 11',
		'unionW(count: 9)' =>  '3, 7, 1, 8, 12, 9, 5, 6, 11',
		'missing(count: 3)' =>  '2, 10, 4',
	],
	'7' => [
		/**
		Race 7
		*/
		'Favorite'  =>  '5',
		'favorites' => '3, 5',
		'Win values(Fav: 3)' =>  '3, 9, 2, 1',
		'Win values(Fav: 5)' =>  '5, 2, 10',
		'unionW(count: 6)' =>  '5, 3, 9, 2, 10, 1',
		'missing(count: 6)' =>  '6, 7, 8, 11, 4, 12',
	],
	'8' => [
		/**
		Race 8
		*/
		'Favorite'  =>  '8',
		'favorites' => '10, 8, 5',
		'Win values(Fav: 10)' =>  '4, 10, 7, 9, 3',
		'Win values(Fav: 8)' =>  '8, 1, 3',
		'Win values(Fav: 5)' =>  '8, 5, 11, 10, 7, 3',
		'unionW(count: 9)' =>  '8, 4, 5, 11, 10, 1, 7, 9, 3',
		'missing(count: 2)' =>  '2, 6',
	],
	'9' => [
		/**
		Race 9
		*/
		'Favorite'  =>  '12',
		'favorites' => '5, 1, 11, 9, 12',
		'Win values(Fav: 5)' =>  '12, 11, 8, 3, 5',
		'Win values(Fav: 1)' =>  '12, 1, 8, 6, 10, 5, 7',
		'Win values(Fav: 11)' =>  '12',
		'Win values(Fav: 9)' =>  '12',
		'Win values(Fav: 12)' =>  '12, 5',
		'unionW(count: 9)' =>  '12, 11, 1, 8, 6, 3, 10, 5, 7',
		'missing(count: 3)' =>  '4, 9, 2',
	],
];
