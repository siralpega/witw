<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SD_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Sudan',
			'code'  => 'SD',
			'type'  => null,
			'paths' => serialize(
				['M7420 10164 l-94 -76 -66 6 -65 7 -48 -138 -48 -138 -120 -54 c-66 -30 -124 -62 -128 -70 -5 -9 -12 -52 -15 -96 -4 -44 -9 -87 -12 -96 -6 -22 -112 -43 -167 -34 -51 9 -146 54 -187 89 -30 25 -36 26 -108 21 -176 -13 -1186 -48 -2536 -90 -791 -24 -1440 -45 -1441 -47 -2 -2 2 -231 9 -508 7 -291 8 -508 3 -511 -5 -3 -113 -9 -240 -13 -128 -4 -235 -11 -239 -14 -3 -4 4 -396 17 -872 13 -476 25 -965 28 -1087 l5 -223 -68 6 c-54 5 -82 2 -138 -15 -43 -13 -97 -21 -140 -21 -54 0 -79 -5 -107 -21 -47 -28 -68 -69 -55 -104 13 -34 13 -92 0 -100 -5 -3 -10 -23 -10 -45 0 -31 -6 -44 -38 -71 -60 -52 -76 -86 -63 -130 6 -20 11 -39 11 -41 0 -3 -28 -9 -62 -12 -90 -10 -107 -16 -114 -38 -4 -14 4 -32 25 -58 21 -26 31 -50 31 -72 0 -22 7 -37 20 -46 29 -18 26 -56 -5 -70 -14 -7 -40 -25 -58 -42 -17 -16 -56 -48 -84 -72 -61 -48 -67 -73 -29 -129 33 -49 43 -123 22 -172 -12 -30 -26 -43 -68 -62 -80 -36 -104 -63 -113 -130 -6 -51 -4 -59 20 -91 26 -33 27 -34 100 -34 65 0 74 2 80 20 3 11 11 20 16 20 9 0 88 -37 98 -46 2 -1 -3 -25 -10 -53 -12 -47 -11 -54 15 -116 16 -36 42 -82 58 -103 24 -30 29 -44 24 -72 -3 -19 -8 -63 -12 -96 l-6 -61 65 -67 c55 -56 70 -66 99 -66 19 0 39 -5 46 -12 18 -18 14 -77 -10 -135 l-21 -52 34 -77 c32 -71 37 -78 81 -97 45 -18 57 -33 183 -217 l135 -198 0 -124 0 -125 -39 -54 c-57 -80 -62 -94 -51 -123 6 -16 17 -26 29 -26 17 0 20 -6 18 -37 -2 -33 2 -39 36 -58 30 -17 62 -24 147 -29 152 -9 170 -13 170 -42 0 -12 -11 -44 -25 -70 -36 -68 -33 -105 12 -144 39 -35 38 -35 218 -14 50 6 52 5 91 -38 54 -58 123 -108 150 -108 25 0 74 -58 74 -88 0 -11 -7 -25 -16 -32 -42 -36 -32 -98 21 -122 14 -6 25 -19 25 -28 0 -10 13 -23 30 -30 17 -7 37 -22 45 -33 10 -14 29 -21 67 -25 38 -3 63 -13 89 -33 19 -15 54 -35 77 -44 32 -13 48 -28 70 -66 24 -44 33 -51 79 -65 33 -10 61 -26 77 -45 l26 -30 -26 -38 c-25 -39 -25 -39 -7 -77 13 -29 32 -47 71 -67 l53 -29 -43 -38 c-37 -33 -40 -39 -25 -45 11 -5 25 -1 36 9 23 21 28 20 34 -4 3 -11 13 -20 24 -20 24 -1 103 -37 117 -54 6 -8 46 -29 89 -47 66 -27 81 -38 97 -69 10 -20 25 -42 34 -49 10 -8 13 -23 9 -45 -3 -18 0 -58 7 -89 10 -51 14 -57 46 -69 32 -11 34 -15 34 -58 0 -63 18 -77 115 -91 91 -12 146 -44 164 -95 7 -20 23 -36 42 -44 20 -9 38 -28 52 -57 l21 -43 59 0 c48 0 64 -5 89 -25 30 -26 55 -29 122 -18 33 5 41 12 55 44 13 31 21 39 42 39 15 0 32 -6 39 -14 14 -18 147 -62 212 -72 l47 -6 38 61 38 62 60 -7 c91 -9 108 -20 124 -84 13 -49 26 -67 121 -162 99 -101 109 -108 146 -108 32 0 44 -6 67 -34 16 -21 27 -47 27 -65 0 -24 8 -34 44 -55 25 -14 47 -26 49 -26 3 0 18 20 34 45 18 30 35 45 49 45 11 0 29 9 39 20 27 30 93 26 163 -8 56 -28 58 -28 97 -13 22 9 56 26 75 38 41 27 60 19 99 -40 13 -21 30 -37 37 -37 8 0 16 -11 20 -25 5 -21 12 -25 45 -25 34 0 39 3 39 24 0 36 96 96 154 96 79 0 207 30 241 56 l33 25 30 -26 c28 -23 37 -25 140 -25 l110 0 237 244 237 244 178 76 c99 42 189 76 201 76 11 0 34 10 51 21 36 26 54 15 39 -24 -11 -27 0 -37 41 -37 18 0 20 -4 14 -31 -3 -17 0 -45 9 -65 12 -30 18 -34 49 -34 20 0 36 4 36 9 0 17 33 21 50 6 36 -33 62 -7 33 33 -29 39 -40 197 -17 223 13 14 15 30 11 66 -7 62 -24 74 -97 66 -52 -5 -59 -3 -69 16 -15 26 -33 27 -56 1 -25 -28 -55 -10 -55 34 0 26 -8 39 -38 63 -21 17 -53 59 -71 93 -29 54 -33 69 -28 114 4 45 2 54 -21 78 -33 36 -51 87 -59 171 -5 52 -9 67 -22 67 -9 0 -26 11 -38 24 -12 12 -43 31 -68 40 -34 13 -45 23 -45 39 0 33 -11 44 -62 66 -50 21 -78 53 -78 88 0 17 -11 27 -45 42 -34 15 -45 25 -45 42 0 12 -20 45 -43 73 -24 28 -51 63 -61 78 -19 29 -81 58 -125 58 -16 0 -34 7 -42 16 -9 11 -22 14 -46 9 -25 -4 -43 -1 -68 15 -19 12 -56 25 -83 29 l-47 6 0 60 c1 32 5 60 10 62 6 2 25 12 43 23 27 17 32 26 32 57 0 51 18 113 33 114 35 5 130 9 192 9 39 0 90 6 114 13 36 11 47 20 56 46 6 18 20 40 32 49 l22 17 -13 245 -14 245 39 57 c35 52 39 63 39 122 0 56 3 65 21 71 30 10 42 50 25 83 -8 15 -15 50 -17 78 -4 46 1 58 51 142 51 85 57 92 88 92 26 0 37 -7 60 -40 15 -22 35 -39 46 -40 25 0 45 28 46 63 0 15 11 50 25 77 29 57 31 73 10 90 -25 21 -18 73 15 115 17 21 30 41 30 44 1 3 5 25 9 48 7 35 5 45 -10 59 -17 15 -17 18 -1 43 9 14 40 52 69 84 29 32 56 70 59 85 16 73 37 117 99 201 36 51 68 98 71 106 3 7 38 18 85 25 73 12 81 11 100 -6 29 -26 39 -6 39 87 0 65 10 108 65 290 36 118 65 229 65 248 0 21 10 47 25 67 14 18 25 46 25 61 0 16 -20 130 -45 253 -37 186 -43 225 -31 234 18 15 36 71 36 115 0 37 53 210 76 246 6 11 17 60 24 110 6 49 16 92 21 96 6 3 13 30 16 60 5 51 4 55 -22 69 -25 13 -27 18 -23 66 4 41 12 60 36 89 18 19 32 38 32 41 0 3 -9 22 -20 44 -11 22 -20 53 -20 70 0 31 1 32 38 26 20 -3 61 -7 91 -8 l54 -3 13 45 c8 25 14 57 14 72 0 31 64 88 99 88 14 0 21 6 21 18 0 10 7 27 15 38 14 18 16 18 29 2 18 -24 46 -23 46 1 0 10 8 29 19 42 l18 23 7 -22 c10 -29 24 -28 38 3 9 21 16 25 38 20 23 -5 29 -1 44 32 22 49 67 99 97 108 36 11 49 25 49 51 0 23 -25 34 -32 15 -6 -18 -68 17 -68 38 0 27 -15 34 -39 19 -23 -14 -40 -3 -23 14 7 7 12 16 12 20 0 14 -30 9 -36 -6 -9 -23 -64 3 -70 34 -12 51 -16 60 -27 60 -7 1 -24 19 -39 40 -22 32 -36 41 -68 46 -29 5 -46 15 -61 35 -19 28 -23 29 -74 23 -58 -7 -57 -8 -70 49 -5 24 -8 27 -20 17 -8 -7 -15 -11 -15 -9 -9 84 -8 124 3 131 9 6 3 16 -21 36 -23 19 -32 35 -32 56 0 16 -9 43 -19 60 -25 41 -36 105 -32 194 3 62 1 72 -14 72 -9 0 -13 5 -10 10 4 6 -3 25 -14 43 -14 23 -17 37 -10 50 6 9 7 23 2 30 -7 11 -21 95 -26 157 -1 14 4 31 11 38 16 18 15 54 -3 78 -8 10 -15 33 -15 51 0 37 -36 140 -57 164 -7 9 -11 23 -8 32 4 8 -1 29 -10 46 -19 38 -16 38 35 6 40 -25 53 -42 25 -31 -14 5 -13 1 2 -24 18 -31 53 -41 53 -16 0 38 -24 68 -90 112 -81 54 -106 81 -119 132 -6 19 -23 51 -39 71 -24 30 -30 49 -36 114 -9 98 -11 103 -49 118 -46 17 -97 52 -97 66 0 6 -20 15 -45 19 -47 7 -75 32 -75 66 0 10 -16 26 -39 38 -22 11 -46 29 -53 39 -18 25 -59 41 -107 41 -25 0 -44 7 -56 20 -9 10 -34 25 -54 31 -47 15 -61 27 -78 67 -15 37 -30 41 -42 10 -6 -18 -11 -11 -32 46 l-25 67 -94 -77z']
			),
			'location' => DB::raw('POINT(12.862807, 30.217636)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}