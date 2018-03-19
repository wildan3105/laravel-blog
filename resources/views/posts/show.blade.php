@extends ('layouts.master')

@section ('content')


<div class="col-sm-8 blog-main">
	<h1>
		{{ $post->title }}
	</h1>
	<p class="blog-post-meta">
		{{ $post->created_at->toFormattedDateString() }}
	</p>
	 {{$post->body}}

	 <hr>

	 <div class="comments">
	 	<ul class="list-group">
	 		@foreach ($post->comments as $comment)
	 		<li class="list-group-item">
	 			<strong>
	 				{{ $comment->created_at->diffForHumans()}}
	 			</strong>
	 			&emsp;
			 	{{$comment->body}}
	 		</li>
	 		@endforeach	
	 	</ul>
	 </div>

	 <br><br> 
	 <p>
	 	<a href="../../">Back to all posts</a>
	 </p>
</div>

@endsection
