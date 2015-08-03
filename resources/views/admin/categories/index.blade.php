@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Categories Admin Panel</div>
                    <div class="panel-body">
                        <div id='admin'>
                            <p>Here you can view, delete, and create new categories.</p>
                            <h2>Categories</h2>
                            <ul>
                                @foreach($categories as $category)
                                    <li>
                                        {{ $category->name}} 
                                        {{  Form::open(array('url'=>'admin/index','class'=>'form-inline'))}}
                                        {{  Form::hidden('id', $category->id)}}
                                        {{  Form::submit('delete')}}
                                        {{  Form::close()}}
                                    </li>
                                
                            </ul>
                        </div>
                        <h2>Create New Category</h2><hr/>

                        @if($errors->has())
                        <div id='form-errors'>
                            <p>The following errors have ocurred: </p>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        {{  Form::open(array('url'=>'admin/categories/create'))}}
                        <p>
                            {{  Form::label('name') }}
                            {{  Form::text('name') }}
                        </p>
                        {{  Form::submit('Create category', array('class'=>'secondary-cart-btn')) }}
                        {{  Form::close()}}
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection