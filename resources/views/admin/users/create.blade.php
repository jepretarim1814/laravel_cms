@extends('layouts.admin')

@section('content')
    <h1>Create Users</h1>
    <div class="row">
        <div class="col-sm-12">
            {!! Form::open(['method' => 'POST', 'action'=>'AdminUsersController@store', 'files' => true]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email:') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('role_id', 'Role:') !!}
                    {!! Form::select('role_id', ['' => 'Choose a Role'] + $roles, null, ['class' => 'form-control']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password:') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('is_active', 'Status:') !!}
                    {!! Form::select('is_active', [1 => 'Active', 0 => 'Inactive'], null, ['class' => 'form-control']); !!}
                </div>
                <div class="form-group">
                    {!! Form::label('photo_id', 'Avatar:') !!}
                    {!! Form::file('photo_id') !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Create User', ['class' => 'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            @include('includes.errors')
        </div>
    </div>
@endsection