<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed user_id
 */
class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        return ('/storage/' . (($this->image) ? $this->image : 'profile/blank.png'));
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
