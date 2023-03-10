@extends('layout')
@section('body-content')
<table class="table table-bordered">
    <thead>
      <tr>
        <th style="width: 10px">#</th>
        <th>title</th>
        <th>short_description</th>
        <th>content</th>
        <th>image</th>
        <th>user</th>
        <th>category</th>
        <th>update</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
        @forelse($articles as $article)

      <tr>
        <td>{{$article->id}}</td>
        <td>{{$article->title}}</td>
        <td>{{$article->short_description}}</td>
        <td>{{$article->content}}</td>
        <td><img  width ="100px" height="100px" src="{{asset("uploads/$article->cover")}}" alt="" srcset=""></td>
        <td>{{$article->user->name}}</td>
        <td>{{$article->category->name}}</td>
        <td><a class="btn btn-info" href="{{url("article/edit/$article->id")}}">update</a></td>
        <td><a class="btn btn-danger" href="{{url("article/delete/$article->id")}}">delete</a></td>
      </tr>

      @empty

      <tr>
        <td class="text-center" colspan="4">not found data</td>
      </tr>
      @endforelse

    </tbody>
  </table>
@endsection
