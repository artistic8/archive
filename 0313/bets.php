<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 3, 4, 6',
		'win hist(Fav 2)' => '1, 2, 3, 5, 8, 9, 11',//count: 7
		'win hist(Fav 3)' => '1, 3, 4, 5, 6, 7',//count: 6
		'win hist(Fav 4)' => '1, 2, 4, 5, 10',//count: 5
		'inter' =>   '1, 5',
		'SURE WIN' => '2, 3, 4, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 4, 6, 7, 11, 12',
		'win hist(Fav 2)' => '1, 2, 8, 12',//count: 4
		'win hist(Fav 4)' => '2, 3, 4, 6, 8, 11',//count: 6
		'win' =>   '1, 2, 3, 4, 6, 8, 11, 12',//count: 8
		'inter' =>   '2, 8',
		'SURE WIN' => '2, 4, 6, 7, 11, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 3',
		'win hist(Fav 1)' => '1, 2, 3, 5, 6, 10, 11',//count: 7
		'win hist(Fav 3)' => '3, 4, 5, 6, 8, 11',//count: 6
		'inter' =>   '3, 5, 6, 11',
		'SURE WIN' => '1, 2, 3',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 8, 10',
		'win hist(Fav 5)' => '1, 3, 5, 12',//count: 4
		'win hist(Fav 8)' => '1, 2, 5, 7, 8, 9, 11, 12',//count: 8
		'inter' =>   '1, 5, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 3',
		'win hist(Fav 3)' => '1, 3, 5, 9',//count: 4
		'win' =>   '1, 3, 5, 9',//count: 4
		'inter' =>   '1, 3, 5, 9',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 4',
		'win hist(Fav 3)' => '1, 2, 3, 9, 10',//count: 5
		'win hist(Fav 4)' => '1, 3, 4, 5, 7, 8, 10',//count: 7
		'inter' =>   '1, 3, 10',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 7, 10',
		'win hist(Fav 7)' => '1, 3, 4, 5',//count: 4
		'win' =>   '1, 3, 4, 5',//count: 4
		'inter' =>   '1, 3, 4, 5',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 4, 5, 6',
		'win hist(Fav 5)' => '3, 4, 5, 8, 11',//count: 5
		'win' =>   '3, 4, 5, 8, 11',//count: 5
		'inter' =>   '3, 4, 5, 8, 11',
		'SURE WIN' => '2, 4, 5, 6',
	],
];
