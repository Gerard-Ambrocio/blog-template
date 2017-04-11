<!DOCTYPE html>
<html>
<head>
	<title>Display Articles</title>
</head>
<body>

<a href='{{url("articles/showAddForm")}}'><button>Add</button></a>

@foreach($articles as $key => $article)

		<p><a href='{{url("articles/$article->id")}}'>Article {{$article->id}}: {{$article->title}}</a></p)>
		<p>{{ $article->content}}</p><br>

@endforeach
</body>
</html>