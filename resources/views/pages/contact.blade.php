@extends('layout')

@section('banner')
  <div class="banner">
    <section class="small-wrapper">
      <h1 class="large-heading">{{ $pageName }}</h1>
    </section>
  </div>
@stop

@section('content')
<div class="tiny-wrapper contact-form">
  <div class="form-group card-1 p-30">
    {!! Form::open(array('route' => 'contact-store', 'id' => 'contact-form')) !!}

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

    <div class="form-group">
      {!! Form::label('Your Name') !!}
      {!! Form::text('name', null, 
          array(
            'required', 
            'id'=>'contact-name',
            'class'=>'form-control',
            'placeholder'=>'Your name'
          )
        ) 
      !!}
    </div>

    <div class="form-group">
      {!! Form::label('Your E-mail Address') !!}
      {!! Form::text('email', null, 
          array(
            'required', 
            'id'=>'contact-email',
            'class'=>'form-control',
            'placeholder'=>'Your e-mail address'
          )
        ) 
      !!}
    </div>
    
    <div class="form-group">
      {!! Form::label('Reason for Contact') !!}
      {!! Form::select('reason', ['Questions/Comments', 'Charity', 'Website problem or bug report'], 
          array(
            'id'=>'contact-reason',
            'class'=>'form-control'
          )
        ) 
      !!}
    </div>

    <div class="form-group">
      {!! Form::label('Your Message') !!}
      {!! Form::textarea('message', null, 
          array(
            'required', 
            'id'=>'contact-message',
            'class'=>'form-control',
            'placeholder'=>'Your message'
          )
        ) 
      !!}
    </div>

    <div class="form-group">
      {!! Form::submit('Contact Us!', array('class'=>'button')) !!}
    </div>
      {!! Form::close() !!}
  </div>
</div>


@stop