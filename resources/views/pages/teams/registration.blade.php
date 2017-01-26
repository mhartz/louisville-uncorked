@extends('layout')

@section('banner')
  <div class="banner">
    <section class="small-wrapper">
      <h1 class="large-heading">{{ $pageName }}</h1>
    </section>
  </div>
@stop

@section('content')
<div class="tiny-wrapper registration-form">
  <h2 class="main-heading">Register your team</h2>
  <ul class="subtitle-rules">
    <li>You can register up to three people (including you) on a team.</li>
    <li>Each team must consist of at least one person and must bring 3 bottles of the chosen wine variety.</li>
  </ul>
  @if ($errors->has())
      <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
              {{ $error }}<br>        
          @endforeach
      </div>
    @endif
    @if(Session::has('message'))
      <div class="alert alert-info">
        {{Session::get('message')}}
      </div>
    @endif
  <form id="team-registration-form" method="POST" action="/registration" novalidate>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" id="event_id" name="event_id" value="2">
    <div class="team-form-section card-1">
      <div class="form-group">
        <label for="team_name">Team Name</label>
        <input type="text" id="team_name" class="form-control" name="team_name" placeholder="Your Team's Name" value="{!! old('team_name') !!}" required>
        @if ($errors->has('team_name')) <p class="help-block">{{ $errors->first('team_name') }}</p> @endif
      </div>

      <div class="form-group name">
        <label for="registrant_first_name">First Name</label>
        <input type="text" id="registrant_first_name" class="form-control" name="registrant_first_name" placeholder="First" value="{!! old('registrant_first_name') !!}" required>
        @if ($errors->has('registrant_first_name')) <p class="help-block">{{ $errors->first('registrant_first_name') }}</p> @endif
      </div>
      
      <div class="form-group name">
        <label for="registrant_last_name">Last Name</label>
        <input type="text" id="registrant_last_name" class="form-control" name="registrant_last_name" placeholder="Last" value="{!! old('registrant_last_name') !!}" required>
        @if ($errors->has('registrant_last_name')) <p class="help-block">{{ $errors->first('registrant_last_name') }}</p> @endif
      </div>

      <div class="form-group">
        <label for="registrant_email">Email</label>
        <input type="email" id="registrant_email" class="form-control" name="registrant_email" placeholder="registrant@email.com" value="{!! old('registrant_email') !!}" required>
        @if ($errors->has('registrant_email')) <p class="help-block">{{ $errors->first('registrant_email') }}</p> @endif
      </div>
      <span class="teammate-add" data-teammate-add="1" tabindex="0"><span>+</span> Add a Teammate</span>

      {{-- <div class="form-group">
        <label for="password_confirm">Confirm Password</label>
        <input type="password" id="password_confirm" class="form-control" name="password_confirm">
      </div> --}}
    </div>
    
    <div id="first-teammate" class="participant-registration card-1 zoomed-out" data-teammate="1">
      <h2 class="small-heading uppercase text-light">Teammate 1</h2>
      <div class="form-group name">
        <label for="first_participant_first_name">First Name</label>
        <input type="text" id="first_participant_first_name" class="form-control" name="first_participant_first_name" placeholder="First" value="{!! old('first_participant_first_name') !!}">
        @if ($errors->has('first_participant_first_name')) <p class="help-block">{{ $errors->first('first_participant_first_name') }}</p> @endif
      </div>
      
      <div class="form-group name">
        <label for="first_participant_last_name">Last Name</label>
        <input type="text" id="first_participant_last_name" class="form-control" name="first_participant_last_name" placeholder="Last" value="{!! old('first_participant_last_name') !!}">
        @if ($errors->has('first_participant_last_name')) <p class="help-block">{{ $errors->first('first_participant_last_name') }}</p> @endif
      </div>
      
      <div class="form-group">
        <label for="first_participant_email">Email(not required)</label>
        <input type="email" id="first_participant_email" class="form-control" name="first_participant_email" placeholder="teammate1@email.com" value="{!! old('first_participant_email') !!}">
      </div>
      <span class="teammate-add" data-teammate-add="2" tabindex="0"><span>+</span> Add a Teammate</span>
    </div>
    
    <div id="second-teammate" class="participant-registration card-1 zoomed-out mb-30" data-teammate="2">
      <h2 class="small-heading uppercase text-light">Teammate 2</h2>
      <div class="form-group name">
        <label for="second_participant_first_name">First Name</label>
        <input type="text" id="second_participant_first_name" class="form-control" name="second_participant_first_name" placeholder="First" value="{!! old('second_participant_first_name') !!}">
        @if ($errors->has('second_participant_first_name')) <p class="help-block">{{ $errors->first('second_participant_first_name') }}</p> @endif
      </div>
      
      <div class="form-group name">
        <label for="second_participant_last_name">Last Name</label>
        <input type="text" id="second_participant_last_name" class="form-control" name="second_participant_last_name" placeholder="Last" value="{!! old('second_participant_last_name') !!}">
        @if ($errors->has('second_participant_last_name')) <p class="help-block">{{ $errors->first('second_participant_last_name') }}</p> @endif
      </div>
      <div class="form-group">
        <label for="second_participant_email">Email(not required)</label>
        <input type="email" id="second_participant_email" class="form-control" name="second_participant_email" placeholder="teammate2@email.com" value="{!! old('second_participant_email') !!}">
      </div>
    </div>

    <button type="submit" class="button submit mt-20">Register Team<span class="icon-circle-right"></span></button>

  </form>
</div>

@stop