@extends('layouts.app')

@section('content')
    <section class="pt-5">
      <div class="container">
        <h1>{{ $project->title }}</h1>
        @if($project->type)
        <h4>
          {{ $project->type->name }}
        </h4>
        @endif
        <h3>{{ $project->slug }}</h3>
        <p>Post Made: {{ $project->created_at->format('d/m/Y') }}</p>
      </div>
    </section>
@endsection
