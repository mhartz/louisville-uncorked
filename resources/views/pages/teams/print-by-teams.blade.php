@extends('layouts.print-app')

@section('content')

    <div class="wrapper">
        <h1 class="main-heading">Participants By Team Name</h1>
        <div class="table-responsive">
            <a href="{{ url('admin/participantListPrintByTeam') }}" class="btn btn-primary">Printable List by Team</a>
            <a href="{{ url('admin/participantListPrintByName') }}" class="btn btn-primary">Printable List by Last Name</a>
            <table class="edit-teams-table table mt-40 mb-40">
                <tr>
                    <th>Count</th>
                    <th>Team Name</th>
                    <th>Name</th>
                </tr>

                @foreach ($participants as $i=>$participant)
                    <tr>
                        <td>{{ $i }}</td>
                        <td class="names">
                            @foreach ($teams as $team)
                                @if ($participant->team_id == $team->id)
                                    {{ $team->team_name }}
                                @endif
                            @endforeach
                        </td>
                        <td>{{ $participant->first_name }} {{ $participant->last_name }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop