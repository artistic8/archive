<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '10, 1, 5, 3',
		'suggestions' => [
			'win' => '1, 3, 4, 8, 10',
			'qin' => '1, 3, 4, 8, 9, 10',
			'trio' => '1, 3, 4, 5, 7, 8, 9, 10, 12',//count trio: 9
			'inter' => '1, 10',
		],
		'win amount' => 196.5,
		'qin amount' => 237.5,
		'trio amount' => 4174,
		'place amount' => [
			10 => 46.5,
			1 => 13,
			5 => 124.5,
		],
		'win inter' => '1, 3, 4, 5, 6, 7, 8, 10',
		'win inter 2' => '1, 3, 4, 8, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 10',//count wp: 2
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '7, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '12, 7, 6, 3',
		'suggestions' => [
			'win' => '7',
			'qin' => '7, 10',
			'trio' => '7, 10',//count trio: 2
			'inter' => '7',
		],
		'win amount' => 44.5,
		'qin amount' => 70.5,
		'trio amount' => 185,
		'place amount' => [
			12 => 17,
			7 => 16.5,
			6 => 27,
		],
		'win inter' => '6, 7',
		'win inter 2' => '7',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'place(wp , $300)' => '7',
			'3 won(place bet)' => 495,
		],
		'total bets' => 300,
		'wp' => '7',//count wp: 1
		'total won in race 2' => 195,
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '11, 12, 7, 9',
		'suggestions' => [
			'win' => '5, 12',
			'qin' => '3, 5, 12',
			'trio' => '1, 3, 5, 10, 12',//count trio: 5
			'inter' => '',
		],
		'win amount' => 34,
		'qin amount' => 76.5,
		'trio amount' => 242,
		'place amount' => [
			11 => 14.5,
			12 => 18,
			7 => 28,
		],
		'win inter' => '1, 3, 5, 12',
		'win inter 2' => '5, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '6',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '4, 8, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '12, 5, 4, 1',
		'suggestions' => [
			'win' => '2, 5, 12',
			'qin' => '1, 2, 4, 5, 8, 12',
			'trio' => '1, 2, 4, 5, 6, 7, 8, 10, 12',//count trio: 9
			'inter' => '12',
		],
		'win amount' => 26.5,
		'qin amount' => 115.5,
		'trio amount' => 105,
		'place amount' => [
			12 => 13,
			5 => 24,
			4 => 13.5,
		],
		'win inter' => '1, 3, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 8, 12',//count wp: 3
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 5, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '9, 2, 5, 1',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 8',
			'qin' => '1, 2, 3, 5, 7, 8, 9, 12',
			'trio' => '1, 2, 3, 5, 7, 8, 9, 12',//count trio: 8
			'inter' => '2, 5',
		],
		'win amount' => 35.5,
		'qin amount' => 76.5,
		'trio amount' => 69,
		'place amount' => [
			9 => 15.5,
			2 => 16,
			5 => 16,
		],
		'win inter' => '2',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 5',//count wp: 2
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 3, 5, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'official win' => '9, 6, 5, 1',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 9',
			'qin' => '1, 2, 3, 5, 6, 7, 8, 9',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 9, 10',//count trio: 9
			'inter' => '2, 3, 5, 6',
		],
		'win amount' => 114.5,
		'qin amount' => 490.5,
		'trio amount' => 682,
		'place amount' => [
			9 => 41,
			6 => 21.5,
			5 => 16,
		],
		'win inter' => '1, 2, 5, 6',
		'win inter 2' => '6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
			'place(end-favorites , $100)' => '6',
			'1 won(place bet)' => 215,
			'super sure bet' => 'super sure place 6',
			'5 won(place bet)' => 215,
		],
		'total bets' => 200,
		'wp' => '2, 3, 5, 6',//count wp: 4
		'total won in race 6' => 230,
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 4, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '3, 11, 5, 2',
		'suggestions' => [
			'win' => '3, 4, 5, 7, 8, 10',
			'qin' => '1, 3, 4, 5, 6, 7, 8, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',//count trio: 11
			'inter' => '3, 4, 10',
		],
		'win amount' => 22.5,
		'qin amount' => 271.5,
		'trio amount' => 1588,
		'place amount' => [
			3 => 11.5,
			11 => 54,
			5 => 70.5,
		],
		'win inter' => '2, 3, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 4',//count wp: 2
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 3, 7, 8, 10',
		'runners' => '1, 3, 4, 5, 7, 8, 9, 10, 11',
		'official win' => '5, 7, 3, 8',
		'suggestions' => [
			'win' => '1, 3, 4, 5, 7, 8, 9, 10, 11',
			'qin' => '1, 3, 4, 5, 7, 8, 9, 10, 11',
			'trio' => '1, 3, 4, 5, 7, 8, 9, 10, 11',//count trio: 9
			'inter' => '1, 3, 7, 8, 10',
		],
		'win amount' => 245,
		'qin amount' => 451.5,
		'trio amount' => 262,
		'place amount' => [
			5 => 42.5,
			7 => 16,
			3 => 12,
		],
		'win inter' => '3, 8',
		'allValues' => '1, 3, 4, 5, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3, 7, 8, 10',//count wp: 5
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 2, 3, 5, 8, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '5, 7, 2, 1',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 2, 3, 5, 8, 10',
		],
		'win amount' => 117.5,
		'qin amount' => 338,
		'trio amount' => 649,
		'place amount' => [
			5 => 33,
			7 => 23.5,
			2 => 24,
		],
		'win inter' => '3, 5, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2, 3, 5, 8, 10',//count wp: 6
	],
];
//total place end favorites: 115
//total place end wp: 0
//total place wp: 195
//total sure place: 115
//total win: 0
//total: 425
