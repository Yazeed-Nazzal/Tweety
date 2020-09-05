<?php


namespace App;



trait Likeble
{

    public  function scopeWithLikes( $query) {
            $query->leftJoinSub(
                'SELECT tweet_id , SUM(liked) `likeo` , SUM(!liked) `dislikes` FROM likes GROUP BY tweet_id',
                'likes',
                'likes.tweet_id',
                'tweets.id'  );
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function isDislikedBy(User $user)
    {
        return (bool)$user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', false)
            ->count();
    }

    public function like($user = null)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->user()->id,
        ], [
            'liked' => true
        ]);
    }

    public function dislike($user = null)
    {
        $this->likes()->updateOrCreate([
            'user_id' => $user ? $user->id : auth()->user()->id,
        ], [
            'liked' => false
        ]);
    }

    public function isLikedBy(User $user)
    {
        return (bool)$user->likes
            ->where('tweet_id', $this->id)
            ->where('liked', true)
            ->count();

    }
}
