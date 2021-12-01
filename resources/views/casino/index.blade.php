@extends('layouts.casino_home')

@section('content')

    <div class="container py-5 my-5">
        <ul class="list-group">
            @if(isset($games))
                @foreach ($games as $game)
                    <li class="list-group-item d-flex justify-content-between align-items-center row bg-dark text-white" style="--bs-bg-opacity: 0.95;">
                        <div class="col-md-2">
                            <img src="{{ $game['image'] }}" class="img-fluid" alt="">
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col text-left">
                                    <h4>{{ $game['name'] }}</h4>
                                    <p>{{ $game['description'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            @if(Route::has('casino.games.play'))
                                <a href="{{ route('casino.game.play', ['game' => $game['id']]) }}" class="btn btn-outline-primary btn-lg border-rainbow text-rainbow">
                                    PLAY NOW
                                </a>
                            @else
                                <button type="button" class="btn btn-outline-primary btn-lg border-rainbow text-rainbow">
                                    PLAY NOW
                                </button>
                            @endif
                        </div>
                    </li>
                @endforeach
            @else
                <li class="list-group-item d-flex justify-content-between align-items-center row bg-dark text-white">
                    No games available
                </li>
            @endif
        </ul>
    </div>

@endsection

@section('scripts')
    <script>
    </script>
@endsection

@section('styles')
    <style>

    </style>
@endsection