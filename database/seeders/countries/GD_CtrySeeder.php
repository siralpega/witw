<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GD_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Grenada',
			'code'  => 'GD',
			'type'  => null,
			'paths' => serialize(
				['M6960 10223 c-40 -11 -60 -12 -77 -4 -39 18 -86 13 -125 -14 -20 -14 -50 -25 -67 -25 -27 0 -30 -3 -33 -36 -3 -34 -7 -37 -63 -61 -55 -22 -79 -41 -127 -100 -9 -12 -34 -24 -57 -28 -35 -6 -45 -13 -67 -51 -15 -25 -40 -52 -58 -60 -17 -9 -70 -46 -118 -81 -75 -57 -88 -71 -97 -108 -10 -38 -15 -43 -51 -53 -28 -7 -49 -7 -68 0 -23 9 -36 6 -77 -14 -28 -14 -68 -28 -90 -32 -71 -13 -110 -47 -150 -133 -20 -43 -41 -99 -47 -125 l-11 -47 -71 -21 c-39 -12 -95 -34 -126 -50 l-55 -28 -18 -83 c-19 -90 -45 -138 -143 -259 -75 -94 -154 -166 -194 -179 -24 -7 -48 -27 -72 -59 l-36 -49 -103 -18 c-57 -10 -124 -27 -149 -39 -60 -28 -127 -81 -136 -109 -19 -63 -76 -133 -149 -181 -40 -28 -76 -59 -79 -70 -3 -12 -6 -67 -6 -123 0 -96 -2 -106 -30 -151 -16 -27 -30 -55 -30 -63 0 -7 -17 -64 -37 -125 l-37 -112 -50 -24 c-36 -16 -63 -40 -94 -81 l-44 -58 11 -57 c16 -79 -9 -203 -60 -297 -21 -38 -50 -113 -65 -165 -22 -78 -33 -101 -63 -130 -20 -19 -45 -53 -54 -75 -20 -45 -94 -100 -161 -119 -32 -9 -42 -17 -45 -36 -1 -14 -11 -36 -21 -50 -15 -21 -15 -30 -5 -60 9 -28 9 -41 -2 -67 -7 -18 -13 -48 -13 -67 0 -19 -4 -46 -10 -60 -8 -23 -15 -26 -56 -26 -45 0 -46 0 -43 -33 4 -43 -16 -91 -59 -146 -27 -33 -36 -55 -40 -95 -4 -41 -12 -59 -43 -95 -37 -41 -39 -48 -39 -107 0 -63 0 -64 -40 -90 -22 -15 -40 -31 -40 -36 0 -6 36 -44 80 -86 43 -43 84 -89 89 -104 6 -15 13 -68 17 -119 l7 -91 29 6 c25 5 28 3 28 -20 0 -14 11 -45 25 -68 l25 -43 -27 -12 c-28 -13 -43 -3 -43 31 0 23 -14 30 -45 22 -19 -5 -34 -23 -57 -68 -17 -33 -47 -79 -68 -102 -21 -23 -41 -56 -45 -75 -4 -19 -16 -51 -26 -71 -19 -36 -18 -38 0 -70 17 -29 46 -138 39 -143 -52 -33 -82 -44 -108 -38 l-30 5 0 -54 c0 -31 -3 -76 -6 -101 -6 -44 -8 -46 -68 -72 -94 -41 -139 -64 -160 -80 -20 -15 -18 -34 10 -142 5 -20 2 -23 -20 -23 -15 0 -36 5 -48 11 -11 6 -21 9 -23 7 -2 -2 3 -32 12 -66 15 -62 16 -62 52 -62 32 0 40 -6 71 -53 55 -82 104 -121 158 -127 40 -4 47 -9 55 -35 5 -16 24 -50 41 -75 17 -25 39 -71 49 -102 l18 -58 -40 -57 c-21 -32 -55 -74 -76 -93 -20 -19 -50 -59 -66 -88 -26 -44 -30 -59 -24 -93 4 -22 17 -52 30 -67 34 -40 43 -88 50 -268 6 -144 5 -162 -9 -167 -14 -6 -16 -19 -14 -74 3 -62 5 -68 26 -71 12 -2 38 2 57 8 29 10 41 24 81 100 41 77 49 87 67 81 34 -13 39 -45 11 -72 -27 -25 -34 -79 -10 -79 8 0 27 -15 43 -33 15 -19 49 -48 75 -65 45 -31 46 -34 36 -62 -12 -37 -12 -36 -69 -45 l-47 -7 -12 36 c-19 59 -55 66 -126 24 -27 -16 -32 -25 -36 -68 -3 -28 -12 -58 -21 -68 -39 -43 -67 -233 -47 -317 12 -51 11 -59 -16 -147 l-30 -92 -94 -66 c-52 -36 -115 -72 -138 -79 -24 -7 -63 -30 -87 -52 l-42 -39 -129 0 c-128 1 -129 1 -164 30 -30 26 -42 30 -95 30 l-60 0 50 -45 c28 -24 62 -47 78 -50 25 -6 27 -11 27 -53 0 -41 -4 -50 -27 -63 -24 -15 -31 -15 -79 -2 -64 19 -84 13 -84 -25 0 -41 -46 -82 -92 -82 -32 0 -37 -3 -43 -30 -11 -48 -51 -89 -96 -96 -33 -6 -39 -10 -39 -30 0 -20 -5 -24 -30 -24 -20 0 -35 -8 -46 -25 -9 -15 -26 -25 -39 -25 -13 0 -64 -21 -115 -46 -89 -44 -94 -46 -154 -39 -62 6 -63 6 -115 -35 -52 -41 -53 -41 -79 -24 -14 9 -28 13 -29 8 -25 -62 -40 -79 -82 -89 -30 -7 -53 -21 -72 -45 -29 -34 -29 -35 -10 -53 16 -17 24 -18 50 -9 27 10 40 7 97 -18 43 -20 82 -30 112 -30 26 0 85 -5 132 -11 47 -5 103 -12 126 -15 34 -4 43 -10 55 -37 28 -64 119 -33 119 41 1 49 27 78 78 87 50 8 147 -11 183 -35 17 -13 30 -16 40 -9 21 13 65 11 78 -5 8 -10 8 -21 1 -40 -17 -45 -12 -64 21 -83 19 -11 39 -36 51 -63 l20 -45 14 32 c17 39 28 46 73 47 l36 1 3 62 c5 111 54 109 68 -3 6 -48 9 -54 30 -54 23 0 24 -3 24 -62 0 -44 -5 -67 -17 -80 -16 -18 -15 -20 8 -44 l25 -25 33 103 c27 85 34 128 42 243 11 181 17 215 39 215 33 0 49 -34 62 -128 14 -103 17 -105 99 -81 44 14 60 5 85 -42 13 -25 12 -31 -11 -71 -14 -24 -25 -56 -25 -71 0 -18 -10 -36 -27 -52 -28 -23 -28 -24 -10 -54 16 -27 16 -33 3 -59 -18 -36 -67 -232 -60 -243 14 -23 74 -5 74 21 0 21 42 58 76 66 12 3 24 14 27 24 3 13 11 17 26 13 18 -5 21 -1 21 26 0 24 4 31 19 31 27 0 42 -22 49 -77 l7 -48 33 57 c37 66 43 138 16 190 -13 25 -15 46 -9 101 3 38 11 81 17 96 7 15 10 73 9 136 l-3 111 35 16 35 17 10 -29 c15 -41 44 -54 81 -35 34 17 67 20 76 5 11 -17 -26 -178 -45 -195 -17 -15 -17 -19 0 -73 10 -31 24 -58 31 -60 21 -4 68 61 88 121 13 39 23 53 39 55 14 2 22 11 22 22 0 33 43 72 86 79 37 6 39 8 42 44 3 34 8 40 48 59 l44 22 0 59 c0 51 -3 62 -25 79 -14 11 -31 41 -40 70 -17 58 -20 158 -5 158 14 0 42 -46 49 -83 6 -27 11 -32 33 -29 60 7 163 -74 204 -160 27 -57 30 -59 59 -54 16 3 40 18 53 34 l23 27 24 -30 c20 -24 23 -37 18 -70 -4 -34 1 -53 30 -111 22 -44 46 -75 65 -86 29 -17 30 -17 36 5 3 12 6 32 6 45 0 14 8 26 23 31 29 11 59 -9 160 -108 l78 -76 -2 90 c-2 81 0 90 17 93 32 6 34 15 20 97 -21 118 -27 129 -84 153 -62 27 -74 27 -97 2 -10 -11 -24 -20 -31 -20 -25 0 -51 50 -67 130 -9 45 -26 93 -37 107 -29 37 -19 39 32 7 103 -65 146 -104 152 -139 8 -41 24 -44 56 -10 18 20 33 25 69 25 25 0 51 -4 57 -8 14 -10 70 -175 79 -235 6 -41 14 -54 57 -90 47 -41 49 -43 43 -84 -5 -37 -1 -49 36 -108 41 -65 41 -68 35 -129 -4 -37 -2 -75 5 -94 9 -27 16 -32 44 -32 40 0 52 24 34 64 -10 21 -9 29 4 44 10 10 17 32 17 49 0 37 36 73 73 73 30 0 34 15 14 45 -8 11 -17 35 -21 54 -5 30 -2 39 25 67 l31 32 -39 12 c-49 16 -89 54 -169 159 -57 74 -64 89 -64 129 0 38 -5 50 -39 83 -45 46 -95 53 -126 19 -18 -20 -18 -20 -40 12 -31 46 -23 59 31 51 37 -5 49 -2 68 16 20 19 30 21 74 15 l50 -6 12 36 c14 44 40 48 40 7 0 -16 9 -58 20 -93 11 -34 20 -64 20 -65 0 -2 -11 -3 -25 -3 -14 0 -25 -4 -25 -8 0 -15 96 -100 145 -127 36 -21 70 -30 125 -35 74 -7 75 -7 120 -58 39 -44 48 -49 65 -40 26 15 35 28 35 55 0 12 8 35 17 51 22 39 6 62 -44 62 -27 0 -37 6 -51 30 l-17 30 -116 0 c-116 0 -117 0 -135 28 -11 16 -20 52 -22 89 l-4 61 40 21 41 21 63 -30 c43 -20 78 -30 111 -30 37 0 58 -7 92 -30 82 -56 200 -34 238 45 21 44 47 45 84 5 25 -28 31 -30 98 -30 l71 0 51 -78 c28 -42 56 -88 63 -102 12 -23 14 -24 20 -5 10 25 3 102 -16 186 -9 36 -14 83 -12 105 2 32 8 40 31 49 23 8 36 5 67 -13 21 -12 41 -19 43 -14 3 4 8 42 12 85 5 49 13 84 23 94 14 14 18 12 43 -18 15 -19 44 -63 63 -98 34 -60 36 -69 36 -157 0 -82 2 -95 19 -104 29 -15 29 -14 18 33 -9 40 -7 46 28 102 21 33 39 61 41 63 1 2 16 -4 33 -12 16 -9 34 -16 39 -16 36 0 6 117 -31 122 -13 2 -26 14 -32 31 -9 26 -6 32 25 58 42 34 91 38 120 9 11 -11 20 -28 20 -38 0 -10 20 -40 44 -67 l44 -50 22 20 c12 11 28 34 35 53 l14 33 38 -17 c65 -28 68 -27 96 10 15 19 27 40 27 45 0 6 -20 49 -45 95 l-46 84 57 4 c54 3 56 2 69 -27 7 -16 24 -41 39 -54 l26 -24 0 38 0 38 69 -5 c52 -4 73 -2 84 9 12 12 19 12 49 -3 23 -11 41 -13 51 -7 14 7 5 23 -54 102 -41 55 -68 100 -65 108 3 8 6 18 6 23 0 5 13 11 29 15 23 5 38 0 70 -23 37 -27 45 -29 76 -19 25 7 42 7 60 -1 24 -11 25 -10 25 24 0 40 21 54 52 35 18 -11 24 -9 49 15 33 31 33 34 18 102 l-10 50 -67 7 c-97 9 -142 24 -142 47 0 15 8 18 54 18 79 0 82 2 78 60 -2 28 -1 50 2 50 4 0 49 -27 102 -60 52 -33 101 -60 109 -60 26 0 26 19 -1 61 l-26 42 32 -6 c26 -6 33 -3 37 12 9 37 50 35 104 -5 39 -29 53 -34 62 -24 9 9 4 19 -24 43 -34 30 -35 34 -25 65 17 49 59 72 136 72 l65 1 -52 48 c-51 46 -53 50 -53 99 0 42 4 53 21 63 18 9 30 6 70 -16 60 -32 93 -30 97 6 3 22 -2 29 -28 37 -22 8 -32 19 -36 41 -5 26 -15 34 -65 53 -46 18 -59 27 -59 44 0 28 24 48 50 41 18 -5 94 40 111 65 3 5 23 0 45 -11 84 -45 99 -12 29 59 -49 50 -63 91 -51 155 5 27 14 39 34 46 24 9 30 7 50 -18 69 -82 70 -83 106 -83 32 0 36 3 36 25 0 18 -5 25 -19 25 -35 0 -51 12 -51 36 0 21 5 24 40 24 21 0 51 -5 65 -12 34 -15 40 -6 20 32 l-17 32 31 -7 c28 -6 30 -5 23 14 -4 11 -26 33 -49 50 -36 26 -43 37 -43 64 0 23 8 41 25 57 23 22 24 24 9 49 -14 24 -14 31 0 64 13 33 13 41 0 72 -22 54 -17 81 26 146 36 52 44 59 74 59 27 0 40 -8 63 -36 22 -27 38 -37 70 -41 40 -5 42 -4 57 31 13 30 20 36 45 36 46 0 41 33 -11 70 -69 49 -78 59 -78 81 0 12 -11 34 -24 50 -28 33 -43 117 -27 147 8 14 7 24 -4 38 -8 11 -15 35 -15 54 0 23 -12 53 -35 88 -20 28 -40 63 -45 76 -5 15 -20 27 -39 31 -31 7 -31 7 -31 74 0 59 3 70 25 91 18 17 25 34 25 60 0 21 3 58 6 84 6 43 9 46 36 46 26 0 29 3 26 27 -2 22 -10 30 -42 38 -29 9 -43 20 -58 48 -10 20 -25 37 -33 37 -12 0 -15 22 -15 128 0 168 5 193 49 244 33 38 36 47 36 104 1 45 6 68 18 82 9 10 17 30 17 44 0 17 8 28 25 36 17 8 25 20 25 36 0 13 18 51 41 85 l41 61 51 0 c29 -1 63 -7 77 -15 16 -9 55 -14 109 -15 72 0 88 3 107 21 12 11 44 26 71 33 l50 13 94 -68 c52 -38 99 -69 105 -69 7 0 14 17 16 38 3 20 12 54 22 75 l16 37 -27 11 c-16 7 -55 11 -88 10 -33 0 -66 3 -74 8 -21 13 -81 209 -81 266 0 28 -7 77 -14 109 -13 53 -12 63 3 100 15 35 16 50 8 104 -8 46 -8 78 1 120 30 140 82 457 82 501 0 33 9 66 30 107 23 46 28 67 24 99 -3 22 1 66 10 100 9 32 16 85 16 117 0 84 18 108 81 108 49 0 49 0 49 33 0 17 -7 41 -15 51 -10 13 -15 43 -15 83 0 35 -7 80 -15 99 -11 26 -13 55 -8 109 5 63 2 84 -17 136 -21 59 -22 67 -10 173 13 121 26 187 46 226 6 14 10 38 7 53 -4 23 -10 27 -37 27 -45 0 -103 59 -87 88 7 13 7 31 1 53 -6 19 -10 80 -10 137 0 119 -15 159 -79 217 -50 45 -79 115 -93 221 -13 102 -5 146 53 296 23 57 43 113 46 126 4 15 13 22 28 22 50 0 55 8 55 81 l0 69 -54 24 c-30 14 -60 34 -66 48 -7 12 -24 35 -38 51 -22 23 -34 27 -79 27 -61 0 -104 15 -150 54 -38 32 -122 63 -132 49 -8 -13 -222 -37 -260 -30 -25 5 -34 1 -53 -22 -16 -19 -42 -33 -88 -45 -36 -9 -105 -36 -155 -59 -81 -38 -97 -42 -166 -42 -59 1 -83 6 -113 23 -46 27 -68 28 -91 2 -22 -24 -98 -27 -148 -6 -18 7 -99 64 -182 126 -82 61 -160 116 -171 122 -15 7 -23 22 -27 51 -6 42 -28 68 -56 66 -9 0 -41 -7 -71 -16z', 'M3643 702 c-32 -26 -33 -28 -21 -66 11 -36 11 -40 -14 -61 -15 -13 -37 -30 -48 -38 -12 -8 -25 -31 -30 -50 -7 -34 -6 -35 30 -46 21 -6 48 -11 62 -11 13 0 40 -11 59 -25 l34 -26 28 31 c15 17 27 41 27 55 0 18 5 25 18 25 23 0 58 61 49 84 -7 18 -32 22 -42 6 -3 -5 -27 -10 -53 -10 l-47 0 27 23 c29 23 47 62 41 88 -3 14 -62 49 -81 49 -4 0 -22 -13 -39 -28z', 'M4128 513 c-35 -22 -51 -58 -38 -83 13 -25 13 -63 -1 -94 -10 -21 -8 -29 13 -54 13 -16 30 -43 37 -60 10 -23 29 -39 75 -62 74 -36 76 -36 69 -9 -3 11 0 39 8 61 17 52 6 68 -59 92 -48 17 -52 21 -52 51 0 21 8 39 25 55 33 31 33 72 -1 99 -32 25 -41 26 -76 4z']
			),
			'location' => DB::raw('POINT(12.262776, -61.604171)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}