<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Favorite'  =>  '1',
		'favorites' => '9, 10, 1',
		'Win values(Fav: 9)' =>  '1, 8, 6',
		'Win values(Fav: 10)' =>  '9, 10, 11, 5, 4',
		'Win values(Fav: 1)' =>  '1, 8, 11, 5, 7',
		'unionW(count: 9)' =>  '1, 9, 8, 11, 10, 5, 7, 6, 4',
		'missing(count: 3)' =>  '12, 2, 3',
		'winners' =>  '1, 2, 3, 6, 7, 8, 9, 10, 11, 12',//count: 10
	],
	'2' => [
		/**
		Race 2
		*/
		'Favorite'  =>  '2',
		'favorites' => '2, 4',
		'Win values(Fav: 2)' =>  '2, 7, 6, 5',
		'Win values(Fav: 4)' =>  '4, 3, 5',
		'unionW(count: 6)' =>  '2, 4, 7, 3, 6, 5',
		'missing(count: 1)' =>  '1',
		'winners' =>  '1, 2, 3, 4, 6, 7',//count: 6
	],
	'3' => [
		/**
		Race 3
		*/
		'Favorite'  =>  '8',
		'favorites' => '4, 8',
		'Win values(Fav: 4)' =>  '8, 4, 11, 2, 6',
		'Win values(Fav: 8)' =>  '8, 11, 10, 1',
		'unionW(count: 7)' =>  '8, 4, 11, 2, 10, 6, 1',
		'missing(count: 5)' =>  '3, 5, 9, 12, 7',
		'winners' =>  '3, 4, 5, 8, 9, 11',//count: 6
	],
	'4' => [
		/**
		Race 4
		*/
		'Favorite'  =>  '3',
		'favorites' => '3',
		'Win values(Fav: 3)' =>  '3, 6, 5, 4',
		'unionW(count: 4)' =>  '3, 6, 5, 4',
		'missing(count: 4)' =>  '8, 7, 1, 2',
		'winners' =>  '1, 2, 3, 5, 6, 7, 8',//count: 7
	],
	'5' => [
		/**
		Race 5
		*/
		'Favorite'  =>  '4',
		'favorites' => '4, 10',
		'Win values(Fav: 4)' =>  '4, 6, 2, 3, 1',
		'Win values(Fav: 10)' =>  '2',
		'unionW(count: 5)' =>  '4, 6, 2, 3, 1',
		'missing(count: 7)' =>  '10, 11, 12, 5, 7, 9, 8',
		'winners' =>  '2, 4, 5, 6, 7, 10, 11, 12',//count: 8
	],
	'6' => [
		/**
		Race 6
		*/
		'Favorite'  =>  '2',
		'favorites' => '7, 2',
		'Win values(Fav: 7)' =>  '6, 3, 1, 9, 11',
		'Win values(Fav: 2)' =>  '2, 5, 10, 3, 4, 8',
		'unionW(count: 10)' =>  '2, 6, 5, 10, 3, 1, 9, 4, 8, 11',
		'missing(count: 2)' =>  '7, 12',
		'winners' =>  '1, 2, 3, 4, 5, 6, 7, 10, 12',//count: 9
	],
	'7' => [
		/**
		Race 7
		*/
		'Favorite'  =>  '12',
		'favorites' => '12, 1',
		'Win values(Fav: 12)' =>  '12, 10',
		'Win values(Fav: 1)' =>  '1, 9, 4, 5, 8, 2, 7',
		'unionW(count: 9)' =>  '12, 1, 9, 4, 5, 8, 2, 10, 7',
		'missing(count: 3)' =>  '6, 3, 11',
		'winners' =>  '1, 3, 4, 5, 6, 8, 9, 11, 12',//count: 9
	],
	'8' => [
		/**
		Race 8
		*/
		'Favorite'  =>  '3',
		'favorites' => '3',
		'Win values(Fav: 3)' =>  '5, 6, 12',
		'unionW(count: 3)' =>  '5, 6, 12',
		'missing(count: 9)' =>  '3, 1, 7, 11, 9, 4, 10, 2, 8',
		'winners' =>  '1, 3, 5, 6, 7, 12',//count: 6
	],
	'9' => [
		/**
		Race 9
		*/
		'Favorite'  =>  '5',
		'favorites' => '5',
		'Win values(Fav: 5)' =>  '5, 3, 11, 8, 12',
		'unionW(count: 5)' =>  '5, 3, 11, 8, 12',
		'missing(count: 7)' =>  '10, 9, 2, 4, 6, 1, 7',
		'winners' =>  '2, 3, 4, 5, 9, 10, 11',//count: 7
	],
];
