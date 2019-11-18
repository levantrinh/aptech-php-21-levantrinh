<table>
<thead>
<tr>
    <td>id</td>
    <td>title</td>
    <td>desciption</td>
    <td>content</td>
    <td>Action</td>
</tr>
</thead>
<tbody>
@foreach ($posts as $post)
<tr>
    <td>{{$post ->id}}</td>
    <td>{{$post->title}}</td>
    <td>{{$post->description}}</td>
    <td>{{$post->content}}</td>
    <td>
    <form action="{{route('posts.show', $post->id)}}" method="GET">
    <button type="submit">View</button>
    </form>

    <form action="{{route('posts.edit', $post->id)}}" method="GET">
    <button type="submit">Edit</button>
    </form>

    <form action="{{route('posts.destroy', $post->id)}}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Delete</button>
    </form>
    </td>
</tr>
@endforeach
</tbody>
</table>