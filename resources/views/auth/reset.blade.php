@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('form.reset.title') }}</div>
                 <div class="panel-body">
                    {!! Form::open(['route' => 'password/postReset', 'class' => 'form']) !!}
                        {!! Form::hidden('token', $token) !!}
                        <div class="form-group">
                            <label>{{ trans('form.label.email') }}</label>
                            {!! Form::email('email', old('email'), ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>{{ trans('form.label.password') }}</label>
                            {!! Form::password('password', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>{{ trans('form.label.password_confirmation') }}</label>
                            {!! Form::password('password_confirmation', ['class'=> 'form-control']) !!}
                        </div>
                        {!! Form::submit(trans('form.reset.submit'), ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

