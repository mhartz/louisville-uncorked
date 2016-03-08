@extends('layout')

@section('banner')
  <div class="photos banner">
    <section class="small-wrapper">
      <h1 class="large-heading">{{ $pageName }}</h1>
    </section>
  </div>
@stop

@section('content')
  <div class="photos-nav">
    <div class="small-wrapper">
      <ul>
        <li><a href="/photos/2015-fall-event">2015 Fall Tasting</a></li>
        <li class="active"><a href="/photos/2015-fall-meeting">2015 Fall Committee Meeting</a></li>
        <li><a href="/photos/2015-winter-meeting">2015 Winter Tasting</a></li>
      </ul>
    </div>
  </div>
  <div class="small-wrapper photos-content">
    <section class="photo-section mb-40 mt-30 bottom-border">
      <h2 class="main-heading mb-40">2015 Fall Committee Meeting</h2>
      <ul class="photo-gallery-list">
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos1.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/photos/2015-fall-meetup/photos1.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos2.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/photos/2015-fall-meetup/photos2.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos3.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/photos/2015-fall-meetup/photos3.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos4.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/photos/2015-fall-meetup/photos4.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos5.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/photos/2015-fall-meetup/photos5.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos6.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/photos/2015-fall-meetup/photos6.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos7.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/photos/2015-fall-meetup/photos7.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos8.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/photos/2015-fall-meetup/photos8.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos9.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/photos/2015-fall-meetup/photos9.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos10.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/photos/2015-fall-meetup/photos10.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos11.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/photos/2015-fall-meetup/photos11.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos12.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/photos/2015-fall-meetup/photos12.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos14.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/photos/2015-fall-meetup/photos14.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos15.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/photos/2015-fall-meetup/photos15.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos16.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/photos/2015-fall-meetup/photos16.jpg') }}" alt=""></a></li>
      </ul>
    </section>
  
    <section class="photo-section mb-40">
      <h2 class="main-heading mb-40">Winter 2015 Tasting at Mellwood Arts Center</h2>
      <ul class="photo-gallery-list">
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-crowd.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-crowd.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-voting.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-voting.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-socializing.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-socializing.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-smiling.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-smiling.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-small-group.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-small-group.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-group-girls.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-group-girls.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-pink-dress.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-pink-dress.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-painting.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-painting.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-group-mixed.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-group-mixed.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-sharing.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-sharing.jpg') }}" alt=""></a></li>
      </ul>
    </section>
  </div>
@stop