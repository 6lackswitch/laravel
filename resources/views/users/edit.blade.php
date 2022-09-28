@extends('layouts.app')

@section('title', 'Обновление пользователя')
   
@section('content')
@can('update', $user)
	<form action="{{route('users.update', $user->id)}}" method="POST">
		@csrf
		@method('PUT')

	<div class="mb-3">
	<label for="exampleFormControlInput1" class="form-label">Имя</label>
	<input type="name" class="form-control" name="name" id="" value="{{$user->name}}">
	</div>
	<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control" name="email" id="exampleFormControlInput1" value="{{$user->email}}">
	</div>
	<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Пароль</label>
  <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
  <button class="btn btn-primary" type="submit">Сохранить</button>
	</div>
	</form>
	@endcan
@endsection