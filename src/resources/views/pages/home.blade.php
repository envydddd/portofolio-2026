@extends('layouts.app')

@section('content')

<h1 class="text-4xl font-bold mb-4">
    Portfolio Website
</h1>

<p class="mb-10">
    Saya adalah developer yang fokus pada Laravel dan Filament.
</p>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    @foreach($projects as $project)

        <div class="bg-white rounded-xl shadow p-5">
            <h2 class="text-xl font-bold mb-2">
                {{ $project->title }}
            </h2>

            <p class="text-sm text-gray-600 mb-4">
                {{ Str::limit($project->description, 100) }}
            </p>

            <a
                href="/projects/{{ $project->slug }}"
                class="text-blue-600"
            >
                Detail Project
            </a>
        </div>

    @endforeach

</div>

@endsection