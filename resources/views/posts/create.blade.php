@extends('layouts.app')

@section('title', 'Создание поста')
   
@section('content')
@can('create', App\Models\Post::class)
	<form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
		@csrf
		@method('POST')
		
	<div class="col-auto">
	<label for="user_id" class="form-label">Пользователь</label>
	<select class="form-select" aria-label="Default select example" name="user_id">
		@foreach($users as $user)
		<option value="{{$user->id}}">{{$user->name}}</option>
		@endforeach
	</select>
	</div>
	<div class="col-auto mb-3">
		<label for="exampleFormControlInput1" class="form-label">Заголовок</label>
	  	<input type="text" class="form-control" name="title"  placeholder="" value="{{old('title')}}">
	</div>
	<div class="col-auto mb-3">
		<label for="exampleFormControlTextarea1" class="form-label">Пост</label>
		<textarea class="form-control" name="body" rows="6">{{old('body')}}</textarea>
	</div>
<div class="col-auto mb-3">
  <label for="exampleFormControlInput1" class="form-label">Изображение</label>
  <input type="file" class="form-control" name="file"  placeholder="">
</div>
	<div class="col-auto">
		<button class="btn btn-primary" type="submit">Создать</button>
	</div>
	</form>
	@endcan
@endsection