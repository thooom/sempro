@extends('auth.authlayout')

@section('content')

<h1 class="jumbotron-heading">Add a new category</h1>
<hr>
<form method="POST" action="categories/pickfeature">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="category_id">Category to pick feature video</label>
    <select name="category_id" class="form-control" id="category_id">
    @foreach($categories as $cat)
        <option value="{{$cat->id}}">{{$cat->name}}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-default">Browse Videos</button>
  </div>
</form>
@include('layout.errors')
<li>
<a href="home">Back to dashboard</a>
</li>

@endsection