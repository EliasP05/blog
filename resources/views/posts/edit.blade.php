<x-layout meta-title="Editar Post" meta-description="Editar Post">
    <h1>Editar Post</h1>

    <form method="POST" action="{{route('posts.update',$post)}}">
        @csrf 
        @method('PATCH')
        
            @include('posts.forms');

        <button type="submit">{{__('Edit')}}</button>
    </form> <br>
    <a href="{{route('posts.index')}}">Volver</a>
</x-layout>