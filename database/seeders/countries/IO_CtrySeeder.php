<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IO_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'British Indian Ocean Territory',
			'code'  => 'IO',
			'type'  => null,
			'paths' => serialize(
				['M4980 10226 c-59 -13 -110 -36 -127 -58 -6 -7 -13 -28 -16 -45 l-6 -33 57 5 c31 2 91 7 133 9 41 3 99 10 127 17 50 10 52 12 52 44 0 32 -3 34 -62 54 -70 24 -81 24 -158 7z', 'M4355 10171 c-65 -11 -103 -39 -352 -257 -73 -64 -86 -98 -54 -143 l21 -30 78 56 c45 32 84 69 95 89 12 23 24 34 40 34 29 0 169 85 224 137 l42 38 -19 43 c-11 23 -23 41 -27 41 -4 -1 -26 -4 -48 -8z', 'M5744 10046 c-26 -11 -32 -21 -38 -57 -8 -49 -8 -302 0 -323 13 -33 79 -64 149 -71 39 -4 116 -18 172 -32 l102 -25 96 -104 96 -104 14 -117 c8 -65 15 -137 15 -160 0 -39 3 -44 66 -90 63 -46 69 -54 131 -176 39 -79 81 -184 109 -273 39 -126 52 -154 102 -223 53 -74 65 -84 178 -150 66 -39 159 -89 205 -112 46 -23 113 -63 149 -89 37 -27 82 -51 103 -55 32 -6 46 -18 88 -74 36 -47 78 -85 147 -133 53 -37 123 -94 155 -125 56 -57 58 -61 103 -203 58 -186 51 -172 126 -265 l65 -81 8 -106 c5 -85 3 -132 -15 -244 -36 -236 -71 -346 -170 -544 -89 -178 -176 -307 -371 -550 -42 -52 -129 -171 -193 -263 -91 -130 -131 -198 -178 -304 -52 -118 -68 -143 -118 -192 -51 -49 -63 -68 -98 -161 -39 -103 -40 -107 -33 -199 l6 -95 55 -33 c47 -28 64 -33 121 -33 l66 0 85 -92 c95 -104 98 -110 123 -304 14 -109 16 -113 95 -260 l81 -149 -7 -59 c-6 -56 -4 -65 35 -145 22 -47 45 -104 51 -127 9 -38 110 -173 135 -181 6 -2 19 11 29 28 18 31 18 31 -14 95 -18 35 -31 67 -28 69 11 12 62 -18 112 -65 42 -40 62 -51 98 -56 72 -10 73 -11 29 -110 -37 -81 -42 -89 -68 -89 -26 0 -28 3 -31 43 -2 23 -7 42 -12 42 -5 0 -23 -21 -40 -46 -28 -39 -62 -64 -89 -64 -5 0 -14 13 -21 30 -22 52 -65 36 -99 -37 -15 -33 -34 -55 -56 -67 -18 -10 -69 -53 -112 -96 -66 -65 -85 -79 -121 -85 -24 -4 -46 -4 -49 -1 -8 8 85 109 140 151 26 20 47 40 47 45 0 4 18 25 40 46 22 21 55 68 75 105 32 61 34 70 23 100 -6 19 -19 44 -28 56 -16 21 -18 21 -33 5 -9 -9 -29 -45 -45 -79 -30 -63 -128 -203 -142 -203 -5 0 -58 -47 -118 -105 -121 -115 -142 -153 -142 -247 0 -45 -6 -57 -57 -124 -54 -69 -60 -74 -96 -74 -44 0 -48 -10 45 123 66 93 69 99 66 148 l-3 51 -90 -81 c-77 -69 -95 -81 -126 -81 -24 0 -42 -7 -55 -21 -48 -54 -170 -143 -227 -165 -34 -14 -94 -41 -133 -61 l-71 -36 -43 -146 c-24 -83 -57 -170 -75 -201 -18 -30 -45 -89 -60 -130 -25 -72 -31 -80 -111 -149 -47 -40 -93 -90 -104 -111 -20 -39 -63 -202 -100 -380 -12 -58 -39 -163 -61 -235 -38 -127 -38 -131 -24 -179 16 -52 19 -96 9 -133 -5 -19 -13 -23 -45 -23 -32 0 -39 -3 -39 -20 0 -18 -3 -19 -20 -8 -17 11 -19 20 -14 68 4 30 13 65 20 77 8 12 14 36 14 53 0 36 -20 39 -75 13 l-35 -17 0 -136 0 -136 -31 -30 c-17 -16 -39 -45 -49 -64 -22 -40 -22 -39 -20 85 1 58 6 88 20 110 16 27 17 34 5 62 l-14 33 -43 -19 c-31 -13 -50 -30 -71 -65 l-27 -48 21 -38 c19 -33 20 -42 9 -74 -7 -21 -9 -53 -6 -72 5 -26 4 -34 -8 -34 -8 0 -18 10 -21 21 -6 17 -9 19 -16 8 -5 -8 -9 -24 -9 -36 0 -15 -10 -28 -29 -37 -32 -17 -41 -13 -41 21 0 29 -28 30 -87 3 l-43 -19 0 40 c0 33 6 47 31 70 28 26 30 32 20 60 -8 24 -7 37 6 62 l16 32 15 -33 c9 -17 19 -32 23 -32 8 0 19 37 19 68 0 19 5 22 45 22 53 0 58 15 22 64 -107 142 -122 251 -92 671 8 116 19 226 23 245 12 59 5 241 -11 280 -25 60 -29 123 -13 207 8 43 20 143 26 223 6 80 16 167 21 194 5 27 9 89 9 137 0 65 5 103 20 141 15 39 20 77 20 146 0 63 7 121 21 175 13 48 21 108 20 146 -2 57 2 68 27 100 42 53 41 50 52 157 6 55 18 136 27 181 15 79 15 87 -5 185 -11 57 -23 162 -27 233 -9 186 -21 294 -50 436 -14 68 -25 152 -25 186 0 59 1 62 28 68 63 13 112 160 112 336 0 100 -4 126 -25 184 -14 37 -44 94 -67 127 -51 76 -78 195 -102 443 -9 94 -19 198 -22 233 -8 80 -33 113 -101 130 -28 7 -79 33 -115 56 -127 86 -237 119 -333 101 -39 -8 -130 24 -220 77 -288 169 -419 282 -533 458 -172 263 -355 459 -464 496 -34 11 -48 21 -48 34 0 25 -95 101 -152 123 -41 16 -48 24 -79 90 -30 64 -38 73 -70 81 -27 7 -43 21 -72 65 -21 31 -51 72 -67 91 -16 19 -56 84 -88 144 l-58 109 13 80 c22 143 51 203 142 301 95 102 147 184 160 250 24 127 6 192 -42 149 -32 -29 -52 -33 -246 -43 l-173 -9 -77 -74 c-79 -77 -105 -93 -234 -147 -51 -21 -111 -58 -173 -107 -53 -41 -108 -82 -124 -92 -16 -9 -60 -47 -99 -83 -67 -63 -71 -69 -71 -110 0 -31 11 -62 39 -111 34 -61 49 -76 147 -145 l109 -78 27 -99 c26 -97 28 -101 85 -153 71 -64 251 -189 432 -299 l135 -83 95 -122 c163 -212 259 -318 450 -498 291 -274 328 -303 459 -369 64 -32 142 -64 172 -70 105 -22 219 -62 362 -125 79 -35 161 -69 183 -76 73 -24 199 -91 289 -153 l89 -62 104 -179 c95 -163 106 -185 117 -256 10 -64 18 -85 44 -114 31 -36 32 -39 32 -130 0 -51 -5 -131 -11 -177 -11 -79 -14 -87 -59 -139 -44 -51 -48 -60 -54 -125 -3 -38 -14 -119 -22 -180 l-17 -110 32 -157 c18 -86 49 -208 70 -271 38 -112 39 -117 31 -208 -8 -95 -58 -316 -129 -574 -37 -132 -40 -152 -47 -335 -5 -107 -7 -283 -6 -390 2 -118 -1 -209 -8 -230 -5 -19 -17 -91 -26 -159 -15 -122 -15 -129 11 -334 21 -166 26 -238 22 -341 -8 -231 -46 -584 -90 -844 l-43 -254 91 -53 c107 -63 185 -81 303 -71 86 7 93 11 158 102 34 48 51 64 76 69 63 13 127 56 159 106 41 65 109 119 148 119 26 0 33 6 46 36 8 20 20 66 26 102 10 58 17 73 55 112 39 41 43 49 38 81 -5 27 3 64 29 140 19 57 49 156 67 219 35 129 42 141 191 335 86 112 135 165 247 264 97 85 143 132 147 150 11 52 63 100 149 140 89 41 135 78 397 317 217 198 253 221 410 267 101 29 157 53 275 118 89 48 169 100 197 128 l49 46 -7 70 c-24 252 -52 296 -454 704 l-124 126 -87 173 c-62 121 -93 195 -105 248 -9 42 -25 101 -36 132 -12 34 -19 82 -19 128 0 48 -6 90 -19 121 -26 66 -18 186 17 263 14 30 28 81 32 114 6 41 17 71 39 101 21 29 31 55 31 78 0 31 13 49 119 159 65 67 128 143 141 168 35 69 182 268 207 279 13 6 40 37 60 68 36 55 38 62 40 148 l2 89 41 24 c51 30 77 80 90 169 5 37 18 93 29 125 16 46 17 64 9 100 -5 23 -7 77 -3 118 11 130 5 290 -11 323 -11 21 -14 43 -9 77 6 42 2 56 -30 121 -50 98 -132 207 -182 242 -23 16 -44 39 -47 51 -3 13 -23 50 -44 82 -21 33 -54 85 -73 117 -20 35 -56 75 -90 102 -32 25 -77 73 -102 108 -25 35 -66 80 -91 101 -31 25 -59 62 -88 119 -29 55 -69 109 -123 167 -44 47 -92 99 -106 117 -37 45 -201 150 -262 168 -29 9 -74 19 -102 22 -39 5 -60 15 -94 45 -24 21 -48 38 -52 38 -5 0 -9 13 -9 28 0 35 -186 503 -273 684 -39 83 -73 140 -86 147 -17 9 -21 21 -21 59 0 41 -6 55 -45 104 -29 36 -67 69 -103 89 -31 18 -88 62 -127 98 -38 36 -117 101 -173 144 -72 55 -108 89 -118 113 -8 19 -15 34 -17 34 -1 -1 -16 -7 -33 -14z']
			),
			'location' => DB::raw('POINT(-6.343194, 71.876519)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}