<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '6, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'official win' => '6, 7, 4, 2',
		'interFW' => '6, 7',//count: 2
		'suggestions' => [
			'win' => '2, 5, 6, 7, 9',
			'qin' => '2, 4, 5, 6, 7, 9',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 9',//count trio: 8
			'inter' => '6, 7',
			'diff' => '8',//count diff: 1
		],
		'win amount' => 89,
		'qin amount' => 49,
		'trio amount' => 66,
		'place amount' => [
			6 => 19.5,
			7 => 10.1,
			4 => 17,
		],
		'win inter' => '1, 2, 5, 6, 7, 9',
		'win inter 2' => '2, 5, 6, 7, 9',
		'inter inter' => '6, 7',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '6, 7',//count wp: 2
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 4, 10, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '7, 1, 5, 11',
		'interFW' => '',//count: 0
		'suggestions' => [
			'win' => '2, 4, 5, 7, 9, 10, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '2, 4, 10',
			'diff' => '',//count diff: 0
		],
		'win amount' => 525,
		'qin amount' => 4228,
		'trio amount' => 12724,
		'place amount' => [
			7 => 114,
			1 => 41.5,
			5 => 35,
		],
		'win inter' => '4, 7',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 4, 10, 11',//count wp: 4
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '9, 13',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '9, 10, 13, 1',
		'interFW' => '9, 13',//count: 2
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
			'diff' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',//count diff: 14
		],
		'win amount' => 43,
		'qin amount' => 505.5,
		'trio amount' => 286,
		'place amount' => [
			9 => 16,
			10 => 45.5,
			13 => 13,
		],
		'win inter' => '2, 4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
			'win(union)' => '2, 4, 9, 13',
			'1 won(win bet)' => 430,
			'7 won(place bet 9)' => 160,
			'7 won(place bet 13)' => 130,
		],
		'total bets' => 800,
		'wp' => '9',//count wp: 1
		'total won in race 3' => -80,
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '3, 4',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'official win' => '3, 4, 10, 5',
		'interFW' => '3, 4',//count: 2
		'suggestions' => [
			'win' => '1, 2, 4',
			'qin' => '1, 2, 3, 4, 7',
			'trio' => '1, 2, 3, 4, 5, 6, 7',//count trio: 7
			'inter' => '4',
			'diff' => '8, 9, 10',//count diff: 3
		],
		'win amount' => 27.5,
		'qin amount' => 34,
		'trio amount' => 67,
		'place amount' => [
			3 => 11.5,
			4 => 12.5,
			10 => 18.5,
		],
		'win inter' => '1, 2, 4',
		'win inter 2' => '1, 2, 4',
		'inter inter' => '4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 4',//count wp: 2
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '5, 6, 12, 9',
		'interFW' => '5',//count: 1
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
			'diff' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count diff: 12
		],
		'win amount' => 23,
		'qin amount' => 106.5,
		'trio amount' => 388,
		'place amount' => [
			5 => 10.1,
			6 => 26,
			12 => 35,
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 9, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'all fav history' => [[5, 2, 6], [3, 2, 1]],
		'all fav history values' => '1, 2, 3, 5, 6',
		'all inter fav' => '5',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '5',//count wp: 1
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 5, 9, 14',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '6, 11, 12, 14',
		'interFW' => '',//count: 0
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 9, 10, 11, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',//count trio: 13
			'inter' => '3, 5, 9',
			'diff' => '13',//count diff: 1
		],
		'win amount' => 75.5,
		'qin amount' => 656.5,
		'trio amount' => 5158,
		'place amount' => [
			6 => 22,
			11 => 44,
			12 => 55.5,
		],
		'win inter' => '',
		'win inter 2' => '2, 3',
		'inter inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 5, 9',//count wp: 3
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 7, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '6, 9, 3, 12',
		'interFW' => '3, 9',//count: 2
		'suggestions' => [
			'win' => '3, 6, 7, 10',
			'qin' => '3, 5, 6, 7, 8, 10',
			'trio' => '2, 3, 4, 5, 6, 7, 8, 9, 10',//count trio: 9
			'inter' => '3, 7',
			'diff' => '1, 11, 12',//count diff: 3
		],
		'win amount' => 381,
		'qin amount' => 1684,
		'trio amount' => 2221,
		'place amount' => [
			6 => 85,
			9 => 27.5,
			3 => 20,
		],
		'win inter' => '2, 3, 7',
		'win inter 2' => '7',
		'inter inter' => '7',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'all fav history' => [[7, 3, 9]],
		'all fav history values' => '3, 7, 9',
		'all inter fav' => '3, 7, 9',
		'bets' => [
			'place(end-favorites )' => '9',
			'1 won(place bet)' => 275,
			'place(end-wp )' => '9',
			'2 won(place bet)' => 275,
			'super sure bet' => 'super sure place 9',
			'5 won(place bet)' => 275,
		],
		'total bets' => 300,
		'wp' => '3, 7, 9',//count wp: 3
		'total won in race 7' => 525,
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 3, 6, 7, 8',
		'runners' => '1, 2, 3, 5, 6, 7, 8',
		'official win' => '6, 8, 3, 7',
		'interFW' => '3, 6, 8',//count: 3
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 7, 8',
			'qin' => '1, 2, 3, 5, 6, 7, 8',
			'trio' => '1, 2, 3, 5, 6, 7, 8',//count trio: 7
			'inter' => '2, 3, 6, 7, 8',
			'diff' => '',//count diff: 0
		],
		'win amount' => 35,
		'qin amount' => 46,
		'trio amount' => 87,
		'place amount' => [
			6 => 15.5,
			8 => 11,
			3 => 17.5,
		],
		'win inter' => '2, 5, 6, 8',
		'allValues' => '1, 2, 3, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 3, 6, 7, 8',//count wp: 5
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '8, 3, 9, 6',
		'interFW' => '3',//count: 1
		'suggestions' => [
			'win' => '2, 3, 5, 6, 8, 10, 11',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 14',//count trio: 12
			'inter' => '2, 3',
			'diff' => '12, 13',//count diff: 2
		],
		'win amount' => 91,
		'qin amount' => 111,
		'trio amount' => 203,
		'place amount' => [
			8 => 26.5,
			3 => 11.5,
			9 => 21.5,
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter 2' => '2, 3, 5, 6, 8, 10, 11',
		'inter inter' => '2, 3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 3',//count wp: 2
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 6, 10, 13, 14',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '10, 2, 8, 12',
		'interFW' => '10',//count: 1
		'suggestions' => [
			'win' => '1, 2, 3, 7, 10, 11, 14',
			'qin' => '1, 2, 3, 5, 7, 9, 10, 11, 12, 14',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',//count trio: 13
			'inter' => '1, 10, 14',
			'diff' => '4',//count diff: 1
		],
		'win amount' => 89,
		'qin amount' => 1102,
		'trio amount' => 12219,
		'place amount' => [
			10 => 30,
			2 => 59.5,
			8 => 122.5,
		],
		'win inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 6, 10',//count wp: 3
	],
	'11' => [
		/**
		Race 11
		*/
		'favorites' => '2, 5, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '5, 6, 1, 9',
		'interFW' => '5',//count: 1
		'suggestions' => [
			'win' => '9, 10',
			'qin' => '4, 9, 10',
			'trio' => '4, 5, 7, 9, 10',//count trio: 5
			'inter' => '9',
			'diff' => '1, 2, 3, 6, 8, 11, 12, 13, 14',//count diff: 9
		],
		'win amount' => 88,
		'qin amount' => 2260,
		'trio amount' => 7677,
		'place amount' => [
			5 => 24.5,
			6 => 130.5,
			1 => 36,
		],
		'win inter' => '',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '',//count wp: 0
	],
];
//total place end favorites: 175
//total place end wp: 175
//total place wp: 0
//total sure place: 175
//total win: 30
//total place union: -110
//total: 445
