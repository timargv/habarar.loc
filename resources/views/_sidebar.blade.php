@yield('suras')

<ul class="float-left ml-4 list-suras">
    <li data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
        <a href="#"> @yield('suraName')</a>
    </li>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
        @foreach($suras as $sura)
            <a class="dropdown-item treeview
                    @if($sura->slug == request()->route('slug') )
                        active
            @endif

            @yield('activeSura')
                "    href="{{ route('quran.show', $sura->slug) }}"> {{ $sura->name_transcription_ru }} </a>
        @endforeach
    </div>
</ul>



<ul class="float-left ml-4 list-ayats">
    <li data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
        {{--@include('quran.ayat._sidebar')--}}
        <a href="#">@yield('ayatNumber')</a>
    </li>
    @yield('ayats')
</ul>
