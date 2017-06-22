@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <h1 class="main-heading">Email List for Event</h1>
        <div class="table-responsive">
            <table class="edit-teams-table table mt-40 mb-40">
                <tr>
                    <th>Email Address</th>
                </tr>

                @foreach ($participants as $i=>$participant)
                    @if ($participant->email != null || trim($participant->email) != '')
                        <tr>
                            <td>{{ $participant->email }}</td>
                        </tr>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
@stop