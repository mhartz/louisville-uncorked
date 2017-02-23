@extends('layout')

@section('banner')

    @if(Config::get('constants.EVENT_ACTIVE') === true)
        <div class="banner">
            <section class="wrapper">
                <h1 class="banner-heading mb-10">Winter 2017 Tasting</h1>
                <h2 class="main-heading secondary">February 23, 2017</h2>
                <h2 class="main-heading secondary">6:00pm - 9:00pm</h2>
                <h2 class="main-heading secondary mb-10">The Gillespie</h2>
                @if(Config::get('constants.EVENT_REGISTRATION_OPEN') === true)
                    <a class="button inline-block" href="/registration">Register Your Team <span class="icon-circle-right"></span></a>
                @else
                    <p class="lato font-size-large">Registration is now closed for the current event. Come back later for details on future events!</p>
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

        <div class="upcoming-event row wrapper">
            <section class="upcoming-event-details col-11">
                <h2 class="main-heading mb-30">Upcoming Event</h2>
                <p><span class="icon-calendar2"></span><i>Date: </i>February 23, 2017</p>
                <p><span class="icon-clock2"></span><i>Time: </i>6:00pm - 9:00pm</p>
                <p><span class="icon-location"></span><i>Location: </i>The Gillespie, 421 W Market St, Louisville, KY 40202</p>
                <p><span class="icon-glass"></span><i>Tasting Variety: </i>California Reds</p>
                <p><span class="icon-banknote"></span><i>Cost: </i> Minimum $20 donation for our sponsored charity</p>
                <p><span class="icon-user-tie"></span><i>Dress: </i>"Dress to Impress" <span class="tooltip">? <span class="toolpop">Don't let clothing options discourage you, but feel free to get dressed up for the night if you like! Most girls will likely wear a dress or slacks and pants, men can wear business casual or a suit.</span></span></p>
            </section>

            <iframe class="map upcoming-event-media col-12" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12532.097278423827!2d-85.75767!3d38.255742!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9556d13d9c648112!2sThe+Gillespie!5e0!3m2!1sen!2sus!4v1481427256647" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>

    <div class="row dark-bg">
        <section class="wrapper">
            <h1 class="large-heading center">Featured Charity</h1>

            <div class="charity-left">
                <a href="//www.craftlouisville.com/" target="_blank"><img src="{{ URL::asset('images/photos/2017-winter-event/LouisvilleCFResized.png') }}" alt="Cure CF"></a>
            </div>

            <div class="charity-right">
                <h2 class="main-heading"><a href="//www.craftlouisville.com/" target="_blank">Cure CF, Inc.</a></h2>
                <h3 class="small-heading secondary-ondark-light">Together, we'll change the definition CF from that of a life-shortening, family-destroying, tomorrow-stealing disease into an acronym for CURE FOUND!</h3>
                <p>Cystic fibrosis (CF) is a life-shortening genetic disease that primarily affects the lungs and digestive system. An estimated 30,000 children and adults in the United States (70,000 worldwide) have CF. Although cystic fibrosis requires daily care, people with the condition are able to attend school and work, and have a better quality of life than in previous decades. With the help of the Cystic Fibrosis Foundation, and donors like you, people with CF are able now live into their 20s and 30s, and some are living into their 40s and 50s.</p>
            </div>
        </section>
    </div>

    <div class="row">
        <section class="wrapper">
            <h1 class="large-heading center">Our Last Event</h1>
            <div class="col-10 right">
                <img class="full-image" src="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-42.jpg') }}" alt="Uncorked Summer 2016 Crowd">
            </div>
            <div class="col-13 left">
                <h2 class="main-heading">Summer 2016 Tasting at The Muhammad Ali Center</h2>
                <h3 class="small-heading text-light">Benefitting Spina Bifida Association of Kentucky</h3>
                <p>Louisville Uncorked held the Summer event on June 16, 2016 which benefitted Spina Bifida Association of Kentucky and raised over $6,500 and significant community awareness. There were more than 400 participants split between 200 teams tasting some of the best Pinot Noirs.</p>
            </div>
        </section>
    </div>

    <div class="row grey-bg center">
        <section class="wrapper">
            <h1 class="large-heading">The Winners of Summer 2016 Tasting</h1>
            <div class="place-card col-7">
                <div class="image-trophy-container">
                    <img class="full-image" src="{{ URL::asset('images/photos/2016-summer-event/gold-winner.jpg') }}" alt="">
                    <span class="icon-trophy gold"></span>
                </div>
                <h2 class="main-heading">1<span>st</span></h2>
                <p>Casavecchia Pinot Noir</p>
                <p>Brought by Lauren Beck</p>
            </div>

            <div class="place-card col-7">
                <div class="image-trophy-container">
                    <img class="full-image" src="{{ URL::asset('images/photos/2016-summer-event/silver-winner.jpg') }}" alt="">
                    <span class="icon-trophy silver"></span>
                </div>
                <h2 class="main-heading">2<span>nd</span></h2>
                <p>Barefoot Pinot Noir</p>
                <p>Brought by Tara Shelton</p>
            </div>

            <div class="place-card col-7">
                <div class="image-trophy-container">
                    <img class="full-image" src="{{ URL::asset('images/photos/2016-summer-event/bronze-winner.jpg') }}" alt="">
                    <span class="icon-trophy bronze"></span>
                </div>
                <h2 class="main-heading">3<span>rd</span></h2>
                <p>Smoking Loon Pinot Noir</p>
                <p>Brought by Brian Armstrong</p>
            </div>
        </section>
    </div>

    <div class="row photo-gallery">
        <section class="small-wrapper">
            <h1 class="large-heading center mb-0">Photo Gallery</h1>
            <p class="center">Check out our pics from the latest event!</p>
            <ul class="photo-gallery-list">
                <li class="col-16"><a href="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-19.jpg') }}" data-lightbox="image-1" data-title="Summer 2016 Tasting at The Muhammad Ali Center"><img src="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-19.jpg') }}" alt="Summer 2016 Tasting at The Muhammad Ali Center Image 19"></a></li>
                <li class="col-8"><a href="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-20.jpg') }}" data-lightbox="image-1" data-title="Summer 2016 Tasting at The Muhammad Ali Center"><img src="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-20.jpg') }}" alt="Summer 2016 Tasting at The Muhammad Ali Center Image 20"></a></li>
                <li class="col-8"><a href="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-30.jpg') }}" data-lightbox="image-1" data-title="Summer 2016 Tasting at The Muhammad Ali Center"><img src="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-30.jpg') }}" alt="Summer 2016 Tasting at The Muhammad Ali Center Image 30"></a></li>
                <li class="col-8"><a href="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-40.jpg') }}" data-lightbox="image-1" data-title="Summer 2016 Tasting at The Muhammad Ali Center"><img src="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-40.jpg') }}" alt="Summer 2016 Tasting at The Muhammad Ali Center Image 40"></a></li>
                <li class="col-8"><a href="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-50.jpg') }}" data-lightbox="image-1" data-title="Summer 2016 Tasting at The Muhammad Ali Center"><img src="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-50.jpg') }}" alt="Summer 2016 Tasting at The Muhammad Ali Center Image 50"></a></li>
                <li class="col-8"><a href="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-60.jpg') }}" data-lightbox="image-1" data-title="Summer 2016 Tasting at The Muhammad Ali Center"><img src="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-60.jpg') }}" alt="Summer 2016 Tasting at The Muhammad Ali Center Image 60"></a></li>
                <li class="col-16"><a href="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-70.jpg') }}" data-lightbox="image-1" data-title="Summer 2016 Tasting at The Muhammad Ali Center"><img src="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-70.jpg') }}" alt="Summer 2016 Tasting at The Muhammad Ali CenterImage 70"></a></li>
                <li class="col-8"><a href="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-80.jpg') }}" data-lightbox="image-1" data-title="Summer 2016 Tasting at The Muhammad Ali Center"><img src="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-80.jpg') }}" alt="Summer 2016 Tasting at The Muhammad Ali Center Image 80"></a></li>
                <li class="col-8"><a href="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-90.jpg') }}" data-lightbox="image-1" data-title="Summer 2016 Tasting at The Muhammad Ali Center"><img src="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-90.jpg') }}" alt="Summer 2016 Tasting at The Muhammad Ali Center Image 90"></a></li>
                <li class="col-8"><a href="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-100.jpg') }}" data-lightbox="image-1" data-title="Summer 2016 Tasting at The Muhammad Ali Center"><img src="{{ URL::asset('images/photos/2016-summer-event/Louisiville-Uncorked-100.jpg') }}" alt="Summer 2016 Tasting at The Muhammad Ali Center Image 100"></a></li>
            </ul>

            <a class="button mt-20" href="/photos/2016-summer-event">See more photos<span class="icon-circle-right"></span></a>
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