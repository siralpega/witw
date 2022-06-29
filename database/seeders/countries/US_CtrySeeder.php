<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class US_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'United States',
			'code'  => 'US',
			'type'  => null,
			'paths' => serialize(
				['M9767 8370 l-55 -50 -25 20 c-25 20 -26 20 -36 2 -26 -48 -43 -197 -36 -309 5 -92 4 -117 -10 -142 -10 -21 -14 -43 -9 -65 9 -49 -3 -76 -40 -91 -37 -16 -52 -31 -57 -59 -5 -24 -97 -65 -358 -160 -101 -37 -195 -74 -208 -83 -32 -21 -71 -89 -93 -164 -11 -34 -33 -79 -50 -100 -16 -21 -30 -40 -30 -43 0 -3 18 -9 40 -12 43 -7 51 -26 28 -64 -10 -16 -9 -23 11 -43 l22 -25 -33 -31 c-18 -18 -75 -53 -125 -77 -73 -36 -105 -46 -151 -48 -43 -2 -74 -11 -120 -36 -37 -19 -59 -37 -55 -44 3 -6 19 -28 35 -48 21 -27 27 -44 23 -59 -11 -33 -204 -228 -265 -267 -30 -20 -86 -65 -125 -102 -70 -67 -186 -143 -238 -156 -18 -4 -34 -1 -45 8 -9 9 -35 18 -56 21 -22 4 -46 13 -54 21 -13 13 -13 18 2 41 11 17 21 60 26 113 10 107 15 120 49 129 55 13 54 50 -4 168 -77 156 -96 165 -162 74 -54 -76 -84 -86 -98 -32 -4 19 0 35 16 56 25 34 49 116 49 168 0 21 -8 47 -20 62 -11 14 -20 38 -20 54 0 28 -3 30 -92 57 -51 15 -106 32 -122 36 -33 11 -60 0 -77 -32 -9 -17 -8 -23 6 -31 17 -9 17 -11 -3 -26 -17 -12 -23 -29 -25 -73 -2 -32 -7 -61 -11 -65 -10 -10 -39 10 -52 35 -10 20 -13 19 -49 -29 l-39 -51 0 -138 c-1 -125 1 -141 20 -167 60 -81 75 -165 50 -283 -23 -107 -61 -178 -110 -203 -35 -18 -41 -19 -65 -6 -47 27 -83 100 -91 187 -4 42 -17 110 -30 150 -19 62 -21 80 -12 115 6 23 13 85 16 137 3 68 12 115 30 166 14 39 26 77 26 84 0 23 -29 -10 -61 -71 -33 -61 -65 -97 -76 -85 -16 15 28 174 74 266 26 52 48 97 50 99 1 2 9 -2 17 -8 10 -8 16 -9 21 -1 9 14 45 13 45 -2 0 -7 10 -1 23 13 12 14 51 48 86 74 70 52 66 51 179 19 19 -5 22 -3 22 21 0 23 3 25 23 19 63 -21 84 -1 33 34 -30 21 -37 22 -78 11 -38 -11 -48 -10 -71 6 -19 12 -27 26 -27 45 l0 28 -81 -31 c-49 -19 -99 -47 -125 -70 -41 -36 -48 -39 -87 -33 -23 3 -79 25 -125 48 -70 36 -86 40 -102 30 -31 -19 -40 -14 -40 20 0 24 10 41 47 77 27 25 42 46 35 49 -32 10 -91 -26 -183 -114 -54 -52 -103 -94 -110 -94 -7 0 -28 -14 -46 -32 -29 -28 -41 -33 -98 -36 l-65 -4 0 31 c0 37 -4 37 -72 11 -50 -19 -128 -27 -128 -14 0 3 23 32 52 63 28 31 66 79 84 106 44 68 77 97 159 138 l70 35 -47 7 c-27 4 -63 4 -82 1 -19 -4 -45 -1 -60 5 -21 10 -33 9 -63 -5 -37 -16 -39 -16 -108 13 -44 19 -74 26 -80 20 -16 -16 -24 -10 -40 27 -11 28 -19 35 -32 30 -10 -4 -49 -11 -88 -16 -59 -7 -73 -6 -88 8 -12 10 -42 18 -83 20 l-65 4 -29 52 c-50 88 -46 85 -63 43 -10 -23 -26 -41 -42 -47 -74 -28 -1122 -43 -1470 -21 -998 62 -1967 243 -2867 534 -76 25 -138 43 -138 40 0 -2 11 -21 25 -41 29 -43 30 -50 9 -73 -15 -17 -15 -22 0 -65 22 -64 20 -83 -9 -110 -17 -16 -25 -34 -25 -57 0 -18 -6 -40 -12 -49 -15 -18 -66 -52 -90 -61 -23 -8 -58 28 -58 59 0 20 6 23 41 26 56 4 74 31 40 59 l-24 20 23 24 c23 24 23 25 4 46 -10 11 -60 40 -110 64 -50 24 -104 55 -121 69 l-31 26 -11 -28 c-9 -21 -9 -50 -2 -113 6 -46 11 -109 11 -140 0 -37 5 -59 13 -62 8 -3 6 -9 -8 -20 -20 -15 -20 -16 -1 -47 18 -32 18 -32 -3 -61 -27 -36 -26 -43 4 -63 35 -23 31 -34 -11 -38 -37 -3 -37 -4 -59 -78 -12 -41 -35 -102 -52 -135 -17 -33 -45 -97 -62 -142 -18 -44 -54 -118 -82 -164 -107 -178 -116 -206 -139 -418 -4 -41 -5 -91 -3 -112 9 -61 -25 -164 -70 -215 -54 -62 -58 -97 -17 -186 l33 -72 -18 -111 c-21 -128 -17 -160 27 -242 28 -52 30 -62 20 -97 -13 -49 -1 -82 33 -98 20 -9 28 -8 44 6 17 16 19 16 25 -6 3 -13 6 -38 6 -57 0 -25 -4 -32 -14 -28 -11 5 -17 -5 -22 -38 -10 -72 1 -107 51 -154 25 -23 45 -45 45 -49 0 -4 -11 -25 -25 -46 l-24 -39 28 -56 c16 -31 32 -75 36 -98 3 -23 19 -60 35 -81 16 -22 40 -69 55 -106 23 -58 25 -74 19 -135 l-6 -70 33 -20 c19 -12 60 -28 92 -37 50 -15 65 -25 119 -86 36 -41 81 -79 109 -93 32 -17 49 -32 51 -47 2 -12 19 -32 38 -45 70 -44 86 -62 119 -128 21 -44 33 -85 34 -116 1 -28 7 -51 15 -53 6 -3 12 -16 12 -30 0 -29 -17 -24 265 -71 149 -25 212 -39 218 -50 11 -20 78 -63 311 -197 105 -61 220 -132 256 -158 36 -26 83 -57 105 -68 52 -25 195 -58 315 -71 177 -19 370 -34 376 -29 3 3 6 30 7 58 l2 53 150 -7 c83 -3 166 -10 186 -15 44 -10 149 -110 164 -155 7 -20 29 -43 67 -68 31 -21 68 -53 83 -72 32 -43 75 -147 75 -184 0 -33 40 -92 93 -139 50 -44 166 -111 205 -119 30 -6 37 -2 100 64 41 44 86 79 114 92 43 19 54 20 115 9 64 -10 71 -15 124 -69 30 -32 100 -127 154 -211 58 -90 120 -175 151 -204 58 -55 75 -90 123 -242 36 -117 44 -125 141 -146 36 -8 79 -22 95 -31 17 -9 46 -16 66 -16 21 0 47 -8 62 -20 26 -21 63 -26 85 -11 11 7 11 9 -2 14 -9 4 -16 18 -16 33 0 15 -12 62 -27 105 -24 73 -25 82 -13 120 13 39 13 42 -10 59 l-24 18 32 30 c36 34 38 39 17 69 -14 20 -14 23 5 36 11 7 27 30 35 51 9 20 20 34 26 30 14 -9 48 24 65 64 10 26 18 32 32 28 33 -11 52 3 46 32 l-5 27 73 1 c46 0 84 6 104 17 74 39 164 169 143 208 -12 24 -6 35 31 54 28 15 29 14 40 -20 6 -19 16 -37 21 -40 5 -4 42 10 81 30 40 19 105 42 143 50 66 13 75 13 135 -5 36 -11 83 -20 105 -20 34 0 44 5 68 35 32 40 48 42 112 15 26 -11 49 -20 51 -20 3 0 -7 22 -23 49 -31 56 -28 66 11 51 34 -13 56 -63 56 -130 0 -37 5 -55 20 -70 25 -25 37 -25 75 0 22 14 39 18 71 13 35 -5 44 -2 58 18 23 33 20 46 -15 78 -23 22 -29 34 -24 50 10 31 33 26 74 -18 20 -21 59 -51 88 -65 29 -14 56 -34 62 -43 9 -17 11 -17 30 1 41 37 23 69 -51 91 -35 10 -44 17 -46 39 -4 34 13 56 44 56 32 0 31 17 -2 32 -20 9 -30 9 -45 0 -33 -21 -59 -15 -59 13 0 28 -12 32 -30 10 -21 -26 -78 -19 -111 14 -16 16 -29 33 -29 38 0 4 19 16 43 26 43 17 44 17 109 -7 l65 -25 58 40 c49 33 65 39 112 39 61 0 109 17 137 49 24 27 30 27 44 -4 10 -23 17 -25 72 -25 l60 0 0 30 c0 28 2 30 40 30 22 0 60 5 85 12 38 10 59 10 130 -5 80 -16 89 -21 142 -72 l56 -54 69 35 c53 27 72 42 80 64 10 29 12 30 77 30 72 0 83 -7 124 -72 10 -16 41 -40 70 -54 63 -32 113 -69 126 -93 6 -10 15 -58 20 -107 21 -172 22 -180 32 -161 13 23 46 21 54 -3 3 -11 1 -35 -6 -53 -10 -29 -9 -38 10 -75 34 -67 56 -84 96 -76 28 5 35 3 35 -9 0 -9 15 -28 34 -42 21 -16 33 -32 29 -41 -3 -8 6 -26 20 -39 13 -14 27 -38 30 -54 4 -19 14 -32 29 -36 12 -4 45 -29 72 -55 28 -26 61 -53 74 -59 17 -9 21 -18 17 -32 -6 -19 -5 -20 17 -7 22 12 28 14 55 17 41 4 62 150 52 366 -3 61 -9 87 -25 110 -12 17 -24 44 -28 60 -4 17 -45 92 -92 168 -46 76 -84 140 -84 143 0 2 9 4 20 4 17 0 9 14 -44 84 -77 101 -133 198 -156 274 -15 47 -20 54 -27 37 -4 -11 -8 -44 -8 -72 0 -29 -2 -53 -5 -53 -9 0 -30 86 -30 119 0 16 7 34 15 41 18 15 19 69 4 124 -13 49 6 194 33 248 10 21 18 51 18 67 0 16 5 33 10 36 6 4 9 19 8 33 -2 16 2 26 8 25 7 -1 20 7 29 17 10 11 22 20 27 20 19 0 106 83 112 106 4 13 11 24 16 24 14 0 60 72 60 94 0 11 9 29 20 41 12 12 37 55 58 96 30 61 46 80 87 106 76 47 105 78 105 109 0 32 41 106 83 151 17 18 52 40 79 49 50 16 85 51 69 67 -6 6 -22 -1 -42 -17 -37 -31 -74 -32 -74 -1 0 14 8 21 28 23 22 3 27 8 27 32 0 23 -6 30 -32 40 -31 11 -32 12 -11 20 12 5 27 18 33 29 12 24 31 26 61 9 18 -11 23 -10 44 15 33 37 49 100 34 129 -11 21 -12 21 -24 -9 -13 -30 -13 -30 -63 -20 -42 9 -54 8 -76 -6 -14 -9 -27 -17 -30 -17 -8 0 -28 101 -22 108 4 3 20 -2 36 -11 29 -17 29 -17 74 16 l44 34 -19 29 c-12 19 -17 38 -14 55 8 36 -26 57 -90 56 -28 0 -61 5 -74 12 -22 12 -23 14 -7 23 10 6 29 8 42 5 24 -4 23 -3 -8 24 l-33 29 23 17 23 16 -52 35 c-42 28 -49 36 -36 43 9 5 26 5 41 -1 41 -15 42 8 2 49 -39 40 -44 51 -22 51 26 0 28 20 3 31 -18 8 -33 33 -56 91 -17 43 -31 89 -31 101 0 27 43 93 70 107 26 14 38 -11 22 -43 -18 -38 -10 -103 17 -130 12 -14 21 -30 17 -35 -3 -5 12 -26 34 -47 21 -21 41 -48 44 -61 5 -19 13 -24 36 -24 35 0 38 -13 14 -64 -16 -33 -12 -79 5 -60 5 5 18 67 30 137 27 162 22 190 -48 240 -38 28 -50 43 -55 72 -4 20 -6 38 -4 40 2 2 26 -2 54 -8 56 -13 83 -31 85 -56 2 -35 89 302 89 345 0 9 -12 14 -35 14 l-35 0 0 49 c0 42 7 60 49 123 67 99 100 128 211 188 112 61 146 91 162 142 13 43 15 44 39 22 16 -14 20 -12 50 26 22 27 36 37 43 30 17 -17 24 -12 65 40 40 50 44 73 14 84 -22 9 -28 -1 -14 -18 18 -22 5 -52 -29 -66 -41 -17 -72 -7 -94 31 -10 17 -34 37 -52 45 -31 13 -34 18 -34 59 0 24 5 47 11 51 8 4 2 12 -15 21 -32 17 -33 38 -6 151 23 95 42 137 71 155 11 6 37 35 58 62 31 41 39 61 43 108 5 67 31 106 49 75 18 -33 14 -37 160 120 37 39 59 71 59 86 0 34 -34 71 -80 90 -25 10 -48 28 -58 47 -10 18 -28 32 -45 36 -33 7 -50 37 -93 162 -32 95 -76 151 -117 151 -17 0 -44 -17 -80 -50z', 'M9619 6582 c-47 -20 -94 -44 -105 -52 -25 -19 -54 -60 -54 -77 0 -24 27 -13 92 35 60 43 166 133 157 132 -2 -1 -43 -18 -90 -38z']
			),
			'location' => DB::raw('POINT(37.09024, -95.712891)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}