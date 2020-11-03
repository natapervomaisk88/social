<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class FriendController extends Controller
{
    public function getIndex()
    {
        $friends = Auth::user()->getAllFriends();
        $requests = Auth::user()->friendRequest();
        return view('friends.index', [
            'friends'  => $friends,
            'requests' => $requests
        ]);
    }
}
