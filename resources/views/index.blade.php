@extends('layout')

@section('banner')
  <div class="banner">
    <section class="wrapper">
      <h1 class="banner-heading mb-10">Register Now for the Fall 2015 Tasting</h1>
      <h2 class="small-heading secondary">October 22, 2015</h2>
      <h2 class="small-heading secondary">7:30pm - 10:30pm</h2>
      <h2 class="small-heading secondary mb-10">The Foundry at the Glassworks</h2>
      <a class="button inline-block" href="/registration">Register Your Team <span class="icon-circle-right"></span></a>
      <a href="/mailing-list" class="button inline-block">Join Our Mailing List</a>
    </section>
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
      <p><span class="icon-calendar2"></span><i>Date: </i>October 22, 2015</p>
      <p><span class="icon-clock2"></span><i>Time: </i>7:30pm - 10:30pm</p>
      <p><span class="icon-location"></span><i>Location: </i>The Foundry at the Glassworks, 815 W Market St, Louisville, KY 40202</p>
      <p><span class="icon-glass"></span><i>Tasting Variety: </i>Chardonnay</p>
      <p><span class="icon-banknote"></span><i>Cost: </i> Minimum $20 donation for our sponsored charity</p>
      <p><span class="icon-user-tie"></span><i>Dress: </i>"Dress to Impress" <span class="tooltip">? <span class="toolpop">Don't let clothing options discourage you, but feel free to get dressed up for the night if you like! Most girls will likely wear a dress or slacks and pants, men can wear business casual or a suit.</span></span></p>
    </section>
    
    <iframe class="upcoming-event-media col-12" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12531.998506803531!2d-85.76454129999999!3d38.256314700000026!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x733dc6070e8332a5!2sThe+Foundry+at+Glassworks!5e0!3m2!1sen!2sus!4v1441746165022" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>

<div class="row dark-bg">
  <section class="wrapper">
    <h1 class="large-heading center">The Charity</h1>
    
    <div class="charity-left">
      <a href="//fundforthearts.com/"><img src="{{ URL::asset('images/white-FFTA-Logo.png') }}" alt="Fund for the Arts"></a>
    </div>
    
    <div class="charity-right">
      <h2 class="main-heading"><a href="//fundforthearts.com/">Fund for the Arts</a></h2>
      <h3 class="small-heading secondary-ondark-light">Together through the Arts we create a great American city.</h3>
      <p>The Fund for the Arts is the oldest united Arts fund in the country and has raised more than $196 million since its establishment in 1949. In 2014, the Fund for the Arts awarded 516 grants to schools and community organizations throughout the region to provide financing for Arts experiences and administrative support. In addition to operating the only community-wide fundraising effort for the Arts, a sister organization of the Fund for the Arts, FFTA Properties, Inc., owns and manages ArtSpace. Located at 323 West Broadway, ArtSpace is a mixed-use development that includes the Brown Theatre, as well as a non-profit business incubator, Arts administrative offices, classrooms, meeting spaces, a rehearsal hall and costume shop.</p>
    </section>
    </div>
</div>

<div class="row">
  <section class="wrapper">
    <h1 class="large-heading center">Our Last Event</h1>
    <div class="col-10 right">
      <img class="full-image" src="{{ URL::asset('images/photos/2015-winter-event/winter-2015-crowd.jpg') }}" alt="Louisville Uncorked shirt with branded wine glasses">
    </div>
    <div class="col-13 left">
      <h2 class="main-heading">Winter 2015 Tasting at Mellwood Arts Center</h2>
      <h3 class="small-heading text-light">Benefitting the Family and Childrens Place</h3>
      <p>After a 3 year haitus, Louisville Uncorked held its first event on February 2015 which benefitted Family &amp; Children's Place and raised over $7,000 and significant community awareness. There were more than XXXX number of participants split between XXXX teams tasting some of the best South American red wines.</p>
    </div>
  </section>
</div>

<div class="row grey-bg center">
  <section class="wrapper">
    <h1 class="large-heading">The Winners of the Winter 2015 Tasting</h1>
    <div class="place-card col-7">
      <div class="image-trophy-container">
        <img class="full-image" src="{{ URL::asset('images/photos/estampa-red.jpg') }}" alt="">
        <span class="icon-trophy gold"></span>
      </div>
      <h2 class="main-heading">1<span>st</span></h2>
      <p>Estampa Malbec</p>
      <p>Brought by Brian Bennett</p>
    </div>
    
    <div class="place-card col-7">
      <div class="image-trophy-container">
        <img class="full-image" src="{{ URL::asset('images/photos/new-age-red.jpg') }}" alt="">
        <span class="icon-trophy silver"></span>
      </div>
      <h2 class="main-heading">2<span>nd</span></h2>
      <p>New Age Red</p>
      <p>Brought by Daniel Johnson</p>
    </div>
    
    <div class="place-card col-7">
      <div class="image-trophy-container">
        <img class="full-image" src="{{ URL::asset('images/photos/filus-red.jpg') }}" alt="">
        <span class="icon-trophy bronze"></span>
      </div>
      <h2 class="main-heading">3<span>rd</span></h2>
      <p>Filus 2011</p>
      <p>Brought by Joanna Jolgren</p>
    </div>
  </section>
</div>

<div class="row photo-gallery">
  <section class="small-wrapper">
    <h1 class="large-heading center mb-0">Photo Gallery</h1>
    <p class="center">Check out our pics from the latest event!</p>
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
    
    <a class="button mt-20" href="/photos">See more photos<span class="icon-circle-right"></span></a>
  </section>
</div>

<div class="row bottom-register">
  <div class="tiny-wrapper">
    <h2 class="main-heading">Register your team and join us!</h2>
    <a class="white-outline-button" href="/registration">Register Here</a>
  </div>
</div>

@stop