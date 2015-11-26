@extends('layout')

@section('content')

<div class="wrapper">
  <h1>This is the Show Teams page</h1>
  
  <table>
    <tr>
      <th>Team ID</th>
      <th>Event ID</th>
      <th>Event Name</th>
      <th>Team Name</th>
      <th>Registrant Name</th>
      <th>Registrant Email</th>
    </tr>
    
    @foreach ($teams as $team)
      <tr>
        <td>{{ $team->id }}</td>
        <td>{{ $team->event_id }}</td>
        <td>{{ $event->event_name }}</td>
        <td>{{ $team->team_name }}</td>
        <td>{{ $team->registrant_first_name }} {{ $team->registrant_last_name }}</td>
        <td>{{ $team->registrant_email }}</td>
      </tr>
    @endforeach
  </table>
</div>
@stop