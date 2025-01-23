<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 3, 4',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '4, 3, 9, 2',
		'interFW' => '3, 4',//count: 2
		'minmax history' => [
			'min history(min, win)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
			'min history(max, win)' => '4, 5, 8, 10',
			'max history(min, win)' => '1, 3',
			'max history(max, win)' => '1, 4, 9',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 13',
			'min history(max, qin)' => '2, 4, 5, 8, 10, 12',
			'max history(min, qin)' => '1, 3, 4, 7, 10',
			'max history(max, qin)' => '1, 4, 7, 9, 11',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
			'min history(max, trio)' => '1, 2, 3, 4, 5, 8, 9, 10, 12',
			'max history(min, trio)' => '1, 3, 4, 5, 7, 10',
			'max history(max, trio)' => '1, 2, 3, 4, 5, 7, 9, 11',
		],
		'win amount' => 51.5,
		'qin amount' => 141.5,
		'trio amount' => 521,
		'place amount' => [
			4 => 19.5,
			3 => 22.5,
			9 => 26.5,
		],
		'win inter' => '1, 2, 3, 4, 5, 8, 9',
		'win inter 2' => '1, 4, 5',
		'inter inter' => '1, 4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'all fav history' => [[4, 1, 2], [1, 7, 3]],
		'all fav history values' => '1, 2, 3, 4, 7',
		'all inter fav' => '1, 3, 4',
		'bets' => [
			'place(end-favorites )' => '4',
			'1 won(place bet)' => 195,
			'place(end-wp )' => '4',
			'2 won(place bet)' => 195,
			'super sure bet' => 'super sure place 4',
			'5 won(place bet)' => 195,
		],
		'total bets' => 300,
		'wp' => '1, 3, 4',//count wp: 3
		'total won in race 1' => 285,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '3, 5, 6, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '5, 9, 10, 8',
		'interFW' => '5',//count: 1
		'minmax history' => [
			'min history(min, win)' => '2, 3, 5, 7, 8, 9, 11, 14',
			'min history(max, win)' => '1',
			'max history(min, win)' => '5, 6',
			'max history(max, win)' => '1, 2, 6, 7, 9, 12',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
			'min history(max, qin)' => '1, 12',
			'max history(min, qin)' => '5, 6',
			'max history(max, qin)' => '1, 2, 4, 5, 6, 7, 8, 9, 10, 12',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
			'min history(max, trio)' => '1, 6, 12',
			'max history(min, trio)' => '2, 5, 6, 10',
			'max history(max, trio)' => '1, 2, 4, 5, 6, 7, 8, 9, 10, 12, 13',
		],
		'win amount' => 54.5,
		'qin amount' => 138.5,
		'trio amount' => 216,
		'place amount' => [
			5 => 18.5,
			9 => 19.5,
			10 => 20,
		],
		'win inter' => '2, 6, 7, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 5, 6, 12',//count wp: 4
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '6, 5, 2, 12',
		'interFW' => '5',//count: 1
		'minmax history' => [
			'min history(min, win)' => '6, 9',
			'min history(max, win)' => '6, 9',
			'max history(min, win)' => '4, 7, 10',
			'max history(max, win)' => '4, 7, 10',
			'min history(min, qin)' => '5, 6, 9, 11',
			'min history(max, qin)' => '5, 6, 9, 11',
			'max history(min, qin)' => '1, 2, 4, 7, 9, 10',
			'max history(max, qin)' => '1, 2, 4, 7, 9, 10',
			'min history(min, trio)' => '2, 4, 5, 6, 9, 11',
			'min history(max, trio)' => '2, 4, 5, 6, 9, 11',
			'max history(min, trio)' => '1, 2, 3, 4, 5, 7, 8, 9, 10',
			'max history(max, trio)' => '1, 2, 3, 4, 5, 7, 8, 9, 10',
		],
		'win amount' => 65.5,
		'qin amount' => 83.5,
		'trio amount' => 273,
		'place amount' => [
			6 => 21.5,
			5 => 11,
			2 => 38,
		],
		'win inter' => '1, 2, 3, 4, 5, 7, 8, 9, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '5',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '3, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '1, 4, 11, 10',
		'interFW' => '11',//count: 1
		'minmax history' => [
			'min history(min, win)' => '1, 2, 3, 6, 8, 10, 14',
			'min history(max, win)' => '10',
			'max history(min, win)' => '2, 3, 6, 8',
			'max history(max, win)' => '1, 2, 3, 5, 6, 10, 11',
			'min history(min, qin)' => '1, 2, 3, 4, 6, 8, 9, 10, 14',
			'min history(max, qin)' => '5, 10',
			'max history(min, qin)' => '2, 3, 5, 6, 8',
			'max history(max, qin)' => '1, 2, 3, 4, 5, 6, 7, 10, 11',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 14',
			'min history(max, trio)' => '2, 5, 10',
			'max history(min, trio)' => '2, 3, 5, 6, 7, 8, 9, 11',
			'max history(max, trio)' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12',
		],
		'win amount' => 125,
		'qin amount' => 430,
		'trio amount' => 679,
		'place amount' => [
			1 => 29,
			4 => 32.5,
			11 => 18,
		],
		'win inter' => '1, 2, 3, 6, 10, 11',
		'win inter 2' => '1, 2, 3, 6, 11',
		'inter inter' => '3, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 11',//count wp: 2
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '3, 4, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '10, 3, 9, 4',
		'interFW' => '3',//count: 1
		'minmax history' => [
			'min history(min, win)' => '3, 4, 5, 6, 10, 12',
			'min history(max, win)' => '6, 11',
			'max history(min, win)' => '2, 11',
			'max history(max, win)' => '1, 6, 7, 8, 10, 12',
			'min history(min, qin)' => '3, 4, 5, 6, 7, 10, 12, 13',
			'min history(max, qin)' => '5, 6, 11, 12',
			'max history(min, qin)' => '2, 4, 9, 11',
			'max history(max, qin)' => '1, 2, 3, 4, 6, 7, 8, 10, 12',
			'min history(min, trio)' => '3, 4, 5, 6, 7, 8, 9, 10, 12, 13',
			'min history(max, trio)' => '3, 5, 6, 11, 12',
			'max history(min, trio)' => '1, 2, 4, 6, 9, 11',
			'max history(max, trio)' => '1, 2, 3, 4, 6, 7, 8, 10, 12',
		],
		'win amount' => 59.5,
		'qin amount' => 128,
		'trio amount' => 460,
		'place amount' => [
			10 => 20,
			3 => 15,
			9 => 35,
		],
		'win inter' => '1, 4, 6, 7, 8, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 4, 6',//count wp: 3
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '4, 6, 10, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '4, 10, 7, 11',
		'interFW' => '4, 10',//count: 2
		'minmax history' => [
			'min history(min, win)' => '1, 2, 4, 6, 7, 8, 9',
			'min history(max, win)' => '',
			'max history(min, win)' => '4, 9',
			'max history(max, win)' => '1, 2, 3, 4, 9, 11',
			'min history(min, qin)' => '1, 2, 3, 4, 6, 7, 8, 9, 10, 11',
			'min history(max, qin)' => '',
			'max history(min, qin)' => '2, 4, 6, 9',
			'max history(max, qin)' => '1, 2, 3, 4, 7, 8, 9, 11, 12',
			'min history(min, trio)' => '1, 2, 3, 4, 6, 7, 8, 9, 10, 11',
			'min history(max, trio)' => '',
			'max history(min, trio)' => '1, 2, 4, 6, 9',
			'max history(max, trio)' => '1, 2, 3, 4, 5, 7, 8, 9, 11, 12',
		],
		'win amount' => 95,
		'qin amount' => 226.5,
		'trio amount' => 749,
		'place amount' => [
			4 => 28.5,
			10 => 16.5,
			7 => 29.5,
		],
		'win inter' => '1, 2, 9, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 6, 10, 12',//count wp: 4
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '3, 6, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'official win' => '6, 5, 11, 3',
		'interFW' => '6, 11',//count: 2
		'minmax history' => [
			'min history(min, win)' => '2, 3, 6, 7, 8, 10, 14',
			'min history(max, win)' => '',
			'max history(min, win)' => '1, 2, 5, 9',
			'max history(max, win)' => '2, 6, 7, 9, 10, 11, 12',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
			'min history(max, qin)' => '',
			'max history(min, qin)' => '1, 2, 3, 5, 9, 10',
			'max history(max, qin)' => '1, 2, 4, 6, 7, 8, 9, 10, 11, 12',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
			'min history(max, trio)' => '',
			'max history(min, trio)' => '1, 2, 3, 5, 8, 9, 10',
			'max history(max, trio)' => '1, 2, 3, 4, 6, 7, 8, 9, 10, 11, 12',
		],
		'win amount' => 34.5,
		'qin amount' => 247,
		'trio amount' => 190,
		'place amount' => [
			6 => 14.5,
			5 => 34.5,
			11 => 10.5,
		],
		'win inter' => '2, 6, 7, 10',
		'win inter 2' => '7',
		'inter inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 6, 11',//count wp: 3
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 2, 3, 4',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '3, 10, 1, 6',
		'interFW' => '1, 3',//count: 2
		'minmax history' => [
			'min history(min, win)' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 13, 14',
			'min history(max, win)' => '2, 4, 6, 7, 8, 12',
			'max history(min, win)' => '',
			'max history(max, win)' => '4',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
			'min history(max, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 12',
			'max history(min, qin)' => '',
			'max history(max, qin)' => '1, 4, 9',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
			'min history(max, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',
			'max history(min, trio)' => '',
			'max history(max, trio)' => '1, 4, 6, 8, 9',
		],
		'win amount' => 44,
		'qin amount' => 282.5,
		'trio amount' => 737,
		'place amount' => [
			3 => 18.5,
			10 => 33.5,
			1 => 21.5,
		],
		'win inter' => '1, 2, 4, 5, 6, 7, 8',
		'win inter 2' => '7',
		'inter inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2, 3, 4',//count wp: 4
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'official win' => '1, 3, 6, 2',
		'interFW' => '1',//count: 1
		'minmax history' => [
			'min history(min, win)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
			'min history(max, win)' => '',
			'max history(min, win)' => '1',
			'max history(max, win)' => '4, 6, 7, 8',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
			'min history(max, qin)' => '',
			'max history(min, qin)' => '1, 6',
			'max history(max, qin)' => '4, 6, 7, 8',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
			'min history(max, trio)' => '',
			'max history(min, trio)' => '1, 6, 11',
			'max history(max, trio)' => '1, 4, 6, 7, 8, 9',
		],
		'win amount' => 39.5,
		'qin amount' => 303,
		'trio amount' => 573,
		'place amount' => [
			1 => 17.5,
			3 => 34,
			6 => 17,
		],
		'win inter' => '4, 5, 6, 7, 8, 9',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 7',//count wp: 2
	],
];
//total place end favorites: 95
//total place end wp: 95
//total place wp: 0
//total sure place: 95
//total win: 0
//total place union: 0
//total: 285
