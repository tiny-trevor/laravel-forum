<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    /**
     * Make all values mass assignable
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Values to append to the model
     * @var string[]
     */
    protected $appends = ['path', 'author'];

    /**
     * Fetch path to the current thread
     *
     * @return string
     */
    public function path()
    {
        return '/threads/' . $this->id;
    }

    /**
     * Get Path Attribute for thread
     *
     * @return string
     */
    public function getPathAttribute()
    {
        return $this->path();
    }

    /**
     * A thread can have many replies
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }

    /**
     * A Reply belongs to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    /**
     * Get Attribute for owner
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getAuthorAttribute()
    {
        return $this->owner->name;
    }

    /**
     * Add a reply for a thread
     *
     * @param $reply
     */
    public function addReply($reply)
    {
        $this->replies()->create($reply);
    }
}
