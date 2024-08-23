<x-layout meta-title="Blog" meta-description="blog description">
    @if (session('status'))
        <div class="status">
            {{session('status')}}
        </div>
    @endif
    
    <h1>blog</h1>
    <a href="{{route('posts.create')}}">crear nuevo post</a>
    <ul>
        @foreach ($posts as $post )
            <li>
                <a href="{{route('posts.show',$post)}}">{{ $post->title }} </a>   
                &nbsp;
                <a href="{{route('posts.edit',$post)}}">{{__('Edit')}}</a>
                &nbsp;
                {{-- <a href="{{route('posts.delete',$post)}}">{{__('Delete')}}</a> NO FUNCNIONA MISMA RUTA QUE SHOW.--}}
                <form action="{{route('posts.delete',$post)}}" method="post">
                    @csrf 
                    @method('delete')
                    <button type="submit">{{__('Delete')}}</button>
                </form>
            </li>
        @endforeach 
    </ul>
</x-layout>