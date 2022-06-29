<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GP_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Guadeloupe',
			'code'  => 'GP',
			'type'  => null,
			'paths' => serialize(
				['M4340 9470 c-8 -6 -25 -10 -38 -10 -27 0 -75 -48 -105 -107 -35 -65 -118 -147 -165 -161 -23 -7 -54 -23 -69 -36 -16 -13 -44 -30 -64 -39 -28 -11 -38 -22 -43 -48 -11 -54 -32 -76 -98 -100 -47 -18 -81 -41 -143 -99 -44 -41 -93 -84 -109 -95 -21 -15 -29 -31 -33 -65 -3 -25 -19 -74 -34 -109 -16 -35 -29 -65 -29 -66 0 -2 8 -5 19 -8 13 -3 19 -17 23 -51 4 -30 14 -56 28 -71 20 -21 21 -30 15 -72 -11 -63 -8 -77 26 -145 16 -32 29 -74 29 -94 0 -41 29 -94 64 -117 12 -8 67 -36 121 -61 70 -33 93 -40 80 -26 -10 11 -15 23 -12 26 10 10 54 -22 120 -86 l59 -58 -7 -64 c-8 -67 -28 -118 -47 -118 -7 0 3 -13 22 -28 22 -19 30 -31 22 -36 -24 -14 -13 -46 21 -59 l32 -14 -80 -25 c-44 -15 -93 -29 -110 -33 l-30 -7 29 -15 c24 -13 27 -17 14 -24 -9 -5 -19 -20 -22 -35 -5 -17 -12 -24 -21 -20 -45 17 -168 35 -183 27 -9 -5 -48 -41 -86 -80 -46 -48 -66 -76 -62 -87 14 -37 18 -95 7 -125 -8 -24 -8 -35 0 -46 9 -10 9 -23 1 -51 -24 -78 -118 -198 -130 -164 -2 7 -7 12 -11 12 -4 0 -3 -23 3 -50 10 -50 10 -50 -29 -90 -30 -31 -42 -37 -56 -29 -24 13 -31 -2 -17 -39 17 -44 4 -50 -39 -19 -31 22 -39 24 -46 12 -12 -21 -36 -18 -45 5 -8 21 -8 20 -42 -4 -67 -49 -78 -52 -104 -27 -27 26 -60 19 -51 -10 4 -11 -2 -31 -13 -47 -11 -15 -29 -46 -41 -70 -18 -36 -33 -49 -84 -73 -71 -33 -84 -35 -115 -13 -25 17 -29 56 -7 74 19 16 20 60 0 60 -7 0 -31 -21 -52 -46 -57 -69 -115 -93 -143 -59 -13 16 -14 14 26 88 8 15 13 31 10 36 -4 5 -36 -3 -72 -17 -73 -29 -89 -26 -113 23 -13 26 -12 29 20 54 62 48 70 60 59 81 -5 10 -10 26 -10 36 0 16 2 15 21 -2 38 -34 42 -52 19 -84 l-21 -30 30 0 c33 0 45 14 55 70 13 66 28 91 73 116 45 27 69 57 58 74 -12 20 -130 11 -200 -15 l-68 -26 -31 31 c-18 16 -42 30 -53 30 -12 0 -35 11 -51 25 -21 18 -42 25 -70 25 -31 0 -45 5 -56 22 -15 21 -14 24 10 49 l26 27 -63 31 c-34 17 -70 31 -80 31 -16 0 -112 -28 -151 -45 -13 -5 -20 0 -28 19 -6 17 -17 26 -30 26 -12 0 -18 -4 -15 -10 3 -5 0 -7 -7 -4 -7 3 -22 19 -33 37 -11 17 -35 40 -53 50 l-32 19 -22 -27 -22 -28 -30 35 c-56 63 -121 95 -229 113 -131 21 -177 46 -177 99 0 8 -35 51 -78 96 -55 57 -85 80 -102 80 -14 0 -52 12 -85 25 -74 31 -95 32 -95 4 0 -27 -52 -79 -80 -79 -11 0 -36 7 -56 15 -32 13 -40 13 -99 -9 -36 -13 -90 -38 -120 -57 -48 -29 -55 -37 -55 -65 0 -35 -17 -53 -74 -80 -53 -26 -63 -44 -48 -87 29 -79 7 -122 -78 -152 -100 -35 -113 -63 -50 -114 22 -17 40 -38 40 -46 0 -8 -17 -23 -38 -34 -60 -31 -69 -57 -48 -146 18 -75 18 -75 -4 -111 -17 -26 -20 -38 -11 -47 20 -20 12 -37 -24 -54 -38 -18 -55 -55 -38 -82 6 -9 14 -50 18 -90 4 -43 17 -96 31 -125 13 -28 24 -65 24 -81 0 -23 12 -42 48 -78 26 -26 55 -47 65 -47 10 0 17 -8 17 -18 0 -10 16 -37 36 -61 44 -50 70 -117 79 -198 6 -49 3 -75 -19 -145 -31 -103 -32 -129 -6 -153 17 -16 20 -31 20 -116 l0 -99 28 -6 c15 -3 34 -8 43 -10 25 -7 40 -134 20 -172 -5 -10 -4 -42 2 -77 9 -56 8 -64 -17 -112 -14 -29 -26 -56 -26 -61 0 -5 18 -17 41 -27 44 -20 89 -67 89 -92 0 -9 -12 -32 -27 -51 -37 -49 -47 -126 -27 -211 11 -48 13 -71 5 -88 -14 -31 -14 -33 4 -33 21 0 30 -27 16 -44 -10 -11 -8 -17 6 -25 17 -11 17 -12 0 -25 -29 -22 -18 -51 20 -51 43 0 51 -12 26 -37 -18 -17 -20 -25 -10 -45 8 -18 8 -29 -1 -44 -8 -12 -10 -33 -6 -55 5 -26 2 -40 -11 -54 -15 -16 -15 -27 -5 -97 18 -125 27 -143 111 -238 153 -170 161 -187 179 -365 6 -57 16 -113 23 -124 21 -37 290 -291 343 -324 42 -27 56 -43 78 -92 39 -86 52 -158 39 -213 -8 -39 -7 -51 10 -80 10 -18 39 -44 63 -58 l44 -24 117 29 c65 16 127 34 137 39 10 5 49 39 86 76 36 36 78 72 93 80 25 13 29 13 51 -8 l25 -23 63 51 c54 44 67 51 93 46 17 -3 68 -11 114 -16 l85 -11 27 34 c26 31 31 33 84 31 51 -3 56 -1 50 15 -21 49 -18 70 14 86 25 13 31 23 31 48 0 41 31 89 81 124 23 15 51 43 63 61 13 18 52 55 87 81 35 27 70 56 77 65 8 9 28 21 47 27 18 6 50 32 74 60 24 28 55 53 75 60 28 9 43 26 80 88 28 48 47 96 52 127 7 55 27 89 88 152 l40 43 -37 72 c-43 83 -45 107 -25 306 10 110 10 129 -6 180 -10 31 -24 67 -32 80 -8 13 -12 31 -9 42 4 13 0 20 -14 25 -11 3 -31 15 -45 26 -23 18 -26 27 -26 88 0 76 5 84 78 120 31 16 42 27 42 45 0 26 -28 56 -54 56 -31 0 -73 29 -119 81 l-45 52 19 36 c10 20 19 40 19 46 0 5 -22 24 -48 40 -32 21 -48 38 -50 55 -2 14 -13 48 -24 77 -24 59 -20 77 21 101 34 19 42 38 30 70 -6 17 -16 22 -42 22 l-34 0 -22 83 c-29 112 -28 126 19 185 22 27 40 52 40 55 0 2 -13 21 -30 42 -29 37 -29 38 -13 66 16 27 16 29 -5 51 -21 23 -21 26 -7 86 28 120 90 206 119 166 10 -13 21 -15 52 -10 113 19 109 20 122 -9 l12 -27 18 23 c17 20 21 21 47 8 16 -8 39 -30 52 -49 43 -68 64 -90 88 -90 19 0 22 4 18 21 -4 15 2 27 22 43 l28 23 -40 6 c-22 4 -45 13 -51 20 -14 16 -16 59 -7 108 6 29 3 40 -19 66 -33 39 -33 58 -1 79 28 18 55 13 55 -12 0 -9 17 -37 39 -63 21 -25 48 -65 60 -89 14 -28 34 -48 57 -59 29 -14 34 -21 29 -40 -3 -14 1 -34 11 -48 13 -20 14 -28 5 -39 -10 -12 -7 -18 13 -31 33 -22 36 -49 5 -40 l-22 7 21 -28 c11 -16 40 -40 65 -53 l45 -25 61 28 c51 23 64 25 83 15 31 -16 38 -28 38 -70 l0 -37 63 -11 c35 -6 93 -11 128 -11 67 0 252 -54 314 -92 41 -24 71 -23 90 5 8 13 26 29 39 36 20 11 28 10 48 -3 22 -15 28 -15 61 -1 20 8 53 32 75 54 31 32 51 41 109 55 89 20 109 20 117 1 8 -21 36 -19 63 7 20 18 26 20 46 9 33 -18 99 9 158 64 48 45 75 55 96 34 13 -13 33 -4 33 16 0 29 42 45 119 45 l74 0 63 60 c76 73 124 96 224 105 54 5 97 17 154 42 73 33 84 35 144 29 50 -5 70 -3 89 9 22 15 26 15 59 -6 35 -21 35 -21 152 -5 162 24 279 54 326 85 33 22 55 27 135 32 78 5 106 11 151 34 54 28 55 28 200 22 80 -3 216 -17 303 -31 100 -17 199 -26 268 -26 l109 0 107 -55 c78 -40 109 -51 115 -42 12 19 9 22 -81 81 -76 51 -89 56 -138 56 -39 0 -55 4 -60 16 -5 13 -8 12 -25 -5 -23 -25 -22 -25 -90 -2 -73 25 -111 45 -151 80 -18 16 -53 34 -77 41 -135 36 -279 149 -332 259 -17 36 -44 82 -60 101 -15 19 -28 43 -28 53 0 54 -77 144 -103 118 -21 -21 -39 -13 -33 17 6 25 2 29 -49 56 -31 16 -60 37 -66 47 -5 11 -20 19 -33 19 -13 0 -36 14 -55 35 -29 32 -36 35 -86 35 -29 0 -56 4 -60 10 -3 5 -12 7 -20 3 -11 -4 -15 3 -15 26 0 34 -6 37 -34 16 -35 -27 -66 -18 -110 29 l-41 45 -26 -20 -27 -19 -122 35 c-67 20 -130 33 -141 30 -10 -3 -28 -18 -39 -32 l-20 -26 -37 42 -38 42 -47 -17 c-47 -18 -49 -18 -120 5 -191 61 -255 110 -373 285 -42 61 -98 143 -126 181 -31 44 -52 85 -56 110 -3 22 -12 48 -20 57 -14 15 -13 29 2 117 15 84 16 105 5 131 -13 30 -12 33 18 61 33 31 39 53 23 79 -7 10 -4 18 10 28 30 21 40 55 26 91 -9 24 -9 36 0 50 9 14 8 24 -7 45 -10 16 -21 55 -25 89 -8 74 -18 95 -47 99 -16 2 -24 11 -26 28 -4 40 -33 171 -49 222 -17 56 -91 128 -130 128 -14 0 -34 11 -46 26 -31 37 -48 52 -84 77 -18 12 -48 35 -67 51 -30 23 -39 26 -51 16 -18 -15 -21 -7 -29 74 -2 32 -7 60 -9 63 -3 2 -24 -1 -47 -8 -33 -10 -46 -10 -61 -1 -11 7 -29 10 -42 7 -34 -9 -97 21 -97 46 0 11 -9 28 -21 38 -17 14 -19 20 -9 45 12 33 10 39 -10 26z', 'M2757 7403 l-15 -38 45 -13 c58 -17 113 -2 113 31 0 18 -11 26 -49 40 -68 24 -77 22 -94 -20z', 'M10115 7389 c-29 -7 -45 -18 -57 -40 -16 -26 -22 -30 -47 -24 -34 7 -52 -1 -110 -50 -24 -19 -52 -35 -62 -35 -27 0 -197 -92 -270 -145 -33 -24 -85 -58 -115 -76 -48 -27 -61 -30 -100 -24 -39 6 -44 4 -44 -14 0 -39 -102 -90 -155 -77 -16 4 -31 -4 -58 -32 -45 -46 -53 -69 -56 -157 l-3 -70 24 22 c29 27 70 43 112 43 22 0 53 15 103 50 56 40 79 50 111 50 51 0 218 42 268 68 21 11 71 46 109 76 88 71 235 147 367 190 69 23 104 39 106 50 4 18 -68 207 -77 205 -3 -1 -24 -5 -46 -10z', 'M6755 2972 c-3 -4 -42 -9 -85 -13 -95 -7 -103 -12 -165 -120 -29 -51 -56 -84 -75 -94 -21 -11 -30 -23 -30 -41 0 -54 -25 -80 -95 -99 l-65 -18 0 -120 0 -121 -57 -56 c-32 -30 -86 -70 -120 -88 -34 -18 -64 -36 -67 -41 -3 -4 6 -60 19 -123 13 -64 28 -159 34 -211 6 -60 16 -105 27 -122 14 -22 15 -31 6 -46 -17 -27 -15 -36 14 -74 14 -18 30 -50 35 -70 9 -31 24 -45 95 -91 114 -75 193 -109 319 -139 67 -16 118 -34 138 -49 18 -14 44 -27 58 -31 37 -9 144 12 198 39 25 13 74 26 108 30 80 9 109 19 203 72 100 57 183 122 220 173 17 22 37 41 46 41 9 0 30 15 46 32 17 18 45 37 62 43 26 8 38 25 73 95 77 154 91 289 43 412 -30 77 -75 127 -161 178 -50 29 -75 51 -83 71 -5 16 -16 29 -22 29 -20 0 -63 40 -58 54 3 7 -6 20 -20 29 -13 9 -38 42 -55 72 -24 46 -28 60 -19 75 15 23 -2 45 -47 64 -18 8 -42 27 -54 44 -17 24 -31 32 -69 37 -51 7 -118 42 -189 99 -28 23 -62 39 -100 47 -32 6 -68 18 -79 25 -12 7 -25 10 -29 6z', 'M2980 1367 c0 -43 -18 -87 -36 -87 -7 0 -22 16 -34 35 l-22 35 -24 -22 c-28 -27 -30 -41 -9 -58 21 -17 19 -49 -6 -89 -20 -33 -20 -33 -77 -27 -31 4 -69 9 -83 12 -20 4 -28 0 -32 -15 -3 -11 -20 -29 -38 -40 -19 -12 -27 -21 -19 -21 8 0 33 -14 54 -30 55 -42 98 -41 124 3 19 33 20 34 68 26 27 -4 60 -10 73 -15 23 -7 23 -7 6 19 -14 22 -15 32 -5 62 10 29 23 41 70 65 32 16 62 35 66 42 5 9 2 9 -10 -1 -26 -22 -42 0 -27 37 17 40 11 72 -16 90 -22 14 -23 14 -23 -21z', 'M2673 1306 c45 -31 67 -33 67 -6 0 15 -7 20 -27 20 -16 0 -39 3 -53 7 -20 5 -18 1 13 -21z', 'M2176 1217 c-3 -14 -30 -41 -66 -66 -56 -39 -80 -76 -66 -99 3 -5 -1 -29 -9 -54 l-13 -46 88 -41 c49 -23 97 -41 107 -41 32 0 60 27 108 105 46 74 67 90 79 60 3 -8 15 -15 26 -15 15 0 20 7 20 25 0 19 -7 26 -37 34 -21 6 -42 11 -47 11 -5 0 -17 7 -27 16 -17 15 -17 18 -2 40 9 14 14 26 12 29 -2 2 -33 15 -69 28 -36 13 -72 27 -81 31 -12 5 -18 1 -23 -17z', 'M2721 830 l-32 -40 38 0 c21 -1 55 -7 76 -14 34 -12 37 -12 37 4 0 17 -64 90 -79 90 -4 0 -22 -18 -40 -40z']
			),
			'location' => DB::raw('POINT(16.995971, -62.067641)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}