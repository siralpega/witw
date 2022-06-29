<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PY_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Paraguay',
			'code'  => 'PY',
			'type'  => null,
			'paths' => serialize(
				['M2995 10139 l-320 -99 -635 -120 c-349 -66 -658 -125 -686 -130 l-51 -11 -83 -232 c-46 -128 -91 -248 -101 -267 -10 -19 -103 -171 -207 -338 l-190 -302 5 -318 5 -317 -66 -247 c-36 -136 -120 -456 -187 -710 -144 -553 -142 -535 -53 -615 33 -29 68 -53 79 -53 11 0 50 -24 86 -54 48 -38 79 -55 109 -60 27 -4 57 -19 79 -38 34 -30 36 -35 33 -84 -4 -51 -3 -52 27 -59 27 -6 31 -11 31 -39 0 -22 8 -40 26 -57 15 -13 35 -44 45 -67 11 -24 39 -67 63 -95 50 -59 72 -100 92 -167 16 -54 80 -120 116 -120 11 0 44 -17 72 -39 28 -21 63 -46 77 -55 18 -12 28 -29 33 -55 5 -33 13 -43 50 -65 25 -14 55 -26 69 -26 27 0 61 -32 76 -72 7 -19 18 -28 33 -28 14 0 35 -14 53 -34 20 -23 63 -49 125 -76 52 -23 109 -55 127 -70 17 -16 62 -44 100 -64 94 -50 99 -55 107 -105 4 -30 21 -62 51 -100 25 -32 45 -64 45 -73 0 -26 35 -48 77 -48 22 0 66 -9 98 -20 32 -11 70 -20 84 -20 14 0 68 -10 119 -22 82 -20 95 -26 112 -53 11 -17 39 -45 64 -63 41 -29 51 -32 123 -32 62 0 83 -4 103 -20 21 -17 41 -20 130 -20 65 0 124 6 155 15 l49 15 116 -77 c63 -42 198 -130 299 -196 111 -71 228 -156 292 -213 60 -52 112 -94 118 -94 5 0 16 -8 23 -17 15 -20 52 -43 69 -43 7 0 32 -16 56 -36 24 -20 60 -40 81 -46 20 -5 46 -18 57 -27 11 -10 51 -35 89 -56 39 -21 105 -62 148 -92 60 -40 88 -53 115 -53 21 0 45 -8 56 -18 17 -16 93 -31 238 -48 44 -6 49 -9 108 -90 35 -46 70 -84 78 -84 9 0 36 16 60 36 l45 37 51 -51 c29 -27 67 -57 85 -66 17 -9 32 -23 32 -31 0 -11 11 -15 38 -15 21 0 42 -4 47 -9 6 -5 40 -11 77 -13 67 -4 68 -4 136 -68 55 -51 70 -72 71 -95 1 -19 18 -51 48 -90 26 -33 57 -78 68 -100 13 -24 36 -48 58 -60 42 -23 46 -42 24 -136 -13 -55 -63 -119 -92 -119 -7 0 -20 -9 -30 -20 -10 -11 -27 -20 -37 -20 -10 0 -30 -8 -44 -17 -23 -14 -25 -22 -20 -54 5 -34 3 -38 -34 -63 -36 -24 -39 -28 -29 -50 18 -39 4 -70 -36 -85 -20 -7 -34 -18 -32 -24 19 -45 19 -47 3 -47 -23 0 -42 -40 -25 -51 8 -5 20 -9 27 -9 25 0 11 -38 -27 -68 -22 -18 -43 -32 -46 -32 -3 0 -22 -16 -42 -35 -20 -20 -48 -38 -62 -41 -64 -14 -81 -26 -81 -56 0 -16 -6 -31 -15 -34 -12 -5 -12 -9 1 -29 22 -33 9 -55 -33 -55 -32 0 -35 -2 -28 -22 12 -42 4 -93 -20 -129 -30 -43 -31 -63 -4 -82 20 -15 20 -15 1 -29 -11 -7 -24 -30 -30 -51 -10 -35 -9 -38 20 -60 29 -23 29 -25 17 -65 -11 -37 -16 -42 -41 -42 -28 0 -28 0 -28 -66 0 -60 -3 -69 -29 -93 -16 -15 -40 -32 -55 -39 -30 -13 -33 -37 -9 -64 15 -17 15 -18 -4 -18 -11 0 -28 -9 -38 -20 -9 -10 -34 -24 -54 -31 -44 -14 -72 -46 -65 -75 9 -34 -21 -80 -55 -87 -27 -6 -32 -12 -37 -47 -6 -35 -10 -40 -34 -40 -60 0 -83 -86 -35 -128 19 -17 25 -31 25 -65 0 -24 2 -46 5 -49 3 -3 34 3 67 13 44 14 87 19 148 18 62 -2 99 3 133 16 31 12 57 15 79 10 18 -4 85 -11 148 -15 300 -22 395 -41 457 -89 29 -23 100 -46 178 -57 27 -4 63 -15 80 -25 20 -13 49 -19 92 -19 50 0 75 -7 134 -35 52 -25 87 -35 120 -35 52 0 126 29 154 60 13 14 31 20 63 20 41 0 49 -4 98 -55 30 -30 61 -55 70 -55 9 0 33 14 54 30 36 28 43 30 129 30 77 0 91 -3 91 -16 0 -38 81 -130 122 -139 36 -8 74 22 83 66 5 20 13 29 25 29 27 0 40 30 40 89 0 47 2 51 24 51 17 0 38 15 68 50 41 48 45 50 96 50 29 0 69 -7 89 -15 19 -8 57 -15 84 -15 47 0 49 -1 75 -46 24 -41 109 -104 139 -104 6 1 25 21 43 45 20 27 51 54 79 67 42 20 49 28 58 68 7 25 18 55 25 66 12 19 11 25 -9 50 -19 24 -20 30 -8 32 9 2 24 23 36 46 17 38 23 43 45 39 14 -3 37 -2 51 1 22 6 25 12 25 47 0 24 9 58 21 79 20 36 27 39 86 50 35 6 75 15 90 21 21 8 30 6 48 -11 25 -23 27 -23 78 -9 36 10 37 11 37 57 0 43 4 52 45 92 28 27 65 51 93 61 43 14 48 20 63 62 24 73 45 90 100 83 46 -6 47 -6 71 34 22 38 23 46 14 100 l-10 59 52 46 c37 33 55 58 63 88 6 23 18 56 27 72 15 28 34 137 30 180 0 11 0 40 2 65 6 95 5 146 -3 177 -7 29 -6 33 10 33 30 0 43 21 43 69 0 26 7 55 15 65 21 28 19 59 -6 91 -16 19 -23 46 -27 95 -4 67 -4 69 18 63 20 -5 22 -3 19 38 -1 24 3 54 9 66 12 23 5 76 -17 137 -14 35 13 95 72 163 25 29 51 70 57 90 7 21 28 62 48 91 34 51 35 55 23 89 -14 39 -9 100 16 166 8 23 18 72 23 109 5 49 15 75 35 102 31 40 95 215 95 258 0 15 -10 48 -22 73 l-22 45 40 43 c76 79 94 193 37 235 -20 15 -26 31 -35 95 -10 68 -9 82 7 117 15 33 23 40 47 40 45 0 38 39 -14 70 -23 14 -66 50 -97 81 -44 45 -80 68 -172 111 -109 52 -118 54 -143 41 -15 -8 -50 -17 -77 -20 -36 -4 -65 -16 -98 -40 -134 -97 -156 -107 -280 -123 -36 -5 -86 -13 -110 -18 -33 -8 -54 -6 -85 5 -23 8 -62 13 -88 12 -37 -2 -53 3 -81 24 l-35 26 -7 138 c-8 171 -15 200 -61 243 l-36 35 1 150 c0 83 -2 212 -5 287 -5 137 -5 137 -35 162 -24 21 -29 32 -29 70 0 24 -9 65 -20 91 -11 26 -20 61 -20 78 0 18 -7 57 -15 87 -20 73 -19 84 8 117 19 24 22 39 21 105 -1 85 -8 98 -60 123 -55 26 -76 79 -68 169 l6 73 -60 43 c-44 31 -64 52 -73 78 l-11 35 -63 -6 c-34 -3 -66 -3 -70 1 -10 10 -106 11 -132 1 -13 -5 -25 -4 -28 1 -4 6 -20 10 -36 10 -78 0 -236 129 -261 212 l-11 39 -81 -3 -81 -3 -10 -54 c-9 -51 -14 -57 -68 -94 -31 -21 -57 -45 -57 -53 0 -21 -10 -17 -43 14 -27 25 -29 26 -41 10 -9 -12 -27 -18 -54 -18 -37 0 -43 -4 -60 -36 l-18 -35 -37 30 c-41 32 -127 48 -212 39 -38 -5 -44 -3 -54 18 -8 19 -19 24 -48 24 -21 1 -49 7 -63 14 -14 8 -31 11 -40 6 -8 -4 -40 -10 -70 -14 -43 -5 -67 -2 -108 14 -29 11 -76 20 -107 20 -29 0 -57 5 -61 11 -6 10 -30 7 -67 -6 -9 -4 -25 11 -47 44 -27 42 -37 51 -64 53 -57 2 -91 -3 -121 -21 -23 -13 -40 -15 -75 -9 -56 10 -126 57 -123 84 5 46 22 112 37 146 12 28 13 44 6 63 -9 24 -6 136 6 192 2 13 19 30 39 41 l36 18 -37 13 -36 13 5 57 c4 46 1 60 -15 78 -18 19 -19 27 -9 72 7 32 27 73 56 112 51 70 58 104 21 113 -36 9 -37 46 -3 75 48 40 60 75 52 150 -4 36 -11 74 -17 85 -8 14 -4 24 15 45 13 14 27 38 31 54 6 24 2 29 -31 45 -20 9 -47 28 -61 41 l-23 23 20 22 c12 12 21 34 21 48 0 21 -8 29 -37 41 l-38 15 47 28 c26 16 47 31 48 34 0 3 -18 26 -41 53 -38 44 -42 46 -62 32 -20 -14 -21 -13 -34 23 -7 20 -13 53 -14 72 0 19 -6 53 -13 75 -10 33 -10 44 2 63 13 21 11 26 -32 76 -55 64 -66 91 -66 158 0 54 -3 55 -64 32 -12 -4 -16 0 -16 15 0 12 -4 21 -10 21 -5 0 -10 5 -10 10 0 6 8 10 18 10 10 0 23 5 30 12 9 9 7 17 -9 35 -20 20 -21 26 -9 66 6 24 10 57 9 73 -2 16 3 44 10 62 12 29 12 38 -4 70 -9 20 -20 65 -23 99 l-5 62 -536 300 c-295 165 -543 302 -551 305 -16 6 -959 47 -1038 45 -29 -1 -171 -39 -367 -100z']
			),
			'location' => DB::raw('POINT(-23.442503, -58.443832)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}