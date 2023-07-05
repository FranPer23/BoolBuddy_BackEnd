<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'address', 'city', 'photo', 'mobile', 'phone', 'cv', 'field', 'service', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vote()
    {
        return $this->hasMany(Vote::class);
    }

    public function message()
    {
        return $this->hasMany(Message::class);
    }

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function subscription()
    {
        return $this->belongsToMany(Subscription::class);
    }
    public function technology()
    {
        return $this->belongsToMany(Technology::class);
    }
}
