<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 6, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '11, 6, 5, 14',
		'interFW' => '6, 11',//count: 2
		'minmax history' => [
			'min history(min, win)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
			'min history(max, win)' => '',
			'max history(min, win)' => '1, 3',
			'max history(max, win)' => '5, 7, 8, 9, 11, 12',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 13',
			'min history(max, qin)' => '',
			'max history(min, qin)' => '1, 3, 4, 7, 10',
			'max history(max, qin)' => '2, 4, 5, 7, 8, 9, 10, 11, 12',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
			'min history(max, trio)' => '',
			'max history(min, trio)' => '1, 3, 4, 5, 7, 10',
			'max history(max, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		],
		'win amount' => 63,
		'qin amount' => 142,
		'trio amount' => 435,
		'place amount' => [
			11 => 19,
			6 => 19.5,
			5 => 40.5,
		],
		'win inter' => '5, 7, 9, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 6, 11',//count wp: 3
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 4, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '5, 10, 14, 2',
		'interFW' => '5',//count: 1
		'minmax history' => [
			'min history(min, win)' => '1, 2, 4, 5, 6, 7, 10, 12, 13, 14',
			'min history(max, win)' => '5, 7, 8, 9, 12',
			'max history(min, win)' => '2',
			'max history(max, win)' => '6, 9',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 12, 13, 14',
			'min history(max, qin)' => '4, 5, 7, 8, 9, 12',
			'max history(min, qin)' => '1, 2',
			'max history(max, qin)' => '4, 6, 9, 11',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12, 13, 14',
			'min history(max, trio)' => '1, 2, 4, 5, 6, 7, 8, 9, 10, 12',
			'max history(min, trio)' => '1, 2, 4',
			'max history(max, trio)' => '2, 3, 4, 6, 9, 11',
		],
		'win amount' => 50.5,
		'qin amount' => 812,
		'trio amount' => 2998,
		'place amount' => [
			5 => 18,
			10 => 72,
			14 => 31,
		],
		'win inter' => '2, 4, 5, 7, 9, 12',
		'win inter 2' => '4, 5',
		'inter inter' => '4, 5',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
			'place(end-favorites )' => '5',
			'1 won(place bet)' => 180,
			'place(end-wp )' => '5',
			'2 won(place bet)' => 180,
			'super sure bet' => 'super sure place 5',
			'5 won(place bet)' => 180,
		],
		'total bets' => 300,
		'wp' => '2, 4, 5',//count wp: 3
		'total won in race 2' => 240,
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '2, 3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '10, 3, 4, 5',
		'interFW' => '3',//count: 1
		'minmax history' => [
			'min history(min, win)' => '1, 2, 3, 5, 7, 8, 9, 10, 11, 12',
			'min history(max, win)' => '1, 3, 4, 5, 7, 8, 12',
			'max history(min, win)' => '1, 5',
			'max history(max, win)' => '3, 7, 9',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 12, 13',
			'min history(max, qin)' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 12',
			'max history(min, qin)' => '1, 2, 5, 7',
			'max history(max, qin)' => '1, 3, 4, 7, 8, 9',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
			'min history(max, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'max history(min, trio)' => '1, 2, 5, 6, 7',
			'max history(max, trio)' => '1, 3, 4, 5, 7, 8, 9',
		],
		'win amount' => 61.5,
		'qin amount' => 58.5,
		'trio amount' => 215,
		'place amount' => [
			10 => 18,
			3 => 11,
			4 => 32,
		],
		'win inter' => '1, 2, 3, 5, 7, 8, 9, 11, 12',
		'win inter 2' => '2, 3, 5, 7, 9, 11',
		'inter inter' => '2, 3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 3',//count wp: 2
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '5, 3, 6, 11',
		'interFW' => '5',//count: 1
		'minmax history' => [
			'min history(min, win)' => '2, 5, 6, 10',
			'min history(max, win)' => '2, 5, 6, 10',
			'max history(min, win)' => '1, 2, 4, 5',
			'max history(max, win)' => '1, 2, 4, 5',
			'min history(min, qin)' => '2, 3, 5, 6, 10, 11, 12',
			'min history(max, qin)' => '2, 3, 5, 6, 10, 11, 12',
			'max history(min, qin)' => '1, 2, 3, 4, 5, 8, 12',
			'max history(max, qin)' => '1, 2, 3, 4, 5, 8, 12',
			'min history(min, trio)' => '2, 3, 4, 5, 6, 9, 10, 11, 12',
			'min history(max, trio)' => '2, 3, 4, 5, 6, 9, 10, 11, 12',
			'max history(min, trio)' => '1, 2, 3, 4, 5, 8, 9, 12, 13',
			'max history(max, trio)' => '1, 2, 3, 4, 5, 8, 9, 12, 13',
		],
		'win amount' => 23.5,
		'qin amount' => 342,
		'trio amount' => 415,
		'place amount' => [
			5 => 13,
			3 => 50,
			6 => 20.5,
		],
		'win inter' => '1, 2, 4, 5, 6, 10, 11',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'all fav history' => [[2, 5, 9], [5, 12, 4]],
		'all fav history values' => '2, 4, 5, 9, 12',
		'all inter fav' => '5',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '5',//count wp: 1
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'official win' => '1, 8, 2, 7',
		'interFW' => '1',//count: 1
		'minmax history' => [
			'min history(min, win)' => '1, 2, 3, 4, 5, 6, 7, 8, 12, 13',
			'min history(max, win)' => '1, 2, 3, 4, 5, 6, 7, 8, 12, 13',
			'max history(min, win)' => '1, 3',
			'max history(max, win)' => '1, 3',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
			'min history(max, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
			'max history(min, qin)' => '1, 3, 6, 12',
			'max history(max, qin)' => '1, 3, 6, 12',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
			'min history(max, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
			'max history(min, trio)' => '1, 3, 6, 9, 12',
			'max history(max, trio)' => '1, 3, 6, 9, 12',
		],
		'win amount' => 21,
		'qin amount' => 70,
		'trio amount' => 291,
		'place amount' => [
			1 => 13,
			8 => 17,
			2 => 36,
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 7, 8, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'all fav history' => [[3, 6, 1], [1, 12, 9]],
		'all fav history values' => '1, 3, 6, 9, 12',
		'all inter fav' => '1',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1',//count wp: 1
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 13, 14',
		'official win' => '7, 2, 3, 4',
		'interFW' => '3, 7',//count: 2
		'minmax history' => [
			'min history(min, win)' => '1, 2, 3, 5, 6, 7, 9, 10, 12',
			'min history(max, win)' => '7, 12, 14',
			'max history(min, win)' => '1, 3, 5',
			'max history(max, win)' => '5, 9, 10',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'min history(max, qin)' => '1, 7, 10, 12, 14',
			'max history(min, qin)' => '1, 2, 3, 5, 7, 8',
			'max history(max, qin)' => '5, 7, 9, 10, 11, 12',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
			'min history(max, trio)' => '1, 4, 6, 7, 8, 10, 12, 14',
			'max history(min, trio)' => '1, 2, 3, 5, 6, 7, 8, 10',
			'max history(max, trio)' => '1, 5, 6, 7, 9, 10, 11, 12',
		],
		'win amount' => 20,
		'qin amount' => 85,
		'trio amount' => 76,
		'place amount' => [
			7 => 11,
			2 => 22,
			3 => 15.5,
		],
		'win inter' => '1, 3, 5, 8, 9, 10',
		'win inter 2' => '1, 3, 9',
		'inter inter' => '3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'all fav history' => [[9, 11, 6]],
		'all fav history values' => '6, 9, 11',
		'all inter fav' => '',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 7',//count wp: 2
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'official win' => '2, 10, 9, 3',
		'interFW' => '',//count: 0
		'minmax history' => [
			'min history(min, win)' => '1, 2, 3, 5, 6, 7, 10, 11, 12',
			'min history(max, win)' => '2, 3, 6, 7, 8, 10, 14',
			'max history(min, win)' => '3, 11',
			'max history(max, win)' => '1, 5, 9',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'min history(max, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
			'max history(min, qin)' => '1, 3, 10, 11',
			'max history(max, qin)' => '1, 2, 3, 5, 9',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'min history(max, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
			'max history(min, trio)' => '1, 2, 3, 8, 10, 11',
			'max history(max, trio)' => '1, 2, 3, 5, 8, 9',
		],
		'win amount' => 110,
		'qin amount' => 572.5,
		'trio amount' => 3213,
		'place amount' => [
			2 => 28.5,
			10 => 26,
			9 => 41,
		],
		'win inter' => '1, 2, 3, 5, 6, 7, 10',
		'win inter 2' => '1, 2, 3, 6, 7, 10',
		'inter inter' => '1, 3',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'all fav history' => [[1, 2, 8]],
		'all fav history values' => '1, 2, 8',
		'all inter fav' => '1',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3',//count wp: 2
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '6, 8, 4, 7',
		'interFW' => '4, 6, 8',//count: 3
		'minmax history' => [
			'min history(min, win)' => '2, 4, 6, 7, 8, 12',
			'min history(max, win)' => '',
			'max history(min, win)' => '3, 4',
			'max history(max, win)' => '1, 2, 4, 6, 8, 9, 14',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 12',
			'min history(max, qin)' => '',
			'max history(min, qin)' => '1, 3, 4, 9, 10',
			'max history(max, qin)' => '1, 2, 3, 4, 5, 6, 8, 9, 11, 12, 14',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',
			'min history(max, trio)' => '',
			'max history(min, trio)' => '1, 3, 4, 6, 8, 9, 10',
			'max history(max, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 14',
		],
		'win amount' => 65.5,
		'qin amount' => 159,
		'trio amount' => 125,
		'place amount' => [
			6 => 20.5,
			8 => 20,
			4 => 16,
		],
		'win inter' => '2, 4, 5, 6, 8, 9, 12',
		'win inter 2' => '8',
		'inter inter' => '8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
			'place(end-favorites )' => '8',
			'1 won(place bet)' => 200,
			'place(end-wp )' => '8',
			'2 won(place bet)' => 200,
			'super sure bet' => 'super sure place 8',
			'5 won(place bet)' => 200,
		],
		'total bets' => 300,
		'wp' => '4, 6, 8',//count wp: 3
		'total won in race 8' => 300,
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '2, 3, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '3, 5, 2, 14',
		'interFW' => '2, 3, 5',//count: 3
		'minmax history' => [
			'min history(min, win)' => '2, 3, 4, 5, 6, 8, 9, 11, 12',
			'min history(max, win)' => '4, 6, 9, 10',
			'max history(min, win)' => '',
			'max history(max, win)' => '4, 5, 8',
			'min history(min, qin)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
			'min history(max, qin)' => '1, 3, 4, 5, 6, 9, 10',
			'max history(min, qin)' => '',
			'max history(max, qin)' => '3, 4, 5, 8, 10',
			'min history(min, trio)' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
			'min history(max, trio)' => '1, 2, 3, 4, 5, 6, 8, 9, 10',
			'max history(min, trio)' => '',
			'max history(max, trio)' => '3, 4, 5, 8, 9, 10',
		],
		'win amount' => 77,
		'qin amount' => 733,
		'trio amount' => 859,
		'place amount' => [
			3 => 26.5,
			5 => 47,
			2 => 23.5,
		],
		'win inter' => '1, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter 2' => '5',
		'inter inter' => '5',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
			'place(end-favorites )' => '5',
			'1 won(place bet)' => 470,
			'place(end-wp )' => '5',
			'2 won(place bet)' => 470,
		],
		'total bets' => 200,
		'wp' => '2, 3, 5',//count wp: 3
		'total won in race 9' => 740,
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '3, 5, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'official win' => '12, 3, 11, 5',
		'interFW' => '3, 11',//count: 2
		'minmax history' => [
			'min history(min, win)' => '5, 12, 14',
			'min history(max, win)' => '',
			'max history(min, win)' => '3',
			'max history(max, win)' => '1, 4, 7, 8, 9, 14',
			'min history(min, qin)' => '1, 3, 4, 5, 12, 14',
			'min history(max, qin)' => '',
			'max history(min, qin)' => '3, 5',
			'max history(max, qin)' => '1, 3, 4, 5, 7, 8, 9, 10, 11, 14',
			'min history(min, trio)' => '1, 3, 4, 5, 11, 12, 14',
			'min history(max, trio)' => '',
			'max history(min, trio)' => '3, 5, 8',
			'max history(max, trio)' => '1, 2, 3, 4, 5, 7, 8, 9, 10, 11, 14',
		],
		'win amount' => 92,
		'qin amount' => 478,
		'trio amount' => 676,
		'place amount' => [
			12 => 26.5,
			3 => 30.5,
			11 => 19,
		],
		'win inter' => '1, 4',
		'win inter 2' => '4',
		'inter inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12, 13, 14',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 5, 11',//count wp: 3
	],
];
//total place end favorites: 550
//total place end wp: 550
//total place wp: 0
//total sure place: 180
//total win: 0
//total place union: 0
//total: 1280
