<?php

namespace App\Models;

use App\Models\Volunteer;
use App\Models\Organization;
use App\Models\Review;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'user_type',
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

    /**
     * Define the relationship with the Volunteer model.
     */
    public function volunteer()
    {
        return $this->hasOne(Volunteer::class);
    }

    /**
     * Define the relationship with the Organization model.
     */
    public function organization()
    {
        return $this->hasOne(Organization::class);
    }

    /**
     * Define the relationship with the Review model.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'reviewer_id');
    }
}
