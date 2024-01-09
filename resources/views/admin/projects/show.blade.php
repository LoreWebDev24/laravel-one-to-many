@extends('layouts.app')

@section('content')
    <section>
      <div class="container pt-5">
        <h1 class="pt-3">{{ $project->title }}</h1>
        {{-- THE SLUG IS THE SAME OF THE TITLE  --}}
        <h3 class="pt-2">{{ $project->title }}</h3>
        @if ($project->type)
            <h4>
              {{ project->type->name }}
            </h4>
        @endif
      </div>
    </section>
    <section>
      <div class="container">
        {{-- RIMUOVE I TAG HTML  --}}
        {!! $project->content !!}
      </div>
    </section>
@endsection
