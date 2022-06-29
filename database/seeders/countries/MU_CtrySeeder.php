<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class MU_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Mauritius',
			'code'  => 'MU',
			'type'  => null,
			'paths' => serialize(
				['M5766 10199 c-46 -37 -51 -39 -97 -33 -47 6 -50 5 -100 -40 -53 -48 -69 -53 -116 -35 l-28 10 22 -23 c18 -19 21 -30 15 -53 -10 -37 -43 -55 -99 -55 -47 0 -48 -1 -31 -29 9 -15 2 -32 -46 -104 -32 -48 -56 -94 -54 -103 2 -10 27 -29 55 -43 58 -28 61 -35 37 -70 -16 -23 -19 -23 -128 -16 -61 4 -114 10 -117 14 -4 3 -9 20 -12 37 -5 26 0 38 34 75 66 72 48 89 -81 79 -78 -7 -89 -5 -133 17 -68 34 -86 28 -105 -29 l-15 -47 37 -34 c39 -38 66 -91 66 -134 0 -40 -46 -124 -101 -187 -36 -39 -58 -79 -83 -145 -48 -125 -60 -145 -112 -193 -44 -41 -92 -62 -170 -75 -18 -3 -46 -20 -65 -39 -32 -33 -34 -40 -37 -114 -4 -67 -7 -80 -23 -85 -19 -6 -29 -33 -27 -70 5 -68 -24 -131 -110 -239 -36 -47 -24 -135 26 -179 17 -15 28 -17 69 -9 27 4 55 6 62 4 16 -5 -42 -32 -70 -32 -11 0 -25 -13 -34 -31 -11 -19 -33 -38 -61 -50 -51 -23 -62 -49 -44 -104 9 -26 22 -41 48 -53 41 -19 54 -31 45 -45 -6 -11 26 -47 43 -47 7 0 17 -15 24 -34 10 -30 16 -34 69 -46 33 -7 64 -9 71 -5 14 9 50 -22 50 -43 0 -13 -3 -12 -20 3 -13 12 -27 15 -44 11 -17 -4 -48 4 -95 25 l-70 31 -78 -42 c-187 -103 -223 -155 -231 -341 -5 -131 7 -189 39 -189 10 0 19 -4 19 -10 0 -14 37 -13 46 2 9 14 34 -18 34 -43 0 -12 9 -19 28 -21 52 -6 21 -23 -39 -21 -42 1 -67 7 -81 19 -21 20 -19 22 -56 -39 -9 -15 -27 -30 -39 -33 -12 -3 -29 -14 -38 -24 -14 -16 -15 -22 -2 -52 25 -59 108 -74 187 -33 24 12 29 12 33 1 4 -9 -3 -16 -18 -20 -36 -9 -85 -55 -85 -79 0 -33 -10 -42 -64 -60 -71 -24 -74 -23 -69 26 4 40 3 43 -33 59 -50 23 -66 13 -106 -71 -29 -62 -36 -70 -62 -70 -27 -1 -28 -3 -23 -38 3 -21 9 -47 12 -59 5 -14 -5 -35 -32 -71 -21 -29 -44 -60 -51 -70 -10 -15 -11 -7 -6 48 l6 66 -37 31 c-56 45 -93 49 -162 14 -32 -16 -107 -51 -167 -77 -61 -26 -152 -69 -203 -96 -57 -30 -106 -49 -127 -49 -29 0 -35 -5 -51 -40 -10 -21 -32 -53 -51 -69 -18 -17 -35 -39 -39 -50 -3 -12 -12 -21 -18 -21 -7 0 -23 -11 -37 -25 -14 -14 -52 -43 -86 -64 -34 -22 -69 -54 -81 -74 -12 -19 -49 -54 -83 -77 -34 -23 -63 -47 -66 -54 -3 -7 3 -35 14 -62 11 -31 15 -58 11 -74 -4 -14 -7 -53 -8 -88 -2 -98 -8 -105 -97 -100 l-75 3 -51 -88 c-44 -75 -52 -97 -58 -161 -6 -61 -15 -89 -54 -160 -51 -95 -52 -112 -9 -175 13 -19 21 -42 18 -50 -4 -9 -16 -45 -27 -81 -11 -36 -39 -105 -63 -155 -23 -49 -48 -106 -55 -125 -8 -19 -37 -66 -64 -105 -27 -38 -64 -104 -80 -145 -28 -68 -31 -85 -30 -180 1 -83 6 -122 26 -185 14 -44 29 -107 32 -140 13 -113 27 -135 116 -182 43 -24 88 -43 99 -43 13 0 26 -10 33 -25 14 -32 36 -32 97 2 54 31 72 27 47 -9 -9 -12 -16 -32 -16 -43 0 -19 -6 -21 -47 -21 -45 1 -48 -1 -51 -26 -2 -14 -10 -32 -19 -40 -14 -11 -15 -9 -8 20 l7 33 -38 -16 c-86 -36 -208 -125 -230 -168 -8 -15 -19 -82 -24 -150 -6 -67 -13 -141 -16 -163 -5 -38 -3 -43 26 -64 17 -12 35 -33 40 -46 7 -18 17 -24 38 -24 36 0 52 -17 52 -55 0 -65 41 -81 75 -29 35 54 48 14 14 -46 -21 -37 -22 -38 -94 -42 -42 -3 -88 -13 -111 -24 -39 -19 -39 -19 -47 -94 -10 -87 0 -120 37 -120 13 0 29 -7 36 -15 7 -8 28 -15 46 -15 27 0 34 -4 34 -20 0 -23 22 -26 40 -5 11 13 14 13 27 -1 10 -10 30 -14 57 -12 33 2 43 -1 51 -19 6 -11 16 -27 22 -35 9 -11 -1 -20 -50 -46 -34 -17 -73 -36 -87 -41 -14 -5 -32 -20 -39 -35 -12 -22 -12 -31 2 -67 10 -25 13 -47 8 -53 -5 -6 -5 -20 0 -31 14 -36 9 -89 -11 -123 -11 -18 -20 -46 -20 -62 0 -28 -22 -60 -41 -60 -5 0 -9 -14 -9 -31 0 -30 -98 -221 -125 -244 -25 -21 -122 -141 -165 -204 l-45 -66 -54 -3 c-30 -2 -59 2 -64 7 -6 6 -26 11 -44 11 -19 0 -45 7 -58 16 -20 13 -33 14 -75 5 -28 -6 -58 -11 -65 -11 -20 0 -20 73 0 90 18 15 20 50 3 50 -7 0 -22 3 -34 6 -19 5 -28 -13 -101 -193 -45 -109 -91 -233 -102 -276 -12 -42 -29 -93 -37 -113 -17 -40 -14 -48 26 -69 23 -12 39 -13 77 -5 41 9 52 17 75 53 15 23 31 54 37 68 9 25 14 26 105 33 52 4 110 4 129 1 29 -6 37 -3 51 16 16 23 16 23 16 2 0 -11 7 -26 15 -33 22 -18 18 -33 -7 -27 -16 4 -6 -8 30 -40 29 -25 84 -89 122 -143 44 -61 82 -103 105 -116 31 -17 35 -23 35 -59 0 -33 6 -47 31 -71 28 -27 36 -29 124 -32 93 -4 95 -4 124 25 16 17 34 47 40 69 12 44 27 71 35 63 3 -3 1 -21 -4 -40 -6 -18 -10 -58 -10 -87 0 -48 2 -54 33 -72 17 -11 48 -25 67 -31 19 -7 54 -25 77 -40 23 -16 47 -29 53 -29 6 0 23 -9 38 -20 16 -11 52 -22 87 -26 52 -6 66 -13 107 -49 37 -33 60 -45 106 -54 32 -6 71 -9 88 -6 25 5 32 1 49 -27 12 -19 43 -44 75 -61 53 -27 59 -28 158 -22 64 4 120 13 145 24 23 10 59 21 81 25 55 10 159 118 154 158 -5 33 1 34 53 7 39 -19 43 -20 80 -5 55 22 59 21 59 -23 0 -21 6 -43 13 -48 17 -14 107 -43 132 -43 12 0 42 -18 66 -41 127 -118 320 -156 501 -99 96 30 152 27 241 -16 92 -43 143 -44 166 -2 14 24 14 30 -2 64 -10 20 -16 38 -13 41 2 2 18 -25 35 -62 25 -52 41 -72 78 -95 50 -32 74 -35 181 -24 46 5 61 11 65 24 5 20 116 50 184 50 61 0 79 9 91 45 11 28 18 34 55 39 23 3 76 6 117 5 80 0 108 8 153 43 24 19 42 23 130 25 56 2 104 3 107 3 3 0 37 30 75 66 189 177 184 174 275 184 61 7 94 16 127 37 79 49 87 53 116 53 17 0 38 11 54 26 32 32 79 47 104 34 28 -16 52 -12 120 19 36 16 91 37 124 46 68 20 167 71 240 126 50 37 192 102 205 94 4 -2 18 7 31 21 28 30 110 74 138 74 23 0 36 39 16 46 -8 3 -19 3 -25 -1 -17 -10 -11 10 13 46 12 19 33 39 47 44 92 38 101 47 129 125 26 73 29 76 87 107 32 18 69 33 82 33 18 0 22 6 22 30 0 31 36 71 101 113 l29 19 -29 24 c-16 13 -42 24 -58 24 -37 0 -73 25 -73 52 0 18 4 20 45 14 42 -7 60 3 35 19 -5 3 -10 11 -10 17 0 6 18 -6 40 -26 42 -37 69 -44 115 -26 23 9 32 6 57 -15 16 -14 36 -25 43 -25 19 0 103 91 133 143 26 45 45 152 36 202 -5 26 -13 34 -52 48 -64 23 -98 57 -113 108 -10 37 -13 40 -18 22 -5 -17 -10 -20 -21 -13 -8 5 -24 10 -34 10 -18 0 -18 -1 -3 -18 25 -28 21 -34 -12 -18 -24 13 -29 23 -35 65 -4 28 -4 62 0 76 5 19 0 35 -14 55 -12 15 -29 52 -39 82 -17 50 -21 54 -41 47 -15 -6 -30 -4 -43 4 -16 10 -21 9 -29 -3 -12 -19 -43 -2 -49 26 -7 40 -30 53 -82 47 -33 -4 -49 -2 -49 6 0 6 6 11 14 11 7 0 21 12 31 26 15 23 21 25 58 18 37 -6 40 -5 29 9 -11 13 -9 26 13 76 21 52 25 75 25 165 0 79 4 108 15 119 13 13 11 17 -11 32 -18 12 -24 23 -22 43 3 25 6 27 51 25 36 -2 47 1 47 12 0 8 5 15 10 15 6 0 10 -9 10 -20 0 -11 11 -27 26 -36 30 -20 54 -63 54 -99 0 -22 4 -25 35 -25 20 0 53 9 75 20 25 13 59 20 95 20 l57 0 76 78 c42 42 89 97 104 122 15 25 45 70 67 100 33 45 41 63 41 101 l0 46 113 -1 c108 -1 114 0 176 32 l63 33 -7 87 c-4 48 -9 89 -11 91 -2 3 -10 -1 -16 -7 -17 -17 -28 -15 -28 6 0 39 14 45 70 32 41 -10 64 -10 113 0 100 21 116 38 81 88 -13 19 -24 22 -83 22 -74 0 -92 12 -66 47 10 12 14 48 15 116 l0 98 65 29 c89 40 103 68 88 182 -9 66 -16 86 -33 98 -115 81 -119 114 -22 192 12 10 22 27 22 38 0 19 0 19 35 -1 19 -12 35 -26 35 -31 0 -6 6 -8 14 -5 8 3 22 -3 32 -14 28 -31 75 -22 94 18 8 17 24 34 35 37 16 4 17 8 7 18 -6 6 -12 26 -12 43 0 19 -8 39 -20 50 -11 10 -25 36 -31 58 -9 34 -8 42 10 61 18 20 41 67 41 86 0 5 -9 12 -20 15 -26 8 -26 35 0 35 11 0 23 7 27 15 3 9 19 23 35 31 28 15 29 17 26 82 -3 58 -6 67 -23 71 -28 5 -74 51 -52 51 22 0 59 74 55 108 -5 40 -72 75 -118 62 -38 -11 -43 -9 -34 14 4 11 18 16 46 16 36 0 38 1 24 16 -9 8 -16 22 -16 30 0 17 -14 18 -40 2 -17 -11 -22 -10 -30 2 -5 8 -8 21 -5 28 3 8 5 27 5 43 0 28 2 29 44 29 25 0 47 4 50 9 3 4 32 11 63 15 97 11 153 64 153 144 0 59 -21 104 -64 137 -19 15 -49 49 -66 76 -22 37 -36 49 -54 49 -34 0 -46 20 -65 107 -17 82 -28 94 -93 108 -17 3 -33 17 -42 34 -27 51 -67 91 -117 117 -36 18 -50 31 -55 52 -3 15 -10 38 -15 51 -6 14 -13 63 -16 110 -4 77 -9 91 -40 138 -26 39 -34 59 -29 78 3 14 9 35 12 48 8 34 -17 59 -66 66 -39 6 -44 9 -59 49 -13 36 -26 49 -73 75 -55 30 -58 30 -76 14 -19 -18 -20 -57 -1 -57 19 0 49 -66 49 -107 0 -63 -20 -55 -75 27 -41 63 -86 102 -100 88 -3 -2 -1 -18 4 -35 10 -35 6 -43 -21 -43 -12 0 -18 7 -18 21 0 16 -4 19 -20 14 -18 -6 -20 -3 -15 18 6 24 -15 57 -35 57 -9 0 -40 51 -40 65 0 3 11 3 25 -1 14 -3 31 -1 39 5 8 7 25 9 39 6 33 -9 40 6 22 49 -8 19 -15 49 -15 66 0 35 -6 37 -40 10 -14 -11 -40 -20 -58 -20 -18 0 -43 -5 -54 -11 -15 -8 -22 -8 -28 1 -6 9 -13 9 -28 1 -11 -6 -27 -8 -36 -5 -19 7 -29 34 -13 34 7 0 24 7 40 15 24 12 33 12 68 -1 53 -18 85 -18 93 1 7 20 -3 45 -19 45 -7 0 -23 9 -36 19 l-24 19 40 17 c22 10 61 19 86 20 30 1 57 10 78 26 34 25 34 24 15 117 -5 26 -1 41 21 74 35 52 30 93 -18 177 -20 33 -41 78 -47 99 -5 21 -19 47 -31 58 -12 10 -30 36 -40 57 -18 35 -22 37 -67 37 -59 1 -111 12 -180 38 -44 17 -74 21 -168 19 -104 -2 -114 0 -114 16 0 28 -31 69 -44 59 -41 -32 -93 -10 -100 43 -2 17 -7 37 -10 46 -9 21 -76 32 -110 19 -35 -13 -34 6 2 23 15 8 39 17 54 21 20 4 26 11 21 23 -5 13 -2 15 19 10 20 -5 27 -2 36 17 13 29 7 36 -28 36 -17 0 -33 -8 -42 -22 -17 -26 -38 -17 -38 17 0 17 -9 29 -30 40 -16 9 -30 22 -30 30 0 9 -9 23 -20 32 -11 10 -20 25 -20 35 0 18 -91 68 -125 68 -14 0 -16 6 -12 28 3 17 -1 34 -11 45 -13 15 -14 22 -4 37 21 34 15 50 -17 44 -21 -4 -30 -2 -35 11 -3 9 -4 20 -1 25 3 4 -5 10 -16 13 -18 5 -20 11 -14 34 3 15 12 31 18 35 20 12 -23 48 -57 48 -42 0 -65 15 -48 32 6 6 12 20 12 29 0 11 13 22 35 29 44 15 36 30 -16 30 -33 0 -41 4 -49 26 -16 41 -12 49 14 25 23 -21 24 -21 28 -4 3 10 -1 25 -8 33 -7 9 -11 26 -8 38 5 18 10 20 25 11 27 -14 44 -1 26 19 -20 24 -28 50 -17 57 5 3 1 26 -8 52 -12 33 -25 50 -47 59 -16 7 -43 25 -60 39 l-30 26 42 -6 c54 -8 58 0 47 103 l-9 77 -37 -3 c-29 -3 -38 0 -38 12 0 8 -9 18 -20 21 -34 11 -23 28 14 22 19 -3 44 -3 56 0 20 5 22 11 18 69 -3 48 0 65 10 69 51 20 -65 65 -167 65 -76 0 -180 25 -182 44 -1 6 -2 25 -3 41 -1 28 -4 30 -36 28 -55 -3 -64 -6 -90 -33 -22 -22 -25 -23 -28 -7 -2 10 3 29 12 42 23 35 20 55 -7 55 -28 0 -57 -29 -57 -56 0 -48 -43 -55 -133 -24 -31 11 -64 20 -74 20 -13 0 -14 3 -5 12 18 18 15 32 -10 43 -12 6 -32 28 -44 50 -17 30 -28 40 -46 38 -42 -3 -49 3 -33 34 20 38 19 52 -7 74 -19 15 -40 18 -133 19 -101 0 -115 2 -173 30 -35 17 -71 30 -80 29 -10 0 -39 -18 -66 -40z']
			),
			'location' => DB::raw('POINT(-20.348404, 57.552152)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}