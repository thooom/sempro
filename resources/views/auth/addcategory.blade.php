@extends('auth.authlayout')

@section('content')

<h1 class="jumbotron-heading">Add a new category</h1>
<hr>
<form method="POST" action="categories">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="category_title">Category Title</label>
    <input type="text" class="form-control" id="category_title" name="category_title">
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-default">Add Category</button>
  </div>
</form>
@include('layout.errors')
<li>
<a href="home">Back to dashboard</a>
</li>

@endsection