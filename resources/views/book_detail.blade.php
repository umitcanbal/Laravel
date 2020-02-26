<h3>{{ $book->title }}</h3>
{{ json_encode($book) }}
<img src="{{ $book->image }}" alt="{{ $book->title }}">