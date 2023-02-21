@extends('layout')
@section("title","create article")
@section('body-content')
    <form action="{{url('article/store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">title</label>
            <input type="text" class="form-control" name="title" id="name" placeholder="name">
        </div>
        <div class="form-group">
            <label for="short_description">short_description</label>
            <input type="text" class="form-control" name="short_description" id="name"  placeholder="short_description">
        </div>
        <div class="form-group">
            <label for="content">content</label>
            <input type="text" class="form-control" name="content" id="name" placeholder="content">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success col-12" value="save">
        </div>
    </form>

@endsection
