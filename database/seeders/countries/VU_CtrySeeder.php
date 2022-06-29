<?php

namespace Database\Seeders\Countries;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VU_CtrySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('countries')->insert([
			'name'  => 'Vanuatu',
			'code'  => 'VU',
			'type'  => null,
			'paths' => serialize(
				['M2576 10231 c-3 -5 -1 -23 5 -40 9 -24 8 -39 -2 -63 -11 -27 -10 -32 6 -44 10 -8 29 -14 41 -14 17 0 23 8 28 35 4 19 11 35 16 35 21 0 9 30 -15 36 -13 3 -27 16 -31 27 -10 32 -37 47 -48 28z', 'M2653 10023 c-17 -6 -17 -42 0 -49 20 -7 67 13 67 30 0 21 -36 32 -67 19z', 'M2703 9899 c-27 -10 -28 -20 -6 -62 l16 -32 13 30 c25 57 16 79 -23 64z', 'M2750 9771 c0 -35 3 -41 21 -41 17 0 20 5 17 37 -2 27 -8 39 -20 41 -15 3 -18 -4 -18 -37z', 'M3644 9689 c-19 -21 -18 -21 9 -45 37 -32 97 -34 97 -4 0 11 -7 23 -15 26 -8 4 -15 15 -15 25 0 27 -51 25 -76 -2z', 'M4140 9474 c-8 -14 -22 -24 -36 -24 -18 0 -34 -17 -34 -35 0 -12 34 -12 57 0 15 8 37 15 49 15 25 0 62 37 48 49 -5 5 -23 11 -40 14 -26 5 -33 2 -44 -19z', 'M3793 9393 c-31 -16 -33 -20 -33 -69 0 -29 -4 -56 -10 -59 -14 -8 11 -53 49 -89 17 -17 31 -36 31 -44 0 -8 5 -32 12 -54 9 -31 16 -38 32 -36 18 3 21 9 19 41 l-2 38 34 -7 c25 -4 35 -3 35 6 0 7 8 10 19 7 12 -3 27 3 37 14 9 10 25 19 35 19 22 0 31 13 23 34 -5 12 -11 13 -24 6 -10 -6 -31 -10 -45 -10 -24 0 -26 3 -20 27 3 15 13 32 22 38 14 10 13 16 -5 51 -24 48 -47 69 -95 89 -45 19 -73 18 -114 -2z', 'M3952 8724 c-17 -12 -35 -14 -68 -9 -39 5 -44 4 -44 -12 0 -11 -11 -34 -25 -53 -20 -27 -25 -46 -25 -92 0 -77 13 -98 56 -88 18 4 54 4 81 -1 64 -12 94 9 109 77 6 27 14 57 19 67 4 10 3 28 -2 40 -6 12 -14 36 -19 52 -11 36 -47 44 -82 19z', 'M4625 8390 c-15 -17 -16 -24 -5 -50 13 -31 40 -40 58 -17 7 8 5 23 -5 50 -17 42 -23 45 -48 17z', 'M2652 7977 c-7 -8 -16 -36 -21 -64 -6 -27 -15 -70 -21 -95 -11 -44 -11 -48 16 -84 26 -34 29 -45 29 -114 0 -67 3 -81 26 -111 22 -28 29 -52 37 -131 8 -77 16 -105 36 -135 30 -44 34 -103 11 -179 -25 -83 -20 -108 41 -208 32 -50 66 -104 78 -121 11 -16 25 -55 32 -85 9 -45 15 -57 36 -64 20 -7 32 -5 53 12 15 12 39 22 52 22 13 0 35 11 49 25 17 18 32 24 45 20 13 -5 26 1 38 17 18 22 20 22 39 5 19 -17 52 -14 52 4 0 17 18 9 23 -9 2 -11 13 -21 24 -24 33 -9 62 10 84 55 25 51 63 69 129 60 29 -4 40 -2 40 8 0 7 -22 59 -50 116 -58 120 -61 136 -23 127 26 -7 26 -6 20 32 -7 43 -38 73 -76 74 -18 0 -22 4 -15 18 4 9 9 51 10 92 2 61 -1 80 -16 100 -16 20 -20 22 -20 8 0 -19 -17 -23 -38 -9 -9 6 -11 19 -7 44 6 28 4 38 -8 43 -25 9 -37 57 -25 101 19 75 18 78 -34 81 -39 3 -49 -1 -62 -20 -9 -12 -16 -34 -16 -49 0 -15 -7 -32 -16 -40 -10 -8 -13 -21 -9 -37 3 -13 3 -51 -1 -83 -5 -46 -10 -59 -21 -55 -8 3 -27 -4 -43 -15 -24 -18 -36 -21 -83 -15 -73 9 -91 34 -82 110 5 38 3 61 -8 82 -13 26 -26 89 -42 194 -4 28 -14 41 -50 65 -33 22 -46 39 -51 63 -3 18 -14 38 -23 45 -9 6 -24 24 -34 40 -10 15 -23 27 -30 27 -8 0 -20 14 -28 32 -16 37 -31 44 -47 25z', 'M4731 7661 c-11 -7 -9 -15 10 -40 20 -27 23 -47 29 -153 3 -68 11 -133 18 -145 7 -12 12 -37 12 -55 0 -19 7 -43 15 -54 19 -25 19 -55 0 -80 -23 -31 -18 -63 15 -91 17 -13 30 -33 30 -44 0 -24 33 -42 48 -27 16 16 15 40 -2 64 -13 17 -13 21 5 34 19 15 19 20 8 90 -6 41 -19 91 -29 110 -10 19 -23 69 -29 110 -7 41 -16 100 -22 130 -5 30 -10 67 -12 82 -1 18 -14 36 -36 53 -39 28 -40 28 -60 16z', 'M4450 7089 c-17 -15 -49 -29 -70 -33 -26 -4 -43 -14 -55 -33 -30 -46 -88 -92 -116 -93 -15 0 -32 -6 -38 -14 -25 -29 86 -84 134 -66 11 4 27 4 35 0 9 -5 37 -4 63 2 35 7 52 17 69 41 12 18 28 36 36 40 47 30 80 70 86 106 3 24 15 46 27 54 30 21 10 28 -70 25 -57 -3 -74 -7 -101 -29z', 'M4835 6861 c-3 -6 -7 -39 -9 -73 -2 -35 -10 -76 -19 -93 -12 -22 -16 -53 -15 -119 1 -76 5 -95 24 -124 19 -27 22 -42 17 -77 -4 -30 0 -53 11 -76 9 -17 16 -53 16 -79 0 -44 3 -49 44 -78 24 -18 51 -32 59 -32 9 0 20 25 32 75 15 64 16 83 5 137 -6 35 -16 88 -21 118 -6 30 -17 62 -24 71 -8 8 -15 28 -15 43 0 15 -5 37 -11 48 -7 12 -15 64 -19 115 -5 70 -12 101 -26 120 -23 31 -39 39 -49 24z', 'M3472 6730 c-35 -16 -43 -24 -40 -42 3 -20 10 -23 54 -26 54 -3 77 15 49 38 -7 6 -11 20 -8 30 7 25 -1 25 -55 0z', 'M3580 6714 c-19 -48 -8 -57 31 -26 14 12 20 25 16 35 -10 25 -36 20 -47 -9z', 'M3365 6627 c-4 -8 -5 -34 -3 -58 3 -38 6 -44 28 -47 14 -2 39 -17 55 -33 61 -58 133 -47 120 18 -4 21 -1 40 10 56 25 38 11 54 -53 60 -31 3 -78 9 -104 13 -38 5 -49 3 -53 -9z', 'M3533 6256 c-45 -14 -59 -45 -45 -95 16 -53 15 -72 -8 -101 -25 -32 -25 -51 1 -101 13 -27 32 -45 54 -55 46 -19 94 -18 102 2 3 8 17 20 30 25 20 7 28 4 56 -27 54 -62 60 -78 51 -158 -9 -85 -8 -99 17 -153 10 -23 19 -49 19 -57 0 -8 11 -28 25 -44 31 -37 33 -72 5 -72 -24 0 -25 -18 -6 -64 10 -25 11 -37 3 -45 -15 -15 -2 -24 39 -25 22 -1 45 -10 59 -24 16 -16 24 -19 27 -10 3 7 13 13 23 13 11 0 24 9 30 21 5 11 15 19 22 17 7 -3 22 18 34 46 23 54 33 62 43 34 6 -14 8 -14 19 -1 6 9 29 19 49 22 31 6 37 4 43 -14 5 -14 12 -19 25 -15 11 3 20 0 24 -10 7 -18 36 -20 36 -2 0 6 14 24 32 39 l33 27 -32 13 c-26 10 -33 18 -33 40 0 16 5 37 12 47 9 14 8 26 -2 50 -7 17 -16 31 -21 31 -5 0 -23 13 -42 30 -19 16 -46 34 -61 40 -21 8 -26 15 -21 29 6 21 -18 41 -52 41 -10 1 -32 20 -49 43 -23 31 -44 47 -84 61 l-52 19 5 47 c5 42 3 49 -14 53 -11 3 -23 -1 -28 -11 -8 -14 -14 -13 -59 8 -52 25 -68 50 -52 80 15 29 0 59 -34 68 -23 6 -32 15 -36 35 -4 19 -21 36 -65 63 -84 50 -86 51 -122 40z', 'M4816 5968 c-9 -12 -16 -34 -16 -48 0 -50 -34 -70 -116 -70 -66 0 -164 -40 -164 -67 0 -48 113 -153 165 -153 14 0 48 -11 75 -25 49 -25 104 -33 114 -16 3 4 27 11 53 14 117 15 141 34 129 101 -5 24 -15 37 -40 48 -42 21 -92 93 -101 149 -8 44 -43 89 -69 89 -8 0 -22 -10 -30 -22z', 'M4939 5455 c-25 -57 -22 -79 13 -83 23 -3 28 2 37 33 10 38 -2 95 -21 95 -5 0 -18 -20 -29 -45z', 'M5057 5434 c-12 -12 15 -61 44 -78 30 -18 79 -16 79 4 0 12 -90 79 -106 80 -6 0 -13 -3 -17 -6z', 'M4860 5311 c-5 -11 -10 -31 -10 -45 0 -14 -11 -41 -24 -61 -24 -35 -24 -37 -10 -88 9 -31 27 -63 45 -79 19 -18 29 -38 29 -57 0 -25 6 -31 46 -46 50 -19 48 -19 134 30 39 23 77 19 96 -10 9 -14 26 -25 37 -25 11 0 28 -6 36 -14 9 -7 32 -16 51 -19 33 -5 37 -2 49 25 13 29 12 32 -12 50 -17 12 -27 29 -27 44 0 17 -6 24 -20 24 -11 0 -20 -4 -20 -10 0 -12 -37 -13 -44 -1 -3 5 -21 12 -41 15 -28 6 -40 16 -67 61 -29 48 -39 57 -88 73 -54 18 -55 19 -58 60 -3 36 -9 46 -40 67 -44 30 -48 30 -62 6z', 'M5406 4828 c-4 -20 -1 -39 9 -54 l15 -23 25 25 c37 37 42 70 13 78 -44 11 -55 7 -62 -26z', 'M5143 4630 c-22 -9 -39 -43 -29 -59 8 -13 65 -19 69 -7 2 5 21 15 43 21 28 8 39 16 39 30 0 17 -8 20 -50 22 -27 1 -60 -2 -72 -7z', 'M5107 4103 c-13 -12 -7 -62 9 -77 18 -19 61 -21 67 -3 4 12 -49 87 -62 87 -4 0 -11 -3 -14 -7z', 'M5282 4058 c-19 -19 -15 -58 6 -58 28 0 55 24 50 46 -4 22 -38 30 -56 12z', 'M4975 3950 c-19 -37 -19 -40 4 -40 21 0 35 15 45 48 11 35 -30 29 -49 -8z', 'M5037 3909 c-6 -10 -20 -19 -29 -19 -13 0 -18 -8 -18 -30 0 -21 -8 -36 -29 -51 -18 -13 -31 -33 -34 -54 -3 -19 -16 -47 -28 -64 -18 -25 -20 -33 -9 -46 15 -18 41 -20 57 -4 14 14 81 29 99 22 26 -10 16 -41 -13 -45 -20 -2 -29 -9 -31 -26 -5 -32 24 -39 52 -13 12 11 28 21 35 21 15 0 55 -39 64 -63 3 -8 22 -20 41 -27 29 -9 46 -9 90 4 30 9 77 16 105 16 l51 0 0 50 c0 39 4 53 20 62 30 19 26 56 -7 64 -56 12 -62 15 -69 37 -4 12 -15 34 -25 48 -10 14 -21 37 -24 50 -5 19 -22 32 -63 52 -51 23 -62 25 -100 15 -35 -9 -51 -8 -83 5 -38 15 -40 15 -52 -4z', 'M4920 3847 c0 -30 10 -40 27 -26 20 18 16 49 -7 49 -14 0 -20 -7 -20 -23z', 'M4837 3764 c-9 -10 12 -44 27 -44 22 0 37 25 24 38 -13 13 -41 16 -51 6z', 'M6046 2396 c-41 -10 -54 -19 -74 -51 -39 -62 -44 -108 -16 -147 29 -39 31 -74 4 -90 -11 -7 -20 -24 -20 -38 0 -28 54 -100 74 -100 7 0 48 -18 91 -40 43 -22 83 -40 90 -40 7 0 23 -8 36 -18 20 -17 25 -18 53 -4 39 19 86 62 86 79 0 27 -54 149 -76 172 -13 14 -47 32 -76 41 -33 10 -53 21 -53 30 0 12 15 15 73 13 82 -2 93 10 41 48 -25 18 -35 20 -55 11 -20 -10 -25 -8 -34 9 -6 11 -8 33 -5 49 9 43 -2 67 -37 79 -36 13 -36 13 -102 -3z', 'M6785 1460 c-4 -6 -3 -24 0 -41 10 -44 39 -35 43 14 3 31 0 37 -17 37 -11 0 -23 -5 -26 -10z', 'M6400 1351 c-8 -5 -32 -11 -52 -15 -36 -7 -37 -8 -35 -49 0 -23 -7 -59 -16 -79 l-17 -37 45 -67 c25 -37 45 -74 45 -83 0 -23 14 -41 41 -54 13 -7 26 -23 29 -37 5 -21 13 -26 45 -28 46 -4 90 15 75 33 -7 8 -5 22 5 41 8 16 15 34 15 41 0 6 14 23 31 36 34 27 35 57 1 57 -11 0 -25 14 -35 35 -9 20 -25 38 -34 41 -78 25 -76 23 -70 84 5 48 3 60 -12 74 -19 18 -38 20 -61 7z', 'M7587 1056 c-9 -22 17 -37 52 -30 21 5 31 12 31 25 0 15 -8 19 -39 19 -24 0 -41 -5 -44 -14z', 'M7027 181 c4 -16 -1 -20 -29 -23 -28 -3 -33 -7 -36 -33 -3 -19 2 -33 13 -41 10 -7 20 -28 24 -46 6 -28 11 -32 32 -30 13 2 53 6 89 10 l64 7 -3 55 c-3 61 -21 90 -58 90 -13 0 -40 7 -60 15 -44 19 -42 19 -36 -4z']
			),
			'location' => DB::raw('POINT(-15.376706, 166.959158)'),
			'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
			'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
		]);
	}
}