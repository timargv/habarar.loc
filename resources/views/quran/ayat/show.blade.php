@extends('welcome')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
            </h1>
        </section>

        <div class="text">
            {{ $sura->number }}:{{ $ayat->number }}. {{ $ayat->text }}
        </div>

        <div class="text_original">
        </div>


        <div class="text_transcription_ru">
        </div>
    </div>
@endsection
@section('ayatNumber')
    {{ $sura->number }}:{{ $ayat->number }} <i class="fa fa-angle-down "></i>
@endsection
@section('suraName')
    {{ $sura->name_transcription_ru }}  <i class="fa fa-angle-down "></i>
@stop
@section('ayats')
    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
    @foreach($ayats as $ayat)
            <a class="dropdown-item treeview @if($ayat->slug == request()->route('slug'))
                    active
                @endif
                    "  href="{{ route('quran.ayat.show', $ayat->slug) }}"> {{ $ayat->number }} </a>

    @endforeach
    </div>
@endsection
