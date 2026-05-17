@extends('layouts.app')

@section('content')

<h1 class="text-4xl font-bold mb-6">
    {{ $project->title }}
</h1>

<p class="mb-8">
    {{ $project->description }}
</p>

@foreach($project->sections as $section)

<div class="bg-white shadow rounded-xl p-6 mb-6">

    <h2 class="text-2xl font-bold mb-4 capitalize">
        {{ str_replace('_', ' ', $section->section_type) }}
    </h2>

    <div>
        {!! nl2br(e($section->content)) !!}
    </div>

</div>

@endforeach

@endsection