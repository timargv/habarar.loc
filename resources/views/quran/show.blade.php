@extends('welcome')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $title }}

            </h1>
        </section>

        <div class="text_original">
{{--            {{ $ayats->text }}--}}
        </div>

        <div class="text">
{{--            {{ $ayats->text }}--}}
        </div>

        <div class="text_transcription_ru">
{{--            {{ $ayats->text }}--}}
        </div>

        @foreach($ayats as $ayat)
            {{ $ayat->number }}
        @endforeach

@endsection


@section('ayatmen')
    @foreach($ayats as $ayat)
                <a class="dropdown-item {{{ (Request::is('/quran/ayat/{id}') ? 'treeview active' : 'treeview') }}}"
                   href="{{ route('quran.ayat.show', $ayat->id)}}">  {{ $ayat->number }} </a>
    @endforeach
@endsection