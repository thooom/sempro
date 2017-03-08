@extends('auth.authlayout')

@section('content')

<h1 class="jumbotron-heading">Add a new category</h1>
<hr>
<form method="POST" action="categories/delete">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="old_category_id">Category to delete</label>
    <select name="old_category_id" class="form-control" id="old_category_id">
    @foreach($categories as $cat)
        <option value="{{$cat->id}}">{{$cat->name}}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="new_category_id">Move videos to category</label>
    <select name="new_category_id" class="form-control" id="new_category_id">
    @foreach($categories as $cat)
        <option value="{{$cat->id}}">{{$cat->name}}</option>
    @endforeach
    </select>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-default">Delete Category</button>
  </div>
</form>
@include('layout.errors')
<li>
<a href="home">Back to dashboard</a>
</li>

@endsection