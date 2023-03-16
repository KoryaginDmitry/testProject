@extends('layouts.main')

@section('title', $state->title)

@section('content')
    <div class="col container mb-5 text-center  ">
        <div class="row-md-5 text-center mb-2">
            <img class="img-fluid" src="{{ asset(config('siteOptions.imagePath') . $state->image) }}" alt="error load">
        </div>
        <div class="row text-center">
            <h2 class="heading">{{ $state->title }}</span></h2>
            <p class="lead">{{ $state->content }}</p>
        </div>
    </div>
@endsection
