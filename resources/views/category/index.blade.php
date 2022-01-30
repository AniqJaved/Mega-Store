@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            {!! Form::open(['method'=>'POST','action'=>'CategoryController@store']) !!}

            <div class="form-group">
                {!! Form::label('name','Name:') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('Create Category',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
        <div class="row">
            @if($categories)
                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Created date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td><a href="{{route('category.edit',$category->id)}}">{{$category->name}}</a></td>
                            <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'no date'}}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
