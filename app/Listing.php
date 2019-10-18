<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'name', 'address', 'images', 'description', 'services', 'phone', 'website', 'email', 'facebook', 'twitter', 'instagram', 'agree_terms', 'is_verified', 'user_id'
    ];
    //Relationships
    public function user()
    {
        return $this->belongsTo('App/User');
    }
}
