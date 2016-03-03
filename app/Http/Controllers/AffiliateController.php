<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Requests;
use App\User;
use Cookie;

class AffiliateController extends Controller
{
	public function index()
	{
		return redirect('/');
	}

	/**
	 * 
	 */
    public function affiliate($username)
    {
        $this->QueueCookieIfUserExists($username);

        return redirect('/');
    }

    public function signup($username)
    {
    	$this->QueueCookieIfUserExists($username);

    	return redirect('/register');
    }

    private function QueueCookieIfUserExists($username)
    {
    	$user = User::where('username', $username)->first();
        if ($user) {
            Cookie::queue('enroller_user_id', $user->id, 60);
        }
    }
}
