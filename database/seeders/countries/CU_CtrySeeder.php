<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CU_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Cuba',
			'code'  => 'CU',
			'type'  => null,
			'paths' => serialize(
				['M3366 6690 c-71 -33 -140 -60 -153 -60 -18 0 -23 -5 -23 -26 0 -40 -24 -24 -34 23 -8 35 -15 43 -47 53 -26 9 -56 10 -96 5 -78 -11 -270 -6 -310 7 -24 9 -42 9 -71 0 -22 -7 -76 -12 -122 -12 l-82 0 -122 -72 c-113 -67 -126 -73 -194 -79 -47 -4 -77 -11 -83 -20 -7 -11 -11 -12 -17 -1 -13 19 -165 5 -158 -14 3 -8 -3 -18 -14 -24 -26 -14 -28 -13 -23 13 l5 24 -78 -17 c-57 -12 -81 -22 -92 -38 -18 -27 -32 -28 -32 -2 0 23 0 23 -54 8 -24 -7 -60 -30 -89 -57 -32 -30 -55 -45 -68 -43 -12 2 -32 -6 -44 -18 -17 -16 -31 -21 -49 -16 -19 5 -28 1 -36 -14 -7 -13 -21 -20 -40 -20 -19 0 -30 -5 -30 -14 0 -17 -21 -26 -60 -26 -15 0 -33 -6 -39 -14 -7 -8 -35 -17 -62 -21 -28 -4 -53 -13 -56 -21 -5 -14 -96 -60 -151 -76 -20 -5 -36 -18 -42 -32 -10 -28 -61 -66 -87 -66 -10 0 -26 -13 -36 -29 -9 -15 -30 -34 -47 -41 -25 -10 -30 -18 -30 -46 0 -26 -7 -39 -31 -56 -39 -29 -69 -86 -69 -131 0 -19 -7 -40 -15 -47 -19 -16 -19 -30 0 -30 8 0 17 -14 21 -34 4 -25 16 -42 45 -60 21 -15 39 -34 39 -44 0 -10 6 -24 13 -31 10 -11 6 -12 -23 -6 -19 3 -48 6 -65 6 -16 -1 -50 -1 -74 -1 -30 0 -51 -6 -65 -19 -12 -11 -44 -29 -73 -40 -29 -11 -88 -38 -132 -61 -79 -39 -80 -39 -122 -25 -23 8 -43 15 -45 15 -2 0 -4 -15 -4 -34 0 -32 3 -35 47 -50 75 -26 95 -21 170 36 65 51 71 53 140 56 71 4 72 4 79 -23 5 -19 1 -34 -13 -53 -26 -36 -38 -82 -21 -82 28 1 95 40 128 75 46 48 72 61 176 86 68 16 92 18 117 9 38 -13 56 2 81 72 14 37 15 51 6 68 -16 30 -6 60 29 94 30 29 34 29 147 24 27 -2 57 6 90 23 73 39 98 42 119 19 31 -35 165 -22 165 15 0 17 11 20 26 5 12 -12 64 55 64 83 0 20 44 51 63 44 7 -3 26 1 43 8 22 9 38 31 68 92 l39 80 74 24 c45 14 82 32 92 46 10 12 36 29 58 38 32 13 44 25 56 56 l15 39 68 0 c46 0 73 -5 84 -15 12 -11 24 -12 50 -5 18 5 96 12 173 15 117 5 142 4 156 -9 13 -12 25 -14 50 -6 18 5 77 12 130 16 120 8 165 -7 299 -101 1 -1 -5 -18 -13 -38 -12 -29 -28 -43 -73 -66 -53 -26 -68 -29 -202 -34 -80 -3 -153 -8 -162 -12 -12 -5 -18 -18 -18 -37 0 -25 6 -32 46 -50 26 -11 67 -33 91 -48 25 -16 62 -31 84 -35 33 -6 39 -11 39 -31 0 -19 8 -29 35 -40 39 -16 135 -19 135 -4 0 11 164 7 220 -5 19 -5 41 -17 48 -27 32 -45 122 -65 122 -28 0 25 22 26 44 1 13 -14 14 -24 7 -45 -12 -31 -1 -34 24 -6 14 16 16 29 11 71 -4 29 -13 69 -20 90 -12 34 -11 38 5 42 21 6 59 -47 59 -81 0 -68 58 -109 174 -123 61 -8 80 -6 135 12 56 19 78 21 167 16 121 -8 159 1 149 36 -4 12 -22 35 -41 50 -39 33 -36 47 10 47 55 0 95 -11 100 -29 17 -62 17 -81 1 -81 -27 0 -11 -60 21 -84 15 -11 49 -39 77 -62 29 -25 88 -59 140 -81 76 -32 94 -45 119 -81 26 -38 31 -41 42 -27 10 14 21 15 59 10 41 -6 47 -10 47 -31 0 -20 5 -24 30 -24 16 0 33 7 38 16 8 15 12 15 40 0 17 -9 42 -16 55 -16 36 0 119 -30 144 -52 15 -14 26 -17 38 -11 16 10 154 -14 208 -36 44 -17 89 -13 142 13 27 14 73 28 104 31 92 10 184 27 211 39 23 11 70 11 70 0 0 -3 -5 -14 -10 -24 -9 -17 -5 -20 28 -29 21 -6 47 -21 58 -33 40 -45 84 -125 84 -154 0 -22 9 -35 38 -54 28 -18 33 -25 20 -28 -22 -4 -22 -8 -4 -60 8 -22 17 -66 21 -98 10 -85 12 -90 48 -105 18 -7 54 -29 80 -50 26 -21 61 -40 76 -44 22 -5 31 -15 40 -45 9 -30 15 -37 30 -33 12 3 35 -12 72 -49 57 -58 83 -68 169 -68 32 0 55 6 72 20 23 18 29 18 77 5 61 -16 362 -12 407 6 34 12 84 2 107 -22 10 -11 27 -19 37 -19 27 0 40 -49 16 -62 -27 -15 -19 -25 45 -48 35 -13 67 -33 76 -47 21 -31 11 -88 -21 -122 -13 -14 -27 -36 -31 -48 -5 -17 -14 -23 -35 -23 -19 0 -33 -8 -44 -26 -10 -14 -38 -34 -63 -45 -25 -10 -70 -42 -101 -70 -32 -28 -71 -57 -89 -65 -22 -9 -35 -24 -43 -50 -7 -20 -27 -53 -44 -73 -32 -36 -100 -141 -94 -145 2 -2 22 -10 44 -19 37 -14 43 -14 63 0 12 8 41 16 64 18 23 1 76 8 117 15 61 9 79 16 97 38 21 26 35 30 133 33 8 1 41 -4 74 -10 47 -8 65 -7 93 4 20 8 47 15 62 15 14 0 39 11 56 24 23 18 34 22 48 14 12 -6 29 -6 50 2 18 7 77 16 132 20 142 12 253 28 301 44 30 10 81 12 195 9 140 -4 157 -3 192 15 38 20 39 20 58 1 14 -14 33 -19 74 -19 31 0 79 -9 112 -22 41 -15 78 -21 128 -20 126 2 228 14 272 33 40 17 43 21 43 56 0 48 24 85 53 81 31 -4 32 -36 3 -91 -25 -47 -25 -47 -4 -47 12 0 50 5 85 11 55 10 66 15 79 40 8 16 20 29 26 29 6 0 37 22 69 50 32 27 63 48 71 45 22 -9 210 22 273 45 45 17 81 22 140 21 44 -1 85 2 91 6 6 5 19 23 28 40 9 18 28 40 41 49 39 26 34 71 -13 117 -40 39 -69 46 -105 23 -38 -24 -92 -29 -108 -10 -8 10 -38 28 -67 41 -34 15 -73 44 -107 81 -29 31 -76 71 -103 87 -31 18 -57 43 -67 64 -15 31 -18 33 -51 27 -26 -5 -43 -2 -67 13 -51 31 -150 47 -206 32 -34 -8 -55 -9 -75 -1 -15 5 -56 10 -92 10 -50 0 -64 -3 -64 -15 0 -8 -9 -15 -20 -15 -15 0 -20 7 -20 25 0 24 -3 25 -55 25 -48 0 -55 -2 -55 -20 0 -13 -9 -22 -27 -26 -16 -3 -33 -7 -40 -9 -6 -2 -14 3 -17 12 -5 12 -9 13 -20 4 -12 -10 -15 -6 -21 19 -4 16 -11 30 -17 30 -20 0 -78 -42 -78 -56 0 -17 -1 -17 -34 -4 -23 8 -26 15 -26 61 l0 51 88 -3 c72 -3 87 -1 87 11 0 8 -15 23 -34 32 -30 15 -38 15 -66 4 -39 -17 -65 -5 -65 29 0 27 27 34 47 14 20 -20 56 -6 65 26 5 17 14 40 20 52 8 17 6 28 -11 52 -12 17 -28 31 -35 31 -7 0 -27 11 -46 25 -37 27 -89 33 -137 14 -15 -6 -45 -11 -65 -10 -21 0 -40 -5 -45 -13 -10 -16 -80 -26 -108 -16 -11 4 -27 4 -36 -1 -13 -6 -20 0 -32 31 -11 30 -21 40 -37 40 -13 0 -60 23 -106 51 l-83 51 -66 -7 -65 -7 0 -44 c0 -32 -4 -44 -15 -44 -8 0 -15 9 -15 20 0 40 -29 80 -56 80 -19 0 -25 -4 -20 -15 8 -23 -56 -20 -77 3 -22 24 -21 30 6 34 12 2 22 10 22 18 0 10 -19 19 -60 28 -33 7 -73 20 -90 28 -54 26 -94 34 -102 20 -12 -20 -50 -37 -67 -30 -12 5 -11 9 5 25 10 10 19 25 19 33 0 18 -75 112 -96 120 -22 8 -24 8 -24 -7 0 -8 -9 -22 -20 -32 -11 -10 -20 -28 -20 -40 0 -25 -17 -35 -61 -35 -23 0 -29 4 -29 21 0 12 7 27 16 33 21 16 8 46 -21 46 -50 0 -83 13 -94 36 -5 13 -26 30 -45 38 -40 17 -58 44 -45 68 7 13 3 18 -19 26 -16 5 -37 6 -50 1 -14 -5 -31 -5 -42 1 -10 6 -39 10 -63 10 -65 0 -103 17 -117 51 -7 16 -17 29 -22 29 -19 0 -58 50 -58 75 0 20 -5 25 -25 25 -20 0 -25 -5 -26 -27 0 -16 -4 -36 -8 -47 -6 -16 -11 -13 -36 20 -16 22 -58 69 -94 107 -47 49 -71 67 -90 67 -14 0 -39 9 -56 20 -16 11 -55 25 -85 31 -41 9 -65 22 -95 50 -34 32 -49 39 -99 45 -33 4 -73 16 -90 26 -68 43 -149 88 -157 88 -4 0 -9 -17 -11 -37 l-3 -38 -35 36 c-19 20 -48 39 -64 43 -15 4 -112 -1 -215 -10 l-186 -17 -93 61 c-51 33 -101 63 -111 67 -10 3 -37 32 -59 64 -23 32 -48 63 -56 71 -9 7 -16 21 -16 31 0 10 -11 31 -24 46 -19 21 -27 25 -36 16 -9 -8 -24 -5 -59 13 -38 20 -53 23 -73 15 -22 -8 -27 -6 -37 17 -11 24 -10 28 26 58 l38 32 -43 -8 c-23 -4 -51 -15 -61 -24 -17 -15 -21 -15 -62 9 -24 13 -52 25 -61 25 -10 0 -18 7 -18 16 0 11 -6 13 -20 9 -10 -3 -31 0 -46 8 -25 13 -30 12 -62 -9 -51 -35 -92 -39 -139 -15 -22 11 -49 18 -59 15 -28 -7 -130 41 -150 71 -9 13 -32 34 -51 46 -34 21 -35 21 -140 5 -58 -9 -114 -21 -124 -26 -19 -11 -89 -14 -89 -4 0 3 4 14 10 24 9 16 6 18 -33 13 -60 -7 -66 -10 -77 -37 -6 -16 -21 -28 -42 -34 -31 -9 -36 -6 -78 37 l-46 46 41 21 c47 26 86 64 64 64 -8 0 -72 -27 -143 -60z', 'M6010 6210 c-26 -21 -64 -24 -141 -14 -42 5 -47 4 -52 -17 -8 -31 -1 -39 36 -39 18 0 50 -9 72 -19 25 -11 54 -16 73 -13 18 2 53 -1 77 -8 37 -10 47 -10 66 4 13 9 32 16 42 16 22 0 13 19 -37 73 -29 30 -42 37 -73 36 -22 0 -49 -8 -63 -19z', 'M6230 6091 c-19 -4 -44 -12 -55 -19 -18 -10 -15 -11 22 -12 33 0 41 -3 37 -15 -9 -23 26 -32 42 -10 13 18 14 18 14 -4 0 -14 16 -40 39 -62 36 -37 39 -38 44 -17 6 20 8 20 29 6 13 -9 24 -28 26 -44 2 -16 10 -33 18 -37 9 -5 12 -16 9 -26 -7 -22 11 -38 45 -43 19 -2 26 -10 28 -30 6 -47 102 -116 102 -73 0 21 19 19 27 -2 11 -33 36 -53 63 -53 22 0 29 -6 35 -27 6 -25 21 -42 36 -43 3 0 4 14 1 30 -3 24 2 36 22 55 21 19 27 33 24 58 -3 31 -5 32 -48 33 -25 0 -58 8 -75 17 -16 9 -36 17 -42 17 -7 0 -13 11 -13 23 0 24 -28 57 -48 57 -6 0 -14 9 -17 20 -3 11 -13 20 -22 20 -29 0 -73 34 -73 57 0 18 -6 22 -37 25 -29 2 -39 8 -41 23 -8 54 -13 64 -43 74 -35 12 -94 13 -149 2z', 'M6881 5611 c-19 -12 -2 -60 31 -84 20 -15 35 -18 62 -13 l36 7 -42 49 c-43 50 -60 58 -87 41z', 'M7052 5502 c2 -4 11 -28 21 -53 11 -26 29 -52 42 -59 13 -7 29 -26 34 -41 9 -27 14 -29 64 -29 41 0 58 -5 72 -20 26 -29 47 -8 43 44 -3 40 -4 41 -43 47 -51 7 -102 34 -110 58 -3 10 -28 28 -57 40 -53 22 -72 26 -66 13z', 'M1843 5417 c3 -9 -1 -21 -10 -29 -52 -42 -93 -155 -63 -173 21 -13 110 -127 110 -140 0 -20 -52 -45 -94 -45 -26 0 -40 6 -51 23 -14 22 -63 52 -71 45 -1 -2 16 -33 38 -70 49 -77 83 -98 165 -98 30 0 73 -5 93 -11 36 -11 42 -9 164 57 119 65 126 71 126 100 0 17 -10 43 -21 58 -18 23 -20 31 -10 52 15 34 2 56 -49 79 -40 18 -58 49 -47 79 8 20 -74 53 -163 65 -41 6 -86 14 -99 18 -20 5 -23 3 -18 -10z', 'M5260 4700 c0 -14 46 -60 60 -60 6 0 10 8 8 17 -4 20 -68 61 -68 43z', 'M5418 4607 c-16 -13 -13 -18 33 -66 47 -49 69 -57 69 -26 0 7 -19 34 -42 59 -38 40 -45 44 -60 33z', 'M5556 4494 c13 -34 26 -44 61 -44 30 0 33 2 24 19 -6 10 -21 21 -33 23 -13 3 -31 9 -41 13 -14 6 -16 4 -11 -11z', 'M5670 4420 c0 -19 19 -30 51 -30 37 0 16 32 -28 43 -18 4 -23 1 -23 -13z', 'M5802 4344 c9 -9 21 -13 27 -9 16 10 3 25 -22 25 -20 0 -20 -1 -5 -16z', 'M6157 4204 c22 -35 82 -61 94 -42 14 21 11 24 -42 47 -67 27 -73 27 -52 -5z']
			),
			'location' => DB::raw('POINT(21.521757, -77.781167)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}