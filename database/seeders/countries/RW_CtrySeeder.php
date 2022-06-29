<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RW_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Rwanda',
			'code'  => 'RW',
			'type'  => null,
			'paths' => serialize(
				['M2199 9455 l-44 -44 -465 -136 c-256 -75 -475 -139 -488 -143 -22 -7 -7 -27 205 -268 125 -143 234 -267 241 -276 11 -14 3 -22 -66 -64 -79 -47 -79 -47 -117 -133 -21 -47 -42 -90 -47 -96 -5 -5 -88 -26 -184 -46 -96 -20 -176 -38 -178 -40 -2 -2 -32 -47 -67 -100 -45 -68 -92 -121 -160 -182 l-97 -87 -271 43 -272 44 -14 -27 c-18 -35 -54 -227 -64 -347 -9 -98 -48 -215 -95 -288 -17 -25 -16 -27 3 -58 l21 -32 0 26 c0 36 22 54 48 40 24 -13 99 -17 128 -7 45 16 199 -169 228 -273 14 -50 27 -72 76 -121 33 -34 63 -73 66 -88 12 -57 28 -84 76 -127 32 -29 53 -57 60 -81 5 -21 28 -59 51 -85 23 -27 69 -104 102 -171 59 -121 66 -129 141 -174 17 -10 18 -15 6 -48 -22 -59 8 -109 65 -111 16 0 89 -88 114 -137 10 -20 19 -48 19 -61 0 -14 17 -40 45 -67 44 -43 45 -46 45 -105 0 -79 -8 -105 -31 -105 -25 0 -24 -6 10 -49 48 -61 111 -167 111 -187 1 -46 57 -79 102 -60 11 5 23 1 35 -14 20 -24 124 -80 148 -80 8 0 32 -15 52 -33 21 -19 59 -48 85 -66 29 -19 50 -42 53 -56 3 -14 7 -36 10 -48 2 -13 29 -57 59 -98 41 -57 57 -89 69 -142 9 -43 25 -80 44 -102 63 -77 75 -95 61 -95 -8 0 -20 6 -27 13 -16 14 -16 16 33 -88 21 -44 44 -88 53 -97 8 -9 19 -34 23 -55 8 -31 6 -41 -11 -59 -21 -22 -49 -135 -49 -199 0 -24 8 -52 21 -70 11 -16 32 -55 45 -85 27 -58 27 -120 2 -175 -9 -20 -3 -38 43 -125 44 -84 60 -105 87 -117 27 -11 31 -17 22 -28 -8 -10 -6 -16 9 -27 11 -8 37 -46 58 -85 27 -49 55 -85 90 -112 46 -37 57 -41 106 -41 51 0 59 -3 103 -44 27 -24 76 -57 109 -74 50 -25 64 -38 82 -76 20 -40 27 -46 53 -46 16 0 30 -1 30 -2 0 -2 7 -21 14 -43 12 -34 12 -41 -1 -50 -12 -9 -6 -19 35 -57 40 -38 51 -57 66 -111 18 -67 36 -92 71 -99 20 -4 21 -8 8 -68 -3 -18 2 -31 16 -44 13 -12 21 -31 21 -52 0 -46 15 -81 38 -88 25 -8 68 -72 75 -112 3 -18 20 -53 37 -80 16 -26 30 -55 30 -65 0 -9 7 -22 15 -29 8 -6 26 -32 40 -57 19 -32 39 -50 69 -63 24 -10 53 -32 65 -49 12 -17 42 -44 65 -61 48 -32 76 -89 96 -191 10 -52 13 -56 35 -51 31 5 75 -40 75 -78 0 -18 10 -33 30 -48 36 -27 63 -86 55 -122 -4 -19 1 -32 20 -50 14 -13 25 -32 25 -42 0 -23 1 -23 59 6 53 27 81 62 81 101 0 21 5 25 31 25 33 0 33 4 3 79 -17 41 -17 60 -3 173 l12 88 47 35 c67 49 123 49 187 0 62 -47 115 -61 173 -46 25 7 52 19 61 27 10 9 38 14 80 14 66 0 135 -26 867 -326 l112 -46 0 -265 c0 -146 4 -263 9 -261 4 2 272 301 595 665 323 365 590 663 593 663 4 0 351 81 772 180 l766 181 741 261 741 260 157 514 c86 283 154 520 150 527 -20 35 -208 333 -216 342 -6 6 -14 3 -23 -9 -13 -18 -34 -16 -607 63 -326 45 -605 84 -619 87 -20 4 -84 78 -267 308 -210 264 -241 308 -244 342 -3 34 -8 41 -42 58 -32 16 -42 17 -59 7 -13 -9 -23 -9 -29 -3 -17 17 1 61 43 107 33 36 38 46 25 51 -8 3 -27 -3 -42 -15 -27 -21 -27 -21 -41 -1 -12 17 -21 19 -75 13 l-62 -6 -38 44 c-26 30 -46 44 -65 45 -21 0 -29 8 -39 35 -7 19 -13 44 -13 56 -1 12 -14 36 -31 53 -33 34 -38 47 -48 140 -7 62 -9 66 -45 85 -33 18 -137 123 -137 139 0 4 14 0 30 -9 17 -9 30 -13 30 -9 0 3 -13 22 -30 41 -16 18 -30 43 -30 55 0 11 -16 38 -35 59 -26 29 -35 48 -35 73 0 44 11 51 43 26 l25 -20 16 25 c9 14 16 45 16 72 0 43 -4 51 -44 88 -47 43 -62 79 -52 120 6 24 7 25 32 9 41 -28 38 -8 -6 40 -34 37 -49 46 -76 46 -18 0 -39 7 -46 16 -7 9 -34 39 -59 68 -25 28 -52 61 -58 74 -9 16 -18 21 -29 17 -44 -18 -48 -16 -72 35 -13 28 -39 65 -57 81 l-34 29 30 0 c37 0 44 11 25 38 -12 18 -25 22 -69 22 -44 0 -56 4 -65 20 -8 14 -21 20 -46 20 -28 0 -36 5 -44 26 -13 33 -13 77 0 69 6 -3 10 -16 11 -28 0 -19 2 -18 11 6 12 34 -3 61 -63 109 -56 45 -95 125 -104 213 -11 107 -6 105 -220 105 l-183 0 -26 34 c-14 19 -26 47 -26 62 0 15 -16 55 -35 89 l-34 62 -219 32 c-169 26 -224 31 -240 22 -11 -6 -38 -11 -59 -11 -47 0 -802 78 -811 84 -4 2 -292 240 -640 528 l-632 524 -163 72 c-145 64 -192 92 -398 234 -129 88 -243 164 -254 169 -11 4 -144 31 -295 59 -151 28 -280 53 -286 55 -6 2 -31 -16 -55 -40z', 'M3520 1444 c0 -4 8 -12 17 -19 14 -11 15 -15 4 -28 -10 -13 -10 -21 1 -44 7 -15 21 -29 31 -31 14 -3 17 4 17 35 0 50 -20 87 -48 91 -12 2 -22 0 -22 -4z', 'M3487 1364 c-9 -10 17 -55 51 -88 27 -25 34 -27 59 -19 33 11 53 7 53 -12 0 -7 7 -16 16 -19 45 -17 47 44 3 85 -37 34 -49 36 -49 9 0 -33 -55 -27 -77 8 -25 38 -42 50 -56 36z']
			),
			'location' => DB::raw('POINT(-1.940278, 29.873888)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}