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
        <li><a href="/photos/2015-fall-meeting">2015 Fall Committee Meeting</a></li>
        <li class="active"><a href="/photos/2015-winter-meeting">2015 Winter Tasting</a></li>
      </ul>
    </div>
  </div>
  <div class="small-wrapper photos-content">
    <section class="photo-section mb-40 mt-30 bottom-border">
  
    <section class="photo-section mb-40">
      <h2 class="main-heading mb-40">Winter 2015 Tasting at Mellwood Arts Center</h2>
      <ul class="photo-gallery-list">
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-crowd.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-crowd.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-voting.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-voting.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-socializing.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-socializing.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-smiling.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-smiling.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-small-group.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-small-group.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-group-girls.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-group-girls.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-pink-dress.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-pink-dress.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-painting.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-painting.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-group-mixed.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-group-mixed.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-sharing.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-sharing.jpg') }}" alt=""></a></li>
      </ul>
    </section>
  </div>
@stop