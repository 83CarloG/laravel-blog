<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Post
 */
class Post extends Model
{
    protected $guarded = [];

    /**
     * user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Relazione many to many
     *
     * tags
     *
     * @return void
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
