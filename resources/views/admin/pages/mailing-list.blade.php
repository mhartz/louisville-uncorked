@extends('layout-admin')

@section('content')

    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <h1 class="m-t-0">Compose Newletter message</h1>
            <div class="jumbotron how-to-create" >
                @if ($errors->has())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif
                @if(Session::has('message'))
                    <div class="alert alert-info">
                        {{Session::get('message')}}
                    </div>
                @endif

                <h3 class="m-t-0">Send newsletter</h3>
                <p>This will send a formatted email using the text entered in the text area below to all users that are subscribed to receive the newsletter.</p>

                {!! Form::open(array('route' => 'unsubscribe', 'id' => 'unsubscribe-form')) !!}

                <div class="form-group">
                    {!! Form::label('Subject') !!}
                    {!! Form::text('subject', null,
                        array(
                          'required',
                          'id'=>'subject',
                          'class'=>'subject-text form-control',
                          'placeholder'=>'Add the email subject here...'
                        )
                      )
                    !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Message') !!}
                    {!! Form::textarea('message', null,
                        array(
                          'required',
                          'id'=>'message',
                          'class'=>'message-text-area form-control',
                          'placeholder'=>'Type the body of the email message here...'
                        )
                      )
                    !!}
                </div>


                {!! Form::submit('Send Newsletter', array('class'=>'btn btn-primary')) !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>

@stop