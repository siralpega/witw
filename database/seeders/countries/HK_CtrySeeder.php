<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HK_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Hong Kong',
			'code'  => 'HK',
			'type'  => null,
			'paths' => serialize(
				['M5764 9016 c-34 -47 -57 -69 -76 -73 -16 -3 -28 -11 -28 -18 0 -8 -11 -27 -25 -43 -30 -36 -32 -62 -5 -62 26 0 26 -5 -11 -62 -34 -53 -58 -64 -120 -54 -21 3 -57 9 -79 12 -27 5 -50 1 -74 -10 -20 -10 -45 -14 -59 -10 -29 7 -86 -20 -173 -82 -34 -23 -73 -46 -87 -50 -17 -4 -27 -13 -27 -24 0 -24 -56 -70 -85 -70 -17 0 -32 13 -52 42 -34 51 -55 58 -71 23 -14 -30 -42 -33 -42 -5 0 18 -4 20 -41 14 -34 -6 -51 -2 -93 21 -63 34 -89 30 -145 -20 -61 -55 -74 -92 -60 -164 12 -58 12 -61 -15 -102 -38 -57 -86 -99 -112 -99 -12 0 -38 11 -58 25 -49 33 -99 32 -166 -2 -64 -34 -89 -66 -101 -128 -12 -63 -41 -100 -94 -120 -44 -17 -46 -17 -132 10 -108 33 -145 30 -219 -21 -66 -46 -68 -48 -53 -72 10 -16 7 -32 -15 -88 -18 -43 -27 -86 -27 -119 0 -68 -24 -106 -87 -137 l-51 -25 67 -71 c57 -61 73 -72 111 -78 116 -18 189 -114 252 -334 17 -62 28 -81 63 -112 135 -122 148 -135 145 -151 -3 -13 -29 5 -106 73 -114 100 -137 137 -174 280 -30 114 -62 148 -177 184 -46 14 -85 26 -88 26 -12 0 -1 -57 21 -112 25 -62 30 -107 15 -143 -7 -18 -8 -17 -15 10 -14 62 -17 71 -41 132 -14 36 -24 82 -24 113 0 55 -27 106 -88 163 -36 34 -45 31 -117 -42 -48 -50 -71 -60 -90 -42 -6 6 -31 6 -63 0 -69 -13 -86 -6 -43 17 19 11 42 26 52 35 19 19 39 99 39 158 l0 38 -96 31 c-133 42 -154 32 -189 -90 -15 -52 -25 -66 -115 -148 -109 -101 -130 -137 -150 -256 -20 -125 -48 -150 -208 -190 -51 -13 -109 -33 -127 -44 -61 -38 -198 -248 -207 -318 -4 -24 -18 -58 -32 -76 -60 -79 -220 -147 -399 -171 -74 -10 -120 -21 -137 -33 -25 -19 -250 -291 -250 -303 0 -4 30 -12 67 -19 78 -13 154 -44 179 -71 17 -19 17 -22 -3 -62 -25 -52 -19 -78 35 -146 82 -103 83 -200 4 -269 l-37 -33 60 -57 c33 -31 114 -99 180 -150 l120 -93 6 33 c11 68 33 74 96 29 23 -16 44 -27 47 -24 3 4 20 -6 36 -22 l30 -29 0 52 c0 44 4 56 25 75 14 12 40 36 58 53 89 87 140 100 278 68 39 -9 72 -14 74 -12 2 2 -9 30 -25 63 -16 32 -27 62 -24 66 2 4 29 17 60 29 l56 20 52 -31 c28 -18 81 -55 117 -83 37 -28 81 -59 98 -68 24 -14 31 -24 31 -48 0 -25 12 -44 54 -88 l54 -56 58 23 c104 40 133 47 152 33 9 -7 28 -17 42 -23 82 -35 116 -57 148 -97 81 -99 175 -97 342 10 72 46 93 52 134 37 32 -12 38 -10 108 32 68 41 78 44 143 44 39 0 95 -4 126 -9 61 -9 56 -11 173 55 l60 32 100 -16 c89 -15 110 -15 178 -3 54 10 92 24 123 45 25 17 49 31 53 31 4 0 35 -27 70 -59 59 -55 62 -61 62 -105 0 -34 11 -67 41 -128 39 -77 40 -82 23 -95 -17 -12 -17 -14 2 -40 12 -15 31 -30 44 -33 17 -4 31 -24 54 -76 48 -110 48 -110 90 -97 30 9 39 8 52 -4 26 -27 13 -57 -31 -71 -21 -7 -41 -14 -43 -16 -1 -2 2 -25 9 -51 l12 -48 79 7 c77 6 78 6 90 -19 10 -22 9 -28 -3 -36 -12 -7 -134 -58 -218 -90 l-24 -10 28 -29 c38 -39 74 -48 168 -42 74 4 80 3 128 -27 28 -17 53 -31 57 -31 8 1 64 75 81 107 16 31 -5 40 -33 14 -27 -26 -38 -26 -59 -3 -21 23 -22 42 -2 42 21 0 19 9 -7 30 -18 15 -20 21 -11 31 10 9 15 10 27 0 12 -10 16 -8 21 8 9 29 20 27 92 -20 85 -56 123 -100 123 -144 0 -30 3 -35 23 -35 12 0 33 -7 45 -16 20 -14 22 -23 22 -110 l0 -95 -31 -17 c-18 -9 -43 -26 -57 -38 -23 -19 -24 -23 -13 -57 7 -20 18 -37 24 -37 6 0 41 10 77 21 88 29 115 22 140 -34 26 -57 25 -67 -7 -67 -38 -1 -11 -16 44 -25 50 -8 62 -2 133 67 50 49 63 56 143 77 130 34 137 45 111 204 -11 67 40 187 79 187 6 0 86 -74 177 -165 154 -153 190 -182 190 -154 0 5 -68 80 -152 165 -111 114 -149 157 -140 166 8 8 28 -3 76 -41 36 -29 76 -66 90 -82 24 -28 27 -29 47 -15 12 8 27 12 35 9 7 -2 63 -62 124 -133 125 -145 172 -190 200 -190 10 0 31 -5 45 -12 l25 -11 -22 -24 c-20 -21 -20 -25 -7 -50 8 -14 27 -31 42 -37 23 -9 27 -15 22 -37 -5 -24 -1 -30 41 -53 25 -14 52 -26 58 -25 9 0 209 246 235 288 8 12 84 30 129 31 30 0 32 -2 21 -21 -9 -18 -6 -28 20 -63 18 -22 36 -53 42 -68 7 -17 16 -25 25 -21 16 6 54 -23 54 -40 0 -6 -18 -41 -39 -77 -22 -37 -47 -96 -55 -134 -22 -94 -21 -106 8 -106 30 0 40 -14 27 -38 -11 -21 -4 -35 58 -117 25 -33 46 -62 48 -64 4 -6 118 87 146 119 24 28 32 32 60 26 45 -9 130 -69 204 -145 l62 -63 -6 51 c-5 42 -3 52 11 57 10 4 25 -1 37 -12 15 -14 24 -16 37 -8 29 19 24 41 -18 81 -23 21 -48 50 -56 65 -21 41 -18 94 8 118 12 11 17 20 11 20 -5 0 -18 -9 -28 -20 -21 -24 -38 -25 -68 -6 -12 8 -44 17 -70 21 -78 11 -113 65 -65 99 17 12 20 18 10 28 -19 19 -14 53 11 76 31 30 48 28 121 -13 35 -19 68 -35 74 -35 7 0 23 19 38 41 18 30 40 47 75 62 52 22 69 45 44 60 -14 7 -12 12 10 38 42 50 34 77 -46 157 -39 39 -79 74 -90 77 -12 4 -40 -5 -75 -25 -44 -26 -63 -31 -91 -27 -47 8 -49 11 -28 50 17 33 17 34 -11 87 -15 30 -30 71 -33 90 -6 35 -7 35 -56 33 -28 -1 -66 -4 -86 -8 -26 -5 -50 -1 -88 15 -70 30 -91 59 -91 124 0 78 -32 182 -68 219 -31 32 -62 95 -80 161 -8 28 -7 37 7 50 10 9 25 16 34 16 10 0 17 8 17 20 0 17 -3 19 -19 10 -38 -20 -60 -11 -93 34 -39 56 -78 74 -122 57 -57 -23 -61 -21 -61 34 l0 50 38 -2 c33 -2 37 0 37 22 0 36 58 144 103 192 47 50 59 47 106 -23 42 -64 41 -100 -4 -144 -36 -35 -46 -70 -21 -70 8 0 32 10 52 22 l37 22 -6 -38 c-6 -40 8 -81 38 -106 13 -11 20 -9 44 16 25 25 27 31 17 53 -8 19 -8 25 2 29 23 7 12 29 -43 91 -51 57 -55 65 -55 112 0 27 7 66 15 86 21 51 19 73 -12 106 l-28 28 33 30 c18 16 45 32 60 35 26 5 27 7 27 79 0 70 2 76 34 109 18 19 53 45 77 57 38 21 45 22 68 9 14 -7 42 -37 63 -67 34 -50 53 -65 53 -43 0 6 10 10 22 10 13 0 40 -20 69 -51 46 -50 47 -51 59 -29 11 20 13 20 29 6 10 -9 35 -16 59 -16 l41 0 -6 34 c-11 69 54 118 172 132 30 4 55 3 55 -2 0 -4 -11 -20 -25 -34 l-26 -27 22 -28 c18 -22 20 -31 11 -46 -14 -22 -16 -79 -3 -79 5 0 14 7 21 15 7 8 21 15 31 15 14 0 19 -7 19 -29 0 -25 10 -37 66 -77 l67 -48 30 18 c30 17 32 17 45 -1 9 -12 12 -40 10 -85 -2 -61 0 -70 20 -83 26 -19 29 -35 6 -35 -26 0 -72 -32 -84 -58 -15 -35 7 -64 98 -125 40 -26 76 -57 82 -68 10 -17 7 -20 -20 -25 -16 -4 -30 -10 -30 -14 0 -10 60 -85 68 -85 24 1 94 50 107 75 29 56 75 29 89 -52 6 -34 5 -37 -19 -40 l-26 -3 56 -114 c37 -75 59 -111 66 -104 5 5 18 32 28 59 17 44 18 52 4 86 -11 27 -12 45 -6 65 6 17 6 37 0 54 -22 56 20 80 62 35 21 -23 61 -41 61 -28 0 3 -10 16 -21 28 -25 27 -19 54 11 54 12 0 38 -10 60 -22 37 -22 39 -22 58 -5 10 9 24 35 31 56 9 32 17 41 44 47 l32 8 -45 7 c-25 4 -63 8 -86 8 -27 1 -47 8 -59 21 -14 15 -26 19 -54 15 -46 -7 -124 40 -172 104 -41 53 -59 62 -59 29 0 -53 -19 -46 -110 41 -84 81 -90 89 -90 127 0 31 -6 46 -26 65 -39 36 -46 54 -33 83 11 23 8 32 -25 82 -40 59 -41 73 -6 54 12 -6 32 -9 45 -6 19 5 31 -3 66 -45 42 -50 42 -51 55 -28 l12 24 19 -35 c10 -18 28 -44 40 -56 19 -20 25 -22 58 -13 20 6 57 19 82 30 24 10 62 19 83 19 l38 0 -16 -49 c-14 -46 -14 -51 2 -76 29 -44 42 -41 112 24 63 57 94 74 94 51 0 -5 -36 -47 -80 -92 l-79 -82 27 -43 c22 -34 36 -45 81 -60 38 -13 60 -26 70 -45 17 -29 83 -78 105 -78 14 0 26 21 26 44 0 7 -20 39 -45 71 -60 77 -58 99 9 103 78 5 89 -1 119 -66 15 -33 39 -70 53 -83 l26 -24 24 30 c13 17 24 35 24 42 0 6 -20 41 -45 77 -25 37 -45 71 -45 76 0 6 15 10 34 10 l33 0 -4 53 c-11 148 -26 179 -96 198 -46 12 -87 45 -119 97 -16 27 -26 32 -56 32 -67 0 -137 60 -96 83 43 24 62 55 69 111 5 40 14 61 29 74 12 9 33 38 48 63 32 55 107 126 142 135 43 10 72 -3 146 -67 39 -33 83 -67 98 -75 31 -16 98 -19 107 -4 11 18 -46 112 -96 158 -43 39 -49 50 -49 84 0 22 -5 48 -10 58 -7 13 -7 21 1 25 9 6 49 88 49 101 0 2 -7 4 -15 4 -23 0 -76 28 -106 57 -25 23 -29 24 -55 10 -16 -8 -52 -22 -79 -30 -46 -13 -54 -13 -80 1 -20 10 -53 15 -97 14 -59 -2 -70 1 -99 25 -36 31 -68 94 -69 137 0 16 11 41 25 58 32 38 36 127 6 157 -20 20 -108 57 -117 49 -2 -3 0 -27 6 -53 13 -59 10 -63 -86 -111 -57 -28 -72 -40 -64 -49 7 -9 7 -20 -1 -38 -10 -23 -8 -30 15 -57 30 -36 33 -71 10 -126 -13 -32 -15 -58 -9 -145 6 -104 6 -107 -16 -123 -29 -20 -69 -21 -95 -2 -19 14 -19 15 5 40 20 22 23 32 18 71 -4 25 -17 71 -29 103 -20 48 -27 57 -48 57 -20 0 -29 -9 -43 -40 -39 -88 -53 -110 -68 -113 -21 -4 -44 46 -54 113 -4 27 -13 62 -21 76 -16 32 -11 39 33 39 68 0 100 79 47 117 -17 13 -29 33 -33 57 -8 47 1 232 12 242 4 5 28 -2 52 -15 48 -25 78 -22 96 10 9 17 6 28 -15 58 -18 26 -31 65 -42 131 -24 138 -23 137 -62 99 -17 -17 -31 -34 -29 -38 2 -3 9 -19 17 -34 13 -25 11 -32 -12 -80 -15 -29 -30 -64 -33 -80 -9 -34 -11 -35 -80 -48 -47 -9 -61 -8 -81 6 -13 8 -24 20 -24 25 0 5 21 43 46 84 25 41 43 79 40 85 -4 6 -22 3 -49 -9 -54 -25 -82 -25 -108 1 -17 17 -20 31 -17 75 1 30 1 54 -2 54 -3 0 -14 -7 -24 -15 -11 -8 -29 -15 -41 -15 -14 0 -26 -10 -33 -25 -6 -14 -38 -41 -69 -61 -116 -73 -162 -135 -177 -238 l-11 -70 -57 -15 c-56 -14 -58 -14 -81 7 l-24 22 -11 -25 c-7 -14 -12 -34 -12 -43 0 -9 -9 -35 -18 -57 l-18 -39 -24 32 c-13 18 -28 32 -34 32 -5 0 -31 -14 -57 -31 -47 -30 -80 -71 -94 -117 -6 -21 -4 -23 12 -18 23 7 88 -33 88 -54 0 -8 -10 -16 -22 -18 -18 -3 -21 -7 -14 -20 5 -9 12 -39 16 -67 8 -53 31 -99 65 -130 29 -26 25 -51 -10 -64 -17 -6 -39 -25 -51 -46 -12 -20 -38 -44 -59 -55 -21 -11 -56 -40 -78 -65 -22 -25 -43 -45 -47 -45 -4 0 -5 20 -3 45 8 63 -7 129 -47 214 -19 40 -35 79 -35 87 0 17 -7 17 -62 3 -35 -10 -57 -9 -113 4 l-70 16 -64 -29 c-71 -34 -84 -36 -100 -17 -8 10 -7 19 4 33 20 27 19 28 -21 43 -23 8 -53 10 -81 6 l-45 -6 7 -39 c12 -71 -16 -96 -134 -116 -110 -20 -112 -23 -135 -200 -20 -147 -40 -192 -146 -314 -108 -125 -442 -480 -451 -480 -27 0 8 46 227 303 134 157 244 288 244 292 0 3 -14 18 -32 33 -29 27 -30 31 -20 62 7 18 12 85 12 149 l0 116 -133 109 c-172 142 -209 161 -350 191 -64 13 -133 33 -155 44 -79 40 -119 121 -69 140 12 5 33 20 46 34 32 36 64 40 149 22 41 -8 84 -15 97 -15 38 0 66 31 76 84 15 83 37 92 131 56 69 -26 74 -25 49 6 -12 15 -21 31 -21 37 0 9 108 175 144 220 14 18 16 18 44 -3 27 -20 38 -22 94 -16 34 3 93 9 131 12 l67 7 0 -37 c0 -58 25 -45 44 24 10 33 31 76 50 98 18 22 47 62 65 90 l33 51 -12 78 c-7 43 -25 120 -42 171 -42 133 -29 135 35 7 47 -92 80 -124 144 -134 31 -5 81 -26 130 -54 44 -26 85 -47 90 -47 6 0 30 23 54 51 l43 51 45 -7 c64 -11 115 -8 198 11 39 9 79 14 87 11 22 -9 20 -40 -4 -55 -11 -7 -20 -23 -20 -37 0 -31 14 -32 34 -3 13 18 20 20 42 12 56 -19 53 -35 -27 -130 -87 -104 -136 -134 -216 -134 -34 0 -67 -7 -90 -20 -21 -11 -45 -20 -55 -20 -34 0 -108 -82 -108 -120 0 -5 14 -10 30 -10 36 0 37 -8 9 -61 -11 -23 -19 -42 -17 -44 2 -2 35 24 73 57 39 33 102 84 140 113 63 47 76 53 131 57 75 5 199 61 261 118 32 30 51 40 76 40 42 0 124 41 162 80 22 23 25 30 12 30 -26 0 -21 12 17 43 37 29 62 34 68 15 9 -25 82 43 168 157 19 25 83 87 143 136 59 50 107 98 107 106 0 11 -5 13 -17 7 -56 -24 -253 -84 -277 -84 -16 0 -83 -18 -147 -40 -133 -45 -166 -48 -201 -20 -19 14 -28 16 -36 8 -9 -9 -27 4 -72 50 -55 57 -80 74 -80 55 0 -5 -4 -14 -9 -21 -7 -11 -15 -11 -45 2 -20 8 -36 19 -36 25 0 5 -16 19 -35 31 -34 21 -37 21 -89 6 -67 -20 -90 -20 -105 -2 -9 10 -9 20 0 40 10 20 10 29 1 38 -17 17 -15 48 5 70 16 18 18 17 50 -14 l33 -32 0 27 c0 16 10 38 25 53 14 14 25 31 25 39 0 7 12 23 26 34 25 19 25 21 6 21 -11 0 -24 -4 -27 -10 -9 -14 -41 -12 -53 3 -9 10 -5 22 13 50 31 45 31 47 -2 48 -16 0 -37 4 -48 8 -16 7 -23 2 -35 -22 -23 -47 -43 -54 -83 -32 -32 17 -40 17 -75 6 -55 -18 -72 -10 -72 35 0 47 27 103 57 117 12 5 23 19 23 29 0 18 -2 18 -22 4 -12 -9 -31 -16 -42 -16 -17 0 -18 5 -12 50 7 53 2 59 -30 35 -27 -21 -51 -18 -65 6 -9 17 -7 25 10 43 23 24 27 46 11 62 -8 8 -7 19 1 38 10 20 10 29 1 38 -9 9 -19 4 -41 -22 -28 -34 -28 -34 -40 -12 l-12 22 -25 -30 c-14 -16 -32 -30 -39 -30 -19 0 -55 48 -55 74 -1 16 -6 11 -22 -18 -19 -37 -21 -39 -34 -21 -8 10 -16 17 -18 14 -10 -10 -56 -123 -56 -138 0 -21 -47 -121 -67 -143 -20 -22 -37 -23 -58 -2 -15 16 -20 14 -62 -29 -51 -52 -74 -63 -101 -48 -16 8 -21 6 -31 -15 -17 -38 -73 -57 -158 -52 -85 4 -117 24 -95 58 6 11 12 31 12 44 0 34 68 130 147 208 72 71 129 103 154 87 32 -20 49 -11 49 29 0 47 -7 56 -51 75 -19 8 -51 28 -70 44 -25 22 -57 35 -124 50 l-90 21 -174 -24 c-141 -19 -182 -21 -218 -13 -32 9 -50 8 -72 -1 -42 -17 -67 -5 -85 41 -10 25 -25 43 -42 49 -34 13 -174 13 -174 0 0 -19 -48 -10 -62 12 -14 20 -15 19 -64 -46z', 'M8157 8933 c-11 -10 -8 -52 4 -75 9 -17 7 -24 -9 -41 l-21 -20 40 -50 c21 -27 39 -57 39 -67 0 -9 -27 -43 -60 -75 -34 -31 -60 -59 -58 -60 6 -6 194 25 221 37 35 14 50 -2 36 -39 -8 -22 -6 -24 13 -21 15 2 34 23 59 68 20 36 35 67 33 69 -3 3 -17 -11 -33 -29 l-28 -35 -57 49 c-31 26 -68 68 -82 92 -25 43 -26 46 -9 64 23 25 51 25 100 0 52 -27 64 -25 113 11 25 18 61 34 89 38 l48 7 -40 12 c-22 7 -95 12 -163 12 -126 0 -173 10 -201 43 -14 18 -24 21 -34 10z', 'M8671 8523 c-35 -95 -35 -95 -89 -35 -56 62 -82 68 -82 19 0 -18 6 -40 13 -48 11 -14 113 -93 145 -113 29 -18 39 12 40 124 1 60 0 110 -2 110 -2 0 -13 -26 -25 -57z', 'M8478 8368 c-3 -7 2 -25 10 -41 19 -37 8 -91 -21 -110 -13 -8 -36 -45 -53 -81 -31 -71 -48 -81 -66 -40 -11 23 -16 25 -48 20 -19 -3 -44 -6 -55 -6 -14 0 -16 -3 -7 -8 7 -5 17 -35 22 -67 5 -32 13 -62 17 -66 16 -14 92 30 115 65 26 40 32 42 79 22 31 -13 33 -12 57 15 13 16 29 29 34 29 6 0 37 24 68 54 l57 54 -39 16 c-37 14 -39 17 -33 49 7 33 5 36 -51 71 -62 38 -80 43 -86 24z', 'M9391 7926 l-34 -33 39 -36 39 -35 20 56 21 57 -21 12 c-27 16 -25 17 -64 -21z', 'M9366 7550 l-36 -40 28 -57 c16 -32 39 -93 52 -135 16 -53 29 -80 42 -84 28 -8 38 4 38 45 0 27 7 44 24 60 41 39 39 58 -11 112 -36 38 -44 54 -39 72 6 27 -10 52 -40 61 -16 5 -30 -3 -58 -34z', 'M7455 7059 c-42 -30 -65 -64 -72 -105 l-6 -36 24 15 c13 9 49 25 81 37 64 24 95 50 59 50 -16 0 -23 8 -27 30 -8 36 -19 37 -59 9z', 'M7063 7048 c-6 -7 -23 -37 -38 -67 -21 -43 -24 -55 -13 -62 7 -5 18 -7 23 -6 16 5 76 110 73 127 -4 19 -32 24 -45 8z', 'M8330 5516 c0 -13 9 -34 20 -47 20 -24 20 -24 35 -5 22 29 19 43 -17 60 -39 20 -38 20 -38 -8z', 'M8469 5476 c-19 -25 -43 -50 -55 -56 -11 -7 -31 -32 -43 -57 l-22 -45 24 -32 c70 -92 91 -156 52 -156 -8 0 -15 -8 -15 -17 0 -10 -9 -29 -20 -43 -11 -14 -20 -39 -20 -55 0 -41 57 -134 100 -163 l34 -23 19 25 c10 15 22 26 27 26 4 0 27 -16 50 -35 34 -28 50 -35 86 -35 46 0 56 15 35 49 -6 9 -1 25 15 48 27 40 44 94 44 140 0 37 -27 62 -89 83 -39 13 -41 15 -41 55 0 62 -18 146 -35 165 -10 11 -15 38 -15 78 0 34 -3 62 -7 62 -3 0 -21 -18 -40 -40 -47 -55 -67 -54 -48 1 29 81 14 91 -36 25z', 'M8698 5463 c-2 -5 -1 -26 2 -47 4 -35 6 -37 19 -23 7 10 24 17 36 17 20 0 23 -6 29 -60 9 -79 26 -88 26 -12 0 51 -4 62 -27 84 -26 24 -65 48 -77 48 -3 0 -6 -3 -8 -7z', 'M8120 5346 l-36 -61 32 -32 c17 -17 39 -52 48 -79 16 -47 41 -84 58 -84 4 0 8 40 8 88 0 78 -3 91 -21 108 -32 29 -41 51 -30 73 8 14 6 22 -7 34 -16 14 -20 10 -52 -47z', 'M4649 5184 c-10 -12 -22 -14 -48 -9 -78 15 -115 10 -186 -25 -65 -33 -70 -37 -73 -70 -2 -26 10 -62 46 -136 47 -95 52 -101 91 -112 48 -15 61 -35 68 -106 4 -37 1 -61 -11 -84 -22 -43 -20 -73 9 -112 35 -48 55 -57 72 -34 12 16 30 18 171 19 171 1 192 6 211 53 11 27 8 39 -37 138 -59 129 -112 307 -121 407 l-6 72 -45 7 c-79 12 -127 9 -141 -8z', 'M3934 5001 c5 -35 3 -42 -21 -61 l-26 -20 21 -21 c12 -11 22 -31 22 -44 0 -23 23 -55 40 -55 32 0 100 47 100 69 0 5 -15 18 -34 29 -40 24 -54 73 -32 107 14 22 13 23 -16 29 -58 12 -61 10 -54 -33z', 'M3691 4843 c-11 -21 -34 -52 -53 -69 -49 -47 -149 -114 -169 -114 -34 0 -49 -13 -110 -96 -84 -114 -117 -108 -64 11 16 37 16 38 -1 25 -13 -12 -18 -12 -21 -2 -8 22 -30 13 -57 -23 -15 -19 -47 -43 -71 -54 -26 -11 -50 -30 -56 -44 -6 -14 -30 -33 -53 -43 -81 -36 -492 -324 -586 -411 -99 -93 -208 -125 -408 -121 -116 2 -133 -1 -176 -21 -59 -29 -133 -101 -181 -175 -62 -97 -108 -100 -177 -9 -74 97 -144 128 -235 103 -36 -11 -55 -10 -99 0 -43 11 -65 11 -108 1 -61 -14 -83 -33 -92 -82 -10 -52 -26 -78 -98 -158 -36 -40 -66 -80 -66 -88 0 -8 9 -28 21 -44 25 -36 21 -63 -10 -67 -17 -3 -31 5 -46 24 l-23 28 -51 -27 c-28 -15 -70 -31 -93 -35 -35 -6 -49 -16 -86 -62 -24 -30 -58 -73 -76 -95 l-33 -40 -44 21 c-31 15 -51 19 -66 13 -33 -12 -105 -88 -101 -107 5 -26 56 -27 100 -2 21 12 42 19 48 15 13 -8 30 -73 30 -116 0 -47 -21 -65 -111 -93 l-74 -22 3 -75 c1 -41 0 -98 -3 -126 -8 -70 -30 -71 -79 -3 -20 28 -39 50 -44 50 -21 0 -52 -35 -62 -68 -5 -20 -10 -89 -10 -153 0 -107 2 -117 25 -149 28 -39 31 -57 10 -84 -35 -46 -10 -90 72 -131 29 -14 53 -28 53 -29 0 -2 -7 -17 -15 -32 -8 -16 -15 -42 -15 -58 0 -16 -7 -38 -17 -48 -22 -24 -4 -23 52 4 37 18 46 28 51 56 10 51 62 71 181 72 l91 0 26 44 c38 65 79 96 128 96 33 0 39 3 34 16 -10 25 27 96 68 131 41 37 74 48 116 40 25 -5 32 -2 47 23 20 35 21 35 68 13 35 -17 38 -22 60 -114 4 -15 19 -38 33 -52 54 -49 215 -158 230 -155 9 2 27 21 39 43 13 22 28 47 33 55 7 12 16 7 45 -28 21 -24 45 -42 57 -42 11 0 47 14 80 32 l60 32 -5 43 c-6 54 -27 78 -96 112 -74 36 -81 50 -48 99 32 49 57 58 108 42 37 -13 43 -11 151 40 62 29 149 66 193 82 72 27 88 29 158 24 l78 -7 51 45 c112 98 196 121 278 75 65 -36 68 -47 36 -119 l-28 -62 45 -67 c63 -91 63 -93 28 -132 -17 -18 -31 -37 -31 -41 0 -5 20 -18 44 -30 24 -11 49 -32 55 -45 14 -31 24 -29 55 12 18 24 35 35 52 35 14 0 37 9 51 20 35 28 57 25 86 -10 32 -37 49 -38 79 -2 12 15 34 35 48 44 14 10 36 36 50 59 20 33 35 44 79 59 55 18 102 48 109 68 2 6 -16 16 -40 22 -66 17 -118 42 -134 64 -14 20 -14 20 -43 -2 -17 -12 -34 -22 -39 -22 -13 0 -84 78 -107 118 -14 23 -29 33 -55 38 -68 10 -80 14 -80 27 1 36 153 162 206 170 22 4 59 21 82 38 l43 32 -39 41 c-53 54 -84 117 -87 173 -1 44 -4 48 -43 67 -23 11 -42 23 -42 26 0 9 67 40 86 40 25 0 70 -27 130 -80 61 -53 78 -59 110 -35 10 8 34 15 53 15 26 0 32 3 27 16 -4 9 -2 22 4 29 6 7 6 23 0 46 -17 57 -15 117 3 137 16 17 16 23 2 70 -10 31 -22 52 -30 52 -33 0 -46 70 -20 107 10 14 12 24 5 28 -12 7 -13 25 -2 43 6 9 22 6 70 -13 34 -14 63 -25 66 -25 4 0 -43 121 -50 129 -2 2 -10 -1 -17 -7 -7 -7 -30 -18 -50 -27 -34 -14 -37 -14 -66 11 -40 34 -39 56 5 89 l36 27 -31 15 c-37 18 -37 18 -12 76 27 62 52 77 131 77 42 0 73 5 87 15 19 14 25 11 88 -45 86 -76 111 -81 215 -47 93 31 165 64 181 83 9 11 6 30 -15 90 -21 59 -25 79 -15 90 6 8 18 14 26 14 10 0 8 8 -8 29 l-21 29 27 60 c25 57 26 62 11 84 -24 33 -20 65 9 80 l24 13 -38 61 c-39 61 -78 97 -138 128 l-32 16 -20 -37z', 'M8638 4758 c-21 -12 -38 -25 -38 -28 0 -3 17 -57 38 -119 l38 -113 34 -3 c19 -1 45 -5 56 -9 16 -5 31 1 52 19 48 41 48 55 -2 142 -26 43 -46 83 -46 91 0 12 -28 27 -73 37 -13 3 -38 -4 -59 -17z', 'M9447 4686 c-31 -29 -37 -40 -37 -76 0 -44 27 -79 63 -80 14 0 17 10 17 68 0 43 5 75 15 88 14 22 11 34 -10 34 -6 0 -28 -15 -48 -34z', 'M9602 4573 c2 -20 12 -29 43 -40 l40 -14 -40 41 c-21 22 -41 40 -43 40 -2 0 -2 -12 0 -27z', 'M8191 4547 c-18 -46 -13 -84 11 -101 26 -18 118 -22 118 -5 0 6 -27 39 -59 72 l-60 62 -10 -28z', 'M9186 4387 c-56 -100 -47 -135 27 -95 35 20 42 28 43 56 0 19 10 42 25 58 l24 26 -23 -7 c-16 -4 -29 -1 -42 10 -17 16 -20 13 -54 -48z', 'M1375 4319 c-159 -50 -313 -98 -342 -106 -29 -9 -60 -24 -69 -34 -20 -22 -15 -35 41 -113 19 -26 35 -54 35 -61 0 -7 -16 -32 -35 -56 -42 -53 -46 -86 -10 -95 13 -3 82 2 152 11 170 23 251 17 377 -29 114 -42 153 -44 191 -15 26 21 27 24 20 89 -5 53 -3 73 9 92 8 13 18 50 22 83 8 67 36 149 83 244 18 35 30 65 28 67 -2 3 -28 -5 -57 -16 l-53 -21 -38 26 c-21 14 -44 25 -51 24 -7 0 -143 -41 -303 -90z', 'M9410 4333 c0 -26 101 -207 109 -197 3 5 16 20 28 34 l22 26 -25 64 c-30 77 -45 90 -96 90 -30 0 -38 -4 -38 -17z', 'M6445 3853 c-36 -9 -68 -40 -119 -114 -63 -91 -84 -99 -286 -106 l-145 -5 -78 50 c-75 48 -85 51 -243 82 -91 17 -173 29 -182 25 -10 -3 -63 -34 -120 -67 -57 -34 -131 -71 -165 -83 -70 -25 -107 -67 -107 -119 0 -25 11 -42 46 -76 28 -27 58 -71 76 -110 16 -36 43 -79 59 -96 16 -17 43 -64 58 -105 26 -66 35 -78 83 -112 47 -33 64 -39 138 -47 47 -4 110 -18 140 -30 31 -12 88 -24 130 -27 83 -6 135 -30 159 -77 13 -24 13 -30 -2 -55 -15 -26 -15 -28 3 -44 11 -10 20 -29 20 -46 0 -21 9 -36 35 -56 46 -34 68 -30 76 16 3 20 20 59 37 87 17 29 35 70 38 92 8 47 34 70 81 70 48 0 82 -17 93 -45 5 -14 24 -46 42 -73 30 -43 37 -47 72 -47 35 0 44 -5 73 -43 37 -49 43 -95 16 -111 -15 -8 -16 -13 -5 -30 19 -32 14 -58 -15 -80 l-28 -20 40 -16 c48 -20 85 -53 85 -75 0 -9 -18 -33 -39 -54 -45 -44 -58 -76 -32 -76 9 0 27 7 39 16 20 14 27 14 77 -1 48 -14 91 -13 118 2 4 3 -4 14 -18 25 -39 30 -31 62 16 66 40 3 35 11 55 -89 5 -25 1 -36 -25 -63 -31 -32 -31 -33 -16 -69 12 -30 13 -45 4 -82 -13 -51 -6 -107 16 -125 18 -15 126 2 162 25 29 20 26 33 -29 127 -44 74 -44 85 -12 171 23 58 16 72 -51 107 -57 30 -74 64 -55 110 14 34 55 79 93 103 15 10 39 35 53 57 15 22 31 40 37 40 6 0 26 -15 45 -32 32 -31 34 -31 27 -9 -4 13 -7 41 -7 63 1 21 -3 38 -8 38 -15 0 -80 61 -80 75 0 7 -12 15 -28 18 -44 9 -77 41 -113 111 -37 72 -34 95 6 47 23 -26 30 -29 47 -20 17 9 25 6 48 -16 18 -17 30 -23 34 -16 14 23 37 10 57 -33 19 -38 28 -45 78 -61 31 -9 70 -26 88 -36 l32 -20 -20 -34 c-16 -27 -18 -38 -9 -55 16 -30 40 -111 40 -137 0 -40 31 -118 55 -139 30 -27 61 -89 70 -137 6 -30 4 -41 -10 -51 -52 -38 54 -72 189 -61 46 4 89 11 96 15 12 8 8 11 -64 55 -16 10 -19 21 -17 66 2 53 -2 67 -67 237 -15 37 -15 44 -3 52 9 5 22 5 32 -1 21 -11 59 -12 59 -1 0 4 -13 13 -30 19 -32 12 -40 45 -20 83 8 15 -3 37 -56 117 l-65 98 36 33 c19 18 49 35 65 38 16 4 33 11 38 18 16 21 35 134 28 171 -6 28 -3 40 9 49 13 10 6 20 -55 71 -73 62 -93 72 -146 74 -47 2 -61 24 -35 57 l21 27 -26 46 c-35 60 -87 131 -113 155 -19 18 -23 18 -84 1 -90 -24 -129 -11 -160 53 -20 44 -30 51 -133 104 -76 39 -131 60 -175 67 -66 11 -139 12 -174 4z', 'M3593 3768 l-53 -10 0 -43 c0 -24 5 -47 10 -50 6 -3 10 -17 10 -30 0 -33 50 -59 97 -52 64 11 82 48 42 88 -19 19 -22 19 -44 5 -70 -46 -76 19 -7 71 49 37 43 39 -55 21z', 'M4262 3673 c-25 -5 -47 -37 -36 -54 6 -11 79 -7 91 5 3 3 3 17 -1 31 -6 25 -10 26 -54 18z', 'M8567 3480 c3 -11 12 -20 19 -20 8 0 14 9 14 20 0 13 -7 20 -19 20 -14 0 -18 -5 -14 -20z', 'M9202 3320 c-12 -16 -22 -42 -22 -57 0 -27 0 -27 19 -8 16 17 39 95 28 95 -2 0 -13 -13 -25 -30z', 'M3790 3213 c-39 -36 -40 -39 -25 -60 23 -33 48 -28 89 18 42 46 44 73 4 77 -20 2 -38 -7 -68 -35z', 'M3445 3128 c-16 -6 -36 -12 -42 -14 -7 -2 -13 -10 -13 -18 0 -14 8 -18 62 -30 18 -4 34 -20 50 -49 18 -31 30 -41 46 -40 17 2 28 -11 58 -67 34 -66 75 -107 93 -95 22 13 23 84 1 132 -19 42 -20 53 -9 96 15 64 6 73 -94 86 -91 13 -111 13 -152 -1z', 'M9238 3114 c-34 -18 -28 -54 8 -54 28 0 41 23 28 50 -8 17 -12 17 -36 4z', 'M8189 3084 c-29 -30 -39 -34 -64 -29 -16 4 -45 7 -64 8 -34 2 -35 0 -65 -71 -39 -94 -33 -113 52 -160 45 -25 66 -31 75 -24 7 6 40 12 72 14 59 3 60 3 57 31 -2 15 4 39 12 52 21 32 20 53 -4 93 -11 18 -20 50 -20 72 0 21 -4 41 -8 44 -5 3 -24 -11 -43 -30z', 'M5500 2873 c0 -5 9 -22 19 -39 12 -20 46 -45 102 -74 46 -23 96 -53 110 -67 l26 -24 18 40 c31 70 4 137 -64 160 -38 12 -211 15 -211 4z', 'M5005 2740 c-16 -11 -59 -30 -95 -41 -97 -32 -98 -35 -48 -86 38 -39 41 -46 30 -64 -11 -17 -10 -23 8 -37 20 -17 19 -18 -39 -66 -33 -27 -74 -63 -91 -81 l-31 -32 18 -56 c15 -47 22 -56 46 -59 23 -4 27 -1 27 20 0 13 -10 32 -22 42 -22 17 -22 19 -4 26 11 4 35 -1 62 -15 50 -24 74 -27 75 -8 0 6 1 30 2 52 2 35 5 40 28 43 43 5 103 -59 124 -132 14 -49 15 -65 5 -96 -10 -31 -10 -42 4 -68 15 -29 15 -37 -5 -124 -12 -51 -23 -103 -25 -116 -6 -30 -71 -101 -100 -108 -46 -12 -20 -70 46 -104 23 -12 59 -20 88 -20 37 0 54 -5 68 -21 l18 -20 38 40 c20 23 41 41 46 41 4 0 26 -18 47 -40 68 -70 71 -55 14 72 -41 89 -43 115 -13 125 6 2 61 -31 124 -72 62 -42 114 -74 117 -72 9 9 -90 204 -119 234 -37 38 -31 52 36 77 29 11 53 30 71 56 49 71 57 75 110 54 l46 -17 29 34 c51 59 40 84 -27 62 -44 -15 -45 -15 -73 12 l-28 27 -59 -27 c-48 -22 -70 -26 -128 -24 -103 3 -101 3 -154 -52 l-49 -52 -21 41 c-36 70 -35 72 87 143 42 25 62 72 62 150 0 65 -7 70 -25 16 -8 -25 -16 -33 -39 -35 -23 -3 -38 5 -72 39 -24 24 -44 50 -44 59 0 16 -26 46 -79 93 -36 32 -38 53 -11 107 29 56 26 76 -11 89 -38 13 -28 15 -64 -9z', 'M6212 2683 c-16 -3 -22 -9 -18 -20 3 -8 6 -17 6 -19 0 -6 62 -5 88 2 13 4 22 14 22 25 0 16 -7 19 -37 18 -21 -1 -48 -4 -61 -6z', 'M3422 2399 c-24 -11 -46 -28 -49 -37 -2 -9 -13 -38 -24 -64 -22 -54 -23 -58 -8 -58 6 0 24 -9 40 -21 20 -14 29 -29 29 -49 0 -24 -8 -33 -49 -56 -32 -17 -54 -37 -62 -56 -8 -19 -25 -36 -46 -44 -29 -13 -32 -17 -23 -34 31 -58 100 -51 176 19 61 56 96 65 115 30 l11 -21 25 24 c32 30 56 76 49 94 -7 17 -59 18 -85 2 -38 -23 -111 54 -111 117 0 32 41 129 67 157 22 24 2 23 -55 -3z', 'M6220 2315 c0 -18 5 -25 18 -25 26 0 33 10 21 31 -14 28 -39 24 -39 -6z', 'M2611 1994 c-27 -22 -31 -33 -31 -72 0 -56 3 -61 60 -106 52 -41 82 -45 104 -14 26 37 20 81 -14 106 -20 15 -30 31 -30 48 0 65 -38 81 -89 38z', 'M8062 1740 c-39 -28 -42 -33 -30 -48 8 -9 20 -29 27 -44 16 -31 39 -44 47 -24 3 7 4 43 2 80 l-3 68 -43 -32z', 'M7455 1745 c-16 -8 -56 -14 -88 -15 l-58 0 7 -47 c8 -60 8 -60 41 -66 16 -2 43 -11 61 -18 30 -13 34 -12 59 14 23 23 28 35 28 84 0 31 -4 57 -10 59 -5 1 -23 -4 -40 -11z', 'M1180 1670 c0 -38 3 -70 6 -70 4 0 22 14 41 30 18 17 37 30 41 30 5 0 18 -13 30 -30 27 -36 36 -37 81 -9 l34 20 -32 20 c-17 10 -47 19 -67 19 -38 0 -83 19 -103 44 -24 29 -31 17 -31 -54z', 'M7616 1545 c-89 -38 -108 -53 -130 -99 -23 -48 -47 -148 -41 -167 7 -21 87 -61 121 -61 14 0 43 14 65 32 37 30 42 31 58 16 12 -11 37 -16 81 -16 l63 0 -9 33 c-5 17 -9 70 -9 117 0 47 -4 92 -10 100 -14 21 -87 80 -100 80 -5 0 -45 -16 -89 -35z', 'M1230 1385 c-12 -22 -11 -27 4 -38 45 -33 -15 -77 -106 -77 -37 0 -68 -20 -68 -44 0 -15 24 -38 58 -55 20 -11 26 -9 47 13 21 23 32 26 90 26 77 0 88 12 55 64 -24 40 -17 66 23 87 21 12 21 13 -18 30 -55 24 -69 23 -85 -6z']
			),
			'location' => DB::raw('POINT(22.396428, 114.109497)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}