<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    /**
     * Values to append to the model
     *
     * @var string[]
     */
    protected $appends = ['created_when', 'author'];

    /**
     * Get the attribute for the created date in human readable format
     *
     * @return mixed
     */
    public function getCreatedWhenAttribute()
    {
        return $this->created_at->diffForHumans();
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
}
