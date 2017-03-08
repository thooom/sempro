@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                <li>
                    <a href="/addvideo">Add a new video</a>
                </li>
                <li>
                    <a href="/featurevideo">Change a highlighted video</a>
                </li>
                <li>
                    <a href="/addcategory">Add a new category</a>
                </li>
                <li>
                    <a href="/renamecategory">Rename a category</a>
                </li>
                <li>
                    <a href="/deletecategory">Delete a category</a>
                </li>
                <li>
                    <a href="/">Back to front page</a>
                </li>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
