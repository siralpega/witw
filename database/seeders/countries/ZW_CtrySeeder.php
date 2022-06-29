<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ZW_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Zimbabwe',
			'code'  => 'ZW',
			'type'  => null,
			'paths' => serialize(
				['M6160 9855 c-69 -7 -147 -14 -173 -14 -31 -1 -74 -12 -117 -31 -49 -22 -84 -30 -125 -30 -43 0 -78 -9 -148 -39 -51 -21 -125 -51 -165 -66 -95 -35 -208 -111 -252 -168 -27 -35 -42 -46 -63 -47 -17 0 -58 -21 -102 -50 l-75 -51 0 -52 c0 -38 -7 -63 -25 -92 -19 -31 -25 -54 -25 -105 0 -36 -7 -94 -15 -130 -8 -36 -15 -90 -15 -120 -2 -73 -18 -120 -58 -165 -55 -62 -331 -175 -742 -303 -17 -5 -37 -30 -65 -81 l-40 -74 -115 -41 c-123 -45 -240 -103 -330 -164 -67 -45 -200 -216 -295 -377 -35 -60 -101 -159 -147 -220 -72 -94 -93 -115 -155 -152 -185 -109 -323 -254 -338 -357 -6 -36 -14 -52 -37 -69 -16 -12 -43 -47 -59 -77 -27 -50 -38 -60 -125 -108 -57 -31 -114 -55 -141 -59 -27 -4 -65 -19 -94 -40 -58 -40 -66 -40 -81 -9 l-11 25 -48 -25 c-55 -27 -114 -31 -146 -9 -12 9 -32 34 -45 56 -16 28 -35 46 -68 60 -40 18 -65 20 -240 20 -171 0 -204 -3 -265 -22 -60 -18 -86 -21 -195 -17 -69 3 -132 8 -141 12 -9 4 -19 24 -23 44 -5 35 -10 40 -91 80 l-85 42 -178 0 c-259 1 -358 12 -436 48 l-64 30 5 -107 c5 -93 10 -119 47 -214 40 -105 42 -109 91 -137 50 -28 51 -30 104 -162 86 -213 125 -280 194 -335 43 -34 66 -61 84 -99 22 -49 28 -54 81 -72 l57 -19 -3 -88 c-2 -71 3 -104 23 -169 l25 -81 78 -44 79 -44 11 -94 c8 -67 8 -103 0 -125 -10 -28 -6 -40 36 -122 38 -74 57 -133 103 -313 l55 -221 58 -22 c33 -12 73 -20 95 -18 35 3 40 0 49 -25 8 -21 6 -34 -7 -57 -17 -28 -17 -29 5 -43 13 -8 39 -18 58 -21 27 -5 41 -15 60 -46 22 -36 31 -41 106 -61 l82 -21 27 -72 c41 -106 49 -116 94 -116 31 0 50 -9 96 -47 55 -45 62 -48 208 -80 84 -18 172 -33 197 -33 40 0 52 -6 110 -56 65 -57 65 -57 108 -183 l42 -126 -6 -149 -7 -149 24 6 c106 25 183 29 331 17 84 -6 153 -13 154 -13 0 -1 8 -20 16 -41 14 -36 14 -45 0 -94 -13 -45 -14 -68 -5 -130 10 -68 9 -81 -8 -126 -27 -67 -48 -193 -42 -248 3 -27 -1 -68 -12 -103 -16 -58 -16 -60 5 -106 22 -46 39 -58 85 -59 33 -1 136 -159 178 -273 21 -53 37 -113 37 -131 0 -19 14 -63 31 -100 39 -83 48 -86 269 -96 156 -6 171 -9 270 -44 87 -31 114 -37 159 -32 49 4 63 0 170 -50 71 -34 172 -71 259 -95 126 -35 191 -61 192 -79 0 -3 -18 -35 -39 -72 l-39 -66 26 -72 c16 -46 40 -87 66 -117 l41 -45 97 -5 97 -6 48 -58 48 -58 80 0 c44 -1 105 6 135 14 33 9 73 12 100 9 25 -3 56 -1 71 4 21 9 36 3 105 -39 72 -45 84 -49 134 -47 l54 2 19 -76 c23 -92 33 -97 145 -73 104 22 114 20 200 -30 87 -51 123 -56 223 -28 58 16 64 16 109 0 61 -22 92 -21 138 2 28 14 70 20 169 26 185 10 218 4 297 -56 58 -44 71 -49 116 -49 34 0 67 8 100 25 27 14 60 25 73 25 28 0 105 -57 169 -125 l47 -50 198 196 c109 108 326 314 483 459 157 145 430 407 607 583 345 344 325 329 396 302 15 -6 17 -1 17 45 0 45 -7 64 -51 136 -30 50 -47 89 -43 96 4 7 52 73 107 147 l99 135 -11 161 c-15 219 -17 203 34 262 42 48 49 52 103 58 31 3 66 8 78 10 14 3 51 51 110 144 64 100 99 146 126 162 29 18 42 36 54 72 11 32 13 52 6 59 -6 6 2 32 22 72 24 49 38 66 62 75 18 6 34 20 37 31 3 13 14 20 30 20 13 0 38 3 54 6 l30 6 11 112 c7 61 21 145 32 186 11 41 20 78 20 81 0 3 -52 48 -115 99 l-116 94 7 67 6 67 -46 65 c-42 59 -46 69 -46 123 l0 59 49 35 49 35 12 95 c6 52 20 124 32 159 19 61 20 65 4 92 -12 21 -15 39 -10 65 l7 37 -69 -7 c-67 -6 -70 -6 -101 23 -18 16 -33 36 -33 43 0 8 16 29 34 48 34 32 34 34 20 61 -7 15 -14 33 -14 38 0 6 27 25 61 41 l61 31 58 -20 c67 -22 60 -26 110 63 l33 59 -23 71 c-12 39 -31 83 -41 98 -11 14 -19 41 -19 60 0 31 4 34 54 54 50 20 56 20 71 5 15 -15 18 -13 45 19 22 26 30 45 30 77 0 34 5 45 23 54 22 12 37 28 37 41 0 4 -18 20 -40 34 l-40 27 0 75 c0 69 -4 84 -51 188 l-52 114 32 71 c21 49 31 87 31 122 0 63 18 125 41 137 23 13 39 62 39 120 0 30 6 52 15 60 8 7 15 27 15 46 0 49 -27 144 -47 166 -22 24 -19 73 6 108 10 14 21 39 25 55 4 19 18 37 37 47 l30 18 -23 32 c-16 23 -23 48 -24 83 -1 28 -17 119 -36 203 -33 145 -37 155 -83 213 -50 64 -50 71 1 85 13 3 50 55 105 146 46 78 85 144 87 147 1 3 -88 4 -198 2 l-200 -3 0 70 0 70 -233 125 c-228 122 -234 125 -322 136 -50 6 -145 11 -213 11 -117 0 -125 1 -183 30 -49 25 -61 36 -66 61 -4 23 -18 39 -51 60 -26 16 -66 58 -97 101 l-53 73 -138 34 c-77 19 -173 46 -214 61 -65 24 -76 32 -84 58 -4 16 -19 36 -32 42 -13 7 -34 28 -46 46 -27 40 -140 87 -203 85 -72 -2 -149 -23 -192 -52 -52 -36 -75 -36 -107 -2 l-24 26 -319 13 c-175 7 -320 13 -322 13 -2 1 -1 115 2 255 l6 253 -58 6 c-32 4 -70 12 -84 18 -23 10 -30 8 -68 -22 l-42 -33 -32 36 -32 35 -144 7 c-79 3 -157 8 -174 10 -16 2 -86 -2 -155 -9z']
			),
			'location' => DB::raw('POINT(-19.015438, 29.154857)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}