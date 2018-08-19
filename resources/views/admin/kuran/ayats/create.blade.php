@extends('admin.layout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Список Контактов
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="box">

                <div class="box-header">

                </div>
                {{ Form::open(['route' => 'kuran.store']) }}

                <div class=" box-body ">

                    <div class="">

                        <div class="">

                            @include('admin.errors')
                            <div class="clearfix row">
                                <div class="col-xs-6">
                                    <label>Название</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="name" type="text" class="form-control" placeholder="" value="{{ old( 'text' ) }}"></div>
                                </div>
                            </div>

                            <br>

                            <div class="clearfix row">
                                <div class="col-xs-6">
                                    <label>Название на Араб.</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="name_original" type="text" class="form-control" placeholder="" value="{{ old( 'text_original' ) }}"></div>
                                </div>
                            </div>

                            <br>

                            <div class="clearfix row">
                                <div class="col-xs-6">
                                    <label>Номер Суры</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input name="number" type="text" class="form-control" placeholder="" value="{{ old( 'number' ) }}"></div>
                                </div>
                            </div>

                            <br>

                            <label>Сура</label>
                            <div class="input-group ">
                                <span class="input-group-addon"><i class="fa fa-building-o"></i></span>


                                {{Form::select('sura_id',
                                    $suras,
                                    null,
                                    ['class' => 'form-control select2', 'style' => 'width: 100%'])
                                  }}


                            </div>

                        </div>
                    </div>

                </div>
                <div class="box-footer clearfix">
                    <a  class="btn btn-default" href="{{ route('kuran.index') }}">Закрыть</a>
                    <button  class="btn btn-primary">Сохранить</button>
                </div>
                {{ Form::close() }}

            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection