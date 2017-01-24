<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Models\User;
use App\Http\Models\Post;




class ProfileController extends Controller
{
	public function getProfile($username) 
	{
		$user = User::where('username', $username)->first();

		if (!$user) {
			abort(404);
		}
		



			$post = Post::where(function($query) 
			{
				return $query;

			}
			
			)->orderBy('created_at', 'desc')
			->get();


		return view ('profile.index')
			->with('user', $user)
			->with('post', $post);






		return view ('profile.index')
			->with('user', $user);
	}








	public function getEdit()
	{
		return view ('profile.edit');


	}

	public function postEdit(Request $request)
	{
		$this->validate($request,
			[
				'first_name' => 'alpha_dash|max:50',
				'last_name' => 'alpha_dash|max:50',
				'location' => 'max:20',
			]
		);

		Auth::user()->update([
			'first_name'=> $request->input('first_name'),
			'last_name'=> $request->input('last_name'),
			'location'=> $request->input('location'),


		]);

		return redirect()->route('profile.edit')->with('info', 'Your profile has been updated');


	}
}


