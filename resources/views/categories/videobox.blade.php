<div class="card">
<iframe src="https://www.youtube.com/embed/{{ $vid->yt_code }}?ecver=1" frameborder="0" allowfullscreen></iframe>
<p class="card-text">
<h2 class="jumbotron-heading">{{$vid->title}}</h2>

 {{ $vid->description }} </p>

 <a href="/video_edit/{{$vid->id}}">Edit video</a><a href="/video_delete/{{$vid->id}}">Delete video</a>
</div>