<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8',
		'official win' => '5, 2, 7, 8',
		'suggestions' => [
			'win' => '1, 8',
			'qin' => '1, 4, 8',
			'trio' => '1, 4, 8',//count trio: 3
			'inter' => '1, 8',
		],
		'win amount' => 77.5,
		'qin amount' => 180,
		'trio amount' => 322,
		'place amount' => [
			5 => 19.5,
			2 => 16.5,
			7 => 23,
		],
		'win inter' => '1, 3, 4, 8',
		'win inter 2' => '1, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 8',//count wp: 2
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 2, 3, 6, 9, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'official win' => '10, 2, 1, 6',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',//count trio: 10
			'inter' => '1, 2, 3, 6, 9, 10',
		],
		'win amount' => 95,
		'qin amount' => 403.5,
		'trio amount' => 461,
		'place amount' => [
			10 => 28,
			2 => 21.5,
			1 => 16,
		],
		'win inter' => '4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2, 3, 6, 9',//count wp: 5
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '7, 4, 6, 8',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win amount' => 14.5,
		'qin amount' => 416.5,
		'trio amount' => 571,
		'place amount' => [
			7 => 11,
			4 => 85,
			6 => 24,
		],
		'win inter' => '1, 3, 4, 5, 6, 7, 8, 9, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
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
		'official win' => '3, 1, 6, 2',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 10, 11',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '1, 3, 11',
		],
		'win amount' => 23,
		'qin amount' => 65.5,
		'trio amount' => 269,
		'place amount' => [
			3 => 12.5,
			1 => 16,
			6 => 36,
		],
		'win inter' => '1, 2, 6, 11',
		'win inter 2' => '1, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
			'place(end-favorites , $100)' => '11',
			'win/qin/qpl(?) ' => '1, 3, 11',
			'2 won(win bet)' => 230,
			'place(end-wp , $100)' => '11',
			'super sure bet' => 'super sure place 11',
		],
		'total bets' => 600,
		'wp' => '1, 3, 11',//count wp: 3
		'total won in race 4' => -370,
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 5, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '5, 12, 7, 3',
		'suggestions' => [
			'win' => '2, 3, 5, 8, 9',
			'qin' => '1, 2, 3, 5, 7, 8, 9',
			'trio' => '1, 2, 3, 5, 7, 8, 9',//count trio: 7
			'inter' => '3, 5, 9',
		],
		'win amount' => 42.5,
		'qin amount' => 166.5,
		'trio amount' => 429,
		'place amount' => [
			5 => 17.5,
			12 => 25,
			7 => 27.5,
		],
		'win inter' => '2, 3, 5',
		'win inter 2' => '3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'bets' => [
			'place(end-favorites , $100)' => '9',
			'super sure bet' => 'super sure place 9',
		],
		'total bets' => 200,
		'wp' => '3, 5',//count wp: 2
		'total won in race 5' => -200,
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 8, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '1, 10, 8, 9',
		'suggestions' => [
			'win' => '1, 3, 6, 8, 11',
			'qin' => '1, 2, 3, 4, 6, 8, 9, 11, 12',
			'trio' => '1, 2, 3, 4, 6, 7, 8, 9, 10, 11, 12',//count trio: 11
			'inter' => '1, 8',
		],
		'win amount' => 31.5,
		'qin amount' => 302.5,
		'trio amount' => 656,
		'place amount' => [
			1 => 16,
			10 => 49.5,
			8 => 17.5,
		],
		'win inter' => '1, 3, 6, 8, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
			'win/qin/qpl(?) ' => '1, 8, 9',
			'2 won(win bet)' => 315,
		],
		'total bets' => 300,
		'wp' => '1, 8, 9',//count wp: 3
		'total won in race 6' => 15,
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '8, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '12, 1, 6, 7',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win amount' => 26.5,
		'qin amount' => 189,
		'trio amount' => 286,
		'place amount' => [
			12 => 12,
			1 => 34,
			6 => 25,
		],
		'win inter' => '2',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '8',//count wp: 1
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 9, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '11, 10, 2, 9',
		'suggestions' => [
			'win' => '1, 3, 9, 10',
			'qin' => '1, 3, 4, 8, 9, 10, 12',
			'trio' => '1, 2, 3, 4, 7, 8, 9, 10, 12',//count trio: 9
			'inter' => '1, 9',
		],
		'win amount' => 23.5,
		'qin amount' => 152,
		'trio amount' => 245,
		'place amount' => [
			11 => 12,
			10 => 34,
			2 => 19.5,
		],
		'win inter' => '3, 4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
			'win/qin/qpl(?) ' => '1, 9, 11',
			'2 won(win bet)' => 235,
		],
		'total bets' => 300,
		'wp' => '1, 9, 11',//count wp: 3
		'total won in race 8' => -65,
	],
];
//total place end favorites: -200
//total place end wp: -100
//total place wp: 0
//total sure place: -200
//total win: -120
//total: -620
