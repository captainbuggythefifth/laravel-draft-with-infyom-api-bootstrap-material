@extends('layouts.app')

@section('content')
    <div class="col-sm-12 col-md-12 col-lg-12">
        <div class="row">
            <div class="container">
                <div class="text-center">
                    <p>Hello there, {{  Auth::user()->name }}! Haven't seen you in a while! ;)</p>

                    <p>We're almost done. Please fill out your password so that we can log you in!</p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="text-center">
                        <img src="{{ Auth::user()->avatar }}" alt="" style="width: 50px; height: 50px">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        {!! Form::open(array('url' => "auth/facebook/create", "method" => "put")) !!}
                            <div class="col-sm-6 col-md-6 col-lg-6 col-sm-offset-3">
                                <div class="form-group label-floating is-empty">
                                    <label class="control-label" for="password">Write something to make the label float</label>
                                    {!! Form::password('password', ['class' => 'form-control', 'id' => 'password']) !!}
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Submit<div class="ripple-container"></div></button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection