@extends('layout')
@section('body-content')
    <form action="{{url('article/update')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$article->id}}">
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" value="{{$article->title}}" name="title" id="title" value="{{$article->title}}">
        </div>
        <div class="form-group">
            <label for="short_description">short_description</label>
            <input type="text" class="form-control" value="{{$article->short_description}}" name="short_description" id="short_description" placeholder="{{$article->short_description}}">
        </div>
        <div class="form-group">
            <label for="title">content</label>
            <input type="text" class="form-control" value="{{$article->content}}" name="content" id="content" value="{{$article->content}}">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success col-12" value="save">
        </div>
    </form>
@endsection
