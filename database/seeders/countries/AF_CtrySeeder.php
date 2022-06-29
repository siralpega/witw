<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AF_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Afghanistan',
			'code'  => 'AF',
			'type'  => null,
			'paths' => serialize(
				['M7350 8957 l-75 -33 -42 -79 c-23 -44 -43 -91 -43 -105 -1 -18 -16 -37 -51 -64 -35 -28 -53 -51 -61 -79 -9 -30 -23 -46 -65 -73 -62 -39 -66 -59 -33 -146 11 -30 20 -77 20 -109 0 -53 -1 -56 -34 -72 -24 -11 -36 -25 -41 -46 -4 -17 -10 -31 -14 -31 -4 0 -33 18 -64 39 l-56 40 -93 -9 c-51 -5 -121 -10 -155 -10 l-62 0 -56 -80 -57 -80 16 -68 15 -67 -34 -34 -33 -34 -88 56 c-48 32 -92 57 -98 57 -6 -1 -57 -9 -114 -19 -83 -14 -109 -23 -140 -48 -48 -38 -76 -52 -190 -93 -52 -18 -120 -50 -153 -72 -33 -21 -63 -38 -67 -38 -4 0 -47 24 -95 53 -66 40 -94 63 -110 93 -18 31 -39 48 -105 82 l-82 43 -108 -20 -107 -20 -61 63 -61 63 -109 13 c-102 13 -119 12 -265 -9 -147 -21 -159 -22 -210 -7 -43 13 -63 26 -92 61 -36 43 -40 45 -91 45 -38 0 -76 9 -126 31 -40 17 -73 29 -75 27 -1 -2 -28 -53 -58 -114 -31 -61 -63 -114 -72 -118 -9 -3 -86 -6 -171 -6 l-154 0 -109 -62 -108 -62 -6 -71 c-5 -60 -14 -86 -57 -166 -47 -90 -50 -98 -50 -173 0 -76 -2 -83 -47 -163 -42 -75 -57 -91 -135 -149 l-87 -66 -54 7 -55 7 -33 -62 -34 -62 -40 9 c-22 4 -79 8 -127 7 -73 -1 -98 -6 -160 -32 -40 -17 -129 -43 -198 -58 -69 -15 -127 -28 -129 -30 -2 -2 9 -34 24 -70 l28 -67 -30 -26 c-25 -22 -32 -37 -41 -95 -6 -37 -12 -70 -14 -71 -2 -2 -90 -46 -197 -100 -188 -94 -196 -97 -221 -82 -24 15 -28 14 -80 -19 -30 -18 -58 -34 -61 -34 -4 0 -3 18 1 41 8 40 7 41 -81 144 l-89 104 -66 -22 c-64 -22 -69 -22 -183 -9 l-117 15 -58 88 c-50 78 -60 89 -86 89 -65 0 -74 -10 -104 -121 -16 -57 -39 -130 -52 -161 -13 -32 -24 -75 -24 -97 0 -22 -11 -70 -24 -107 -21 -58 -24 -77 -19 -159 l6 -94 -53 -70 c-48 -62 -60 -72 -122 -96 -37 -15 -68 -30 -68 -33 0 -19 43 -73 83 -106 39 -32 44 -40 38 -64 -7 -26 -9 -27 -100 -32 l-94 -5 -43 -50 c-49 -55 -50 -63 -34 -205 8 -69 7 -95 -6 -142 -16 -55 -16 -59 6 -111 l23 -55 91 -26 c83 -24 126 -49 126 -76 0 -5 -26 -29 -59 -55 -42 -33 -63 -59 -75 -88 -9 -24 -39 -65 -66 -92 -44 -43 -50 -54 -50 -90 0 -22 39 -200 86 -395 91 -382 90 -371 58 -517 l-17 -71 30 -55 30 -56 -28 -27 c-28 -27 -29 -30 -29 -134 l0 -107 267 -82 c295 -91 355 -121 368 -183 4 -17 20 -52 36 -78 l28 -46 -15 -109 c-14 -101 -18 -111 -52 -150 -20 -23 -125 -139 -232 -259 l-195 -218 -20 -79 c-19 -74 -24 -82 -89 -149 -39 -38 -68 -71 -65 -74 2 -2 246 -101 541 -221 l537 -217 288 11 c158 6 329 16 379 22 83 11 104 10 270 -16 163 -26 182 -31 213 -57 31 -28 71 -48 92 -48 5 0 9 15 9 34 0 26 10 44 42 79 45 47 100 72 226 100 l62 14 191 -53 191 -54 449 142 450 142 25 43 25 43 -45 54 -46 53 40 133 c22 73 40 138 40 143 0 6 -11 25 -25 43 -14 18 -25 39 -25 46 0 7 23 81 50 164 l51 152 59 16 c52 15 60 20 70 51 6 18 18 39 27 47 9 7 33 36 54 64 52 71 170 144 232 144 l45 0 11 -46 c11 -42 14 -45 39 -40 15 3 83 13 152 21 124 16 314 66 337 88 6 7 13 21 15 32 3 17 -6 21 -70 31 -73 11 -92 22 -92 55 0 16 127 75 226 105 51 15 154 117 167 165 7 27 11 29 57 29 43 0 52 -4 71 -29 15 -21 38 -34 82 -46 34 -9 67 -19 74 -22 10 -4 13 4 11 27 -3 30 0 34 36 46 l39 14 36 -42 c20 -24 54 -62 76 -86 l40 -43 71 7 70 7 97 174 97 174 0 198 0 199 79 74 80 74 -24 41 -23 42 33 43 34 43 -18 72 -19 71 48 26 c33 18 68 27 121 31 41 3 138 23 215 43 l142 37 41 82 c23 46 41 86 41 89 0 3 -27 34 -60 68 -69 72 -79 111 -42 163 29 40 28 43 -10 43 -18 0 -62 13 -97 28 l-64 27 -28 75 c-31 80 -31 91 5 132 19 22 34 27 73 29 42 1 62 -7 155 -58 l108 -59 127 13 c110 11 304 53 330 72 5 3 31 38 60 76 42 58 52 82 62 138 l12 69 -41 54 c-35 46 -40 60 -40 105 0 44 5 58 33 93 20 25 42 70 55 115 12 41 23 75 24 77 2 1 63 32 136 68 72 36 132 69 132 74 -1 4 -5 26 -9 49 -7 38 -6 44 20 69 l29 28 -27 28 c-26 27 -26 29 -13 81 12 52 11 59 -18 148 -19 58 -33 127 -38 181 l-6 87 -57 40 c-31 21 -80 64 -110 94 l-53 55 121 169 c66 93 128 176 138 185 17 15 26 14 112 -13 52 -16 96 -28 97 -26 2 2 14 40 27 85 13 46 27 85 30 88 3 3 41 11 84 16 92 13 108 22 228 139 l90 87 281 15 c154 8 298 12 321 8 32 -6 56 -2 114 19 l74 27 147 -50 146 -50 42 33 c32 25 63 38 126 52 87 19 154 51 154 74 0 7 -14 51 -30 96 -22 58 -29 93 -25 115 7 40 17 46 50 31 23 -10 29 -8 58 19 l32 31 38 -19 37 -20 12 26 c10 22 8 29 -11 49 -31 33 -104 53 -136 36 -20 -11 -27 -9 -58 14 -29 22 -44 26 -102 26 -59 0 -73 -4 -94 -24 -16 -14 -59 -32 -111 -46 -47 -12 -120 -35 -163 -51 -95 -35 -107 -36 -79 -6 19 21 21 28 11 55 -10 29 -15 32 -50 32 -21 0 -57 7 -78 16 -38 15 -46 15 -153 -11 -62 -14 -121 -28 -130 -31 -9 -3 -23 -24 -31 -47 l-13 -42 -66 -9 c-63 -9 -65 -10 -99 -59 -19 -28 -60 -79 -92 -113 l-57 -62 -83 -12 c-45 -7 -91 -16 -102 -20 -11 -4 -90 -65 -175 -135 -184 -152 -179 -149 -254 -165 l-58 -12 -45 44 c-54 52 -122 168 -159 265 -25 70 -26 76 -15 155 7 46 24 114 38 151 l27 68 -21 42 c-29 62 -21 164 18 226 21 32 29 58 29 89 0 40 -2 43 -22 36 -13 -3 -35 -13 -50 -20 -15 -8 -50 -14 -77 -14 -48 0 -50 1 -59 33 -7 23 -5 58 4 108 7 41 13 101 13 135 l1 60 -75 43 c-42 23 -108 67 -147 97 -39 30 -74 54 -77 54 -3 0 -40 -15 -81 -33z']
			),
			'location' => DB::raw('POINT(33.93911, 67.709953)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}