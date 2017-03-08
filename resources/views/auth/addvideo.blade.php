@extends('auth.authlayout')

@section('content')

<h1 class="jumbotron-heading">Add a new video</h1>
<hr>
<form method="POST" action="videos">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="video_title">Video Title</label>
    <input type="text" class="form-control" id="video_title" name="video_title">
  </div>
  <div class="form-group">
    <label for="video_link">Video Link (YouTube reference)</label>
    <input type="text" class="form-control" id="video_link" name="video_link">
  </div>
  <div class="form-group">
    <label for="video_description">Video Description</label>
    <textarea id="video_description" name="video_description" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="video_category">Video Category</label>
    <select name="video_category" class="form-control" id="video_category">
    @foreach($categories as $cat)
        <option value="{{$cat->id}}">{{$cat->name}}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-default">Add Video</button>
  </div>
</form>
@include('layout.errors')
<li>
<a href="home">Back to dashboard</a>
</li>

@endsection