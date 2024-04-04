<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '5',
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 1, 14',
		'inter(fav 1, fav 2)' => '2, 6, 7, 9',
		'union' => '2, 6, 7, 9',
		'win/qin/trio' => '1, 2, 14',
		'win' => '6, 7, 9',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '4, 10, 12',
		'inter(fav 4, fav 10)' => '4',
		'inter(fav 4, fav 12)' => '3',
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 2, 10',
		'inter(fav 1, fav 2)' => '1, 7',
		'inter(fav 1, fav 10)' => '4',
		'inter(fav 2, fav 10)' => '2',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 12',
		'inter(fav 1, fav 12)' => '1, 12',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '7, 2, 5',
		'inter(fav 2, fav 5)' => '2, 5',
		'inter(fav 2, fav 7)' => '2, 4, 7',
		'inter(fav 5, fav 7)' => '2',
		'union' => '2, 4, 5, 7',
		'win/qin/trio' => '2, 5, 7',
		'win' => '4',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 6',
		'inter(fav 2, fav 6)' => '4, 6, 11',
		'union' => '4, 6, 11',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '11, 1, 2',
		'additional favorites' => '4',
		'inter(fav 1, fav 2)' => '6',
		'inter(fav 1, fav 4)' => '6, 7',
		'inter(fav 1, fav 11)' => '12',
		'inter(fav 2, fav 4)' => '4, 6',
		'union' => '4, 6, 7, 12',
		'win/qin/trio' => '1, 2, 4, 11',
		'win' => '6, 7, 12',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '2, 8',
	],
];
