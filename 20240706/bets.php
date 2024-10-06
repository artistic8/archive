<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 3, 4',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '4, 1, 2, 9',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 10',
			'qin' => '1, 2, 3, 4, 6, 7, 10',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 12',//count trio: 10
			'diff' => '5, 6, 7, 9, 12',//count diff: 5
			'inter' => '1, 3, 4',
		],
		'win amount' => 44.5,
		'qin amount' => 47,
		'trio amount' => 1563,
		'place amount' => [
			4 => 14,
			1 => 12,
			2 => 258,
		],
		'win inter' => '1, 3, 4, 8',
		'test' => '1, 3, 4, 8',
		'official win' => '4, 1, 2, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'diff1' => '11, 12',
		'diff2' => '8, 11',
		'bets' => [
			'place(end-favorites , $100)' => '4',
			'1 won(place bet)' => 140,
			'super sure bet' => 'super sure place 4',
			'5 won(place bet)' => 140,
			'place(end-wp , $100)' => '4',
			'2 won(place bet)' => 140,
		],
		'total bets' => 300,
		'total won in race 1' => 120,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 2, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '6, 11, 2, 1',
		'suggestions' => [
			'win' => '2, 4, 5, 6, 9, 12',
			'qin' => '2, 4, 5, 6, 7, 9, 10, 12',
			'trio' => '1, 2, 4, 5, 6, 7, 9, 10, 11, 12',//count trio: 10
			'diff' => '1, 7, 10, 11',//count diff: 4
			'inter' => '2, 5',
		],
		'win amount' => 142,
		'qin amount' => 1861.5,
		'trio amount' => 2350,
		'place amount' => [
			6 => 37.5,
			11 => 88.5,
			2 => 16.5,
		],
		'win inter' => '4, 9',
		'test' => '1, 2, 4, 5, 9',
		'official win' => '6, 11, 2, 1',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'diff1' => '12',
		'diff2' => '3, 8',
		'bets' => [
			'place(end-wp , $100)' => '5',
		],
		'total bets' => 100,
		'total won in race 2' => -100,
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '1, 14, 8, 6',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win amount' => 24,
		'qin amount' => 637.5,
		'trio amount' => 865,
		'place amount' => [
			1 => 13,
			14 => 99.5,
			8 => 21,
		],
		'win inter' => '2, 7, 9',
		'test' => '1, 2, 7, 9, 12',
		'official win' => '1, 14, 8, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'diff1' => '9, 10, 11, 12, 13, 14',
		'diff2' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'bets' => [
		],
		'total bets' => 0,
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '6, 8, 11, 3',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win amount' => 538.5,
		'qin amount' => 2013.5,
		'trio amount' => 4255,
		'place amount' => [
			6 => 73.5,
			8 => 21.5,
			11 => 20.5,
		],
		'win inter' => '1, 2, 3, 4, 6, 8, 11',
		'test' => '1, 2, 3, 4, 6, 8, 11',
		'official win' => '6, 8, 11, 3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'diff1' => '',
		'diff2' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 2',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '4, 12, 2, 3',
		'suggestions' => [
			'win' => '1, 2, 12',
			'qin' => '1, 2, 6, 10, 12',
			'trio' => '1, 2, 4, 5, 6, 8, 10, 12',//count trio: 8
			'diff' => '4, 5, 6, 8, 10',//count diff: 5
			'inter' => '1, 2',
		],
		'win amount' => 51,
		'qin amount' => 346,
		'trio amount' => 558,
		'place amount' => [
			4 => 21,
			12 => 37,
			2 => 16,
		],
		'win inter' => '1, 2, 12',
		'test' => '1, 2, 12',
		'official win' => '4, 12, 2, 3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'diff1' => '9, 12',
		'diff2' => '3, 7, 9, 11',
		'bets' => [
		],
		'total bets' => 0,
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '11, 14, 10, 13',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win amount' => 102,
		'qin amount' => 1265,
		'trio amount' => 3918,
		'place amount' => [
			11 => 36,
			14 => 59.5,
			10 => 27.5,
		],
		'win inter' => '1, 2, 4, 5, 6, 7, 8, 9, 11',
		'test' => '1, 2, 4, 5, 6, 7, 8, 9, 11',
		'official win' => '11, 14, 10, 13',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13',
		'diff1' => '11, 14',
		'diff2' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'bets' => [
		],
		'total bets' => 0,
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '2, 3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
		'official win' => '5, 1, 3, 10',
		'suggestions' => [
			'win' => '5, 9, 10',
			'qin' => '3, 5, 6, 7, 9, 10',
			'trio' => '2, 3, 5, 6, 7, 9, 10',//count trio: 7
			'diff' => '2, 3, 6, 7',//count diff: 4
			'inter' => '',
		],
		'win amount' => 96.5,
		'qin amount' => 669.5,
		'trio amount' => 1006,
		'place amount' => [
			5 => 27.5,
			1 => 53.5,
			3 => 17,
		],
		'win inter' => '1, 2, 5, 7, 9, 10',
		'test' => '1, 2, 3, 5, 7, 9, 10',
		'official win' => '5, 1, 3, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'diff1' => '10, 11, 12, 13',
		'diff2' => '1, 4, 8, 11, 12, 13',
		'bets' => [
		],
		'total bets' => 0,
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 2, 8, 12, 14',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '8, 12, 1, 9',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 9, 10, 11, 12, 14',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',//count trio: 13
			'diff' => '7, 8',//count diff: 2
			'inter' => '1, 2, 12, 14',
		],
		'win amount' => 91.5,
		'qin amount' => 381.5,
		'trio amount' => 657,
		'place amount' => [
			8 => 25.5,
			12 => 33.5,
			1 => 16.5,
		],
		'win inter' => '',
		'test' => '1, 2, 8, 12, 14',
		'official win' => '8, 12, 1, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'diff1' => '12, 13, 14',
		'diff2' => '13',
		'bets' => [
			'place(end-wp , $100)' => '8',
			'2 won(place bet)' => 255,
		],
		'total bets' => 100,
		'total won in race 8' => 155,
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '5, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
		'official win' => '9, 5, 2, 6',
		'suggestions' => [
			'win' => '1, 12',
			'qin' => '1, 3, 5, 12',
			'trio' => '1, 3, 5, 9, 11, 12',//count trio: 6
			'diff' => '3, 5, 9, 11',//count diff: 4
			'inter' => '',
		],
		'win amount' => 41.5,
		'qin amount' => 26.5,
		'trio amount' => 66,
		'place amount' => [
			9 => 13,
			5 => 11.5,
			2 => 26,
		],
		'win inter' => '1, 3, 4, 8, 10, 12',
		'test' => '1, 3, 4, 5, 8, 9, 10, 12',
		'official win' => '9, 5, 2, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'diff1' => '12, 13',
		'diff2' => '2, 4, 6, 7, 8, 10, 13',
		'bets' => [
		],
		'total bets' => 0,
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '5, 6, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '3, 8, 10, 6',
		'suggestions' => [
			'win' => '7, 9',
			'qin' => '1, 5, 7, 9',
			'trio' => '1, 2, 5, 7, 9',//count trio: 5
			'diff' => '1, 2, 5',//count diff: 3
			'inter' => '9',
		],
		'win amount' => 36.5,
		'qin amount' => 939.5,
		'trio amount' => 3584,
		'place amount' => [
			3 => 14,
			8 => 111,
			10 => 38,
		],
		'win inter' => '',
		'test' => '5, 6, 9',
		'official win' => '3, 8, 10, 6',
		'allValues' => '',
		'diff1' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'diff2' => '3, 4, 6, 8, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
	],
];
//total major place favorites: 40
//total major place wp: 95
//total sure place: 40
//total: 175
