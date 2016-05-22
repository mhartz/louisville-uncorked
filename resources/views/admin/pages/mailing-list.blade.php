@extends('admin.layout')

@section('content')

    <div class="row">
        <div class="col-md-offset-1 col-md-10">
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

                    {!! Form::open(array('route' => 'unsubscribe', 'id' => 'unsubscribe-form')) !!}

                    <div class="form-group mt-20">
                        {!! Form::label('Email') !!}
                        {!! Form::text('email', null,
                            array(
                              'required',
                              'id'=>'unsubscribe-email',
                              'class'=>'form-control',
                              'placeholder'=>'Enter Email to Unsubscribe'
                            )
                          )
                        !!}
                    </div>

                    {!! Form::submit('Unsubscribe', array('class'=>'button right')) !!}
                    {!! Form::close() !!}

            </div>
        </div>
    </div>

@stop