<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '6, 7, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '14, 2, 1, 3',
		'suggestions' => [
			'win' => '3, 5, 7',
			'qin' => '2, 3, 5, 7, 9',
			'trio' => '2, 3, 5, 6, 7, 8, 9',//count trio: 7
			'inter' => '7',
		],
		'win amount' => 116,
		'qin amount' => 705.5,
		'trio amount' => 3944,
		'place amount' => [
			14 => 29,
			2 => 34,
			1 => 54.5,
		],
		'win inter' => '1, 5, 7',
		'test' => '1, 5, 6, 7, 9',
		'tes2' => '6, 9',
		'official win' => '14, 2, 1, 3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'diff1' => '11, 12, 13, 14',
		'diff2' => '1, 4, 10, 11, 12, 13, 14',
			'diff' => '6, 9',
		'bets' => [
			'place(end-favorites , $100)' => '9',
			'place(end-wp , $100)' => '9',
		],
		'total bets' => 200,
		'total won in race 1' => -200,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 2, 3, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'official win' => '6, 7, 10, 8',
		'suggestions' => [
			'win' => '4, 7, 9',
			'qin' => '3, 4, 7, 9, 10',
			'trio' => '3, 4, 7, 9, 10',//count trio: 5
			'inter' => '7',
		],
		'win amount' => 111,
		'qin amount' => 230.5,
		'trio amount' => 1052,
		'place amount' => [
			6 => 32,
			7 => 16.5,
			10 => 37.5,
		],
		'win inter' => '2, 4, 9',
		'test' => '1, 2, 3, 4, 7, 9',
		'tes2' => '1, 3, 7',
		'official win' => '6, 7, 10, 8',
		'allValues' => '2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'diff1' => '1',
		'diff2' => '1, 2, 5, 6, 8, 11',
			'diff' => '1, 3, 7, 2',
		'bets' => [
			'place(end-favorites , $100)' => '7',
			'1 won(place bet)' => 165,
			'place(end-wp , $100)' => '7',
			'2 won(place bet)' => 165,
		],
		'total bets' => 200,
		'total won in race 2' => 130,
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '3, 8, 1, 9',
		'suggestions' => [
			'win' => '1, 4, 7, 9',
			'qin' => '1, 3, 4, 7, 8, 9',
			'trio' => '1, 3, 4, 5, 7, 8, 9, 11',//count trio: 8
			'inter' => '1',
		],
		'win amount' => 43.5,
		'qin amount' => 311.5,
		'trio amount' => 291,
		'place amount' => [
			3 => 17,
			8 => 42,
			1 => 16.5,
		],
		'win inter' => '1, 2, 4, 7, 9, 10, 11',
		'test' => '1, 2, 3, 4, 7, 9, 10, 11',
		'tes2' => '3',
		'official win' => '3, 8, 1, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'diff1' => '10, 11, 12, 13, 14',
		'diff2' => '2, 6, 10, 12, 13, 14',
			'diff' => '3',
		'bets' => [
		],
		'total bets' => 0,
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 4, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '1, 4, 5, 8',
		'suggestions' => [
			'win' => '1, 4',
			'qin' => '1, 4, 5, 7',
			'trio' => '1, 2, 4, 5, 7, 13',//count trio: 6
			'inter' => '1, 4',
		],
		'win amount' => 61.5,
		'qin amount' => 159,
		'trio amount' => 130,
		'place amount' => [
			1 => 19,
			4 => 18.5,
			5 => 15,
		],
		'win inter' => '1, 2, 4, 5',
		'test' => '1, 2, 4, 5',
		'tes2' => '',
		'official win' => '1, 4, 5, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'diff1' => '13, 14',
		'diff2' => '3, 6, 8, 9, 10, 11, 12, 14',
			'diff' => '5',
		'bets' => [
			'place(end-favorites , $100)' => '5',
			'1 won(place bet)' => 150,
			'super sure bet' => 'super sure place 5',
			'5 won(place bet)' => 150,
			'place(end-wp , $100)' => '5',
			'2 won(place bet)' => 150,
		],
		'total bets' => 300,
		'total won in race 4' => 150,
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 3, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'official win' => '5, 1, 9, 8',
		'suggestions' => [
			'win' => '3',
			'qin' => '3, 7',
			'trio' => '3, 7, 9',//count trio: 3
			'inter' => '3',
		],
		'win amount' => 69,
		'qin amount' => 77,
		'trio amount' => 205,
		'place amount' => [
			5 => 18,
			1 => 13,
			9 => 29,
		],
		'win inter' => '1, 2, 3, 4, 5',
		'test' => '1, 2, 3, 4, 5',
		'tes2' => '',
		'official win' => '5, 1, 9, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11',
		'diff1' => '9',
		'diff2' => '1, 2, 4, 5, 6, 8, 10, 11',
			'diff' => '1, 5',
		'bets' => [
			'place(end-favorites , $100)' => '5',
			'1 won(place bet)' => 180,
			'super sure bet' => 'super sure place 5',
			'5 won(place bet)' => 180,
			'place(end-wp , $100)' => '5',
			'2 won(place bet)' => 180,
		],
		'total bets' => 300,
		'total won in race 5' => 240,
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 8, 10, 13',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '3, 10, 14, 8',
		'suggestions' => [
			'win' => '12',
			'qin' => '3, 12',
			'trio' => '3, 5, 12',//count trio: 3
			'inter' => '',
		],
		'win amount' => 64.5,
		'qin amount' => 176,
		'trio amount' => 2055,
		'place amount' => [
			3 => 24.5,
			10 => 19,
			14 => 91,
		],
		'win inter' => '',
		'test' => '2, 8, 10, 13',
		'tes2' => '2, 8, 10, 13',
		'official win' => '3, 10, 14, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'diff1' => '11, 12, 13, 14',
		'diff2' => '1, 2, 4, 6, 7, 8, 9, 10, 11, 13, 14',
			'diff' => '2, 8, 10, 13',
		'bets' => [
			'place(end-wp , $100)' => '10',
			'2 won(place bet)' => 190,
		],
		'total bets' => 100,
		'total won in race 6' => 90,
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'official win' => '3, 10, 2, 1',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win amount' => 126.5,
		'qin amount' => 1110.5,
		'trio amount' => 2060,
		'place amount' => [
			3 => 27,
			10 => 43,
			2 => 14.5,
		],
		'win inter' => '1, 2, 3, 5, 6, 10, 11',
		'test' => '1, 2, 3, 5, 6, 10, 11',
		'tes2' => '',
		'official win' => '3, 10, 2, 1',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'diff1' => '10, 11',
		'diff2' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
			'diff' => '',
		'bets' => [
		],
		'total bets' => 0,
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 8, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'official win' => '1, 4, 9, 10',
		'suggestions' => [
			'win' => '8',
			'qin' => '1, 8',
			'trio' => '1, 6, 8',//count trio: 3
			'inter' => '8',
		],
		'win amount' => 19,
		'qin amount' => 47.5,
		'trio amount' => 1382,
		'place amount' => [
			1 => 11.5,
			4 => 16.5,
			9 => 151,
		],
		'win inter' => '3, 4, 8',
		'test' => '1, 3, 4, 8, 11',
		'tes2' => '1, 11',
		'official win' => '1, 4, 9, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'diff1' => '',
		'diff2' => '2, 3, 4, 5, 7, 9, 10, 11',
			'diff' => '1, 11',
		'bets' => [
		],
		'total bets' => 0,
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 4, 8, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
		'official win' => '12, 7, 8, 3',
		'suggestions' => [
			'win' => '1',
			'qin' => '1, 5',
			'trio' => '1, 5, 9',//count trio: 3
			'inter' => '',
		],
		'win amount' => 123,
		'qin amount' => 1393.5,
		'trio amount' => 2876,
		'place amount' => [
			12 => 40,
			7 => 55,
			8 => 24.5,
		],
		'win inter' => '1, 2, 8',
		'test' => '1, 2, 3, 4, 8, 9',
		'tes2' => '3, 4, 9',
		'official win' => '12, 7, 8, 3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'diff1' => '12, 13',
		'diff2' => '2, 3, 4, 6, 7, 8, 10, 11, 12, 13',
			'diff' => '3, 9, 4, 8',
		'bets' => [
			'place(end-favorites , $100)' => '9',
		],
		'total bets' => 100,
		'total won in race 9' => -100,
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '2, 7, 8, 13',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '13, 2, 8, 7',
		'suggestions' => [
			'win' => '7',
			'qin' => '2, 7, 8',
			'trio' => '2, 7, 8, 9',//count trio: 4
			'inter' => '7',
		],
		'win amount' => 299.5,
		'qin amount' => 966.5,
		'trio amount' => 1438,
		'place amount' => [
			13 => 68.5,
			2 => 29,
			8 => 17.5,
		],
		'win inter' => '2',
		'test' => '2, 7, 8, 13',
		'tes2' => '7, 8, 13',
		'official win' => '13, 2, 8, 7',
		'allValues' => '1, 2, 5, 7, 8, 10, 11, 13, 14',
		'diff1' => '3, 4, 6, 9, 12',
		'diff2' => '1, 3, 4, 5, 6, 10, 11, 12, 13, 14',
			'diff' => '2, 8',
		'bets' => [
		],
		'total bets' => 0,
	],
];
//total major place favorites: -5
//total major place wp: 185
//total sure place: 130
//total: 310
