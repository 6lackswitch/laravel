@extends('layouts.app')

@section('title', 'Посты')

@section('content')
    <form action="{{route('posts.create')}}" method="GET">
        <button class="btn btn-primary" type="submit">Создать пост</button>
    </form>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Имя пользователя</th>
                <th>Заголовок</th>
                <th>Пост</th>
            </tr>
        </thead>
    @foreach($posts as $post)
    
    <tr>
        <td>{{$post->user->name}}<br></td>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}<br></td>
        <td><form action="{{route('posts.show', $post->id)}}" method="GET">
        <button class="btn btn-primary" type="submit">Инфо</button>
		</form>
    </td>
        <td><form action="{{route('posts.destroy', $post->id)}}" method="POST">
				@csrf
				@method('DELETE')
				<button class="btn btn-primary" type="submit">Удалить</button>
			</form>
        </td>
    </tr>
    
    @endforeach
    </table>
@endsection