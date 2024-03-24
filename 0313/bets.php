<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 3, 4, 6',
		'win hist(Fav 2)' => '1, 2, 3, 5, 8, 9, 11',//count: 7
		'fibo seq(Fav 2)' => '3, 5, 8',//count: 3
		'win hist(Fav 3)' => '1, 3, 4, 5, 6, 7',//count: 6
		'fibo seq(Fav 3)' => '3, 5',//count: 2
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 4',
		'win hist(Fav 4)' => '3, 4, 5, 7',//count: 4
		'fibo seq(Fav 4)' => '3, 5',//count: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 4, 6, 7, 11, 12',
		'win hist(Fav 4)' => '2, 3, 4, 6, 8, 11',//count: 6
		'fibo seq(Fav 4)' => '3, 8',//count: 2
		'win hist(Fav 7)' => '3, 5, 6, 7, 11, 12',//count: 6
		'fibo seq(Fav 7)' => '3, 5',//count: 2
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 3',
		'win hist(Fav 1)' => '1, 2, 3, 5, 6, 10, 11',//count: 7
		'fibo seq(Fav 1)' => '3, 5',//count: 2
		'win hist(Fav 3)' => '3, 4, 5, 6, 8, 11',//count: 6
		'fibo seq(Fav 3)' => '3, 5, 8',//count: 3
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5, 8, 10',
		'win hist(Fav 5)' => '1, 3, 5, 12',//count: 4
		'fibo seq(Fav 5)' => '3, 5',//count: 2
		'win hist(Fav 8)' => '1, 2, 5, 7, 8, 9, 11, 12',//count: 8
		'fibo seq(Fav 8)' => '5, 8',//count: 2
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 3',
		'win hist(Fav 3)' => '1, 3, 5, 9',//count: 4
		'fibo seq(Fav 3)' => '3, 5',//count: 2
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 4',
		'win hist(Fav 4)' => '1, 3, 4, 5, 7, 8, 10',//count: 7
		'fibo seq(Fav 4)' => '3, 5, 8',//count: 3
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 7, 10',
		'win hist(Fav 7)' => '1, 3, 4, 5',//count: 4
		'fibo seq(Fav 7)' => '3, 5',//count: 2
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 4, 5, 6',
		'win hist(Fav 5)' => '3, 4, 5, 8, 11',//count: 5
		'fibo seq(Fav 5)' => '3, 5, 8',//count: 3
	],
		//'shit' => '1, 2, 3, 4, 5, 7, 8',
];
