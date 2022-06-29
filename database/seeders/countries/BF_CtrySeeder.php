<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BF_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Burkina Faso',
			'code'  => 'BF',
			'type'  => null,
			'paths' => serialize(
				['M6141 8616 l-214 -182 -141 -28 -141 -27 -247 -166 -248 -167 -127 27 c-153 32 -152 32 -213 6 l-48 -21 -7 -148 c-11 -226 -3 -209 -117 -242 l-96 -28 -188 84 c-104 46 -206 90 -228 97 l-39 14 -92 -97 -92 -98 -134 -50 c-74 -28 -137 -54 -141 -58 -4 -4 -14 -24 -23 -44 l-15 -38 30 -12 31 -13 -45 -51 c-45 -51 -45 -52 -52 -145 -4 -68 -2 -112 9 -157 12 -47 13 -64 4 -67 -101 -37 -98 -36 -135 -15 l-35 21 -28 -27 c-33 -31 -32 -32 -52 17 -15 36 -17 37 -114 59 -54 12 -107 24 -117 27 -18 5 -19 0 -12 -108 3 -63 9 -189 13 -281 l6 -167 -24 -5 c-13 -3 -75 -11 -136 -17 -121 -12 -115 -9 -127 -79 -3 -20 -15 -41 -27 -48 -40 -25 -106 9 -246 128 -119 101 -132 109 -188 120 -175 32 -166 29 -163 58 2 21 9 28 30 30 16 2 28 8 28 13 0 12 -92 119 -101 119 -4 0 -10 -20 -13 -45 -7 -43 -8 -45 -58 -60 -29 -8 -58 -15 -65 -15 -7 0 -26 -26 -41 -57 -24 -51 -35 -62 -107 -105 -77 -46 -80 -49 -85 -90 l-5 -43 -60 -13 c-32 -7 -61 -15 -63 -17 -2 -2 10 -35 27 -73 18 -40 31 -88 31 -110 0 -37 4 -44 50 -77 27 -20 50 -41 50 -47 0 -6 -10 -71 -21 -144 l-21 -133 -56 -7 c-43 -5 -62 -3 -87 10 -22 12 -49 16 -95 14 l-65 -3 -7 -52 -8 -51 72 -70 71 -69 -52 -94 -53 -94 30 -55 c27 -50 32 -80 13 -80 -3 0 -15 16 -25 35 -21 38 -23 39 -59 26 -19 -7 -27 -20 -32 -50 -7 -41 -17 -49 -45 -32 -23 15 -64 -53 -70 -119 l-5 -55 -40 -5 c-55 -8 -65 -16 -65 -56 0 -19 -5 -34 -10 -34 -6 0 -33 -20 -59 -45 -47 -44 -50 -45 -112 -45 -35 0 -147 -9 -248 -20 l-185 -19 -67 -67 -68 -67 -98 -16 c-85 -14 -98 -19 -101 -37 -2 -17 11 -27 78 -58 l81 -37 -6 -88 -7 -88 41 -24 41 -23 0 -79 c0 -76 -1 -79 -34 -110 -33 -32 -34 -34 -41 -143 -4 -61 -11 -117 -15 -125 -5 -7 -24 -19 -42 -25 -22 -7 -40 -24 -55 -50 -13 -23 -49 -59 -84 -85 -34 -24 -74 -63 -89 -87 l-28 -42 31 -120 30 -121 -22 -23 c-13 -14 -21 -35 -21 -58 0 -20 -12 -62 -26 -93 -24 -53 -26 -65 -20 -140 6 -78 5 -83 -20 -106 -32 -30 -30 -40 48 -201 42 -87 68 -130 82 -135 12 -4 61 -6 111 -6 70 1 108 -4 172 -24 75 -23 83 -28 83 -50 0 -16 -7 -27 -20 -30 -11 -3 -20 -7 -20 -10 0 -2 30 -40 67 -83 42 -49 76 -79 88 -80 19 0 65 -57 65 -80 0 -6 -9 -28 -20 -50 -20 -38 -20 -39 -1 -52 11 -8 21 -29 23 -48 2 -24 8 -34 17 -32 8 2 54 -12 104 -30 l89 -33 -6 -57 -6 -56 40 -7 c31 -5 44 -14 56 -37 13 -26 19 -29 42 -23 15 4 55 9 90 12 55 4 63 7 68 29 3 13 7 24 9 24 13 0 65 -24 65 -30 0 -4 -7 -24 -16 -45 -8 -20 -14 -38 -12 -39 2 -2 54 -24 116 -50 l113 -47 28 20 c45 32 52 45 64 128 l12 78 53 6 c29 4 55 9 56 10 2 2 15 23 30 46 26 42 26 43 74 36 26 -3 49 -7 50 -9 2 -1 47 18 100 43 l97 45 80 -10 79 -10 31 32 c24 26 45 36 102 49 70 16 73 16 107 -4 31 -18 45 -20 123 -14 81 7 97 5 193 -24 l104 -31 27 26 c37 35 59 28 89 -29 23 -43 28 -47 61 -47 33 0 37 -3 43 -31 3 -17 6 -46 6 -65 0 -29 3 -33 32 -36 29 -3 37 -13 109 -142 72 -130 188 -284 215 -285 6 -1 32 15 57 35 39 31 47 42 47 70 0 28 -7 38 -39 60 l-39 26 5 54 c5 50 3 57 -22 84 -27 28 -27 30 -15 82 9 37 22 61 43 79 30 25 30 26 17 72 -7 29 -10 66 -6 94 4 34 2 51 -9 63 -8 9 -22 53 -30 97 -15 78 -15 84 4 134 22 56 20 65 -25 125 -20 27 -22 39 -17 83 5 45 10 54 40 72 41 25 33 34 -37 44 -25 3 -52 10 -59 14 -7 5 -21 65 -34 145 l-21 137 59 242 c32 133 61 245 64 248 3 4 88 3 188 -2 135 -6 188 -12 205 -23 20 -13 94 -14 607 -7 596 8 590 8 603 43 2 4 33 10 70 14 63 6 71 5 110 -21 l42 -28 307 8 c292 6 308 6 318 -12 6 -10 17 -27 26 -37 14 -19 16 -19 53 11 37 30 41 31 103 24 46 -5 87 -19 146 -49 46 -23 84 -42 86 -42 3 0 16 17 31 38 18 26 53 54 106 83 79 44 80 44 80 85 0 28 6 47 20 59 20 18 21 17 66 -15 l46 -33 61 61 62 60 465 -101 c256 -55 466 -101 467 -102 2 -1 7 -26 13 -55 6 -29 12 -56 15 -58 2 -3 50 21 106 53 l102 58 167 -7 167 -7 67 61 66 60 53 -21 c28 -12 58 -24 66 -27 10 -4 12 2 7 24 -20 104 -21 100 20 128 21 14 47 26 56 26 14 0 18 8 18 35 0 29 -5 37 -27 46 l-27 10 25 25 c23 23 28 24 78 14 78 -15 79 -14 93 37 l14 48 23 -38 c12 -20 26 -37 31 -37 14 0 22 39 15 78 -5 34 -2 42 52 103 57 65 59 66 127 78 l68 12 75 -67 74 -67 57 16 c31 9 109 21 172 26 95 8 118 7 131 -5 10 -9 38 -14 78 -14 l63 0 192 159 c207 171 206 170 206 263 0 23 6 29 40 39 38 11 40 14 40 50 0 21 7 57 16 80 l17 41 -192 284 c-187 278 -206 315 -183 350 4 7 52 18 107 25 55 7 102 14 104 15 2 2 -9 23 -24 46 -25 37 -28 49 -26 119 l2 78 -38 6 c-21 4 -44 7 -52 8 -8 1 -24 30 -35 64 -12 34 -24 65 -28 68 -3 4 -39 15 -79 25 -85 22 -62 32 -197 -92 l-84 -77 -147 6 c-80 3 -153 9 -162 12 -10 3 -143 117 -298 254 l-280 247 -48 -11 c-46 -12 -47 -12 -76 22 -58 68 -56 59 -41 239 7 91 15 173 16 183 3 14 17 9 91 -34 l88 -51 46 30 c44 29 47 29 80 15 39 -16 48 -11 76 35 l17 30 -172 58 c-95 31 -174 58 -176 59 -2 2 -11 35 -20 74 l-17 72 -143 64 c-138 62 -147 65 -223 65 -79 0 -79 0 -79 26 0 27 -93 167 -198 296 -47 59 -59 84 -92 187 l-37 119 25 46 c23 42 24 49 13 86 -11 36 -20 44 -102 89 l-91 49 -54 101 -54 100 49 137 49 136 -19 79 -19 79 22 37 c12 20 18 38 13 40 -6 3 -140 51 -300 107 l-290 103 -68 -34 c-68 -34 -69 -34 -115 -19 -26 8 -117 22 -202 31 -85 8 -171 17 -190 19 -33 5 -46 -5 -249 -178z']
			),
			'location' => DB::raw('POINT(12.238333, -1.561593)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}