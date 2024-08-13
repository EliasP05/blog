<x-layout meta-title="Nuevo Post" meta-description="crear un nuevo Post">
    <h1>Crear Post</h1>
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <label for="">
            Title 
            <input type="text" name="title" id="">
        </label><br>
        <label for="">
            Body <br>
            <textarea name="body" id="" cols="30" rows="10"></textarea>
        </label><br>
        <button type="submit">Enviar</button> 
        
    </form><br>
    <a href="{{route('posts.index')}}">Volver</a>
</x-layout>