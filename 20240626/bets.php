<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 5, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'official win' => '8, 5, 3, 4',
		'suggestions' => [
			'win' => '1, 5, 8',
			'qin' => '1, 2, 3, 4, 5, 8, 9',
			'trio' => '1, 2, 3, 4, 5, 7, 8, 9',//count trio: 8
			'inter' => '5, 8',
			'diff' => '6, 10',//count diff: 2
		],
		'win amount' => 24.5,
		'qin amount' => 68,
		'trio amount' => 246,
		'place amount' => [
			8 => 13,
			5 => 19,
			3 => 37,
		],
		'win inter' => '1, 5, 8',
		'win inter 2' => '8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
			'all fav history' => [[8, 9, 5]],
			'all fav history values' => '5, 8, 9',
		'bets' => [
			'place(end-favorites )' => '8',
			'1 won(place bet)' => 130,
			'place(end-wp )' => '8',
			'2 won(place bet)' => 130,
			'super sure bet' => 'super sure place 8',
			'5 won(place bet)' => 130,
		],
		'total bets' => 300,
		'wp' => '2, 5, 8',//count wp: 3
		'total won in race 1' => 90,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '5, 6, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '5, 9, 1, 3',
		'suggestions' => [
			'win' => '3, 4, 5, 7, 9, 10, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',//count trio: 11
			'inter' => '5, 10',
			'diff' => '11',//count diff: 1
		],
		'win amount' => 21.5,
		'qin amount' => 74.5,
		'trio amount' => 128,
		'place amount' => [
			5 => 10.1,
			9 => 22,
			1 => 18.5,
		],
		'win inter' => '4, 7, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '5, 6, 10',//count wp: 3
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '1, 11, 7, 2',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
			'diff' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count diff: 12
		],
		'win amount' => 52,
		'qin amount' => 255.5,
		'trio amount' => 686,
		'place amount' => [
			1 => 19,
			11 => 36,
			7 => 25,
		],
		'win inter' => '1, 2, 3, 4, 5, 7, 10, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 6',//count wp: 2
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '3, 2, 6, 7',
		'suggestions' => [
			'win' => '1, 2, 11',
			'qin' => '1, 2, 3, 9, 11',
			'trio' => '1, 2, 3, 7, 9, 10, 11',//count trio: 7
			'inter' => '2',
			'diff' => '4, 5, 6, 8, 12',//count diff: 5
		],
		'win amount' => 60.5,
		'qin amount' => 72.5,
		'trio amount' => 492,
		'place amount' => [
			3 => 23,
			2 => 11,
			6 => 59,
		],
		'win inter' => '1, 2, 11, 12',
		'win inter 2' => '1, 2, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 12',//count wp: 2
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 2, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '2, 1, 5, 8',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 9, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',//count trio: 11
			'inter' => '1, 2, 5',
			'diff' => '11',//count diff: 1
		],
		'win amount' => 42,
		'qin amount' => 197.5,
		'trio amount' => 91,
		'place amount' => [
			2 => 16,
			1 => 28.5,
			5 => 12.5,
		],
		'win inter' => '1, 2, 3, 4',
		'win inter 2' => '1',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'all fav history' => [[1, 5, 8]],
			'all fav history values' => '1, 5, 8',
		'bets' => [
			'place(end-favorites )' => '5',
			'1 won(place bet)' => 125,
			'place(end-wp )' => '5',
			'2 won(place bet)' => 125,
			'super sure bet' => 'super sure place 5',
			'5 won(place bet)' => 125,
		],
		'total bets' => 300,
		'wp' => '1, 2, 5',//count wp: 3
		'total won in race 5' => 75,
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '5, 2, 3, 8',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
			'diff' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count diff: 12
		],
		'win amount' => 23,
		'qin amount' => 37.5,
		'trio amount' => 60,
		'place amount' => [
			5 => 11,
			2 => 14.5,
			3 => 22,
		],
		'win inter' => '1, 2, 3, 5, 6, 9, 11, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '5',//count wp: 1
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 10',
		'runners' => '1, 3, 4, 5, 6, 7, 8, 9, 10',
		'official win' => '3, 6, 1, 10',
		'suggestions' => [
			'win' => '3, 5, 8',
			'qin' => '1, 3, 5, 7, 8',
			'trio' => '1, 3, 5, 7, 8',//count trio: 5
			'inter' => '3',
			'diff' => '4, 6, 9, 10',//count diff: 4
		],
		'win amount' => 18,
		'qin amount' => 211,
		'trio amount' => 141,
		'place amount' => [
			3 => 10.1,
			6 => 43.5,
			1 => 16.5,
		],
		'win inter' => '3, 5, 8, 10',
		'win inter 2' => '3, 5, 8',
		'allValues' => '1, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3',//count wp: 1
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '2, 3, 5, 8, 9, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '12, 6, 2, 3',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '2, 3, 5, 8, 9',
			'diff' => '',//count diff: 0
		],
		'win amount' => 53,
		'qin amount' => 600,
		'trio amount' => 1012,
		'place amount' => [
			12 => 17.5,
			6 => 52.5,
			2 => 21,
		],
		'win inter' => '2, 4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 3, 5, 8, 9, 12',//count wp: 6
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 2, 3, 9, 10',
		'runners' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '10, 9, 11, 1',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 8, 9, 10, 11, 12',
			'qin' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 11
			'inter' => '1, 2, 3, 9, 10',
			'diff' => '',//count diff: 0
		],
		'win amount' => 85.5,
		'qin amount' => 84.5,
		'trio amount' => 1293,
		'place amount' => [
			10 => 20,
			9 => 10.5,
			11 => 169.5,
		],
		'win inter' => '2, 3, 12',
		'allValues' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2, 3, 9, 10',//count wp: 5
	],
];
//total place end favorites: 55
//total place end wp: 55
//total place wp: 0
//total sure place: 55
//total win: 0
//total place union: 0
//total: 165
