<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h3>{{$article->title}}</h3>
<p>{{$article->content}}</p>

<a href='{{url("articles/{$article->id}/showEditForm")}}'><button>Edit</button></a>
<a href='{{url("articles/{$article->id}/delete")}}'><button>Delete</button></a><br>

@foreach($article->comments as $comment)
<p>{{ $comment->content }}</p>
@endforeach

<form method="POST" action='{{url("articles/$article->id/createComment")}}'>
	{{ csrf_field() }}
	<textarea name="content"></textarea><br>
	<input type="submit" value="Add Comment"></input>
</form>

</body>
</html>