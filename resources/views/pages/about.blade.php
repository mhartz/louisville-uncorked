@extends('layout')

@section('banner')
    <div class="banner">
        <section class="small-wrapper">
            <h1 class="large-heading">{{ $pageName }}</h1>
        </section>
    </div>
@stop

@section('content')
    <div class="about-content mb-40">

        <div class="row">
            <div class="small-wrapper">
                <section class="founders-directors">
                    <h2 class="main-heading">Founders and Directors</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cumque delectus dicta earum eligendi, et explicabo, fuga ipsa iure laboriosam magnam natus officia perferendis perspiciatis quam quas quibusdam recusandae vero.</p>

                    <div class="detailed-portrait left">
                        <img src="{{ URL::asset('images/photos/FoundersDirectorsPage/nikki-placeholder.jpg') }}" alt="Nikki Carver - Director">
                        <h3 class="small-heading primary mb-0 mt-10">Nikki Carver</h3>
                        <p>Director</p>
                    </div>

                    <div class="detailed-portrait left">
                        <img src="{{ URL::asset('images/photos/FoundersDirectorsPage/nikki-placeholder.jpg') }}" alt="Nikki Carver - Director">
                        <h3 class="small-heading primary mb-0 mt-10">Andrew Fleischman</h3>
                        <p>Founder</p>
                    </div>

                    <div class="detailed-portrait left">
                        <img src="{{ URL::asset('images/photos/FoundersDirectorsPage/nikki-placeholder.jpg') }}" alt="Nikki Carver - Director">
                        <h3 class="small-heading primary mb-0 mt-10">Casner Wheelock</h3>
                        <p>Founder</p>
                    </div>

                    <div class="detailed-portrait left">
                        <img src="{{ URL::asset('images/photos/FoundersDirectorsPage/nikki-placeholder.jpg') }}" alt="Nikki Carver - Director">
                        <h3 class="small-heading primary mb-0 mt-10">Chris Jones</h3>
                        <p>Founder</p>
                    </div>

                    <div class="detailed-portrait left">
                        <img src="{{ URL::asset('images/photos/FoundersDirectorsPage/nikki-placeholder.jpg') }}" alt="Nikki Carver - Director">
                        <h3 class="small-heading primary mb-0 mt-10">Josh Hartlage</h3>
                        <p>Founder</p>
                    </div>

                </section>
            </div>
        </div>

        <div class="row grey-bg">
            <section class="small-wrapper">
                <h2 class="main-heading">The Committee</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cumque delectus dicta earum eligendi, et explicabo, fuga ipsa iure laboriosam magnam natus officia perferendis perspiciatis quam quas quibusdam recusandae vero.</p>

                <div class="committee-container mb-40">
                    <img src="{{ URL::asset('images/photos/2015-fall-meetup/photos7.jpg') }}" alt="Committee Group at the Meetup">
                    <p><b>From left to right, back to front:</b> John Smith, Jane Smith, John Hancock, George Washington, Abraham Lincoln, George Bush, Rondald Reagan, Steve Austin</p>
                </div>

                <div class="committee-interest center">
                    <h2 class="main-heading">Interested in joining the committee?</h2>
                    <p>Simply <a href="/contact" alt="Click to go to contact us page.">click here</a>, fill out the form and we will get back with you as soon as we can.</p>
                </div>

            </section>
        </div>
    </div>
@stop