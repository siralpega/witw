<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ID_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Indonesia',
			'code'  => 'ID',
			'type'  => null,
			'paths' => serialize(
				['M42 6983 c-15 -6 -6 -23 14 -23 8 0 14 7 14 15 0 15 -6 17 -28 8z', 'M7 6938 c6 -7 13 -34 15 -59 8 -76 57 -147 182 -263 91 -85 119 -106 143 -106 29 0 93 -53 93 -76 0 -6 9 -19 21 -30 49 -44 109 -136 109 -167 0 -31 5 -34 99 -79 l99 -47 30 -63 c16 -35 42 -108 57 -163 32 -118 47 -145 111 -196 82 -64 193 -198 209 -251 8 -26 34 -76 58 -110 59 -84 89 -145 82 -168 -11 -34 6 -70 41 -88 19 -10 49 -42 73 -79 24 -37 57 -73 83 -89 64 -41 88 -65 88 -88 0 -21 109 -120 174 -159 17 -11 45 -32 61 -47 17 -16 49 -36 73 -45 27 -11 48 -28 57 -46 21 -40 150 -169 169 -169 20 0 20 1 -1 45 -9 19 -14 37 -11 41 9 9 42 -4 82 -31 35 -24 36 -24 46 -5 14 27 33 25 81 -7 23 -15 43 -22 48 -17 5 5 16 60 26 123 16 98 16 123 6 177 -10 49 -10 71 -1 99 10 29 10 42 0 60 -11 20 -9 32 10 77 l22 53 -30 55 c-71 135 -66 130 -137 130 -79 0 -95 6 -95 35 0 16 -11 30 -35 44 -42 24 -40 21 -55 133 l-12 86 -31 0 c-60 0 -126 19 -162 47 l-37 27 43 44 c42 43 42 45 1 56 -19 5 15 48 39 48 43 0 1 82 -60 116 l-45 25 -34 -36 c-56 -57 -65 -43 -22 35 l38 70 -41 30 c-45 33 -62 37 -70 16 -8 -21 -44 -8 -51 17 -3 12 -1 24 4 25 14 5 12 36 -2 50 -7 7 -34 12 -62 12 l-49 0 19 -21 19 -22 -25 13 c-42 22 -79 57 -70 66 8 9 13 37 11 61 -3 34 -81 20 -81 -15 0 -12 -6 -8 -20 12 -20 32 -88 78 -102 70 -4 -3 -8 -16 -8 -30 0 -51 -60 -17 -100 58 -17 32 -37 58 -43 57 -27 -3 -37 2 -37 20 0 28 -120 135 -211 188 -43 25 -79 49 -79 53 0 4 -22 19 -50 34 -41 23 -50 32 -50 55 0 16 -10 37 -25 51 -14 13 -29 35 -33 50 -4 14 -30 46 -58 72 -48 46 -52 47 -82 36 -25 -10 -39 -9 -66 0 -22 8 -53 10 -85 6 -74 -10 -113 2 -165 48 -51 44 -122 62 -151 38 -12 -10 -16 -9 -21 4 -3 9 -11 16 -16 16 -7 0 -7 -4 -1 -12z', 'M7054 6678 c-12 -19 -11 -118 1 -118 6 0 19 16 29 35 16 29 17 38 6 65 -13 32 -24 37 -36 18z', 'M4669 6644 c-65 -19 -83 -37 -98 -92 -9 -37 -10 -56 -2 -71 8 -15 8 -28 -3 -53 -8 -18 -17 -41 -20 -51 -3 -9 -18 -20 -33 -23 -22 -4 -33 -16 -47 -51 -16 -38 -17 -46 -5 -54 11 -6 6 -15 -23 -39 -27 -22 -39 -41 -43 -68 -3 -20 -15 -56 -26 -78 -22 -44 -45 -54 -130 -54 -25 0 -42 -7 -57 -25 -30 -34 -73 -32 -147 5 -47 23 -74 29 -123 30 -72 0 -99 -11 -112 -46 -6 -16 -29 -33 -67 -50 -51 -22 -63 -24 -99 -15 -36 9 -50 7 -103 -14 -33 -14 -68 -25 -77 -25 -9 0 -40 24 -68 53 -29 28 -68 64 -88 79 -20 15 -46 48 -58 73 -12 25 -28 45 -35 45 -7 0 -24 -19 -38 -42 -14 -24 -34 -50 -45 -59 -13 -11 -22 -36 -27 -70 -4 -30 -12 -60 -17 -66 -6 -8 -8 -38 -3 -77 5 -51 10 -65 25 -69 11 -3 27 -21 36 -41 16 -33 16 -37 1 -54 -26 -28 -21 -67 10 -92 19 -15 24 -23 15 -29 -9 -5 -8 -12 4 -29 11 -16 21 -21 40 -16 26 7 35 -13 9 -22 -9 -4 -15 -19 -15 -41 l0 -35 44 26 44 26 26 -31 c30 -36 31 -45 10 -99 -15 -37 -15 -42 -1 -53 19 -15 47 -113 47 -167 0 -23 5 -50 10 -61 10 -18 12 -18 35 -3 23 15 27 14 73 -12 l49 -27 87 27 c49 15 90 25 93 22 3 -2 7 -33 10 -68 8 -87 17 -95 60 -57 24 20 41 28 52 23 58 -25 143 3 162 53 l10 27 26 -28 c21 -23 31 -27 59 -21 32 6 34 5 34 -24 0 -37 21 -45 95 -36 82 11 103 2 110 -43 3 -20 10 -54 16 -74 l10 -38 47 24 c26 13 83 38 127 55 44 18 90 39 102 46 21 14 22 13 33 -41 l12 -56 21 19 c33 27 38 36 34 60 -2 12 2 24 9 27 19 7 18 36 -1 36 -9 0 -15 9 -15 24 0 13 -5 26 -11 28 -7 2 -4 16 10 38 11 19 21 52 21 73 0 30 4 37 17 35 24 -4 38 53 16 69 -8 7 -20 14 -25 15 -6 2 -7 23 -3 52 7 43 17 58 98 142 67 71 94 93 108 89 10 -4 27 -1 39 5 26 14 29 90 4 111 -13 10 -15 24 -10 64 14 120 59 212 98 199 12 -3 24 -1 28 6 6 10 18 10 53 1 68 -17 121 -14 140 7 10 10 17 23 16 28 -1 12 -133 119 -192 155 -55 34 -64 51 -49 91 9 26 6 42 -26 123 -28 71 -43 97 -65 110 -44 26 -24 50 26 30 35 -14 18 29 -21 52 l-37 22 48 1 c51 0 56 8 33 50 -12 21 -12 26 2 36 13 9 20 9 30 1 11 -9 13 -5 10 19 -4 37 -43 46 -65 15 -8 -12 -19 -21 -25 -21 -7 0 -7 4 1 13 8 11 2 18 -27 34 -30 17 -59 22 -150 25 -68 2 -129 -1 -153 -8z', 'M2899 6591 l-23 -19 19 -41 c11 -22 27 -41 35 -41 40 0 52 52 24 95 -20 30 -25 31 -55 6z', 'M6805 6500 c-3 -5 1 -17 10 -27 8 -10 21 -27 28 -37 23 -32 40 -10 21 27 -23 43 -46 58 -59 37z', 'M5065 6460 c3 -5 10 -10 16 -10 5 0 9 5 9 10 0 6 -7 10 -16 10 -8 0 -12 -4 -9 -10z', 'M2495 6411 c-3 -5 -1 -12 5 -16 5 -3 10 1 10 9 0 18 -6 21 -15 7z', 'M2364 6338 c3 -13 6 -27 6 -32 0 -6 6 -1 14 10 10 13 11 23 4 31 -17 21 -31 15 -24 -9z', 'M3061 6331 c-10 -17 -9 -21 3 -21 20 0 27 13 16 29 -6 11 -10 9 -19 -8z', 'M140 6315 c-17 -21 9 -50 59 -66 20 -6 48 -23 63 -37 16 -14 33 -22 42 -19 25 10 19 22 -24 51 -22 14 -40 33 -40 41 0 8 -8 15 -18 15 -10 0 -27 7 -38 15 -24 18 -29 18 -44 0z', 'M7405 6220 c-15 -16 -32 -27 -37 -24 -13 9 -9 -6 7 -22 8 -9 15 -24 15 -35 0 -28 24 -23 65 12 51 45 47 99 -9 99 -7 0 -25 -13 -41 -30z', 'M471 6171 c-11 -7 -9 -11 8 -20 18 -10 21 -9 21 9 0 22 -7 25 -29 11z', 'M7275 6169 c-10 -15 3 -25 16 -12 7 7 7 13 1 17 -6 3 -14 1 -17 -5z', 'M7276 6120 c-19 -22 -38 -52 -42 -67 -3 -16 -14 -54 -24 -86 l-19 -57 26 -24 c20 -18 24 -30 19 -49 -3 -14 1 -52 9 -83 8 -32 15 -75 15 -95 0 -21 7 -42 16 -50 8 -7 24 -30 35 -51 19 -37 93 -97 105 -85 4 3 -9 24 -28 47 -49 57 -82 158 -68 211 13 48 30 50 125 15 36 -13 65 -21 65 -17 0 19 -53 80 -80 91 -38 16 -35 26 21 65 35 25 45 39 47 65 5 52 -5 80 -31 80 -33 0 -86 -36 -99 -67 -21 -48 -60 -103 -73 -103 -7 0 -18 7 -25 15 -10 11 -5 20 24 45 22 20 40 47 47 72 9 36 8 44 -12 71 -21 28 -21 31 -5 57 20 34 20 40 2 40 -7 0 -30 -18 -50 -40z', 'M6630 6017 c-18 -41 -51 -67 -85 -67 -8 0 -38 -21 -66 -46 -41 -36 -57 -45 -78 -41 -14 2 -59 10 -99 18 -65 12 -74 11 -88 -3 -16 -15 -19 -15 -44 3 -26 20 -145 43 -162 33 -5 -3 -15 -1 -22 5 -10 8 -22 8 -40 1 -47 -18 -66 -13 -66 16 0 23 -3 25 -25 20 -16 -4 -34 -1 -46 7 -32 23 -68 9 -85 -32 -27 -64 -84 -107 -84 -63 0 10 -3 21 -6 25 -8 8 -84 -70 -84 -87 0 -8 -5 -18 -10 -21 -21 -13 -42 -67 -31 -78 19 -19 13 -40 -9 -34 -22 6 -29 -18 -8 -25 22 -8 -10 -117 -55 -188 -40 -62 -42 -67 -42 -145 0 -68 -3 -85 -22 -109 -13 -16 -23 -38 -23 -50 0 -30 -27 -66 -50 -66 -24 0 -31 -30 -12 -52 12 -15 12 -20 -1 -39 -16 -22 -14 -65 5 -102 13 -26 54 -39 78 -25 26 17 54 -10 74 -70 21 -61 20 -83 -9 -204 -33 -138 -33 -152 9 -177 39 -24 59 -26 75 -7 14 17 102 28 119 14 17 -14 15 10 -3 42 -20 35 -18 84 4 129 18 34 18 41 5 66 -18 35 -18 129 0 158 14 22 9 55 -28 172 -5 16 4 26 44 53 52 34 79 39 111 22 30 -16 26 -93 -6 -132 -14 -16 -25 -34 -25 -38 0 -12 113 -106 151 -125 27 -15 28 -17 14 -38 -8 -13 -17 -43 -21 -68 -5 -42 -4 -45 26 -61 37 -21 132 -26 112 -6 -39 39 21 84 99 74 43 -6 49 -4 68 20 27 35 27 52 -3 65 -13 6 -40 31 -60 55 -20 24 -43 44 -51 44 -20 0 -26 15 -16 42 6 12 10 19 11 13 0 -5 7 5 15 23 13 30 13 36 0 49 -8 8 -15 22 -15 31 0 10 -12 23 -27 30 -33 15 -123 136 -123 166 0 22 35 48 103 76 24 10 60 43 100 90 34 41 75 81 89 90 26 14 29 13 57 -14 l31 -29 15 37 c20 46 15 60 -25 81 -25 13 -37 14 -70 4 -33 -10 -39 -16 -34 -31 5 -17 1 -18 -58 -12 -54 5 -71 3 -106 -15 -46 -23 -92 -27 -110 -9 -9 9 -26 -3 -75 -57 -56 -61 -66 -68 -90 -61 -16 4 -42 26 -64 56 -20 27 -49 54 -64 60 -20 9 -32 25 -43 58 -29 84 -14 166 39 219 38 38 52 40 113 16 41 -15 48 -15 117 1 54 13 79 15 93 7 13 -7 64 -8 145 -4 116 6 128 4 166 -16 23 -11 55 -21 71 -21 16 0 31 -4 34 -9 6 -9 90 2 141 19 41 14 125 102 190 200 46 69 47 72 30 90 -10 11 -29 20 -42 20 -19 0 -28 -10 -43 -43z', 'M478 5996 l-27 -11 30 -53 c17 -28 44 -60 60 -69 16 -10 32 -28 35 -40 9 -34 40 -29 53 8 18 51 14 61 -45 122 -59 60 -64 62 -106 43z', 'M2073 5933 c-36 -18 -44 -43 -14 -43 10 0 24 -7 31 -15 18 -22 39 -18 46 9 6 24 -10 67 -24 65 -4 0 -22 -8 -39 -16z', 'M1980 5925 c-12 -15 -6 -35 11 -35 6 0 19 -10 29 -22 10 -13 22 -20 26 -16 4 5 -1 17 -11 28 -10 11 -15 28 -12 40 6 24 -24 28 -43 5z', 'M1840 5911 c0 -6 5 -13 10 -16 6 -3 10 1 10 9 0 9 -4 16 -10 16 -5 0 -10 -4 -10 -9z', 'M1840 5850 c0 -15 7 -20 27 -20 25 0 26 0 8 20 -10 11 -22 20 -27 20 -4 0 -8 -9 -8 -20z', 'M7206 5692 c-2 -4 -1 -14 5 -22 7 -12 9 -10 9 8 0 23 -5 28 -14 14z', 'M2096 5661 c-26 -28 -5 -47 45 -43 24 3 39 0 39 -7 0 -6 5 -11 10 -11 23 0 7 31 -27 55 -45 30 -45 30 -67 6z', 'M7630 5672 c0 -13 35 -42 50 -42 9 0 5 9 -10 25 -24 25 -40 32 -40 17z', 'M7878 5655 c-16 -9 -28 -21 -28 -28 0 -17 58 -48 66 -36 3 6 11 3 18 -7 11 -14 18 -15 46 -6 18 7 45 12 60 12 36 0 47 27 21 53 -26 27 -144 34 -183 12z', 'M744 5624 c4 -9 2 -22 -4 -29 -15 -19 3 -27 25 -11 14 10 16 16 6 34 -14 25 -36 30 -27 6z', 'M7140 5585 c0 -25 4 -35 15 -35 9 0 28 -12 43 -27 36 -37 88 -55 103 -37 12 15 4 34 -14 34 -7 0 -18 4 -26 9 -12 8 -12 12 -2 25 20 24 -2 45 -44 41 -22 -2 -35 1 -39 11 -3 8 -12 14 -21 14 -11 0 -15 -10 -15 -35z', 'M2073 5592 c-26 -4 -28 -17 -10 -49 l13 -23 27 26 c15 13 27 27 27 29 0 10 -37 21 -57 17z', 'M8290 5593 c-8 -4 -37 -21 -63 -39 -27 -18 -65 -36 -85 -40 -49 -9 -72 -21 -72 -40 0 -21 -29 -74 -40 -74 -6 0 -10 15 -10 34 0 28 -4 35 -22 38 -13 2 -22 9 -20 16 2 10 -10 12 -45 10 -49 -3 -71 -25 -34 -35 11 -3 23 -13 26 -23 3 -10 19 -36 35 -58 31 -43 80 -63 105 -42 10 8 27 7 71 -4 57 -15 74 -27 74 -56 0 -18 30 -67 60 -98 16 -17 29 -22 47 -17 14 3 31 1 39 -6 8 -6 24 -8 36 -4 13 3 59 10 103 15 44 4 96 11 115 16 32 7 34 6 21 -9 -9 -11 -10 -17 -2 -17 24 0 9 -27 -24 -43 -48 -23 -70 -21 -87 5 l-15 23 -48 -40 c-73 -62 -70 -61 -110 -42 -44 21 -58 21 -96 1 -25 -12 -28 -18 -18 -30 6 -8 21 -14 33 -14 31 0 82 -35 98 -67 8 -16 21 -27 29 -25 9 1 21 -9 27 -22 9 -21 8 -26 -11 -39 -19 -12 -20 -17 -8 -30 7 -9 11 -22 8 -29 -2 -7 4 -23 15 -35 19 -20 22 -21 63 -6 51 17 62 28 67 67 5 50 28 53 83 12 69 -53 106 -71 115 -56 9 15 41 0 67 -33 39 -48 90 -70 190 -78 71 -6 100 -13 120 -29 14 -11 37 -20 50 -20 14 0 56 -17 94 -37 57 -31 71 -35 78 -24 8 12 23 6 81 -29 110 -66 150 -98 150 -119 0 -11 7 -21 16 -23 9 -2 24 -31 38 -71 12 -37 35 -80 50 -96 27 -28 27 -31 16 -67 -13 -37 -12 -39 21 -66 26 -22 29 -28 15 -28 -19 0 -19 -1 0 -21 18 -20 18 -20 -9 -14 -77 20 -158 -39 -217 -156 -36 -70 -34 -94 5 -79 13 5 49 9 77 9 29 0 69 1 88 3 19 1 47 -2 62 -6 21 -6 27 -4 32 12 10 30 54 56 71 42 9 -8 33 -9 68 -5 73 9 97 -5 224 -128 l103 -100 0 253 c0 247 -1 254 -22 277 -21 22 -21 24 -5 58 15 32 17 83 17 459 l0 424 -49 21 c-27 11 -62 21 -78 21 -15 1 -39 7 -53 14 -13 8 -38 12 -55 9 -22 -4 -59 8 -135 41 -57 26 -111 53 -120 60 -17 15 -196 76 -223 76 -10 0 -45 -14 -78 -31 -60 -30 -61 -31 -55 -64 4 -18 3 -36 -2 -39 -5 -3 -40 -8 -78 -11 -102 -9 -111 -12 -118 -39 -3 -13 -24 -44 -46 -67 -22 -24 -40 -48 -40 -54 0 -6 -24 -32 -54 -58 -46 -40 -61 -47 -96 -47 -50 0 -95 38 -85 70 5 15 2 20 -14 20 -16 0 -21 9 -27 45 -5 35 -10 45 -25 45 -11 0 -19 -7 -19 -15 0 -26 -14 -17 -41 28 -39 62 -47 152 -18 209 l22 42 -34 63 c-36 66 -34 65 -131 78 -28 4 -62 18 -88 36 -52 38 -155 59 -200 42z', 'M7750 5580 c0 -5 7 -10 15 -10 8 0 15 5 15 10 0 6 -7 10 -15 10 -8 0 -15 -4 -15 -10z', 'M7152 5528 c-8 -8 -9 -15 -1 -25 16 -19 29 -16 29 6 0 25 -13 34 -28 19z', 'M8980 5520 c0 -5 17 -18 38 -29 20 -11 50 -36 65 -55 22 -28 35 -36 60 -36 30 0 57 14 57 31 0 3 -13 9 -30 12 -19 4 -34 17 -44 35 -11 22 -27 32 -60 41 -55 14 -86 14 -86 1z', 'M790 5451 c-16 -31 -12 -54 19 -103 33 -52 66 -78 98 -78 45 0 44 30 -4 118 -40 73 -48 82 -73 82 -19 0 -33 -7 -40 -19z', 'M8853 5454 c-7 -19 20 -44 49 -44 23 0 23 13 1 32 -32 27 -43 30 -50 12z', 'M6215 5411 c-25 -5 -31 -12 -33 -39 -4 -39 20 -53 48 -27 19 17 20 17 39 -6 l19 -24 26 24 c27 26 34 55 15 67 -6 3 -16 1 -22 -5 -16 -16 -37 -14 -37 4 0 16 -7 17 -55 6z', 'M7225 5410 c-7 -11 18 -24 35 -18 6 2 1 9 -9 15 -13 8 -22 9 -26 3z', 'M7735 5410 c3 -5 13 -10 21 -10 8 0 14 5 14 10 0 6 -9 10 -21 10 -11 0 -17 -4 -14 -10z', 'M7216 5356 c-31 -30 -32 -40 -5 -67 15 -15 26 -18 42 -12 12 4 46 8 75 8 65 0 67 14 9 54 -65 44 -91 48 -121 17z', 'M2370 5332 c0 -5 -11 -7 -25 -4 -29 5 -55 -13 -55 -37 0 -9 -14 -28 -32 -43 -18 -14 -29 -30 -25 -34 4 -5 36 -10 71 -12 61 -4 64 -5 89 -45 15 -23 27 -55 27 -73 0 -39 21 -64 81 -98 l47 -26 22 57 c13 32 28 64 33 71 12 15 12 16 -40 30 -67 20 -83 39 -106 132 -22 83 -23 85 -54 88 -18 2 -33 -1 -33 -6z', 'M8995 5311 c6 -6 34 -15 63 -21 29 -5 65 -19 82 -31 21 -16 33 -19 42 -12 7 6 35 10 61 10 54 0 80 15 51 31 -11 5 -62 13 -114 16 -52 4 -117 9 -145 12 -36 4 -47 3 -40 -5z', 'M6526 5294 c-19 -18 -19 -16 -6 -48 11 -30 37 -33 81 -10 23 11 34 12 44 4 10 -8 24 -8 55 0 31 8 49 8 69 0 19 -8 35 -8 55 0 42 15 45 13 39 -26 -5 -29 -3 -36 8 -32 8 2 15 16 17 29 2 19 13 29 40 39 l37 14 -30 7 c-16 4 -61 7 -100 8 -38 0 -105 8 -148 16 -100 19 -142 19 -161 -1z', 'M7778 5284 c-26 -8 -50 -19 -53 -24 -7 -12 67 -50 97 -50 29 0 52 15 44 28 -3 6 -1 12 5 14 7 2 9 13 5 26 -9 26 -30 27 -98 6z', 'M1080 5111 c0 -27 24 -71 38 -69 10 2 18 -8 23 -27 5 -17 22 -44 39 -60 l30 -29 0 37 c0 30 -9 46 -56 96 -53 57 -74 72 -74 52z', 'M2796 5095 c-15 -39 -17 -111 -4 -128 12 -16 18 -17 41 -6 21 9 30 9 41 0 12 -10 20 -5 45 30 17 23 31 46 31 50 0 5 -19 22 -42 39 -45 33 -102 41 -112 15z', 'M7622 5040 c-25 -16 -32 -17 -42 -5 -8 10 -33 12 -105 8 -92 -6 -96 -7 -133 -42 -37 -35 -38 -38 -27 -71 l12 -35 19 37 19 37 40 -35 c25 -22 35 -37 28 -40 -7 -3 -13 -12 -13 -20 0 -15 33 -18 65 -4 19 7 19 8 2 15 -17 7 -17 9 4 31 22 24 49 31 63 17 4 -5 26 -13 49 -19 33 -8 50 -8 78 3 36 14 38 13 159 -47 67 -34 123 -60 125 -58 1 2 6 17 9 35 6 27 3 37 -23 64 -17 18 -31 37 -31 44 0 24 -46 55 -82 55 -20 0 -47 4 -61 9 -13 5 -46 16 -74 24 -47 14 -53 14 -81 -3z', 'M7315 5020 c-3 -5 1 -10 9 -10 9 0 16 5 16 10 0 6 -4 10 -9 10 -6 0 -13 -4 -16 -10z', 'M6973 4990 c-52 -11 -83 -27 -83 -44 0 -21 52 -83 95 -110 49 -32 73 -33 135 -1 46 23 50 28 50 60 0 29 -4 35 -21 35 -11 0 -18 4 -15 9 4 5 -8 21 -25 35 -32 27 -60 31 -136 16z', 'M7265 4960 c-3 -5 1 -10 9 -10 9 0 16 5 16 10 0 6 -4 10 -9 10 -6 0 -13 -4 -16 -10z', 'M7215 4940 c-3 -5 3 -10 15 -10 12 0 18 5 15 10 -3 6 -10 10 -15 10 -5 0 -12 -4 -15 -10z', 'M7385 4890 c-4 -6 -3 -16 3 -22 6 -6 12 -6 17 2 4 6 3 16 -3 22 -6 6 -12 6 -17 -2z', 'M7145 4810 c3 -5 8 -10 11 -10 2 0 4 5 4 10 0 6 -5 10 -11 10 -5 0 -7 -4 -4 -10z', 'M6214 4775 c-8 -20 13 -45 37 -45 19 0 35 33 24 50 -10 16 -55 12 -61 -5z', 'M8550 4730 c8 -5 20 -10 25 -10 6 0 3 5 -5 10 -8 5 -19 10 -25 10 -5 0 -3 -5 5 -10z', 'M6202 4678 c-5 -7 -13 -29 -17 -48 -7 -32 -8 -33 -16 -12 -10 26 -18 27 -63 8 -30 -12 -34 -19 -39 -62 -3 -27 -7 -58 -9 -69 -3 -17 3 -20 32 -20 32 0 35 -3 35 -28 1 -48 49 -64 65 -22 5 14 26 35 45 47 l36 21 -27 28 c-24 25 -26 33 -18 57 7 19 16 26 31 25 20 -2 21 0 11 30 -13 39 -27 57 -43 57 -7 0 -17 -6 -23 -12z', 'M5961 4537 c-16 -16 -13 -42 7 -60 25 -23 39 -21 45 5 11 39 -27 80 -52 55z', 'M6341 4496 c-9 -10 -9 -16 -1 -21 16 -10 31 7 21 23 -6 10 -10 10 -20 -2z', 'M1574 4474 c3 -9 6 -18 6 -20 0 -9 49 -3 56 7 8 14 -14 29 -45 29 -17 0 -22 -4 -17 -16z', 'M8458 4455 c-28 -42 -46 -105 -31 -105 13 0 66 115 61 131 -3 9 -14 -1 -30 -26z', 'M8752 4430 c-18 -22 -28 -41 -22 -45 11 -7 14 -48 3 -58 -3 -4 -12 -2 -19 4 -18 15 -21 5 -29 -98 -5 -72 -4 -82 12 -91 25 -15 68 13 90 58 10 19 18 40 18 45 0 6 11 19 24 31 21 18 22 23 10 41 -10 16 -10 25 -1 35 16 20 -15 118 -37 118 -9 0 -31 -18 -49 -40z', 'M8370 4385 c0 -24 5 -35 15 -35 15 0 20 26 9 54 -11 28 -24 17 -24 -19z', 'M5646 4375 c-9 -25 4 -126 15 -119 11 6 11 91 0 118 -7 19 -8 19 -15 1z', 'M2387 4259 c-52 -114 -51 -132 8 -110 31 11 38 10 64 -8 16 -12 41 -21 55 -21 19 0 26 -5 26 -19 0 -11 -4 -23 -10 -26 -5 -3 -10 -14 -10 -24 0 -15 12 -19 78 -25 95 -8 163 -25 270 -67 l84 -33 46 18 c48 19 166 23 187 7 5 -5 35 -11 67 -15 31 -3 87 -20 125 -37 70 -32 169 -69 185 -69 5 0 6 5 3 10 -8 13 -11 13 60 -9 43 -14 67 -16 85 -9 17 6 55 4 122 -8 84 -15 106 -15 152 -4 50 12 58 11 145 -19 51 -17 106 -31 122 -31 16 0 29 -4 29 -10 0 -14 39 -32 57 -26 12 5 9 13 -16 41 -34 39 -39 66 -16 85 12 10 15 10 15 -4 0 -20 36 -43 82 -51 47 -9 72 -36 64 -70 -8 -32 7 -33 22 -1 6 13 30 34 54 47 49 28 58 49 29 78 -27 27 -84 36 -132 21 -56 -19 -114 -1 -122 38 -4 21 -18 34 -53 52 -45 22 -52 22 -103 11 -112 -25 -122 -24 -191 12 -35 19 -65 38 -67 43 -2 6 6 20 17 32 18 19 27 21 68 14 85 -13 134 -8 196 21 86 40 66 51 -95 53 -103 1 -132 -1 -136 -12 -7 -18 -27 -18 -42 0 -7 8 -38 17 -69 20 -117 11 -154 18 -159 32 -6 17 -27 18 -52 2 -17 -10 -25 -7 -60 25 -23 20 -45 37 -50 37 -4 0 -25 -25 -45 -55 -21 -33 -46 -57 -60 -61 -13 -3 -61 2 -106 11 -48 10 -97 14 -120 10 -23 -4 -47 -2 -60 5 -14 7 -25 8 -33 2 -8 -6 -24 -6 -47 2 -27 8 -36 17 -38 38 -2 16 -18 40 -38 57 -29 26 -37 29 -54 19 -15 -10 -26 -9 -55 5 -20 9 -44 17 -53 17 -10 0 -26 6 -37 14 -29 20 -122 26 -136 10 -15 -18 -33 -18 -48 0 -6 7 -35 16 -64 19 -28 4 -61 9 -72 12 -18 6 -27 -7 -68 -96z', 'M8831 4209 c-13 -17 -20 -33 -16 -37 8 -8 44 37 45 56 0 16 -1 15 -29 -19z', 'M4500 4140 c8 -5 26 -9 40 -9 23 0 23 1 5 9 -11 5 -29 9 -40 9 -17 1 -17 -1 -5 -9z', 'M5690 4101 c0 -14 18 -23 31 -15 8 4 7 9 -2 15 -18 11 -29 11 -29 0z', 'M4280 4085 c7 -8 16 -15 21 -15 5 0 9 7 9 15 0 9 -9 15 -21 15 -18 0 -19 -2 -9 -15z', 'M7454 4089 c-3 -6 0 -15 7 -20 22 -14 29 -11 29 11 0 21 -24 27 -36 9z', 'M8118 4081 c-14 -11 -40 -43 -59 -70 -19 -28 -40 -49 -46 -46 -7 2 -13 0 -13 -5 0 -6 7 -10 15 -10 10 0 15 -10 15 -29 0 -21 6 -30 22 -34 12 -4 23 -5 24 -4 54 76 74 114 74 141 0 18 5 37 10 42 8 8 7 14 -3 22 -11 10 -20 8 -39 -7z', 'M8185 4090 c-3 -5 3 -14 14 -19 26 -15 31 -14 25 3 -7 18 -32 28 -39 16z', 'M5760 4070 c0 -5 12 -10 26 -10 14 0 23 4 19 10 -3 6 -15 10 -26 10 -10 0 -19 -4 -19 -10z', 'M8010 4014 c0 -17 22 -14 28 4 2 7 -3 12 -12 12 -9 0 -16 -7 -16 -16z', 'M7190 3985 c0 -17 2 -18 24 -9 18 7 12 24 -10 24 -8 0 -14 -7 -14 -15z', 'M6970 3974 c-19 -8 -47 -13 -62 -10 -22 4 -31 0 -48 -23 -30 -44 -26 -51 32 -51 37 0 71 9 121 32 l69 32 -22 18 c-27 22 -44 22 -90 2z', 'M7686 3932 c-3 -5 6 -20 20 -33 25 -24 26 -24 40 -4 8 10 13 24 11 30 -4 13 -63 19 -71 7z', 'M5040 3871 c-53 -11 -62 -18 -49 -43 9 -16 8 -23 -2 -29 -20 -12 -30 -11 -50 7 -16 15 -21 14 -58 -7 -23 -12 -43 -30 -45 -38 -17 -64 -16 -72 8 -96 29 -29 43 -31 72 -11 11 8 40 14 65 15 47 0 174 35 184 51 9 15 25 12 25 -5 0 -27 103 -20 151 10 22 14 37 30 33 36 -4 8 -9 7 -15 -2 -11 -19 -27 -1 -31 36 -3 27 -7 30 -38 31 -19 0 -43 4 -53 9 -11 4 -28 2 -44 -6 -23 -13 -27 -11 -51 19 -28 33 -38 35 -102 23z', 'M7290 3872 c0 -17 39 -44 55 -39 8 4 15 16 15 27 0 16 -6 20 -35 20 -19 0 -35 -4 -35 -8z', 'M5331 3856 c-9 -10 -9 -16 -1 -21 17 -10 37 12 24 25 -8 8 -15 6 -23 -4z', 'M6175 3860 c-3 -5 -1 -10 4 -10 19 0 12 -17 -13 -28 -13 -6 -40 -25 -60 -42 l-36 -32 -45 17 c-34 13 -59 16 -102 11 -52 -6 -64 -3 -148 34 l-92 40 -57 -15 c-73 -19 -92 -29 -112 -61 -13 -19 -14 -30 -6 -48 10 -22 13 -23 114 -18 83 4 111 1 136 -12 29 -15 34 -15 72 0 29 12 55 15 91 10 31 -4 56 -3 63 3 7 6 57 20 110 30 54 11 115 29 136 40 38 20 38 20 52 0 10 -16 20 -18 46 -13 17 4 32 12 32 19 0 7 9 15 19 18 10 2 24 14 30 25 11 20 9 20 -72 18 -46 -2 -89 -6 -95 -10 -6 -3 -16 3 -22 14 -11 21 -35 27 -45 10z', 'M6536 3826 l-15 -38 47 7 c96 14 132 26 132 46 0 20 -10 22 -107 23 -40 1 -43 -1 -57 -38z', 'M7970 3840 c-27 -38 -14 -38 30 0 32 26 33 29 13 30 -13 0 -30 -12 -43 -30z', 'M6468 3833 c-43 -29 -46 -38 -18 -53 25 -13 36 -7 56 32 22 42 6 51 -38 21z', 'M7534 3845 c10 -8 24 -11 29 -8 6 4 2 10 -9 14 -31 12 -40 9 -20 -6z', 'M4695 3829 c-23 -18 -26 -27 -20 -55 4 -26 2 -35 -13 -43 -11 -6 -23 -7 -27 -3 -5 4 -5 2 -1 -5 3 -6 26 -19 51 -28 50 -20 95 -14 95 12 0 9 11 35 24 58 27 46 24 59 -17 74 -41 16 -61 14 -92 -10z', 'M5410 3766 c0 -14 5 -28 10 -31 6 -3 10 0 10 8 0 8 7 18 16 21 20 8 9 26 -17 26 -14 0 -19 -7 -19 -24z', 'M4547 3743 c-13 -12 -7 -23 13 -23 13 0 18 5 14 15 -7 16 -17 19 -27 8z', 'M5466 3735 c-3 -9 0 -15 9 -15 16 0 20 16 6 24 -5 3 -11 -1 -15 -9z', 'M6646 3686 c-15 -13 -71 -38 -123 -56 -100 -34 -163 -81 -163 -120 0 -11 -16 -37 -35 -59 -19 -21 -35 -49 -35 -61 0 -22 1 -22 18 -7 22 20 64 22 91 5 15 -9 29 -9 63 1 63 18 114 54 191 133 60 63 67 74 62 99 -5 21 -2 31 9 35 21 8 20 30 -1 37 -10 2 -25 7 -33 11 -8 3 -28 -5 -44 -18z', 'M5350 3581 c-19 -10 -36 -23 -38 -29 -4 -14 41 -35 135 -62 54 -15 82 -30 112 -59 23 -22 54 -42 70 -46 35 -7 85 15 102 46 14 27 -7 50 -105 117 -70 48 -72 48 -157 50 -65 1 -93 -3 -119 -17z', 'M5950 3345 c-12 -14 -11 -18 0 -25 17 -11 53 7 47 23 -6 19 -32 20 -47 2z', 'M6245 3318 c-96 -62 -83 -92 18 -42 29 15 53 27 54 28 1 1 -1 13 -5 27 l-7 26 -60 -39z']
			),
			'location' => DB::raw('POINT(-0.789275, 113.921327)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}