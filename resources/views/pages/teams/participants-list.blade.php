@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <h1 class="main-heading">Participants page</h1>
        <div class="table-responsive">
            <table class="edit-teams-table table mt-40 mb-40">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Team Name</th>
                    <th>Edit Menu</th>
                </tr>

                @foreach ($participants as $participant)
                    @if ($participant->active == 1)
                        <form class="form-horizontal" method="POST" action="./editTeams" role="form" data-parent-id="{{ $participant->id }}">
                            {{ csrf_field() }}
                            <tr>
                                <td><input participant-id-attr-{{ $participant->id }} type="hidden" class="form-control" name="participantId" value="{{ $participant->id }}">{{ $participant->id }}</td>
                                <td class="names"><input first-name-attr-{{ $participant->id }} type="text" class="form-control" name="firstName" value="{{ $participant->first_name }}" edit-team-input disabled> <input last-name-attr-{{ $participant->id }} type="text" class="form-control" name="lastName" value="{{ $participant->last_name }}" edit-team-input disabled></td>
                                @foreach ($teams as $team)
                                    @if ($participant->team_id == $team->id)
                                        <td>
                                            <input team-name-attr-{{ $participant->id }} team-id-name-{{ $team->id }} type="text" class="form-control" name="teamName" value="{{ $team->team_name }}" edit-team-input disabled>
                                            <input team-id-attr-{{ $participant->id }} type="hidden" class="form-control" name="teamId" value="{{ $team->id }}" edit-team-input disabled>
                                        </td>
                                    @endif
                                @endforeach
                                <td>
                                    <a class="edit-participant-button btn btn-submit" data-id="{{ $participant->id }}" data-edit-state="false">Edit</a>
                                    <a class="cancel-participant-button btn btn-submit outline" data-id="{{ $participant->id }}" data-edit-state="false">Cancel</a>
                                </td>
                            </tr>
                        </form>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
@stop