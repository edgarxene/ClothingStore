@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading"> Panel de Administracion - Categorias</div>
                    <div class="panel-body">
                        <div id='admin'>
                            <p>Aquí tu puedes ver, borrar, y crear nuevas categorias.</p>
                            <div class="form-group">
                                <h2>Categorias</h2><hr/>
                                <ul>
                                    @foreach($categories as $category)
                                        <li>
                                            {!! $category->name !!}
                                          
                                            
                                           {!! Form::open(['route'=>'admin.categories.destroy', 'method'=>'POST']) !!}  
                                            
                                            {!! Form::hidden('id',$category->id) !!}
                                            {!!  Form::submit('delete', array('class'=>'btn btn-danger')) !!}
                                            {!! Form::close() !!}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <h2>Crear nueva Categoria</h2><hr/>

                        @if($errors->has())
                        <div id='form-errors'>
                            <p>The following errors have ocurred: </p>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{!!$error!!}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        {!! Form::open(['route'=>'admin.categories.store', 'method'=>'POST']) !!}  
                        <p>
                            {!!  Form::label('name') !!}
                            {!!  Form::text('name') !!}
                        </p>
                        {!!  Form::submit('Create category', array('class'=>'btn btn-primary')) !!}
                        {!! Form::close() !!}
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection