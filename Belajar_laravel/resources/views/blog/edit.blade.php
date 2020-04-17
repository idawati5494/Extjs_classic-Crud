	@extends('layouts.master')

@section('title','Blog sekolah koding')

@section('content')
	<h1 >Selamat Datang di web Edit</h1>
	<br>
	<form action="{{ route('update_blog', $blog->id)}}" method="post">
		<input type="text" name="title" value="{{ $blog->title}}"> <br>
		<textarea name="description" rows="8" cols="40">{{ $blog->description }}</textarea> <br>
		<input type="submit" name="submit" value="edit">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="put">

	</form>
  
	
@endsection
	