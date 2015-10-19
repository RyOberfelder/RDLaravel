@extends('app')

@section('content')

<h1> Write new Post </h1>

{!! Form::open(['url' => 'posts']) !!}
<div class="post-form-subject">
  {!! Form::label('subject','Subject:') !!}
  {!! Form::text('subject') !!}
</div>
<div class="post-form-body">
  {!! Form::label('body','Body:') !!}
  {!! Form::textarea('body') !!}
</div>
{{!! Form::submit('Submit Post')!!}}
{!! Form::close() !!}


@stop
