@extends('auth.authlayout')

@section('content')

<h1 class="jumbotron-heading">Add a new category</h1>
<hr>
<form method="POST" action="/categories/pickfeaturevideo">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="video_id">Move videos to category</label>
    <select name="video_id" class="form-control" id="video_id">
    @foreach($videos as $vid)
        <option value="{{$vid->id}}">{{$vid->title}}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-default">Choose Video</button>
  </div>
</form>
@include('layout.errors')
<li>
<a href="home">Back to dashboard</a>
</li>

@endsection