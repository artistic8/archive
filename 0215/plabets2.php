<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Favorite'  =>  '9',
		'favorites' => '2, 9',
		'Trio values(Fav: 2)' =>  '9, 2, 1, 4, 5, 10',
		'Trio values(Fav: 9)' =>  '',
		'interF(count: 0)' =>  '',
		'unionF(count: 6)' =>  '9, 2, 1, 4, 5, 10',
		'WPs'    => '2',
	],
	'2' => [
		/**
		Race 2
		*/
		'Favorite'  =>  '3',
		'favorites' => '8, 3',
		'Trio values(Fav: 8)' =>  '3, 8, 4, 1, 10',
		'Trio values(Fav: 3)' =>  '11, 2, 5, 1, 12',
		'interF(count: 1)' =>  '1',
		'unionF(count: 9)' =>  '3, 8, 11, 4, 2, 5, 1, 10, 12',
		'WPs'    => '8, 11, 1',
	],
	'3' => [
		/**
		Race 3
		*/
		'Favorite'  =>  '1',
		'favorites' => '1, 7',
		'Trio values(Fav: 1)' =>  '3, 2, 5',
		'Trio values(Fav: 7)' =>  '7, 11, 2',
		'interF(count: 1)' =>  '2',
		'unionF(count: 5)' =>  '7, 11, 3, 2, 5',
		'WPs'    => '3, 7, 2',
	],
	'4' => [
		/**
		Race 4
		*/
		'Favorite'  =>  '11',
		'favorites' => '11, 4, 1',
		'Trio values(Fav: 11)' =>  '1, 6, 12',
		'Trio values(Fav: 4)' =>  '4, 3',
		'Trio values(Fav: 1)' =>  '1, 4, 6, 9, 3, 10',
		'interF(count: 0)' =>  '',
		'unionF(count: 7)' =>  '1, 4, 6, 9, 3, 10, 12',
		'WPs'    => '1, 4',
	],
	'5' => [
		/**
		Race 5
		*/
		'Favorite'  =>  '4',
		'favorites' => '4',
		'Trio values(Fav: 4)' =>  '4, 11, 6, 9, 2',
		'interF(count: 5)' =>  '4, 11, 6, 9, 2',
		'unionF(count: 5)' =>  '4, 11, 6, 9, 2',
		'WPs'    => '4',
	],
	'6' => [
		/**
		Race 6
		*/
		'Favorite'  =>  '1',
		'favorites' => '3, 8, 1',
		'Trio values(Fav: 3)' =>  '1, 7, 3, 12, 9, 10',
		'Trio values(Fav: 8)' =>  '12, 2, 11',
		'Trio values(Fav: 1)' =>  '',
		'interF(count: 0)' =>  '',
		'unionF(count: 11)' =>  '1, 7, 3, 12, 9, 10, 4, 2, 5, 6, 11',
		'places' => '12',
		'WPs'    => '3, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'Favorite'  =>  '3',
		'favorites' => '3, 5',
		'Trio values(Fav: 3)' =>  '3, 5, 9',
		'Trio values(Fav: 5)' =>  '6, 10, 1',
		'interF(count: 0)' =>  '',
		'unionF(count: 6)' =>  '3, 5, 9, 6, 10, 1',
		'WPs'    => '3, 6',
	],
	'8' => [
		/**
		Race 8
		*/
		'Favorite'  =>  '8',
		'favorites' => '10, 8, 5',
		'Trio values(Fav: 10)' =>  '5, 4, 10, 2, 9',
		'Trio values(Fav: 8)' =>  '',
		'Trio values(Fav: 5)' =>  '8, 5, 4, 10, 11, 6',
		'interF(count: 0)' =>  '',
		'unionF(count: 8)' =>  '8, 5, 4, 10, 11, 2, 9, 6',
		'WPs'    => '10, 5',
	],
	'9' => [
		/**
		Race 9
		*/
		'Favorite'  =>  '12',
		'favorites' => '5, 1, 11, 9, 12',
		'Trio values(Fav: 5)' =>  '8, 9, 5',
		'Trio values(Fav: 1)' =>  '8, 1, 6, 9, 5, 7',
		'Trio values(Fav: 11)' =>  '11, 4, 3',
		'Trio values(Fav: 9)' =>  '',
		'Trio values(Fav: 12)' =>  '1, 6, 5',
		'interF(count: 0)' =>  '',
		'unionF(count: 9)' =>  '11, 8, 1, 6, 4, 9, 3, 5, 7',
		'places' => '1',
		'WPs'    => '5, 1, 11',
	],
];
