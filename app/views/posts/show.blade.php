<a href="/posts/{{ $post->id }}/edit">Editar</a>
{{ Form::open(array('url' => 'posts/' . $post->id, 'method' => 'delete')) }}
{{ Form::submit('Eliminar') }}
{{ Form::close() }}
<h1>{{ $post->title }}</h1>
<p>{{ $post->content }}</p>