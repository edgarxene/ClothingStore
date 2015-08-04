@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Categories Admin Panel</div>
                    <div class="panel-body">
                        <div id='admin'>
                            {!!Form::open()!!}
                                <div class="form-group">
                                    {!!Form::label('Categoria: ')!!}
                                    {!!Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre de la categoria'])!!}
                                </div>
                                <div class="form-group"></div>
                                <div class="form-group"></div>
                            {!!Form::close()!!}
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection