<x-layout meta-title="Nuevo Post" meta-description="crear un nuevo Post">
    <h1>Crear Post</h1>
{{-- //manera de mostar los erorres --}}
    {{-- @foreach ($errors->all() as $error)
        <p>{{$error}}</p>    
    @endforeach --}}
    
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
          @include('posts.forms')
        <button type="submit">{{__('Send')}}</button> 
        
    </form><br>
    <a href="{{route('posts.index')}}">Volver</a>
</x-layout>