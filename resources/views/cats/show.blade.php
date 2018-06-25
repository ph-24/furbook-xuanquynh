@extends('layouts.master')

@section('header')
	<a href="{{ url('/') }}">Back to overview</a>
	<h2>{{ $cat->name }}</h2>
	<a href="{{ url('cats/'.$cat->id.'/edit') }}">
		<span class="glyphicon glyphicon-edit"></span>
		Edit
	</a>
	<form id="form_delete" action="/cats/{{$cat->id}}" method="POST">
		<input type="hidden" name="_method" value="DELETE">
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<a href="javascript:document.getElementById('form_delete').submit()">
				<span class="glyphicon glyphicon-trash"></span>
		Delete
		</a>
	</form>
	<p>Last edited: {{ $cat->updated_at->diffForHumans() }}</p>
@stop

@section('content')
	<p>Date of Birth: {{ $cat->date_of_birth}}</p>
	<p>
		@if ($cat->breed)
			Breed:
			{{ link_to('cats/breeds/'.$cat->breed->name, $cat->breed->name) }}
		@endif		
	</p>
@stop