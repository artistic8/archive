<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'Favorite'  =>  '9',
		'favorites' => '2, 9',
		'Trio values(Fav: 2)' =>  '9, 2, 4, 5, 1, 10',
		'Trio values(Fav: 9)' =>  '',
		'interF' =>  '',
		'unionF' =>  '9, 2, 4, 5, 1, 10',
		'WPs'    => '2',
	],
	'2' => [
		/**
		Race 2
		*/
		'Favorite'  =>  '3',
		'favorites' => '8, 3',
		'Trio values(Fav: 8)' =>  '8, 3, 4, 1, 10',
		'Trio values(Fav: 3)' =>  '11, 2, 5, 1, 12',
		'interF' =>  '11, 2, 5, 1, 12',
		'unionF' =>  '8, 3, 11, 4, 2, 5, 1, 10, 12',
		'WPs'    => '8, 11',
	],
	'3' => [
		/**
		Race 3
		*/
		'Favorite'  =>  '1',
		'favorites' => '1, 7',
		'Trio values(Fav: 1)' =>  '3, 2, 5',
		'Trio values(Fav: 7)' =>  '7, 11, 2',
		'interF' =>  '2, 7, 11',
		'unionF' =>  '7, 11, 3, 2, 5',
		'WPs'    => '3, 7, 2',
	],
	'4' => [
		/**
		Race 4
		*/
		'Favorite'  =>  '1',
		'favorites' => '11, 4, 1',
		'Trio values(Fav: 11)' =>  '1, 6, 12',
		'Trio values(Fav: 4)' =>  '4, 3',
		'Trio values(Fav: 1)' =>  '1, 4, 6, 9, 3, 10',
		'interF' =>  '1, 4, 6, 9, 3, 10',
		'unionF' =>  '1, 4, 6, 9, 3, 10, 12',
		'WPs'    => '1, 4',
	],
	'5' => [
		/**
		Race 5
		*/
		'Favorite'  =>  '4',
		'favorites' => '4',
		'Trio values(Fav: 4)' =>  '4, 11, 6, 9, 2',
		'interF' =>  '4, 11, 6, 9, 2',
		'unionF' =>  '4, 11, 6, 9, 2',
		'WPs'    => '4',
	],
	'6' => [
		/**
		Race 6
		*/
		'Favorite'  =>  '1',
		'favorites' => '3, 8, 1',
		'Trio values(Fav: 3)' =>  '1, 7, 3, 9, 12, 10',
		'Trio values(Fav: 8)' =>  '12, 2, 11',
		'Trio values(Fav: 1)' =>  '',
		'interF' =>  '',
		'unionF' =>  '1, 7, 3, 9, 12, 10, 2, 11',
		'places' => '12',
		'WPs'    => '3, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'Favorite'  =>  '5',
		'favorites' => '3, 5',
		'Trio values(Fav: 3)' =>  '5, 3, 9',
		'Trio values(Fav: 5)' =>  '6, 10, 1',
		'interF' =>  '6, 10, 1',
		'unionF' =>  '5, 3, 6, 9, 10, 1',
		'WPs'    => '3, 6',
	],
	'8' => [
		/**
		Race 8
		*/
		'Favorite'  =>  '5',
		'favorites' => '10, 8, 5',
		'Trio values(Fav: 10)' =>  '5, 4, 10, 2, 9',
		'Trio values(Fav: 8)' =>  '',
		'Trio values(Fav: 5)' =>  '5, 8, 4, 10, 11, 6',
		'interF' =>  '5, 8, 4, 10, 11, 6',
		'unionF' =>  '5, 8, 4, 10, 11, 2, 9, 6',
		'WPs'    => '10, 5',
	],
	'9' => [
		/**
		Race 9
		*/
		'Favorite'  =>  '1',
		'favorites' => '5, 1, 11, 9',
		'Trio values(Fav: 5)' =>  '8, 9, 5',
		'Trio values(Fav: 1)' =>  '1, 8, 6, 9, 5, 7',
		'Trio values(Fav: 11)' =>  '4, 11, 3',
		'Trio values(Fav: 9)' =>  '',
		'interF' =>  '',
		'unionF' =>  '1, 8, 4, 6, 9, 11, 3, 5, 7',
		'inter' =>  '1',
		'Place'  =>  '1',
		'places' => '1',
		'WPs'    => '5, 1, 11',
	],
];
