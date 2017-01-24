<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Models\User;
use App\Http\Models\Post;

class StatusController extends Controller
{
	public function postStatus(Request $request);
}

