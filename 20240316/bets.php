<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 3, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'first half' => '1, 3, 4, 8, 9, 10',
		'seconf half' => '2, 5, 6, 7, 11, 12',
		'suggestions' => [
			'win' => '3, 4, 5, 8, 10',
			'qin' => '1, 3, 4, 5, 8, 10',
			'trio' => '1, 2, 3, 4, 5, 7, 8, 9, 10',//count trio: 9
			'inter' => '3, 10',
			'diff' => '6, 11, 12',//count diff: 3
		],
		'win amount' => 73,
		'qin amount' => 286,
		'trio amount' => 1607,
		'place amount' => [
			4 => 26,
			10 => 21.5,
			5 => 52,
		],
		'win inter' => '3, 4, 5, 8',
		'allValues' => '1, 3, 4, 5, 6, 7',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3',//count wp: 2
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '4, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'first half' => '1, 2, 3, 4, 5, 6, 9, 10, 11',
		'seconf half' => '7, 8, 12',
		'suggestions' => [
			'win' => '4',
			'qin' => '1, 4',
			'trio' => '1, 4, 6',//count trio: 3
			'inter' => '4',
			'diff' => '2, 3, 5, 7, 8, 9, 10, 11, 12',//count diff: 9
		],
		'win amount' => 63.5,
		'qin amount' => 222.5,
		'trio amount' => 895,
		'place amount' => [
			4 => 21.5,
			10 => 27.5,
			3 => 34.5,
		],
		'win inter' => '4, 7, 9, 10',
		'win inter 2' => '4',
		'inter inter' => '4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 9',//count wp: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'first half' => '1, 2, 3, 4, 7, 8, 9, 10',
		'seconf half' => '5, 6, 11, 12',
		'suggestions' => [
			'win' => '1, 3, 7',
			'qin' => '1, 3, 7, 8',
			'trio' => '1, 3, 5, 7, 8, 11',//count trio: 6
			'inter' => '1, 3',
			'diff' => '2, 4, 6, 9, 10, 12',//count diff: 6
		],
		'win amount' => 83,
		'qin amount' => 620.5,
		'trio amount' => 826,
		'place amount' => [
			9 => 22,
			4 => 34,
			1 => 18,
		],
		'win inter' => '1, 2, 3, 5, 7, 11',
		'win inter 2' => '1, 3, 7',
		'inter inter' => '1, 3',
		'allValues' => '3, 4, 5, 6, 7, 8, 9, 10',
		'all fav history' => [[3, 8, 1], [7, 1, 5]],
		'all fav history values' => '1, 3, 5, 7, 8',
		'all inter fav' => '1, 3',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 6, 8, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'first half' => '1, 2, 3, 6, 8, 9, 10, 11, 13, 14',
		'seconf half' => '4, 5, 7, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 11',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',//count trio: 13
			'inter' => '1, 6, 11',
			'diff' => '14',//count diff: 1
		],
		'win amount' => 168,
		'qin amount' => 5059,
		'trio amount' => 3940,
		'place amount' => [
			10 => 33.5,
			5 => 152.5,
			1 => 13,
		],
		'win inter' => '3, 5, 11',
		'win inter 2' => '11',
		'inter inter' => '11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
			'place(end-favorites )' => '11',
		],
		'total bets' => 100,
		'wp' => '1, 6, 8, 11',//count wp: 4
		'total won in race 4' => -100,
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 10, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'first half' => '1, 2, 3, 4, 7, 9, 10, 11, 12',
		'seconf half' => '5, 6, 8',
		'suggestions' => [
			'win' => '1, 4, 10',
			'qin' => '1, 4, 10, 11, 12',
			'trio' => '1, 2, 4, 6, 10, 11, 12',//count trio: 7
			'inter' => '4, 10',
			'diff' => '3, 5, 7, 8, 9',//count diff: 5
		],
		'win amount' => 95.5,
		'qin amount' => 800,
		'trio amount' => 960,
		'place amount' => [
			3 => 41,
			11 => 40,
			10 => 18,
		],
		'win inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 10',//count wp: 2
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 6, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'first half' => '1, 2, 3, 4, 6, 9, 10, 11, 12',
		'seconf half' => '5, 7, 8',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 9, 11',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '2, 6',
			'diff' => '',//count diff: 0
		],
		'win amount' => 35.5,
		'qin amount' => 193.5,
		'trio amount' => 430,
		'place amount' => [
			2 => 14.5,
			11 => 32.5,
			12 => 20,
		],
		'win inter' => '1, 4, 9, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 6',//count wp: 2
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4, 6, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'first half' => '1, 3, 4, 6, 7, 10, 11',
		'seconf half' => '2, 5, 8, 9, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 10',
			'qin' => '1, 2, 3, 4, 5, 6, 8, 10',
			'trio' => '1, 2, 3, 4, 5, 6, 8, 10, 11',//count trio: 9
			'inter' => '6',
			'diff' => '7, 9, 12',//count diff: 3
		],
		'win amount' => 69,
		'qin amount' => 231,
		'trio amount' => 521,
		'place amount' => [
			11 => 26.5,
			3 => 19,
			6 => 25,
		],
		'win inter' => '1, 2, 3, 7',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 6, 7',//count wp: 3
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 5, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'first half' => '1, 2, 5, 7, 10, 11, 12, 14',
		'seconf half' => '3, 4, 6, 8, 9, 13',
		'suggestions' => [
			'win' => '1, 2, 5, 6, 10, 12, 13, 14',
			'qin' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',//count trio: 14
			'inter' => '1, 5',
			'diff' => '',//count diff: 0
		],
		'win amount' => 47.5,
		'qin amount' => 222.5,
		'trio amount' => 536,
		'place amount' => [
			5 => 19,
			4 => 24.5,
			1 => 30,
		],
		'win inter' => '1, 5, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 5, 7',//count wp: 3
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '5, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'first half' => '5, 6, 7, 8, 9, 10',
		'seconf half' => '1, 2, 3, 4, 11',
		'suggestions' => [
			'win' => '5',
			'qin' => '5, 7, 10, 11',
			'trio' => '2, 5, 7, 10, 11',//count trio: 5
			'inter' => '5',
			'diff' => '1, 3, 4, 6, 8, 9',//count diff: 6
		],
		'win amount' => 24.5,
		'qin amount' => 52.5,
		'trio amount' => 121,
		'place amount' => [
			10 => 13.5,
			6 => 15.5,
			8 => 22,
		],
		'win inter' => '5',
		'win inter 2' => '5',
		'inter inter' => '5',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '5, 10',//count wp: 2
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '7, 9, 14',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'first half' => '1, 2, 3, 4, 6, 7, 8, 9, 13, 14',
		'seconf half' => '5, 10, 11, 12',
		'suggestions' => [
			'win' => '3, 10',
			'qin' => '1, 3, 10, 12',
			'trio' => '1, 3, 8, 10, 12',//count trio: 5
			'inter' => '',
			'diff' => '2, 4, 5, 6, 7, 9, 11, 13, 14',//count diff: 9
		],
		'win amount' => 69,
		'qin amount' => 149.5,
		'trio amount' => 590,
		'place amount' => [
			2 => 24,
			9 => 17.5,
			4 => 31.5,
		],
		'win inter' => '3, 10',
		'allValues' => '1, 3, 5, 6',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '',//count wp: 0
	],
];
//total place end favorites: -100
//total place end wp: 0
//total place wp: 0
//total sure place: 0
//total win: 0
//total place union: 0
//total: -100
