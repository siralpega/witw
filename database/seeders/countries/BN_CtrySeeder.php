<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BN_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Brunei',
			'code'  => 'BN',
			'type'  => null,
			'paths' => serialize(
				['M7525 9178 c-137 -54 -405 -160 -595 -235 -190 -75 -406 -166 -480 -203 -92 -46 -159 -73 -211 -83 -128 -27 -252 -109 -429 -282 -141 -139 -156 -150 -585 -443 -445 -304 -470 -323 -845 -655 l-45 -40 43 7 c36 5 42 4 42 -11 0 -28 -13 -40 -50 -47 -29 -5 -40 -14 -60 -52 -27 -49 -51 -64 -106 -64 -20 0 -45 -5 -56 -11 -11 -6 -127 -102 -258 -213 -199 -168 -279 -228 -492 -368 l-255 -167 -231 -90 c-127 -50 -337 -133 -466 -185 -190 -77 -274 -105 -438 -146 -148 -37 -265 -75 -433 -140 l-230 -88 -175 -18 c-130 -12 -301 -18 -669 -21 -271 -3 -489 -8 -485 -13 5 -4 59 -26 119 -49 109 -40 113 -41 240 -41 125 0 135 -2 261 -43 l131 -42 103 -117 c88 -102 105 -117 126 -112 18 5 79 -26 261 -131 138 -79 250 -150 266 -168 15 -18 61 -99 103 -182 42 -82 118 -226 169 -320 l93 -170 7 -135 c4 -101 2 -152 -9 -204 -14 -66 -13 -70 6 -97 11 -15 51 -55 89 -88 l68 -62 -30 -81 c-28 -76 -30 -94 -35 -257 -6 -156 -4 -184 14 -246 l19 -70 90 2 c55 1 163 16 278 38 103 20 190 33 194 30 3 -4 22 -36 41 -73 31 -59 40 -67 79 -80 l45 -15 29 34 c16 19 47 73 68 120 l40 85 64 21 64 21 44 -132 43 -131 -7 -103 -8 -103 66 -162 c36 -89 99 -219 140 -289 71 -121 77 -128 111 -133 70 -11 174 -70 255 -145 110 -102 131 -137 166 -275 l30 -118 93 -94 c113 -113 173 -151 303 -192 60 -19 113 -42 132 -59 l31 -27 -70 -99 c-73 -102 -76 -114 -36 -140 22 -13 381 93 503 149 49 23 123 54 163 71 65 25 83 39 146 109 40 44 105 132 144 195 63 102 83 125 175 202 93 79 105 93 124 145 18 53 25 60 77 88 54 28 61 36 127 150 l69 120 -55 28 c-30 15 -55 30 -55 34 0 3 24 33 53 67 29 34 91 115 137 181 46 66 120 159 165 208 77 84 81 92 117 199 39 116 39 116 11 212 -4 15 -17 7 -77 -51 -56 -55 -86 -76 -140 -97 -65 -26 -69 -26 -88 -10 -10 10 -16 24 -14 31 3 7 72 98 152 202 96 122 181 246 244 352 84 143 101 180 133 290 35 119 37 135 37 264 0 138 0 138 -31 187 -22 33 -37 47 -48 44 -9 -3 -59 -10 -110 -16 l-95 -12 -87 42 -87 43 -44 154 -44 154 13 152 c6 84 17 236 22 339 l10 188 -45 172 c-25 94 -71 241 -104 326 l-59 155 30 140 c16 77 28 141 27 142 -2 2 -32 19 -68 39 -53 28 -70 44 -86 78 l-21 43 22 60 23 60 -44 51 -43 51 32 30 c23 22 81 49 205 94 l174 64 96 192 97 193 150 50 c122 41 163 50 220 50 39 0 115 7 170 15 55 8 168 15 250 15 l150 0 61 39 61 40 6 77 c4 42 7 132 7 199 l0 122 101 63 c55 36 102 67 104 70 2 3 6 48 11 100 l7 95 -59 -53 c-32 -29 -127 -106 -209 -171 -121 -95 -156 -129 -178 -169 l-28 -51 -43 32 c-24 19 -71 41 -109 51 l-67 18 30 42 c62 84 48 77 134 61 43 -8 79 -15 82 -15 2 0 30 40 63 89 l60 89 164 96 163 96 39 83 c33 68 54 96 124 163 l85 81 -27 60 c-28 63 -34 123 -17 167 8 22 16 26 52 26 24 0 83 5 132 11 89 11 96 9 108 -23 2 -4 86 -24 186 -44 l184 -37 45 45 46 46 -79 46 c-76 45 -81 46 -160 46 -70 0 -92 5 -149 30 -37 17 -80 30 -95 30 -78 0 -59 15 96 76 l159 63 -158 0 -158 1 -52 33 c-29 18 -56 36 -62 38 -5 3 -122 -39 -260 -93z', 'M8233 8109 c-40 -22 -73 -46 -73 -52 1 -7 7 -37 14 -67 11 -47 17 -57 47 -71 38 -19 47 -40 48 -117 1 -62 -20 -109 -50 -114 -22 -3 -32 -16 -43 -50 -4 -13 -16 -18 -40 -18 -30 0 -37 4 -42 25 -5 22 -12 25 -51 25 -42 0 -50 -5 -129 -77 l-84 -76 0 -68 c0 -37 7 -104 16 -149 8 -45 14 -83 12 -85 -2 -1 -17 0 -34 2 -31 5 -32 6 -44 86 -7 45 -15 86 -17 90 -3 5 -24 -18 -48 -50 -30 -40 -62 -107 -103 -216 -55 -142 -60 -164 -56 -215 10 -121 10 -120 70 -149 29 -15 54 -30 54 -34 0 -4 -15 -47 -34 -96 l-35 -89 36 -125 c27 -95 34 -135 29 -174 -3 -35 2 -73 17 -124 l21 -75 -22 -105 -21 -105 55 -103 c30 -56 63 -108 73 -115 10 -7 48 -41 84 -75 l67 -62 9 -133 c5 -73 19 -196 31 -273 19 -126 25 -148 65 -221 l43 -81 -10 -184 c-10 -181 -10 -186 15 -281 l25 -98 -29 -100 c-33 -111 -34 -103 28 -173 l32 -37 94 0 c77 0 108 5 181 30 49 16 94 27 100 23 6 -4 34 -24 62 -45 49 -37 59 -40 228 -68 98 -17 196 -30 220 -30 23 0 82 13 131 30 49 16 89 29 90 27 11 -17 25 -127 25 -192 l0 -82 31 -7 c61 -12 82 -6 130 34 48 40 64 45 131 34 36 -6 37 -8 52 -72 8 -36 19 -68 24 -71 5 -3 63 -41 129 -84 111 -71 124 -77 173 -77 47 0 59 5 119 50 36 27 88 74 115 105 l48 56 -30 87 c-60 171 -97 235 -175 305 -40 35 -99 84 -132 109 -88 67 -265 262 -307 338 -35 64 -35 66 -27 145 6 58 4 96 -6 140 -8 33 -15 102 -15 153 0 61 -5 103 -14 121 -8 15 -29 83 -46 150 l-30 122 50 85 c28 47 71 126 96 176 l45 90 16 181 15 180 -88 87 c-49 48 -99 93 -112 102 l-23 15 22 88 22 87 -30 62 c-22 44 -40 67 -66 81 -19 10 -42 32 -50 49 -13 29 -12 35 19 105 19 40 34 79 34 85 0 7 -18 30 -41 51 -26 26 -62 83 -100 158 l-60 118 22 119 22 118 -64 58 c-74 67 -197 193 -237 243 -15 18 -56 88 -92 154 l-65 122 -100 35 -100 36 -3 110 -3 109 -67 0 c-37 0 -101 4 -142 7 -75 8 -75 8 -147 -33z']
			),
			'location' => DB::raw('POINT(4.535277, 114.727669)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}