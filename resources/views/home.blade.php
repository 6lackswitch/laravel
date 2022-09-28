@extends('layouts.app')

@section('content')
	<div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
					@foreach($posts as $post)
                    <div class="post-preview">
                        <a>
                            <h2 class="post-title">{{ $post->title }}</h2>
                            <h3 class="post-subtitle">{{ $post->body }}</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a>{{ $post->user->name }}</a>
                            <a>{{ $post->created_at }}</a>
                        </p>
                    </div>
                    <!-- Divider-->
                    <hr class="my-4" />
					@endforeach
				</div>
			</div>
</div>
@endsection