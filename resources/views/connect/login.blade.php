@extends('connect.master')

@section('title','Login')

@section('content')
<div class="box">
    {!! Form::open([ 'url' => '/login']) !!}
    <label for="email">Correo electrónico</label>
    <div class="input-group">        
        <div class="input-group-prepend">
            <div class="input-group-text"><i class="far fa-envelope-open"></i></div>
        </div>
        {!! Form::email('email',null, ['class' => 'form-control','placeholder' => 'Correo electrónico']) !!}
    </div>
    {!! Form::close() !!}
</div>
@stop

