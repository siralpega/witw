<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KH_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Cambodia',
			'code'  => 'KH',
			'type'  => null,
			'paths' => serialize(
				['M9994 9355 c-8 -19 -18 -35 -22 -35 -4 0 -28 -19 -53 -43 -41 -38 -46 -48 -58 -112 l-12 -70 -60 3 c-57 4 -61 6 -96 48 -30 35 -44 44 -69 44 -49 0 -81 -16 -88 -43 -3 -14 -15 -27 -26 -30 -15 -4 -20 -13 -20 -40 0 -20 -4 -47 -10 -61 -8 -22 -16 -26 -47 -26 -36 0 -39 -3 -63 -52 -21 -45 -33 -57 -80 -80 -71 -35 -91 -34 -130 2 -37 35 -90 42 -90 13 0 -10 -10 -39 -22 -64 -17 -34 -31 -49 -53 -56 -26 -8 -30 -14 -30 -43 l0 -35 -77 0 c-48 0 -81 -5 -89 -12 -7 -7 -20 -13 -29 -13 -8 0 -26 -7 -38 -16 -22 -15 -25 -15 -46 5 -12 12 -27 21 -33 21 -5 0 -18 15 -27 33 -10 17 -33 43 -51 57 -21 16 -36 37 -40 57 -6 35 -48 75 -70 67 -21 -8 -137 36 -167 64 -15 14 -28 36 -30 51 -2 19 -9 27 -28 29 -60 7 -70 12 -70 38 0 26 -74 124 -93 124 -5 0 -31 -17 -56 -37 -25 -20 -47 -38 -49 -38 -1 -1 2 -14 8 -29 9 -24 8 -26 -9 -16 -11 5 -31 10 -45 10 -23 0 -26 -4 -26 -32 0 -18 -7 -52 -16 -75 -14 -36 -21 -43 -44 -43 -15 0 -47 -7 -71 -15 -41 -15 -44 -15 -59 4 -8 11 -34 24 -56 30 -23 6 -53 20 -68 32 l-26 20 0 -39 c0 -107 -146 -289 -174 -217 -6 17 -47 20 -63 4 -8 -8 -13 -8 -17 0 -4 6 -22 11 -41 11 -27 0 -34 -4 -37 -22 -2 -14 -13 -24 -33 -30 -24 -6 -34 -3 -56 18 -20 19 -33 24 -49 19 -14 -4 -19 -12 -16 -22 3 -8 6 -25 6 -37 0 -14 9 -27 23 -33 20 -10 25 -21 31 -74 5 -49 14 -76 41 -116 34 -51 37 -53 80 -53 l45 0 0 -39 c0 -81 40 -140 136 -197 18 -11 18 -13 -3 -57 -19 -39 -28 -48 -65 -58 -24 -6 -55 -17 -70 -25 -27 -14 -28 -18 -28 -90 l0 -76 -67 7 c-38 4 -79 13 -93 20 -17 8 -53 11 -112 7 l-88 -4 -77 66 c-43 36 -89 69 -103 73 -14 3 -45 20 -70 38 -90 65 -214 115 -285 115 -31 0 -47 6 -65 25 -21 22 -32 25 -94 25 -147 1 -266 24 -379 75 -57 25 -116 59 -129 73 -23 26 -82 148 -124 257 -18 47 -22 50 -54 50 -34 0 -35 -1 -47 -54 -7 -31 -28 -78 -50 -110 l-39 -56 -61 0 c-60 0 -64 2 -107 44 -31 30 -50 60 -63 101 -18 57 -18 60 -1 93 l18 35 -55 31 c-30 17 -67 31 -82 31 -76 0 -189 24 -213 45 -34 31 -64 39 -79 21 -24 -28 -78 -39 -127 -26 -36 10 -50 10 -69 0 -13 -7 -35 -10 -50 -8 -31 6 -119 -38 -154 -78 -24 -28 -19 -28 -144 -8 -31 5 -40 2 -55 -16 l-19 -23 -30 22 c-36 27 -114 40 -171 28 -50 -10 -308 -5 -335 7 -14 7 -20 4 -24 -13 -7 -28 -58 -29 -73 -1 -15 29 -52 25 -82 -9 -29 -32 -107 -48 -152 -31 -48 18 -123 13 -139 -9 -12 -19 -16 -19 -58 -5 -24 8 -58 21 -76 29 -41 20 -73 19 -90 -2 -13 -17 -14 -17 -29 5 -12 16 -26 22 -53 22 -20 0 -46 6 -57 14 -11 8 -36 16 -55 18 -36 3 -40 13 -24 71 l7 27 -62 0 c-54 0 -66 -3 -86 -25 -28 -30 -53 -32 -96 -5 -34 20 -80 25 -138 14 -26 -6 -36 -15 -50 -50 -10 -23 -28 -47 -39 -53 -26 -15 -28 -14 -34 9 -8 29 -53 37 -80 12 -37 -33 -63 -42 -128 -42 -34 0 -107 -9 -163 -19 -56 -11 -130 -25 -166 -31 -96 -16 -182 -61 -232 -122 -79 -95 -95 -108 -128 -108 -18 0 -45 -11 -66 -26 -28 -22 -34 -33 -34 -64 0 -24 -7 -43 -20 -55 -11 -10 -20 -29 -20 -42 0 -14 -9 -36 -20 -50 -15 -20 -20 -41 -20 -89 0 -63 0 -64 -38 -83 -34 -18 -140 -121 -240 -233 -41 -47 -42 -49 -42 -122 l0 -75 -45 -31 c-25 -17 -71 -43 -103 -57 -31 -14 -91 -49 -133 -76 l-76 -50 11 -35 c8 -29 20 -39 66 -61 l55 -25 -44 -13 c-24 -7 -64 -29 -89 -50 l-46 -38 -96 0 c-52 0 -123 4 -157 9 -61 9 -77 4 -133 -42 -3 -2 3 -8 13 -13 40 -23 50 -66 43 -194 -5 -108 -3 -135 24 -275 17 -85 33 -189 37 -230 6 -80 31 -131 112 -230 20 -25 45 -58 55 -75 10 -16 30 -42 44 -57 l25 -27 -27 -12 c-23 -11 -26 -18 -26 -66 0 -30 7 -68 16 -85 11 -21 14 -43 10 -69 -4 -26 0 -50 14 -81 26 -58 26 -129 0 -153 -16 -15 -20 -31 -20 -90 0 -78 5 -84 67 -85 13 0 50 -25 88 -59 36 -33 75 -63 86 -66 11 -4 30 -28 43 -53 14 -26 57 -84 98 -129 106 -120 126 -146 133 -176 9 -35 -1 -77 -19 -77 -23 0 -46 -35 -46 -71 0 -19 -9 -58 -20 -87 -11 -29 -20 -70 -20 -91 0 -22 -5 -62 -12 -90 -16 -71 1 -138 57 -220 40 -59 46 -76 56 -156 11 -81 16 -95 51 -137 28 -34 38 -56 38 -82 0 -65 30 -127 101 -212 l69 -81 0 -126 c0 -113 2 -125 19 -130 13 -3 20 -17 25 -48 8 -54 38 -143 55 -162 6 -8 23 -18 36 -21 16 -4 25 -14 25 -26 0 -10 11 -36 25 -56 34 -51 32 -70 -15 -102 -22 -15 -42 -35 -45 -44 -3 -9 1 -50 9 -90 9 -43 13 -98 10 -133 -6 -59 -5 -60 26 -78 17 -9 37 -17 44 -17 14 0 45 59 56 108 8 32 -6 84 -26 105 -13 13 -15 129 -3 144 14 16 51 17 67 1 7 -7 12 -24 12 -39 0 -14 7 -46 15 -69 19 -55 19 -119 0 -140 -9 -10 -29 -48 -45 -86 l-29 -69 26 -5 c33 -6 82 -83 98 -154 11 -48 10 -53 -19 -99 -30 -48 -30 -50 -13 -79 20 -34 23 -122 6 -178 -12 -40 -1 -72 47 -136 20 -27 31 -32 84 -37 60 -7 62 -6 114 33 45 34 60 40 101 40 50 0 135 -39 135 -62 0 -7 17 -8 53 -4 71 9 119 26 114 40 -2 6 -10 34 -17 61 -11 44 -11 55 4 82 9 18 16 42 16 54 0 12 9 36 19 53 10 17 22 45 26 63 3 17 13 34 21 37 8 3 14 17 14 31 0 22 -3 25 -27 19 -25 -7 -26 -6 -11 14 25 37 102 99 130 105 46 12 75 -7 108 -73 30 -59 31 -60 73 -60 60 0 92 -33 84 -87 -8 -50 15 -153 41 -191 24 -33 62 -144 62 -180 0 -13 -16 -42 -35 -65 -36 -42 -50 -87 -43 -137 l5 -30 -71 0 c-55 0 -82 -6 -121 -25 -64 -31 -76 -42 -97 -87 -10 -20 -34 -56 -55 -79 -28 -32 -34 -43 -23 -47 8 -3 35 -25 61 -49 25 -23 51 -43 57 -43 5 0 19 -16 31 -36 l21 -35 30 17 c16 10 31 16 34 13 3 -2 13 -38 24 -79 l19 -75 54 -8 c30 -5 65 -11 79 -13 13 -3 68 -49 122 -101 109 -107 105 -106 176 -43 31 29 32 31 32 117 0 114 -4 127 -47 147 -33 16 -34 18 -21 39 59 90 70 119 65 158 l-5 39 39 0 c36 0 39 -2 49 -38 13 -49 46 -80 102 -97 25 -7 79 -27 121 -45 80 -33 86 -34 228 -14 27 3 55 1 67 -5 16 -8 30 -6 64 9 23 11 55 20 69 20 34 0 76 -45 84 -93 4 -21 14 -45 22 -52 19 -20 63 -19 91 1 22 15 25 14 65 -26 62 -63 144 -115 159 -102 17 13 54 -1 70 -28 17 -27 24 -25 36 10 7 19 24 35 49 47 29 14 41 27 51 58 7 22 21 47 31 55 10 8 21 23 25 34 5 16 14 18 56 14 35 -4 53 -1 61 8 15 18 62 17 123 -1 33 -10 93 -15 182 -15 l133 0 34 34 c18 19 51 65 72 102 30 51 52 75 95 102 30 19 96 63 147 96 l92 61 1 47 c0 41 -3 49 -29 64 -25 15 -29 25 -35 76 -3 32 -15 76 -26 98 -28 56 -25 73 20 114 44 39 58 44 66 21 6 -16 49 -29 126 -40 25 -3 52 -13 58 -20 7 -8 22 -15 34 -15 46 -1 164 -31 209 -55 44 -22 51 -23 76 -11 43 23 122 131 128 176 6 44 9 46 39 26 11 -8 31 -14 44 -14 14 -1 48 -4 75 -7 40 -6 68 -1 145 23 52 17 115 36 140 42 25 6 68 27 95 45 28 19 69 36 95 40 25 4 52 9 62 11 12 4 21 -8 34 -43 10 -26 32 -68 49 -93 54 -76 67 -107 64 -163 -3 -51 -3 -51 36 -69 22 -9 61 -18 87 -18 l47 0 -6 34 c-4 28 -2 35 16 41 14 4 21 15 21 33 0 25 2 25 53 -24 28 -28 77 -72 108 -97 l56 -47 94 0 c63 -1 102 -5 119 -15 38 -22 40 -19 40 38 0 55 -14 86 -73 160 -21 27 -27 41 -19 49 7 7 8 31 5 61 l-6 50 57 -6 c51 -5 57 -4 51 11 -4 9 -11 45 -15 80 -7 51 -15 71 -45 107 -20 25 -41 45 -46 45 -6 0 -27 -11 -47 -25 -34 -23 -38 -24 -45 -8 -4 10 -26 28 -47 41 -22 12 -56 36 -75 53 -28 25 -35 38 -35 69 0 34 -3 38 -31 44 -17 3 -47 6 -66 6 -22 0 -47 10 -69 26 -29 22 -34 33 -34 66 0 50 -32 98 -65 98 -30 0 -34 13 -19 69 6 25 9 71 7 101 -4 43 -2 59 11 69 20 17 21 64 2 94 -9 14 -14 50 -14 95 0 63 -3 77 -23 98 -12 13 -30 24 -40 24 -25 0 -57 32 -60 60 -2 19 11 40 55 84 l58 59 43 -21 c23 -11 62 -23 87 -27 41 -6 45 -5 56 20 7 14 12 34 12 45 0 10 9 21 20 25 32 10 60 59 60 104 0 31 5 43 21 52 31 16 88 4 120 -27 36 -34 115 -51 139 -29 19 18 56 20 66 4 3 -6 35 -24 70 -40 35 -15 64 -32 64 -38 0 -15 65 -51 94 -51 15 0 41 7 58 16 27 14 39 15 87 4 31 -7 65 -21 77 -31 20 -19 21 -19 43 5 25 26 24 29 -20 86 -40 52 -42 78 -14 149 16 37 23 71 19 85 -4 18 1 28 18 42 l24 18 -42 108 c-23 59 -37 108 -31 108 6 0 19 8 30 17 16 15 20 16 28 3 27 -46 25 -45 80 -31 39 10 54 11 57 2 2 -7 42 -11 122 -11 97 0 119 3 124 15 5 14 9 14 35 0 58 -29 83 -17 124 60 15 28 49 74 75 104 l48 54 71 -17 c94 -21 141 -20 203 4 28 11 66 20 85 20 27 0 37 6 54 33 11 18 43 55 71 83 27 27 50 55 50 62 0 6 7 12 15 12 8 0 15 9 15 19 0 11 15 28 35 41 19 12 43 32 52 44 31 39 67 56 209 95 202 57 211 58 255 18 19 -17 46 -51 59 -75 l24 -43 28 33 c15 18 28 45 28 59 0 22 8 29 47 44 52 20 127 84 149 126 8 16 14 48 14 72 0 24 9 70 21 103 11 32 22 86 25 119 2 33 6 89 9 125 5 52 3 74 -14 109 -17 39 -18 48 -6 71 11 21 11 30 0 50 -7 14 -21 75 -31 135 -17 104 -20 114 -73 194 l-56 84 1 141 1 141 57 159 c32 88 75 195 97 238 21 43 44 102 50 130 6 29 17 65 25 79 10 19 12 63 8 175 l-5 149 -47 99 c-25 54 -49 123 -53 152 -4 29 -24 88 -46 131 -34 69 -44 82 -93 110 -30 18 -61 36 -67 40 -10 6 -10 24 -3 73 8 53 6 67 -6 82 -15 15 -14 19 0 40 21 29 21 74 0 82 -12 4 -15 17 -13 51 4 61 -21 86 -93 93 -29 3 -62 12 -74 21 -18 13 -20 23 -16 91 4 73 3 78 -21 97 -33 26 -29 44 34 145 67 107 98 230 64 258 -23 19 -18 40 20 94 19 27 39 63 45 80 9 28 15 32 38 29 37 -5 45 3 71 72 44 117 58 180 53 241 -3 51 -1 62 17 78 17 16 21 31 21 88 0 66 -1 68 -26 68 -19 0 -28 -8 -40 -35z']
			),
			'location' => DB::raw('POINT(12.565679, 104.990963)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}