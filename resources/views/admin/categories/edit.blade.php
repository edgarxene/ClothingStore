@extends('layoutAdmin')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading"> Panel de Administracion - Categorias</div>
                    <div class="panel-body">
                        <div id='admin'>
                            <p>Aqui tu puedes editar la categoria seleccionada.</p>
                            <div class="form-group">
                                
                        <h2>Editar Categoria</h2><hr/>                 

                         {!! Form::model($category,['route'=>['admin.categories.update', $category->id],'method'=>'PUT']) !!}
                                                
                        <p>
                            @include('admin.categories.forms.formCategory')
                        </p>
                        {!!  Form::submit('Guardar', array('class'=>'btn btn-primary')) !!}
                        {!! link_to('admin/categories', $title = 'Canelar', array('class'=>'btn btn-danger')) !!}
                        {!! Form::close() !!}

                         
                        </div> 
                </div>
            </div>
        </div>
    </div>
@endsection