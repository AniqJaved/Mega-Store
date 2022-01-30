@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {!! Form::model($products,['method'=>'PATCH','action'=>['ProductController@update',$products->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('price','Price:') !!}
                {!! Form::text('price',null,['class'=>'form-control']) !!}
            </div>
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="image">Upolad</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                {!! Form::label('category_id','Category:') !!}
                {!! Form::select('category_id',[''=>'Choose Categories'] + $categories ,null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description','Description:') !!}
                {!! Form::textarea('description',null,['class'=>'form-control','rows'=>3]) !!}
            </div>



    {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
        </div>
    </div>
@endsection
