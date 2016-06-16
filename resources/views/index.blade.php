@extends('layout')

@section('banner')
  {{--<div class="banner mailing-list-active">--}}
    {{--<div class="wrapper mb-20">--}}
        {{--<h1 class="banner-heading mb-10">Signup to Our Mailing List</h1>--}}
        {{--<h2 class="main-heading secondary">To receive updates on our upcoming events!</h2>--}}
        {{--<button id="mail-signup-trigger" class="button">Sign Up <span class="icon-circle-right"></span></button>--}}
    {{--</div>--}}
    {{----}}
  {{--</div>--}}
  <div class="banner">
      <section class="wrapper">
          <h1 class="banner-heading mb-10">Summer 2016 Tasting</h1>
          <h2 class="main-heading secondary">June 16, 2016</h2>
          <h2 class="main-heading secondary">7:00pm - 10:00pm</h2>
          <h2 class="main-heading secondary mb-10">Muhammad Ali Center</h2>
      </section>
  </div>


  <div class="sign-up-bar grey-bg p-20">
      <div class="small-wrapper">
          <p class="left medium-heading"><i class="fa fa-envelope-o" aria-hidden="true"></i>Signup to our <a class="dotted-underline" href="/mailing-list">Mailing List</a> to receive updates on our upcoming events</p>
          <button id="mail-signup-trigger" class="button">Sign Up <span class="icon-circle-right"></span></button>
      </div>
  </div>
@stop

@section('content')
<div class="about-louisville-uncorked">
  <section class="wrapper center row bottom-border">
    <h1 class="large-heading mb-20">What is Louisville Uncorked?</h1>
    <p class="centered-width mb-40">Louisville Uncorked organizes wine tasting events for members and guests that raise money for local charities.</p>
    <h2 class="the-tasting-title main-heading">The Tasting</h2>
    <p class="centered-width mb-20">At each event, a different variety is selected for tasting (for example: Merlot). Participants get together in up to teams of three and select a wine they'd like to present. Three bottles of the same wine are brought. The wines are bagged, tagged, and offered to the participants for tasting and scoring. At the end of the night the scores are tallied and the team's wine with the highest score wins.</p>
    <p class="centered-width mb-20">Each tasting is dedicated to a different charity that is an integral part of the event: helping organize the festivities and providing educational material letting people know about their cause.</p>
    <a class="centered-width" href="/faq">Have any questions?</a>
  </section>
  
  <div class="upcoming-event row wrapper">
    <section class="upcoming-event-details col-11">
      <h2 class="main-heading mb-30">Upcoming Event</h2>
      <p><span class="icon-calendar2"></span><i>Date: </i>June 16, 2016</p>
      <p><span class="icon-clock2"></span><i>Time: </i>7:00pm - 10:00pm</p>
      <p><span class="icon-location"></span><i>Location: </i>Muhammad Ali Center, 144 N 6th St, Louisville, KY 40202</p>
      <p><span class="icon-glass"></span><i>Tasting Variety: </i>Pinot Noir</p>
      <p><span class="icon-banknote"></span><i>Cost: </i> Minimum $20 donation for our sponsored charity</p>
      <p><span class="icon-user-tie"></span><i>Dress: </i>"Dress to Impress" <span class="tooltip">? <span class="toolpop">Don't let clothing options discourage you, but feel free to get dressed up for the night if you like! Most girls will likely wear a dress or slacks and pants, men can wear business casual or a suit.</span></span></p>
    </section>

    <iframe class="map upcoming-event-media col-12" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12531.663498360223!2d-85.7599341!3d38.2582571!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf1b30c2d7430ca77!2sMuhammad+Ali+Center!5e0!3m2!1sen!2sus!4v1463519395283" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>

<div class="row dark-bg">
  <section class="wrapper">
    <h1 class="large-heading center">Featured Charity</h1>
    
    <div class="charity-left">
      <a href="//spinabifidakentucky.org"><img src="{{ URL::asset('images/Events/2016-summer/sbaklogowhite3.png') }}" alt="Spina Bifida Association of Kentucky"></a>
    </div>
    
    <div class="charity-right">
      <h2 class="main-heading"><a href="//spinabifidakentucky.org">Spina Bifida Association of Kentucky</a></h2>
      <h3 class="small-heading secondary-ondark-light">To promote the prevention of Spina Bifida and to enhance the lives of all affected.</h3>
      <p>SBAK is the resource center which provides free services and programs to children and adults with Spina Bifida and their families.</p>
      </div>
    </section>
</div>

<div class="row">
  <section class="wrapper">
    <h1 class="large-heading center">Our Last Event</h1>
    <div class="col-10 right">
      <img class="full-image" src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_082_.jpg') }}" alt="Uncorked Fall 2015 Crowd">
    </div>
    <div class="col-13 left">
      <h2 class="main-heading">Fall 2015 Tasting at The Foundry</h2>
      <h3 class="small-heading text-light">Benefitting The Fund Through the Arts</h3>
      <p>Louisville Uncorked held the Fall event on October 2015 which benefitted The Fund Through the Arts and raised over $7,200 and significant community awareness. There were more than 500 participants split between 220 teams tasting some of the best Chardonnays.</p>
    </div>
  </section>
</div>

<div class="row grey-bg center">
  <section class="wrapper">
    <h1 class="large-heading">The Winners of the Fall 2015 Tasting</h1>
    <div class="place-card col-7">
      <div class="image-trophy-container">
        <img class="full-image" src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_092_.jpg') }}" alt="">
        <span class="icon-trophy gold"></span>
      </div>
      <h2 class="main-heading">1<span>st</span></h2>
      <p>Slow Press Chardonnay</p>
      <p>Brought by Anne Billington Adair</p>
    </div>
    
    <div class="place-card col-7">
      <div class="image-trophy-container">
        <img class="full-image" src="{{ URL::asset('images/photos/2015-Fall-Foundry/silver-winner.jpg') }}" alt="">
        <span class="icon-trophy silver"></span>
      </div>
      <h2 class="main-heading">2<span>nd</span></h2>
      <p>Three Wishes Chardonnay</p>
      <p>Brought by Paul Grignon</p>
    </div>
    
    <div class="place-card col-7">
      <div class="image-trophy-container">
        <img class="full-image" src="{{ URL::asset('images/photos/2015-Fall-Foundry/bronze-winner.jpg') }}" alt="">
        <span class="icon-trophy bronze"></span>
      </div>
      <h2 class="main-heading">3<span>rd</span></h2>
      <p>Beringer Chardonnay</p>
      <p>Brought by Jimmy Scott</p>
    </div>
  </section>
</div>

<div class="row photo-gallery">
  <section class="small-wrapper">
    <h1 class="large-heading center mb-0">Photo Gallery</h1>
    <p class="center">Check out our pics from the latest event!</p>
    <ul class="photo-gallery-list">
      <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_080_.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_080_.jpg') }}" alt=""></a></li>
      <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_037_.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_037_.jpg') }}" alt=""></a></li>
      <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_065_.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_065_.jpg') }}" alt=""></a></li>
      <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_068_.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_068_.jpg') }}" alt=""></a></li>
      <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_101_.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_101_.jpg') }}" alt=""></a></li>
      <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_018_.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_018_.jpg') }}" alt=""></a></li>
      <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_038_.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_038_.jpg') }}" alt=""></a></li>
      <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_007_.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_071_.jpg') }}" alt=""></a></li>
      <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_029_.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_029_.jpg') }}" alt=""></a></li>
      <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_081_.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_081_.jpg') }}" alt=""></a></li>
    </ul>
    
    <a class="button mt-20" href="/photos/2015-fall-event">See more photos<span class="icon-circle-right"></span></a>
  </section>
</div>

<div class="row bottom-register">
  <div class="tiny-wrapper">
    <h2 class="main-heading">Register your team and join us!</h2>
    <a class="white-outline-button" href="/registration">Register Here</a>
  </div>
</div>

<div id="modal-overlay" class="modal-overlay hide">
  <div id="mailing-list-modal" class="home-mailing-list-modal hide">
    <span id="close-modal" class="close-modal">X</span>
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
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
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

          <div class="form-group small-margin right">
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
          
          <div class="submission-container">
            <div class="home-recaptcha-container form-group small-margin">
              <script src='https://www.google.com/recaptcha/api.js'></script>
              <div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>  
            </div>
            
            {!! Form::submit('Sign Up', array('class'=>'button')) !!}
            </div>
        </div>
      {!! Form::close() !!}
    </div>
  </div>

@stop