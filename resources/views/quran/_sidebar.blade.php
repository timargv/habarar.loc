


@if (count($suras))

    <a href="#">
        @foreach($suras as $key => $sura)
            @if($key < 1 && $sura->slug != request()->route('slug') )
                Сура
            @elseif ($sura->slug == request()->route('slug') )
                {{ $sura->name }}
            @endif
        @endforeach
    </a>

    @foreach($suras as $key => $sura)
        @if($key < 1 && $sura->slug != request()->route('slug') )
            <i class="fa fa-angle-down "></i>
        @endif

        @if($sura->slug == request()->route('slug') )
            <i class="fa fa-angle-down "></i>
        @endif
    @endforeach
@endif