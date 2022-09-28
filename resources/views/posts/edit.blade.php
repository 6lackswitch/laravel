@extends('layouts.app')

@section('title', 'Редактирование поста')
   
@section('content')
@can('update', $post)
	<form action="{{route('posts.update', $post->id)}}" method="POST">
		@csrf
		@method('PUT')

    <div class="col-auto">
    <label for="user_id" class="form-label">Пользователь</label>
    <select  disabled class="form-select" aria-label="Default select example" name="user_id">
		@foreach($users as $user)
		  <option value="{{$user->id}}" @if($post->user->id == $user->id) selected @endif>{{$user->name}}</option>
		@endforeach
	</select>
    </div>
  <div class="col-auto mb-3">
    <label  class="form-label">Заголовок</label>
    <input type="text" class="form-control" name="title" value="{{$post->title}}">
    <label  class="form-label">Пост</label>
    <textarea type="text" class="form-control mb-3" name="body" rows="5">{{$post->body}}</textarea>
    <select class="form-select" aria-label="Default select example" name="is_published">
      <option value="0">Не публиковать</option>	  
      <option value="1" @if($post->is_published) selected @endif>Опубликовать</option>
    </select>
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Сохранить изменения</button>
  </div>
	</form>
  @endcan
@endsection
