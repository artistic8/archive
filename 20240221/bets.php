<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 9, 10, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '8, 9, 12, 4',
		'suggestions' => [
			'win' => '1, 3, 4, 7, 8, 10',
			'qin' => '1, 3, 4, 7, 8, 9, 10',
			'trio' => '1, 3, 4, 5, 6, 7, 8, 9, 10, 12',//count trio: 10
			'diff' => '5, 6, 9, 12',//count diff: 4
			'inter' => '1, 10',
		],
		'win amount' => 109,
		'qin amount' => 162,
		'trio amount' => 302,
		'place amount' => [
			8 => 37,
			9 => 15.5,
			12 => 16,
		],
		'win inter' => '1, 7',
		'test' => '1, 7, 9, 10, 12',
		'official win' => '8, 9, 12, 4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'diff1' => '11, 12',
		'diff2' => '2, 11',
		'bets' => [
			'place(end-wp , $100)' => '10',
		],
		'total bets' => 100,
		'total won in race 1' => -100,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 4',
		'runners' => '1, 2, 3, 4, 5, 6, 7',
		'official win' => '7, 2, 5, 1',
		'suggestions' => [
			'win' => '2, 4, 5, 7',
			'qin' => '1, 2, 3, 4, 5, 6, 7',
			'trio' => '1, 2, 3, 4, 5, 6, 7',//count trio: 7
			'diff' => '1, 3, 6',//count diff: 3
			'inter' => '2, 4',
		],
		'win amount' => 84.5,
		'qin amount' => 150,
		'trio amount' => 249,
		'place amount' => [
			7 => 21,
			2 => 13.5,
			5 => 19,
		],
		'win inter' => '2, 4, 5, 7',
		'allValues' => '1, 2, 3, 4, 5, 6, 7',
		'diff1' => '',
		'diff2' => '',
		'bets' => [
		],
		'total bets' => 0,
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '3, 4, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '3, 8, 9, 5',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 8, 9, 11, 12',
			'qin' => '1, 2, 3, 4, 5, 8, 9, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 7, 8, 9, 11, 12',//count trio: 10
			'diff' => '5, 7',//count diff: 2
			'inter' => '3, 4, 8',
		],
		'win amount' => 57,
		'qin amount' => 154,
		'trio amount' => 544,
		'place amount' => [
			3 => 21,
			8 => 22.5,
			9 => 35.5,
		],
		'win inter' => '1, 2, 8',
		'test' => '1, 2, 3, 4, 8',
		'official win' => '3, 8, 9, 5',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'diff1' => '9, 10, 11, 12',
		'diff2' => '6, 10',
		'bets' => [
			'place(end-favorites , $100)' => '8',
			'1 won(place bet)' => 225,
			'place(end-wp , $100)' => '8',
			'2 won(place bet)' => 225,
		],
		'total bets' => 200,
		'total won in race 3' => 250,
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8',
		'official win' => '8, 6, 7, 3',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win amount' => 40.5,
		'qin amount' => 110,
		'trio amount' => 182,
		'place amount' => [
			8 => 15.5,
			6 => 18,
			7 => 19.5,
		],
		'win inter' => '1, 2, 3, 4, 6',
		'test' => '1, 2, 3, 4, 6',
		'official win' => '8, 6, 7, 3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'diff1' => '',
		'diff2' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 10',
		'runners' => '1, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '4, 7, 10, 9',
		'suggestions' => [
			'win' => '1, 3',
			'qin' => '1, 3, 11',
			'trio' => '1, 3, 6, 10, 11',//count trio: 5
			'diff' => '6, 10, 11',//count diff: 3
			'inter' => '',
		],
		'win amount' => 40,
		'qin amount' => 273,
		'trio amount' => 444,
		'place amount' => [
			4 => 18,
			7 => 29.5,
			10 => 22,
		],
		'win inter' => '1, 3, 4, 7, 11',
		'allValues' => '1, 3, 4, 5, 6, 7, 8, 10, 11',
		'diff1' => '9, 12',
		'diff2' => '4, 5, 7, 8, 9, 12',
		'bets' => [
		],
		'total bets' => 0,
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '5, 7, 1, 11',
		'suggestions' => [
			'win' => '1',
			'qin' => '1, 7',
			'trio' => '1, 5, 7',//count trio: 3
			'diff' => '5, 7',//count diff: 2
			'inter' => '',
		],
		'win amount' => 46,
		'qin amount' => 104,
		'trio amount' => 694,
		'place amount' => [
			5 => 20.5,
			7 => 16.5,
			1 => 54,
		],
		'win inter' => '1, 3, 8, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'diff1' => '11, 12',
		'diff2' => '2, 3, 4, 6, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '5, 9, 12, 8',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win amount' => 120.5,
		'qin amount' => 434,
		'trio amount' => 278,
		'place amount' => [
			5 => 37.5,
			9 => 22.5,
			12 => 13,
		],
		'win inter' => '2',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'diff1' => '10, 11, 12',
		'diff2' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '7, 3, 5, 6',
		'suggestions' => [
			'win' => '3, 4, 5',
			'qin' => '1, 3, 4, 5, 7, 9, 10',
			'trio' => '1, 3, 4, 5, 7, 8, 9, 10',//count trio: 8
			'diff' => '1, 7, 8, 9, 10',//count diff: 5
			'inter' => '3',
		],
		'win amount' => 66.5,
		'qin amount' => 124.5,
		'trio amount' => 191,
		'place amount' => [
			7 => 24,
			3 => 13,
			5 => 29,
		],
		'win inter' => '3, 4, 5, 8',
		'test' => '1, 3, 4, 5, 8',
		'official win' => '7, 3, 5, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'diff1' => '',
		'diff2' => '2, 6, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '4, 3, 9, 5',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win amount' => 308,
		'qin amount' => 572.5,
		'trio amount' => 1255,
		'place amount' => [
			4 => 71.5,
			3 => 15.5,
			9 => 22,
		],
		'win inter' => '1, 3, 5, 7, 8, 9, 10, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'diff1' => '12',
		'diff2' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
	],
];
//total major place favorites: 125
//total major place wp: 25
//total sure place: 0
//total: 150
