@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить суру
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">

                <div class="box-header">

                </div>
                {{ Form::open(['route' => ['kuran.update', $sura->id], 'method' => 'put']) }}

                <div class=" box-body ">

                    <div class="">

                        <div class="">

                            @include('admin.errors')
                            <div class="clearfix row">
                                <div class="col-xs-6">
                                    <label>Название</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="name" type="text" class="form-control" placeholder="" value="{{ $sura->name }}"></div>
                                </div>
                            </div>

                            <br>

                            <div class="clearfix row">
                                <div class="col-xs-6">
                                    <label>Название на Араб.</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="name_original" type="text" class="form-control text-right" placeholder="" value="{{ $sura->name_original }}"></div>
                                </div>
                            </div>

                            <br>

                            <div class="clearfix row">
                                <div class="col-xs-6">
                                    <label>Название Транскрипция RU.</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="name_transcription_ru" type="text" class="form-control " placeholder="" value="{{$sura->name_transcription_ru }}"></div>
                                </div>
                            </div>

                            <br>

                            <div class="clearfix row">
                                <div class="col-xs-6">
                                    <label>Номер Суры</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="number" type="text" class="form-control" placeholder="" value="{{ $sura->number }}"></div>
                                </div>
                            </div>

                            <br>


                        </div>
                    </div>

                </div>
                <div class="box-footer clearfix">
                    <a href="{{ route('kuran.index') }}"  class="btn btn-default" >Закрыть</a>
                    <button  class="btn btn-primary">Сохранить</button>
                </div>
                {{ Form::close() }}

            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection