	@extends('layouts.master')

@section('title','Blog sekolah koding')

@section('content')
	<!-- @if(count($errors) > 0)
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }} </li>
		@endforeach
	</ul>
	@endif -->
	
	
	
	
		<h1 >FORM INPUT DATA</h1>
		<P>Title </p>
		<form action="{{ route('store_blog')}}" method="post">
			<input type="text" name="title" value="{{old('title')}}"><br>
			@if($errors->has('title'))
				<p>{{ $errors->first('title')}}</p>
			@endif
			<p>Description</P>
			<textarea name="description" rows="8" cols="80">{{old('title')}}</textarea> <br>
			@if($errors->has('description'))
				<p>{{ $errors->first('description')}}</p>
			@endif
			<input type="submit" name="submit" value="create">
			{{ csrf_field() }}

			<br><br>
		</form>
 
	</div>

	
@endsection
	