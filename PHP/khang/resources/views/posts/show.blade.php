<h1>{{$post->id}}</h1>
<h1>{{$post->title}}</h1>
<h3>{{$post->description}}</h3>
<p>{{$post->content}}</p>

{{str_slug($post->title)}}
{{route('posts.show',$post->id)}} <br>
{{route('posts.show',$post->title)}}


