@extends('layouts.master')



@section('content')

<div class="col-sm-8 blog-main">  

<h1>Publish a Post</h1>

<hr>

<form method="POST" action="/posts">

	{{ csrf_field() }}
	<div class="form-group">
		<label for="title">Title:</label>
		<input type="title" class="form-control" id="title" name="title">
	</div>

	<div class="form-group">
		<label for="exampleInputPassword1">body</label>
		<textarea id="body" name="body" class="form-control"></textarea>
	</div>
	
	<button type="submit" class="btn btn-primary">Publish</button>

@include('layouts.errors')

</form>
</div>
@endsection