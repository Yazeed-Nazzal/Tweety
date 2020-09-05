<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class ProfileController extends Controller
{
    public function show(User $user) {

        $tweets = $user->tweet()->withLikes()->paginate(19);
        return view('pages.Profile.profile',compact('user','tweets')) ;
    }
    public function edit(User $user){
//        $this->authorize('edit',$user); aother way to to use police like us use it in route
        return view('pages.Profile.Edit_Profile',compact('user'));
    }
    public function update(User $user) {

      $attr =  \request()->validate([
            'name'=>'required|string|max:255',
            'email'=>'required|string|max:255|email',
            'avatar'=>'file',
            'status' =>'max:255',
            'password'=>'required|string|max:255|min:8|confirmed'
        ]);
      if (\request('avatar')){
          $attr['avatar'] = \request('avatar')->store('avatars');
      }
      $user->update($attr);
      return redirect('/profile/'.auth()->user()->username);

    }
}
