@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $title }} - {{ $sura->name }}
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">

                <div class="box-header">

                    <div class="">
                        <a class="btn btn-primary btn-sm" href="{{ route('kuran.create') }}"><i class="fa fa-plus"></i> &nbsp; Добавить Суру</a>
                        <a class="btn btn-warning btn-sm" href="{{ route('ayats.create') }}"><i class="fa fa-plus"></i> &nbsp; Добавить Аят</a>
                        <a class="btn btn-danger btn-sm pull-right" href="{{ route('kuran.index') }}"><i class="fa fa-arrow-left"></i> Суры</a>
                    </div>

                    <p></p>
                </div>
                @if(count($ayats))

                <div class=" box-body table-responsive no-padding">

                    <table class="table table-hover">
                        <thead>

                        </thead>
                        <tbody>
                        <tr>
                            <th style="width: 65px;padding-left: 15px;">ID</th>
                            <th width="45%">Название</th>
                            <th width="45%">Название на Араб.</th>
                            {{--<th>Номер Суры</th>--}}

                            <th></th>
                        </tr>
                        @foreach($ayats as $ayat)
                            <tr>
                                <td style="padding-left: 15px;">{{ $ayat->id }}</td>
                                <td>{{ $ayat->text }}</td>
                                <td class="text-right">{{ $ayat->text_original }}</td>
{{--                                <td>{{ $ayat->getSuraName() }}</td>--}}
                                <td width="80px">
                                    <div class="form-inline">
                                        <a class="form-inline" style="position: relative;top: 4px; " href="{{ route('ayats.edit', $ayat->id) }}"><i class="fa fa-pencil-square-o"></i></a>

                                        {{ Form::open(['route' => ['ayats.destroy', $ayat->id], 'method' => 'delete', 'class' => 'form-group']) }}
                                        <button onclick="return confirm('Удалить?')" class="btn btn-link btn-xs"><i class="fa fa-trash-o"></i></button>
                                        {{ Form::close() }}
                                    </div>
                                </td>

                            </tr>
                        @endforeach


                        </tbody>
                    </table>

                </div>
                <div class="box-footer clearfix">
                    {{$ayats->links()}}
                </div>
                @else
                    <h1 class="text-center">Пусто</h1>
                    <br>
                    <br>
                @endif
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection