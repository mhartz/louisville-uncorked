@extends('layout')

@section('banner')
    <div class="banner">
        <section class="small-wrapper">
            <h1 class="large-heading">{{ $pageName }}</h1>
        </section>
    </div>
@stop

@section('content')
    <div class="small-wrapper unsubscribe-form">
        @if ($errors->has())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
        @if(Session::has('message'))
            <div class="alert alert-info">
                {{Session::get('message')}}
            </div>
        @endif

        <div class="card-1 p-30 col-13 clear">
            <h2 class="medium-heading">Enter your email address to unsubscribe from the newsletter.</h2>
            <p class="small-heading">Don't worry, if you want to subscribe again you can do it from the 'Newsletter' tab at the top or from the homepage.</p>
            {!! Form::open(array('route' => 'unsubscribe', 'id' => 'unsubscribe-form')) !!}

            <div class="form-group mt-20">
                {!! Form::label('Email') !!}
                {!! Form::text('email', null,
                    array(
                      'required',
                      'id'=>'unsubscribe-email',
                      'class'=>'form-control',
                      'placeholder'=>'Enter Email to Unsubscribe'
                    )
                  )
                !!}
            </div>

            {!! Form::submit('Unsubscribe', array('class'=>'button right')) !!}
            {!! Form::close() !!}
        </div>


    </div>


@stop