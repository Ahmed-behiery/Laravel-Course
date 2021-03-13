@extends('layouts.app')

@section('content')

  <div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">{{$post['id']}}</li>
    <li class="list-group-item">{{$post['title']}}</li>
    <li class="list-group-item">{{$post['description']}}</li>
    <li class="list-group-item">{{$post['posted_by']}}</li>
    <li class="list-group-item">{{$post['created_at']}}</li>
  </ul>
</div>

@endsection
