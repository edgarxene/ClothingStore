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
                                        {{ $category->name}} -
                                        {{ Form::open(array('url' => 'admin/index', 'class'=>'form-inline')) }}
                                        {{ Form::hidden('id',$category->id) }}
                                        {{ Form::submit('delete') }}
                                        {{ Form::close() }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection