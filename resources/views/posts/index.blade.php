<x-app-layout>
<h1>all posts</h1>

<ul>
    @foreach($posts as $post)
    <li>
    <h2>Title:{{$post->title}}</h2>
    <h2>Content:{{$post->content}}</h2>
        <div>
            <a href="{{route('posts.show', $post)}}">show</a>
            <a href="{{route('posts.edit', $post)}}">edit</a>
            <form action="{{route('posts.destroy', '$post')}}" method="POST">
                @csrf
                @method('DELETE')
                <!-- <input type="submit" value="delete"> -->
        <button type="submit">delete</button>
            </form>
        </div>
    </li>
    @endforeach
</ul>


</x-app-layout>