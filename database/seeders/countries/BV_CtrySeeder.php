<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BV_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Bouvet Island',
			'code'  => 'BV',
			'type'  => null,
			'paths' => serialize(
				['M3595 8281 c-28 -30 -58 -51 -70 -51 -12 0 -70 14 -128 30 -123 34 -245 40 -317 15 -23 -8 -75 -15 -114 -15 -87 0 -251 -29 -366 -66 -72 -22 -110 -28 -245 -33 -153 -6 -163 -7 -230 -38 -38 -18 -101 -37 -140 -43 -38 -6 -105 -22 -148 -35 -54 -17 -101 -25 -153 -25 -65 0 -83 -4 -144 -35 -53 -26 -82 -35 -121 -35 -55 0 -93 -22 -245 -142 -64 -50 -82 -56 -102 -36 -10 10 -25 -1 -72 -47 -57 -57 -61 -59 -120 -63 -53 -4 -63 -8 -73 -29 -6 -13 -23 -31 -39 -39 -15 -8 -38 -28 -50 -45 -35 -47 -103 -77 -153 -68 -22 4 -59 8 -83 8 l-42 1 6 -41 c9 -57 -12 -115 -51 -139 -37 -23 -45 -49 -45 -149 0 -50 -6 -79 -26 -121 -14 -30 -35 -79 -46 -108 -29 -78 -44 -81 -124 -27 -46 31 -78 45 -101 45 -32 0 -33 -2 -33 -39 0 -46 27 -83 78 -111 71 -37 82 -51 93 -120 8 -51 7 -77 -5 -125 -8 -33 -18 -81 -21 -107 -5 -37 -14 -54 -46 -85 -21 -21 -56 -62 -77 -92 -35 -52 -37 -59 -40 -147 -2 -52 5 -163 16 -260 12 -93 23 -216 27 -274 5 -96 8 -109 36 -147 47 -66 70 -145 79 -273 9 -120 21 -177 46 -222 29 -53 52 -136 59 -214 4 -48 16 -100 31 -132 34 -77 111 -188 161 -232 24 -20 43 -44 43 -51 0 -8 18 -41 41 -74 22 -33 49 -78 61 -100 27 -53 141 -210 187 -258 20 -21 64 -56 97 -78 41 -26 74 -58 98 -95 73 -109 166 -176 279 -199 110 -23 124 -29 146 -72 10 -21 40 -55 66 -77 45 -37 48 -38 112 -34 l65 4 39 -58 c33 -48 46 -59 82 -68 111 -29 162 -55 227 -115 19 -18 73 -53 120 -77 166 -88 254 -144 324 -208 39 -36 127 -100 196 -142 69 -42 136 -88 149 -102 21 -23 33 -26 88 -26 47 0 65 4 69 15 8 20 40 19 48 -1 3 -9 6 -27 6 -40 0 -21 11 -30 63 -54 34 -17 68 -30 74 -30 7 0 21 17 32 37 10 21 28 47 40 57 21 19 22 19 44 -2 40 -38 73 -28 116 36 20 28 28 32 66 32 24 0 47 -5 51 -11 12 -20 91 -49 190 -69 55 -11 102 -20 106 -20 4 0 11 18 14 39 6 40 7 40 61 47 42 5 68 2 117 -15 81 -27 147 -28 171 -1 22 25 25 25 80 -1 l44 -21 74 22 c62 19 85 21 138 14 l64 -9 3 -45 c1 -25 10 -78 19 -118 l16 -73 -91 -92 c-100 -101 -118 -134 -97 -184 10 -23 22 -33 47 -38 41 -9 122 -49 165 -81 41 -31 86 -31 110 0 11 13 34 27 53 31 19 4 48 18 63 31 16 13 41 24 57 24 34 0 45 24 31 63 -6 15 -15 55 -21 90 -11 58 -17 69 -66 118 -62 61 -66 80 -28 138 22 33 30 38 45 31 10 -6 43 -10 75 -10 56 0 57 0 39 -20 -17 -19 -17 -20 9 -30 15 -5 44 -10 65 -10 34 0 44 6 90 60 29 33 61 60 71 60 10 0 20 5 22 12 3 8 11 6 29 -5 13 -8 60 -25 103 -37 43 -12 95 -30 115 -41 20 -10 66 -21 102 -25 71 -7 100 3 169 56 68 53 95 62 170 54 69 -6 69 -7 81 -43 6 -20 14 -39 18 -44 4 -4 47 13 96 39 l90 45 150 -11 150 -11 33 -35 c19 -20 60 -45 98 -61 50 -20 71 -35 91 -64 44 -67 88 -88 200 -95 109 -7 118 -11 174 -61 33 -30 42 -33 54 -23 13 11 18 10 28 -4 11 -14 37 -19 142 -25 72 -4 135 -10 141 -14 6 -4 36 7 65 23 43 23 62 28 94 23 34 -4 54 1 121 35 43 22 99 43 124 47 25 4 53 14 63 23 16 14 22 14 65 -1 26 -9 59 -17 73 -17 15 0 36 -12 53 -29 15 -16 43 -32 60 -35 18 -4 43 -17 56 -31 13 -14 35 -25 49 -25 46 0 100 20 106 39 3 10 24 27 47 37 22 10 53 31 69 47 l28 28 43 -27 c24 -15 55 -41 70 -59 17 -20 47 -40 75 -49 26 -9 61 -29 78 -45 34 -32 50 -32 185 4 43 12 84 16 122 12 61 -5 78 2 52 24 -24 20 -47 70 -55 119 -6 39 -4 50 18 77 21 29 30 33 69 33 47 0 63 23 25 35 -43 13 -52 132 -11 157 18 12 18 13 -1 39 -25 35 -25 69 -1 69 29 0 32 10 11 43 -25 42 -24 63 6 99 26 30 34 83 14 90 -8 3 -7 30 4 97 10 68 12 104 4 132 -5 22 -8 41 -6 42 2 2 38 25 79 51 41 27 79 56 84 64 5 8 24 32 43 53 30 34 41 39 77 39 33 0 48 6 67 26 40 43 72 54 157 54 l79 0 23 50 c27 58 20 87 -29 116 -41 24 -52 87 -24 141 l20 38 79 5 78 5 23 40 c12 21 31 42 42 47 23 8 149 173 179 233 37 75 37 83 0 93 l-33 8 -3 74 c-2 55 1 82 14 105 16 30 15 33 -10 83 -14 28 -35 56 -46 62 -11 6 -26 26 -34 44 -8 18 -27 43 -44 55 -24 17 -32 31 -37 70 l-7 48 -84 6 c-83 5 -85 6 -138 51 -46 39 -57 56 -79 118 -14 40 -41 114 -61 163 -32 81 -35 100 -36 188 0 92 2 102 34 165 19 37 48 83 65 102 l30 35 1 -32 c0 -40 3 -41 134 -9 69 17 102 30 109 42 6 11 26 33 45 51 31 29 51 40 105 57 13 4 17 14 15 33 -3 23 -18 33 -136 88 -95 44 -160 82 -226 134 -92 72 -94 73 -100 124 -4 29 -25 89 -46 134 -21 45 -46 112 -55 150 l-18 68 26 52 c21 41 27 67 27 117 0 92 -12 114 -69 121 -73 10 -81 15 -99 51 -12 27 -43 51 -141 110 -99 60 -137 89 -176 137 -48 57 -299 268 -377 316 -21 12 -55 43 -75 68 -30 37 -59 56 -139 94 -71 33 -109 57 -127 81 -22 28 -41 38 -121 62 -84 25 -103 28 -178 21 -75 -6 -89 -11 -140 -46 -60 -42 -163 -74 -269 -86 -50 -5 -61 -2 -94 20 l-39 26 -10 -21 c-6 -12 -24 -25 -39 -29 -24 -6 -29 -4 -38 17 -5 14 -9 28 -9 32 0 3 -14 30 -32 59 l-32 53 -72 0 -72 0 -25 -43 c-30 -50 -62 -81 -75 -73 -6 3 -13 23 -17 44 -3 20 -26 73 -50 117 l-43 79 -29 -95 -29 -94 -18 33 c-16 32 -20 33 -54 27 -29 -5 -47 -1 -87 19 -61 32 -195 82 -330 125 -55 18 -140 45 -190 61 -49 16 -115 32 -145 36 -70 8 -142 47 -190 102 l-38 43 -61 -30 c-33 -17 -62 -35 -66 -41 -13 -21 -79 -40 -139 -40 l-61 1 33 14 33 15 -48 56 c-46 53 -48 54 -51 30 l-3 -26 -34 26 -34 26 -7 -27 c-4 -17 -11 -24 -21 -21 -8 3 -19 6 -24 6 -4 0 -15 24 -24 54 -15 51 -18 54 -53 59 -20 2 -38 3 -40 2 -2 -2 2 -22 8 -45 11 -40 10 -45 -12 -66 -19 -20 -30 -22 -61 -17 -35 5 -41 12 -65 59 -27 56 -41 63 -85 43 -19 -9 -32 -7 -64 10 -22 11 -62 23 -90 27 l-50 6 -21 -50 c-16 -36 -22 -71 -22 -121 0 -39 -2 -71 -5 -71 -2 0 -20 7 -39 16 -33 16 -35 16 -62 -5 -22 -17 -39 -21 -83 -20 -36 1 -67 -4 -88 -14 -18 -10 -50 -17 -73 -17 -32 0 -40 4 -40 18 0 10 -13 36 -30 58 -21 28 -30 50 -30 79 0 39 -2 42 -55 68 -74 36 -108 35 -135 -2 -27 -39 -48 -44 -100 -26 -23 8 -57 15 -74 16 -26 0 -40 11 -83 62 -49 60 -54 63 -151 95 -55 18 -122 35 -149 38 -47 6 -49 5 -98 -45z']
			),
			'location' => DB::raw('POINT(-54.423199, 3.413194)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}