<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DZ_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Algeria',
			'code'  => 'DZ',
			'type'  => null,
			'paths' => serialize(
				['M8439 10173 c20 -24 20 -27 5 -45 -14 -15 -32 -18 -108 -17 -140 1 -185 11 -219 49 -27 30 -32 32 -75 26 -37 -5 -54 -14 -82 -43 -19 -21 -53 -46 -75 -56 -140 -65 -367 -127 -460 -127 l-45 0 0 39 c0 42 -1 43 -68 56 -18 4 -158 17 -312 29 l-279 22 -52 -39 -51 -40 -148 7 -148 7 -99 -65 c-109 -73 -155 -84 -203 -46 -32 25 -50 25 -130 -1 -36 -11 -112 -24 -170 -30 -398 -36 -751 -179 -888 -359 -30 -38 -60 -70 -66 -70 -27 0 -82 24 -106 46 -35 32 -81 21 -93 -23 -11 -38 -54 -53 -135 -46 -57 5 -58 5 -142 -54 -70 -48 -86 -65 -95 -95 -6 -21 -15 -42 -21 -48 -5 -5 -57 -26 -114 -45 -84 -28 -119 -35 -183 -35 l-78 0 63 -75 c112 -133 104 -119 83 -158 -17 -33 -17 -36 0 -86 l19 -51 -29 -30 -29 -30 20 -89 20 -89 -22 -44 c-17 -32 -23 -60 -24 -109 0 -52 -4 -70 -20 -84 -19 -17 -19 -18 17 -62 l36 -44 -31 -71 -31 -70 44 -58 c49 -64 50 -69 34 -115 -10 -27 -8 -39 15 -91 24 -53 36 -66 116 -122 50 -35 90 -67 90 -71 0 -4 -26 -20 -59 -35 -53 -26 -59 -32 -68 -71 -9 -40 -8 -46 14 -68 l24 -24 -28 -18 c-27 -18 -31 -18 -218 13 -156 27 -217 32 -337 32 -112 0 -148 -3 -148 -12 1 -7 7 -42 15 -78 7 -36 12 -66 10 -68 -2 -2 -76 -18 -165 -35 l-162 -32 -32 -92 -32 -91 42 -49 42 -48 -19 -48 c-10 -26 -19 -58 -19 -71 0 -26 -29 -36 -102 -36 -23 0 -82 -18 -146 -44 -97 -40 -119 -45 -242 -55 l-134 -12 -66 -49 c-40 -29 -104 -64 -159 -84 -50 -20 -145 -67 -211 -106 -119 -70 -120 -71 -120 -108 0 -32 -10 -48 -76 -119 -42 -46 -79 -83 -82 -83 -4 0 -17 15 -30 34 -21 31 -27 34 -93 40 -104 9 -433 -11 -496 -31 l-53 -16 -87 37 -88 37 -30 -37 c-16 -21 -37 -47 -46 -58 -14 -17 -28 -19 -107 -19 -89 1 -92 0 -92 -22 0 -17 -16 -33 -63 -62 -34 -22 -119 -94 -188 -161 -117 -113 -131 -123 -174 -129 -26 -3 -48 -11 -50 -17 -4 -12 -95 -713 -95 -732 0 -16 519 -481 595 -535 68 -47 192 -144 475 -368 107 -86 341 -263 520 -394 179 -131 843 -631 1477 -1110 1032 -782 1152 -875 1155 -902 3 -26 33 -51 283 -226 316 -222 288 -187 272 -330 l-7 -66 114 -47 115 -48 13 -50 c11 -44 22 -59 81 -109 37 -33 71 -59 75 -59 4 0 29 8 56 17 l49 18 36 -45 c76 -95 75 -94 216 -120 121 -21 134 -26 183 -64 58 -45 59 -49 44 -188 -6 -51 -15 -77 -39 -110 -16 -24 -36 -60 -43 -82 l-12 -38 43 -39 c24 -20 53 -43 64 -49 16 -8 148 19 663 139 552 128 647 152 670 173 15 14 208 192 428 396 l401 371 1154 732 c635 402 1156 733 1157 734 2 2 -27 92 -65 200 l-68 196 -42 -6 c-41 -6 -45 -4 -169 89 l-127 96 -97 0 c-54 0 -118 3 -143 6 l-47 7 -55 104 -55 104 0 108 0 107 -145 248 c-80 137 -145 251 -145 253 0 3 18 28 41 56 34 43 53 57 117 82 70 28 79 35 105 80 34 61 32 100 -13 282 l-30 122 42 77 c25 47 51 115 64 171 l23 94 -21 93 -22 94 33 122 c36 137 37 108 -6 410 l-25 185 -69 135 c-37 75 -71 154 -74 175 -6 38 -5 41 34 65 23 14 41 28 41 33 0 12 -139 949 -146 979 -4 20 -45 57 -174 153 -156 116 -170 130 -175 163 -4 21 -9 51 -11 67 -3 17 -22 67 -42 113 -36 82 -37 83 -108 122 l-71 39 -46 123 c-70 184 -83 247 -67 315 18 71 42 101 93 114 35 9 46 18 69 59 20 36 45 60 95 93 37 24 86 63 107 85 l40 41 -12 50 c-10 45 -9 56 9 98 11 27 39 72 61 101 l40 54 -33 34 c-33 34 -33 35 -17 67 36 71 38 93 16 159 -19 56 -20 70 -10 143 6 50 25 116 47 169 20 49 35 89 33 91 -2 1 -25 14 -52 27 l-49 25 61 42 c51 34 62 47 62 69 0 24 8 32 55 55 52 25 54 28 43 52 -10 22 -17 25 -67 25 -31 1 -76 5 -101 10 -41 8 -50 5 -107 -26 -34 -19 -74 -34 -91 -34 -24 0 -31 5 -38 33 -9 29 -14 33 -55 37 -24 3 -58 15 -75 27 -17 12 -60 27 -95 32 -92 15 -94 15 -70 -16z']
			),
			'location' => DB::raw('POINT(28.033886, 1.659626)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}