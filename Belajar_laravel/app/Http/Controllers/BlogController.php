<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Blog;


class BlogController extends BaseController
{
  

	public function index()
	{
	// 	return view('blog.home')->with([
	// 		'blogs'=>Blog::pagination(5),
	// 		]);
	// }

		

		// Blog::create([
		// 	'title' => 'Halow Bekasi',
		// 	'description' => 'Selamat datang dikota Bekasi',
		// 	'created_at' =>'1231-123-1231',
		// 	'update_at' =>'1231-123-1231',
		// ]);

		// update
		// $blog =Blog::where('title', 'Selamat makan')->first();
		// $blog->title ='Hallow Bandung';
		// $blog->save();
				
		// update mass assigment
		// Blog::find(4)->update([
		// 	'title' =>'Hallow Lampung'
		// 	'description' => 'Selamat datang dikota lampung'
		// ]);


		// delete
		// $blog = Blog::find(1);
		// $blog->delete();

		// delete cara kedua
		// Blog::destroy(3);



	// $blogs =Blog::all();
	// dd($blogs);

	
	

	// {
		// $nilai = 'ini nilainya'. $id;
		// $users = DB::table('user')-> where('username','like', '%a')->get();

		// insert
		// $users = DB::table('user')->insert([
		// ['username'=>'Dita', 'password' =>'5551']
		// ]);					
		// 	

		// update
		// DB::table('user')->where('username','novi')
		// 				->update([
		// 	'username'=>'Novi'
		// ]);
		// $users = DB::table('user')->get();

		// delete
		// DB::table('user')->where('id','>',5)->delete();			
		// $users = DB::table('user')->get();

		//soft deletes
		// $blog =Blog::find(6);
		// $blog->delete();

	//return soft delete
	// $blog =	Blog::find($5);
	// $blog->withTranshed()->restore();

	$blogs =Blog::all();
	 $blogs = DB::table('blogs')->paginate(5);
	 return view('blog/home',['blogs' =>$blogs]);
	}


	public function show($id)
	{


		$blog =	Blog::find($id);

		if (!$blog)abort(404);


	 return view('blog/single', ['blog' =>$blog]);
	}


	public function create()
	{
	return view('blog/create');
	}

	public function store(Request $request)
	{
		$request->validate( [
			'title' =>'required|min:5',
			'description' =>'required|min:10|max:50'
			]);
		// insert biasa
		$blog = new Blog;
		$blog->title = $request->title;
		$blog->description = $request->description;
		$blog->save();


		return redirect('/blog');

	}

	public function edit($id)
	{

		$blog =	Blog::find($id);

		if (!$blog) abort(404);


	 return view('blog/edit', ['blog' =>$blog]);

	}

	public function update(Request $request, $id)
	{
		$blog = Blog::find($id);
		$blog->title 		= $request->title;
		$blog->description	= $request->description;
		$blog->save();
		
		return view('blog/single', ['blog' =>$blog]);
	}
	public function destroy($id)
	{
		$blog = Blog::find($id);
		$blog->delete();

		return redirect('blog');

	}
	
}
?>