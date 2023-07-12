<h1>{{ $book->name }}</h1>
<h2>ISBN:{{ $book->isbn }}</h2>
<h2>Број на стране:{{ $book->pages}}</h2>

@if (count($book->pisatel) == 1)
	<h2>Автор: {{ $book->pisatel[0]->name }}</h2>
@else
	<h2>АфторИ:</h2>
	<ul>
		@foreach($book->pisatel as $pisatel)
			<li>{{ $pisatel->name }}</li>
		@endforeach
	</ul>
@endif


<a href="{{ route('kniga.lista') }}">Назад до сите књиги</a>