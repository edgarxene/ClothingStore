@extends('layoutAdmin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"> Panel de Administracion - Productos</div>
                    <div class="panel-body">
                        <div id='admin'>
                            <p>Aquí tu puedes ver, borrar, y crear nuevos productos.</p>
                            <div class="form-group">
                                <h2>Productos</h2><hr/>
                                @include('flash::message')<!--Notificaciones Flash Laracast-->
                                @include('partials.layout.errors')

                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-striped">
                                        <th>Titulo</th>
                                        <th>Descripción</th>
                                        <th>Precio</th>
                                        <th>Disponible</th>
                                        <th>Imagen</th>
                                            
                                        
                                                @foreach($products as $product)
                                                <tr>
                                                    <td class="col-md-1 col-md-offset-4">
                                                        <div class='titulo'>
                                                            {!! Form::label($product->titulo) !!}
                                                        </div>
                                                    </td>
                                                    
                                                    <td class="col-md-2 col-md-offset-4">
                                                        <div class="description">
                                                            {!! Form::label($product->descripcion) !!}
                                                        </div>
                                                    </td>
                                                    <td class="col-md-1 col-md-offset-4">
                                                        {!! Form::label($product->precio) !!}
                                                    <td class="col-md-1 col-md-offset-4">                                            
                                                        {!! Form::label($product->disponible) !!}
                                                    </td>
                                                    <td class="col-md-1 col-md-offset-4">
                                                        {!! Form::image($product->imagen) !!}
                                                    </td>
                                                    <td class="col-md-1">
                                                         {!! link_to_route('admin.products.edit', $title = 'Editar', $parameters = $product->id, $attributes = ['class' => 'btn btn-primary btn-xs']) !!}                                        
                                                    </td>
                                                    <td class="col-md-1">
                                                        {!! Form::open(['route'=>['admin.products.destroy', $product->id],'method'=>'DELETE']) !!}                  
                                                        {!! Form::submit('Borrar', array('class'=>'btn btn-danger btn-xs')) !!}
                                                        <!-- <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-remove"></i></button> -->
                                                        {!! Form::close() !!} 
                                                     </td>   
                                                    
                                                </tr>
                                                @endforeach
                                        </table>

                                        {!!$products->render()!!}
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

                                    <h2>Crear nuevo Producto</h2><hr/>
                                    
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                            {!! Form::open(['route'=>'admin.products.store', 'method'=>'POST']) !!}  
                                            {!!  Form::label('Nombre de la Categoria:') !!}
                                            </div>
                                            <div class="col-md-7">
                                            
                                            @include('admin.products.forms.formProduct') <!--Se utilizan foms templates-->
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