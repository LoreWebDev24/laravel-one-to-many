@extends('layouts.app')

@section('content')
    <section>
      <div class="container pt-5">
        <h1 class="pt-3">{{ $project->title }}</h1>
        <h3 class="pt-2">{{ $project->title }}</h3>
      </div>
    </section>
    <section>
      <div class="container">
        {{-- RIMUOVE I TAG HTML  --}}
        {!! $project->content !!}
      </div>
    </section>
@endsection
