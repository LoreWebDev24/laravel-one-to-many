@extends('layouts.app')

@section('content')
    <section class="py-3">
      <div class="container">
        <h1>{{ $project->title }}</h1>
      </div>
    </section>
    <section>
      <div class="container">
        <form action="{{ route('admin.projects.update',$project) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Project Title:" value="{{ old('title',$project->title) }}">
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" readonly required class="form-control" name="slug" id="slug" placeholder="Titolo del post" value="{{ old('slug',$project->slug) }}">
        </div>
        <div class="mb-3">
          <label for="type_id" class="form-label">Types</label>
          <select name="type_id" class="form-control" id="type_id">
            <option>Select a Type</option>
            @foreach($types as $type)
              <option @selected( old('type_id', optional($project->type)->id ) == $type->id ) value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="content"  class="form-label">Project content</label>
          <textarea class="form-control" id="content" name="content" rows="3">{{ old('content',$project->content) }}</textarea>
        </div>
        <div class="mb-3">
          <input type="submit" class="btn btn-primary " value="Edit Project">
        </div>
      </form>

      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      </div>
    </section>
@endsection
