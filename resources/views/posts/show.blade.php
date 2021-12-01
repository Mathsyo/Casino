@extends('layouts.default')

@section('content')

    <h1>
        <a href="{{ route('posts.index') }}" class="btn btn-clear-dark">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </a>
        {{ $post->title }}
    </h1>
    <div>

        @can('posts-edit')
            <a href="{{ route('posts.edit', $post->id) }}" class="text-decoration-none">
                {{-- <ion-icon name="pencil-outline"></ion-icon> --}}
                Edit
            </a>
             • 
        @endcan
        @can('posts-delete')
            <a href="{{ route('posts.delete', $post->id) }}" class="text-decoration-none">
                {{-- <ion-icon name="trash-outline"></ion-icon> --}}
                Delete
            </a>
        @endcan

    </div>

    <hr>

    @include('includes.flash')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p>{{ $post->body }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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