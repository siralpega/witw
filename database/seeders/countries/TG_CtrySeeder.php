<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TG_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Togo',
			'code'  => 'TG',
			'type'  => null,
			'paths' => serialize(
				['M3162 10215 c-7 -14 -12 -28 -12 -29 0 -2 30 -17 68 -32 50 -21 90 -30 157 -34 l90 -5 32 -92 32 -92 -51 -37 c-47 -35 -50 -40 -45 -71 4 -20 -4 -81 -19 -146 -24 -111 -25 -112 -80 -166 -53 -51 -55 -56 -60 -115 -5 -50 -1 -72 19 -121 25 -60 25 -60 128 -116 68 -37 110 -67 121 -86 13 -22 36 -36 97 -58 l80 -29 42 -110 c23 -61 46 -117 52 -123 5 -7 30 -13 56 -14 115 -2 124 -6 196 -102 l67 -89 44 7 44 6 0 -50 c0 -48 -1 -51 -32 -59 -28 -7 -33 -14 -49 -74 -17 -60 -17 -71 -4 -109 8 -23 15 -70 15 -104 l0 -62 60 -42 c56 -40 60 -45 60 -82 0 -21 -1 -39 -2 -39 -2 0 -28 7 -58 15 -61 16 -70 11 -70 -39 0 -19 14 -45 41 -77 l41 -49 -31 -37 c-27 -33 -31 -45 -31 -102 0 -57 -4 -69 -40 -123 -35 -53 -40 -67 -40 -118 0 -54 2 -60 31 -81 27 -19 30 -26 26 -55 -4 -24 4 -57 29 -120 19 -47 34 -88 32 -89 -2 -2 -66 -11 -143 -20 -77 -9 -142 -18 -144 -21 -2 -2 -6 -26 -9 -54 l-5 -50 77 0 c42 0 76 -2 76 -4 0 -2 -12 -24 -26 -50 l-25 -46 -61 31 c-33 17 -62 28 -64 26 -3 -2 5 -30 16 -61 25 -65 22 -64 149 -35 84 19 90 22 96 50 4 16 10 31 15 34 5 3 66 -1 137 -10 70 -8 131 -15 136 -15 4 0 7 -20 7 -44 0 -43 2 -45 68 -92 37 -26 68 -48 69 -49 2 -1 -8 -39 -22 -84 -15 -51 -39 -104 -64 -138 l-39 -55 25 -54 c13 -30 21 -59 17 -66 -4 -7 -24 -35 -45 -63 -22 -30 -48 -86 -65 -138 l-28 -88 62 -124 c71 -143 78 -185 38 -238 -21 -28 -23 -38 -16 -80 l7 -49 -54 7 c-48 6 -58 4 -79 -16 -23 -22 -24 -22 -64 -4 -40 18 -40 18 -65 -5 l-25 -24 24 -25 c16 -18 22 -32 17 -45 -5 -13 14 -61 62 -155 38 -75 77 -143 86 -152 9 -9 46 -28 82 -44 45 -18 83 -43 115 -76 46 -47 50 -49 105 -49 55 0 56 0 73 -39 17 -35 17 -41 2 -69 -25 -48 -20 -58 37 -79 47 -18 55 -25 81 -79 16 -32 31 -82 34 -110 l4 -51 -72 -29 c-49 -19 -80 -38 -96 -59 -13 -17 -49 -49 -80 -70 l-56 -39 36 -29 36 -29 -25 -32 c-24 -32 -25 -38 -25 -197 0 -157 1 -168 29 -239 38 -99 48 -187 27 -229 -14 -27 -15 -35 -3 -64 13 -30 12 -35 -9 -67 l-23 -34 20 -33 21 -33 -31 0 c-27 0 -31 -4 -36 -37 -22 -125 -26 -134 -80 -154 -27 -11 -60 -23 -71 -28 l-22 -10 20 -93 c11 -54 17 -109 13 -131 -5 -32 2 -51 41 -123 25 -46 48 -84 50 -84 3 0 19 7 36 16 22 11 43 14 78 9 57 -8 56 -4 66 -165 8 -139 -5 -196 -77 -341 l-48 -96 6 -90 6 -89 -82 -53 c-44 -29 -81 -57 -81 -60 0 -4 20 -27 45 -51 25 -24 45 -48 45 -53 0 -5 -20 -35 -45 -67 l-45 -59 45 -26 c39 -24 45 -31 45 -61 0 -31 6 -38 72 -80 40 -26 74 -48 76 -49 2 -2 -4 -40 -14 -84 l-17 -81 39 -57 c33 -47 48 -59 94 -76 92 -33 107 -56 70 -107 l-21 -29 35 -68 c40 -81 44 -84 168 -158 54 -31 101 -62 106 -68 5 -7 14 -31 20 -53 14 -48 26 -53 117 -55 33 -1 73 -4 89 -8 29 -6 30 -7 79 -142 13 -34 26 -50 51 -62 23 -11 43 -33 63 -69 l28 -53 105 -5 105 -5 6 -58 c4 -32 8 -60 11 -62 2 -3 72 17 154 45 260 85 519 159 621 176 78 12 488 119 501 129 5 5 -118 399 -126 405 -5 3 -25 15 -45 28 -32 21 -37 29 -37 63 0 38 -2 40 -100 104 l-100 64 0 58 c0 46 -5 62 -24 82 -13 15 -26 43 -29 63 -6 37 -5 38 34 48 38 10 39 12 39 53 -1 30 -9 54 -29 81 l-28 39 14 79 14 80 -26 34 c-32 42 -87 163 -79 175 3 5 17 9 32 10 15 0 50 6 79 12 l52 12 5 1245 5 1245 -31 109 c-39 143 -36 187 21 298 l43 83 -22 55 c-20 52 -21 65 -15 215 4 90 2 273 -5 418 -9 205 -9 272 1 321 l12 63 -68 130 -69 131 -73 43 c-62 38 -82 57 -140 138 -38 52 -71 99 -74 105 -4 6 -17 90 -29 186 -12 96 -28 186 -35 200 -8 16 -30 30 -61 40 -47 16 -49 18 -52 59 -3 35 3 50 33 92 l36 51 -16 391 c-8 216 -19 395 -23 398 -4 4 -266 190 -582 414 -316 224 -577 408 -578 410 -2 2 2 70 8 152 l13 149 38 27 c46 33 45 31 21 209 l-18 127 84 96 84 96 28 172 c15 94 27 173 25 175 -1 1 -110 7 -241 13 l-240 11 -145 -46 c-80 -25 -151 -46 -157 -46 -7 0 -12 9 -12 19 0 11 -7 26 -15 34 -7 8 -17 26 -20 39 -6 24 -31 30 -628 172 -342 81 -631 150 -643 152 -15 4 -23 -2 -32 -21z']
			),
			'location' => DB::raw('POINT(8.619543, 0.824782)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}