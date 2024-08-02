<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Team extends Model
{
    use HasFactory;

    public function association() : BelongsTo {
        return $this->belongsTo(Association::class);
    }

    public function players() : BelongsToMany {
        return $this->belongsToMany(Player::class);
    }
}
