@extends('welcome')


@section('suras')
    <ul class="float-left ml-4 list-suras">
        <li data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-reference="parent">
            <a href="#">Сура <i class="fa fa-angle-down "></i></a>
        </li>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
            @foreach($suras as $sura)
                <a class="dropdown-item treeview" href="{{ route('quran.show', $sura->slug) }}"> {{ $sura->name }} </a>
            @endforeach
            @yield('suras')
        </div>
    </ul>
@endsection