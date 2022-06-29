<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GQ_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Equatorial Guinea',
			'code'  => 'GQ',
			'type'  => null,
			'paths' => serialize(
				['M2350 8685 c-14 -8 -58 -22 -97 -31 l-73 -16 0 -64 c0 -47 7 -81 26 -127 24 -56 28 -83 40 -277 22 -377 22 -396 -10 -469 -15 -36 -38 -79 -50 -95 -13 -17 -33 -55 -45 -83 l-21 -53 31 -62 c18 -35 33 -74 34 -88 1 -14 10 -64 20 -112 14 -67 22 -87 36 -91 14 -4 19 -14 19 -38 0 -18 19 -119 42 -224 25 -118 39 -202 34 -218 -3 -14 -29 -55 -56 -91 -27 -36 -62 -89 -76 -119 -18 -36 -39 -62 -64 -77 -21 -13 -45 -38 -54 -57 -9 -18 -36 -48 -61 -65 -25 -18 -45 -35 -45 -40 0 -4 25 -15 55 -23 41 -12 55 -21 55 -35 0 -17 -2 -17 -28 -4 -16 7 -39 15 -52 16 -24 3 -25 0 -33 -72 -7 -60 -16 -89 -48 -145 -22 -38 -48 -79 -57 -90 -30 -35 -89 -75 -144 -96 -50 -19 -56 -25 -93 -95 -37 -69 -79 -114 -131 -142 -12 -6 -25 -23 -28 -37 -4 -14 -13 -25 -20 -25 -24 0 -76 -50 -76 -74 0 -14 -13 -29 -39 -45 l-39 -25 -7 -114 -8 -114 47 -47 c56 -57 61 -82 14 -75 -29 5 -38 0 -74 -38 -30 -30 -47 -60 -59 -102 -9 -32 -33 -82 -54 -110 -22 -29 -41 -68 -45 -91 -4 -22 -16 -72 -28 -111 l-22 -72 -50 -6 c-61 -7 -59 -4 -91 -123 -5 -16 -152 -126 -210 -156 -29 -15 -60 -41 -75 -63 -14 -21 -49 -64 -79 -96 -60 -66 -60 -59 -12 -183 17 -44 31 -82 31 -84 0 -2 -9 -1 -19 2 -22 5 -31 -16 -31 -75 0 -30 -6 -42 -33 -62 -19 -15 -37 -26 -42 -26 -21 0 -82 -69 -100 -113 -19 -47 -25 -52 -75 -69 -64 -22 -103 -54 -81 -67 19 -12 10 -72 -24 -151 -18 -41 -27 -80 -26 -108 0 -23 -3 -42 -8 -42 -5 0 -15 -17 -22 -37 -6 -21 -23 -54 -35 -73 -13 -19 -24 -39 -24 -45 0 -5 -14 -30 -30 -54 -33 -49 -38 -87 -15 -131 11 -22 23 -30 43 -30 22 0 35 -12 73 -68 45 -64 50 -68 109 -85 l63 -18 26 25 c15 15 37 26 49 26 36 0 132 33 132 46 0 7 15 15 33 19 17 4 48 19 67 35 34 26 37 27 79 14 39 -11 48 -11 71 3 25 15 29 14 67 -11 23 -16 61 -29 91 -33 l51 -6 43 -80 c24 -44 55 -92 69 -106 33 -33 59 -109 59 -175 0 -35 7 -59 19 -76 l20 -25 53 24 c29 13 67 23 85 22 23 -1 33 4 38 18 4 14 19 23 43 27 50 9 69 20 77 44 3 11 14 20 23 20 9 0 38 10 64 22 34 16 46 27 41 38 -3 8 -8 27 -11 42 -4 25 -1 28 22 28 24 0 28 6 48 75 19 66 27 79 70 114 30 24 64 42 88 46 55 9 52 32 -10 73 -41 28 -52 32 -69 22 -12 -6 -21 -18 -21 -26 0 -27 -25 -9 -28 20 -5 44 6 79 23 72 8 -3 22 -9 30 -12 10 -4 15 0 15 10 0 19 5 20 31 6 12 -7 19 -21 19 -39 0 -22 7 -31 29 -41 25 -10 35 -8 69 9 70 36 93 71 47 71 -14 0 -25 1 -26 3 0 1 -4 40 -9 87 -8 84 -8 85 20 115 27 28 60 107 60 142 0 12 3 13 15 3 11 -9 13 -27 11 -68 -4 -46 -9 -59 -30 -75 -14 -10 -26 -27 -26 -37 0 -9 -6 -23 -14 -29 -24 -20 -26 -62 -3 -93 11 -15 24 -28 28 -28 13 0 20 33 9 44 -18 18 -11 36 15 36 23 0 25 -4 25 -45 0 -36 3 -45 18 -45 9 0 22 4 28 8 16 10 124 143 124 152 0 7 45 30 60 30 19 0 10 -22 -22 -55 -67 -68 -85 -91 -97 -121 -13 -33 -46 -54 -86 -54 -42 0 -55 -11 -61 -52 -5 -29 -10 -38 -22 -33 -9 3 -35 -14 -68 -45 -42 -40 -60 -50 -87 -50 -49 0 -89 -44 -86 -96 1 -21 -3 -59 -10 -84 -6 -25 -11 -48 -11 -52 0 -5 26 -8 59 -8 46 0 66 5 95 25 40 27 90 32 173 16 111 -22 113 -22 113 -2 0 10 3 21 7 24 11 12 33 -14 33 -39 0 -29 13 -37 69 -40 25 -1 79 -8 119 -14 72 -12 73 -11 96 13 13 14 37 32 55 41 17 9 31 21 31 26 0 5 13 7 29 4 16 -3 32 -1 35 5 4 5 12 45 18 88 10 66 9 82 -4 107 -14 27 -14 32 4 63 11 18 23 35 28 38 4 2 7 -32 7 -78 -1 -45 3 -101 7 -125 8 -37 6 -48 -15 -75 -12 -17 -25 -47 -29 -67 l-5 -35 -65 -6 c-42 -3 -88 -16 -129 -36 l-63 -30 36 -21 c20 -12 36 -27 36 -34 0 -7 9 -2 19 11 15 20 23 23 52 17 19 -4 54 -9 79 -12 42 -5 70 -13 114 -36 10 -5 35 -7 56 -3 42 7 60 -6 40 -30 -16 -19 -58 -19 -105 1 -21 8 -46 13 -56 11 -10 -3 -26 1 -36 9 -10 7 -28 14 -39 14 -12 0 -27 7 -34 15 -16 19 -40 19 -40 1 0 -8 -11 -27 -24 -42 -22 -27 -25 -27 -65 -16 -42 13 -53 28 -26 38 8 4 15 9 15 13 0 14 -76 31 -134 31 -62 0 -68 -8 -42 -58 8 -16 16 -66 18 -115 3 -82 4 -87 28 -95 15 -6 35 -5 50 0 37 14 131 -2 165 -27 41 -31 90 -55 113 -55 20 0 82 -59 82 -78 0 -7 11 -35 25 -62 23 -46 32 -52 137 -106 62 -31 121 -63 131 -72 15 -14 24 -14 95 2 42 9 100 17 127 19 l50 2 3 50 c2 27 8 55 13 61 6 7 4 22 -6 40 -19 36 -19 73 0 98 8 11 15 32 15 48 l0 28 1839 2 c1733 3 1840 4 1858 20 16 15 47 19 184 24 158 6 165 7 191 31 24 23 40 27 135 35 59 5 126 15 148 22 32 10 62 10 143 1 97 -11 105 -14 140 -47 20 -19 53 -47 74 -62 l36 -27 739 6 c406 3 878 8 1050 11 l312 6 3 2822 3 2821 58 112 c31 62 57 114 57 116 0 3 -105 7 -232 11 -128 3 -292 12 -365 19 -125 11 -133 13 -173 45 -49 40 -66 39 -155 -16 l-60 -37 -2525 -5 -2525 -5 -60 -27 c-33 -15 -75 -28 -93 -28 -18 0 -50 -9 -72 -20 -54 -28 -74 -25 -117 14 -22 19 -53 36 -73 39 -19 3 -53 11 -76 18 -35 11 -49 10 -104 -7 -51 -15 -64 -24 -72 -46 -13 -35 -45 -37 -58 -4 -15 40 -49 55 -140 61 -108 8 -166 28 -184 64 -12 23 -25 29 -77 39 -42 8 -67 8 -73 2 -6 -6 -22 -10 -37 -10 -21 0 -29 7 -38 30 -6 18 -17 30 -28 30 -44 0 -94 22 -103 45 -5 13 -14 26 -19 30 -6 3 -11 13 -11 20 0 27 -83 103 -125 113 -83 22 -102 19 -140 -18 -28 -27 -35 -30 -35 -16 0 10 10 36 22 58 l22 39 -22 62 c-12 34 -22 79 -22 100 0 42 -1 43 -36 21 -32 -22 -56 -5 -36 26 18 29 15 37 -13 44 l-26 7 28 23 c15 13 38 26 51 30 34 11 30 64 -10 114 -37 46 -42 47 -78 27z']
			),
			'location' => DB::raw('POINT(1.650801, 10.267895)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}