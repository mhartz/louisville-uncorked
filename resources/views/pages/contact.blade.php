@extends('layout')

@section('banner')
  <div class="banner">
    <section class="small-wrapper">
      <h1 class="large-heading">{{ $pageName }}</h1>
    </section>
  </div>
@stop

@section('content')
<div class="small-wrapper contact-form">
  <div class="card-1 p-30 col-13 left clear">
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
      {!! Form::label('contact-name', 'Your Name') !!}
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
      {!! Form::label('contact-email', 'Your E-mail Address') !!}
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
      {!! Form::label('contact-reason', 'Reason for Contact') !!}
      {!! Form::select('reason', ['Questions/Comments', 'Charity', 'Sponsor', 'Website problem or bug report'],
          array(
            'id'=>'contact-reason',
            'class'=>'form-control'
          )
        )
      !!}
    </div>

    <div class="form-group">
      {!! Form::label('contact-message', 'Your Message') !!}
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
  
  <div class="col-10 mt-40 pt-10 right">
    <h2 class="main-heading">Email Contact:</h2>
    <p>If you are a charity that is interested in becoming a benefactor or your company would like to sponsor an event, please fill out the form and we will get in contact with you as soon as we can.</p>
    <p class="bottom-border pb-30">If you have any questions or discovered an issue with the website, please select the corresponding option from the dropdown menu.</p>

    <h2 class="main-heading">Mailing Address:</h2>
    <p class="mb-0">710 West Main Street, 4th Floor</p>
    <p>Louisville, Kentucky 40202.</p>
  </div>
</div>


@stop