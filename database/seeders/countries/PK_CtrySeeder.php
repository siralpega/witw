<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PK_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Pakistan',
			'code'  => 'PK',
			'type'  => null,
			'paths' => serialize(
				['M8631 9919 c-27 -33 -38 -39 -57 -35 -16 4 -44 -4 -84 -24 -33 -16 -73 -30 -89 -30 -21 0 -35 -7 -46 -24 -25 -37 -54 -38 -161 -5 -95 30 -103 31 -204 24 -58 -5 -150 -9 -205 -10 -55 -1 -120 -7 -145 -13 -25 -5 -97 -13 -160 -17 -63 -4 -124 -13 -135 -20 -11 -7 -55 -23 -97 -34 -43 -12 -86 -28 -95 -36 -81 -69 -102 -85 -114 -85 -8 0 -38 -16 -66 -35 -29 -19 -56 -35 -61 -35 -5 0 -17 -9 -26 -19 -16 -18 -16 -20 0 -29 9 -5 14 -14 10 -20 -9 -15 -49 -1 -69 25 -22 27 -45 30 -55 6 -18 -41 -47 -80 -78 -103 -18 -14 -38 -35 -45 -47 -7 -13 -16 -23 -21 -23 -12 0 -110 -79 -126 -101 -11 -16 -9 -22 20 -48 18 -17 43 -31 56 -31 16 0 22 -6 22 -21 0 -12 10 -29 23 -39 13 -10 32 -35 42 -57 11 -21 27 -43 35 -50 13 -10 13 -16 1 -48 -7 -20 -11 -38 -9 -39 1 -2 17 -11 34 -19 28 -14 32 -22 37 -69 4 -41 1 -60 -14 -84 -27 -44 -24 -65 12 -95 l32 -26 -41 -45 c-35 -38 -42 -52 -42 -87 0 -39 -3 -43 -38 -59 -62 -28 -111 -72 -132 -118 -12 -29 -25 -44 -37 -44 -32 0 -62 -28 -65 -63 -2 -26 -8 -33 -29 -35 -21 -2 -28 -10 -33 -34 -7 -35 25 -92 72 -129 24 -18 24 -20 7 -45 -12 -18 -15 -36 -10 -64 5 -30 2 -45 -17 -73 -37 -58 -172 -109 -279 -106 -25 1 -59 -5 -75 -14 -26 -14 -32 -13 -59 1 -16 8 -62 18 -102 22 -39 4 -90 16 -113 28 -37 18 -46 19 -78 8 -43 -15 -60 -58 -42 -110 13 -40 85 -110 125 -123 19 -6 31 -17 33 -31 2 -12 8 -22 13 -22 6 0 9 -18 8 -40 -3 -33 2 -45 28 -72 51 -53 61 -128 18 -128 -6 0 -29 -13 -51 -30 -21 -16 -44 -30 -50 -30 -6 0 -21 -12 -35 -26 -38 -41 -57 -47 -168 -50 -93 -3 -109 -6 -144 -30 -37 -24 -39 -28 -34 -67 2 -23 8 -52 12 -63 5 -17 2 -23 -17 -28 -13 -3 -31 -17 -41 -31 -17 -23 -17 -26 -1 -50 14 -21 15 -35 8 -73 -8 -42 -13 -48 -44 -58 -22 -7 -43 -25 -58 -49 -21 -33 -22 -41 -11 -64 7 -14 16 -82 20 -151 4 -69 10 -141 14 -160 6 -33 4 -37 -43 -73 -34 -26 -54 -51 -66 -81 -15 -40 -23 -47 -86 -75 -39 -17 -81 -31 -94 -31 -35 0 -73 35 -80 75 -6 28 -11 35 -30 35 -13 0 -35 9 -50 21 l-26 20 -32 -24 c-30 -22 -39 -23 -96 -18 -44 5 -68 13 -83 28 l-21 21 -74 -75 c-65 -67 -77 -75 -100 -69 -23 6 -35 0 -78 -43 -51 -50 -52 -51 -90 -40 -21 6 -40 9 -42 6 -2 -2 2 -26 8 -54 l12 -50 33 14 c45 18 83 8 83 -23 0 -17 -6 -24 -19 -24 -10 0 -29 -8 -42 -19 -51 -39 -152 -63 -261 -61 -147 3 -161 6 -154 36 7 24 6 25 -46 18 -40 -5 -61 -14 -88 -39 -19 -18 -43 -35 -53 -38 -10 -4 -26 -27 -37 -53 -36 -82 -55 -101 -116 -115 -65 -15 -60 -6 -105 -184 l-33 -125 23 -24 c21 -22 22 -30 16 -88 -4 -35 -18 -94 -31 -132 -32 -92 -31 -105 13 -143 l38 -32 -30 -29 c-26 -26 -87 -48 -423 -151 -307 -95 -397 -119 -412 -111 -25 14 -296 13 -361 -1 -29 -6 -73 -22 -99 -35 -27 -13 -53 -24 -58 -24 -6 0 -14 -16 -18 -35 -7 -39 -11 -41 -39 -21 -11 7 -81 28 -155 45 l-135 32 -370 -42 -370 -41 -488 166 c-269 91 -491 166 -494 166 -16 0 127 -182 211 -267 95 -98 100 -105 97 -141 -1 -26 3 -43 14 -52 9 -7 13 -21 10 -31 -4 -13 2 -22 24 -33 23 -12 31 -25 36 -57 9 -52 152 -267 209 -312 56 -45 152 -86 249 -105 79 -17 83 -19 151 -86 l70 -69 60 11 c33 6 62 10 64 8 2 -3 -1 -42 -7 -88 -8 -67 -7 -87 4 -105 9 -13 20 -84 29 -191 12 -147 12 -178 -1 -232 -8 -35 -12 -69 -9 -75 2 -7 -2 -21 -9 -32 -23 -29 -19 -53 9 -53 12 0 37 -5 54 -11 23 -8 41 -7 77 5 71 25 124 21 157 -11 26 -25 27 -28 11 -45 -20 -23 -31 -134 -14 -151 16 -16 14 -24 -12 -31 -19 -4 -24 -16 -34 -81 -7 -42 -15 -80 -18 -86 -9 -14 -57 -11 -106 7 -53 19 -127 13 -172 -14 -18 -11 -64 -25 -104 -31 -39 -7 -80 -19 -90 -26 -10 -8 -28 -15 -41 -15 -12 0 -25 -7 -27 -15 -3 -8 -8 -23 -11 -32 -4 -10 -6 -31 -5 -47 3 -31 6 -30 -66 -10 -17 5 -22 1 -28 -24 -4 -22 -13 -31 -33 -35 -15 -3 -55 -15 -88 -27 l-62 -22 -17 -92 c-9 -50 -19 -116 -22 -146 -6 -61 -17 -80 -44 -80 -14 0 -19 -7 -19 -28 0 -15 5 -33 12 -40 8 -8 8 -15 1 -24 -6 -7 -16 -68 -22 -136 -9 -101 -16 -130 -36 -162 l-24 -39 27 -5 c15 -3 44 -8 64 -12 42 -7 45 -14 22 -49 -23 -35 -12 -55 30 -55 25 0 36 5 41 19 6 19 48 31 118 31 39 0 45 8 25 28 -20 20 7 35 73 40 l61 5 -4 -42 c-3 -39 -2 -41 24 -41 29 0 45 14 28 25 -20 12 -9 27 30 42 22 9 37 19 35 23 -14 22 172 26 275 6 54 -10 71 -10 100 2 23 9 50 12 80 8 25 -4 65 -8 90 -10 25 -1 55 -8 68 -15 13 -7 30 -10 38 -7 12 4 11 11 -6 38 -11 18 -20 36 -20 40 0 31 195 63 226 37 10 -8 53 -17 103 -20 112 -8 212 -27 231 -43 8 -8 30 -17 48 -21 25 -5 32 -3 32 9 0 9 8 16 18 16 26 0 62 -29 62 -50 0 -25 15 -33 47 -25 23 6 24 7 9 24 -20 22 -20 35 0 56 14 14 38 16 156 14 139 -2 140 -2 164 24 32 35 104 40 227 16 53 -11 62 -10 120 14 57 25 103 33 307 56 73 9 76 8 111 -20 29 -23 38 -26 42 -14 4 8 2 17 -4 21 -5 3 -7 14 -4 25 5 15 1 19 -17 19 -13 0 -34 9 -48 20 -32 25 -55 25 -72 1 -13 -19 -95 -42 -86 -25 25 56 34 65 72 75 60 16 111 4 152 -36 18 -19 34 -38 34 -43 0 -5 9 -17 19 -26 16 -15 18 -23 10 -44 -9 -23 -5 -31 42 -78 56 -57 55 -53 30 -164 -5 -25 -10 -64 -11 -87 0 -23 -4 -45 -10 -48 -26 -16 -4 -23 66 -21 49 1 82 -3 94 -11 12 -9 20 -9 22 -2 2 6 15 1 31 -11 17 -14 34 -19 47 -15 35 11 59 -4 66 -42 5 -27 3 -38 -10 -45 -24 -13 -19 -28 9 -28 27 0 33 -18 13 -38 -9 -9 -9 -12 1 -12 8 0 11 -6 7 -16 -7 -17 15 -64 39 -84 12 -10 14 -24 9 -59 -7 -54 21 -148 62 -208 14 -21 28 -50 31 -65 7 -33 16 -42 66 -58 25 -8 42 -21 47 -36 13 -33 35 -40 65 -20 19 12 30 14 44 6 28 -14 29 -13 33 21 l3 32 43 -37 c66 -55 78 -48 72 39 -2 37 11 24 29 -28 11 -33 10 -41 -3 -63 -16 -23 -16 -25 9 -34 15 -6 31 -10 36 -10 16 0 49 64 49 96 0 30 25 64 47 64 6 0 13 10 16 21 5 18 11 21 40 15 40 -7 227 -10 234 -3 2 3 7 55 10 116 6 107 16 140 34 110 4 -8 14 -23 23 -34 14 -20 15 -19 25 8 12 31 19 33 36 10 10 -13 18 -15 41 -6 16 6 94 11 173 12 79 1 151 6 160 10 12 7 27 -2 63 -35 l47 -44 93 0 c51 0 99 4 106 8 6 5 23 23 37 42 22 30 41 39 157 77 73 23 135 43 138 43 3 0 5 -23 6 -50 0 -28 6 -56 13 -63 7 -7 48 -14 98 -16 84 -3 86 -3 80 18 -4 17 3 27 31 45 20 14 51 27 69 31 55 11 70 55 19 55 -32 0 -49 41 -40 97 4 28 13 47 26 54 27 14 19 43 -42 149 -27 47 -55 113 -63 147 -9 38 -27 79 -50 111 -21 27 -37 58 -37 69 0 11 -11 30 -25 43 -24 22 -25 29 -25 137 0 111 0 113 -24 119 -13 3 -33 1 -44 -5 -12 -6 -55 -11 -97 -11 -70 0 -76 2 -84 23 -5 13 -27 49 -48 79 -50 71 -72 156 -54 201 48 115 53 141 47 224 -7 96 -11 107 -40 127 -18 11 -37 12 -87 6 -62 -8 -67 -6 -166 37 -56 25 -108 52 -117 61 -10 11 -15 42 -17 92 -1 68 2 82 35 152 37 78 77 128 233 288 59 62 79 91 108 158 19 46 35 90 35 97 0 7 15 23 34 35 19 11 43 36 54 55 24 39 64 54 130 47 34 -3 48 -11 71 -39 16 -20 34 -54 40 -77 15 -55 51 -96 92 -105 26 -6 45 -2 84 17 154 76 195 89 321 96 97 5 134 12 193 34 l74 29 18 73 c18 71 22 77 102 155 l82 80 34 113 c30 98 39 117 73 147 21 19 45 35 54 35 9 0 37 15 63 34 25 19 90 56 144 82 92 46 98 51 108 89 6 22 26 56 44 75 19 19 61 87 94 151 55 104 64 131 90 258 16 78 30 143 32 145 2 2 59 22 125 45 115 40 125 46 183 105 58 58 61 64 51 90 -5 15 -21 42 -34 59 l-25 32 52 46 c29 26 62 49 75 53 13 5 22 16 23 29 0 14 18 35 49 60 29 21 60 57 74 85 23 44 65 92 148 169 27 25 37 29 52 21 28 -16 53 13 39 45 -9 19 -17 23 -42 19 -47 -7 -50 27 -11 143 19 56 30 108 27 123 -2 15 -21 65 -41 112 l-36 85 67 62 c38 35 76 63 86 63 10 0 37 21 60 46 40 43 44 45 69 34 22 -11 34 -10 68 4 22 9 51 16 64 16 13 0 26 7 29 15 4 8 24 23 46 34 59 31 64 67 16 137 -33 47 -42 54 -71 54 -26 0 -37 6 -51 30 -19 33 -66 42 -77 14 -5 -14 -8 -14 -28 0 -15 11 -45 16 -88 16 l-66 0 -16 49 c-11 35 -13 52 -5 60 7 7 7 18 -2 35 -11 20 -11 28 3 47 9 13 16 29 16 36 0 23 -30 14 -42 -12 -9 -19 -19 -25 -45 -25 -29 0 -36 6 -63 54 -24 42 -37 55 -62 60 l-31 6 21 23 22 24 -21 19 c-12 10 -40 23 -63 29 -32 8 -45 18 -60 45 -10 19 -32 42 -49 50 -43 21 -43 32 3 58 94 54 91 176 -7 217 -27 11 -33 20 -38 59 -9 59 18 103 93 152 59 38 66 63 31 108 -20 26 -24 27 -89 20 -43 -4 -75 -2 -88 5 l-22 11 32 64 31 63 -32 46 c-29 43 -33 45 -66 40 -33 -5 -35 -4 -35 21 0 19 10 33 40 52 34 23 40 32 40 61 0 24 10 48 31 75 29 36 35 39 73 36 35 -2 51 4 103 40 56 38 68 42 123 42 55 0 67 -4 123 -42 56 -39 70 -44 147 -52 47 -4 115 -9 151 -10 57 -1 70 -5 106 -34 45 -36 121 -51 251 -52 80 0 146 25 191 74 21 22 33 26 83 26 44 0 71 7 106 25 26 14 54 25 63 25 9 0 28 9 42 20 l25 20 36 -21 c21 -12 48 -19 68 -17 29 3 34 8 56 66 19 49 28 62 45 62 12 0 31 7 42 16 14 10 31 13 58 9 35 -6 37 -5 37 20 0 14 4 24 9 21 5 -3 23 -1 40 5 26 9 30 15 25 33 -10 33 -35 79 -54 101 -9 11 -20 31 -24 45 -3 14 -37 67 -76 118 -51 68 -72 105 -76 135 -5 33 -18 53 -55 89 -27 26 -55 64 -64 83 -14 35 -16 36 -52 29 -21 -4 -51 -13 -66 -21 -17 -8 -49 -13 -80 -11 -50 3 -52 4 -60 40 -9 39 -70 98 -100 98 -32 0 -36 59 -6 86 18 16 19 25 14 84 -13 125 -34 201 -64 235 -16 19 -34 49 -40 68 -11 33 -13 34 -92 45 l-81 12 -37 -30 -36 -30 -11 67 c-10 57 -17 71 -47 100 -20 18 -47 33 -61 33 -13 0 -29 7 -36 15 -16 19 -89 20 -116 1 -11 -8 -36 -17 -55 -21 -33 -6 -36 -4 -54 29 -20 37 -30 42 -55 26 -10 -6 -24 -2 -47 16 -17 13 -33 24 -35 24 -2 0 -18 -19 -37 -41z']
			),
			'location' => DB::raw('POINT(30.375321, 69.345116)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}