<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Where in the World</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Stylesheets -->
        <link href="{{ asset('/css/normalize.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('/js/guess.js') }}"></script>
    </head>
    <body class="bg-dark">
            {{-- Content --}}
            <div class="max-w-6xl mx-auto justify-center">
                {{-- Country --}}
                <div class="flex justify-center">
                    <div class="mt-8 p-6 border-silver border-1 border-round text-center ctry">
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 1024.000000 1024.000000" preserveAspectRatio="xMidYMid meet">
                            <metadata>Created by potrace 1.10, written by Peter Selinger 2001-2011</metadata>
                            <g transform="translate(0.000000,1024.000000) scale(0.100000,-0.100000)" fill="#ffffff" stroke="none">
                                @foreach ($paths as $path)
                                    <path d="{{ $path }}"/>
                                @endforeach()
                            </g>
                        </svg>
                    </div>
                    {{-- Title --}}
                    <div class="mt-12 ml-12 p-3">
                        <h2 class="text-light-gray text-alt">Where in the World</h2>
                        <p class="text-light-gray text-alt" onclick="openStats()">Stats (WIP)</p>
                        <button type="button" onclick="toggleUnits()" class="p-2 border-light-silver border-1 border-round text-center">Toggle Units</button>
                    </div>
                    <!-- TODO: make a box with a map of the world, color it in for each guess? -->
                </div>
                {{-- Guess Boxes --}}
                <div id="guesses" class="mt-8 p-3 bg-dark-blue border-silver border-1 border-round gc">
                    <x-guesses :data="$guesses"/>
                </div>
                <div class="flex justify-center mt-4 p-1 items-center">
                    {{-- Input Box --}}
                    <div>
                        <input type="text" id="guess" name="guess" list="countries" class="p-2 border-light-silver border-1 border-round">
                        <datalist id="countries">
                            @foreach ($countries as $country)
                                <option value="{{$country->name}}">
                            @endforeach()
                        </datalist>
                    </div>
                    {{-- Guess Button --}}
                    <div>
                        <button type="button" onclick="makeGuess()" class="ml-2 p-2 px-3 border-light-silver border-1 border-round text-center">Guess</button>
                    </div>
                </div>
            </div>
    </body>
    {{-- Pop-up Modal --}}
    <div id="message" style="visibility: hidden;">
        <x-message/>
    </div>
</html>
