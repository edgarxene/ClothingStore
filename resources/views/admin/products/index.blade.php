@extends('layoutAdmin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading"> Panel de Administracion - Productos</div>
                    <div class="panel-body">
                        <div id='admin'>
                            <p>Aquí tu puedes ver, borrar, y crear nuevas categorias.</p>
                 
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
                                    
                                    
                                   
                        
                        </div> 
                </div>
            </div>
        </div>
    </div>

@endsection