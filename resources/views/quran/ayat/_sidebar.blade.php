@if (count($sura->ayats))

<a href="#">
@foreach($sura->ayats as $key => $ayat)
    @if($key === 0 && $ayat->slug != request()->route('slug') )
            Аят
        @elseif ($ayat->slug == request()->route('slug') )
            {{ $ayat->number }}
        @endif
@endforeach
</a>

@foreach($sura->ayats as $key => $ayat)
    @if($key === 0 && $ayat->slug != request()->route('slug') )
        <i class="fa fa-angle-down "></i>
    @endif

    @if($key === 0 && $ayat->slug == request()->route('slug') )
        <i class="fa fa-angle-down "></i>

    @endif
@endforeach
@endif