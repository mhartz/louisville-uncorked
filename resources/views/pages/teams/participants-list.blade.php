@extends('layout')

@section('content')

<div class="wrapper">
  <h1>This is the Show Participants page</h1>
  
  <table>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Team Name</th>
    </tr>
    
    @foreach ($participants as $participant)
      @if ($participant->active === 1)
        <tr>
          <td>{{ $participant->last_name }}, {{ $participant->first_name }}</td>
          <td>{{ $participant->email }}</td>
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