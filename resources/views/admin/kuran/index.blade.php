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
                        <a class="btn btn-primary btn-sm" href="{{ route('kuran.create') }}"><i class="fa fa-plus"></i> &nbsp; Добавить</a>
                    </div>

                    <p></p>
                </div>
                <div class=" box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <thead>

                        </thead>
                        <tbody>
                        <tr>
                            <th style="width: 50px;padding-left: 15px;">ID</th>
                            <th style="width: 150px;">Сура №</th>
                            <th style="width: 40%">Название</th>
                            <th style="width: 40%">Название на Араб.</th>

                            <th></th>
                        </tr>
                        @foreach($suras as $sura)
                            <tr>
                                <td style="padding-left: 15px;">{{ $sura->id }}</td>
                                <td>{{ $sura->number }}</td>

                                <td><a href="{{ route('kuran.show', $sura->slug)}}"> {{ $sura->name }} </a> </td>
                                <td class="text-right">{{ $sura->name_original }}</td>

                                <td width="150px">
                                    <div class="form-inline">
                                        <a class="form-inline" href="{{ route('kuran.edit', $sura->id) }}">ред.</a>

                                        {{ Form::open(['route' => ['kuran.destroy', $sura->id], 'method' => 'delete', 'class' => 'form-group']) }}
                                        <button onclick="return confirm('Удалить?')" class="btn btn-link btn-xs">удалить</button>
                                        {{ Form::close() }}
                                    </div>
                                </td>
                            </tr>


                        @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="box-footer clearfix">
                    {{$suras->links()}}
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection