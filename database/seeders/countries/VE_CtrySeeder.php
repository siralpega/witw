<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VE_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Venezuela',
			'code'  => 'VE',
			'type'  => null,
			'paths' => serialize(
				['M2375 9113 c-11 -3 -41 -25 -67 -49 -26 -24 -56 -44 -68 -44 -11 0 -20 -6 -20 -14 0 -7 -13 -42 -29 -77 l-29 -64 20 -35 c12 -19 30 -45 42 -58 18 -20 19 -27 8 -54 -19 -52 -2 -57 86 -25 42 16 91 31 107 34 17 3 43 14 58 25 35 25 51 14 84 -60 26 -59 24 -66 -15 -86 -50 -25 -72 -29 -72 -12 0 10 -9 16 -24 16 -14 0 -28 5 -31 10 -10 17 -48 12 -41 -5 7 -19 -22 -34 -56 -28 -23 4 -27 1 -33 -26 -10 -48 -113 -121 -170 -121 -39 0 -75 -15 -88 -36 -5 -10 -30 -14 -77 -14 -38 0 -72 -4 -75 -10 -3 -5 -17 -10 -31 -10 -15 0 -35 -11 -50 -27 -54 -61 -68 -73 -86 -73 -10 0 -21 -7 -24 -15 -4 -8 -14 -15 -24 -15 -18 0 -165 -73 -184 -91 -6 -5 -21 -9 -35 -9 -53 0 -71 -11 -71 -41 0 -16 5 -29 10 -29 7 0 7 -6 1 -18 -6 -10 -7 -28 -4 -40 5 -21 2 -22 -55 -22 -34 0 -63 -4 -66 -9 -3 -4 5 -18 19 -31 28 -26 42 -77 26 -93 -21 -21 -11 -47 27 -72 39 -25 54 -47 68 -94 11 -41 72 -129 108 -156 21 -16 40 -43 48 -67 11 -33 21 -43 48 -52 27 -8 42 -23 62 -61 24 -44 27 -60 26 -135 -1 -47 4 -118 10 -159 7 -41 10 -82 7 -91 -3 -9 -25 -31 -50 -49 -33 -23 -46 -41 -51 -66 -4 -25 -15 -40 -41 -55 -47 -28 -144 -50 -219 -50 -73 0 -114 25 -114 68 0 30 -12 54 -26 51 -5 -1 -15 -1 -22 0 -18 2 8 41 28 41 11 0 16 10 17 35 1 32 -1 34 -19 24 -24 -13 -48 -5 -48 16 0 19 -14 19 -34 0 -8 -8 -19 -15 -25 -15 -18 0 -12 18 10 33 20 15 20 15 -9 22 -18 4 -38 1 -51 -7 -11 -7 -24 -9 -28 -4 -4 4 0 12 10 17 15 9 16 13 2 46 l-15 35 25 -16 c14 -9 25 -12 25 -7 0 12 -87 84 -125 104 -16 8 -41 27 -54 41 -22 23 -23 28 -10 39 9 6 34 44 57 82 22 39 59 90 81 114 23 24 41 49 41 55 0 6 16 33 35 60 19 27 35 55 35 62 0 17 66 73 94 80 29 7 40 29 26 54 -6 10 -10 38 -10 61 0 29 -10 58 -34 98 -18 31 -39 72 -45 92 -19 58 -39 70 -111 67 -36 -2 -64 1 -66 7 -6 15 46 36 65 26 30 -16 148 -21 160 -7 8 9 -8 21 -71 52 -55 27 -94 54 -123 86 -46 51 -52 70 -62 197 -5 67 -4 73 12 68 9 -4 34 3 58 17 23 13 67 32 97 41 30 10 63 29 73 42 10 12 27 23 37 23 24 0 91 28 113 48 9 8 17 23 17 34 0 30 -48 22 -114 -21 -34 -22 -85 -44 -114 -50 -82 -17 -181 -73 -228 -128 -22 -26 -76 -108 -120 -180 l-79 -133 -56 -11 -57 -11 -118 -170 c-65 -94 -142 -193 -171 -221 -44 -41 -53 -56 -53 -84 0 -20 -20 -77 -48 -136 l-48 -102 12 -75 c7 -41 22 -96 34 -123 21 -47 21 -48 5 -210 l-16 -162 -49 -45 c-27 -25 -58 -63 -69 -86 -13 -26 -31 -46 -50 -54 -53 -21 -30 -50 39 -50 35 0 55 7 86 30 34 24 47 28 78 23 21 -3 44 -15 55 -29 19 -25 55 -31 80 -15 24 15 46 -4 60 -51 20 -68 157 -308 209 -366 39 -43 55 -54 91 -60 43 -7 45 -9 56 -53 7 -25 15 -87 19 -137 l7 -91 -31 -16 c-28 -15 -31 -19 -24 -48 4 -18 7 -68 6 -112 0 -59 4 -89 19 -117 10 -20 26 -62 34 -93 18 -73 18 -73 73 -88 40 -11 50 -20 70 -58 19 -38 29 -46 67 -55 24 -7 86 -41 139 -78 62 -43 104 -66 123 -66 32 0 222 36 229 43 3 3 20 1 37 -4 45 -12 224 12 260 36 27 17 31 17 81 2 29 -10 58 -17 65 -17 13 0 116 73 126 90 12 19 74 39 108 33 23 -3 37 0 46 11 12 14 17 13 50 -13 67 -53 196 -78 244 -47 25 17 29 17 45 4 9 -9 152 -135 316 -282 l299 -266 67 0 c65 0 66 1 110 45 l44 45 91 0 c83 -1 196 -17 237 -34 11 -5 20 -1 27 12 15 28 98 53 205 62 50 4 109 15 132 24 37 15 43 15 78 1 37 -16 37 -16 86 20 71 52 118 66 182 54 29 -6 83 -13 120 -16 l68 -5 35 -58 c19 -32 42 -63 50 -70 13 -11 11 -17 -16 -47 -16 -19 -41 -59 -54 -89 -13 -29 -37 -73 -54 -98 -26 -38 -31 -54 -31 -105 0 -85 -20 -120 -87 -156 -50 -28 -54 -32 -49 -59 3 -16 6 -31 6 -35 0 -4 13 -14 28 -23 19 -11 33 -32 41 -58 13 -44 14 -40 -34 -105 -8 -12 -22 -68 -30 -125 -9 -58 -22 -132 -30 -165 -10 -48 -11 -63 -1 -75 22 -26 35 -72 42 -150 8 -90 23 -131 58 -156 15 -11 47 -48 73 -84 69 -98 103 -130 134 -130 48 0 79 -18 91 -52 7 -18 24 -57 40 -87 23 -43 28 -66 28 -120 l0 -66 -44 -25 c-31 -17 -76 -65 -148 -155 -97 -121 -156 -205 -145 -205 3 0 24 9 48 19 34 16 47 17 63 8 12 -6 34 -12 51 -12 26 0 30 -4 36 -35 3 -19 11 -48 17 -63 11 -26 13 -27 35 -12 22 14 25 13 53 -16 16 -17 52 -46 79 -64 73 -48 129 -109 122 -134 -5 -21 31 -81 67 -110 15 -13 17 -25 11 -81 -7 -66 -6 -68 23 -91 20 -16 41 -50 61 -102 17 -42 42 -95 56 -117 28 -44 79 -166 104 -250 l17 -55 169 -91 c92 -51 190 -110 216 -133 48 -41 48 -41 131 -41 94 0 102 5 161 97 50 79 118 113 223 113 54 0 65 -3 74 -21 9 -16 8 -24 -3 -37 -17 -20 -50 -83 -45 -86 2 -2 17 -8 35 -14 30 -10 34 -8 76 36 24 26 48 54 53 63 5 9 44 39 86 67 43 29 83 63 90 76 19 34 70 74 117 91 23 8 56 25 74 38 41 31 109 57 148 57 39 0 146 75 190 133 50 65 51 65 43 23 -8 -46 -9 -47 93 36 55 45 81 75 112 131 37 67 40 78 34 124 -4 41 -1 58 17 91 l23 40 76 3 c75 4 78 5 133 51 30 27 68 50 84 53 16 2 46 7 66 10 50 8 82 60 73 121 -6 42 -7 42 -54 49 -36 5 -69 0 -136 -19 -107 -31 -158 -33 -225 -6 -28 11 -64 20 -80 20 -38 0 -142 38 -157 58 -7 9 -13 30 -13 46 0 17 -12 56 -26 86 -14 30 -34 82 -45 115 -10 33 -33 105 -52 160 l-34 100 23 30 c13 17 32 50 42 73 l19 42 -34 128 c-19 70 -37 130 -41 133 -4 3 -58 24 -121 45 l-113 39 -74 95 c-41 52 -74 103 -74 113 0 21 22 22 150 2 52 -8 124 -15 159 -15 56 0 69 3 92 26 26 25 28 25 57 10 17 -9 40 -30 53 -47 34 -48 90 -69 168 -62 54 4 100 -3 248 -36 101 -23 201 -41 222 -41 24 0 67 -13 112 -35 119 -57 148 -45 170 66 l11 58 131 51 c73 28 144 63 163 80 19 16 51 33 71 37 50 10 157 10 213 0 44 -8 45 -8 64 27 19 35 20 36 65 30 66 -9 126 10 153 47 20 27 27 30 60 25 34 -6 39 -3 85 52 28 31 58 69 67 84 10 15 30 30 46 33 17 4 38 21 55 45 25 36 29 38 58 29 18 -5 71 -9 118 -9 85 0 87 1 93 26 13 51 54 101 108 132 58 32 93 76 126 158 43 104 69 67 -293 416 -179 172 -325 317 -325 322 0 4 25 31 56 60 31 28 62 63 70 78 25 49 13 163 -28 259 -18 43 -18 49 -4 77 15 30 49 42 118 42 41 0 78 21 95 53 l15 29 19 -21 c24 -26 75 -28 108 -4 13 9 42 26 65 38 182 97 201 112 218 166 16 55 -2 93 -51 108 -55 16 -111 14 -133 -6 -14 -13 -25 -15 -46 -7 -25 9 -27 14 -30 73 -3 60 -6 67 -48 115 -49 56 -66 97 -43 105 21 7 60 51 112 128 38 58 55 74 96 92 27 11 57 21 66 21 25 0 120 67 149 105 14 18 41 38 59 44 34 12 57 44 57 81 0 10 16 31 35 46 47 35 52 63 25 125 -25 59 -64 98 -98 99 -13 0 -73 11 -134 25 -61 14 -124 25 -140 25 -28 0 -30 -2 -26 -30 4 -23 0 -31 -16 -36 -12 -4 -25 -13 -31 -20 -8 -11 -26 -11 -105 2 -145 25 -253 13 -288 -30 -11 -14 -38 -26 -82 -35 -36 -7 -72 -19 -81 -27 -15 -13 -57 -18 -138 -15 -14 1 -49 10 -78 21 -30 11 -64 20 -76 20 -35 1 -61 25 -49 46 9 16 26 18 137 18 l126 1 29 35 c16 19 30 40 30 46 0 5 11 26 25 44 14 19 25 46 24 60 -7 88 -1 104 51 145 43 34 50 45 48 69 -2 16 -9 31 -15 34 -7 2 -38 -23 -69 -55 -49 -51 -53 -54 -34 -21 12 21 19 42 16 47 -3 5 6 12 20 15 15 4 48 25 73 47 26 21 54 39 63 39 22 0 68 46 68 67 -1 23 -16 42 -62 77 -34 26 -39 27 -53 12 -9 -9 -18 -16 -21 -16 -2 0 -15 25 -29 56 l-25 57 -60 -6 c-47 -4 -67 -1 -97 15 -21 10 -60 28 -88 39 -27 11 -66 36 -85 54 -55 54 -150 85 -150 50 0 -8 7 -15 15 -15 8 0 21 -16 29 -34 8 -19 24 -41 35 -48 26 -16 28 -65 5 -132 -9 -26 -17 -46 -19 -44 -1 2 2 34 7 72 8 58 7 71 -7 86 -34 37 -171 68 -159 36 3 -7 -2 -16 -12 -20 -17 -7 -29 5 -61 56 -9 15 -30 32 -47 38 -16 5 -43 21 -60 33 -17 13 -53 29 -80 36 -42 10 -51 10 -67 -5 -10 -9 -21 -29 -24 -44 -4 -20 -11 -27 -21 -23 -11 4 -14 -5 -14 -41 0 -26 -8 -63 -19 -84 -10 -20 -21 -48 -25 -62 -7 -30 -42 -77 -50 -69 -8 8 26 99 36 99 12 0 10 48 -3 73 -6 12 -22 34 -36 48 -14 16 -27 45 -32 76 -5 36 -18 64 -45 96 -55 67 -86 73 -86 17 0 -16 -5 -41 -10 -56 -10 -24 -14 -26 -53 -21 -34 5 -46 2 -64 -15 -17 -16 -23 -18 -23 -7 0 24 22 39 55 39 20 0 40 9 53 23 21 22 21 25 7 54 -13 27 -13 33 1 62 16 31 15 33 -7 58 -13 14 -45 36 -71 49 -66 34 -61 77 12 99 23 7 24 7 10 -10 -14 -17 -14 -17 9 -6 15 8 41 11 75 6 28 -3 83 -8 122 -11 69 -5 71 -5 111 28 35 30 53 36 128 47 57 9 94 20 105 31 10 10 28 23 39 30 12 6 21 18 21 27 0 9 8 25 18 36 16 19 16 19 -8 12 -33 -10 -81 -34 -100 -50 -16 -14 -94 -27 -145 -24 -16 1 -123 1 -237 1 -176 -1 -211 -3 -240 -18 -18 -10 -47 -17 -64 -16 -17 2 -70 -9 -117 -23 -64 -18 -111 -25 -176 -25 -89 0 -90 0 -115 -32 -25 -32 -26 -32 -102 -29 -61 2 -85 7 -115 27 -46 29 -59 30 -59 5 0 -10 -10 -26 -23 -34 -33 -22 -114 -32 -131 -18 -11 10 -22 9 -47 -4 -23 -13 -45 -15 -79 -11 -51 7 -60 0 -60 -49 0 -33 19 -35 60 -7 34 23 38 24 168 17 81 -4 148 -13 169 -22 l36 -14 -31 -19 c-45 -27 -134 -41 -258 -38 -119 2 -184 -12 -185 -40 0 -14 -2 -13 -8 3 -8 18 -10 17 -27 -12 -11 -18 -25 -33 -31 -33 -7 0 -13 -7 -13 -16 0 -12 7 -14 30 -9 19 4 30 3 30 -4 0 -18 -59 -42 -122 -51 -64 -9 -133 -48 -143 -80 -11 -34 -32 -40 -181 -45 -155 -6 -258 4 -529 54 -60 11 -116 21 -124 21 -21 0 -4 -13 32 -27 l32 -11 -36 -1 c-19 -1 -44 6 -55 14 -10 8 -27 15 -36 15 -22 0 -24 20 -3 20 8 0 15 7 15 16 0 9 -28 28 -74 50 -80 37 -95 49 -77 67 19 19 12 35 -20 46 -44 15 -123 14 -163 -3 -25 -10 -46 -12 -82 -5 -31 6 -76 6 -122 -1 -40 -5 -99 -10 -130 -10 -34 -1 -65 -7 -76 -15 -22 -17 -73 -20 -95 -6 -10 6 -36 1 -79 -15 -35 -13 -81 -24 -102 -24 -22 0 -90 -20 -157 -47 -79 -31 -134 -47 -168 -47 -27 -1 -63 -9 -80 -17 -38 -20 -230 -25 -283 -8 -70 22 -113 84 -114 166 -1 25 -6 44 -15 47 -21 9 -15 21 17 33 17 6 30 19 30 28 0 12 -5 15 -17 10 -38 -16 -60 -17 -66 -2 -4 10 2 17 18 21 22 6 23 9 14 32 -5 15 -30 49 -54 76 -25 28 -45 54 -45 59 0 5 -15 9 -33 9 -21 0 -41 8 -51 19 -10 11 -30 23 -46 26 -15 3 -37 17 -49 30 -15 18 -31 25 -59 25 -21 0 -47 7 -58 15 -15 12 -38 13 -114 9 -89 -6 -96 -5 -114 15 -41 46 -188 63 -203 25 -4 -10 -23 -14 -64 -14 -48 0 -67 -5 -99 -27 l-41 -26 -22 21 c-57 53 -109 175 -132 307 -10 59 -49 120 -100 155 -24 16 -45 29 -47 29 -2 -1 -12 -4 -23 -6z', 'M6991 8749 c-57 -54 -66 -59 -108 -59 -24 0 -58 8 -73 17 -25 14 -34 15 -71 4 -45 -14 -104 -64 -94 -81 3 -5 39 -10 80 -10 58 0 76 4 83 16 10 19 25 13 100 -40 46 -31 67 -29 82 9 12 33 55 36 45 4 -9 -29 16 -21 31 10 6 12 21 29 33 37 11 8 21 24 21 35 0 23 -41 107 -56 113 -5 2 -38 -23 -73 -55z', 'M5923 8560 c-13 -5 -23 -16 -23 -25 0 -12 12 -15 54 -15 67 0 86 7 86 31 0 16 -7 19 -47 18 -27 0 -58 -4 -70 -9z', 'M6828 8533 c-18 -3 -25 -9 -21 -19 7 -18 47 -18 62 -1 10 13 5 29 -8 26 -3 -1 -18 -4 -33 -6z', 'M6973 8524 c-7 -20 13 -34 50 -34 37 0 31 20 -11 37 -28 12 -33 11 -39 -3z', 'M9456 7575 c-18 -18 -30 -54 -22 -63 7 -6 66 47 66 59 0 15 -30 17 -44 4z', 'M9370 7530 c-6 -11 -8 -25 -5 -30 7 -12 35 -13 35 -2 0 4 3 17 6 30 8 29 -21 31 -36 2z', 'M9345 7445 c-30 -24 -20 -34 14 -15 19 10 36 40 23 40 -4 0 -20 -11 -37 -25z', 'M9375 7408 c-15 -18 -32 -44 -38 -58 -6 -14 -17 -33 -26 -43 -8 -9 -12 -20 -8 -23 3 -3 38 26 78 66 55 55 69 74 58 81 -24 15 -36 10 -64 -23z', 'M9283 7393 c-14 -5 -18 -33 -5 -33 4 0 13 5 20 12 22 22 14 33 -15 21z', 'M9423 7357 c-47 -35 -53 -47 -24 -47 17 0 91 61 91 75 0 13 -29 1 -67 -28z', 'M9301 7354 c-29 -37 -26 -55 4 -21 23 25 32 47 21 47 -3 0 -14 -12 -25 -26z', 'M9423 7293 c-13 -2 -23 -11 -23 -19 0 -12 4 -12 25 2 14 9 25 18 25 20 0 2 -1 3 -2 3 -2 -1 -13 -4 -25 -6z', 'M9327 7270 c-14 -11 -31 -20 -39 -20 -18 -1 -53 -30 -66 -56 -17 -32 -1 -46 44 -39 69 13 90 33 108 108 8 33 -10 36 -47 7z', 'M9425 7250 c-22 -11 -32 -18 -22 -15 10 3 24 5 31 5 7 0 21 7 32 15 27 21 6 18 -41 -5z', 'M9480 7218 l-35 -22 30 -7 c48 -11 165 -10 165 1 0 6 -18 10 -40 10 -38 0 -40 2 -30 20 10 18 8 20 -22 20 -18 0 -49 -10 -68 -22z', 'M9397 7203 c-38 -20 -29 -27 13 -10 18 8 29 17 24 20 -5 3 -22 -2 -37 -10z', 'M9385 7160 c-8 -13 5 -13 25 0 13 8 13 10 -2 10 -9 0 -20 -4 -23 -10z', 'M9200 7125 c-10 -12 -9 -15 7 -15 10 0 28 7 39 15 18 14 18 14 -7 15 -15 0 -32 -7 -39 -15z', 'M9215 7103 c-16 -3 -34 -9 -39 -14 -6 -5 -48 -9 -95 -9 -86 0 -119 -9 -108 -28 18 -28 195 -43 190 -16 -1 7 23 13 63 17 61 4 104 25 104 49 0 8 -59 9 -115 1z']
			),
			'location' => DB::raw('POINT(6.42375, -66.58973)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}