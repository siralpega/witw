<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WS_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Samoa',
			'code'  => 'WS',
			'type'  => null,
			'paths' => serialize(
				['M3273 7466 c-37 -32 -42 -33 -143 -39 -107 -6 -241 -39 -287 -72 -12 -9 -27 -34 -33 -56 -8 -30 -15 -39 -26 -35 -9 3 -26 6 -38 6 -20 0 -22 4 -18 27 4 20 2 25 -10 21 -8 -4 -39 -9 -69 -13 -43 -5 -65 -2 -107 14 -88 35 -138 29 -285 -35 l-129 -56 -48 21 c-76 33 -112 28 -230 -30 -58 -28 -135 -69 -172 -90 -64 -38 -69 -39 -160 -39 -88 0 -99 -3 -198 -44 -87 -37 -107 -49 -119 -74 l-14 -30 -44 21 c-28 14 -42 26 -38 35 3 8 8 24 11 37 l6 23 -110 -24 c-60 -13 -144 -36 -188 -51 -74 -27 -84 -28 -144 -18 -36 6 -93 21 -128 33 -34 12 -76 22 -92 22 -17 0 -30 3 -30 8 0 4 -13 22 -29 41 -24 29 -30 32 -48 23 -16 -9 -34 -7 -80 10 -58 21 -61 21 -104 5 -24 -9 -73 -43 -108 -75 l-64 -57 31 -62 c18 -34 35 -81 38 -104 5 -32 19 -56 53 -93 83 -89 201 -176 312 -229 100 -49 108 -55 145 -112 75 -116 192 -222 272 -246 31 -9 48 -22 64 -48 12 -20 74 -90 138 -156 75 -76 132 -146 158 -190 60 -104 150 -186 240 -220 39 -15 72 -32 72 -38 0 -7 5 -52 11 -102 12 -99 26 -134 71 -181 16 -18 40 -60 53 -95 l23 -64 65 -19 c56 -16 68 -24 78 -49 7 -17 39 -66 72 -110 l59 -79 66 6 c163 14 198 22 288 64 127 59 143 61 199 24 26 -17 60 -34 77 -37 26 -6 36 -2 72 34 40 39 45 41 104 41 44 0 75 6 104 21 l42 21 19 -26 c10 -14 23 -26 27 -26 5 0 36 16 69 35 l61 36 200 -2 199 -1 25 28 c14 16 34 50 43 77 17 46 19 47 59 47 23 0 68 -3 102 -6 l61 -7 6 -63 c7 -62 8 -63 84 -137 l76 -74 103 -21 c135 -29 151 -28 208 11 94 63 112 126 79 277 -8 36 -14 84 -15 107 0 42 1 44 75 95 82 57 87 69 64 148 -16 53 8 98 98 188 91 90 95 117 34 204 -75 108 -109 179 -116 248 -7 64 -37 136 -92 223 -17 27 -24 50 -22 77 3 31 -3 45 -30 77 -18 21 -62 83 -98 138 -36 55 -92 125 -123 155 -43 41 -64 70 -81 115 -28 76 -34 83 -74 91 -24 4 -36 13 -43 32 -6 15 -48 74 -94 132 -53 65 -95 130 -112 170 -22 53 -35 71 -69 92 -87 54 -125 68 -184 68 -40 0 -68 6 -91 20 -18 11 -35 20 -37 20 -3 0 -22 -15 -42 -34z', 'M7127 4834 c-3 -3 -61 -10 -129 -15 -364 -27 -345 -24 -491 -73 -75 -25 -158 -49 -185 -53 -31 -4 -54 -13 -67 -29 -35 -40 -140 -64 -285 -64 -118 0 -135 -3 -228 -33 l-100 -34 -119 -119 c-134 -133 -143 -152 -121 -262 10 -50 16 -58 86 -117 74 -62 79 -64 199 -94 67 -17 136 -31 153 -31 30 0 30 0 14 -25 -16 -25 -13 -75 5 -75 17 0 108 -80 135 -119 25 -36 31 -39 50 -29 29 15 36 28 36 66 0 27 4 32 24 32 35 0 79 -58 102 -132 11 -39 35 -82 67 -122 27 -33 56 -74 64 -90 10 -20 38 -39 96 -67 45 -21 100 -52 123 -69 l41 -31 64 15 c79 18 235 89 270 122 22 21 27 23 32 10 5 -13 24 -16 91 -16 77 0 86 -2 101 -22 15 -22 15 -23 -19 -28 l-34 -5 48 -52 c29 -32 57 -53 70 -53 27 0 298 -68 322 -81 29 -15 94 -110 110 -159 l15 -45 97 -3 98 -3 76 45 c100 58 149 71 236 61 66 -7 70 -9 114 -56 l45 -49 73 0 c59 0 85 6 139 30 43 19 83 30 113 30 26 0 63 5 83 10 30 9 45 6 90 -13 45 -20 80 -26 204 -32 83 -5 195 -8 250 -7 55 2 219 3 365 5 l265 2 90 -37 c49 -21 92 -38 96 -38 12 0 21 32 29 100 4 39 22 100 44 150 22 52 36 99 36 126 0 40 -2 43 -65 84 -36 24 -85 65 -108 92 -34 40 -52 51 -97 63 -30 8 -69 15 -86 15 -24 0 -38 8 -58 34 -14 19 -30 46 -36 60 -7 18 -21 28 -52 36 -52 12 -101 28 -145 47 -29 12 -33 18 -33 53 0 36 -4 42 -52 74 l-51 35 -30 -25 c-50 -42 -129 -78 -196 -90 l-63 -11 6 41 c4 22 12 44 19 48 6 4 52 21 102 39 49 17 93 35 98 38 13 13 -79 71 -112 71 -27 0 -31 4 -31 26 0 21 -8 29 -50 46 -34 14 -50 26 -50 39 0 23 -14 32 -72 44 l-48 10 30 45 c16 25 30 48 30 51 0 8 -120 29 -169 29 -26 0 -63 -11 -101 -30 -69 -35 -86 -37 -99 -11 -8 14 -26 19 -87 24 -74 5 -79 7 -123 50 -66 64 -111 73 -255 51 l-112 -17 -45 35 c-25 19 -62 53 -82 75 -27 29 -51 44 -91 56 -30 8 -76 31 -101 51 -26 19 -53 32 -61 29 -35 -13 -87 9 -137 60 l-51 52 -9 -46 -9 -47 -85 51 c-70 43 -89 60 -108 97 -21 41 -30 48 -102 78 -80 33 -95 37 -106 26z', 'M4790 4625 c0 -21 5 -25 30 -25 25 0 30 4 30 25 0 21 -5 25 -30 25 -25 0 -30 -4 -30 -25z', 'M5053 4473 c-38 -19 -39 -24 -13 -80 18 -41 21 -43 64 -43 43 0 45 1 50 33 3 17 2 48 -2 67 -7 30 -12 35 -37 37 -17 1 -45 -5 -62 -14z', 'M10142 2798 l3 -43 48 -3 47 -3 0 35 c0 36 -2 38 -68 51 l-33 7 3 -44z']
			),
			'location' => DB::raw('POINT(-13.759029, -172.104629)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}