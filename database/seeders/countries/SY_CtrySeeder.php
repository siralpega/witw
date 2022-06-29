<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SY_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Syria',
			'code'  => 'SY',
			'type'  => null,
			'paths' => serialize(
				['M9935 9779 c-22 -22 -83 -78 -136 -124 -87 -76 -101 -85 -165 -101 -38 -9 -91 -29 -119 -44 -56 -30 -175 -60 -242 -60 -43 0 -91 -19 -163 -65 -47 -31 -177 -45 -395 -46 -142 0 -182 3 -242 20 -56 16 -103 21 -200 21 -71 1 -175 5 -233 10 -153 12 -206 1 -303 -68 -89 -62 -197 -111 -244 -112 -42 0 -214 -91 -368 -194 -108 -71 -127 -81 -190 -91 -63 -10 -81 -18 -178 -85 -59 -41 -129 -87 -156 -102 -53 -31 -167 -58 -240 -58 -27 0 -66 -7 -87 -16 -58 -25 -131 -43 -209 -54 -38 -5 -111 -18 -160 -28 -50 -11 -124 -23 -165 -26 -41 -4 -100 -12 -130 -18 -50 -9 -60 -7 -91 11 -59 35 -168 43 -414 33 -285 -12 -282 -13 -323 49 -27 41 -61 68 -175 143 -191 125 -220 141 -302 164 -175 50 -285 30 -445 -80 -149 -102 -215 -134 -309 -152 -46 -9 -103 -16 -128 -16 -72 0 -256 -72 -398 -155 -79 -47 -141 -65 -180 -53 -62 19 -194 32 -300 30 -93 -2 -114 -5 -137 -22 -36 -26 -46 -25 -80 6 -24 24 -26 32 -21 69 4 30 0 52 -14 80 -19 37 -24 40 -189 97 -202 71 -283 86 -320 61 -36 -26 -104 -164 -104 -211 0 -20 -7 -48 -16 -61 -12 -17 -17 -48 -18 -115 -1 -85 -3 -96 -28 -129 -26 -33 -28 -43 -28 -128 l0 -93 42 -43 c36 -36 40 -46 32 -65 -16 -37 -6 -58 26 -58 16 0 42 -11 59 -26 28 -23 31 -32 31 -80 0 -71 -13 -78 -134 -70 -82 6 -99 4 -165 -18 -41 -15 -78 -26 -83 -26 -5 0 -14 14 -19 30 -8 21 -17 30 -33 30 -33 0 -37 -9 -21 -47 18 -44 18 -43 -1 -43 -13 0 -15 -8 -10 -37 3 -21 8 -77 11 -126 7 -84 6 -89 -21 -132 -25 -39 -33 -44 -68 -47 -38 -3 -41 -6 -49 -42 l-10 -38 -44 6 c-86 12 -112 -23 -129 -170 -10 -84 -40 -101 -66 -36 -14 35 -19 39 -60 45 -80 11 -96 23 -103 79 l-7 50 -60 -6 c-87 -10 -126 -32 -134 -74 -5 -23 -14 -37 -33 -45 -14 -6 -37 -19 -50 -29 -13 -10 -33 -18 -43 -18 -15 0 -18 -4 -13 -17 15 -40 35 -141 35 -179 0 -47 -31 -83 -93 -109 -34 -14 -36 -18 -26 -37 15 -29 5 -95 -19 -121 -11 -12 -23 -34 -27 -49 -6 -22 -3 -27 17 -33 26 -9 209 -175 235 -214 15 -22 17 -47 14 -166 -2 -136 -2 -141 24 -188 25 -45 26 -51 15 -95 -6 -25 -27 -80 -46 -121 -24 -53 -34 -88 -34 -125 0 -54 -10 -100 -31 -154 -12 -28 -11 -43 9 -120 12 -48 22 -102 22 -120 0 -28 21 -108 83 -316 22 -71 43 -79 245 -88 97 -4 194 -11 214 -16 36 -9 39 -8 59 24 l20 34 37 -16 c20 -8 52 -24 70 -35 18 -10 42 -19 52 -19 32 0 50 -11 50 -31 0 -14 -7 -19 -26 -19 -40 0 -64 -18 -64 -47 0 -17 -10 -35 -25 -48 -13 -11 -26 -33 -27 -48 -3 -28 0 -30 63 -46 69 -17 122 -52 179 -118 30 -33 32 -40 27 -86 -7 -58 24 -147 52 -147 9 0 22 -4 30 -9 12 -8 12 -13 -2 -35 -21 -31 -22 -68 -3 -104 25 -48 23 -71 -4 -85 -18 -9 -26 -22 -28 -45 -3 -25 -12 -39 -43 -59 -34 -22 -39 -31 -39 -63 0 -34 -4 -39 -42 -56 -27 -12 -58 -18 -85 -16 l-43 4 0 -35 c0 -31 -8 -42 -67 -93 -38 -32 -85 -73 -105 -92 l-36 -35 16 -33 c14 -31 19 -34 62 -34 36 0 52 -5 69 -24 21 -23 22 -25 7 -55 -28 -53 -46 -55 -105 -11 l-52 39 -102 -6 c-80 -4 -106 -10 -123 -24 -12 -12 -36 -19 -60 -20 -36 0 -44 -6 -94 -67 -82 -98 -109 -138 -116 -169 -4 -15 -15 -35 -26 -44 -29 -23 -16 -63 18 -56 20 3 28 -2 40 -24 8 -17 23 -29 34 -29 11 0 34 -14 52 -30 l33 -30 -28 -25 c-15 -14 -39 -25 -53 -25 -14 0 -43 -9 -64 -20 -37 -19 -40 -23 -40 -64 0 -36 -7 -52 -42 -95 -25 -31 -50 -51 -62 -51 -45 0 -62 -13 -91 -67 -27 -51 -36 -59 -102 -90 -40 -18 -77 -42 -82 -52 -6 -10 -25 -24 -43 -30 -54 -20 -118 -53 -118 -62 0 -14 38 -20 76 -13 l37 7 -7 -34 c-4 -19 -10 -56 -13 -84 -3 -27 -16 -81 -29 -118 -14 -40 -24 -92 -24 -125 -1 -31 -7 -68 -15 -82 -10 -18 -14 -61 -15 -156 0 -162 12 -229 47 -266 36 -38 29 -93 -22 -149 -20 -23 -35 -42 -33 -44 2 -2 19 -5 39 -6 27 -2 51 8 113 49 88 58 108 60 192 21 22 -10 59 -19 81 -19 32 0 44 -5 57 -25 12 -19 26 -25 54 -26 l37 -1 -30 -10 c-39 -14 -38 -13 -30 -37 5 -18 15 -21 55 -21 l49 0 6 -47 c3 -27 19 -75 35 -108 16 -33 31 -69 32 -79 3 -17 11 -19 73 -17 39 1 81 5 93 8 19 4 35 -6 80 -49 32 -30 80 -69 109 -87 29 -18 75 -61 103 -95 51 -63 52 -63 112 -70 34 -3 67 -11 74 -17 7 -6 77 -18 156 -26 79 -9 150 -21 158 -28 8 -7 33 -13 55 -14 22 0 73 -9 113 -20 l74 -19 15 27 c11 18 258 182 767 508 877 561 2581 1591 4473 2703 l1182 695 57 135 c65 153 163 352 237 484 l50 90 -27 370 c-14 204 -26 394 -26 422 0 35 10 74 34 130 32 73 35 90 45 243 12 181 5 160 110 331 l52 85 -3 180 c-3 178 -3 181 -35 255 -18 42 -66 133 -107 203 l-75 127 16 283 15 282 87 168 c81 157 88 168 121 177 19 5 164 41 322 81 l288 71 375 429 c354 404 403 469 360 469 -18 0 -18 -3 -4 59 10 46 9 54 -11 82 -21 28 -22 35 -11 87 l11 57 -47 42 c-37 31 -59 43 -95 47 -46 6 -47 7 -41 36 5 28 3 30 -24 30 -21 0 -40 -11 -68 -41z']
			),
			'location' => DB::raw('POINT(34.802075, 38.996815)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}