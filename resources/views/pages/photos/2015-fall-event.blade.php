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
        <li class="active"><a href="/photos/2015-fall-event">2015 Fall Tasting</a></li>
        <li><a href="/photos/2015-fall-meeting">2015 Fall Committee Meeting</a></li>
        <li><a href="/photos/2015-winter-meeting">2015 Winter Tasting</a></li>
      </ul>
    </div>
  </div>
  <div class="small-wrapper photos-content">
    <section class="photo-section mb-40 mt-30 bottom-border">
      <h2 class="main-heading mb-40">2015 Fall Tasting</h2>
      <ul class="photo-gallery-list">
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_001_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_001_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_002_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_002_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_003_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_003_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_004_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_004_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_005_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_005_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_006_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_006_.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_007_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_007_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_008_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_008_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_009_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_009_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_010_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_010_.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_011_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_011_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_012_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_012_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_014_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_014_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_015_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_015_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_016_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_016_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_017_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_017_.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_018_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_018_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_019_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_019_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_020_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Tasting"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_020_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_021_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_021_.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_022_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_022_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_023_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_023_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_024_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_024_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_025_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_025_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_026_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_026_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_027_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_027_.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_028_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_028_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_029_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_029_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_030_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_030_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_031_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_031_.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_032_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_032_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_034_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_034_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_035_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_035_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_036_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_036_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_037_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_037_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_038_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_038_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_039_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_039_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_040_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_040_.jpg') }}" alt=""></a></li>
      </ul>
    </section>
  
    <section class="photo-section mb-40">
      <h2 class="main-heading mb-40">2015 Fall Tasting Continued</h2>
      <ul class="photo-gallery-list">
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_021_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_021_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_022_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_022_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_023_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_023_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_024_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_024_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_025_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_025_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_026_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_026_.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_027_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_027_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_028_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_028_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_029_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_029_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_030_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_030_.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_031_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_031_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_032_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_032_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_034_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_034_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_035_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_035_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_036_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_036_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_037_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_037_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_038_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_038_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_039_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_039_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_040_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_040_.jpg') }}" alt=""></a></li>
      </ul>
    </section>
  </div>
@stop