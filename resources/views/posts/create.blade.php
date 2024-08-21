<x-layout meta-title="Nuevo Post" meta-description="crear un nuevo Post">
    <h1>Crear Post</h1>
{{-- //manera de mostar los erorres --}}
    {{-- @foreach ($errors->all() as $error)
        <p>{{$error}}</p>    
    @endforeach --}}
    
    <form method="POST" action="{{route('posts.store')}}">
        @csrf
        <label for="">
            {{__('title')}}:
            <input type="text" name="title" id="" value="{{old('title')}}">
            
            @error('title')
            <br>
                <small style="color:red">{{$message}}</small>
            @enderror
        </label><br>
        <label for="">
            {{__('body')}}: <br>
            <textarea name="body" id="" cols="30" rows="10" value="{{old('body')}}"></textarea>
             
            @error('body')
            <br>
            <small style="color:red">{{$message}}</small>
        @enderror
        </label><br>
        <button type="submit">Enviar</button> 
        
    </form><br>
    <a href="{{route('posts.index')}}">Volver</a>
</x-layout>