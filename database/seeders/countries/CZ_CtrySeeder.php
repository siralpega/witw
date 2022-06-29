<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CZ_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Czech Republic',
			'code'  => 'CZ',
			'type'  => null,
			'paths' => serialize(
				['M3347 7963 c-2 -5 -10 -25 -16 -45 -8 -23 -24 -44 -42 -55 -16 -10 -29 -20 -29 -23 0 -4 13 -19 29 -34 22 -21 34 -26 55 -20 29 7 31 2 15 -27 -9 -18 -4 -23 60 -52 39 -18 71 -37 71 -43 0 -36 -94 -84 -166 -84 -58 0 -91 -11 -105 -36 -7 -14 -53 -46 -108 -76 -88 -48 -102 -52 -170 -55 -62 -2 -78 -6 -100 -26 -21 -19 -34 -23 -63 -20 l-38 5 0 -51 c0 -45 -3 -52 -27 -64 -16 -8 -66 -18 -113 -22 -46 -4 -98 -14 -114 -22 -20 -11 -43 -13 -74 -9 -38 5 -50 2 -78 -19 -25 -19 -45 -25 -84 -25 l-51 0 -20 -47 c-11 -27 -23 -60 -26 -74 -3 -15 -22 -44 -44 -65 -43 -42 -32 -44 -120 28 l-47 38 -5 -28 c-4 -18 -20 -38 -42 -53 -27 -18 -34 -29 -30 -44 12 -40 10 -48 -18 -56 -25 -7 -30 -4 -44 27 -9 19 -19 34 -22 34 -9 0 -30 -35 -78 -132 l-43 -87 -36 6 c-19 3 -60 0 -90 -7 -42 -10 -57 -11 -66 -2 -26 26 -36 12 -44 -54 -6 -57 -12 -73 -41 -105 -36 -40 -93 -66 -115 -53 -7 4 -46 32 -86 62 l-74 54 -51 -36 c-29 -20 -71 -50 -94 -67 -39 -30 -42 -31 -64 -15 -33 23 -62 20 -167 -16 -92 -31 -93 -32 -148 -104 -32 -42 -65 -75 -79 -78 -18 -5 -26 -15 -31 -41 -4 -24 -12 -35 -24 -35 -24 0 -60 -90 -60 -151 0 -61 -27 -111 -55 -103 -33 10 -47 35 -41 76 6 35 4 39 -26 54 -44 22 -43 20 -24 49 18 28 14 32 -39 37 -26 3 -31 9 -45 58 -12 40 -21 55 -33 54 -82 -4 -79 -3 -74 -26 3 -13 9 -35 12 -49 5 -21 1 -28 -29 -44 -20 -11 -36 -22 -36 -25 1 -12 38 -48 76 -72 28 -18 53 -47 77 -90 31 -55 34 -65 21 -79 -8 -8 -14 -34 -14 -57 0 -39 3 -42 50 -68 38 -21 50 -33 50 -50 0 -20 7 -25 40 -30 25 -4 45 -15 55 -30 8 -12 44 -39 80 -59 53 -30 65 -41 65 -62 0 -16 4 -23 13 -20 6 3 19 8 28 12 13 5 20 -2 29 -29 6 -19 10 -45 8 -57 -2 -17 7 -25 52 -43 55 -22 55 -22 52 -62 -3 -37 -44 -114 -83 -159 -10 -11 -21 -43 -25 -72 -6 -48 -9 -53 -40 -63 -19 -6 -43 -25 -55 -41 l-21 -30 25 -27 c13 -15 29 -40 34 -56 8 -26 17 -32 72 -44 49 -11 61 -17 57 -30 -2 -9 -7 -38 -11 -65 -6 -44 -5 -48 19 -57 34 -13 63 -62 77 -131 10 -50 15 -58 45 -72 28 -14 34 -22 34 -49 0 -17 10 -62 22 -99 17 -53 27 -69 44 -73 13 -4 45 -20 71 -36 46 -29 51 -35 71 -103 l21 -73 58 0 c32 1 66 -3 75 -8 14 -6 18 -4 18 13 0 12 6 21 14 21 34 0 103 -34 142 -70 24 -22 50 -40 59 -40 10 0 15 -10 15 -29 0 -19 14 -47 38 -78 21 -26 48 -64 60 -84 11 -19 42 -50 67 -68 37 -27 45 -38 45 -65 0 -25 9 -39 44 -69 36 -30 53 -37 88 -37 39 -1 50 -7 121 -73 l77 -73 15 -79 c16 -86 17 -87 114 -157 l44 -32 -6 37 -6 37 58 0 c45 0 62 -4 76 -20 10 -11 26 -20 35 -20 24 0 34 -14 65 -92 29 -72 29 -72 88 -59 37 9 39 8 52 -24 8 -18 25 -46 38 -61 42 -50 67 -107 55 -128 -14 -25 5 -36 61 -36 41 0 50 -5 111 -64 37 -36 79 -68 93 -71 24 -6 97 -92 97 -113 0 -5 -12 -14 -26 -21 l-25 -11 30 -39 c41 -51 46 -55 121 -81 49 -18 88 -24 157 -24 l92 -1 41 -40 40 -39 28 27 c15 15 35 27 44 27 12 0 15 6 11 21 -5 20 -3 21 27 17 30 -5 33 -2 51 39 10 25 19 56 19 69 0 34 31 31 53 -5 14 -24 28 -32 72 -41 47 -10 57 -9 81 6 25 17 27 17 40 -1 8 -10 14 -23 14 -28 0 -5 11 -6 24 -3 20 5 30 -1 50 -26 l25 -32 24 22 c21 20 25 35 30 110 8 121 19 153 61 176 43 23 86 83 86 119 0 33 5 33 105 1 81 -27 131 -32 146 -17 5 5 -1 28 -13 52 -20 41 -20 45 -5 94 9 29 14 62 11 73 -3 12 4 40 16 63 l21 42 -20 55 c-29 77 -28 118 4 132 17 8 25 20 25 37 0 19 5 25 23 25 43 0 67 -12 73 -36 6 -22 11 -24 63 -24 l57 0 22 -46 c19 -39 26 -45 45 -40 12 3 41 6 65 6 39 0 44 3 59 35 16 33 19 35 67 35 42 0 61 -6 103 -35 33 -22 71 -38 99 -42 40 -5 49 -11 58 -34 8 -23 24 -33 86 -56 41 -15 98 -44 127 -66 40 -30 66 -41 119 -49 47 -8 69 -8 71 -1 2 5 9 18 16 27 11 15 23 10 126 -48 66 -38 139 -89 175 -123 33 -32 82 -75 107 -96 l46 -37 143 0 c106 0 157 -4 196 -17 51 -16 54 -16 74 2 16 14 23 16 32 7 21 -21 33 -13 92 58 53 63 62 70 95 70 20 0 45 7 56 15 17 14 22 12 55 -20 34 -33 37 -34 73 -23 35 11 39 10 67 -17 19 -19 30 -40 32 -64 3 -35 4 -36 39 -33 22 2 61 -7 100 -22 63 -26 66 -26 139 -12 41 8 76 13 78 12 1 -2 10 -45 19 -97 9 -52 19 -97 23 -102 3 -4 16 26 29 65 13 40 33 84 45 98 13 14 28 45 35 70 8 29 29 61 56 90 24 25 61 69 83 99 37 52 42 56 108 71 l69 17 97 -50 97 -51 93 36 93 35 41 -23 c53 -31 73 -30 132 5 31 18 71 31 109 36 l60 7 43 89 44 89 41 -1 c69 -2 124 30 185 109 32 41 65 73 80 77 13 4 53 23 87 44 74 44 113 98 149 205 13 39 33 80 45 92 16 17 23 42 28 101 5 50 16 96 32 128 l24 49 115 36 c63 21 138 48 165 61 45 22 52 30 70 82 14 37 37 73 67 104 26 27 57 72 70 102 21 48 28 55 78 75 l54 22 70 -19 69 -19 113 42 c113 42 114 42 124 82 10 34 7 49 -19 121 -17 45 -35 102 -42 127 -13 52 -43 90 -73 90 -39 0 -65 12 -71 31 -5 14 -16 19 -41 19 -56 0 -94 25 -94 61 0 17 -18 72 -40 121 -22 50 -40 95 -40 99 0 5 11 27 25 49 14 22 25 42 25 45 0 3 -13 5 -30 5 -16 0 -30 3 -30 8 1 4 5 26 9 49 7 38 6 44 -16 58 -23 15 -24 15 -34 -15 -10 -27 -15 -30 -52 -30 -32 0 -48 7 -73 31 -23 23 -50 35 -96 45 -85 18 -85 18 -97 -17 l-11 -31 -30 22 c-17 12 -37 34 -45 50 -9 17 -28 33 -48 39 -26 9 -38 22 -54 59 l-20 47 -13 -27 c-16 -33 -21 -34 -77 -10 -34 13 -44 23 -49 47 -3 17 -25 52 -49 79 l-43 49 -22 -43 c-12 -23 -20 -43 -18 -45 2 -1 13 -8 26 -14 12 -6 22 -19 22 -28 0 -12 -7 -14 -31 -9 -26 5 -40 -1 -87 -38 -44 -34 -68 -45 -107 -50 -49 -6 -51 -5 -109 47 -43 39 -70 76 -105 143 l-46 89 -40 0 c-42 0 -68 21 -139 117 l-27 36 51 11 c28 6 67 11 86 11 27 0 37 5 46 24 6 14 24 30 39 37 24 9 29 17 29 46 0 19 -9 48 -20 63 -18 26 -19 31 -6 68 l14 39 -48 36 -48 36 -6 -30 c-3 -17 -15 -44 -27 -60 -20 -28 -23 -29 -102 -29 -53 0 -105 -7 -147 -20 -91 -28 -109 -26 -121 10 -13 37 -28 38 -60 4 -24 -25 -24 -25 -40 -5 -12 15 -15 33 -12 66 l6 45 -38 0 c-27 0 -58 12 -106 42 -59 36 -69 47 -69 70 0 27 -1 28 -59 28 -55 0 -61 2 -81 30 -18 25 -28 30 -62 30 -24 0 -49 7 -59 16 -17 15 -177 64 -211 64 -10 0 -26 -16 -38 -39 l-20 -40 34 -28 c34 -28 55 -70 76 -150 10 -39 13 -43 65 -58 51 -14 55 -18 55 -46 0 -17 5 -51 11 -76 10 -37 9 -47 -2 -54 -25 -15 -44 -10 -60 18 l-17 26 -11 -21 c-9 -17 -21 -22 -51 -22 -34 0 -42 -4 -56 -32 -22 -44 -21 -44 -42 -18 l-18 22 -31 -26 c-18 -15 -48 -56 -68 -91 -24 -44 -42 -65 -55 -65 -12 0 -22 -12 -30 -36 l-12 -37 -50 6 c-27 4 -65 16 -84 28 -47 28 -89 115 -98 197 -6 64 -6 64 -97 163 -79 85 -98 100 -131 105 -52 9 -80 47 -71 99 l6 37 -73 -3 -73 -4 -14 43 c-13 38 -18 42 -47 42 -25 0 -35 6 -44 25 -16 34 -16 35 12 35 18 0 26 6 28 22 2 14 22 33 61 55 45 27 57 39 57 59 0 24 1 24 27 10 25 -12 30 -12 64 11 43 28 69 77 50 96 -21 21 -11 34 29 41 22 3 40 8 40 11 0 2 -32 49 -71 105 -64 91 -73 100 -102 100 -31 0 -80 10 -124 24 -19 6 -23 1 -38 -44 -13 -39 -22 -51 -43 -57 -20 -5 -30 -1 -46 20 -12 14 -40 30 -64 37 -55 14 -89 -7 -98 -62 -6 -37 -7 -38 -52 -38 l-45 0 6 43 c4 28 1 56 -11 85 l-17 44 -50 -7 c-27 -3 -66 -8 -86 -12 -34 -5 -37 -3 -62 40 -15 25 -27 56 -27 70 0 13 -11 34 -26 47 -21 21 -27 22 -34 10 -5 -8 -10 -18 -10 -22 0 -15 -79 -8 -122 10 -24 11 -61 22 -83 26 -78 14 -231 69 -266 97 -20 16 -42 29 -47 29 -6 0 -25 -20 -42 -45 -26 -37 -34 -43 -49 -35 -14 7 -20 27 -25 80 -8 75 -17 90 -75 119 -32 17 -38 26 -54 84 -13 51 -15 71 -6 90 13 28 -2 67 -26 67 -8 0 -15 6 -15 13 -1 32 -16 40 -54 26 -36 -13 -38 -13 -62 19 l-26 32 -20 -26 -21 -26 -19 30 c-16 25 -26 30 -77 36 -68 8 -107 -5 -115 -39 -3 -13 -9 -30 -12 -38 -4 -11 2 -16 18 -19 19 -2 24 -10 26 -39 3 -31 -2 -40 -27 -59 -28 -20 -30 -23 -16 -43 8 -12 17 -41 21 -64 6 -38 4 -42 -17 -45 -13 -2 -58 1 -98 5 -41 5 -94 6 -116 2 -40 -5 -42 -8 -58 -59 l-17 -54 -53 15 c-68 19 -197 74 -197 85 0 4 9 31 20 60 l20 53 -24 24 -25 24 -36 -28 c-30 -22 -39 -25 -46 -14 -13 20 -11 32 12 95 21 56 21 58 3 92 -12 22 -32 39 -56 49 -32 13 -38 20 -38 44 0 35 -4 36 -47 3 -18 -14 -49 -32 -69 -40 -36 -15 -37 -15 -68 15 -19 18 -43 31 -57 31 -14 0 -34 9 -44 20 -19 21 -31 25 -38 13z']
			),
			'location' => DB::raw('POINT(49.817492, 15.472962)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}