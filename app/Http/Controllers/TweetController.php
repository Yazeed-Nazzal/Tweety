<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('pages.home',['tweets'=>auth()->user()->timeline()]);
    }

    public function store() {
        $attr = \request()->validate(['body' => 'required|max:255' ]);
        Tweet::create([
            'user_id' =>auth()->user()->id,
            'body' => $attr['body']
        ]);
        return redirect('/tweets');
    }

}
