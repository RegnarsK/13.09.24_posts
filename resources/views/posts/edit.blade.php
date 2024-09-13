<x-app-layout>
<h1>edit post</h1>
 <form action="{{ route('posts.update', $post) }}" method="post">
 @csrf
 @method('PUT')
    <label for="title">title:</label>
    <input type="text" id="title" name="title" value="{{$post->title}}">
    <br>
    <label for="content">Content:</label>
    <textarea name="content" id="content" >{{$post->content}}</textarea>
    <br>
    
    <input type="submit" value="create">
</form>
</x-app-layout>