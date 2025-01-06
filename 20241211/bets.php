<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 2, 6, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8',
		'official win' => '6, 7, 5, 4',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 7, 8',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8',//count trio: 8
			'inter' => '1, 2, 6, 7',
			'diff' => '',//count diff: 0
		],
		'win amount' => 29,
		'qin amount' => 79,
		'trio amount' => 300,
		'place amount' => [
			6 => 13.5,
			7 => 16,
			5 => 42.5,
		],
		'win inter' => '1, 2, 5',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2, 6, 7',//count wp: 4
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 10, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 12',
		'official win' => '7, 6, 12, 10',
		'suggestions' => [
			'win' => '7, 10, 12',
			'qin' => '1, 2, 5, 6, 7, 8, 10, 12',
			'trio' => '1, 2, 5, 6, 7, 8, 10, 12',//count trio: 8
			'inter' => '10, 12',
			'diff' => '3, 4',//count diff: 2
		],
		'win amount' => 119.5,
		'qin amount' => 1132.5,
		'trio amount' => 2198,
		'place amount' => [
			7 => 36,
			6 => 54,
			12 => 19,
		],
		'win inter' => '5, 7, 12',
		'win inter 2' => '7, 12',
		'inter inter' => '12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10',
		'bets' => [
			'place(end-favorites )' => '12',
			'1 won(place bet)' => 190,
		],
		'total bets' => 100,
		'wp' => '2, 10',//count wp: 2
		'total won in race 2' => 90,
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '4, 6, 2, 9',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
			'diff' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count diff: 12
		],
		'win amount' => 121,
		'qin amount' => 107,
		'trio amount' => 363,
		'place amount' => [
			4 => 36.5,
			6 => 10.5,
			2 => 33,
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'all fav history' => [[6, 5, 7]],
		'all fav history values' => '5, 6, 7',
		'all inter fav' => '6',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '6',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '3, 8, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '10, 8, 5, 7',
		'suggestions' => [
			'win' => '2, 6',
			'qin' => '2, 3, 4, 6, 10',
			'trio' => '2, 3, 4, 6, 7, 10',//count trio: 6
			'inter' => '',
			'diff' => '1, 5, 8, 9, 11, 12',//count diff: 6
		],
		'win amount' => 34.5,
		'qin amount' => 49.5,
		'trio amount' => 274,
		'place amount' => [
			10 => 16,
			8 => 11,
			5 => 52.5,
		],
		'win inter' => '1, 2, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 8, 10',//count wp: 3
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 5, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '6, 11, 1, 9',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 9',
			'qin' => '1, 2, 3, 4, 5, 6, 9, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 12',//count trio: 10
			'inter' => '2, 5',
			'diff' => '10, 11',//count diff: 2
		],
		'win amount' => 57,
		'qin amount' => 686,
		'trio amount' => 1841,
		'place amount' => [
			6 => 24.5,
			11 => 54.5,
			1 => 33.5,
		],
		'win inter' => '2, 3, 4, 5, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 5, 12',//count wp: 3
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 6, 8, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '7, 4, 1, 2',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '2, 6, 8',
			'diff' => '',//count diff: 0
		],
		'win amount' => 968.5,
		'qin amount' => 6363.5,
		'trio amount' => 11986,
		'place amount' => [
			7 => 211.5,
			4 => 45.5,
			1 => 39.5,
		],
		'win inter' => '1, 2, 6, 8, 9, 10, 11',
		'win inter 2' => '1',
		'inter inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 6, 8, 10',//count wp: 4
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '3, 4, 10, 6',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 8, 10',
			'qin' => '1, 2, 3, 5, 6, 7, 8, 10, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 3, 10',
			'diff' => '',//count diff: 0
		],
		'win amount' => 58,
		'qin amount' => 141.5,
		'trio amount' => 140,
		'place amount' => [
			3 => 16.5,
			4 => 17.5,
			10 => 17,
		],
		'win inter' => '2, 3, 5, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3, 10',//count wp: 3
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 3, 10, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '3, 10, 5, 6',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 7, 8, 10, 11',
			'qin' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 3, 10, 11',
			'diff' => '',//count diff: 0
		],
		'win amount' => 33,
		'qin amount' => 114.5,
		'trio amount' => 1506,
		'place amount' => [
			3 => 14.5,
			10 => 17.5,
			5 => 83,
		],
		'win inter' => '1, 3, 7, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3, 10, 11',//count wp: 4
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 2, 4, 5, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '7, 10, 9, 1',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 2, 4, 5, 6, 8',
			'diff' => '',//count diff: 0
		],
		'win amount' => 77.5,
		'qin amount' => 600,
		'trio amount' => 1378,
		'place amount' => [
			7 => 26,
			10 => 40,
			9 => 28.5,
		],
		'win inter' => '1, 5, 8, 11, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2, 4, 5, 6, 8',//count wp: 6
	],
];
//total place end favorites: 90
//total place end wp: 0
//total place wp: 0
//total sure place: 0
//total win: 0
//total place union: 0
//total: 90
