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
        <li><a href="/photos/2016-summer-event">2016 Summer Tasting</a></li>
        <li><a href="/photos/2015-fall-event">2015 Fall Tasting</a></li>
        <li class="active"><a href="/photos/2015-fall-meeting">2015 Fall Committee Meeting</a></li>
        <li><a href="/photos/2015-winter-event">2015 Winter Tasting</a></li>
      </ul>
    </div>
  </div>
  <div class="small-wrapper photos-content">
    <section class="photo-section mb-40 mt-30 bottom-border">
      <h2 class="main-heading mb-40">2015 Fall Committee Meeting</h2>
      <ul class="photo-gallery-list">
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos1.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-fall-meetup/photos1.jpg') }}" alt="2015 Fall Meetup Image 1"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos2.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-fall-meetup/photos2.jpg') }}" alt="2015 Fall Meetup Image 2"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos3.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-fall-meetup/photos3.jpg') }}" alt="2015 Fall Meetup Image 3"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos4.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-fall-meetup/photos4.jpg') }}" alt="2015 Fall Meetup Image 4"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos5.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-fall-meetup/photos5.jpg') }}" alt="2015 Fall Meetup Image 5"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos6.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-fall-meetup/photos6.jpg') }}" alt="2015 Fall Meetup Image 6"></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos7.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-fall-meetup/photos7.jpg') }}" alt="2015 Fall Meetup Image 7"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos8.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-fall-meetup/photos8.jpg') }}" alt="2015 Fall Meetup Image 8"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos9.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-fall-meetup/photos9.jpg') }}" alt="2015 Fall Meetup Image 9"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos10.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-fall-meetup/photos10.jpg') }}" alt="2015 Fall Meetup Image 10"></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos11.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-fall-meetup/photos11.jpg') }}" alt="2015 Fall Meetup Image 11"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos12.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-fall-meetup/photos12.jpg') }}" alt="2015 Fall Meetup Image 12"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos14.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-fall-meetup/photos14.jpg') }}" alt="2015 Fall Meetup Image 13"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos15.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-fall-meetup/photos15.jpg') }}" alt="2015 Fall Meetup Image 14"></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-fall-meetup/photos16.jpg') }}" data-lightbox="image-1" data-title="Host Committee Meeting for the 2015 Fall Event"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2015-fall-meetup/photos16.jpg') }}" alt="2015 Fall Meetup Image 15"></a></li>
      </ul>
    </section>
  </div>
@stop