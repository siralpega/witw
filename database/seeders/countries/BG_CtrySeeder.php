<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BG_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Bulgaria',
			'code'  => 'BG',
			'type'  => null,
			'paths' => serialize(
				['M690 8460 c0 -57 -2 -62 -61 -139 -46 -60 -81 -93 -138 -131 -72 -46 -82 -50 -139 -50 l-61 0 -46 -147 c-26 -82 -62 -197 -81 -258 l-35 -110 47 -128 46 -128 57 -36 c31 -20 59 -40 62 -45 3 -5 12 -86 19 -178 l13 -169 48 -59 c44 -55 52 -61 98 -67 48 -6 53 -10 154 -123 90 -102 105 -123 111 -162 5 -36 24 -68 97 -162 81 -105 92 -116 112 -109 30 12 127 -27 138 -54 14 -36 9 -89 -10 -122 -16 -26 -34 -36 -105 -59 l-86 -28 -22 -58 -23 -58 -56 -11 c-75 -15 -146 -75 -168 -142 -9 -25 -36 -71 -61 -101 l-45 -55 -85 -3 c-126 -3 -143 -3 -165 5 -18 6 -26 -3 -60 -73 -38 -78 -39 -81 -28 -135 11 -48 8 -79 -27 -286 l-39 -232 70 -66 69 -66 -6 -102 -7 -103 -73 -45 c-71 -44 -74 -48 -90 -104 l-16 -59 -31 9 c-60 17 -67 14 -67 -37 0 -44 4 -51 84 -138 71 -76 91 -107 126 -186 23 -52 47 -100 53 -107 7 -6 127 -57 267 -113 140 -56 258 -105 262 -108 4 -4 10 -68 13 -142 7 -135 7 -135 55 -236 32 -68 57 -108 78 -122 24 -17 37 -42 62 -115 l31 -92 -82 -75 -81 -75 7 -107 c7 -98 5 -112 -15 -161 -22 -53 -22 -56 -6 -103 21 -62 20 -73 -9 -173 -14 -47 -25 -90 -25 -97 0 -7 56 -22 148 -39 81 -14 155 -29 164 -31 13 -4 25 10 50 61 28 56 38 67 68 75 54 15 63 12 93 -30 16 -22 35 -40 43 -40 8 0 74 18 147 41 l132 40 252 -2 c210 -2 256 0 270 13 10 8 57 31 105 52 48 21 94 47 104 57 9 10 20 19 24 19 3 0 16 -29 29 -64 l22 -64 57 -11 c52 -10 61 -9 124 16 60 23 67 29 62 47 -4 12 -13 40 -20 63 l-13 43 42 28 42 29 43 -18 c42 -18 43 -18 114 8 l71 27 41 -45 41 -45 46 9 c40 9 53 7 103 -16 l58 -27 59 41 c52 35 65 40 107 37 l47 -3 22 -120 c12 -66 25 -130 28 -142 4 -18 16 -23 83 -34 80 -13 96 -23 149 -91 31 -41 73 -30 116 31 30 41 42 49 97 64 l63 18 51 -50 c42 -41 72 -58 167 -96 l117 -46 32 -62 c18 -34 55 -83 83 -110 l49 -47 164 0 c195 0 254 13 387 85 l87 47 88 -6 c63 -5 130 -1 242 14 204 26 190 28 190 -20 0 -22 1 -40 3 -40 1 0 90 24 197 54 l195 53 17 68 c10 38 29 86 44 108 l26 40 -31 71 c-30 69 -31 75 -29 196 4 156 -1 172 -52 195 -36 16 -40 22 -40 54 0 20 4 41 8 47 4 6 61 29 128 51 l121 40 106 -42 106 -43 15 23 c8 13 20 44 27 69 6 26 15 49 20 52 5 3 57 17 116 32 l106 27 34 79 c27 64 33 90 33 151 l0 72 61 41 62 40 69 -24 70 -24 54 39 54 39 93 -24 c50 -13 99 -24 107 -24 8 0 80 57 159 125 79 69 151 125 160 125 9 0 87 7 174 15 189 17 197 15 226 -61 11 -29 47 -93 79 -141 59 -87 60 -88 128 -112 38 -13 104 -43 146 -67 42 -24 80 -44 83 -44 3 0 5 13 5 28 0 28 6 31 118 74 l117 45 70 -24 69 -23 41 39 40 39 51 -19 c49 -19 52 -19 105 -1 32 12 55 26 57 36 2 9 -15 37 -37 64 -86 98 -121 155 -121 192 0 30 -9 45 -60 95 -33 33 -60 64 -60 71 0 6 -29 30 -64 54 -36 24 -67 52 -69 61 -3 10 -22 22 -46 29 -40 11 -41 11 -25 35 8 13 22 26 30 29 8 3 14 12 14 21 0 8 14 28 31 43 l31 28 -18 36 -17 37 -34 -14 c-39 -16 -36 -20 -53 70 -18 95 -18 95 -54 95 -49 0 -93 18 -111 46 -12 18 -24 24 -53 24 -20 0 -44 5 -52 10 -10 6 -21 3 -38 -12 l-22 -22 -43 20 c-41 20 -44 20 -99 3 -56 -16 -58 -16 -58 1 0 24 25 48 56 56 13 3 24 10 24 15 0 4 -33 24 -72 43 l-73 36 46 0 c26 0 62 -6 80 -14 79 -32 76 -33 108 38 16 36 33 66 37 66 4 0 24 -5 45 -12 36 -10 41 -9 64 12 13 12 25 32 27 44 2 14 12 22 28 25 32 4 40 17 40 63 0 63 15 88 52 88 57 0 75 10 94 52 l18 41 81 -7 c44 -3 107 -9 139 -12 l59 -7 -6 119 c-3 66 -13 142 -22 171 -14 48 -14 55 1 93 14 35 16 64 10 193 -6 137 -5 158 13 217 12 36 21 72 21 80 0 8 7 29 16 45 41 77 74 142 83 168 11 27 9 29 -42 52 -40 19 -69 25 -124 25 -40 0 -96 5 -125 12 l-53 12 95 9 c62 5 107 5 131 -2 66 -20 139 -14 179 14 29 20 41 40 67 112 18 49 37 107 43 130 8 34 19 47 61 74 28 17 57 43 66 56 13 19 24 23 68 23 29 0 82 9 117 20 79 25 95 25 135 0 18 -10 55 -22 83 -26 28 -4 70 -19 95 -35 l44 -28 12 42 c8 27 31 62 65 97 28 30 68 88 88 127 33 67 36 80 36 160 0 49 -5 104 -11 123 -6 19 -14 88 -18 152 -3 64 -9 119 -12 122 -2 3 -190 36 -416 74 l-412 69 -96 73 c-106 81 -105 80 -159 227 -46 123 -45 123 -227 123 l-128 0 -62 75 -62 75 -201 0 -202 0 -56 68 c-101 122 -234 172 -465 172 -85 0 -98 -3 -197 -44 -171 -72 -477 -155 -571 -156 -22 0 -71 -8 -109 -18 -63 -16 -76 -17 -138 -3 l-68 14 -92 -36 c-51 -20 -131 -46 -178 -58 -47 -12 -90 -27 -97 -33 -6 -6 -20 -33 -31 -60 l-19 -50 -104 -23 c-91 -20 -108 -28 -141 -60 -36 -35 -38 -41 -38 -97 0 -75 -29 -117 -104 -150 -47 -21 -57 -31 -102 -107 -48 -81 -52 -85 -104 -102 -70 -23 -235 -47 -325 -47 -64 0 -76 -4 -140 -41 l-70 -42 -66 11 c-43 8 -95 27 -151 57 -125 66 -177 81 -312 90 -97 6 -131 12 -189 36 -80 33 -118 35 -213 13 -100 -23 -181 -12 -239 33 -25 19 -81 56 -125 84 -78 48 -81 49 -158 49 l-79 0 -33 -49 c-28 -40 -47 -55 -109 -84 -64 -30 -93 -37 -184 -46 l-107 -9 -78 43 c-91 51 -258 111 -358 129 -58 10 -89 24 -163 70 -63 40 -111 63 -155 73 -64 14 -65 14 -104 -12 l-40 -26 -137 76 -137 77 -126 4 c-70 3 -228 1 -352 -3 -225 -8 -225 -8 -323 19 -76 21 -111 36 -152 68 l-54 41 30 66 c22 50 29 80 29 129 0 61 1 64 28 69 15 3 66 18 114 32 69 21 95 35 124 64 l36 37 -17 51 -17 51 -75 0 c-71 0 -77 2 -116 35 -28 24 -72 45 -140 67 -84 28 -109 42 -165 90 -37 32 -70 57 -74 58 -5 0 -8 -27 -8 -60z']
			),
			'location' => DB::raw('POINT(42.733883, 25.48583)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}