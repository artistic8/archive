<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 5, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'first half' => '2, 4, 5, 8, 9',
		'seconf half' => '1, 3, 6, 7, 10',
		'suggestions' => [
			'win' => '8',
			'qin' => '3, 5, 8, 9',
			'trio' => '3, 5, 7, 8, 9',//count trio: 5
			'inter' => '8',
			'diff' => '1, 2, 4, 6, 10',//count diff: 5
		],
		'win amount' => 16,
		'qin amount' => 89.5,
		'trio amount' => 81,
		'place amount' => [
			8 => 13,
			9 => 23,
			5 => 12,
		],
		'win inter' => '5, 8',
		'win inter 2' => '8',
		'inter inter' => '8',
		'allValues' => '1, 3, 4, 5, 6',
		'all fav history' => [[8, 5, 3]],
		'all fav history values' => '3, 5, 8',
		'all inter fav' => '5, 8',
		'bets' => [
			'place(end-favorites )' => '8',
			'1 won(place bet)' => 130,
			'place(wp )' => '5',
			'3 won(place bet 5)' => 360,
			'super sure bet' => 'super sure place 8',
			'5 won(place bet)' => 130,
		],
		'total bets' => 500,
		'wp' => '5',//count wp: 1
		'total won in race 1' => 120,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 6, 7, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'first half' => '1, 2, 3, 6, 7, 8, 9',
		'seconf half' => '4, 5, 10',
		'suggestions' => [
			'win' => '4, 6, 7, 9, 10',
			'qin' => '1, 2, 4, 5, 6, 7, 9, 10',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',//count trio: 10
			'inter' => '6, 7, 9',
			'diff' => '',//count diff: 0
		],
		'win amount' => 69,
		'qin amount' => 121,
		'trio amount' => 489,
		'place amount' => [
			8 => 19.5,
			6 => 15.5,
			10 => 39.5,
		],
		'win inter' => '4, 7, 9',
		'allValues' => '',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '',//count wp: 0
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '4, 6, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'first half' => '1, 4, 5, 6, 8, 10, 11',
		'seconf half' => '2, 3, 7, 9, 12',
		'suggestions' => [
			'win' => '2',
			'qin' => '2, 4',
			'trio' => '2, 4, 5',//count trio: 3
			'inter' => '',
			'diff' => '1, 3, 6, 7, 8, 9, 10, 11, 12',//count diff: 9
		],
		'win amount' => 194.5,
		'qin amount' => 2475,
		'trio amount' => 5706,
		'place amount' => [
			7 => 55,
			12 => 82.5,
			4 => 28,
		],
		'win inter' => '1',
		'win inter 2' => '2',
		'inter inter' => '',
		'allValues' => '4, 6, 7, 8, 9',
		'bets' => [
			'win(union)' => '1, 4, 6, 12',
			'7 won(place bet 4)' => 280,
			'7 won(place bet 12)' => 825,
		],
		'total bets' => 800,
		'wp' => '4, 6',//count wp: 2
		'total won in race 3' => 305,
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 2, 3, 4, 5, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'first half' => '1, 2, 3, 4, 5, 6, 9, 10',
		'seconf half' => '7, 8',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 8',
			'qin' => '1, 2, 3, 4, 5, 6, 8, 9, 10',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',//count trio: 10
			'inter' => '1, 2, 3, 4, 5, 6',
			'diff' => '',//count diff: 0
		],
		'win amount' => 61.5,
		'qin amount' => 2228.5,
		'trio amount' => 3182,
		'place amount' => [
			4 => 19.5,
			7 => 154.5,
			2 => 21,
		],
		'win inter' => '',
		'allValues' => '1, 2, 3, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2, 3, 5, 6',//count wp: 5
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 5, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'first half' => '1, 2, 5, 6, 8, 9, 10, 12, 13, 14',
		'seconf half' => '3, 4, 7, 11',
		'suggestions' => [
			'win' => '1, 2, 4',
			'qin' => '1, 2, 3, 4, 5, 9, 11',
			'trio' => '1, 2, 3, 4, 5, 8, 9, 10, 11',//count trio: 9
			'inter' => '1',
			'diff' => '6, 7, 12, 13, 14',//count diff: 5
		],
		'win amount' => 26,
		'qin amount' => 87,
		'trio amount' => 415,
		'place amount' => [
			5 => 15.5,
			2 => 18.5,
			13 => 35.5,
		],
		'win inter' => '2',
		'win inter 2' => '2',
		'inter inter' => '',
		'allValues' => '1, 2, 3, 4, 6, 7, 8, 9',
		'bets' => [
			'win(union)' => '1, 2, 5, 12',
			'1 won(win bet)' => 260,
			'7 won(place bet 2)' => 185,
			'7 won(place bet 5)' => 155,
			'place(wp )' => '1',
		],
		'total bets' => 1100,
		'wp' => '1',//count wp: 1
		'total won in race 5' => -500,
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 5, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'first half' => '1, 2, 3, 4, 5, 9, 13, 14',
		'seconf half' => '6, 7, 8, 10, 11, 12',
		'suggestions' => [
			'win' => '3, 6, 9, 11, 12',
			'qin' => '1, 3, 6, 9, 11, 12',
			'trio' => '1, 3, 5, 6, 7, 9, 10, 11, 12',//count trio: 9
			'inter' => '3, 9',
			'diff' => '2, 4, 8, 13, 14',//count diff: 5
		],
		'win amount' => 107,
		'qin amount' => 437.5,
		'trio amount' => 759,
		'place amount' => [
			2 => 34,
			7 => 28.5,
			9 => 19.5,
		],
		'win inter' => '3, 11',
		'win inter 2' => '3',
		'inter inter' => '3',
		'allValues' => '1, 2, 3, 4, 6, 7, 8, 9, 10',
		'bets' => [
			'place(end-favorites )' => '9',
			'1 won(place bet)' => 195,
		],
		'total bets' => 100,
		'wp' => '3, 9',//count wp: 2
		'total won in race 6' => 95,
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 4, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'first half' => '1, 2, 4, 5, 6, 7, 8, 10, 12, 13',
		'seconf half' => '3, 9, 11, 14',
		'suggestions' => [
			'win' => '1, 2, 5, 6, 7, 10',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 10',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',//count trio: 10
			'inter' => '1, 6',
			'diff' => '9, 12, 13, 14',//count diff: 4
		],
		'win amount' => 712,
		'qin amount' => 1089,
		'trio amount' => 1503,
		'place amount' => [
			3 => 161.5,
			8 => 13.5,
			4 => 21,
		],
		'win inter' => '2',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 4, 6, 8',//count wp: 4
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '3, 4, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12',
		'first half' => '1, 3, 4, 5, 9, 10, 11, 12',
		'seconf half' => '2, 6, 7',
		'suggestions' => [
			'win' => '4, 6',
			'qin' => '1, 4, 6, 9',
			'trio' => '1, 4, 5, 6, 9',//count trio: 5
			'inter' => '4',
			'diff' => '2, 3, 7, 10, 11, 12',//count diff: 6
		],
		'win amount' => 223,
		'qin amount' => 315.5,
		'trio amount' => 790,
		'place amount' => [
			7 => 51,
			4 => 16,
			11 => 22,
		],
		'win inter' => '1',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 9, 10',
		'bets' => [
			'win(union)' => '1, 3, 4, 11',
			'7 won(place bet 4)' => 160,
			'7 won(place bet 11)' => 220,
		],
		'total bets' => 800,
		'wp' => '3, 4',//count wp: 2
		'total won in race 8' => -420,
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 3, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'first half' => '2, 3, 4, 6, 7, 8, 10',
		'seconf half' => '1, 5, 9, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 7, 10, 11, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '2, 3, 6',
			'diff' => '',//count diff: 0
		],
		'win amount' => 64.5,
		'qin amount' => 353,
		'trio amount' => 166,
		'place amount' => [
			8 => 19,
			4 => 30,
			2 => 13,
		],
		'win inter' => '2, 11',
		'win inter 2' => '2',
		'inter inter' => '2',
		'allValues' => '2, 4, 9, 10',
		'bets' => [
			'place(end-favorites )' => '8',
			'1 won(place bet)' => 190,
			'place(wp )' => '2',
			'3 won(place bet 2)' => 390,
		],
		'total bets' => 400,
		'wp' => '2',//count wp: 1
		'total won in race 9' => 180,
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '8, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'first half' => '1, 2, 3, 4, 5, 8, 11',
		'seconf half' => '6, 7, 10, 12',
		'suggestions' => [
			'win' => '1',
			'qin' => '1, 11',
			'trio' => '1, 2, 11',//count trio: 3
			'inter' => '',
			'diff' => '3, 4, 5, 6, 7, 8, 10, 12',//count diff: 8
		],
		'win amount' => 14,
		'qin amount' => 47,
		'trio amount' => 50,
		'place amount' => [
			8 => 10.1,
			3 => 19,
			11 => 13.5,
		],
		'win inter' => '1, 2',
		'win inter 2' => '1',
		'inter inter' => '',
		'allValues' => '1, 3, 5, 6',
		'bets' => [
			'win(union)' => '1, 2, 8, 11',
			'1 won(win bet)' => 140,
			'7 won(place bet 8)' => 101,
			'7 won(place bet 11)' => 135,
		],
		'total bets' => 800,
		'wp' => '',//count wp: 0
		'total won in race 10' => -424,
	],
	'11' => [
		/**
		Race 11
		*/
		'favorites' => '8, 9, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'first half' => '1, 2, 3, 4, 5, 8, 9, 11',
		'seconf half' => '6, 7, 10, 12, 13, 14',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
			'diff' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',//count diff: 14
		],
		'win amount' => 105,
		'qin amount' => 159,
		'trio amount' => 686,
		'place amount' => [
			5 => 27.5,
			3 => 11.5,
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
//total place end favorites: 215
//total place end wp: 0
//total place wp: -150
//total sure place: 30
//total win: -1200
//total place union: 461
//total: -644
