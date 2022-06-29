<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LA_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Laos',
			'code'  => 'LA',
			'type'  => null,
			'paths' => serialize(
				['M3638 10227 c-50 -16 -71 -47 -58 -82 9 -23 5 -32 -32 -76 -23 -27 -53 -52 -67 -55 -51 -11 -53 -13 -48 -47 2 -17 11 -47 18 -65 13 -30 12 -34 -4 -43 -22 -13 -22 -32 3 -95 13 -35 17 -64 13 -88 -5 -32 -2 -40 18 -54 13 -9 32 -15 42 -14 11 2 17 -3 17 -17 0 -12 -4 -21 -10 -21 -18 0 -10 -18 10 -23 13 -3 20 -14 20 -30 0 -13 7 -30 15 -37 13 -10 12 -17 -5 -51 -12 -23 -20 -58 -20 -91 0 -45 4 -57 31 -84 37 -38 31 -54 -18 -54 l-35 0 7 -46 c6 -40 4 -48 -14 -61 -12 -8 -21 -24 -21 -36 0 -12 -8 -38 -19 -57 -33 -63 -35 -79 -9 -116 12 -18 28 -34 34 -34 18 0 44 -35 44 -58 0 -16 -7 -21 -32 -24 -29 -3 -33 -7 -36 -34 -3 -28 -6 -30 -34 -26 -21 3 -36 15 -51 39 -19 33 -23 35 -64 30 -35 -4 -43 -2 -39 9 3 8 8 20 11 27 9 20 -78 57 -134 57 -27 0 -78 -9 -113 -20 -84 -26 -95 -25 -113 9 -15 29 -11 84 10 173 6 21 2 29 -19 43 -31 21 -33 40 -6 80 27 41 26 86 -4 114 l-24 22 -22 -36 c-32 -52 -130 -114 -212 -135 -38 -10 -83 -29 -101 -43 -46 -35 -69 -39 -110 -22 -67 28 -71 25 -127 -92 -67 -141 -99 -181 -148 -185 -32 -3 -38 -7 -42 -33 -3 -16 -15 -49 -28 -73 -18 -33 -20 -47 -12 -62 12 -23 11 -23 64 -10 52 12 77 -1 44 -22 -13 -8 -40 -21 -60 -29 -35 -12 -43 -11 -90 10 -76 34 -112 37 -142 14 -13 -11 -46 -28 -73 -38 -96 -36 -155 -115 -199 -270 -29 -101 -34 -112 -68 -134 -35 -24 -36 -26 -36 -86 0 -71 12 -92 58 -101 32 -6 32 -6 32 34 0 37 3 41 28 44 18 2 28 10 30 23 3 23 53 55 86 55 41 0 63 -27 81 -97 10 -38 36 -103 58 -145 38 -75 61 -95 73 -63 9 22 34 18 34 -5 0 -12 -6 -33 -14 -48 -7 -15 -16 -42 -20 -61 -3 -19 -17 -49 -30 -66 -14 -17 -26 -47 -28 -66 -2 -26 -11 -38 -38 -56 -35 -21 -45 -31 -81 -72 -30 -34 -27 -163 7 -244 45 -108 85 -135 135 -93 l31 26 30 -25 c16 -14 37 -25 47 -25 10 0 26 -9 36 -20 10 -11 23 -20 29 -20 7 0 45 30 85 66 l72 67 67 -11 c59 -10 71 -16 102 -51 40 -45 97 -60 140 -36 20 11 29 11 50 0 22 -12 26 -19 22 -49 -4 -36 -48 -86 -76 -86 -18 0 -35 -64 -29 -110 3 -22 9 -40 12 -40 4 0 5 -58 3 -128 l-4 -129 41 -35 41 -35 -25 -34 c-14 -19 -33 -47 -42 -63 -10 -17 -30 -42 -46 -56 -23 -22 -30 -41 -43 -121 -8 -52 -13 -106 -10 -120 4 -20 -2 -33 -22 -51 -15 -14 -35 -28 -45 -31 -9 -4 -22 -17 -28 -31 -12 -25 -47 -46 -79 -46 -13 0 -20 -7 -20 -19 0 -11 -11 -33 -24 -48 l-25 -30 24 -50 c13 -29 32 -54 43 -57 26 -9 36 -35 17 -42 -21 -9 -21 -100 1 -108 13 -5 11 -11 -10 -39 -28 -36 -37 -100 -18 -119 9 -9 2 -18 -33 -40 -32 -20 -47 -37 -51 -57 -5 -21 -18 -34 -59 -54 -45 -22 -53 -30 -59 -62 -4 -20 -13 -38 -20 -41 -8 -3 -17 -20 -21 -37 -8 -34 -10 -43 -21 -122 -4 -29 -15 -60 -28 -74 -21 -23 -21 -23 -1 -35 11 -6 51 -44 89 -83 38 -40 73 -73 78 -73 5 0 14 14 19 30 9 24 17 30 39 30 22 0 42 15 93 71 54 57 73 71 104 76 47 7 66 21 60 45 -5 16 0 18 31 16 21 -2 40 -7 43 -11 3 -5 29 4 58 20 41 22 50 32 47 48 -7 28 4 41 39 48 87 17 137 42 166 83 15 22 31 53 35 68 3 14 10 28 14 31 5 3 34 -7 65 -22 38 -19 60 -24 69 -18 7 6 46 32 86 58 40 27 84 62 97 78 41 48 110 31 126 -30 4 -19 26 -60 47 -91 30 -44 47 -59 77 -68 21 -6 48 -24 60 -39 38 -53 101 -88 167 -93 56 -5 61 -7 71 -34 8 -24 6 -31 -13 -46 -12 -10 -22 -28 -22 -41 0 -30 48 -79 77 -79 19 0 23 5 23 34 0 30 4 34 32 40 18 3 41 15 53 25 11 10 34 21 50 24 17 3 50 13 75 22 62 23 117 21 145 -5 18 -17 27 -20 43 -11 30 16 56 62 62 111 4 33 11 47 27 56 38 18 60 44 67 75 7 37 57 69 108 69 20 0 43 3 52 6 14 5 13 9 -4 31 -11 14 -20 30 -20 34 0 5 17 25 38 44 31 29 42 34 67 29 17 -3 61 -10 98 -15 72 -9 170 -56 233 -112 25 -21 47 -30 89 -34 50 -5 58 -9 72 -37 22 -42 33 -47 64 -29 42 25 72 11 122 -59 35 -51 47 -77 56 -133 10 -56 22 -86 62 -147 29 -44 57 -101 66 -135 10 -39 26 -70 48 -93 18 -19 56 -82 84 -140 61 -126 63 -129 123 -164 26 -15 76 -56 111 -91 51 -51 71 -80 97 -141 29 -70 31 -83 25 -143 -10 -98 -61 -239 -102 -282 l-34 -36 -4 -166 c-4 -145 -7 -173 -27 -219 -14 -33 -22 -73 -23 -108 0 -50 4 -60 42 -108 32 -40 44 -65 49 -103 6 -41 13 -55 41 -76 47 -36 83 -110 83 -170 0 -96 56 -144 257 -218 64 -24 120 -49 124 -56 5 -9 -8 -24 -42 -46 -27 -19 -49 -40 -49 -49 0 -8 8 -31 19 -52 10 -20 22 -52 26 -70 7 -34 45 -62 84 -62 56 0 114 -65 142 -157 12 -42 11 -43 -24 -82 -22 -24 -38 -54 -42 -78 -14 -79 -19 -88 -61 -94 -48 -7 -94 -26 -94 -37 0 -20 48 -52 78 -52 28 0 32 -4 32 -25 0 -18 -7 -28 -26 -36 -15 -5 -48 -27 -74 -49 -62 -52 -71 -89 -32 -135 15 -19 33 -34 40 -34 6 -1 12 -9 12 -20 0 -10 12 -35 26 -56 27 -40 22 -55 -21 -55 -18 0 -20 -5 -17 -35 3 -26 0 -36 -12 -41 -11 -4 -14 -13 -11 -24 4 -14 0 -19 -17 -22 -21 -3 -24 -10 -30 -80 -4 -42 -12 -95 -18 -117 -7 -26 -7 -48 0 -65 9 -24 5 -30 -60 -82 -39 -31 -70 -62 -70 -69 0 -11 -39 -21 -112 -29 -15 -1 -33 -8 -41 -15 -8 -6 -21 -9 -30 -5 -8 3 -18 1 -22 -5 -3 -6 -17 -11 -29 -11 -19 0 -25 -7 -29 -33 -3 -20 0 -35 8 -39 7 -4 16 -20 19 -34 9 -33 66 -122 94 -148 19 -17 32 -18 131 -12 90 6 114 5 140 -8 17 -9 31 -23 31 -32 0 -10 6 -13 19 -9 10 3 23 0 29 -7 6 -7 31 -22 56 -33 30 -13 46 -26 46 -38 0 -23 14 -50 61 -113 37 -51 39 -52 102 -58 36 -4 82 -16 102 -27 36 -19 38 -19 51 -2 7 10 14 25 14 33 0 27 29 57 60 63 39 8 39 29 0 74 -24 27 -30 43 -30 78 0 39 -4 46 -29 59 -32 17 -41 34 -41 77 0 17 -5 39 -11 50 -11 22 -3 61 9 44 14 -20 65 -37 72 -24 5 8 26 9 68 4 33 -4 69 -4 80 -1 18 6 48 60 54 100 3 17 6 17 34 -8 26 -21 42 -26 86 -26 57 0 78 12 78 43 0 16 5 18 26 13 23 -6 26 -4 22 12 -5 16 3 23 35 36 48 19 57 12 57 -46 0 -30 4 -37 22 -40 15 -2 25 -13 32 -35 5 -18 13 -33 17 -33 5 0 18 -9 29 -20 11 -11 30 -20 43 -20 19 0 25 -8 35 -45 7 -25 27 -62 45 -81 30 -33 36 -35 56 -24 22 11 50 10 99 -5 14 -5 22 -3 22 5 0 15 91 99 108 100 6 0 12 -4 12 -8 0 -5 6 -16 13 -26 13 -17 17 -16 88 17 41 20 83 37 94 39 12 2 21 12 23 26 2 12 14 33 28 47 13 13 24 29 24 35 0 16 48 -19 55 -41 6 -18 52 -49 73 -49 4 0 18 20 30 45 14 30 30 47 46 51 14 3 37 22 52 41 23 30 25 39 15 55 -10 16 -9 22 5 32 14 11 15 15 3 34 -18 29 -4 51 44 75 40 19 48 42 19 51 -10 4 -33 20 -50 37 -25 24 -32 40 -32 69 0 36 1 38 41 43 24 3 50 1 61 -6 16 -10 22 -8 39 12 10 13 19 32 19 42 0 11 10 24 23 30 12 5 31 30 42 54 11 25 25 45 32 45 26 0 13 50 -23 90 -31 34 -35 45 -30 71 8 41 -7 66 -44 74 -36 8 -44 19 -31 43 16 29 -28 69 -85 78 -50 7 -53 11 -75 98 -9 36 -20 53 -41 65 -22 13 -28 23 -28 52 0 27 -7 42 -31 63 -28 25 -29 29 -15 45 9 10 16 31 16 47 0 28 3 30 78 52 43 12 92 22 110 22 34 0 39 4 78 64 21 32 24 46 19 77 l-7 39 -58 0 -59 0 -26 44 c-20 34 -37 49 -71 62 -55 21 -66 41 -58 101 8 65 -20 98 -94 108 -51 7 -58 12 -110 75 -55 67 -67 117 -36 151 15 17 14 20 -6 48 -27 39 -43 39 -69 -1 -11 -18 -29 -39 -40 -46 -12 -7 -21 -19 -21 -26 0 -29 -35 -22 -67 13 -34 37 -51 95 -33 115 15 19 3 46 -36 83 l-34 32 0 123 c0 77 6 144 15 178 20 75 19 89 -5 83 -12 -3 -31 5 -51 21 -17 14 -34 26 -39 26 -14 0 -29 56 -19 71 12 20 11 29 -4 29 -15 0 -37 41 -37 69 0 10 -7 24 -15 31 -18 15 -20 47 -2 53 9 3 7 9 -5 24 -10 11 -18 32 -18 46 0 32 -29 38 -37 7 -3 -11 -13 -20 -23 -20 -18 0 -50 30 -50 47 0 5 -11 16 -25 23 -14 7 -25 21 -25 30 0 9 -13 26 -29 38 -29 21 -53 58 -107 157 -68 127 -136 224 -170 240 -23 11 -34 23 -34 38 0 12 -16 42 -35 66 -40 50 -39 46 -24 73 10 19 7 25 -22 49 l-34 28 16 43 c9 24 19 51 24 60 4 12 -1 25 -19 43 -14 14 -26 34 -26 45 0 10 -13 39 -30 63 -20 29 -30 57 -30 81 0 31 -4 38 -32 50 -31 13 -34 12 -53 -10 -25 -29 -52 -31 -81 -3 -18 16 -21 28 -16 65 5 43 4 44 -26 44 -21 0 -31 6 -35 20 -3 11 -19 28 -36 37 -34 20 -40 47 -14 75 15 17 14 19 -16 29 -17 6 -36 19 -41 29 -16 30 -12 119 7 153 31 57 44 67 64 56 17 -9 19 -6 19 24 0 19 -7 40 -15 47 -8 7 -15 21 -15 31 0 13 -7 19 -23 19 -13 0 -45 11 -71 24 -26 13 -63 27 -82 30 -24 5 -34 12 -34 25 0 31 -32 51 -72 45 -29 -5 -40 -2 -54 15 -10 11 -29 21 -41 21 -17 0 -27 10 -37 35 -10 22 -26 39 -43 46 -40 15 -131 107 -138 141 -7 31 -39 53 -71 49 -23 -2 -54 36 -54 67 0 12 -12 22 -35 31 -20 7 -45 26 -57 42 -12 16 -31 29 -43 29 -26 0 -45 18 -38 36 3 8 0 14 -6 14 -6 0 -11 8 -11 19 0 11 -12 23 -29 31 -16 6 -41 25 -57 41 -23 24 -36 29 -74 29 -48 0 -90 21 -90 46 0 8 -7 14 -15 14 -8 0 -15 9 -15 20 0 14 -7 20 -21 20 -11 0 -17 5 -14 10 3 6 15 10 25 10 10 0 32 12 49 26 17 14 47 28 68 30 66 10 90 23 96 54 4 17 15 31 27 35 31 10 25 54 -15 111 -34 48 -41 76 -29 108 9 22 41 20 54 -4 11 -21 75 -29 82 -10 8 25 168 7 168 -19 0 -6 23 -7 54 -4 53 5 55 5 70 -26 9 -17 21 -31 26 -31 5 0 21 -12 35 -26 21 -20 34 -25 68 -23 23 1 51 -2 63 -9 19 -10 23 -7 42 37 27 62 77 104 104 88 16 -10 21 -9 29 6 6 10 22 17 38 17 16 0 34 7 41 15 18 22 3 70 -27 84 -21 9 -23 14 -13 26 24 29 144 85 182 85 l38 0 0 44 c0 25 5 48 10 51 6 4 3 16 -10 32 -24 31 -25 41 -4 64 14 16 14 18 -8 24 -13 4 -38 21 -56 37 -29 25 -42 29 -85 28 -64 -2 -122 12 -121 28 1 7 2 25 3 41 1 20 8 32 21 36 28 9 25 42 -7 74 -16 16 -36 40 -46 54 -14 21 -26 27 -55 27 -20 1 -55 8 -77 16 -22 9 -50 18 -62 21 -27 6 -57 38 -49 52 4 6 32 18 62 28 44 14 59 15 74 5 33 -20 58 -14 74 17 9 16 34 45 56 63 22 19 40 42 40 50 0 9 -31 35 -69 58 -55 33 -71 48 -76 71 -5 21 -17 35 -41 46 -19 9 -34 22 -34 29 0 7 -8 15 -18 18 -10 4 -32 34 -48 69 -26 55 -33 62 -57 60 -20 -1 -27 3 -27 16 0 22 -52 61 -83 61 -12 0 -28 5 -34 11 -16 16 -81 2 -95 -21 -9 -14 -19 -18 -36 -13 -22 5 -114 -18 -156 -39 -13 -7 -21 -6 -26 2 -5 8 -18 10 -34 6 -19 -5 -26 -13 -26 -30 0 -13 -7 -26 -15 -30 -10 -4 -13 -14 -9 -36 6 -29 5 -30 -28 -30 -34 0 -36 -2 -42 -40 -5 -34 -10 -40 -31 -40 -14 0 -25 6 -25 13 0 7 -22 36 -48 65 -35 38 -56 52 -75 52 -32 0 -67 32 -67 60 0 22 -16 25 -53 11 -19 -7 -36 -2 -86 24 -35 19 -69 31 -76 29 -7 -3 -16 -1 -20 5 -3 6 -13 11 -21 11 -26 0 -114 81 -113 104 0 11 -14 58 -32 102 -26 63 -39 84 -60 91 -20 8 -27 19 -32 49 -4 21 -14 52 -22 68 -8 15 -15 41 -15 56 0 32 -23 60 -49 60 -10 0 -24 6 -30 14 -9 11 -3 16 34 27 40 12 45 17 45 42 0 17 14 46 35 74 48 63 47 78 -2 46 -26 -17 -27 -17 -20 0 4 10 7 23 7 28 0 5 8 13 18 17 9 4 41 33 71 64 l53 58 -4 61 c-5 70 -21 89 -75 89 l-33 0 0 75 c0 67 -2 75 -19 75 -16 0 -20 -10 -26 -52 -7 -55 -27 -80 -89 -114 -23 -13 -33 -13 -56 -4 l-29 12 0 98 c0 64 -4 106 -13 119 -11 18 -11 23 1 30 21 13 -1 44 -58 80 -52 34 -68 58 -51 75 18 18 11 41 -20 71 -16 16 -30 39 -30 52 0 12 -9 27 -19 33 -11 5 -23 19 -26 30 -3 11 -12 20 -18 20 -7 0 -17 10 -22 23 -6 12 -20 26 -32 32 -12 5 -24 18 -27 28 -2 11 -9 16 -15 13 -12 -8 -69 102 -96 182 -9 29 -28 66 -41 82 -21 25 -28 27 -54 20 -16 -5 -55 -8 -86 -8 -53 1 -66 -5 -77 -36 -2 -6 -17 0 -34 12 -22 15 -34 36 -45 74 -13 48 -17 53 -44 55 -16 1 -46 -3 -66 -10z']
			),
			'location' => DB::raw('POINT(19.85627, 102.495496)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}