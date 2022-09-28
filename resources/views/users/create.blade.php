@extends('layouts.app')

@section('title', 'Создание пользователя')
   
@section('content')

<form action="{{route('users.store')}}" method="POST">
		@csrf
		@method('POST')
	<div class="mb-3">
	<label for="exampleFormControlInput1" class="form-label">Имя</label>
	<input type="name" class="form-control" name="name" id="" placeholder="Габен Гомерович">
	</div>
	<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
	</div>
	<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Пароль</label>
  <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
  <button class="btn btn-primary" type="submit">Сохранить</button>
	</div>
	</form>
	@endsection