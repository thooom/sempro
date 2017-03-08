@extends('layout')

@section('content')
	<section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">
          
          {{ $category->name }}

        </h1>

        @if($feature_video != null)
        <h2 class="jumbotron-heading">{{ $feature_video[0]->title }}</h2>
        <p class="lead text-muted">{{ $feature_video[0]->description }}</p>
        <center>
          <div class="media-body">  
          <iframe src="https://www.youtube.com/embed/{{$feature_video[0]->yt_code}}?ecver=1" frameborder="0" allowfullscreen></iframe>
          </div>
        </center>
        @endif
      </div>
      @foreach ($categories as $cat)
        <a href="/categories/{{$cat->id}}" class="btn btn-primary">{{$cat->name}}</a>
      @endforeach
    </section>

    <div class="album text-muted">
      <div class="container">

        <div class="row">
          @foreach ($videos as $vid)
            @include ('categories.videobox')
          @endforeach
        </div>

        {{ $videos->links() }}

      </div>
    </div>
@endsection