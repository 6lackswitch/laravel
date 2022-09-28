@extends('layouts.app')

   
@section('content')
<article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
						
					<img src="{{$post->getFirstMediaUrl('media')}}"/>
							<h2>{{$post->title}}</h2>
							<p>{{$post->body}}</p>
							<b>Автор: {{$post->user->name}}</b>
							<form action="{{route('posts.edit', $post->id)}}" method="GET">
								<button class="btn btn-primary" type="submit">Редактировать</button>
							</form>		
                    </div>
                </div>
            </div>
        </article>
@endsection