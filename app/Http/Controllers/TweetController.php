<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        return view('tweets.index',['tweets'=>auth()->user()->timeline()]);
    }
    function store()
    {
        $attribute=\request()->validate(['body'=>'required|max:255']);
        Tweet::create([
            'user_id'=>auth()->user()->id,
            'body'=>$attribute['body']
        ]);
        return redirect('/tweets');
    }
}
