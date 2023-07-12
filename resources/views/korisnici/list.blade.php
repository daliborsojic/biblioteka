<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h1>Корисници на нашата бибљотека</h1>
	<ul>
		@foreach ($korisnici as $korisnik)
			<li>{{ $korisnik->firstName }} - {{ $korisnik->lastName }}</li>
		@endforeach
	</ul>

</body>
</html>