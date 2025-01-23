<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 3, 4',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '1, 7, 3, 8',
		'interFW' => '1, 3',//count: 2
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 9, 10',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12',//count trio: 11
			'inter' => '1, 3, 4',
			'diff' => '8',//count diff: 1
		],
		'minmax history' => [
			'min win' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
			'max win' => '4, 5, 8, 10',
			'min qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 13',
			'max qin' => '2, 4, 5, 8, 10, 12',
			'min trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
			'max trio' => '1, 2, 3, 4, 5, 8, 9, 10, 12',
		],
		'win amount' => 31,
		'qin amount' => 317,
		'trio amount' => 285,
		'place amount' => [
			1 => 14,
			7 => 37,
			3 => 17,
		],
		'win inter' => '1, 2, 3, 4, 5, 8, 9',
		'win inter 2' => '4, 5',
		'inter inter' => '4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'all fav history' => [[4, 3, 9], [4, 1, 2]],
		'all fav history values' => '1, 2, 3, 4, 9',
		'all inter fav' => '1, 3, 4',
		'bets' => [
			'place(end-favorites )' => '4',
			'place(end-wp )' => '4',
			'super sure bet' => 'super sure place 4',
		],
		'total bets' => 300,
		'wp' => '1, 3, 4',//count wp: 3
		'total won in race 1' => -300,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '6, 5, 2, 13',
		'interFW' => '2, 6',//count: 2
		'suggestions' => [
			'win' => '1, 4, 6, 10, 14',
			'qin' => '1, 2, 4, 6, 7, 9, 10, 14',
			'trio' => '1, 2, 4, 5, 6, 7, 9, 10, 14',//count trio: 9
			'inter' => '6',
			'diff' => '3, 8, 11, 12, 13',//count diff: 5
		],
		'minmax history' => [
			'min win' => '1, 2, 4, 5, 6, 7, 10, 12, 13, 14',
			'max win' => '1, 8, 10',
			'min qin' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 12, 13, 14',
			'max qin' => '1, 3, 5, 6, 7, 8, 10',
			'min trio' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12, 13, 14',
			'max trio' => '1, 3, 5, 6, 7, 8, 10, 12',
		],
		'win amount' => 36.5,
		'qin amount' => 67,
		'trio amount' => 106,
		'place amount' => [
			6 => 16.5,
			5 => 12.5,
			2 => 19,
		],
		'win inter' => '1, 2, 4, 5, 6, 7, 10, 14',
		'win inter 2' => '1, 4, 6, 10, 14',
		'inter inter' => '6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 6',//count wp: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8',
		'official win' => '1, 3, 4, 8',
		'interFW' => '1',//count: 1
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
			'diff' => '1, 2, 3, 4, 5, 6, 7, 8',//count diff: 8
		],
		'minmax history' => [
			'min win' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11',
			'max win' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11',
			'min qin' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 12, 13, 14',
			'max qin' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 12, 13, 14',
			'min trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
			'max trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		],
		'win amount' => 20,
		'qin amount' => 107,
		'trio amount' => 368,
		'place amount' => [
			1 => 10.1,
			3 => 19,
			4 => 36.5,
		],
		'win inter' => '1, 2, 3, 4, 5, 7, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'all fav history' => [[8, 13, 6]],
		'all fav history values' => '6, 8, 13',
		'all inter fav' => '',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '2, 12, 11, 7',
		'interFW' => '',//count: 0
		'suggestions' => [
			'win' => '1, 2, 5, 6, 11',
			'qin' => '1, 2, 4, 5, 6, 10, 11',
			'trio' => '1, 2, 4, 5, 6, 7, 10, 11',//count trio: 8
			'inter' => '1',
			'diff' => '3, 8, 9, 12',//count diff: 4
		],
		'minmax history' => [
			'min win' => '1, 2, 3, 4, 5, 6, 8, 10, 11, 13',
			'max win' => '',
			'min qin' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12, 13',
			'max qin' => '',
			'min trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
			'max trio' => '',
		],
		'win amount' => 45,
		'qin amount' => 228,
		'trio amount' => 1167,
		'place amount' => [
			2 => 17.5,
			12 => 26,
			11 => 52.5,
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 11',
		'win inter 2' => '1, 2, 5, 6, 11',
		'inter inter' => '1',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 7',//count wp: 2
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 5, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '6, 12, 7, 3',
		'interFW' => '12',//count: 1
		'suggestions' => [
			'win' => '2, 3, 4, 5, 6, 10',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 10, 11, 12, 13',//count trio: 11
			'inter' => '4, 5',
			'diff' => '8, 9, 14',//count diff: 3
		],
		'minmax history' => [
			'min win' => '1, 2, 3, 4, 7, 10, 11',
			'max win' => '',
			'min qin' => '1, 2, 3, 4, 6, 7, 8, 10, 11, 12',
			'max qin' => '',
			'min trio' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12, 13',
			'max trio' => '',
		],
		'win amount' => 121,
		'qin amount' => 366.5,
		'trio amount' => 1202,
		'place amount' => [
			6 => 37,
			12 => 20,
			7 => 27.5,
		],
		'win inter' => '2, 3, 4, 5, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 5, 12',//count wp: 3
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 5, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '1, 4, 14, 8',
		'interFW' => '',//count: 0
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 9, 10, 11, 12, 13',
			'qin' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',//count trio: 13
			'inter' => '3, 5, 10',
			'diff' => '14',//count diff: 1
		],
		'minmax history' => [
			'min win' => '2, 3, 5, 6, 7, 9, 10, 12',
			'max win' => '12',
			'min qin' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12',
			'max qin' => '6, 12',
			'min trio' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12',
			'max trio' => '3, 6, 12',
		],
		'win amount' => 134.5,
		'qin amount' => 546.5,
		'trio amount' => 1664,
		'place amount' => [
			1 => 34,
			4 => 27,
			14 => 23,
		],
		'win inter' => '1, 2, 3, 4, 6, 9, 10, 11, 12',
		'win inter 2' => '2, 10, 12',
		'inter inter' => '10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
		'bets' => [
			'place(end-favorites )' => '10',
			'place(end-wp )' => '10',
			'super sure bet' => 'super sure place 10',
		],
		'total bets' => 300,
		'wp' => '3, 5, 10',//count wp: 3
		'total won in race 6' => -300,
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'official win' => '3, 6, 1, 9',
		'interFW' => '',//count: 0
		'suggestions' => [
			'win' => '2',
			'qin' => '2, 4',
			'trio' => '2, 3, 4',//count trio: 3
			'inter' => '',
			'diff' => '1, 5, 6, 7, 8, 9',//count diff: 6
		],
		'minmax history' => [
			'min win' => '2, 4, 8, 10, 11',
			'max win' => '12',
			'min qin' => '2, 3, 4, 5, 8, 9, 10, 11',
			'max qin' => '6, 12',
			'min trio' => '2, 3, 4, 5, 6, 8, 9, 10, 11',
			'max trio' => '6, 9, 12',
		],
		'win amount' => 60,
		'qin amount' => 173.5,
		'trio amount' => 1307,
		'place amount' => [
			3 => 17,
			6 => 18,
			1 => 65.5,
		],
		'win inter' => '2, 3, 6, 7',
		'win inter 2' => '2',
		'inter inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'all fav history' => [[2, 4, 3]],
		'all fav history values' => '2, 3, 4',
		'all inter fav' => '4',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 9',//count wp: 2
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '7, 4, 2, 3',
		'interFW' => '4, 7',//count: 2
		'suggestions' => [
			'win' => '1, 2, 4, 6, 8, 9, 12',
			'qin' => '1, 2, 3, 4, 6, 7, 8, 9, 12',
			'trio' => '1, 2, 3, 4, 6, 7, 8, 9, 10, 12',//count trio: 10
			'inter' => '4',
			'diff' => '5, 11',//count diff: 2
		],
		'minmax history' => [
			'min win' => '2, 4, 6, 8, 12',
			'max win' => '1, 4, 11',
			'min qin' => '1, 2, 3, 4, 5, 6, 7, 8, 12',
			'max qin' => '1, 4, 6, 8, 11',
			'min trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',
			'max trio' => '1, 4, 6, 7, 8, 11',
		],
		'win amount' => 33.5,
		'qin amount' => 51.5,
		'trio amount' => 311,
		'place amount' => [
			7 => 12.5,
			4 => 14.5,
			2 => 51,
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 12',
		'win inter 2' => '1, 2, 4, 6, 8, 9, 12',
		'inter inter' => '4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 7',//count wp: 2
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '2, 10, 1, 3',
		'interFW' => '1',//count: 1
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 8, 9, 10',
			'qin' => '1, 2, 3, 5, 6, 7, 8, 9, 10',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 14',//count trio: 11
			'inter' => '1, 3',
			'diff' => '4, 12, 13',//count diff: 3
		],
		'minmax history' => [
			'min win' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
			'max win' => '2, 3, 4, 5, 7, 9, 10, 12, 13',
			'min qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
			'max qin' => '2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
			'min trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
			'max trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		],
		'win amount' => 111,
		'qin amount' => 1573.5,
		'trio amount' => 1500,
		'place amount' => [
			2 => 26,
			10 => 64.5,
			1 => 14,
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter 2' => '1, 2, 3, 5, 6, 8, 9, 10',
		'inter inter' => '1, 3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3',//count wp: 2
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '13',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '13, 2, 5, 11',
		'interFW' => '13',//count: 1
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
			'diff' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',//count diff: 14
		],
		'minmax history' => [
			'min win' => '',
			'max win' => '',
			'min qin' => '',
			'max qin' => '',
			'min trio' => '',
			'max trio' => '',
		],
		'win amount' => 20,
		'qin amount' => 79.5,
		'trio amount' => 401,
		'place amount' => [
			13 => 11,
			2 => 20.5,
			5 => 41,
		],
		'win inter' => '2, 3, 5, 10, 13, 14',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12, 13, 14',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '13',//count wp: 1
	],
];
//total place end favorites: -200
//total place end wp: -200
//total place wp: 0
//total sure place: -200
//total win: 0
//total place union: 0
//total: -600
