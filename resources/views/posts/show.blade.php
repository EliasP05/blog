<x-layout :meta-title="$post->title" :meta-description="$post->body">
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <a href="{{route('posts.index')}}">Volver</a>
</x-layout>