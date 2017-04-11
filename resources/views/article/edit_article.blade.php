<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action='{{url("articles/$article->id/edit")}}'>
		{{ csrf_field() }}
		Title: <input type="text" name="title" value="{{$article->title}}"><br>
		Content: <textarea name="content">{{$article->content}}</textarea> <br>
		<input type="submit"></input>
	</form>

</body>
</html>