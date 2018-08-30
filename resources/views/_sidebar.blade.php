

@foreach($suras as $sura)
        <a class="dropdown-item {{{ (Request::is('/quran/{id}') ? 'treeview active' : 'treeview') }}}"
           href="{{ route('quran.show', $sura->id)}}"> {{ $sura->name }} </a>
@endforeach

