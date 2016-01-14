@extends('layout')

@section('banner')
  <div class="banner">
    <section class="small-wrapper">
      <h1 class="large-heading">{{ $pageName }}</h1>
    </section>
  </div>
@stop

@section('content')
<div class="tiny-wrapper mailing-list-form">
  <h2 class="main-heading">Sign Up</h2>
  <ul class="subtitle-rules">
  <div class="mailing-list-module">
    {!! Form::open(array('route' => 'mailing-list-store', 'id' => 'mailing-list-form')) !!}

      @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
      @endif
      
      @if(Session::has('message'))
          <div class="alert alert-info">
            {{ Session::get('message') }}
          </div>
      @endif
      
      <div class="mailing-list-section card-1 clear">
        <div class="form-group">
          {!! Form::label('name', 'Your Name', array('class'=>'text-left'))  !!}
          {!! Form::text('name', null,
              array( 
                'id'=>'mailing-list-name',
                'class'=>'mailing-list-input',
                'placeholder'=>'Your full name'
              )
            ) 
          !!}
        </div>

          <div class="form-group small-margin">
            {!! Form::label('email', 'Your E-mail Address', array('class'=>'text-left')) !!}
            {!! Form::text('email', null,
                array(
                  'required', 
                  'id'=>'mailing-list-email',
                  'class'=>'mailing-list-input',
                  'placeholder'=>'Your e-mail address'
                )
              ) 
            !!}
          </div>
          <div class="form-group small-margin">
            <script src='https://www.google.com/recaptcha/api.js'></script>
            <div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>  
          </div>
          
          {!! Form::submit('Sign Up', array('class'=>'button')) !!}
        </div>
      {!! Form::close() !!}
      </div>
  </div>
</div>

@stop