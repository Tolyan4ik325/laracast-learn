@extends('layout')


@section('content')
	
	<h1 class="title">Create a new Project</h1>	

	<form method="POST" action="/projects">

			{{ csrf_field() }}

			<div class="field">
				<label for="title" class="label">Title</label>

				<div class="control">
					<input type="text" class="input {{ $errors->has('title') ? 'is-danger' : ''}}" name="title" placeholder="Project title" value="{{ old('title')}}">
				</div>
			</div>
			
			<div class="field">
				<label for="description" class="label">Description</label>

				<div class="control">
					<textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : ''}}" placeholder="Project description"></textarea>
				</div>
			</div>

			<div class="field">
				<div class="control">
					<button type="submit" class="button is-link">Create project</button>
				</div>
			</div>
			
			@if( $errors->any())
			<div class="notification is-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>	
			@endif
		</form>

@endsection