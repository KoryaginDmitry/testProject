@extends('layouts.main')

@section('title', 'Статьи')

@section('content')
    @include('includes.statesList', $states)

    <div class="container">
        {{ $states->links() }}
    </div>
@endsection
