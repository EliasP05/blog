<x-layout meta-title="Blog" meta-description="blog description">
    <h1>blog</h1>
    @foreach ($posts as $post )
    {{ $post['title'] }}    
    @endforeach
</x-layout>
    