@extends('layout')
@section("title","create article")
@section('body-content')
    <form action="{{url('article/store')}}" method="post" enctype="multipart/form-data">
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
            <br>
           <textarea name="content" id="" cols="20" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="file">add file </label>
           <input type="file" name="cover" id="file">
        </div>
      <div class="form-group">
        <select name="users" id="">
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="category"> add category </label>
        <select name="categories" id="">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
      </div>
     
        <div class="form-group">
            <input type="submit" class="btn btn-success col-12" value="save">
        </div>
    </form>

@endsection
