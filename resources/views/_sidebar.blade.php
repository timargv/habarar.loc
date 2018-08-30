

@foreach($suras as $sura)

        <a class="dropdown-item treeview
                @if($sura->slug == request()->route('slug') )
                        active
                @endif

                @foreach ($sura->ayats as $ayat)
                @if($ayat->slug == request()->route('slug') )
                        active
                @endif
                @endforeach"

           href="{{ route('quran.show', $sura->slug)}}"> {{ $sura->name }} </a>
@endforeach

