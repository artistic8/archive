<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '7, 9, 4, 1',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 8, 9, 11',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 6',
			'diff' => '',//count diff: 0
		],
		'win amount' => 62.5,
		'qin amount' => 222.5,
		'trio amount' => 655,
		'place amount' => [
			7 => 19.5,
			9 => 29.5,
			4 => 27.5,
		],
		'win inter' => '1, 5, 6, 9, 11',
		'win inter 2' => '9',
		'inter inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'all fav history' => [[9, 7, 11]],
		'all fav history values' => '7, 9, 11',
		'all inter fav' => '7',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 6, 7',//count wp: 3
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '4, 8',
		'runners' => '1, 2, 3, 4, 6, 7, 8, 9, 10, 11',
		'official win' => '3, 8, 4, 11',
		'suggestions' => [
			'win' => '2, 4',
			'qin' => '1, 2, 4, 10',
			'trio' => '1, 2, 3, 4, 6, 7, 10, 11',//count trio: 8
			'inter' => '4',
			'diff' => '8, 9',//count diff: 2
		],
		'win amount' => 180.5,
		'qin amount' => 279,
		'trio amount' => 436,
		'place amount' => [
			3 => 48,
			8 => 11.5,
			4 => 22.5,
		],
		'win inter' => '2, 4, 9',
		'win inter 2' => '2, 4',
		'inter inter' => '4',
		'allValues' => '1, 2, 3, 4, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 8',//count wp: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '7, 11, 2, 9',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
			'diff' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count diff: 12
		],
		'win amount' => 31,
		'qin amount' => 474.5,
		'trio amount' => 333,
		'place amount' => [
			7 => 15,
			11 => 70,
			2 => 11,
		],
		'win inter' => '1, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'all fav history' => [[6, 1, 12], [1, 4, 10], [7, 4, 6]],
		'all fav history values' => '1, 4, 6, 7, 10, 12',
		'all inter fav' => '7',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '7',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 3, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '6, 1, 12, 3',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 10, 11',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',//count trio: 11
			'inter' => '1, 3, 11',
			'diff' => '12',//count diff: 1
		],
		'win amount' => 136,
		'qin amount' => 141,
		'trio amount' => 1098,
		'place amount' => [
			6 => 41,
			1 => 12,
			12 => 52,
		],
		'win inter' => '1, 2, 3, 11',
		'win inter 2' => '1, 2, 3',
		'inter inter' => '1, 3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'all fav history' => [[3, 1, 6]],
		'all fav history values' => '1, 3, 6',
		'all inter fav' => '1, 3',
		'bets' => [
			'place(end-favorites )' => '11',
			'place(end-wp )' => '11',
			'super sure bet' => 'super sure place 11',
		],
		'total bets' => 300,
		'wp' => '1, 3, 11',//count wp: 3
		'total won in race 4' => -300,
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 2, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '1, 10, 4, 2',
		'suggestions' => [
			'win' => '1, 2, 4, 5, 6, 7, 8, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 2, 7',
			'diff' => '',//count diff: 0
		],
		'win amount' => 71,
		'qin amount' => 199,
		'trio amount' => 372,
		'place amount' => [
			1 => 25.5,
			10 => 16.5,
			4 => 21,
		],
		'win inter' => '1, 2, 3, 4, 6, 12',
		'win inter 2' => '6',
		'inter inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2, 7',//count wp: 3
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '8, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '12, 2, 11, 10',
		'suggestions' => [
			'win' => '5',
			'qin' => '1, 5, 11',
			'trio' => '1, 5, 8, 11',//count trio: 4
			'inter' => '',
			'diff' => '2, 3, 4, 6, 7, 9, 10, 12',//count diff: 8
		],
		'win amount' => 101.5,
		'qin amount' => 1407.5,
		'trio amount' => 1734,
		'place amount' => [
			12 => 28.5,
			2 => 71.5,
			11 => 18,
		],
		'win inter' => '5, 11',
		'win inter 2' => '5',
		'inter inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
			'place(wp )' => '8',
		],
		'total bets' => 300,
		'wp' => '8',//count wp: 1
		'total won in race 6' => -300,
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '2, 3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '9, 3, 5, 8',
		'suggestions' => [
			'win' => '5, 10',
			'qin' => '1, 5, 6, 7, 10',
			'trio' => '1, 2, 3, 5, 6, 7, 10',//count trio: 7
			'inter' => '',
			'diff' => '4, 8, 9, 11, 12',//count diff: 5
		],
		'win amount' => 79.5,
		'qin amount' => 202,
		'trio amount' => 302,
		'place amount' => [
			9 => 23,
			3 => 19,
			5 => 27,
		],
		'win inter' => '1, 2, 5, 7, 10',
		'win inter 2' => '5, 10',
		'inter inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'all fav history' => [[5, 1, 3]],
		'all fav history values' => '1, 3, 5',
		'all inter fav' => '3',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 3',//count wp: 2
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '4, 5, 9, 2',
		'suggestions' => [
			'win' => '7',
			'qin' => '4, 7',
			'trio' => '4, 7, 11',//count trio: 3
			'inter' => '',
			'diff' => '1, 2, 3, 5, 6, 8, 9, 10, 12',//count diff: 9
		],
		'win amount' => 20,
		'qin amount' => 66,
		'trio amount' => 305,
		'place amount' => [
			4 => 12.5,
			5 => 21.5,
			9 => 38.5,
		],
		'win inter' => '1, 3, 7, 8',
		'win inter 2' => '7',
		'inter inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 11',//count wp: 2
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 3, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '8, 5, 9, 3',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 9, 10, 12',
			'qin' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 11
			'inter' => '1, 3, 5',
			'diff' => '4',//count diff: 1
		],
		'win amount' => 102,
		'qin amount' => 510,
		'trio amount' => 4121,
		'place amount' => [
			8 => 26.5,
			5 => 26.5,
			9 => 50.5,
		],
		'win inter' => '1, 3, 4, 5, 6, 9, 10, 12',
		'win inter 2' => '1, 5',
		'inter inter' => '1, 5',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'place(end-favorites )' => '5',
			'1 won(place bet)' => 265,
			'place(end-wp )' => '5',
			'2 won(place bet)' => 265,
			'super sure bet' => 'super sure place 5',
			'5 won(place bet)' => 265,
		],
		'total bets' => 300,
		'wp' => '1, 3, 5',//count wp: 3
		'total won in race 9' => 495,
	],
];
//total place end favorites: 65
//total place end wp: 65
//total place wp: -300
//total sure place: 65
//total win: 0
//total place union: 0
//total: -105
