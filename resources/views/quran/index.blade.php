@extends('welcome')


@section('content')
    @foreach($suras as $sura)
        <li>{{ $sura->number }}. {{ $sura->name }}</li>
    @endforeach
@endsection