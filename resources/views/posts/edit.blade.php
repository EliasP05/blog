<x-layout meta-title="Editar Post" meta-description="Editar Post">
    <h1>Editar Post</h1>
    <form action="{{route('posts.update',$post)}}" method="post">
        @csrf @method('PATCH')
        <label for="title">
            {{__('title')}}:<input type="text" name="title" id="title" value="{{old('title',$post->title)}}">
        </label>
        @error('title')
        @enderror
        <br>
        <label for="body">
            {{__('body')}}: <br> <textarea name="body" id="" cols="30" rows="10">{{old('body',$post->body)}}</textarea>
        </label>
        @error('body')
        @enderror
        <br>
        <button type="submit">{{__('Edit')}}</button>
    </form>
</x-layout>