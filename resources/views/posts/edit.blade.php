@extends('layouts.app')

@section('content')
<div class="container mt-5">

<form method="POST" action="{{route('posts.index')}}">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control" id="title" aria-describedby="emailHelp" value="{{$post['title']}}">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control">{{$post['description']}}</textarea>
    </div>
    <!-- <input type="hidden" name="hidden" value="{{ csrf_token() }}" > -->
        <!-- <input type="hidden" name="hidden" value="PUT" > -->

    <button type="submit" class="btn btn-success">Create</button>
  </form>

</div>

@endsection