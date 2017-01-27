@extends('layout')

@section('content')

<div class="wrapper">
  <h1 class="main-heading">Participants page</h1>
  
  <table class="data-table mt-40 mb-40">
    <tr>
        <th>ID</th>
      <th>Name</th>
      <th>Team Name</th>
    </tr>
    
    @foreach ($participants as $participant)
      @if ($participant->active === 1)
        <tr>
            <td>{{ $participant->id }}</td>
          <td>{{ $participant->last_name }}, {{ $participant->first_name }}</td>
          @foreach ($teams as $team)
            @if ($participant->team_id === $team->id)
              <td>{{ $team->team_name }}</td>
            @endif
          @endforeach
        </tr>
      @endif
    @endforeach
  </table>
</div>
@stop