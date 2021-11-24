@extends('layouts.default')

@section('content')

    <h1>
        <a href="{{ route('home') }}" class="btn btn-clear-dark">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </a>
        My home page with default layout
        <a href="{{ route('home') }}" class="btn btn-outline-primary float-end">
            Page d'accueil
        </a>
    </h1>

    <hr>
    @include('includes.flash')
    {!! Form::open(['route' => 'home', 'method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name :') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Submit', ['class' => 'btn btn-primary float-end']) !!}
    {!! Form::close() !!}

@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $('#input').focus();
        });
    </script>
@endsection

@section('styles')
    <style>
        .form-group {
            margin-bottom: 1rem;
        }
    </style>
@endsection