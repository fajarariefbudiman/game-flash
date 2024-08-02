<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Association extends Model
{
    use HasFactory;

    public function teams() : BelongsToMany {
        return $this->belongsToMany(Team::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($association) {
           if (empty($association->id)) {
                $association->id = mt_rand(100000,999999);
            }
        });
    }

}
