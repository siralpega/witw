<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PM_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Saint Pierre and Miquelon',
			'code'  => 'PM',
			'type'  => null,
			'paths' => serialize(
				['M3697 10227 c-2 -7 -28 -19 -56 -26 -36 -9 -51 -18 -51 -30 0 -28 -56 -81 -85 -81 -43 0 -85 -27 -85 -55 0 -22 -4 -25 -36 -25 -27 0 -37 -5 -41 -20 -3 -12 -24 -27 -59 -40 -65 -24 -81 -25 -125 -6 -29 12 -37 12 -53 0 -10 -7 -23 -11 -29 -7 -6 3 -15 -1 -21 -9 -6 -8 -21 -20 -33 -27 -13 -6 -23 -20 -23 -30 0 -13 -13 -22 -45 -31 -37 -10 -45 -17 -45 -36 0 -13 -4 -24 -10 -24 -5 0 -10 -15 -10 -33 0 -18 -9 -51 -20 -72 -12 -22 -19 -48 -16 -57 2 -10 0 -16 -6 -15 -5 1 -15 -15 -22 -35 -8 -21 -28 -54 -45 -74 -53 -60 -67 -98 -54 -145 7 -27 8 -53 1 -75 -12 -46 -5 -66 33 -88 23 -13 34 -15 42 -7 49 49 130 -95 144 -254 3 -38 14 -90 25 -114 30 -72 49 -206 55 -392 l6 -177 -36 -88 c-51 -129 -59 -180 -48 -309 5 -61 19 -144 30 -185 17 -63 20 -102 18 -240 -1 -149 1 -171 22 -233 18 -52 21 -79 16 -116 -7 -54 -1 -72 43 -119 16 -17 35 -44 41 -60 9 -20 22 -32 41 -35 16 -4 31 -14 35 -24 3 -10 19 -33 35 -52 25 -29 31 -32 45 -21 14 11 23 8 63 -20 40 -29 50 -31 74 -22 17 6 30 7 34 1 3 -5 0 -9 -5 -9 -20 0 -12 -29 30 -112 65 -130 267 -662 300 -793 11 -44 47 -168 79 -275 51 -174 93 -376 115 -555 3 -27 14 -108 25 -180 24 -164 40 -410 31 -461 -4 -22 -4 -75 1 -119 4 -46 4 -99 -2 -125 -17 -83 -22 -177 -10 -185 21 -13 50 26 51 69 l0 41 16 -32 c11 -22 24 -33 39 -33 12 0 29 -11 38 -25 l17 -26 -42 3 c-27 1 -45 -3 -53 -13 -10 -13 -67 -43 -70 -37 -1 2 -7 14 -13 28 -10 24 -11 24 -23 -20 -23 -77 -79 -143 -116 -135 -15 3 -24 -2 -32 -21 -16 -34 -16 -34 13 -34 21 0 24 -3 16 -17 -5 -10 -13 -27 -17 -38 -6 -19 -7 -19 -13 3 -6 21 -7 21 -28 7 -20 -14 -22 -24 -25 -178 l-3 -162 -31 -45 c-17 -25 -35 -56 -39 -70 -4 -14 -18 -46 -31 -72 -19 -38 -31 -49 -65 -60 -31 -10 -47 -23 -60 -49 -29 -55 -38 -61 -75 -54 -33 6 -79 -10 -114 -40 -18 -16 -119 -55 -141 -55 -26 0 -122 -46 -141 -66 -17 -20 -42 -80 -52 -126 -4 -16 -13 -28 -21 -28 -8 0 -28 -18 -43 -40 -15 -21 -32 -39 -39 -40 -6 0 -14 -8 -17 -18 -4 -11 -17 -25 -31 -32 -13 -7 -27 -26 -30 -42 -4 -15 -22 -45 -41 -64 -18 -20 -32 -40 -29 -44 3 -4 -9 -13 -26 -20 -17 -7 -37 -24 -46 -37 -8 -12 -24 -23 -34 -23 -40 0 -18 -122 30 -164 28 -26 29 -115 1 -170 -17 -35 -18 -42 -5 -65 14 -25 14 -26 15 -3 0 42 39 103 75 118 19 8 42 14 52 14 10 0 34 11 54 24 35 24 39 24 139 15 92 -7 109 -12 146 -39 23 -16 47 -30 53 -30 34 0 57 -155 29 -200 -10 -15 -10 -27 0 -54 10 -27 10 -42 -2 -77 -7 -24 -21 -78 -31 -119 -9 -41 -23 -90 -31 -109 -19 -46 -18 -51 17 -104 23 -35 31 -58 31 -93 0 -26 3 -56 8 -68 7 -20 8 -19 21 9 19 43 60 108 78 122 21 18 68 16 75 -2 3 -8 13 -15 21 -15 9 0 13 -5 10 -10 -7 -12 16 -70 28 -70 4 0 19 7 32 16 18 11 29 13 38 6 6 -5 32 -17 57 -25 34 -12 44 -20 42 -34 -2 -10 -8 -20 -13 -21 -8 -3 -39 -65 -39 -78 0 -1 17 0 37 3 33 6 36 4 29 -13 -24 -61 -30 -105 -17 -113 9 -6 11 -18 7 -37 l-8 -29 29 28 c16 15 36 27 44 27 16 0 78 57 147 135 40 46 43 48 57 29 14 -19 15 -19 52 2 24 14 38 30 39 43 2 38 152 251 176 251 5 0 45 27 89 61 44 33 94 66 113 74 18 8 47 28 65 44 18 17 36 31 40 31 6 0 28 21 121 115 22 21 45 52 51 67 9 22 18 28 38 26 14 0 56 15 92 35 36 21 75 37 87 37 14 0 46 24 85 63 34 35 75 71 90 81 16 10 36 31 45 47 10 16 24 29 33 29 8 0 29 16 46 35 17 19 38 35 46 35 18 0 177 151 177 167 0 6 22 28 49 47 42 31 53 46 71 101 12 35 27 66 33 68 9 3 9 10 -1 27 -12 20 -10 25 21 55 47 46 53 82 19 117 -21 23 -22 28 -9 28 21 0 21 9 2 37 -13 19 -13 25 -1 50 40 81 48 162 16 170 -11 3 -18 9 -15 13 3 5 1 11 -5 15 -6 4 -3 16 10 32 26 34 25 49 -5 69 -14 9 -25 25 -25 36 0 33 -32 78 -56 78 -32 0 -45 22 -43 72 1 44 -15 150 -26 168 -3 6 1 10 9 10 11 0 16 9 16 26 0 24 -3 26 -31 20 -17 -3 -39 -6 -49 -6 -10 0 -26 -13 -37 -30 l-19 -29 -69 48 c-53 37 -71 56 -75 78 -4 19 -11 28 -25 28 -11 0 -29 15 -42 35 -13 19 -36 49 -51 65 l-27 31 -27 -19 c-23 -17 -33 -18 -81 -10 -59 10 -100 1 -125 -30 -19 -23 -107 -50 -134 -42 -27 9 -78 54 -78 70 0 6 -16 25 -35 42 -22 20 -35 40 -35 56 0 22 -8 28 -52 43 -29 9 -58 21 -65 26 -7 6 -44 10 -83 11 l-70 1 -11 35 c-6 20 -23 51 -36 69 -58 77 -92 175 -119 339 -26 155 -26 162 -14 355 12 202 37 385 56 409 6 8 14 37 17 64 3 28 23 122 45 211 34 138 47 173 89 246 28 46 60 106 72 132 11 27 42 68 67 91 37 35 45 48 42 71 -3 27 -7 29 -50 32 -38 2 -48 0 -48 -12 0 -20 -19 -20 -47 -1 -14 10 -23 28 -25 53 -5 59 -36 55 -89 -10 -24 -29 -65 -75 -90 -103 -149 -161 -147 -159 -176 -125 -27 31 -36 24 -29 -20 3 -22 2 -40 -2 -40 -14 0 -31 46 -25 68 3 14 -4 27 -27 43 -40 30 -140 210 -140 252 0 43 -30 159 -46 177 -35 40 -174 373 -161 386 3 3 16 -2 30 -11 31 -20 238 -75 283 -75 18 0 36 -4 39 -10 3 -5 21 -10 38 -10 18 0 61 -14 97 -31 47 -22 89 -33 155 -40 112 -12 131 -8 140 31 4 16 13 30 20 30 7 0 16 7 19 16 3 8 11 12 16 9 9 -6 92 4 183 22 28 5 28 4 14 -19 -24 -37 -31 -103 -13 -121 9 -8 19 -17 24 -19 11 -4 58 -117 65 -154 8 -40 -17 -77 -44 -69 -16 5 -39 -12 -105 -79 -90 -91 -91 -93 -21 -110 36 -8 50 0 153 90 136 119 200 158 257 159 30 1 52 7 58 16 12 19 11 26 -2 35 -7 4 6 24 33 53 50 52 108 142 108 169 0 9 7 30 15 46 9 16 27 70 41 119 13 48 36 118 50 155 14 37 43 130 64 207 21 77 52 169 69 205 17 36 31 70 31 76 0 6 6 17 14 23 7 6 16 34 20 62 4 29 15 58 26 69 25 25 25 55 0 80 -18 18 -20 33 -20 129 0 66 -4 112 -10 116 -7 4 -7 11 -2 18 5 7 5 53 0 112 -9 97 -10 101 -46 138 -20 21 -50 46 -67 54 -16 8 -41 25 -55 38 -54 48 -159 94 -259 115 -183 37 -501 176 -656 286 -65 46 -149 130 -240 239 -44 53 -71 76 -114 96 -38 17 -70 43 -101 79 -24 29 -62 61 -85 71 -48 22 -160 26 -168 6 -2 -7 -25 -18 -51 -25 -25 -6 -54 -21 -63 -32 -12 -13 -30 -20 -55 -20 -21 0 -38 -4 -38 -10 0 -5 5 -10 10 -10 18 0 10 -22 -10 -27 -17 -4 -20 -14 -20 -54 0 -36 -9 -69 -35 -121 -40 -81 -98 -164 -125 -178 -10 -5 -21 -23 -25 -40 -4 -16 -11 -32 -16 -35 -12 -8 -11 -52 1 -60 8 -5 7 -11 -1 -21 -6 -8 -9 -23 -6 -34 3 -11 -1 -23 -8 -28 -7 -4 -17 -23 -22 -42 -18 -70 -28 -27 -34 147 -5 147 -10 189 -28 243 -13 37 -25 103 -28 154 l-6 89 141 -7 c135 -6 143 -5 163 15 l21 21 -61 56 c-34 32 -61 65 -61 75 0 9 -24 39 -53 67 -54 51 -54 52 -67 138 -17 110 -17 197 -1 216 16 19 135 58 155 50 10 -4 37 10 71 35 30 23 66 46 79 53 17 7 28 22 32 45 3 18 14 38 23 43 9 4 32 31 51 60 25 36 41 50 55 48 11 -1 47 15 80 36 33 20 75 46 92 56 l33 20 -4 103 c-4 95 -19 157 -37 157 -4 0 -9 -6 -12 -13z', 'M6806 1898 c-57 -51 -57 -52 -34 -64 14 -8 60 -13 115 -14 92 0 93 0 108 29 8 17 25 31 37 33 l23 3 -27 28 c-25 25 -31 27 -83 21 -35 -4 -60 -3 -68 5 -11 9 -26 0 -71 -41z', 'M6871 1676 c-22 -24 -37 -28 -159 -44 -50 -6 -68 -13 -82 -32 -17 -23 -25 -25 -94 -24 -58 1 -76 -2 -76 -12 0 -7 -23 -23 -50 -35 -34 -14 -50 -27 -49 -38 1 -9 -2 -24 -6 -35 -5 -11 -3 -26 3 -37 17 -27 15 -32 -11 -25 -19 4 -26 0 -35 -18 -7 -15 -23 -27 -44 -31 -51 -12 -68 -26 -99 -87 -22 -44 -39 -63 -69 -78 -35 -18 -39 -23 -34 -48 4 -21 1 -29 -17 -37 -13 -5 -32 -28 -44 -50 -12 -22 -36 -67 -53 -99 -18 -32 -32 -70 -32 -84 0 -26 -46 -108 -86 -152 -12 -14 -46 -71 -74 -128 -37 -73 -57 -102 -70 -102 -14 0 -18 -7 -16 -32 l1 -33 -58 -3 -58 -3 3 -42 c3 -38 6 -43 41 -56 32 -12 47 -12 87 -2 44 11 53 11 80 -5 19 -12 30 -26 30 -41 0 -13 5 -23 10 -23 6 0 10 15 9 33 -3 46 21 105 45 111 48 13 124 6 147 -14 14 -11 18 -19 11 -20 -21 0 -62 -51 -62 -76 0 -30 -29 -45 -82 -42 -31 2 -42 -1 -40 -10 1 -7 -7 -25 -18 -39 -29 -37 -25 -52 20 -90 30 -26 40 -42 40 -64 0 -38 28 -39 41 -1 5 16 23 39 39 51 27 19 29 26 24 61 -9 53 0 81 35 117 23 25 39 32 75 34 39 3 49 -1 62 -20 11 -15 20 -19 26 -13 6 6 25 8 43 5 28 -5 34 -2 41 20 5 15 29 51 54 81 41 51 48 55 88 56 l42 0 0 -45 c0 -30 -5 -47 -16 -53 -14 -8 -15 -15 -5 -43 6 -19 14 -51 18 -72 5 -26 17 -44 35 -55 26 -15 29 -15 55 4 34 25 87 44 123 44 29 0 59 28 78 73 14 32 49 36 87 11 29 -19 24 -34 -12 -34 -25 0 -26 0 -8 -20 25 -28 68 -26 80 2 7 16 20 24 44 26 18 2 51 15 72 29 25 17 47 24 64 21 41 -8 92 45 100 104 7 53 17 46 -98 68 -36 7 -61 18 -64 28 -6 13 5 53 31 113 5 12 0 18 -19 23 -72 18 -93 62 -60 126 13 25 13 30 1 30 -27 0 -41 -32 -41 -94 l0 -61 -32 -3 c-37 -4 -40 5 -22 57 8 23 8 36 1 43 -8 8 -16 -6 -28 -50 -17 -60 -26 -73 -39 -52 -4 6 -23 7 -46 4 -27 -5 -39 -3 -39 5 0 19 56 71 77 71 10 0 28 15 41 34 13 19 34 37 48 40 28 7 23 26 -7 26 -26 0 -24 10 9 37 23 19 25 24 12 33 -12 8 -11 10 7 10 39 0 34 18 -7 25 -24 4 -40 12 -40 21 0 16 39 63 95 113 156 142 156 142 162 208 7 77 -1 111 -30 123 -17 7 -18 9 -4 9 19 1 22 28 8 99 -9 47 -53 102 -82 102 -9 0 -19 8 -21 18 -3 10 -23 32 -45 50 l-40 31 -22 -23z', 'M7508 1219 c-10 -6 -18 -19 -18 -29 0 -25 5 -25 31 1 23 23 14 43 -13 28z', 'M7545 1100 c-3 -6 -4 -19 0 -30 7 -22 -21 -70 -41 -70 -8 0 -14 -5 -14 -10 0 -17 31 -24 51 -12 10 7 25 12 33 12 20 0 27 69 10 98 -16 24 -29 28 -39 12z', 'M7276 1055 c7 -28 -5 -32 -36 -12 -26 15 -40 -2 -40 -49 0 -24 -10 -41 -45 -73 -24 -22 -51 -41 -60 -41 -17 0 -19 -18 -5 -55 9 -23 14 -26 36 -21 18 5 32 2 45 -9 21 -20 39 -12 39 18 0 12 9 37 20 55 24 40 25 59 3 64 -20 4 81 94 112 99 12 3 21 14 23 27 3 20 -1 22 -47 22 -50 0 -51 -1 -45 -25z']
			),
			'location' => DB::raw('POINT(46.941936, -56.27111)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}