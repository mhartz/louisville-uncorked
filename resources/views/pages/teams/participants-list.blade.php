@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <h1 class="main-heading">Participants page</h1>
        <div class="table-responsive">
            <a href="{{ url('admin/participantListPrintByTeam') }}" target="_blank" class="btn btn-primary">Printable List by Team</a>
            <a href="{{ url('admin/participantListPrintByName') }}" target="_blank" class="btn btn-primary">Printable List by Last Name</a>
            <table class="edit-teams-table table mt-40 mb-40">
                {{--<tr>--}}
                    {{--<th>ID</th>--}}
                    {{--<th>Name</th>--}}
                    {{--<th>Team Name</th>--}}
                    {{--<th>Edit Menu</th>--}}
                {{--</tr>--}}

                {{--@foreach ($participants as $participant)--}}
                    {{--@if ($participant->active == 1)--}}
                        {{--<form class="form-horizontal" method="POST" action="./editTeams" role="form" data-parent-id="{{ $participant->id }}">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<tr>--}}
                                {{--<td><input participant-id-attr-{{ $participant->id }} type="hidden" class="form-control" name="participantId" value="{{ $participant->id }}">{{ $participant->id }}</td>--}}
                                {{--<td class="names"><input first-name-attr-{{ $participant->id }} type="text" class="form-control" name="firstName" value="{{ $participant->first_name }}" edit-team-input disabled> <input last-name-attr-{{ $participant->id }} type="text" class="form-control" name="lastName" value="{{ $participant->last_name }}" edit-team-input disabled></td>--}}
                                {{--@foreach ($teams as $team)--}}
                                    {{--@if ($participant->team_id == $team->id)--}}
                                        {{--<td>--}}
                                            {{--<input team-name-attr-{{ $participant->id }} team-id-name-{{ $team->id }} type="text" class="form-control" name="teamName" value="{{ $team->team_name }}" edit-team-input disabled>--}}
                                            {{--<input team-id-attr-{{ $participant->id }} type="hidden" class="form-control" name="teamId" value="{{ $team->id }}" edit-team-input disabled>--}}
                                        {{--</td>--}}
                                    {{--@endif--}}
                                {{--@endforeach--}}
                                {{--<td>--}}
                                    {{--@if ($count <= 2)--}}
                                        {{--<a class="add-participant-button btn btn-submit" data-id="{{ $team->id }}" data-edit-state="false">+ Add</a>--}}
                                    {{--@endif--}}
                                    {{--<a class="edit-participant-button btn btn-submit" data-id="{{ $participant->id }}" data-edit-state="false">Edit</a>--}}
                                    {{--<a class="cancel-participant-button btn btn-submit outline" data-id="{{ $participant->id }}" data-edit-state="false">Cancel</a>--}}
                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--</form>--}}
                    {{--@endif--}}
                {{--@endforeach--}}

                <tr>
                    <th>ID</th>
                    <th>Team Name</th>
                    <th>Name</th>
                    <th>Edit Menu</th>
                </tr>

                @foreach ($teams as $count=>$team)
                    <tr>
                        <td>{{ $count }}</td>
                        <td>{{ $team->team_name }}</td>
                        <td>
                            @php ($participantCount = 0)
                            @foreach ($participants as $participant)
                                @if ($participant->team_id == $team->id)
                                    <div id="team-uneditable">
                                        <p>{{ $participant->first_name }} {{  $participant->last_name }}</p>
                                    </div>

                                    <div id="team-editable">
                                        <input participant-id-attr-{{ $participant->id }} type="hidden" class="form-control" name="participantId" value="{{ $participant->id }}">
                                        <p><input first-name-attr-{{ $participant->id }} type="text" class="form-control" name="firstName" value="{{ $participant->first_name }}"> <input last-name-attr-{{ $participant->id }} type="text" class="form-control" name="lastName" value="{{ $participant->last_name }}"></p>
                                    </div>
                                    @php ($participantCount++)
                                @endif
                            @endforeach
                            @if ($participantCount <= 1)
                                <p><input type="text" class="form-control" name="firstName" value="Teammate 2 First Name"> <input type="text" class="form-control" name="lastName" value="Teammate 2 Last Name"></p>
                            @endif

                            @if ($participantCount <= 2)
                                <p><input type="text" class="form-control" name="firstName" value="Teammate 3 First Name"> <input type="text" class="form-control" name="lastName" value="Teammate 3 Last Name"></p>
                            @endif
                        </td>
                        <td data-edit-state="false">
                            <div id="edit-team-section">
                                <button id="edit-team" class="btn btn-submit" data-team-id="{{ $team->id }}">Edit</button>
                                <button id="remove-team" class="btn btn-submit outline" data-team-id="{{ $team->id }}">Delete</button>
                            </div>

                            <div id="save-cancel-team-section">
                                <button id="save-team" class="btn btn-submit" data-team-id="{{ $team->id }}">Save</button>
                                <button id="cancel-save-team" class="btn btn-submit outline" data-team-id="{{ $team->id }}">Cancel</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@stop