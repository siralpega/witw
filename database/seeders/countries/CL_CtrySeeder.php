<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CL_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Chile',
			'code'  => 'CL',
			'type'  => null,
			'paths' => serialize(
				['M5394 10225 c-10 -8 -30 -15 -43 -15 -22 0 -23 -3 -16 -37 12 -59 8 -74 -25 -107 -27 -27 -37 -31 -81 -29 -44 1 -49 -1 -43 -15 4 -10 10 -66 13 -127 4 -60 10 -115 14 -122 12 -18 37 -173 37 -229 0 -28 -5 -76 -11 -108 -7 -39 -7 -61 0 -70 6 -6 8 -21 5 -33 -3 -11 1 -34 10 -51 18 -35 21 -103 6 -118 -6 -6 -17 -73 -25 -150 -25 -235 -26 -239 -55 -238 -33 2 -40 -11 -40 -79 0 -55 1 -58 21 -52 20 7 21 4 15 -21 -4 -16 -13 -87 -20 -159 -12 -114 -12 -133 1 -154 23 -36 14 -142 -16 -181 -26 -36 -38 -90 -24 -114 17 -30 -23 -302 -48 -330 -5 -6 -9 -38 -9 -73 0 -47 -4 -65 -15 -69 -17 -7 -30 -52 -40 -134 -4 -30 -15 -70 -26 -88 -10 -18 -19 -44 -19 -56 0 -13 -9 -35 -20 -49 -25 -32 -25 -65 0 -97 17 -21 20 -41 20 -132 0 -95 -2 -110 -20 -128 -12 -12 -25 -18 -30 -15 -6 4 -10 3 -10 -2 -1 -4 -5 -28 -9 -52 -6 -28 -4 -80 6 -150 8 -58 18 -155 22 -216 5 -60 14 -125 22 -142 15 -38 4 -98 -33 -168 -22 -43 -27 -120 -9 -138 17 -17 13 -47 -10 -66 -35 -28 -61 -108 -65 -200 -3 -56 -9 -90 -19 -101 -8 -9 -15 -31 -15 -48 0 -20 -6 -33 -17 -37 -30 -10 -100 -175 -113 -265 -8 -55 -17 -87 -51 -170 -10 -25 -22 -61 -27 -80 -10 -41 -42 -52 -72 -25 -17 15 -18 15 -25 -14 -3 -17 -2 -38 3 -47 5 -10 7 -34 5 -54 -4 -25 1 -49 16 -79 18 -35 21 -52 15 -99 -5 -51 -2 -68 31 -152 33 -86 36 -101 31 -163 -6 -79 -26 -117 -60 -117 -23 0 -24 -3 -31 -97 -5 -62 -13 -104 -22 -114 -19 -22 -16 -73 13 -226 2 -12 13 -25 24 -28 16 -5 18 -10 10 -25 -7 -13 -6 -20 2 -22 20 -7 -1 -27 -36 -33 -30 -6 -33 -10 -44 -64 -7 -31 -12 -90 -12 -129 0 -42 -6 -88 -15 -109 -24 -58 -20 -69 30 -87 60 -20 95 -9 88 28 -4 21 -2 26 16 26 22 0 27 15 11 40 -6 9 -5 17 3 22 9 5 6 19 -11 50 -29 56 -29 90 1 103 26 12 35 57 16 91 -17 33 -5 54 32 54 25 0 33 6 42 30 8 20 18 30 32 30 27 0 71 -30 56 -39 -6 -4 -13 -21 -17 -38 -4 -23 -2 -32 11 -37 10 -3 23 -2 30 4 9 8 14 -3 18 -47 6 -57 2 -81 -8 -49 -3 9 -7 23 -10 31 -2 8 -16 15 -29 15 -23 0 -25 -2 -16 -26 7 -16 7 -32 0 -44 -13 -24 -13 -71 0 -106 8 -20 7 -32 -5 -50 -8 -13 -15 -30 -15 -37 0 -8 -7 -20 -15 -27 -17 -14 -20 -75 -5 -85 18 -11 4 -68 -19 -79 -17 -7 -21 -15 -17 -32 4 -13 2 -26 -4 -29 -15 -9 -12 -25 5 -25 8 0 15 -7 15 -15 0 -8 5 -15 10 -15 6 0 24 -10 40 -21 16 -12 35 -19 42 -16 11 4 11 -4 -1 -42 -13 -37 -25 -53 -59 -74 -24 -15 -50 -27 -59 -27 -11 0 -14 -6 -9 -22 4 -13 8 -28 9 -34 2 -7 8 -19 15 -27 10 -12 7 -18 -15 -33 -16 -11 -37 -21 -48 -24 -27 -8 -30 -41 -5 -67 22 -24 26 -48 9 -58 -6 -4 -13 3 -16 14 -4 16 -11 20 -24 16 -22 -7 -25 17 -10 58 8 20 6 29 -8 41 -16 14 -20 15 -30 2 -7 -8 -11 -32 -9 -53 3 -35 1 -38 -24 -41 -16 -2 -30 -11 -33 -23 -6 -17 -8 -17 -21 -4 -20 20 -68 19 -85 -2 -8 -9 -14 -27 -14 -40 -1 -21 2 -23 27 -18 37 9 39 -22 2 -31 -23 -6 -46 -26 -91 -78 -7 -8 -18 -16 -25 -18 -7 -3 -13 -21 -13 -47 0 -43 16 -63 45 -58 17 3 27 47 11 47 -26 0 -8 31 27 47 20 9 39 18 42 20 3 2 5 -11 5 -29 0 -28 4 -33 34 -42 26 -7 36 -7 39 2 6 20 39 13 55 -12 9 -13 19 -36 23 -51 4 -15 13 -29 20 -32 24 -9 15 -26 -9 -19 -18 4 -27 0 -37 -19 -7 -14 -17 -25 -22 -25 -5 0 -6 -9 -3 -20 4 -13 2 -20 -8 -20 -7 0 -20 -11 -27 -24 -10 -19 -22 -26 -54 -28 -30 -2 -42 -8 -44 -21 -3 -14 1 -18 19 -15 12 2 24 -3 26 -9 3 -7 -2 -13 -11 -13 -9 0 -16 -8 -16 -19 0 -28 -20 -37 -27 -12 -6 24 -31 28 -39 6 -3 -8 -1 -30 6 -49 9 -28 9 -43 -1 -71 -11 -30 -11 -38 0 -44 10 -7 9 -10 -3 -14 -9 -4 -16 -14 -16 -23 0 -16 11 -16 53 1 13 6 16 3 11 -9 -3 -9 -15 -16 -25 -16 -26 0 -35 -27 -16 -48 11 -11 13 -22 7 -32 -13 -21 0 -33 18 -17 26 23 56 25 60 4 2 -10 -2 -25 -8 -33 -11 -12 -14 -12 -25 3 -11 15 -13 15 -20 -7 -5 -16 -3 -25 9 -32 26 -15 20 -48 -9 -48 -14 0 -25 -6 -25 -12 0 -22 17 -41 29 -34 6 4 14 0 17 -8 8 -21 60 -21 68 0 3 9 6 32 6 52 0 20 6 44 13 53 10 13 11 1 9 -61 -3 -64 -1 -78 12 -83 30 -12 44 4 51 58 4 32 13 60 24 70 13 11 21 37 26 80 6 60 25 90 40 65 4 -6 1 -10 -6 -10 -7 0 -10 -13 -7 -35 3 -24 0 -35 -9 -35 -23 0 -14 -47 12 -64 13 -9 30 -26 36 -38 l12 -21 -28 21 c-36 28 -75 29 -75 2 0 -11 5 -20 12 -20 9 0 9 -3 0 -12 -19 -19 -15 -26 18 -33 17 -4 30 -13 30 -22 0 -13 -3 -13 -26 2 -14 9 -28 14 -31 12 -11 -12 11 -50 40 -68 27 -16 28 -19 11 -19 -11 0 -30 11 -42 25 -26 30 -62 34 -62 7 0 -21 37 -65 50 -57 4 3 11 -2 14 -11 5 -13 9 -14 21 -4 12 10 16 9 22 -5 4 -11 0 -22 -10 -30 -19 -13 -23 -35 -7 -35 6 0 10 -6 10 -14 0 -19 31 -29 43 -14 6 9 7 8 3 -5 -3 -10 -6 -20 -6 -23 0 -2 -13 -1 -29 2 -23 5 -32 2 -40 -15 -12 -22 -4 -74 10 -65 5 3 6 -8 3 -24 -4 -21 -2 -31 9 -35 18 -7 53 28 38 38 -20 12 -11 22 14 17 15 -2 25 -11 25 -22 0 -10 7 -23 15 -30 25 -21 17 -30 -12 -14 -24 12 -28 12 -31 -1 -2 -7 2 -23 7 -34 6 -11 11 -29 11 -39 0 -15 5 -19 19 -15 16 4 22 -3 30 -35 15 -53 61 -74 61 -27 0 13 8 28 17 34 16 8 15 12 -10 31 -15 12 -27 27 -27 33 0 8 3 9 8 1 8 -12 75 -44 91 -44 6 0 11 6 11 14 0 17 -58 68 -70 61 -4 -3 -10 2 -14 10 -7 19 -2 19 32 1 51 -27 65 -51 58 -102 -3 -26 -1 -54 5 -66 13 -23 3 -91 -13 -86 -5 2 -12 28 -14 57 -2 29 -7 57 -10 62 -12 20 -24 7 -24 -26 0 -19 -5 -35 -11 -35 -6 0 -9 7 -5 15 7 19 -18 20 -37 0 -13 -13 -16 -13 -27 0 -17 20 -43 0 -35 -26 3 -9 0 -21 -7 -26 -7 -4 -23 -22 -35 -40 -18 -25 -20 -33 -9 -42 15 -13 36 4 36 30 0 18 17 35 26 26 3 -3 1 -14 -4 -24 -6 -11 -7 -25 -2 -33 7 -12 12 -11 28 3 10 9 21 15 24 12 3 -3 8 5 12 18 5 23 8 24 48 14 24 -5 50 -13 59 -17 8 -4 23 -3 33 2 10 6 41 7 73 3 44 -5 52 -9 43 -20 -7 -9 -23 -12 -46 -8 -28 5 -39 1 -59 -21 -24 -26 -55 -27 -55 -1 0 16 -29 41 -58 50 -19 5 -25 1 -37 -29 -8 -19 -19 -37 -24 -40 -5 -4 -5 -20 2 -41 9 -31 14 -35 44 -35 18 0 33 -4 33 -10 0 -5 7 -10 15 -10 8 0 15 -3 15 -8 0 -4 -18 -6 -40 -4 -22 2 -40 2 -40 -1 0 -2 28 -23 61 -46 61 -42 87 -48 56 -13 -24 27 -21 51 9 62 23 9 24 12 13 27 -13 15 -11 15 22 9 29 -5 39 -2 55 15 23 26 91 62 103 54 15 -9 -26 -80 -53 -93 -15 -7 -26 -21 -29 -39 l-4 -28 -2 28 c-2 37 -41 40 -41 3 0 -14 -4 -27 -9 -30 -5 -4 -7 3 -4 15 5 17 2 20 -13 17 -10 -2 -20 -12 -22 -22 -8 -37 22 -68 100 -106 71 -34 78 -35 103 -22 27 14 27 16 21 76 -4 45 -2 67 8 82 8 11 16 48 18 82 1 34 7 63 13 63 5 1 23 3 39 5 15 1 36 9 45 16 46 37 101 51 101 25 0 -7 -13 -28 -30 -47 -29 -34 -30 -34 -45 -16 -12 16 -17 17 -30 6 -19 -16 -19 -30 0 -30 17 0 19 -9 6 -29 -5 -8 -16 -11 -25 -8 -13 5 -16 -2 -16 -43 0 -39 4 -52 22 -64 19 -14 24 -14 38 -1 10 9 36 15 63 15 40 0 47 -3 47 -19 0 -21 -36 -50 -88 -71 -31 -12 -33 -15 -30 -59 3 -46 3 -46 78 -89 41 -23 76 -46 78 -50 1 -4 -4 -17 -13 -27 -14 -20 -14 -20 -15 2 0 12 -9 27 -20 33 -11 6 -20 8 -20 4 0 -3 -11 1 -25 10 -22 14 -25 15 -25 1 0 -18 -11 -20 -27 -4 -14 14 -125 18 -142 5 -7 -5 -43 -12 -79 -14 -73 -3 -87 -10 -97 -49 -8 -34 10 -45 44 -27 30 16 67 18 75 5 3 -5 18 -12 33 -16 39 -9 80 -43 61 -50 -8 -3 -27 -1 -42 5 -15 5 -42 10 -59 9 -31 0 -31 -1 -8 -10 13 -5 39 -22 57 -38 42 -37 90 -49 112 -27 14 14 14 16 -5 23 -34 13 -4 44 49 50 29 3 39 1 30 -5 -18 -12 -33 -134 -18 -144 6 -4 23 -8 37 -8 14 0 34 -9 44 -20 23 -25 38 -9 29 32 -3 14 0 29 6 33 16 10 40 -14 40 -41 0 -21 5 -24 34 -24 36 0 66 -21 66 -46 0 -8 9 -14 20 -14 31 0 24 32 -15 73 -23 24 -31 37 -21 37 29 0 27 20 -3 26 -39 8 -39 18 0 35 28 11 33 10 45 -6 8 -10 14 -27 14 -38 0 -11 5 -17 13 -14 48 18 56 17 67 -3 6 -11 21 -20 35 -20 19 0 25 6 30 34 8 42 -17 86 -49 86 -11 0 -56 5 -100 12 l-78 12 7 296 c6 255 5 297 -7 308 -12 10 -21 9 -43 -2 -35 -18 -51 -12 -70 27 -31 62 -7 90 56 64 60 -25 99 -35 104 -27 6 9 -116 60 -145 60 -12 0 -43 11 -70 25 -46 23 -59 25 -205 25 -120 0 -155 3 -155 13 0 21 -24 67 -36 67 -5 0 -18 6 -28 13 -16 12 -17 18 -5 55 9 32 9 45 0 56 -9 10 -9 20 0 39 16 35 3 114 -20 127 -10 5 -21 7 -24 4 -3 -3 -17 -7 -31 -8 -15 -2 -35 -11 -46 -21 -11 -10 -21 -16 -23 -14 -12 17 -27 65 -27 87 0 15 -8 38 -17 52 -18 26 -19 30 -28 130 -7 86 1 120 26 117 15 -1 24 7 34 36 16 47 33 67 50 61 25 -10 48 41 41 90 -6 39 -4 46 19 64 31 25 34 73 5 100 -20 18 -20 21 -6 63 9 24 16 52 16 62 0 11 9 21 19 24 11 3 25 18 31 34 7 16 18 29 24 29 9 0 11 18 8 59 -4 53 -2 60 16 65 12 4 24 16 27 26 7 23 -13 99 -31 119 -11 12 -8 17 12 33 23 19 33 58 15 58 -14 0 -23 35 -15 64 3 14 12 26 20 26 8 0 14 6 14 14 0 8 7 16 15 20 9 3 15 18 15 40 0 45 -46 86 -96 86 -27 0 -34 4 -34 20 0 18 7 20 80 20 56 0 82 4 84 13 24 77 10 97 -71 97 l-56 0 6 41 c3 22 13 49 22 59 15 17 15 21 2 40 -8 12 -13 29 -10 39 3 10 -2 32 -11 49 -20 39 -20 62 0 62 10 0 14 7 12 22 -2 18 -11 24 -35 26 -25 2 -34 9 -39 27 -7 28 1 219 10 233 3 6 15 8 26 5 30 -8 35 20 14 85 -10 31 -16 77 -14 102 1 25 4 62 4 82 1 21 5 40 9 44 3 4 -1 20 -10 37 -12 24 -13 35 -4 49 6 10 11 26 11 37 0 10 7 24 15 31 19 16 19 36 0 44 -20 7 -20 46 0 46 12 0 15 14 15 68 0 45 3 62 10 52 7 -11 11 -9 19 13 6 16 11 34 11 41 0 7 3 16 7 20 4 4 6 26 4 51 -3 59 10 80 64 101 50 19 68 52 42 78 -8 8 -18 41 -22 72 -4 32 -12 69 -17 83 -10 24 -19 114 -18 171 0 14 0 53 -1 88 0 41 4 62 11 62 8 0 11 11 8 30 -4 23 0 31 16 37 12 4 29 6 39 4 13 -2 17 5 17 27 0 31 22 57 49 57 11 0 18 13 23 45 7 48 -8 168 -23 185 -13 14 -11 22 9 27 19 5 45 87 36 113 -3 8 -1 15 5 15 6 0 11 5 11 11 0 6 9 22 20 36 11 14 20 34 20 44 0 13 6 18 23 16 21 -2 22 0 20 83 -2 47 2 102 9 123 9 29 8 42 -2 62 -7 13 -17 22 -22 19 -13 -8 -38 16 -38 37 0 11 4 19 9 19 20 0 21 34 1 52 -12 12 -20 32 -20 53 0 19 -9 50 -20 70 -22 38 -27 85 -9 85 22 0 4 44 -20 50 -20 4 -28 16 -38 55 -16 62 -8 126 17 132 16 4 34 36 31 56 -2 14 22 102 30 112 5 5 9 16 9 25 0 11 8 16 23 16 30 -1 65 64 42 77 -12 6 -14 19 -9 56 4 29 2 51 -4 55 -6 3 -8 15 -5 25 3 10 0 22 -6 25 -19 12 -12 52 13 79 23 25 56 128 56 178 0 14 18 44 45 74 25 28 53 59 62 70 22 24 43 63 43 79 0 6 11 34 24 61 14 28 27 58 30 68 4 13 14 18 33 16 16 -2 33 -1 38 2 6 4 22 9 38 13 35 8 34 27 -3 95 -34 62 -38 110 -12 134 16 14 17 25 11 70 -4 28 -15 69 -24 91 -18 43 -10 81 26 121 18 20 18 22 -3 64 -21 42 -21 44 -3 77 10 19 24 34 32 34 7 0 16 6 19 14 3 8 51 33 107 55 56 23 108 45 115 50 7 4 32 69 56 144 l43 136 -28 27 -28 26 -68 -15 c-67 -15 -68 -15 -85 6 -11 14 -15 30 -11 42 4 11 6 29 6 40 -6 82 -17 131 -33 153 -11 14 -20 37 -20 51 0 15 -7 37 -16 49 -9 13 -14 33 -11 44 7 25 -30 101 -68 142 -24 26 -25 30 -10 46 15 16 14 19 -13 41 -39 34 -44 45 -30 69 10 16 10 24 0 40 -11 18 -10 20 13 20 22 0 25 4 25 37 0 20 -7 44 -16 54 -15 17 -14 21 14 55 l30 36 -39 39 c-21 21 -43 39 -48 39 -15 0 -38 43 -45 85 -13 75 -28 140 -37 158 -6 11 -6 25 1 37 10 18 7 20 -20 20 -25 0 -30 4 -30 24 0 13 -7 30 -17 37 -9 8 -21 26 -28 41 -10 26 -13 27 -31 13z m-771 -8822 c-19 -7 -16 -21 7 -28 11 -4 18 -10 15 -15 -3 -5 -12 -7 -20 -3 -8 3 -15 0 -15 -6 0 -6 -4 -11 -10 -11 -16 0 -12 42 7 62 9 10 19 15 22 12 3 -4 0 -9 -6 -11z m327 -798 c0 -8 -7 -15 -16 -15 -14 0 -14 3 -4 15 7 8 14 15 16 15 2 0 4 -7 4 -15z', 'M4316 1479 c-7 -41 2 -59 29 -59 13 1 75 57 75 69 0 5 -12 11 -27 14 -16 3 -37 8 -49 12 -19 6 -22 2 -28 -36z', 'M4439 1402 c15 -27 14 -42 -2 -42 -7 0 -22 -6 -32 -14 -17 -12 -17 -15 -2 -36 19 -27 14 -60 -14 -100 -9 -14 -20 -44 -23 -67 -5 -37 -4 -41 13 -36 11 3 29 16 42 29 12 13 31 24 41 24 10 0 18 7 18 15 0 12 -8 14 -40 9 -43 -7 -51 3 -22 28 24 21 50 29 57 18 13 -22 25 -8 25 29 0 22 5 43 10 46 13 8 3 75 -14 92 -6 6 -24 15 -40 19 -26 6 -27 5 -17 -14z', 'M4320 1380 c0 -9 -5 -21 -11 -27 -8 -8 -5 -13 12 -18 17 -6 27 -2 40 16 25 32 24 36 -11 41 -23 3 -30 1 -30 -12z', 'M4405 1076 c-18 -13 -18 -15 3 -60 12 -25 22 -55 22 -65 0 -27 41 -56 52 -37 13 23 1 92 -24 135 -26 46 -27 46 -53 27z', 'M4491 781 c-20 -13 -5 -47 27 -60 15 -6 53 -20 85 -32 62 -22 60 -19 41 -79 -6 -19 32 -70 51 -70 13 0 27 -28 24 -46 -1 -5 -1 -17 0 -26 1 -23 27 -13 34 13 7 25 37 25 37 0 0 -11 -4 -23 -10 -26 -24 -15 -6 -23 51 -22 44 1 63 -2 69 -13 26 -43 26 -43 55 -24 22 14 31 15 46 6 10 -7 30 -12 44 -12 52 0 13 70 -48 85 -15 4 -30 11 -33 16 -10 17 -41 9 -54 -16 -17 -31 -30 -23 -30 19 0 36 -37 79 -80 91 -14 4 -47 30 -74 57 -27 28 -80 65 -120 85 -39 19 -75 42 -79 49 -9 16 -17 17 -36 5z', 'M5142 568 c-7 -7 -12 -21 -12 -31 0 -11 -6 -25 -14 -31 -16 -12 -24 -74 -12 -94 4 -7 27 -12 54 -12 l47 1 -35 30 c-30 26 -32 30 -12 26 22 -5 22 -3 16 46 -8 67 -16 81 -32 65z']
			),
			'location' => DB::raw('POINT(-35.675147, -71.542969)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}