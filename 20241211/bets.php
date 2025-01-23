<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 2, 6, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8',
		'official win' => '6, 7, 5, 4',
		'interFW' => '6, 7',//count: 2
		'minmax history' => [
			'min history(min, win)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
			'min history(max, win)' => '7, 8',
			'max history(min, win)' => '1, 3',
			'max history(max, win)' => '1, 2, 5, 6, 7, 8, 9',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 13',
			'min history(max, qin)' => '7, 8, 9',
			'max history(min, qin)' => '1, 3, 4, 7, 10',
			'max history(max, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
			'min history(max, trio)' => '4, 6, 7, 8, 9',
			'max history(min, trio)' => '1, 3, 4, 5, 7, 10',
			'max history(max, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		],
		'win amount' => 29,
		'qin amount' => 79,
		'trio amount' => 300,
		'place amount' => [
			6 => 13.5,
			7 => 16,
			5 => 42.5,
		],
		'win inter' => '1, 2, 5, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2, 6, 7',//count wp: 4
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 10, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 12',
		'official win' => '7, 6, 12, 10',
		'interFW' => '12',//count: 1
		'minmax history' => [
			'min history(min, win)' => '1, 2, 4, 5, 6, 7, 10, 12, 13, 14',
			'min history(max, win)' => '1',
			'max history(min, win)' => '2',
			'max history(max, win)' => '1, 2, 5, 6, 7, 9, 12',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 12, 13, 14',
			'min history(max, qin)' => '1, 12',
			'max history(min, qin)' => '1, 2',
			'max history(max, qin)' => '1, 2, 4, 5, 6, 7, 8, 9, 10, 12',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12, 13, 14',
			'min history(max, trio)' => '1, 6, 12',
			'max history(min, trio)' => '1, 2, 4',
			'max history(max, trio)' => '1, 2, 4, 5, 6, 7, 8, 9, 10, 12, 13',
		],
		'win amount' => 119.5,
		'qin amount' => 1132.5,
		'trio amount' => 2198,
		'place amount' => [
			7 => 36,
			6 => 54,
			12 => 19,
		],
		'win inter' => '5, 7, 12',
		'win inter 2' => '7, 12',
		'inter inter' => '12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10',
		'bets' => [
			'place(end-favorites )' => '12',
			'1 won(place bet)' => 190,
		],
		'total bets' => 100,
		'wp' => '2, 10',//count wp: 2
		'total won in race 2' => 90,
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '4, 6, 2, 9',
		'interFW' => '6',//count: 1
		'minmax history' => [
			'min history(min, win)' => '3, 4, 6, 8, 10, 11',
			'min history(max, win)' => '3, 4, 6, 8, 10, 11',
			'max history(min, win)' => '1, 2, 3, 6',
			'max history(max, win)' => '1, 2, 3, 6',
			'min history(min, qin)' => '1, 3, 4, 5, 6, 7, 8, 10, 11, 12',
			'min history(max, qin)' => '1, 3, 4, 5, 6, 7, 8, 10, 11, 12',
			'max history(min, qin)' => '1, 2, 3, 4, 5, 6, 8, 10, 11, 12',
			'max history(max, qin)' => '1, 2, 3, 4, 5, 6, 8, 10, 11, 12',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'min history(max, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'max history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'max history(max, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		],
		'win amount' => 121,
		'qin amount' => 107,
		'trio amount' => 363,
		'place amount' => [
			4 => 36.5,
			6 => 10.5,
			2 => 33,
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'all fav history' => [[6, 5, 7]],
		'all fav history values' => '5, 6, 7',
		'all inter fav' => '6',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '6',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '3, 8, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '10, 8, 5, 7',
		'interFW' => '8, 10',//count: 2
		'minmax history' => [
			'min history(min, win)' => '1, 2, 3, 6, 8, 10, 14',
			'min history(max, win)' => '10',
			'max history(min, win)' => '2, 3, 6, 8',
			'max history(max, win)' => '1, 4, 5, 10, 13',
			'min history(min, qin)' => '1, 2, 3, 4, 6, 8, 9, 10, 14',
			'min history(max, qin)' => '5, 10',
			'max history(min, qin)' => '2, 3, 5, 6, 8',
			'max history(max, qin)' => '1, 4, 5, 10, 11, 13',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 14',
			'min history(max, trio)' => '3, 5, 10',
			'max history(min, trio)' => '2, 3, 5, 6, 7, 8, 9, 11',
			'max history(max, trio)' => '1, 3, 4, 5, 6, 7, 10, 11, 13',
		],
		'win amount' => 34.5,
		'qin amount' => 49.5,
		'trio amount' => 274,
		'place amount' => [
			10 => 16,
			8 => 11,
			5 => 52.5,
		],
		'win inter' => '1, 2, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 8, 10',//count wp: 3
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '2, 5, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '6, 11, 1, 9',
		'interFW' => '',//count: 0
		'minmax history' => [
			'min history(min, win)' => '2, 3, 4, 5, 6, 8, 9, 10, 11',
			'min history(max, win)' => '',
			'max history(min, win)' => '2, 4, 6',
			'max history(max, win)' => '2, 3, 4, 5, 6',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13',
			'min history(max, qin)' => '',
			'max history(min, qin)' => '2, 3, 4, 6, 12, 13',
			'max history(max, qin)' => '1, 2, 3, 4, 5, 6, 9, 11, 12',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
			'min history(max, trio)' => '',
			'max history(min, trio)' => '2, 3, 4, 6, 10, 12, 13',
			'max history(max, trio)' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12, 13',
		],
		'win amount' => 57,
		'qin amount' => 686,
		'trio amount' => 1841,
		'place amount' => [
			6 => 24.5,
			11 => 54.5,
			1 => 33.5,
		],
		'win inter' => '2, 3, 4, 5, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 5, 12',//count wp: 3
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '2, 6, 8, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '7, 4, 1, 2',
		'interFW' => '',//count: 0
		'minmax history' => [
			'min history(min, win)' => '1, 2, 3, 5, 7, 9, 10, 11, 13',
			'min history(max, win)' => '12',
			'max history(min, win)' => '2',
			'max history(max, win)' => '1, 2, 3, 6, 7, 8, 10, 11, 12, 13',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
			'min history(max, qin)' => '6, 12',
			'max history(min, qin)' => '2, 3',
			'max history(max, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12, 13',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
			'min history(max, trio)' => '3, 6, 12',
			'max history(min, trio)' => '2, 3, 10',
			'max history(max, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		],
		'win amount' => 968.5,
		'qin amount' => 6363.5,
		'trio amount' => 11986,
		'place amount' => [
			7 => 211.5,
			4 => 45.5,
			1 => 39.5,
		],
		'win inter' => '1, 2, 6, 8, 9, 10, 11',
		'win inter 2' => '1',
		'inter inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 6, 8, 10',//count wp: 4
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '3, 4, 10, 6',
		'interFW' => '3, 10',//count: 2
		'minmax history' => [
			'min history(min, win)' => '1, 2, 3, 5, 6, 7, 10, 11, 12',
			'min history(max, win)' => '',
			'max history(min, win)' => '3, 11',
			'max history(max, win)' => '2, 3, 4, 5, 8',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'min history(max, qin)' => '',
			'max history(min, qin)' => '1, 3, 10, 11',
			'max history(max, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'min history(max, trio)' => '',
			'max history(min, trio)' => '1, 2, 3, 8, 10, 11',
			'max history(max, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 11, 14',
		],
		'win amount' => 58,
		'qin amount' => 141.5,
		'trio amount' => 140,
		'place amount' => [
			3 => 16.5,
			4 => 17.5,
			10 => 17,
		],
		'win inter' => '2, 3, 5, 7, 10',
		'win inter 2' => '7',
		'inter inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3, 10',//count wp: 3
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 3, 10, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '3, 10, 5, 6',
		'interFW' => '3, 10',//count: 2
		'minmax history' => [
			'min history(min, win)' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 13, 14',
			'min history(max, win)' => '',
			'max history(min, win)' => '',
			'max history(max, win)' => '1, 3, 4, 7, 8, 9, 11',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
			'min history(max, qin)' => '',
			'max history(min, qin)' => '',
			'max history(max, qin)' => '1, 3, 4, 5, 7, 8, 9, 10, 11',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
			'min history(max, trio)' => '',
			'max history(min, trio)' => '',
			'max history(max, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		],
		'win amount' => 33,
		'qin amount' => 114.5,
		'trio amount' => 1506,
		'place amount' => [
			3 => 14.5,
			10 => 17.5,
			5 => 83,
		],
		'win inter' => '1, 3, 7, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3, 10, 11',//count wp: 4
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 2, 4, 5, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '7, 10, 9, 1',
		'interFW' => '',//count: 0
		'minmax history' => [
			'min history(min, win)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
			'min history(max, win)' => '3',
			'max history(min, win)' => '1',
			'max history(max, win)' => '1, 8, 11',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
			'min history(max, qin)' => '3, 5',
			'max history(min, qin)' => '1, 6',
			'max history(max, qin)' => '1, 4, 6, 8, 11',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
			'min history(max, trio)' => '3, 5, 8',
			'max history(min, trio)' => '1, 6, 11',
			'max history(max, trio)' => '1, 2, 4, 6, 7, 8, 11',
		],
		'win amount' => 77.5,
		'qin amount' => 600,
		'trio amount' => 1378,
		'place amount' => [
			7 => 26,
			10 => 40,
			9 => 28.5,
		],
		'win inter' => '1, 5, 8, 11, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2, 4, 5, 6, 8',//count wp: 6
	],
];
//total place end favorites: 90
//total place end wp: 0
//total place wp: 0
//total sure place: 0
//total win: 0
//total place union: 0
//total: 90
