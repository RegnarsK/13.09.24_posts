<x-app-layout>
<form action="{{ route('posts.show') }}" method="post">
 @csrf
    
    <label for="coment">Content:</label>
    <textarea name="coment" id="coment" ></textarea>
    <br>
    
    <input type="submit" value="create">
</form>
</x-app-layout>