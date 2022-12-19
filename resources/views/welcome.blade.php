@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="text-center py-2">Movies List</h1>
    <div class="row row-cols-3 g-4">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title }}</h5>
                    <h6 class="card-text">Release date: {{ $movie->date }}</h6>
                    <h6 class="card-text">Rating: {{ $movie->vote }}</h6>

                </div>
            </div>
        </div>
        @empty
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-text">No movies found!</h6>
                </div>
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection