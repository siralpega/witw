<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SG_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Singapore',
			'code'  => 'SG',
			'type'  => null,
			'paths' => serialize(
				['M5305 8075 c-171 -13 -530 -62 -659 -91 -87 -19 -108 -30 -208 -110 -86 -70 -97 -73 -190 -49 -22 6 -34 0 -70 -33 -23 -21 -56 -46 -73 -55 -16 -8 -88 -78 -160 -155 l-130 -139 -130 -6 c-71 -4 -148 -10 -171 -13 -40 -6 -41 -5 -90 55 -53 66 -87 79 -98 38 -6 -27 -44 -47 -89 -47 -18 0 -39 -5 -47 -10 -11 -7 3 -10 45 -10 l60 0 58 -90 c31 -49 57 -100 57 -114 0 -33 9 -33 55 4 40 32 75 39 75 16 0 -10 -13 -16 -37 -18 -26 -2 -38 -8 -38 -18 0 -8 -20 -25 -45 -38 -54 -28 -150 -120 -150 -143 0 -13 -12 -19 -50 -24 -34 -5 -54 -13 -60 -26 -10 -17 -7 -19 37 -16 45 2 48 0 65 -33 9 -19 17 -38 18 -42 0 -16 -43 -7 -67 12 -14 11 -32 20 -40 20 -24 0 -87 -37 -118 -70 -34 -37 -98 -80 -118 -80 -25 0 -47 -36 -47 -74 0 -48 13 -72 50 -91 25 -13 60 -60 60 -80 0 -4 -17 7 -37 24 -39 32 -83 40 -100 19 -6 -7 -13 -55 -15 -106 -6 -107 -9 -111 -97 -162 -53 -31 -62 -40 -70 -75 l-9 -40 -1 33 c-1 38 26 83 76 126 27 23 33 35 31 59 -2 23 -9 33 -28 38 -15 4 -18 7 -8 8 24 1 41 36 49 104 4 32 14 66 23 76 17 18 21 58 8 77 -20 30 -88 44 -109 23 -23 -23 -57 -4 -96 54 -22 32 -47 57 -57 57 -9 0 -42 -27 -72 -60 -62 -68 -83 -77 -66 -30 8 26 7 34 -7 50 -18 20 -18 20 14 9 30 -11 35 -9 66 21 30 29 38 32 71 26 24 -5 51 -21 77 -48 37 -37 43 -40 76 -33 20 4 59 8 87 9 48 1 52 3 106 64 31 35 58 73 60 85 2 17 15 25 59 37 43 12 67 26 105 65 79 78 104 117 104 158 0 32 -4 38 -27 43 -16 4 -36 16 -47 26 -18 19 -29 19 -70 3 -14 -6 -18 -4 -14 6 7 20 73 23 100 5 36 -26 48 -20 48 23 0 22 -4 43 -10 46 -5 3 -10 14 -10 24 0 14 -6 17 -24 14 -38 -8 -45 32 -12 66 50 52 36 84 -102 237 -83 92 -95 101 -142 112 -70 16 -109 15 -225 -7 -132 -25 -187 -47 -325 -129 -156 -91 -290 -193 -319 -241 l-25 -39 -105 -6 c-73 -5 -122 -13 -156 -27 -27 -12 -79 -27 -115 -34 -94 -18 -149 -51 -176 -106 -12 -24 -43 -116 -68 -204 -35 -118 -54 -167 -74 -188 -27 -29 -77 -47 -128 -47 -17 0 -36 -6 -41 -12 -23 -31 -43 -142 -43 -240 0 -88 -4 -116 -31 -195 -25 -76 -36 -95 -64 -114 -44 -30 -48 -51 -20 -92 12 -19 26 -46 32 -62 l9 -28 28 27 c16 14 39 26 52 26 17 0 29 10 42 36 14 28 21 34 28 23 4 -8 8 -23 9 -34 0 -15 8 -21 32 -23 20 -2 37 -11 43 -23 14 -26 23 -24 59 11 23 24 32 27 38 16 4 -7 25 -32 45 -55 33 -35 41 -39 62 -31 31 11 46 56 48 143 2 41 6 66 13 64 5 -2 9 -15 8 -28 -4 -45 8 -88 32 -118 15 -17 23 -36 19 -45 -8 -20 -24 -11 -24 15 0 22 -9 24 -34 6 -19 -14 -23 -44 -12 -92 6 -27 5 -28 -5 -7 -14 26 -29 29 -30 5 0 -16 -2 -15 -10 2 -7 13 -29 25 -62 34 -105 27 -111 27 -145 -15 -29 -35 -30 -38 -15 -60 9 -14 25 -24 39 -24 16 0 22 -4 18 -15 -3 -8 3 -30 15 -48 15 -24 21 -51 21 -88 0 -87 -15 -86 -28 2 -16 101 -18 105 -52 119 -32 13 -50 7 -50 -18 0 -9 -14 -23 -31 -31 -36 -16 -50 -8 -20 11 12 7 21 23 21 35 0 12 5 25 10 28 14 9 13 35 -2 35 -7 0 -24 11 -38 25 l-26 25 -37 -26 c-20 -13 -37 -31 -37 -39 0 -9 -10 -15 -24 -15 -13 0 -26 -7 -30 -15 -4 -11 -20 -15 -55 -15 -98 0 -102 18 -35 151 25 51 44 101 42 115 -2 18 -21 -10 -77 -112 -56 -100 -81 -136 -98 -140 -38 -10 -52 -38 -39 -79 11 -36 20 -43 31 -25 5 8 52 4 63 -6 2 -1 -6 -12 -17 -23 -22 -22 -27 -56 -12 -80 6 -9 11 -10 15 -2 4 6 12 11 17 11 6 0 -2 -11 -17 -23 l-28 -24 23 -31 c13 -18 31 -32 43 -32 15 0 18 -4 12 -17 -8 -19 -8 -43 -2 -78 2 -13 -3 -20 -12 -20 -11 0 -16 13 -18 47 -2 35 -8 48 -21 53 -11 3 -21 15 -24 25 -4 16 -14 20 -51 20 -27 0 -46 5 -46 11 0 6 -9 9 -20 6 -11 -3 -22 -2 -24 2 -5 8 17 79 36 115 22 44 -12 -2 -77 -103 -36 -57 -64 -109 -61 -117 3 -9 -7 -15 -32 -19 -20 -4 -42 -8 -47 -10 -6 -1 -19 -56 -29 -121 l-18 -119 -83 -135 c-124 -203 -185 -362 -301 -784 l-66 -240 22 -16 c12 -9 85 -55 163 -102 181 -109 318 -155 329 -110 11 42 -15 83 -126 199 l-114 119 45 63 45 62 -62 57 c-35 31 -69 61 -76 65 -11 6 -9 18 12 59 l26 50 31 -29 c18 -16 81 -74 141 -127 l109 -97 72 71 72 72 22 -31 22 -31 -71 -80 -70 -81 37 -44 c20 -25 40 -45 42 -45 3 0 40 34 82 76 71 70 78 75 98 63 11 -8 21 -21 21 -29 0 -8 -46 -61 -102 -117 l-101 -102 26 -40 c28 -41 41 -49 52 -31 3 6 13 10 22 10 13 0 12 -5 -7 -25 -31 -34 -19 -43 20 -15 26 19 34 20 41 9 12 -20 11 -32 -7 -57 -15 -22 -13 -25 72 -118 l87 -95 48 47 47 46 17 -25 c16 -25 16 -28 -6 -67 -15 -27 -19 -44 -13 -50 12 -12 260 196 258 215 -1 7 -27 46 -58 87 -55 73 -56 76 -56 141 l0 67 50 0 50 0 0 -57 c0 -56 3 -61 60 -133 33 -41 63 -76 67 -77 5 -1 31 10 58 25 l50 27 1 118 c1 111 11 156 29 127 4 -6 10 -58 12 -114 l6 -103 78 -6 c57 -5 90 -2 123 9 l46 16 0 67 c0 78 10 93 76 110 47 12 74 6 74 -16 0 -8 20 -38 45 -66 25 -29 45 -62 45 -74 0 -22 4 -23 70 -23 l70 0 20 40 c11 21 20 50 20 63 0 18 13 31 64 59 l63 35 64 -45 c35 -24 85 -64 111 -88 44 -41 157 -119 162 -112 26 34 36 58 36 85 l0 33 -60 0 c-73 0 -76 10 -20 65 42 41 52 79 28 104 -11 10 -10 11 3 6 11 -4 24 4 39 24 20 29 50 42 50 22 0 -5 -12 -23 -26 -40 l-26 -31 17 -55 c15 -53 17 -55 50 -55 28 0 35 -4 35 -20 0 -13 -10 -24 -25 -30 -22 -8 -23 -12 -14 -39 6 -16 19 -37 29 -46 22 -20 112 -45 165 -45 29 0 44 -5 53 -20 23 -37 95 -21 106 24 6 23 9 24 35 15 27 -9 29 -13 19 -34 -30 -65 29 -113 149 -121 67 -5 83 -3 109 14 17 11 37 34 45 50 13 30 14 30 90 29 76 -2 76 -2 62 -24 -9 -14 -12 -31 -8 -45 10 -31 96 -148 109 -148 6 0 38 -26 71 -59 40 -39 79 -66 117 -80 49 -20 59 -28 73 -64 23 -60 75 -108 155 -147 53 -26 70 -39 70 -54 0 -66 130 -123 256 -113 80 7 84 4 84 -57 0 -36 34 -76 65 -76 10 0 54 -37 98 -82 73 -76 81 -81 85 -59 2 13 -13 71 -33 128 -20 58 -35 106 -33 109 3 2 36 -34 74 -81 60 -74 73 -85 101 -85 22 0 44 10 66 30 31 27 42 30 100 30 70 0 76 -4 86 -54 7 -33 15 -38 119 -80 75 -31 88 -27 164 41 29 27 68 59 86 71 17 13 32 30 32 39 0 11 5 13 18 7 9 -5 54 -10 100 -12 63 -3 82 -7 82 -18 0 -11 -19 -14 -91 -14 -68 0 -90 -3 -87 -12 5 -13 31 -20 134 -36 58 -9 104 -35 104 -58 0 -17 44 -64 60 -64 7 0 9 13 4 36 -11 57 15 39 63 -46 30 -53 44 -70 48 -58 4 9 2 26 -4 37 -10 18 -7 22 19 36 16 8 30 19 30 23 -1 4 -9 46 -19 94 -21 102 -17 114 44 123 39 6 41 5 63 -35 26 -45 103 -100 143 -100 19 0 49 25 125 103 56 56 114 122 131 147 17 25 40 54 52 64 12 11 32 37 43 58 16 27 28 38 45 38 24 0 76 22 103 45 8 6 40 20 70 29 30 10 71 30 90 45 19 15 76 44 126 65 l91 38 102 -15 c101 -15 102 -15 174 9 40 14 133 39 206 55 113 26 144 37 193 71 114 77 291 124 518 138 124 8 140 11 191 39 50 27 70 32 155 37 65 3 150 18 248 42 148 37 150 37 194 85 25 26 68 60 96 76 28 17 94 65 146 109 108 90 148 113 178 105 12 -3 52 0 89 7 87 15 152 63 238 177 57 75 65 93 104 225 24 78 62 197 86 263 31 87 46 149 55 225 7 61 25 142 42 194 27 77 30 98 26 170 -4 78 -6 85 -45 136 l-41 54 17 35 c30 59 43 109 37 139 -6 23 -19 32 -104 66 -98 40 -153 48 -216 31 -33 -9 -41 0 -57 62 -9 35 -16 43 -41 48 -46 10 -155 -14 -188 -41 -15 -13 -33 -24 -40 -24 -9 0 -9 -4 -3 -12 18 -23 24 -77 9 -85 -7 -4 -15 -18 -18 -30 -5 -17 -2 -23 11 -23 39 0 57 -53 21 -63 -12 -3 -20 0 -20 8 0 18 -26 26 -58 19 -15 -4 -63 -24 -108 -44 -91 -42 -146 -56 -253 -66 -41 -3 -92 -15 -115 -25 -61 -28 -100 -25 -125 9 -23 32 -63 47 -184 66 -45 8 -104 24 -129 36 -48 22 -150 122 -184 179 -12 21 -28 31 -53 36 -20 4 -47 13 -60 22 -18 12 -44 14 -112 11 -81 -4 -91 -7 -119 -33 -16 -16 -33 -38 -36 -49 -3 -12 -17 -37 -31 -57 -29 -44 -89 -64 -144 -49 -79 23 -125 2 -181 -84 l-28 -41 36 -36 c39 -40 38 -54 -4 -70 -28 -11 -42 1 -42 37 0 22 -35 44 -70 44 -10 0 -26 -10 -34 -22 -11 -15 -16 -17 -16 -8 1 22 19 41 76 79 34 23 59 49 73 77 28 58 53 72 152 85 93 12 122 33 135 95 4 24 18 40 54 63 27 18 52 42 56 54 4 12 14 33 23 46 9 14 21 50 27 80 11 54 11 58 -19 111 -17 30 -59 88 -95 128 -79 90 -87 122 -48 207 14 32 26 70 26 86 0 27 -3 29 -39 29 -21 0 -65 3 -98 6 l-61 7 -35 -56 c-20 -31 -50 -63 -66 -72 -44 -22 -71 -81 -71 -156 l0 -61 -97 7 -98 7 -34 -36 c-22 -22 -48 -38 -70 -42 -20 -4 -46 -16 -58 -27 -20 -18 -23 -30 -23 -97 0 -85 -9 -100 -80 -135 -19 -9 -50 -33 -68 -53 l-33 -37 15 39 c9 21 16 40 16 41 0 2 20 12 43 23 63 30 78 58 75 140 -2 52 1 75 15 95 24 36 199 124 266 133 64 8 77 23 57 62 -22 42 -82 89 -141 111 -78 29 -238 46 -309 32 -33 -6 -62 -8 -65 -4 -3 5 -27 40 -52 79 -55 83 -119 139 -170 149 -40 7 -178 -10 -216 -28 -16 -7 -28 -27 -41 -71 -11 -34 -38 -90 -61 -125 -33 -52 -58 -76 -128 -122 -48 -32 -99 -61 -114 -64 -18 -4 -31 -16 -38 -35 -5 -16 -28 -41 -50 -56 -37 -24 -46 -26 -98 -20 -32 4 -71 8 -88 9 l-30 2 -5 -78 c-5 -72 -22 -106 -28 -55 -7 59 -12 70 -27 58 -13 -11 -15 -7 -15 23 0 27 10 46 45 85 63 70 62 73 -37 87 -26 3 -57 15 -70 26 l-23 20 45 -4 c72 -7 149 -32 178 -60 35 -32 87 -58 104 -52 7 3 23 23 36 45 12 22 27 40 33 40 6 0 43 15 83 33 92 43 130 94 140 189 9 92 93 263 148 301 49 34 79 95 68 140 -10 46 -118 187 -143 187 -36 0 -207 -153 -207 -186 0 -33 -10 -54 -26 -54 -17 0 -18 14 -3 42 13 23 -1 38 -37 38 -44 0 -53 -19 -45 -97 7 -71 6 -72 -24 -96 -17 -13 -41 -28 -54 -32 -22 -7 -22 -5 10 41 32 47 34 53 31 125 -3 73 -2 77 24 94 24 16 28 16 36 2 8 -14 16 -13 71 10 73 32 108 58 155 119 29 39 33 51 27 80 -3 19 -19 49 -34 66 l-28 31 -48 -16 c-27 -10 -70 -17 -96 -17 l-47 0 5 -38 c7 -52 -13 -69 -65 -54 -20 6 -60 8 -88 5 -38 -4 -58 -1 -77 12 -23 15 -28 15 -56 1 -40 -21 -75 -21 -67 0 3 9 6 18 6 21 0 3 7 0 15 -7 13 -11 20 -9 40 10 24 22 27 23 94 11 38 -7 89 -10 113 -6 43 6 43 7 43 46 0 61 20 74 113 70 62 -2 81 1 91 13 12 14 10 22 -12 55 -44 66 -108 110 -204 140 -48 15 -98 33 -110 39 -18 10 -28 8 -59 -10 -27 -16 -36 -18 -32 -8 3 8 9 23 13 32 10 24 -28 44 -113 59 -54 9 -78 9 -97 1 -21 -10 -30 -7 -72 27 -44 34 -131 73 -157 70 -6 -1 -87 -7 -181 -14z', 'M8453 6960 c-12 -5 -25 -21 -29 -35 -6 -23 -10 -25 -65 -25 -52 0 -59 -2 -59 -20 0 -11 20 -52 45 -91 42 -65 51 -73 118 -103 40 -18 89 -39 110 -46 22 -7 69 -33 105 -58 37 -25 94 -54 127 -64 78 -25 96 -37 120 -84 11 -22 25 -42 30 -46 18 -14 35 -8 35 10 0 27 25 58 35 43 4 -7 3 -17 -3 -23 -14 -14 49 -129 79 -145 13 -6 29 -23 36 -37 16 -30 14 -29 85 -15 220 44 278 63 278 95 0 7 10 16 23 19 20 7 43 24 84 67 15 15 18 15 46 -3 28 -16 45 -18 161 -12 167 7 194 26 146 98 -14 21 -20 47 -20 88 0 51 -4 62 -28 87 -26 26 -50 35 -133 54 -16 3 -40 -2 -63 -14 -29 -14 -36 -15 -32 -4 6 17 2 17 -46 3 -25 -6 -38 -16 -38 -27 0 -17 -67 -62 -92 -62 -6 0 5 18 27 40 21 22 36 42 33 46 -4 3 -116 8 -250 10 -134 2 -258 6 -277 10 -24 4 -58 27 -115 80 -44 41 -86 74 -92 74 -6 0 -38 12 -70 26 -149 67 -252 88 -311 64z', 'M8071 6598 c0 -18 8 -53 18 -78 16 -39 23 -46 56 -52 21 -5 40 -7 42 -5 2 3 -2 26 -9 52 -10 35 -23 56 -54 81 -23 19 -44 34 -48 34 -3 0 -6 -15 -5 -32z', 'M8804 6413 c2 -10 7 -33 11 -51 5 -26 23 -44 83 -90 135 -100 142 -102 142 -34 0 56 -20 82 -64 82 -30 0 -86 26 -86 39 0 5 -13 23 -29 40 -32 34 -65 42 -57 14z', 'M1886 4041 c-3 -5 2 -23 11 -41 12 -26 13 -37 4 -51 -6 -10 -11 -34 -11 -53 0 -30 4 -36 40 -50 49 -19 114 -22 108 -3 -3 6 -15 14 -29 15 -41 6 -46 22 -6 22 34 0 37 2 37 29 0 51 -17 77 -69 110 -52 32 -76 38 -85 22z', 'M2353 4037 c-37 -8 -43 -13 -43 -36 0 -41 35 -91 65 -91 17 0 25 -5 25 -18 0 -21 76 -62 115 -62 26 0 67 45 63 69 -2 8 -19 19 -38 24 -47 12 -70 34 -70 68 0 21 -7 32 -30 44 -32 17 -29 17 -87 2z', 'M2233 3715 c-6 -18 -93 -65 -118 -65 -10 0 9 -23 43 -55 43 -39 60 -62 61 -82 1 -16 2 -56 4 -90 2 -53 6 -66 31 -92 17 -17 34 -31 38 -31 5 0 20 24 33 54 24 53 25 55 72 61 140 17 249 38 255 49 17 25 6 49 -41 95 -57 56 -86 64 -187 55 -40 -4 -88 -4 -108 0 -30 6 -36 11 -36 32 0 14 5 35 11 46 9 16 8 23 -2 29 -22 14 -49 10 -56 -6z', 'M1671 3610 c-43 -34 -50 -45 -45 -64 3 -14 -1 -37 -10 -54 -24 -47 -21 -89 9 -108 38 -24 59 -15 63 28 4 44 24 63 63 60 27 -2 29 0 29 33 0 47 14 72 53 95 21 13 26 21 16 24 -8 2 -29 9 -48 15 -55 18 -77 13 -130 -29z', 'M2703 3618 c-30 -38 -17 -78 26 -78 43 0 54 20 31 58 -21 34 -41 40 -57 20z', 'M2717 3514 c-4 -4 -7 -18 -7 -31 0 -17 6 -23 21 -23 16 0 20 5 17 27 -3 26 -18 39 -31 27z', 'M2001 3471 c-12 -16 -34 -32 -50 -36 -41 -9 -49 -22 -53 -85 l-3 -55 -65 -5 c-58 -4 -65 -7 -68 -27 -3 -21 0 -23 47 -23 38 0 51 -4 51 -14 0 -24 -63 -66 -98 -66 -18 0 -32 -4 -32 -10 0 -13 60 -27 149 -34 80 -7 101 1 101 39 0 33 23 47 62 40 33 -6 98 -56 98 -75 0 -5 9 -14 21 -21 17 -9 25 -7 45 12 13 12 24 33 24 46 0 13 8 35 17 50 17 25 16 26 -10 49 -15 13 -46 29 -68 36 -46 13 -59 35 -59 101 0 44 -20 77 -57 96 -29 15 -29 15 -52 -18z', 'M2695 3388 c0 -32 -2 -33 -45 -36 -46 -3 -80 -24 -80 -49 0 -7 -8 -13 -17 -13 -10 0 -24 -4 -32 -9 -11 -7 -10 -14 8 -40 20 -27 28 -31 70 -31 46 0 48 -1 44 -24 -4 -17 1 -27 16 -35 19 -10 21 -9 21 12 0 13 9 32 20 42 11 10 20 26 20 35 0 19 19 30 51 30 16 0 18 5 13 28 -7 29 -63 113 -79 119 -6 2 -10 -12 -10 -29z', 'M2457 3398 c-31 -17 -40 -47 -22 -74 22 -34 60 -32 73 4 5 15 13 34 17 43 8 21 -43 42 -68 27z', 'M2922 3308 c-7 -7 -12 -20 -12 -29 0 -10 -4 -21 -10 -24 -20 -13 -10 -53 21 -79 35 -30 47 -32 74 -12 26 19 26 83 0 102 -11 8 -29 23 -41 34 -16 14 -24 16 -32 8z', 'M2813 3231 c-20 -33 7 -110 39 -111 4 0 13 7 22 15 13 13 13 20 -2 57 -23 60 -39 71 -59 39z', 'M2290 3200 l-21 -29 24 -53 c18 -38 22 -58 15 -71 -16 -32 -4 -48 53 -71 31 -13 79 -41 105 -63 27 -23 63 -48 81 -57 31 -15 32 -15 53 11 11 14 23 37 26 50 4 12 10 23 16 23 12 0 58 46 58 58 0 5 -24 9 -52 9 -72 -2 -146 35 -173 85 -11 21 -32 43 -47 49 -23 9 -28 18 -28 44 0 36 -13 45 -60 45 -20 0 -35 -9 -50 -30z', 'M1995 2990 c-10 -11 -26 -22 -35 -25 -10 -3 -20 -19 -24 -36 -4 -23 -15 -34 -47 -47 l-42 -18 39 -32 c24 -20 45 -30 54 -26 8 4 37 11 63 17 43 9 50 8 71 -12 l24 -22 7 28 c3 15 22 47 41 70 l35 43 -42 0 c-33 0 -49 6 -71 27 -15 15 -28 33 -28 40 0 19 -24 16 -45 -7z', 'M2170 2841 c0 -11 -9 -41 -20 -67 -19 -43 -19 -49 -5 -71 25 -37 52 -25 69 31 5 15 9 16 22 5 13 -10 17 -10 25 2 20 31 4 94 -27 108 -38 17 -64 14 -64 -8z', 'M5012 2837 c-21 -10 -23 -15 -17 -55 12 -82 22 -89 67 -45 34 32 36 68 6 94 -27 21 -26 21 -56 6z', 'M5475 2734 c-38 -24 -75 -43 -82 -44 -7 0 -16 -8 -21 -17 -8 -14 1 -22 56 -47 46 -22 67 -27 70 -18 5 16 22 15 22 -2 0 -8 34 -24 85 -41 l84 -27 29 23 c16 13 37 29 47 34 28 17 4 49 -68 91 -34 20 -71 44 -82 53 -49 42 -65 41 -140 -5z', 'M4950 2663 c0 -5 19 -25 43 -44 23 -18 103 -93 177 -165 143 -139 163 -154 205 -154 33 0 118 -70 135 -110 10 -24 20 -30 55 -36 47 -7 68 1 104 40 l24 26 -47 0 c-54 0 -67 16 -45 57 l14 26 9 -32 c7 -25 14 -31 37 -31 15 0 39 -4 53 -10 17 -6 35 -6 51 0 21 8 25 16 25 49 0 22 5 43 10 46 6 3 10 17 10 30 0 29 -71 75 -116 75 -23 0 -38 10 -67 45 -42 50 -55 53 -130 30 -51 -15 -49 -16 -95 39 -14 18 -48 21 -57 6 -3 -5 -22 -10 -41 -10 -29 0 -38 6 -52 31 -28 50 -119 90 -219 97 -51 3 -83 1 -83 -5z']
			),
			'location' => DB::raw('POINT(1.352083, 103.819836)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}