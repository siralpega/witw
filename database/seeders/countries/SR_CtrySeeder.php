<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SR_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Suriname',
			'code'  => 'SR',
			'type'  => null,
			'paths' => serialize(
				['M7435 10225 c-16 -8 -45 -14 -63 -15 -18 0 -55 -11 -82 -25 -67 -34 -66 -53 11 -138 57 -63 63 -67 103 -67 24 0 69 -10 102 -21 40 -15 93 -23 169 -26 60 -3 124 -12 143 -20 l33 -14 -22 -32 c-13 -18 -23 -33 -24 -35 -1 -1 -37 14 -79 34 -76 36 -77 36 -109 19 -31 -16 -34 -16 -85 4 -77 30 -91 27 -135 -30 -20 -27 -42 -49 -47 -49 -20 0 -23 33 -8 61 15 26 15 28 -10 52 -58 54 -146 74 -229 53 -47 -13 -49 -12 -103 24 -57 38 -250 109 -374 137 -54 13 -118 16 -266 15 -107 -1 -230 3 -272 9 -87 11 -191 1 -319 -32 -42 -10 -122 -24 -177 -30 l-101 -12 -39 -46 c-32 -39 -82 -137 -82 -161 0 -5 12 -12 28 -18 25 -9 27 -13 24 -55 -3 -33 -11 -52 -31 -71 l-27 -26 -102 12 c-89 10 -104 15 -117 35 -14 21 -23 23 -89 23 -64 0 -78 3 -112 28 -51 37 -60 40 -170 56 -69 11 -110 24 -162 51 -70 36 -195 65 -286 65 -26 0 -50 8 -70 24 -38 28 -73 40 -196 67 -176 39 -207 41 -295 20 l-80 -20 -75 34 c-108 47 -114 49 -226 46 -86 -2 -112 2 -174 23 -41 14 -92 26 -114 26 -23 0 -86 7 -141 15 -59 9 -122 13 -153 9 -51 -6 -54 -8 -78 -55 l-24 -49 -55 0 c-50 0 -56 -3 -79 -33 -15 -20 -26 -47 -26 -65 0 -18 -31 -103 -69 -189 -77 -178 -81 -191 -91 -323 -14 -178 -50 -341 -92 -414 -20 -34 -32 -43 -85 -60 -60 -19 -62 -21 -87 -77 -13 -31 -30 -95 -37 -141 -13 -95 -25 -116 -116 -204 -35 -34 -63 -66 -63 -71 0 -5 6 -18 14 -28 12 -17 19 -18 60 -8 l46 10 0 -89 c0 -67 4 -97 17 -119 10 -16 20 -29 24 -29 6 0 33 51 32 60 -1 3 -4 17 -8 31 -6 23 -3 27 19 31 22 4 35 -4 78 -51 91 -99 99 -147 35 -209 l-44 -43 -28 46 c-27 42 -32 45 -71 45 -59 0 -94 -30 -94 -79 0 -21 -11 -65 -25 -99 -32 -79 -31 -92 5 -127 17 -16 30 -37 30 -48 0 -16 -5 -18 -38 -12 -30 5 -47 1 -83 -19 -24 -14 -54 -26 -67 -26 -13 0 -35 -6 -50 -14 -37 -19 -234 -19 -281 0 -52 22 -105 17 -169 -15 l-58 -29 -39 29 c-33 25 -48 29 -99 29 -58 0 -65 -3 -128 -51 -49 -36 -73 -63 -87 -94 -16 -37 -25 -45 -56 -51 -20 -3 -67 -4 -105 -2 l-68 5 -59 -76 c-32 -42 -78 -94 -102 -117 l-44 -41 12 -65 c12 -63 14 -65 49 -74 37 -9 37 -9 42 -71 4 -54 9 -67 41 -100 34 -35 37 -44 42 -113 9 -111 -10 -174 -113 -379 -49 -98 -90 -183 -90 -188 0 -5 -13 -19 -30 -31 -35 -26 -38 -56 -15 -142 8 -30 15 -77 14 -105 l0 -50 -105 -80 c-71 -54 -118 -98 -145 -137 -35 -52 -39 -63 -39 -120 0 -35 7 -85 15 -112 8 -27 15 -81 15 -120 0 -109 21 -175 67 -211 21 -16 56 -50 78 -74 22 -24 65 -71 96 -105 37 -40 65 -85 84 -131 16 -38 54 -101 85 -139 55 -69 55 -70 61 -153 5 -76 8 -87 45 -139 34 -49 53 -64 139 -111 104 -56 128 -77 172 -154 20 -34 41 -55 82 -77 53 -29 57 -34 79 -99 l23 -68 -25 -100 c-15 -55 -26 -105 -26 -112 0 -21 72 -61 130 -72 30 -5 66 -14 79 -19 16 -6 39 -5 65 3 37 11 45 9 112 -22 40 -18 79 -33 86 -33 26 1 102 68 114 102 10 29 15 33 43 30 18 -1 50 -11 71 -22 58 -30 85 -26 113 15 27 40 31 38 65 -30 26 -54 36 -143 21 -193 -9 -33 -9 -48 6 -92 16 -49 16 -54 0 -96 -16 -42 -16 -49 0 -114 18 -72 24 -78 68 -61 20 8 29 6 41 -8 16 -17 15 -19 -9 -25 -21 -5 -25 -12 -25 -45 0 -32 6 -45 39 -74 70 -64 80 -98 60 -211 -8 -48 -7 -71 3 -106 12 -40 18 -46 48 -50 27 -4 35 -11 41 -33 7 -27 5 -30 -36 -48 l-44 -19 15 -35 c8 -19 14 -54 14 -79 0 -43 1 -45 55 -75 30 -17 68 -31 85 -31 24 0 30 -4 30 -22 0 -45 12 -65 46 -81 25 -12 34 -23 34 -41 0 -14 14 -41 30 -60 33 -37 60 -103 60 -146 0 -23 6 -29 41 -39 47 -14 56 -32 40 -77 -11 -29 -9 -37 11 -68 13 -20 38 -43 56 -53 18 -10 32 -25 32 -36 0 -28 25 -69 69 -112 31 -30 41 -47 41 -71 0 -26 6 -37 30 -50 16 -10 35 -31 41 -47 11 -27 10 -30 -25 -59 l-38 -31 70 -32 c48 -23 75 -42 85 -61 14 -27 13 -32 -9 -76 l-24 -48 47 -28 c26 -15 69 -47 96 -72 l49 -45 -5 -60 c-5 -74 15 -113 115 -225 38 -41 96 -114 130 -161 l63 -86 154 -5 154 -5 40 -43 c41 -43 105 -79 143 -80 17 0 24 -9 33 -44 10 -42 13 -45 63 -60 91 -26 130 -29 193 -12 56 14 62 14 103 -4 24 -11 66 -36 93 -56 63 -46 129 -54 223 -29 l65 18 66 -42 c76 -47 250 -101 328 -101 26 0 75 8 110 17 51 14 71 27 113 69 60 61 72 101 49 157 -19 46 -19 87 0 179 9 40 13 84 10 97 -3 13 -51 69 -105 126 -55 56 -100 109 -100 118 0 19 -9 26 -75 53 -49 20 -50 21 -57 73 -5 44 -12 58 -40 81 -32 28 -113 60 -148 60 -53 0 -68 44 -27 77 12 10 29 34 37 53 7 19 24 57 37 83 l24 48 34 -21 c40 -25 38 -26 128 54 60 54 66 64 61 89 -3 16 -3 75 1 133 7 92 11 109 32 135 18 21 34 29 56 29 49 0 132 -44 187 -99 49 -49 54 -51 148 -70 138 -27 148 -32 155 -78 6 -32 13 -41 50 -61 41 -22 45 -22 87 -7 25 9 72 19 105 22 37 4 78 16 107 33 44 24 51 25 106 17 43 -8 91 -6 185 6 l127 16 69 -23 69 -24 33 34 c24 24 36 49 44 91 l11 56 65 25 c46 17 75 22 104 18 143 -20 127 -23 178 34 26 29 47 55 47 59 0 12 72 31 114 31 32 0 38 -4 53 -35 25 -52 56 -56 101 -12 64 61 161 117 203 117 27 0 50 9 83 35 26 19 48 35 51 35 16 0 0 -53 -30 -97 -19 -29 -35 -59 -35 -68 0 -8 24 -31 53 -50 37 -25 60 -49 75 -81 13 -25 36 -63 53 -84 28 -35 37 -39 119 -55 l89 -17 53 47 53 46 70 -6 c39 -3 86 -9 106 -12 l35 -5 -10 -48 c-6 -33 -6 -56 0 -71 9 -20 6 -27 -18 -47 -33 -28 -35 -54 -8 -92 11 -15 24 -39 29 -52 6 -17 20 -27 41 -32 67 -13 96 -7 160 35 l62 40 62 -22 63 -23 36 28 c33 26 46 48 82 154 3 7 24 12 58 12 l54 0 86 93 c73 80 88 102 102 153 9 32 34 86 55 119 21 34 44 86 51 118 10 47 23 70 65 117 29 32 91 115 138 183 75 110 86 130 86 168 0 36 6 49 36 80 35 36 36 37 15 48 -33 18 -29 100 7 160 23 37 52 103 52 117 0 2 -14 19 -32 39 -27 32 -32 45 -36 108 -3 59 -1 75 12 86 11 9 16 30 16 67 0 52 -1 55 -29 60 -17 4 -38 15 -47 25 -15 17 -14 23 17 99 24 58 42 85 60 95 31 17 78 73 107 130 11 22 43 62 71 90 50 48 51 50 51 109 0 56 2 61 39 93 22 19 59 69 85 118 42 77 46 91 46 154 0 72 22 206 41 252 9 24 6 34 -27 83 -27 41 -42 55 -53 51 -71 -28 -98 -6 -136 105 -14 41 -48 109 -76 151 -48 73 -53 78 -129 112 l-78 35 -12 55 c-9 47 -17 59 -51 83 -22 15 -49 44 -59 63 -10 20 -41 58 -69 85 -37 36 -51 59 -56 88 -7 41 -58 109 -110 147 -73 53 -70 46 -45 81 12 17 29 57 37 88 8 31 23 73 34 93 l19 38 -42 35 c-23 20 -49 36 -57 36 -9 0 -32 5 -52 10 -30 8 -38 17 -47 49 -7 21 -12 60 -12 85 0 96 -23 243 -51 333 -20 65 -33 136 -43 239 -13 138 -12 149 4 178 16 27 18 56 17 234 l-1 203 -52 34 -51 34 -6 133 c-3 73 -11 157 -18 187 l-13 54 35 31 c41 36 59 92 59 186 0 86 32 145 114 211 62 49 76 70 76 115 0 11 16 36 36 55 20 18 52 66 71 104 20 39 54 101 76 139 40 68 43 70 133 112 118 55 162 104 294 324 14 23 77 91 141 151 l117 109 4 63 c4 46 0 75 -13 110 -31 79 -25 139 22 229 31 60 79 177 79 193 0 1 -18 10 -41 20 -24 11 -46 31 -56 49 -8 17 -31 48 -51 69 -31 32 -42 37 -82 37 -66 0 -110 15 -206 71 -79 45 -90 49 -133 43 -32 -4 -86 3 -176 21 -71 15 -159 31 -195 36 -36 5 -92 13 -125 18 -33 5 -105 10 -160 10 -146 1 -248 22 -344 70 -65 33 -91 41 -136 41 -34 0 -78 9 -117 24 -58 22 -85 25 -343 35 -212 8 -303 15 -374 31 -108 23 -106 23 -146 5z']
			),
			'location' => DB::raw('POINT(3.919305, -56.027783)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}