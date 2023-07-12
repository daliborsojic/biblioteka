<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Knigi</h1>
	<ul>
		@foreach ($knigi as $kniga)
			<li><a href="http://localhost/biblioteka/public/book/{{$kniga->id}}">{{ $kniga->name }}</a></li>
		@endforeach
	</ul>


	<ul>
		@foreach ($knigi as $kniga)
			<li><a href="{{ route('kniga.prikazi', ['bookId' => $kniga->id]) }}">{{ $kniga->name }}</a></li>
		@endforeach
	</ul>

</body>
</html>