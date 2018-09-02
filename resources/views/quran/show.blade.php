@extends('welcome')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $sura->title }}
            </h1>
        </section>

        @foreach($sura->ayats as $key => $ayat)
            @if ($key == 0)
                <div class="text_original">
                    {{ $sura->number }}:{{ $ayat->number }}. {{ $ayat->text }}
                </div>
            @endif
        @endforeach
        <div class="text">
        </div>

        <div class="text_transcription_ru">
        </div>

@endsection
        @section('suraName')
            {{ $sura->name_transcription_ru }} <i class="fa fa-angle-down "></i>
        @stop
        @section('ayatNumber')
            @if (count($ayats) > 0)
                Аят <i class="fa fa-angle-down "></i>
            @endif
        @stop
@section('ayats')

    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
    @foreach($ayats as $ayat)
            <a class="dropdown-item treeview" href="{{ route('quran.ayat.show', $ayat->slug) }}"> {{ $ayat->number }} </a>
    @endforeach
    </div>
@endsection