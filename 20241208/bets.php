<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '2, 3, 5, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 2, 5, 8, 9',
			'qin' => '1, 2, 3, 4, 5, 6, 8, 9, 10',
			'trio' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12',//count trio: 11
			'inter' => '2, 5',
		],
		'win inter' => '8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 3, 5',//count wp: 3
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '1, 3, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '2, 3, 4, 5, 6, 8, 9, 10',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12',//count trio: 11
			'inter' => '3, 6',
		],
		'win inter' => '2, 4, 5, 6, 7, 8, 9, 10',
		'win inter 2' => '6, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
			'place(end-favorites )' => '6',
			'place(end-wp )' => '6',
		],
		'total bets' => 200,
		'wp' => '1, 3, 6',//count wp: 3
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1, 4, 13',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 2, 4',
			'qin' => '1, 2, 3, 4, 8, 11, 14',
			'trio' => '1, 2, 3, 4, 5, 8, 11, 14',//count trio: 8
			'inter' => '1, 4',
		],
		'win inter' => '2, 9',
		'win inter 2' => '1, 2, 4',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 4',//count wp: 2
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '13',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '12, 13',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '',//count wp: 0
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 7, 12, 13',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'all fav history' => [[1, 8, 2], [3, 6, 1]],
		'all fav history values' => '1, 2, 3, 6, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1',//count wp: 1
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '8, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '5, 12, 14',
			'qin' => '1, 2, 5, 11, 12, 14',
			'trio' => '1, 2, 5, 8, 11, 12, 13, 14',//count trio: 8
			'inter' => '',
		],
		'win inter' => '5, 11, 12, 14',
		'win inter 2' => '5, 12, 14',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 13',
		'all fav history' => [[12, 2, 11]],
		'all fav history values' => '2, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '8',//count wp: 1
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '2, 6, 8',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '2, 3, 6, 7, 12',
			'qin' => '1, 2, 3, 4, 6, 7, 8, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',//count trio: 12
			'inter' => '2, 6',
		],
		'win inter' => '2, 7',
		'win inter 2' => '2',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'bets' => [
			'place(end-favorites )' => '8',
			'place(end-wp )' => '8',
		],
		'total bets' => 200,
		'wp' => '2, 6, 8',//count wp: 3
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '1, 2',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 8',
			'qin' => '1, 2, 3, 5, 6, 8, 9, 10, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 8, 9, 10, 11',//count trio: 10
			'inter' => '1, 2',
		],
		'win inter' => '1, 2, 3, 4, 5, 7, 8',
		'win inter 2' => '1, 2, 3, 5, 8',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'all fav history' => [[1, 6, 8]],
		'all fav history values' => '1, 6, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 2',//count wp: 2
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '3, 5, 6, 12, 13',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 6, 7, 8, 12, 13',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',//count trio: 13
			'inter' => '3, 5, 6, 12, 13',
		],
		'win inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 5, 6',//count wp: 3
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '6, 10, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '2, 6, 7, 10',
			'qin' => '2, 5, 6, 7, 10, 12',
			'trio' => '2, 5, 6, 7, 8, 10, 12, 13',//count trio: 8
			'inter' => '6, 10',
		],
		'win inter' => '',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 13, 14',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '6, 10',//count wp: 2
	],
];
//total place end favorites: -200
//total place end wp: -200
//total place wp: 0
//total sure place: 0
//total win: 0
//total: 0
