@extends('layouts.default')

@section('content')

    <h1>
        <a href="{{ route('home') }}" class="btn btn-clear-dark">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </a>
        Create new post
    </h1>

    <hr>

    @include('includes.flash')
    
    {!! Form::open(['route' => 'posts.create', 'method'=>'POST']) !!}

        <div class="form-group">
            <label for="title">{{ __('Title') }}</label>
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autofocus>
            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="body">{{ __('Body') }}</label>
            <textarea id="body" type="text" class="form-control @error('body') is-invalid @enderror" name="body" required autofocus>{{ old('body') }}</textarea>
            @error('body')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    
        <div class="form-group">
            <button type="submit" class="btn btn-primary float-end">
                <ion-icon name="add-outline"></ion-icon>
                {{ __('Create') }}
            </button>
        </div>
    
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