<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function players() : BelongsToMany {
        return $this->belongsToMany(Player::class)
        ->withPivot('gamertag','kit_number','position','console')
        ->withTimestamps();
    }

}
