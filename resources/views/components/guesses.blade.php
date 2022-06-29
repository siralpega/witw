<div>
@foreach ($guesses as $guess)
    <div class="flex mt-4 p-1 bg-dark-blue border-1 border-round {{ ($guess->distance == 0) ? 'border-green' : 'border-light-silver' }}">
        <div class="flex-1 text-center text-white">{{$guess->country->name}}</div>
        <div class="flex-1 text-center text-white dist">{{$guess->distance}}km</div>
        <div class="flex-1 text-center text-white">{{$guess->direction}}
            @if($guess->direction == 'N') ↑
            @elseif($guess->direction == 'S') ↓ 
            @elseif($guess->direction == 'E') →
            @elseif($guess->direction == 'W') ←
            @elseif($guess->direction == 'NW') ↖
            @elseif($guess->direction == 'NE') ↗
            @elseif($guess->direction == 'SW') ↙
            @elseif($guess->direction == 'SE') ↘
            @endif
        </div>
    </div>
@endforeach
@if (sizeof($guesses) < 5)
    @for ($i = sizeof($guesses); $i < 5; $i++)
        <div class="flex mt-4 p-1 bg-dark-blue border-silver border-1 border-round">
            <div class="flex-1 text-center text-white">&nbsp;</div>
            <div class="flex-1 text-center text-white">&nbsp;</div>
            <div class="flex-1 text-center text-white">&nbsp;
            </div>
        </div>
    @endfor
@endif
</div>