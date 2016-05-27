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
  
    <section class="photo-section mb-40 bottom-border">
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
    
    <section class="photo-section mb-40 bottom-border">
      <h2 class="main-heading mb-40">2015 Fall Tasting Continued</h2>
      <ul class="photo-gallery-list">
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_041_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_041_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_042_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_042_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_043_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_043_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_044_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_044_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_045_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_045_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_046_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_046_.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_047_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_047_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_048_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_048_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_049_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_049_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_050_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_050_.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_051_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_051_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_052_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_052_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_054_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_054_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_055_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_055_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_056_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_056_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_057_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_057_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_058_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_058_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_059_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_059_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_060_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_060_.jpg') }}" alt=""></a></li>
      </ul>
    </section>
    
    <section class="photo-section mb-40 bottom-border">
      <h2 class="main-heading mb-40">2015 Fall Tasting Continued</h2>
      <ul class="photo-gallery-list">
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_061_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_061_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_062_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_062_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_063_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_063_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_064_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_064_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_065_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_065_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_066_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_066_.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_067_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_067_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_068_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_068_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_069_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_069_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_070_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_070_.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_071_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_071_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_072_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_072_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_074_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_074_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_075_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_075_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_076_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_076_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_077_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_077_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_078_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_078_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_079_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_079_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_080_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_080_.jpg') }}" alt=""></a></li>
      </ul>
    </section>
    
    <section class="photo-section mb-40 bottom-border">
      <h2 class="main-heading mb-40">2015 Fall Tasting Continued</h2>
      <ul class="photo-gallery-list">
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_081_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_081_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_082_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_082_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_083_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_083_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_084_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_084_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_085_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_085_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_086_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_086_.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_087_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_087_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_088_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_088_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_089_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_089_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_090_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_090_.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_091_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_091_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_092_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_092_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_094_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_094_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_096_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_096_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_097_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_097_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_098_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_098_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_099_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_099_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_100_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_100_.jpg') }}" alt=""></a></li>
      </ul>
    </section>
    
    <section class="photo-section mb-40 bottom-border">
      <h2 class="main-heading mb-40">2015 Fall Tasting Continued</h2>
      <ul class="photo-gallery-list">
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_101_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_101_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_103_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_103_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_105_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_105_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_106_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_106_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_108_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_108_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_110_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_110_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_112_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_112_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_115_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_115_.jpg') }}" alt=""></a></li>
        <li class="col-8"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_117_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_117_.jpg') }}" alt=""></a></li>
        <li class="col-16"><a href="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_118_.jpg') }}" data-lightbox="image-1" data-title="2015 Fall Event At the Foundry"><img src="{{ URL::asset('images/photos/2015-Fall-Foundry/Uncorked_Fall_2015_118_.jpg') }}" alt=""></a></li>
      </ul>
    </section>
  </div>
@stop