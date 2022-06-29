<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SC_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Seychelles',
			'code'  => 'SC',
			'type'  => null,
			'paths' => serialize(
				['M6196 9261 c-14 -22 14 -58 63 -81 50 -23 54 -23 94 -9 32 12 43 22 45 40 2 22 -3 25 -71 42 -81 19 -123 22 -131 8z', 'M7106 8334 c-21 -12 -34 -13 -51 -6 -26 12 -107 4 -117 -12 -15 -21 -8 -44 25 -84 17 -22 39 -53 48 -69 12 -22 31 -34 79 -51 l64 -21 33 20 c38 24 41 37 13 72 -25 32 -12 44 54 53 45 7 135 59 122 71 -3 3 -43 5 -87 4 -66 -1 -89 3 -116 19 -19 11 -35 20 -36 20 -1 -1 -15 -8 -31 -16z', 'M8815 8231 c-13 -43 54 -140 98 -141 13 0 17 8 17 40 0 21 -6 44 -12 49 -7 6 -29 24 -49 41 -43 35 -46 36 -54 11z', 'M9015 8210 c-17 -19 -16 -22 25 -91 48 -78 83 -110 103 -90 8 8 8 19 -2 44 -7 17 -15 43 -18 57 -2 14 -6 35 -9 47 -3 15 -18 28 -40 38 -44 18 -37 19 -59 -5z', 'M6752 8140 c-35 -56 -47 -60 -128 -35 -75 23 -117 19 -154 -12 -30 -25 -31 -29 -25 -77 4 -28 27 -93 51 -145 49 -104 50 -112 29 -145 -20 -30 -9 -59 39 -106 l37 -35 142 -6 c134 -5 146 -8 205 -38 l62 -31 0 -51 c0 -64 26 -113 84 -156 52 -40 75 -41 106 -8 29 31 54 26 92 -20 15 -18 51 -49 80 -69 29 -21 68 -48 86 -61 26 -18 40 -22 75 -18 53 7 67 18 67 53 0 38 8 42 39 19 15 -11 39 -21 55 -22 26 -2 29 2 47 58 28 87 15 125 -43 125 -33 0 -75 47 -83 94 -9 45 15 97 60 132 l37 28 24 -29 c60 -74 108 -105 161 -105 26 0 133 47 133 58 0 4 -24 23 -52 42 -96 65 -108 78 -108 121 0 52 -28 69 -136 83 -74 9 -87 8 -95 -5 -25 -46 -45 -60 -96 -66 l-52 -6 -59 57 c-33 31 -71 78 -84 104 -30 59 -65 68 -109 26 -24 -23 -39 -28 -102 -32 -91 -6 -111 4 -125 61 -17 66 -101 187 -159 230 -28 20 -55 37 -60 37 -6 0 -24 -22 -41 -50z', 'M9017 7762 c-24 -27 -21 -70 8 -108 13 -17 34 -56 46 -86 32 -82 55 -113 98 -133 48 -21 84 -15 124 23 33 31 34 43 6 68 -28 25 -50 67 -69 129 -14 44 -19 50 -53 58 -21 5 -47 22 -61 38 -29 34 -74 39 -99 11z', 'M6270 7613 c-26 -9 -60 -46 -60 -64 0 -23 25 -41 52 -37 30 4 53 47 44 81 -7 28 -10 29 -36 20z', 'M9774 7503 c-14 -20 -19 -45 -19 -88 1 -86 11 -115 38 -115 17 0 29 15 54 66 l33 66 -21 49 c-25 58 -55 66 -85 22z', 'M8558 7489 c-10 -5 -18 -16 -18 -23 0 -8 -7 -16 -15 -20 -12 -4 -14 -15 -9 -45 5 -30 1 -51 -14 -83 -12 -24 -29 -85 -38 -136 -15 -84 -15 -97 -1 -146 17 -62 80 -149 118 -166 15 -6 41 -27 60 -46 18 -19 38 -34 45 -34 14 0 24 23 24 56 0 18 5 24 21 24 19 0 21 4 15 43 -6 40 -4 44 26 67 18 14 42 27 52 30 11 3 24 14 30 25 6 11 18 25 26 31 23 19 15 75 -21 134 -18 30 -53 89 -77 130 -60 100 -86 126 -149 150 -30 11 -55 20 -56 20 -1 0 -10 -5 -19 -11z', 'M7980 7421 c0 -18 6 -31 16 -35 21 -8 54 20 54 46 0 14 -8 18 -35 18 -32 0 -35 -3 -35 -29z', 'M5984 7336 c-9 -24 18 -68 54 -89 18 -11 36 -17 39 -14 10 11 -7 55 -33 86 -28 33 -51 40 -60 17z', 'M212 5690 c-25 -16 -61 -29 -92 -33 -61 -7 -74 -17 -102 -71 -18 -35 -20 -51 -14 -124 5 -74 11 -91 47 -152 31 -52 50 -72 73 -80 35 -11 115 -105 139 -161 l14 -35 100 -13 c95 -12 102 -12 141 8 34 17 42 27 48 58 6 36 31 90 89 193 43 77 31 117 -55 173 -19 13 -30 36 -45 95 l-20 77 -60 21 c-33 11 -78 30 -100 41 -67 34 -115 35 -163 3z', 'M3068 4357 c-49 -38 -63 -81 -42 -135 19 -48 20 -103 1 -139 -21 -39 -24 -111 -8 -142 9 -16 11 -51 5 -122 -6 -97 -8 -101 -38 -124 -19 -15 -52 -26 -86 -31 -72 -8 -215 -49 -243 -69 -12 -8 -38 -15 -58 -15 -22 0 -75 -18 -140 -49 -57 -27 -120 -54 -140 -61 -25 -9 -42 -24 -53 -47 -15 -31 -15 -36 0 -66 9 -18 23 -40 32 -49 13 -16 12 -18 -12 -28 -21 -8 -32 -7 -49 5 -70 49 -110 -17 -53 -88 20 -25 33 -30 105 -39 77 -10 83 -10 105 11 33 31 61 26 109 -19 30 -29 37 -40 25 -40 -14 0 -18 -8 -18 -35 0 -28 6 -37 28 -49 15 -8 35 -23 45 -34 10 -11 32 -26 49 -33 28 -11 33 -11 49 10 23 29 63 25 67 -6 4 -28 76 -110 105 -118 12 -4 58 -24 102 -45 69 -32 98 -40 210 -53 103 -11 132 -18 140 -32 5 -10 21 -31 33 -46 21 -25 22 -33 13 -60 -10 -29 -8 -34 38 -82 107 -114 131 -144 131 -170 0 -50 61 -62 109 -21 29 24 34 25 61 14 39 -16 38 -41 -1 -74 -19 -16 -32 -39 -36 -59 -5 -33 -3 -36 55 -71 105 -64 158 -142 118 -175 -19 -16 -136 -61 -158 -61 -9 0 -33 7 -52 16 -33 16 -35 16 -64 -5 -16 -11 -44 -43 -62 -71 -30 -46 -32 -55 -25 -105 4 -39 17 -71 42 -108 59 -88 61 -89 95 -69 16 9 34 26 40 37 19 37 51 65 62 56 6 -5 30 -14 54 -20 23 -7 42 -15 42 -19 0 -4 -9 -25 -20 -47 -29 -58 -26 -99 9 -124 16 -12 44 -24 61 -27 17 -4 38 -18 47 -31 15 -23 15 -25 -16 -57 -38 -39 -34 -66 11 -66 17 0 48 -5 70 -12 37 -11 39 -13 33 -42 -20 -98 -19 -103 17 -114 18 -6 44 -12 58 -14 19 -2 26 -10 28 -30 3 -29 11 -33 83 -43 26 -3 54 -14 64 -25 20 -22 42 -16 68 17 23 29 46 29 100 1 62 -31 116 -39 144 -21 31 21 33 102 3 140 -11 14 -20 40 -20 58 0 29 -5 35 -47 53 -27 11 -64 25 -85 31 -44 14 -53 39 -49 134 2 49 -1 74 -13 92 -9 13 -16 35 -16 49 0 13 -16 74 -36 136 -35 109 -36 115 -24 174 14 73 27 89 103 127 l57 29 -17 32 c-10 17 -23 39 -29 50 -6 11 -15 74 -19 141 -4 67 -13 137 -21 156 -8 18 -14 48 -14 66 0 38 70 175 116 227 32 36 49 87 42 125 -3 14 -16 19 -64 24 -80 7 -146 41 -213 106 l-54 54 -24 -23 c-16 -15 -23 -31 -20 -45 5 -28 -13 -30 -37 -4 -9 10 -34 21 -55 25 -21 3 -44 13 -51 21 -7 8 -18 15 -25 15 -25 0 -75 69 -75 103 0 43 -8 52 -56 72 -23 9 -58 34 -77 56 -21 22 -49 42 -66 45 -16 4 -40 17 -52 30 -22 23 -22 24 -4 44 17 18 17 21 1 45 -17 25 -18 26 -42 10 l-24 -15 0 44 c0 39 -4 49 -30 68 -20 15 -30 30 -30 48 0 28 -21 52 -54 64 -16 6 -18 12 -10 59 5 28 9 99 9 157 0 86 3 105 15 108 9 1 21 16 27 31 7 19 19 30 34 33 21 3 24 9 27 55 3 45 -3 64 -46 149 -44 86 -55 99 -98 123 -27 15 -64 36 -81 47 -27 16 -36 17 -53 7 -27 -18 -43 -16 -73 7 -36 28 -69 25 -119 -13z', 'M7656 4181 c-17 -18 -20 -39 -10 -65 5 -13 10 -12 35 6 33 25 38 53 10 67 -14 8 -22 6 -35 -8z', 'M10012 4163 c-35 -8 -66 -21 -69 -29 -13 -34 9 -86 57 -135 l48 -51 58 7 c33 4 76 16 97 26 32 17 37 24 37 54 0 28 -7 40 -42 68 -42 33 -112 78 -119 76 -2 0 -32 -7 -67 -16z', 'M9531 3881 c-20 -13 -4 -51 22 -51 28 0 67 27 67 46 0 16 -65 20 -89 5z', 'M3998 3866 c-15 -11 -18 -30 -18 -120 l0 -106 26 0 c32 0 140 64 155 92 29 54 30 80 3 115 -24 31 -28 33 -87 33 -36 -1 -69 -6 -79 -14z', 'M3917 3444 c-32 -29 -32 -28 -11 -64 11 -18 32 -32 58 -40 22 -7 54 -23 70 -37 16 -13 36 -23 45 -21 23 4 25 56 4 98 -14 27 -26 36 -58 43 -21 4 -49 16 -60 27 -21 19 -21 19 -48 -6z', 'M4321 3086 c-7 -8 -11 -30 -9 -48 3 -29 6 -33 33 -33 54 0 62 85 8 93 -11 2 -25 -4 -32 -12z', 'M2130 3005 c-15 -18 6 -56 43 -79 32 -20 104 -29 110 -13 7 20 -11 57 -28 57 -9 0 -33 11 -53 25 -42 29 -55 31 -72 10z', 'M2608 2879 c-27 -15 -22 -35 22 -78 22 -22 40 -44 40 -50 0 -6 9 -15 21 -21 27 -15 59 12 59 49 0 41 -44 97 -81 105 -40 8 -40 8 -61 -5z', 'M3110 2626 c-18 -35 -6 -58 27 -54 35 4 45 45 17 65 -24 18 -29 17 -44 -11z']
			),
			'location' => DB::raw('POINT(-4.679574, 55.491977)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}