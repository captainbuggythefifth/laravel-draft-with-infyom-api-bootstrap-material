@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Create New Users</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($users, ['route' => ['users.update', $users->id], 'method' => 'patch']) !!}

            @include('users.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection