{{ $pageName = "Photos" }}

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
                    @foreach($images as $i=>$image)
                        <li class="col-{{ $images[$i]['column'] }}"><a href="{{ URL::asset($images[$i]['file']) }}" data-lightbox="image-1" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset($images[$i]['file']) }}" alt="Winter 2017 Event Image 1"></a></li>
                    @endforeach
                </ul>
            </section>
    </div>
@stop








    {{--<div class="small-wrapper photos-content">--}}
        {{--<section class="photo-section mb-40 mt-30 bottom-border">--}}
            {{--<h2 class="main-heading mb-40">2017 Summer Tasting</h2>--}}
            {{--<ul class="photo-gallery-list">--}}
                {{--<li class="col-16"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_001.jpg') }}" data-lightbox="image-1" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_001.jpg') }}" alt="Winter 2017 Event Image 1"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_002.jpg') }}" data-lightbox="image-2" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_002.jpg') }}" alt="Winter 2017 Event Image 2"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_003.jpg') }}" data-lightbox="image-3" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_003.jpg') }}" alt="Winter 2017 Event Image 3"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_004.jpg') }}" data-lightbox="image-4" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_004.jpg') }}" alt="Winter 2017 Event Image 4"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_005.jpg') }}" data-lightbox="image-5" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_005.jpg') }}" alt="Winter 2017 Event Image 5"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_006.jpg') }}" data-lightbox="image-6" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_006.jpg') }}" alt="Winter 2017 Event Image 6"></a></li>--}}
                {{--<li class="col-16"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_007.jpg') }}" data-lightbox="image-7" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_007.jpg') }}" alt="Winter 2017 Event Image 7"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_008.jpg') }}" data-lightbox="image-8" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_008.jpg') }}" alt="Winter 2017 Event Image 8"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_009.jpg') }}" data-lightbox="image-9" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_009.jpg') }}" alt="Winter 2017 Event Image 9"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_010.jpg') }}" data-lightbox="image-10" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_010.jpg') }}" alt="Winter 2017 Event Image 10"></a></li>--}}
                {{--<li class="col-16"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_011.jpg') }}" data-lightbox="image-11" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_011.jpg') }}" alt="Winter 2017 Event Image 11"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_012.jpg') }}" data-lightbox="image-12" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_012.jpg') }}" alt="Winter 2017 Event Image 12"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_013.jpg') }}" data-lightbox="image-13" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_013.jpg') }}" alt="Winter 2017 Event Image 13"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_014.jpg') }}" data-lightbox="image-14" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_014.jpg') }}" alt="Winter 2017 Event Image 14"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_015.jpg') }}" data-lightbox="image-15" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_015.jpg') }}" alt="Winter 2017 Event Image 15"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_016.jpg') }}" data-lightbox="image-16" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_016.jpg') }}" alt="Winter 2017 Event Image 16"></a></li>--}}
                {{--<li class="col-16"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_017.jpg') }}" data-lightbox="image-17" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_017.jpg') }}" alt="Winter 2017 Event Image 17"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_018.jpg') }}" data-lightbox="image-18" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_018.jpg') }}" alt="Winter 2017 Event Image 18"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_019.jpg') }}" data-lightbox="image-19" data-title="2017 Winter Tasting"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_019.jpg') }}" alt="Winter 2017 Event Image 19"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_020.jpg') }}" data-lightbox="image-20" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_020.jpg') }}" alt="Winter 2017 Event Image 20"></a></li>--}}
                {{--<li class="col-16"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_021.jpg') }}" data-lightbox="image-21" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_021.jpg') }}" alt="Winter 2017 Event Image 21"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_022.jpg') }}" data-lightbox="image-22" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_022.jpg') }}" alt="Winter 2017 Event Image 22"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_023.jpg') }}" data-lightbox="image-23" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_023.jpg') }}" alt="Winter 2017 Event Image 23"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_024.jpg') }}" data-lightbox="image-24" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_024.jpg') }}" alt="Winter 2017 Event Image 24"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_025.jpg') }}" data-lightbox="image-25" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_025.jpg') }}" alt="Winter 2017 Event Image 25"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_026.jpg') }}" data-lightbox="image-26" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_026.jpg') }}" alt="Winter 2017 Event Image 26"></a></li>--}}
                {{--<li class="col-16"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_027.jpg') }}" data-lightbox="image-27" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_027.jpg') }}" alt="Winter 2017 Event Image 27"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_028.jpg') }}" data-lightbox="image-28" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_028.jpg') }}" alt="Winter 2017 Event Image 28"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_029.jpg') }}" data-lightbox="image-29" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_029.jpg') }}" alt="Winter 2017 Event Image 29"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_030.jpg') }}" data-lightbox="image-30" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_030.jpg') }}" alt="Winter 2017 Event Image 30"></a></li>--}}
                {{--<li class="col-16"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_031.jpg') }}" data-lightbox="image-31" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_031.jpg') }}" alt="Winter 2017 Event Image 31"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_032.jpg') }}" data-lightbox="image-32" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_032.jpg') }}" alt="Winter 2017 Event Image 32"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_033.jpg') }}" data-lightbox="image-33" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_033.jpg') }}" alt="Winter 2017 Event Image 33"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_034.jpg') }}" data-lightbox="image-34" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_034.jpg') }}" alt="Winter 2017 Event Image 34"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_035.jpg') }}" data-lightbox="image-35" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_035.jpg') }}" alt="Winter 2017 Event Image 35"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_036.jpg') }}" data-lightbox="image-36" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_036.jpg') }}" alt="Winter 2017 Event Image 36"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_037.jpg') }}" data-lightbox="image-37" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_037.jpg') }}" alt="Winter 2017 Event Image 37"></a></li>--}}
                {{--<li class="col-8"><a href="{{ URL::asset('images/photos/2017-winter-event/Uncorked_038.jpg') }}" data-lightbox="image-38" data-title="2017 Event at the Gillespie"><img src="{{ URL::asset('images/vendor/unveil/loading-icon.gif') }}" data-src="{{ URL::asset('images/photos/2017-winter-event/Uncorked_038.jpg') }}" alt="Winter 2017 Event Image 38"></a></li>--}}
            {{--</ul>--}}
        {{--</section>--}}

