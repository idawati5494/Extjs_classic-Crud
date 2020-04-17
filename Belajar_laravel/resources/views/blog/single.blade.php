	@extends('layouts.master')

@section('title','Blog sekolah koding')

@section('content')
	<h1 >Selamat Datang di web kami</h1>
	<hr>	
	<h3> {{ $blog->title }}</h3>
	<p> {{ $blog->description }}</p>

  
	
@endsection
