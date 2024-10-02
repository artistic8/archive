<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '4, 5',
		'runners' => '1, 2, 3, 4, 5',
		'official win' => '4, 5, 1',
		'suggestions' => [
			'win' => '5',
			'qin' => '2, 4, 5',
			'trio' => '2, 3, 4, 5',//count trio: 4
			'diff' => '2, 3, 4',//count diff: 3
			'inter' => '4',
		],
		'win amount' => 17.5,
		'qin amount' => 21.5,
		'trio amount' => 27,
		'place amount' => [
			4 => 13,
			5 => 16.5,
		],
		'win inter' => '1, 2, 5',
		'allValues' => '1, 2, 3, 4',
		'bets' => [
		],
		'total bets' => 0,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 8, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '9, 2, 4, 8',
		'suggestions' => [
			'win' => '4, 6, 8',
			'qin' => '1, 2, 4, 6, 8',
			'trio' => '1, 2, 4, 6, 7, 8, 9, 10',//count trio: 8
			'diff' => '1, 2, 7, 9, 10',//count diff: 5
			'inter' => '1, 9',
		],
		'win amount' => 41.5,
		'qin amount' => 696.5,
		'trio amount' => 1492,
		'place amount' => [
			9 => 16,
			2 => 65,
			4 => 33.5,
		],
		'win inter' => '2, 4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
			'place(end-wp , $100)' => '9',
			'2 won(place bet)' => 160,
		],
		'total bets' => 100,
		'total won in race 2' => 60,
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '1, 4, 10, 11',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win amount' => 60,
		'qin amount' => 173,
		'trio amount' => 213,
		'place amount' => [
			1 => 22,
			4 => 21,
			10 => 15.5,
		],
		'win inter' => '1, 3, 4, 5, 6, 7, 8, 9, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '2, 6, 7, 13, 14',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '12, 3, 11, 7',
		'suggestions' => [
			'win' => '2, 3, 4, 5, 11, 13',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12, 13',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12, 13',//count trio: 12
			'diff' => '1, 6, 7, 9, 10, 12',//count diff: 6
			'inter' => '6, 7',
		],
		'win amount' => 123,
		'qin amount' => 427,
		'trio amount' => 2540,
		'place amount' => [
			12 => 28.5,
			3 => 24,
			11 => 56.5,
		],
		'win inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
			'place(end-wp , $100)' => '7',
		],
		'total bets' => 100,
		'total won in race 4' => -100,
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 5, 9, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '3, 7, 9, 8',
		'suggestions' => [
			'win' => '1, 2, 5, 8, 9',
			'qin' => '1, 2, 5, 7, 8, 9',
			'trio' => '1, 2, 3, 5, 7, 8, 9, 11',//count trio: 8
			'diff' => '3, 7, 11',//count diff: 3
			'inter' => '3, 11',
		],
		'win amount' => 37,
		'qin amount' => 201,
		'trio amount' => 477,
		'place amount' => [
			3 => 15.5,
			7 => 31.5,
			9 => 24,
		],
		'win inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '6, 8, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '5, 11, 13, 3',
		'suggestions' => [
			'win' => '1, 6, 9, 11, 12, 14',
			'qin' => '1, 2, 6, 7, 8, 9, 11, 12, 14',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 14',//count trio: 12
			'diff' => '2, 3, 5, 7, 8, 10',//count diff: 6
			'inter' => '8',
		],
		'win amount' => 179.5,
		'qin amount' => 672,
		'trio amount' => 1761,
		'place amount' => [
			5 => 54,
			11 => 20.5,
			13 => 28.5,
		],
		'win inter' => '11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13',
		'bets' => [
		],
		'total bets' => 0,
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '5, 7, 8, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '3, 5, 6, 1',
		'suggestions' => [
			'win' => '2, 6, 7, 8, 11, 12',
			'qin' => '1, 2, 3, 4, 6, 7, 8, 9, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'diff' => '1, 3, 4, 5, 9, 10',//count diff: 6
			'inter' => '5, 9',
		],
		'win amount' => 44,
		'qin amount' => 180,
		'trio amount' => 1105,
		'place amount' => [
			3 => 16.5,
			5 => 22.5,
			6 => 41.5,
		],
		'win inter' => '2, 6, 7',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
			'place(end-favorites , $100)' => '9',
		],
		'total bets' => 100,
		'total won in race 7' => -100,
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 2, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '1, 3, 4, 2',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 12',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'diff' => '7, 11',//count diff: 2
			'inter' => '',
		],
		'win amount' => 54,
		'qin amount' => 269.5,
		'trio amount' => 304,
		'place amount' => [
			1 => 19.5,
			3 => 28,
			4 => 19,
		],
		'win inter' => '3, 4, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
			'place(end-favorites , $100)' => '5',
			'place(end-wp , $100)' => '5',
		],
		'total bets' => 200,
		'total won in race 8' => -200,
	],
];
//total major place favorites: -200
//total major place wp: -140
//total sure place: 0
//total: -340
