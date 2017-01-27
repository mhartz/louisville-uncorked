@extends('layout')

@section('content')

<div class="wrapper">
  <h1 class="main-heading">Teams page</h1>

  <table class="data-table mt-40 mb-40">
    <tr>
      <th>Team ID</th>
      <th>Team Name</th>
      <th>Registrant Name</th>
    </tr>
    
    @foreach ($teams as $team)
      <tr>
        <td>{{ $team->id }}</td>
        <td>{{ $team->team_name }}</td>
        <td>{{ $team->registrant_first_name }} {{ $team->registrant_last_name }}</td>
      </tr>
    @endforeach
  </table>
</div>
@stop