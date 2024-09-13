<x-app-layout>
<h1>Title:{{$post->title}}</h1>
<p>Content:{{$post->content}}</p>

<a href="{{route('posts.coment', $post)}}">add coment</a>

<p>Coment:{{$post->coment}}</p>
</x-app-layout>