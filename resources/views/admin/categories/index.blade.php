@extends('layoutAdmin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading"> Panel de Administracion - Categorias</div>
                    <div class="panel-body">
                        <div id='admin'>
                            <p>Aquí tu puedes ver, borrar, y crear nuevas categorias.</p>
                            <div class="form-group">
                                <h2>Categorias</h2><hr/>
                                @include('flash::message')<!--Notificaciones Flash Laracast-->

                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-striped">
                                            @foreach($categories as $category)
                                            <tr>
                                                <td class="col-md-1 col-md-offset-4">
                                                    <!-- <i class="glyphicon glyphicon-pencil"></i> -->
                                                    {!! Form::label($category->name) !!}
                                                </td>
                                                <td class="col-md-1">
                                                     {!! link_to_route('admin.categories.edit', $title = 'Editar', $parameters = $category->id, $attributes = ['class' => 'btn btn-primary btn-xs']) !!}                                        
                                                </td>
                                                <td class="col-md-1">
                                                    {!! Form::open(['route'=>['admin.categories.destroy', $category->id],'method'=>'DELETE']) !!}                  
                                                    {!! Form::submit('Borrar', array('class'=>'btn btn-danger btn-xs')) !!}
                                                    <!-- <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i></button> -->
                                                    {!! Form::close() !!} 
                                                 </td>   
                                                
                                            </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

            
                                    
                                    <!-- @if($errors->has())
                                    <div id='form-errors'>
                                        <p>The following errors have ocurred: </p>
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{!!$error!!}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif -->

                                    <h2>Crear nueva Categoria</h2><hr/>
                                    
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                            {!! Form::open(['route'=>'admin.categories.store', 'method'=>'POST']) !!}  
                                            {!!  Form::label('Nombre de la Categoria:') !!}
                                            </div>
                                            <div class="col-md-7">
                                            {!!  Form::text('name') !!}                                
                                            </div>
                                            <div class="col-md-1">                                
                                            {!!  Form::submit('Crear', array('class'=>'btn btn-success btn-xs')) !!}
                                            {!! Form::close() !!}
                                            </div>
                                    </div>
                                </div>
                        
                        </div> 
                </div>
            </div>
        </div>
    </div>

@endsection