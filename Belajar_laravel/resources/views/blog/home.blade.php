@extends('layouts.master')
@section('title','Blog sekolah koding')

@section('content')
	<h1  text align="center">Selamat Datang</h1>
	<p text align ="center">Assalamualikum Warahmatullahi wabarakatuh......</p>
	<p text align ="center">Be sure to have your pages set up with the latest design and development standards. That means using an HTML5 doctype and including a viewport meta tag for proper responsive behaviors. Put it all together and your pages should look like this</p>
	
	<hr>
	@foreach($blogs as $blog)
		<li><a href="blog/{{$blog->id}}"> {{$blog->title}}</a>

			<form action="{{ route('destroy_blog', $blog->id)}}" method="post">
				<input type="submit" name="submit" value="delete">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="delete">
		
			
				<!-- <input type="submit" name="submit" value="Update"> -->
				
				
				<a href="/Belajar_laravel/public/blog/{{$blog->id}}/edit" button type="button" class="btn btn-success">Update </a>
				
						<!-- <a href="{{ route('update_blog', $blog->id)}}"></a> -->
				</button> 
			
				{{ csrf_field() }}
			</form>

		</li>
	@endforeach
	{{ $blogs->links() }}

	
@endsection