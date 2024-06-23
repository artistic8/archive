<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'favorites' => '1, 2, 7, 12',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '3, 4, 5, 6, 8, 9, 10, 11',//count: 8 
		'official win' => '1, 7, 12, 11',
		'win amount' => 25.5,
		'qin amount' => 99,
		'trio amount' => 149,
		'place amount' => [
			1 => 12.5,
			7 => 18.5,
			12 => 24.5,
		],
		'win inter' => '',
		'win & non fav inter' => '',
		'count sets' => 14,
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10',
		'win($100)' => '1, 2, 7',
		'place($200)' => '7',
		'total bets' => 500,
		'2 won(win bet)' => 255,
		'2 won(place bet)' => 370,
		'total won in race' => 125,
	],
	'2' => [
		/**
		Race 2
		*/
		'favorites' => '2, 10, 13, 14',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '1, 3, 4, 5, 6, 7, 8, 9, 11, 12',//count: 10 
		'official win' => '10, 9, 2, 6',
		'win amount' => 40,
		'qin amount' => 119.5,
		'trio amount' => 187,
		'place amount' => [
			10 => 16,
			9 => 19.5,
			2 => 16.5,
		],
		'win inter' => '',
		'win & non fav inter' => '',
		'count sets' => 10,
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9',
	],
	'3' => [
		/**
		Race 3
		*/
		'favorites' => '5, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '1, 2, 3, 4, 6',//count: 5 
		'official win' => '9, 11, 4, 8',
		'win amount' => 94.5,
		'qin amount' => 220.5,
		'trio amount' => 1328,
		'place amount' => [
			9 => 28.5,
			11 => 18,
			4 => 44.5,
		],
		'win inter' => '',
		'win & non fav inter' => '1, 3, 4, 6',
		'count sets' => 4,
		'allValues' => '1, 2, 3, 5, 6, 7',
	],
	'4' => [
		/**
		Race 4
		*/
		'favorites' => '1, 4, 5',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '2, 3',//count: 2 
		'official win' => '1, 5, 13, 3',
		'win amount' => 20.5,
		'qin amount' => 165.5,
		'trio amount' => 1023,
		'place amount' => [
			1 => 13,
			5 => 39,
			13 => 59,
		],
		'win inter' => '1, 4, 5',
		'win & non fav inter' => '',
		'count sets' => 11,
		'allValues' => '1, 2, 3, 4, 5, 6, 8, 10, 11, 12',
		'place($200)' => '5',
		'total bets' => 200,
		'1 won(place bet)' => 780,
		'total won in race' => 580,
	],
	'5' => [
		/**
		Race 5
		*/
		'favorites' => '1, 4, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '2, 3, 5, 6, 7, 8, 9, 10',//count: 8 
		'official win' => '1, 7, 2, 9',
		'win amount' => 17.5,
		'qin amount' => 52.5,
		'trio amount' => 258,
		'place amount' => [
			1 => 11,
			7 => 18,
			2 => 43,
		],
		'win inter' => '',
		'win & non fav inter' => '3',
		'count sets' => 1,
		'allValues' => '1, 3, 10, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'favorites' => '1, 4, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '2, 3, 5, 6, 7, 8',//count: 6 
		'official win' => '11, 9, 13, 4',
		'win amount' => 77.5,
		'qin amount' => 239.5,
		'trio amount' => 1257,
		'place amount' => [
			11 => 20.5,
			9 => 25.5,
			13 => 41,
		],
		'win inter' => '1',
		'win & non fav inter' => '8',
		'count sets' => 7,
		'allValues' => '1, 2, 3, 5, 6, 7, 8, 9, 10',
	],
	'7' => [
		/**
		Race 7
		*/
		'favorites' => '1, 4, 7',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '2, 3, 5, 6',//count: 4 
		'official win' => '1, 3, 5, 8',
		'win amount' => 14.5,
		'qin amount' => 41.5,
		'trio amount' => 102,
		'place amount' => [
			1 => 11,
			3 => 14.5,
			5 => 27.5,
		],
		'win inter' => '',
		'win & non fav inter' => '2, 3',
		'count sets' => 2,
		'allValues' => '1, 2, 3, 5, 6',
	],
	'8' => [
		/**
		Race 8
		*/
		'favorites' => '7, 11',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '1, 2, 3, 4, 5, 6, 8, 9, 10',//count: 9 
		'official win' => '1, 4, 11, 2',
		'win amount' => 1650,
		'qin amount' => 11266,
		'trio amount' => 17955,
		'place amount' => [
			1 => 307,
			4 => 43.5,
			11 => 27,
		],
		'win inter' => '',
		'win & non fav inter' => '3, 4',
		'count sets' => 12,
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8',
	],
	'9' => [
		/**
		Race 9
		*/
		'favorites' => '6, 7, 9',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '1, 2, 3, 4, 5, 8',//count: 6 
		'official win' => '9, 1, 3, 13',
		'win amount' => 15,
		'qin amount' => 60,
		'trio amount' => 117,
		'place amount' => [
			9 => 10.1,
			1 => 21.5,
			3 => 19,
		],
		'win inter' => '',
		'win & non fav inter' => '8',
		'count sets' => 15,
		'allValues' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11',
	],
	'10' => [
		/**
		Race 10
		*/
		'favorites' => '1, 3, 4, 10',
		'runners' => '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14',
		//if count(non favorites) = 12 then favorites win?
		'non favorites' => '2, 5, 6, 7, 8, 9',//count: 6 
		'official win' => '11, 9, 10, 12',
		'win amount' => 404.5,
		'qin amount' => 4495,
		'trio amount' => 4176,
		'place amount' => [
			11 => 85.5,
			9 => 72.5,
			10 => 15,
		],
		'win inter' => '4, 10',
		'win & non fav inter' => '',
		'count sets' => 0,
		'allValues' => '',
	],
];
//total win: -45
//total place: 750
//total qin: 0
//total trio: 0
//total: 705
