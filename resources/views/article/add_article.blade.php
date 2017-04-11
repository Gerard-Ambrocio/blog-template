<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action='{{url("articles/create")}}'>
		{{ csrf_field() }}
		Title: <input type="text" name="title"><br>
		Content: <textarea name="content"></textarea> <br>
		<input type="submit"></input>
	</form>

</body>
</html>