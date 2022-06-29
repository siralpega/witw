<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CD_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Congo [DRC]',
			'code'  => 'CD',
			'type'  => null,
			'paths' => serialize(
				['M7089 10218 l-46 -10 -18 -79 c-18 -77 -19 -79 -48 -79 -16 0 -43 -10 -60 -22 -17 -13 -65 -30 -107 -38 l-75 -16 -98 38 c-54 21 -104 38 -111 38 -8 0 -19 -13 -25 -28 -9 -21 -26 -34 -69 -49 -31 -12 -142 -53 -247 -92 -104 -39 -196 -71 -204 -71 -8 0 -24 9 -35 19 -12 11 -65 31 -118 44 l-98 25 -50 -41 c-31 -25 -53 -52 -58 -71 -7 -25 -14 -32 -40 -34 -29 -3 -32 -6 -32 -39 0 -19 -7 -59 -16 -89 -14 -48 -19 -54 -48 -59 -37 -7 -110 4 -284 46 l-123 29 -39 -20 -38 -20 -56 25 c-36 16 -75 25 -107 25 -37 0 -67 9 -122 36 l-72 37 -65 -16 c-61 -14 -66 -14 -101 4 -21 10 -40 27 -42 36 -3 10 -8 29 -11 43 -9 36 -47 76 -82 84 -53 14 -198 108 -249 162 l-50 53 -55 -9 c-30 -6 -125 -36 -210 -69 l-155 -59 -18 -52 c-10 -30 -32 -65 -51 -83 -26 -25 -35 -43 -40 -83 -7 -50 -9 -52 -57 -75 -27 -12 -54 -28 -59 -34 -6 -8 -7 -76 -2 -186 9 -169 10 -175 39 -225 l31 -51 -19 -94 c-26 -126 -58 -205 -134 -324 -74 -117 -165 -318 -165 -366 0 -19 10 -77 21 -131 l22 -96 -38 -51 c-30 -42 -39 -64 -45 -118 -5 -37 -13 -69 -18 -71 -26 -8 -46 -33 -63 -77 -18 -47 -18 -48 2 -77 17 -23 19 -37 14 -81 -6 -47 -4 -54 18 -75 24 -23 24 -23 9 -87 -13 -54 -20 -66 -42 -74 -23 -7 -32 -26 -68 -128 l-42 -118 22 -62 23 -62 -32 -65 c-29 -59 -35 -65 -70 -71 -55 -9 -64 -17 -70 -65 l-6 -43 -102 -48 c-146 -69 -202 -131 -300 -334 l-73 -150 -85 -68 -85 -67 -8 -98 c-4 -53 -4 -200 0 -325 l6 -229 -47 -66 c-26 -37 -63 -110 -83 -162 l-36 -95 -54 -8 c-30 -4 -78 -18 -107 -31 -43 -20 -54 -30 -61 -58 -8 -31 -11 -33 -55 -36 -44 -3 -50 -7 -74 -45 -14 -23 -63 -82 -108 -132 -45 -49 -100 -118 -123 -152 l-41 -61 -68 15 c-88 19 -127 57 -138 130 -5 41 -3 59 15 93 l21 41 -26 45 c-14 24 -29 44 -33 44 -4 0 -49 -27 -101 -59 -94 -59 -95 -59 -135 -47 -72 22 -88 11 -109 -75 l-18 -75 -75 -22 -74 -22 -70 35 c-38 19 -76 35 -83 35 -8 0 -56 -22 -108 -50 -64 -33 -113 -68 -153 -108 l-58 -60 1 -196 2 -196 -48 0 c-26 0 -58 -3 -71 -6 -22 -6 -23 -10 -17 -58 4 -28 9 -54 11 -57 8 -14 105 9 127 29 14 13 36 22 55 22 20 0 35 6 38 15 4 8 18 15 33 15 14 0 48 7 75 15 42 13 177 15 916 15 l867 0 22 -24 23 -25 28 21 c22 16 36 19 62 14 29 -6 37 -15 71 -85 36 -74 37 -81 31 -147 -9 -94 33 -254 75 -290 34 -28 55 -93 46 -143 -6 -34 -2 -43 38 -92 24 -30 49 -69 55 -87 13 -37 68 -118 117 -172 21 -22 40 -60 53 -105 27 -91 43 -101 126 -84 44 8 81 9 129 2 37 -5 69 -7 72 -5 3 3 5 23 5 44 0 33 3 38 23 38 12 0 38 -5 57 -11 21 -6 72 -7 128 -4 80 6 92 9 88 23 -2 10 -7 32 -11 49 l-7 33 54 0 54 0 23 -46 22 -47 117 7 c64 4 141 9 171 13 l53 6 -5 76 c-2 42 -8 84 -12 93 -5 13 2 19 35 29 l41 13 -6 95 c-4 67 -2 111 8 146 l13 50 170 -3 c93 -2 181 -6 196 -8 23 -5 28 -1 34 20 6 25 9 26 81 26 l75 0 -6 -47 c-3 -27 -7 -70 -8 -98 l-2 -50 239 3 c132 1 274 5 317 8 l76 6 13 -56 c10 -48 10 -68 -6 -140 l-17 -84 26 -79 c14 -43 35 -125 46 -182 18 -97 18 -111 5 -205 -7 -56 -17 -141 -20 -191 -4 -49 -13 -118 -21 -152 l-14 -61 36 -93 c39 -105 48 -116 114 -159 l46 -30 32 -142 c20 -89 32 -170 32 -214 l0 -70 -35 -17 c-36 -17 -36 -17 -29 -70 3 -28 16 -83 27 -121 l22 -68 50 6 c48 5 63 15 90 61 10 17 13 16 53 -4 l42 -22 33 25 c30 23 39 24 107 19 75 -5 75 -5 116 31 l42 36 163 -9 c159 -9 165 -8 216 15 l53 23 15 -30 c13 -25 21 -29 58 -29 59 -1 105 -43 114 -106 6 -42 4 -48 -32 -84 l-37 -38 38 -6 c93 -14 111 -11 156 21 28 19 91 45 177 71 128 39 135 40 158 24 23 -16 24 -20 18 -113 l-6 -96 29 -25 c16 -13 35 -34 41 -46 10 -18 15 -20 42 -10 25 9 45 5 135 -27 91 -33 105 -40 110 -64 11 -52 13 -53 47 -47 107 19 163 17 270 -8 l108 -26 44 25 c51 30 54 36 62 131 l6 72 36 -5 c57 -8 58 -9 66 -68 6 -51 9 -57 41 -72 27 -13 37 -26 45 -57 6 -23 28 -71 50 -108 l40 -68 67 0 c56 0 69 -3 80 -20 6 -11 35 -31 64 -46 53 -27 88 -28 204 -8 29 5 31 4 42 -46 7 -28 12 -70 12 -92 0 -41 41 -128 60 -128 5 0 20 4 34 10 23 8 28 5 54 -33 16 -23 33 -53 37 -67 4 -14 27 -67 52 -118 44 -91 46 -93 74 -87 23 5 33 2 47 -15 l17 -21 98 61 c89 55 101 60 138 54 30 -5 39 -11 35 -21 -17 -43 -16 -60 2 -76 16 -15 24 -16 45 -6 14 6 28 21 31 33 3 11 6 160 6 330 l0 309 -42 -7 c-24 -4 -64 -13 -90 -22 -46 -15 -46 -15 -37 -47 16 -55 14 -57 -53 -36 -35 10 -83 19 -108 19 -44 0 -47 2 -150 108 -58 60 -132 128 -166 150 l-60 42 -23 95 -23 94 30 78 c16 43 42 133 57 200 24 104 31 123 51 132 30 13 30 25 4 191 -20 128 -20 130 -1 229 l20 101 -70 146 c-38 80 -69 149 -69 153 0 5 40 35 88 67 71 46 101 74 150 139 l62 81 -9 70 c-5 38 -8 70 -7 70 0 1 222 32 491 70 270 37 491 68 493 70 2 1 -38 124 -88 273 -87 255 -96 275 -152 353 -48 65 -78 95 -142 138 l-80 55 -68 157 -67 157 19 66 c17 59 17 70 5 106 -8 22 -22 99 -30 170 -14 112 -22 142 -61 229 -39 90 -44 108 -44 177 0 52 7 94 21 133 l21 57 -46 169 c-45 166 -46 172 -52 373 l-7 204 -74 81 c-47 51 -89 110 -114 160 -22 43 -39 79 -37 80 2 2 19 12 40 24 20 13 61 53 92 91 l56 68 0 73 0 72 67 82 c37 44 94 111 125 147 l58 66 -16 39 c-11 26 -14 53 -10 84 3 25 11 104 16 175 5 72 19 207 32 302 l22 171 35 15 c34 13 38 20 69 114 29 87 33 110 30 181 l-3 82 42 0 41 0 26 68 c26 67 27 69 79 87 66 23 92 41 196 134 206 185 269 251 312 328 54 100 49 124 -36 170 -51 28 -70 32 -131 33 l-71 0 -5 51 c-4 43 1 66 29 136 l34 85 -28 35 c-15 19 -32 40 -37 47 -5 7 10 51 38 114 25 56 46 106 46 110 0 4 -21 31 -46 60 -25 29 -62 82 -82 119 l-37 67 -46 -2 c-41 -3 -48 0 -64 25 -10 15 -46 57 -80 93 -37 38 -82 101 -109 152 -26 48 -55 89 -64 92 -9 2 -55 6 -102 8 l-84 3 -29 -60 c-16 -33 -30 -61 -31 -62 -1 -2 -57 8 -124 20 -103 20 -124 27 -141 49 -28 35 -67 27 -89 -18 l-16 -34 -80 5 c-45 3 -119 16 -165 27 l-84 22 -21 49 c-19 45 -29 53 -126 111 -58 35 -178 101 -267 146 l-161 84 -62 -54 -61 -53 -40 22 c-35 20 -49 22 -108 16 -61 -6 -80 -3 -183 29 -87 27 -132 36 -187 36 -65 0 -77 3 -127 35 -58 37 -63 38 -135 23z']
			),
			'location' => DB::raw('POINT(-4.038333, 21.758664)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}