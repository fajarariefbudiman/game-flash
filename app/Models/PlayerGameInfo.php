<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlayerGameInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'player_id',
        'game_id',
        'gamertag',
        'kit_number',
        'position',
        'console'
    ];
}
