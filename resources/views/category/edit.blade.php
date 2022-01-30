@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {!! Form::model($category,['method'=>'PATCH','action'=>['CategoryController@update',$category->id]]) !!}
            <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('Create Category',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
@endsection
