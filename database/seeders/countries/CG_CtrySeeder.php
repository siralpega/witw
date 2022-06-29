<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CG_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Congo [Republic]',
			'code'  => 'CG',
			'type'  => null,
			'paths' => serialize(
				['M8101 10176 l-63 -64 -49 16 -49 16 -33 -32 c-29 -28 -43 -33 -137 -47 -58 -8 -122 -22 -143 -32 -36 -16 -39 -15 -119 16 -45 17 -84 28 -87 23 -3 -4 -16 -25 -29 -45 -27 -42 -26 -41 -85 -25 -41 10 -50 9 -124 -21 l-80 -32 -28 -102 c-15 -56 -52 -150 -82 -210 l-53 -107 30 -60 c16 -33 30 -62 30 -65 0 -3 -13 -5 -30 -5 -29 0 -30 -2 -30 -42 0 -24 7 -75 17 -115 l16 -72 -153 -353 c-84 -194 -156 -360 -161 -369 -8 -15 -15 -15 -71 -3 -107 23 -98 36 -98 -146 l0 -160 49 -129 48 -129 -61 -45 -61 -45 -3 79 -3 79 -97 0 c-85 1 -100 3 -123 23 -15 12 -66 55 -113 96 l-86 73 -129 33 -128 32 -64 -48 c-55 -42 -71 -49 -111 -49 -45 0 -47 1 -50 32 -2 25 -13 39 -50 65 l-47 34 -61 -31 c-34 -17 -68 -29 -76 -26 -8 3 -39 24 -69 47 l-55 41 -45 -15 -45 -16 0 60 c0 32 -4 59 -8 59 -4 0 -26 -18 -47 -40 -21 -22 -42 -40 -46 -40 -3 0 -12 20 -19 45 l-13 45 -66 0 -67 0 -59 60 c-33 33 -63 60 -67 60 -4 0 -35 -40 -68 -90 -33 -49 -62 -90 -64 -90 -2 0 -17 20 -33 45 l-28 45 -647 0 c-607 0 -647 -1 -652 -17 -3 -10 -10 -46 -17 -81 -13 -67 -4 -57 -138 -158 -2 -2 4 -33 13 -69 l16 -65 -35 -53 c-34 -50 -35 -56 -35 -141 l0 -89 50 -67 c48 -65 50 -70 50 -134 0 -65 -2 -70 -46 -128 -52 -67 -52 -69 31 -87 49 -11 61 -10 158 18 59 18 128 31 159 31 44 0 62 6 103 34 40 26 67 35 135 45 150 21 140 16 140 71 l0 48 65 16 65 16 99 -65 98 -66 65 32 66 32 61 -47 c33 -26 61 -50 61 -54 0 -4 -7 -50 -15 -102 -8 -52 -15 -100 -15 -107 0 -6 24 -17 53 -23 28 -7 59 -16 68 -21 9 -4 43 -50 77 -101 l62 -94 0 -76 0 -76 -65 -51 c-64 -51 -65 -52 -65 -100 0 -48 0 -48 -77 -109 -85 -68 -88 -68 -202 -48 l-73 13 6 -33 c3 -19 9 -49 12 -67 6 -32 3 -36 -56 -80 -46 -34 -80 -71 -126 -141 -35 -53 -64 -98 -64 -101 0 -3 21 -55 47 -116 l46 -109 -31 -40 c-105 -132 -96 -114 -82 -164 7 -25 18 -49 24 -54 6 -5 78 -28 159 -52 89 -26 152 -50 156 -59 5 -9 14 -46 21 -83 l12 -68 82 0 81 0 128 -111 c70 -61 125 -114 123 -118 -2 -3 -22 -39 -46 -79 -41 -70 -42 -74 -30 -111 11 -36 10 -41 -34 -130 l-47 -92 66 -146 c36 -81 61 -149 57 -152 -5 -3 -25 -16 -45 -29 -20 -13 -37 -27 -37 -31 0 -4 27 -27 60 -51 33 -24 60 -45 60 -46 0 -1 -20 -15 -45 -31 -50 -31 -51 -35 -31 -110 l14 -51 -49 -48 -49 -48 47 -48 47 -48 -32 0 -32 0 0 -114 0 -114 -94 -32 c-106 -35 -97 -22 -116 -167 -12 -90 -13 -92 -61 -139 l-49 -48 62 -63 62 -63 -41 0 c-48 0 -52 -4 -87 -95 l-27 -70 -157 16 c-86 9 -158 17 -159 18 -1 0 11 33 28 72 16 40 29 76 29 81 0 8 -134 202 -157 228 -2 2 -84 -76 -182 -174 l-178 -177 -213 30 c-117 17 -247 31 -288 31 l-76 0 48 49 48 49 -80 63 -81 64 0 49 c-1 28 -16 95 -33 149 l-33 100 -99 48 c-90 45 -106 49 -170 49 -39 0 -104 -7 -144 -17 l-72 -17 0 -82 0 -83 45 -31 c25 -17 45 -36 45 -41 0 -6 -21 -79 -46 -162 l-46 -152 -241 -32 -242 -32 -33 32 -32 31 -145 -48 -145 -47 -74 60 c-41 34 -77 61 -80 61 -3 0 -6 -50 -6 -112 l0 -111 46 -79 c26 -44 43 -83 38 -87 -5 -4 -42 -34 -82 -66 -72 -57 -72 -57 -72 -106 0 -27 2 -49 5 -49 3 0 33 14 66 31 34 17 62 29 64 27 1 -2 37 -64 78 -138 l75 -135 -44 -3 c-54 -4 -53 1 -19 -149 3 -11 36 -44 74 -72 60 -45 74 -51 118 -51 45 0 53 -4 92 -44 l43 -44 -48 -33 c-41 -27 -160 -159 -173 -192 -2 -5 25 -37 59 -72 l62 -63 -32 -47 c-27 -40 -36 -45 -58 -41 -15 3 -64 11 -110 17 l-83 11 -49 98 c-41 83 -55 101 -97 128 -26 17 -51 28 -54 24 -3 -4 -19 -40 -34 -79 -16 -40 -30 -73 -33 -73 -2 0 -31 7 -64 15 l-59 16 -67 -50 c-67 -49 -67 -50 -129 -191 -35 -79 -60 -146 -58 -151 3 -4 55 -43 114 -85 100 -70 110 -80 122 -121 12 -46 82 -151 123 -188 13 -11 109 -93 215 -183 105 -90 191 -166 191 -170 0 -4 -7 -31 -15 -61 -8 -30 -12 -58 -10 -62 3 -4 25 -20 49 -35 l43 -27 -15 -49 -16 -49 130 -130 130 -130 82 66 c45 36 82 67 82 68 0 1 7 40 15 87 8 47 15 87 15 89 0 3 13 -8 30 -24 29 -28 30 -28 88 -15 74 15 76 16 89 65 6 22 21 72 32 111 l21 70 132 29 c73 15 142 33 153 40 11 7 45 44 75 83 l55 71 66 1 66 0 12 -42 c9 -32 35 -65 98 -130 l86 -86 40 14 c22 8 43 14 48 14 4 0 43 -49 86 -110 l78 -110 65 0 66 0 33 -67 33 -67 31 52 c18 28 40 65 49 82 l18 31 44 -30 c25 -17 47 -31 49 -31 3 0 21 22 40 49 25 35 47 52 74 61 21 7 41 15 45 19 4 3 0 71 -9 149 l-16 144 46 46 c26 25 48 44 50 42 2 -3 25 -33 51 -68 l47 -62 64 0 63 0 32 50 32 50 97 0 c93 0 99 1 122 26 22 25 67 56 161 113 l37 22 -16 -46 -16 -47 64 -64 63 -64 -64 -65 -64 -65 33 -68 33 -69 -16 -123 c-9 -68 -14 -125 -13 -127 2 -2 38 11 81 29 l77 31 64 -63 64 -64 63 30 c34 16 87 45 117 65 51 32 60 45 105 135 47 96 52 102 161 194 92 78 118 106 146 160 33 61 37 65 104 93 45 19 96 32 144 36 l75 6 47 79 c35 58 51 98 60 148 7 38 17 75 23 82 20 25 170 73 266 85 92 12 184 35 205 52 6 4 24 49 40 100 26 81 33 93 62 107 37 18 37 18 54 127 14 92 58 189 127 279 44 57 45 60 31 90 -10 24 -14 96 -17 303 l-3 272 36 123 c19 67 35 141 35 163 0 23 -16 88 -35 145 -33 97 -35 113 -35 228 l0 124 66 83 c36 46 130 140 211 211 137 121 152 138 243 274 l96 145 16 97 17 98 98 114 c54 63 148 158 210 210 l111 96 96 0 c90 0 101 2 164 34 53 27 79 48 122 102 30 38 109 125 176 194 79 81 139 153 170 204 l48 79 -17 141 c-10 78 -17 178 -17 224 0 78 2 87 48 180 34 67 59 138 81 227 l32 130 66 67 c63 64 66 69 79 140 22 122 22 120 -46 153 l-60 29 0 95 c0 53 7 120 14 149 12 44 12 60 0 105 -7 28 -14 95 -14 147 l0 94 62 63 62 62 -16 113 -16 113 49 50 48 50 16 128 c15 118 16 135 1 225 l-17 97 31 89 c29 86 30 97 30 255 l0 166 69 70 c56 57 74 84 97 145 16 41 45 100 65 130 49 76 99 209 99 263 l0 44 78 30 77 30 3 84 3 84 79 80 80 80 15 144 c8 79 15 152 15 162 0 14 -19 28 -63 50 -58 29 -68 38 -111 110 -26 44 -50 79 -54 79 -4 0 -27 -14 -52 -30 -41 -27 -53 -30 -126 -30 l-81 0 -14 -62 c-15 -64 -23 -74 -86 -93 -22 -6 -23 -4 -23 60 0 58 -2 66 -17 61 -10 -3 -55 -10 -101 -17 l-82 -13 -33 32 -32 31 -55 -14 c-30 -8 -58 -15 -62 -15 -5 0 -8 20 -8 45 0 42 -2 45 -27 45 -29 0 -186 -17 -235 -25 -24 -4 -33 4 -74 60 -26 36 -50 65 -54 65 -3 0 -34 -29 -69 -64z']
			),
			'location' => DB::raw('POINT(-0.228021, 15.827659)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}