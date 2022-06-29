<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ME_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Montenegro',
			'code'  => 'ME',
			'type'  => null,
			'paths' => serialize(
				['M3350 10225 c-14 -8 -32 -14 -41 -15 -22 0 -56 -40 -65 -75 -9 -40 -29 -61 -62 -68 -54 -11 -179 -77 -196 -102 -16 -25 -16 -29 0 -78 9 -29 21 -60 26 -70 9 -18 11 -18 29 -1 10 9 19 29 19 43 0 14 4 33 10 41 8 12 13 12 43 -2 34 -16 35 -19 42 -87 4 -39 4 -93 0 -120 -7 -54 2 -64 61 -59 42 2 90 -26 99 -59 l7 -28 17 23 c16 22 18 22 33 5 9 -10 37 -58 64 -107 46 -86 48 -93 51 -182 2 -51 8 -105 13 -119 6 -15 10 -36 10 -48 0 -16 14 -30 49 -49 43 -23 49 -32 54 -65 3 -21 17 -71 31 -112 39 -110 38 -111 -39 -111 -45 0 -78 -6 -103 -19 -35 -18 -39 -25 -66 -118 -16 -54 -33 -117 -39 -140 -12 -51 -45 -63 -100 -37 -32 15 -35 20 -30 50 9 55 -12 91 -66 110 -56 21 -91 51 -91 78 0 12 12 46 26 76 30 64 27 130 -7 130 -10 0 -51 34 -91 76 l-73 76 -95 -4 c-76 -3 -109 -9 -165 -32 -38 -16 -71 -30 -73 -31 -1 -1 5 -21 13 -45 8 -23 15 -44 15 -45 0 -8 -264 -151 -425 -230 -50 -25 -100 -63 -175 -133 l-104 -99 57 -65 c31 -36 57 -68 57 -72 0 -3 -48 -42 -107 -86 l-107 -79 -23 -98 c-12 -54 -22 -111 -23 -126 0 -15 -9 -46 -20 -68 l-21 -39 20 -243 c11 -133 23 -280 27 -327 l6 -85 -70 -22 c-63 -21 -90 -23 -264 -23 l-194 0 -66 -55 c-51 -44 -67 -63 -71 -90 -3 -19 -19 -51 -35 -72 -39 -51 -74 -183 -82 -308 -6 -98 -5 -102 26 -165 17 -36 34 -83 38 -105 4 -22 9 -52 12 -67 4 -21 0 -29 -25 -44 -25 -15 -29 -22 -24 -45 9 -45 -4 -79 -29 -79 -12 0 -35 -12 -50 -27 -22 -21 -28 -36 -28 -71 0 -24 5 -52 10 -63 9 -15 6 -26 -15 -53 -24 -32 -25 -36 -13 -85 9 -40 9 -60 0 -83 -10 -26 -8 -38 8 -76 11 -24 20 -57 20 -72 0 -48 28 -99 70 -125 24 -15 40 -33 40 -44 0 -20 44 -61 65 -61 6 0 20 -10 31 -21 29 -32 99 -59 156 -59 47 0 50 -1 44 -22 -3 -13 -6 -40 -6 -60 0 -29 -8 -47 -35 -77 -24 -27 -35 -48 -35 -70 0 -34 34 -111 50 -111 15 0 57 -63 65 -97 6 -31 5 -33 -20 -33 -42 0 -171 -76 -184 -108 -15 -35 9 -98 64 -169 41 -53 48 -108 16 -118 -23 -7 -71 4 -71 16 0 18 -65 49 -102 49 -32 0 -48 -11 -133 -87 l-96 -88 5 -47 c6 -59 -15 -164 -43 -215 -12 -21 -32 -73 -45 -115 l-24 -77 73 -48 c61 -40 83 -63 136 -142 71 -103 167 -189 188 -168 18 18 13 33 -22 59 -18 14 -39 37 -47 52 -12 24 -12 31 5 62 15 27 22 33 39 28 12 -4 27 -15 34 -25 16 -24 93 -35 132 -19 27 11 33 9 93 -34 36 -25 74 -46 85 -46 12 0 24 -5 27 -10 7 -11 49 -7 121 11 27 7 50 22 63 40 12 16 30 29 41 29 10 0 22 5 25 10 4 6 24 22 46 36 29 18 39 31 39 50 0 13 9 42 20 63 l19 38 -25 12 c-14 6 -36 11 -49 11 -22 0 -55 23 -55 39 0 16 68 71 88 71 14 0 27 9 34 25 6 14 19 25 30 25 16 0 18 -8 18 -63 0 -80 15 -101 81 -117 43 -10 56 -10 87 3 20 9 61 18 90 22 57 6 73 -6 53 -42 -7 -13 -7 -43 0 -93 8 -53 7 -80 -1 -101 -10 -23 -9 -37 4 -75 18 -53 20 -74 7 -74 -4 0 -19 37 -31 81 -37 130 -110 205 -215 224 -22 4 -48 15 -58 24 -17 15 -20 14 -33 -4 -8 -10 -14 -27 -14 -37 0 -10 -7 -29 -15 -41 -12 -20 -13 -29 0 -69 7 -25 11 -48 8 -51 -2 -3 23 -48 56 -101 60 -94 70 -116 51 -116 -5 0 -12 -16 -16 -35 -3 -19 -8 -35 -10 -35 -3 0 -22 11 -44 25 -22 14 -51 25 -65 25 -35 0 -141 42 -200 79 -55 35 -103 51 -153 51 -18 0 -46 10 -62 22 -28 20 -33 21 -85 8 -61 -15 -72 -23 -85 -68 -7 -27 -6 -31 13 -34 13 -2 23 -13 27 -28 3 -15 19 -32 40 -42 34 -17 48 -47 28 -59 -7 -4 3 -19 26 -39 20 -18 36 -36 36 -41 0 -31 86 -82 159 -94 37 -6 41 -5 41 14 0 30 37 27 52 -4 14 -32 19 -32 47 6 20 27 22 35 12 57 -7 14 -8 28 -4 33 4 4 36 9 70 11 l61 3 13 -38 c7 -21 22 -46 34 -56 40 -30 45 -92 7 -72 -28 14 -38 3 -34 -39 4 -35 7 -39 35 -42 26 -2 34 -9 43 -36 5 -17 15 -37 22 -44 9 -9 7 -14 -5 -23 -14 -11 -14 -15 1 -47 9 -19 30 -48 46 -63 17 -16 30 -35 30 -42 0 -7 9 -13 19 -13 11 0 32 -17 48 -37 15 -21 42 -52 58 -68 17 -17 42 -46 57 -64 36 -43 62 -39 66 12 4 43 13 47 36 12 21 -31 34 -32 46 -1 13 35 27 40 57 21 21 -14 39 -16 95 -10 39 3 74 2 81 -3 7 -5 32 -12 56 -15 28 -3 53 -14 69 -30 27 -27 52 -116 52 -185 0 -29 7 -53 20 -69 11 -14 20 -35 20 -45 0 -26 84 -105 137 -128 23 -10 49 -30 59 -44 9 -14 24 -26 34 -26 26 0 45 -28 41 -62 -2 -25 6 -38 51 -80 29 -27 66 -56 81 -64 25 -14 31 -14 52 0 22 14 23 14 29 -16 3 -17 6 -40 6 -52 0 -12 6 -31 14 -41 12 -17 17 -18 41 -7 19 9 30 10 34 3 8 -12 63 -15 111 -6 30 5 37 3 49 -17 8 -13 17 -36 21 -53 4 -20 18 -38 43 -54 50 -33 82 -99 66 -135 -9 -19 -20 -26 -41 -26 -15 0 -28 -5 -28 -10 0 -19 145 -157 187 -178 55 -29 113 -100 113 -140 0 -17 6 -35 13 -39 21 -13 26 -37 11 -58 -10 -14 -11 -22 -2 -32 9 -11 9 -23 -1 -49 -8 -22 -10 -53 -6 -84 5 -40 4 -50 -11 -58 -29 -16 -11 -73 36 -111 47 -37 49 -48 14 -57 l-26 -7 49 -49 c26 -27 77 -66 113 -86 36 -20 101 -60 145 -89 47 -31 82 -48 86 -42 4 7 60 -7 159 -38 l152 -48 115 -112 c136 -134 163 -144 163 -64 0 27 7 67 15 91 13 38 13 44 -3 65 -9 13 -34 32 -56 42 -100 45 -112 82 -35 109 28 11 54 25 57 32 8 21 -20 63 -60 89 -45 31 -51 45 -37 93 11 35 16 39 53 45 87 14 116 25 116 45 0 11 -9 28 -21 39 -19 18 -20 23 -9 56 13 38 11 77 -10 200 -18 105 2 294 38 360 12 22 22 42 22 45 0 24 -151 75 -168 58 -10 -10 -35 6 -136 92 -53 45 -80 60 -109 60 -17 0 -28 10 -40 35 -12 25 -23 35 -39 35 -13 0 -28 8 -35 19 -6 10 -25 21 -41 24 -18 4 -33 14 -37 26 -3 11 -22 35 -41 53 -20 18 -42 45 -50 60 -8 16 -21 28 -28 28 -17 0 -39 33 -56 85 -7 22 -18 43 -25 47 -7 5 -18 30 -25 57 -6 27 -20 57 -30 66 -18 16 -18 17 3 38 l21 21 -30 9 c-16 6 -41 18 -56 28 -14 11 -35 19 -45 19 -11 0 -28 9 -38 20 -20 22 -65 26 -97 9 -28 -15 -108 -3 -108 17 0 8 7 17 15 20 22 9 18 29 -9 43 -14 8 -28 29 -36 53 -10 35 -9 47 6 80 16 35 16 39 1 56 -10 10 -17 30 -17 43 0 17 -20 45 -65 89 -55 54 -62 66 -47 71 33 12 72 -2 88 -33 8 -16 24 -32 35 -37 12 -4 40 -38 63 -77 28 -47 48 -70 63 -72 19 -3 21 -8 16 -33 -10 -49 29 -38 71 21 35 49 63 59 53 19 -3 -12 0 -19 9 -19 8 0 24 -21 35 -47 l21 -48 19 38 c17 32 24 37 56 37 20 0 45 8 55 17 17 15 21 15 54 0 19 -10 45 -15 58 -11 13 3 27 1 30 -5 4 -6 26 -11 49 -11 30 0 57 -10 96 -35 50 -32 58 -34 111 -28 58 6 102 -8 129 -41 17 -21 31 -20 31 0 0 9 16 39 35 65 40 57 40 55 19 63 -9 4 -30 -6 -52 -24 l-37 -30 -6 32 c-3 18 -9 45 -13 59 -5 19 -2 31 10 44 17 16 18 16 31 -1 7 -10 11 -24 9 -30 -3 -7 12 -19 35 -28 36 -14 42 -14 74 1 23 11 35 24 35 37 1 12 7 32 15 46 8 14 14 42 15 63 0 34 2 37 28 37 25 0 32 8 56 59 23 47 36 62 67 75 43 19 45 27 27 105 -10 44 -9 53 6 70 9 10 22 36 27 57 14 50 83 122 125 130 67 12 135 104 189 256 13 37 26 53 66 78 36 24 49 38 49 56 0 14 10 30 24 39 17 11 27 30 31 58 5 29 26 67 66 121 52 71 59 85 59 127 l0 47 85 48 c46 26 98 61 114 78 33 34 36 52 25 167 -8 84 4 109 117 249 46 58 91 115 100 127 10 14 28 23 54 25 35 3 41 8 64 52 17 31 47 66 84 94 51 40 60 44 82 34 13 -6 32 -26 41 -44 9 -18 32 -49 51 -69 34 -36 34 -37 22 -77 -12 -40 -11 -42 45 -134 31 -52 56 -100 56 -109 0 -10 -17 -20 -50 -28 -39 -10 -51 -18 -56 -37 -4 -13 -1 -31 6 -39 9 -11 9 -22 1 -46 -21 -59 -13 -149 19 -239 40 -108 44 -116 81 -137 17 -10 44 -40 60 -66 25 -41 41 -53 105 -83 41 -19 80 -34 87 -34 7 0 31 23 55 50 40 46 47 50 87 50 38 0 47 4 62 28 9 15 18 29 20 31 1 2 20 -8 42 -22 37 -25 40 -25 55 -8 9 10 16 26 16 37 0 41 12 64 33 64 12 0 36 14 54 32 31 30 34 31 70 20 21 -6 89 -16 150 -22 154 -14 149 -18 169 132 l6 47 86 28 c73 24 87 32 96 56 9 24 15 28 38 23 41 -8 64 32 83 145 28 161 45 232 75 304 17 41 31 92 32 124 l3 53 -50 29 c-40 22 -72 31 -150 39 -125 14 -153 23 -239 73 -88 52 -130 107 -121 157 12 69 56 136 156 238 114 115 130 122 292 122 l91 0 81 -54 80 -55 191 -6 191 -7 12 32 c15 45 14 84 -4 127 -20 48 -19 106 4 151 18 35 26 40 112 67 55 18 111 43 137 63 l43 32 73 -19 74 -18 28 22 c20 15 56 26 114 35 47 7 88 14 91 16 4 2 0 31 -8 64 -14 52 -18 60 -39 60 -33 0 -64 52 -64 110 -1 58 -10 72 -100 157 -41 39 -95 98 -120 132 -41 55 -52 63 -122 90 -42 17 -96 35 -120 41 -24 7 -128 47 -233 90 -187 77 -191 78 -250 70 -34 -4 -74 -14 -90 -22 -27 -14 -36 -14 -92 2 -71 19 -124 56 -157 108 -22 35 -23 42 -15 122 5 47 11 90 13 96 3 9 -23 64 -39 82 -2 2 -35 12 -75 22 -91 23 -173 82 -191 137 -6 21 -33 61 -59 89 -35 39 -54 74 -78 141 -38 105 -71 143 -123 143 -30 -1 -40 -8 -86 -69 -48 -63 -55 -68 -105 -79 -124 -26 -111 -28 -137 25 -57 120 -104 159 -291 243 -224 101 -444 170 -545 170 -24 0 -54 4 -67 9 -29 11 -98 99 -166 211 -53 87 -97 132 -167 168 -33 16 -43 29 -56 69 -9 26 -60 111 -114 188 -53 77 -110 165 -125 195 -21 41 -42 65 -83 93 -31 21 -68 55 -84 75 -15 21 -70 81 -122 135 -68 70 -101 97 -118 97 -33 0 -157 73 -213 125 -61 57 -128 101 -373 244 -155 90 -222 135 -258 174 l-50 52 4 108 c3 100 5 109 30 135 27 28 35 56 18 66 -23 14 -156 38 -255 46 l-110 8 -43 -29 c-60 -42 -105 -59 -153 -59 -22 0 -51 -6 -63 -14 -12 -8 -42 -17 -67 -21 -37 -5 -49 -13 -68 -41 -13 -20 -30 -34 -42 -34 -18 0 -20 7 -20 58 0 50 -5 63 -35 102 -20 25 -45 60 -56 78 -12 17 -29 32 -39 32 -10 0 -23 7 -30 15 -15 18 -18 18 -50 0z']
			),
			'location' => DB::raw('POINT(42.708678, 19.37439)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}