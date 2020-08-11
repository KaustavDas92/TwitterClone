<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Builder;
class Tweet extends Model
{
    protected $guarded=[];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function like(User $user=null,$liked=true)
    {
        $this->likes()->updateOrCreate(
            ['user_id' => $user? $user->id:auth()->id],
            ['liked'=>$liked]);
    }
    function dislike(User $user)
    {
        return $this->like($user,false);
    }
    function likes()
    {
        return $this->hasMany(Like::class);
    }
    function isLikedBy(User $user)
    {
        // this method has a problem that is
        // if the post has a million likes then it will go through all million of them and this will happen
        // for all the posts so the page will be very slow.

        return $this->likes()->where('user_id',$user->id)->where('liked',true)->exists();

//        return (bool) $user->likes
//            ->where('tweet_id',$this->id)
//            ->where('liked',true)
//            ->count();

    }
    function isDisLikedBy(User $user)
    {
        // this method has a problem that is
        // if the post has a million likes then it will go through all million of them and this will happen
        // for all the posts so the page will be very slow.

        return $this->likes()->where('user_id',$user->id)->where('liked',false)->exists();

//        return (bool) $user->likes
//            ->where('tweet_id',$this->id)
//            ->where('liked',false)
//            ->count();

    }

    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'select tweet_id, sum(liked) Ulikes, sum(!liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }
}
