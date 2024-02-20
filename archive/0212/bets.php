<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Favorite'  =>  '4',
		'favorites' => '12, 4',
		'Win values(Fav: 12)' =>  '10',
		'Win values(Fav: 4)' =>  '1, 2, 4, 5, 10',
		'unionW(count: 5)' =>  '4, 5, 10, 1, 2',
		'missing(count: 9)' =>  '12, 6, 13, 7, 11, 8, 9, 3, 14',
	],
	'2' => [
		/**
		Race 2
		*/
		'Favorite'  =>  '13',
		'favorites' => '12, 13, 2, 3',
		'Win values(Fav: 12)' =>  '10, 13',
		'Win values(Fav: 13)' =>  '13',
		'Win values(Fav: 2)' =>  '2, 5, 6, 7, 8, 9, 12, 13',
		'Win values(Fav: 3)' =>  '2, 4, 7, 10, 11, 12, 13',
		'unionW(count: 11)' =>  '13, 2, 5, 12, 11, 7, 9, 10, 8, 4, 6',
		'missing(count: 3)' =>  '3, 1, 14',
	],
	'3' => [
		/**
		Race 3
		*/
		'Favorite'  =>  '6',
		'favorites' => '6, 3',
		'Win values(Fav: 6)' =>  '1, 4, 12',
		'Win values(Fav: 3)' =>  '1, 3, 7, 8, 12',
		'unionW(count: 6)' =>  '3, 12, 1, 8, 7, 4',
		'missing(count: 8)' =>  '6, 10, 2, 14, 9, 11, 5, 13',
	],
	'4' => [
		/**
		Race 4
		*/
		'Favorite'  =>  '10',
		'favorites' => '2, 10, 1',
		'Win values(Fav: 2)' =>  '2, 7, 9, 10, 12, 13',
		'Win values(Fav: 10)' =>  '4, 10',
		'Win values(Fav: 1)' =>  '1, 2, 3, 5, 6, 10, 11',
		'unionW(count: 12)' =>  '10, 2, 1, 3, 7, 6, 11, 5, 13, 4, 9, 12',
		'missing(count: 2)' =>  '14, 8',
	],
	'5' => [
		/**
		Race 5
		*/
		'Favorite'  =>  '4',
		'favorites' => '12, 4, 10',
		'Win values(Fav: 12)' =>  '2, 5, 6, 12',
		'Win values(Fav: 4)' =>  '1, 2, 3, 4, 6',
		'Win values(Fav: 10)' =>  '2',
		'unionW(count: 7)' =>  '4, 2, 12, 6, 3, 1, 5',
		'missing(count: 7)' =>  '13, 10, 14, 11, 9, 7, 8',
	],
	'6' => [
		/**
		Race 6
		*/
		'Favorite'  =>  '3',
		'favorites' => '7, 3',
		'Win values(Fav: 7)' =>  '1, 3, 6, 9, 11, 13',
		'Win values(Fav: 3)' =>  '1, 3, 5, 9, 11',
		'unionW(count: 6)' =>  '3, 9, 11, 6, 1, 5',
		'missing(count: 7)' =>  '7, 8, 4, 14, 12, 10, 2',
	],
	'7' => [
		/**
		Race 7
		*/
		'Favorite'  =>  '4',
		'favorites' => '4',
		'Win values(Fav: 4)' =>  '1, 3, 4, 5, 7, 8',
		'unionW(count: 6)' =>  '4, 3, 8, 7, 5, 1',
		'missing(count: 8)' =>  '9, 10, 2, 6, 14, 12, 11, 13',
	],
	'8' => [
		/**
		Race 8
		*/
		'Favorite'  =>  '6',
		'favorites' => '6',
		'Win values(Fav: 6)' =>  '4, 6, 11, 12',
		'unionW(count: 2)' =>  '6, 4',
		'missing(count: 4)' =>  '2, 1, 5, 3',
	],
	'9' => [
		/**
		Race 9
		*/
		'Favorite'  =>  '1',
		'favorites' => '8, 12, 1',
		'Win values(Fav: 8)' =>  '1, 5, 8',
		'Win values(Fav: 12)' =>  '5, 12',
		'Win values(Fav: 1)' =>  '1, 5, 6, 7, 8, 10, 12',
		'unionW(count: 7)' =>  '1, 8, 5, 12, 6, 7, 10',
		'missing(count: 7)' =>  '11, 3, 9, 13, 2, 14, 4',
	],
	'10' => [
		/**
		Race 10
		*/
		'Favorite'  =>  '5',
		'favorites' => '13, 5',
		'Win values(Fav: 13)' =>  '3',
		'Win values(Fav: 5)' =>  '3, 5, 8',
		'unionW(count: 3)' =>  '5, 3, 8',
		'missing(count: 10)' =>  '2, 13, 4, 1, 6, 10, 11, 7, 9, 12',
	],
	'11' => [
		/**
		Race 11
		*/
		'Favorite'  =>  '13',
		'favorites' => '4, 5, 6, 13',
		'Win values(Fav: 4)' =>  '12',
		'Win values(Fav: 5)' =>  '12',
		'Win values(Fav: 6)' =>  '4, 12',
		'Win values(Fav: 13)' =>  '12',
		'unionW(count: 2)' =>  '4, 12',
		'missing(count: 12)' =>  '13, 6, 7, 1, 5, 2, 10, 11, 9, 3, 14, 8',
	],
];
