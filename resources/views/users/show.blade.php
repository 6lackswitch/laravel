@extends('layouts.app')
   
@section('content')
	<a href="{{route('users.edit', $user->id)}}">Редактировать</a>
	<p><b>Username:</b> {{$user->name}}</p>
	<p><b>Email:</b> {{$user->email}}</p>
	
@endsection