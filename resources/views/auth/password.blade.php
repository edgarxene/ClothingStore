@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('form.email.title') }}</div>
                 <div class="panel-body">
                    {!! Form::open(['route' => 'password/email', 'class' => 'form']) !!}
                        <div class="form-group">
                            <label>{{ trans('form.label.email') }}</label>
                            {!! Form::email('email', old('email'), ['class'=> 'form-control']) !!}
                        </div>
                        {!! Form::submit(trans('form.email.submit') ,['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection