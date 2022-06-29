<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FR_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'France',
			'code'  => 'FR',
			'type'  => null,
			'paths' => serialize(
				['M4805 9979 c-192 -43 -280 -74 -360 -127 l-55 -36 0 -53 c0 -30 -7 -70 -15 -90 -21 -49 -19 -80 9 -140 19 -39 21 -53 11 -56 -15 -6 -45 -90 -45 -128 0 -15 5 -29 11 -31 8 -3 7 -14 -5 -35 -23 -45 -20 -54 24 -87 78 -58 118 -146 66 -146 -14 0 -28 5 -31 10 -4 6 -27 21 -52 34 l-46 23 -60 -64 c-63 -66 -196 -182 -234 -202 -12 -6 -41 -11 -65 -10 -24 1 -61 -6 -84 -14 -22 -8 -53 -13 -67 -10 -54 11 -116 -7 -183 -53 -36 -25 -88 -54 -116 -65 -28 -11 -64 -29 -79 -40 -40 -28 -93 -140 -93 -197 l-1 -46 99 -18 c91 -16 128 -30 115 -43 -3 -2 -49 -13 -102 -24 -70 -14 -125 -34 -198 -70 -59 -30 -116 -51 -134 -51 -18 0 -70 18 -116 39 -103 48 -164 61 -279 61 -64 0 -96 5 -117 17 -39 22 -83 11 -83 -20 0 -38 -12 -45 -67 -40 -47 5 -53 8 -53 28 0 12 7 36 16 54 15 31 15 33 -20 97 -20 35 -36 72 -36 81 0 10 14 32 31 49 25 25 30 38 25 58 -9 36 -56 42 -130 16 -33 -11 -73 -20 -90 -20 -38 0 -152 35 -185 57 -23 15 -24 15 -16 -8 4 -13 14 -82 23 -154 l15 -130 73 -78 c80 -85 92 -110 75 -158 -6 -18 -8 -55 -5 -85 6 -44 10 -54 25 -54 25 0 24 -23 -2 -165 -26 -135 -21 -151 58 -205 59 -39 68 -66 26 -76 -83 -18 -104 -26 -113 -44 -10 -18 -13 -19 -33 -6 -12 8 -53 20 -92 26 -90 16 -113 30 -117 75 l-3 36 -35 -30 -35 -29 18 -51 c19 -54 16 -83 -11 -113 -14 -17 -52 -25 -52 -12 0 4 5 24 11 45 10 33 9 42 -10 73 -13 20 -27 36 -31 36 -5 0 -20 -11 -34 -25 -31 -31 -49 -32 -73 -2 -10 12 -25 22 -33 22 -10 0 -15 9 -15 27 1 23 -2 25 -18 17 -10 -6 -28 -9 -40 -7 -14 2 -30 -7 -45 -24 -13 -15 -48 -41 -78 -58 -29 -17 -54 -36 -54 -41 0 -5 -8 -9 -18 -9 -13 0 -34 29 -72 98 -114 208 -122 218 -174 213 -28 -3 -29 -2 -23 34 6 35 5 36 -12 21 -23 -21 -41 -20 -56 1 -11 15 -17 14 -64 -16 -36 -23 -58 -31 -75 -27 -20 5 -24 1 -35 -34 -21 -70 -102 -106 -134 -60 -8 11 -27 23 -44 26 -26 5 -32 2 -51 -30 -23 -38 -36 -43 -76 -25 -16 8 -26 23 -31 46 -5 28 -10 33 -23 27 -54 -23 -142 -52 -174 -58 -31 -6 -38 -4 -38 10 0 11 -5 14 -16 10 -9 -3 -34 -9 -57 -12 -23 -4 -53 -15 -67 -24 -31 -21 -86 -40 -115 -40 -19 0 -23 -7 -29 -46 -3 -26 -6 -66 -6 -90 0 -43 1 -44 33 -44 17 0 83 11 145 23 105 21 112 22 112 5 0 -9 -10 -23 -22 -29 -21 -11 -20 -12 12 -25 25 -11 31 -19 27 -34 -4 -15 0 -20 16 -20 31 0 44 -11 57 -44 8 -21 7 -32 -1 -42 -16 -20 -31 -17 -73 11 -36 24 -134 55 -175 55 -17 0 -21 -6 -21 -30 0 -30 0 -30 25 -14 24 15 28 15 68 0 64 -25 85 -46 93 -93 8 -54 -3 -59 -139 -72 -59 -6 -118 -13 -133 -17 -38 -10 -10 -24 48 -24 45 0 49 -3 73 -40 14 -22 37 -69 52 -106 26 -62 26 -67 10 -79 -16 -11 -16 -13 -1 -19 8 -3 38 -6 66 -6 l50 0 -6 34 c-5 25 -3 35 9 40 8 3 15 18 15 34 0 34 16 52 47 52 16 0 23 -6 23 -19 0 -11 -4 -23 -10 -26 -19 -12 -10 -34 18 -49 26 -14 30 -13 45 5 24 28 32 24 65 -29 24 -39 38 -51 73 -61 70 -21 162 -66 192 -94 l27 -26 0 34 0 34 43 -18 c32 -14 42 -24 43 -42 1 -47 3 -50 32 -47 22 2 28 8 30 36 4 40 28 43 66 7 37 -34 34 -60 -12 -84 -29 -15 -29 -41 1 -41 13 0 28 -5 34 -11 18 -18 58 -7 61 18 2 12 9 27 17 33 11 9 17 6 28 -16 14 -26 19 -28 83 -28 66 -1 69 -2 79 -30 8 -24 6 -31 -16 -50 l-26 -22 76 -1 c51 0 88 -6 109 -17 34 -17 42 -43 17 -52 -11 -5 -12 -10 -3 -24 11 -18 8 -26 -36 -85 -5 -6 -6 -32 -2 -56 l7 -44 64 -16 65 -16 29 32 c43 49 66 58 130 51 61 -7 77 -16 134 -70 40 -38 99 -59 194 -71 48 -6 52 -9 43 -26 -20 -37 -47 -42 -122 -24 -49 13 -92 33 -144 68 -53 35 -87 51 -119 55 -55 6 -73 -7 -73 -52 0 -19 -3 -42 -6 -53 -5 -15 1 -22 30 -32 37 -13 134 -99 134 -118 0 -6 -11 -14 -24 -17 -29 -7 -126 -134 -126 -164 0 -11 17 -42 37 -69 20 -26 54 -70 75 -98 21 -27 46 -79 57 -115 15 -50 30 -75 63 -106 49 -48 106 -79 161 -87 20 -3 50 -15 65 -26 41 -29 82 -37 82 -17 0 29 30 17 47 -20 14 -28 21 -34 38 -29 40 13 58 10 77 -16 27 -36 17 -63 -38 -95 -40 -24 -43 -28 -31 -43 26 -29 97 -180 97 -206 0 -18 -5 -25 -20 -25 -17 0 -18 -3 -10 -26 18 -45 12 -71 -16 -78 -30 -8 -27 -28 13 -90 34 -52 15 -65 -45 -30 -49 29 -57 27 -48 -10 4 -17 21 -33 51 -48 54 -28 225 -211 255 -274 14 -28 25 -78 30 -141 13 -138 24 -170 86 -247 30 -37 54 -74 54 -81 0 -19 -13 -25 -30 -15 -11 7 -18 -1 -30 -33 -9 -23 -20 -42 -25 -42 -5 0 -13 19 -17 43 -4 25 -20 58 -39 81 -36 43 -65 129 -78 237 -7 63 -15 80 -63 150 -100 146 -113 163 -125 164 -24 0 -44 -48 -53 -126 -13 -118 -29 -206 -61 -339 -16 -66 -34 -165 -39 -220 -6 -55 -14 -125 -19 -155 -5 -30 -8 -56 -6 -58 2 -2 10 21 19 52 16 53 36 76 69 76 20 0 117 -101 117 -123 0 -52 -42 -71 -105 -47 -17 7 -33 7 -45 0 -29 -15 -57 -104 -79 -251 -11 -74 -47 -253 -80 -399 -32 -146 -62 -285 -66 -309 -18 -129 -164 -311 -250 -311 -18 0 -18 1 -4 -39 9 -27 16 -31 45 -31 24 0 43 -8 59 -25 l25 -24 0 24 c0 36 40 33 101 -7 43 -27 49 -36 49 -65 0 -18 -14 -63 -30 -100 -17 -36 -30 -70 -30 -74 0 -5 13 -9 29 -9 22 0 31 6 41 30 26 63 80 63 80 0 0 -46 29 -85 78 -106 80 -35 190 -64 243 -64 l55 0 22 -45 c12 -25 33 -63 47 -85 l25 -40 154 0 153 0 47 -59 c46 -57 49 -59 79 -50 18 5 76 12 129 16 l98 6 11 -33 12 -33 14 27 c16 30 29 32 61 11 15 -11 40 -15 84 -13 l63 3 -3 41 c-2 23 4 58 12 78 17 42 38 46 94 17 20 -10 75 -27 122 -36 64 -13 93 -24 118 -47 33 -28 36 -28 107 -22 89 8 125 -8 125 -55 0 -16 8 -39 18 -51 16 -20 21 -21 41 -11 18 10 42 10 113 0 96 -14 108 -23 108 -82 0 -16 9 -26 29 -33 18 -7 39 -29 56 -60 73 -128 86 -133 201 -83 l71 31 99 -40 c98 -40 99 -40 149 -25 27 8 97 39 154 69 58 30 112 54 120 54 8 0 45 -16 82 -35 38 -19 71 -35 74 -35 4 0 -3 13 -14 29 -12 16 -21 35 -21 43 0 8 -16 29 -35 48 l-35 34 0 115 c0 83 5 135 18 181 16 54 17 70 6 95 -10 25 -9 35 6 66 12 23 15 40 9 50 -22 36 -2 83 26 59 11 -9 17 -5 30 21 25 47 103 127 152 156 42 25 72 27 115 9 12 -6 29 4 60 37 55 57 255 219 313 252 31 19 55 25 82 23 36 -3 38 -5 47 -47 12 -56 36 -66 176 -76 120 -8 158 -23 166 -65 7 -34 24 -40 117 -40 l67 0 0 30 c0 54 60 91 90 55 7 -8 21 -15 32 -15 19 0 19 1 4 25 -17 26 -21 82 -7 104 8 12 20 9 73 -17 35 -18 73 -32 84 -32 50 0 58 -69 12 -103 -15 -11 -51 -22 -83 -26 -54 -6 -55 -7 -41 -26 14 -20 15 -20 87 -1 95 24 116 23 147 -7 20 -20 25 -36 25 -71 l0 -46 41 0 c23 0 52 -7 65 -16 22 -16 24 -16 33 0 14 25 35 19 81 -23 23 -21 52 -41 64 -45 12 -4 32 -23 43 -41 23 -37 40 -37 70 -1 16 20 67 20 100 1 35 -20 48 -18 52 7 3 22 8 23 76 22 65 0 73 2 78 21 4 17 23 25 105 45 54 13 103 26 108 29 5 4 12 21 16 38 6 28 4 33 -13 33 -11 0 -26 7 -33 16 -11 14 -11 18 4 28 9 7 25 33 36 59 21 50 37 62 94 72 53 10 83 38 102 95 17 51 27 58 111 75 25 5 37 17 58 55 32 59 69 90 107 90 26 0 29 3 29 33 0 64 27 77 106 52 21 -7 22 -4 20 80 -1 85 0 87 30 115 17 15 37 29 43 31 16 6 32 142 17 151 -18 12 -69 9 -148 -8 -41 -8 -90 -13 -113 -9 -58 8 -192 78 -252 130 -70 62 -90 108 -96 227 l-5 97 58 92 c57 88 59 93 46 123 -16 39 -69 76 -109 76 -24 0 -42 11 -79 51 -60 64 -128 165 -128 191 0 30 54 78 87 78 15 0 89 23 164 52 l136 53 7 70 c8 79 13 72 -93 138 -51 32 -62 44 -71 77 -5 22 -15 58 -21 81 -7 30 -19 45 -42 57 -17 10 -44 30 -60 45 -24 23 -28 33 -23 59 10 50 29 72 95 107 71 38 76 54 34 119 -20 31 -38 45 -64 52 -19 5 -46 21 -60 36 -22 24 -24 33 -24 132 0 69 -5 115 -13 130 -9 15 -11 37 -7 63 l7 39 -56 0 c-65 0 -241 -53 -250 -75 -7 -19 12 -75 34 -100 23 -26 13 -51 -34 -93 -54 -47 -109 -72 -159 -72 -27 0 -49 -6 -57 -15 -28 -34 -54 -5 -52 59 1 22 16 45 61 90 34 34 61 66 61 71 0 5 -10 33 -22 62 -21 51 -21 53 -4 98 15 39 16 51 5 77 -12 30 -11 32 27 66 90 81 131 120 162 156 30 35 32 41 32 117 0 44 4 88 10 98 9 18 42 34 93 45 15 4 27 13 27 22 0 8 24 41 53 72 66 70 132 159 142 192 4 14 17 35 28 48 20 22 20 22 1 22 -48 0 -56 44 -23 120 19 44 24 49 62 55 23 4 59 16 79 26 21 11 39 19 42 19 15 0 36 -35 36 -60 0 -55 54 -44 128 27 72 69 76 83 42 169 l-29 71 28 135 c27 131 27 135 11 184 -28 80 -5 193 56 283 20 30 24 48 24 109 0 44 5 81 14 95 7 12 16 45 19 74 7 57 23 96 71 161 61 84 77 101 111 113 30 11 33 16 28 41 -4 21 0 35 17 53 l22 23 -24 15 c-159 99 -201 116 -340 132 -87 10 -126 19 -147 34 -37 27 -45 26 -99 -5 -40 -24 -48 -25 -82 -15 -29 8 -45 8 -64 0 -29 -13 -51 -2 -61 32 -9 28 -81 27 -88 -1 -7 -29 -53 -26 -99 7 -36 24 -110 126 -180 245 -26 46 -26 46 -90 50 -53 4 -74 0 -131 -25 l-69 -29 -82 51 -83 51 -84 -25 c-131 -38 -143 -36 -164 35 -9 30 -14 35 -38 32 -29 -4 -32 0 -42 60 -5 33 -11 40 -63 64 -227 106 -258 128 -248 170 5 20 0 34 -24 60 -35 41 -36 52 -10 136 24 78 24 77 0 71 -14 -4 -22 -17 -26 -43 -10 -60 -36 -93 -119 -149 -85 -57 -114 -62 -202 -36 -98 29 -133 86 -75 122 15 9 29 18 30 19 2 1 -6 16 -19 33 -19 26 -22 41 -21 109 2 70 0 81 -21 101 -29 27 -77 41 -139 41 -39 0 -53 -5 -78 -30 -35 -35 -32 -33 -64 -19 -29 13 -41 46 -51 133 -10 84 -34 106 -118 106 -76 0 -109 20 -127 78 -7 20 -30 71 -52 112 l-40 75 -44 -4 c-40 -3 -44 -5 -44 -30 0 -15 -6 -36 -14 -46 -12 -17 -18 -15 -100 44 -101 73 -121 105 -137 218 -12 89 -18 113 -27 112 -4 -1 -83 -18 -177 -40z m-254 -8866 c15 -41 -3 -73 -41 -73 -28 0 -30 2 -30 38 0 63 51 88 71 35z', 'M10049 1898 c0 -2 -3 -28 -6 -58 -3 -30 -9 -62 -14 -72 -14 -25 -11 -54 6 -68 18 -15 13 -55 -11 -102 -17 -32 -40 -35 -82 -11 -25 14 -34 15 -75 3 -42 -11 -47 -16 -47 -41 0 -36 -40 -63 -118 -81 -46 -10 -55 -16 -67 -45 -12 -28 -18 -33 -38 -28 -15 4 -28 0 -40 -13 -19 -21 -21 -35 -11 -95 6 -37 6 -38 -21 -31 -27 7 -28 6 -22 -27 4 -19 20 -46 37 -61 16 -15 30 -30 30 -32 0 -3 -20 -19 -44 -35 -43 -30 -44 -32 -34 -67 5 -20 7 -42 4 -50 -3 -9 1 -14 13 -14 24 0 74 -25 94 -47 8 -10 18 -30 22 -45 5 -21 2 -30 -14 -40 -12 -7 -21 -21 -21 -31 0 -10 -5 -28 -11 -39 -11 -20 -10 -21 22 -13 56 13 101 11 111 -5 8 -13 -5 -48 -70 -181 -1 -3 10 -4 25 -2 33 5 133 -41 133 -62 0 -7 -21 -31 -46 -53 -29 -24 -45 -45 -41 -54 3 -8 58 -35 123 -60 72 -28 123 -54 128 -65 5 -10 12 -25 16 -33 4 -8 15 -16 24 -18 12 -3 16 4 16 25 0 48 21 107 43 125 18 15 19 18 5 18 -25 0 -30 16 -23 61 7 38 9 41 35 37 26 -4 29 -1 40 41 7 25 15 105 19 176 l7 130 47 88 c26 49 47 97 47 107 0 10 -11 60 -24 112 -14 51 -29 146 -35 211 -9 111 -11 121 -45 170 l-35 52 -7 163 c-6 149 -8 162 -25 162 -11 0 -19 -1 -20 -2z']
			),
			'location' => DB::raw('POINT(46.227638, 2.213749)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}