<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EG_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Egypt',
			'code'  => 'EG',
			'type'  => null,
			'paths' => serialize(
				['M1211 10204 c-39 -30 -50 -34 -105 -34 -43 0 -97 -12 -183 -39 l-122 -39 -80 24 c-74 23 -81 28 -106 70 l-26 44 -44 -31 c-24 -17 -46 -41 -49 -54 -9 -36 -94 -114 -132 -121 -19 -3 -37 -10 -40 -16 -3 -5 -6 -78 -6 -163 l-1 -154 52 -120 c28 -67 51 -134 51 -153 -1 -18 -11 -83 -24 -143 -24 -120 -53 -173 -148 -280 -35 -39 -52 -71 -77 -147 l-32 -97 56 -142 c31 -78 54 -147 51 -153 -2 -6 -13 -35 -25 -64 l-21 -52 50 -55 c54 -60 53 -54 25 -148 -12 -40 -10 -49 37 -187 l50 -145 -161 -3690 c-89 -2030 -161 -3699 -161 -3710 0 -20 13 -21 813 -53 1447 -58 2761 -90 4007 -98 l1115 -6 40 71 c78 141 94 161 126 161 45 0 63 -36 55 -113 -4 -34 -10 -72 -13 -84 l-5 -23 618 0 c379 0 685 5 790 12 l171 12 35 -30 c20 -16 87 -75 150 -131 l115 -102 194 -12 195 -12 74 39 74 39 62 205 62 205 263 67 c144 37 266 71 270 75 6 7 189 554 189 566 0 3 60 -13 133 -34 l132 -38 183 182 c171 171 182 184 182 219 0 25 -11 55 -33 90 -19 29 -37 72 -40 96 -3 23 -19 64 -37 91 l-31 49 16 115 c14 105 14 121 0 175 -28 111 -14 212 31 212 8 0 36 -11 62 -25 40 -21 56 -24 100 -18 l53 6 -32 33 c-24 25 -42 34 -66 34 -36 0 -63 21 -88 69 -8 17 -20 31 -25 31 -18 0 -83 65 -136 137 -29 40 -66 79 -81 87 -16 8 -65 52 -111 99 -79 79 -83 85 -71 109 10 23 8 31 -10 57 -12 16 -33 56 -48 88 -14 32 -41 76 -59 99 -22 27 -35 56 -39 90 -4 27 -16 61 -26 76 -11 14 -22 41 -26 60 -10 52 -109 244 -162 311 -26 34 -55 84 -65 110 -10 26 -33 70 -51 97 -18 26 -36 65 -39 87 -11 54 -46 111 -115 182 -51 51 -61 67 -61 96 0 28 -8 40 -44 69 -31 26 -49 52 -65 94 -12 31 -37 82 -56 113 -19 31 -46 89 -61 130 -37 104 -107 229 -175 314 -41 51 -61 86 -69 120 -6 26 -9 50 -6 52 2 2 19 -3 36 -12 l32 -17 -26 35 c-31 41 -34 67 -6 67 31 0 26 46 -10 87 -16 18 -30 40 -30 48 0 8 -15 32 -34 52 -20 23 -36 54 -40 78 -9 49 -69 152 -107 183 -15 12 -33 39 -40 60 -23 72 -58 130 -103 169 -45 40 -81 107 -74 140 2 13 11 17 33 15 l30 -3 -22 18 c-13 10 -26 33 -29 51 -5 22 -16 38 -35 48 -34 17 -36 25 -10 48 14 13 24 14 45 6 15 -5 31 -10 36 -10 9 0 -11 71 -38 133 -17 38 -25 44 -76 60 -64 21 -153 97 -227 195 -24 31 -63 78 -86 104 -24 26 -43 52 -43 57 0 14 -130 182 -161 208 -28 24 -43 68 -54 163 -7 52 -10 57 -61 95 -32 23 -61 54 -70 74 -8 19 -23 40 -33 48 -30 21 -45 78 -31 114 20 48 7 208 -25 300 -21 61 -34 83 -66 108 -98 79 -147 288 -89 383 12 20 16 41 13 67 -5 33 -1 41 27 64 37 31 70 36 70 9 0 -10 14 -31 30 -47 17 -16 30 -35 30 -43 0 -9 12 -35 26 -60 22 -37 26 -56 26 -114 -1 -54 4 -77 18 -97 10 -14 26 -62 35 -106 15 -73 20 -84 63 -128 35 -36 50 -60 57 -94 9 -42 14 -48 43 -57 23 -6 47 -27 77 -66 24 -32 67 -76 95 -100 49 -41 50 -43 50 -96 0 -30 9 -76 19 -104 15 -40 18 -66 14 -128 -7 -95 11 -138 86 -203 29 -27 61 -68 80 -105 29 -60 32 -63 97 -85 l67 -24 33 -70 c18 -38 52 -92 74 -120 23 -27 53 -71 67 -98 18 -36 33 -52 61 -63 158 -64 159 -64 171 -104 9 -31 19 -41 59 -58 26 -11 70 -22 97 -26 57 -7 40 -21 171 149 l69 90 0 85 c0 64 -4 92 -17 112 -27 41 -13 114 40 217 24 47 50 114 57 147 8 34 23 80 35 103 15 30 20 58 19 99 -1 31 3 70 10 85 6 16 11 47 11 70 0 23 7 55 16 72 14 27 13 71 -2 126 -3 9 7 30 21 47 15 18 29 52 35 84 5 29 38 111 75 184 l65 131 -19 54 c-10 30 -23 91 -30 136 -7 48 -28 121 -50 176 -21 51 -69 189 -107 306 -72 224 -66 213 -131 236 -8 3 -8 14 -1 45 10 37 8 43 -12 65 -19 20 -22 31 -16 62 5 34 -9 74 -124 343 -72 168 -143 320 -159 339 l-28 34 -44 -17 c-23 -10 -58 -31 -76 -47 -47 -41 -134 -83 -228 -109 -66 -19 -95 -22 -170 -17 -49 3 -104 11 -122 17 -38 14 -86 1 -145 -37 -20 -14 -55 -27 -77 -30 -38 -5 -41 -4 -41 18 0 35 -27 69 -56 69 -13 0 -41 -15 -63 -35 -33 -30 -46 -35 -87 -35 -40 0 -53 -5 -80 -31 l-32 -31 -70 12 c-69 13 -70 13 -118 75 -42 54 -153 145 -177 145 -4 0 -23 -10 -41 -22 -26 -17 -38 -35 -51 -80 -18 -56 -18 -57 -67 -68 -41 -10 -52 -10 -73 4 -20 14 -25 25 -25 61 l0 45 -108 0 -108 0 -47 48 c-40 41 -47 53 -47 88 0 39 2 41 65 75 69 36 85 67 46 89 -38 20 -75 11 -145 -36 -82 -55 -66 -57 -272 41 -120 57 -138 63 -237 74 -126 14 -151 10 -277 -39 -127 -50 -254 -69 -310 -46 -22 9 -43 16 -46 16 -3 0 -28 -47 -55 -104 -41 -85 -55 -106 -80 -117 -29 -11 -30 -13 -14 -25 17 -12 16 -14 -9 -24 -41 -15 -46 -13 -97 30 -26 22 -50 40 -53 40 -3 0 -67 -48 -143 -108 -208 -162 -295 -221 -442 -301 -122 -66 -140 -73 -205 -78 -90 -6 -131 10 -269 110 -56 41 -132 90 -169 110 -66 37 -68 37 -230 47 -149 9 -283 22 -365 35 -39 7 -63 42 -72 104 -6 45 -7 46 -41 43 -19 -2 -65 -19 -102 -38 -51 -26 -80 -34 -120 -34 -52 0 -54 1 -125 72 -54 54 -73 79 -73 99 0 29 -15 39 -59 39 -15 0 -67 15 -115 34 -91 36 -206 66 -252 66 -15 0 -41 9 -58 19 -24 15 -58 21 -151 26 -174 9 -316 50 -410 118 -46 33 -89 55 -125 64 -75 17 -79 17 -129 -23z']
			),
			'location' => DB::raw('POINT(26.820553, 30.802498)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}