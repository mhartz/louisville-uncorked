@extends('layout')

@section('content')
<div class="wrapper">
  <h1>This is the Edit Team page</h1>
  
  <p>Team Name: {{ $team->team_name }}</p>
  <p>Registrant: {{ $team->registrant_first_name }}, {{ $team->registrant_last_name }}, {{ $team->registrant_email }}</p>
  @if (isset($teammateFirst))
    <p>Teammate 1: {{ $teammateFirst->first_name }}, {{ $teammateFirst->last_name }}, {{ $teammateFirst->email }}</p>
  @endif
  @if (isset($teammateSecond))
    <p>Teammate 2: {{ $teammateSecond->first_name }}, {{ $teammateSecond->last_name }}, {{ $teammateSecond->email }}</p>
  @endif
</div>

@stop