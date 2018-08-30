@extends('welcome')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{--                {{ $title }}--}}

            </h1>
        </section>

        <div class="text_original">
        </div>

        <div class="text">
            {{ $ayat->text }}
        </div>

        <div class="text_transcription_ru">
        </div>



        @endsection


        @section('ayatmen')

            @foreach($sura->ayats as $ayat)

                <a class="dropdown-item treeview @if($ayat->slug == request()->route('slug') ) active @endif"
                   href="{{ route('quran.ayat.show', $ayat->slug)}}">  {{ $ayat->number }} </a>
            @endforeach

        @endsection
