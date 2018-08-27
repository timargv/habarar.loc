@extends('welcome')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">

        </section>

        <div class="text_original">
            {{$ayat->text }}
        </div>

        <div class="text">
            {{$ayat->text }}
        </div>

        <div class="text_transcription_ru">
            {{$ayat->text }}
        </div>


@endsection
        @section('ayatmen')
                @foreach($ayats as $ayat)
                    <a class="dropdown-item {{{ (Request::is('/quran/ayat/{id}') ? 'treeview active' : 'treeview') }}}"
                       href="{{ route('quran.ayat.show', $ayat->id)}}">  {{ $ayat->number }} </a>
        @endforeach
    @endsection