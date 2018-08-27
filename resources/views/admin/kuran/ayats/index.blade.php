@extends('admin.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ $title }}
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">

                <div class="box-header">

                    <div class="">
                        <a class="btn btn-primary btn-sm" href="{{ route('ayats.create') }}"><i class="fa fa-plus"></i> &nbsp; Добавить</a>
                    </div>

                    <p></p>
                </div>
                <div class=" box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>

                        </thead>
                        <tbody>
                        <tr>
                            <th style="width: 50px;padding-left: 15px;">С/А</th>
                            <th width="30%">Название</th>
                            <th width="30%">Название Транскрипция RU</th>
                            <th width="30%" class="text-right">Название на Араб.</th>
                            {{--<th style="width:  150px">Сура</th>--}}

                            <th width="50px">Ред/Удал</th>
                        </tr>
                        @foreach($ayats as $ayat)

                            <tr>
                                <td style="padding-left: 15px;">{{ $ayat->getSuraNumber() }}. {{ $ayat->number }}</td>
                                <td>{{ $ayat->text }}<br/>
                                    <small>Сура: <a href="{{ route('kuran.show', $ayat->sura->slug ) }}">{{ $ayat->getSuraName() }}</a></small>
                                </td>
                                <td>{{ $ayat->text_transcription_ru }}</td>

                                <td class="text-right">{{ $ayat->text_original }}</td>
                                {{--                                <td>{{ $ayat->getSuraName() }}</td>--}}

                                <td width="60px">
                                    <div class="form-inline">
                                        <a class="form-inline" style="position: relative;top: 4px; " href="{{ route('ayats.edit', $ayat->id) }}"><i class="fa fa-pencil-square-o"></i></a>

                                        {{ Form::open(['route' => ['ayats.destroy', $ayat->id], 'method' => 'delete', 'class' => 'form-group']) }}
                                        <button onclick="return confirm('Удалить?')" class="btn btn-link btn-xs" style="padding: 0; border: 0; outline: none !important; box-shadow: none !important;"><i class="fa fa-trash-o"></i></button>
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
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection