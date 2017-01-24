<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Models\User;
use App\Http\Models\Post;

class HomeController extends Controller
{
	public function index() {
		


			$post = Post::where(function($query) 
			{
				return $query;

			}
			
			)->orderBy('created_at', 'desc')
			->get();


			return view ('home')
			->with('post', $post);





		return view ('home');
	}
}


