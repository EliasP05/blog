<x-layout meta-title="Blog" meta-description="blog description">
    <h1>blog</h1>
    <a href="{{route('posts.create')}}">crear nuevo post</a>
    <ul>
        @foreach ($posts as $post )
            <li>
                <a href="{{route('posts.show',$post->id)}}">{{ $post->title }} </a>   
            </li>
        @endforeach 
    </ul>
</x-layout>