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
                <a href="{{route('posts.edit',$post)}}">edit</a>
            </li>
        @endforeach 
    </ul>
</x-layout>