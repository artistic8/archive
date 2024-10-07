<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 4, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '10, 13, 7, 14',
		'suggestions' => [
			'win' => '1, 3, 4, 5, 8, 10',
			'qin' => '1, 2, 3, 4, 5, 7, 8, 9, 10',
			'trio' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 12',//count trio: 10
			'inter' => '1, 4, 10',
		],
		'win amount' => 42,
		'qin amount' => 250,
		'trio amount' => 513,
		'place amount' => [
			10 => 15.5,
			13 => 39,
			7 => 20.5,
		],
		'win inter' => '1, 3, 4, 8, 10',
		'test' => '1, 3, 4, 8, 10',
		'tes2' => '',
		'official win' => '10, 13, 7, 14',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'diff1' => '11, 12, 13, 14',
		'diff2' => '6, 11, 13, 14',
			'diff' => '',
		'bets' => [
			'place(end-favorites , $100)' => '10',
			'1 won(place bet)' => 155,
			'super sure bet' => 'super sure place 10',
			'5 won(place bet)' => 155,
			'place(end-wp , $100)' => '10',
			'2 won(place bet)' => 155,
		],
		'total bets' => 300,
		'total won in race 1' => 165,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 5, 10, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '12, 2, 5, 6',
		'suggestions' => [
			'win' => '4, 5, 6, 7, 10, 12, 13',
			'qin' => '1, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
			'trio' => '1, 2, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',//count trio: 13
			'inter' => '5, 10, 12',
		],
		'win amount' => 63,
		'qin amount' => 232.5,
		'trio amount' => 257,
		'place amount' => [
			12 => 24,
			2 => 24,
			5 => 17,
		],
		'win inter' => '5, 7',
		'test' => '2, 5, 7, 10, 12',
		'tes2' => '2, 10, 12',
		'official win' => '12, 2, 5, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'diff1' => '12, 13, 14',
		'diff2' => '3',
			'diff' => '2, 12',
		'bets' => [
			'place(end-wp , $100)' => '10',
		],
		'total bets' => 100,
		'total won in race 2' => -100,
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 4, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'official win' => '4, 9, 8, 5',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 7, 9',
			'qin' => '1, 2, 3, 4, 5, 7, 8, 9',
			'trio' => '1, 2, 3, 4, 5, 7, 8, 9',//count trio: 8
			'inter' => '3, 4, 5',
		],
		'win amount' => 20.5,
		'qin amount' => 113.5,
		'trio amount' => 744,
		'place amount' => [
			4 => 12,
			9 => 23,
			8 => 80,
		],
		'win inter' => '1, 2, 3, 4, 5, 7, 9',
		'test' => '1, 2, 3, 4, 5, 7, 9',
		'tes2' => '',
		'official win' => '4, 9, 8, 5',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'diff1' => '',
		'diff2' => '6',
			'diff' => '',
		'bets' => [
		],
		'total bets' => 0,
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 3, 5, 9, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '6, 5, 1, 3',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13',//count trio: 12
			'inter' => '1, 3, 5, 12',
		],
		'win amount' => 77.5,
		'qin amount' => 194,
		'trio amount' => 376,
		'place amount' => [
			6 => 25,
			5 => 22,
			1 => 18.5,
		],
		'win inter' => '',
		'test' => '1, 3, 5, 9, 12',
		'tes2' => '1, 3, 5, 9, 12',
		'official win' => '6, 5, 1, 3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'diff1' => '13, 14',
		'diff2' => '11, 14',
			'diff' => '9, 12',
		'bets' => [
		],
		'total bets' => 0,
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 2, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '1, 10, 8, 12',
		'suggestions' => [
			'win' => '1, 2, 4, 6, 8, 12',
			'qin' => '1, 2, 4, 5, 6, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12',//count trio: 11
			'inter' => '1, 2, 6, 8',
		],
		'win amount' => 47.5,
		'qin amount' => 270,
		'trio amount' => 917,
		'place amount' => [
			1 => 19,
			10 => 34,
			8 => 32,
		],
		'win inter' => '4',
		'test' => '1, 2, 4, 6, 8',
		'tes2' => '1, 2, 6, 8',
		'official win' => '1, 10, 8, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 10, 11',
		'diff1' => '8, 9, 12, 13, 14',
		'diff2' => '7, 13, 14',
			'diff' => '6',
		'bets' => [
			'place(end-wp , $100)' => '6',
		],
		'total bets' => 100,
		'total won in race 5' => -100,
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '11, 8, 3, 2',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 9',
			'qin' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',//count trio: 13
			'inter' => '2, 6',
		],
		'win amount' => 233.5,
		'qin amount' => 703,
		'trio amount' => 3613,
		'place amount' => [
			11 => 62.5,
			8 => 18,
			3 => 44.5,
		],
		'win inter' => '1, 5, 6, 8, 9',
		'test' => '1, 2, 5, 6, 8, 9',
		'tes2' => '2',
		'official win' => '11, 8, 3, 2',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'diff1' => '11, 12',
		'diff2' => '4',
			'diff' => '8',
		'bets' => [
			'place(end-favorites , $100)' => '8',
			'1 won(place bet)' => 180,
			'place(end-wp , $100)' => '8',
			'2 won(place bet)' => 180,
		],
		'total bets' => 200,
		'total won in race 6' => 160,
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3, 4, 5, 14',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '10, 11, 12, 8',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 6, 7, 8, 10',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',//count trio: 13
			'inter' => '1, 3, 4',
		],
		'win amount' => 119,
		'qin amount' => 557,
		'trio amount' => 1118,
		'place amount' => [
			10 => 33.5,
			11 => 26,
			12 => 27,
		],
		'win inter' => '',
		'test' => '1, 3, 4, 5, 14',
		'tes2' => '1, 3, 4, 5, 14',
		'official win' => '10, 11, 12, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'diff1' => '10, 11, 12, 13, 14',
		'diff2' => '13',
			'diff' => '3, 4, 5',
		'bets' => [
		],
		'total bets' => 0,
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '4, 6, 1, 7',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win amount' => 121,
		'qin amount' => 401.5,
		'trio amount' => 613,
		'place amount' => [
			4 => 23.5,
			6 => 23.5,
			1 => 22,
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12',
		'test' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 12',
		'tes2' => '',
		'official win' => '4, 6, 1, 7',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'diff1' => '',
		'diff2' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'diff' => '',
		'bets' => [
		],
		'total bets' => 0,
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
		'official win' => '7, 8, 2, 6',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win amount' => 77,
		'qin amount' => 976,
		'trio amount' => 4346,
		'place amount' => [
			7 => 25.5,
			8 => 64,
			2 => 41.5,
		],
		'win inter' => '1, 2, 4, 5, 6, 7, 8, 9, 11, 12',
		'test' => '1, 2, 4, 5, 6, 7, 8, 9, 11, 12',
		'tes2' => '',
		'official win' => '7, 8, 2, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'diff1' => '12, 13',
		'diff2' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
			'diff' => '',
		'bets' => [
		],
		'total bets' => 0,
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '3, 4, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '14, 1, 3, 10',
		'suggestions' => [
			'win' => '4, 11, 12',
			'qin' => '3, 4, 5, 9, 11, 12',
			'trio' => '3, 4, 5, 9, 10, 11, 12',//count trio: 7
			'inter' => '4, 11',
		],
		'win amount' => 120,
		'qin amount' => 1102.5,
		'trio amount' => 788,
		'place amount' => [
			14 => 29,
			1 => 57,
			3 => 10.1,
		],
		'win inter' => '',
		'test' => '3, 4, 11',
		'tes2' => '3, 4, 11',
		'official win' => '14, 1, 3, 10',
		'allValues' => '1, 2, 5, 7, 8, 10, 11, 13, 14',
		'diff1' => '3, 4, 6, 9, 12',
		'diff2' => '1, 2, 6, 7, 8, 13, 14',
			'diff' => '3',
		'bets' => [
		],
		'total bets' => 0,
	],
];
//total major place favorites: 135
//total major place wp: -65
//total sure place: 55
//total: 125
