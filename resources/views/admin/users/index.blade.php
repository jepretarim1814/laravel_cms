@extends('layouts.admin')

@section('content')
    @if(Session::has('deleted_user'))
        <div class="alert alert-success">{{ session('deleted_user') }}</div>
    @endif
    <h1>Users</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>
                    <img style="height: 50px; width: 50px;" src="{{$user->photo ? $user->photo->file : 'https://via.placeholder.com/50'}}" alt=""></td>
                <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role->name}}</td>
                <td>{{$user->is_active ? 'Active' : 'Inactive'}}</td>
                <td>{{$user->created_at}}</td>
                <td>{{$user->updated_at}}</td>
            </tr>
            @endforeach
        @endif
        </tbody>
      </table>
@endsection