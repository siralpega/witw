<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MX_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Mexico',
			'code'  => 'MX',
			'type'  => null,
			'paths' => serialize(
				['M0 8673 c0 -26 71 -206 93 -234 26 -33 26 -59 0 -59 -11 0 -13 -6 -8 -22 4 -13 9 -41 12 -63 3 -22 11 -47 18 -55 24 -27 55 -111 55 -149 0 -27 10 -50 41 -91 29 -39 39 -60 34 -74 -4 -12 -9 -43 -12 -70 -5 -45 -5 -48 15 -42 31 10 40 -17 46 -132 6 -115 21 -154 67 -178 17 -8 50 -33 73 -54 22 -20 51 -40 63 -44 21 -7 29 -17 97 -124 19 -29 46 -64 60 -77 14 -13 26 -31 26 -39 0 -8 21 -40 46 -71 43 -52 46 -59 40 -98 -4 -23 -7 -68 -7 -99 0 -32 -5 -58 -10 -58 -5 0 -9 7 -9 15 0 8 -7 15 -15 15 -8 0 -15 -8 -15 -19 0 -10 -7 -24 -15 -31 -18 -15 -3 -50 21 -50 8 0 18 -10 23 -22 11 -30 4 -36 -14 -12 -15 19 -15 19 -9 -1 4 -11 14 -28 22 -38 8 -9 12 -20 9 -24 -10 -10 -47 28 -47 48 0 10 -9 21 -20 24 -11 3 -20 15 -20 26 0 22 -18 24 -54 8 -19 -9 -29 -9 -40 0 -15 13 -136 44 -143 38 -8 -9 29 -78 45 -84 9 -4 29 -18 43 -32 14 -14 37 -34 52 -43 19 -13 27 -29 32 -66 5 -40 12 -52 33 -63 15 -7 36 -13 47 -14 11 0 24 -10 30 -22 5 -12 30 -31 56 -41 38 -16 52 -30 78 -76 l33 -56 28 20 c21 15 34 18 47 12 10 -5 32 -15 48 -23 21 -11 33 -25 39 -52 5 -20 14 -37 20 -37 12 -1 66 -45 66 -54 0 -14 78 -76 102 -81 49 -11 113 -162 111 -265 0 -60 -9 -136 -17 -148 -3 -5 -12 -36 -21 -68 -13 -51 -13 -60 0 -80 9 -14 30 -26 50 -30 28 -5 39 -13 50 -40 9 -21 23 -36 39 -40 14 -3 26 -12 26 -20 0 -7 14 -23 30 -36 17 -12 30 -27 30 -33 0 -11 53 -55 65 -55 16 0 118 -102 145 -144 17 -26 37 -49 45 -52 9 -4 22 -18 29 -32 8 -15 31 -32 57 -42 47 -19 51 -26 84 -165 13 -55 24 -76 48 -96 30 -26 32 -26 64 -10 17 9 36 26 42 39 6 12 20 22 31 22 28 0 60 18 60 33 0 7 8 29 19 49 l18 37 -28 43 c-16 23 -37 46 -49 50 -14 5 -20 16 -20 36 0 15 -11 43 -25 62 -15 20 -25 47 -25 67 0 25 -4 33 -18 33 -9 0 -33 20 -52 45 -35 45 -69 63 -90 50 -7 -4 -10 -16 -7 -26 3 -10 -1 -26 -9 -36 -9 -12 -13 -14 -14 -4 0 9 -8 11 -25 7 -27 -7 -36 5 -67 84 -22 55 -23 94 -3 110 8 7 15 23 15 37 0 24 -42 116 -66 143 -7 9 -16 43 -20 75 -6 49 -13 65 -42 95 -50 51 -65 87 -67 160 -3 68 -21 178 -36 218 -5 13 -9 31 -9 41 0 10 -12 28 -26 42 -15 13 -33 40 -41 59 -13 30 -16 32 -25 16 -7 -12 -7 -25 0 -40 31 -67 33 -78 15 -74 -11 2 -22 21 -31 53 -8 28 -25 63 -39 79 -22 27 -23 30 -8 52 15 23 14 24 -5 24 -25 0 -53 44 -81 127 -14 43 -30 71 -52 88 -93 75 -92 74 -92 159 0 43 -4 80 -8 83 -5 3 -6 16 -2 30 9 38 -2 60 -34 66 -19 4 -32 14 -36 29 -16 52 -51 118 -63 118 -7 0 -18 11 -24 25 -8 18 -17 24 -29 20 -19 -6 -18 -9 -34 98 -3 19 -21 51 -40 73 -20 21 -38 49 -41 62 -4 12 -19 29 -35 37 -15 8 -40 35 -54 59 -16 28 -35 46 -48 48 -16 2 -23 11 -25 30 -2 15 -12 34 -22 41 -30 21 -44 94 -27 142 15 42 12 200 -3 220 -5 6 -11 48 -15 95 -3 47 -8 100 -11 118 -4 23 -1 32 9 32 36 0 21 69 -29 135 -42 55 -26 60 31 9 30 -27 81 -72 113 -100 97 -87 167 -109 190 -59 14 31 22 31 56 2 16 -14 29 -38 33 -61 3 -21 11 -39 17 -41 105 -31 137 -62 129 -125 -9 -69 13 -189 43 -233 24 -36 28 -55 34 -142 6 -88 11 -111 48 -194 23 -52 42 -99 42 -104 0 -5 14 -25 30 -44 17 -19 36 -55 43 -80 11 -42 32 -68 83 -100 18 -11 18 -12 -3 -12 -30 -1 -29 -18 1 -42 13 -10 29 -31 35 -47 13 -30 57 -62 88 -62 15 0 23 -14 37 -60 10 -32 24 -64 31 -70 7 -6 15 -24 18 -40 5 -22 14 -31 34 -36 15 -4 37 -15 49 -26 18 -16 23 -17 33 -4 17 20 75 -1 65 -24 -18 -38 -16 -91 5 -125 16 -28 17 -35 6 -35 -23 0 -18 -28 8 -41 12 -7 43 -29 68 -50 33 -28 56 -39 79 -39 20 0 38 -7 46 -17 18 -24 17 -33 -1 -33 -24 0 -18 -19 23 -72 l37 -49 55 3 55 2 35 -67 c19 -37 43 -70 53 -73 24 -8 22 -43 -3 -41 -11 1 -22 7 -24 14 -10 26 -25 12 -45 -42 -12 -31 -21 -80 -21 -109 0 -58 4 -63 93 -143 36 -33 77 -44 77 -21 0 6 10 2 22 -9 36 -33 156 -112 161 -107 3 3 13 -9 24 -26 10 -18 34 -40 55 -51 63 -32 84 -110 25 -95 -40 10 -39 -6 2 -54 32 -37 41 -43 53 -32 12 10 18 10 27 -2 6 -7 25 -16 41 -20 17 -3 30 -10 30 -16 0 -13 -16 -13 -41 1 -11 6 -25 9 -31 7 -17 -6 92 -88 116 -88 30 0 95 -71 139 -151 20 -37 44 -69 52 -73 8 -3 15 -12 15 -21 0 -8 22 -44 49 -78 27 -35 53 -75 56 -90 5 -18 14 -27 27 -27 30 0 83 -46 103 -90 15 -33 24 -41 54 -46 57 -9 59 -11 71 -54 8 -31 8 -45 0 -55 -8 -10 -8 -29 -1 -71 6 -32 11 -71 11 -88 0 -17 14 -58 30 -91 16 -33 30 -66 30 -73 0 -20 39 -72 54 -72 23 0 44 -33 36 -55 -5 -11 -9 -37 -9 -58 -1 -46 -11 -67 -62 -128 -40 -48 -46 -59 -30 -59 14 0 91 -53 91 -62 0 -12 -64 -38 -92 -38 -13 0 -39 -14 -58 -31 l-34 -32 32 -27 c18 -14 32 -34 32 -43 0 -9 16 -42 35 -74 19 -32 35 -65 35 -74 0 -9 10 -19 23 -23 12 -3 27 -16 33 -28 49 -97 68 -125 94 -139 16 -9 36 -22 44 -28 21 -18 137 -61 147 -55 5 3 9 -6 9 -20 0 -30 13 -38 100 -61 73 -20 114 -52 130 -101 6 -18 19 -36 28 -39 9 -3 28 -22 42 -42 13 -21 31 -45 40 -53 17 -17 115 -50 148 -50 12 0 31 -11 44 -24 18 -18 37 -25 84 -29 33 -2 83 -15 112 -27 45 -19 56 -21 81 -10 25 10 34 9 53 -4 12 -9 30 -16 39 -16 10 0 36 -22 59 -49 22 -28 50 -53 60 -56 10 -3 22 -14 25 -25 3 -10 30 -30 61 -45 30 -15 62 -38 71 -51 8 -13 22 -24 30 -24 8 0 27 -6 41 -13 70 -36 102 -48 167 -66 39 -10 95 -28 125 -41 30 -12 65 -24 78 -27 12 -3 27 -14 33 -24 15 -29 50 -43 101 -40 26 1 70 -5 97 -13 27 -8 51 -13 53 -10 3 2 22 -5 43 -16 22 -11 51 -20 65 -20 17 0 39 -14 67 -44 31 -33 57 -49 100 -62 32 -10 66 -17 76 -16 11 1 32 -7 47 -18 71 -50 150 -81 218 -84 37 -1 77 -8 89 -14 12 -7 33 -12 46 -12 14 0 49 -12 78 -27 46 -24 64 -28 137 -27 72 1 91 5 144 33 33 17 68 31 77 31 40 1 192 62 211 85 22 27 71 48 128 56 30 4 56 10 59 13 10 10 -9 26 -32 26 -36 0 -38 16 -4 30 24 10 35 10 54 0 12 -7 28 -9 34 -6 14 9 51 -2 51 -15 0 -5 -11 -7 -24 -3 -18 4 -27 1 -36 -15 -10 -20 -8 -21 30 -21 23 0 81 -16 131 -35 104 -40 99 -39 99 -22 0 6 -34 25 -75 40 -46 17 -75 34 -75 43 0 19 -3 19 81 -21 41 -19 84 -35 96 -35 19 0 22 -4 18 -22 -4 -20 4 -27 50 -50 36 -17 55 -23 55 -14 0 6 -5 17 -12 24 -7 7 -8 12 -3 12 8 0 96 -81 241 -221 22 -22 56 -44 76 -49 23 -7 44 -23 61 -48 25 -35 151 -162 162 -162 13 0 35 65 35 105 0 26 8 60 17 76 17 29 17 30 -9 56 l-26 26 80 162 81 161 231 12 c127 7 234 16 237 20 4 4 9 32 11 61 l3 55 -35 7 c-39 8 -70 41 -70 74 0 16 -15 32 -59 59 -32 20 -63 36 -68 36 -6 0 -29 22 -52 50 -30 35 -51 51 -76 56 -61 11 -38 24 45 24 l80 0 0 110 0 109 33 6 c49 8 423 35 497 35 106 0 140 9 140 35 0 29 26 39 53 20 12 -8 27 -15 33 -15 6 0 36 54 67 120 35 73 62 120 71 120 30 0 65 23 70 46 4 13 15 28 26 34 13 7 20 21 20 41 0 20 4 29 13 26 8 -2 12 -26 12 -68 0 -60 1 -64 28 -73 20 -7 27 -16 27 -36 0 -15 8 -35 19 -44 18 -16 19 -16 30 15 6 17 18 71 26 119 8 48 22 109 30 136 8 27 15 58 15 70 0 11 9 29 20 39 11 10 20 22 20 27 0 13 -34 9 -57 -7 -16 -11 -22 -12 -26 -2 -6 17 11 47 26 47 8 0 26 13 41 29 22 23 26 34 20 56 -7 26 -8 27 -20 10 -8 -11 -14 -13 -14 -7 0 9 -9 8 -31 -4 l-32 -16 7 29 c4 15 18 44 32 64 17 25 24 49 24 82 0 27 10 73 24 107 13 33 22 68 19 80 -4 14 0 20 10 20 23 0 77 49 77 71 0 10 14 40 30 66 24 37 30 58 30 100 0 33 -6 60 -15 71 -9 9 -26 29 -38 44 -22 28 -64 42 -67 23 -5 -30 -23 -35 -109 -28 -47 3 -103 12 -125 20 -45 15 -142 18 -151 3 -3 -5 -22 -10 -42 -10 -45 0 -153 -41 -153 -57 0 -7 -8 -13 -17 -13 -10 0 -32 -8 -48 -19 -19 -11 -61 -21 -114 -25 -106 -10 -174 -28 -269 -71 -140 -65 -145 -76 -152 -305 -5 -165 -6 -177 -30 -215 -19 -31 -26 -58 -31 -123 l-5 -83 -60 -60 c-32 -33 -87 -78 -121 -101 -41 -26 -63 -47 -63 -60 0 -16 5 -18 35 -12 30 5 35 4 35 -14 0 -11 7 -25 15 -32 24 -20 18 -26 -20 -22 -28 3 -40 -1 -65 -27 -22 -22 -41 -31 -64 -31 -17 0 -37 -5 -44 -12 -9 -9 -12 -8 -12 5 0 10 -14 23 -32 31 -31 14 -32 14 -8 16 23 1 24 2 7 14 -25 20 -212 32 -232 16 -8 -7 -12 -16 -9 -21 3 -5 -8 -9 -24 -9 -20 0 -45 -12 -71 -34 -43 -36 -96 -51 -162 -45 -19 2 -47 -1 -64 -5 -16 -4 -47 -12 -67 -17 -27 -7 -38 -15 -38 -29 0 -17 -35 -38 -46 -27 -3 3 -41 -6 -85 -19 -100 -31 -192 -31 -198 1 -2 11 -12 26 -22 33 -11 7 -19 20 -19 28 0 22 -38 54 -64 54 -15 0 -32 11 -44 27 -19 26 -25 28 -99 29 -43 0 -88 6 -101 13 -38 20 -47 7 -16 -23 29 -28 29 -28 4 -21 -14 4 -42 9 -62 12 -21 3 -38 11 -38 18 0 6 -10 17 -22 23 -19 9 -20 11 -5 11 10 1 27 -4 39 -10 43 -23 29 5 -30 61 -34 32 -62 64 -62 71 0 7 -16 30 -36 50 -28 29 -42 56 -60 121 -19 65 -31 89 -57 113 -19 17 -37 43 -41 59 -4 15 -15 30 -25 33 -12 3 -17 11 -14 23 5 20 -52 70 -80 70 -10 0 -17 6 -17 13 0 7 -13 26 -29 41 -16 16 -39 50 -51 77 -11 27 -27 49 -35 49 -8 0 -12 6 -9 14 3 8 -1 28 -10 43 -8 15 -22 52 -32 82 -9 30 -27 70 -40 89 -13 19 -29 53 -35 76 -6 23 -15 49 -20 58 -5 10 -9 30 -9 45 -1 36 -36 84 -48 65 -7 -11 -12 -10 -26 3 -22 22 -20 27 7 23 21 -3 22 0 22 77 0 44 4 86 9 94 6 9 4 18 -7 26 -12 9 -14 18 -7 41 4 16 9 21 9 12 1 -23 21 -34 32 -17 11 18 12 66 0 73 -4 3 -11 26 -14 51 -4 41 -1 68 18 152 4 18 1 23 -16 23 -18 0 -20 4 -14 23 4 12 5 31 4 42 -2 11 -3 71 -2 133 0 61 -2 112 -6 112 -4 0 -12 -5 -19 -12 -9 -9 -12 -2 -12 32 0 34 3 41 12 32 23 -23 29 -12 27 48 -1 33 3 65 9 73 9 10 8 18 -2 33 -9 11 -12 30 -9 46 3 16 0 35 -8 44 -11 13 -10 17 5 26 14 8 15 13 5 24 -16 20 -5 28 19 13 28 -18 56 -5 42 20 -5 11 -10 22 -10 25 0 9 23 7 40 -4 12 -8 11 -14 -7 -47 -12 -21 -24 -55 -28 -75 -6 -31 -4 -38 9 -38 9 0 18 12 22 28 3 15 16 50 29 77 12 28 34 83 49 122 24 64 26 77 16 108 -12 38 -42 48 -58 19 -8 -14 -16 -12 -68 14 -44 22 -82 32 -150 39 -74 8 -107 18 -176 51 -47 23 -106 46 -131 53 -25 6 -52 18 -60 28 -22 25 -127 236 -127 255 0 9 -7 32 -15 52 -10 25 -12 42 -4 61 8 21 5 31 -16 59 -14 19 -32 34 -39 34 -16 0 -96 85 -96 101 0 7 -24 38 -52 69 -75 82 -75 82 -93 145 -9 31 -23 59 -31 62 -8 3 -36 49 -63 102 -26 53 -59 108 -72 122 -13 14 -32 40 -41 58 -10 18 -32 38 -52 46 -19 8 -37 24 -41 35 -3 11 -14 20 -23 20 -10 0 -23 9 -29 19 -14 23 -90 41 -172 41 -33 0 -71 7 -87 15 -39 20 -61 19 -74 -4 -6 -11 -25 -22 -48 -26 -50 -8 -87 -55 -105 -132 -7 -33 -22 -69 -33 -80 -10 -11 -29 -32 -42 -47 -17 -20 -29 -26 -45 -22 -12 3 -30 6 -39 6 -10 0 -30 14 -45 30 -14 17 -36 30 -47 30 -12 0 -37 11 -57 24 -19 13 -53 31 -74 40 -21 9 -57 34 -81 56 -24 22 -48 40 -53 40 -5 0 -26 28 -48 63 -30 47 -42 81 -52 137 -6 41 -19 88 -27 104 -7 16 -14 35 -14 43 0 33 -34 74 -87 107 -51 31 -133 115 -133 136 0 5 -12 12 -27 18 -16 5 -57 37 -93 71 -35 33 -67 61 -70 61 -3 0 -19 22 -35 50 -16 27 -38 53 -50 56 -11 4 -27 12 -35 20 -11 9 -76 16 -220 23 -113 6 -235 13 -272 16 l-68 5 0 -90 c0 -49 -4 -90 -8 -90 -8 0 -514 45 -827 73 l-140 13 -360 185 c-198 101 -451 227 -562 278 -112 52 -203 99 -203 104 0 6 10 21 22 34 12 13 20 25 17 27 -9 8 -759 18 -759 9z']
			),
			'location' => DB::raw('POINT(23.634501, -102.552784)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}