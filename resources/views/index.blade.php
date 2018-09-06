@extends('layout')

@section('banner')

    @if(Config::get('constants.EVENT_ACTIVE') === true)
        <div class="banner">
            <section class="wrapper">
                <h1 class="banner-heading mb-10">Fall 2018 Tasting</h1>
                <h2 class="main-heading secondary">Thursday, September 20th</h2>
                <h2 class="main-heading secondary">6:00pm - 9:00pm</h2>
                <h2 class="main-heading secondary mb-10">Farmington Historic Plantation</h2>
                @if(Config::get('constants.EVENT_REGISTRATION_OPEN') === true)
                    <a class="button inline-block" href="/registration">Register Your Team <span class="icon-circle-right"></span></a>
                @elseif(Config::get('constants.EVENT_THIRD_PARTY_REGISTRATION_OPEN') === true)
                    <a class="button inline-block third-party-registration" href="//www.ypal.org/members/events/#!event/2018/9/20/louisville-uncorked-benefitting-the-kentucky-humane-society" target="_blank">Register Your Team on YPAL</span><span class="icon-circle-right"></span></a>
                @else
                    @if(Config::get('constants.EVENT_REGISTRATION_UPCOMING') === false)
                        <p class="lato font-size-large">Registration is now closed for the current event. Come back later for details on future events!</p>
                    @else
                        <p class="lato font-size-large">Registration will open for this event soon. Check back later or signup to the mailing list below to get updated!</p>
                    @endif

                @endif
            </section>
        </div>

        <div class="sign-up-bar grey-bg p-20">
            <div class="small-wrapper">
                <p class="left medium-heading"><i class="fa fa-envelope-o" aria-hidden="true"></i>Signup to our <a class="dotted-underline" href="/mailing-list">Mailing List</a> to receive updates on our upcoming events</p>
                <button id="mail-signup-trigger" class="button">Sign Up <span class="icon-circle-right"></span></button>
            </div>
        </div>

    @else
        <div class="banner mailing-list-active">
            <div class="wrapper mb-20">
                <h1 class="banner-heading mb-10">Signup to Our Mailing List</h1>
                <h2 class="main-heading secondary">To receive updates on our upcoming events!</h2>
                <button id="mail-signup-trigger" class="button">Sign Up <span class="icon-circle-right"></span></button>
            </div>

        </div>
    @endif

@stop

@section('content')
    <div class="about-louisville-uncorked">
        <section class="wrapper center row">
            <h1 class="large-heading mb-20">What is Louisville Uncorked?</h1>
            <p class="centered-width mb-40">Louisville Uncorked organizes wine tasting events for members and guests that raise money for local charities.</p>
            <h2 class="the-tasting-title main-heading">The Tasting</h2>
            <p class="centered-width mb-20">At each event, a different variety is selected for tasting (for example: Merlot). Participants get together in up to teams of three and select a wine they'd like to present. Three bottles of the same wine are brought. The wines are bagged, tagged, and offered to the participants for tasting and scoring. At the end of the night the scores are tallied and the team's wine with the highest score wins.</p>
            <p class="centered-width mb-20">Each tasting is dedicated to a different charity that is an integral part of the event: helping organize the festivities and providing educational material letting people know about their cause.</p>
            <a class="centered-width" href="/faq">Have any questions?</a>
        </section>

        @if(Config::get('constants.EVENT_ACTIVE') === true)
            <div class="upcoming-event row wrapper">
                <section class="upcoming-event-details col-11">
                    <h2 class="main-heading mb-30">Upcoming Event</h2>
                    <p><span class="icon-calendar2"></span><i>Date: </i>September 20, 2018</p>
                    <p><span class="icon-clock2"></span><i>Time: </i>6:00pm - 9:00pm</p>
                    <p><span class="icon-location"></span><i>Location: </i>Farmington Historic Plantation, 3033 Bardstown Rd, Louisville, KY 40205</p>
                    <p><span class="icon-glass"></span><i>Tasting Variety: </i>French Reds</p>
                    <p><span class="icon-banknote"></span><i>Cost: </i> Minimum $25 donation for our sponsored charity</p>
                    <p><span class="icon-user-tie"></span><i>Dress: </i>"Dress to Impress" <span class="tooltip">? <span class="toolpop">Don't let clothing options discourage you, but feel free to get dressed up for the night if you like! Most girls will likely wear a dress or slacks and pants, men can wear business casual or a suit.</span></span></p>
                </section>

                <iframe class="map upcoming-event-media col-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3134.7978582299565!2d-85.6703234490077!3d38.2145894944061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88690b6a15b8ef2f%3A0x3e567f377c4a296d!2s3033+Bardstown+Rd%2C+Louisville%2C+KY+40205!5e0!3m2!1sen!2sus!4v1532665338344" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        @endif
    </div>

    <div class="row dark-bg">
        <section class="wrapper">
            <h1 class="large-heading center">Featured Charity</h1>

            <div class="charity-left">
                <a href="https://www.kyhumane.org/" target="_blank"><img src="{{ URL::asset('images/Events/2018-fall/khs-logo.jpg') }}" alt="Kentucky Humane Society"></a>
            </div>

            <div class="charity-right">
                <h2 class="main-heading"><a href="//www.lls.org" target="_blank">The Kentucky Humane Society</a></h2>
                <h3 class="small-heading secondary-ondark-light">The Kentucky Humane Society is a champion for companion animals. Through leadership, education and proactive solutions, we are creating more compassionate communities.</h3>
                <p>KHS envisions a day when every companion animal is given the care, resources and lifelong home they deserve. The Kentucky Humane Society will never euthanize a pet due to lack of space. We are committed to saving every healthy, behaviorally sound animal we take in.</p>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="wrapper">
            <h1 class="large-heading center">Our Last Event</h1>
            <div class="col-10 right">
                <img class="full-image" src="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_037.jpg') }}" alt="Uncorked Winter 2017 Crowd">
            </div>
            <div class="col-13 mt-30 left">
                <h2 class="main-heading">Winter 2018 Tasting at Kentucky Museum of Art and Craft (KMAC)</h2>
                <h3 class="small-heading text-light">Leukemia Lymphoma Society</h3>
                <p>Louisville Uncorked held the Winter event on February 22, 2018 which benefitted Leukemia Lymphoma Society. There were more than 250 participants tasting some of the best (and the worst!) Syrah/Shiraz. Thanks to your generous donations, we were able to contribute around $5,000 to their mission, but their needs are ongoing.  If you were unable to attend and would like to donate or would like to further contribute to this valuable cause, please visit their website: <a href="//www.lls.org" target="_blank">www.lls.org</a>.</p>
            </div>
        </section>
    </div>

    <div class="row grey-bg center">
        <section class="wrapper">
            <h1 class="large-heading">The Winners of Winter 2018 Tasting</h1>
            <div class="place-card">
                <div class="image-trophy-container">
                    <img class="full-image" src="{{ URL::asset('images/photos/2018-winter-event/gold-winner.jpg') }}" alt="">
                    <span class="icon-trophy gold"></span>
                </div>
                <div class="winner-inner">
                    <h2 class="main-heading">1<span>st</span></h2>
                    <p>The Stump 2016</p>
                    <p>Brought by Team Linda</p>
                </div>
            </div>

            <div class="place-card">
                <div class="image-trophy-container">
                    <img class="full-image" src="{{ URL::asset('images/photos/2018-winter-event/silver-winner.jpg') }}" alt="">
                    <span class="icon-trophy silver"></span>
                </div>
                <div class="winner-inner">
                    <h2 class="main-heading">2<span>nd</span></h2>
                    <p>Rosemount Estate 2016</p>
                    <p>Brought by Team Sunshine</p>
                </div>
            </div>

            <div class="place-card">
                <div class="image-trophy-container">
                    <img class="full-image" src="{{ URL::asset('images/photos/2018-winter-event/bronze-winner.jpg') }}" alt="">
                    <span class="icon-trophy bronze"></span>
                </div>
                <div class="winner-inner">
                    <h2 class="main-heading">3<span>rd</span></h2>
                    <p>Milton Park 2015</p>
                    <p>Brought by Kimberly Taylor</p>
                </div>
            </div>
        </section>
    </div>

    <div class="row photo-gallery">
        <section class="small-wrapper">
            <h1 class="large-heading center mb-0">Photo Gallery</h1>
            <p class="center">Check out our pics from the latest event!</p>
            <ul class="photo-gallery-list">
                <li class="col-16"><a href="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_065.jpg') }}" data-lightbox="image-1" data-title="Winter 2018 Tasting"><img src="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_065.jpg') }}" alt="Winter 2018 Tasting Image 19"></a></li>
                <li class="col-8"><a href="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_086.jpg') }}" data-lightbox="image-1" data-title="Winter 2018 Tasting"><img src="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_086.jpg') }}" alt="Winter 2018 Tasting Image 20"></a></li>
                <li class="col-8"><a href="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_018.jpg') }}" data-lightbox="image-1" data-title="Winter 2018 Tasting"><img src="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_018.jpg') }}" alt="Winter 2018 Tasting Image 30"></a></li>
                <li class="col-8"><a href="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_014.jpg') }}" data-lightbox="image-1" data-title="Winter 2018 Tasting"><img src="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_014.jpg') }}" alt="Winter 2018 Tasting Image 40"></a></li>
                <li class="col-8"><a href="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_035.jpg') }}" data-lightbox="image-1" data-title="Winter 2018 Tasting"><img src="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_035.jpg') }}" alt="Winter 2018 Tasting Image 50"></a></li>
                <li class="col-8"><a href="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_049.jpg') }}" data-lightbox="image-1" data-title="Winter 2018 Tasting"><img src="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_049.jpg') }}" alt="Winter 2018 Tasting Image 60"></a></li>
                <li class="col-16"><a href="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_128.jpg') }}" data-lightbox="image-1" data-title="Winter 2018 Tasting"><img src="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_128.jpg') }}" alt="Winter 2018 TastingImage 70"></a></li>
                <li class="col-8"><a href="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_061.jpg') }}" data-lightbox="image-1" data-title="Winter 2018 Tasting"><img src="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_061.jpg') }}" alt="Winter 2018 Tasting Image 80"></a></li>
                <li class="col-8"><a href="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_117.jpg') }}" data-lightbox="image-1" data-title="Winter 2018 Tasting"><img src="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_117.jpg') }}" alt="Winter 2018 Tasting Image 90"></a></li>
                <li class="col-8"><a href="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_032.jpg') }}" data-lightbox="image-1" data-title="Winter 2018 Tasting"><img src="{{ URL::asset('images/photos/2018-winter-event/KMAC_Louisville_Uncorked_032.jpg') }}" alt="Winter 2018 Tasting Image 100"></a></li>
            </ul>

            <a class="button mt-20" href="/photos/2018-winter-event">See more photos<span class="icon-circle-right"></span></a>
        </section>
    </div>

    @if(Config::get('constants.EVENT_REGISTRATION_OPEN') === true)
        <div class="row bottom-register">
            <div class="tiny-wrapper">
                <h2 class="main-heading">Register your team and join us!</h2>
                <a class="white-outline-button" href="/registration">Register Here</a>
            </div>
        </div>
    @endif

    <div class="sign-up-bar grey-bg p-20">
        <div class="small-wrapper p-20">
            <p class="left medium-heading"><i class="fa fa-envelope-o" aria-hidden="true"></i>Signup to our <a class="dotted-underline" href="/mailing-list">Mailing List</a> to receive updates on our upcoming events</p>
            <button id="mail-signup-trigger-bottom" class="button">Sign Up <span class="icon-circle-right"></span></button>
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
                    {!! Form::label('mailing-list-name', 'Your Name', array('class'=>'text-left'))  !!}
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
                    {!! Form::label('mailing-list-email', 'Your E-mail Address', array('class'=>'text-left')) !!}
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

                    {!! Form::button('Sign Up', array('class'=>'button', 'type' => 'submit')) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@stop