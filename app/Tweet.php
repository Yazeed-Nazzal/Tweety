<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Tweet extends Model
{
    use Likeble;
    protected $guarded = [];
    public function user() {
        return $this->belongsTo(User::class);
    }

}
