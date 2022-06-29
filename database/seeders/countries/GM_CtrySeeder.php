<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GM_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Gambia',
			'code'  => 'GM',
			'type'  => null,
			'paths' => serialize(
				['M5718 6186 c-130 -52 -253 -97 -272 -100 -30 -6 -53 2 -155 54 -67 33 -127 60 -134 60 -19 0 -391 -161 -398 -172 -4 -6 -46 -116 -95 -245 l-89 -235 -70 5 c-170 14 -588 33 -1790 82 -609 25 -1463 55 -1546 55 l-78 0 -7 -35 c-6 -33 -39 -69 -54 -60 -4 3 -16 34 -26 70 -10 36 -23 65 -28 65 -24 0 -86 -24 -86 -34 0 -6 18 -29 41 -52 38 -39 42 -48 52 -123 10 -79 10 -82 -14 -109 -67 -74 -67 -65 3 -110 35 -22 82 -48 105 -57 l41 -16 4 -107 4 -107 -43 -52 c-37 -44 -41 -52 -26 -56 10 -3 54 -13 98 -23 63 -14 92 -27 135 -60 30 -23 65 -45 77 -48 12 -4 70 2 128 14 96 18 109 19 135 5 16 -8 43 -15 60 -15 26 0 33 6 46 36 8 20 13 42 10 50 -3 7 1 17 8 21 8 5 20 24 28 43 13 31 15 33 20 13 3 -12 0 -34 -8 -49 -18 -35 -18 -34 14 -34 21 0 55 22 128 83 54 45 119 91 144 102 25 11 52 27 60 37 8 9 55 38 104 64 l89 48 71 -37 c64 -33 82 -37 191 -46 71 -6 144 -6 180 -1 35 5 123 5 210 0 111 -7 163 -6 198 3 34 9 94 10 228 3 177 -8 183 -8 241 15 33 13 79 40 102 61 43 37 91 55 158 60 34 2 43 -4 93 -54 67 -67 86 -67 123 3 34 64 48 76 104 89 91 22 218 -15 218 -64 0 -19 0 -19 -21 0 -16 14 -40 20 -100 23 -67 3 -82 0 -109 -19 -26 -19 -30 -27 -30 -69 0 -67 -27 -91 -102 -91 -56 0 -57 0 -103 55 -42 48 -52 55 -84 55 -31 -1 -41 -7 -71 -45 -19 -25 -42 -45 -50 -45 -8 0 -71 -6 -140 -13 -69 -7 -141 -14 -160 -15 -19 -1 -42 -3 -50 -4 -8 -2 -50 6 -93 17 l-79 19 -41 -22 c-35 -18 -70 -23 -202 -32 -88 -6 -175 -13 -193 -16 -18 -3 -59 0 -91 7 -56 11 -60 10 -98 -15 l-39 -26 -89 30 c-49 16 -108 30 -132 30 -24 0 -52 5 -62 12 -17 10 -27 4 -83 -48 -36 -32 -92 -75 -127 -94 l-62 -35 -26 -86 -26 -86 -81 -17 c-106 -22 -177 -45 -198 -64 -11 -9 -28 -12 -44 -9 -39 7 -94 -21 -94 -49 0 -43 -69 -47 -98 -6 -20 27 -22 27 -142 30 -99 3 -121 1 -118 -10 3 -7 20 -14 39 -16 51 -5 61 -22 13 -22 -52 0 -74 -23 -74 -78 0 -25 -8 -55 -21 -74 l-21 -33 7 30 c10 42 10 92 1 143 -7 35 -6 42 8 42 9 0 16 6 16 13 0 8 -55 27 -147 52 -137 37 -147 42 -166 73 -22 37 -34 39 -85 13 -65 -32 -82 -7 -32 50 16 19 37 51 46 72 17 38 17 40 -12 124 -25 73 -34 89 -67 111 -42 28 -43 30 -21 118 17 65 17 65 -6 89 -19 20 -33 25 -72 25 -26 0 -48 4 -48 10 0 11 -53 40 -74 40 -9 0 -56 -37 -105 -81 -65 -60 -92 -92 -102 -122 -14 -42 -59 -81 -172 -148 -51 -30 -58 -39 -64 -72 -6 -38 -21 -61 -45 -69 -10 -4 -10 -10 0 -32 9 -19 10 -52 6 -107 -7 -76 -6 -81 18 -107 35 -37 40 -106 21 -256 l-15 -118 25 -27 c14 -14 34 -57 46 -95 18 -63 19 -72 5 -104 -7 -19 -14 -36 -14 -38 0 -2 17 -11 37 -19 42 -18 80 -12 99 13 10 14 9 21 -7 38 -17 18 -18 25 -8 48 10 20 19 26 45 26 25 0 38 7 54 30 l22 30 -22 35 -21 34 23 15 c22 14 129 12 1108 -19 915 -29 1968 -56 1978 -50 1 1 12 119 23 261 11 142 22 268 24 280 4 20 13 22 117 26 92 5 126 11 180 33 l67 27 164 -55 163 -54 154 78 c85 43 162 78 171 78 8 1 95 -34 191 -78 l176 -79 164 32 163 32 117 73 c64 40 121 78 126 84 5 7 28 95 52 197 l43 185 143 98 c141 96 143 97 201 96 l58 0 60 -122 60 -122 208 -148 209 -147 106 -6 c84 -5 136 -15 242 -46 74 -22 142 -44 150 -48 8 -5 26 -39 40 -76 l25 -68 145 -88 145 -88 131 23 130 23 51 -45 c45 -40 69 -52 200 -95 l148 -48 110 -109 110 -109 192 0 191 0 72 -44 71 -44 86 23 c76 21 96 23 182 15 53 -4 99 -5 103 -1 4 4 27 47 51 97 l44 90 116 -8 117 -8 92 46 93 47 165 13 c91 7 180 14 197 14 37 0 50 15 209 232 l85 117 -181 235 -182 235 -61 20 c-105 34 -141 35 -257 6 -70 -17 -145 -28 -225 -32 -84 -3 -156 -14 -239 -35 -112 -27 -126 -34 -227 -103 -102 -69 -116 -75 -220 -99 -108 -26 -115 -26 -242 -15 l-132 12 -145 116 -145 116 -50 154 -51 155 -205 64 -206 64 -153 -66 c-85 -36 -158 -66 -162 -66 -4 0 -59 34 -123 75 l-115 75 0 67 c0 64 -3 75 -62 190 l-63 122 -176 75 -177 74 -77 -9 c-77 -8 -77 -8 -153 30 -81 40 -157 61 -220 60 -22 0 -133 -38 -274 -93z m-4340 -1697 c3 -61 2 -63 -15 -47 -15 16 -16 22 -4 53 10 30 10 39 -1 52 -11 14 -11 15 2 11 11 -3 16 -22 18 -69z']
			),
			'location' => DB::raw('POINT(13.443182, -15.310139)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}