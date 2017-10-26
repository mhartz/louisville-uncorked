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
        <li><a href="/photos/2017-summer-event">2017 Summer Tasting</a></li>
        <li><a href="/photos/2016-summer-event">2016 Summer Tasting</a></li>
        <li><a href="/photos/2015-fall-event">2015 Fall Tasting</a></li>
        <li><a href="/photos/2015-fall-meeting">2015 Fall Committee Meeting</a></li>
        <li class="active"><a href="/photos/2015-winter-event">2015 Winter Tasting</a></li>
      </ul>
    </div>
  </div>
  <div class="small-wrapper photos-content">
    <section class="photo-section mb-40 mt-30 bottom-border">
  
    <section class="photo-section mb-40">
      <h2 class="main-heading mb-40">Winter 2015 Tasting at Mellwood Arts Center</h2>
      <ul class="photo-gallery-list">
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-crowd.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-crowd.jpg') }}" alt="2015 Winter Event Image 1"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-voting.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-voting.jpg') }}" alt="2015 Winter Event Image 2"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-socializing.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-socializing.jpg') }}" alt="2015 Winter Event Image 3"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-smiling.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-smiling.jpg') }}" alt="2015 Winter Event Image 4"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-small-group.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-small-group.jpg') }}" alt="2015 Winter Event Image 5"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-group-girls.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-group-girls.jpg') }}" alt="2015 Winter Event Image 6"></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-pink-dress.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-pink-dress.jpg') }}" alt="2015 Winter Event Image 7"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-painting.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-painting.jpg') }}" alt="2015 Winter Event Image 8"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-group-mixed.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-group-mixed.jpg') }}" alt="2015 Winter Event Image 9"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-winter-event/winter-2015-sharing.jpg') }}" data-lightbox="image-1" data-title="Winter 2015 Tasting at Mellwood"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-sharing.jpg') }}" alt="2015 Winter Event Image 10"></a></li>
      </ul>
    </section>
  </div>
@stop