@component('mail::message')
# Уведомление

Уважаемый {{$post->user->name}}, ваш пост был опубликован.

Тэги:
@foreach($post->tags as $tag)
{{$tag->name}} 
@endforeach

{{date('Y-m-d H:i:s')}}

Спасибо,<br>
{{ config('app.name') }}
@endcomponent
