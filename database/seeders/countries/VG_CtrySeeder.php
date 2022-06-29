<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VG_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'British Virgin Islands',
			'code'  => 'VG',
			'type'  => null,
			'paths' => serialize(
				['M9436 7509 c-29 -34 -31 -42 -16 -70 17 -32 55 -24 79 16 14 24 30 37 51 42 l31 6 -31 18 c-46 28 -84 24 -114 -12z', 'M8795 7273 c-23 -3 -34 -11 -42 -33 -12 -32 -46 -50 -94 -50 -39 0 -38 -27 2 -59 34 -27 72 -30 97 -9 9 8 25 18 35 21 10 4 17 17 17 34 0 15 9 39 20 53 22 29 26 51 8 48 -7 0 -27 -3 -43 -5z', 'M9151 7211 c-10 -18 -7 -22 19 -36 35 -18 90 -108 90 -148 l0 -28 63 7 c65 7 127 28 127 43 0 15 -36 40 -80 56 -56 20 -68 31 -87 77 -13 33 -20 38 -47 38 -17 0 -41 3 -53 6 -15 4 -24 0 -32 -15z', 'M9443 7173 c-28 -19 -29 -29 -4 -43 16 -8 26 -5 50 16 17 14 31 30 31 35 0 15 -53 9 -77 -8z', 'M8642 7034 c-26 -11 -42 -12 -72 -4 -34 9 -46 8 -81 -10 -27 -14 -44 -18 -52 -11 -10 7 -57 8 -109 2 -14 -2 -8 -28 10 -43 9 -9 31 -20 47 -25 25 -8 30 -15 28 -39 -3 -52 -15 -88 -44 -125 -33 -43 -34 -49 -13 -90 10 -20 12 -34 6 -42 -6 -7 -13 -41 -17 -77 -6 -54 -4 -68 9 -79 20 -17 20 -48 2 -92 -13 -30 -12 -37 1 -60 16 -26 15 -29 -16 -67 -41 -53 -95 -85 -151 -92 -39 -4 -48 -2 -66 19 l-20 23 -19 -28 c-10 -16 -24 -33 -32 -37 -7 -4 -13 -16 -13 -25 0 -9 -9 -23 -21 -30 -26 -16 -83 -6 -75 13 7 18 -20 40 -29 25 -4 -7 -19 -9 -36 -5 -24 5 -29 3 -29 -12 0 -10 -15 -26 -37 -38 -50 -27 -51 -40 -6 -63 59 -31 85 -64 81 -104 -2 -27 0 -32 16 -30 11 2 15 -1 11 -7 -3 -6 -13 -11 -20 -11 -9 0 -19 -18 -26 -45 -7 -27 -18 -47 -29 -50 -10 -3 -30 -15 -44 -26 -21 -17 -26 -29 -26 -65 0 -25 -5 -65 -11 -89 -8 -32 -8 -48 1 -64 9 -18 7 -28 -9 -55 -47 -76 -11 -147 58 -112 17 9 31 21 31 27 0 6 18 29 41 51 33 32 47 39 68 35 143 -28 162 -29 180 -13 10 9 25 16 34 16 21 0 32 19 18 33 -6 6 -11 18 -11 27 0 8 -16 28 -35 43 -54 43 -68 78 -60 150 4 34 14 72 23 85 9 14 20 68 26 135 l11 112 40 13 c22 7 50 24 63 37 17 18 33 25 62 25 31 0 43 5 57 27 10 14 32 41 49 60 31 32 35 33 106 33 43 0 79 -5 86 -12 9 -9 16 -7 32 7 18 16 24 17 59 5 30 -10 43 -10 61 0 12 6 46 10 77 8 l55 -3 14 40 c19 54 18 65 -6 65 -11 0 -20 -6 -20 -12 0 -8 -7 -5 -15 6 -19 25 -19 70 -1 85 9 8 12 24 9 50 -4 30 0 47 21 78 25 37 32 41 83 47 51 6 60 4 96 -21 22 -15 44 -38 50 -50 16 -35 51 -29 83 13 39 50 71 65 109 50 30 -13 77 -5 100 15 5 5 30 9 56 9 31 0 54 6 70 19 23 19 23 20 6 33 -24 18 -15 38 34 78 31 24 55 34 107 41 70 11 137 5 159 -12 9 -8 29 -2 74 20 34 17 70 31 79 31 38 0 88 31 113 69 18 26 35 41 48 41 12 0 23 8 26 18 2 10 18 23 34 29 16 6 29 16 29 22 0 25 -145 -1 -160 -29 -13 -24 -70 -32 -92 -13 -12 10 -29 13 -55 10 -90 -13 -121 -25 -183 -75 -43 -35 -73 -52 -92 -52 -25 0 -27 2 -18 25 5 14 22 36 37 49 25 22 26 26 15 51 -10 22 -17 26 -35 20 -12 -4 -48 -9 -79 -12 -77 -7 -92 -25 -93 -108 0 -57 2 -65 25 -79 l25 -15 -35 -1 c-19 -1 -72 -5 -117 -9 -68 -7 -86 -12 -101 -31 -18 -22 -21 -22 -70 -10 -44 12 -57 11 -103 -3 -106 -35 -126 -22 -93 58 22 56 23 61 7 73 -9 6 -23 12 -32 12 -8 0 -22 7 -32 16 -16 14 -21 14 -59 -6 -37 -19 -44 -20 -58 -7 -10 8 -25 17 -35 20 -10 4 -16 11 -13 16 3 5 -1 14 -9 21 -8 7 -15 23 -15 36 0 17 -6 24 -19 24 -30 0 -51 11 -51 26 0 17 -15 17 -58 -2z', 'M5999 6851 c-20 -9 -44 -23 -53 -30 -10 -9 -28 -11 -50 -7 -30 6 -34 4 -40 -20 -5 -18 -2 -32 10 -45 9 -11 14 -19 10 -19 -3 0 3 -18 14 -40 21 -41 20 -60 -4 -60 -14 0 -38 -82 -30 -103 3 -8 23 -24 44 -36 22 -12 40 -26 40 -31 0 -5 2 -15 5 -22 4 -9 -7 -21 -29 -33 -44 -24 -37 -45 15 -45 47 0 48 -7 12 -82 -27 -55 -29 -57 -62 -51 -20 3 -36 1 -40 -6 -9 -13 17 -151 31 -168 14 -17 43 -16 77 2 20 10 31 25 35 50 6 32 10 35 40 35 47 0 78 36 84 98 4 43 1 51 -19 66 -13 9 -34 16 -47 16 -22 0 -23 3 -20 72 2 64 6 77 35 115 18 24 33 55 33 68 0 14 7 42 15 62 19 45 20 43 -11 43 -17 0 -28 6 -31 19 -2 10 -16 24 -29 30 -28 12 -33 57 -8 75 9 7 14 22 12 37 -3 26 -3 26 -39 10z', 'M7421 6832 c-19 -13 3 -52 29 -52 12 0 20 -7 20 -16 0 -17 1 -17 47 11 42 25 42 41 1 48 -18 3 -44 8 -58 12 -14 3 -31 1 -39 -3z', 'M4992 6715 c-40 -40 -35 -55 18 -55 36 0 40 -2 45 -32 3 -18 7 -51 8 -73 2 -35 -1 -40 -20 -40 -27 -1 -65 -47 -57 -70 10 -24 43 -34 76 -21 39 15 82 -2 86 -34 5 -55 25 -106 50 -133 16 -16 27 -40 27 -55 0 -21 4 -26 20 -24 55 7 63 12 69 43 8 41 44 99 61 99 7 0 18 7 25 15 7 8 20 15 30 15 26 0 55 37 42 53 -6 7 -12 32 -14 56 -4 55 -27 74 -57 47 -19 -18 -21 -17 -45 9 -14 15 -28 36 -31 46 -9 28 -37 23 -70 -11 -48 -51 -72 -40 -122 55 -23 44 -40 85 -38 92 4 13 -40 53 -59 53 -6 0 -26 -16 -44 -35z', 'M7427 6613 c-4 -3 -7 -14 -7 -23 0 -10 -9 -29 -20 -43 -33 -42 -23 -51 26 -22 45 27 48 27 81 11 41 -20 97 -21 112 -2 6 7 8 26 5 44 -6 31 -7 31 -33 16 -24 -14 -30 -14 -79 5 -56 22 -74 25 -85 14z', 'M7172 6598 c-16 -16 -15 -48 2 -48 7 0 27 5 44 11 27 9 30 14 22 30 -12 21 -50 25 -68 7z', 'M6369 6328 c-27 -51 -119 -59 -164 -14 -12 12 -27 20 -33 18 -17 -5 -25 -67 -12 -92 12 -23 18 -23 92 -5 16 4 49 0 82 -10 102 -32 226 0 272 70 24 36 6 53 -30 30 -23 -15 -31 -16 -54 -5 -15 8 -53 16 -85 20 -50 5 -60 3 -68 -12z', 'M2163 6121 c-10 -10 -28 -22 -40 -25 -23 -7 -32 -40 -14 -50 5 -3 7 -15 4 -26 -4 -14 2 -22 20 -29 39 -15 119 -16 145 -2 13 7 45 11 70 9 36 -2 47 0 47 12 0 8 -13 17 -31 21 -50 10 -148 69 -135 82 18 18 12 27 -19 27 -16 0 -37 -8 -47 -19z', 'M1488 6111 c-31 -13 -38 -21 -38 -44 0 -36 -16 -67 -35 -67 -8 0 -15 -4 -15 -10 0 -27 -124 -59 -159 -41 -16 9 -22 8 -31 -8 -5 -11 -10 -30 -10 -42 0 -21 -2 -22 -81 -16 -84 5 -139 -5 -139 -28 0 -44 89 -96 164 -96 22 0 54 0 69 0 16 0 43 9 61 21 19 11 47 20 64 20 41 0 102 -30 102 -49 1 -26 25 -51 58 -57 36 -7 52 14 52 68 0 39 16 63 47 73 18 5 25 -1 42 -33 31 -60 118 -134 183 -155 72 -23 119 -22 162 4 42 24 43 32 15 67 l-21 27 28 3 c19 3 45 -8 87 -38 78 -53 102 -50 111 16 3 26 6 61 6 79 0 31 -2 33 -46 38 -35 4 -52 12 -69 33 -19 24 -21 30 -8 39 13 10 12 16 -7 48 -12 20 -27 37 -33 37 -7 0 -5 5 3 10 19 12 9 21 -60 50 -46 19 -67 22 -134 18 -68 -4 -88 -1 -131 17 -67 30 -186 38 -237 16z', 'M5758 6118 c-36 -28 5 -128 52 -128 21 0 22 57 3 78 -7 7 -13 24 -13 38 0 26 -17 31 -42 12z', 'M5335 6090 c-3 -5 -28 -10 -55 -10 -32 0 -52 -5 -57 -14 -5 -8 -26 -21 -48 -28 -32 -11 -40 -18 -40 -38 0 -20 -6 -26 -27 -28 -15 -2 -33 -13 -41 -26 -19 -29 -89 -60 -119 -53 -13 4 -33 15 -44 26 -21 19 -22 19 -33 -5 -6 -14 -11 -31 -11 -39 0 -29 -28 -43 -67 -34 -21 5 -57 9 -79 9 -46 0 -69 19 -61 50 4 16 -1 22 -26 28 -27 7 -33 14 -37 42 -6 42 -35 53 -45 18 -4 -13 -13 -38 -21 -56 -12 -26 -18 -30 -33 -23 -12 7 -26 5 -45 -5 -35 -18 -64 -18 -97 0 -16 8 -32 10 -40 5 -25 -16 -85 -10 -112 11 -21 17 -29 18 -57 9 -36 -13 -148 -5 -164 11 -6 6 -25 10 -43 10 -21 0 -32 5 -30 12 2 14 -70 36 -120 37 -31 1 -33 -1 -33 -33 0 -41 -10 -46 -98 -46 -78 0 -106 -12 -74 -29 11 -6 30 -11 41 -11 44 0 67 -82 35 -128 -18 -27 -45 -28 -81 -4 -15 9 -54 29 -87 44 l-61 27 -3 -27 c-8 -67 -23 -102 -51 -117 -40 -20 -52 -99 -24 -147 17 -30 25 -34 73 -38 l55 -5 -3 -35 c-3 -47 -21 -90 -38 -90 -8 0 -34 -16 -60 -35 -25 -19 -58 -38 -72 -41 -107 -23 -124 -40 -111 -107 8 -45 6 -52 -31 -117 -40 -71 -139 -179 -188 -204 -34 -17 -131 -36 -188 -36 -24 0 -65 8 -91 18 -76 29 -107 16 -108 -46 l0 -37 -46 -1 c-33 -1 -53 -7 -69 -22 -26 -24 -144 -72 -178 -72 -12 0 -22 -6 -22 -14 0 -10 19 -15 68 -19 37 -3 87 -12 113 -20 47 -15 71 -11 122 25 16 11 21 9 40 -13 12 -15 29 -29 37 -32 10 -4 8 -6 -7 -6 -12 -1 -25 -5 -28 -11 -3 -5 -17 -10 -29 -10 -13 0 -29 -6 -36 -14 -6 -8 -26 -16 -43 -18 -53 -5 -45 -31 17 -52 71 -24 206 -12 206 18 0 8 7 19 15 26 17 14 20 30 6 30 -6 0 -26 10 -47 22 l-36 21 58 18 c93 28 205 49 257 49 53 0 69 -12 149 -109 35 -43 38 -45 100 -49 85 -5 130 7 146 42 15 29 37 41 93 51 37 5 52 26 61 79 5 33 32 41 86 27 38 -9 64 -10 109 -2 66 13 101 34 123 77 33 63 64 114 69 114 4 0 5 -20 3 -45 -3 -38 -1 -45 14 -45 27 1 62 29 47 38 -15 10 -19 48 -9 94 7 33 5 40 -15 57 -23 19 -23 19 -6 55 15 32 20 35 37 26 15 -8 19 -17 14 -35 -8 -31 33 -60 74 -52 15 3 55 1 90 -5 58 -9 66 -8 110 14 31 16 54 37 67 61 11 20 28 40 38 43 10 3 17 15 17 30 0 15 -7 27 -17 31 -10 3 -37 14 -60 25 -38 18 -43 24 -43 54 0 22 6 37 19 43 39 21 36 81 -5 81 -31 0 -35 9 -19 48 16 37 55 46 55 12 0 -14 7 -20 24 -20 25 0 36 16 36 53 0 15 7 8 23 -23 16 -33 29 -46 47 -48 43 -6 90 -49 90 -82 0 -17 9 -38 22 -50 25 -23 39 -25 55 -9 15 15 47 3 40 -15 -9 -23 60 -106 88 -106 13 0 27 -4 30 -10 15 -24 95 -3 95 25 0 21 29 45 56 45 20 0 24 -5 24 -30 0 -18 6 -33 15 -37 22 -8 94 22 134 57 29 25 32 30 18 36 -10 3 -24 1 -32 -6 -17 -14 -45 -7 -45 11 0 7 3 9 6 6 15 -15 43 15 49 53 4 22 10 40 14 40 17 0 76 -24 82 -33 4 -6 17 -6 35 0 27 9 29 14 32 66 2 31 7 57 12 57 6 0 10 -6 10 -14 0 -17 30 -30 30 -13 1 15 46 67 59 67 15 0 -10 56 -31 69 -13 8 -24 8 -38 1 -15 -8 -21 -6 -30 9 -28 54 0 135 52 146 80 16 134 17 147 1 8 -9 24 -16 37 -16 26 0 44 31 44 75 0 13 5 27 10 30 15 9 82 -16 102 -37 9 -10 22 -18 30 -18 7 0 26 -13 41 -30 32 -33 77 -41 77 -13 0 9 7 24 16 34 14 15 18 16 42 3 15 -8 47 -14 73 -14 53 0 114 -35 171 -98 31 -34 38 -51 44 -101 3 -34 11 -61 17 -61 5 0 29 17 53 38 24 20 58 49 76 64 32 26 33 26 20 70 -8 23 -19 61 -25 84 -15 52 -26 65 -92 109 -30 19 -56 44 -60 54 -5 16 -65 61 -81 61 -2 0 -4 -13 -4 -29 0 -30 -31 -64 -70 -76 -27 -9 -71 11 -64 30 3 8 4 22 1 29 -5 13 -10 13 -38 -1 -26 -13 -37 -14 -70 -3 -34 12 -41 11 -58 -4 -25 -23 -118 -19 -112 4 3 8 5 29 5 45 1 29 0 30 -49 30 -50 0 -50 0 -60 -39 -7 -31 -6 -40 7 -50 13 -10 14 -16 4 -41 l-13 -30 -12 37 c-7 20 -20 47 -31 60 -12 15 -20 50 -25 100 -8 86 -25 108 -85 108 -18 0 -33 6 -36 15 -7 17 -20 20 -29 5z', 'M2442 6038 c-16 -16 -15 -33 2 -47 21 -18 41 11 26 38 -13 25 -12 25 -28 9z', 'M40 6005 c0 -8 -9 -19 -20 -25 -19 -10 -19 -11 1 -45 17 -28 20 -45 15 -82 -9 -72 7 -97 66 -98 50 -1 98 29 98 60 0 24 -66 134 -103 173 -33 34 -57 42 -57 17z', 'M2410 5656 c0 -11 10 -16 31 -16 38 0 35 24 -4 28 -19 2 -27 -1 -27 -12z', 'M5400 5439 c0 -4 6 -20 14 -36 8 -15 18 -41 23 -58 6 -23 15 -31 37 -33 56 -7 60 4 16 59 -22 28 -40 54 -40 59 0 4 -11 10 -25 12 -14 3 -25 2 -25 -3z', 'M7606 5243 c-25 -23 -27 -28 -13 -37 12 -10 13 -15 2 -29 -15 -20 -8 -60 9 -54 6 2 24 27 39 55 23 42 26 55 17 72 -14 26 -19 25 -54 -7z', 'M7515 4911 c-3 -5 -1 -12 5 -16 5 -3 10 1 10 9 0 18 -6 21 -15 7z', 'M7487 4813 c-10 -10 -8 -43 2 -43 15 0 42 31 36 41 -7 11 -29 12 -38 2z', 'M2070 4685 c-7 -9 -30 -15 -54 -15 -22 -1 -52 -7 -66 -15 -30 -17 -86 -19 -96 -4 -10 16 -65 3 -146 -36 -40 -19 -78 -35 -84 -35 -16 0 -55 -50 -49 -60 10 -16 65 -22 81 -9 18 15 168 7 189 -11 24 -20 52 3 47 39 -3 26 0 31 22 37 14 3 30 12 37 20 6 8 25 14 41 14 17 0 44 7 61 15 18 8 47 15 66 17 l33 3 -22 28 c-24 30 -42 34 -60 12z', 'M7195 4680 c-16 -4 -53 -8 -81 -9 -42 -1 -55 -6 -76 -30 -15 -16 -56 -40 -97 -56 -65 -25 -89 -40 -79 -51 5 -5 132 21 147 30 12 8 40 -19 63 -62 12 -23 24 -32 42 -32 14 0 37 -5 51 -12 22 -10 27 -9 40 8 22 29 18 41 -22 66 -21 13 -39 31 -39 41 -2 14 6 17 42 17 30 0 46 5 50 15 3 8 14 17 25 20 24 8 24 27 1 48 -20 18 -22 18 -67 7z', 'M6372 4548 c1 -37 -4 -76 -12 -96 -14 -32 -14 -33 23 -67 21 -19 42 -35 46 -35 5 0 11 -31 15 -69 8 -75 23 -99 52 -83 14 8 31 3 69 -19 58 -33 77 -36 95 -14 17 20 5 96 -20 122 -16 18 -23 19 -58 10 -29 -8 -47 -7 -69 2 -28 11 -30 15 -29 66 1 50 3 55 27 60 15 3 31 16 36 28 9 19 5 24 -26 39 -84 41 -96 53 -93 86 3 30 1 32 -28 32 l-31 0 3 -62z', 'M2247 4501 c-49 -23 -34 -36 53 -44 78 -7 94 0 84 36 -6 25 -10 27 -53 26 -25 0 -63 -9 -84 -18z', 'M6058 4299 c-22 -24 -35 -29 -73 -29 l-46 0 7 -37 c9 -52 15 -56 63 -42 38 11 44 10 69 -8 17 -13 30 -35 36 -62 7 -34 13 -41 32 -41 25 0 44 26 44 59 0 17 -6 21 -30 21 -27 0 -30 3 -30 30 0 49 20 79 56 86 30 5 51 34 36 48 -3 3 -35 5 -71 5 -59 -1 -69 -4 -93 -30z', 'M1571 4286 c-8 -9 -8 -21 -1 -40 11 -29 9 -28 95 -47 33 -7 63 -18 67 -23 13 -18 9 -65 -8 -98 -12 -23 -13 -32 -4 -38 16 -10 -2 -44 -36 -66 -23 -16 -26 -16 -49 6 -27 26 -21 29 -120 -50 -35 -28 -60 -40 -83 -40 -40 0 -72 15 -72 34 0 13 -29 26 -58 26 -8 0 -30 -18 -49 -40 -37 -41 -72 -51 -111 -31 -87 44 -96 40 -87 -39 6 -53 5 -59 -15 -70 -31 -17 -94 -3 -121 26 -17 19 -20 27 -11 36 7 7 12 25 12 40 0 21 -5 28 -20 28 -26 0 -43 -35 -36 -74 5 -25 2 -37 -14 -51 -25 -23 -25 -31 0 -52 31 -27 25 -51 -15 -62 -19 -5 -49 -21 -66 -35 -17 -14 -37 -26 -46 -26 -19 0 -93 -41 -93 -51 0 -29 22 -59 43 -59 28 0 70 -28 61 -41 -3 -6 -12 -3 -19 8 -13 17 -14 16 -24 -10 -6 -16 -11 -33 -11 -39 0 -6 -8 -4 -18 5 -25 23 -29 22 -35 -10 -14 -72 -15 -70 22 -61 14 3 18 -8 38 -92 3 -14 12 -35 20 -46 13 -21 14 -21 51 13 28 26 44 33 67 31 26 -3 30 -8 33 -36 3 -30 0 -34 -42 -52 -49 -21 -57 -37 -28 -63 27 -24 52 -21 97 14 40 30 55 26 36 -10 -16 -30 -13 -49 9 -56 13 -4 20 -15 20 -31 0 -28 24 -32 58 -8 l22 15 -21 28 c-35 47 -3 80 67 66 33 -6 34 -5 34 25 0 17 5 40 10 51 13 23 55 25 64 3 4 -10 13 -13 25 -9 13 4 25 -2 40 -21 24 -31 26 -68 6 -104 -12 -22 -11 -27 7 -47 32 -34 51 -30 45 10 -2 17 0 43 4 55 7 18 4 31 -11 52 -23 32 -25 58 -6 83 28 36 73 18 78 -33 2 -26 10 -38 37 -54 53 -31 101 -9 169 77 72 89 81 89 192 -13 48 -44 94 -80 102 -80 7 0 21 -9 31 -20 10 -12 29 -20 46 -20 26 0 31 4 37 35 6 36 30 48 40 20 4 -8 13 -15 21 -15 12 0 14 7 10 30 -4 16 -2 32 4 35 17 11 38 -15 42 -53 l3 -37 14 33 c10 23 21 32 37 32 31 0 39 -3 34 -15 -3 -5 -6 -30 -7 -55 -1 -24 -7 -46 -13 -48 -7 -2 -5 -14 6 -34 17 -28 17 -30 1 -42 -13 -10 -15 -15 -6 -24 22 -22 46 -14 53 18 4 16 19 40 33 52 15 13 35 35 45 51 15 24 20 26 39 16 l22 -12 -23 -9 c-16 -6 -22 -14 -18 -27 7 -27 -10 -52 -19 -28 -10 27 -24 20 -24 -13 0 -37 39 -62 65 -40 13 11 15 8 15 -19 0 -17 3 -31 6 -31 4 0 22 14 41 30 33 30 60 36 96 21 17 -6 17 -8 -2 -25 -29 -27 -26 -52 10 -78 28 -21 30 -26 24 -68 -3 -25 -1 -52 4 -60 9 -13 12 -12 25 5 9 11 13 26 11 33 -3 8 4 25 15 39 25 32 25 54 0 103 -30 59 -25 120 9 120 29 0 32 11 10 41 -11 16 -24 42 -29 58 -8 28 -6 31 31 45 55 22 69 86 18 86 -19 0 -20 5 -17 75 l3 75 -36 0 c-58 0 -97 25 -109 71 -9 32 -15 39 -35 39 -31 0 -65 33 -65 63 0 12 -7 35 -15 51 -8 15 -15 34 -15 42 0 7 -9 18 -20 24 -29 15 -25 48 6 61 21 7 32 6 51 -6 44 -29 63 -55 63 -85 0 -23 5 -31 26 -36 38 -10 94 24 94 56 0 31 -26 70 -46 70 -18 0 -17 2 1 47 8 19 15 49 15 65 0 19 9 37 28 53 38 34 50 31 54 -12 2 -27 8 -39 21 -41 9 -2 17 3 17 10 0 19 106 82 125 74 22 -8 19 -22 -12 -51 -24 -21 -26 -27 -13 -35 8 -5 23 -10 33 -10 26 0 16 -22 -17 -39 -20 -9 -25 -16 -17 -24 8 -8 21 -6 46 6 43 21 45 21 45 2 0 -9 -9 -15 -23 -15 -16 0 -28 -9 -35 -25 -6 -14 -16 -25 -22 -25 -14 0 -12 -48 2 -52 10 -4 10 -13 1 -41 -9 -29 -8 -37 4 -41 26 -10 33 -7 33 16 0 12 15 36 33 53 17 18 40 44 50 58 19 29 54 36 63 12 4 -10 15 -12 34 -8 24 4 29 2 32 -18 2 -19 12 -26 52 -36 26 -7 51 -15 54 -18 3 -3 7 -34 9 -69 2 -61 1 -65 -32 -95 -43 -39 -45 -55 -6 -49 24 3 32 0 41 -20 10 -23 15 -24 61 -19 65 8 69 11 69 58 0 74 67 102 84 34 4 -16 13 -25 26 -25 18 0 18 2 5 48 -17 55 -12 82 16 82 16 0 19 5 14 19 -3 11 -1 22 4 26 7 4 7 14 -1 30 -16 36 -99 60 -124 35 -5 -5 -22 -6 -39 -2 -19 5 -25 11 -17 16 7 4 12 17 12 29 -1 16 -13 28 -49 45 -61 28 -71 28 -71 -4 0 -24 -2 -25 -47 -22 -47 3 -47 3 -61 50 -12 45 -15 47 -55 53 -24 4 -54 15 -67 25 -21 16 -23 21 -12 44 10 22 8 29 -16 57 -46 55 -95 70 -217 65 -62 -3 -112 -9 -120 -16 -21 -17 -45 4 -45 40 0 29 -45 68 -104 90 -30 11 -92 4 -102 -11 -3 -6 -20 -1 -38 11 l-33 20 -10 -23 c-8 -17 -7 -28 3 -42 10 -13 11 -22 3 -32 -16 -18 -38 -16 -76 6 -26 16 -43 19 -106 14 -50 -4 -76 -2 -81 6 -4 6 -18 11 -30 11 -31 0 -88 24 -79 33 3 4 25 7 49 7 26 0 50 7 65 19 22 18 22 19 6 45 -10 14 -30 28 -45 32 -15 3 -49 12 -76 20 -66 19 -239 19 -255 0z', 'M5343 4148 c-21 -33 -28 -54 -25 -70 4 -22 16 -23 32 -3 7 8 19 15 27 15 8 0 23 5 35 11 19 10 18 12 -13 35 -38 27 -45 29 -56 12z', 'M4940 4062 c0 -22 35 -79 63 -103 31 -27 30 -49 -2 -49 -10 0 -38 -7 -61 -15 -39 -14 -48 -14 -86 1 -25 10 -46 26 -53 41 -8 18 -16 23 -29 18 -9 -3 -50 -12 -89 -18 -40 -6 -73 -15 -73 -19 0 -4 9 -13 20 -21 19 -13 19 -14 -13 -32 -33 -17 -59 -17 -128 0 -17 4 -40 1 -63 -10 -30 -15 -34 -20 -25 -36 5 -11 20 -19 36 -19 16 0 39 -14 64 -39 42 -41 54 -39 61 11 3 27 4 28 32 13 15 -8 37 -15 47 -15 10 0 28 -13 41 -30 27 -37 34 -37 53 0 8 16 27 33 40 36 14 3 25 10 25 15 0 5 19 9 42 9 24 0 49 7 60 17 17 15 19 15 37 -1 14 -13 29 -15 73 -10 48 6 57 4 81 -17 16 -15 36 -54 53 -104 15 -44 33 -89 40 -100 18 -25 18 -59 0 -74 -8 -6 -19 -25 -26 -41 -10 -25 -9 -33 10 -60 26 -37 46 -48 104 -59 56 -10 77 0 53 27 -14 15 -17 39 -17 128 0 60 -5 127 -12 149 -17 63 -21 164 -8 211 10 35 10 50 0 74 l-13 31 -25 -36 c-14 -19 -30 -35 -36 -35 -20 0 -56 31 -56 48 -1 26 -25 52 -49 52 -22 0 -28 -14 -11 -25 17 -10 11 -35 -8 -35 -12 0 -25 15 -36 40 -11 26 -26 42 -42 46 -13 4 -29 15 -35 25 -10 19 -39 27 -39 11z', 'M4107 3443 c-15 -14 -6 -41 15 -47 33 -8 45 10 23 34 -19 21 -28 24 -38 13z', 'M3600 3335 c-16 -19 -5 -65 16 -65 15 0 18 5 28 53 5 22 3 27 -13 27 -10 0 -24 -7 -31 -15z', 'M4202 3237 c-10 -11 -7 -16 14 -26 20 -9 23 -15 15 -25 -21 -25 5 -41 117 -71 29 -8 28 -18 -3 -35 -14 -7 -32 -24 -40 -37 -22 -33 -49 -29 -100 18 l-45 42 0 -51 c0 -61 -14 -102 -35 -102 -18 0 -18 -2 -3 -35 8 -17 19 -25 37 -25 14 0 36 -3 49 -6 17 -5 22 -2 22 14 0 26 29 36 50 17 21 -19 40 -19 40 -1 0 24 18 28 57 15 24 -8 38 -8 40 -2 2 6 15 8 28 5 31 -5 33 13 5 48 -24 30 -26 70 -5 70 8 0 23 4 33 9 9 6 29 12 45 16 18 4 27 12 27 25 0 13 7 20 19 20 11 0 26 7 34 15 21 21 86 9 80 -15 -6 -23 21 -32 52 -18 21 10 29 8 49 -11 38 -36 53 -20 45 48 -3 33 -9 64 -13 69 -10 16 -67 25 -79 13 -15 -15 -63 -14 -121 4 -27 8 -58 15 -69 15 -19 0 -19 -1 -4 -18 25 -27 6 -47 -45 -45 -23 1 -47 8 -53 16 -18 25 -40 25 -67 0 -26 -24 -27 -25 -62 -8 -23 11 -36 24 -36 36 0 11 -6 19 -12 19 -7 0 -22 3 -34 6 -11 3 -25 -1 -32 -9z']
			),
			'location' => DB::raw('POINT(18.420695, -64.639968)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}