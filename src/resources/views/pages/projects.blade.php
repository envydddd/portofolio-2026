@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold mb-6">
    My Projects
</h1>

@foreach($projects as $project)

<div class="bg-white rounded-xl p-6 shadow mb-5">

    <h2 class="text-2xl font-bold mb-3">
        {{ $project->title }}
    </h2>

    <p class="mb-4">
        {{ $project->description }}
    </p>

    <a href="/projects/{{ $project->slug }}">
        Read More
    </a>

</div>

@endforeach

@endsection