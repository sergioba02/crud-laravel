<x-blog-layout meta-title="Blog Title" meta-description="Blog description">

    <h1>Blog</h1>
    @auth
    <a href="{{route('posts.create')}}">Create post</a>
    @endauth
    
    @foreach ($posts as $post)
        <div style="display: flex; align-items: baseline">
        <h2>
            <a href="{{route('posts.show', $post->id)}}">
                {{$post->title}}</a>
            </h2> &nbsp;
            @auth
            <a href="{{route('posts.edit', $post)}}">Edit</a>
            <form action="{{route('posts.destroy', $post)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            @endauth
            
        </div>
            
    @endforeach 
</x-blog-layout>
