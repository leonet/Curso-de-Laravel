{{ Form::open(array('url' => 'posts/' . $post->id, 'method' => 'put')) }}
{{ Form::text('title', $post->title) }}<br />
{{ Form::textArea('content', $post->content) }}<br />
{{ Form::submit('Guardar') }}
{{ Form::close() }}