<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable ,followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username','status','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getAvatar($value) {
        return asset('storage\/').$value;
    }
    public  function timeline (){
       $ids = $this->follows()->pluck('id');
       $ids->push($this->id);
       return Tweet::whereIn('user_id',$ids)
           ->orWhere('user_id',$this->id)
           ->withLikes()
           ->latest()
           ->get();
    }
    public function setPasswordAttribute ($value) {
        $this->attributes['password'] = bcrypt($value);
    }


    public function tweet () {
        return $this->hasMany(Tweet::class)->latest();
    }
    public function likes() {
        return $this->hasMany(Like::class);
    }




}
