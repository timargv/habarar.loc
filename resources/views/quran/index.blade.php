@extends('welcome')


@section('content')
    @foreach($ayats as $ayat)
        <li>{{ $ayat->number }}. {{ $ayat->text }}</li>
    @endforeach
@endsection