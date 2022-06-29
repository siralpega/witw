<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AI_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Anguilla',
			'code'  => 'AI',
			'type'  => null,
			'paths' => serialize(
				['M10035 8123 c-10 -15 -19 -39 -19 -53 -1 -16 -8 -26 -21 -28 -11 -2 -32 -15 -46 -29 -23 -21 -28 -37 -34 -99 l-7 -74 -37 0 c-31 0 -40 -5 -49 -25 -7 -14 -20 -25 -31 -25 -11 0 -22 -4 -26 -9 -3 -5 -20 -13 -38 -17 -35 -7 -129 -68 -189 -122 -40 -36 -53 -87 -24 -98 12 -5 13 -11 4 -30 -15 -32 -63 -40 -161 -25 -51 8 -119 10 -194 5 l-115 -7 -94 -73 c-80 -63 -100 -74 -133 -74 -21 0 -44 -6 -50 -14 -7 -8 -42 -24 -79 -36 -36 -12 -80 -34 -97 -49 -17 -15 -58 -38 -90 -51 -52 -21 -62 -22 -104 -11 -64 16 -100 60 -91 110 4 20 13 48 20 64 18 38 3 52 -36 32 -19 -10 -42 -13 -70 -9 -45 6 -166 -25 -194 -51 -21 -19 -78 -42 -137 -55 -95 -21 -123 -31 -123 -43 0 -14 -128 -85 -210 -117 -30 -12 -76 -35 -101 -51 -26 -16 -59 -29 -78 -29 -37 0 -91 36 -91 61 0 10 -18 39 -40 64 -22 25 -40 56 -40 69 0 32 -12 40 -24 17 -6 -11 -51 -53 -100 -95 -107 -92 -221 -149 -351 -176 -49 -10 -130 -35 -180 -55 -63 -26 -121 -41 -192 -50 l-102 -13 -90 -81 c-83 -74 -94 -81 -133 -81 -55 0 -194 -58 -272 -113 -44 -31 -62 -51 -68 -74 -6 -24 -14 -33 -29 -33 -22 0 -95 -34 -121 -57 -9 -8 -40 -27 -70 -42 -45 -23 -53 -32 -56 -58 -3 -30 -5 -31 -74 -41 -40 -6 -83 -19 -97 -30 -22 -16 -25 -25 -22 -65 3 -54 -14 -69 -50 -43 -33 23 -56 4 -75 -60 -20 -71 -73 -114 -141 -114 -23 0 -43 -4 -43 -9 0 -5 -11 -23 -25 -39 l-25 -30 41 -26 c22 -15 76 -61 118 -102 l78 -74 1 -76 c0 -50 6 -83 16 -99 20 -30 20 -51 1 -59 -22 -8 -18 -24 15 -63 27 -31 30 -40 30 -104 0 -69 -1 -70 -51 -134 -44 -54 -75 -78 -200 -156 -82 -50 -149 -97 -149 -105 0 -20 -37 -39 -101 -53 -31 -6 -71 -23 -90 -36 -20 -16 -46 -25 -68 -25 -20 0 -60 -11 -89 -25 -78 -36 -149 -55 -207 -55 -79 0 -165 -55 -316 -201 l-124 -120 111 4 112 4 11 -37 c26 -87 -4 -293 -48 -327 -105 -81 -146 -90 -306 -61 -132 24 -220 20 -315 -16 -36 -13 -101 -29 -145 -36 -60 -9 -107 -24 -185 -62 -120 -58 -122 -58 -394 -33 l-151 14 -31 -30 -31 -30 -144 3 -144 2 -75 -38 c-41 -21 -101 -56 -132 -78 -57 -38 -58 -39 -58 -87 0 -37 -10 -67 -41 -127 -35 -68 -58 -95 -162 -193 l-122 -113 -81 5 c-57 3 -88 1 -105 -9 -13 -7 -34 -13 -46 -14 -18 0 -25 -9 -34 -44 -10 -40 -22 -54 -117 -130 -59 -47 -114 -86 -123 -86 -25 0 -99 -54 -164 -119 -54 -55 -63 -61 -101 -61 -30 0 -48 6 -65 24 -21 21 -30 23 -65 17 -22 -4 -65 -21 -94 -37 -55 -29 -55 -29 -60 -84 -6 -69 -21 -90 -87 -124 -38 -19 -53 -32 -53 -47 0 -31 -18 -57 -50 -74 -17 -9 -41 -33 -55 -55 -20 -31 -31 -40 -54 -40 -35 0 -91 -19 -91 -31 0 -4 -18 -34 -41 -66 l-40 -58 70 -3 c45 -2 87 3 116 13 25 8 60 15 77 15 31 0 74 26 133 81 43 40 116 50 141 20 26 -30 41 -26 59 13 23 48 88 89 155 97 50 6 61 3 121 -29 47 -25 71 -46 85 -71 18 -33 23 -36 72 -39 37 -2 52 -7 52 -18 0 -23 50 -17 87 12 22 17 33 33 33 52 1 20 17 41 65 84 71 63 116 77 196 61 l44 -9 -4 -85 c-3 -83 -2 -85 22 -96 25 -12 26 -11 41 41 34 116 61 157 178 272 62 61 123 117 136 123 19 10 43 10 114 0 l91 -12 30 -44 c17 -24 36 -42 42 -40 5 3 36 13 67 23 52 16 58 21 64 51 6 31 9 33 45 33 32 0 41 4 48 24 10 23 122 101 218 150 35 17 68 46 100 86 43 53 55 63 113 81 47 16 100 23 192 26 l127 5 116 -63 115 -62 0 -45 c0 -33 7 -54 25 -78 30 -40 32 -89 5 -124 -24 -30 -25 -67 -4 -91 15 -16 21 -15 110 28 93 45 96 46 201 47 l106 1 43 45 c42 44 43 45 118 48 76 4 76 4 116 -32 22 -20 46 -36 53 -36 20 0 47 33 47 57 0 12 6 23 14 26 8 3 16 16 18 29 3 21 10 24 80 30 87 8 138 29 138 57 0 13 10 22 31 26 17 4 33 13 35 20 4 9 31 16 72 20 90 9 121 21 115 45 -4 15 7 27 44 50 55 34 87 89 99 170 8 59 52 140 81 151 42 16 111 73 126 106 9 17 19 70 23 117 l7 86 42 0 c38 0 73 -19 60 -32 -7 -7 -9 -97 -2 -105 21 -20 133 66 154 118 18 46 47 52 78 15 16 -19 33 -25 86 -29 l66 -6 25 58 26 59 110 -6 110 -5 45 35 c32 24 65 39 106 47 59 12 61 13 71 51 5 22 15 58 20 80 9 33 15 40 35 40 37 0 61 31 69 88 6 48 8 51 49 65 41 14 46 13 117 -14 66 -26 76 -27 90 -14 11 10 38 15 77 15 50 0 72 6 128 36 37 20 76 34 86 31 46 -12 84 134 39 148 -25 8 -26 34 -2 74 21 38 68 56 106 41 43 -16 165 -1 177 21 6 12 21 19 40 19 22 0 59 19 124 65 85 59 98 65 161 71 64 7 73 11 125 56 54 46 58 48 118 48 48 0 74 6 119 29 43 21 64 26 85 20 18 -5 37 -2 57 8 34 17 36 21 15 37 -13 10 -13 15 4 47 26 49 18 82 -25 98 -40 14 -41 19 -13 55 19 25 20 26 2 33 -28 10 -33 24 -16 49 12 18 21 22 48 17 31 -5 36 -3 51 30 15 31 22 35 65 41 47 6 49 8 49 38 0 20 9 39 26 55 22 20 25 31 23 71 -2 26 1 62 5 80 7 31 10 32 57 32 46 0 50 -2 74 -40 14 -22 32 -40 41 -40 9 0 38 -18 64 -40 54 -45 70 -47 210 -29 97 13 135 38 146 96 3 18 16 40 27 48 30 21 96 19 132 -5 40 -26 82 -26 90 0 7 21 53 50 78 50 30 0 28 48 -4 104 l-30 55 21 29 c19 25 31 30 82 36 56 5 62 4 80 -19 22 -29 50 -32 69 -9 21 26 23 224 2 246 -14 15 -14 24 -4 59 7 22 14 74 16 114 2 41 6 79 9 84 3 5 23 12 43 16 21 3 54 17 74 30 24 15 40 20 50 14 25 -16 29 -10 29 39 0 37 4 50 21 60 11 7 27 28 35 47 13 32 12 38 -14 92 -15 32 -35 59 -45 61 -9 2 -31 -10 -48 -27 -17 -17 -33 -31 -35 -31 -3 0 -33 21 -67 48 -34 26 -73 54 -87 63 -21 14 -25 25 -28 85 -3 53 1 80 16 116 23 53 48 70 112 78 l45 5 7 50 c5 37 14 54 32 68 15 10 26 26 26 35 0 23 47 72 68 72 9 0 32 9 51 21 19 11 60 23 90 26 31 3 63 11 71 19 8 7 27 16 43 19 20 5 27 13 27 30 0 41 18 72 44 79 22 5 25 11 20 30 -7 31 18 79 55 105 39 28 67 76 76 129 l7 42 84 0 c51 0 84 4 84 10 0 6 11 15 25 20 29 11 34 40 7 40 -10 0 -28 7 -41 16 -20 14 -22 22 -16 60 4 31 3 44 -6 44 -9 0 -10 17 -6 63 6 55 11 66 41 92 19 17 38 44 42 60 4 17 18 44 31 61 12 17 23 36 23 42 0 13 -4 14 -75 17 -27 2 -64 6 -81 10 -26 6 -33 3 -49 -22z']
			),
			'location' => DB::raw('POINT(18.220554, -63.068615)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}