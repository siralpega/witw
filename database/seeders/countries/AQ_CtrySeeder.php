<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AQ_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Antarctica',
			'code'  => 'AQ',
			'type'  => null,
			'paths' => serialize(
				['M4803 9628 c-20 -7 -36 -21 -44 -39 -13 -34 -16 -35 -40 -13 -12 11 -27 14 -44 10 -22 -6 -25 -12 -25 -46 0 -37 -2 -40 -23 -35 -19 5 -28 -1 -50 -34 -14 -22 -32 -60 -38 -85 -14 -55 -34 -60 -93 -20 -37 25 -40 26 -70 11 -29 -13 -32 -19 -28 -51 3 -30 -2 -44 -37 -88 l-42 -52 28 -14 c31 -15 53 -40 53 -57 0 -6 -16 -19 -35 -28 -40 -19 -43 -27 -15 -52 18 -17 60 -112 60 -137 0 -7 -19 7 -43 30 -36 36 -49 42 -88 43 -57 3 -69 -5 -69 -42 0 -22 7 -32 25 -41 14 -6 25 -14 25 -18 0 -14 -49 -40 -75 -40 -47 0 -65 -17 -65 -60 0 -36 -3 -41 -37 -57 -21 -9 -64 -17 -95 -17 -48 -1 -64 -6 -92 -28 -30 -24 -44 -28 -96 -28 -53 0 -67 -5 -113 -35 -28 -19 -55 -35 -59 -35 -5 0 -8 13 -8 29 0 16 -3 43 -6 60 l-7 32 -51 -6 c-28 -4 -59 -9 -68 -11 -13 -4 -19 3 -24 23 -4 15 -16 40 -26 56 l-19 27 -36 -42 c-19 -23 -42 -59 -50 -80 -14 -36 -18 -38 -57 -38 -35 0 -48 6 -76 35 -38 39 -50 33 -50 -22 l0 -33 -66 0 c-51 0 -73 -5 -96 -21 -27 -20 -35 -21 -80 -10 -27 6 -65 11 -84 11 -45 0 -102 -42 -106 -77 -3 -23 -12 -30 -76 -51 l-73 -24 3 -41 c3 -41 4 -42 50 -50 l47 -9 7 -69 c4 -38 10 -69 13 -69 39 0 337 -63 343 -72 22 -36 -14 -92 -124 -195 -106 -99 -140 -115 -188 -87 -24 15 -29 27 -46 117 -12 68 -25 109 -39 125 l-21 24 -115 -36 -116 -36 5 -30 c6 -41 -29 -78 -80 -86 -36 -6 -38 -8 -38 -45 0 -21 9 -62 21 -91 14 -36 19 -65 15 -89 -4 -27 1 -51 18 -90 44 -97 44 -102 -12 -128 -49 -23 -50 -25 -62 -85 -14 -70 -14 -160 1 -187 5 -11 20 -19 35 -19 21 0 24 3 18 25 -7 29 6 32 29 7 24 -27 21 -42 -17 -82 -40 -41 -61 -118 -44 -156 9 -19 19 -24 47 -24 20 0 76 -15 125 -34 84 -31 87 -33 56 -40 -18 -3 -46 -6 -63 -6 -17 0 -51 -7 -74 -16 -43 -17 -43 -17 -37 -58 5 -34 16 -50 66 -97 l61 -56 -33 -6 c-18 -4 -56 -7 -85 -7 -48 0 -55 -3 -78 -33 -14 -18 -28 -54 -32 -79 -6 -39 -12 -48 -37 -59 -26 -10 -29 -16 -26 -48 3 -35 5 -36 61 -51 39 -9 57 -19 57 -30 -1 -41 -48 -63 -106 -49 -22 4 -55 9 -75 9 -34 0 -37 -3 -43 -32 -8 -45 -10 -233 -2 -246 3 -5 -4 -76 -15 -158 l-22 -147 30 -61 c27 -55 39 -67 104 -107 56 -34 98 -51 175 -68 l100 -24 31 -81 c24 -66 34 -82 53 -84 23 -4 23 -4 -6 -27 -31 -25 -30 -17 -22 -175 4 -68 54 -150 92 -150 25 0 36 -17 36 -55 0 -13 25 -87 55 -164 30 -78 55 -154 55 -169 0 -69 12 -103 42 -118 17 -9 28 -18 25 -20 -3 -3 -45 2 -93 12 -122 22 -215 77 -249 145 -14 26 -52 78 -86 116 -81 91 -92 118 -68 159 11 17 19 43 19 57 0 22 -6 28 -40 37 -49 13 -60 29 -32 48 29 19 28 34 -11 192 -37 151 -36 148 -197 308 -86 85 -107 97 -173 104 l-47 6 -75 -81 c-77 -83 -86 -100 -60 -115 14 -7 13 -11 -5 -27 -17 -15 -24 -16 -46 -6 -15 6 -27 10 -28 9 -1 -2 -9 -20 -19 -40 -12 -28 -23 -38 -39 -38 -45 0 -66 -12 -87 -51 -12 -21 -26 -39 -32 -39 -5 0 -9 -14 -9 -30 0 -27 -2 -30 -19 -20 -27 14 -30 13 -40 -13 -6 -16 -23 -26 -57 -35 -48 -12 -49 -14 -67 -69 l-18 -56 33 -34 c43 -44 29 -42 -36 6 -74 55 -105 43 -106 -38 0 -23 -3 -23 -48 -18 -26 3 -54 7 -61 9 -8 2 -19 -13 -27 -36 l-14 -40 51 -78 c29 -43 49 -82 45 -85 -4 -4 -40 26 -80 66 l-74 74 -45 -7 c-30 -5 -53 -16 -71 -35 -15 -16 -45 -36 -66 -46 -46 -21 -57 -52 -34 -96 20 -39 12 -47 -22 -24 -31 20 -86 15 -114 -10 -29 -26 -7 -80 46 -111 40 -23 42 -27 33 -53 -13 -36 -60 -51 -157 -51 -69 0 -73 -1 -103 -35 -18 -19 -38 -35 -46 -35 -7 0 -13 -3 -13 -6 0 -24 38 -52 155 -115 74 -40 133 -74 132 -75 -2 -2 -39 6 -82 17 -55 14 -109 37 -172 75 -120 72 -151 81 -195 54 -18 -11 -44 -20 -57 -20 -24 0 -24 -1 -17 -77 6 -73 9 -80 41 -109 39 -34 43 -44 20 -44 -17 0 -65 -46 -65 -62 0 -5 16 -18 35 -29 51 -31 57 -76 16 -128 -19 -24 -31 -50 -31 -69 l0 -29 89 -5 c82 -5 93 -8 130 -38 28 -21 41 -40 41 -56 0 -22 -4 -24 -45 -24 -39 0 -53 6 -101 45 -33 27 -65 45 -80 45 l-26 0 7 -94 c6 -79 5 -97 -10 -119 -16 -25 -16 -31 6 -122 l23 -95 -33 -34 c-30 -31 -32 -38 -26 -74 4 -25 17 -50 37 -68 16 -16 43 -47 58 -69 27 -39 31 -41 124 -60 53 -10 96 -21 96 -25 0 -4 -31 -12 -69 -19 l-70 -13 6 -88 c6 -86 5 -90 -27 -146 -25 -44 -30 -64 -25 -88 27 -131 33 -187 26 -271 -7 -87 -6 -93 24 -165 31 -74 32 -75 76 -82 33 -6 51 -17 79 -48 l35 -41 50 34 c28 19 86 53 130 77 93 51 89 41 -32 -75 -62 -60 -74 -76 -79 -113 l-7 -42 71 0 c79 0 76 3 87 -86 6 -50 8 -52 42 -56 23 -3 43 2 57 13 22 18 24 17 61 -21 l39 -40 -31 0 c-50 0 -60 -7 -56 -43 9 -74 10 -75 61 -82 102 -14 98 -11 136 -91 31 -66 38 -74 58 -70 143 32 210 28 280 -16 26 -16 52 -27 58 -23 5 3 18 21 27 38 9 18 36 56 61 85 l44 52 87 1 86 0 38 52 c20 28 37 59 37 68 0 10 -16 26 -34 37 -19 12 -44 38 -55 60 l-20 39 27 143 28 142 36 -40 c54 -60 61 -77 53 -137 -5 -41 -1 -63 16 -106 16 -39 21 -72 20 -119 -1 -58 1 -69 23 -89 14 -13 32 -21 40 -18 24 10 298 -22 503 -57 106 -18 195 -31 198 -28 3 3 5 16 5 29 0 31 14 57 61 114 40 48 48 83 29 119 -10 18 -33 28 -117 50 -40 10 -43 13 -43 44 0 32 1 33 33 27 22 -4 45 -20 67 -44 32 -37 34 -38 93 -35 l60 3 35 83 c29 71 42 89 87 125 53 42 64 60 65 107 0 17 12 33 35 50 25 18 35 33 35 54 0 18 10 38 25 52 34 31 33 53 -1 46 -17 -3 -50 7 -95 28 -58 28 -69 38 -74 64 -4 17 -9 40 -12 50 -4 15 11 10 80 -28 60 -32 97 -46 124 -46 35 0 40 3 48 33 8 24 16 33 37 35 39 5 71 59 62 107 -6 31 -4 35 16 35 17 0 54 14 68 25 2 2 -13 29 -34 60 l-37 56 27 121 c39 171 45 292 17 384 -11 39 -21 75 -21 80 0 4 21 -21 46 -56 50 -68 63 -106 64 -185 0 -38 8 -62 31 -98 l30 -49 188 4 188 3 56 42 c67 51 147 168 177 259 12 34 28 65 36 68 30 11 229 18 254 8 28 -11 33 -10 -153 -31 -48 -6 -92 -13 -97 -16 -6 -4 -10 -37 -10 -74 0 -44 -8 -91 -23 -137 -22 -65 -26 -69 -58 -74 -29 -4 -34 -9 -37 -36 -4 -44 24 -74 76 -81 37 -5 46 -11 60 -39 10 -21 23 -34 35 -34 16 0 18 -5 13 -26 -17 -68 -17 -91 0 -175 22 -110 45 -134 127 -130 l49 2 -21 -30 c-27 -38 -69 -71 -90 -71 -9 0 -33 -5 -53 -11 -52 -14 -49 -38 9 -85 27 -20 52 -41 57 -45 5 -4 -21 -27 -58 -50 -36 -22 -66 -45 -66 -51 0 -5 5 -30 11 -54 9 -34 9 -59 0 -97 -21 -98 -20 -110 15 -120 24 -7 47 -4 95 11 35 11 86 23 112 27 27 4 69 15 94 26 45 19 45 19 74 -2 36 -25 36 -28 2 -40 -26 -8 -30 -18 -52 -111 -13 -56 -25 -127 -28 -157 -6 -70 16 -137 43 -134 62 7 146 3 189 -8 l50 -14 -118 -6 c-148 -7 -159 -15 -150 -101 l6 -58 72 0 c40 0 96 5 125 10 51 10 55 9 82 -17 17 -16 28 -37 28 -54 0 -35 35 -63 207 -163 111 -66 134 -76 152 -67 30 17 44 13 38 -9 -5 -18 11 -29 114 -80 l119 -60 0 -40 c0 -39 1 -40 35 -40 28 0 38 5 46 24 10 20 23 30 72 54 4 2 7 -19 7 -47 0 -83 11 -97 90 -110 67 -11 125 -7 136 10 3 5 1 24 -4 43 -9 32 -7 37 27 70 l37 36 12 -45 c11 -40 15 -45 49 -51 49 -9 78 8 126 76 37 53 40 55 78 52 30 -3 50 3 79 22 22 14 42 26 44 26 2 0 7 -14 11 -30 6 -28 9 -30 55 -30 40 0 56 5 83 29 23 21 49 32 84 37 49 6 54 5 97 -30 l45 -37 57 10 c32 6 59 11 60 11 12 0 34 94 34 145 l0 65 26 -10 c14 -6 45 -10 70 -10 42 0 44 -1 44 -30 0 -17 5 -30 13 -30 25 0 119 29 141 44 20 12 35 13 95 4 l72 -11 39 32 c28 22 49 31 77 31 44 0 56 7 67 35 7 18 11 15 29 -22 12 -24 26 -43 31 -43 6 0 32 8 58 18 38 14 62 17 115 11 60 -7 73 -5 110 16 23 13 59 29 80 35 49 16 83 47 83 77 0 23 0 23 32 7 37 -19 30 -25 98 84 38 59 41 62 80 62 40 0 157 50 172 74 4 6 10 36 13 66 10 83 13 89 36 61 17 -20 25 -23 62 -17 35 6 55 20 127 90 l85 83 68 -6 c60 -6 70 -4 97 17 29 23 30 23 83 6 70 -22 157 -7 177 31 11 21 21 25 61 25 38 0 149 30 167 46 2 1 -8 26 -22 54 -31 62 -32 72 -4 130 14 30 22 65 22 104 l1 59 70 24 c50 16 78 32 97 55 25 31 26 36 21 119 l-6 87 59 7 c56 7 62 10 104 60 42 50 45 57 45 111 l0 59 73 20 c71 19 72 20 72 52 l0 33 39 -26 c37 -24 41 -25 68 -11 43 23 123 113 123 138 0 13 -9 32 -20 44 -19 21 -20 26 -8 81 13 58 14 59 55 69 23 6 45 13 49 17 4 4 13 42 20 85 14 77 14 77 -11 103 l-25 26 29 42 c24 32 39 42 72 49 39 8 44 12 60 58 10 28 18 62 18 76 1 17 10 33 27 44 23 15 25 22 21 58 -3 23 -8 54 -12 69 -6 24 -4 28 14 28 20 0 21 5 21 90 0 83 -1 90 -20 90 -16 0 -20 7 -20 33 0 19 3 37 6 40 4 4 8 61 9 127 l3 120 -24 0 c-14 0 -39 -7 -56 -16 l-31 -16 6 70 c8 77 -6 127 -31 117 -7 -3 -32 -8 -55 -12 l-42 -6 32 36 c17 19 34 50 38 67 6 29 2 37 -40 80 -32 32 -62 52 -91 60 l-43 12 6 59 6 59 -69 1 c-38 1 -61 3 -51 6 22 6 23 76 2 113 -8 14 -14 37 -15 52 0 17 -10 33 -26 45 l-26 19 21 39 c27 50 26 59 -2 74 -20 10 -30 10 -62 -3 -34 -14 -85 -22 -85 -12 0 2 12 24 26 50 19 34 24 54 19 75 -6 27 -3 32 35 51 22 11 46 32 52 45 15 34 -6 80 -43 95 -26 11 -29 17 -29 61 0 57 -17 99 -39 99 -9 -1 -42 -7 -75 -15 l-58 -14 7 62 c3 34 7 66 8 72 1 5 -12 11 -30 13 -31 3 -32 5 -44 75 -8 50 -23 92 -50 139 -36 61 -43 68 -81 75 l-42 8 -18 85 c-9 47 -17 116 -18 153 0 95 -24 139 -87 163 -27 10 -66 34 -88 54 -24 22 -60 41 -90 49 -28 8 -64 27 -80 42 -26 25 -39 29 -86 29 -52 0 -57 2 -86 38 -23 28 -48 45 -95 62 -34 12 -102 42 -150 66 -67 34 -91 51 -104 76 -9 18 -33 51 -54 73 -35 38 -38 45 -43 118 -4 54 -1 91 8 118 19 52 4 79 -42 79 -26 0 -37 -8 -69 -51 l-38 -52 -13 45 c-7 25 -31 66 -54 91 -35 41 -46 47 -79 47 l-38 0 5 39 c5 35 2 41 -30 65 -20 16 -38 40 -42 56 -5 21 -14 30 -36 35 -23 5 -29 12 -29 33 0 15 -11 44 -25 65 -20 28 -32 37 -55 37 -27 0 -29 3 -36 48 -13 87 -16 90 -71 81 -78 -13 -81 -12 -103 31 -18 36 -22 39 -40 28 -11 -7 -20 -23 -20 -36 0 -28 -17 -62 -30 -62 -6 0 -10 11 -10 24 0 48 -23 49 -86 4 -42 -30 -72 -44 -108 -48 -36 -5 -45 -4 -34 4 9 6 36 26 62 43 51 36 58 62 32 124 -8 19 -17 56 -21 82 -6 42 -13 52 -46 72 -21 14 -42 32 -47 42 -10 16 -16 16 -125 -2 -109 -17 -118 -17 -159 -1 -24 9 -52 29 -63 43 -10 15 -47 110 -81 211 -34 100 -68 188 -77 195 -9 7 -21 24 -26 39 -11 30 -63 47 -85 29 -7 -6 -25 -41 -41 -78 -24 -59 -74 -123 -96 -123 -4 0 -11 26 -15 57 -5 44 -13 64 -36 87 -26 26 -34 28 -76 23 -26 -4 -58 -10 -71 -13 -22 -7 -23 -5 -15 27 16 61 5 245 -17 301 -11 28 -18 57 -15 64 3 7 0 69 -6 139 -11 119 -13 126 -35 131 -13 4 -29 1 -37 -5 -21 -18 -63 3 -123 60 -45 42 -58 50 -86 47 -31 -3 -32 -4 -35 -55 -2 -29 -7 -53 -12 -53 -5 0 -20 26 -35 57 -38 84 -60 104 -104 97 -32 -5 -38 -3 -55 26 -10 18 -37 53 -60 79 -22 27 -49 58 -59 70 -14 18 -26 21 -60 19 -41 -3 -42 -4 -61 -58 -12 -34 -21 -98 -25 -170 -7 -130 -21 -166 -74 -197 -19 -11 -47 -29 -63 -38 -22 -14 -17 -6 19 32 48 50 66 92 67 156 0 17 -23 63 -65 125 -98 147 -113 162 -165 168 -81 9 -88 12 -95 43 -5 22 -21 37 -67 65 -34 20 -64 36 -67 35 -3 -1 -20 -6 -38 -11z']
			),
			'location' => DB::raw('POINT(-75.250973, -0.071389)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}