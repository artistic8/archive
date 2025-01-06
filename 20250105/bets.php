<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 3, 4',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 3, 4, 5, 9, 10',
			'qin' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 9, 10, 11, 12',//count trio: 11
			'inter' => '1, 3, 4',
		],
		'win inter' => '1, 2, 3, 4, 5, 8, 9',
		'win inter 2' => '4, 5',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		'all fav history' => [[4, 3, 9], [4, 1, 2]],
		'all fav history values' => '1, 2, 3, 4, 9',
		'bets' => [
			'place(end-favorites )' => '4',
			'place(end-wp )' => '4',
			'super sure bet' => 'super sure place 4',
		],
		'total bets' => 300,
		'wp' => '1, 3, 4',//count wp: 3
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 6',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 4, 6, 10, 14',
			'qin' => '1, 2, 4, 6, 7, 9, 10, 14',
			'trio' => '1, 2, 4, 5, 6, 7, 9, 10, 14',//count trio: 9
			'inter' => '6',
		],
		'win inter' => '1, 2, 4, 5, 6, 7, 9, 10, 14',
		'win inter 2' => '1, 4, 6, 10, 14',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '2, 6',//count wp: 2
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '1',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '1, 2, 3, 4, 5, 7',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1',//count wp: 1
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 5',
			'qin' => '1, 2, 4, 5, 10, 11',
			'trio' => '1, 2, 4, 5, 7, 10, 11',//count trio: 7
			'inter' => '1',
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 11',
		'win inter 2' => '1, 2, 5',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 7',//count wp: 2
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '4, 5, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '2, 3, 4, 5, 6, 10',
			'qin' => '2, 3, 4, 5, 6, 7, 10, 11, 12',
			'trio' => '1, 2, 3, 4, 5, 6, 7, 10, 11, 12, 13',//count trio: 11
			'inter' => '4, 5',
		],
		'win inter' => '2, 3, 4, 5, 6',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 5, 12',//count wp: 3
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '3, 5, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 9, 10, 11, 12, 13',
			'qin' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 12, 13',//count trio: 12
			'inter' => '3, 5, 10',
		],
		'win inter' => '1, 2, 3, 6, 9, 11, 12',
		'win inter 2' => '12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '3, 5, 10',//count wp: 3
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '4, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'suggestions' => [
			'win' => '2',
			'qin' => '2, 4',
			'trio' => '2, 3, 4',//count trio: 3
			'inter' => '',
		],
		'win inter' => '2, 3, 6, 7',
		'win inter 2' => '2',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
		'all fav history' => [[2, 4, 3]],
		'all fav history values' => '2, 3, 4',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 9',//count wp: 2
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '4, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'suggestions' => [
			'win' => '1, 2, 4, 6, 8, 9, 12',
			'qin' => '1, 2, 3, 4, 6, 7, 8, 9, 12',
			'trio' => '1, 2, 3, 4, 6, 7, 8, 9, 10, 12',//count trio: 10
			'inter' => '4',
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 12',
		'win inter 2' => '1, 2, 4, 6, 8, 9, 12',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '4, 7',//count wp: 2
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '1, 3',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '1, 2, 3, 5, 6, 8, 9, 10',
			'qin' => '1, 2, 3, 5, 6, 7, 8, 9, 10',
			'trio' => '1, 2, 3, 5, 6, 7, 8, 9, 10, 11, 14',//count trio: 11
			'inter' => '1, 3',
		],
		'win inter' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'win inter 2' => '1, 2, 3, 5, 6, 8, 9, 10',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '1, 3',//count wp: 2
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '13',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		'suggestions' => [
			'win' => '',
			'qin' => '',
			'trio' => '',//count trio: 0
			'inter' => '',
		],
		'win inter' => '2, 3, 5, 10, 13',
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 10, 11, 12, 13, 14',
		'bets' => [
		],
		'total bets' => 0,
		'wp' => '13',//count wp: 1
	],
];
//total place end favorites: -100
//total place end wp: -100
//total place wp: 0
//total sure place: -100
//total win: 0
//total: 0
