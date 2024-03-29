@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Owner</th>
                <th>Category</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td><img style="height: 50px; width: 50px;" src="{{$post->photo ? $post->photo->file : 'https://via.placeholder.com/50'}}" alt=""></td>
                <td>{{$post->user->name}}</td>
                <td>{{$post->category ? $post->category->name : 'Un-categorized'}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
            </tr>
            @endforeach
          @endif
        </tbody>
      </table>
@endsection