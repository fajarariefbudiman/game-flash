<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Player extends Authenticatable
{
    use Notifiable;

    protected $table = 'players';

    protected $fillable = [
        'id',
        'username',
        'email',
        'firstname',
        'lastname',
        'birth_date',
        'nationality',
        'phone_number',
        'password',
        'community'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($player) {
            if (empty($player->id)) {
                $player->id = mt_rand(100000,999999);
            }
        });
    }

    public function team() : BelongsTo {
        return $this->belongsTo(Team::class);
    }

    public function gameInfos() : BelongsToMany {
        return $this->belongsToMany(Game::class)
        ->withPivot('gamertag','kit_number','position','console')
        ->withTimestamps();
    }
}

