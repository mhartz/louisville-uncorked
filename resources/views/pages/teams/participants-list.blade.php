@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <h1 class="main-heading">Participants page</h1>
        <div class="table-responsive">
            <a href="{{ url('admin/participantListPrintByTeam') }}" target="_blank" class="btn btn-primary">Printable List by Team</a>
            <a href="{{ url('admin/participantListPrintByName') }}" target="_blank" class="btn btn-primary">Printable List by Last Name</a>
            <table class="edit-teams-table table mt-40 mb-40">
                <tr>
                    <th>ID</th>
                    <th>Team Name</th>
                    <th>Name</th>
                    <th>Edit Menu</th>
                </tr>

                @foreach ($teams as $count=>$team)
                    <tr id="team-{{ $team->id }}">
                        <td>{{ $count }}</td>
                        <td class="team-names">
                            <div class="team-static-text">
                                {{ $team->team_name }}
                            </div>
                            <div class="team-editable editable-value hidden">
                                <input team-id-attr-{{ $team->id }} type="hidden" class="form-control" name="teamId" value="{{ $team->id }}">
                                <input team-name-attr-{{ $team->id }} type="text" class="form-control" name="teamName" value="{{ $team->team_name }}">
                            </div>
                        </td>
                        <td class="names">
                            @php ($participantCount = 0)
                            @foreach ($participants as $participant)
                                @if ($participant->team_id == $team->id)
                                    <div class="team-static-text">
                                        <p>{{ $participant->first_name }} {{  $participant->last_name }}</p>
                                    </div>

                                    <div class="team-editable editable-value hidden">
                                        <input participant-id-attr-{{ $participant->id }} type="hidden" class="form-control" name="participantId" value="{{ $participant->id }}">
                                        <input first-name-attr-{{ $participant->id }} type="text" class="form-control" name="firstName" value="{{ $participant->first_name }}"> <input last-name-attr-{{ $participant->id }} type="text" class="form-control" name="lastName" value="{{ $participant->last_name }}">
                                    </div>
                                    @php ($participantCount++)
                                @endif
                            @endforeach
                            @if ($participantCount <= 1)
                                <div class="new-team-members editable-value hidden">
                                    <input type="text" class="form-control" name="firstName" placeholder="First"> <input type="text" class="form-control" name="lastName" placeholder="Last">
                                </div>
                            @endif

                            @if ($participantCount <= 2)
                                <div class="new-team-members editable-value hidden">
                                    <input type="text" class="form-control" name="firstName" placeholder="First"> <input type="text" class="form-control" name="lastName" placeholder="Last">
                                </div>
                            @endif
                        </td>
                        <td data-edit-state="false">
                            <div class="edit-team-section team-static-text">
                                <button class="edit-team-button btn btn-submit" data-team-id="{{ $team->id }}">Edit</button>
                                <button class="remove-team btn btn-submit outline" data-team-id="{{ $team->id }}">Delete</button>
                            </div>

                            <div class="save-cancel-team-section editable-value hidden">
                                <button class="save-team btn btn-submit" data-team-id="{{ $team->id }}">Save</button>
                                <button class="cancel-save-team btn btn-submit outline" data-team-id="{{ $team->id }}">Cancel</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop